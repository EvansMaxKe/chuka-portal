<?php

namespace App\Http\Controllers;

use App\Models\CourseRegistration;
use Illuminate\View\View;
use Illuminate\Http\Request;
use  App\Models\UnitList;
use Illuminate\Support\Facades\DB;

class CourseRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Course Registrations";
        $title1 = "Backet Unit List";
        $courses=CourseRegistration::all();
        $courses=DB::select('SELECT*FROM course_registrations');
        $unitlists=UnitList::all();
        $unitlists=DB::select('SELECT*FROM unit_lists');
       return view('courseregistration.index')->with('title', $title)->with('courses', $courses)->with('title1', $title1)->with('unitlists', $unitlists);
   }
 }
