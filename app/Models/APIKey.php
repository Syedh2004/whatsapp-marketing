<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class APIKey extends Model
{
    use HasFactory;

    protected $table = 'api_key';
    protected $guarded = ['id'];

}
