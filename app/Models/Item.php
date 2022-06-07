<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table="prop_items";
    protected $fillable=["academic_year","item","boys_quantity","girls_quantity"];
}
