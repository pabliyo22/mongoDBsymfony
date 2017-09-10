<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c2baf799537509e509d0d42fcb5196b0303e73c22e4c7b5a4aeac85a4a2c30ce extends Twig_Template
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
        $__internal_f709dcec0d743cbc45769ea6a4653cc91b3b15ed24650c80291f8758775e0e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f709dcec0d743cbc45769ea6a4653cc91b3b15ed24650c80291f8758775e0e1d->enter($__internal_f709dcec0d743cbc45769ea6a4653cc91b3b15ed24650c80291f8758775e0e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f709dcec0d743cbc45769ea6a4653cc91b3b15ed24650c80291f8758775e0e1d->leave($__internal_f709dcec0d743cbc45769ea6a4653cc91b3b15ed24650c80291f8758775e0e1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
