<?php

/* SIECentralBundle:Default:index.html.twig */
class __TwigTemplate_4bccb73036fb39fbd09b34a4eb29cb8696cc180452ef6b5a518a8364ca207baa extends Twig_Template
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
        $__internal_79eb0b9229f89d24d91b5cd16ecddc9240e4725328a9f34fa4fce139a9a9ca71 = $this->env->getExtension("native_profiler");
        $__internal_79eb0b9229f89d24d91b5cd16ecddc9240e4725328a9f34fa4fce139a9a9ca71->enter($__internal_79eb0b9229f89d24d91b5cd16ecddc9240e4725328a9f34fa4fce139a9a9ca71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECentralBundle:Default:index.html.twig"));

        // line 2
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" ng-app=\"app_ref_sie\">
    <head>
       
        ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "81f969e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81f969e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/81f969e_quadranStyle_1.css");
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "81f969e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81f969e") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/81f969e.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2db1e5c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2db1e5c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2db1e5c_jquery-ui_1.css");
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "2db1e5c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2db1e5c") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2db1e5c.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        
        <link href=\"http://127.0.0.1/debug/sie-/web/logo.ico\" rel=\"icon\" type=\"image/x-icon\" />
        
        
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo " 
       <title id=\"titre\">REFERENTIEL</title>
        ";
        // line 60
        echo "    </head>
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

        <!--<div id='bloc_select_critere'>
              <b class=\"titreSection\">Selection</b>
            <table class='tableSelection' border='1'>
              
            
              <tr>
                <th>1) Direction Regionales</th>
                <th>2) Nom de la centrale</th>
                <th>3) Type de centrale</th>
                  
                  
              </tr>
              <tr><td>
                    <br/>   
                    
                    <br/><input id=\"check_allDr\" type=\"checkbox\"/>Toutes Directions
                    <br/>
                    <br/><input class=\"dr\" value='1' type=\"checkbox\"/>DR NORD
                    <br/><input class=\"dr\" value='2' type=\"checkbox\"/>DR SUD
                    <br/><input class=\"dr\" value='3' type=\"checkbox\"/>DR COOM
                </td>
                <td>
                    <br/>   
                        <br/>
                    <select id=\"listCentral\">                        
                         <option>Choisissez une centrale</option>
                    </select>
                </td>
                <td>
                    <br/>   
                    <br/>
                    <select id=\"input_type_central\">
                        <option>Choisissez un type</option>
                    </select>           
                    <br/>
                </td>
             </tr>
            </table>
        </div>
        -->
        <table >
            <tr>
                <td>
                    ";
        // line 117
        $this->loadTemplate("SIECoreBundle:Default:search.html.twig", "SIECentralBundle:Default:index.html.twig", 117)->display($context);
        // line 118
        echo "                </td>
            </tr
            <tr>
                <td>
                    ";
        // line 122
        $this->loadTemplate("SIECentralBundle:form:result.html.twig", "SIECentralBundle:Default:index.html.twig", 122)->display($context);
        echo " 
                </td>
                <td>
                    ";
        // line 125
        $this->loadTemplate("SIEDocumentBundle:Default:result_document.html.twig", "SIECentralBundle:Default:index.html.twig", 125)->display($context);
        echo " 
                </td>
                <td>
                    ";
        // line 128
        $this->loadTemplate("SIEEquipementBundle:Default:result_equipement.html.twig", "SIECentralBundle:Default:index.html.twig", 128)->display($context);
        echo " 
                </td>
                <td>
                    ";
        // line 131
        $this->loadTemplate("SIEAccessBundle:Default:result_access.html.twig", "SIECentralBundle:Default:index.html.twig", 131)->display($context);
        echo " 
                </td>
                ";
        // line 134
        echo "            </tr>
        </table>      
                      
    </body>
