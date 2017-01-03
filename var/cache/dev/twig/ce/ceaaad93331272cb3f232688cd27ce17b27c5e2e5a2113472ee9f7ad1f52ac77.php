<?php

/* SIEEquipementBundle:Default:index.html.twig */
class __TwigTemplate_ee279b862618b497bd1f69ecfbcd67d5db0e77eed0a2b8bdb65c3e984786e3a5 extends Twig_Template
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
        $__internal_8a65973dc4f64d1fa65bd84c674a568bb6a9018de3d837b328930968fc237d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a65973dc4f64d1fa65bd84c674a568bb6a9018de3d837b328930968fc237d61->enter($__internal_8a65973dc4f64d1fa65bd84c674a568bb6a9018de3d837b328930968fc237d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEEquipementBundle:Default:index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("SIECoreBundle:Default:head.html.twig", "SIEEquipementBundle:Default:index.html.twig", 2)->display($context);
        echo " 
";
        // line 3
        $this->loadTemplate("SIEEquipementBundle:Default:search_equipement.html.twig", "SIEEquipementBundle:Default:index.html.twig", 3)->display($context);
        echo " 
   ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e4453c8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e4453c8_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e4453c8_front_equipement_1.js");
            // line 5
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
        // line 7
        echo "<title id=\"titre\">EQUIPEMENTS</title>
<body>

<table id=\"table_equipement\">
    <th id=\"KeyParam1\">Nom</th>
    <th id=\"KeyParam2\">Centrale</th>
    <th id=\"KeyParam3\">Constructeur</th>
    <th id=\"KeyParam4\">Login</th>
    <th id=\"KeyParam5\">Mot de passe</th>
    <th id=\"KeyParam6\">Lien</th>
        ";
        // line 17
        $context["nb"] = ((isset($context["nbEquipement"]) ? $context["nbEquipement"] : $this->getContext($context, "nbEquipement")) + 0);
        echo " ";
        // line 18
        echo "    <br>
    <br>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["nbEquipement"]) ? $context["nbEquipement"] : $this->getContext($context, "nbEquipement"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "        <tr>
            <td id=\"lib_equipement";
            // line 22
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"><input type=\"text\"/></td>
            <td id=\"lib_centrale";
            // line 23
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"><input type=\"text\"/></td>
            <td id=\"lib_constructeur";
            // line 24
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"><input type=\"text\"/></td>
            <td id=\"login";
            // line 25
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"><input type=\"text\"/></td>
            <td id=\"mdp";
            // line 26
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"><input type=\"text\"/></td>
            <td id=\"lien";
            // line 27
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"><input type=\"text\"/></td>
            <td id=\"btnModif";
            // line 28
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"> 
                <button id=\"btn_modif_equipement\" class=\"btn_modifier\"  ng-model=\"btn_modif_central\" >
                    ";
            // line 30
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "cae2646_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
                // line 32
                echo "                    <img  class=\"img-background-button\"    src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\"  alt=\"Modif\"/>
                    ";
            } else {
                // asset "cae2646"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646.jpeg");
                echo "                    <img  class=\"img-background-button\"    src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\"  alt=\"Modif\"/>
                    ";
            }
            unset($context["asset_url"]);
            // line 34
            echo "                </button>
            </td>
            <td id=\"btnValid";
            // line 36
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"> 
                <button id=\"btn_valid_modif_equipement\"  class=\"btn_valider\"   value=\"valider\" style=\"visibility: hidden\">
                    ";
            // line 38
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "aef7376_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
                // line 40
                echo "                    <img class=\"img-background-button\"   src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\"  alt=\"valider\"/>
                    ";
            } else {
                // asset "aef7376"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376.jpeg");
                echo "                    <img class=\"img-background-button\"   src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\"  alt=\"valider\"/>
                    ";
            }
            unset($context["asset_url"]);
            // line 42
            echo "                </button>
            </td>
            <td id=\"btnAnnuler";
            // line 44
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"> 
                <button ng-model=\"btn_annuler_modif_equipement\" id=\"btn_annuler_equipement\" class=\"btn_annuler\" style=\"visibility: hidden\">
                    ";
            // line 46
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "02f85ee_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
                // line 48
                echo "                    <img class=\"img-background-button\"   src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\"  alt=\"annuler\"/>
                    ";
            } else {
                // asset "02f85ee"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee.jpeg");
                echo "                    <img class=\"img-background-button\"   src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\"  alt=\"annuler\"/>
                    ";
            }
            unset($context["asset_url"]);
            // line 49
            echo "    
                </button>
            </td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    
