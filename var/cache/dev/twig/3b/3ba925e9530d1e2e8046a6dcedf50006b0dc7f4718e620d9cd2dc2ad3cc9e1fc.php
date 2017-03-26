<?php

/* SIEEquipementBundle:Default:apercu_equipement.html.twig */
class __TwigTemplate_b2b7094b872eb2c6c3e94e832360d30627ae6df760248c216e26865c6c0ebab0 extends Twig_Template
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
        $__internal_0b16ef31f2954e682dfeb8e0d0eefbc4f7ba9b373158910c893c782462cb0421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b16ef31f2954e682dfeb8e0d0eefbc4f7ba9b373158910c893c782462cb0421->enter($__internal_0b16ef31f2954e682dfeb8e0d0eefbc4f7ba9b373158910c893c782462cb0421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEEquipementBundle:Default:apercu_equipement.html.twig"));

        // line 2
        echo "<div class=\"panel panel-default\" id=\"apercu\" >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\" id=\"n_apercu\"> Apercu </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > 
        <button   id=\"btn_ajout_apercu_equipement\" class=\"btn_ajout\" style=\" float: right;\"  >
            ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 10
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
        // line 12
        echo "        </button>
 

             
            <div id=\"titre_nouvelle_apercu\" style=\"visibility: hidden\">nouvel apercu</div>
            <input  type=\"text\" disabled=\"true\" id=\"lib_apercu\" style=\"visibility: hidden\"  >  
             <button id=\"btn_parcourir_apercu\" style=\"visibility: hidden\"  >Parcourir</button>
                <button  id=\"btn_valid_ajout_apercu\" class=\"btn_valider\"    style=\"visibility: hidden\">
                    ";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 21
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        } else {
            // asset "aef7376"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376.jpeg");
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "                </button> 
                <button  id=\"btn_annule_ajout_apercu\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                    ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 26
            echo "
                    <img  class=\"img-background-button\"    src=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee.jpeg");
            // line 26
            echo "
                    <img  class=\"img-background-button\"    src=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "                </button> 
 
        <div class=\"panel-body\" id=\"preview_file\">
            PREVIEW
        </div>


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
        // line 51
        echo "        </button>
       
        <button   id=\"btn_last_apercu_equipement\" class=\"btn_precedent\" style=\"float: left;\"  >
            ";
        // line 54
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "67d988a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_67d988a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/67d988a_btn_gauche_1.jpeg");
            // line 55
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
        // line 57
        echo "        </button>
    </div>";
        
        $__internal_0b16ef31f2954e682dfeb8e0d0eefbc4f7ba9b373158910c893c782462cb0421->leave($__internal_0b16ef31f2954e682dfeb8e0d0eefbc4f7ba9b373158910c893c782462cb0421_prof);

    }

    public function getTemplateName()
    {
        return "SIEEquipementBundle:Default:apercu_equipement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 57,  152 => 55,  148 => 54,  143 => 51,  129 => 49,  125 => 48,  104 => 29,  98 => 27,  95 => 26,  88 => 27,  85 => 26,  81 => 25,  77 => 23,  63 => 21,  59 => 20,  49 => 12,  35 => 10,  31 => 9,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIEAccessBundle/Resources/views/form/apercu_equipement.html.twig #}
<div class=\"panel panel-default\" id=\"apercu\" >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\" id=\"n_apercu\"> Apercu </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > 
        <button   id=\"btn_ajout_apercu_equipement\" class=\"btn_ajout\" style=\" float: right;\"  >
            {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'%}
            <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
            {% endimage %}
        </button>
 

             
            <div id=\"titre_nouvelle_apercu\" style=\"visibility: hidden\">nouvel apercu</div>
            <input  type=\"text\" disabled=\"true\" id=\"lib_apercu\" style=\"visibility: hidden\"  >  
             <button id=\"btn_parcourir_apercu\" style=\"visibility: hidden\"  >Parcourir</button>
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
 
        <div class=\"panel-body\" id=\"preview_file\">
            PREVIEW
        </div>


    </div>



</div>


    <div id=\"nav_apercu\" class=\"panel-footer clearfix\"> 
          
         
       
        <button   id=\"btn_next_apercu_equipement\" class=\"btn_suivant\" style=\"float: right;\"  >
            {% image '@SIECoreBundle/Resources/public/images/droite.jpeg'%}
            <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
            {% endimage %}
        </button>
       
        <button   id=\"btn_last_apercu_equipement\" class=\"btn_precedent\" style=\"float: left;\"  >
            {% image '@SIECoreBundle/Resources/public/images/btn_gauche.jpeg'%}
            <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
            {% endimage %}
        </button>
    </div>", "SIEEquipementBundle:Default:apercu_equipement.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\EquipementBundle/Resources/views/Default/apercu_equipement.html.twig");
    }
}
