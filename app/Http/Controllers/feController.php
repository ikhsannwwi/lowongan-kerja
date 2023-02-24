<?php

namespace App\Http\Controllers;

use App\Models\lowongan_kerja;
use Illuminate\Http\Request;

class feController extends Controller
{
    public function index(){
        $loker = lowongan_kerja::orderBy('tanggal','DESC')->limit(6)->get();

        return view('fe.home',compact('loker'));
    }
    public function lowongan_kerja(){


        return view('fe.lowongan-kerja');
    }
    public function kontak_kami(){


        return view('fe.kontak-kami');
    }
    public function prosedur_melamar(){


        return view('fe.prosedur-melamar');
    }
    public function prosedur_perusahaan(){


        return view('fe.prosedur-perusahaan');
    }
    public function tentang_kami(){


        return view('fe.tentang-kami');
    }
    public function berita(){


        return view('fe.berita');
    }
}
