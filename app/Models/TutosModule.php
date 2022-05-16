<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutosModule extends Model
{
    use HasFactory;
    protected $table = 'tutos_modules';
    protected $guarded = ['id'];
}
