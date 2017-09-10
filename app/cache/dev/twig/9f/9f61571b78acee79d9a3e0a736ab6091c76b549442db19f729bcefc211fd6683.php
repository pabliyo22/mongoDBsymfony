<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_de6ee1aa387b29a3266b55b42f0fd2464ea1e6e2b1308d824b6b3d948b03567c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_ad9094cedf01c4d856be1f473126b3158ad92fc687fedba52c2a6351204b74ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9094cedf01c4d856be1f473126b3158ad92fc687fedba52c2a6351204b74ab->enter($__internal_ad9094cedf01c4d856be1f473126b3158ad92fc687fedba52c2a6351204b74ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad9094cedf01c4d856be1f473126b3158ad92fc687fedba52c2a6351204b74ab->leave($__internal_ad9094cedf01c4d856be1f473126b3158ad92fc687fedba52c2a6351204b74ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8009f006fc88f583559010cf7aee2a3308ce4c055812212a401a3e523bd2f696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8009f006fc88f583559010cf7aee2a3308ce4c055812212a401a3e523bd2f696->enter($__internal_8009f006fc88f583559010cf7aee2a3308ce4c055812212a401a3e523bd2f696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8009f006fc88f583559010cf7aee2a3308ce4c055812212a401a3e523bd2f696->leave($__internal_8009f006fc88f583559010cf7aee2a3308ce4c055812212a401a3e523bd2f696_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
