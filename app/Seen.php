<?php

namespace App;
use App\Seen;

use Illuminate\Database\Eloquent\Model;

class Seen extends Model
{
    protected $fillable = [
       'notify_id','user_id', 'status'
    ];
}
