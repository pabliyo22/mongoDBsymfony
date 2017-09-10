<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4ef9243e5a556537ae2aadc6a8c8f4e5e99ce243f819e2fbf51516a5cccc9057 extends Twig_Template
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
        $__internal_c5d1d3487a61beff9ef21f96f7c5d5859eb41bccd6f7adf1dceffc9e18d47dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d1d3487a61beff9ef21f96f7c5d5859eb41bccd6f7adf1dceffc9e18d47dde->enter($__internal_c5d1d3487a61beff9ef21f96f7c5d5859eb41bccd6f7adf1dceffc9e18d47dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c5d1d3487a61beff9ef21f96f7c5d5859eb41bccd6f7adf1dceffc9e18d47dde->leave($__internal_c5d1d3487a61beff9ef21f96f7c5d5859eb41bccd6f7adf1dceffc9e18d47dde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
