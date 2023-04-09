<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsActive extends Model
{
    use HasFactory;

    protected $table = 'is_active';
    protected $guarded = ['id'];

}
