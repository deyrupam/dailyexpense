<?php

namespace App;
use App\Notification;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'user_id', 'expense_id', 'seen_notification'
    ];


}
