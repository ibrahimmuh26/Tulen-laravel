<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_product extends Model
{

    use HasFactory;
    protected $table='order_products';
    protected $fillable=[
        'product_id',
        'order_id',
        'qty'
    ];
    public function product(){
        return $this->belongsTo('product_id',product::class);
    }
    public function order(){
        return $this->belongsTo('order_id',order::class);
    }
}
