<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investor extends Model
{
    use HasFactory;
    protected $table="investors";
    protected $fillable=[
        'User_id',
        'company_id',
        'total_investasi',
        'status_investasi'
    ];

    public function company(){
        return $this->belongsTo(company::class,'company_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'User_id');
    }
}
