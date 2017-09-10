<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_34c7a9c11bb139c8608b1c2002e51ebadf31e89d75c8831b7fff9ba18105ac7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator/Step:secret.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b96bc75e0b03f5cece91ce7c40b6a3b08946df62836f2b269fde0e730b95433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b96bc75e0b03f5cece91ce7c40b6a3b08946df62836f2b269fde0e730b95433->enter($__internal_6b96bc75e0b03f5cece91ce7c40b6a3b08946df62836f2b269fde0e730b95433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator/Step:secret.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b96bc75e0b03f5cece91ce7c40b6a3b08946df62836f2b269fde0e730b95433->leave($__internal_6b96bc75e0b03f5cece91ce7c40b6a3b08946df62836f2b269fde0e730b95433_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a25f81d9390903a1db9bb87cf0d082bcac13d030087d19ac75a4606fa6795d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a25f81d9390903a1db9bb87cf0d082bcac13d030087d19ac75a4606fa6795d7->enter($__internal_8a25f81d9390903a1db9bb87cf0d082bcac13d030087d19ac75a4606fa6795d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Configure global Secret";
        
        $__internal_8a25f81d9390903a1db9bb87cf0d082bcac13d030087d19ac75a4606fa6795d7->leave($__internal_8a25f81d9390903a1db9bb87cf0d082bcac13d030087d19ac75a4606fa6795d7_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3b23690e45e3c3497dd083e6506375a646a4531dde6592a09cc9884b650843c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b23690e45e3c3497dd083e6506375a646a4531dde6592a09cc9884b650843c5->enter($__internal_3b23690e45e3c3497dd083e6506375a646a4531dde6592a09cc9884b650843c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig", "SensioDistributionBundle:Configurator/Step:secret.html.twig", 9)->display(array_merge($context, array("index" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 9, $this->getSourceContext()); })()), "count" => (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 9, $this->getSourceContext()); })()))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website:</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_configurator_step", array("index" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 17, $this->getSourceContext()); })()))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "secret", array()), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "secret", array()), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "secret", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
        
        $__internal_3b23690e45e3c3497dd083e6506375a646a4531dde6592a09cc9884b650843c5->leave($__internal_3b23690e45e3c3497dd083e6506375a646a4531dde6592a09cc9884b650843c5_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  96 => 30,  84 => 21,  79 => 19,  74 => 17,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SensioDistributionBundle::Configurator/layout.html.twig\" %}

{% block title %}Symfony - Configure global Secret{% endblock %}

{% block content %}
    {% form_theme form \"SensioDistributionBundle::Configurator/form.html.twig\" %}

    <div class=\"step\">
        {% include \"SensioDistributionBundle::Configurator/steps.html.twig\" with { \"index\": index, \"count\": count } %}

        <h1>Global Secret</h1>
        <p>Configure the global secret for your website:</p>

        <div class=\"symfony-form-errors\">
            {{ form_errors(form) }}
        </div>
        <form action=\"{{ path('_configurator_step', { 'index': index }) }} \" method=\"POST\">
            <div class=\"symfony-form-row\">
                {{ form_label(form.secret) }}
                <div class=\"symfony-form-field\">
                    {{ form_widget(form.secret) }}
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        {{ form_errors(form.secret) }}
                    </div>
                </div>
            </div>

            {{ form_rest(form) }}

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
{% endblock %}
", "SensioDistributionBundle:Configurator/Step:secret.html.twig", "/var/www/html/mongoDBsymfony/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/Step/secret.html.twig");
    }
}
