<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SIE\DocumentBundle\DataManager;

/**
 * Description of SqlServeur
 *
 * @author g.juillerot
 */
class SqlServeur {

    var $mysqli;
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

        //$mysqli = new mysqli("127.0.0.1", "root", "", "referenciel");
        $this->mysqli = new \mysqli($this->host, $this->login, $this->mdp, $this->bdd);

        $db = $this->mysqli;
        if ($db->connect_errno > 0) {
            die('Unable to connect to database [' . $db->connect_error . ']');
        }
    }

    function closeBDD() {


        if (isset($this->mysqli)) {
            $this->mysqli->close();
        }
    }

    function getAll() {
        $this->connectBDD();
        $request = "";
        $this->mysqli->query($request);


        $this->closeBDD();
    }

    function getDocumentByIdCentral($id_central) {
        $this->connectBDD();
        $request =" SELECT * FROM CORRESPONDANCE_DOCUMENT_CENTRAL AS cdc "
                . " INNER JOIN DOCUMENT as d ON cdc.id_document=d.id_document "
                . " WHERE cdc.id_central=" . $id_central;
        $result = $this->mysqli->query($request);
        //echo $request;
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
                $return[$i]['id_document'] = $row['id_document'];
                $return[$i]['lib_document'] = $row['lib_document'];
                $return[$i]['lien_document'] = $row['lien_document'];
                $i++;
            }
        }

        $this->closeBDD();
        //
        //return $request;
        return $return;
    }

    function ajoute_document($lib_doc) {
        $this->connectBDD();
        $path_upload_file="uploads/";
        $request1 = "INSERT INTO DOCUMENT (lib_document,lien_document) "
                . "VALUES ('" . $lib_doc . "','".$path_upload_file.$lib_doc."')";
        
        $this->mysqli->query($request1);

        $request = "SELECT id_document FROM DOCUMENT  "
                . "WHERE lib_document LIKE '" . $lib_doc . "'";

        $result = $this->mysqli->query($request);
        $return="";
        if ($result) {
            $i = 0;
           $row = $result->fetch(\PDO::FETCH_ASSOC) ;
                $return = $row['id_document'];
             

            $this->closeBDD();
            
        } return $return;
    }

    function add_document_central($lib_doc, $id_doc, $id_central) {
        $this->connectBDD();
        $id_document=$id_doc+0;
         $request1 = "UPDATE DOCUMENT SET lib_document='".$lib_doc           
                . "' WHERE id_document=".$id_document;
                ;
        $this->mysqli->query($request1);
        
        $request = "INSERT INTO CORRESPONDANCE_DOCUMENT_CENTRAL (id_central,id_document) "
                . "VALUES (" . $id_central. ",".$id_doc.")";
        $this->mysqli->query($request);
        
         $this->closeBDD();
         return $request1;
    }

}