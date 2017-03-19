<?php

/* @SIECore/Default/index.html.twig */
class __TwigTemplate_bc7b18a9097c32cdeeac7e83ff1e5e3582402de4862419abddbb389e9def0ecd extends Twig_Template
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
        $__internal_4dd810ad5fb76b3b3809b66ff6e545ce8b5628ccbdca44be3277a76ef0ad7fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd810ad5fb76b3b3809b66ff6e545ce8b5628ccbdca44be3277a76ef0ad7fea->enter($__internal_4dd810ad5fb76b3b3809b66ff6e545ce8b5628ccbdca44be3277a76ef0ad7fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIECore/Default/index.html.twig"));

        // line 2
        $this->loadTemplate("SIECoreBundle:Default:head.html.twig", "@SIECore/Default/index.html.twig", 2)->display($context);
        echo " 

<body>
   

     <div class=\"container\">

      <div class=\"starter-template\">
    <table class=\"table\">
        <tr>
            <td>
                ";
        // line 13
        $this->loadTemplate("SIECoreBundle:Default:search.html.twig", "@SIECore/Default/index.html.twig", 13)->display($context);
        // line 14
        echo "            </td>
        </tr
        <tr>
            <td>
                ";
        // line 18
        $this->loadTemplate("SIECentralBundle:form:result_central.html.twig", "@SIECore/Default/index.html.twig", 18)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 21
        $this->loadTemplate("SIEDocumentBundle:Default:result_document.html.twig", "@SIECore/Default/index.html.twig", 21)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 24
        $this->loadTemplate("SIEEquipementBundle:Default:result_equipement.html.twig", "@SIECore/Default/index.html.twig", 24)->display($context);
        echo " 
            </td>
            <td>
                ";
        // line 27
        $this->loadTemplate("SIEAccessBundle:Default:result_access.html.twig", "@SIECore/Default/index.html.twig", 27)->display($context);
        echo " 
            </td>
            ";
        // line 30
        echo "        </tr>
    </table>      
       
    </div>
</body>
</html>
";
        
        $__internal_4dd810ad5fb76b3b3809b66ff6e545ce8b5628ccbdca44be3277a76ef0ad7fea->leave($__internal_4dd810ad5fb76b3b3809b66ff6e545ce8b5628ccbdca44be3277a76ef0ad7fea_prof);

    }

    public function getTemplateName()
    {
        return "@SIECore/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 30,  62 => 27,  56 => 24,  50 => 21,  44 => 18,  38 => 14,  36 => 13,  22 => 2,);
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

<body>
   

     <div class=\"container\">

      <div class=\"starter-template\">
    <table class=\"table\">
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
       
    </div>
</body>
</html>
", "@SIECore/Default/index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CoreBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
