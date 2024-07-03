<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegUser extends Model
{
    use HasFactory;
    protected $table='reguser';
    protected $fillable = [ 'email','password'];
}
