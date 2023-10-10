<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;
use App\Models\UnitList;
use Illuminate\Support\Facades\DB;
class UnitListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title1 = "Backet Unit List";
        $unitlists=UnitList::all();
        $unitlists=DB::select('SELECT * FROM unit_lists');
        return view('unitlist.index')->with('title1', $title1)->with('unitlists', $unitlists);
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
        $unit=UnitList::find($id);
        return view('unitlist.show')->with('unit', $unit);
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
    public function destroy($id)
    {
        //
        $unit=UnitList::find($id);
        $unit->delete();
        return redirect('courseregistration')->with('success', 'Item Deleted Successfully!!');
    }
}
