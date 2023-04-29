<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ScholarshipAchievementAnswer;
use App\Models\ScholarshipAchievementQuestion;

class ScholarshipController extends Controller
{
    private $form;
    private $biodata;
    private $questions;

    // // constructor
    // public function __construct()
    // {
        
    // }

    public function cahayaAchievement() {
        if($this->biodata = Student::where('user_id', Auth::user()->id)->first()) {
            if ($this->form = Form::where('student_id', $this->biodata->id)->first()) {
                if ($this->form->is_submitted) {
                    return redirect('/preview-data')->with('error', 'You have already submitted your application!');
                }

                if ($this->form->scholarship_id != 2) {
                    return redirect('/applicant-form')->with('error', 'You are not eligible for this scholarship!');
                }
            } else {
                return redirect('/applicant-form')->with('error', 'You have not submitted your application!');
            }
        } else {
            $this->biodata = null;
            $this->form = null;
        }

        $this->questions = ScholarshipAchievementQuestion::where('scholarship_id', $this->form->scholarship_id)->get();
        
        $answers = ScholarshipAchievementAnswer::where('student_id', $this->biodata->id)->get();
        
        // return $answers[1]->answer;

        return view('cahaya_scholarship.achievement', [
            'title' => 'Cahaya Achievement',
            'form' => $this->form,
            'biodata' => $this->biodata,
            'questions' => $this->questions,
            'answers' => $answers,
        ]);
    }

    public function cahayaAchievementAnsStore(Request $request) {
        $this->form = Form::where('student_id', Auth::user()->student->id)->first();
        $this->questions = ScholarshipAchievementQuestion::where('scholarship_id', $this->form->scholarship_id)->get();

        $validatedData = [
            'no_1' => 'required|max:550|string',
            'no_2' => 'required|max:550|string',
            'no_3' => 'required|max:550|string',
            'no_4' => 'required|max:550|string',
            'no_5' => 'required|max:550|string',
        ];

        $customMessages = [
            'required' => 'The field is required.',
            'max' => 'The field is too long.',
            'string' => 'The field must be a string.',
        ];

        $request->validate($validatedData, $customMessages);

        foreach($this->questions as $question) {
            ScholarshipAchievementAnswer::updateOrCreate([
                'student_id' => Auth::user()->student->id,
                'scholarship_achievement_question_id' => $question->id,
            ],
            [
                'answer' => $request->input('no_' . $question->id),
            ]);
        }

        return redirect()->route('cahayascholarship.cahaya-achievement')->with('success', 'Your achievement has been submitted!');
    }
}