<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_add4a9754375ae55d2ce87791520f5fd7e96afc31f8388a93aaf4768645bb761 extends Twig_Template
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
        $__internal_3f8f5cdf55b6ee5db303a584211f59d8787602462ae200c25b22a81849d4ed6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8f5cdf55b6ee5db303a584211f59d8787602462ae200c25b22a81849d4ed6e->enter($__internal_3f8f5cdf55b6ee5db303a584211f59d8787602462ae200c25b22a81849d4ed6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3f8f5cdf55b6ee5db303a584211f59d8787602462ae200c25b22a81849d4ed6e->leave($__internal_3f8f5cdf55b6ee5db303a584211f59d8787602462ae200c25b22a81849d4ed6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
