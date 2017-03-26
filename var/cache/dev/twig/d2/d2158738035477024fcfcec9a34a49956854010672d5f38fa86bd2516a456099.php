<?php

/* SIECentralBundle:Default:index.html.twig */
class __TwigTemplate_60f0fff51ea503856bc738b2f56465a220f0c4d9ac7d2b48492f56b335ee3cef extends Twig_Template
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
        $__internal_1682a83eb2df083384dc41e5079ecc5a8ec8fc22779f549a07639e7056e9bae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1682a83eb2df083384dc41e5079ecc5a8ec8fc22779f549a07639e7056e9bae8->enter($__internal_1682a83eb2df083384dc41e5079ecc5a8ec8fc22779f549a07639e7056e9bae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECentralBundle:Default:index.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("SIECoreBundle:Default:head_sous_menu.html.twig", "SIECentralBundle:Default:index.html.twig", 3)->display($context);
        echo " 
";
        // line 4
        echo " 
";
        // line 5
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "<title id=\"titre\">Centrales</title>
<body data-spy=\"scroll\" data-target=\"#detail_central\" data-target=\"#apercu_central\" charset=\"iso-8859-1\" >
    <!-- <body data-spy=\"scroll\" data-target=\".panel-body\" data-offset=\"15\">-->

    <div class=\"container \">
         
            <div class=\"col-md-1\">
                <div  id=\"detail_centrale\"   class=\"panel-fixed affix\"  >
                    <!--  <div  id=\"detail_equipement\"   class=\"sidebar-nav-fixed  affix\"  >
                         Default panel contents -->
                    <table><tr><td>
                    <div class=\"panel-body\">   
                        ";
        // line 25
        $this->loadTemplate("SIECentralBundle:Default:apercu_central.html.twig", "SIECentralBundle:Default:index.html.twig", 25)->display($context);
        echo " 

                    </div>
                    </td><td>    
                    <div class=\"panel-body\">   
                        ";
        // line 30
        $this->loadTemplate("SIECentralBundle:Default:detail_central.html.twig", "SIECentralBundle:Default:index.html.twig", 30)->display($context);
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
        $context["nb"] = ((isset($context["nbCentral"]) ? $context["nbCentral"] : $this->getContext($context, "nbCentral")) + 0);
        echo " ";
        // line 51
        echo "               
                <div  id=\"list_principale\"  >
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["nbCentral"]) ? $context["nbCentral"] : $this->getContext($context, "nbCentral"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 54
            echo "                        <!--<tr>-->
                        <a onclick=\"fc_select(";
            // line 55
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ");\" href=\"#\" id='lien_central";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' class=\"list-group-item list-group-item-action flex-column align-items-start \">
                            <!-- <div class=\"d-flex w-100 justify-content-between\"> -->
                            <h5 class=\"mb-1\"><div id=\"lib_central";
            // line 57
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"></div>
                               
                            </h5>  <small id=\"lib_dr";
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
        
        $__internal_1682a83eb2df083384dc41e5079ecc5a8ec8fc22779f549a07639e7056e9bae8->leave($__internal_1682a83eb2df083384dc41e5079ecc5a8ec8fc22779f549a07639e7056e9bae8_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d224604730ca77770a66217955ddeb1b95e8d51521fbde76a5c8a1e0f0d3fa10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d224604730ca77770a66217955ddeb1b95e8d51521fbde76a5c8a1e0f0d3fa10->enter($__internal_d224604730ca77770a66217955ddeb1b95e8d51521fbde76a5c8a1e0f0d3fa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "66960f5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_66960f5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/66960f5_setUp_1.js");
            // line 7
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>          
    ";
        } else {
            // asset "66960f5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_66960f5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/66960f5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>          
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4158b03_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4158b03_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/4158b03_front_centrale_1.js");
            // line 10
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>          
    ";
        } else {
            // asset "4158b03"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4158b03") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/4158b03.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>          
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_d224604730ca77770a66217955ddeb1b95e8d51521fbde76a5c8a1e0f0d3fa10->leave($__internal_d224604730ca77770a66217955ddeb1b95e8d51521fbde76a5c8a1e0f0d3fa10_prof);

    }

    public function getTemplateName()
    {
        return "SIECentralBundle:Default:index.html.twig";
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
        return new Twig_Source("{# SIECentralBundle/Resources/views/form/index.html.twig #}

{% include \"SIECoreBundle:Default:head_sous_menu.html.twig\" %} 
{# include \"SIEEquipementBundle:Default:search_equipement.html.twig\" #} 
{% block javascripts %}
    {% javascripts '@SIECoreBundle/Resources/public/js/setUp.js' %}
    <script src=\"{{ asset_url }}\" charset=\"UTF-8\"></script>          
    {% endjavascripts %}
    {% javascripts '@SIECentralBundle/Resources/public/js/front_centrale.js' %}
    <script src=\"{{ asset_url }}\" charset=\"UTF-8\"></script>          
    {% endjavascripts %}
{% endblock %}
<title id=\"titre\">Centrales</title>
<body data-spy=\"scroll\" data-target=\"#detail_central\" data-target=\"#apercu_central\" charset=\"iso-8859-1\" >
    <!-- <body data-spy=\"scroll\" data-target=\".panel-body\" data-offset=\"15\">-->

    <div class=\"container \">
         
            <div class=\"col-md-1\">
                <div  id=\"detail_centrale\"   class=\"panel-fixed affix\"  >
                    <!--  <div  id=\"detail_equipement\"   class=\"sidebar-nav-fixed  affix\"  >
                         Default panel contents -->
                    <table><tr><td>
                    <div class=\"panel-body\">   
                        {% include \"SIECentralBundle:Default:apercu_central.html.twig\" %} 

                    </div>
                    </td><td>    
                    <div class=\"panel-body\">   
                        {% include \"SIECentralBundle:Default:detail_central.html.twig\" %} 

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

                {% set nb = nbCentral + 0 %} {#nbEquipement est envoyé au template via le controlleur #}
               
                <div  id=\"list_principale\"  >
                    {% for i in range(0,nbCentral) %}
                        <!--<tr>-->
                        <a onclick=\"fc_select({{i}});\" href=\"#\" id='lien_central{{i}}' class=\"list-group-item list-group-item-action flex-column align-items-start \">
                            <!-- <div class=\"d-flex w-100 justify-content-between\"> -->
                            <h5 class=\"mb-1\"><div id=\"lib_central{{i}}\"></div>
                               
                            </h5>  <small id=\"lib_dr{{i}}\"></small>
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
</html>", "SIECentralBundle:Default:index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CentralBundle/Resources/views/Default/index.html.twig");
    }
}
