<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ["firstName", "lastName", "email", "mobile", "password", "otp"];

    protected $attributes = [
        "otp" => "0"
    ];

    public $timestamps = true; // when timestamp create_at or update_at custom that time need to false.


}
