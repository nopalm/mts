<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = "berita";
    public $timestamps = false;
    protected $fillable = ['judulber','gambarber','deskripsiber'];
}
