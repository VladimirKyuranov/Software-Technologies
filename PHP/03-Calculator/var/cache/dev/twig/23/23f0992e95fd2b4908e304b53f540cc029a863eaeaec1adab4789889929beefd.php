<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6c39035d1a40ae30f4b8b845243d626002b8cfc7c02db88cbc04bb2f5f2d310c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ab297f038ddb87dc9f6683c0a226bb5e448537681c7321f975e6fa3c05265b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab297f038ddb87dc9f6683c0a226bb5e448537681c7321f975e6fa3c05265b0->enter($__internal_6ab297f038ddb87dc9f6683c0a226bb5e448537681c7321f975e6fa3c05265b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1fa94b6a2c24bf84e2b8b1db155987f8992562c2d21c8901ef7c6f3a62d73ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa94b6a2c24bf84e2b8b1db155987f8992562c2d21c8901ef7c6f3a62d73ff5->enter($__internal_1fa94b6a2c24bf84e2b8b1db155987f8992562c2d21c8901ef7c6f3a62d73ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6ab297f038ddb87dc9f6683c0a226bb5e448537681c7321f975e6fa3c05265b0->leave($__internal_6ab297f038ddb87dc9f6683c0a226bb5e448537681c7321f975e6fa3c05265b0_prof);

        
        $__internal_1fa94b6a2c24bf84e2b8b1db155987f8992562c2d21c8901ef7c6f3a62d73ff5->leave($__internal_1fa94b6a2c24bf84e2b8b1db155987f8992562c2d21c8901ef7c6f3a62d73ff5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa13f6881fb53acd3bd17b69b14e15dc1840a43d8ce204d52c794a8bf2bc9004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa13f6881fb53acd3bd17b69b14e15dc1840a43d8ce204d52c794a8bf2bc9004->enter($__internal_fa13f6881fb53acd3bd17b69b14e15dc1840a43d8ce204d52c794a8bf2bc9004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d54d186d63e90f704f6a05f376e2bd5d7b7af738a0deeb1c1d5b73a19347321c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54d186d63e90f704f6a05f376e2bd5d7b7af738a0deeb1c1d5b73a19347321c->enter($__internal_d54d186d63e90f704f6a05f376e2bd5d7b7af738a0deeb1c1d5b73a19347321c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d54d186d63e90f704f6a05f376e2bd5d7b7af738a0deeb1c1d5b73a19347321c->leave($__internal_d54d186d63e90f704f6a05f376e2bd5d7b7af738a0deeb1c1d5b73a19347321c_prof);

        
        $__internal_fa13f6881fb53acd3bd17b69b14e15dc1840a43d8ce204d52c794a8bf2bc9004->leave($__internal_fa13f6881fb53acd3bd17b69b14e15dc1840a43d8ce204d52c794a8bf2bc9004_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_300a6af14d8a43cefa87f6c30dc6fa3eeff60ab1838376f281e878bc5a1d3527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300a6af14d8a43cefa87f6c30dc6fa3eeff60ab1838376f281e878bc5a1d3527->enter($__internal_300a6af14d8a43cefa87f6c30dc6fa3eeff60ab1838376f281e878bc5a1d3527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec1e750627e24cf21d49b2bf1b8769214c7136b9eaedf7d71d723ab2dea338d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1e750627e24cf21d49b2bf1b8769214c7136b9eaedf7d71d723ab2dea338d3->enter($__internal_ec1e750627e24cf21d49b2bf1b8769214c7136b9eaedf7d71d723ab2dea338d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ec1e750627e24cf21d49b2bf1b8769214c7136b9eaedf7d71d723ab2dea338d3->leave($__internal_ec1e750627e24cf21d49b2bf1b8769214c7136b9eaedf7d71d723ab2dea338d3_prof);

        
        $__internal_300a6af14d8a43cefa87f6c30dc6fa3eeff60ab1838376f281e878bc5a1d3527->leave($__internal_300a6af14d8a43cefa87f6c30dc6fa3eeff60ab1838376f281e878bc5a1d3527_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_03438dcb2a1f58b21f5ff15c29c6ab8bbd629027afe1fd66377c7764e4735dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03438dcb2a1f58b21f5ff15c29c6ab8bbd629027afe1fd66377c7764e4735dfb->enter($__internal_03438dcb2a1f58b21f5ff15c29c6ab8bbd629027afe1fd66377c7764e4735dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb9e243644495ea154a5e813a70cd08a3ad0d43289ad50d45d7a4c600f0c9dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9e243644495ea154a5e813a70cd08a3ad0d43289ad50d45d7a4c600f0c9dc9->enter($__internal_cb9e243644495ea154a5e813a70cd08a3ad0d43289ad50d45d7a4c600f0c9dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cb9e243644495ea154a5e813a70cd08a3ad0d43289ad50d45d7a4c600f0c9dc9->leave($__internal_cb9e243644495ea154a5e813a70cd08a3ad0d43289ad50d45d7a4c600f0c9dc9_prof);

        
        $__internal_03438dcb2a1f58b21f5ff15c29c6ab8bbd629027afe1fd66377c7764e4735dfb->leave($__internal_03438dcb2a1f58b21f5ff15c29c6ab8bbd629027afe1fd66377c7764e4735dfb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Projects\\SoftUni\\Tech-Module\\Software-Technologies\\PHP\\03-Calculator\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
