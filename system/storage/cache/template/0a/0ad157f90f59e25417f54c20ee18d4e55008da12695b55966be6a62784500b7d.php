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

/* oct_showcase/template/common/home.twig */
class __TwigTemplate_770d03f70bd545d0f275be0c801be4d9a5d004295288b8552384f4b490fc838b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"common-home\" class=\"container-fluid container-lg\">
    ";
        // line 3
        echo ($context["content_top"] ?? null);
        echo "
    ";
        // line 4
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 6
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/common/home.twig", "");
    }
}
