/* 
 * Copyright (C) 2016 g.juillerot
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

var pathEquipement = hostPath_dev+"equipement/";

var equipements = [];

equipements['centrale']=[];
equipements['id_equipement'] = [];  //id_equipement
equipements['lib_equipement'] = [];  //lib_equipement
equipements['id_constructeur'] = [];  //id_constructeur
equipements['lib_constructeur'] = [];  //lib_constructeur
equipements['id_type'] = [];  //id_type
equipements['lib_type'] = [];  //lib_type
equipements['id_version'] = [];  //id_version
equipements['version'] = [];  //version
equipements['num serie'] = [];     //num serie
equipements['mac_adresse']=[];
equipements['lien_access']=[];
equipements['login']=[];
equipements['mdp']=[];


var constructeurs = [];
equipements['id_constructeur'] = [];    //id_constructeur
equipements['lib_constructeur'] = [];    //lib_constructeur

var typeEquipement = [];
typeEquipement[0] = [];
typeEquipement[1] = [];

var acces=[];
acces['idAcces']=[];
acces['libAcces']=[];


var id_equipement = "";  //equipement en cours
 
var newEquipement = false;

$(document).ready(function () {
    fe_chargeParametreInitial();
    fe_chargeToutLesEquipements();
    
    $('#btn_modif_equipement').click(function () {
        if (id_central !== "") {
            fre_active_input();
            fre_afficheBtnValidAnnulle();
            fre_loadConstructeur();
            fre_displayConstructeur();
            fre_loadType();
            fre_displayType();

        } else {

            alert(msgNoCentral);
        }
    });
        
    $('#btn_valid_modif_equipement').click(function () {

        if (id_central !== "" & fre_formulaire_est_valide()) {
            //validation de la modification

            if (newEquipement) {



                fre_addEquipement()



            } else {


                fre_modifEquipement();


            }
        } else {

            alert("Saisie non valide");

        }
        fre_desactive_input();
        fre_cacheBtnValidAnnulle();
    });
    
    $('#btn_annuler_modif_equipement').click(function () {


        //UI
        $('#btn_valid_modif_equipement').attr('style', 'visibility:hidden');
        $('#btn_annuler_modif_equipement').attr('style', 'visibility:hidden');

        $('#lib_equipement').attr('disabled', 'disabled');
        $('#mac_equipement').attr('disabled', 'disabled');
        $('#version_equipement').attr('disabled', 'disabled');
        fre_displayEquipementByIdEquipement(id_equipement);

    });
 

});

function fe_chargeParametreInitial(){
    $('#lien_page_equipement').attr('href',pathEquipement);
};

 function fe_chargeToutLesEquipements(){
     $.ajax({
        method: 'GET',
        async: false,
        url: pathEquipement + 'getAll',
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON
                equipements['id_equipement'][index]=value.id_equipement;
                equipements['lib_equipement'][index]=value.lib_equipement;;
                equipements['id_constructeur'][index]=value.id_constructeur;
                equipements['lib_constructeur'][index]=value.lib_constructeur;
                equipements['id_type'][index]=value.id_type;
                equipements['lib_type'][index]=value.lib_type;
                equipements['lien_access'][index]=value.lien_access;
                equipements['login'][index]=value.login;
                equipements['mdp'][index]=value.mdp;
               
                i++;
            });




        },
        error: function () {


        }
    });
 };

 function fe_afficheToutLesEquipements(){
    for(var i=0;i<equipements['id_equipement'].length;i++){
        var lib='lib_equipement'.i;
        var lib='id_constructeur'.i;
        var lib='lib_constructeur'.i;
        var lib='centrale'.i;
        var lib='id_type'.i;
        var lib='lib_type'.i;
        var lib='id_version'.i;
        var lib='lien_access'.i;
        var lib='login'.i;
        var lib='mdp'.i;
         $(lib).val(equipements['lib_equipement'[i]]);
         
    }
 }

 function fe_modifieEquipement(){
     
 }