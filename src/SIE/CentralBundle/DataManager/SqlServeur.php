<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SIE\CentralBundle\DataManager;

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

    function __construct($host,$login,$mdp,$bdd) {
        $this->host=$host;
        $this->login=$login;
        $this->mdp=$mdp;
        $this->bdd=$bdd;
    }
 

    function connectBDD() {

        //$sqlsrv = new sqlsrv("127.0.0.1", "root", "", "referenciel");
        $this->sqlsrv = new \PDO(
                'sqlsrv:server='.$this->host.';Database='.$this->bdd,
                $this->login, 
                $this->mdp);

        $db = $this->sqlsrv;
     /*   if ($db->connect_errno > 0) {
            die('Unable to connect to database [' . $db->connect_error . ']');
        }*/
    }

    function closeBDD() {


        if (isset($this->sqlsrv)) {
         $this->sqlsrv=null;
        }
    }

    function getAllCentral() {
        $this->connectBDD();
        $request = "SELECT c.id_central AS id_central,c.lib_central AS lib_central,
       tc.lib_type_central AS lib_type,
       cex.tri_cex as lib_cex,
       d.lib_direction as lib_direction,
       d.id_direction as id_direction,
       c.code_analytique as code_ana,
       c.societe as societe       
       
 FROM CENTRAL AS c
INNER JOIN DIRECTION_REGIONALES AS d ON c.id_direction = d.id_direction
 INNER JOIN           TYPE_CENTRAL AS tc ON  tc.id_type_central = c.id_type_central
 INNER JOIN           CHARGE_EXPLOITATION as cex ON cex.id_cex=c.id_cex";
        //echo $request;
        $result = $this->sqlsrv->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {

                $return[$i]['lib_central'] = utf8_encode($row['lib_central']);
                $return[$i]['id_central'] = $row['id_central'];
                $return[$i]['lib_type'] = utf8_encode($row['lib_type']);
                $return[$i]['lib_cex'] = utf8_encode($row['lib_cex']);
                $return[$i]['lib_direction'] = utf8_encode($row['lib_direction']);
                $return[$i]['id_direction'] = $row['id_direction'];
                $return[$i]['code_ana'] = utf8_encode($row['code_ana']);
                $return[$i]['societe'] = utf8_encode($row['societe']);
                $i++;
            }
            //$result->free();
        }
        $this->closeBDD();
        return $return;
    }
    /**
     * Retourne un tableau contenant les informations de la centrale ayant l'id 
     * 
     * param $id_central num id central
     */
    function getCentral($id_central){
        $this->connectBDD();
        $request = "SELECT c.id_central AS id_central,
       c.lib_central AS lib_central,
       tc.lib_type_central AS lib_type,
       cex.tri_cex as lib_cex,
       d.lib_direction as lib_direction,
       d.id_direction as id_direction,
       c.code_analytique as code_ana,
       c.societe as societe       
       
 FROM CENTRAL AS c
INNER JOIN DIRECTION_REGIONALES AS d,
            TYPE_CENTRAL AS tc,
            CHARGE_EXPLOITATION as cex          
 
WHERE 
 tc.id_type_central = c.id_type_central
AND c.id_direction = d.id_direction
AND cex.id_cex=c.id_cex 
AND c.id_central=".$id_central;
        //echo $request;
        $result = $this->sqlsrv->query($request);
        $return = null;
        if ($result) {
            $i = 0;
            while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {

                $return[$i]['lib_central'] = utf8_encode($row['lib_central']);
                $return[$i]['id_central'] = $row['id_central'];
                $return[$i]['lib_type'] = utf8_encode($row['lib_type']);
                $return[$i]['lib_cex'] = utf8_encode($row['lib_cex']);
                $return[$i]['lib_direction'] = utf8_encode($row['lib_direction']);
                $return[$i]['id_direction'] = $row['id_direction'];
                $return[$i]['code_ana'] = utf8_encode($row['code_ana']);
                $return[$i]['societe'] = utf8_encode($row['societe']);
                $i++;
            }
            $result->free();
        }
        $this->closeBDD();
        return $return;
    }
    
    function addCentral($central){
        $lib_central=$central['lib_central'];
        $id_type=$central['id_type'];
        $id_direction=$central['id_direction'];
        $code_ana=$central['code_ana'];
        $societe=$central['societe'];
        
        
        $this->connectBDD();
        $request="INSERT INTO CENTRAL (lib_central,id_type,id_direction,code_ana,societe)"
                . " VALUES(".$lib_central.", "
                . $id_type.", "
                . $id_direction.", "
                . $code_ana.", "
                . $societe.")";
        $this->sqlsrv->query($request);
        
        
        $this->closeBDD();
    }
    function delCentral($id_central){
        $this->connectBDD();
        $request="DELETE FROM CENTRAL WHERE id_central=".$id_central;
        $this->sqlsrv->query($request);
        
        $requestVerif="SELECT * FROM CENTRAL WHERE id_central=".$id_central;
        $result=$this->sqlsrv->query($requestVerif);
        $this->closeBDD(); 
        
        if($result){
            $ret=false;
        }else {
            $ret=true;
        }
        
       return $ret;
    }
    function updateCentral($central){
         $this->connectBDD();
        $id_central=$central['id_central'];
        $lib_central=$central['lib_central'];
       // $id_type=$central['id_type'];
        //$id_direction=$central['id_direction'];
        $code_ana=$central['code_ana'];
        $societe=$central['societe'];
        
        $request="UPDATE CENTRAL
SET code_analytique = '".$code_ana."',
    lib_central='".$lib_central."',"
 //    id_direction=".$id_direction." ".","
           . "societe='".$societe.
                //."id_type_central='".$id_type."'".
    // "id_cex=".$cex." 
"' WHERE id_central=".$id_central;
   $return=$request;
   $result = $this->sqlsrv->query($request);
  // $return=null;
   if($result){
       $return="Modif OK";
    //    $result->free();
    } 
       $this->closeBDD();
    return $return;  
    }
    function getSociete(){
    $this->connectBDD();
    

   $request="SELECT * FROM SOCIETE";
   $result = $this->sqlsrv->query($request);
   $return=null;
   if($result){
       $i=0;
       /* Récupère un tableau associatif */
        while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
            
            $return[$i]['id_societe']            = utf8_encode($row['id_societe']);
            $return[$i]['lib_societe']            =utf8_encode( $row['lib_societe']);
            
            
            
            $i++;
        }

        /* Libération des résultats */
        $result->free();
       }
       $this->closeBDD();
    return $return;  
}

 

}
