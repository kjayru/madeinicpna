<?php
namespace Controllers;
 use Models\Registro;

class Registros{
 
    public static function store($nombres, $apellidos, $tipodocumento, $numerodocumento, $celular, $correo, $sedes, $programa, $pauta, $formulario, $utm_source, $utm_medium, $utm_campaign, $utm_term, $utm_content, $gclid, $fecha){
        $registro = Registro::create([
            'nombres'=>$nombres,
            'apellidos'=>$apellidos,
            'tipodocumento'=>$tipodocumento, 
            'numerodocumento'=>$numerodocumento,
            'celular'=>$celular, 
            'correo'=>$correo, 
            'sedes'=>$sedes, 
            'programa'=>$programa,
            'pauta'=>$pauta, 
            'formulario'=>$formulario, 
            'utm_source'=>$utm_source, 
            'utm_medium'=>$utm_medium, 
            'utm_campaign'=>$utm_campaign, 
            'utm_term'=>$utm_term, 
            'utm_content'=>$utm_content, 
            'gclid'=>$gclid, 
            'fecha'=>$fecha
        ]);

       
        return array('rpta'=>'ok');
    }

    public static function show($dni,$fecha){

        $registro = Registro::where('numerodocumento',$dni)
            ->whereDate('fecha','=',$fecha)
            ->count();

        return $registro;
    }


}
 
