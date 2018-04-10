<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_2b1144293adc771ecf5aa18eefa7e262cf2509790f0209ba1e14f8e481debbc8 extends Twig_Template
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
        $__internal_25f639ce2410e68e19d6a9437b3f0bfc55106dc6814e8a34e111753032be3984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f639ce2410e68e19d6a9437b3f0bfc55106dc6814e8a34e111753032be3984->enter($__internal_25f639ce2410e68e19d6a9437b3f0bfc55106dc6814e8a34e111753032be3984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null))));
        echo "
";
        
        $__internal_25f639ce2410e68e19d6a9437b3f0bfc55106dc6814e8a34e111753032be3984->leave($__internal_25f639ce2410e68e19d6a9437b3f0bfc55106dc6814e8a34e111753032be3984_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "@Twig/Exception/error.json.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
