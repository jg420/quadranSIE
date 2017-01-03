<?php

/* @SIECentral/Default/index.html.twig */
class __TwigTemplate_25227d6be9c6fbf277af57c84aff2dadeee79f4faeb1d64a9fb17bbece62e828 extends Twig_Template
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
        $__internal_61f83289b83f101cc34d9a78ea383be510a8e60f58c515f29042bb1fd22c3afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f83289b83f101cc34d9a78ea383be510a8e60f58c515f29042bb1fd22c3afa->enter($__internal_61f83289b83f101cc34d9a78ea383be510a8e60f58c515f29042bb1fd22c3afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIECentral/Default/index.html.twig"));

        // line 2
        $this->loadTemplate("SIECoreBundle:Default:head.html.twig", "@SIECentral/Default/index.html.twig", 2)->display($context);
        echo " 



";
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "<title id=\"titre\">REFERENTIEL</title>
";
        // line 32
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
        // line 49
        $this->loadTemplate("SIECoreBundle:Default:search.html.twig", "@SIECentral/Default/index.html.twig", 49)->display($context);
        // line 50
        echo "            </td>
        </tr
        <tr>
            <td>
                ";
        // line 54
        $this->loadTemplate("SIECentralBundle:form:result.html.twig", "@SIECentral/Default/index.html.twig", 54)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 57
        $this->loadTemplate("SIEDocumentBundle:Default:result_document.html.twig", "@SIECentral/Default/index.html.twig", 57)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 60
        $this->loadTemplate("SIEEquipementBundle:Default:result_equipement.html.twig", "@SIECentral/Default/index.html.twig", 60)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 63
        $this->loadTemplate("SIEAccessBundle:Default:result_access.html.twig", "@SIECentral/Default/index.html.twig", 63)->display($context);
        echo " 
            </td>
            ";
        // line 66
        echo "        </tr>
    </table>      

</body>
</html>
";
        
        $__internal_61f83289b83f101cc34d9a78ea383be510a8e60f58c515f29042bb1fd22c3afa->leave($__internal_61f83289b83f101cc34d9a78ea383be510a8e60f58c515f29042bb1fd22c3afa_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60a5ac3ac9fd06891d420179f6dd106144ad869408efbf82e40c25a76aa1ba6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a5ac3ac9fd06891d420179f6dd106144ad869408efbf82e40c25a76aa1ba6a->enter($__internal_60a5ac3ac9fd06891d420179f6dd106144ad869408efbf82e40c25a76aa1ba6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af4783f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_af4783f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/af4783f_front_result_equipement_1.js");
            // line 21
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
        // line 23
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5be7e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a5be7e7_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a5be7e7_front_result_central_1.js");
            // line 24
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
        // line 26
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da82b2d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_da82b2d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/da82b2d_front_search_1.js");
            // line 27
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
        
        $__internal_60a5ac3ac9fd06891d420179f6dd106144ad869408efbf82e40c25a76aa1ba6a->leave($__internal_60a5ac3ac9fd06891d420179f6dd106144ad869408efbf82e40c25a76aa1ba6a_prof);

    }

    public function getTemplateName()
    {
        return "@SIECentral/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 27,  218 => 26,  204 => 24,  199 => 23,  185 => 21,  180 => 20,  166 => 18,  161 => 17,  147 => 15,  143 => 14,  140 => 13,  136 => 12,  134 => 11,  129 => 12,  127 => 11,  122 => 10,  108 => 8,  103 => 7,  97 => 6,  85 => 66,  80 => 63,  74 => 60,  68 => 57,  62 => 54,  56 => 50,  54 => 49,  35 => 32,  32 => 30,  30 => 6,  23 => 2,);
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
", "@SIECentral/Default/index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CentralBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
