<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e90b586736493dd5afdacbc73ad725b20d96f96f5dfb2500a8dbdc7b7dfbd9b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f34725d25213712e49f9ee8253095378279d9ed0e20ae8002f2a1ee47dfcf22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f34725d25213712e49f9ee8253095378279d9ed0e20ae8002f2a1ee47dfcf22->enter($__internal_5f34725d25213712e49f9ee8253095378279d9ed0e20ae8002f2a1ee47dfcf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5f34725d25213712e49f9ee8253095378279d9ed0e20ae8002f2a1ee47dfcf22->leave($__internal_5f34725d25213712e49f9ee8253095378279d9ed0e20ae8002f2a1ee47dfcf22_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1da0f4fd798604c80b9c7bfe0d17f352d4534c1d9e6724fdcdee9e40e5f1595f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da0f4fd798604c80b9c7bfe0d17f352d4534c1d9e6724fdcdee9e40e5f1595f->enter($__internal_1da0f4fd798604c80b9c7bfe0d17f352d4534c1d9e6724fdcdee9e40e5f1595f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1da0f4fd798604c80b9c7bfe0d17f352d4534c1d9e6724fdcdee9e40e5f1595f->leave($__internal_1da0f4fd798604c80b9c7bfe0d17f352d4534c1d9e6724fdcdee9e40e5f1595f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
