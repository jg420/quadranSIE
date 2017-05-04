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

var pathEquipement = hostPath_dev + "equipement/";



var equipements = [];

equipements['lib_centrale'] = [];
equipements['id_equipement'] = [];  //id_equipement
equipements['lib_equipement'] = [];  //lib_equipement
equipements['id_constructeur'] = [];  //id_constructeur
equipements['lib_constructeur'] = [];  //lib_constructeur
equipements['id_type'] = [];  //id_type
equipements['lib_type'] = [];  //lib_type
equipements['version'] = [];  //version
equipements['num_serie'] = [];     //num serie
equipements['mac_adresse'] = [];
equipements['ip_local'] = [];
equipements['ip_vpn'] = [];




var constructeurs = [];
equipements['id_constructeur'] = [];    //id_constructeur
equipements['lib_constructeur'] = [];    //lib_constructeur

var typeEquipement = [];
typeEquipement[0] = [];
typeEquipement[1] = [];

var acces = [];
acces['id_equipement'] = [];
acces['id_acces'] = [];
acces['lib_acces'] = [];
acces['adresse_ip_acces'] = [];
acces['login_acces'] = [];
acces['port_acces'] = [];
acces['lib_protocol_acces'] = [];
acces['id_protocol_acces'] = [];

var config = [];
config['id_config'] = [];
config['lien_config'] = [];
config['lib_config'] = [];


var apercu = [];
apercu['id_apercu'] = [];
apercu['lib_apercu'] = [];
apercu['lien_apercu'] = [];


var id_equipement = "";  //equipement en cours


var newEquipement = false;

$(document).ready(function () {


    fe_chargeParametreInitial();
    fe_chargeToutLesEquipements();
    fe_afficheToutLesEquipements();


    fe_affiche_panel_par_defaut();


    fe_select(0);


    //gestion partie propriété
    fe_gere_evenement_partie_details_equipement();
    fe_gere_evenement_partie_acces_equipement();
    fe_gere_evenement_partie_config_equipement();

    //gestion partie apercu
    fe_gere_evenement_partie_apercu();


});


