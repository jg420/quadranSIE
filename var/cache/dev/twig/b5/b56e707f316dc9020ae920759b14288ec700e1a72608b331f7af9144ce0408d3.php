<?php

/* SIEAccessBundle:Default:detail_acces.html.twig */
class __TwigTemplate_c2f3f5181695e225895f00633ed484d66ede248601be307b407b3e825888ae62 extends Twig_Template
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
        $__internal_c5c734c7196dee3e81487aac7fe46824b82bfe6779d90a9bc6c0496a59872609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c734c7196dee3e81487aac7fe46824b82bfe6779d90a9bc6c0496a59872609->enter($__internal_c5c734c7196dee3e81487aac7fe46824b82bfe6779d90a9bc6c0496a59872609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEAccessBundle:Default:detail_acces.html.twig"));

        // line 2
        echo "
<div class=\"panel panel-default\" id=\"info_acces\" >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\">Propriétés </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > 
        <ul class=\"nav nav-tabs\">
            <li id=\"menu_details\" class=\"active\"><a onClick=\"fa_css_select_details_acces();\" data-togfegle=\"tab\"  >Détails équipements</a></li>
            <li  id=\"menu_acces\"><a data-toggle=\"tab\" onClick=\"fa_css_select_acces_equipement();\"  >Accés</a></li>
            
        </ul>
        <div class=\"tab-content\" >
            <div id=\"details_equipement\" class=\"tab-pane fade in active\">
                <h3></h3>
                <p>
                <table class=\"table-condensed\">
                    <thead></thead>
                    <tbody>
                        <tr><td>Adresse Mac</td><td><input type=\"text\" id=\"adresse_mac\" disabled=\"true\"></td></tr>
                        <tr><td>Version</td><td><input type=\"text\" id=\"version\" disabled=\"true\"></td></tr>
                    </tbody>

                </table>
                <br/>


                </p>
            </div>
            <div id=\"acces_equipement\" class=\"tab-pane fade\">
                <h3>Accés</h3>
                <p>
                    Libellé acces <br/><input type=\"text\" id=\"lib_acces\" disabled=\"true\">
                    Adresse ip <br/><input type=\"text\" id=\"adresse_ip\" disabled=\"true\"> 
                    Login <br/><input type=\"text\" id=\"login\" disabled=\"true\">  
                    Password <br/><input type=\"text\" id=\"password\" disabled=\"true\">  
                    Port <br/><input type=\"text\" id=\"port\" disabled=\"true\"> 
                    Protocol<br/><input type=\"text\" id=\"protocol\" disabled=\"true\">                   
                </p>
            </div>
            
        </div>
    </div>




</div>
";
        
        $__internal_c5c734c7196dee3e81487aac7fe46824b82bfe6779d90a9bc6c0496a59872609->leave($__internal_c5c734c7196dee3e81487aac7fe46824b82bfe6779d90a9bc6c0496a59872609_prof);

    }

    public function getTemplateName()
    {
        return "SIEAccessBundle:Default:detail_acces.html.twig";
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
        return new Twig_Source("{# SIEEquipementBundle/Resources/views/form/detail_equipement.html.twig #}

<div class=\"panel panel-default\" id=\"info_acces\" >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\">Propriétés </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > 
        <ul class=\"nav nav-tabs\">
            <li id=\"menu_details\" class=\"active\"><a onClick=\"fa_css_select_details_acces();\" data-togfegle=\"tab\"  >Détails équipements</a></li>
            <li  id=\"menu_acces\"><a data-toggle=\"tab\" onClick=\"fa_css_select_acces_equipement();\"  >Accés</a></li>
            
        </ul>
        <div class=\"tab-content\" >
            <div id=\"details_equipement\" class=\"tab-pane fade in active\">
                <h3></h3>
                <p>
                <table class=\"table-condensed\">
                    <thead></thead>
                    <tbody>
                        <tr><td>Adresse Mac</td><td><input type=\"text\" id=\"adresse_mac\" disabled=\"true\"></td></tr>
                        <tr><td>Version</td><td><input type=\"text\" id=\"version\" disabled=\"true\"></td></tr>
                    </tbody>

                </table>
                <br/>


                </p>
            </div>
            <div id=\"acces_equipement\" class=\"tab-pane fade\">
                <h3>Accés</h3>
                <p>
                    Libellé acces <br/><input type=\"text\" id=\"lib_acces\" disabled=\"true\">
                    Adresse ip <br/><input type=\"text\" id=\"adresse_ip\" disabled=\"true\"> 
                    Login <br/><input type=\"text\" id=\"login\" disabled=\"true\">  
                    Password <br/><input type=\"text\" id=\"password\" disabled=\"true\">  
                    Port <br/><input type=\"text\" id=\"port\" disabled=\"true\"> 
                    Protocol<br/><input type=\"text\" id=\"protocol\" disabled=\"true\">                   
                </p>
            </div>
            
        </div>
    </div>




</div>
", "SIEAccessBundle:Default:detail_acces.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\AccessBundle/Resources/views/Default/detail_acces.html.twig");
    }
}
