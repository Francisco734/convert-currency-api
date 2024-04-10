<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historical extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount_origin',
        'currency_origin',
        'description_origin',
        'flag_origin',
        'symbol_origin',
        'amount_final',
        'currency_final',
        'description_final',
        'flag_final',
        'symbol_final',
        'transaction_id'
    ];
}