function fe_cache_input_partie_apercu() {
    $('#titre_nouvelle_apercu').attr('style', 'visibility:hidden');

    $('#btn_parcourir_apercu').attr('style', 'visibility:hidden');
    $('#btn_valid_ajout_apercu').attr('style', 'visibility:hidden');
    $('#btn_annule_ajout_apercu').attr('style', 'visibility:hidden');

    $('#lib_apercu').attr('style', 'visibility:hidden');
    $('#lib_apercu').attr('disabled', 'false');
}
function fe_affiche_input_partie_apercu() {
    $('#titre_nouvelle_apercu').attr('style', 'visibility:visible');

    $('#btn_parcourir_apercu').attr('style', 'visibility:visible');
    $('#btn_valid_ajout_apercu').attr('style', 'visibility:visible');
    $('#btn_annule_ajout_apercu').attr('style', 'visibility:visible');

    $('#lib_apercu').attr('style', 'visibility:visible');
    $('#lib_apercu').attr('disabled', 'enabled');

}
function fe_affiche_input_partie_detail() {

    $('#lib_equipement').attr("disabled", false);
    $('#num_serie').attr("disabled", false);
    $('#lib_constructeur').attr("disabled", false);
    $('#lib_type').attr("disabled", false);
    $('#adresse_ip_local').attr("disabled", false);
    $('#adresse_ip_vpn').attr("disabled", false);
    $('#version_firmware').attr("disabled", false);
    $('#btn_valid_modif_details_equipement').attr('style', 'visibility:visible');
    $('#btn_annule_modif_details_equipement').attr('style', 'visibility:visible');
}
function fe_cache_input_partie_detail() {
    $('#lib_equipement').attr("disabled", true);
    $('#num_serie').attr("disabled", true);
    $('#lib_constructeur').attr("disabled", true);
    $('#adresse_ip_local').attr("disabled", true);
    $('#adresse_ip_vpn').attr("disabled", true);
    $('#adresse_mac').attr("disabled", true);
    $('#version_firmware').attr("disabled", true);
    $('#btn_valid_modif_details_equipement').attr('style', 'visibility:hidden');
    $('#btn_annule_modif_details_equipement').attr('style', 'visibility:hidden');

}
function fe_desactive_input_partie_acces() {
    $('#lib_acces').attr('disabled', 'true');
    $('#adresse_ip').attr('disabled', 'true');
    $('#login').attr('disabled', 'true');
    $('#password').attr('disabled', 'true');
    $('#port').attr('disabled', 'true');
    $('#lib_protocol').attr('disabled', 'true');
}
function fe_active_input_partie_acces() {
    $('#lib_acces').attr('disabled', false);
    $('#adresse_ip').attr('disabled', false);
    $('#login').attr('disabled', false);
    $('#password').attr('disabled', false);
    $('#port').attr('disabled', false);
    $('#lib_protocol').attr('disabled', false);

}
function fe_affiche_btn_valide_annule_modif_acces() {
    $('#btn_valid_modif_acces_equipement').attr('style', 'visibility:true');
    $('#btn_annule_modif_acces_equipement').attr('style', 'visibility:true');
}
function fe_cache_btn_valide_annule_modif_acces() {
    $('#btn_valid_modif_acces_equipement').attr('style', 'visibility: hidden');
    $('#btn_annule_modif_acces_equipement').attr('style', 'visibility:hidden');
}
function fe_affiche_btn_valide_annule_nouvel_acces() {
    $('#btn_valid_nouvelle_acces_equipement').attr('style', 'visibility:true');
    $('#btn_annule_nouvelle_acces_equipement').attr('style', 'visibility:true');
}
function fe_cache_btn_valide_annule_nouvel_acces() {
    $('#btn_valid_nouvelle_acces_equipement').attr('style', 'visibility: hidden');
    $('#btn_annule_nouvelle_acces_equipement').attr('style', 'visibility:hidden');
}
function fe_affiche_input_partie_config() {
    $('#titre_nouvelle_config').attr('style', 'visibility:visible');
    $('#lib_config').attr('style', 'visibility:visible');
    $('#btn_parcourir_config').attr('style', 'visibility:visible');
    $('#btn_annule_ajout_config').attr('style', 'visibility:visible');
    $('#btn_valid_ajout_config').attr('style', 'visibility:visible');
}
function fe_affiche_input_nouvel_acces() {
    fe_efface_input_acces();
    fe_active_input_partie_acces();
    fe_affiche_btn_valide_annule_nouvel_acces();
    $('#id_access').val(0);
    $('#titre_sous_partie_acces').html('Ajout Acces');
}
function fe_cache_input_nouvel_acces() {
    fe_charge_acces_equipement_par_id(id_equipement);
    fe_affiche_access_equipement_par_id(id_equipement);
    fe_desactive_input_partie_acces();
    fe_cache_btn_valide_annule_nouvel_acces();
}
function fe_affiche_input_modif_acces() {
    //fe_efface_input_acces();
    fe_active_input_partie_acces();
    fe_affiche_btn_valide_annule_nouvel_acces();
    //$('#id_access').val(0);
    $('#titre_sous_partie_acces').html('Modification Acces');
}
function fe_cache_input_modif_acces() {
    fe_charge_acces_equipement_par_id(id_equipement);
    fe_affiche_access_equipement_par_id(id_equipement);
    fe_desactive_input_partie_acces();
    fe_cache_btn_valide_annule_nouvel_acces();
}
function fe_efface_input_acces() {
    $('#lib_acces').val(' ');
    $('#adresse_ip').val(' ');
    $('#login').val(' ');
    $('#password').val(' ');
    $('#port').val(' ');
    $('#lib_protocol').val(' ');
}
function fe_cache_input_partie_config() {
    $('#titre_nouvelle_config').attr('style', 'visibility:hidden');
    $('#lib_config').attr('style', 'visibility:hidden');
    $('#btn_parcourir_config').attr('style', 'visibility:hidden');
    $('#btn_annule_ajout_config').attr('style', 'visibility:hidden');
    $('#btn_valid_ajout_config').attr('style', 'visibility:hidden');
}

