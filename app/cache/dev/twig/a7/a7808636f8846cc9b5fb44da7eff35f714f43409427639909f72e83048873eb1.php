<?php

/* AppBundle:default:index.html.twig */
class __TwigTemplate_c8d2aa9529334addf833cc2c56daf32fb9ed52317dd6fe1de57675824f52415a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e2f0117f216ed48c522d176fb704f578363de3d67785900d3e76631373fb763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2f0117f216ed48c522d176fb704f578363de3d67785900d3e76631373fb763->enter($__internal_2e2f0117f216ed48c522d176fb704f578363de3d67785900d3e76631373fb763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e2f0117f216ed48c522d176fb704f578363de3d67785900d3e76631373fb763->leave($__internal_2e2f0117f216ed48c522d176fb704f578363de3d67785900d3e76631373fb763_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_129bd59b9c0d4f32fca8a99d16502550ba8a36641780c76402616da937830d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129bd59b9c0d4f32fca8a99d16502550ba8a36641780c76402616da937830d7f->enter($__internal_129bd59b9c0d4f32fca8a99d16502550ba8a36641780c76402616da937830d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <main class=\"mdl-layout__content mdl-color--grey-100\">
        <div class=\"mdl-grid demo-content\">

            <div class=\"demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col\">
                <table class=\"highlight\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                        </tr>
                    </thead>

                    ";
        // line 28
        echo "
                    <tbody>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 30, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            echo "                            <tr>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "cleanData", array()), "age", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "cleanData", array()), "money", array(), "array"), "html", null, true);
            echo "</td>

                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "cleanData", array()), "name", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "cleanData", array()), "age", array(), "array"), "html", null, true);
            echo "</td>
                            </tr>
                            ";
            // line 38
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) == 1)) {
                // line 39
                echo "                                ";
                // line 40
                echo "                            ";
            }
            // line 41
            echo "
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing\">
                <div class=\"demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop\">
                    <div class=\"mdl-card__title mdl-card--expand mdl-color--teal-300\">
                        <h2 class=\"mdl-card__title-text\">Updates</h2>
                    </div>
                    <div class=\"mdl-card__supporting-text mdl-color-text--grey-600\">
                        Non dolore elit adipisicing ea reprehenderit consectetur culpa.
                    </div>
                    <div class=\"mdl-card__actions mdl-card--border\">
                        <a href=\"#\" class=\"mdl-button mdl-js-button mdl-js-ripple-effect\">Read More</a>
                    </div>
                </div>
                <div class=\"demo-separator mdl-cell--1-col\"></div>
                <div class=\"demo-options mdl-card mdl-color--deep-purple-500 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop\">
                    <div class=\"mdl-card__supporting-text mdl-color-text--blue-grey-50\">
                        <h3>View options</h3>
                        <ul>
                            <li>
                                <label for=\"chkbox1\" class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\">
                                    <input type=\"checkbox\" id=\"chkbox1\" class=\"mdl-checkbox__input\">
                                    <span class=\"mdl-checkbox__label\">Click per object</span>
                                </label>
                            </li>
                            <li>
                                <label for=\"chkbox2\" class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\">
                                    <input type=\"checkbox\" id=\"chkbox2\" class=\"mdl-checkbox__input\">
                                    <span class=\"mdl-checkbox__label\">Views per object</span>
                                </label>
                            </li>
                            <li>
                                <label for=\"chkbox3\" class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\">
                                    <input type=\"checkbox\" id=\"chkbox3\" class=\"mdl-checkbox__input\">
                                    <span class=\"mdl-checkbox__label\">Objects selected</span>
                                </label>
                            </li>
                            <li>
                                <label for=\"chkbox4\" class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\">
                                    <input type=\"checkbox\" id=\"chkbox4\" class=\"mdl-checkbox__input\">
                                    <span class=\"mdl-checkbox__label\">Objects viewed</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mdl-card__actions mdl-card--border\">
                        <a href=\"#\" class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50\">Change location</a>
                        <div class=\"mdl-layout-spacer\"></div>
                        <i class=\"material-icons\">location_on</i>
                    </div>
                </div>
            </div>
        </div>
    </main>
