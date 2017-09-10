<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d3f8238cca2e368fe6a39c99e444d8b363f1ff48e673ab6caac91d58ef13e2b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_73ab9f15930ceab88373bc5846f899b6a71f456e9b2734a4fd0ec0115e7c44f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ab9f15930ceab88373bc5846f899b6a71f456e9b2734a4fd0ec0115e7c44f5->enter($__internal_73ab9f15930ceab88373bc5846f899b6a71f456e9b2734a4fd0ec0115e7c44f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73ab9f15930ceab88373bc5846f899b6a71f456e9b2734a4fd0ec0115e7c44f5->leave($__internal_73ab9f15930ceab88373bc5846f899b6a71f456e9b2734a4fd0ec0115e7c44f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa82f697a91315a5942a504839ca138939750dddc31995c08f7269eab56435d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa82f697a91315a5942a504839ca138939750dddc31995c08f7269eab56435d4->enter($__internal_aa82f697a91315a5942a504839ca138939750dddc31995c08f7269eab56435d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_aa82f697a91315a5942a504839ca138939750dddc31995c08f7269eab56435d4->leave($__internal_aa82f697a91315a5942a504839ca138939750dddc31995c08f7269eab56435d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
