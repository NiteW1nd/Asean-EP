<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;

    public $fillable=[
        'gender',
        'country',
        'age',
        'business-type',
        'business-field',
        'quest1',
        'quest2',
        'quest3',
        'quest4',
        'quest5',
        'quest6',
        'quest7',
        'quest8',
        'quest9',
        'quest10',
        'quest11',
        'quest12',
        'quest13',
        'quest14',
        'quest15',
        'quest16'
    ];
}
