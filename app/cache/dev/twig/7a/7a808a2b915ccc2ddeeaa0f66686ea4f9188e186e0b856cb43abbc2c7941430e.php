<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_4669b9fee3689abb0ca9df906f0f29832c120e1d7ac97251582457b9eb553c6f extends Twig_Template
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
        $__internal_46c5d3a87295180f848b0b5ba4e43d5b78fdfc3e380eccd6b908670e2df650be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c5d3a87295180f848b0b5ba4e43d5b78fdfc3e380eccd6b908670e2df650be->enter($__internal_46c5d3a87295180f848b0b5ba4e43d5b78fdfc3e380eccd6b908670e2df650be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_46c5d3a87295180f848b0b5ba4e43d5b78fdfc3e380eccd6b908670e2df650be->leave($__internal_46c5d3a87295180f848b0b5ba4e43d5b78fdfc3e380eccd6b908670e2df650be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
