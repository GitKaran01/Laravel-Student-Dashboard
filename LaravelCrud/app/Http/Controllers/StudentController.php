<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;



class StudentController extends Controller
{



    function add(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        if ($request) {
            return "Added successfully";
        } else {
            return "Student not added";
        }

        // return "add function called";
    }



    function edit($id)
    {
        $student = Student::find($id);
        // return $student;
        return view('edit-student', ["data" => $student]);
    }

    function editStudent(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

        if ($student->save()) {
            return redirect('list');
        } else {
            return "Student details are not updated";
        }
    }


    function search(Request $request)
    {
        $studentData = Student::where('name', 'like', "%$request->search%")->get();
        return view('list-student', ['students' => $studentData]);
        // return $request->search;
    }


    function list()
    {
        // $studentData = Student::all();
        // Applying pagination
        $studentData = Student::paginate(25);
        return view('list-student', ['students' => $studentData]);
    }



    function delete($id)
    {
        $isDelete = Student::destroy($id);
        if ($isDelete) {
            return redirect('list');
        } else {
            echo "record not deleted";
        }
    }


    function deleteMultiple(Request $request)
    {
        $result = Student::destroy($request->ids);
        if ($result) {
            return redirect('list');
        } else {
            return "student data not deleted.";
        }
        //  return $request->ids;  
    }
}
