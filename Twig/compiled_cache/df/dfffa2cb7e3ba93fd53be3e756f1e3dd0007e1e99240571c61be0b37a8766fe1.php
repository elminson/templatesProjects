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

/* footer.html */
class __TwigTemplate_7d893e3acf6b3887c5384dfef0fea43cf2a6eb332a0039c690baf3fc30eb0c3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"footer\">
\t";
        // line 2
        $this->displayBlock('footer', $context, $blocks);
        // line 5
        echo "</div>
</body>
</html>
";
    }

    // line 2
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t&copy; Copyright 2020 by <a href=\"http://github.com/elminson\">Elminson</a>.
\t";
    }

    public function getTemplateName()
    {
        return "footer.html";
    }

    public function getDebugInfo()
    {
        return array (  54 => 3,  50 => 2,  43 => 5,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html", "/Users/elminsondeoleo/projects/templatesProjects/Twig/templates/footer.html");
    }
}
