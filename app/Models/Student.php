<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table="students";
    protected $fillable = ["academic_year","index_number","name","father_name",
        "father_phone_number","mother_name","mother_phone_number","photo_url",
        "uuid","gender","aggregate","programme","track","status"];

}
