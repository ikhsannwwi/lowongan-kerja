<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\berita;
use App\Models\kategori_loker;
use App\Models\lowongan_kerja;
use App\Models\User;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function admin_dashboard(){
        return view('admin.data.dashboard');
    }
    public function admin_kategori_loker(){
        $data = kategori_loker::all();

        return view('admin.data.kategori-loker',compact('data'));
    }
    public function admin_lowongan_kerja(){
        $data = lowongan_kerja::orderBy('tanggal' ,'DESC')->get();

        return view('admin.data.lowongan-kerja' ,compact('data'));
    }
    public function admin_berita(){
        $data = berita::orderBy('tanggal','DESC')->get();

        return view('admin.data.berita',compact('data'));
    }
    public function admin_user(){
        $data = User::all();

        return view('admin.data.user',compact('data'));
    }
}
