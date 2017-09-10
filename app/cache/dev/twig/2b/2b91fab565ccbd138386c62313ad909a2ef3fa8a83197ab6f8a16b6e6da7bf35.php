<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4fc465efb19bf2a0af53b5c432246ea4992e5ced4fb2fb9f2c017455e19d588e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_035752fc9504aae37765c4f75db792fc039ac5acfa1bcca7c33a5c59a18433aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035752fc9504aae37765c4f75db792fc039ac5acfa1bcca7c33a5c59a18433aa->enter($__internal_035752fc9504aae37765c4f75db792fc039ac5acfa1bcca7c33a5c59a18433aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_035752fc9504aae37765c4f75db792fc039ac5acfa1bcca7c33a5c59a18433aa->leave($__internal_035752fc9504aae37765c4f75db792fc039ac5acfa1bcca7c33a5c59a18433aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc35a332f140a3264a42ffdbad919238ee4df1fb5c40eb5d230c2c320db89e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc35a332f140a3264a42ffdbad919238ee4df1fb5c40eb5d230c2c320db89e43->enter($__internal_cc35a332f140a3264a42ffdbad919238ee4df1fb5c40eb5d230c2c320db89e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_cc35a332f140a3264a42ffdbad919238ee4df1fb5c40eb5d230c2c320db89e43->leave($__internal_cc35a332f140a3264a42ffdbad919238ee4df1fb5c40eb5d230c2c320db89e43_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
