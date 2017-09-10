<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_6e40f39177e341d011d36a3637a4a7ef270c4f6b4fbe83e119326ec9293f6152 extends Twig_Template
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
        $__internal_a029cadeed9e63b59d699847eb9164d98c58ab35fa4d5a4d985f44a09f995dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a029cadeed9e63b59d699847eb9164d98c58ab35fa4d5a4d985f44a09f995dfc->enter($__internal_a029cadeed9e63b59d699847eb9164d98c58ab35fa4d5a4d985f44a09f995dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a029cadeed9e63b59d699847eb9164d98c58ab35fa4d5a4d985f44a09f995dfc->leave($__internal_a029cadeed9e63b59d699847eb9164d98c58ab35fa4d5a4d985f44a09f995dfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
