<?php

namespace App\taskes;

use Illuminate\Database\Eloquent\Model;

class taske extends Model
{
    protected $fillable =['id','task_ar' , 'task_en' ,'timetask','done' ,];
    protected $hidden = [''];
    public $timestamps = false;

}