function fe_input_acces_equipement_est_valide() {
    lib_acces = $('#lib_acces').val();
    adresse_ip = $('#adresse_ip').val();
    login = $('#login').val();
    password = $('#password').val();
    port = $('#port').val();
    lib_protocol = $('#lib_protocol').val();

    if (lib_acces === " ") {
        return false;
    } else if (adresse_ip === " ") {
        return false;
    } else if (login === " ") {
        return false;
    } else if (password === " ") {
        return false;
    } else if (port === " ") {
        return false;
    } else if (lib_protocol === " ") {
        return false;
    } else if (lib_protocol === " ") {
        return true;
    }

}
function fe_input_detail_equipement_est_valide() {
    lib_equipement = $('#lib_equipement').val();
    num_serie = $('#num_serie').val();
    id_type = $('#id_type').val();
    id_constructeur = $('#id_constructeur').val();
    adresse_ip_local = $('#adresse_ip_local').val();
    adresse_ip_vpn = $('#adresse_ip_vpn').val();

    if (lib_equipement === "" ||
            num_serie === " " ||
            id_type === " " ||
            id_constructeur === " " ||
            adresse_ip_local === " " ||
            adresse_ip_vpn === " ") {
        return false;
    } else
        return true;
}
function fe_input_apercu_equipement_est_valide() {}
function fe_input_config_equipement_est_valide() {}

function fe_valid_ajout_access() {
    if (fe_input_acces_equipement_est_valide())
    {
        id_acces = $('#id_acces').val();
        lib_acces = $('#lib_acces').val();
        adresse_ip = $('#adresse_ip').val();
        login = $('#login').val();
        password = $('#password').val();
        port = $('#port').val();
        lib_protocol = $('#lib_protocol').val();

        $.ajax({
            method: 'GET',
            async: false, //TRES TRES IMPORTANT
            url: pathEquipement + 'ajout_acces/',
            data: {'id_central': id_acces,
                'lib_acces': lib_acces,
                'adresse_ip': adresse_ip,
                'login': login,
                'password': password,
                'port': port,
                'lib_protocol': lib_protocol
            },
            dataType: 'html', // on veut un retour JSON
            success: function (html) {


            },
            error: function () {}
        });
    }
}
function fe_valid_modif_access() {
    if (fe_input_acces_equipement_est_valide())
    {
        id_acces = $('#id_acces').val();
        lib_acces = $('#lib_acces').val();
        adresse_ip = $('#adresse_ip').val();
        login = $('#login').val();
        password = $('#password').val();
        port = $('#port').val();
        lib_protocol = $('#lib_protocol').val();

        $.ajax({
            method: 'GET',
            async: false, //TRES TRES IMPORTANT
            url: pathEquipement + 'modif_acces/',
            data: {'id_central': id_acces,
                'lib_acces': lib_acces,
                'adresse_ip': adresse_ip,
                'login': login,
                'password': password,
                'port': port,
                'lib_protocol': lib_protocol
            },
            dataType: 'html', // on veut un retour JSON
            success: function (html) {


            },
            error: function () {}
        });
    }

}

