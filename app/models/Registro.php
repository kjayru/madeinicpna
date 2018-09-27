<?php 
namespace Models;
 
use \Illuminate\Database\Eloquent\Model;
 
class Registro extends Model {
     
    protected $table = 'registros';
    public $timestamps = false;
    protected $fillable = ['nombres', 'apellidos', 'tipodocumento', 'numerodocumento', 'celular', 'correo', 'sedes', 'programa',
    'pauta', 'formulario', 'utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'gclid', 'fecha'];
   

     
}