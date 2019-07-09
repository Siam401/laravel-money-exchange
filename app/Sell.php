<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $fillable = [
        'trx_type', 'sender_name','receive_method','send_method','send_amount','receive_amount','receive_method_number','send_method_address'
    ];
}
