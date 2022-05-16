<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    // protected $connection = 'mysql_rfs_consulting_db';
    use HasFactory;

    protected $progression=0;
    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'date:Y/m/d',
        'is_certified' => 'boolean'
    ];
}
