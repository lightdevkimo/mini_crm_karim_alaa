<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=['user_id','name','actions','notes'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
