<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_barang extends Model
{
    protected $table = 'barang';
    protected $primarykey = 'id';
    public $timestamps = false;
}
