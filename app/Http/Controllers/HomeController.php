<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TuitionFeeOdd;
use App\Models\TuitionFeeEven;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tuitionFeeOdd = TuitionFeeOdd::all()->load(['studyProgram']);
        $tuitionFeeEven = TuitionFeeEven::all()->load(['studyProgram']);

        return view('welcome', compact('tuitionFeeOdd', 'tuitionFeeEven'));
    }
}