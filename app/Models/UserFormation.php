<?php

namespace App\Models;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserFormation extends Model
{
    use HasFactory;

    // voir config/database.php
    protected $connection = 'mysql_rfs_consulting_db';
   // protected $appends = [Formation::class];
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->formation = $this->belongsTo(Formation::class)->get();        
    // }
    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
