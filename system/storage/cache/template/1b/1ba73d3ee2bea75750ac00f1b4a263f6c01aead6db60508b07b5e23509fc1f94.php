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

/* oct_showcase/template/common/currency.twig */
class __TwigTemplate_9651734a6574b72d5118d615e40281f985e7efa40ebac39b893ae7ce4528b42d extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "    <div id=\"oct_desktop_currency\">
        <div id=\"currency\" class=\"curency\">
            <form action=\"";
            // line 4
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\" class=\"sc-switcher d-flex align-items-center p-2 br-12 ms-3\">
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 6
                echo "                <button type=\"button\" class=\"currency-select br-4 fsz-12";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null))) {
                    echo " active";
                }
                echo "\" name=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6);
                echo "\">
                    ";
                // line 7
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 8);
                    echo "
                    ";
                } else {
                    // line 10
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 10);
                    echo "
                    ";
                }
                // line 12
                echo "                </button>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                <input type=\"hidden\" name=\"code\" value=\"\" />
                <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 15
            echo ($context["redirect"] ?? null);
            echo "\" />
            </form>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  81 => 14,  74 => 12,  68 => 10,  62 => 8,  60 => 7,  51 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/common/currency.twig", "");
    }
}
