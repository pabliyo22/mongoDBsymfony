<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e6c7682cc99e61ef6c1e8274fa591347cd8f30d742bebf810c4f062a38fe7441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76860116ddb597a7124341911194e14632643aa4b1cb9814dae66cc4177fda38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76860116ddb597a7124341911194e14632643aa4b1cb9814dae66cc4177fda38->enter($__internal_76860116ddb597a7124341911194e14632643aa4b1cb9814dae66cc4177fda38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76860116ddb597a7124341911194e14632643aa4b1cb9814dae66cc4177fda38->leave($__internal_76860116ddb597a7124341911194e14632643aa4b1cb9814dae66cc4177fda38_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8d39c302ca242a228d5853e871bfc4f83d26336e798a610dbc6c2c60062d9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d39c302ca242a228d5853e871bfc4f83d26336e798a610dbc6c2c60062d9ba->enter($__internal_e8d39c302ca242a228d5853e871bfc4f83d26336e798a610dbc6c2c60062d9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e8d39c302ca242a228d5853e871bfc4f83d26336e798a610dbc6c2c60062d9ba->leave($__internal_e8d39c302ca242a228d5853e871bfc4f83d26336e798a610dbc6c2c60062d9ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
