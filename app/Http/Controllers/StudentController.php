<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function biodata() {
        if(Student::where('user_id', Auth::user()->id)->first() == null) {
            $biodata = null;
        } else {
            $biodata = Student::where('user_id', Auth::user()->id)->first();
        }

        return view('dashboard.biodata', [
            'title' => 'Biodata',
            'user' => Auth::user()->name,
            'biodata' => $biodata
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'about_me' => 'required'
        ]);

        Student::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'city' => $request->city,
                'country' => $request->country,
                'postal_code' => $request->postal_code,
                'about_me' => $request->about_me
            ]
        );

        $full_name = $request->first_name . ' ' . $request->last_name;
        
        User::where('id', Auth::user()->id)->update([
            'name' => $full_name
        ]);

        return redirect('/biodata')->with('success', 'Biodata saved successfully!');
    }
}