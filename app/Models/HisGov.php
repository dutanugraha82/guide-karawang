<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HisGov extends Model
{
    protected $table = 'hisgov';
    protected $fillable = ['name','address','contact', 'description', 'img'];
}
