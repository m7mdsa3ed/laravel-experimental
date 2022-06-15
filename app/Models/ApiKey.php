<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    protected $table = 'api_keys';

    protected $fillable = [
        'key', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
