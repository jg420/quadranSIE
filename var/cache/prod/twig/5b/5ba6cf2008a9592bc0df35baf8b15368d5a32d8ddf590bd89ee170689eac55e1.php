<?php

/* SIEEquipementBundle:Default:index.html.twig */
class __TwigTemplate_46556fe1eee0ada47214e7f652aa5e15d52dc71615803fdecda412a4836b5c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3288716f7ff12ae1654fe33265dca2eb9b317bffb1e811925fe3cd6b863e21d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3288716f7ff12ae1654fe33265dca2eb9b317bffb1e811925fe3cd6b863e21d2->enter($__internal_3288716f7ff12ae1654fe33265dca2eb9b317bffb1e811925fe3cd6b863e21d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEEquipementBundle:Default:index.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("SIECoreBundle:Default:head.html.twig", "SIEEquipementBundle:Default:index.html.twig", 3)->display($context);
        echo " 
";
        // line 4
        echo " 
";
        // line 5
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "<title id=\"titre\">EQUIPEMENTS</title>
<body data-spy=\"scroll\" data-target=\"#detail_equipement\" data-target=\"#apercu_equipement\" >
    <!-- <body data-spy=\"scroll\" data-target=\".panel-body\" data-offset=\"15\">-->

    <div class=\"container \">
         
            <div class=\"col-md-1\">
                <div  id=\"detail_equipement\"   class=\"panel-fixed affix\"  >
                    <!--  <div  id=\"detail_equipement\"   class=\"sidebar-nav-fixed  affix\"  >
                         Default panel contents -->
                    <table><tr><td>
                    <div class=\"panel-body\">   
                        ";
        // line 25
        $this->loadTemplate("SIEEquipementBundle:Default:apercu_equipement.html.twig", "SIEEquipementBundle:Default:index.html.twig", 25)->display($context);
        echo " 
                  
                    </div>
                    </td><td>    
                    <div class=\"panel-body\">   
                        ";
        // line 30
        $this->loadTemplate("SIEEquipementBundle:Default:detail_equipement.html.twig", "SIEEquipementBundle:Default:index.html.twig", 30)->display($context);
        echo " 

                    </div></td></tr></table>
                        
                </div>
            </div>
       
                        <div  >
                <!-- <table id=\"table_equipement\"   class=\"table\">
                    <thead sidebar-nav-fixed  affix>  
                        <tr>
                            <th id=\"KeyParam1\">Nom</th>
                            <th id=\"KeyParam2\">Centrale</th>
                            <th id=\"KeyParam3\">Constructeur</th>
                        </tr>
                    </thead>

                    <tbody>
                        Row 1 -->

                ";
        // line 50
        $context["nb"] = ((isset($context["nbEquipement"]) ? $context["nbEquipement"] : $this->getContext($context, "nbEquipement")) + 0);
        echo " ";
        // line 51
        echo "               
                <div  id=\"list_principale\"  >
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["nbEquipement"]) ? $context["nbEquipement"] : $this->getContext($context, "nbEquipement"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 54
            echo "                        <!--<tr>-->
                        <a onclick=\"fe_select(";
            // line 55
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ");\" href=\"#\" val=\"0\" id='lien_equipement";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' class=\"list-group-item list-group-item-action flex-column align-items-start \">
                            <!-- <div class=\"d-flex w-100 justify-content-between\"> -->
                            <h5 class=\"mb-1\"><div id=\"lib_equipement";
            // line 57
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"></div>
                               
                            </h5>  <small id=\"lib_constructeur";
            // line 59
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"></small>
                          <!-- <small>lib_centrale";
            // line 60
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</small>
                          
                        <p class=\"mb-1\"><small>lib_constructeur";
            // line 62
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</small> -->
                        </a>
                        <!-- </tr>
                                                <tr id=\"selectEquipement";
            // line 65
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"  > 
                                                     
                                                     <td ><input type=\"text\" id=\"lib_equipement";
            // line 67
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"  disabled=\"disabled\"/></td>
                                                     <td ><input type=\"text\"  size=\"9\" id=\"lib_centrale";
            // line 68
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" disabled=\"true\"></td>
                                                     <td ><select  class=\"selectpicker\" id=\"lib_constructeur";
            // line 69
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"  disabled=\"true\"></select></td>
                         
                                                 </tr>    
                                                  
                         
                         
                        -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
                </div>
                <!--  </tbody>


                </td> 

            </table> -->  
            </div>





        
                    </div>
</body>
</html>";
        
        $__internal_3288716f7ff12ae1654fe33265dca2eb9b317bffb1e811925fe3cd6b863e21d2->leave($__internal_3288716f7ff12ae1654fe33265dca2eb9b317bffb1e811925fe3cd6b863e21d2_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd10a32ab382e13d13d6bf0bdfc6201b3a911f872bde1e091ff225c6159134b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd10a32ab382e13d13d6bf0bdfc6201b3a911f872bde1e091ff225c6159134b2->enter($__internal_fd10a32ab382e13d13d6bf0bdfc6201b3a911f872bde1e091ff225c6159134b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "66960f5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_66960f5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/66960f5_setUp_1.js");
            // line 7
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        } else {
            // asset "66960f5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_66960f5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/66960f5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e4453c8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e4453c8_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e4453c8_front_equipement_1.js");
            // line 10
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        } else {
            // asset "e4453c8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e4453c8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e4453c8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_fd10a32ab382e13d13d6bf0bdfc6201b3a911f872bde1e091ff225c6159134b2->leave($__internal_fd10a32ab382e13d13d6bf0bdfc6201b3a911f872bde1e091ff225c6159134b2_prof);

    }

    public function getTemplateName()
    {
        return "SIEEquipementBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 10,  197 => 9,  183 => 7,  178 => 6,  172 => 5,  148 => 77,  134 => 69,  130 => 68,  126 => 67,  121 => 65,  115 => 62,  110 => 60,  106 => 59,  101 => 57,  94 => 55,  91 => 54,  87 => 53,  83 => 51,  80 => 50,  57 => 30,  49 => 25,  35 => 13,  33 => 5,  30 => 4,  26 => 3,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIEEquipementBundle/Resources/views/form/index.html.twig #}

{% include \"SIECoreBundle:Default:head.html.twig\" %} 
{# include \"SIEEquipementBundle:Default:search_equipement.html.twig\" #} 
{% block javascripts %}
    {% javascripts '@SIECoreBundle/Resources/public/js/setUp.js' %}
    <script src=\"{{ asset_url }}\"></script>          
    {% endjavascripts %}
    {% javascripts '@SIEEquipementBundle/Resources/public/js/front_equipement.js' %}
    <script src=\"{{ asset_url }}\"></script>          
    {% endjavascripts %}
{% endblock %}
<title id=\"titre\">EQUIPEMENTS</title>
<body data-spy=\"scroll\" data-target=\"#detail_equipement\" data-target=\"#apercu_equipement\" >
    <!-- <body data-spy=\"scroll\" data-target=\".panel-body\" data-offset=\"15\">-->

    <div class=\"container \">
         
            <div class=\"col-md-1\">
                <div  id=\"detail_equipement\"   class=\"panel-fixed affix\"  >
                    <!--  <div  id=\"detail_equipement\"   class=\"sidebar-nav-fixed  affix\"  >
                         Default panel contents -->
                    <table><tr><td>
                    <div class=\"panel-body\">   
                        {% include \"SIEEquipementBundle:Default:apercu_equipement.html.twig\" %} 
                  
                    </div>
                    </td><td>    
                    <div class=\"panel-body\">   
                        {% include \"SIEEquipementBundle:Default:detail_equipement.html.twig\" %} 

                    </div></td></tr></table>
                        
                </div>
            </div>
       
                        <div  >
                <!-- <table id=\"table_equipement\"   class=\"table\">
                    <thead sidebar-nav-fixed  affix>  
                        <tr>
                            <th id=\"KeyParam1\">Nom</th>
                            <th id=\"KeyParam2\">Centrale</th>
                            <th id=\"KeyParam3\">Constructeur</th>
                        </tr>
                    </thead>

                    <tbody>
                        Row 1 -->

                {% set nb = nbEquipement + 0 %} {#nbEquipement est envoyé au template via le controlleur #}
               
                <div  id=\"list_principale\"  >
                    {% for i in range(0,nbEquipement) %}
                        <!--<tr>-->
                        <a onclick=\"fe_select({{i}});\" href=\"#\" val=\"0\" id='lien_equipement{{i}}' class=\"list-group-item list-group-item-action flex-column align-items-start \">
                            <!-- <div class=\"d-flex w-100 justify-content-between\"> -->
                            <h5 class=\"mb-1\"><div id=\"lib_equipement{{i}}\"></div>
                               
                            </h5>  <small id=\"lib_constructeur{{i}}\"></small>
                          <!-- <small>lib_centrale{{i}}</small>
                          
                        <p class=\"mb-1\"><small>lib_constructeur{{i}}</small> -->
                        </a>
                        <!-- </tr>
                                                <tr id=\"selectEquipement{{i}}\"  > 
                                                     
                                                     <td ><input type=\"text\" id=\"lib_equipement{{i}}\"  disabled=\"disabled\"/></td>
                                                     <td ><input type=\"text\"  size=\"9\" id=\"lib_centrale{{i}}\" disabled=\"true\"></td>
                                                     <td ><select  class=\"selectpicker\" id=\"lib_constructeur{{i}}\"  disabled=\"true\"></select></td>
                         
                                                 </tr>    
                                                  
                         
                         
                        -->
                    {% endfor%}

                </div>
                <!--  </tbody>


                </td> 

            </table> -->  
            </div>





        
                    </div>
</body>
</html>", "SIEEquipementBundle:Default:index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\EquipementBundle/Resources/views/Default/index.html.twig");
    }
}
