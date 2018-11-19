<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    //
	public $timestamps = false;
	protected $table='modimg';
	protected $fillable=['tieude','mota','imgurl'];
}
