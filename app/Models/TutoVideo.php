<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutoVideo extends Model
{
    use HasFactory;
    // protected $connection = 'mysql_rfs_consulting_db';
    // protected $table = 'table_tutovideos';
    protected $table = 'tuto_videos';
    protected $guarded = ['id'];
}
