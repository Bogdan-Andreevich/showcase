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

/* oct_showcase/template/octemplates/module/oct_slideshow_plus.twig */
class __TwigTemplate_171a05af6bab6c87eb902185e52c481b8e272c95c43f234825b1639895cbc1e4 extends \Twig\Template
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
        if (($context["oct_slideshows_plus"] ?? null)) {
            // line 2
            echo "<div class=\"row mt-3 mt-xl-4 sc-slideshow-plus";
            if (($context["slider_with_megamenu"] ?? null)) {
                echo " with-megamenu";
            }
            echo "\">
\t<div class=\"col-12\">
\t\t<div id=\"slideshow-plus-";
            // line 4
            echo ($context["module"] ?? null);
            echo "\" class=\"sc-slideshow-plus-block h-100\">
\t\t\t";
            // line 5
            $context["key"] = 0;
            // line 6
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_slideshows_plus"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item_slide"]) {
                // line 7
                echo "\t\t\t\t";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 8
                echo "\t\t\t\t<div class=\"";
                if ( !($context["full_img"] ?? null)) {
                    echo "content-block sc-slideshow-plus-item sc-slideshow-plus-item_";
                    echo ($context["key"] ?? null);
                }
                echo "\">
\t\t\t\t\t";
                // line 9
                if ((($context["full_img"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item_slide"], "mobile_image", [], "any", false, false, false, 9))) {
                    // line 10
                    echo "\t\t\t\t\t\t<div class=\"sc-slideshow-plus-item-fullimg h-100\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "link", [], "any", false, false, false, 11);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title", [], "any", false, false, false, 11);
                    echo "\">
\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t<source srcset=\"";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "mobile_image", [], "any", false, false, false, 13);
                    echo "\" media=\"(max-width: 767px)\">
\t\t\t\t\t\t\t\t\t<source srcset=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image", [], "any", false, false, false, 14);
                    echo "\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid br-4\" src=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image", [], "any", false, false, false, 15);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title", [], "any", false, false, false, 15);
                    echo "\" ";
                    if (array_key_exists("oct_isMobile", $context)) {
                        echo "width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "mobile_width", [], "any", false, false, false, 15);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "mobile_height", [], "any", false, false, false, 15);
                        echo "\"";
                    } else {
                        echo "width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image_width", [], "any", false, false, false, 15);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image_height", [], "any", false, false, false, 15);
                        echo "\"";
                    }
                    if ((($context["key"] ?? null) > 1)) {
                        echo " loading=\"lazy\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                } else {
                    // line 20
                    echo "\t\t\t\t\t\t<div class=\"d-flex flex-column flex-md-row justify-content-md-between h-100\">
\t\t\t\t\t\t\t<div class=\"sc-slideshow-plus-info order-1 order-md-0  flex-grow-1 d-flex flex-column\">
\t\t\t\t\t\t\t\t<div class=\"h1\">";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title", [], "any", false, false, false, 22);
                    echo "</div>
\t\t\t\t\t\t\t\t<p class=\"sc-slideshow-plus-text light-text fw-400\">";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "description", [], "any", false, false, false, 23);
                    echo "</p>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "link", [], "any", false, false, false, 24);
                    echo "\" class=\"sc-btn sc-btn-secondary br-4 mt-auto mt-lg-3 align-self-start\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button", [], "any", false, false, false, 24);
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 26
                    if ( !twig_get_attribute($this->env, $this->source, $context["item_slide"], "full_img", [], "any", false, false, false, 26)) {
                        // line 27
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "link", [], "any", false, false, false, 27);
                        echo "\" class=\"order-0 order-md-1\">
\t\t\t\t\t\t\t\t<img src=\"";
                        // line 28
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image", [], "any", false, false, false, 28);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title", [], "any", false, false, false, 28);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image_width", [], "any", false, false, false, 28);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "image_height", [], "any", false, false, false, 28);
                        echo "\"";
                        if ((($context["key"] ?? null) > 1)) {
                            echo " loading=\"lazy\"";
                        }
                        echo " class=\"img-fluid mx-auto sc-slideshow-plus-item-img\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 31
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t";
                    // line 33
                    if (twig_get_attribute($this->env, $this->source, $context["item_slide"], "background_color", [], "any", false, false, false, 33)) {
                        // line 34
                        echo "\t\t\t\t\t\t\t#slideshow-plus-";
                        echo ($context["module"] ?? null);
                        echo " .sc-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " {background-color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "background_color", [], "any", false, false, false, 34);
                        echo ";}
\t\t\t\t\t\t\t";
                    }
                    // line 36
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["item_slide"], "title_color", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "\t\t\t\t\t\t\t#slideshow-plus-";
                        echo ($context["module"] ?? null);
                        echo " .sc-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " .h1 {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "title_color", [], "any", false, false, false, 37);
                        echo ";}
