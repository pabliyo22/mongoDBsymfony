<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c35a5c642ba58b2f1a2b46ca0ee4329f0340911432e643efcf3a631c0127c792 extends Twig_Template
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
        $__internal_1cdf8a0ff4d0c48a159f6065c3f8ecb74e130972c2f8851e79c4caffce315420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdf8a0ff4d0c48a159f6065c3f8ecb74e130972c2f8851e79c4caffce315420->enter($__internal_1cdf8a0ff4d0c48a159f6065c3f8ecb74e130972c2f8851e79c4caffce315420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1cdf8a0ff4d0c48a159f6065c3f8ecb74e130972c2f8851e79c4caffce315420->leave($__internal_1cdf8a0ff4d0c48a159f6065c3f8ecb74e130972c2f8851e79c4caffce315420_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/mongoDBsymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
