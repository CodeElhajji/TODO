<?php

namespace App\taskes;

use Illuminate\Database\Eloquent\Model;

class taske extends Model
{
    protected $fillable =['id','task','timetask','done' ,];
    protected $hidden = [''];
    public $timestamps = false;
}
