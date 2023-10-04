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

/* oct_showcase/template/octemplates/module/oct_product_review.twig */
class __TwigTemplate_64640eded9b8e222f474e33df7f93d084228d92fc15f1e52e9676292313111e4 extends \Twig\Template
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
            if (((($context["position"] ?? null) == "column_left") || (($context["position"] ?? null) == "column_right"))) {
                // line 3
                echo "<div  class=\"content-block p-0 overflow-hidden with-border position-relative\">
\t<div class=\"sc-column-title fsz-20 fw-700 dark-text\">";
                // line 4
                echo ($context["heading_title"] ?? null);
                echo "</div>
\t<div id=\"sc-column-last-reviews-";
                // line 5
                echo ($context["module"] ?? null);
                echo "\" class=\"sc-column-last-reviews\">
\t\t";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 7
                    echo "\t\t\t<div class=\"sc-last-reviews-item\">
\t\t\t\t<div class=\"p-3 h-100 d-flex flex-column\">
\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t<div class=\"sc-last-reviews-info d-flex\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "href", [], "any", false, false, false, 11);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "thumb", [], "any", false, false, false, 12);
                    echo "\"";
                    if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                        echo " data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["review"], "thumb", [], "any", false, false, false, 12);
                        echo " 100w\" srcset=\"";
                        echo ($context["oct_lazy_image"] ?? null);
                        echo " 100w\" sizes=\"100vw\" class=\"oct-lazy\"";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 12);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "width", [], "any", false, false, false, 12);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "height", [], "any", false, false, false, 12);
                    echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"sc-last-reviews-info-text ps-3\">
\t\t\t\t\t\t\t\t<div class=\"sc-last-reviews-author-name fw-600 dark-text mb-1\">";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 15);
                    echo "</div>
\t\t\t\t\t\t\t\t<div class=\"sc-last-reviews-date fsz-12\">";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 16);
                    echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sc-module-rating d-flex align-items-center br-4\">
\t\t\t\t\t\t\t<div class=\"sc-module-rating-stars d-flex align-items-center\">
\t\t\t\t\t\t\t\t";
                    // line 21
                    if (twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 21)) {
                        // line 22
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 23
                            echo "\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 23) < $context["i"])) {
                                // line 24
                                echo "\t\t\t\t\t\t\t\t<span class=\"sc-module-rating-star\"></span>
\t\t\t\t\t\t\t\t";
                            } else {
                                // line 26
                                echo "\t\t\t\t\t\t\t\t<span class=\"sc-module-rating-star sc-module-rating-star-is\"></span>
\t\t\t\t\t\t\t\t";
                            }
                            // line 28
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 30
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "href", [], "any", false, false, false, 33);
                    echo "\" class=\"sc-last-reviews-title fw-700 fsz-14 dark-text mt-3 mb-2\">";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 33);
                    echo "</a>\t
\t\t\t\t\t<div class=\"sc-last-reviews-text fsz-12\">
\t\t\t\t\t\t";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 35);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t</div>
\t<script>
\t\t\$('#sc-column-last-reviews-";
                // line 42
                echo ($context["module"] ?? null);
                echo "').slick({
\t\t\tdots: false,
\t\t\tinfinite: true,
\t\t\tprevArrow: '<button type=\"button\" class=\"slick-slider-btn slick-slider-btn-prev sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center\" aria-label=\"Previous\"><span class=\"sc-btn-icon\"></span></button>',
\t\t\tnextArrow: '<button type=\"button\" class=\"slick-slider-btn slick-slider-btn-next sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center\" aria-label=\"Next\"><span class=\"sc-btn-icon\"></span></button>',
\t\t\tslidesToShow: 1
\t\t});
\t</script>
</div>
";
            } else {
                // line 52
                echo "\t<div id=\"rm-product-reviews_";
                echo ($context["module"] ?? null);
                echo "\" class=\"row mt-3 mt-md-0 p-3 p-md-0 pt-xl-3 g-3 g-xl-4 sc-module\">
\t\t<div class=\"sc-module-header fsz-22 dark-text fw-700 text-center text-md-start mt-0 mt-md-2 mb-2\">
\t\t\t";
                // line 54
                echo ($context["heading_title"] ?? null);
                echo "
\t\t</div>
\t\t";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 57
                    echo "\t\t\t<div class=\"sc-last-reviews-item\">
\t\t\t\t<div class=\"content-block h-100 d-flex flex-column\">
\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t<div class=\"sc-last-reviews-info d-flex\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "href", [], "any", false, false, false, 61);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "thumb", [], "any", false, false, false, 62);
                    echo "\"";
                    if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                        echo " data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["review"], "thumb", [], "any", false, false, false, 62);
                        echo " 100w\" srcset=\"";
                        echo ($context["oct_lazy_image"] ?? null);
                        echo " 100w\" sizes=\"100vw\" class=\"oct-lazy\"";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 62);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "width", [], "any", false, false, false, 62);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "height", [], "any", false, false, false, 62);
                    echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"sc-last-reviews-info-text ps-3\">
\t\t\t\t\t\t\t\t<div class=\"sc-last-reviews-author-name fw-600 dark-text mb-1\">";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 65);
                    echo "</div>
\t\t\t\t\t\t\t\t<div class=\"sc-last-reviews-date fsz-12\">";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 66);
                    echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sc-module-rating d-flex align-items-center br-4\">
\t\t\t\t\t\t\t<div class=\"sc-module-rating-stars d-flex align-items-center\">
\t\t\t\t\t\t\t\t";
                    // line 71
                    if (twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 71)) {
                        // line 72
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 73
                            echo "\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 73) < $context["i"])) {
                                // line 74
                                echo "\t\t\t\t\t\t\t\t<span class=\"sc-module-rating-star\"></span>
\t\t\t\t\t\t\t\t";
                            } else {
                                // line 76
                                echo "\t\t\t\t\t\t\t\t<span class=\"sc-module-rating-star sc-module-rating-star-is\"></span>
\t\t\t\t\t\t\t\t";
                            }
                            // line 78
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 79
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "href", [], "any", false, false, false, 83);
                    echo "\" class=\"sc-last-reviews-title fw-700 fsz-14 dark-text mt-3 mb-2\">";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 83);
                    echo "</a>\t
\t\t\t\t\t<div class=\"sc-last-reviews-text fsz-12\">
\t\t\t\t\t\t";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 85);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "\t</div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/module/oct_product_review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 90,  261 => 85,  254 => 83,  249 => 80,  246 => 79,  240 => 78,  236 => 76,  232 => 74,  229 => 73,  224 => 72,  222 => 71,  214 => 66,  210 => 65,  190 => 62,  186 => 61,  180 => 57,  176 => 56,  171 => 54,  165 => 52,  152 => 42,  148 => 40,  137 => 35,  130 => 33,  125 => 30,  122 => 29,  116 => 28,  112 => 26,  108 => 24,  105 => 23,  100 => 22,  98 => 21,  90 => 16,  86 => 15,  66 => 12,  62 => 11,  56 => 7,  52 => 6,  48 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/module/oct_product_review.twig", "");
    }
}
