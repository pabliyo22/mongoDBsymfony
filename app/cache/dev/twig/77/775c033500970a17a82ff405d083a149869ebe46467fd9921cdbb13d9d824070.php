<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7df1be9e2016468162339e34eb36e8dd8d04b7635baecd838185b27aa2896777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_fbd586fbca6f1a60c411f9e0d70dfdab580eff015b8195aed5ebc03adcb9b3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd586fbca6f1a60c411f9e0d70dfdab580eff015b8195aed5ebc03adcb9b3cd->enter($__internal_fbd586fbca6f1a60c411f9e0d70dfdab580eff015b8195aed5ebc03adcb9b3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbd586fbca6f1a60c411f9e0d70dfdab580eff015b8195aed5ebc03adcb9b3cd->leave($__internal_fbd586fbca6f1a60c411f9e0d70dfdab580eff015b8195aed5ebc03adcb9b3cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b83d6119762faf8c338d4c3538329c01f52d8f709374be221928b4a73189474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b83d6119762faf8c338d4c3538329c01f52d8f709374be221928b4a73189474->enter($__internal_6b83d6119762faf8c338d4c3538329c01f52d8f709374be221928b4a73189474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b83d6119762faf8c338d4c3538329c01f52d8f709374be221928b4a73189474->leave($__internal_6b83d6119762faf8c338d4c3538329c01f52d8f709374be221928b4a73189474_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e1dc47bcc8b8fbd34806b05c45edc8199cf2f126c66d071b1a699587cd5c862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1dc47bcc8b8fbd34806b05c45edc8199cf2f126c66d071b1a699587cd5c862->enter($__internal_0e1dc47bcc8b8fbd34806b05c45edc8199cf2f126c66d071b1a699587cd5c862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e1dc47bcc8b8fbd34806b05c45edc8199cf2f126c66d071b1a699587cd5c862->leave($__internal_0e1dc47bcc8b8fbd34806b05c45edc8199cf2f126c66d071b1a699587cd5c862_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e6689196371eae03a4f5880f594f399541961e4436caf42a76d5cf8efa85bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6689196371eae03a4f5880f594f399541961e4436caf42a76d5cf8efa85bd7->enter($__internal_7e6689196371eae03a4f5880f594f399541961e4436caf42a76d5cf8efa85bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7e6689196371eae03a4f5880f594f399541961e4436caf42a76d5cf8efa85bd7->leave($__internal_7e6689196371eae03a4f5880f594f399541961e4436caf42a76d5cf8efa85bd7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
