<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable=[
        'company_id',
        'User_id',
        'total',
        'status_pembayaran'
    ];

    public function user(){
        return $this->belongsTo('User_id',User::class);
    }

    public function company(){
        return $this->belongsTo('company_id',company::class);

    }

    public function order_product(){
        return $this->hasOne(order_product::class);
    }
}
