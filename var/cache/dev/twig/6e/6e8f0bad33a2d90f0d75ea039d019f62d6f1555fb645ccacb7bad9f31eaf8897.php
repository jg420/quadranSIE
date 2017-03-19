<?php

/* @SIECentral/Default/apercu_central.html.twig */
class __TwigTemplate_67f5dc87eeffd0b8d10e8914ce48071b110d0218a190c05068a9d15e2fdbd789 extends Twig_Template
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
        $__internal_1261f5ea8f85985185bf9cbcd0770feb1c9f14ffada575dbc1455f4420087836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1261f5ea8f85985185bf9cbcd0770feb1c9f14ffada575dbc1455f4420087836->enter($__internal_1261f5ea8f85985185bf9cbcd0770feb1c9f14ffada575dbc1455f4420087836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIECentral/Default/apercu_central.html.twig"));

        // line 2
        echo "
<div id=\"apercu\" class=\"panel panel-default\"  >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\">Schema </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > <!-- panel body -->
   <button  id=\"btn_ajout_schema_central\" class=\"btn_ajout\"   style=\" float: right;\">
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 12
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        } else {
            // asset "a935514"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "    </button>
   
    </div>





</div>
    <div id=\"nav_apercu\" class=\"panel-footer clearfix\"> 
          
         
       
        <button   id=\"btn_next_apercu_equipement\" class=\"btn_suivant\" style=\"float: right;\"  >
            ";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "34537ea_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_34537ea_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/34537ea_droite_1.jpeg");
            // line 29
            echo "            <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
            ";
        } else {
            // asset "34537ea"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_34537ea") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/34537ea.jpeg");
            echo "            <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "        </button>
        Nom de l'apercu 
        <button   id=\"btn_last_apercu_equipement\" class=\"btn_precedent\" style=\"float: left;\"  >
            ";
        // line 34
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "67d988a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_67d988a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/67d988a_btn_gauche_1.jpeg");
            // line 35
            echo "            <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
            ";
        } else {
            // asset "67d988a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_67d988a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/67d988a.jpeg");
            echo "            <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 37
        echo "        </button>
    </div>";
        
        $__internal_1261f5ea8f85985185bf9cbcd0770feb1c9f14ffada575dbc1455f4420087836->leave($__internal_1261f5ea8f85985185bf9cbcd0770feb1c9f14ffada575dbc1455f4420087836_prof);

    }

    public function getTemplateName()
    {
        return "@SIECentral/Default/apercu_central.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  93 => 35,  89 => 34,  84 => 31,  70 => 29,  66 => 28,  50 => 14,  36 => 12,  32 => 10,  22 => 2,);
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

        <h3 class=\"panel-title\">Schema </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > <!-- panel body -->
   <button  id=\"btn_ajout_schema_central\" class=\"btn_ajout\"   style=\" float: right;\">
        {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'
        %}
        <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
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
        Nom de l'apercu 
        <button   id=\"btn_last_apercu_equipement\" class=\"btn_precedent\" style=\"float: left;\"  >
            {% image '@SIECoreBundle/Resources/public/images/btn_gauche.jpeg'%}
            <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
            {% endimage %}
        </button>
    </div>", "@SIECentral/Default/apercu_central.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CentralBundle\\Resources\\views\\Default\\apercu_central.html.twig");
    }
}
