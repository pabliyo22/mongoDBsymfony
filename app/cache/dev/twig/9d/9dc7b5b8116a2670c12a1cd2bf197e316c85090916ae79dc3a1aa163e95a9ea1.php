<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_094dd5ffc8c73c3441ce02ad786da2dce808467414f5a31462d39f069147b3e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_57adda28e20dd9d418ebd352c71bfcced2c4e7aaee5d4a62659db21ba07332a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57adda28e20dd9d418ebd352c71bfcced2c4e7aaee5d4a62659db21ba07332a3->enter($__internal_57adda28e20dd9d418ebd352c71bfcced2c4e7aaee5d4a62659db21ba07332a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57adda28e20dd9d418ebd352c71bfcced2c4e7aaee5d4a62659db21ba07332a3->leave($__internal_57adda28e20dd9d418ebd352c71bfcced2c4e7aaee5d4a62659db21ba07332a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b096528642e2aee8be8405e47f2490c71a6c70411874564cff812882c5bc1a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b096528642e2aee8be8405e47f2490c71a6c70411874564cff812882c5bc1a5c->enter($__internal_b096528642e2aee8be8405e47f2490c71a6c70411874564cff812882c5bc1a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b096528642e2aee8be8405e47f2490c71a6c70411874564cff812882c5bc1a5c->leave($__internal_b096528642e2aee8be8405e47f2490c71a6c70411874564cff812882c5bc1a5c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
