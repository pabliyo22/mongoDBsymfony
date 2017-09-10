<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1372a63af391a3c349b43eeccb67b7db23d41231bbee631ff0fcf5fc45551f3e extends Twig_Template
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
        $__internal_6cd594c50a7e2e7246c95b671c1033951f100634323f10107e21c39ddfa5885d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd594c50a7e2e7246c95b671c1033951f100634323f10107e21c39ddfa5885d->enter($__internal_6cd594c50a7e2e7246c95b671c1033951f100634323f10107e21c39ddfa5885d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6cd594c50a7e2e7246c95b671c1033951f100634323f10107e21c39ddfa5885d->leave($__internal_6cd594c50a7e2e7246c95b671c1033951f100634323f10107e21c39ddfa5885d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
