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

equipements['id_equipement'] = [];  //id_equipement
equipements['lib_equipement'] = [];  //lib_equipement
equipements['id_constructeur'] = [];  //id_constructeur
equipements['lib_constructeur'] = [];  //lib_constructeur
equipements['id_type'] = [];  //id_type
equipements['lib_type'] = [];  //lib_type
equipements['id_version'] = [];  //id_version
equipements['version'] = [];  //version
equipements['num_serie'] = [];     //num_serie
equipements['id_central'] = [];     //num_serie

var constructeurs = [];
constructeurs['id_constructeur'] = [];    //id_constructeur
constructeurs['lib_constructeur'] = [];    //lib_constructeur

var typeEquipement = [];
typeEquipement[0] = [];
typeEquipement[1] = [];

var id_equipement = "";  //equipement en cours

var msgNoCentral = "Pas de central selectioné !";

var newEquipement = false;

$(document).ready(function () {
     
    fre_chargeParametreInitial();
    $('#btn_ajout_equipement').click(function () {
        if (id_central !== "") {
            newEquipement = true;
            fre_prepareUiToAdd();

        } else {

            alert(msgNoCentral);
        }

    });
    $('#btn_sup_equipement').click(function () {
        if (id_central !== "") {
            fre_addEquipement();

        } else {

            alert(msgNoCentral);
        }
    });
    $('#btn_last_equipement').click(function () {
        if (id_central !== "") {

        } else {

            alert(msgNoCentral);
        }
    });
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
    $('#btn_next_equipement').click(function () {
        if (id_central !== "") {

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
        $('#constructeur').attr('style', 'visibility:hidden');
        $('#type').attr('style', 'visibility:hidden');
        $('#num_serie_equipement').attr('style', 'visibility:hidden');
        $('#lib_equipement').attr('disabled', 'disabled');
        $('#mac_equipement').attr('disabled', 'disabled');
        $('#version_equipement').attr('disabled', 'disabled');
        fre_displayEquipementByIdEquipement(id_equipement);

    });


    $('#select_equipement').change(function () {
        id_eq = $('#select_equipement option:selected').val();
        id_equipement = id_eq;
        libEq = $('#select_equipement option:selected').text();



        //fre_displayEquipementByIdEquipement(id_eq);

        frea_displayAccessByIdEquipement(id_eq);
        frea_setLibEquipement(libEq);

        fre_displayEquipementFromCache(id_eq);
        // alert("1er "+id_eq);

    });


});

function fre_chargeParametreInitial(){
    $('#lien_page_equipement').attr('href',pathEquipement);
     
};
function fre_razUI() {
    $('#output_resumeResultat').html('');
    $('#select_equipement').html('');
    $('#constructeur').html('');
    $('#lib_equipement').val('');
    //  $('#mac_equipement').val(' ');
    $('#version_equipement').val(' ');
}

function fre_prepareUiToAdd() {


    id_equipement = $('#id_equipement').val();

    fre_razUI();

    fre_active_input();

    fre_afficheBtnValidAnnulle();


    fre_loadConstructeur();
    fre_displayConstructeur();
    fre_loadType();
    fre_displayType();
    //alert('fin traitement');

}

function fre_setLibCentral(libCentral) {
    //alert('passage');
    $('.lib_central').html(libCentral);
}

function fre_loadConstructeur() {
    $.ajax({
        method: 'GET',
        async: false,
        url: pathEquipement + 'getAllConstructeur',
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON
                constructeurs['id_constructeur'][i] = value.id_constructeur;
                constructeurs['lib_constructeur'][i] = value.lib_constructeur;

                i++;
            });




        },
        error: function () {


        }
    });
}

function fre_loadType() {
    $.ajax({
        method: 'GET',
        async: false,
        url: pathEquipement + 'getAllType',
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON
                typeEquipement[0][i] = value.id_type;
                typeEquipement[1][i] = value.lib_type;

                i++;
            });




        },
        error: function () {


        }
    });
}

function fre_displayConstructeur() {
    //alert(constructeurs['id_constructeur'].length);
    for (i = 0; i < constructeurs['id_constructeur'].length; i++) {
        $('#constructeur').append("<option value=" + constructeurs['id_constructeur'][i] + ">" + constructeurs['lib_constructeur'][i] + "</option>")

    }
}

function fre_displayType() {
    $('#type_equipement').attr('disabled', false);
    //alert('ici action');
    for (i = 0; i < typeEquipement[0].length; i++) {
        $('#type_equipement').append("<option value=" + typeEquipement[0][i] + ">" + typeEquipement[1][i] + "</option>");
    }
}

