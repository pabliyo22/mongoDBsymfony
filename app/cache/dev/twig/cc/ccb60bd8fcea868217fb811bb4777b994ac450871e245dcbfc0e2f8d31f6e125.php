<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cdadc4c59450f3b155f995b4c8dade4ac57203416236aceaeb37191284a632d2 extends Twig_Template
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
        $__internal_26f0ad236bd0f153b076cd03eeba4521ea389541a6aaa1a2c8249c732c54ac07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f0ad236bd0f153b076cd03eeba4521ea389541a6aaa1a2c8249c732c54ac07->enter($__internal_26f0ad236bd0f153b076cd03eeba4521ea389541a6aaa1a2c8249c732c54ac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_26f0ad236bd0f153b076cd03eeba4521ea389541a6aaa1a2c8249c732c54ac07->leave($__internal_26f0ad236bd0f153b076cd03eeba4521ea389541a6aaa1a2c8249c732c54ac07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
