<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2b3ea973ca3e66dd8ba2d7a102cb4a1ad6a178fa2a4ec95fd61168c1b226d603 extends Twig_Template
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
        $__internal_2c0c6c832c3ecc324319cea17c2768a37d4747c080e5f3f64ec7f7afe8917e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0c6c832c3ecc324319cea17c2768a37d4747c080e5f3f64ec7f7afe8917e90->enter($__internal_2c0c6c832c3ecc324319cea17c2768a37d4747c080e5f3f64ec7f7afe8917e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2c0c6c832c3ecc324319cea17c2768a37d4747c080e5f3f64ec7f7afe8917e90->leave($__internal_2c0c6c832c3ecc324319cea17c2768a37d4747c080e5f3f64ec7f7afe8917e90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
