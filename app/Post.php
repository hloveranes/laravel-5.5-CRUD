<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //created via terminal (php artisan make:model Post)--
    protected $table = 'posts'; //datatable name--
    protected $fillable = ['bptitle','bpauthor','bpcategory','bpcontent']; //column names in data table--
}
