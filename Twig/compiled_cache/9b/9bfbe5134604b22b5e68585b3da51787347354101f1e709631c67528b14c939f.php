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

/* base.html.twig */
class __TwigTemplate_a3c8c9c83a8501ad14f8d8fbfe76ed9859a7611f16ba993d48718e5fe15beca9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- base.html.twig -->
<!DOCTYPE html>
<html>
<head><!-- whatever --></head>
<body>
";
        // line 6
        $this->displayBlock('header', $context, $blocks);
        // line 7
        $this->displayBlock('main', $context, $blocks);
        // line 8
        $this->displayBlock('footer', $context, $blocks);
        // line 9
        echo "</body>
</html>
";
    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 8,  65 => 7,  59 => 6,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/elminsondeoleo/projects/templatesProjects/Twig/templates/base.html.twig");
    }
}
