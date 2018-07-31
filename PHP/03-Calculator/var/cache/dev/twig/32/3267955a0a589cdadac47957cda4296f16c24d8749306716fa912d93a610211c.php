<?php

/* base.html.twig */
class __TwigTemplate_4bbe4cb00ce6f8d465c8dd6727bc2b9ec28634a7580dd9013cb65806d5629e1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2820fd1c29c8eba7a24d9bff5f9b560c7dc2aa9d7cc8031e3706bf6089732116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2820fd1c29c8eba7a24d9bff5f9b560c7dc2aa9d7cc8031e3706bf6089732116->enter($__internal_2820fd1c29c8eba7a24d9bff5f9b560c7dc2aa9d7cc8031e3706bf6089732116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_46892d37947a317f4d0085c34d0e302932bfee49f0d7ea7d5454f58fa5b8df69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46892d37947a317f4d0085c34d0e302932bfee49f0d7ea7d5454f58fa5b8df69->enter($__internal_46892d37947a317f4d0085c34d0e302932bfee49f0d7ea7d5454f58fa5b8df69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>

";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
</body>
</html>
";
        
        $__internal_2820fd1c29c8eba7a24d9bff5f9b560c7dc2aa9d7cc8031e3706bf6089732116->leave($__internal_2820fd1c29c8eba7a24d9bff5f9b560c7dc2aa9d7cc8031e3706bf6089732116_prof);

        
        $__internal_46892d37947a317f4d0085c34d0e302932bfee49f0d7ea7d5454f58fa5b8df69->leave($__internal_46892d37947a317f4d0085c34d0e302932bfee49f0d7ea7d5454f58fa5b8df69_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_b70ae522174db2780cebd43dbe1a7965590bf3423223adf91b295cd535c57966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70ae522174db2780cebd43dbe1a7965590bf3423223adf91b295cd535c57966->enter($__internal_b70ae522174db2780cebd43dbe1a7965590bf3423223adf91b295cd535c57966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fed37134d47320c9c1b1bf4e504a8a741c2def4bd0ebeb1253d55e5816b60203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed37134d47320c9c1b1bf4e504a8a741c2def4bd0ebeb1253d55e5816b60203->enter($__internal_fed37134d47320c9c1b1bf4e504a8a741c2def4bd0ebeb1253d55e5816b60203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_fed37134d47320c9c1b1bf4e504a8a741c2def4bd0ebeb1253d55e5816b60203->leave($__internal_fed37134d47320c9c1b1bf4e504a8a741c2def4bd0ebeb1253d55e5816b60203_prof);

        
        $__internal_b70ae522174db2780cebd43dbe1a7965590bf3423223adf91b295cd535c57966->leave($__internal_b70ae522174db2780cebd43dbe1a7965590bf3423223adf91b295cd535c57966_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca890893180c2665a1972af1337466c0f14ce5ccf0ecf7ac28638d34c3c56464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca890893180c2665a1972af1337466c0f14ce5ccf0ecf7ac28638d34c3c56464->enter($__internal_ca890893180c2665a1972af1337466c0f14ce5ccf0ecf7ac28638d34c3c56464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b585a4bdeefe74df85b510cb98ba24a7f6c009de021e75df5ffb1554aa019ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b585a4bdeefe74df85b510cb98ba24a7f6c009de021e75df5ffb1554aa019ab5->enter($__internal_b585a4bdeefe74df85b510cb98ba24a7f6c009de021e75df5ffb1554aa019ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_b585a4bdeefe74df85b510cb98ba24a7f6c009de021e75df5ffb1554aa019ab5->leave($__internal_b585a4bdeefe74df85b510cb98ba24a7f6c009de021e75df5ffb1554aa019ab5_prof);

        
        $__internal_ca890893180c2665a1972af1337466c0f14ce5ccf0ecf7ac28638d34c3c56464->leave($__internal_ca890893180c2665a1972af1337466c0f14ce5ccf0ecf7ac28638d34c3c56464_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8bd6df4081de7ce93cb648b4b89c741ebac16daca5843a0da355f804031f1323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd6df4081de7ce93cb648b4b89c741ebac16daca5843a0da355f804031f1323->enter($__internal_8bd6df4081de7ce93cb648b4b89c741ebac16daca5843a0da355f804031f1323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_75e6b83ab63d84fa7abc2aaf494c782bf3d531721125591d399bf4762a700290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e6b83ab63d84fa7abc2aaf494c782bf3d531721125591d399bf4762a700290->enter($__internal_75e6b83ab63d84fa7abc2aaf494c782bf3d531721125591d399bf4762a700290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_75e6b83ab63d84fa7abc2aaf494c782bf3d531721125591d399bf4762a700290->leave($__internal_75e6b83ab63d84fa7abc2aaf494c782bf3d531721125591d399bf4762a700290_prof);

        
        $__internal_8bd6df4081de7ce93cb648b4b89c741ebac16daca5843a0da355f804031f1323->leave($__internal_8bd6df4081de7ce93cb648b4b89c741ebac16daca5843a0da355f804031f1323_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_c8add857ef3ff1aceb3fb6fd5be03e4cc840b803487b4904e640536b08acd6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8add857ef3ff1aceb3fb6fd5be03e4cc840b803487b4904e640536b08acd6aa->enter($__internal_c8add857ef3ff1aceb3fb6fd5be03e4cc840b803487b4904e640536b08acd6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_1f94b5dc58e15b54c9a4cebb3820509473454057270cd809fad84cc9b1aa19b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f94b5dc58e15b54c9a4cebb3820509473454057270cd809fad84cc9b1aa19b2->enter($__internal_1f94b5dc58e15b54c9a4cebb3820509473454057270cd809fad84cc9b1aa19b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_1f94b5dc58e15b54c9a4cebb3820509473454057270cd809fad84cc9b1aa19b2->leave($__internal_1f94b5dc58e15b54c9a4cebb3820509473454057270cd809fad84cc9b1aa19b2_prof);

        
        $__internal_c8add857ef3ff1aceb3fb6fd5be03e4cc840b803487b4904e640536b08acd6aa->leave($__internal_c8add857ef3ff1aceb3fb6fd5be03e4cc840b803487b4904e640536b08acd6aa_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_54b403d01014b71c9d73a825d0b4e871d334effc78d6293d23dfbabee7a22262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b403d01014b71c9d73a825d0b4e871d334effc78d6293d23dfbabee7a22262->enter($__internal_54b403d01014b71c9d73a825d0b4e871d334effc78d6293d23dfbabee7a22262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94b0c9744b1cab29a6b3de3c1efa6687d1fe9e40ea9d0c063b837ad69d761f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b0c9744b1cab29a6b3de3c1efa6687d1fe9e40ea9d0c063b837ad69d761f86->enter($__internal_94b0c9744b1cab29a6b3de3c1efa6687d1fe9e40ea9d0c063b837ad69d761f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_94b0c9744b1cab29a6b3de3c1efa6687d1fe9e40ea9d0c063b837ad69d761f86->leave($__internal_94b0c9744b1cab29a6b3de3c1efa6687d1fe9e40ea9d0c063b837ad69d761f86_prof);

        
        $__internal_54b403d01014b71c9d73a825d0b4e871d334effc78d6293d23dfbabee7a22262->leave($__internal_54b403d01014b71c9d73a825d0b4e871d334effc78d6293d23dfbabee7a22262_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_79e3a56ca28568b9f8c82892d1b00e14ad5ae391729e3658bda6ac9199085a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e3a56ca28568b9f8c82892d1b00e14ad5ae391729e3658bda6ac9199085a64->enter($__internal_79e3a56ca28568b9f8c82892d1b00e14ad5ae391729e3658bda6ac9199085a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d458f13b693beec71ee4ffa0595735b7abc49fa6270cb745d764f0b89eb2840f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d458f13b693beec71ee4ffa0595735b7abc49fa6270cb745d764f0b89eb2840f->enter($__internal_d458f13b693beec71ee4ffa0595735b7abc49fa6270cb745d764f0b89eb2840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d458f13b693beec71ee4ffa0595735b7abc49fa6270cb745d764f0b89eb2840f->leave($__internal_d458f13b693beec71ee4ffa0595735b7abc49fa6270cb745d764f0b89eb2840f_prof);

        
        $__internal_79e3a56ca28568b9f8c82892d1b00e14ad5ae391729e3658bda6ac9199085a64->leave($__internal_79e3a56ca28568b9f8c82892d1b00e14ad5ae391729e3658bda6ac9199085a64_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e0879b1a0ee1465d0081474c90ce1ceb36bb4c38b142b17d866819ba7f561b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0879b1a0ee1465d0081474c90ce1ceb36bb4c38b142b17d866819ba7f561b42->enter($__internal_e0879b1a0ee1465d0081474c90ce1ceb36bb4c38b142b17d866819ba7f561b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a21fd027a1ce6952a52ac45a51939fbcf4347c136ccf429e2f258468d0457f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21fd027a1ce6952a52ac45a51939fbcf4347c136ccf429e2f258468d0457f51->enter($__internal_a21fd027a1ce6952a52ac45a51939fbcf4347c136ccf429e2f258468d0457f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2018 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_a21fd027a1ce6952a52ac45a51939fbcf4347c136ccf429e2f258468d0457f51->leave($__internal_a21fd027a1ce6952a52ac45a51939fbcf4347c136ccf429e2f258468d0457f51_prof);

        
        $__internal_e0879b1a0ee1465d0081474c90ce1ceb36bb4c38b142b17d866819ba7f561b42->leave($__internal_e0879b1a0ee1465d0081474c90ce1ceb36bb4c38b142b17d866819ba7f561b42_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec96d536b712b6c7823a7eee4fd7a7239f06841f6d8bcadb59c400c49a28503c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec96d536b712b6c7823a7eee4fd7a7239f06841f6d8bcadb59c400c49a28503c->enter($__internal_ec96d536b712b6c7823a7eee4fd7a7239f06841f6d8bcadb59c400c49a28503c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d4bcccafc7899b23696c9bcba632784ca3a4f3cded1dabd74e55512a3b15c59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bcccafc7899b23696c9bcba632784ca3a4f3cded1dabd74e55512a3b15c59d->enter($__internal_d4bcccafc7899b23696c9bcba632784ca3a4f3cded1dabd74e55512a3b15c59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d4bcccafc7899b23696c9bcba632784ca3a4f3cded1dabd74e55512a3b15c59d->leave($__internal_d4bcccafc7899b23696c9bcba632784ca3a4f3cded1dabd74e55512a3b15c59d_prof);

        
        $__internal_ec96d536b712b6c7823a7eee4fd7a7239f06841f6d8bcadb59c400c49a28503c->leave($__internal_ec96d536b712b6c7823a7eee4fd7a7239f06841f6d8bcadb59c400c49a28503c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 62,  275 => 61,  271 => 60,  266 => 59,  257 => 58,  242 => 51,  233 => 50,  216 => 44,  204 => 45,  202 => 44,  198 => 42,  189 => 41,  166 => 26,  160 => 22,  151 => 21,  134 => 19,  122 => 14,  117 => 13,  108 => 12,  90 => 11,  77 => 64,  75 => 58,  72 => 57,  70 => 50,  66 => 48,  64 => 41,  60 => 39,  58 => 21,  53 => 19,  46 => 16,  44 => 12,  40 => 11,  33 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>

{% block footer %}
    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2018 - Software University Foundation</p>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
", "base.html.twig", "C:\\Projects\\SoftUni\\Tech-Module\\Software-Technologies\\PHP\\03-Calculator\\app\\Resources\\views\\base.html.twig");
    }
}
