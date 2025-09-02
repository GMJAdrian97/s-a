<?php

    require_once('../../sistema.php');

    class Invitados extends Sistema{
        public $codigo;
        public $nombre_familia;
        public $pases;
        public $ninos;
        public $asistencia;

        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
            return $this;
        }

        public function getNombre_familia(){
            return $this->nombre_familia;
        }

        public function setNombre_familia($nombre_familia){
                $this->nombre_familia = $nombre_familia;
                return $this;
        }
        public function getPases(){
            return $this->pases;
        }

        public function setPases($pases){
                $this->pases = $pases;
                return $this;
        }

        public function getNinos(){
            return $this->ninos;
        }

        public function setNinos($ninos){
                $this->ninos = $ninos;
                return $this;
        }

        public function getAsistencia(){
            return $this->asistencia;
        }

        public function setAsistencia($asistencia){
                $this->asistencia = $asistencia;
                return $this;
        }

        //////////////////////////////////////// Metodos CRUD ////////////////////////////////////////


        //////////////////////////////////////// Metodo read ////////////////////////////////////////
        public function read(){
            $this->conexion();
            $sql = "SELECT *
                     FROM invitados;";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $datosInvitados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $datosInvitados;
        }

        //////////////////////////////////////// Metodo read One ////////////////////////////////////////
        public function readOne($codigo){
            $this->conexion();
            $sql = "SELECT *  
                        from invitados
                        WHERE codigo = :codigo;";
            $stmt = $this->con->prepare($sql);
            $stmt -> bindParam(':codigo', $codigo, PDO::PARAM_STR);
            $stmt->execute();
            $datosInvitados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $datosInvitados = (isset($datosInvitados[0]))?$datosInvitados[0]:null;
            return $datosInvitados;
        }

        //////////////////////////////////////// Metodo Create ////////////////////////////////////////
        public function create($datosInvitados){
            $this->conexion();
            $sql = "INSERT INTO invitados (codigo, 
                                            nombre_familia,
                                            pases,
                                            ninos,
                                            asistencia) 
                            VALUES (:codigo,
                                    :nombre_familia,
                                    :pases,
                                    :ninos,
                                    :asistencia)"; 
            $stmt = $this->con->prepare($sql);
            $stmt -> bindParam(':codigo', $datosInvitados['codigo'], PDO::PARAM_STR);
            $stmt -> bindParam(':nombre_familia', $datosInvitados['nombre_familia'], PDO::PARAM_STR);
            $stmt -> bindParam(':pases', $datosInvitados['pases'], PDO::PARAM_INT);
            $stmt -> bindParam(':ninos', $datosInvitados['ninos'], PDO::PARAM_INT);
            $stmt -> bindParam(':asistencia', $datosInvitados['asistencia'], PDO::PARAM_STR);
            $rs = $stmt->execute();
            return  $stmt->rowCount();
        }

        //////////////////////////////////////// Metodo Update ////////////////////////////////////////
        public function update($datosInvitados, $codigo){
            $this->conexion();
            $sql = "UPDATE invitados set 
                            nombre_familia = :nombre_familia,
                            pases = :pases,
                            ninos = :ninos,
                            asistencia = :asistencia 
                    WHERE codigo = :codigo";
            $stmt = $this->con->prepare($sql);
            $stmt -> bindParam(':nombre_familia', $datosInvitados['nombre_familia'], PDO::PARAM_STR);
            $stmt -> bindParam(':pases', $datosInvitados['pases'], PDO::PARAM_INT);
            $stmt -> bindParam(':ninos', $datosInvitados['ninos'], PDO::PARAM_INT);
            $stmt -> bindParam(':asistencia', $datosInvitados['asistencia'], PDO::PARAM_STR);
            $stmt -> bindParam(':codigo', $codigo, PDO::PARAM_STR);
            $rs = $stmt->execute();
            return  $stmt->rowCount();
        }

        public function updateConfirmacion($asistencia, $codigo){
            $this->conexion();
            $sql = "UPDATE invitados set 
                            asistencia = :asistencia 
                    WHERE codigo = :codigo";
            $stmt = $this->con->prepare($sql);
            $stmt -> bindParam(':asistencia', $asistencia, PDO::PARAM_STR);
            $stmt -> bindParam(':codigo', $codigo, PDO::PARAM_STR);
            $rs = $stmt->execute();
            return  $stmt->rowCount();
        }

        //////////////////////////////////////// Metodo Delete ////////////////////////////////////////
        public function delete($codigo){
            $this->conexion();
            $sql = "DELETE FROM invitados WHERE codigo = :codigo";
            $stmt = $this->con->prepare($sql);
            $stmt -> bindParam(':codigo', $codigo, PDO::PARAM_STR);
            $rs = $stmt->execute();
            return $stmt->rowCount();
        }

    }

    //////////////////////////////////////// Metodos CRUD ////////////////////////////////////////

    $invitados = new Invitados();
?>