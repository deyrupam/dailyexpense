<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Expense extends Model
{
    protected $fillable = [
        'bill', 'price', 'note','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
     }
     public function setPasswordAttribute($value){

        $this->attributes['password']= Hash::make($value);
}

}
