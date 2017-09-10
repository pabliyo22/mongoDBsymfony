<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c69d36dfe0360ffb6307973d32e468e508bf8027a41c90ce97baa565fb694ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a06e3674f49505ccb09d398f695cc03b83c2ed2044fe850c7e0e2beb37337a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06e3674f49505ccb09d398f695cc03b83c2ed2044fe850c7e0e2beb37337a06->enter($__internal_a06e3674f49505ccb09d398f695cc03b83c2ed2044fe850c7e0e2beb37337a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 2
        echo "!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 10
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 15
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
        asdsd
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 21
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 22
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        PUTO
                        ";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        // line 29
        echo "
        <div>
            ";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "        </div>
    </body>
</html>";
        
        $__internal_a06e3674f49505ccb09d398f695cc03b83c2ed2044fe850c7e0e2beb37337a06->leave($__internal_a06e3674f49505ccb09d398f695cc03b83c2ed2044fe850c7e0e2beb37337a06_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bc70efa5a3662c52a17f723f6093cf12a579369f60cc6b3f858bd250aa67684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc70efa5a3662c52a17f723f6093cf12a579369f60cc6b3f858bd250aa67684->enter($__internal_7bc70efa5a3662c52a17f723f6093cf12a579369f60cc6b3f858bd250aa67684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "            ";
        
        $__internal_7bc70efa5a3662c52a17f723f6093cf12a579369f60cc6b3f858bd250aa67684->leave($__internal_7bc70efa5a3662c52a17f723f6093cf12a579369f60cc6b3f858bd250aa67684_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  112 => 31,  103 => 33,  101 => 31,  97 => 29,  94 => 28,  88 => 27,  79 => 24,  73 => 22,  68 => 21,  63 => 20,  61 => 19,  57 => 17,  49 => 15,  43 => 12,  39 => 11,  34 => 10,  32 => 9,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>
        asdsd
        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashBag.all %}
                {% for message in messages %}
                    <div class=\"{{ type }}\">
                        PUTO
                        {{ message|trans({}, 'FOSUserBundle') }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>", "FOSUserBundle::layout.html.twig", "/var/www/html/mongoDBsymfony/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
