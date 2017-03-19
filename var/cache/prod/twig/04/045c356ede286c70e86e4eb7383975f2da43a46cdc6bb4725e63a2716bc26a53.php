<?php

/* SIECentralBundle:Default:detail_central.html.twig */
class __TwigTemplate_f476cf9a040d499c17160acd2844a5659e7c6ce9b8e7d23f7c093deb0f22a954 extends Twig_Template
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
        $__internal_b75ca69f068779eac83d9a2ff27601af1cf80d5f889febddb5bfffc19259a641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75ca69f068779eac83d9a2ff27601af1cf80d5f889febddb5bfffc19259a641->enter($__internal_b75ca69f068779eac83d9a2ff27601af1cf80d5f889febddb5bfffc19259a641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECentralBundle:Default:detail_central.html.twig"));

        // line 2
        echo "
<div class=\"panel panel-default\" id=\"detail\" >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\">Détails </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > 
        <ul class=\"nav nav-tabs\">
            <li id=\"menu_information\" class=\"active\"><a onClick=\"fc_css_select_menu_informations_centrale();\" data-toggle=\"tab\" href=\"#home\">Global</a></li>
            <li  id=\"menu_equipement\"><a data-toggle=\"tab\" onClick=\"fc_css_select_menu_equipement_centrale();\" href=\"#\">Equipements</a></li>
            <li  id=\"menu_schema\"><a data-toggle=\"tab\" onClick=\"fc_css_select_menu_schema_centrale();\"  href=\"#\">Schémas</a></li>
        </ul>
        <div class=\"tab-content\" >
            <div id=\"informations_centrale\" class=\"tab-pane fade in active\">
                <h3></h3>
                <p>
                <table class=\"table-condensed\">
                    <thead></thead>
                    <tbody>
                        <tr><td>Direction</td><td><input type=\"text\" id=\"direction\" disabled=\"true\"></td></tr>
                        <tr><td>Chargé d'exploitation</td><td><input type=\"text\" id=\"cex\" disabled=\"true\"></td></tr>
                    </tbody>

                </table>
                <br/>


                </p>
            </div>
            <div id=\"equipement_centrale\" class=\"tab-pane fade\">
                <h3>Equipements</h3>
                <p>
                    Libellé equipement <br/><input type=\"text\" id=\"lib_equipement_centrale\" disabled=\"true\">
                    Constructeur <br/><input type=\"text\" id=\"constructeur\" disabled=\"true\"> 
                    Type <br/><input type=\"text\" id=\"type\" disabled=\"true\">                                  
                </p>
            </div>
            <div id=\"schema_centrale\" class=\"tab-pane fade\">
                <h3>Libellé schéma</h3>
                <p>

                </p>
            </div>
        </div>
    </div>




</div>
";
        
        $__internal_b75ca69f068779eac83d9a2ff27601af1cf80d5f889febddb5bfffc19259a641->leave($__internal_b75ca69f068779eac83d9a2ff27601af1cf80d5f889febddb5bfffc19259a641_prof);

    }

    public function getTemplateName()
    {
        return "SIECentralBundle:Default:detail_central.html.twig";
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
        return new Twig_Source("{# SIECentralBundle/Resources/views/form/detail_centrale.html.twig #}

<div class=\"panel panel-default\" id=\"detail\" >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\">Détails </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > 
        <ul class=\"nav nav-tabs\">
            <li id=\"menu_information\" class=\"active\"><a onClick=\"fc_css_select_menu_informations_centrale();\" data-toggle=\"tab\" href=\"#home\">Global</a></li>
            <li  id=\"menu_equipement\"><a data-toggle=\"tab\" onClick=\"fc_css_select_menu_equipement_centrale();\" href=\"#\">Equipements</a></li>
            <li  id=\"menu_schema\"><a data-toggle=\"tab\" onClick=\"fc_css_select_menu_schema_centrale();\"  href=\"#\">Schémas</a></li>
        </ul>
        <div class=\"tab-content\" >
            <div id=\"informations_centrale\" class=\"tab-pane fade in active\">
                <h3></h3>
                <p>
                <table class=\"table-condensed\">
                    <thead></thead>
                    <tbody>
                        <tr><td>Direction</td><td><input type=\"text\" id=\"direction\" disabled=\"true\"></td></tr>
                        <tr><td>Chargé d'exploitation</td><td><input type=\"text\" id=\"cex\" disabled=\"true\"></td></tr>
                    </tbody>

                </table>
                <br/>


                </p>
            </div>
            <div id=\"equipement_centrale\" class=\"tab-pane fade\">
                <h3>Equipements</h3>
                <p>
                    Libellé equipement <br/><input type=\"text\" id=\"lib_equipement_centrale\" disabled=\"true\">
                    Constructeur <br/><input type=\"text\" id=\"constructeur\" disabled=\"true\"> 
                    Type <br/><input type=\"text\" id=\"type\" disabled=\"true\">                                  
                </p>
            </div>
            <div id=\"schema_centrale\" class=\"tab-pane fade\">
                <h3>Libellé schéma</h3>
                <p>

                </p>
            </div>
        </div>
    </div>




</div>
", "SIECentralBundle:Default:detail_central.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CentralBundle/Resources/views/Default/detail_central.html.twig");
    }
}
