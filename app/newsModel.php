<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class newsModel extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'author',
        'content',
        'image',
    ];
}
