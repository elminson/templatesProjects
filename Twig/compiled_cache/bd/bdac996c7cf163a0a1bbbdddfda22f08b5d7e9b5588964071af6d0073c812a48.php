<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* products.html.twig */
class __TwigTemplate_f29338246eab994c2bfbb69a3a483d606f2f03d21227a0cc8a8b5f764625a9de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "products.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "========
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<!DOCTYPE html>
<html lang=\"pt-BR\">
<head>
    ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "    <style>

        body {
            background: #00b09b;
            background: -webkit-linear-gradient(to right, #00b09b, #96c93d);
            background: linear-gradient(to right, #00b09b, #96c93d);
            min-height: 100vh;
        }

        .text-gray {
            color: #aaa;
        }

    </style>
</head>
<body>
<div class=\"container py-5\">

    <div class=\"row text-center text-white mb-5\">
        <div class=\"col-lg-7 mx-auto\">
            <h1 class=\"display-4\">Products list</h1>
        </div>
    </div>
    <!-- End -->

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">

            <!-- List group-->
            <ul class=\"list-group shadow\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "                <!-- list group item-->
                <li class=\"list-group-item\">
                    <!-- Custom content-->
                    <div class=\"media align-items-lg-center flex-column flex-lg-row p-3\">
                        <div class=\"media-body order-2 order-lg-1\">
                            <h5 class=\"mt-0 font-weight-bold mb-2\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "heading", [], "any", false, false, false, 56), "html", null, true);
            echo "</h5>
                            <p class=\"font-italic text-muted mb-0 small\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "heading", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
                            <p class=\"font-italic text-muted mb-0 small\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "info", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
                            <p class=\"font-italic text-muted mb-0 small\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "style", [], "any", false, false, false, 59), "html", null, true);
            echo "</p>
                            <div class=\"d-flex align-items-center justify-content-between mt-1\">
                                <h6 class=\"font-weight-bold my-2\">\$";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61), "html", null, true);
            echo "</h6>
                                <h10 class=\"my-s\">Release Date: ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_register", [], "any", false, false, false, 62), "html", null, true);
            echo "</h10>
                                <ul class=\"list-inline small\">
                                    <li class=\"list-inline-item m-0\"><i class=\"fa fa-star text-success\"></i></li>
                                    <li class=\"list-inline-item m-0\"><i class=\"fa fa-star text-success\"></i></li>
                                    <li class=\"list-inline-item m-0\"><i class=\"fa fa-star text-success\"></i></li>
                                    <li class=\"list-inline-item m-0\"><i class=\"fa fa-star text-success\"></i></li>
                                    <li class=\"list-inline-item m-0\"><i class=\"fa fa-star-o text-gray\"></i></li>
                                </ul>
                            </div>
                        </div><img src=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 71), "html", null, true);
            echo "\" alt=\"Generic placeholder image\" width=\"200\" class=\"ml-lg-5 order-1 order-lg-2\">
                    </div>
                    <!-- End -->
                </li>
                <!-- End -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
            </ul>
            <!-- End -->
            <div class=\"row text-center text-white mb-5\">
                <div class=\"col-lg-7 mx-auto\">
                    &copy; Copyright 2020 by <a href=\"http://github.com/elminson\">Elminson</a>.
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
";
    }

    // line 11
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        <meta charset=\"UTF-8\">
        <title>App Title</title>
        <link href=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <link href=\"//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script src=\"//code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 12,  174 => 11,  156 => 77,  144 => 71,  132 => 62,  128 => 61,  123 => 59,  119 => 58,  115 => 57,  111 => 56,  104 => 51,  100 => 50,  68 => 20,  66 => 11,  61 => 8,  57 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block header %}
========
{% endblock %}

{% block content %}
<!DOCTYPE html>
<html lang=\"pt-BR\">
<head>
    {% block head %}
        <meta charset=\"UTF-8\">
        <title>App Title</title>
        <link href=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <link href=\"//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script src=\"//code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js\"></script>

    {% endblock %}
    <style>

        body {
            background: #00b09b;
            background: -webkit-linear-gradient(to right, #00b09b, #96c93d);
            background: linear-gradient(to right, #00b09b, #96c93d);
            min-height: 100vh;
        }

        .text-gray {
            color: #aaa;
        }

    </style>
</head>
<body>
<div class=\"container py-5\">

    <div class=\"row text-center text-white mb-5\">
        <div class=\"col-lg-7 mx-auto\">
            <h1 class=\"display-4\">Products list</h1>
        </div>
    </div>
    <!-- End -->

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">

            <!-- List group-->
            <ul class=\"list-group shadow\">
                {% for product in products %}
                <!-- list group item-->
                <li class=\"list-group-item\">
                    <!-- Custom content-->
                    <div class=\"media align-items-lg-center flex-column flex-lg-row p-3\">
                        <div class=\"media-body order-2 order-lg-1\">
                            <h5 class=\"mt-0 font-weight-bold mb-2\">{{ product.heading }}</h5>
                            <p class=\"font-italic text-muted mb-0 small\">{{ product.heading }}</p>
                            <p class=\"font-italic text-muted mb-0 small\">{{ product.info }}</p>
                            <p class=\"font-italic text-muted mb-0 small\">{{ product.style }}</p>
                            <div class=\"d-flex align-items-center justify-content-between mt-1\">
                                <h6 class=\"font-weight-bold my-2\">\${{ product.price }}</h6>
                                <h10 class=\"my-s\">Release Date: {{ product.date_register }}</h10>
                                <ul class=\"list-inline small\">
                                    <li class=\"list-inline-item m-0\"><i class=\"fa fa-star text-success\"></i></li>
                                    <li class=\"list-inline-item m-0\"><i class=\"fa fa-star text-success\"></i></li>
                                    <li class=\"list-inline-item m-0\"><i class=\"fa fa-star text-success\"></i></li>
                                    <li class=\"list-inline-item m-0\"><i class=\"fa fa-star text-success\"></i></li>
                                    <li class=\"list-inline-item m-0\"><i class=\"fa fa-star-o text-gray\"></i></li>
                                </ul>
                            </div>
                        </div><img src=\"{{ product.image }}\" alt=\"Generic placeholder image\" width=\"200\" class=\"ml-lg-5 order-1 order-lg-2\">
                    </div>
                    <!-- End -->
                </li>
                <!-- End -->
                {% endfor %}

            </ul>
            <!-- End -->
            <div class=\"row text-center text-white mb-5\">
                <div class=\"col-lg-7 mx-auto\">
                    &copy; Copyright 2020 by <a href=\"http://github.com/elminson\">Elminson</a>.
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
{% endblock %}

", "products.html.twig", "/Users/elminsondeoleo/projects/templatesProjects/Twig/templates/products.html.twig");
    }
}
