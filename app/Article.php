<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Article
 *
 * @mixin Eloquent
 */

class Article extends Model
{
    protected $table = 'articles';
    public $primaryKey = 'id';


}
