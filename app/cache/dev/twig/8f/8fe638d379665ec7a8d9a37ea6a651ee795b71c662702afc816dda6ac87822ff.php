<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_87cccf4ea7bfa1a0b6a5b491682a1315d2db423b4a32bf28dccfda8b2a7e7504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37bedab07da7cb18b201a0cc22e94a3c244d29f8d23f1a48e7e1b07665486f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37bedab07da7cb18b201a0cc22e94a3c244d29f8d23f1a48e7e1b07665486f61->enter($__internal_37bedab07da7cb18b201a0cc22e94a3c244d29f8d23f1a48e7e1b07665486f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_37bedab07da7cb18b201a0cc22e94a3c244d29f8d23f1a48e7e1b07665486f61->leave($__internal_37bedab07da7cb18b201a0cc22e94a3c244d29f8d23f1a48e7e1b07665486f61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
