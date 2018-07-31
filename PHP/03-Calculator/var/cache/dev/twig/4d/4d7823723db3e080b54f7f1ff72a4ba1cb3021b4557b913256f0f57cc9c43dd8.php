<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_99b2a225cb70aa4a8d48984f92fa0c34ec0fea32a96ff1e63d94ed7465a2ded8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_089300b37e4fa8533b675f30147d02ffeb132a7be333774a8203e525567f4967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089300b37e4fa8533b675f30147d02ffeb132a7be333774a8203e525567f4967->enter($__internal_089300b37e4fa8533b675f30147d02ffeb132a7be333774a8203e525567f4967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8e0a386e7c7cb7d95b883ec927c39d98f1e3facdbfd68547825160b17ccca4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0a386e7c7cb7d95b883ec927c39d98f1e3facdbfd68547825160b17ccca4b8->enter($__internal_8e0a386e7c7cb7d95b883ec927c39d98f1e3facdbfd68547825160b17ccca4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_089300b37e4fa8533b675f30147d02ffeb132a7be333774a8203e525567f4967->leave($__internal_089300b37e4fa8533b675f30147d02ffeb132a7be333774a8203e525567f4967_prof);

        
        $__internal_8e0a386e7c7cb7d95b883ec927c39d98f1e3facdbfd68547825160b17ccca4b8->leave($__internal_8e0a386e7c7cb7d95b883ec927c39d98f1e3facdbfd68547825160b17ccca4b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1eed9d88af0ddb5db4c621454f64d5112bdb7625190a4de5c7e857cb2b8d5d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1eed9d88af0ddb5db4c621454f64d5112bdb7625190a4de5c7e857cb2b8d5d3->enter($__internal_d1eed9d88af0ddb5db4c621454f64d5112bdb7625190a4de5c7e857cb2b8d5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91f2063abe19d371a2ca7ddec138fa67e958fb502af4cb97a52e04814ef22e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f2063abe19d371a2ca7ddec138fa67e958fb502af4cb97a52e04814ef22e42->enter($__internal_91f2063abe19d371a2ca7ddec138fa67e958fb502af4cb97a52e04814ef22e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_91f2063abe19d371a2ca7ddec138fa67e958fb502af4cb97a52e04814ef22e42->leave($__internal_91f2063abe19d371a2ca7ddec138fa67e958fb502af4cb97a52e04814ef22e42_prof);

        
        $__internal_d1eed9d88af0ddb5db4c621454f64d5112bdb7625190a4de5c7e857cb2b8d5d3->leave($__internal_d1eed9d88af0ddb5db4c621454f64d5112bdb7625190a4de5c7e857cb2b8d5d3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_266f66f0045ad435b78204cf7a47af65941f57601d1ab3c311fc64f399ab9f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266f66f0045ad435b78204cf7a47af65941f57601d1ab3c311fc64f399ab9f87->enter($__internal_266f66f0045ad435b78204cf7a47af65941f57601d1ab3c311fc64f399ab9f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_99550d90957950655ac378544329067016e802c4b8a1c637727b08dd4832a677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99550d90957950655ac378544329067016e802c4b8a1c637727b08dd4832a677->enter($__internal_99550d90957950655ac378544329067016e802c4b8a1c637727b08dd4832a677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_99550d90957950655ac378544329067016e802c4b8a1c637727b08dd4832a677->leave($__internal_99550d90957950655ac378544329067016e802c4b8a1c637727b08dd4832a677_prof);

        
        $__internal_266f66f0045ad435b78204cf7a47af65941f57601d1ab3c311fc64f399ab9f87->leave($__internal_266f66f0045ad435b78204cf7a47af65941f57601d1ab3c311fc64f399ab9f87_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f527891189e7659806cb9401338b9cd712850728da7f1d14ed64e8f649de2d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f527891189e7659806cb9401338b9cd712850728da7f1d14ed64e8f649de2d37->enter($__internal_f527891189e7659806cb9401338b9cd712850728da7f1d14ed64e8f649de2d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2abfc4130791748c860b1a8aadca1c8a14f141fe2c1b90fdffba3985914b028b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abfc4130791748c860b1a8aadca1c8a14f141fe2c1b90fdffba3985914b028b->enter($__internal_2abfc4130791748c860b1a8aadca1c8a14f141fe2c1b90fdffba3985914b028b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2abfc4130791748c860b1a8aadca1c8a14f141fe2c1b90fdffba3985914b028b->leave($__internal_2abfc4130791748c860b1a8aadca1c8a14f141fe2c1b90fdffba3985914b028b_prof);

        
        $__internal_f527891189e7659806cb9401338b9cd712850728da7f1d14ed64e8f649de2d37->leave($__internal_f527891189e7659806cb9401338b9cd712850728da7f1d14ed64e8f649de2d37_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Projects\\SoftUni\\Tech-Module\\Software-Technologies\\PHP\\03-Calculator\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
