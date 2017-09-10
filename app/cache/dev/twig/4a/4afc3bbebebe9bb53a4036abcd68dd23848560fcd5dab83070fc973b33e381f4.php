<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_850db46996a86bbdb13271d6bfdfb37553e1b79776be5bd75e25a6771750a8a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ef1250e4c6898c788bef4f34018ee86f9067ec48859eab923ff263fce2a742bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1250e4c6898c788bef4f34018ee86f9067ec48859eab923ff263fce2a742bd->enter($__internal_ef1250e4c6898c788bef4f34018ee86f9067ec48859eab923ff263fce2a742bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef1250e4c6898c788bef4f34018ee86f9067ec48859eab923ff263fce2a742bd->leave($__internal_ef1250e4c6898c788bef4f34018ee86f9067ec48859eab923ff263fce2a742bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3d6c04a6d486f2c7a70df36116cc19d40820ebeed60b6a6f0d96e1dd15c1de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d6c04a6d486f2c7a70df36116cc19d40820ebeed60b6a6f0d96e1dd15c1de6->enter($__internal_d3d6c04a6d486f2c7a70df36116cc19d40820ebeed60b6a6f0d96e1dd15c1de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d3d6c04a6d486f2c7a70df36116cc19d40820ebeed60b6a6f0d96e1dd15c1de6->leave($__internal_d3d6c04a6d486f2c7a70df36116cc19d40820ebeed60b6a6f0d96e1dd15c1de6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