function fe_gere_evenement_partie_apercu() {
    $('#btn_ajout_apercu_equipement').click(function () {
        fe_affiche_input_partie_apercu();
    });
    $('#btn_annule_ajout_apercu').click(function () {
        fe_cache_input_partie_apercu();
    });
}
function fe_gere_evenement_partie_config_equipement() {
    $('#lien_config_equipement').click(function () {
        fe_css_select_config_equipement();
    });
    $('#btn_ajout_config_equipement').click(function () {
        fe_affiche_input_partie_config()
    });
    $('#btn_valid_ajout_config').click(function () {

    });
    $('#btn_annule_ajout_config').click(function () {
        fe_cache_input_partie_config();
    });


}

function fe_gere_evenement_partie_acces_equipement() {
    $('#btn_ajout_acces_equipement').click(function () {
        fe_affiche_input_nouvel_acces();
    });
    $('#btn_modif_acces_equipement').click(function () {
        fe_affiche_input_modif_acces();
    });
    $('#btn_valid_nouvelle_acces_equipement').click(function () {
        fe_cache_input_nouvel_acces();
    });
    $('#btn_valid_modif_acces_equipement').click(function () {
        fe_cache_input_nouvel_acces();
    });
    $('#btn_annule_nouvelle_acces_equipement').click(function () {
        fe_cache_input_nouvel_acces();
    });
    $('#btn_annule_modif_acces_equipement').click(function () {
        fe_cache_input_modif_acces();
    });
}

function fe_gere_evenement_partie_details_equipement() {
    $('#lien_detail_equipement').click(function () {
        fe_css_select_details_equipement();
    });

    $('#btn_modif_details_equipement').click(function () {
        fe_affiche_input_partie_detail();
    });

    $('#btn_valid_modif_details_equipement').click(function () {



    });

    $('#btn_annule_modif_details_equipement').click(function () {

        fe_cache_input_partie_detail();

    });
}

function  fe_affiche_panel_par_defaut() {
    $('#lien_menu_equipement').attr("class", "active");
}

function fe_chargeParametreInitial() {
    $('#lien_page_equipement').attr('href', pathEquipement);
}

function fe_chargeToutLesEquipements() {
    $.ajax({
        method: 'GET',
        async: false,
        url: pathEquipement + 'getAllEtendue',
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON
                equipements['id_equipement'][index] = value.id_equipement;
                equipements['lib_equipement'][index] = value.lib_equipement;
                ;
                equipements['lib_centrale'][index] = value.lib_central;
                equipements['id_constructeur'][index] = value.id_constructeur;
                equipements['lib_constructeur'][index] = value.lib_constructeur;
                //equipements['id_type'][index]=value.id_type;
                //equipements['lib_type'][index]=value.lib_type;

                //fe_chercheEtChargeAccessEquipement(value.id_equipement);


                i++;
            });
        },
        error: function () {
        }
    });
}

function fe_chercheEtChargeAccessEquipement(i) {


    $.ajax({
        method: 'GET',
        async: false,
        url: pathEquipement + 'getAllEtendue',
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON
                equipements['adresse_ip_local'][index] = value.adresse_ip;
                equipements['login'][index] = value.login;
                equipements['mdp'][index] = value.password;
                i++;
            });
        },
        error: function () {
        }
    });
}

function fe_afficheToutLesEquipements() {
    //$('#lib_equipement1').val(equipements['lib_equipement'[i]]);
    for (var i = 0; i < equipements['lib_equipement'].length; i++) {
        var lienEquipement = '#lien_equipement' + i;
        $(lienEquipement).val(equipements['id_equipement'][i]);


        var libEquipement = '#lib_equipement' + i;
        //  $('t:nth-child('+i+')').append("equipements['lib_equipement']");
        $(libEquipement).append(equipements['lib_equipement'][i]);

        /*var id_constructeur='#id_constructeur'+i;
         $(id_constructeur).val(equipements['id_constructeur'][i]);*/

        var libConstructeur = '#lib_constructeur' + i;
        //$(libConstructeur).val('fff');
        $(libConstructeur).append(
                //$(libConstructeur).append("<option id=" + equipements['id_constructeur'][i] + ">" +
                equipements['lib_constructeur'][i]
                );

        /* var libCentrale = '#lib_centrale' + i;
         $(libCentrale).val(
         equipements['lib_centrale'][i]);
         
         var id_type='#id_type'+i;
         $(id_type).val(equipements['id_type'][i]);
         
         var lib_type='#lib_type'+i;
         $(lib_type).val(equipements['lib_type']);
         
         var id_version='#id_version'+i;
         $(id_version).val(equipements['id_version']);
         
         var lien_access='#lien_access'+i;
         $(lien_access).val(equipements['adresse_ip_local'][i]);
         */

    }

}

