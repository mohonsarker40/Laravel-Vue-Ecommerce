<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modules extends Model
{
    use HasFactory;

    public function sub_menus(){
        return $this->hasMany(modules::class, 'parent_id',  'id' );
    }
}
