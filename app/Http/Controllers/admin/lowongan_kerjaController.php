<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\lowongan_kerja;
use Illuminate\Http\Request;

class lowongan_kerjaController extends Controller
{
    public function add_lowongan_kerja(){
        $data = lowongan_kerja::all();

        return view('admin.add.add-lowongan-kerja', compact('data'));
    }

    public function insert_lowongan_kerja(Request $request){
        $request->validate([
            'kategori' => 'required',
        ]);
        $data = lowongan_kerja::create($request->all());

        $data->save();

        return redirect()->route('admin_lowongan_kerja')->with('success','Data Berhasil Ditambahkan');
    }

    public function edit_lowongan_kerja($id){
        $data = lowongan_kerja::find($id);

        return view('admin.edit.edit-lowongan-kerja',compact('data'));
    }

    public function update_lowongan_kerja(Request $request,$id){
        $data = lowongan_kerja::find($id);

        $data->update($request->all());

        $data->save();

        return redirect()->route('admin_lowongan_kerja')->with('success','Data Berhasil DiUpdate');
    }

    public function delete_lowongan_kerja($id){
        $data = lowongan_kerja::find($id);

        $data->delete();

        return redirect()->route('admin_lowongan_kerja')->with('error','Data Berhasil Dihapus');
    }
}
