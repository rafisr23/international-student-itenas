<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ScholarshipAchievementList;
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

            $answers = ScholarshipAchievementAnswer::where('student_id', $this->biodata->id)->get();
        } else {
            $this->biodata = null;
            $this->form = null;
        }

        $this->questions = ScholarshipAchievementQuestion::where('scholarship_id', $this->form->scholarship_id)->get();
        
        return view('cahaya_scholarship.achievement', [
            'title' => 'Cahaya Achievement',
            'form' => $this->form,
            'biodata' => $this->biodata,
            'questions' => $this->questions,
            'answers' => $answers,
            'countAchievement' => $countAchievement,
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
                'question_id' => $question->id,
            ],
            [
                'answer' => $request->input('no_' . $question->id),
            ]);
        }

        return redirect()->route('cahayascholarship.cahaya-achievement')->with('success', 'Your achievement has been submitted!');
    }

    public function cahayaAchievementListStore(Request $request) {
        $student = Student::where('user_id', Auth::user()->id)->first();
        $form = Form::where('student_id', Auth::user()->student->id)->first();

        $validatedData = [
            'activity.*' => 'required|max:255|string',
            'level.*' => 'required|max:255|string',
            'position_held.*' => 'required|max:255|string',
            'level_achievement.*' => 'required|max:255|string',
            'from.*' => 'required|max:255|string',
            'name_activity.*' => 'required|max:255|string',
            'to.*' => 'required|max:255|string',
            'certificate_achievement.*' => 'required|mimes:jpeg,jpg,png,pdf|max:2048',
            'first_name_contact.*' => 'required|max:255|string',
            'email_contact.*' => 'required|max:255|string',
            'last_name_contact.*' => 'required|max:255|string',
            'telephone_contact.*' => 'required|max:255|string',
            'position_contact.*' => 'required|max:255|string',
        ];

        $customMessages = [
            'required' => 'The field is required.',
            'max' => 'The field is too long.',
            'string' => 'The field must be a string.',
        ];

        $request->validate($validatedData, $customMessages);

        $countAchievement = ScholarshipAchievementList::where('student_id', Auth::user()->student->id)->count();

        if ($countAchievement >= 3) {
            return redirect()->route('cahayascholarship.cahaya-achievement')->with('error', 'You have reached the maximum number of achievements!');
        }

        $achievementLists = $request->input();

        for($i = 0; $i < count($achievementLists['activity']); $i++) {
            if($request->has('certificate_achievement')) {
                $certificate = $request->file('certificate_achievement')[$i];
                $certificateName = $form->reg_number . '-' . $certificate->getClientOriginalName();
                $certificate->storeAs('certificate_achievement', $certificateName);
            } else {
                $certificateName = null;
            }   

            $achievementListArray = ScholarshipAchievementList::create([
                // '_token' => $achievementLists['_token'],
                'student_id' => Auth::user()->student->id,
                'activity' => $achievementLists['activity'][$i],
                'level' => $achievementLists['level'][$i],
                'position_held' => $achievementLists['position_held'][$i],
                'level_achievement' => $achievementLists['level_achievement'][$i],
                'from' => $achievementLists['from'][$i],
                'name_activity' => $achievementLists['name_activity'][$i],
                'to' => $achievementLists['to'][$i],
                'certificate_achievement' => $certificateName,
                'first_name_contact' => $achievementLists['first_name_contact'][$i],
                'email_contact' => $achievementLists['email_contact'][$i],
                'last_name_contact' => $achievementLists['last_name_contact'][$i],
                'telephone_contact' => $achievementLists['telephone_contact'][$i],
                'position_contact' => $achievementLists['position_contact'][$i],
            ]);    
        }

        return redirect()->route('cahayascholarship.cahaya-achievement')->with('success', 'Your achievement list has been submitted!');
    }
}