<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b566147dea9b8e69a2a6a88c60896cd7b4cc1ec6127806791fa83f5a5bee4010 extends Twig_Template
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
        $__internal_2de0551b7f26bd9d2428d32271b99d33a25992d9bf86c7b43d5dd43557965c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de0551b7f26bd9d2428d32271b99d33a25992d9bf86c7b43d5dd43557965c14->enter($__internal_2de0551b7f26bd9d2428d32271b99d33a25992d9bf86c7b43d5dd43557965c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2de0551b7f26bd9d2428d32271b99d33a25992d9bf86c7b43d5dd43557965c14->leave($__internal_2de0551b7f26bd9d2428d32271b99d33a25992d9bf86c7b43d5dd43557965c14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
