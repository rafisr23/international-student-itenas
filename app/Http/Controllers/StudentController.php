<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function biodata() {
        if($student = Student::where('user_id', Auth::user()->id)->first()) {
            $form = Form::where('student_id', $student->id)->first();
            if ($form->is_submitted) {
                return redirect('/preview-data')->with('error', 'You have already submitted your application!');
            }
        } else {
            $student = null;
            $form = null;
            $biodata = $student;
        }

        return view('dashboard.biodata', [
            'title' => 'Biodata',
            'user' => Auth::user()->name,
            'biodata' => $student,
            'form' => $form
        ]);
    }

    public function store(Request $request) {
        $validatedData = [
            'first_name' => 'required',
            'last_name' => 'required',
            // 'phone_number' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
        ];

        $request->validate($validatedData);

        Student::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                // 'phone_number' => $request->phone_number,
                'address' => $request->address,
                'city' => $request->city,
                'country' => $request->country,
                'postal_code' => $request->postal_code,
                'about_me' => $request->about_me
            ]
        );

        $student = Student::where('user_id', Auth::user()->id)->first();

        if ($student->phone_number == $request->phone_number) {
            $validatedData = [
                'phone_number' => 'required'
            ];
            $request->validate($validatedData);

            Student::where('user_id', Auth::user()->id)->update([
                'phone_number' => $request->phone_number
            ]);
        } else {
            $validatedData = [
                'phone_number' => 'required|unique:students'
            ];
            $request->validate($validatedData);

            Student::where('user_id', Auth::user()->id)->update([
                'phone_number' => $request->phone_number
            ]);
        }

        $full_name = $request->first_name . ' ' . $request->last_name;
        
        User::where('id', Auth::user()->id)->update([
            'name' => $full_name
        ]);

        return redirect('/biodata')->with('success', 'Biodata saved successfully!');
    }

    public function announcement() {
        if ($student = Student::where('user_id', Auth::user()->id)->first()) {
            $form = Form::where('student_id', $student->id)->first();
        } else {
            $form = null;
            $student = null;
        }        

        return view('dashboard.announcement', [
            'title' => 'Announcement',
            'user' => Auth::user()->name,
            'form' => $form
        ]);
    }
}