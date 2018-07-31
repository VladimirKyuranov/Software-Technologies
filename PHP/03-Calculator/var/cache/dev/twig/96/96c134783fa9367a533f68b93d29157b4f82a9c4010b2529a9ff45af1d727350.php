<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d496044effa4cc39ce51801babe801f9942ccc5fec27a124c696ada197249fa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_73373d9083e4a28dbb67b8d86b5f7509901bb6387ffa1cb036a032e3307aaeee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73373d9083e4a28dbb67b8d86b5f7509901bb6387ffa1cb036a032e3307aaeee->enter($__internal_73373d9083e4a28dbb67b8d86b5f7509901bb6387ffa1cb036a032e3307aaeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8f6cc0d63c40399633f50e39b47f184f219a5726b5a76fa57a56f7bd17904c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6cc0d63c40399633f50e39b47f184f219a5726b5a76fa57a56f7bd17904c4d->enter($__internal_8f6cc0d63c40399633f50e39b47f184f219a5726b5a76fa57a56f7bd17904c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73373d9083e4a28dbb67b8d86b5f7509901bb6387ffa1cb036a032e3307aaeee->leave($__internal_73373d9083e4a28dbb67b8d86b5f7509901bb6387ffa1cb036a032e3307aaeee_prof);

        
        $__internal_8f6cc0d63c40399633f50e39b47f184f219a5726b5a76fa57a56f7bd17904c4d->leave($__internal_8f6cc0d63c40399633f50e39b47f184f219a5726b5a76fa57a56f7bd17904c4d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb57f87cfa2cd71c3cfd4cad39750914d8719c0ab86cc9988feac04be5f36f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb57f87cfa2cd71c3cfd4cad39750914d8719c0ab86cc9988feac04be5f36f55->enter($__internal_fb57f87cfa2cd71c3cfd4cad39750914d8719c0ab86cc9988feac04be5f36f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_46588c130c7d38d2e58d4192e40f8a2d66974d46c875ff52669000ca2b77ca48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46588c130c7d38d2e58d4192e40f8a2d66974d46c875ff52669000ca2b77ca48->enter($__internal_46588c130c7d38d2e58d4192e40f8a2d66974d46c875ff52669000ca2b77ca48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46588c130c7d38d2e58d4192e40f8a2d66974d46c875ff52669000ca2b77ca48->leave($__internal_46588c130c7d38d2e58d4192e40f8a2d66974d46c875ff52669000ca2b77ca48_prof);

        
        $__internal_fb57f87cfa2cd71c3cfd4cad39750914d8719c0ab86cc9988feac04be5f36f55->leave($__internal_fb57f87cfa2cd71c3cfd4cad39750914d8719c0ab86cc9988feac04be5f36f55_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd4ee9b600fb7fe486e681ca09d78c35990b28c04fb7385494f8faee22331d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4ee9b600fb7fe486e681ca09d78c35990b28c04fb7385494f8faee22331d55->enter($__internal_cd4ee9b600fb7fe486e681ca09d78c35990b28c04fb7385494f8faee22331d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_872acda0a14dc8dab18452f732c4099b1c87974c95b75ceb55d73f036b43e99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872acda0a14dc8dab18452f732c4099b1c87974c95b75ceb55d73f036b43e99f->enter($__internal_872acda0a14dc8dab18452f732c4099b1c87974c95b75ceb55d73f036b43e99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_872acda0a14dc8dab18452f732c4099b1c87974c95b75ceb55d73f036b43e99f->leave($__internal_872acda0a14dc8dab18452f732c4099b1c87974c95b75ceb55d73f036b43e99f_prof);

        
        $__internal_cd4ee9b600fb7fe486e681ca09d78c35990b28c04fb7385494f8faee22331d55->leave($__internal_cd4ee9b600fb7fe486e681ca09d78c35990b28c04fb7385494f8faee22331d55_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d46e9f48f22481d31f2a29caa85d1f2f056f9a1c0618371464be65f0e222dde3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46e9f48f22481d31f2a29caa85d1f2f056f9a1c0618371464be65f0e222dde3->enter($__internal_d46e9f48f22481d31f2a29caa85d1f2f056f9a1c0618371464be65f0e222dde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_02bd1f1c5dee44f2ae8823bdfd7d0d0e68512f6dc9e34bb846d8821023166cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bd1f1c5dee44f2ae8823bdfd7d0d0e68512f6dc9e34bb846d8821023166cb7->enter($__internal_02bd1f1c5dee44f2ae8823bdfd7d0d0e68512f6dc9e34bb846d8821023166cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_02bd1f1c5dee44f2ae8823bdfd7d0d0e68512f6dc9e34bb846d8821023166cb7->leave($__internal_02bd1f1c5dee44f2ae8823bdfd7d0d0e68512f6dc9e34bb846d8821023166cb7_prof);

        
        $__internal_d46e9f48f22481d31f2a29caa85d1f2f056f9a1c0618371464be65f0e222dde3->leave($__internal_d46e9f48f22481d31f2a29caa85d1f2f056f9a1c0618371464be65f0e222dde3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Projects\\SoftUni\\Tech-Module\\Software-Technologies\\PHP\\03-Calculator\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
