<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_b899fbe8b386af9095fcb17b51b0d3da6c88d3f3b269da4d0629e07c099ff276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_976f80367e41d59841130eb3ad488b2c304c633ce510dfb7fff08c247bd75419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976f80367e41d59841130eb3ad488b2c304c633ce510dfb7fff08c247bd75419->enter($__internal_976f80367e41d59841130eb3ad488b2c304c633ce510dfb7fff08c247bd75419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_976f80367e41d59841130eb3ad488b2c304c633ce510dfb7fff08c247bd75419->leave($__internal_976f80367e41d59841130eb3ad488b2c304c633ce510dfb7fff08c247bd75419_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e259ff2c9cb3a68db8837851ec85c6302c5466bc45e2000049c2bbdfab6587db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e259ff2c9cb3a68db8837851ec85c6302c5466bc45e2000049c2bbdfab6587db->enter($__internal_e259ff2c9cb3a68db8837851ec85c6302c5466bc45e2000049c2bbdfab6587db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">

        <div class=\"col s12 m7\">
            <h2 class=\"header\">Inicio de Sesion</h2>
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 10
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 11
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 12
                    echo "                        <div class=\"";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 13
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "            ";
        }
        // line 18
        echo "            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"https://lorempixel.com/100/190/nature/6\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <div class=\"card-content\">
                            ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                            ";
        } else {
            // line 28
            echo "                            ";
        }
        // line 29
        echo "                            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "                        </div>
                    </div>
                </div>
                <div class=\"card-action\">                    
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>



    ";
        
        $__internal_e259ff2c9cb3a68db8837851ec85c6302c5466bc45e2000049c2bbdfab6587db->leave($__internal_e259ff2c9cb3a68db8837851ec85c6302c5466bc45e2000049c2bbdfab6587db_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c77c7bb945bd77348159504b9db803907b10c96d7f9475392dc1ab9ed0390c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c77c7bb945bd77348159504b9db803907b10c96d7f9475392dc1ab9ed0390c0->enter($__internal_3c77c7bb945bd77348159504b9db803907b10c96d7f9475392dc1ab9ed0390c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "                            ";
        
        $__internal_3c77c7bb945bd77348159504b9db803907b10c96d7f9475392dc1ab9ed0390c0->leave($__internal_3c77c7bb945bd77348159504b9db803907b10c96d7f9475392dc1ab9ed0390c0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 30,  138 => 29,  122 => 37,  118 => 36,  112 => 35,  106 => 31,  103 => 29,  100 => 28,  94 => 26,  92 => 25,  83 => 18,  80 => 17,  74 => 16,  65 => 13,  60 => 12,  55 => 11,  50 => 10,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">

        <div class=\"col s12 m7\">
            <h2 class=\"header\">Inicio de Sesion</h2>
            {% if app.request.hasPreviousSession %}
                {% for type, messages in app.session.flashBag.all %}
                    {% for message in messages %}
                        <div class=\"{{ type }}\">
                            {{ message|trans({}, 'FOSUserBundle') }}
                        </div>
                    {% endfor %}
                {% endfor %}
            {% endif %}
            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"https://lorempixel.com/100/190/nature/6\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <div class=\"card-content\">
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                            {% else %}
                            {% endif %}
                            {% block fos_user_content %}
                            {% endblock fos_user_content %}
                        </div>
                    </div>
                </div>
                <div class=\"card-action\">                    
                    <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                    <a href=\"{{ path('fos_user_security_logout') }}\">
                        {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                    </a>
                </div>
            </div>
        </div>



    {% endblock body %}

", "@FOSUser/layout.html.twig", "/var/www/html/mongoDBsymfony/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
