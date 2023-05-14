<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table="products";
    protected $fillable=[
        'company_id',
        'name',
        'category_id',
        'qty',
        'harga',
        'img',
        'deskripsi',
        'status'
    ];

    public function category(){
        return $this->belongsTo('category_id',category::class);
    }

    public function order_product(){
        return $this->hasMany(order_product::class);
    }
}
