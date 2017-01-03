<?php

/* SIECoreBundle:Default:index.html.twig */
class __TwigTemplate_0a0f96f8b9b383082d49ba44c06b50d83ec5f9129c59290e3501d0ae88030da8 extends Twig_Template
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
        $__internal_6706f510da611039b00343a70f7bd3ce35bd2ac80bb9d43c9491a026520f9db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6706f510da611039b00343a70f7bd3ce35bd2ac80bb9d43c9491a026520f9db1->enter($__internal_6706f510da611039b00343a70f7bd3ce35bd2ac80bb9d43c9491a026520f9db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECoreBundle:Default:index.html.twig"));

        // line 2
        $this->loadTemplate("SIECoreBundle:Default:head.html.twig", "SIECoreBundle:Default:index.html.twig", 2)->display($context);
        echo " 



";
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "<title id=\"titre\">REFERENTIEL</title>
";
        // line 33
        echo "</head>
<body>
    <header>
        <nav>
            <ul>
                <!-- A CHARGER DEPUIS LA VUE PERE-
                <li><a href=\"page_direction_regionales.xhtml\">Directions Regionales</a></li>
                <li><a href=\"page_central.xhtml\">Centrales </a></li>
                <li><a href=\"page_equipement.xhtml\">Equipements</a></li>-->

            </ul>
        </nav>
    </header>

    <table >
        <tr>
            <td>
                ";
        // line 50
        $this->loadTemplate("SIECoreBundle:Default:search.html.twig", "SIECoreBundle:Default:index.html.twig", 50)->display($context);
        // line 51
        echo "            </td>
        </tr
        <tr>
            <td>
                ";
        // line 55
        $this->loadTemplate("SIECentralBundle:form:result.html.twig", "SIECoreBundle:Default:index.html.twig", 55)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 58
        $this->loadTemplate("SIEDocumentBundle:Default:result_document.html.twig", "SIECoreBundle:Default:index.html.twig", 58)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 61
        $this->loadTemplate("SIEEquipementBundle:Default:result_equipement.html.twig", "SIECoreBundle:Default:index.html.twig", 61)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 64
        $this->loadTemplate("SIEAccessBundle:Default:result_access.html.twig", "SIECoreBundle:Default:index.html.twig", 64)->display($context);
        echo " 
            </td>
            ";
        // line 67
        echo "        </tr>
    </table>      

</body>
</html>
";
        
        $__internal_6706f510da611039b00343a70f7bd3ce35bd2ac80bb9d43c9491a026520f9db1->leave($__internal_6706f510da611039b00343a70f7bd3ce35bd2ac80bb9d43c9491a026520f9db1_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81531a6e869874991738129ccf4e0ff77ebfdafa330cee64ef2dec775fc01feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81531a6e869874991738129ccf4e0ff77ebfdafa330cee64ef2dec775fc01feb->enter($__internal_81531a6e869874991738129ccf4e0ff77ebfdafa330cee64ef2dec775fc01feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dff4dbb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dff4dbb_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/dff4dbb_front_page_1.js");
            // line 8
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "dff4dbb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dff4dbb") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/dff4dbb.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1f81795_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1f81795_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1f81795_app_search_central_1.js");
            // line 11
            echo "    ";
            // line 12
            echo "    ";
        } else {
            // asset "1f81795"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1f81795") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1f81795.js");
            // line 11
            echo "    ";
            // line 12
            echo "    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "
    ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc7accb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc7accb_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fc7accb_front_result_equipement_access_1.js");
            // line 15
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        } else {
            // asset "fc7accb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc7accb") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fc7accb.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "454a49e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_454a49e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/454a49e_front_result_doc_1.js");
            // line 18
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>   
    ";
        } else {
            // asset "454a49e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_454a49e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/454a49e.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>   
    ";
        }
        unset($context["asset_url"]);
        // line 20
        echo " 
    ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af4783f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_af4783f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/af4783f_front_result_equipement_1.js");
            // line 22
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        } else {
            // asset "af4783f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_af4783f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/af4783f.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5be7e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a5be7e7_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a5be7e7_front_result_central_1.js");
            // line 25
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        } else {
            // asset "a5be7e7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a5be7e7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a5be7e7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da82b2d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_da82b2d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/da82b2d_front_search_1.js");
            // line 28
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 
    ";
        } else {
            // asset "da82b2d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_da82b2d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/da82b2d.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_81531a6e869874991738129ccf4e0ff77ebfdafa330cee64ef2dec775fc01feb->leave($__internal_81531a6e869874991738129ccf4e0ff77ebfdafa330cee64ef2dec775fc01feb_prof);

    }

    public function getTemplateName()
    {
        return "SIECoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 28,  220 => 27,  206 => 25,  201 => 24,  187 => 22,  183 => 21,  180 => 20,  166 => 18,  161 => 17,  147 => 15,  143 => 14,  140 => 13,  136 => 12,  134 => 11,  129 => 12,  127 => 11,  122 => 10,  108 => 8,  103 => 7,  97 => 6,  85 => 67,  80 => 64,  74 => 61,  68 => 58,  62 => 55,  56 => 51,  54 => 50,  35 => 33,  32 => 31,  30 => 6,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIECentralBundle/Resources/views/index.html.twig #}
{% include \"SIECoreBundle:Default:head.html.twig\" %} 



{% block javascripts %}
    {% javascripts '@SIECentralBundle/Resources/public/js/front_page.js' %}
    <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
    {% javascripts '@SIECentralBundle/Resources/public/js/app_search_central.js' %}
    {#<script src=\"{{ asset_url }}\"></script>#}
    {% endjavascripts %}

    {% javascripts '@SIEAccessBundle/Resources/public/js/front_result_equipement_access.js' %}
    <script src=\"{{ asset_url }}\"></script>          
    {% endjavascripts %}
    {% javascripts '@SIEDocumentBundle/Resources/public/js/front_result_doc.js' %}
    <script src=\"{{ asset_url }}\"></script>   
    {% endjavascripts %}
 
    {% javascripts '@SIEEquipementBundle/Resources/public/js/front_result_equipement.js' %}
    <script src=\"{{ asset_url }}\"></script>          
    {% endjavascripts %}
    {% javascripts '@SIECentralBundle/Resources/public/js/front_result_central.js' %}
    <script src=\"{{ asset_url }}\"></script>          
    {% endjavascripts %}
    {% javascripts '@SIECoreBundle/Resources/public/js/front_search.js' %}
    <script src=\"{{ asset_url }}\"></script> 
    {% endjavascripts %}
{% endblock %}
<title id=\"titre\">REFERENTIEL</title>
{# <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>#}
</head>
<body>
    <header>
        <nav>
            <ul>
                <!-- A CHARGER DEPUIS LA VUE PERE-
                <li><a href=\"page_direction_regionales.xhtml\">Directions Regionales</a></li>
                <li><a href=\"page_central.xhtml\">Centrales </a></li>
                <li><a href=\"page_equipement.xhtml\">Equipements</a></li>-->

            </ul>
        </nav>
    </header>

    <table >
        <tr>
            <td>
                {% include \"SIECoreBundle:Default:search.html.twig\" %}
            </td>
        </tr
        <tr>
            <td>
                {% include \"SIECentralBundle:form:result.html.twig\" %} 
            </td>
            <td>
                {% include \"SIEDocumentBundle:Default:result_document.html.twig\" %} 
            </td>
            <td>
                {% include \"SIEEquipementBundle:Default:result_equipement.html.twig\" %} 
            </td>
            <td>
                {% include \"SIEAccessBundle:Default:result_access.html.twig\" %} 
            </td>
            {#<a id=\"lienPDF\" href=\"../form/formCentral.php?pdf=1\">Referenciel PDF</a>#}
        </tr>
    </table>      

</body>
</html>
", "SIECoreBundle:Default:index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CoreBundle/Resources/views/Default/index.html.twig");
    }
}
