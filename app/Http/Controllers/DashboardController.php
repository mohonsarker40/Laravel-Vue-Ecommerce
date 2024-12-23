<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Supports\Helper;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use Helper;

    public function dashboardData(){
        $user = auth()->user();
        $data['user_create_date'] = $created_at = $user->created_at ? $created_at = $user->created_at->format('d-M-Y') : null;

        $category = Category::where('status', 1)->count();



        $data = [
            'category' => $category,
        ];
        return response(2000, $data);
    }
}
