<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    // field isian
    public $fillable = ['name'];
    // fitur create, update, delete aktif
    public $userstamps = true;
    public $timestamps = true;
    public $softDeletes = true;
}
