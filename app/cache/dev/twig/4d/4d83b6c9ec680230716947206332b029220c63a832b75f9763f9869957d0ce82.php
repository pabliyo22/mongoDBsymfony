<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_599fc2dd3964d0c58803d0e3945d5e3918d140f03c4e10855a45946a18c5f750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7274bbb3e5ff9039eca74e74120845a1ca9fdeffecd011bece0784d854ca442d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7274bbb3e5ff9039eca74e74120845a1ca9fdeffecd011bece0784d854ca442d->enter($__internal_7274bbb3e5ff9039eca74e74120845a1ca9fdeffecd011bece0784d854ca442d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7274bbb3e5ff9039eca74e74120845a1ca9fdeffecd011bece0784d854ca442d->leave($__internal_7274bbb3e5ff9039eca74e74120845a1ca9fdeffecd011bece0784d854ca442d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d1d661227c2159d7701a87967c6dc6f33e8a40df4128ef1cbcf0db72e7eaefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1d661227c2159d7701a87967c6dc6f33e8a40df4128ef1cbcf0db72e7eaefe->enter($__internal_1d1d661227c2159d7701a87967c6dc6f33e8a40df4128ef1cbcf0db72e7eaefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1d1d661227c2159d7701a87967c6dc6f33e8a40df4128ef1cbcf0db72e7eaefe->leave($__internal_1d1d661227c2159d7701a87967c6dc6f33e8a40df4128ef1cbcf0db72e7eaefe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4a7b9b71c9fa69d89b9ca3fbe7ed8bbffae8d832ad73504f99c9a3d2d6f8ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a7b9b71c9fa69d89b9ca3fbe7ed8bbffae8d832ad73504f99c9a3d2d6f8ccb->enter($__internal_a4a7b9b71c9fa69d89b9ca3fbe7ed8bbffae8d832ad73504f99c9a3d2d6f8ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a4a7b9b71c9fa69d89b9ca3fbe7ed8bbffae8d832ad73504f99c9a3d2d6f8ccb->leave($__internal_a4a7b9b71c9fa69d89b9ca3fbe7ed8bbffae8d832ad73504f99c9a3d2d6f8ccb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2c56efbcdb947f01bb2b251d4312ff960112bd8a6154d829d888e269639b93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c56efbcdb947f01bb2b251d4312ff960112bd8a6154d829d888e269639b93a->enter($__internal_f2c56efbcdb947f01bb2b251d4312ff960112bd8a6154d829d888e269639b93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new Twig_Error_Runtime('Variable "version" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
";
        
        $__internal_f2c56efbcdb947f01bb2b251d4312ff960112bd8a6154d829d888e269639b93a->leave($__internal_f2c56efbcdb947f01bb2b251d4312ff960112bd8a6154d829d888e269639b93a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_35b1b78530b2c440802d016153d8ce841e80d534dd1c1214290ffe470f2bcf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b1b78530b2c440802d016153d8ce841e80d534dd1c1214290ffe470f2bcf9b->enter($__internal_35b1b78530b2c440802d016153d8ce841e80d534dd1c1214290ffe470f2bcf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_35b1b78530b2c440802d016153d8ce841e80d534dd1c1214290ffe470f2bcf9b->leave($__internal_35b1b78530b2c440802d016153d8ce841e80d534dd1c1214290ffe470f2bcf9b_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle:Configurator:layout.html.twig", "/var/www/html/mongoDBsymfony/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
