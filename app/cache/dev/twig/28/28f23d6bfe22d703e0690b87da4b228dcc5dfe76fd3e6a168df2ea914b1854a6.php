<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_bc3e89d797a3702c83a682ac4827660030c27b123408e0c644f229aa810f1bd2 extends Twig_Template
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
        $__internal_ba3ec928c89d2b190b48d92a3618e784c721e13a054ead7251df953e235e46be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3ec928c89d2b190b48d92a3618e784c721e13a054ead7251df953e235e46be->enter($__internal_ba3ec928c89d2b190b48d92a3618e784c721e13a054ead7251df953e235e46be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ba3ec928c89d2b190b48d92a3618e784c721e13a054ead7251df953e235e46be->leave($__internal_ba3ec928c89d2b190b48d92a3618e784c721e13a054ead7251df953e235e46be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
