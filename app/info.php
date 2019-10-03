<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class info extends Model
{
	$timestamps = false;
     protected $fillable =[

     'name','email'
    ];
    public function phone(){

     return $this->hasone(phone::class);



    }
}
