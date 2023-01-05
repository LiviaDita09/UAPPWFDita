<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function profil()
    {
        $profil=Dosen::all();
        $tittle="profil";
        return view('dosen.profil', compact('tittle', 'profil'));
    }

    public function ampu()
    {
        $profil=Dosen::all();
        $tittle="Data ampu";
        return view('dosen.ampu', compact('tittle', 'data_ampu'));
    }
}
