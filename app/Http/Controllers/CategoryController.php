<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Supports\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{


    use Helper;

    public function __construct()
    {
        $this->model = new Category();
    }

    public function index()
    {
        $data = $this->model->get();
        return $this->returnData(2000, $data);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validator = $this->model->validate($request->all());
        if ($validator->fails()) {
            return response()->json(['result' => $validator->errors(), 'status' => 3000], 200);
        }
        $this->model->fill($request->all());
        $this->model->save();
        return $this->returnData(2000, $this->model);
    }


    public function show(Category $category)
    {

    }


    public function edit(Category $category)
    {

    }


    public function update(Request $request)
    {
        if (!$this->can('category_edit')) {
            return $this->returnData(5000, null, 'You do not have permission to edit this category');
        }


        try {
            $id = $request->input('id');

            $category = $this->model->where('id', $id)->first();

            if ($category) {
                $category->name = $request->input('name');
                $category->update();

                return response()->json(['status' => 2000]);
            }

            return response()->json(['status' => 3000]);

        } catch (\Exception $e) {
            return response()->json(['result' => null, 'message' => $e->getMessage(), 'status' => 5000]);
        }
    }


    public function destroy($category_id)
    {
        try {
            $category = $this->model->where('id', $category_id)->first();

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
