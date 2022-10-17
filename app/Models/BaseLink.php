<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseLink extends Model
{
    use HasFactory;
    protected $fillable = ['id','titulo','url_original','total_max_click'];
}
