<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index() {
        if ($student = Student::where('user_id', Auth::user()->id)->first()) {
            $form = Form::where('student_id', $student->id)->first();
        } else {
            $form = null;
            $student = null;
        }

        if($form == null) {
            $form = null;
            $form_certif = null;
            $form_transcript = null;
            $form_passport = null;
            $form_photo = null;
        } else {
            $form = $form;
            $form_certif = $form->high_school_certif;
            $form_transcript = $form->high_school_transcript;
            $form_passport = $form->passport;
            $form_photo = $form->color_photo;
        }

        return view('dashboard.form', [
            'title' => 'Applicant Form',
            'user' => Auth::user(),
            'form' => $form,
            'student' => $student,
            'form_certif' => $form_certif,
            'form_transcript' => $form_transcript,
            'form_passport' => $form_passport,
            'form_photo' => $form_photo,
        ]);
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

        if ($request->has('financial_verify')) {
            $validatedData['financial_verify'] = 'required|file|mimes:pdf';
        }

        $request->validate($validatedData);

        $student = Student::where('user_id', Auth::user()->id)->first();
        Form::updateOrCreate([
            'student_id' => $student->id,
        ], [
            'reg_number' => Str::random(10),
            'high_school' => $request->high_school,
            'grad_date' => $request->grad_date,
            'school_address' => $request->school_address,
            'school_city' => $request->school_city,
            'school_country' => $request->school_country,
            'school_postal_code' => $request->school_postal_code,
            'faculty' => $request->faculty,
            'program' => $request->program,
            // 'student_id' => Student::where('user_id', Auth::user()->id)->first()->id,
        ]);

        $form = Form::where('student_id', $student->id)->first();

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
            $form = Form::where('student_id', $biodata->id)->first();
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