<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_851f3910d57408a615f528335c2eab26487e89f8be53ef3e5d50574e7d2dc92b extends Twig_Template
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
        $__internal_261931388afa2b7fb75d56b0f117841bbe734518a794684a47524f1639986de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261931388afa2b7fb75d56b0f117841bbe734518a794684a47524f1639986de3->enter($__internal_261931388afa2b7fb75d56b0f117841bbe734518a794684a47524f1639986de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_261931388afa2b7fb75d56b0f117841bbe734518a794684a47524f1639986de3->leave($__internal_261931388afa2b7fb75d56b0f117841bbe734518a794684a47524f1639986de3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4ca2ef2a2c39a2a94281e705d01aa6951cb23c9a2eaf9ae9d6e96f7304cefc99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca2ef2a2c39a2a94281e705d01aa6951cb23c9a2eaf9ae9d6e96f7304cefc99->enter($__internal_4ca2ef2a2c39a2a94281e705d01aa6951cb23c9a2eaf9ae9d6e96f7304cefc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_4ca2ef2a2c39a2a94281e705d01aa6951cb23c9a2eaf9ae9d6e96f7304cefc99->leave($__internal_4ca2ef2a2c39a2a94281e705d01aa6951cb23c9a2eaf9ae9d6e96f7304cefc99_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cb9aca6389c7946b30775fd5f65581707f6c06285b5538093b423764df03141c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9aca6389c7946b30775fd5f65581707f6c06285b5538093b423764df03141c->enter($__internal_cb9aca6389c7946b30775fd5f65581707f6c06285b5538093b423764df03141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_cb9aca6389c7946b30775fd5f65581707f6c06285b5538093b423764df03141c->leave($__internal_cb9aca6389c7946b30775fd5f65581707f6c06285b5538093b423764df03141c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_98d6dcc41c0dc40ae6cf208836ce5a24852186698f071eb8dc94b42f45f03882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d6dcc41c0dc40ae6cf208836ce5a24852186698f071eb8dc94b42f45f03882->enter($__internal_98d6dcc41c0dc40ae6cf208836ce5a24852186698f071eb8dc94b42f45f03882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_98d6dcc41c0dc40ae6cf208836ce5a24852186698f071eb8dc94b42f45f03882->leave($__internal_98d6dcc41c0dc40ae6cf208836ce5a24852186698f071eb8dc94b42f45f03882_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
