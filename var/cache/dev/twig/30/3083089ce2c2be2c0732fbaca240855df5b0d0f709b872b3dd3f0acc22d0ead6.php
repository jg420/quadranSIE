<?php

/* @SIEAccess/Default/index.html.twig */
class __TwigTemplate_895b2db2e40722eb04b719c7d6c05918193cc2d6cc2ee99e35b3f743b48afaa7 extends Twig_Template
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
        $__internal_06cd7862977149f70f719fa811953c86c1f8230b2d1a184d29b7598e320e5e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cd7862977149f70f719fa811953c86c1f8230b2d1a184d29b7598e320e5e30->enter($__internal_06cd7862977149f70f719fa811953c86c1f8230b2d1a184d29b7598e320e5e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIEAccess/Default/index.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("SIECoreBundle:Default:head.html.twig", "@SIEAccess/Default/index.html.twig", 3)->display($context);
        echo " 

";
        // line 5
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "<title id=\"titre\">ACCES</title>
<body data-spy=\"scroll\" data-target=\"#detail_acces\" data-target=\"#apercu_acces\" >
    <!-- <body data-spy=\"scroll\" data-target=\".panel-body\" data-offset=\"15\">-->

    <div class=\"container \">
         
            <div class=\"col-md-1\">
                <div  id=\"detail_acces\"   class=\"panel-fixed affix\"  >
                    <!--  <div  id=\"detail_acces\"   class=\"sidebar-nav-fixed  affix\"  >
                         Default panel contents -->
                    <table><tr><td>
                    <div class=\"panel-body\">   
                        ";
        // line 25
        $this->loadTemplate("SIEAccessBundle:Default:apercu_acces.html.twig", "@SIEAccess/Default/index.html.twig", 25)->display($context);
        echo " 

                    </div>
                    </td><td>    
                    <div class=\"panel-body\">   
                        ";
        // line 30
        $this->loadTemplate("SIEAccessBundle:Default:detail_acces.html.twig", "@SIEAccess/Default/index.html.twig", 30)->display($context);
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
        $context["nb"] = ((isset($context["nbAcces"]) ? $context["nbAcces"] : $this->getContext($context, "nbAcces")) + 0);
        echo " ";
        // line 51
        echo "               
                <div  id=\"list_principale\"  >
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["nbAcces"]) ? $context["nbAcces"] : $this->getContext($context, "nbAcces"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 54
            echo "                        <!--<tr>-->
                        <a onclick=\"fe_select(";
            // line 55
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ");\" href=\"#\" id='lien_acces";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' class=\"list-group-item list-group-item-action flex-column align-items-start \">
                            <!-- <div class=\"d-flex w-100 justify-content-between\"> -->
                            <h5 class=\"mb-1\"><div id=\"lib_acces";
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
                                                     
                                                     <td ><input type=\"text\" id=\"lib_acces";
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
        
        $__internal_06cd7862977149f70f719fa811953c86c1f8230b2d1a184d29b7598e320e5e30->leave($__internal_06cd7862977149f70f719fa811953c86c1f8230b2d1a184d29b7598e320e5e30_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49fb473289c1b31b1648ffe5b52c1643166b0f1b51f2f60ab73e6e07338368c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fb473289c1b31b1648ffe5b52c1643166b0f1b51f2f60ab73e6e07338368c1->enter($__internal_49fb473289c1b31b1648ffe5b52c1643166b0f1b51f2f60ab73e6e07338368c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            // asset "d1b9655_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d1b9655_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/d1b9655_front_acces_1.js");
            // line 10
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        } else {
            // asset "d1b9655"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d1b9655") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/d1b9655.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_49fb473289c1b31b1648ffe5b52c1643166b0f1b51f2f60ab73e6e07338368c1->leave($__internal_49fb473289c1b31b1648ffe5b52c1643166b0f1b51f2f60ab73e6e07338368c1_prof);

    }

    public function getTemplateName()
    {
        return "@SIEAccess/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 10,  195 => 9,  181 => 7,  176 => 6,  170 => 5,  146 => 77,  132 => 69,  128 => 68,  124 => 67,  119 => 65,  113 => 62,  108 => 60,  104 => 59,  99 => 57,  92 => 55,  89 => 54,  85 => 53,  81 => 51,  78 => 50,  55 => 30,  47 => 25,  33 => 13,  31 => 5,  26 => 3,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIEAccessBundle/Resources/views/form/index.html.twig #}

{% include \"SIECoreBundle:Default:head.html.twig\" %} 

{% block javascripts %}
    {% javascripts '@SIECoreBundle/Resources/public/js/setUp.js' %}
    <script src=\"{{ asset_url }}\"></script>          
    {% endjavascripts %}
    {% javascripts '@SIEAccessBundle/Resources/public/js/front_acces.js' %}
    <script src=\"{{ asset_url }}\"></script>          
    {% endjavascripts %}
{% endblock %}
<title id=\"titre\">ACCES</title>
<body data-spy=\"scroll\" data-target=\"#detail_acces\" data-target=\"#apercu_acces\" >
    <!-- <body data-spy=\"scroll\" data-target=\".panel-body\" data-offset=\"15\">-->

    <div class=\"container \">
         
            <div class=\"col-md-1\">
                <div  id=\"detail_acces\"   class=\"panel-fixed affix\"  >
                    <!--  <div  id=\"detail_acces\"   class=\"sidebar-nav-fixed  affix\"  >
                         Default panel contents -->
                    <table><tr><td>
                    <div class=\"panel-body\">   
                        {% include \"SIEAccessBundle:Default:apercu_acces.html.twig\" %} 

                    </div>
                    </td><td>    
                    <div class=\"panel-body\">   
                        {% include \"SIEAccessBundle:Default:detail_acces.html.twig\" %} 

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

                {% set nb = nbAcces + 0 %} {#nbAcces est envoyé au template via le controlleur #}
               
                <div  id=\"list_principale\"  >
                    {% for i in range(0,nbAcces) %}
                        <!--<tr>-->
                        <a onclick=\"fe_select({{i}});\" href=\"#\" id='lien_acces{{i}}' class=\"list-group-item list-group-item-action flex-column align-items-start \">
                            <!-- <div class=\"d-flex w-100 justify-content-between\"> -->
                            <h5 class=\"mb-1\"><div id=\"lib_acces{{i}}\"></div>
                               
                            </h5>  <small id=\"lib_constructeur{{i}}\"></small>
                          <!-- <small>lib_centrale{{i}}</small>
                          
                        <p class=\"mb-1\"><small>lib_constructeur{{i}}</small> -->
                        </a>
                        <!-- </tr>
                                                <tr id=\"selectEquipement{{i}}\"  > 
                                                     
                                                     <td ><input type=\"text\" id=\"lib_acces{{i}}\"  disabled=\"disabled\"/></td>
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
</html>", "@SIEAccess/Default/index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\AccessBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
