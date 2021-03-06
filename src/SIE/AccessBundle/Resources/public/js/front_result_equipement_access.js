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

var pathAccess = hostPath_dev+"access/";
var access = [];

access['id_access'] = [];   //id_access
access['lib_access'] = [];   //lib_access
access['login'] = [];   //login
access['password'] = [];   //password
access['lien'] = [];   //lien
access['id_protocol'] = [];   //id_protocol
access['lib_protocol'] = [];   //lib_protocol
access['port'] = [];    //port

var protocols=[];        //tout les lib protocol pour l autocompletion
protocols['id_protocol']=[];     //id
protocols['lib_protocol']=[];     //lib


var id_access;  //id_access en cours
var indexAccess;      // index de l access dans la liste pre charge

var newAccess = false; //0 pour modification 1 pour ajout

var msgNoEq = "Pas de d'équipement selectioné !";

$(document).ready(function () {
    frea_chargeParametreInitial();
    frea_charge_lib_protocol();
    
    $('#btn_ajout_access').click(function () {
        
        if (id_equipement !== ""  & equipements['id_equipement'].length!==0) {
        //if (id_equipement !== ""  & equipements[0].length!==0) {
            frea_prepareUiToAdd();
            alert(id_equipement+"--");
            newAccess=true;
        } else {
            
            alert(msgNoEq);
        }
         
    });

    $('#btn_sup_access').click(function () {
        alert('Pas de suppréssion pour le moment');
    });
    $('#btn_last_access').click(function () {
       if( frea_equipement_est_selectione()){
        frea_afficheAccessPrecedent();}
    });
    $('#btn_modif_access').click(function () {
         if (   frea_equipement_est_selectione()) {
          
            frea_prepareUiToUpdate();
            newAccess=false;
         }else{
             alert(msgNoEq);
        }
       
    });
    $('#btn_next_access').click(function () {
           if( frea_equipement_est_selectione()){
        frea_afficheAccessSuivant();}
    });
    $('#btn_valid_modif_access').click(function () {

        if (frea_equipement_est_selectione()) {
            alert('BUG ICI');
            if (newAccess) {
                  frea_addAccess();
                   frea_desactive_input();
        frea_cacheBtnValidAnnulle();

            } else {
                alert(id_equipement+"--");

                frea_modifAccess();
                 frea_desactive_input();
        frea_cacheBtnValidAnnulle();
            }
            //alert(id_equipement+"--");
        } else {
            
            alert(msgNoEq);

        }
        frea_decolore_input();
    });
    $('#btn_annuler_modif_access').click(function () {
        affiche_acces_par_idAcces(id_access);
        frea_decolore_input();
        frea_cacheBtnValidAnnulle();
        frea_desactive_input();

    });
});

function frea_chargeParametreInitial(){
    $('#lien_page_acces').attr('href',pathAccess);
};
function frea_prepareUiToAdd() {
    //je stocke pour le click sur annuler 
    id_access = $('#id_access').val();
    lib_equipement = $('#lib_equipement_access').val();

    frea_razUI();

    frea_active_input();

    frea_affiche_btn_annuller_valider();
    
    frea_affiche_lib_protocol();
    
    //frea_colore_input();
    

}

function frea_colore_input(){
    $('#access').css('background-color','red');
    $('#adresse_access').attr('style','');
    $('#lib_user_access').attr('style','');
    $('#mdp_access').attr('style','');
    $('#port_access').attr('style','');
}

function frea_decolore_input(){
    $('#access').attr('style','');
    $('#adresse_access').attr('style','');
    $('#lib_user_access').attr('style','');
    $('#mdp_access').attr('style','');
    $('#port_access').attr('style','');
}

function frea_prepareUiToUpdate(){
      frea_active_input();
            frea_affiche_btn_annuller_valider();
    $('#select_protocol_access').append("<option>--------</option>");
    frea_affiche_lib_protocol();
}

function frea_razUI() {

    $('#adresse_access').val("");
    $('#lib_access').val("");
    $('#lib_user_access').val("");
    $('#mdp_access').val("");
    $('#port_access').val("");
    $('#select_protocol_access').html("");
    $('#lien_access').text('');
    $('#select_protocol_access').html("");


}

function frea_affiche_acces_par_id_equipement(id_equipement) {
    //chargement de tout les access de l equipement
    frea_charge_acces_par_idEquipement(id_equipement);

    frea_razUI();
    //affiche le 1er access
    affiche_acces_par_idAcces(access['id_access'][0]);


}

