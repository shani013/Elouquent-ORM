<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //now we use Orm 
        //to fetch all students
        $students = Student::all();
        return view('home', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //this is only to show the form for creating a new resource
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the request data
        $request->validate([
            'st_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'age' => ['required', 'integer', 'min:18', 'max:100'],
            'address' => ['required', 'string', 'max:400'],
            'phone_number' => ['required', 'string', 'min:10', 'max:15']
        ]);
        //here we will store the new student resource
        $student=new Student;
        $student->st_name=$request->st_name;
        $student->email=$request->email;
        $student->age=$request->age;
        $student->address=$request->address;
        $student->phone_number=$request->phone_number;
        $student->save();
        return redirect()->route('students.index')->with('status','Student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student=student::find($id);
        return view('view',compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //here we will get data of student resource
        $student=student::find($student->id);
        return view('update',compact('student'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //here we update the resource student
        $student=student::find($student->id); //get the student
        //validate the request data
        $request->validate([
            'st_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'age' => ['required', 'integer', 'min:18', 'max:100'],
            'address' => ['required', 'string', 'max:400'],
            'phone_number' => ['required', 'string', 'min:10', 'max:15']
        ]);
        //update the resource
        $student->st_name = $request->st_name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->address = $request->address;
        $student->phone_number = $request->phone_number;
        $student->save();
        return redirect()->route('students.index')->with('status', 'Student Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //here we will remove the student by its id
        // $student=student::find($student->id);
        // $student->delete();

        $student->destroy($student->id);
        return redirect()->route('students.index')->with('status','Student deleted successfully');
    }
}
