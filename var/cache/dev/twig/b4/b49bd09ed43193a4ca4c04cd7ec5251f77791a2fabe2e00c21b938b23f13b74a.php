<?php

/* SIECentralBundle:form:result_admin_detail.html.twig */
class __TwigTemplate_800f50d3d6036926234ed908f15a61a669d293ee5f65decb5c4291ffb73f1951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68f67b1f6e20e60778404d5e5ed44f63e0aeb0bcb2e80dfd61a7dd8ddeaf9852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f67b1f6e20e60778404d5e5ed44f63e0aeb0bcb2e80dfd61a7dd8ddeaf9852->enter($__internal_68f67b1f6e20e60778404d5e5ed44f63e0aeb0bcb2e80dfd61a7dd8ddeaf9852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECentralBundle:form:result_admin_detail.html.twig"));

        // line 2
        echo "<div id=\"equipement_saisie_affichage_general\">
    <br/><b>Nom de l'équipement</b>
    <br/><input type=\"text\" id=\"motif_lib_equipement\"/>

    <br/><b>Type d'équipement</b>
    <br/><select id=\"modif_select_choix_type_equipement\">
        <!---<option></option> -->
    </select>

    <br/><b>Centrale</b>
    <br/><select id=\"modif_select_centrale\">
        <!--  <option></option> -->
    </select>            
</div>
<br/><b>Moyen d'access</b>
<!--<br/>IP : <input id=\"ip_new_moy_access\" type=\"text\" />-->
<br/>
<input id=\"btn_new_moyen_access\" type=\"button\" value=\"new\"/>
<input id=\"btn_ajout_moyen_access\" type=\"button\" value=\"Valider\" disabled=\"disabled\"/>
<input id=\"btn_annuler_moyen_access\" type=\"button\" value=\"Annuler\" disabled=\"disabled\"/>


<br/>
<br/><select id=\"select_modif_choix_moyen_access\">
    <!--<option></option>--->
</select>
<input id=\"sup_modif_moyen_access\" type=\"button\" value=\"X\"/>
<br/><input id=\"modif_lib_moyen_access\" type=\"text\"/>
<br/><b> Adresse IP</b>
<br/><input id=\"modif_adresseIP_moyen_access\" type=\"text\"/>

<br/><b>Login</b>
<br/><input id=\"modif_login_choix_moyen_access\" type=\"text\"/>

<br/><b>Mot de passe</b>
<br/><input id=\"modif_mdp_choix_moyen_access\" type=\"text\"/>

<br/><b>N° Port</b>
<br/><input id=\"modif_port_choix_moyen_access\" type=\"text\"/>

<br/>
<!--<br/><b>Adresse IP </b>
<br/><select id=\"select_choix_adresse_ip\">
    </select>
<input id=\"sup_choix_adresse_ip\" type=\"button\" value=\"X\"/>
<br/><input id=\"modif_choix_adresse_ip\" type=\"text\"/>
<input id=\"valid_modif_choix_adress_ip\" type=\"button\" value=\"OK\" disabled=\"disabled\"/>
-->                                                     
<br/><b>Adresse MAC</b>
<br/><select id=\"modif_select_adresse_mac\" >
</select>

<br/><input id=\"modif_choix_adresse_mac\" type=\"text\"/>
<input id=\"valid_modif_choix_adress_mac\" type=\"button\" value=\"OK\"/>
</form>";
        
        $__internal_68f67b1f6e20e60778404d5e5ed44f63e0aeb0bcb2e80dfd61a7dd8ddeaf9852->leave($__internal_68f67b1f6e20e60778404d5e5ed44f63e0aeb0bcb2e80dfd61a7dd8ddeaf9852_prof);

    }

    public function getTemplateName()
    {
        return "SIECentralBundle:form:result_admin_detail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIE/CentralBundle/Resources/views/form/result_admin_detail.html.twig #}
<div id=\"equipement_saisie_affichage_general\">
    <br/><b>Nom de l'équipement</b>
    <br/><input type=\"text\" id=\"motif_lib_equipement\"/>

    <br/><b>Type d'équipement</b>
    <br/><select id=\"modif_select_choix_type_equipement\">
        <!---<option></option> -->
    </select>

    <br/><b>Centrale</b>
    <br/><select id=\"modif_select_centrale\">
        <!--  <option></option> -->
    </select>            
</div>
<br/><b>Moyen d'access</b>
<!--<br/>IP : <input id=\"ip_new_moy_access\" type=\"text\" />-->
<br/>
<input id=\"btn_new_moyen_access\" type=\"button\" value=\"new\"/>
<input id=\"btn_ajout_moyen_access\" type=\"button\" value=\"Valider\" disabled=\"disabled\"/>
<input id=\"btn_annuler_moyen_access\" type=\"button\" value=\"Annuler\" disabled=\"disabled\"/>


<br/>
<br/><select id=\"select_modif_choix_moyen_access\">
    <!--<option></option>--->
</select>
<input id=\"sup_modif_moyen_access\" type=\"button\" value=\"X\"/>
<br/><input id=\"modif_lib_moyen_access\" type=\"text\"/>
<br/><b> Adresse IP</b>
<br/><input id=\"modif_adresseIP_moyen_access\" type=\"text\"/>

<br/><b>Login</b>
<br/><input id=\"modif_login_choix_moyen_access\" type=\"text\"/>

<br/><b>Mot de passe</b>
<br/><input id=\"modif_mdp_choix_moyen_access\" type=\"text\"/>

<br/><b>N° Port</b>
<br/><input id=\"modif_port_choix_moyen_access\" type=\"text\"/>

<br/>
<!--<br/><b>Adresse IP </b>
<br/><select id=\"select_choix_adresse_ip\">
    </select>
<input id=\"sup_choix_adresse_ip\" type=\"button\" value=\"X\"/>
<br/><input id=\"modif_choix_adresse_ip\" type=\"text\"/>
<input id=\"valid_modif_choix_adress_ip\" type=\"button\" value=\"OK\" disabled=\"disabled\"/>
-->                                                     
<br/><b>Adresse MAC</b>
<br/><select id=\"modif_select_adresse_mac\" >
</select>

<br/><input id=\"modif_choix_adresse_mac\" type=\"text\"/>
<input id=\"valid_modif_choix_adress_mac\" type=\"button\" value=\"OK\"/>
</form>", "SIECentralBundle:form:result_admin_detail.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CentralBundle/Resources/views/form/result_admin_detail.html.twig");
    }
}
