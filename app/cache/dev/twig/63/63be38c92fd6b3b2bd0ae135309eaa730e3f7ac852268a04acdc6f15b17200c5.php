<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5c1df90ba08bd486787eaac72a133e184defa5a689eeebfbdb784e2be3b40450 extends Twig_Template
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
        $__internal_570146783c1b4f769669faf51f0daf83a80b19c893e43613f3aa5cdbd99000ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570146783c1b4f769669faf51f0daf83a80b19c893e43613f3aa5cdbd99000ee->enter($__internal_570146783c1b4f769669faf51f0daf83a80b19c893e43613f3aa5cdbd99000ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_570146783c1b4f769669faf51f0daf83a80b19c893e43613f3aa5cdbd99000ee->leave($__internal_570146783c1b4f769669faf51f0daf83a80b19c893e43613f3aa5cdbd99000ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
