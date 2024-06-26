<?php

namespace App\Http\Controllers;

use App\Models\StudyLevelCategory;
use Illuminate\Http\Request;

class StudyLevelCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('studyLevelCategory.index',[
                'categories' => StudyLevelCategory::all(),
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudyLevelCategory  $studyLevelCategory
     * @return \Illuminate\Http\Response
     */
    public function show(StudyLevelCategory $studyLevelCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudyLevelCategory  $studyLevelCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(StudyLevelCategory $studyLevelCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudyLevelCategory  $studyLevelCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudyLevelCategory $studyLevelCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudyLevelCategory  $studyLevelCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudyLevelCategory $studyLevelCategory)
    {
        //
    }
}