function fre_displayEquipementByIdCentral(id_central) {
    //je suppose ici que l'id a ete checke en amont
    // alert('refresh :'+id_central);

    //alert('id central: '+id_central);
     
    fre_loadEquipementByIdCentral(id_central);
    //fre_loadType();

     //alert(equipements['id_equipement'].length);
     
     // for (i = 0;   i < 10 ;i++) {
     for (var i = 0;i < equipements['id_equipement'].length ;i++) {
   // index = equipements['id_central'].indexOf(id_central);

    //if (index !== -1) {

         $('#select_equipement').append("<option value='" + equipements['id_equipement'][i] + "'>" + equipements['lib_equipement'][i] + "</option>");
        //$('#constructeur').append("<option  value=ici>" + equipements['lib_constructeur'][i] + "</option>");
        $('#constructeur').append("<option  value='" + equipements['id_constructeur'][i] + "'>" + equipements['lib_constructeur'][i] + "</option>");
        $('#type_equipement').append("<option  value='" + equipements['id_type'][i] + "'>" + equipements['lib_type'][i] + "</option>");
      //  $('#type_equipement').append("<option value='" + equipements['id_equipement'][i] + "'>" + equipements['lib_equipement'][i] + "</option>");
        $('#version_equipement').val(equipements['version'][i]);
        $('#num_serie_equipement').val(equipements['num_serie'][i]);
        //alert('ici');

        //i++;
    }
    libEquipement = $('#select_equipement option:checked').text();
    $('#lib_equipement').val(libEquipement);

    //displayResultatDetail($('#select_equipement').val());
    id_eq = $('#select_equipement option:selected').val();
    id_equipement = id_eq;
    libEq = $('#select_equipement option:selected').text();
    frea_displayAccessByIdEquipement(id_eq);
    frea_setLibEquipement(libEq);

    //   displayResultatDetail(val.id_equipement);
    $('#output_resumeResultat').append("<br/><br/><b>" + equipements['id_equipement'].length + " Equipement(s)</b>");
    //alert(i+" nombre d equipement");
    $('#id_equipement').val(id_eq);
    $('#lib_equipement').val(libEq);
    //$('#lienPDF').attr('href', "../form/formCentral.php?pdf=" + val.id_central);

}

function fre_loadEquipementByIdCentral(id_central) {
    //je suppose ici que l'id a ete checke en amont

    fre_razUI();

    $.ajax({
        method: 'GET',
        async: false, //TRES TRES IMPORTANT
        url: pathEquipement + 'getEquipements/' + id_central,
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;
            var val;
            equipements['id_equipement'] = [];
            equipements['lib_equipement'] = [];
            equipements['id_constructeur'] = [];
            equipements['lib_constructeur'] = [];
            equipements['id_type'] = [];
            equipements['lib_type'] = [];
            equipements['version'] = [];
            equipements['num_serie'] = [];
            equipements['id_central']=[];

            //videZoneResultatPrincipal();   
            $.each(json, function (index, value) { // pour chaque noeud JSON

                equipements['id_equipement'][i] = value.id_equipement;  //id_equipement
                equipements['lib_equipement'][i] = value.lib_equipement;  //lib_equiipement
                equipements['id_constructeur'][i] = value.id_constructeur;  //id_constructeur
                equipements['lib_constructeur'][i] = value.lib_constructeur;  //lib_constructeur
                equipements['id_type'][i] = value.id_type;  //id_type
                equipements['lib_type'][i] = value.type_equipement;  //lib_type
                equipements['version'][i] = value.id_version;  //version
                equipements['num_serie'][i] = value.num_serie;  //numserie  
                equipements['id_central'][i] = value.id_central;  //numserie  

                // alert(' equipements :'+index+ equipements['num_serie'][i]);
                // equipements[8][i] = value.id_constructeur;  //id_constructeur

                i++;
            });


        },
        error: function () {
            //alert('ici');

        }
    });

}

function fre_displayEquipementFromCache(id_equipement) {

    index = equipements['id_equipement'].indexOf(id_equipement);
    if (index !== -1) {
        //fre_razUI();
        //alert('debut');
        //$('#select_equipement').append("<option>"++"</option>")
        $('#constructeur').html('');
        $('#constructeur').append("<option value=" + equipements['id_constructeur'][index] + ">" + equipements['lib_constructeur'][index] + "</option>");

        $('#lib_equipement').val('');
        $('#lib_equipement').val(equipements['lib_equipement'][index]);

        $('#version_equipement').val('');
        $('#version_equipement').val(equipements['version'][index]);

        $('#num_serie_equipement').val('');
        $('#num_serie_equipement').val(equipements['num_serie'][index]);

        $('#type_equipement').html('');
        $('#type_equipement').append("<option>" + equipements['lib_type'][index] + "</option>");
        
         //alert('type eq : '.equipements['lib_type'][version]);


        //alert('ok'+equipements['lib_constructeur'][index]);
    } else {

        alert("pas trouvé " + equipements['id_equipement'].length);
    }
}

