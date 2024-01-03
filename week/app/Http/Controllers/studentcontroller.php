<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student;

class studentcontroller extends Controller
{
    public function form()
    {
        return view('layout.form');
    }
    public function dataInsert(Request $r)
    {
        $student = new student();
        $student->name = $r->input('name');
        $student->age = $r->input('age');
        $student->number = $r->input('number');
        $student->save();
        return redirect()->route('layout-form');
        // dd($r);
    }
    public function edit($id,Request $r)
    {
        $student = student::findOrFail($id);
        return view('layout.edit',['student'=>$student]);
//        dd($student);
    }

    public function display()
    {
//        $students = student::whereNull('deleted_at')->get();
//        $students = student::all();
        $students = student::paginate(5);
        return view('layout.display', ['students' => $students]);
    }

    public function update($id,Request $r)
    {
        $student = student::findOrFail($id);

        $r->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'number' => 'required'
        ]);

        $student->update([
            'name' => $r->input('name'),
            'age' => $r->input('age'),
            'number' => $r->input('number')
        ]);

        return redirect(route('layout-form'))->with('success', 'Student updated successfully');
    }

    public function delete($id)
    {
        $student = student::findOrFail($id);
        $student->delete();
        return $this->display();
    }
}
