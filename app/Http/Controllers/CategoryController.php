<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $data=Category::get();
        return response()->json(['result'=>$data,'status'=>2000],200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        try {
            $category = new Category();
            $category->name = $request->input('name');
            $category->save();

            return response()->json(['status' => 2000]);
        } catch (\Exception $e) {
            return response()->json(['result' => null, 'message' => $e->getMessage(), 'status' => 5000]);
        }
    }

    public function show(Category $category)
    {
        //
    }


    public function edit(Category $category)
    {
        //
    }


    public function update(Request $request, Category $category)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'sometimes|string|max:255',
        ]);

        // Update the Category
        $category->update($request->only(['name']));

        // Return a success response
        return response()->json(['result' => $category, 'status' => 200], 200);
    }


    public function destroy(Category $category)
    {
        //
    }
}