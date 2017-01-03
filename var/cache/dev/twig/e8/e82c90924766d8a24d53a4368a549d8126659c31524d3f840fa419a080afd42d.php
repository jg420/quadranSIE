<?php

/* SIECoreBundle:Default:index.html.twig */
class __TwigTemplate_0255228934dde1d014b936900bbc8efb136fff627ce4c24a43f95665af88617f extends Twig_Template
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
        $__internal_a82d0a90ab8fbc6ecf208905b8c0d971676f63bac1d707abc95e1a6e5f476ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82d0a90ab8fbc6ecf208905b8c0d971676f63bac1d707abc95e1a6e5f476ffe->enter($__internal_a82d0a90ab8fbc6ecf208905b8c0d971676f63bac1d707abc95e1a6e5f476ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECoreBundle:Default:index.html.twig"));

        // line 2
        $this->loadTemplate("SIECoreBundle:Default:head.html.twig", "SIECoreBundle:Default:index.html.twig", 2)->display($context);
        echo " 



";
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "<title id=\"titre\">REFERENTIEL</title>
";
        // line 36
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
        // line 53
        $this->loadTemplate("SIECoreBundle:Default:search.html.twig", "SIECoreBundle:Default:index.html.twig", 53)->display($context);
        // line 54
        echo "            </td>
        </tr
        <tr>
            <td>
                ";
        // line 58
        $this->loadTemplate("SIECentralBundle:form:result_central.html.twig", "SIECoreBundle:Default:index.html.twig", 58)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 61
        $this->loadTemplate("SIEDocumentBundle:Default:result_document.html.twig", "SIECoreBundle:Default:index.html.twig", 61)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 64
        $this->loadTemplate("SIEEquipementBundle:Default:result_equipement.html.twig", "SIECoreBundle:Default:index.html.twig", 64)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 67
        $this->loadTemplate("SIEAccessBundle:Default:result_access.html.twig", "SIECoreBundle:Default:index.html.twig", 67)->display($context);
        echo " 
            </td>
            ";
        // line 70
        echo "        </tr>
    </table>      

</body>
</html>
";
        
        $__internal_a82d0a90ab8fbc6ecf208905b8c0d971676f63bac1d707abc95e1a6e5f476ffe->leave($__internal_a82d0a90ab8fbc6ecf208905b8c0d971676f63bac1d707abc95e1a6e5f476ffe_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e9afd1b1566ca28a451589ee3843a161585abf2d80e0faf060f3108fc700b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9afd1b1566ca28a451589ee3843a161585abf2d80e0faf060f3108fc700b3f->enter($__internal_9e9afd1b1566ca28a451589ee3843a161585abf2d80e0faf060f3108fc700b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "66960f5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_66960f5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/66960f5_setUp_1.js");
            // line 8
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
        // line 10
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dff4dbb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dff4dbb_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/dff4dbb_front_page_1.js");
            // line 11
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
        // line 13
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1f81795_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1f81795_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1f81795_app_search_central_1.js");
            // line 14
            echo "    ";
            // line 15
            echo "    ";
        } else {
            // asset "1f81795"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1f81795") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/1f81795.js");
            // line 14
            echo "    ";
            // line 15
            echo "    ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
    ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc7accb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc7accb_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fc7accb_front_result_equipement_access_1.js");
            // line 18
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
        // line 20
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "454a49e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_454a49e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/454a49e_front_result_doc_1.js");
            // line 21
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
        // line 23
        echo " 
    ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af4783f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_af4783f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/af4783f_front_result_equipement_1.js");
            // line 25
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
        // line 27
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5be7e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a5be7e7_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a5be7e7_front_result_central_1.js");
            // line 28
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
        // line 30
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da82b2d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_da82b2d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/da82b2d_front_search_1.js");
            // line 31
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
        
        $__internal_9e9afd1b1566ca28a451589ee3843a161585abf2d80e0faf060f3108fc700b3f->leave($__internal_9e9afd1b1566ca28a451589ee3843a161585abf2d80e0faf060f3108fc700b3f_prof);

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
        return array (  244 => 31,  239 => 30,  225 => 28,  220 => 27,  206 => 25,  202 => 24,  199 => 23,  185 => 21,  180 => 20,  166 => 18,  162 => 17,  159 => 16,  155 => 15,  153 => 14,  148 => 15,  146 => 14,  141 => 13,  127 => 11,  122 => 10,  108 => 8,  103 => 7,  97 => 6,  85 => 70,  80 => 67,  74 => 64,  68 => 61,  62 => 58,  56 => 54,  54 => 53,  35 => 36,  32 => 34,  30 => 6,  23 => 2,);
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
    {% javascripts '@SIECoreBundle/Resources/public/js/setUp.js' %}
    <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
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
                {% include \"SIECentralBundle:form:result_central.html.twig\" %} 
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