function fe_select(i) {
     
    //j efface l'anciene selection graphique
    $('.list-group-item').attr("class", "list-group-item list-group-item-action flex-column align-items-start");


    var lien_eq = '#lien_equipement' + i;
    var attribut = "list-group-item list-group-item-action flex-column align-items-start active"
    $(lien_eq).attr("class", attribut);

    id_equipement = $(lien_eq).val();
    fe_charge_et_affiche_equipement_par_id(id_equipement);
    

}

function fe_charge_et_affiche_equipement_par_id(id) {
    fe_charge_equipement_par_id(id);
    fe_affiche_equipement_par_id(id);

}

function fe_charge_equipement_par_id(id) {
    fe_charge_detail_equipement_par_id(id);
    fe_charge_acces_equipement_par_id(id);
    //fe_charge_config_equipement_par_id(id);
    //fe_charge_apercu_equipement_par_id(id);

}
function fe_charge_detail_equipement_par_id(id) {
    $.ajax({
        method: 'GET',
        async: false, //TRES TRES IMPORTANT
        url: pathEquipement + 'getDetailEquipement/' + id,
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;
            fe_vide_detail_equipement_en_cache();

            //videZoneResultatPrincipal();   
            $.each(json, function (index, value) { // pour chaque noeud JSON

                equipements['id_equipement'][i] = value.id_equipement;  //id_equipement
                equipements['lib_equipement'][i] = value.lib_equipement;  //lib_equiipement
                equipements['id_constructeur'][i] = value.id_constructeur;  //id_constructeur
                equipements['lib_constructeur'][i] = value.lib_constructeur;  //lib_constructeur                           
                equipements['id_type'][i] = value.id_type;  //id_type
                equipements['lib_type'][i] = value.lib_type;  //lib_type
                equipements['version'][i] = value.version;  //version                      
                equipements['ip_local'][i] = value.ip_local;  //numserie  
                equipements['ip_vpn'][i] = value.ip_vpn;  //numserie                
                equipements['num_serie'][i] = value.num_serie;  //numserie 
                //alert('num serie :'+equipements['num_serie'].length); 
                //alert('taille equipement dans charge_info ' + equipements['id_equipement'].length);

                i++;
            });



        },
        error: function () {


        }
    });
}
function fe_charge_apercu_equipement_par_id(id) {
    $.ajax({
        method: 'GET',
        async: false, //TRES TRES IMPORTANT
        url: pathEquipement + 'getApercuEquipement/' + id,
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            fe_vide_detail_equipement_en_cache();

            //videZoneResultatPrincipal();   
            $.each(json, function (index, value) { // pour chaque noeud JSON

                apercu['id_apercu'][i] = value.id_apercu;
                apercu['lib_apercu'][i] = value.lib_apercu;
                apercu['lien_apercu'][i] = value.lien_apercu;

                i++;
            });


        },
        error: function () {


        }
    });
}
function fe_charge_config_equipement_par_id(id) {
    $.ajax({
        method: 'GET',
        async: false, //TRES TRES IMPORTANT
        url: pathEquipement + 'getConfigEquipement/' + id,
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            fe_vide_detail_equipement_en_cache();

            //videZoneResultatPrincipal();   
            $.each(json, function (index, value) { // pour chaque noeud JSON

                config['id_config'][i] = value.id_config;
                config['lien_config'][i] = value.lien_config;
                config['lib_config'][i] = value.lib_config;
                i++;
            });


        },
        error: function () {


        }
    });
}
function fe_charge_acces_equipement_par_id(id) {
    $.ajax({
        method: 'GET',
        async: false, //TRES TRES IMPORTANT
        url: pathEquipement + 'getAccess/' + id,
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            fe_vide_acces_equipement_en_cache();
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON
                acces['id_equipement'][i] = value.id_equipement;
                //alert(value.id_access);
                acces['id_acces'][i] = value.id_access;
                acces['lib_acces'][i] = value.lib_access;
                acces['adresse_ip_acces'][i] = value.adresse_ip;
                acces['login_acces'][i] = value.login;
                acces['password_acces'][i] = value.password;
                acces['lib_protocol_acces'][i] = value.lib_protocol;
                acces['id_protocol_acces'][i] = value.id_protocol;
                acces['port_acces'][i] = value.port;
                i++;
            });


        },
        error: function () {


        }
    });
}

