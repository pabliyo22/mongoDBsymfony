<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2f4ca5223a6fdf89f464fdbd7994fcd3d204115ac683076dee1760175ef10227 extends Twig_Template
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
        $__internal_33d62f90d7a937de4d836d8142d66207eb9d5e31a7cef7bb7b5271e4cbdb49ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d62f90d7a937de4d836d8142d66207eb9d5e31a7cef7bb7b5271e4cbdb49ce->enter($__internal_33d62f90d7a937de4d836d8142d66207eb9d5e31a7cef7bb7b5271e4cbdb49ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_33d62f90d7a937de4d836d8142d66207eb9d5e31a7cef7bb7b5271e4cbdb49ce->leave($__internal_33d62f90d7a937de4d836d8142d66207eb9d5e31a7cef7bb7b5271e4cbdb49ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