function fre_afficheEquipementSuivant() {
}

function fre_afficheEquipementPrecedent() {
}

function fre_active_input() {
    $('#select_equipement').attr('disabled', false);
    $('#constructeur').attr('disabled', false);
    $('#lib_equipement').attr('disabled', false);
    $('#mac_equipement').attr('disabled', false);
    $('#version_equipement').attr('disabled', false);
    $('#num_serie_equipement').attr('disabled', false);
    $('#type_equipement').attr('disabled', false);
}

function fre_desactive_input() {
    $('#select_equipement').attr('disabled', 'disabled');
    $('#constructeur').attr('disabled', 'disabled');
    $('#lib_equipement').attr('disabled', 'disabled');
    $('#mac_equipement').attr('disabled', 'disabled');
    $('#version_equipement').attr('disabled', 'disabled');
    $('#num_serie_equipement').attr('disabled', true);
    $('#type_equipement').attr('disabled', true);
}

function fre_afficheBtnValidAnnulle() {
    $('#btn_valid_modif_equipement').attr('style', 'visibilty:visible');
    $('#btn_annuler_modif_equipement').attr('style', 'visibilty:visible');
}

function fre_cacheBtnValidAnnulle() {
    $('#btn_valid_modif_equipement').attr('style', 'visibilty:hidden');
    $('#btn_annuler_modif_equipement').attr('style', 'visibilty:hidden');
}

function fre_gest_select_const() {
    id_eq = $('#select_equipement option:selected').val();
    alert(id_eq);
    id_equipement = id_eq;
    libEq = $('#select_equipement option:selected').text();


    //fre_displayEquipementByIdEquipement(id_eq);

    frea_displayAccessByIdEquipement(id_eq);
    frea_setLibEquipement(libEq);

}

function fre_addEquipement() {
    //id_eq = $('#id_equipement').val();
    lib_equipement = $('#lib_equipement').val();
    num_serie_equipement = $('#num_serie_equipement').val();
    version_equipement = $('#version_equipement').val();
    constructeur = $('#constructeur option:selected').val();
    id_type_equipement = $('#type_equipement option:selected').val();


    //alert(id_eq);
    $.ajax({
        method: 'POST',
        url: pathEquipement + 'addEquipement',
        data: {
            //'id_equipement': id_eq,
            'lib_equipement': lib_equipement,
            'constructeur': constructeur,
            'num_serie_equipement': num_serie_equipement,
            'version_equipement': version_equipement,
            'type_equipement': id_type_equipement
        },
        dataType: 'html', // on veut un retour JSON
        success: function (msg) {
            //alert('--'+num_serie_equipement+"--");
            alert(msg);
            // displayInfoPrincipalEquipement(id_central);
            fre_displayEquipementFromCache(id_eq);
            frea_displayAccessByIdEquipement(id_eq);

        }
    });
}

function fre_modifEquipement() {
    id_eq = $('#id_equipement').val();
    lib_equipement = $('#lib_equipement').val();
    num_serie_equipement = $('#num_serie_equipement').val();
    version_equipement = $('#version_equipement').val();
    constructeur = $('#constructeur option:selected').val();
    id_type_equipement = $('#type_equipement option:selected').val();
    //alert(id_eq);
    $.ajax({
        method: 'POST',
        url: pathEquipement + 'updateEquipement',
        data: {'id_equipement': id_eq,
            'lib_equipement': lib_equipement,
            'constructeur': constructeur,
            'num_serie_equipement': num_serie_equipement,
            'version_equipement': version_equipement,
            'type_equipement': id_type_equipement
        },
        dataType: 'html', // on veut un retour JSON
        success: function (msg) {
            //alert('--'+num_serie_equipement+"--");
            alert(msg);
            // displayInfoPrincipalEquipement(id_central);
            fre_displayEquipementFromCache(id_eq);
            frea_displayAccessByIdEquipement(id_eq);

        }, error: function () {
            // alert('test');
        }
    });


}

function fre_formulaire_est_valide() {
    //id_eq = $('#id_equipement').val();
    lib_equipement = $('#lib_equipement').val();
    num_serie_equipement = $('#num_serie_equipement').val();
    version_equipement = $('#version_equipement').val();
    constructeur = $('#constructeur option:selected').val();
    id_type_equipement = $('#type_equipement option:selected').val();

    if (lib_equipement !== "" &&
            num_serie_equipement !== "" &&
            version_equipement !== "" &&
            constructeur !== "" &&
            id_type_equipement !== "") {
        return true;
    } else
        return false;

}