function fe_affiche_equipement_par_id(id) {

    fe_affiche_info_equipement_par_id(id);
    fe_affiche_access_equipement_par_id(id);
    //fe_affiche_config_equipement_par_id(id);
    //fe_affiche_apercu_equipement_par_id(id);

}
function fe_affiche_apercu_equipement_par_id(i) {
    index = apercu['id_equipement'].indexOf(i);
    if (index !== -1) {
        $('#n_apercu').html(apercu['lib_apercu'][index]);

        $('#id_apercu').val(apercu['id_apercu'][index]);

        fe_affiche_image_apercu(apercu['lib_apercu'][index]);
    }
}
function fe_affiche_image_apercu(lien_image) {
    //$('#preview_file').html(apercu['lib_apercu'][index]);
}
function fe_affiche_info_equipement_par_id(i) {

    //alert('taille equipement dans affiche_info :' + equipements['id_equipement'].length);
    index = equipements['id_equipement'].indexOf(i);

    if (index !== -1) {

        $('#lib_equipement').val(equipements['lib_equipement'][index]);
        $('#num_serie').val(equipements['num_serie'][index]);
        $('#lib_type').html("<option id=" + equipements['id_type'][index] + ">" + equipements['lib_type'][index] + "</option>");
        $('#lib_constructeur').html("<option id=" + equipements['id_constructeur'][index] + ">" + equipements['lib_constructeur'][index] + "</option>");

        $('#adresse_ip_local').val(equipements['ip_local'][index]);

        $('#adresse_ip_vpn').val(equipements['ip_vpn'][index]);

        $('#version_firmware').val(equipements['version'][index]);
        //alert('arriv a la fin '+equipements['ip_local'][index]);
    }

}
function fe_affiche_access_equipement_par_id(i) {
    //alert('passe dans affiche access Taille='+acces['id_equipement'].length);
    var nbAcces = acces['id_equipement'].length;
    index = acces['id_equipement'].indexOf(i);
    $('#titre_sous_partie_acces').html('Acces ' + (index + 1) + '/' + nbAcces);
    if (index !== -1) {
        // alert('arriv ici ');
        $('#id_access').val(acces['id_acces'][index]);
        $('#lib_acces').val(acces['lib_acces'][index]);
        $('#adresse_ip').val(acces['adresse_ip_acces'][index]);
        $('#login').val(acces['login_acces'][index]);
        $('#password').val(acces['password_acces'][index]);
        $('#port').val(acces['port_acces'][index]);
        $('#id_protocol').val(acces['id_protocol_acces'][index]);
        $('#lib_protocol').val(acces['lib_protocol_acces'][index]);
    }
}
function fe_affiche_config_equipement_par_id(i) {
    index = config['id_equipement'].indexOf(id);
    if (index !== -1) {
        $('lib_acces').val(config['lib_access'][index]);
        $('lien_acces').val(config['lien_access'][index]);
        $('id_acces').val(config['id_access'][index]);
    }
}

