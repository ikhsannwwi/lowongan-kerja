<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kategori_loker;
use App\Models\lowongan_kerja;
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
        $data = lowongan_kerja::orderBy('tanggal' ,'DESC');

        return view('admin.data.lowongan-kerja' ,compact('data'));
    }
    public function admin_berita(){
        return view('admin.data.berita');
    }
}
