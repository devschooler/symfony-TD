<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f6c4ce5d78fa4aa49f3f0dd728f064849d0953b097269ed632e6c7cf0bd4af41 extends Twig_Template
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
        $__internal_f376964904546f444b27b01d1bb455ddff311b0a8e4e4f0cbe093bbcd5fc3611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f376964904546f444b27b01d1bb455ddff311b0a8e4e4f0cbe093bbcd5fc3611->enter($__internal_f376964904546f444b27b01d1bb455ddff311b0a8e4e4f0cbe093bbcd5fc3611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_2716894830b41b5d0f5d6908e4aee90b7ce1e549681da83de089bb81018fa877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2716894830b41b5d0f5d6908e4aee90b7ce1e549681da83de089bb81018fa877->enter($__internal_2716894830b41b5d0f5d6908e4aee90b7ce1e549681da83de089bb81018fa877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f376964904546f444b27b01d1bb455ddff311b0a8e4e4f0cbe093bbcd5fc3611->leave($__internal_f376964904546f444b27b01d1bb455ddff311b0a8e4e4f0cbe093bbcd5fc3611_prof);

        
        $__internal_2716894830b41b5d0f5d6908e4aee90b7ce1e549681da83de089bb81018fa877->leave($__internal_2716894830b41b5d0f5d6908e4aee90b7ce1e549681da83de089bb81018fa877_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/MAMP/htdocs/MovieSymfo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
