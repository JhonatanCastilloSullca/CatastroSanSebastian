<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoAdjunto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_documentos_adjuntos';


    protected $fillable = [
        'id_ficha',
        'codi_doc',
        'tipo_doc',
        'nume_doc',
        'area_autorizada',
        'fecha_doc'
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_doc';

    public function getRouteKeyName()
    {
        return 'id_doc';
    }

    public function getKeyName()
    {
        return 'id_doc';
    }

    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha');
    }
}
