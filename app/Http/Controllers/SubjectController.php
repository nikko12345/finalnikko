<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return view('subjects.index',array('subjects'=> $subjects));
    }
    public function addSubject(){
        return view('subjects.add-subject');

    }
    public function store(Request $request){
        $request->validate([
            'subject_code' => 'required',
            'subject_description' => 'required'
            
        ]);
        $subject = new Subject;
        $subject->subject_code = $request->subject_code;
        $subject->subject_description = $request->subject_description;
        $subject->subject_time = $request->subject_time;
        $subject->save();
        return redirect()->route('subjects.index')->withStatus('Subject Added.');
    }

    public function update(Request $request){

        $request->validate([
            'subject_code' => 'required',
            'subject_description' => 'required'
            
        ]);
        $subject = Subject::find($request->id);
            if($subject){
                $subject->subject_code = $request->subject_code;
                $subject->subject_description = $request->subject_description;
                $subject->subject_time = $request->subject_time;
                $subject->save();
            }
            return redirect()->back()->withStatus('Subject Added.');
    }

    public function destroy(Request $request){
        $subject = Subject::find($request->id);

        if($subject){
            $subject->delete();
        }
        return redirect()->back()->withStatus('Subject Deleted.');
 
   }


   public function subjectEnroll(Request $request){
    return redirect()->back()->withStatus('You are Enroll now.');
   }
}