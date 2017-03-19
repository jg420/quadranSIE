<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SIE\EquipementBundle\DataManager;

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
        $this->bdd = $bdd;
        ;
    }

    function init() {
        $this->connectBDD();
    }

    function connectBDD() {

        //$sqlsrv = new sqlsrv("127.0.0.1", "root", "", "referenciel");
        $this->sqlsrv = new \PDO(
                'sqlsrv:server=' . $this->host . ';Database=' . $this->bdd, $this->login, $this->mdp);

        $db = $this->sqlsrv;
    }

    function closeBDD() {


        if (isset($this->sqlsrv)) {
            $this->sqlsrv = null;
        }
    }

    function getAll() {
        $this->connectBDD();
        $request = "SELECT * FROM EQUIPEMENT";
        $result = $this->sqlsrv->query($request);
        $return = null;

        if ($result) {

            $i = 0;
            $rows = $result->fetchAll(\PDO::FETCH_ASSOC);
            while ($row = array_shift($rows)) {
                $return[$i]['id_equipement'] = $row['id_equipement'];
                $return[$i]['lib_equipement'] = $row['lib_equipement'];
                $return[$i]['id_type_equipement'] = $row['id_type_equipement'];
                $return[$i]['id_constructeur'] = $row['id_constructeur'];
                $return[$i]['n_serie_equipement'] = $row['n_serie_equipement'];
                $return[$i]['version_actuel_equipement'] = $row['version_actuel_equipement'];

                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

    function getAllEtendue() {
        $this->connectBDD();
        $request = "SELECT eq.id_equipement, eq.lib_equipement, ce.lib_central,cn.lib_constructeur
	 

FROM 
	CORRESPONDANCE_EQUIPEMENT_CENTRAL AS co

INNER JOIN CENTRAL as ce ON ce.id_central=co.id_central_fk_ec
INNER JOIN EQUIPEMENT as eq ON eq.id_equipement=co.id_equipement_fk_ec
INNER JOIN CONSTRUCTEUR as cn ON cn.id_constructeur=eq.id_constructeur

";
        $result = $this->sqlsrv->query($request);
        $return = null;

        if ($result) {

            $i = 0;
            $rows = $result->fetchAll(\PDO::FETCH_ASSOC);
            while ($row = array_shift($rows)) {
                $return[$i]['id_equipement'] = $row['id_equipement'];
                $return[$i]['lib_equipement'] = $row['lib_equipement'];
                //$return[$i]['id_type_equipement'] = $row['id_type_equipement'];
                //$return[$i]['lib_constructeur'] = $row['lib_constructeur'];
                //$return[$i]['n_serie_equipement'] = $row['n_serie_equipement'];
                $return[$i]['lib_central'] = utf8_encode($row['lib_central']);
                //$return[$i]['adresse_ip'] = $row['adresse_ip'];
                //$return[$i]['login'] = $row['login'];
                //  $return[$i]['password'] = $row['password'];

                $return[$i]['lib_constructeur'] = utf8_encode($row['lib_constructeur']);


                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

    function getEquipement($id_equipement) {
        $this->connectBDD();

        $request = "SELECT e.id_equipement AS id_equipement,
                            e.lib_equipement AS lib_equipement,
                            e.num_serie as num_serie,
                            e.id_constructeur as id_constructeur,
                            e.adresse_ip_local as adresse_ip_local,
                            e.adresse_ip_vpn as adresse_ip_vpn,
                            e.adresse_mac as adresse_mac,
                            e.version_firmware,
                            
                            c.lib_central AS lib_central,
                            te.libelle_type_equipement as lib_type,
                            
                          
                    FROM EQUIPEMENT AS e
                    INNER JOIN CORRESPONDANCE_EQUIPEMENT_CENTRAL AS ec ON ec.id_equipement_fk_ec = e.id_equipement
                    INNER JOIN 
                    INNER JOIN CENTRAL AS c ON c.id_central = ec.id_central_fk_ec
                    INNER JOIN TYPE_EQUIPEMENT AS te ON te.id_type_equipement = e.id_type_equipement
                    WHERE e.id_equipement=" . $id_equipement;

        //echo $request;
        $result = $this->sqlsrv->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            $rows = $result->fetchAll(\PDO::FETCH_ASSOC);
            while ($row = array_shift($rows)) {

                $return[$i]['id_equipement'] = $row['id_equipement'];
                $return[$i]['lib_equipement'] = utf8_encode($row['lib_equipement']);
                $return[$i]['type_equipement'] = utf8_encode($row['lib_type']);
                $return[$i]['lib_central'] = utf8_encode($row['lib_central']);

                $i++;
            }
            $result = null;
        }


        $this->closeBDD();
        return $return;
    }

    function getAccessEquipement($id_equipement) {
        
    }

    function getConfigEquipement($id_equipement) {
        
    }

    function getApercuEquipement($id_equipement) {
        
    }

    

    function updateConfigEquipement() {
        
    }

    function updateAccessEquipement() {
        
    }

    function getDetailEquipement($id_equipement) {
        $this->connectBDD();

        $request = "SELECT e.id_equipement AS id_equipement,
                            e.lib_equipement AS lib_equipement,
                            c.lib_central AS lib_central,
                            te.libelle_type_equipement as lib_type
    FROM EQUIPEMENT AS e
    INNER JOIN CORRESPONDANCE_EQUIPEMENT_CENTRAL AS ec ON ec.id_equipement_fk_ec = e.id_equipement
    INNER JOIN CENTRAL AS c ON c.id_central = ec.id_central_fk_ec
    INNER JOIN TYPE_EQUIPEMENT AS te ON te.id_type_equipement = e.id_type_equipement
    WHERE e.id_equipement=" . $id_equipement;

        //echo $request;
        $result = $this->sqlsrv->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            $rows = $result->fetchAll(\PDO::FETCH_ASSOC);
            while ($row = array_shift($rows)) {

                $return[$i]['id_equipement'] = $row['id_equipement'];
                $return[$i]['lib_equipement'] = utf8_encode($row['lib_equipement']);
                $return[$i]['type_equipement'] = utf8_encode($row['lib_type']);
                $return[$i]['lib_central'] = utf8_encode($row['lib_central']);

                $i++;
            }
            $result = null;
        }


        $this->closeBDD();
        return $return;
    }

    function getEquipementsByIdCentral($id_central) {
        $this->connectBDD();

        $request = "SELECT co.lib_constructeur, te.libelle_type_equipement as lib_type,
            e.id_type_equipement,
            e.id_constructeur,
            e.id_equipement , 
            e.lib_equipement ,
            e.n_serie_equipement,
            e.version_actuel_equipement,
            c.lib_central,
            c.id_central,
            te.libelle_type_equipement 
FROM EQUIPEMENT AS e
INNER JOIN CORRESPONDANCE_EQUIPEMENT_CENTRAL AS ec ON ec.id_equipement_fk_ec = e.id_equipement
INNER JOIN CENTRAL AS c ON c.id_central = ec.id_central_fk_ec
INNER JOIN TYPE_EQUIPEMENT AS te ON te.id_type_equipement = e.id_type_equipement
INNER JOIN CONSTRUCTEUR AS co ON co.id_constructeur = e.id_constructeur
WHERE ec.id_central_fk_ec=" . $id_central;

        //echo $request;
        $result = $this->sqlsrv->query($request);

        $return = null;
        if ($result) {

            $i = 0;
            $rows = $result->fetchAll(\PDO::FETCH_ASSOC);
            while ($row = array_shift($rows)) {

                $return[$i]['id_equipement'] = $row['id_equipement'];
                $return[$i]['lib_equipement'] = utf8_encode($row['lib_equipement']);
                $return[$i]['type_equipement'] = utf8_encode($row['libelle_type_equipement']);
                $return[$i]['lib_central'] = utf8_encode($row['lib_central']);
                $return[$i]['id_central'] = ($row['id_central']);
                $return[$i]['id_type'] = $row['id_type_equipement'];
                $return[$i]['lib_type'] = utf8_encode($row['lib_type']);
                $return[$i]['id_constructeur'] = $row['id_constructeur'];
                $return[$i]['lib_constructeur'] = utf8_encode($row['lib_constructeur']);
                $return[$i]['id_version'] = $row['version_actuel_equipement'];
                $return[$i]['num_serie'] = $row['n_serie_equipement'];



                $i++;
            }
            $result = null;
        }


        $this->closeBDD();
        return $return;
    }

    function getAccess($i_equipement) {
        $this->connectBDD();

        $request = "SELECT 
		cea.id_equipement_fk_ae,
		eq.lib_equipement,
		a.id_access,
		a.login,
		a.password,
		a.adresse_ip,
		a.n_port,
		a.id_protocol,
		p.lib_protocol
FROM
		CORRESPONDANCE_ACCESS_EQUIPEMENT as cea
INNER JOIN EQUIPEMENT as eq ON eq.id_equipement=cea.id_equipement_fk_ae
INNER JOIN ACCESS as a ON a.id_access=cea.id_access_fk
INNER JOIN PROTOCOL as p ON a.id_protocol=p.id_protocol

WHERE eq.id_equipement=" . $i_equipement;

        //echo $request;
        $result = $this->sqlsrv->query($request);

        $return = null;
        if ($result) {

            $i = 0;
            $rows = $result->fetchAll(\PDO::FETCH_ASSOC);
            while ($row = array_shift($rows)) {

                $return[$i]['id_equipement'] = $row['id_equipement'];
                $return[$i]['id_access'] = $row['id_access'];
                $return[$i]['adresse_ip'] = $row['adresse_ip'];
                $return[$i]['login'] = $row['login'];
                $return[$i]['password'] = $row['password'];
                $return[$i]['port'] = $row['port'];
                $return[$i]['protocol'] = $row['protocol'];




                $i++;
            }
            $result = null;
        }


        $this->closeBDD();
        return $return;
    }

    function getEquipementsExtendedByIdCentral($id_central) {
        $this->connectBDD();

        $request = "SELECT e.id_equipement AS id_equipement, e.lib_equipement AS lib_equipement, c.lib_central AS lib_central, te.libelle_type_equipement as lib_type
FROM EQUIPEMENT AS e
INNER JOIN CORRESPONDANCE_EQUIPEMENT_CENTRAL AS ec ON ec.id_equipement_fk_ec = e.id_equipement
INNER JOIN CENTRAL AS c ON c.id_central = ec.id_central_fk_ec
INNER JOIN TYPE_EQUIPEMENT AS te ON te.id_type_equipement = e.id_type_equipement
WHERE ec.id_central_fk_ec=" . $id_central;

        //echo $request;
        $result = $this->sqlsrv->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            $rows = $result->fetchAll(\PDO::FETCH_ASSOC);
            while ($row = array_shift($rows)) {
                echo('ici');
                $return[$i]['id_equipement'] = $row['id_equipement'];
                $return[$i]['lib_equipement'] = utf8_encode($row['lib_equipement']);
                $return[$i]['type_equipement'] = utf8_encode($row['lib_type']);
                $return[$i]['lib_central'] = utf8_encode($row['lib_central']);

                $i++;
            }
            $result = null;
        }


        $this->closeBDD();
        return $return;
    }

    function addEquipement(
    $lib_equipement, $id_constructeur, $num_serie, $version_actuel, $id_type_equipement) {
        $this->connectBDD();
        $request = "INSERT INTO EQUIPEMENT (id_constructeur,"
                . "id_type_equipement,"
                . "lib_equipement,"
                . "n_serie_equipement,"
                . "version_actuel_equipement)"
                . "VALUES("
                . $id_constructeur . "," . $id_type_equipement . ",'" . $lib_equipement . "'," . $num_serie . "," . $version_actuel . ")";
        $this->sqlsrv->query($request);


        $this->closeBDD();

        return $request;
    }

    function updateEquipement(
    $id_equipement, $lib_equipement, $id_constructeur, $num_serie, $version_actuel, $id_type_equipement
    ) {
        /* $id_equipement = $equipement['id_equipement'];
          $lib_equipement = $equipement['lib_equipement'];
          $id_type_equipement = $equipement['id_type'];
          $id_constructeur = $equipement['id_constructeur'];
          $num_serie = $equipement['n_serie'];
          $version_actuel = $equipement['version']; */


        $request = "UPDATE EQUIPEMENT SET n_serie_equipement = '" . $num_serie . "',lib_equipement='" . $lib_equipement . "',
     id_constructeur=" . $id_constructeur . ","
                . " version_actuel_equipement='" . $version_actuel . "',id_type_equipement=" . $id_type_equipement
                . " WHERE id_equipement=" . $id_equipement;
        $this->connectBDD();
        $return = $request;
        $result = $this->sqlsrv->query($request);
        // $return=null;
        if ($result) {

            //$return = "Modif OK";
            $return = $request;
            //    $result=null;
        }
        //echo $request;
        $this->closeBDD();
        return $return;
    }

    function delEquipement($id_equipement) {
        $this->connectBDD();
        $request = "DELETE * FROM ACCESS WHERE id_equipement=" . $id_equipement;
        $this->sqlsrv->query($request);

        $requestVerif = "SELECT * FROM ACCESS WHERE id_equipement=" . $id_equipement;
        $result = $this->sqlsrv->query($requestVerif);
        $this->closeBDD();

        if ($result) {
            $ret = false;
        } else {
            $ret = true;
        }

        return $ret;
    }

    function getConstructeur() {
        $this->connectBDD();
        $request = "SELECT * FROM CONSTRUCTEUR";
        $result = $this->sqlsrv->query($request);
        $return = null;

        if ($result) {
            $i = 0;
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
                $return[$i]['lib_constructeur'] = $row['lib_constructeur'];
                $return[$i]['id_constructeur'] = $row['id_constructeur'];
                //echo 'ici';
                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

    function getType() {
        $this->connectBDD();
        $request = "SELECT * FROM TYPE_EQUIPEMENT";
        $result = $this->sqlsrv->query($request);
        $return = null;

        if ($result) {
            $i = 0;
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
                $return[$i]['lib_type'] = utf8_encode($row['libelle_type_equipement']);
                $return[$i]['id_type'] = $row['id_type_equipement'];
                //echo 'ici';
                $i++;
            }
        }

        $this->closeBDD();
        return $return;
    }

}
