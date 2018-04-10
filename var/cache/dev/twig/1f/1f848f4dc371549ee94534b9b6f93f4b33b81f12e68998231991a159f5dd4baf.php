<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_89598db8c4b56881cfd0b1a79ebc05a397093ade01e810866674a11eb6f70e28 extends Twig_Template
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
        $__internal_67e1f0c737a3d4c5517144215db590d82f61ea55525bd287448a7d8612b8e3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e1f0c737a3d4c5517144215db590d82f61ea55525bd287448a7d8612b8e3b1->enter($__internal_67e1f0c737a3d4c5517144215db590d82f61ea55525bd287448a7d8612b8e3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_67e1f0c737a3d4c5517144215db590d82f61ea55525bd287448a7d8612b8e3b1->leave($__internal_67e1f0c737a3d4c5517144215db590d82f61ea55525bd287448a7d8612b8e3b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_errors.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
