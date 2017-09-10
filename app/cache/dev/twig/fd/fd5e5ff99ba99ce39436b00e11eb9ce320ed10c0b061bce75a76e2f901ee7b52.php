<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_481aaacc1dda760c9308a218e3aa939eff7c97685c29cc4a568fc428c305590d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_3e363e43db42406f2e5838ab76bb0531f6c34b00cb78c4df5babeb45cfb53b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e363e43db42406f2e5838ab76bb0531f6c34b00cb78c4df5babeb45cfb53b44->enter($__internal_3e363e43db42406f2e5838ab76bb0531f6c34b00cb78c4df5babeb45cfb53b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e363e43db42406f2e5838ab76bb0531f6c34b00cb78c4df5babeb45cfb53b44->leave($__internal_3e363e43db42406f2e5838ab76bb0531f6c34b00cb78c4df5babeb45cfb53b44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5649142aa442191ca8ffe281aa0176d3a038b5a0c21f6ddff4500ab8f87270d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5649142aa442191ca8ffe281aa0176d3a038b5a0c21f6ddff4500ab8f87270d->enter($__internal_b5649142aa442191ca8ffe281aa0176d3a038b5a0c21f6ddff4500ab8f87270d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b5649142aa442191ca8ffe281aa0176d3a038b5a0c21f6ddff4500ab8f87270d->leave($__internal_b5649142aa442191ca8ffe281aa0176d3a038b5a0c21f6ddff4500ab8f87270d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
