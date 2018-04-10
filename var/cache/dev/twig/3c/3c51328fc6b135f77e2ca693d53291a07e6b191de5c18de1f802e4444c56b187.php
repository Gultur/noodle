<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_83da57c08a7faec9b1953ddf99463d1d07c35177d18a129e82b638a89254a1f8 extends Twig_Template
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
        $__internal_6298aba8f78f0f45a430fb3bc2173f49a80486554aeffa587081fc6338035807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6298aba8f78f0f45a430fb3bc2173f49a80486554aeffa587081fc6338035807->enter($__internal_6298aba8f78f0f45a430fb3bc2173f49a80486554aeffa587081fc6338035807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6298aba8f78f0f45a430fb3bc2173f49a80486554aeffa587081fc6338035807->leave($__internal_6298aba8f78f0f45a430fb3bc2173f49a80486554aeffa587081fc6338035807_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("", "@Framework/FormTable/hidden_row.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
