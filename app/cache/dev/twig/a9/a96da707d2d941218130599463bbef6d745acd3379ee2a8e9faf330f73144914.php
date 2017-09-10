<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_17316df999fd0165619938e7381d1fb460acb072f06713b39519e8826a783e5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d8b653ef7d097d5c5d4c7970f696645912dfa04565fdff2a5db6a814b4cffd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8b653ef7d097d5c5d4c7970f696645912dfa04565fdff2a5db6a814b4cffd4->enter($__internal_7d8b653ef7d097d5c5d4c7970f696645912dfa04565fdff2a5db6a814b4cffd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d8b653ef7d097d5c5d4c7970f696645912dfa04565fdff2a5db6a814b4cffd4->leave($__internal_7d8b653ef7d097d5c5d4c7970f696645912dfa04565fdff2a5db6a814b4cffd4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c709db9576f3dfa80452bf61f81b1666f2a263eec13c259d8d9bff6204ba7184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c709db9576f3dfa80452bf61f81b1666f2a263eec13c259d8d9bff6204ba7184->enter($__internal_c709db9576f3dfa80452bf61f81b1666f2a263eec13c259d8d9bff6204ba7184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c709db9576f3dfa80452bf61f81b1666f2a263eec13c259d8d9bff6204ba7184->leave($__internal_c709db9576f3dfa80452bf61f81b1666f2a263eec13c259d8d9bff6204ba7184_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c33d27d065ef865b7bcdd43faaf1e6d3c5d4379184bd6ffc63e4cb1bbe4d2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c33d27d065ef865b7bcdd43faaf1e6d3c5d4379184bd6ffc63e4cb1bbe4d2f9->enter($__internal_4c33d27d065ef865b7bcdd43faaf1e6d3c5d4379184bd6ffc63e4cb1bbe4d2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4c33d27d065ef865b7bcdd43faaf1e6d3c5d4379184bd6ffc63e4cb1bbe4d2f9->leave($__internal_4c33d27d065ef865b7bcdd43faaf1e6d3c5d4379184bd6ffc63e4cb1bbe4d2f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_67dcf93c93a659afa1c9bfe53d9ee31afee9480623354e6224d88ab7d673e828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67dcf93c93a659afa1c9bfe53d9ee31afee9480623354e6224d88ab7d673e828->enter($__internal_67dcf93c93a659afa1c9bfe53d9ee31afee9480623354e6224d88ab7d673e828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_67dcf93c93a659afa1c9bfe53d9ee31afee9480623354e6224d88ab7d673e828->leave($__internal_67dcf93c93a659afa1c9bfe53d9ee31afee9480623354e6224d88ab7d673e828_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
