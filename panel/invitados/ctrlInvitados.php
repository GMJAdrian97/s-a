<?php

    require_once('mdlinvitados.php');

    $codigo = NULL;
    $accion = NULL;
    if(isset($_GET['accion'])){
        $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
        $accion = $_GET['accion'];
    }

    switch($accion){
        case 'BuscarInvitacion':
            $codigo = $_POST['codigo'];
            $datosInvitadosReadOne = $invitados->readOne($codigo);
            if(isset($datosInvitadosReadOne)){
                require_once('vistaInvitados.php');
                } else {
                echo 'nada';
            }
             break;
        
         //////////////////////////////////////// Caso read One ////////////////////////////////////////
     case 'readOne':
            $datosInvitadosReadOne = $invitados->readOne($codigo);
            if(isset($datosInvitadosReadOne['codigo'])){
                echo '<img src="/s&a/imgs/IconAsistencia.png" class="img-icons" alt="">';
                echo "<strong>Codigo: </strong>".$datosInvitadosReadOne['codigo']."<br />
                      <strong>Familia: </strong>".$datosInvitadosReadOne['nombre_familia']."<br />
                      <strong>Pases: </strong>".$datosInvitadosReadOne['pases']."<br />
                      <strong>Niños: </strong>".$datosInvitadosReadOne['ninos']."<br />
                      <strong>Asistira?: </strong>".$datosInvitadosReadOne['asistencia']."<br />";
                
                } else {
                echo 'nada';
            }
             break;


        //////////////////////////////////////// Caso New ////////////////////////////////////////
        case 'new':
            require_once('formInvitados.php');
        break;

        //////////////////////////////////////// Caso add ////////////////////////////////////////
        case 'add':
            $datosInvitados = $_POST;
            $resultado = $invitados->create($datosInvitados);
            $datosInvitados = $invitados->read();
            require_once('vistaNovios.php');
        break; 
        
        //////////////////////////////////////// Caso modify ////////////////////////////////////////
        case 'modify':
            $datosInvitado = $invitados->readOne($codigo);
            //$datoinvitadoss = $invitados->read();
            if(is_array($datosInvitado)){
                require_once('formInvitados.php');
            } else{
                //$invitados->message(0,"Ocurrio un error, el invitados no exixte");
                $datosInvitado = $invitados->read();
                require_once('vistaNovios.php');
            }
        break; 

        //////////////////////////////////////// Caso update ////////////////////////////////////////
        case 'update':
            $datosInvitados=$_POST;
            $resultado=$invitados->update($datosInvitados,$codigo);
            //$invitados->message($resultado, ($resultado)?"El invitados se modifco correctamente": "Ocurrio un error al modificar el invitados");
            $datosInvitados = $invitados->read();
            require_once('vistaNovios.php');
        break;

        //////////////////////////////////////// Caso delete ////////////////////////////////////////
       case 'borrar':
            $resultado = $invitados->delete($codigo);
         
        //////////////////////////////////////// Caso default ////////////////////////////////////////

        default:
            $datosInvitados = $invitados->read();
            require_once('vistaNovios.php');
    }

?>