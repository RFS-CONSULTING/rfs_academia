<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataForModule extends Model
{
    use HasFactory;
    protected $table = 'data_for_modules';
    protected $guarded = ['id'];
    protected $fillable = ['name','module_id','data_path'];
}
