<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'salutation',
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'address',
        'city',
        'postcode',
        'telephone',
        'email',
    ];
}
