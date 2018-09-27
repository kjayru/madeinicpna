<?php
include 'start.php';
require dirname(__FILE__).'/vendor/autoload.php';

use Controllers\RegistrosData;

function cleardata($data) { return htmlspecialchars(stripslashes(trim($data))); }
if(isset($_POST['tipo']) && $_POST['tipo']!='')
{
  
    $fecha = date("Y-m-d H:i:s",strtotime("-5 hour"));
    $fechar = date("Y-m-d",strtotime("-5 hour"));
    switch ($_POST['tipo']) {

        case 'registro':
            $nombres = cleardata($_POST['nombres']);
            $apellidos = cleardata($_POST['apellidos']);
            $tipodocumento = cleardata($_POST['tipodocumento']);
            $numerodocumento = cleardata($_POST['numerodocumento']);
            $celular = cleardata($_POST['celular']);
            $correo = cleardata($_POST['correo']);
            $sedes = cleardata($_POST['sedes']);
            $programa = cleardata($_POST['programa']);
            $formulario = cleardata($_POST['formulario']);
			$pauta = cleardata($_POST['pauta']);
			
            $utm_source = cleardata($_POST['utm_source']);
            $utm_medium = cleardata($_POST['utm_medium']);
            $utm_campaign = cleardata($_POST['utm_campaign']);
            $utm_term = cleardata($_POST['utm_term']);
            $utm_content = cleardata($_POST['utm_content']);
            $gclid = cleardata($_POST['gclid']);

          
            $verificacion = RegistrosData::show($numerodocumento,$fechar);
            
                if($verificacion>0) {
                    echo json_encode(array('rpta' => 'existe' ));
                } else {

                
                    $registro =  RegistrosData::store($nombres, $apellidos, $tipodocumento, $numerodocumento, $celular, $correo, $sedes, $programa, $pauta, $formulario, $utm_source, $utm_medium, $utm_campaign, $utm_term, $utm_content, $gclid, $fecha);               
                    echo json_encode($registro);
                    
                }

        break;
    }
}

?>
