<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_86de811d18164d73df19ab0043a4671c9d7fe1c233e152b064b126e4854e5eec extends Twig_Template
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
        $__internal_8fdfe37262655a708b34a64c5f7071ea815886c7c65af62a4ed7a7d498d71130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdfe37262655a708b34a64c5f7071ea815886c7c65af62a4ed7a7d498d71130->enter($__internal_8fdfe37262655a708b34a64c5f7071ea815886c7c65af62a4ed7a7d498d71130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8fdfe37262655a708b34a64c5f7071ea815886c7c65af62a4ed7a7d498d71130->leave($__internal_8fdfe37262655a708b34a64c5f7071ea815886c7c65af62a4ed7a7d498d71130_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
