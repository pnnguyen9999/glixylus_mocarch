<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table="article";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'wallpaperURL', 'desciption',
    ];
}
