<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d42b6e4e9f6d1627f6c04a1b74b0fd51d9660646caf5806c65c660babb1a876e extends Twig_Template
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
        $__internal_568344a23adeb2b6064271592bdb616251a173d165e65f1c05216ff60d595eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568344a23adeb2b6064271592bdb616251a173d165e65f1c05216ff60d595eb2->enter($__internal_568344a23adeb2b6064271592bdb616251a173d165e65f1c05216ff60d595eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_568344a23adeb2b6064271592bdb616251a173d165e65f1c05216ff60d595eb2->leave($__internal_568344a23adeb2b6064271592bdb616251a173d165e65f1c05216ff60d595eb2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
