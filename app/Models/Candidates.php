<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Candidates extends Model
{
    use Userstamps;
      // field isian
      public $fillable = ['job_id', 'name', 'email', 'phone', 'year'];
      // fitur create, update, delete aktif
      const CREATED_BY = 'alt_created_by';
      const UPDATED_BY = 'alt_updated_by';
      const DELETED_BY = 'alt_deleted_by';
      public $timestamps = true;
      public $softDeletes = true;
}
