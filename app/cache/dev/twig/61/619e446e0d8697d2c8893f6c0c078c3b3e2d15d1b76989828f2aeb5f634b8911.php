<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3125ab7a79c8c4a0863f03b2e6cf599f5747bcc57f5b8cf435139533d53e3127 extends Twig_Template
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
        $__internal_f7d5be08021975aaf93ed3f68524220b91419d7d4a4c8be30837c56365d49244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d5be08021975aaf93ed3f68524220b91419d7d4a4c8be30837c56365d49244->enter($__internal_f7d5be08021975aaf93ed3f68524220b91419d7d4a4c8be30837c56365d49244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f7d5be08021975aaf93ed3f68524220b91419d7d4a4c8be30837c56365d49244->leave($__internal_f7d5be08021975aaf93ed3f68524220b91419d7d4a4c8be30837c56365d49244_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
