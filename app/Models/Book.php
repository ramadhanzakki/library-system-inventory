<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'id_book';

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'category',
        'year'
    ];
}
