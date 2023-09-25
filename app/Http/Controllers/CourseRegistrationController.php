<?php

namespace App\Http\Controllers;

use App\Models\CourseRegistration;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $title = "Course Registrations";
        $courses=CourseRegistration::all();
        $courses=DB::select('SELECT*FROM course_registrations');
       return view('courseregistration.index')->with('title', $title)->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
