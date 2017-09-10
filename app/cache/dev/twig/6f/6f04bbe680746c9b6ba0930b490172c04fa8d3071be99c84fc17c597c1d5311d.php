<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_41b08cff5e2d2771ffb6f47762e2dd6a79187510ae210290534e983a5bafa910 extends Twig_Template
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
        $__internal_74488db44b3f01f40d118b60db5a60f86db2ea84fddb61b6bbcc08dc0a5431e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74488db44b3f01f40d118b60db5a60f86db2ea84fddb61b6bbcc08dc0a5431e6->enter($__internal_74488db44b3f01f40d118b60db5a60f86db2ea84fddb61b6bbcc08dc0a5431e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_74488db44b3f01f40d118b60db5a60f86db2ea84fddb61b6bbcc08dc0a5431e6->leave($__internal_74488db44b3f01f40d118b60db5a60f86db2ea84fddb61b6bbcc08dc0a5431e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