\t\t\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["item_slide"], "text_color", [], "any", false, false, false, 39)) {
                        // line 40
                        echo "\t\t\t\t\t\t\t#slideshow-plus-";
                        echo ($context["module"] ?? null);
                        echo " .sc-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " p {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "text_color", [], "any", false, false, false, 40);
                        echo ";}
\t\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_color", [], "any", false, false, false, 42) && twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_background", [], "any", false, false, false, 42))) {
                        // line 43
                        echo "\t\t\t\t\t\t\t#slideshow-plus-";
                        echo ($context["module"] ?? null);
                        echo " .sc-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " .sc-btn {background-color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_background", [], "any", false, false, false, 43);
                        echo ";}
\t\t\t\t\t\t\t#slideshow-plus-";
                        // line 44
                        echo ($context["module"] ?? null);
                        echo " .sc-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " .sc-btn {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_color", [], "any", false, false, false, 44);
                        echo ";}
\t\t\t\t\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_color_hover", [], "any", false, false, false, 46) && twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_background_hover", [], "any", false, false, false, 46))) {
                        // line 47
                        echo "\t\t\t\t\t\t\t#slideshow-plus-";
                        echo ($context["module"] ?? null);
                        echo " .sc-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " .sc-btn:hover {background-color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_background_hover", [], "any", false, false, false, 47);
                        echo ";}
\t\t\t\t\t\t\t#slideshow-plus-";
                        // line 48
                        echo ($context["module"] ?? null);
                        echo " .sc-slideshow-plus-item_";
                        echo ($context["key"] ?? null);
                        echo " .sc-btn:hover {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item_slide"], "button_color_hover", [], "any", false, false, false, 48);
                        echo ";}
\t\t\t\t\t\t\t";
                    }
                    // line 50
                    echo "\t\t\t\t\t\t</style>
\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t</div>
\t\t<script>
\t\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t\t\t\$('#slideshow-plus-";
            // line 57
            echo ($context["module"] ?? null);
            echo "').slick({
\t\t\t\t\tautoplay: true,
\t\t\t\t\t";
            // line 59
            if (($context["paginations_status"] ?? null)) {
                echo "dots: true,";
            }
            // line 60
            echo "\t\t\t\t\tarrows: false,
\t\t\t\t\tinfinite: true,
\t\t\t\t\tautoplaySpeed: 5000,
\t\t\t\t\tslidesToShow: 1
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</div>
\t";
            // line 68
            if (($context["status_additional_banners"] ?? null)) {
                // line 69
                echo "\t<div class=\"col-12 products-of-the-day\">
\t\t<div class=\"fsz-20 fw-700 pt-4 pb-3\">";
                // line 70
                echo ($context["text_promotional_product"] ?? null);
                echo "</div>
\t\t<div id=\"slideshow-plus-specials-";
                // line 71
                echo ($context["module"] ?? null);
                echo "\" class=\"sc-slideshow-plus-specials\">
\t\t\t";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 73
                    echo "\t\t\t\t<div class=\"content-block-p24 sc-slideshow-plus-specials-item";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "oct_grayscale", [], "any", false, false, false, 73)) {
                        echo " sc-no-stock";
                    }
                    echo "\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<a href=\"";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 75);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 75);
                    echo "\" loading=\"lazy\"/></a>
