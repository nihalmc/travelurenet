<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internationalpackagestype extends Model
{
    use HasFactory;

    protected $fillable = ['package_type','image','ordernumber','text'];
}
