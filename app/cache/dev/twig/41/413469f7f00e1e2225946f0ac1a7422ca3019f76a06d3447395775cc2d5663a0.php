<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_04f87eee3457866cf233374e57604612dfe19ab140661510aa32166bfa717058 extends Twig_Template
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
        $__internal_997065367ec571fe80d0e7b7aa9d2faa75648d05f4b035d5bc330765891af246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997065367ec571fe80d0e7b7aa9d2faa75648d05f4b035d5bc330765891af246->enter($__internal_997065367ec571fe80d0e7b7aa9d2faa75648d05f4b035d5bc330765891af246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_997065367ec571fe80d0e7b7aa9d2faa75648d05f4b035d5bc330765891af246->leave($__internal_997065367ec571fe80d0e7b7aa9d2faa75648d05f4b035d5bc330765891af246_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
