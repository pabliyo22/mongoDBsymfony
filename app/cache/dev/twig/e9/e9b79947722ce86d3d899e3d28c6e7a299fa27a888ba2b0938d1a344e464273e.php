<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3876deaa1712460ef541c8872670f25f27a97b8ebae9e3c7400ee006ff3c7f83 extends Twig_Template
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
        $__internal_83b434aee24fb50a723f76456d94e99ec1bf3276ab3881d39a198bb4ebced5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b434aee24fb50a723f76456d94e99ec1bf3276ab3881d39a198bb4ebced5f5->enter($__internal_83b434aee24fb50a723f76456d94e99ec1bf3276ab3881d39a198bb4ebced5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_83b434aee24fb50a723f76456d94e99ec1bf3276ab3881d39a198bb4ebced5f5->leave($__internal_83b434aee24fb50a723f76456d94e99ec1bf3276ab3881d39a198bb4ebced5f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
