<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [

    	'year',
    	'companies_visited',
    	'students_placed'

    ];
}
