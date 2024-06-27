<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customquote extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'product',
        'length',
        'width',
        'height',
        'unit',
        'printing',
        'material',
        'quantity1',
        'quantity2',
        'quantity3',
        'deadline',
        'description',
        'fileUpload',

    ];
}
