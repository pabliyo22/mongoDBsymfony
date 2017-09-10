<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_244072e4200c0dd34a956c1e99d77053cc970596f9752c20d30de8cb66a88204 extends Twig_Template
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
        $__internal_842368ede7fc6d1286a9d2945368309f0a66312c516b5eabfc01df41bf4b6caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842368ede7fc6d1286a9d2945368309f0a66312c516b5eabfc01df41bf4b6caf->enter($__internal_842368ede7fc6d1286a9d2945368309f0a66312c516b5eabfc01df41bf4b6caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_842368ede7fc6d1286a9d2945368309f0a66312c516b5eabfc01df41bf4b6caf->leave($__internal_842368ede7fc6d1286a9d2945368309f0a66312c516b5eabfc01df41bf4b6caf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
