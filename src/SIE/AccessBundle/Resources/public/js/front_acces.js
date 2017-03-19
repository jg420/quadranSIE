/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

var pathAcces = hostPath_dev + "acces/";

var pathAccess = hostPath_dev + "acces/";

var acces = [];

acces['id_access'] = [];  //id_acces
acces['lib_access'] = [];  //lib_acces
acces['login'] = [];  //login
acces['password'] = [];  //password
acces['ip'] = [];  //ip
acces['protocol'] = [];  //protocol
acces['port'] = [];


var id_acces = "";  //equipement en cours

var newAcces = false;

$(document).ready(function () {


    fe_chargeParametreInitial();
    fa_chargeToutLeAccess();
    fa_afficheToutLesAccess();



    $('#lien_menu_acces').attr("class", "active");

    $('#btn_modif_acces').click(function () {
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

    $('#btn_valid_modif_acces').click(function () {

        if (id_central !== "" & fre_formulaire_est_valide()) {
            //validation de la modification

            if (newAcces) {
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

    $('#btn_annuler_modif_acces').click(function () {


        //UI
        $('#btn_valid_modif_acces').attr('style', 'visibility:hidden');
        $('#btn_annuler_modif_acces').attr('style', 'visibility:hidden');

        $('#lib_acces').attr('disabled', 'disabled');
        $('#mac_equipement').attr('disabled', 'disabled');
        $('#version_equipement').attr('disabled', 'disabled');
        fre_displayEquipementByIdEquipement(id_acces);

    });


});


function fa_chargeParametreInitial() {
    $('#lien_page_acces').attr('href', pathAccess);
}
;

function fa_chargeToutLeAccess() {
    $.ajax({
        method: 'GET',
        async: false,
        url: pathAccess + 'getAllEtendue',
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON


                acces['id_access'] = value.id_acces;  //id_acces
                acces['lib_access'] = value.lib_acces;  //lib_acces
                acces['login'] = value.login;  //login
                acces['password'] = value.password;  //password
                acces['ip'] = value.ip;  //ip
                acces['protocol'] = value.protocol;  //protocol
                acces['port'] = value.port;

                //fa_chercheEtChargeAccessEquipement(value.id_acces);


                i++;
            });
        },
        error: function () {
        }
    });
}
;

function fa_chercheEtChargeAccessEquipement(i) {


    $.ajax({
        method: 'GET',
        async: false,
        url: pathAccess + 'getAllEtendue',
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON
                acces['id_access'] = value.id_acces;  //id_acces
                acces['lib_access'] = value.lib_acces;  //lib_acces
                acces['login'] = value.login;  //login
                acces['password'] = value.password;  //password
                acces['ip'] = value.ip;  //ip
                acces['protocol'] = value.protocol;  //protocol
                acces['port'] = value.port;
                i++;
            });
        },
        error: function () {
        }
    });
}
;
function fa_afficheToutLesAccess() {
    //$('#lib_acces1').val(acces['lib_acces'[i]]);

    for (var i = 0; i < acces['lib_acces'].length; i++) {
        var libAcces = '#lib_acces' + i;
        //  $('t:nth-child('+i+')').append("acces['lib_acces']");
        $(libAcces).append(acces['lib_acces'][i]);

        /*var id_constructeur='#id_constructeur'+i;
         $(id_constructeur).val(acces['id_constructeur'][i]);*/

        var libProtocol = '#lib_protocol' + i;
        //$(libProtocol).val('fff');
        $(libProtocol).append(
                //$(libProtocol).append("<option id=" + acces['id_constructeur'][i] + ">" +
                acces['lib_protocol'][i]
                );

        /* var libCentrale = '#lib_centrale' + i;
         $(libCentrale).val(
         acces['lib_centrale'][i]);
         
         var id_type='#id_type'+i;
         $(id_type).val(acces['id_type'][i]);
         
         var lib_type='#lib_type'+i;
         $(lib_type).val(acces['lib_type']);
         
         var id_version='#id_version'+i;
         $(id_version).val(acces['id_version']);
         
         var lien_access='#lien_access'+i;
         $(lien_access).val(acces['adresse_ip'][i]);
         */
        var login = '#login' + i;
        $(login).val(acces['login'][i]);

        var mdp = '#password' + i;
        $(mdp).val(acces['mdp'][i]);

        var ip = '#ip' + i;
        $(ip).val(acces['adresse_ip'][i]);

        var protocol = '#protocol' + i;
        $(protocol).val(acces['protocol'][i]);
    }

}

function fa_modifieAcces() {

}

function fa_select(i) {
    //j efface l'anciene selection graphique
    $('.list-group-item').attr("class", "list-group-item list-group-item-action flex-column align-items-start");


    var v = '#lien_equipement' + i;
    var attribut = "list-group-item list-group-item-action flex-column align-items-start active"
    $(v).attr("class", attribut);



}

function fa_css_select_details_acces() {
    /* $('#menu_details').attr("class", "active");
     $('#menu_acces').attr("class", "");
     $('#menu_config').attr("class", "");*/


    $('#acces_equipement').attr("class", "tab-pane fade");
    $('#details_equipement').attr("class", "tab-pane fade in active");
    alert('fin fonction');
}
function fa_css_select_acces_equipement() {
    /*$('#menu_details').attr("class", "");
     $('#menu_acces').attr("class", "active");
     //$('#menu_config').attr("class", "");*/


    $('#acces_equipement').attr("class", "tab-pane fade in active");
    $('#details_equipement').attr("class", "tab-pane fade");
     alert('fin fonction');

}

