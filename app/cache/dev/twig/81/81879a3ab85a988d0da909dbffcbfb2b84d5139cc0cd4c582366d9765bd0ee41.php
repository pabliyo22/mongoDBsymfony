<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8f9e5a46e81a5ad64c8363d0de96ac23c6912fcfdc9b5d03bb7e89467276ab79 extends Twig_Template
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
        $__internal_037d928b62b3778e5faa45b66f457651ecc7c05e4974a90c6fd3e2e854eb2cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037d928b62b3778e5faa45b66f457651ecc7c05e4974a90c6fd3e2e854eb2cd6->enter($__internal_037d928b62b3778e5faa45b66f457651ecc7c05e4974a90c6fd3e2e854eb2cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_037d928b62b3778e5faa45b66f457651ecc7c05e4974a90c6fd3e2e854eb2cd6->leave($__internal_037d928b62b3778e5faa45b66f457651ecc7c05e4974a90c6fd3e2e854eb2cd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
