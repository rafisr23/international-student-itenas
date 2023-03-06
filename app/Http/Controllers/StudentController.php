<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function biodata() {
        return view('dashboard.biodata', [
            'title' => 'Biodata',
            'user' => Auth::user()
        ]);
    }
}