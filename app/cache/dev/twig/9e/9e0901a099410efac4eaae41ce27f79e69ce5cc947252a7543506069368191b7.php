<?php

/* SensioDistributionBundle:Configurator:steps.html.twig */
class __TwigTemplate_bea12be444b7b55e082111980b4217cdadba1269b516cf41e81437f3673d34a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4922c630ab5a2781fe4c61d5f829ea503a7b6deb44e982854a6e3c9351a1db27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4922c630ab5a2781fe4c61d5f829ea503a7b6deb44e982854a6e3c9351a1db27->enter($__internal_4922c630ab5a2781fe4c61d5f829ea503a7b6deb44e982854a6e3c9351a1db27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:steps.html.twig"));

        // line 1
        echo "<div class=\"symfony-block-steps\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 2, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "
      ";
            // line 4
            if (($context["i"] == ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 4, $this->getSourceContext()); })()) + 1))) {
                // line 5
                echo "          <span class=\"selected\">Step ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span>
      ";
            } else {
                // line 7
                echo "          <span>Step ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span>
      ";
            }
            // line 9
            echo "
      ";
            // line 10
            if (($context["i"] != (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 10, $this->getSourceContext()); })()))) {
                // line 11
                echo "        &gt;
      ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
        
        $__internal_4922c630ab5a2781fe4c61d5f829ea503a7b6deb44e982854a6e3c9351a1db27->leave($__internal_4922c630ab5a2781fe4c61d5f829ea503a7b6deb44e982854a6e3c9351a1db27_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 13,  51 => 11,  49 => 10,  46 => 9,  40 => 7,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"symfony-block-steps\">
    {% for i in 1..count %}

      {% if i == index + 1 %}
          <span class=\"selected\">Step {{ i }}</span>
      {% else %}
          <span>Step {{ i }}</span>
      {% endif %}

      {% if i != count %}
        &gt;
      {% endif %}
    {% endfor %}
</div>
", "SensioDistributionBundle:Configurator:steps.html.twig", "/var/www/html/mongoDBsymfony/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/steps.html.twig");
    }
}
