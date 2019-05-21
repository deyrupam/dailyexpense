<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Expense extends Model
{
    protected $fillable = [
        'transaction', 'price', 'date_purchase','note','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
     }


}
