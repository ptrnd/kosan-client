<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public $table = 'rooms';

    protected $appends = [
        'photos',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'property_id',
        'capacity',
        'description',
        'price',
        'stock',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
