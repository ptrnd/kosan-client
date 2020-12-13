<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $table = 'transactions';

    protected $appends = [
        'payment_proof',
    ];

    const PAYMENT_STATUS_SELECT = [
        '1' => 'Terbayar',
        '0' => 'Belum Terbayar',
    ];

    protected $dates = [
        'check_in',
        'check_out',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'room_id',
        'check_in',
        'check_out',
        'payment_status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
