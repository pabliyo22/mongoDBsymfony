<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_cc12298ae38a72e608094aabc94be891da8578c7a0681eca330096ca21d4d3ef extends Twig_Template
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
        $__internal_f888bf95f668100e589de604fe6ee9f934792c4fea484b71872a06c0614b4835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f888bf95f668100e589de604fe6ee9f934792c4fea484b71872a06c0614b4835->enter($__internal_f888bf95f668100e589de604fe6ee9f934792c4fea484b71872a06c0614b4835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f888bf95f668100e589de604fe6ee9f934792c4fea484b71872a06c0614b4835->leave($__internal_f888bf95f668100e589de604fe6ee9f934792c4fea484b71872a06c0614b4835_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
