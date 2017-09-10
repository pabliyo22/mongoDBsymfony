<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7fea563ed3b282b1116e56f2e91c46b01751d981673b2c168d02797761f6a04c extends Twig_Template
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
        $__internal_3ea9795c6a9e580e858f090bf6f3414379352b7dcbee75312fcb915668fba236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea9795c6a9e580e858f090bf6f3414379352b7dcbee75312fcb915668fba236->enter($__internal_3ea9795c6a9e580e858f090bf6f3414379352b7dcbee75312fcb915668fba236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3ea9795c6a9e580e858f090bf6f3414379352b7dcbee75312fcb915668fba236->leave($__internal_3ea9795c6a9e580e858f090bf6f3414379352b7dcbee75312fcb915668fba236_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
