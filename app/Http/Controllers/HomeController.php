<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TuitionFeeOdd;
use App\Models\TuitionFeeEven;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tuitionFeeOdd = TuitionFeeOdd::all()->load(['studyProgram']);
        $tuitionFeeEven = TuitionFeeEven::all()->load(['studyProgram']);

        return view('home.welcome', compact('tuitionFeeOdd', 'tuitionFeeEven'));
    }

    public function download($file) {
        return response()->download(storage_path('app/public/itenas_doc/' . $file));
    }

    public function registrationGuides() {
        return view('home.regis-guides');
    }

    public function tuitionFee()
    {
        $tuitionFeeOdd = TuitionFeeOdd::all()->load(['studyProgram']);
        $tuitionFeeEven = TuitionFeeEven::all()->load(['studyProgram']);

        return view('home.tuition', compact('tuitionFeeOdd', 'tuitionFeeEven'));
    }

    public function timeline()
    {
        return view('home.timeline');
    }

    public function cahayaScholarship()
    {
        return view('cahaya_scholarship.index');
    }
}