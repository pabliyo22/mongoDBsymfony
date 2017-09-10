<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ab957a5f8534fe6da047c99720d7f594dcf7d9731456b197e399d82917471ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b70146f990d94e1d1fd6e8a5547d531998e67ac77a2419eff45c20d0c2c98a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70146f990d94e1d1fd6e8a5547d531998e67ac77a2419eff45c20d0c2c98a53->enter($__internal_b70146f990d94e1d1fd6e8a5547d531998e67ac77a2419eff45c20d0c2c98a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b70146f990d94e1d1fd6e8a5547d531998e67ac77a2419eff45c20d0c2c98a53->leave($__internal_b70146f990d94e1d1fd6e8a5547d531998e67ac77a2419eff45c20d0c2c98a53_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_60fe5cc9cdadc676e98545a282a40e15947196a0734f9a15d97ddecfc336f41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60fe5cc9cdadc676e98545a282a40e15947196a0734f9a15d97ddecfc336f41b->enter($__internal_60fe5cc9cdadc676e98545a282a40e15947196a0734f9a15d97ddecfc336f41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_60fe5cc9cdadc676e98545a282a40e15947196a0734f9a15d97ddecfc336f41b->leave($__internal_60fe5cc9cdadc676e98545a282a40e15947196a0734f9a15d97ddecfc336f41b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_10d73fee4cd33fd880b62b125e0d873327e77877be6071ad14835f0d2cd3357e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d73fee4cd33fd880b62b125e0d873327e77877be6071ad14835f0d2cd3357e->enter($__internal_10d73fee4cd33fd880b62b125e0d873327e77877be6071ad14835f0d2cd3357e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_10d73fee4cd33fd880b62b125e0d873327e77877be6071ad14835f0d2cd3357e->leave($__internal_10d73fee4cd33fd880b62b125e0d873327e77877be6071ad14835f0d2cd3357e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ca17cbe05b311510300da2df9266188da5cfc6fddbe1bf2414f1db01c5a5dc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca17cbe05b311510300da2df9266188da5cfc6fddbe1bf2414f1db01c5a5dc66->enter($__internal_ca17cbe05b311510300da2df9266188da5cfc6fddbe1bf2414f1db01c5a5dc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ca17cbe05b311510300da2df9266188da5cfc6fddbe1bf2414f1db01c5a5dc66->leave($__internal_ca17cbe05b311510300da2df9266188da5cfc6fddbe1bf2414f1db01c5a5dc66_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