function fe_css_select_details_equipement() {
    $('#menu_details').attr("class", "active");
    $('#menu_acces').attr("class", "");
    $('#menu_config').attr("class", "");

    $('#config_equipement').attr("class", "tab-pane fade");
    $('#acces_equipement').attr("class", "tab-pane fade");
    $('#details_equipement').attr("class", "tab-pane fade active in");
}
function fe_css_select_acces_equipement() {
    $('#menu_details').attr("class", "");
    $('#menu_acces').attr("class", "active");
    //$('#menu_config').attr("class", "");

    $('#config_equipement').attr("class", "tab-pane fade");
    $('#acces_equipement').attr("class", "tab-pane fade active in ");
    $('#details_equipement').attr("class", "tab-pane fade");

}
function fe_css_select_config_equipement() {
    $('#menu_details').attr("class", "");
    $('#menu_acces').attr("class", "none");
    $('#menu_config').attr("class", "active");

    $('#config_equipement').attr("class", "tab-pane fade active in");
    $('#acces_equipement').attr("class", "tab-pane fade");
    $('#details_equipement').attr("class", "tab-pane fade");
}

function fe_vide_equipement_en_cache() {
    fe_vide_detail_equipement_en_cache();
    fe_vide_acces_equipement_en_cache();
    fe_vide_config_equipement_en_cache();
    fe_vide_apercu_equipement_en_cache();



}
function fe_vide_detail_equipement_en_cache() {
    equipements['lib_centrale'] = [];
    equipements['id_equipement'] = [];  //id_equipement
    equipements['lib_equipement'] = [];  //lib_equipement
    equipements['id_constructeur'] = [];  //id_constructeur
    equipements['lib_constructeur'] = [];  //lib_constructeur
    equipements['id_type'] = [];  //id_type
    equipements['lib_type'] = [];  //lib_type
    equipements['version'] = [];  //version
    equipements['num_serie'] = [];     //num serie
    equipements['mac_adresse'] = [];
    equipements['ip_local'] = [];
    equipements['ip_vpn'] = [];
}
function fe_vide_acces_equipement_en_cache() {

    acces['id_acces'] = [];
    acces['id_equipement'] = [];
    acces['lib_acces'] = [];
    acces['adresse_ip_acces'] = [];
    acces['login_acces'] = [];
    acces['password_acces'] = [];
    acces['port_acces'] = [];
    acces['lib_protocol_acces'] = [];
    acces['id_protocol_acces'] = [];

}

function fe_vide_config_equipement_en_cache() {
    config['id_config'] = [];
    config['lien_config'] = [];
    config['lib_config'] = [];
}

function fe_vide_apercu_equipement_en_cache() {
    apercu['id_apercu'] = [];
    apercu['lib_apercu'] = [];
    apercu['lien_apercu'] = [];
}

function fe_css_select_details_equipement() {
    $('#menu_details').attr("class", "active");
    $('#menu_acces').attr("class", "");
    $('#menu_config').attr("class", "");

    $('#details_equipement').attr("class", "tab-pane fade active in");
    $('#acces_equipement').attr("class", "tab-pane fade");
    $('#config_equipement').attr("class", "tab-pane fade");
}
function fe_css_select_config_equipement() {
    /*$('#menu_details').attr("class", "");
     $('#menu_acces').attr("class", "active");
     //$('#menu_config').attr("class", "");*/

    $('#acces_equipement').attr("class", "tab-pane fade");
    $('#config_equipement').attr("class", "tab-pane fade  active in");
    $('#details_equipement').attr("class", "tab-pane fade");

    $('#menu_details').attr("class", "");
    $('#menu_acces').attr("class", "");
    $('#menu_config').attr("class", "active");

}
function fe_css_select_access_equipement() {
    /*$('#menu_details').attr("class", "");
     $('#menu_acces').attr("class", "none");
     $('#menu_config').attr("class", "active");*/

    $('#acces_equipement').attr("class", "tab-pane fade  active in");
    $('#config_equipement').attr("class", "tab-pane fade");
    $('#details_equipement').attr("class", "tab-pane fade");

    $('#menu_details').attr("class", "");
    $('#menu_acces').attr("class", "active");
    $('#menu_config').attr("class", "");
}


