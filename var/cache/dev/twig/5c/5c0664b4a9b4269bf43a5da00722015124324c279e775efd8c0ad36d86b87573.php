<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_664205ec2e6a458a213ca86949b8ea276efc07557876c4085c867f14af9554fc extends Twig_Template
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
        $__internal_f396c3ed8aa8f9b42d3cacbfe059538a2e500383201b27b1f1c8bb0df33c485d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f396c3ed8aa8f9b42d3cacbfe059538a2e500383201b27b1f1c8bb0df33c485d->enter($__internal_f396c3ed8aa8f9b42d3cacbfe059538a2e500383201b27b1f1c8bb0df33c485d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f396c3ed8aa8f9b42d3cacbfe059538a2e500383201b27b1f1c8bb0df33c485d->leave($__internal_f396c3ed8aa8f9b42d3cacbfe059538a2e500383201b27b1f1c8bb0df33c485d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("", "@Framework/FormTable/button_row.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