function affiche_acces_par_idAcces(id_access) {
    //alert(id_access);
    index = access['id_access'].indexOf(id_access);
    if (index !== -1) {
        indexAccess = index;
   
        $('#id_access').val(access['id_access'][index]);
        $('#adresse_access').val(access['lien'][index]);
        $('#lib_user_access').val(access['login'][index]);
        $('#mdp_access').val(access['password'][index]);
        $('#port_access').val(access['port'][index]);
        $('#lib_access').val(access['lib_access'][index]);
        $('#adresse_access').val(access['lien'][index]);
        
        $('#select_protocol_access').html('');
        $('#select_protocol_access').append("<option value='" + access['id_protocol'][index] + "'>" + access['lib_protocol'][index] + "</option>");
        $('#titreAccess').text(
                "Access "+
                (index + 1) + "/" + access['id_access'].length+"    ");
        lien = "<a  href='" + access['lib_protocol'][index] + "://" + access['lien'][index] + ":" + access['port'][index] + "'>Access</a>";

        indexAccess = index;
        //$('#lien_access').val('  ');
        $('#lien_access').html(lien

                );

    }else {
         $('#info_access').text('');
          $('#titreAccess').text(
                "Access ");
         frea_razUI();
    }
}

function frea_equipement_est_selectione(){
    if(id_equipement!=='' & equipements[0].length!==0){
        return true;
    }else return false;
}

function frea_afficheAccessPrecedent() {
    index = indexAccess - 1;
    if(index>=0){
$('#titreAccess').text(
                "Access "+
                (index + 1) + "/" + access['id_access'].length+"    ");           //$('#info_access').text((index + 1) + "/" + access['id_access'].length+"   -> "+testCom(access['lien'][index],access['port'][index]));

    $('#id_access').val(access['id_access'][index]);
    $('#adresse_access').val(access['lien'][index]);
    $('#lib_user_access').val(access['login'][index]);
    $('#mdp_access').val(access['password'][index]);
    $('#port_access').val(access['port'][index]);
    $('#lib_access').val(access['lib_access'][index]);
    $('#adresse_access').val(access['lien'][index]);

    $('#select_protocol_access').html('');
    $('#select_protocol_access').append("<option value='" + access['id_protocol'][index] + "'>" + access['lib_protocol'][index] + "</option>");


    lien = "<a  href='" + access['lib_protocol'][index] + "://" + access['lien'][index] + ":" + access['port'][index] + "'>Access</a>";

    indexAccess = index;
    //$('#lien_access').val('  ');
    $('#lien_access').html(lien

            );
    }

}

function frea_afficheAccessSuivant() {
    index = indexAccess + 1;
    if(index<access['id_access'].length)      {
    $('#titreAccess').text(
               "Access "+
                (index + 1) + "/" + access['id_access'].length+"    ");
            //$('#info_access').text((index + 1) + "/" + access['id_access'].length+"   -> "+testCom(access['lien'][index],access['port'][index]));

    $('#id_access').val(access['id_access'][index]);
    $('#adresse_access').val(access['lien'][index]);
    $('#lib_user_access').val(access['login'][index]);
    $('#mdp_access').val(access['password'][index]);
    $('#port_access').val(access['port'][index]);
    $('#lib_access').val(access['lib_access'][index]);
    $('#adresse_access').val(access['lien'][index]);

    $('#select_protocol_access').html('');
    $('#select_protocol_access').append("<option value='" + access['id_protocol'][index] + "'>" + access['lib_protocol'][index] + "</option>");

    lien = "<a  href='" + access['lib_protocol'][index] + "://" + access['lien'][index] + ":" + access['port'][index] + "'>Access</a>";

    indexAccess = index;
    //$('#lien_access').val('  ');
    $('#lien_access').html(lien

            );}
}

function frea_charge_acces_par_idEquipement(id_equipement) {
    //alert("id equipement : "+id_equipement);
    $.ajax({
        method: 'GET',
        async: false,
        url: pathAccess + 'getAccesss/' + id_equipement,
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            //alert('ok back end');
            var i = 0;
            var val;
            access['id_access'] = [];
            access['lib_access'] = [];
            access['login'] = [];
            access['password'] = [];
            access['lien'] = [];
            access['lib_protocol'] = [];
            access['port'] = [];
            //videZoneResultatPrincipal();   
            $.each(json, function (index, value) { // pour chaque noeud JSON
                //$('#bloc_resultat_access').append(value.id_access);
                access['id_access'][i] = value.id_access;
                access['lib_access'][i] = value.lib_access;   //lib_access
                access['login'][i] = value.login;   //login
                access['password'][i] = value.password;   //password
                access['lien'][i] = value.adresse;   //lien
                access['id_protocol'][i] = value.id_protocol;   //id_protocol
                access['lib_protocol'][i] = value.lib_protocol;   //lib_protocol
                access['port'][i] = value.n_port;    //port


                i++;
            });
        }
    });
}

