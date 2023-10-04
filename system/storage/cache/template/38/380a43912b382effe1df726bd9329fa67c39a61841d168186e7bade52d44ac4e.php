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

/* oct_showcase/template/octemplates/module/oct_products_modules.twig */
class __TwigTemplate_837ef29b85887cd14a0f56021c8110c24f759bc7b6c57668ac7bbe7db3ac78eb extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "    ";
            if (((($context["position"] ?? null) == "column_left") || (($context["position"] ?? null) == "column_right"))) {
                // line 3
                echo "        <div class=\"content-block p-0 overflow-hidden with-border position-relative\">
            <div class=\"sc-column-title fsz-20 fw-700 dark-text\">
                ";
                // line 5
                if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
                    // line 6
                    echo "                    <a href=\"";
                    echo ($context["link"] ?? null);
                    echo "\">
                ";
                }
                // line 8
                echo "                ";
                echo ($context["heading_title"] ?? null);
                echo "
                ";
                // line 9
                if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
                    // line 10
                    echo "                    </a>
                ";
                }
                // line 12
                echo "            </div>
            <div id=\"sc-column-";
                // line 13
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "\" class=\"sc-column-products\">
                ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 15
                    echo "                    <div class=\"sc-column-item\">
                        <div class=\"sc-module-item h-100 d-flex flex-column p-3";
                    // line 16
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "oct_grayscale", [], "any", false, false, false, 16)) {
                        echo " rm-no-stock";
                    }
                    echo "\">
                            <div class=\"sc-module-img position-relative\">
                                <a href=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                    echo "\">
                                    <img
                                        src=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20);
                    echo "\"
                                        ";
                    // line 21
                    if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                        // line 22
                        echo "                                        data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22);
                        echo " 100w\"
                                        srcset=\"";
                        // line 23
                        echo ($context["oct_lazy_image"] ?? null);
                        echo " 100w\"
                                        sizes=\"100vw\"
                                        class=\"img-fluid oct-lazy\"
                                        ";
                    } else {
                        // line 27
                        echo "                                        class=\"img-fluid\"
                                        ";
                    }
                    // line 29
                    echo "                                        alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                    echo "\"
                                        title=\"";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                    echo "\"
                                        width=\"";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 31);
                    echo "\"
                                        height=\"";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 32);
                    echo "\"/>
                                </a>
                                <div class=\"sc-module-stickers d-flex align-items-center mt-3\">
                                    ";
                    // line 35
                    if ((($context["oct_sticker_you_save"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 35))) {
                        // line 36
                        echo "                                        <div class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-red sc-module-sticker-infinity\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 36);
                        echo "</div>
                                    ";
                    }
                    // line 38
                    echo "                                    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38)) {
                        // line 39
                        echo "                                        <div class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-green sc-module-sticker-infinity\">";
                        echo ($context["oct_product_stock"] ?? null);
                        echo "</div>
                                    ";
                    }
                    // line 41
                    echo "                                    ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 41))) {
                        // line 42
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 42));
                        foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                            // line 43
                            echo "                                            ";
                            if (( !twig_test_empty($context["oct_sticker"]) && twig_test_iterable($context["oct_sticker"]))) {
                                // line 44
                                echo "                                                <div class=\"sc-module-sticker sc-module-sticker-image pe-0 py-0 order-1\">
                                                    <img src=\"";
                                // line 45
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "image", [], "any", false, false, false, 45);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 45);
                                echo "\" data-bs-html=\"true\" data-bs-placement=\"top\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 45);
                                echo "\" data-bs-content=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "description", [], "any", false, false, false, 45);
                                echo "\" width=\"24\" height=\"24\" />
                                                </div>
                                            ";
                            } elseif ( !twig_test_empty(                            // line 47
$context["oct_sticker"])) {
                                // line 48
                                echo "                                                <div class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-";
                                echo $context["key"];
                                echo "\">
                                                    ";
                                // line 49
                                echo $context["oct_sticker"];
                                echo "
                                                </div>
                                            ";
                            }
                            // line 52
                            echo "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 53
                        echo "                                    ";
                    }
                    // line 54
                    echo "                                </div>
                                <div class=\"sc-module-btns d-flex flex-column position-absolute\">
                                    ";
                    // line 56
                    if (($context["oct_popup_view_status"] ?? null)) {
                        // line 57
                        echo "                                        <button type=\"button\" aria-label=\"Quick view\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4\" title=\"";
                        echo ($context["oct_popup_view"] ?? null);
                        echo "\" onclick=\"octPopUpView('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 57);
                        echo "')\">
                                            <span class=\"sc-btn-icon sc-btn-icon-viewed\"></span>
                                        </button>
                                    ";
                    }
                    // line 61
                    echo "                                    <button type=\"button\" aria-label=\"Wishlist\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 sc-wishlist-btn\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 61);
                    echo "');\">
                                        <span class=\"sc-btn-icon sc-btn-icon-wishlist\"></span>
                                    </button>
                                    <button type=\"button\" aria-label=\"Compare\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 sc-compare-btn\" title=\"";
                    // line 64
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 64);
                    echo "');\">
                                        <span class=\"sc-btn-icon sc-btn-icon-compare\"></span>
                                    </button>
                                </div>
                            </div>
                            <div class=\"sc-module-caption d-flex flex-column justify-content-between pt-md-2 h-100\">
                                <div class=\"sc-module-info\">
                                    <a href=\"";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 71);
                    echo "\" class=\"sc-module-title dark-text fw-700\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 71);
                    echo "</a>
                                    ";
                    // line 72
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", true, true, false, 72) && twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 72))) {
                        // line 73
                        echo "                                    <div class=\"sc-module-model light-text fsz-10 mt-2\"><span>";
                        echo ($context["oct_view_model_cat"] ?? null);
                        echo "</span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 73);
                        echo "</div>
                                    ";
                    }
                    // line 75
                    echo "                                    ";
                    if ( !(twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 75) === false)) {
                        // line 76
                        echo "                                    <div class=\"sc-module-rating d-flex align-items-center mt-2 mb-1 br-4\">
                                        <div class=\"sc-module-rating-stars d-flex align-items-center\">
                                            ";
                        // line 78
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 79
                            echo "                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 79) < $context["i"])) {
                                // line 80
                                echo "                                                    <span class=\"sc-module-rating-star\"></span>
                                                ";
                            } else {
                                // line 82
                                echo "                                                    <span class=\"sc-module-rating-star sc-module-rating-star-is\"></span>
                                                ";
                            }
                            // line 84
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 85
                        echo "                                        </div>
                                        <div class=\"sc-module-reviews d-flex align-items-center\">
                                            <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--module-comments-icon\" alt=\"\" width=\"12\" height=\"12\" />
                                            <span class=\"dark-text fsz-12 ps-1\">";
                        // line 88
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 88);
                        echo "</span>
                                        </div>
                                    </div>
                                    ";
                    }
                    // line 92
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92)) {
                        // line 93
                        echo "                                        <div class=\"sc-module-price-box py-2 mt-auto\">
                                            ";
                        // line 94
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 94)) {
                            // line 95
                            echo "                                                <div class=\"price-tax fw-300 fsz-12 light-text\">
                                                    ";
                            // line 96
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 96);
                            echo "
                                                </div>
                                            ";
                        }
                        // line 99
                        echo "                                            ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 99)) {
                            // line 100
                            echo "                                                <span class=\"sc-module-price fw-800 dark-text mt-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100);
                            echo "</span>
                                            ";
                        } else {
                            // line 102
                            echo "                                                <span class=\"sc-module-price-old light-text fsz-14\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102);
                            echo "</span>
                                                <span class=\"sc-module-price fw-800 dark-text mt-1\">";
                            // line 103
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 103);
                            echo "</span>
                                            ";
                        }
                        // line 105
                        echo "                                        </div>
                                    ";
                    }
                    // line 107
                    echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "            </div>
            <button type=\"button\" aria-label=\"Previous\" id=\"sc-";
                // line 113
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "-button-prev\" class=\"slick-slider-btn slick-slider-btn-prev sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center\">
                <span class=\"sc-btn-icon\"></span>
            </button>
            <button type=\"button\" aria-label=\"Next\" id=\"sc-";
                // line 116
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "-button-next\" class=\"slick-slider-btn slick-slider-btn-next sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center\">
                <span class=\"sc-btn-icon\"></span>
            </button>
            <script>
                octColumnProducts(\"sc-";
                // line 120
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "-button-prev\", \"sc-";
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "-button-next\", \"sc-column-";
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "\");
            </script>
        </div>
    ";
            } else {
                // line 124
                echo "        <div id=\"sc-";
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "\" class=\"row mt-3 mt-md-0 p-3 p-md-0 pt-xl-3 g-2 g-md-3 sc-module\"";
                if ((($context["show_type"] ?? null) == "")) {
                    echo " data-type=\"split\"";
                }
                if ((($context["show_type"] ?? null) == "width-100")) {
                    echo " data-type=\"width100\"";
                }
                if ((($context["show_type"] ?? null) == "width-50")) {
                    echo " data-type=\"width50\"";
                }
                if ((($context["show_type"] ?? null) == "width-infinity")) {
                    echo " data-type=\"slider\"";
                }
                if ((($context["show_type"] ?? null) == "width-minimal")) {
                    echo " data-type=\"minimal\"";
                }
                echo ">
            <div class=\"sc-module-header fsz-22 dark-text fw-700 text-center text-md-start mt-0 mt-md-2 mb-2\">
                ";
                // line 126
                if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
                    echo "<a href=\"";
                    echo ($context["link"] ?? null);
                    echo "\">";
                }
                // line 127
                echo "                ";
                echo ($context["heading_title"] ?? null);
                echo "
                ";
                // line 128
                if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
                    echo "</a>";
                }
                // line 129
                echo "            </div>
            ";
                // line 130
                if ((($context["show_type"] ?? null) == "width-infinity")) {
                    echo "<div class=\"sc-module-infinity col-12\"><div class=\"row p-0 g-2 g-md-3\">";
                }
                // line 131
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 132
                    echo "                <div class=\"sc-module-item sc-module-col\">
                    <div class=\"content-block h-100 d-flex flex-column";
                    // line 133
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "oct_grayscale", [], "any", false, false, false, 133)) {
                        echo " sc-no-stock";
                    }
                    echo "\">
                        <div class=\"sc-module-img position-relative\">
                            <a href=\"";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 135);
                    echo "\">
                                <img
                                    src=\"";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 137);
                    echo "\"
                                    ";
                    // line 138
                    if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                        // line 139
                        echo "                                    data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 139);
                        echo " 100w\"
                                    srcset=\"";
                        // line 140
                        echo ($context["oct_lazy_image"] ?? null);
                        echo " 100w\"
                                    sizes=\"100vw\"
                                    class=\"img-fluid oct-lazy\"
                                    ";
                    } else {
                        // line 144
                        echo "                                    class=\"img-fluid\"
                                    ";
                    }
                    // line 146
                    echo "                                    alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 146);
                    echo "\"
                                    title=\"";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 147);
                    echo "\"
                                    width=\"";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 148);
                    echo "\"
                                    height=\"";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 149);
                    echo "\"/>
                            </a>
                            <div class=\"sc-module-stickers d-flex align-items-center mt-3\">
                                ";
                    // line 152
                    if ((($context["oct_sticker_you_save"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 152))) {
                        // line 153
                        echo "                                    <div class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-red sc-module-sticker-infinity\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 153);
                        echo "</div>
                                ";
                    }
                    // line 155
                    echo "                                ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 155)) {
                        // line 156
                        echo "                                    <div class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-green sc-module-sticker-infinity\">";
                        echo ($context["oct_product_stock"] ?? null);
                        echo "</div>
                                ";
                    }
                    // line 158
                    echo "                                ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 158))) {
                        // line 159
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 159));
                        foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                            // line 160
                            echo "                                        ";
                            if (( !twig_test_empty($context["oct_sticker"]) && twig_test_iterable($context["oct_sticker"]))) {
                                // line 161
                                echo "                                            <div class=\"sc-module-sticker sc-module-sticker-image pe-0 py-0 order-1\">
                                                <img src=\"";
                                // line 162
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "image", [], "any", false, false, false, 162);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 162);
                                echo "\" data-bs-html=\"true\" data-bs-placement=\"top\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 162);
                                echo "\" data-bs-content=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "description", [], "any", false, false, false, 162);
                                echo "\" width=\"24\" height=\"24\" />
                                            </div>
                                        ";
                            } elseif ( !twig_test_empty(                            // line 164
$context["oct_sticker"])) {
                                // line 165
                                echo "                                            <div class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-";
                                echo $context["key"];
                                echo "\">
                                                ";
                                // line 166
                                echo $context["oct_sticker"];
                                echo "
                                            </div>
                                        ";
                            }
                            // line 169
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 170
                        echo "                                ";
                    }
                    // line 171
                    echo "                            </div>
                            <div class=\"sc-module-btns d-flex flex-column position-absolute\">
                                ";
                    // line 173
                    if (($context["oct_popup_view_status"] ?? null)) {
                        // line 174
                        echo "                                <button type=\"button\" aria-label=\"Quick view\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4\" title=\"";
                        echo ($context["oct_popup_view"] ?? null);
                        echo "\" onclick=\"octPopUpView('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 174);
                        echo "')\">
                                    <span class=\"sc-btn-icon sc-btn-icon-viewed\"></span>
                                </button>
                                ";
                    }
                    // line 178
                    echo "                                <button type=\"button\" aria-label=\"Wishlist\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 sc-wishlist-btn\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 178);
                    echo "');\">
                                    <span class=\"sc-btn-icon sc-btn-icon-wishlist\"></span>
                                </button>
                                <button type=\"button\" aria-label=\"Compare\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 sc-compare-btn\" title=\"";
                    // line 181
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 181);
                    echo "');\">
                                    <span class=\"sc-btn-icon sc-btn-icon-compare\"></span>
                                </button>
                            </div>
                        </div>
                        <div class=\"sc-module-caption d-flex flex-column justify-content-between py-md-2 h-100\">
                            <div class=\"sc-module-info\">
                                <a href=\"";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 188);
                    echo "\" class=\"sc-module-title dark-text fw-700\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 188);
                    echo "</a>
                                ";
                    // line 189
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", true, true, false, 189) && twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 189))) {
                        // line 190
                        echo "                                <div class=\"sc-module-model light-text fsz-10 mt-2\"><span>";
                        echo ($context["oct_view_model_cat"] ?? null);
                        echo "</span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 190);
                        echo "</div>
                                ";
                    }
                    // line 192
                    echo "                                ";
                    if ( !(twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 192) === false)) {
                        // line 193
                        echo "                                <div class=\"sc-module-rating d-flex align-items-center mt-2 mb-1 br-4\">
                                    <div class=\"sc-module-rating-stars d-flex align-items-center\">
                                        ";
                        // line 195
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 196
                            echo "                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 196) < $context["i"])) {
                                // line 197
                                echo "                                                <span class=\"sc-module-rating-star\"></span>
                                            ";
                            } else {
                                // line 199
                                echo "                                                <span class=\"sc-module-rating-star sc-module-rating-star-is\"></span>
                                            ";
                            }
                            // line 201
                            echo "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 202
                        echo "                                    </div>
                                    <div class=\"sc-module-reviews d-flex align-items-center\">
                                        <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--module-comments-icon\" alt=\"\" width=\"12\" height=\"12\" />
                                        <span class=\"dark-text fsz-12 ps-1\">";
                        // line 205
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 205);
                        echo "</span>
                                    </div>
                                </div>
                                ";
                    }
                    // line 209
                    echo "                            </div>
                            ";
                    // line 210
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 210)) {
                        // line 211
                        echo "                            <div class=\"sc-module-price-box py-2 mt-auto\">
                                ";
                        // line 212
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 212)) {
                            // line 213
                            echo "                                <div class=\"price-tax fw-300 fsz-12 light-text\">
                                    ";
                            // line 214
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 214);
                            echo "
                                </div>
                                ";
                        }
                        // line 217
                        echo "                                ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 217)) {
                            // line 218
                            echo "                                <span class=\"sc-module-price fw-800 dark-text mt-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 218);
                            echo "</span>
                                ";
                        } else {
                            // line 220
                            echo "                                <span class=\"sc-module-price-old light-text fsz-14\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 220);
                            echo "</span>
                                <span class=\"sc-module-price fw-800 dark-text mt-1\">";
                            // line 221
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 221);
                            echo "</span>
                                ";
                        }
                        // line 223
                        echo "                            </div>
                            ";
                    }
                    // line 225
                    echo "                        </div>
                        <div class=\"sc-module-cart d-flex align-items-stretch justify-content-between\">
                            ";
                    // line 227
                    if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 227)) && twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 227))) {
                        // line 228
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 228) ||  !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 228))) {
                            // line 229
                            echo "                                <div class=\"sc-module-quantity";
                            if ((($context["quantity_show"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", true, true, false, 229) && twig_get_attribute($this->env, $this->source, $context["product"], "quantity_show", [], "any", false, false, false, 229)))) {
                                echo " d-flex";
                            } else {
                                echo " d-none";
                            }
                            echo " align-items-center justify-content-center py-1 br-12\">
                                    <button type=\"button\" aria-label=\"Minus\" class=\"sc-module-quantity-btn d-flex align-items-center justify-content-center sc-minus\">
                                        <span class=\"minus\"></span>
                                    </button>
                                    <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"1\" aria-label=\"Quantity\" inputmode=\"numeric\">
                                    <button type=\"button\" aria-label=\"Plus\" class=\"sc-module-quantity-btn d-flex align-items-center justify-content-center sc-plus\">
                                        <span class=\"plus\"></span>
                                    </button>
                                </div>
                                ";
                        }
                        // line 239
                        echo "                                <button type=\"button\" aria-label=\"To cart\" class=\"sc-btn sc-btn-primary sc-btn-with-icon br-4 sc-module-cart-btn\">
                                    <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--btn-cart-icon\" alt=\"\" width=\"20\" height=\"20\" class=\"sc-btn-icon sc-btn-icon-cart-img\">
                                    <span class=\"sc-btn-text\">";
                        // line 241
                        echo ($context["button_cart"] ?? null);
                        echo "</span>
                                </button>
                            ";
                    }
                    // line 244
                    echo "                            <input type=\"hidden\" name=\"product_id\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 244);
                    echo "\" />
                        </div>
                        ";
                    // line 246
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", true, true, false, 246) && twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 246))) {
                        // line 247
                        echo "                        <div class=\"sc-module-item-attr p-3 fsz-10 dark-text d-none d-md-block\">
                            ";
                        // line 248
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 248));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                            // line 249
                            echo "                            <div class=\"sc-module-item-attr-item\">
                                <span class=\"fw-500\">";
                            // line 250
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 250);
                            echo ":</span> ";
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 250);
                            echo "
                            </div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 253
                        echo "                        </div>
                        ";
                    }
                    // line 255
                    echo "                    </div>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 258
                echo "            ";
                if ((($context["show_type"] ?? null) == "width-infinity")) {
                    echo "</div></div>";
                }
                // line 259
                echo "        </div>
        ";
                // line 260
                if (((array_key_exists("show_more", $context) && ($context["show_more"] ?? null)) && (($context["show_type"] ?? null) != "width-infinity"))) {
                    // line 261
                    echo "        <div class=\"sc-module-showmore d-flex justify-content-center pb-md-3 pt-3\">
            <div class=\"oct-load-more-button-wrapper w-100 d-flex align-items-center justify-content-center\">
                <input type=\"hidden\" id=\"more_";
                    // line 263
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "\" name=\"more_";
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "\" value=\"";
                    echo ($context["page"] ?? null);
                    echo "\">
                <button id=\"btn_";
                    // line 264
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "\" class=\"sc-btn sc-btn-primary br-4\" onclick=\"octShowMoreModule('";
                    echo ($context["module_id"] ?? null);
                    echo "', '";
                    if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                        echo "1";
                    } else {
                        echo "0";
                    }
                    echo "', 'btn_";
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "', 'sc-";
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "', 'more_";
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "', '";
                    echo ($context["oct_path"] ?? null);
                    echo "');\">
                    <span class=\"sc-btn-icon sc-btn-icon-showmore\"></span>
                    <span class=\"sc-btn-text\">";
                    // line 266
                    echo ($context["oct_show_more"] ?? null);
                    echo "</span>
                </button>
            </div>
        </div>
        ";
                }
                // line 271
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/module/oct_products_modules.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  829 => 271,  821 => 266,  792 => 264,  780 => 263,  776 => 261,  774 => 260,  771 => 259,  766 => 258,  758 => 255,  754 => 253,  743 => 250,  740 => 249,  736 => 248,  733 => 247,  731 => 246,  725 => 244,  719 => 241,  715 => 239,  697 => 229,  694 => 228,  692 => 227,  688 => 225,  684 => 223,  679 => 221,  674 => 220,  668 => 218,  665 => 217,  657 => 214,  654 => 213,  652 => 212,  649 => 211,  647 => 210,  644 => 209,  637 => 205,  632 => 202,  626 => 201,  622 => 199,  618 => 197,  615 => 196,  611 => 195,  607 => 193,  604 => 192,  596 => 190,  594 => 189,  588 => 188,  576 => 181,  567 => 178,  557 => 174,  555 => 173,  551 => 171,  548 => 170,  542 => 169,  536 => 166,  531 => 165,  529 => 164,  518 => 162,  515 => 161,  512 => 160,  507 => 159,  504 => 158,  498 => 156,  495 => 155,  489 => 153,  487 => 152,  481 => 149,  477 => 148,  473 => 147,  468 => 146,  464 => 144,  457 => 140,  452 => 139,  450 => 138,  446 => 137,  441 => 135,  434 => 133,  431 => 132,  426 => 131,  422 => 130,  419 => 129,  415 => 128,  410 => 127,  404 => 126,  380 => 124,  363 => 120,  354 => 116,  346 => 113,  343 => 112,  333 => 107,  329 => 105,  324 => 103,  319 => 102,  313 => 100,  310 => 99,  302 => 96,  299 => 95,  297 => 94,  294 => 93,  291 => 92,  284 => 88,  279 => 85,  273 => 84,  269 => 82,  265 => 80,  262 => 79,  258 => 78,  254 => 76,  251 => 75,  243 => 73,  241 => 72,  235 => 71,  223 => 64,  214 => 61,  204 => 57,  202 => 56,  198 => 54,  195 => 53,  189 => 52,  183 => 49,  178 => 48,  176 => 47,  165 => 45,  162 => 44,  159 => 43,  154 => 42,  151 => 41,  145 => 39,  142 => 38,  136 => 36,  134 => 35,  128 => 32,  124 => 31,  120 => 30,  115 => 29,  111 => 27,  104 => 23,  99 => 22,  97 => 21,  93 => 20,  88 => 18,  81 => 16,  78 => 15,  74 => 14,  68 => 13,  65 => 12,  61 => 10,  59 => 9,  54 => 8,  48 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/module/oct_products_modules.twig", "");
    }
}
