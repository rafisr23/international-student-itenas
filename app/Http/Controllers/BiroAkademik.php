<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Models\InterviewSchedule;
use App\Mail\InterviewInformation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
        // return $request;
        $validatedData = [
            'form_id' => 'required',
            'interview_date' => 'required',
            'interview_time' => 'required',
            'interview_room' => 'required',
        ];

        $request->validate($validatedData);

        $interview_time = date('H:i:s', strtotime($request->interview_time));

        $form = Form::find($request->form_id);
        $form->status = 'Interview';
        $form->save();

        // create interview schedule
        $interviewSchedule = InterviewSchedule::create([
            'form_id' => $form->id,
            'interview_date' => $request->interview_date,
            'interview_time' => $interview_time,
            'interview_room' => $request->interview_room,
        ]);

        // send email to student
        if ($form->student->user->email) {
            Mail::to($form->student->user->email)->send(new InterviewInformation($interviewSchedule));
        } else {
            return redirect()->route('ba.pendaftar.detail', $form->reg_number)->with('error', 'Gagal mengirim email');
        }

        return redirect()->route('ba.pendaftar.detail', $form->reg_number)->with('success', 'Berhasil membuat jadwal wawancara');
    }

    public function listWawancara(Request $request) {
        $forms = Form::with(['student', 'user', 'scholarship', 'studyProgram', 'interviewSchedule'])->where('status', 'Interview')->where('is_submitted', true)->get();
        foreach ($forms as $form) {
            $form->full_name = $form->student->first_name . ' ' . $form->student->last_name;
            $form->interviewSchedule->interview_date = date('d-m-Y', strtotime($form->interviewSchedule->interview_date));
            $form->interviewSchedule->interview_time = date('H:i', strtotime($form->interviewSchedule->interview_time));
        }

        // return $forms;

        if ($request->ajax()) {
            $data = $forms;
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){ 
                    // route btn to detail form
                    // $btn = '<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-default" class="edit btn btn-success"><i class="fa-solid fa-circle-check"></i></a>';
                    $btn = '<button type="button" class="btn btn-success btn-accept" id="btn-accept" data-bs-toggle="modal" data-bs-target="#modal-default" data-id="' . $row->reg_number .'"><i class="fa-solid fa-circle-check"></i></button>';
                    // $btn = '<a href="{{ route }}" class="edit btn btn-info"><i class="fa-regular fa-eye"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('biro_akademik.pendaftar.wawancara', compact('forms'));
    }

    public function accept(Request $request) {
        $form = Form::where('reg_number', $request->reg_number)->first();
        $form->status = 'Accepted';
        $form->save();

        // send email to student
        // if ($form->student->user->email) {
        //     Mail::to($form->student->user->email)->send(new AcceptanceInformation($form));
        // } else {
        //     return redirect()->route('ba.pendaftar.detail', $form->reg_number)->with('error', 'Gagal mengirim email');
        // }

        return redirect()->route('ba.pendaftar.detail', $form->reg_number)->with('success', 'Berhasil menerima pendaftar');
    }

    public function reject(Request $request) {
        $form = Form::where('reg_number', $request->reg_number)->first();
        $form->status = 'Rejected';
        $form->save();

        // send email to student
        // if ($form->student->user->email) {
        //     Mail::to($form->student->user->email)->send(new RejectionInformation($form));
        // } else {
        //     return redirect()->route('ba.pendaftar.detail', $form->reg_number)->with('error', 'Gagal mengirim email');
        // }

        return redirect()->route('ba.pendaftar.detail', $form->reg_number)->with('success', 'Berhasil menolak pendaftar');
    }
}