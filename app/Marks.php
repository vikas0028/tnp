<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Marks extends Model
{
     protected $fillable = [
      'enrollment', 'sem1','sem2','sem3','sem4','sem5','sem6','sem7','sem8','cpi','cgpa','cblocks','tblocks'  
    ];
}
