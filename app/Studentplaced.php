<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentplaced extends Model
{
    protected $fillable =[

    	'enrollment',
    	'name',
    	'company',
    	'package',
    	'batch',
    	'sem',
    	'branch'

    ];
    public $timestamps = true;
}
