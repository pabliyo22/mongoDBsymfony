<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_38defda1b4d59455fa4b956aef98d4c42eef7b10add9df450597f059ff82cfea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_7948fb56549b6883919bd8d25212a091c508484634180222ee7c791bf3b621a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7948fb56549b6883919bd8d25212a091c508484634180222ee7c791bf3b621a1->enter($__internal_7948fb56549b6883919bd8d25212a091c508484634180222ee7c791bf3b621a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7948fb56549b6883919bd8d25212a091c508484634180222ee7c791bf3b621a1->leave($__internal_7948fb56549b6883919bd8d25212a091c508484634180222ee7c791bf3b621a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c4d55c1e444beca2a341f29c8446f88ff77b3f07a01efa67bd413cd3a8f39d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4d55c1e444beca2a341f29c8446f88ff77b3f07a01efa67bd413cd3a8f39d4->enter($__internal_0c4d55c1e444beca2a341f29c8446f88ff77b3f07a01efa67bd413cd3a8f39d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0c4d55c1e444beca2a341f29c8446f88ff77b3f07a01efa67bd413cd3a8f39d4->leave($__internal_0c4d55c1e444beca2a341f29c8446f88ff77b3f07a01efa67bd413cd3a8f39d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
