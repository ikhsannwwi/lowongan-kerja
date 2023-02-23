<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class beritaController extends Controller
{
    public function add_berita(){
        $data = berita::all();

        return view('admin.add.add-berita', compact('data'));
    }

    public function insert_berita(Request $request){
        $request->validate([
            'judul_berita' => 'required',
                'isi_berita' => 'required',
                'author' => 'required',
                'tanggal' => 'required',
                'slug' => 'required|unique:beritas',
                'foto' => 'required',
        ]);
        $data = berita::create($request->all());

        if ($request->hasFile('foto')) {
            $filename = Str::random(8) . '.' . $request->file('foto')->extension();
            $request->file('foto')->move('images/berita/',$filename);
            $data->foto = $filename;
            $data->save();
        }


        return redirect()->route('admin_berita')->with('success','Data Berhasil Ditambahkan');
    }

    public function edit_berita($id){
        $data = berita::find($id);


        return view('admin.edit.edit-berita',compact('data'));
    }

    public function update_berita(Request $request,$id){
        $data = berita::find($id);

        
            $request->validate([
                'judul_berita' => 'required',
                'isi_berita' => 'required',
                'author' => 'required',
                'tanggal' => 'required',
                'slug' => 'required|unique:beritas',
            ]);

        if($request->hasfile('foto')){
            if(File_exists(public_path('images/berita/'.$data->foto))){ //either you can use file path instead of $data->image
                unlink(public_path('images/berita/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }

        $data->update($request->all());

        if ($request->hasFile('foto')) {
            $filename = Str::random(8) . '.' . $request->file('foto')->extension();
            $request->file('foto')->move('images/berita/',$filename);
            $data->foto = $filename;
            $data->save();
        }

        return redirect()->route('admin_berita')->with('success','Data Berhasil DiUpdate');
    }

    public function delete_berita($id){
        $data = berita::find($id);

        if(File_exists(public_path('images/berita/'.$data->foto))){ //either you can use file path instead of $data->image
            unlink(public_path('images/berita/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        
        $data->delete();

        return redirect()->route('admin_berita')->with('error','Data Berhasil Dihapus');
    }
}
