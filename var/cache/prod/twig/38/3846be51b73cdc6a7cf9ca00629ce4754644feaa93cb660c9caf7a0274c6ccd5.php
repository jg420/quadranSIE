<?php

/* SIECentralBundle:Default:apercu_central.html.twig */
class __TwigTemplate_760508b4b1ba5ad72ea7a97f4acef00702fb461189053c100e5b0a81abfc4fe0 extends Twig_Template
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
        $__internal_106e201e005002590593d283c20d14bf5299481ce2303bf60e3a48bc3eecc566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106e201e005002590593d283c20d14bf5299481ce2303bf60e3a48bc3eecc566->enter($__internal_106e201e005002590593d283c20d14bf5299481ce2303bf60e3a48bc3eecc566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECentralBundle:Default:apercu_central.html.twig"));

        // line 2
        echo "
<div id=\"apercu\" class=\"panel panel-default\"  >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 id=\"lbl_titre_partie_apercu\" class=\"panel-title\">Apercu </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > <!-- panel body -->
        <img id=\"img_apercu_centrale\" src=\" \" class=\"img-rounded\" >
        <input id=\"id_apercu\" type=\"hidden\">
        <button  id=\"btn_ajout_schema_central\" class=\"btn_ajout\"   style=\" float: right;\">
            ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 14
            echo "            <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
            ";
        } else {
            // asset "a935514"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514.jpeg");
            echo "            <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "        </button>
        <div id=\"titre_nouvelle_apercu\" style=\"visibility: hidden\">nouvel apercu</div>
        <form id=\"form_doc\" method='POST'>  
            <input  type=\"text\"   id=\"lib_apercu\" style=\"visibility: hidden\"  >  
            <input id=\"file_apercu\" style=\"visibility: hidden\" type=\"file\"  >
        
        </form>
                <button  id=\"btn_valid_ajout_apercu\" class=\"btn_valider\"    style=\"visibility: hidden\">
                ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 25
            echo "                <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                ";
        } else {
            // asset "aef7376"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376.jpeg");
            echo "                <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "            </button> 
            <button  id=\"btn_annule_ajout_apercu\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                ";
        // line 29
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 30
            echo "
                <img  class=\"img-background-button\"    src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee.jpeg");
            // line 30
            echo "
                <img  class=\"img-background-button\"    src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                ";
        }
        unset($context["asset_url"]);
        // line 33
        echo "            </button> 
                

    </div>





</div>
<div id=\"nav_apercu\" class=\"panel-footer clearfix\"> 



    <button   id=\"btn_next_apercu_equipement\" class=\"btn_suivant\" style=\"float: right;\"  >
        ";
        // line 48
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "34537ea_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_34537ea_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/34537ea_droite_1.jpeg");
            // line 49
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        } else {
            // asset "34537ea"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_34537ea") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/34537ea.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 51
        echo "    </button>
    <b id=\"lbl_titre_apercu\">Nom de l'apercu </b>
    <button   id=\"btn_last_apercu_equipement\" class=\"btn_precedent\" style=\"float: left;\"  >
        ";
        // line 54
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "67d988a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_67d988a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/67d988a_btn_gauche_1.jpeg");
            // line 55
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        } else {
            // asset "67d988a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_67d988a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/67d988a.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 57
        echo "    </button>
</div>";
        
        $__internal_106e201e005002590593d283c20d14bf5299481ce2303bf60e3a48bc3eecc566->leave($__internal_106e201e005002590593d283c20d14bf5299481ce2303bf60e3a48bc3eecc566_prof);

    }

    public function getTemplateName()
    {
        return "SIECentralBundle:Default:apercu_central.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  151 => 55,  147 => 54,  142 => 51,  128 => 49,  124 => 48,  107 => 33,  101 => 31,  98 => 30,  91 => 31,  88 => 30,  84 => 29,  80 => 27,  66 => 25,  62 => 24,  52 => 16,  38 => 14,  34 => 12,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIECentralBundle/Resources/views/form/apercu_acces.html.twig #}

<div id=\"apercu\" class=\"panel panel-default\"  >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 id=\"lbl_titre_partie_apercu\" class=\"panel-title\">Apercu </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > <!-- panel body -->
        <img id=\"img_apercu_centrale\" src=\" \" class=\"img-rounded\" >
        <input id=\"id_apercu\" type=\"hidden\">
        <button  id=\"btn_ajout_schema_central\" class=\"btn_ajout\"   style=\" float: right;\">
            {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'
            %}
            <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
            {% endimage %}
        </button>
        <div id=\"titre_nouvelle_apercu\" style=\"visibility: hidden\">nouvel apercu</div>
        <form id=\"form_doc\" method='POST'>  
            <input  type=\"text\"   id=\"lib_apercu\" style=\"visibility: hidden\"  >  
            <input id=\"file_apercu\" style=\"visibility: hidden\" type=\"file\"  >
        
        </form>
                <button  id=\"btn_valid_ajout_apercu\" class=\"btn_valider\"    style=\"visibility: hidden\">
                {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'%}
                <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                {% endimage %}
            </button> 
            <button  id=\"btn_annule_ajout_apercu\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'%}

                <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                {% endimage %}
            </button> 
                

    </div>





</div>
<div id=\"nav_apercu\" class=\"panel-footer clearfix\"> 



    <button   id=\"btn_next_apercu_equipement\" class=\"btn_suivant\" style=\"float: right;\"  >
        {% image '@SIECoreBundle/Resources/public/images/droite.jpeg'%}
        <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
        {% endimage %}
    </button>
    <b id=\"lbl_titre_apercu\">Nom de l'apercu </b>
    <button   id=\"btn_last_apercu_equipement\" class=\"btn_precedent\" style=\"float: left;\"  >
        {% image '@SIECoreBundle/Resources/public/images/btn_gauche.jpeg'%}
        <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
        {% endimage %}
    </button>
</div>", "SIECentralBundle:Default:apercu_central.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CentralBundle/Resources/views/Default/apercu_central.html.twig");
    }
}
