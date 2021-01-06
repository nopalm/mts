<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table = "download";
    public $timestamps = false;
    protected $fillable = ['juduldown','filedown','deskripsidown'];
}
