<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function getImageUrlAtribute(){
        return url('public/storage/products/December2022' .$this->image);
    }
}


