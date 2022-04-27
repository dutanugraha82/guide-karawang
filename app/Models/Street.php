<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $table = 'street';
    protected $fillable = ['fnb_id', 'Description', 'img'];
}
