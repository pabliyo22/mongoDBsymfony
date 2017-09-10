<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d88f2ab3de024c697028cdb045b62eb3b10dbe1699921733506574a12f8cc4cd extends Twig_Template
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
        $__internal_4990dba735f93c92d14c1b43fc14f7f0b736eb1f866aec88962bfcb9e8e5d4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4990dba735f93c92d14c1b43fc14f7f0b736eb1f866aec88962bfcb9e8e5d4ee->enter($__internal_4990dba735f93c92d14c1b43fc14f7f0b736eb1f866aec88962bfcb9e8e5d4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4990dba735f93c92d14c1b43fc14f7f0b736eb1f866aec88962bfcb9e8e5d4ee->leave($__internal_4990dba735f93c92d14c1b43fc14f7f0b736eb1f866aec88962bfcb9e8e5d4ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
