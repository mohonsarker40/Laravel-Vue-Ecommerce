<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\subCategory;
use App\Models\User;
use Illuminate\Http\Request;
use App\Supports\Helper;

class SupportController extends Controller
{
    use Helper;
    public function requiredData(){
        $array = request()->all();
        $data = [];

        if(in_array('category', $array)){
            $data['category'] = Category::get();
        }
        if(in_array('sub_category', $array)){
            $data['sub_category'] = subCategory::get();
        }

        return $this->returnData(2000, $data);
    }
}
