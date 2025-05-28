<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('student_crud');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'reg_number' => 'required',
        ]);

        Student::create($request->only('first_name', 'last_name', 'reg_number'));
        return redirect('/')->with('success', 'Submission successful!');
    }

    public function admin()
    {
        $students = Student::all();
        return view('admin_page', compact('students'));
    }
    public function destroy($id)
{
    $student = Student::find($id);
    $student->delete();

    return redirect('/admin')->with('success', 'Student record deleted successfully.');
}

}
