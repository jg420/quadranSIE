<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SIE\AccessBundle\DataManager;

/**
 * Description of SqlServeur
 *
 * @author g.juillerot
 */
class SqlServeur {
    var $sqlsrv;
    var $login;
    var $mdp;
    var $bdd;

    function __construct($host, $login, $mdp, $bdd) {
        $this->host = $host;
        $this->login = $login;
        $this->mdp = $mdp;
        $this->bdd = $bdd
        ;
    }

    function init() {
        $this->connectBDD();
    }

    function connectBDD() {

        //$sqlsrv = new sqlsrv("127.0.0.1", "root", "", "referenciel");
        $this->sqlsrv = new \PDO(
                'sqlsrv:server='.$this->host.';Database='.$this->bdd,
                $this->login, 
                $this->mdp);

       // $db = $this->sqlsrv;
     /*   if ($db->connect_errno > 0) {
            die('Unable to connect to database [' . $db->connect_error . ']');
        }*/
    
    }

    function closeBDD() {


        if (isset($this->sqlsrv)) {
            $this->sqlsrv=null;
        }
    }

    function getAll() {
        $this->connectBDD();
        $request = "SELECT * FROM ACCESS";
       $result = $this->sqlsrv->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
                $return[$i]['lib_access'] = $row['lib_access'];
                $return[$i]['id_access'] = $row['id_access'];
                $return[$i]['n_port'] = $row['n_port'];
                $return[$i]['login'] = $row['login'];
                $return[$i]['password'] = $row['password'];
                $return[$i]['id_adresse'] = $row['id_adresse_ip_equipement'];

                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

    function getAccess($id_access) {
        $this->connectBDD();
        $request = "SELECT * FROM ACCESS";
        $result = $this->sqlsrv->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
                $return[$i]['lib_access'] = $row['lib_access'];
                $return[$i]['id_access'] = $row['id_access'];
                $return[$i]['n_port'] = $row['n_port'];
                $return[$i]['login'] = $row['login'];
                $return[$i]['password'] = $row['password'];
                $return[$i]['id_adresse'] = $row['id_adresse_ip_equipement'];

                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

    function getAccessByIdCentral($id_central) {
        $this->connectBDD();
        $request = "SELECT * FROM ACCESS AS a INNER JOIN CORRESPONDANCE_ACCESS_EQUIPEMENT AS cae"
                . " WHERE cae.id_equipement_fk_ae=".$id_equipement;
        $result = $this->sqlsrv->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
                $return[$i]['lib_access'] = $row['lib_access'];
                $return[$i]['id_access'] = $row['id_access'];
                $return[$i]['n_port'] = $row['n_port'];
                $return[$i]['login'] = $row['login'];
                $return[$i]['password'] = $row['password'];
                $return[$i]['id_adresse'] = $row['id_adresse_ip_equipement'];

                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

    function getAccessByIdEquipement($id_equipement) {
        $this->connectBDD();
        $request = "";
        $request = "SELECT a.id_access,a.adresse_ip,a.id_protocol, a.lib_access, a.login, a.n_port, a.password,
 
p.lib_protocol

FROM ACCESS AS a, PROTOCOL as p

INNER JOIN CORRESPONDANCE_ACCESS_EQUIPEMENT AS cae
 

WHERE cae.id_access_fk=a.id_access AND cae.id_equipement_fk_ae=".
                $id_equipement
                ."
AND p.id_protocol=a.id_protocol";
        
        
        $result = $this->sqlsrv->query($request);
       //echo $request;
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
                $return[$i]['lib_access'] = $row['lib_access'];
                $return[$i]['id_access'] = $row['id_access'];
                $return[$i]['n_port'] = $row['n_port'];
                $return[$i]['login'] = $row['login'];
                $return[$i]['password'] = $row['password'];
                 
                $return[$i]['adresse']=$row['adresse_ip'];
                $return[$i]['id_protocol']=$row['id_protocol'];
               $return[$i]['lib_protocol']=$row['lib_protocol'];

                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

    function addAccess( 
        $lib_access,
        $n_port,
        $login,
        $pass,
        $adresse_ip,
        $id_protocol,
        $id_equipement){
        
        //TODO AJOUTER LES FILTRES
        
        //Ajout de l'access
        $this->connectBDD();
        $request = "INSERT INTO ACCESS (n_port,"
                . "login,"
                . "password,"
                . "adresse_ip,"
               . "id_protocol,"
                . "lib_access)"
                . " VALUES(".$n_port.",'".$login."','".$pass."','".$adresse_ip."',".$id_protocol.",'".$lib_access
                ."');";
        $this->sqlsrv->query($request);
      
        //Selection de l'id Access
        //
        $request="SELECT  id_access FROM ACCESS "
                . "WHERE adresse_ip LIKE '".$adresse_ip."'"
                ." AND id_protocol =".$id_protocol;
                //." AND id_protocol =".$id_protocol;
        $result=$this->sqlsrv->query($request);
        
        //TODO Verification
        $row = $result->fetch(\PDO::FETCH_ASSOC);
        
        $id_access=$row['id_access'];
        
        
        //AJout de la correspondance avec l 'equipement
        $request="INSERT INTO CORRESPONDANCE_ACCESS_EQUIPEMENT (id_access_fk,id_equipement_fk_ae)"
                . "VALUES(".$id_access.",".$id_equipement.")";
        
        $this->sqlsrv->query($request);
        
        $this->closeBDD();
        return $request;
    }

    function delAccess($id_acess) {
        $this->connectBDD();
        $request = "DELETE * FROM ACCESS WHERE id_access=" . $id_acess;
        $this->sqlsrv->query($request);

        $requestVerif = "SELECT * FROM ACCESS WHERE id_access=" . $id_acess;
        $result = $this->sqlsrv->query($requestVerif);
        $this->closeBDD();

        if ($result) {
            $ret = false;
        } else {
            $ret = true;
        }

        return $ret;
    }

    function updateAccess($id_access,
            $lib_access,
            $login,
            $pass,
            $n_port,
            $id_protocol,
            $adresse
            ) {

        /*$id_access = $access['id_access'];
        $n_port = $access['n_port'];
        $login = $access['login'];
        $pass = $access['password'];
        $id_adresse_ip_equipement = $access['id_adresse_ip_equipement'];
        $id_protocol = $access['id_protocol'];
        $lib_access = $access['lib_access'];*/


        $request = "UPDATE ACCESS
SET adresse_ip='".$adresse."', 
    lib_access='" . $lib_access . "',
     id_protocol=" . $id_protocol  . ", 
n_port=" . $n_port . " " . ",
login='" . $login . "' " . ","
                . "password='" . $pass . "'" .
                // "id_cex=".$cex." 
                " WHERE id_access=" . $id_access;
        
        $this->connectBDD();
        $return = $request;
        //echo $request;
        $result = $this->sqlsrv->query($request);

        if ($result) {
            $return = "Modif OK";
        }
        $this->closeBDD();
        return $return;
    }

    function getProtocols(){
         $this->connectBDD();
        $request = "SELECT * FROM PROTOCOL";
        $result = $this->sqlsrv->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
                $return[$i]['lib_protocol'] =$row['lib_protocol'];
                $return[$i]['id_protocol'] = $row['id_protocol'];
               

                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }
}
