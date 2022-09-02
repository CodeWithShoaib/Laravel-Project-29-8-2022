<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table="service";
    protected $fillable=[
        "headingone",
        "headingtwo",
        "contentone",
        "headingthree",
        "image",
        "contenttwo",
        "contenttwo",
        "firstQuility",
        "secondQuility",
        "thirdQuility",
        "FourthQuility",
        "headingfour",
        "bg_one"
    ];
}
