<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class RegUser extends Model
{
    use HasFactory;
     use HasApiTokens;
    protected $table='reguser';
    protected $fillable = [ 'email','password'];
}
