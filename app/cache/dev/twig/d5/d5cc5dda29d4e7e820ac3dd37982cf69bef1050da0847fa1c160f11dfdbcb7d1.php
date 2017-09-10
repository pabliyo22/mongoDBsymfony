<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7c3d49febdab8c2d450f4ecbd247552b1d74922bb4cfe1113b0e4ac807a3f941 extends Twig_Template
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
        $__internal_d5ffd6e0489d59ff4b2c487cb6690a7ffa6fefc46b323ea49e095425d894d462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ffd6e0489d59ff4b2c487cb6690a7ffa6fefc46b323ea49e095425d894d462->enter($__internal_d5ffd6e0489d59ff4b2c487cb6690a7ffa6fefc46b323ea49e095425d894d462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d5ffd6e0489d59ff4b2c487cb6690a7ffa6fefc46b323ea49e095425d894d462->leave($__internal_d5ffd6e0489d59ff4b2c487cb6690a7ffa6fefc46b323ea49e095425d894d462_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
