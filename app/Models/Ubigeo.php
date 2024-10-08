<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomb_ubigeo',
        'cuc_desde',
        'cuc_hasta',
        'ultimo_cuc',
    ];
    protected $table = 'tf_ubigeo';

    protected $primaryKey = 'id_ubi_geo';
    protected $keyType = 'string';
    public $incrementing = false;

    public function getRouteKeyName()
    {
        return 'id_ubi_geo';
    }

    public function getKeyName()
    {
        return 'id_ubi_geo';
    }


    public function sectores()
    {
        return $this->hasMany('App\Models\Sectore');
    }
    public function hab_urbanas()
    {
        return $this->hasMany('App\Models\HabUrbana');
    }
    public function notarias()
    {
        return $this->hasMany('App\Models\Notaria');
    }
}

