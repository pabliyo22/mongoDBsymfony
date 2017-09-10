<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_283f99baabeefa094d90ccf7853375ea5a76cf31d38a10f610dd250de8c15a69 extends Twig_Template
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
        $__internal_a71f8496ddbaec531b00efaf98c4e9986c85108b567dbe69bb960289b9329abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71f8496ddbaec531b00efaf98c4e9986c85108b567dbe69bb960289b9329abd->enter($__internal_a71f8496ddbaec531b00efaf98c4e9986c85108b567dbe69bb960289b9329abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a71f8496ddbaec531b00efaf98c4e9986c85108b567dbe69bb960289b9329abd->leave($__internal_a71f8496ddbaec531b00efaf98c4e9986c85108b567dbe69bb960289b9329abd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
