<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_26edaa6cafb663dfbf2ed768746307f802605d334f62af5a6388e555921a8c39 extends Twig_Template
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
        $__internal_313d043b2b86e839a3d81ed3f83215efcfe115913af1f628e6f963ee4c3e23c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313d043b2b86e839a3d81ed3f83215efcfe115913af1f628e6f963ee4c3e23c0->enter($__internal_313d043b2b86e839a3d81ed3f83215efcfe115913af1f628e6f963ee4c3e23c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_313d043b2b86e839a3d81ed3f83215efcfe115913af1f628e6f963ee4c3e23c0->leave($__internal_313d043b2b86e839a3d81ed3f83215efcfe115913af1f628e6f963ee4c3e23c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_enctype.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