</table>
</body>
</html>";
        
        $__internal_8a65973dc4f64d1fa65bd84c674a568bb6a9018de3d837b328930968fc237d61->leave($__internal_8a65973dc4f64d1fa65bd84c674a568bb6a9018de3d837b328930968fc237d61_prof);

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
        return array (  189 => 54,  178 => 49,  164 => 48,  160 => 46,  155 => 44,  151 => 42,  137 => 40,  133 => 38,  128 => 36,  124 => 34,  110 => 32,  106 => 30,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  74 => 21,  70 => 20,  66 => 18,  63 => 17,  51 => 7,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% include \"SIECoreBundle:Default:head.html.twig\" %} 
{% include \"SIEEquipementBundle:Default:search_equipement.html.twig\" %} 
   {% javascripts '@SIEEquipementBundle/Resources/public/js/front_equipement.js' %}
    <script src=\"{{ asset_url }}\"></script>          
    {% endjavascripts %}
<title id=\"titre\">EQUIPEMENTS</title>
<body>

<table id=\"table_equipement\">
    <th id=\"KeyParam1\">Nom</th>
    <th id=\"KeyParam2\">Centrale</th>
    <th id=\"KeyParam3\">Constructeur</th>
    <th id=\"KeyParam4\">Login</th>
    <th id=\"KeyParam5\">Mot de passe</th>
    <th id=\"KeyParam6\">Lien</th>
        {% set nb = nbEquipement + 0 %} {#nbEquipement est envoyé au template via le controlleur #}
    <br>
    <br>
    {% for i in range(0,nbEquipement) %}
        <tr>
            <td id=\"lib_equipement{{i}}\"><input type=\"text\"/></td>
            <td id=\"lib_centrale{{i}}\"><input type=\"text\"/></td>
            <td id=\"lib_constructeur{{i}}\"><input type=\"text\"/></td>
            <td id=\"login{{i}}\"><input type=\"text\"/></td>
            <td id=\"mdp{{i}}\"><input type=\"text\"/></td>
            <td id=\"lien{{i}}\"><input type=\"text\"/></td>
            <td id=\"btnModif{{i}}\"> 
                <button id=\"btn_modif_equipement\" class=\"btn_modifier\"  ng-model=\"btn_modif_central\" >
                    {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'
                    %}
                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                    {% endimage %}
                </button>
            </td>
            <td id=\"btnValid{{i}}\"> 
                <button id=\"btn_valid_modif_equipement\"  class=\"btn_valider\"   value=\"valider\" style=\"visibility: hidden\">
                    {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'
                    %}
                    <img class=\"img-background-button\"   src=\"{{ asset_url }}\"  alt=\"valider\"/>
                    {% endimage %}
                </button>
            </td>
            <td id=\"btnAnnuler{{i}}\"> 
                <button ng-model=\"btn_annuler_modif_equipement\" id=\"btn_annuler_equipement\" class=\"btn_annuler\" style=\"visibility: hidden\">
                    {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'
                    %}
                    <img class=\"img-background-button\"   src=\"{{ asset_url }}\"  alt=\"annuler\"/>
                    {% endimage %}    
                </button>
            </td>

        </tr>
    {% endfor%}    
</table>
</body>
</html>", "SIEEquipementBundle:Default:index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\EquipementBundle/Resources/views/Default/index.html.twig");
    }
}