\t\t\t\t\t\t<a href=\"";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 76);
                    echo "\" class=\"sc-slideshow-plus-specials-block-title fw-700 fsz-14 ps-3 dark-text d-inline-block\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
                    echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    // line 78
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78)) {
                        // line 79
                        echo "\t\t\t\t\t\t<div class=\"sc-slideshow-plus-specials-block-price d-flex align-items-center mt-auto pt-3\">
\t\t\t\t\t\t\t";
                        // line 80
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 80)) {
                            // line 81
                            echo "\t\t\t\t\t\t\t<span class=\"sc-slideshow-plus-specials-block-price-new dark-text fw-800 fsz-20 ms-2\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 81);
                            echo "</span>
\t\t\t\t\t\t\t";
                        } else {
                            // line 83
                            echo "\t\t\t\t\t\t\t<span class=\"sc-slideshow-plus-specials-block-price-old text-decoration-line-through fw-400 fsz-14\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 83);
                            echo "</span>
\t\t\t\t\t\t\t<span class=\"sc-slideshow-plus-specials-block-price-new dark-text fw-800 fsz-20 ms-2\">";
                            // line 84
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 84);
                            echo "</span>
\t\t\t\t\t\t\t";
                        }
                        // line 86
                        echo "\t\t\t\t\t\t\t<button type=\"button\" aria-label=\"To cart\" class=\"sc-btn sc-btn-primary sc-btn-with-icon sc-module-cart-btn br-4 ms-auto\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--btn-cart-icon\" alt=\"\" width=\"20\" height=\"20\" class=\"sc-btn-icon sc-btn-icon-cart-img\">
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
                        // line 89
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 89);
                        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "\t\t</div>
\t\t<script>
\t\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t\t\t\$('#slideshow-plus-specials-";
                // line 97
                echo ($context["module"] ?? null);
                echo "').slick({
\t\t\t\t\tautoplay: true,
\t\t\t\t\tdots: false,
\t\t\t\t\tarrows: true,
\t\t\t\t\tinfinite: true,
\t\t\t\t\tautoplaySpeed: 5000,
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t\tadaptiveHeight: true,
\t\t\t\t\tprevArrow: '<button type=\"button\" class=\"slick-slider-btn slick-slider-btn-prev sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center p-0\" aria-label=\"Previous\"><span class=\"sc-btn-icon\"></span></button>',
\t\t\t\t\tnextArrow: '<button type=\"button\" class=\"slick-slider-btn slick-slider-btn-next sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center p-0\" aria-label=\"Next\"><span class=\"sc-btn-icon\"></span></button>',
\t\t\t\t\tresponsive: [{
\t\t\t\t\t\tbreakpoint: 1600,
\t\t\t\t\t\tsettings: {
\t\t\t\t\t\t\tslidesToShow: 3
\t\t\t\t\t\t}
\t\t\t\t\t}, 
\t\t\t\t\t{
\t\t\t\t\t\tbreakpoint: 1440,
\t\t\t\t\t\tsettings: {
\t\t\t\t\t\t\tslidesToShow: 2
\t\t\t\t\t\t}
\t\t\t\t\t}, {
\t\t\t\t\t\tbreakpoint: 768,
\t\t\t\t\t\tsettings: {
\t\t\t\t\t\t\tslidesToShow: 2
\t\t\t\t\t\t}
\t\t\t\t\t}, {
\t\t\t\t\t\tbreakpoint: 576,
\t\t\t\t\t\tsettings: {
\t\t\t\t\t\t\tslidesToShow: 1
\t\t\t\t\t\t}
\t\t\t\t\t}]\t\t\t
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</div>
\t";
            }
            // line 134
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/module/oct_slideshow_plus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 134,  367 => 97,  362 => 94,  355 => 92,  349 => 89,  344 => 86,  339 => 84,  334 => 83,  328 => 81,  326 => 80,  323 => 79,  321 => 78,  314 => 76,  302 => 75,  294 => 73,  290 => 72,  286 => 71,  282 => 70,  279 => 69,  277 => 68,  267 => 60,  263 => 59,  258 => 57,  253 => 54,  246 => 52,  242 => 50,  233 => 48,  224 => 47,  221 => 46,  212 => 44,  203 => 43,  200 => 42,  190 => 40,  187 => 39,  177 => 37,  174 => 36,  164 => 34,  162 => 33,  158 => 31,  142 => 28,  137 => 27,  135 => 26,  128 => 24,  124 => 23,  120 => 22,  116 => 20,  89 => 15,  85 => 14,  81 => 13,  74 => 11,  71 => 10,  69 => 9,  61 => 8,  58 => 7,  53 => 6,  51 => 5,  47 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/module/oct_slideshow_plus.twig", "");
    }
}
