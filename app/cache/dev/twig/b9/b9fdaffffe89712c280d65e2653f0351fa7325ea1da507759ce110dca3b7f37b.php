<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_01dc56ef4d2f126040cee667b48a22b610320bc840ef6f90ac8e86c142887a8c extends Twig_Template
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
        $__internal_9ca1676a6cd996c75886dc588eab4fbce78d3f16a0aea1ed2d92d6e09375346c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca1676a6cd996c75886dc588eab4fbce78d3f16a0aea1ed2d92d6e09375346c->enter($__internal_9ca1676a6cd996c75886dc588eab4fbce78d3f16a0aea1ed2d92d6e09375346c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9ca1676a6cd996c75886dc588eab4fbce78d3f16a0aea1ed2d92d6e09375346c->leave($__internal_9ca1676a6cd996c75886dc588eab4fbce78d3f16a0aea1ed2d92d6e09375346c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
