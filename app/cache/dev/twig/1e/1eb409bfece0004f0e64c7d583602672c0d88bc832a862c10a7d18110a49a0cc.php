<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_48e3e749267138f5448ed1a22b49fbbadc91593626422ce10ee8a80bce407dcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_37413ba05bec89913a0143b64e3dc33b231901b3b0c5c3878e01bef98ca9e2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37413ba05bec89913a0143b64e3dc33b231901b3b0c5c3878e01bef98ca9e2b4->enter($__internal_37413ba05bec89913a0143b64e3dc33b231901b3b0c5c3878e01bef98ca9e2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37413ba05bec89913a0143b64e3dc33b231901b3b0c5c3878e01bef98ca9e2b4->leave($__internal_37413ba05bec89913a0143b64e3dc33b231901b3b0c5c3878e01bef98ca9e2b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45914396f4a3dc6a62383f6cc3e59b1b855fb8f782d65ca20153a16446f55f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45914396f4a3dc6a62383f6cc3e59b1b855fb8f782d65ca20153a16446f55f57->enter($__internal_45914396f4a3dc6a62383f6cc3e59b1b855fb8f782d65ca20153a16446f55f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_45914396f4a3dc6a62383f6cc3e59b1b855fb8f782d65ca20153a16446f55f57->leave($__internal_45914396f4a3dc6a62383f6cc3e59b1b855fb8f782d65ca20153a16446f55f57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
