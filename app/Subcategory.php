<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{


    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }
}
