<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    use HasFactory;

    // Define which attributes can be mass-assigned
    protected $fillable = ['message', 'language'];
}
