<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8258bb0eb0973e70a4112aba32a658ee7c9540fff8a802fb7a1ea450305b2676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e1f3889ff4d14b8082b96726443a8d6ec04b437ee78332127061bbaf6331b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1f3889ff4d14b8082b96726443a8d6ec04b437ee78332127061bbaf6331b15->enter($__internal_6e1f3889ff4d14b8082b96726443a8d6ec04b437ee78332127061bbaf6331b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e1f3889ff4d14b8082b96726443a8d6ec04b437ee78332127061bbaf6331b15->leave($__internal_6e1f3889ff4d14b8082b96726443a8d6ec04b437ee78332127061bbaf6331b15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7731d199de5f59fc7cb3dbfead412038d4d6926bc348221b13029e8893b7aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7731d199de5f59fc7cb3dbfead412038d4d6926bc348221b13029e8893b7aeb->enter($__internal_e7731d199de5f59fc7cb3dbfead412038d4d6926bc348221b13029e8893b7aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e7731d199de5f59fc7cb3dbfead412038d4d6926bc348221b13029e8893b7aeb->leave($__internal_e7731d199de5f59fc7cb3dbfead412038d4d6926bc348221b13029e8893b7aeb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
