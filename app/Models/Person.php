<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';
    protected $primaryKey = 'id';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone'
    ];
}