</html>
";
        
        $__internal_79eb0b9229f89d24d91b5cd16ecddc9240e4725328a9f34fa4fce139a9a9ca71->leave($__internal_79eb0b9229f89d24d91b5cd16ecddc9240e4725328a9f34fa4fce139a9a9ca71_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01e31b9dcd5c505bdf43a1fc40a834e87bb1b192a90300fb1987b4fb6d2b465c = $this->env->getExtension("native_profiler");
        $__internal_01e31b9dcd5c505bdf43a1fc40a834e87bb1b192a90300fb1987b4fb6d2b465c->enter($__internal_01e31b9dcd5c505bdf43a1fc40a834e87bb1b192a90300fb1987b4fb6d2b465c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d4574a7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4574a7_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d4574a7_angular_1.js");
            // line 20
            echo "                ";
            // line 21
            echo "            ";
        } else {
            // asset "d4574a7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4574a7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d4574a7.js");
            // line 20
            echo "                ";
            // line 21
            echo "            ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "             ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a750637_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a750637_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a750637_jquery_1.js");
            // line 23
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "a750637"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a750637") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a750637.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2994d72_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2994d72_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2994d72_jquery-ui_1.js");
            // line 26
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "2994d72"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2994d72") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2994d72.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 28
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "584d851_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_584d851_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/584d851_app_1.js");
            // line 29
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "584d851"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_584d851") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/584d851.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1f81795_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f81795_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1f81795_app_search_central_1.js");
            // line 32
            echo "                ";
            // line 33
            echo "            ";
        } else {
            // asset "1f81795"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f81795") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1f81795.js");
            // line 32
            echo "                ";
            // line 33
            echo "            ";
        }
        unset($context["asset_url"]);
        // line 34
        echo "           
            
            ";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dff4dbb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dff4dbb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/dff4dbb_front_page_1.js");
            // line 37
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "dff4dbb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dff4dbb") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/dff4dbb.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 39
        echo "              
              ";
        // line 40
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc7accb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc7accb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fc7accb_front_result_equipement_access_1.js");
            // line 41
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "fc7accb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc7accb") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fc7accb.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 43
        echo "              ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "454a49e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_454a49e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/454a49e_front_result_doc_1.js");
            // line 44
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "454a49e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_454a49e") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/454a49e.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 46
        echo "              ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af4783f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af4783f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/af4783f_front_result_equipement_1.js");
            // line 47
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "af4783f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af4783f") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/af4783f.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 49
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5be7e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5be7e7_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a5be7e7_front_result_central_1.js");
            // line 50
            echo "               <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "a5be7e7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5be7e7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a5be7e7.js");
            echo "               <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 52
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da82b2d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da82b2d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/da82b2d_front_search_1.js");
            // line 53
            echo "                  <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 
            ";
        } else {
            // asset "da82b2d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da82b2d") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/da82b2d.js");
            echo "                  <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 
            ";
        }
        unset($context["asset_url"]);
        // line 55
        echo "          
     
        ";
        
        $__internal_01e31b9dcd5c505bdf43a1fc40a834e87bb1b192a90300fb1987b4fb6d2b465c->leave($__internal_01e31b9dcd5c505bdf43a1fc40a834e87bb1b192a90300fb1987b4fb6d2b465c_prof);

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
        return array (  400 => 55,  386 => 53,  381 => 52,  367 => 50,  362 => 49,  348 => 47,  343 => 46,  329 => 44,  324 => 43,  310 => 41,  306 => 40,  303 => 39,  289 => 37,  285 => 36,  281 => 34,  277 => 33,  275 => 32,  270 => 33,  268 => 32,  263 => 31,  249 => 29,  244 => 28,  230 => 26,  225 => 25,  211 => 23,  206 => 22,  202 => 21,  200 => 20,  195 => 21,  193 => 20,  188 => 19,  182 => 18,  170 => 134,  165 => 131,  159 => 128,  153 => 125,  147 => 122,  141 => 118,  139 => 117,  80 => 60,  76 => 57,  74 => 18,  68 => 14,  54 => 12,  49 => 11,  35 => 9,  31 => 8,  23 => 2,);
    }
}
/* {# SIECentralBundle/Resources/views/index.html.twig #}*/
/* <?xml version="1.0" encoding="UTF-8"?>*/
/* */
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml" ng-app="app_ref_sie">*/
/*     <head>*/
/*        */
/*         {% stylesheets '@SIECoreBundle/Resources/public/css/quadranStyle.css' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/*         {% stylesheets '@SIECoreBundle/Resources/public/css/jquery-ui.css' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/*         */
/*         <link href="http://127.0.0.1/debug/sie-/web/logo.ico" rel="icon" type="image/x-icon" />*/
/*         */
/*         */
/*         {% block javascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/angular.js' %}*/
/*                 {#<script src="{{ asset_url }}"></script#}*/
/*             {% endjavascripts %}*/
/*              {% javascripts '@SIECoreBundle/Resources/public/js/jquery.js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/jquery-ui.js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/app.js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECentralBundle/Resources/public/js/app_search_central.js' %}*/
/*                 {#<script src="{{ asset_url }}"></script>#}*/
/*             {% endjavascripts %}*/
/*            */
/*             */
/*             {% javascripts '@SIECentralBundle/Resources/public/js/front_page.js' %}*/
/*               <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*               */
/*               {% javascripts '@SIEAccessBundle/Resources/public/js/front_result_equipement_access.js' %}*/
/*                 <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*               {% javascripts '@SIEDocumentBundle/Resources/public/js/front_result_doc.js' %}*/
/*                 <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*               {% javascripts '@SIEEquipementBundle/Resources/public/js/front_result_equipement.js' %}*/
/*                 <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECentralBundle/Resources/public/js/front_result_central.js' %}*/
/*                <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/front_search.js' %}*/
/*                   <script src="{{ asset_url }}"></script> */
/*             {% endjavascripts %}*/
/*           */
/*      */
/*         {% endblock %} */
/*        <title id="titre">REFERENTIEL</title>*/
/*         {# <meta name="viewport" content="width=device-width, initial-scale=1.0"/>#}*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <nav>*/
/*                 <ul>*/
/*                     <!-- A CHARGER DEPUIS LA VUE PERE-*/
/*                     <li><a href="page_direction_regionales.xhtml">Directions Regionales</a></li>*/
/*                     <li><a href="page_central.xhtml">Centrales </a></li>*/
/*                     <li><a href="page_equipement.xhtml">Equipements</a></li>-->*/
/* */
/*                 </ul>*/
/*             </nav>*/
/*         </header>*/
/* */
/*         <!--<div id='bloc_select_critere'>*/
/*               <b class="titreSection">Selection</b>*/
/*             <table class='tableSelection' border='1'>*/
/*               */
/*             */
/*               <tr>*/
/*                 <th>1) Direction Regionales</th>*/
/*                 <th>2) Nom de la centrale</th>*/
/*                 <th>3) Type de centrale</th>*/
/*                   */
/*                   */
/*               </tr>*/
/*               <tr><td>*/
/*                     <br/>   */
/*                     */
/*                     <br/><input id="check_allDr" type="checkbox"/>Toutes Directions*/
/*                     <br/>*/
/*                     <br/><input class="dr" value='1' type="checkbox"/>DR NORD*/
/*                     <br/><input class="dr" value='2' type="checkbox"/>DR SUD*/
/*                     <br/><input class="dr" value='3' type="checkbox"/>DR COOM*/
/*                 </td>*/
/*                 <td>*/
/*                     <br/>   */
/*                         <br/>*/
/*                     <select id="listCentral">                        */
/*                          <option>Choisissez une centrale</option>*/
/*                     </select>*/
/*                 </td>*/
/*                 <td>*/
/*                     <br/>   */
/*                     <br/>*/
/*                     <select id="input_type_central">*/
/*                         <option>Choisissez un type</option>*/
/*                     </select>           */
/*                     <br/>*/
/*                 </td>*/
/*              </tr>*/
/*             </table>*/
/*         </div>*/
/*         -->*/
/*         <table >*/
/*             <tr>*/
/*                 <td>*/
/*                     {% include "SIECoreBundle:Default:search.html.twig" %}*/
/*                 </td>*/
/*             </tr*/
/*             <tr>*/
/*                 <td>*/
/*                     {% include "SIECentralBundle:form:result.html.twig" %} */
/*                 </td>*/
/*                 <td>*/
/*                     {% include "SIEDocumentBundle:Default:result_document.html.twig" %} */
/*                 </td>*/
/*                 <td>*/
/*                     {% include "SIEEquipementBundle:Default:result_equipement.html.twig" %} */
/*                 </td>*/
/*                 <td>*/
/*                     {% include "SIEAccessBundle:Default:result_access.html.twig" %} */
/*                 </td>*/
/*                 {#<a id="lienPDF" href="../form/formCentral.php?pdf=1">Referenciel PDF</a>#}*/
/*             </tr>*/
/*         </table>      */
/*                       */
/*     </body>*/
/* </html>*/
/* */
