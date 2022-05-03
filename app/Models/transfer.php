<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'from_acc',
        'recp_bank_name',
        'acc_name',
        'iban',
        'swift_code',
        'amount',
        'message',
        'cm_code'   
    ];

    public function user(){
        return  $this->belongsTo(User::class);
     }
}