function fe_modifie_detail_Equipement() {
    if (fe_input_detail_equipement_est_valide()) {
        id_equipement = $('#id_equipement').val();
        lib_equipement = $('#lib_equipement').val();
        id_type = $('#id_type').val();
        id_constructeur = $('#id_type').val();
        num_serie = $('#num_serie').val();
        ip_local = $('#ip_local').val();
        ip_vpn = $('#ip_vpn').val();

        $.ajax({
            method: 'POST',
            url: pathEquipement + 'modifEquipement',
            data: {'id_equipement': id_equipement,
                'id_type': id_type,
                'id_constructeur': id_constructeur,
                'num_serie': num_serie,
                'ip_local': ip_local,
                'ip_vpn': ip_vpn},
            dataType: 'html', // on veut un retour JSON
            success: function (msg) {
                //alert(msg);
                // displayInfoPrincipalEquipement(id_central);
                alert('Modification Effectué !');

                fe_charge_detail_equipement_par_id(id_equipement);
                fe_affiche_detail_equipement_par_id(id_equipement);

            }, error: function () {
                // alert('test');
            }


        });
    }
}
function fe_modifie_acces_Equipement() {
    if (fe_input_detail_equipement_est_valide()) {
        id_equipement = $('#id_equipement').val();
        id_type = $('#id_type').val();
        id_constructeur = $('#id_type').val();
        num_serie = $('#num_serie').val();
        ip_local = $('#ip_local').val();
        ip_vpn = $('#ip_vpn').val();

        $.ajax({
            method: 'POST',
            url: pathEquipement + 'modifEquipement',
            data: {'id_equipement': id_equipement,
                'id_type': id_type,
                'id_constructeur': id_constructeur,
                'num_serie': num_serie,
                'ip_local': ip_local,
                'ip_vpn': ip_vpn},
            dataType: 'html', // on veut un retour JSON
            success: function (msg) {
                //alert(msg);
                // displayInfoPrincipalEquipement(id_central);
                alert('Modification Effectué !');

                fe_charge_detail_equipement_par_id(id_equipement);
                fe_affiche_detail_equipement_par_id(id_equipement);

            }, error: function () {
                // alert('test');
            }


        });
    }
}
function fe_modifie_config_Equipement() {
    
}
function fe_modifie_apercu_Equipement() {
        if (fe_input_detail_equipement_est_valide()) {
            id_equipement = $('#id_equipement').val();
            id_type = $('#id_type').val();
            id_constructeur = $('#id_type').val();
            num_serie = $('#num_serie').val();
            ip_local = $('#ip_local').val();
            ip_vpn = $('#ip_vpn').val();

            $.ajax({
                method: 'POST',
                url: pathEquipement + 'modifEquipement',
                data: {'id_equipement': id_equipement,
                    'id_type': id_type,
                    'id_constructeur': id_constructeur,
                    'num_serie': num_serie,
                    'ip_local': ip_local,
                    'ip_vpn': ip_vpn},
                dataType: 'html', // on veut un retour JSON
                success: function (msg) {
                    //alert(msg);
                    // displayInfoPrincipalEquipement(id_central);
                    alert('Modification Effectué !');

                    fe_charge_detail_equipement_par_id(id_equipement);
                    fe_affiche_detail_equipement_par_id(id_equipement);

                }, error: function () {
                    // alert('test');
                }


            });
        }

    }
 