<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationContoller extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'lesson' => 'nullable|integer|min:1',
            'student' => 'nullable|integer|min:1',
        ]);

        $f_lesson = $request->has('lesson') ? $request->lesson : null;
        $f_student = $request->has('student') ? $request->student : null;

        $registrations = Registration::when($f_lesson, function ($query) use ($f_lesson) {
            $query->where('lesson_id', $f_lesson);
        })
            ->when($f_student, function ($query) use ($f_student) {
                $query->where('student_id', $f_student);
            })
            ->with('lesson', 'student')


            ->paginate()
            ->withQueryString();

        return view('home.index')
            ->with([
                'registrations' => $registrations,
            ]);
    }

}
