<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public $model = '';
    public function __construct(){
        $this->model = new Category();
    }


    public function index()
    {
        $data =  $this->model->get();
        return response()->json(['result' => $data, 'status' => 2000], 200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required'
        ]);

        try {
            $category = new Category();
            $category->name = $request->input('name');
            $category->save();

            return response()->json(['status' => 2000]);
        } catch (\Exception $e) {
            return response()->json(['result' => null, 'message' => $e->getMessage(), 'status' => 5000]);
        }

//        $validator = $this->model->validate($request->all());
//
//        if ($validator->fails()) {
//
//            return response()->json([
//                'result' => $validator->erorrs(),
//                'status' => 3000
//            ], 200);
//        }
//
//        $this->model->fill($request->all());
//        $this->model->save();
//
//        return response()->json([
//            'result' => $this->model,
//            'status' => 2000
//        ], 200);


    }

    public function show(Category $category)
    {

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


    public function destroy($id)
    {

        try {
            $category = $this->model->where('id', $id)->first();

            if ($category) {
                $category->delete();
                return response()->json(['status' => 2000]);
            }

            return response()->json(['status' => 3000]);
        } catch (\Exception $e) {
            return response()->json(['result' => null, 'message' => $e->getMessage(), 'status' => 5000]);
        }
    }

}
