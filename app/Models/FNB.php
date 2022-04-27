<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FNB extends Model
{
    protected $table = 'fnb';
    protected $fillable = ['name', 'address', 'contact', 'socmed'];
}
