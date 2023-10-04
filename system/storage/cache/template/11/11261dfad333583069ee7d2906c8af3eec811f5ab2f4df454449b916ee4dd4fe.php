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

/* oct_showcase/template/product/review.twig */
class __TwigTemplate_bb6cc3a9bce1cf3fd4986cee323f2af953cefc810506156ef2107f60836a7c1f extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "\t<div class=\"sc-product-content-reviews-item p-3\">
\t\t<div class=\"d-flex align-items-start justify-content-between\">
\t\t\t<div class=\"sc-product-content-reviews-item-info\">
\t\t\t\t<div class=\"sc-last-reviews-author d-flex align-items-center\">
\t\t\t\t\t<img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--review-author-icon\" alt=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 7);
                echo "\" width=\"50\" height=\"50\" />
\t\t\t\t\t<div class=\"sc-last-reviews-author-info ps-3\">
\t\t\t\t\t\t<div class=\"sc-last-reviews-author-name fw-600 dark-text\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 9);
                echo "</div>
\t\t\t\t\t\t<div class=\"sc-last-reviews-date fsz-12 light-text\">";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 10);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sc-product-content-reviews-rating-stars d-flex align-items-center\">
\t\t\t\t";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 16
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 16) < $context["i"])) {
                        // line 17
                        echo "\t\t\t\t\t<span class=\"sc-module-rating-star\"></span>
\t\t\t\t\t";
                    } else {
                        // line 19
                        echo "\t\t\t\t\t<span class=\"sc-module-rating-star sc-module-rating-star-is\"></span>
\t\t\t\t\t";
                    }
                    // line 21
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"sc-product-content-reviews-item-text pt-3\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 24);
                echo "</div>
\t\t";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["review"], "reply", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "\t\t<div class=\"sc-product-content-reviews-item-answer p-3 br-4 mt-3\">";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "reply", [], "any", false, false, false, 26);
                    echo "</div>
\t\t";
                }
                // line 28
                echo "\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t<div class=\"pt-4\">";
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        } else {
            // line 32
            echo "\t<div class=\"d-flex flex-column justify-content-center sc-empty-reviews mb-3 mb-md-0 text-center p-4 br-4\">
\t\t<p class=\"fw-500 fsz-16 mb-3\">";
            // line 33
            echo ($context["oct_text_no_reviews"] ?? null);
            echo "</p>
\t\t<img src=\"catalog/view/theme/oct_showcase/img/reviews-empty.svg\" alt=\"\" class=\"img-fluid d-block my-5 mx-auto\" width=\"85\" height=\"85\">
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  117 => 32,  111 => 30,  104 => 28,  98 => 26,  96 => 25,  92 => 24,  88 => 22,  82 => 21,  78 => 19,  74 => 17,  71 => 16,  67 => 15,  59 => 10,  55 => 9,  50 => 7,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/product/review.twig", "");
    }
}
