<?php

namespace App\Models;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserFormation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'users_formations';
    // voir config/database.php
    // protected $connection = 'mysql_rfs_consulting_db';
    public function formation()
    {
        return $this->belongsTo(Formation::class,'formation_id');
    }
}
