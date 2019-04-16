<?php
include ('../controller/db.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author cetecom
 */
class Usuario {
    private $uid;
    private $pwd;
    private $nombre;
    
    public function __construct($uid, $pwd, $nombre) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->nombre = $nombre;
    }
    
    function getUid() {
        return $this->uid;
    }

    function getPwd() {
        return $this->pwd;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setUid($uid) {
        $this->uid = $uid;
    }

    function setPwd($pwd) {
        $this->pwd = $pwd;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function validaUsuario(){
        if(!isset($dblink)){
            return false;
        }
        $PDOst=$dblink->prepare('SELECT nombre FROM usuario WHERE nomusuario = ? AND clave = ?');
        if(!$PDOst->execute(array($this->nomusario, $this->clave))){
            return false;
        }else{
            $PDOst->fetch();
            $this->nombre=$row["nombre"];
        }
        
    }
    
    
}
