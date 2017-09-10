<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_13b0d88aae725bef4649e0cc22936b7105b432ad808295b2a137273df878d87f extends Twig_Template
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
        $__internal_44bc971401e97c8ca9a23f2ff9ce3a8b1beabaea74c0ffc98d93b70f0dceab02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bc971401e97c8ca9a23f2ff9ce3a8b1beabaea74c0ffc98d93b70f0dceab02->enter($__internal_44bc971401e97c8ca9a23f2ff9ce3a8b1beabaea74c0ffc98d93b70f0dceab02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_44bc971401e97c8ca9a23f2ff9ce3a8b1beabaea74c0ffc98d93b70f0dceab02->leave($__internal_44bc971401e97c8ca9a23f2ff9ce3a8b1beabaea74c0ffc98d93b70f0dceab02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
