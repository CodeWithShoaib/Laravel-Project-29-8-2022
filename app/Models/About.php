<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table='about';
    protected $fillable=[
        'headingone',
        'headingtwo',
        'contentone',
        'headingthree',
        'contenttwo',
        'headingfour',
        'contentthree',
        'headingfive',
        'headingsix',
        'headingseven',
        'contentfour',
        'image',
        'bg_one',
        'bg_two'

    ];



}
