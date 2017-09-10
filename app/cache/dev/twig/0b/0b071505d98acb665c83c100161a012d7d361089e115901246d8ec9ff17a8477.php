<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d2c7799e1d96e940e0c70e2f245f3f48c1c4553a1b008a821da3852eac14f86e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1d702252a811c202e4ac21ee00ae1d1e2dd2e1f83eeb2350a8b131b4c43bf74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d702252a811c202e4ac21ee00ae1d1e2dd2e1f83eeb2350a8b131b4c43bf74c->enter($__internal_1d702252a811c202e4ac21ee00ae1d1e2dd2e1f83eeb2350a8b131b4c43bf74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d702252a811c202e4ac21ee00ae1d1e2dd2e1f83eeb2350a8b131b4c43bf74c->leave($__internal_1d702252a811c202e4ac21ee00ae1d1e2dd2e1f83eeb2350a8b131b4c43bf74c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f9d1532c6c96b3a475d031009630e8c9e9c0b71b6fbb7266894af12e72c72c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9d1532c6c96b3a475d031009630e8c9e9c0b71b6fbb7266894af12e72c72c1->enter($__internal_9f9d1532c6c96b3a475d031009630e8c9e9c0b71b6fbb7266894af12e72c72c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9f9d1532c6c96b3a475d031009630e8c9e9c0b71b6fbb7266894af12e72c72c1->leave($__internal_9f9d1532c6c96b3a475d031009630e8c9e9c0b71b6fbb7266894af12e72c72c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
