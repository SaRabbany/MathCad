<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question; 
use Session;

class Mathcad extends Controller
{
    public function homePage(){
        $showQ= Question::simplePaginate(5);
        return view ('index', compact('showQ'));
    }

    public function allQuestion(){
        $showQ = Question::cursorPaginate(5);
        return view('allQuestionList', compact('showQ'));
       
    }

    public function question(){
        return view('question');     
    }

    public function add(){
        return view('addQ');
    }
    public function store(Request $request){

        $valid =[
            'name'=>'required| max:15',
            'title' =>'required| max:100',
            'description'=>'required| max:500',
        ];
        $customMsg =[
            'name.required'=>'Enter Your Name',
            'name.max' => 'your name can not be more than 15 characters',
            'title.max' => 'your title can not be more than 100 characters',
            'title.required' => 'Enter your title',
            'description.max' => 'your description can not be more than 500 characters',
            'description.required' => 'Enter your description',
        ];
        $this->validate($request, $valid, $customMsg);

        $question = new Question();
        $question->name= $request->name;
        $question->title= $request->title;
        $question->description= $request->description;
        $question-> save();
        $request->session()->flash('status', 'Task was successful!');

        return redirect()->back();
    }

    public function editQuestion($id= null) {
        $editQuestion = Question::find($id);
        return view('questionEdit', compact('editQuestion'));

    }

    public function updateQuestion(Request $request,$id)
    {

        $valid = [
            'name' => 'required| max:15',
            'title' => 'required| max:100',
            'description' => 'required| max:500',
        ];
        $customMsg = [
            'name.required' => 'Enter Your Name',
            'name.max' => 'your name can not be more than 15 characters',
            'title.max' => 'your title can not be more than 100 characters',
            'title.required' => 'Enter your title',
            'description.max' => 'your description can not be more than 500 characters',
            'description.required' => 'Enter your description',
        ];
        $this->validate($request, $valid, $customMsg);

        $question = Question::find($id);
        $question->name = $request->name;
        $question->title = $request->title;
        $question->description = $request->description;
        $question->save();
        $request->session()->flash('status', 'Task Updated!');

        return redirect()->back();
    }

    public function deleteQuestion($id=null){

        $deleteQuestion =Question::find($id);
        $deleteQuestion->delete();
        session()->flash('status', 'Task deleted!');

        return redirect()->back();

    }

}
