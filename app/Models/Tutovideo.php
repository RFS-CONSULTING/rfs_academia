<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutovideo extends Model
{
    use HasFactory;
    protected $connection = 'mysql_rfs_consulting_db';
    protected $table = 'tutovideos';
}
