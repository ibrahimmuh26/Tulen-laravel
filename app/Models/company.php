<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    
    protected $table="companies";
    protected $fillable=[
        'User_id',
        'name',
        'alamat'
    ];

    public function user(){
        return $this->belongsTo('User_id',User::class);
    }

    public function product(){
        return $this->hasMany(product::class);
    }

    public function investor(){
        return $this->hasMany(investor::class);
    }
}
