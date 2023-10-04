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

/* oct_showcase/template/common/language.twig */
class __TwigTemplate_93b8589ee43e31a5a372cba0c2af5b432f04a0243cc8627bdbc83ba962b41daa extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "<div id=\"oct_desktop_language\">
\t<div id=\"language\">
\t\t<form action=\"";
            // line 4
            echo ($context["action"] ?? null);
            echo "\" class=\"sc-switcher d-flex align-items-center p-2 br-12 ms-3 ms-xl-4\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "\t\t\t<button type=\"button\" class=\"br-4 fsz-12 d-flex align-items-center justify-content-center language-select";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null))) {
                    echo " active";
                }
                echo "\" name=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 6);
                echo "\">
\t\t\t\t";
                // line 7
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7) == ($context["code"] ?? null))) {
                    // line 8
                    echo "\t\t\t\t\t<img src=\"catalog/language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 8);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 8);
                    echo ".png\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                    echo "\" class=\"me-1\" width=\"8\" height=\"6\" />
\t\t\t\t";
                }
                // line 10
                echo "\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "oct_template_code", [], "any", false, false, false, 10);
                echo "
\t\t\t</button>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 14
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t</form>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 14,  86 => 13,  76 => 10,  64 => 8,  62 => 7,  51 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/common/language.twig", "");
    }
}
