<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_112b3fdcfe28ec3f2682ca0b8c3e95f14d678f9a537d4b9dcd9e257ca6c90c95 extends Twig_Template
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
        $__internal_d2d7cd43fe0ecc99277037808f6e9c6cc5889e5de7ef96d0fabf9a0b9b39fff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d7cd43fe0ecc99277037808f6e9c6cc5889e5de7ef96d0fabf9a0b9b39fff6->enter($__internal_d2d7cd43fe0ecc99277037808f6e9c6cc5889e5de7ef96d0fabf9a0b9b39fff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d2d7cd43fe0ecc99277037808f6e9c6cc5889e5de7ef96d0fabf9a0b9b39fff6->leave($__internal_d2d7cd43fe0ecc99277037808f6e9c6cc5889e5de7ef96d0fabf9a0b9b39fff6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
