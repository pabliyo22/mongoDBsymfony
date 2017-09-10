<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_681d32c15bfe5318aa1e8c43b386fe622b3928331013fc94e7b90e9315c943fb extends Twig_Template
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
        $__internal_f4051ceb82513d524a548ed5cd9b011231eb7a7b13df09132acb05b82ea0a13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4051ceb82513d524a548ed5cd9b011231eb7a7b13df09132acb05b82ea0a13d->enter($__internal_f4051ceb82513d524a548ed5cd9b011231eb7a7b13df09132acb05b82ea0a13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f4051ceb82513d524a548ed5cd9b011231eb7a7b13df09132acb05b82ea0a13d->leave($__internal_f4051ceb82513d524a548ed5cd9b011231eb7a7b13df09132acb05b82ea0a13d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
