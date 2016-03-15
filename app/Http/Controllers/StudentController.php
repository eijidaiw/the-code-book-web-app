<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Student;
class StudentController extends Controller
{
    public function index() {
    	$students = Student::all();
    	return view('student')->with('students',$students);

    }

    public function addForm() {
        return view('student.student');

    }

    public function add() {
    	$student = new Student;
        $student->name = Input::get('name');
        $student->surname = Input::get('surname');
        $student->save();
        return Redirect::to('student');

    }

    public function page()  {
        $students = Student::paginate(3);       
        $students->setPath('student');      
        return view('student.index')->with('students',$students);
    }
    public function delete($id) {
        $student = Student::find($id);
        $student->delete();
        return Redirect::to('student');
    }
    public function edit($id) {
        $student = Student::find($id);       
        return view('student.edit')->with('student',$student);
    }
public function update($id) {
    $student = Student::find($id);
    $student->name = Input::get('name');        
    $student->surname = Input::get('surname');
    $student->save();
    return Redirect::to('student');
}


}
