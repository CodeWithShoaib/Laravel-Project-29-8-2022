<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;
    protected $table='home';
    protected $fillable=[
        'bg_one',
        'headingone',
        'headingtwo',
        'bg_two',
        'bg_three',
        'countingone',
        'countingtwo',
        'countingthree',
        'countingfour',
        'headingthree',
        'text_one',
        'headingfour',
        'text_two',
        'headingfive',
        'text_three',
        'headingsix',
        'text_four',
        'headingseven',
        'headingeight',
        'headingnine',
        'headingten',
        'text_five',
        'text_six',
        'headingeleven',
        'text_seven',
        'headingtwel',
        'bg_four',
        'headingthirteen',
        'headingfourteen',
        'headingfifteen',
        'heading_sixteen',
        'headingseventeen',
        'headingeighteen',
        'bg_five',
        'headingnineteen',
        'bg_six',
        'heafingTwenty',
        'text_eight',
        'imageone',
        'imagetwo',
        'imagethree',
        'imagefour'
    ];
}
