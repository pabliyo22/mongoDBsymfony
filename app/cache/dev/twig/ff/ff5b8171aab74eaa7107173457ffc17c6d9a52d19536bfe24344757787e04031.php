<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_43305348c4bea0f3348d6993239ec40091b7317a92a90ecceff77ad84f76bd44 extends Twig_Template
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
        $__internal_fe58cfd8fb6788860caf7561c7cc42313a3f52d8fa1643b3cde886f48c175a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe58cfd8fb6788860caf7561c7cc42313a3f52d8fa1643b3cde886f48c175a78->enter($__internal_fe58cfd8fb6788860caf7561c7cc42313a3f52d8fa1643b3cde886f48c175a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_fe58cfd8fb6788860caf7561c7cc42313a3f52d8fa1643b3cde886f48c175a78->leave($__internal_fe58cfd8fb6788860caf7561c7cc42313a3f52d8fa1643b3cde886f48c175a78_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
