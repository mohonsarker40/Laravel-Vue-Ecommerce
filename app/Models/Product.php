<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['sub_category_id','category_id','name', ];

    public function validate($input)
    {
        return Validator::make($input, [
            'sub_category_id' => 'required',
            'category_id' => 'required',
            'name' => 'required|string'
        ]);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function sub_category()
    {
        return $this->belongsTo(subCategory::class);
    }
}
