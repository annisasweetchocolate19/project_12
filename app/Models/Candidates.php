<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Candidates extends Model
{
    use HasFactory;
      // field isian
      public $fillable = ['job_id', 'name', 'email', 'phone', 'year'];
      // fitur create, update, delete aktif
      public $timestamps = true;
      public $softDeletes = true;
}
