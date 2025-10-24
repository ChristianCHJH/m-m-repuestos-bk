<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['ruc','razon_social','direccion','distrito'];
}

