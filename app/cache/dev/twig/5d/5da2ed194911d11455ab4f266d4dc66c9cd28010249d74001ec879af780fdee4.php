<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a46c6f612acb2a1a906571062e3e8104a88e4a76fe5653cf547ece9f0111ef87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1033cbdb4cb927ca0c45168af3c69c7acacd15ead5467c8a738bec509f538a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1033cbdb4cb927ca0c45168af3c69c7acacd15ead5467c8a738bec509f538a7f->enter($__internal_1033cbdb4cb927ca0c45168af3c69c7acacd15ead5467c8a738bec509f538a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1033cbdb4cb927ca0c45168af3c69c7acacd15ead5467c8a738bec509f538a7f->leave($__internal_1033cbdb4cb927ca0c45168af3c69c7acacd15ead5467c8a738bec509f538a7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c4d50feda178c0b3476678a2037ef846d90a5e476c5a2a606d7b8dd3ff701c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4d50feda178c0b3476678a2037ef846d90a5e476c5a2a606d7b8dd3ff701c5->enter($__internal_3c4d50feda178c0b3476678a2037ef846d90a5e476c5a2a606d7b8dd3ff701c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3c4d50feda178c0b3476678a2037ef846d90a5e476c5a2a606d7b8dd3ff701c5->leave($__internal_3c4d50feda178c0b3476678a2037ef846d90a5e476c5a2a606d7b8dd3ff701c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
