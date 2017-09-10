<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_43ee399583f2ba7c7907abb233fe6da79064b00b57e926e8c0aa30f6621b3353 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b0743bab122b9cd78c44f9bbea9c60cc342b2099d198c3920b30cd6e99579934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0743bab122b9cd78c44f9bbea9c60cc342b2099d198c3920b30cd6e99579934->enter($__internal_b0743bab122b9cd78c44f9bbea9c60cc342b2099d198c3920b30cd6e99579934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0743bab122b9cd78c44f9bbea9c60cc342b2099d198c3920b30cd6e99579934->leave($__internal_b0743bab122b9cd78c44f9bbea9c60cc342b2099d198c3920b30cd6e99579934_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f291f6c68bae715801f100135943d57a2a7e7141980787450c7fac029fcb864b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f291f6c68bae715801f100135943d57a2a7e7141980787450c7fac029fcb864b->enter($__internal_f291f6c68bae715801f100135943d57a2a7e7141980787450c7fac029fcb864b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f291f6c68bae715801f100135943d57a2a7e7141980787450c7fac029fcb864b->leave($__internal_f291f6c68bae715801f100135943d57a2a7e7141980787450c7fac029fcb864b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
