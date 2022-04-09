<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutoPdf extends Model
{
    use HasFactory;
    // protected $connection = 'mysql_rfs_consulting_db';
    // protected $table = 'table_tutopdfs';
    protected $table = 'tuto_pdfs';
    protected $guarded = ['id'];
}
