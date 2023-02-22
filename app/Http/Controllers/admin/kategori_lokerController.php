<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kategori_loker;
use Illuminate\Http\Request;

class kategori_lokerController extends Controller
{
    public function add_kategori_loker(){
        $data = kategori_loker::all();

        return view('admin.add.add-kategori-loker', compact('data'));
    }

    public function insert_kategori_loker(Request $request){
        $request->validate([
            'kategori' => 'required',
        ]);
        $data = kategori_loker::create($request->all());

        $data->save();

        return redirect()->route('admin_kategori_loker')->with('success','Data Berhasil Ditambahkan');
    }

    public function edit_kategori_loker($id){
        $data = kategori_loker::find($id);

        return view('admin.edit.edit-kategori-loker',compact('data'));
    }

    public function update_kategori_loker(Request $request,$id){
        $data = kategori_loker::find($id);

        $data->update($request->all());

        $data->save();

        return redirect()->route('admin_kategori_loker')->with('success','Data Berhasil DiUpdate');
    }

    public function delete_kategori_loker($id){
        $data = kategori_loker::find($id);

        $data->delete();

        return redirect()->route('admin_kategori_loker')->with('error','Data Berhasil Dihapus');
    }
}
