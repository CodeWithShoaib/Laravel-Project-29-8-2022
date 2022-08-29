<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CFeedback extends Model
{
    use HasFactory;
    protected $table="c_feedbacks";
    protected $fillable=[
        "titleone",
        "titletwo",
        "content",
        "image"

    ];
}
