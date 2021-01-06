<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "galeri";
    public $timestamps = false;
    protected $fillable = ['judul','gambar','deskripsi'];
}
