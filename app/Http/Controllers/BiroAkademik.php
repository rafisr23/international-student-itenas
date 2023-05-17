<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use App\Models\ScholarshipAchievementList;

class BiroAkademik extends Controller
{
    public function index() {
        $jmlPendaftar = Form::count();
        $jmlSubmit = Form::where('is_submitted', true)->count();
        $jmlPenerima = Form::where('is_submitted', true)->where('status', 'accepted')->count();

        return view('biro_akademik.home', compact(['jmlPendaftar', 'jmlSubmit', 'jmlPenerima']));
    }

    public function pendaftar(Request $request) {
        $forms = Form::with(['student', 'user', 'scholarship', 'studyProgram'])->where('is_submitted', true)->get();
        // $forms = DB::table('forms')
        // ->join('students', 'forms.student_id', '=', 'students.id')
        // ->join('study_programs', 'forms.program_id', '=', 'study_programs.id')
        // ->join('users', 'students.user_id', '=', 'users.id')
        // ->join('scholarships', 'forms.scholarship_id', '=', 'scholarships.id')
        // ->join('faculties', 'study_programs.faculty_id', '=', 'faculties.id')
        // ->select('forms.*', 'students.*', 'study_programs.*', 'faculties.name as faculty', 'scholarships.name as scholarship')
        // ->where('is_submitted', true)
        // ->get();

        // get full name in forms
        foreach ($forms as $form) {
            $form->full_name = $form->student->first_name . ' ' . $form->student->last_name;
        }
        
        // return $forms;
        if ($request->ajax()) {
            $data = $forms;
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){ 
                    // route btn to detail form
                    $btn = '<a href="' . route('ba.pendaftar.detail', $row->reg_number) . '" class="edit btn btn-info"><i class="fa-regular fa-eye"></i></a>';
                    // $btn = '<a href="{{ route }}" class="edit btn btn-info"><i class="fa-regular fa-eye"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('biro_akademik.pendaftar.index', compact('forms'));
    }

    public function detailPendaftar(Form $form) {
        $form->load(['student', 'user', 'scholarship', 'studyProgram']);
        $form->full_name = $form->student->first_name . ' ' . $form->student->last_name;
        // return $form->student;
        $achievementLists = ScholarshipAchievementList::where('student_id', $form->student->id)->get();

        return view('biro_akademik.pendaftar.detail', compact(['form', 'achievementLists']));
    }

    public function download($request) {
        // get file from request
        $file = 'high_school_certif/Abdur%20Rafi-152020131_Abdur%20Rafi_UAS.pdf';
        $file = explode('/', $file);
        return $file;
    }

    public function wawancara(Request $request) {
        return $request;
    }
}