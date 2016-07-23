<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
     protected $fillable = [
        'name', 'email', 'password','contact','current_designation','photo','status_id'
    ];
}
