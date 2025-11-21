<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contact extends Authenticatable
{ 
    protected $fillable = [
         'name',
         'location',
         'email',
         'phone',
         'requirement',
         'status'
    ];
  
}
