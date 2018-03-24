<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    protected $fillable = [

    	'name',
    	'company',
    	'position',
    	'contact',
    	'speak'

    ];
}
