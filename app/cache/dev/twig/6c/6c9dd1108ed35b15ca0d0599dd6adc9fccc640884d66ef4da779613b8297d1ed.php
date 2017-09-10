<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8a8960337fe2608ebc2de02f440641458455a2e992899ea6a1d4a1bd21d569d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b38053b554e5a6c08f0b280287ac3e088fa7e9461af55f940cbcbbe010a50f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38053b554e5a6c08f0b280287ac3e088fa7e9461af55f940cbcbbe010a50f0b->enter($__internal_b38053b554e5a6c08f0b280287ac3e088fa7e9461af55f940cbcbbe010a50f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b38053b554e5a6c08f0b280287ac3e088fa7e9461af55f940cbcbbe010a50f0b->leave($__internal_b38053b554e5a6c08f0b280287ac3e088fa7e9461af55f940cbcbbe010a50f0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6252751bfb1cca3d40fbf202e0d1b9ad06bed5dcc2d28d08d983560698c256bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6252751bfb1cca3d40fbf202e0d1b9ad06bed5dcc2d28d08d983560698c256bc->enter($__internal_6252751bfb1cca3d40fbf202e0d1b9ad06bed5dcc2d28d08d983560698c256bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6252751bfb1cca3d40fbf202e0d1b9ad06bed5dcc2d28d08d983560698c256bc->leave($__internal_6252751bfb1cca3d40fbf202e0d1b9ad06bed5dcc2d28d08d983560698c256bc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9586df470a9bd980bc2842461abb66fc9842f234768d6fdf2d86df26181dee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9586df470a9bd980bc2842461abb66fc9842f234768d6fdf2d86df26181dee6->enter($__internal_e9586df470a9bd980bc2842461abb66fc9842f234768d6fdf2d86df26181dee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e9586df470a9bd980bc2842461abb66fc9842f234768d6fdf2d86df26181dee6->leave($__internal_e9586df470a9bd980bc2842461abb66fc9842f234768d6fdf2d86df26181dee6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
