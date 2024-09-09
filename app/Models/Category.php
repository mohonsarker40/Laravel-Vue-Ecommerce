<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HasFactorytory;
use Illuminate\Support\Facades\Validator;

class Category extends Model
{
//    protected $table = 'categories';
    use HasFactory;

    protected $fillable = ['name'];
    public function validate($input)
    {
        return Validator::make($input, [
            'name' => 'required'
        ]);
    }

}
