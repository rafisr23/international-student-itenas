<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class BiroAkademik extends Controller
{
    public function index() {
        $jmlPendaftar = Form::count();
        $jmlSubmit = Form::where('is_submitted', true)->count();
        $jmlPenerima = Form::where('is_submitted', true)->where('status', 'accepted')->count();

        return view('biro_akademik.home', compact(['jmlPendaftar', 'jmlSubmit', 'jmlPenerima']));
    }
}