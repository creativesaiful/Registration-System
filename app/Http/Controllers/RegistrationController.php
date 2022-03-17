<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use App\Mail\registrationMail;
use Illuminate\Support\Facades\Mail;


class RegistrationController extends Controller
{
    public function studentStore(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|digits:11|numeric',

        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();



       $details = [
           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
       ];


         Mail::to($request->email)->send(new registrationMail($details));



        $notification = array(
            'message' => 'Student Added Successfully',
            'type' => 'success'
        );

        return back()->with($notification);



    }

    public function studentList(){

        $students = Student::all();

        return view('pages.list', compact('students'));

    }
}
