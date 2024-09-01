<?php

namespace App\Http\Controllers;

use App\Models\subCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index()
    {
        $data = SubCategory::get();
        return response()-json(['result' => $data, 'status' => 2000]);
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


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(subCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(subCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subCategory $subCategory)
    {
        //
    }
}
