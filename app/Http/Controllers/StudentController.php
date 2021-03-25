<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('students', [
            'students' => Student::paginate(5)
        ]);
        
        // $search = request('search');

        // if ($search) {
        //     $students = Student::where([
        //         ['id', 'name', '%'.$search.'%']
        //     ])->get();
        //     // dd($search);
        // } else {
        //     $students = Student::paginate(5);
        // }
        // return view('students', [
        //     'students' => $students,
        //     'search'   => $search
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student-add', [
            'students' => Student::all(),
            'courses' => Course::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $student = new Student;

        $student->name = $request->name;
        $student->course_id = $request->course_id;
        $student->class = $request->class;
        $student->status = $request->status;
        $student->zip_code = $request->zip_code;
        $student->street = $request->street;
        $student->number = $request->number;
        $student->district = $request->district;
        $student->city = $request->city;
        $student->state = $request->state;
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/students'), $imageName);

            $student->image = $imageName;
        }
        
        $student->save();

        return redirect('alunos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student-view', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $cursos = Course::where('id', $student->course_id)->value('name');

        return view('student-edit', [
            'student' => $student,
            'courses' => Course::all(),
            'cursos'  => $cursos
        ]);
        return redirect('alunos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        if(isset($student)) {
            $student->name      = $request->input('name');
            $student->course_id = $request->input('course_id');
            $student->class     = $request->input('class');
            $student->status    = $request->input('status');
            $student->zip_code  = $request->input('zip_code');
            $student->street    = $request->input('street');
            $student->number    = $request->input('number');
            $student->district  = $request->input('district');
            $student->city      = $request->input('city');
            $student->state     = $request->input('state');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/students'), $imageName);

            $student->image = $imageName;
        }
        // dd($request->all());
            $student->save();

            return redirect('alunos');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        if(isset($student)) {
            $student->delete();
        }
        return redirect('alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->filter;
        $resultado = Student::where('id', 'LIKE', "%{$search}%")->paginate(5);
        
        return view('students', [
            'students' => $resultado
        ]);
    }
}
