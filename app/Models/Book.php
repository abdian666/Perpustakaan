<?php

namespace App\models;

use illuminate\Database\Eloquent\model;


class book extends Model
{
    
    protected $table = 'books';
    protected $fillable = ['judul','penulis','penerbit'];
}
