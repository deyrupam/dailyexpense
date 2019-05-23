<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contact;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'subject'
    ];

}
