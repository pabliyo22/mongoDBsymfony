<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3242b3794ed5003acb766f2e7d2c516b8d379090726edb2c3ba3af91ebcdaad1 extends Twig_Template
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
        $__internal_523ee8e2fe8aa60c518797f988cee904984b22a409ffbf51949ba1bdf77b649f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523ee8e2fe8aa60c518797f988cee904984b22a409ffbf51949ba1bdf77b649f->enter($__internal_523ee8e2fe8aa60c518797f988cee904984b22a409ffbf51949ba1bdf77b649f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_523ee8e2fe8aa60c518797f988cee904984b22a409ffbf51949ba1bdf77b649f->leave($__internal_523ee8e2fe8aa60c518797f988cee904984b22a409ffbf51949ba1bdf77b649f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
