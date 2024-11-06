<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'name',
        'description',
        'price',
        'active',
    ];

    public $timestamps = true; // Set to false if you don't want Laravel to handle created_at and updated_at

    protected $casts = [
        'price' => 'decimal:2',  // Cast price to decimal with 2 decimal places
        'active' => 'boolean',    // Cast active as a boolean
    ];
}
