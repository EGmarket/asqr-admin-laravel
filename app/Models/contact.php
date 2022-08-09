<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*method 1*/
    /*protected $fillable = [
        'name',
        'email',
        'message',
        'contact_time',
        'contact_date'
    ];*/
}
