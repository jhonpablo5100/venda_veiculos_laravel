<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_sistema extends Model
{
    use HasFactory;
    protected $fillable =['marca','modelo','valor'];

}