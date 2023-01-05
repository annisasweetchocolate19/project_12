<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Candidates extends Model
{
    use Userstamps;
    use HasFactory;
    use SoftDeletes;

    public $table = 'project';

    protected $date = [
      'start_date',
      'created_at',
      'updated_at',
      'deleted_at',   
    ];
      // field isian
      public $fillable = ['job_id', 'name', 'email', 'phone', 'year'];
      // fitur create, update, delete aktif
      public $userstamps = true;
      public $timestamps = true;
      public $softDeletes = true;
}
