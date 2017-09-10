<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7433cf9b144fd3256c7292d4adc0fd644b67d5a5efc10a6e09ccd5581710b90d extends Twig_Template
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
        $__internal_6ac755925c2db49f3702e1d31c26d3078cdbe6a6e89254172a465ffa01bed694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac755925c2db49f3702e1d31c26d3078cdbe6a6e89254172a465ffa01bed694->enter($__internal_6ac755925c2db49f3702e1d31c26d3078cdbe6a6e89254172a465ffa01bed694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6ac755925c2db49f3702e1d31c26d3078cdbe6a6e89254172a465ffa01bed694->leave($__internal_6ac755925c2db49f3702e1d31c26d3078cdbe6a6e89254172a465ffa01bed694_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
