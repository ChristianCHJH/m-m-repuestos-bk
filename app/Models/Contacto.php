<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'empresa_id',
        'nombre',
        'celular',
        'direccion',
        'correo',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}
