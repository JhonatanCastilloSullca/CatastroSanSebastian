<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Litigante extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tf_litigantes';


    protected $fillable = [
        'id_persona',
        'codi_contribuye',
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_ficha';

    public function getRouteKeyName()
    {
        return 'id_ficha';
    }

    public function getKeyName()
    {
        return 'id_ficha';
    }

    public function persona()
    {
        return $this->belongsTo('App\Models\Persona','id_persona','id_persona');
    }
    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha');
    }
}
