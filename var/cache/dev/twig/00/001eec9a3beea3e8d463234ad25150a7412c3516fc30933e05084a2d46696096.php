<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_75848719ccee194c8a0f41db8be98ee4f053ceadb95d756f78b2c526e043d1c1 extends Twig_Template
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
        $__internal_d17aab1a2e5e5de805ce3a9ddd190504304d06d5d369a0adae8c6f08c4f3ffa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17aab1a2e5e5de805ce3a9ddd190504304d06d5d369a0adae8c6f08c4f3ffa1->enter($__internal_d17aab1a2e5e5de805ce3a9ddd190504304d06d5d369a0adae8c6f08c4f3ffa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d17aab1a2e5e5de805ce3a9ddd190504304d06d5d369a0adae8c6f08c4f3ffa1->leave($__internal_d17aab1a2e5e5de805ce3a9ddd190504304d06d5d369a0adae8c6f08c4f3ffa1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_end.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
