<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produts extends Model
{
    protected $table = 'produts';

    protected $fillable = [
        'uid',
        'name',
        'description',
        'price',
        'stock',
        'category',
        'is_active',
        'deleted_by'
    ];

    public $incrementing = false; // Use UUIDs, not auto-incrementing IDs
    protected $keyType = 'string'; // The primary key is a string (UUID)
}
