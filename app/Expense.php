<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'transaction', 'price', 'date_purchase','note','user_id'
    ];


}
