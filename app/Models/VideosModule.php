<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideosModule extends Model
{
    use HasFactory;
    protected $table = 'videos_modules';
    protected $guarded = ['id'];
}
