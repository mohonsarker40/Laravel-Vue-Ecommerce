<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Supports\Helper;
use Illuminate\Http\Request;

class ProductController extends Controller
{use Helper;
    public function  __construct()
    {
        $this->model=new Product();
    }

    public function index()
    {
        $data = $this->model->with('sub_category', 'category')->get();
        return $this->returnData(2000, $data);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validator = $this->model->validate($request->all());
        if ($validator->fails()){
            return response()->json(['result' => $validator->errors(), 'status' => 3000], 200);
        }
        $this->model->fill($request->all());
        $this->model->save();
        return $this->returnData(2000, $this->model);
    }


    public function show( )
    {

    }


    public function edit()
    {

    }


    public function update()
    {

        try {
            $id = $request->input('id');

            $data =$this->model->where('id', $id)->first();

            if ($data) {
                $data->name = $request->input('name');
                $data->update();

                return response()->json(['status' => 2000]);
            }

            return response()->json(['status' => 3000]);

        } catch (\Exception $e) {
            return response()->json(['result' => null, 'message' => $e->getMessage(), 'status' => 5000]);
        }
    }


    public function destroy($product_id)
    {
        try {
            $data = $this->model->where('id', $product_id)->first();

            if ($data) {

                $data->delete();
                return response()->json(['status' => 2000]);
            }

            return response()->json(['status' => 3000]);
        } catch (\Exception $e) {
            return response()->json(['result' => null, 'message' => $e->getMessage(), 'status' => 5000]);
        }
    }
}
