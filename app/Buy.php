<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $fillable = [
        'trx_type', 'sender_name','send_method','receive_method','send_amount','receive_amount','send_method_number','send_method_trx_id','receive_method_address'
    ];
}
