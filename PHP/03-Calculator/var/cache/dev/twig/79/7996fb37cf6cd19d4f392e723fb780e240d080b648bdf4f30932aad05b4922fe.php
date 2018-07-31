<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b85f29821be27aa8b1bc98519436461388017d9d368062ef3d8575c22bceff2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f298fcbdc6de108026141934a625817e0f8a6d935bb1845ebc9a68bd96ac14c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f298fcbdc6de108026141934a625817e0f8a6d935bb1845ebc9a68bd96ac14c->enter($__internal_4f298fcbdc6de108026141934a625817e0f8a6d935bb1845ebc9a68bd96ac14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_faa161382be197808aecf23b37df5fa1f39e1f55a370c6068aa813e90e4ec0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa161382be197808aecf23b37df5fa1f39e1f55a370c6068aa813e90e4ec0e5->enter($__internal_faa161382be197808aecf23b37df5fa1f39e1f55a370c6068aa813e90e4ec0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f298fcbdc6de108026141934a625817e0f8a6d935bb1845ebc9a68bd96ac14c->leave($__internal_4f298fcbdc6de108026141934a625817e0f8a6d935bb1845ebc9a68bd96ac14c_prof);

        
        $__internal_faa161382be197808aecf23b37df5fa1f39e1f55a370c6068aa813e90e4ec0e5->leave($__internal_faa161382be197808aecf23b37df5fa1f39e1f55a370c6068aa813e90e4ec0e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b5eed4d9b92b9190e71d5712e1978049c56dc70fa0812f2f144ebb7d497923d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5eed4d9b92b9190e71d5712e1978049c56dc70fa0812f2f144ebb7d497923d->enter($__internal_9b5eed4d9b92b9190e71d5712e1978049c56dc70fa0812f2f144ebb7d497923d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_603440b57730a42d914b0bff04df8cacade0d3d11d4466d1e54138aa476b46d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603440b57730a42d914b0bff04df8cacade0d3d11d4466d1e54138aa476b46d8->enter($__internal_603440b57730a42d914b0bff04df8cacade0d3d11d4466d1e54138aa476b46d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_603440b57730a42d914b0bff04df8cacade0d3d11d4466d1e54138aa476b46d8->leave($__internal_603440b57730a42d914b0bff04df8cacade0d3d11d4466d1e54138aa476b46d8_prof);

        
        $__internal_9b5eed4d9b92b9190e71d5712e1978049c56dc70fa0812f2f144ebb7d497923d->leave($__internal_9b5eed4d9b92b9190e71d5712e1978049c56dc70fa0812f2f144ebb7d497923d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Projects\\SoftUni\\Tech-Module\\Software-Technologies\\PHP\\03-Calculator\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
