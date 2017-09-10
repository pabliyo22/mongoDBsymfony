<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4e8452b684640654f6cbfcbc984f942b2a0c881191ec4855c7191c8cdef35721 extends Twig_Template
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
        $__internal_043b6cf475b36a3001721b05bd89b276cdd95d533e784dcfdcfbff15f2a42814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043b6cf475b36a3001721b05bd89b276cdd95d533e784dcfdcfbff15f2a42814->enter($__internal_043b6cf475b36a3001721b05bd89b276cdd95d533e784dcfdcfbff15f2a42814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_043b6cf475b36a3001721b05bd89b276cdd95d533e784dcfdcfbff15f2a42814->leave($__internal_043b6cf475b36a3001721b05bd89b276cdd95d533e784dcfdcfbff15f2a42814_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
