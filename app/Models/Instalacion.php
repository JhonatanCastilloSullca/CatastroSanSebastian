<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instalacion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_instalaciones';



    protected $fillable = [
        'id_ficha',
        'codi_instalacion',
        'codi_obra',
        'fecha',
        'mep',
        'ecs',
        'ecc',
        'dime_largo',
        'dime_ancho',
        'dime_alto',
        'prod_total',
        'uni_med',
        'uca',
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_instalacion';

    public function getRouteKeyName()
    {
        return 'id_instalacion';
    }

    public function getKeyName()
    {
        return 'id_instalacion';
    }

    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha');
    }

    public function codiinstalacion()
    {
        return $this->belongsTo('App\Models\CodigoInstalacion','codi_instalacion','codi_instalacion');
    }
}
