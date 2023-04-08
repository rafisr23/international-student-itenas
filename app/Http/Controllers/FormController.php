<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index() {
        $student = Student::where('user_id', Auth::user()->id)->first()->id;
        
        if(Form::where('student_id', $student)->doesntExist()) {
            $form = null;
            $form_certif = null;
            $form_transcript = null;
            $form_passport = null;
            $form_photo = null;
        } else {
            $form = Form::where('student_id', $student)->first();
            $form_certif = $form->high_school_certif;
            $form_transcript = $form->high_school_transcript;
            $form_passport = $form->passport;
            $form_photo = $form->color_photo;
        }

        return view('dashboard.form', [
            'title' => 'Applicant Form',
            'user' => Auth::user(),
            'form' => $form,
            'form_certif' => $form_certif,
            'form_transcript' => $form_transcript,
            'form_passport' => $form_passport,
            'form_photo' => $form_photo,
        ]);
    }

    public function store(Request $request) {
        return $request->all();
        $validatedData = [
            'high_school' => 'required',
            'grad_date' => 'required',
            'school_address' => 'required',
            'school_city' => 'required',
            'school_country' => 'required',
            'school_postal_code' => 'required',
            'faculty' => 'required',
            'program' => 'required',
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

        $request->validate($validatedData);

        $student_id = Student::where('user_id', Auth::user()->id)->first()->id;
        Form::updateOrCreate([
            'student_id' => $student_id,
        ], [
            'high_school' => $request->high_school,
            'grad_date' => $request->grad_date,
            'school_address' => $request->school_address,
            'school_city' => $request->school_city,
            'school_country' => $request->school_country,
            'school_postal_code' => $request->school_postal_code,
            // 'student_id' => Student::where('user_id', Auth::user()->id)->first()->id,
        
        ]);

        if ($request->has('high_school_certif')) {
            $fileName = Auth::user()->name . '-' . $request->file('high_school_certif')->getClientOriginalName();
            Form::where('student_id', $student_id)->update([
                'high_school_certif' => $request->file('high_school_certif')->storeAs('high_school_certif', $fileName),
            ]);
        }

        if ($request->has('high_school_transcript')) {
            $fileName = Auth::user()->name . '-' . $request->file('high_school_transcript')->getClientOriginalName();
            Form::where('student_id', $student_id)->update([
                'high_school_transcript' => $request->file('high_school_transcript')->storeAs('high_school_transcript', $fileName),
            ]);
        }

        if ($request->has('passport')) {
            $fileName = Auth::user()->name . '-' . $request->file('passport')->getClientOriginalName();
            Form::where('student_id', $student_id)->update([
                'passport' => $request->file('passport')->storeAs('passport', $fileName),
            ]);
        }

        if ($request->has('color_photo')) {
            $fileName = Auth::user()->name . '-' . $request->file('color_photo')->getClientOriginalName();
            Form::where('student_id', $student_id)->update([
                'color_photo' => $request->file('color_photo')->storeAs('color_photo', $fileName),
            ]);
        }

        return redirect()->route('applicant-form')->with('success', 'Form submitted successfully');
    }

    public function preview() {
        $biodata = Student::where('user_id', Auth::user()->id)->first();
        $form = Form::where('student_id', $biodata->id)->first();
        // return $biodata;
        return view('dashboard.preview', [
            'title' => 'Preview Form',
            'user' => Auth::user(),
            'form' => $form,
            'biodata' => $biodata,
        ]);
    }

    public function createPDF() {
        // retreive all records from db
        $form = Form::where('user_id', Auth::user()->id)->first();
        $biodata = Student::where('user_id', Auth::user()->id)->first();
        // share data to view
        view()->share('employee', [$form, $biodata]);
        $pdf = PDF::loadView('pdf_view', $data);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}