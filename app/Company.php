<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
      		
      		'name',
      		'email',
      		'contact',
      		'branch',
      		'year',
      		'student_placed',
      		'package',
      		'city',
      		'state',
      		'logo'

    	];
}
