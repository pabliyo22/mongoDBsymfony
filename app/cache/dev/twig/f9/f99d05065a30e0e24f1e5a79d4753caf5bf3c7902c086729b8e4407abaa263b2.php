<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9e36cdf46ebad9ade0ea88c5eee2eae9b7299f153afae73ba8002f85e17375c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_0021c8040c14dafa79ac6638af05dcfe74d21969aaa3f7bb6581ea7f5fd1fb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0021c8040c14dafa79ac6638af05dcfe74d21969aaa3f7bb6581ea7f5fd1fb83->enter($__internal_0021c8040c14dafa79ac6638af05dcfe74d21969aaa3f7bb6581ea7f5fd1fb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0021c8040c14dafa79ac6638af05dcfe74d21969aaa3f7bb6581ea7f5fd1fb83->leave($__internal_0021c8040c14dafa79ac6638af05dcfe74d21969aaa3f7bb6581ea7f5fd1fb83_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e54f638769765941b06be10927ce8912f9e86cab7956ea12b1ff23cb8478ce2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54f638769765941b06be10927ce8912f9e86cab7956ea12b1ff23cb8478ce2d->enter($__internal_e54f638769765941b06be10927ce8912f9e86cab7956ea12b1ff23cb8478ce2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e54f638769765941b06be10927ce8912f9e86cab7956ea12b1ff23cb8478ce2d->leave($__internal_e54f638769765941b06be10927ce8912f9e86cab7956ea12b1ff23cb8478ce2d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/mongoDBsymfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
