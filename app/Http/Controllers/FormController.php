<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Form;
use App\Models\Faculty;
use App\Models\Student;
use App\Models\Scholarship;
use Illuminate\Support\Str;
use App\Models\StudyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index() {
        if ($student = Student::where('user_id', Auth::user()->id)->first()) {
            // $form = Form::where('student_id', $student->id)->first();
            $form = DB::table('forms')
            ->join('students', 'forms.student_id', '=', 'students.id')
            ->join('users', 'students.user_id', '=', 'users.id')
            ->join('study_programs', 'forms.study_program_id', '=', 'study_programs.id')
            ->join('faculties', 'study_programs.faculty_id', '=', 'faculties.id')
            ->join('scholarships', 'forms.scholarship_id', '=', 'scholarships.id')
            ->select('forms.*', 'users.name', 'study_programs.name as program', 'faculties.name as faculty', 'faculties.id as faculty_id', 'scholarships.name as scholarship')
            ->where('forms.student_id', $student->id)
            ->first();
            if ($form) {
                if ($form->is_submitted) {
                    return redirect('/preview-data')->with('error', 'You have already submitted your application!');
                }
            }
        } else {
            $form = null;
            $student = null;
        }

        // return $form->study_program_id;

        $scholarships = Scholarship::all();
        $faculties = Faculty::all();
        $studyPrograms = StudyProgram::all();

        return view('dashboard.form', [
            'title' => 'Applicant Form',
            'user' => Auth::user(),
            'form' => $form,
            'student' => $student,
            'scholarships' => $scholarships,
            'faculties' => $faculties,
            'studyPrograms' => $studyPrograms,
        ]);
    }

    public function getProgram(Request $request) {
        $studyPrograms = StudyProgram::where('faculty_id', $request->faculty)->get();

        return response()->json($studyPrograms);
    }

    public function store(Request $request) {
        // return $request->all();
        $validatedData = [
            'high_school' => 'required',
            'grad_date' => 'required',
            'school_address' => 'required',
            'school_city' => 'required',
            'school_country' => 'required',
            'school_postal_code' => 'required',
            'program' => 'required',
            'scholarship' => 'required',
        ];

        if ($request->File('high_school_certif')) {
            $validatedData['high_school_certif'] = 'required|file|mimes:pdf';
        }

        if ($request->File('high_school_transcript')) {
            $validatedData['high_school_transcript'] = 'required|file|mimes:pdf';
        }

        if ($request->File('passport')) {
            $validatedData['passport'] = 'required|file|mimes:pdf';
        }

        if ($request->file('color_photo')) {
            $validatedData['color_photo'] = 'required|file|mimes:jpg,jpeg,png';
        }

        if ($request->has('financial_verify')) {
            $validatedData['financial_verify'] = 'required|file|mimes:pdf';
        }

        $request->validate($validatedData);

        $student = Student::where('user_id', Auth::user()->id)->first();
        Form::updateOrCreate([
            'student_id' => $student->id,
        ], [
            'high_school' => $request->high_school,
            'grad_date' => $request->grad_date,
            'school_address' => $request->school_address,
            'school_city' => $request->school_city,
            'school_country' => $request->school_country,
            'school_postal_code' => $request->school_postal_code,
            'study_program_id' => $request->program,
            'scholarship_id' => $request->scholarship,
        ]);

        $form = Form::where('student_id', $student->id)->first();

        if ($form->reg_number == null) {
            Form::where('student_id', $student->id)->update([
                'reg_number' => Str::random(10),
            ]);
        } else {
            Form::where('student_id', $student->id)->update([
                'reg_number' => $form->reg_number,
            ]);
        }

        if ($request->has('high_school_certif')) {
            $fileName = $form->reg_number . '-' . $request->file('high_school_certif')->getClientOriginalName();
            if ($form->high_school_certif) {
                Storage::delete($form->high_school_certif);
            }
            Form::where('student_id', $student->id)->update([
                'high_school_certif' => $request->file('high_school_certif')->storeAs('high_school_certif', $fileName),
            ]);
        }

        if ($request->has('high_school_transcript')) {
            $fileName = $form->reg_number . '-' . $request->file('high_school_transcript')->getClientOriginalName();
            if ($form->high_school_transcript) {
                Storage::delete($form->high_school_transcript);
            }
            Form::where('student_id', $student->id)->update([
                'high_school_transcript' => $request->file('high_school_transcript')->storeAs('high_school_transcript', $fileName),
            ]);
        }

        if ($request->has('passport')) {
            $fileName = $form->reg_number . '-' . $request->file('passport')->getClientOriginalName();
            if ($form->passport) {
                Storage::delete($form->passport);
            }
            Form::where('student_id', $student->id)->update([
                'passport' => $request->file('passport')->storeAs('passport', $fileName),
            ]);
        }

        if ($request->has('color_photo')) {
            $fileName = $form->reg_number . '-' . $request->file('color_photo')->getClientOriginalName();
            Form::where('student_id', $student->id)->update([
                'color_photo' => $request->file('color_photo')->storeAs('color_photo', $fileName),
            ]);
        }

        if ($request->has('financial_verify')) {
            $fileName = $form->reg_number . '-' . $request->file('financial_verify')->getClientOriginalName();
            if ($form->financial_verify) {
                Storage::delete($form->financial_verify);
            }
            Form::where('student_id', $student->id)->update([
                'financial_verify' => $request->file('financial_verify')->storeAs('financial_verify', $fileName),
            ]);
        }

        return redirect()->route('applicant-form')->with('success', 'Form submitted successfully');
    }

    public function preview() {
        if ($biodata = Student::where('user_id', Auth::user()->id)->first()) {
            // $form = Form::where('student_id', $biodata->id)->first();

            $form = DB::table('forms')
            ->join('students', 'forms.student_id', '=', 'students.id')
            ->join('study_programs', 'forms.study_program_id', '=', 'study_programs.id')
            ->join('faculties', 'study_programs.faculty_id', '=', 'faculties.id')
            ->join('scholarships', 'forms.scholarship_id', '=', 'scholarships.id')
            ->select('forms.*', 'study_programs.name as program_name', 'faculties.name as faculty_name', 'scholarships.name as scholarship_name')
            ->where('forms.student_id', $biodata->id)
            ->first();
        } else {
            $form = null;
            $color_photo = null;
        }

        return view('dashboard.preview', [
            'title' => 'Preview Form',
            'form' => $form,
            'biodata' => $biodata,
        ]);
    }

    public function submit() {
        $biodata = Student::where('user_id', Auth::user()->id)->first();
        $form = Form::where('student_id', $biodata->id)->first();

        if ($form->is_submitted) {
            return redirect()->route('preview-data')->with('error', 'Form already submitted');
        } else {
            $form->update([
                'is_submitted' => true,
            ]);
            return redirect()->route('preview-data')->with('success', 'Form submitted successfully');
        }
    }

    public function printCard() {
        // retreive all records from db
        $biodata = Student::where('user_id', Auth::user()->id)->first();
        $form = DB::table('forms')
        ->join('students', 'forms.student_id', '=', 'students.id')
        ->join('study_programs', 'forms.study_program_id', '=', 'study_programs.id')
        ->join('faculties', 'study_programs.faculty_id', '=', 'faculties.id')
        ->join('scholarships', 'forms.scholarship_id', '=', 'scholarships.id')
        ->select('forms.*', 'study_programs.name as program_name', 'faculties.name as faculty_name', 'scholarships.name as scholarship_name')
        ->where('forms.student_id', $biodata->id)
        ->first();
        
        
        $pdf = PDF::loadView('dashboard.preview-download', [
            'form' => $form,
            'biodata' => $biodata,
        ]);
        
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'defaul_paper_orientation' => 'landscape']);
        
        // download PDF file with download method
        return $pdf->stream('Applicant Card - ' . $form->reg_number . '.pdf');
    }
}