";
        
        $__internal_129bd59b9c0d4f32fca8a99d16502550ba8a36641780c76402616da937830d7f->leave($__internal_129bd59b9c0d4f32fca8a99d16502550ba8a36641780c76402616da937830d7f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  104 => 41,  101 => 40,  99 => 39,  97 => 38,  92 => 36,  88 => 35,  83 => 33,  79 => 32,  76 => 31,  59 => 30,  55 => 28,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <main class=\"mdl-layout__content mdl-color--grey-100\">
        <div class=\"mdl-grid demo-content\">

            <div class=\"demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col\">
                <table class=\"highlight\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                        </tr>
                    </thead>

                    {#   \"_id\" => MongoId {#295 ▼
                       -objectID: ObjectID {#296}
                       }
                       \"age\" => 16
                       \"money\" => 20.0
                       \"hobbies\" => array:1 [▼
                       0 => \"love\"
                       ]
                       \"_type\" => array:1 [▼
                       0 => \"User\"
                       ]
                       \"name\" => \"michael\"#}

                    <tbody>
                        {% for user in users %}
                            <tr>
                                <td>{{user.cleanData['age']}}</td>
                                <td>{{user.cleanData['money']}}</td>

                                <td>{{user.cleanData['name']}}</td>
                                <td>{{user.cleanData['age']}}</td>
                            </tr>
                            {% if loop.index == 1 %}
                                {#       {{dump(user)}}#}
                            {% endif %}

                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing\">
                <div class=\"demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop\">
                    <div class=\"mdl-card__title mdl-card--expand mdl-color--teal-300\">
                        <h2 class=\"mdl-card__title-text\">Updates</h2>
                    </div>
                    <div class=\"mdl-card__supporting-text mdl-color-text--grey-600\">
                        Non dolore elit adipisicing ea reprehenderit consectetur culpa.
                    </div>
                    <div class=\"mdl-card__actions mdl-card--border\">
                        <a href=\"#\" class=\"mdl-button mdl-js-button mdl-js-ripple-effect\">Read More</a>
                    </div>
                </div>
                <div class=\"demo-separator mdl-cell--1-col\"></div>
                <div class=\"demo-options mdl-card mdl-color--deep-purple-500 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop\">
                    <div class=\"mdl-card__supporting-text mdl-color-text--blue-grey-50\">
                        <h3>View options</h3>
                        <ul>
                            <li>
                                <label for=\"chkbox1\" class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\">
                                    <input type=\"checkbox\" id=\"chkbox1\" class=\"mdl-checkbox__input\">
                                    <span class=\"mdl-checkbox__label\">Click per object</span>
                                </label>
                            </li>
                            <li>
                                <label for=\"chkbox2\" class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\">
                                    <input type=\"checkbox\" id=\"chkbox2\" class=\"mdl-checkbox__input\">
                                    <span class=\"mdl-checkbox__label\">Views per object</span>
                                </label>
                            </li>
                            <li>
                                <label for=\"chkbox3\" class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\">
                                    <input type=\"checkbox\" id=\"chkbox3\" class=\"mdl-checkbox__input\">
                                    <span class=\"mdl-checkbox__label\">Objects selected</span>
                                </label>
                            </li>
                            <li>
                                <label for=\"chkbox4\" class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\">
                                    <input type=\"checkbox\" id=\"chkbox4\" class=\"mdl-checkbox__input\">
                                    <span class=\"mdl-checkbox__label\">Objects viewed</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mdl-card__actions mdl-card--border\">
                        <a href=\"#\" class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50\">Change location</a>
                        <div class=\"mdl-layout-spacer\"></div>
                        <i class=\"material-icons\">location_on</i>
                    </div>
                </div>
            </div>
        </div>
    </main>
{% endblock %}", "AppBundle:default:index.html.twig", "/var/www/html/mongoDBsymfony/src/AppBundle/Resources/views/default/index.html.twig");
    }
}
