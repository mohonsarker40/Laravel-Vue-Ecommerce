<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\modules;
use App\Models\Product;
use App\Models\subCategory;
use App\Models\User;
use Illuminate\Http\Request;
use App\Supports\Helper;
use Illuminate\Support\Facades\DB;

class SupportController extends Controller
{
    use Helper;

    public function requiredData()
    {
        $array = request()->all();
        $data = [];

        if (in_array('category', $array)) {
            $data['category'] = Category::get();
        }
        if (in_array('sub_category', $array)) {
            $data['sub_category'] = subCategory::get();
        }
        if (in_array('product', $array)) {
            $data['product'] = Product::get();
        }

        return $this->returnData(2000, $data);
    }


    public function getConfigurations()
    {
        {
            $permittedModuleId = DB::table('role_modules')->where('role_id', auth()->user()->role_id)->get()->pluck('module_id')->toArray();
            $data['menus'] = modules::where('parent_id', 0)
                ->whereIN('id', $permittedModuleId)
                ->with(['sub_menus' => function ($query) use ($permittedModuleId) {
                    $query->whereIN('id', $permittedModuleId);
                    $query->with(['sub_menus' => function ($query) {
                        $query->with('sub_menus');
                    }]);
                }])->get();

            $data['permissions'] = $this->authPermissions();

            return $this->returnData(2000, $data);
        }
    }
}
