<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7f9b362d18b34818a71b922d0cca14dca11e0ebb5dd2f1ecd6ba22fd2fe7c0a1 extends Twig_Template
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
        $__internal_93a465618bf95258b6f9c950a607e2560189723ddc4fb86811c408b0bb227352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a465618bf95258b6f9c950a607e2560189723ddc4fb86811c408b0bb227352->enter($__internal_93a465618bf95258b6f9c950a607e2560189723ddc4fb86811c408b0bb227352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_93a465618bf95258b6f9c950a607e2560189723ddc4fb86811c408b0bb227352->leave($__internal_93a465618bf95258b6f9c950a607e2560189723ddc4fb86811c408b0bb227352_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
