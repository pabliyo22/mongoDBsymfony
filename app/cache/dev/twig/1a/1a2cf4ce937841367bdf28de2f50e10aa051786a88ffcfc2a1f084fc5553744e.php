<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3d0c154d82decf3d1e01fc72d014967bbc60229c8a6a814d5332704d0ce3056b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f1232664510a5b370437a242ec6ee1cb31ec62034f04872568f05b8ec7a91b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1232664510a5b370437a242ec6ee1cb31ec62034f04872568f05b8ec7a91b6->enter($__internal_5f1232664510a5b370437a242ec6ee1cb31ec62034f04872568f05b8ec7a91b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f1232664510a5b370437a242ec6ee1cb31ec62034f04872568f05b8ec7a91b6->leave($__internal_5f1232664510a5b370437a242ec6ee1cb31ec62034f04872568f05b8ec7a91b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_679fc6ca6d4d2253a3ee9878beac0b9a3c15f63e2cc38cdddf79dafa5475c6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679fc6ca6d4d2253a3ee9878beac0b9a3c15f63e2cc38cdddf79dafa5475c6a3->enter($__internal_679fc6ca6d4d2253a3ee9878beac0b9a3c15f63e2cc38cdddf79dafa5475c6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_679fc6ca6d4d2253a3ee9878beac0b9a3c15f63e2cc38cdddf79dafa5475c6a3->leave($__internal_679fc6ca6d4d2253a3ee9878beac0b9a3c15f63e2cc38cdddf79dafa5475c6a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfb48f9834774fce87da84d9eef7b89d06029ef48018babf98f2667a7fe86a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb48f9834774fce87da84d9eef7b89d06029ef48018babf98f2667a7fe86a02->enter($__internal_dfb48f9834774fce87da84d9eef7b89d06029ef48018babf98f2667a7fe86a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dfb48f9834774fce87da84d9eef7b89d06029ef48018babf98f2667a7fe86a02->leave($__internal_dfb48f9834774fce87da84d9eef7b89d06029ef48018babf98f2667a7fe86a02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40a1fd353d5439efa82c6f22c7e73ecc559b04de7967c81fe2ae7893f31ffbd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a1fd353d5439efa82c6f22c7e73ecc559b04de7967c81fe2ae7893f31ffbd0->enter($__internal_40a1fd353d5439efa82c6f22c7e73ecc559b04de7967c81fe2ae7893f31ffbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_40a1fd353d5439efa82c6f22c7e73ecc559b04de7967c81fe2ae7893f31ffbd0->leave($__internal_40a1fd353d5439efa82c6f22c7e73ecc559b04de7967c81fe2ae7893f31ffbd0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
