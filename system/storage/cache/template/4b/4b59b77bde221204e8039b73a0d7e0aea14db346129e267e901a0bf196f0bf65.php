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

/* oct_showcase/template/common/cart.twig */
class __TwigTemplate_764c8cc50c4aa5fc6212ad07af516c4308edf708e2cd7e371db1080c2ae408be extends \Twig\Template
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
        if ((array_key_exists("oct_popup_cart_status", $context) && ($context["oct_popup_cart_status"] ?? null))) {
            // line 2
            echo "<button title=\"";
            echo ($context["oct_cart"] ?? null);
            echo "\" id=\"cart\" class=\"sc-btn sc-btn-with-icon no-btn d-flex flex-column justify-content-between header-buttons-cart fsz-12 align-items-center align-self-stretch\" type=\"button\" onclick=\"octPopupCart();\">
";
        } else {
            // line 4
            echo "<button title=\"";
            echo ($context["oct_cart"] ?? null);
            echo "\" id=\"cart\" type=\"button\" class=\"sc-btn sc-btn-with-icon no-btn d-flex flex-column justify-content-between header-buttons-cart fsz-12 align-items-center align-self-stretch\" onclick=\"location = '";
            echo ($context["cart"] ?? null);
            echo "';\">
";
        }
        // line 6
        echo "    <svg fill=\"none\" width=\"16\" height=\"16\" viewBox=\"0 0 16 22\" xmlns=\"http://www.w3.org/2000/svg\">
        <path stroke=\"#1C1C28\" stroke-width=\"1.4\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M1.833 7.041h16.333v14H1.833zm3.5 0a4.667 4.667 0 019.334 0\"/>
    </svg>
    <span class=\"text-lowercase\">";
        // line 9
        echo ($context["oct_cart"] ?? null);
        echo "</span>
    <span class=\"header-buttons-cart-quantity px-1\">";
        // line 10
        echo ($context["total_products"] ?? null);
        echo "</span>
</button>
";
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  58 => 9,  53 => 6,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/common/cart.twig", "");
    }
}
