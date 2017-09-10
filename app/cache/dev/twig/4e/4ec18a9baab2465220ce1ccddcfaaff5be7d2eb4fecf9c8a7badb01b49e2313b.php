<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9c49d23e070a205011650ae1d9b595a5172bdff5f1c812ebd1287bb221e26247 extends Twig_Template
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
        $__internal_ce887d50d15c81e9ccf7455e9fce0271fdaa63d4418c99f07b6dace50481cf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce887d50d15c81e9ccf7455e9fce0271fdaa63d4418c99f07b6dace50481cf91->enter($__internal_ce887d50d15c81e9ccf7455e9fce0271fdaa63d4418c99f07b6dace50481cf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ce887d50d15c81e9ccf7455e9fce0271fdaa63d4418c99f07b6dace50481cf91->leave($__internal_ce887d50d15c81e9ccf7455e9fce0271fdaa63d4418c99f07b6dace50481cf91_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
