<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3529fd5529e53d4f42640f35f5921c7cd6b3c4b3ca5e9af31be0a9c1c01a06ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_de5c2d3986d377a2f64fbbe1296bd4ad069cdd00405b48f5db55e48b89465af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5c2d3986d377a2f64fbbe1296bd4ad069cdd00405b48f5db55e48b89465af4->enter($__internal_de5c2d3986d377a2f64fbbe1296bd4ad069cdd00405b48f5db55e48b89465af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de5c2d3986d377a2f64fbbe1296bd4ad069cdd00405b48f5db55e48b89465af4->leave($__internal_de5c2d3986d377a2f64fbbe1296bd4ad069cdd00405b48f5db55e48b89465af4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19dcbac2f49c0e79846d77f23c83901b64e75a39a3f148e861fb7ae424cf1e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19dcbac2f49c0e79846d77f23c83901b64e75a39a3f148e861fb7ae424cf1e9a->enter($__internal_19dcbac2f49c0e79846d77f23c83901b64e75a39a3f148e861fb7ae424cf1e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_19dcbac2f49c0e79846d77f23c83901b64e75a39a3f148e861fb7ae424cf1e9a->leave($__internal_19dcbac2f49c0e79846d77f23c83901b64e75a39a3f148e861fb7ae424cf1e9a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_460d22cceec60581d5547ac6567b5fdcaea83414fbd0a276bba665a3b2e43c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460d22cceec60581d5547ac6567b5fdcaea83414fbd0a276bba665a3b2e43c1c->enter($__internal_460d22cceec60581d5547ac6567b5fdcaea83414fbd0a276bba665a3b2e43c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_460d22cceec60581d5547ac6567b5fdcaea83414fbd0a276bba665a3b2e43c1c->leave($__internal_460d22cceec60581d5547ac6567b5fdcaea83414fbd0a276bba665a3b2e43c1c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_56e8937dc09612861e670471e10f3bbb96d277c1fa551e1859bb0c1be9c4c657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e8937dc09612861e670471e10f3bbb96d277c1fa551e1859bb0c1be9c4c657->enter($__internal_56e8937dc09612861e670471e10f3bbb96d277c1fa551e1859bb0c1be9c4c657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_56e8937dc09612861e670471e10f3bbb96d277c1fa551e1859bb0c1be9c4c657->leave($__internal_56e8937dc09612861e670471e10f3bbb96d277c1fa551e1859bb0c1be9c4c657_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
