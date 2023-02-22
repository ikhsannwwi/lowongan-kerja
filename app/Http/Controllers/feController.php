<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class feController extends Controller
{
    public function index(){


        return view('fe.home');
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
