<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    // protected $connection = 'mysql_rfs_consulting_db';
    protected $progression=0;
    protected $guarded = ['id'];
    use HasFactory;
}
