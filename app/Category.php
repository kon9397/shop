<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $primaryKey = 'id';

    public function products() {
        return $this->hasMany(Category::class);
    }
}