function frea_charge_lib_protocol(){
    $.ajax({
        method: 'GET',
        //async: false,
        url: pathAccess + 'getProtocols' ,
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            //alert('ok back end');
            var i = 0;
             
            lib_protocol = [];
            //videZoneResultatPrincipal();   
            $.each(json, function (index, value) { // pour chaque noeud JSON
                //$('#bloc_resultat_access').append(value.id_access);
                //alert('ici '+value.lib_protocol);
                 protocols['id_protocol'][i]=value.id_protocol;
                 protocols['lib_protocol'][i]=value.lib_protocol;


                i++;
            });
        }
    });
}

function frea_affiche_lib_protocol(){
   
    for(i=0;i<protocols['id_protocol'].length;i++){
       
        $('#select_protocol_access').append("<option value="+protocols['id_protocol'][i]+">"+protocols['lib_protocol'][i]+"</option>");
    }
}

function frea_setLibEquipement(libEquipement) {
    $('#lib_equipement_access').html(libEquipement);
}
function frea_setLibCentral(libCentral) {
    $('#lib_central').text(libCentral);
}

function frea_refresh_navbar() {

}
function frea_active_input() {
    $('#select_protocol_access').attr('disabled', false);
    $('#port_access').attr('disabled', false);
    $('#mdp_access').attr('disabled', false);
    $('#lib_user_access').attr('disabled', false);
    $('#adresse_access').attr('disabled', false);
    $('#lib_access').attr('disabled', false);
}
function frea_desactive_input() {
    $('#select_protocol_access').attr('disabled', 'disabled');
    $('#port_access').attr('disabled', 'disabled');
    $('#mdp_access').attr('disabled', 'disabled');
    $('#lib_user_access').attr('disabled', 'disabled');
    $('#adresse_access').attr('disabled', 'disabled');
    $('#lib_access').attr('disabled', 'disabled');
}
function frea_affiche_btn_annuller_valider() {
    $('#btn_valid_modif_access').attr('style', 'visibility:visible');
    $('#btn_annuler_modif_access').attr('style', 'visibility:visible');
}
function frea_cacheBtnValidAnnulle() {
    $('#btn_valid_modif_access').attr('style', 'visibility:hidden');
    $('#btn_annuler_modif_access').attr('style', 'visibility:hidden');
}

function frea_modifAccess() {
    id_access = $('#id_access').val();
    lib_access = $('#lib_access').val();
    user = $('#lib_user_access').val();
    mdp = $('#mdp_access').val();
    port = $('#port_access').val();
    protocol = $('#select_protocol_access').val();
    //alert(protocol);
    adresse=$('#adresse_access').val();
    
    $.ajax({
        method: 'POST',
        url: pathAccess + 'modifAccess',
        data: {'id_access': id_access,
            'lib_access': lib_access,
            'user': user,
            'mdp': mdp,
            'port': port,
            'adresse':adresse,
            'protocol': protocol},
        dataType: 'html', // on veut un retour JSON
        success: function (msg) {
            alert(msg);
            // displayInfoPrincipalEquipement(id_central);
            frea_affiche_acces_par_id_equipement(id_equipement);

        }, error: function () {
            // alert('test');
        }


    });


}

function frea_addAccess(){
    //id_access = $('#id_access').val();
    lib_access = $('#lib_access').val();
    user = $('#lib_user_access').val();
    mdp = $('#mdp_access').val();
    port = $('#port_access').val();
    protocol = $('#select_protocol_access').val();
    adresse=$('#adresse_access').val();
    
    
    $.ajax({
        method: 'POST',
        url: pathAccess + 'addAccess',
        data: {
            
            'lib_access': lib_access,
            'user': user,
            'mdp': mdp,
            'port': port,
            'adresse':adresse,
            'protocol': protocol,
             'id_equipement':id_equipement},
        dataType: 'html', // on veut un retour JSON
        success: function (msg) {
             alert("OK");
             alert(msg);
            // displayInfoPrincipalEquipement(id_central);
            frea_affiche_acces_par_id_equipement(id_equipement);

        }, error: function () {
            // alert('test');
        }


    });


}