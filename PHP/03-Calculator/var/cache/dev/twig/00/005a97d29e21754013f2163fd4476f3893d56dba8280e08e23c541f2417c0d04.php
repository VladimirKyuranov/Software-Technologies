<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1cf66b964a69d016bebc0e01e77496660677c0f046a3ea2b3576225e46ebb51c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6487c731e03ef0f83c399b7e0f68a28d04b7b7bcaeccf3510af39359a646b5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6487c731e03ef0f83c399b7e0f68a28d04b7b7bcaeccf3510af39359a646b5d8->enter($__internal_6487c731e03ef0f83c399b7e0f68a28d04b7b7bcaeccf3510af39359a646b5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dea70b4881a3c0ef2eba8fe1fb64bf4cf9a1ac1b7fa968b0e6230ca33abd93e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea70b4881a3c0ef2eba8fe1fb64bf4cf9a1ac1b7fa968b0e6230ca33abd93e7->enter($__internal_dea70b4881a3c0ef2eba8fe1fb64bf4cf9a1ac1b7fa968b0e6230ca33abd93e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6487c731e03ef0f83c399b7e0f68a28d04b7b7bcaeccf3510af39359a646b5d8->leave($__internal_6487c731e03ef0f83c399b7e0f68a28d04b7b7bcaeccf3510af39359a646b5d8_prof);

        
        $__internal_dea70b4881a3c0ef2eba8fe1fb64bf4cf9a1ac1b7fa968b0e6230ca33abd93e7->leave($__internal_dea70b4881a3c0ef2eba8fe1fb64bf4cf9a1ac1b7fa968b0e6230ca33abd93e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_589667b0da0aa418832652062fc38928cd51b59c876bdf8219a17041c5c0f032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589667b0da0aa418832652062fc38928cd51b59c876bdf8219a17041c5c0f032->enter($__internal_589667b0da0aa418832652062fc38928cd51b59c876bdf8219a17041c5c0f032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee29cb1651fe9ad85fd4851b95684e760173d609745455e44fee15730e43a452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee29cb1651fe9ad85fd4851b95684e760173d609745455e44fee15730e43a452->enter($__internal_ee29cb1651fe9ad85fd4851b95684e760173d609745455e44fee15730e43a452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ee29cb1651fe9ad85fd4851b95684e760173d609745455e44fee15730e43a452->leave($__internal_ee29cb1651fe9ad85fd4851b95684e760173d609745455e44fee15730e43a452_prof);

        
        $__internal_589667b0da0aa418832652062fc38928cd51b59c876bdf8219a17041c5c0f032->leave($__internal_589667b0da0aa418832652062fc38928cd51b59c876bdf8219a17041c5c0f032_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_414137b6bab6c0284608e5798b40932a53999d060133299be828a6b0c3216af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414137b6bab6c0284608e5798b40932a53999d060133299be828a6b0c3216af0->enter($__internal_414137b6bab6c0284608e5798b40932a53999d060133299be828a6b0c3216af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f74531a04314c736d2fba2e16698c2394e821abdde16f21409e271fb59dc02c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74531a04314c736d2fba2e16698c2394e821abdde16f21409e271fb59dc02c1->enter($__internal_f74531a04314c736d2fba2e16698c2394e821abdde16f21409e271fb59dc02c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f74531a04314c736d2fba2e16698c2394e821abdde16f21409e271fb59dc02c1->leave($__internal_f74531a04314c736d2fba2e16698c2394e821abdde16f21409e271fb59dc02c1_prof);

        
        $__internal_414137b6bab6c0284608e5798b40932a53999d060133299be828a6b0c3216af0->leave($__internal_414137b6bab6c0284608e5798b40932a53999d060133299be828a6b0c3216af0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b9ebf88c3d87cc8f91bb77c8549a631d532e95b9c880061410731a499ecd3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9ebf88c3d87cc8f91bb77c8549a631d532e95b9c880061410731a499ecd3c6->enter($__internal_2b9ebf88c3d87cc8f91bb77c8549a631d532e95b9c880061410731a499ecd3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34e8e96ed6f9a0759289fd67ad9d44a96f832310b318d5b8da7f4d24fffdf24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e8e96ed6f9a0759289fd67ad9d44a96f832310b318d5b8da7f4d24fffdf24c->enter($__internal_34e8e96ed6f9a0759289fd67ad9d44a96f832310b318d5b8da7f4d24fffdf24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_34e8e96ed6f9a0759289fd67ad9d44a96f832310b318d5b8da7f4d24fffdf24c->leave($__internal_34e8e96ed6f9a0759289fd67ad9d44a96f832310b318d5b8da7f4d24fffdf24c_prof);

        
        $__internal_2b9ebf88c3d87cc8f91bb77c8549a631d532e95b9c880061410731a499ecd3c6->leave($__internal_2b9ebf88c3d87cc8f91bb77c8549a631d532e95b9c880061410731a499ecd3c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Projects\\SoftUni\\Tech-Module\\Software-Technologies\\PHP\\03-Calculator\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
