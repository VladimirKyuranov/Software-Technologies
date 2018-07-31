<?php

/* calculator/index.html.twig */
class __TwigTemplate_b42e924e868d0e0b9f6a10cc5a0a44b7692ae2bf5cece60b210ba163eb491645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "calculator/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b968a204e2e211e6ad928044b5774eba9192a59cd9a9f02a8857417fcb52bb56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b968a204e2e211e6ad928044b5774eba9192a59cd9a9f02a8857417fcb52bb56->enter($__internal_b968a204e2e211e6ad928044b5774eba9192a59cd9a9f02a8857417fcb52bb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calculator/index.html.twig"));

        $__internal_fbe7e92e6b4163aeaaf4205e59b30d6808ebd75923e3cacf6b5d7749194c96ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe7e92e6b4163aeaaf4205e59b30d6808ebd75923e3cacf6b5d7749194c96ea->enter($__internal_fbe7e92e6b4163aeaaf4205e59b30d6808ebd75923e3cacf6b5d7749194c96ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calculator/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b968a204e2e211e6ad928044b5774eba9192a59cd9a9f02a8857417fcb52bb56->leave($__internal_b968a204e2e211e6ad928044b5774eba9192a59cd9a9f02a8857417fcb52bb56_prof);

        
        $__internal_fbe7e92e6b4163aeaaf4205e59b30d6808ebd75923e3cacf6b5d7749194c96ea->leave($__internal_fbe7e92e6b4163aeaaf4205e59b30d6808ebd75923e3cacf6b5d7749194c96ea_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a313ff93052fca7b90d4dfd6ee0faf1e5b8dde89b8105de3394683af84a2ff16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a313ff93052fca7b90d4dfd6ee0faf1e5b8dde89b8105de3394683af84a2ff16->enter($__internal_a313ff93052fca7b90d4dfd6ee0faf1e5b8dde89b8105de3394683af84a2ff16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a373cbfd5e557bf9f0f0461076f040d96aaaa33f0e0c39ec357a77df64c0f074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a373cbfd5e557bf9f0f0461076f040d96aaaa33f0e0c39ec357a77df64c0f074->enter($__internal_a373cbfd5e557bf9f0f0461076f040d96aaaa33f0e0c39ec357a77df64c0f074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-inline\" action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" method=\"POST\">
                <fieldset>
                    <div class=\"form-group\">
                        <div class=\"col-sm-1 \">
                            <input type=\"number\" step=\"any\" class=\"form-control\" id=\"leftOperand\" placeholder=\"Left Operand\"
                                   name=\"calculator[leftOperand]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["calculator"] ?? null), "leftOperand", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["calculator"] ?? null), "leftOperand", array())))) ? ($this->getAttribute(($context["calculator"] ?? null), "leftOperand", array())) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[operator]\">
                                <option value=\"+\" ";
        // line 18
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute(($context["calculator"] ?? $this->getContext($context, "calculator")), "operator", array()) == "+"))) ? ("selected") : (""));
        echo ">+</option>
                                <option value=\"-\" ";
        // line 19
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute(($context["calculator"] ?? $this->getContext($context, "calculator")), "operator", array()) == "-"))) ? ("selected") : (""));
        echo ">-</option>
                                <option value=\"*\" ";
        // line 20
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute(($context["calculator"] ?? $this->getContext($context, "calculator")), "operator", array()) == "*"))) ? ("selected") : (""));
        echo ">*</option>
                                <option value=\"/\" ";
        // line 21
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute(($context["calculator"] ?? $this->getContext($context, "calculator")), "operator", array()) == "/"))) ? ("selected") : (""));
        echo ">/</option>
                                <option value=\"^\" ";
        // line 22
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute(($context["calculator"] ?? $this->getContext($context, "calculator")), "operator", array()) == "^"))) ? ("selected") : (""));
        echo ">^</option>
                                <option value=\"%\" ";
        // line 23
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute(($context["calculator"] ?? $this->getContext($context, "calculator")), "operator", array()) == "%"))) ? ("selected") : (""));
        echo ">%</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"number\" step=\"any\" class=\"form-control\" id=\"rightOperand\" placeholder=\"Right Operand\"
                                   name=\"calculator[rightOperand]\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["calculator"] ?? null), "rightOperand", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["calculator"] ?? null), "rightOperand", array())))) ? ($this->getAttribute(($context["calculator"] ?? null), "rightOperand", array())) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-2 \">
                            <p>=</p>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input readonly=\"true\" type=\"text\"  class=\"form-control\" id=\"result\" placeholder=\"Result\"
                                   name=\"result\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (($context["result"]) ?? ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">Calculate</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_a373cbfd5e557bf9f0f0461076f040d96aaaa33f0e0c39ec357a77df64c0f074->leave($__internal_a373cbfd5e557bf9f0f0461076f040d96aaaa33f0e0c39ec357a77df64c0f074_prof);

        
        $__internal_a313ff93052fca7b90d4dfd6ee0faf1e5b8dde89b8105de3394683af84a2ff16->leave($__internal_a313ff93052fca7b90d4dfd6ee0faf1e5b8dde89b8105de3394683af84a2ff16_prof);

    }

    public function getTemplateName()
    {
        return "calculator/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  102 => 31,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-inline\" action=\"{{ path('index') }}\" method=\"POST\">
                <fieldset>
                    <div class=\"form-group\">
                        <div class=\"col-sm-1 \">
                            <input type=\"number\" step=\"any\" class=\"form-control\" id=\"leftOperand\" placeholder=\"Left Operand\"
                                   name=\"calculator[leftOperand]\" value=\"{{ calculator.leftOperand ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[operator]\">
                                <option value=\"+\" {{ calculator is defined and calculator.operator == '+' ? 'selected' : '' }}>+</option>
                                <option value=\"-\" {{ calculator is defined and calculator.operator == '-' ? 'selected' : '' }}>-</option>
                                <option value=\"*\" {{ calculator is defined and calculator.operator == '*' ? 'selected' : '' }}>*</option>
                                <option value=\"/\" {{ calculator is defined and calculator.operator == '/' ? 'selected' : '' }}>/</option>
                                <option value=\"^\" {{ calculator is defined and calculator.operator == '^' ? 'selected' : '' }}>^</option>
                                <option value=\"%\" {{ calculator is defined and calculator.operator == '%' ? 'selected' : '' }}>%</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"number\" step=\"any\" class=\"form-control\" id=\"rightOperand\" placeholder=\"Right Operand\"
                                   name=\"calculator[rightOperand]\" value=\"{{ calculator.rightOperand ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-2 \">
                            <p>=</p>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input readonly=\"true\" type=\"text\"  class=\"form-control\" id=\"result\" placeholder=\"Result\"
                                   name=\"result\" value=\"{{ result ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">Calculate</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}
", "calculator/index.html.twig", "C:\\Projects\\SoftUni\\Tech-Module\\Software-Technologies\\PHP\\03-Calculator\\app\\Resources\\views\\calculator\\index.html.twig");
    }
}
