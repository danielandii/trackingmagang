<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['nama','username','level'];
    protected $hidden = [
        'password'
   ];
   protected $guard = "admins";
}
