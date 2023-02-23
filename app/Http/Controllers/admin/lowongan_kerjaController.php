<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kategori_loker;
use App\Models\lowongan_kerja;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class lowongan_kerjaController extends Controller
{
    public function add_lowongan_kerja(){
        $data = lowongan_kerja::all();
        $kategori = kategori_loker::all();

        return view('admin.add.add-lowongan-kerja', compact('data','kategori'));
    }

    public function insert_lowongan_kerja(Request $request){
        $request->validate([
            'nama_perusahaan' => 'required',
            'email_perusahaan' => 'required|unique:lowongan_kerjas',
            'kualifikasi' => 'required',
            'kategori_id' => 'required',
            'foto' => 'required',
            'tanggal' => 'required',
        ]);
        $data = lowongan_kerja::create($request->all());

        if ($request->hasFile('foto')) {
            $filename = Str::random(8) . '.' . $request->file('foto')->extension();
            $request->file('foto')->move('images/lowongan-kerja/',$filename);
            $data->foto = $filename;
            $data->save();
        }


        return redirect()->route('admin_lowongan_kerja')->with('success','Data Berhasil Ditambahkan');
    }

    public function edit_lowongan_kerja($id){
        $data = lowongan_kerja::find($id);
        $kategori = kategori_loker::all();


        return view('admin.edit.edit-lowongan-kerja',compact('data','kategori'));
    }

    public function update_lowongan_kerja(Request $request,$id){
        $data = lowongan_kerja::find($id);

        if ($request->email_perusahaan == $data->email_perusahaan) {
            $request->validate([
                'nama_perusahaan' => 'required',
                'email_perusahaan' => 'required',
                'kualifikasi' => 'required',
                'kategori_id' => 'required',
                'tanggal' => 'required',
            ]);
        } else {
            $request->validate([
                'nama_perusahaan' => 'required',
                'email_perusahaan' => 'required|unique:lowongan_kerjas',
                'kualifikasi' => 'required',
                'kategori_id' => 'required',
                'tanggal' => 'required',
            ]);
        }

        if($request->hasfile('foto')){
            if(File_exists(public_path('images/lowongan-kerja/'.$data->foto))){ //either you can use file path instead of $data->image
                unlink(public_path('images/lowongan-kerja/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }

        $data->update($request->all());

        if ($request->hasFile('foto')) {
            $filename = Str::random(8) . '.' . $request->file('foto')->extension();
            $request->file('foto')->move('images/lowongan-kerja/',$filename);
            $data->foto = $filename;
            $data->save();
        }

        return redirect()->route('admin_lowongan_kerja')->with('success','Data Berhasil DiUpdate');
    }

    public function delete_lowongan_kerja($id){
        $data = lowongan_kerja::find($id);

        if(File_exists(public_path('images/lowongan-kerja/'.$data->foto))){ //either you can use file path instead of $data->image
            unlink(public_path('images/lowongan-kerja/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        
        $data->delete();

        return redirect()->route('admin_lowongan_kerja')->with('error','Data Berhasil Dihapus');
    }
}
