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

/* oct_showcase/template/product/product.twig */
class __TwigTemplate_46cdf084a4471e05c2e7421484866e6a74565487ad8716dae1da07490c0f20ec extends \Twig\Template
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
<div id=\"product-product\" class=\"container-fluid container-lg flex-grow-1 sc-product mobile-no-gutters\">
 \t<nav aria-label=\"breadcrumb\">
        <ul class=\"breadcrumb sc-breadcrumb fsz-12\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 6)) {
                // line 7
                echo "                <li class=\"breadcrumb-item sc-breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "</li>
            ";
            } else {
                // line 9
                echo "                <li class=\"breadcrumb-item sc-breadcrumb-item\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</a></li>
            ";
            }
            // line 11
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
    </nav>
    ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "micro", [], "any", true, true, false, 14) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "micro", [], "any", false, false, false, 14))) {
            // line 15
            echo "    <script type=\"application/ld+json\">
    {
        \"@context\": \"http://schema.org\",
        \"@type\": \"BreadcrumbList\",
        \"itemListElement\":
        [
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 22
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                ";
                } else {
                    // line 24
                    echo "                {
                    \"@type\": \"ListItem\",
                    \"position\": ";
                    // line 26
                    echo (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26) - 1);
                    echo ",
                    \"item\":
                    {
                        \"@id\": \"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 29);
                    echo "\",
                        \"name\": \"";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 30);
                    echo "\"
                    }
                }";
                    // line 32
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 32)) {
                        echo ",";
                    }
                    // line 33
                    echo "                ";
                }
                // line 34
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ]
    }
    </script>
    ";
        }
        // line 39
        echo "    <div class=\"content-top-box\">";
        echo ($context["content_top"] ?? null);
        echo "</div>
    ";
        // line 40
        if ((array_key_exists("oct_popup_purchase_status", $context) && ($context["can_buy"] ?? null))) {
            // line 41
            echo "        <div class=\"sc-product-fixed-btns position-fixed d-md-none py-2 px-3\">
            <div class=\"d-flex align-items-center justify-content-between\">
                <button type=\"button\" name=\"button\" class=\"sc-btn sc-btn-outline sc-btn-outline-primary br-4 small fsz-12 sc-product-one-click-btn\" onclick=\"octPopPurchase('";
            // line 43
            echo ($context["product_id"] ?? null);
            echo "')\">
                    ";
            // line 44
            echo ($context["oct_product_quickbuy"] ?? null);
            echo "
                </button>
                <div class=\"sc-module-quantity\" hidden>
                    <input type=\"hidden\" class=\"form-control\" name=\"quantity\" value=\"";
            // line 47
            echo ($context["minimum"] ?? null);
            echo "\" id=\"fixed-input-quantity\"/>
                    <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 48
            echo ($context["product_id"] ?? null);
            echo "\"/>
                    <input type=\"hidden\" id=\"fixed-min-product-quantity\" value=\"";
            // line 49
            echo ($context["minimum"] ?? null);
            echo "\" name=\"min_quantity\">
                </div>
                <button type=\"button\" class=\"sc-btn sc-btn-primary small br-4 fsz-12 sc-product-fixed-cart-btn\">
                    <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--btn-cart-icon\" alt=\"\" width=\"16\" height=\"16\" class=\"sc-btn-icon sc-btn-icon-cart-img\">
                    <span class=\"sc-btn-text\">";
            // line 53
            echo ($context["button_cart"] ?? null);
            echo "</span>
                </button>
            </div>
        </div>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                showProductButtons();
            });
        </script>
    ";
        }
        // line 63
        echo "    <main class=\"main\">
        <div class=\"row\">
            <div class=\"col-12 sc-page-title pb-3\">
                <h1>";
        // line 66
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
        </div>
        <div id=\"content\" class=\"row\">
            <div class=\"col-12 sc-product-tabs-box sticky-md-top\">
                <div id=\"oct-tabs\" class=\"sc-product-tabs d-flex align-items-stretch w-100\">
                    <div data-tab-target=\".breadcrumb\" class=\"sc-product-tab d-flex align-items-center justify-content-center active\">
                        <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-tab-info-icon\" alt=\"\" width=\"24\" height=\"24\">
                        <span class=\"sc-product-tab-title ps-2 fsz-14\">";
        // line 74
        echo ($context["oct_product_maintab"] ?? null);
        echo "</span>
                    </div>
                    ";
        // line 76
        if (($context["attribute_groups"] ?? null)) {
            // line 77
            echo "                    <div data-tab-target=\".sc-product-content-attributes\" class=\"sc-product-tab sc-product-tab-attributes d-flex align-items-center justify-content-center\">
                        <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-tab-attr-icon\" alt=\"\" width=\"24\" height=\"24\">
                        <span class=\"sc-product-tab-title ps-2 fsz-14\">";
            // line 79
            echo ($context["tab_attribute"] ?? null);
            echo "</span>
                    </div>
                    ";
        }
        // line 82
        echo "                    ";
        if (($context["review_status"] ?? null)) {
            // line 83
            echo "                    <div data-tab-target=\".sc-product-content-reviews\" class=\"sc-product-tab sc-product-tab-reviews d-flex align-items-center justify-content-center\">
                        <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-tab-reviews-icon\" alt=\"\" width=\"24\" height=\"24\">
                        ";
            // line 85
            echo ($context["tab_review"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 88
        echo "                    ";
        if (($context["oct_product_faq"] ?? null)) {
            // line 89
            echo "                    <div data-tab-target=\".sc-product-content-faq\" class=\"sc-product-tab d-flex align-items-center justify-content-center\">
                        <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-tab-faq-icon\" alt=\"\" width=\"24\" height=\"24\">
                        ";
            // line 91
            echo ($context["tab_oct_faq"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 94
        echo "                    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", true, true, false, 94) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 94)) && (twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", true, true, false, 94) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 94)))) {
            // line 95
            echo "                    <div data-tab-target=\"#product_dop_tab\" class=\"sc-product-tab d-flex align-items-center justify-content-center\">
                        <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-tab-extra-icon\" alt=\"\" width=\"24\" height=\"24\">
                        <span class=\"sc-product-tab-title ps-2 fsz-14\">";
            // line 97
            echo twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 97);
            echo "</span>
                    </div>
                    ";
        }
        // line 100
        echo "                    ";
        if (($context["oct_product_extra_tabs"] ?? null)) {
            // line 101
            echo "                        ";
            $context["key"] = 0;
            // line 102
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_extra_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra_tab"]) {
                // line 103
                echo "                            ";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 104
                echo "                            <div data-tab-target=\"#product_extra_tab-";
                echo ($context["key"] ?? null);
                echo "\" class=\"sc-product-tab d-flex align-items-center justify-content-center\">
                                <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-tab-extra-icon\" alt=\"\" width=\"24\" height=\"24\">
                                <span class=\"sc-product-tab-title ps-2 fsz-14\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["extra_tab"], "title", [], "any", false, false, false, 106);
                echo "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                    ";
        }
        // line 110
        echo "                    ";
        if (($context["products"] ?? null)) {
            // line 111
            echo "                    <div data-tab-target=\"#sc-related-products_0\" class=\"sc-product-tab d-flex align-items-center justify-content-center\">
                        <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M8.48149 7.43827C8.17078 7.80075 8 8.26243 8 8.73985V17C8 18.1046 8.89543 19 10 19H17.3308C18.2974 19 19.1257 18.3088 19.2986 17.3578L20.5713 10.3578C20.7945 9.13009 19.8514 8 18.6036 8H14L15.6279 3.11634C15.8414 2.47579 15.5514 1.77571 14.9475 1.47375V1.47375C14.3906 1.19532 13.7158 1.33161 13.3106 1.80431L8.48149 7.43827Z\" stroke=\"#8F90A6\"/>
                            <path d=\"M4 18V9\" stroke=\"#8F90A6\" stroke-linecap=\"round\"/>
                        </svg>
                        <span class=\"sc-product-tab-title ps-2 fsz-14\">";
            // line 116
            echo ($context["oct_related_products"] ?? null);
            echo "</span>
                    </div>
                    ";
        }
        // line 119
        echo "                </div>
                <script>
                window.addEventListener('DOMContentLoaded', () => {
                    octProductTabs();
                });
                </script>
            </div>
            <div id=\"productImages\" class=\"col-lg-6 mt-md-3\">
                <div class=\"content-block sc-product-images px-0 pt-3 pt-md-4 mobile-no-radius no-hover-shadow sticky-md-top\">
                    <div class=\"sc-module-stickers d-flex align-items-center justify-content-between mb-3 px-3 px-md-4\">
                        <div class=\"sc-module-stickers-left d-flex align-items-center\">
                            ";
        // line 130
        if ((($context["special"] ?? null) && ($context["oct_sticker_you_save"] ?? null))) {
            // line 131
            echo "                                <div id=\"main-product-you-save\" class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-red\">";
            echo ($context["you_save"] ?? null);
            echo "</div>
                            ";
        }
        // line 133
        echo "                            ";
        if (($context["oct_product_stickers"] ?? null)) {
            // line 134
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_stickers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                // line 135
                echo "                                    ";
                if (( !twig_test_empty($context["oct_sticker"]) && twig_test_iterable($context["oct_sticker"]))) {
                    // line 136
                    echo "                                        <div class=\"sc-module-sticker sc-module-sticker-image pe-0 py-0 order-1\">
                                            <img src=\"";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "image", [], "any", false, false, false, 137);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 137);
                    echo "\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 137);
                    echo "\" data-bs-content=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "description", [], "any", false, false, false, 137);
                    echo "\" width=\"24\" height=\"24\" />
                                        </div>
                                    ";
                } elseif ( !twig_test_empty(                // line 139
$context["oct_sticker"])) {
                    // line 140
                    echo "                                        <div class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-";
                    echo $context["key"];
                    echo "\">
                                            ";
                    // line 141
                    echo $context["oct_sticker"];
                    echo "
                                        </div>
                                    ";
                }
                // line 144
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                            ";
        }
        // line 146
        echo "                        </div>
                        <div class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-green";
        // line 147
        if (($context["out_of_stock"] ?? null)) {
            echo " out-of-stock";
        }
        echo "\">";
        if ((($context["oct_stock_display"] ?? null) &&  !($context["out_of_stock"] ?? null))) {
            echo " ";
            echo ($context["oct_product_config_stock_display"] ?? null);
            echo " ";
        }
        echo ($context["stock"] ?? null);
        echo "</div>
                    </div>
                    ";
        // line 149
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 150
            echo "                        ";
            if (($context["thumb"] ?? null)) {
                // line 151
                echo "                            <div class=\"sc-product-images-main px-3\">
                                <div class=\"sc-product-images-slide pb-3 pb-md-4\">
                                    <a href=\"";
                // line 153
                echo ($context["popup"] ?? null);
                echo "\" class=\"oct-gallery d-block\" onclick=\"return false;\">
                                        <img src=\"";
                // line 154
                echo ($context["thumb"] ?? null);
                echo "\" class=\"d-block mx-auto\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo ($context["thumb_width"] ?? null);
                echo "\" height=\"";
                echo ($context["thumb_height"] ?? null);
                echo "\" />
                                    </a>
                                </div>
                                ";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 158
                    echo "                                    ";
                    $context["i"] = ($context["key"] + 1);
                    // line 159
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 159) > 0)) {
                        // line 160
                        echo "                                        <div class=\"sc-product-images-slide pb-3 pb-md-4\">
                                            <a href=\"";
                        // line 161
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup_fancy", [], "any", false, false, false, 161);
                        echo "\" class=\"oct-gallery d-block\" onclick=\"return false;\">
                                                <img src=\"";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 162);
                        echo "\" class=\"d-block mx-auto\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo ($context["thumb_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["thumb_height"] ?? null);
                        echo "\" />
                                            </a>
                                        </div>
                                    ";
                    }
                    // line 166
                    echo "                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "                            </div>
                        ";
            }
            // line 169
            echo "                        ";
            if (($context["images"] ?? null)) {
                // line 170
                echo "                            <div class=\"sc-product-images-additional mt-xxl-3 d-none d-md-flex align-items-stretch\">
                                ";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 172
                    echo "                                    ";
                    $context["i"] = ($context["key"] + 1);
                    // line 173
                    echo "                                    <a class=\"sc-product-images-additional-item\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 173);
                    echo "\" onClick=\"return false;\" data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 173);
                    echo "\">
                                        <img src=\"";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 174);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "images_width", [], "any", false, false, false, 174);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "images_height", [], "any", false, false, false, 174);
                    echo "\" />
                                    </a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "                            </div>
                        ";
            }
            // line 179
            echo "                        <script>
                            \$(function() {
                                setTimeout(function() {
                                    \$('#image-additional').slick('refresh');
                                    \$('.image-additional-box').addClass('overflow-visible');
                                }, 500);

                                var sliderProducts = \$('.sc-product-images-main a');

                                sliderProducts.on('click', function(e) {
                                    e.preventDefault();

                                    var totalSlides = \$(this).parents('.sc-product-images-main').slick(\"getSlick\").slideCount,
                                    dataIndex = \$(this).parents('.sc-product-images-slide').data('slick-index'),
                                    trueIndex;

                                    switch(true) {
                                        case (dataIndex < 0):
                                            trueIndex = totalSlides+dataIndex;

                                            break;
                                        case (dataIndex >= totalSlides):
                                            trueIndex = dataIndex%totalSlides;

                                            break;
                                        default:
                                            trueIndex = dataIndex;
                                    }

                                    \$.fancybox.open(sliderProducts, {backFocus: false, hideScrollbar: false, loop : true}, trueIndex);

                                    return false;
                                });

                                ";
            // line 213
            if (($context["images"] ?? null)) {
                // line 214
                echo "                                \$('.sc-product-images-main').slick({
                                    infinite: true,
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    fade: false,
                                    draggable: false,
                                    asNavFor: '.sc-product-images-additional',
                                    dots: false,
                                    arrows: false,
                                    responsive: [
                                        {
                                            breakpoint: 768,
                                            settings: {
                                                dots: ";
                // line 227
                if ((twig_length_filter($this->env, ($context["images"] ?? null)) <= 1)) {
                    echo "false";
                } else {
                    echo "true";
                }
                // line 228
                echo "                                            }
                                        }
                                    ]
                                });
                                \$('.sc-product-images-additional').slick({
                                    infinite: ";
                // line 233
                if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 3)) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo ",
                                    slidesToShow: 6,
                                    slidesToScroll: 1,
                                    focusOnSelect: true,
                                    asNavFor: '.sc-product-images-main',
                                    dots: false,
                                    prevArrow: '<button type=\"button\" class=\"slick-slider-btn slick-slider-btn-prev sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden\"><span class=\"sc-btn-icon\" aria-label=\"Previous\"></span></button>',
                                    nextArrow: '<button type=\"button\" class=\"slick-slider-btn slick-slider-btn-next sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden\"><span class=\"sc-btn-icon\" aria-label=\"Next\"></span></button>',
                                    responsive: [
                                        {
                                            breakpoint: 1600,
                                            settings: {
                                                slidesToShow: 6,
                                                slidesToScroll: 1
                                            }
                                        }, {
                                            breakpoint: 1200,
                                            settings: {
                                                slidesToShow: 6,
                                                slidesToScroll: 1
                                            }
                                        }, {
                                            breakpoint: 992,
                                            settings: {
                                                slidesToShow: 6,
                                                slidesToScroll: 1
                                            }
                                        }, {
                                            breakpoint: 376,
                                            settings: {
                                                slidesToShow: 6,
                                                slidesToScroll: 1
                                            }
                                        }
                                    ]
                                });
                                ";
            } else {
                // line 270
                echo "                                    \$('.sc-product-images-main').slick({});
                                ";
            }
            // line 272
            echo "                            });
                        </script>
                    ";
        }
        // line 275
        echo "                </div>
            </div>
            <div id=\"product\" class=\"col-lg-6 mt-3\">
                <div class=\"sc-product-info d-flex flex-column flex-md-row flex-lg-column flex-xl-row align-items-start align-items-md-center align-items-lg-start align-items-xl-center justify-content-between fsz-12 light-text\">
                    <div class=\"sc-product-info-left d-flex align-items-center w-100 w-md-auto justify-content-between justify-content-md-start\">
                        ";
        // line 280
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "product_model", [], "any", true, true, false, 280) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "product_model", [], "any", false, false, false, 280) == "on"))) {
            // line 281
            echo "                            <div class=\"sc-product-info-item p-1 br-4\">
                                <span class=\"dark-text\">";
            // line 282
            echo ($context["text_model"] ?? null);
            echo "</span> ";
            echo ($context["model"] ?? null);
            echo "
                            </div>
                        ";
        }
        // line 285
        echo "                        ";
        if (($context["manufacturer"] ?? null)) {
            // line 286
            echo "                            <div class=\"sc-product-info-item p-1 br-4";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "product_model", [], "any", true, true, false, 286) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "product_model", [], "any", false, false, false, 286) == "on"))) {
                echo " ms-3";
            }
            echo "\">
                                <span class=\"dark-text\">";
            // line 287
            echo ($context["text_manufacturer"] ?? null);
            echo "</span> <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" class=\"blue-link\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a>
                            </div>
                        ";
        }
        // line 290
        echo "                    </div>
                    ";
        // line 291
        if (($context["review_status"] ?? null)) {
            // line 292
            echo "                    <div class=\"sc-product-info-right mt-3 mt-md-0 mt-lg-3 mt-xl-0\">
                        <div class=\"sc-product-info-item p-1 br-4 d-flex align-items-center\">
                            <span class=\"blue-link\" id=\"reviewTabTrigger\">";
            // line 294
            echo ($context["oct_product_reviews"] ?? null);
            echo "</span>
                            <script>
                                window.addEventListener('DOMContentLoaded', () => {
                                    let screenWidth = window.innerWidth;

                                    document.getElementById('reviewTabTrigger').addEventListener('click', () => {
                                        if (screenWidth < 768) {
                                            scrollToElement('.sc-product-content-reviews', '.sc-product-tab-reviews', -80);
                                        } else {
                                            scrollToElement('.sc-product-content-reviews', '.sc-product-tab-reviews', -140);
                                        }
                                    });
                                });
                            </script>
                            <span class=\"sc-product-info-item-badge br-4 mx-2 dark-text\">";
            // line 308
            echo ($context["total_reviews"] ?? null);
            echo "</span>
                            <div class=\"sc-module-rating-stars d-flex align-items-center\">
                                ";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 311
                echo "                                    ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 312
                    echo "                                        <span class=\"sc-module-rating-star\"></span>
                                    ";
                } else {
                    // line 314
                    echo "                                        <span class=\"sc-module-rating-star sc-module-rating-star-is\"></span>
                                    ";
                }
                // line 316
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 317
            echo "                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 321
        echo "                </div>
                <div class=\"content-block sc-product-actions mt-3 p-0 mobile-no-radius no-hover-shadow\">
                    <div class=\"sc-product-actions-top d-flex justify-content-between p-3 pb-4";
        // line 323
        if (($context["can_buy"] ?? null)) {
            echo " with-border";
        }
        echo "\">
                        <div class=\"sc-product-actions-top-left\">
                            ";
        // line 325
        if (((array_key_exists("oct_popup_found_cheaper_status", $context) && (($context["oct_popup_found_cheaper_status"] ?? null) == "on")) && ($context["can_buy"] ?? null))) {
            // line 326
            echo "                                <span class=\"blue-link fsz-12\" onclick=\"octPopupFoundCheaper('";
            echo ($context["product_id"] ?? null);
            echo "');\">";
            echo ($context["oct_product_cheaper"] ?? null);
            echo "</span>
                            ";
        }
        // line 328
        echo "                            ";
        if (($context["price"] ?? null)) {
            // line 329
            echo "                                <div class=\"sc-module-price-box pt-3\">
                                    ";
            // line 330
            if ( !($context["special"] ?? null)) {
                // line 331
                echo "                                        <div class=\"sc-module-price fw-800 dark-text mt-1 fsz-20\">";
                echo ($context["price"] ?? null);
                echo "</div>
                                    ";
            } else {
                // line 333
                echo "                                        <div class=\"sc-module-price-old light-text fsz-14\">";
                echo ($context["price"] ?? null);
                echo "</div>
                                        <div class=\"sc-module-price fw-800 dark-text mt-1 fsz-20\">";
                // line 334
                echo ($context["special"] ?? null);
                echo "</div>
                                        ";
                // line 335
                if (($context["product_timer"] ?? null)) {
                    // line 336
                    echo "                                            <div class=\"sc-product-timer d-flex-inline mt-2\">
                                                <div class=\"sc-product-timer-text dark-text fw-600 fsz-12\">";
                    // line 337
                    echo ($context["oct_product_timer"] ?? null);
                    echo "</div>
                                                <div class=\"sc-product-timer-inner d-inline-flex align-items-start justify-content-center\">
                                                    <div class=\"d-flex flex-column align-items-center\">
                                                        <div id=\"sc-timer-days\" class=\"sc-product-timer-number red fw-600\"></div>
                                                        <span class=\"dark-text fsz-10\">";
                    // line 341
                    echo ($context["oct_product_timer_days"] ?? null);
                    echo "</span>
                                                    </div>
                                                    <div class=\"sc-product-timer-delimiter animated\">:</div>
                                                    <div class=\"d-flex flex-column align-items-center\">
                                                        <div id=\"sc-timer-hours\" class=\"sc-product-timer-number red fw-600\"></div>
                                                        <span class=\"dark-text fsz-10\">";
                    // line 346
                    echo ($context["oct_product_timer_hours"] ?? null);
                    echo "</span>
                                                    </div>
                                                    <div class=\"sc-product-timer-delimiter animated\">:</div>
                                                    <div class=\"d-flex flex-column align-items-center\">
                                                        <div id=\"sc-timer-minutes\" class=\"sc-product-timer-number red fw-600\"></div>
                                                        <span class=\"dark-text fsz-10\">";
                    // line 351
                    echo ($context["oct_product_timer_minutes"] ?? null);
                    echo "</span>
                                                    </div>
                                                    <div class=\"sc-product-timer-delimiter animated\">:</div>
                                                    <div class=\"d-flex flex-column align-items-center\">
                                                        <div id=\"sc-timer-seconds\" class=\"sc-product-timer-number red fw-600\"></div>
                                                        <span class=\"dark-text fsz-10\">";
                    // line 356
                    echo ($context["oct_product_timer_seconds"] ?? null);
                    echo "</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                timerSpecial('.sc-product-timer', '";
                    // line 361
                    echo ($context["special_date_end"] ?? null);
                    echo "T00:00:00');
                                            </script>
                                        ";
                }
                // line 364
                echo "                                    ";
            }
            // line 365
            echo "                                    ";
            if (($context["tax"] ?? null)) {
                // line 366
                echo "                                        <div class=\"price-tax fsz-10 fw-300 mt-1\">";
                echo ($context["text_tax"] ?? null);
                echo "
                                            <span>";
                // line 367
                echo ($context["tax"] ?? null);
                echo "</span>
                                        </div>
                                    ";
            }
            // line 370
            echo "                                    ";
            if (($context["discounts"] ?? null)) {
                // line 371
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 372
                    echo "                                            <div class=\"sc-product-price-discount fsz-12 mt-1\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 372);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 372);
                    echo "</div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                echo "                                    ";
            }
            // line 375
            echo "                                    ";
            if ((($context["minimum"] ?? null) > 1)) {
                // line 376
                echo "                                        <div class=\"sc-product-option-minquant fsz-12 mt-1\">";
                echo ($context["text_minimum"] ?? null);
                echo "</div>
                                    ";
            }
            // line 378
            echo "                                    ";
            if (($context["points"] ?? null)) {
                // line 379
                echo "                                        <div class=\"sc-product-option-bonus fsz-12 mt-1\">";
                echo ($context["text_points"] ?? null);
                echo "
                                            ";
                // line 380
                echo ($context["points"] ?? null);
                echo "</div>
                                    ";
            }
            // line 382
            echo "                                    ";
            if (($context["reward"] ?? null)) {
                // line 383
                echo "                                        <div class=\"sc-product-option-bonus fsz-12 mt-1\">";
                echo ($context["text_reward"] ?? null);
                echo "
                                            ";
                // line 384
                echo ($context["reward"] ?? null);
                echo "</div>
                                    ";
            }
            // line 386
            echo "                                    ";
            if (($context["recurrings"] ?? null)) {
                // line 387
                echo "                                        <div class=\"form-group d-flex flex-column flex-md-row align-items-md-center\">
                                            <div class=\"sc-control-label fw-600 dark-text fsz-14\">";
                // line 388
                echo ($context["text_payment_recurring"] ?? null);
                echo "
                                                <span class=\"required\"> *</span></div>
                                            <div class=\"form-group\">
                                                <select name=\"recurring_id\" class=\"sc-select form-control\">
                                                    <option value=\"\">";
                // line 392
                echo ($context["text_select"] ?? null);
                echo "</option>
                                                    ";
                // line 393
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                    // line 394
                    echo "                                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 394);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 394);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 396
                echo "                                                </select>
                                                <div class=\"help-block\" id=\"recurring-description\"></div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 401
            echo "                                </div>
                            ";
        }
        // line 403
        echo "                            ";
        if ((array_key_exists("oct_popup_purchase_status", $context) && ($context["can_buy"] ?? null))) {
            // line 404
            echo "                                <button type=\"button\" class=\"sc-btn sc-btn-secondary d-none d-md-flex br-4 fsz-12 fw-400 mt-3 sc-product-one-click-btn\" onclick=\"octPopPurchase('";
            echo ($context["product_id"] ?? null);
            echo "')\"><span class=\"sc-btn-text\">";
            echo ($context["oct_product_quickbuy"] ?? null);
            echo "</span></button>
                            ";
        }
        // line 406
        echo "                            ";
        if ((array_key_exists("product_js_button", $context) && ($context["product_js_button"] ?? null))) {
            // line 407
            echo "                                <div class=\"sc-product-social-buttons mt-3\">";
            echo ($context["product_js_button"] ?? null);
            echo "</div>
                            ";
        }
        // line 409
        echo "                        </div>
                        <div class=\"sc-product-actions-top-right d-flex align-items-start gap-2\">
                            <button type=\"button\" class=\"sc-btn sc-btn-secondary sc-btn-with-icon br-4 sc-wishlist-btn\" onclick=\"wishlist.add('";
        // line 411
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\" aria-label=\"Wishlist button\">
                                <span class=\"sc-btn-icon sc-btn-icon-wishlist\"></span>
                            </button>
                            <button type=\"button\" class=\"sc-btn sc-btn-secondary sc-btn-with-icon br-4 sc-compare-btn\" onclick=\"compare.add('";
        // line 414
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\" aria-label=\"Compare button\">
                                <span class=\"sc-btn-icon sc-btn-icon-compare\"></span>
                            </button>
                        </div>
                    </div>
                    ";
        // line 419
        if (($context["can_buy"] ?? null)) {
            // line 420
            echo "                        <div class=\"sc-product-actions-middle px-3 py-4\">
                            ";
            // line 421
            if (($context["options"] ?? null)) {
                // line 422
                echo "                                <div id=\"sc-product-options\" class=\"sc-product-options mb-4\">
                                    ";
                // line 423
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 424
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 424) == "select")) {
                        // line 425
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"sc-control-label fw-600 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 426
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 426);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 426);
                        echo "
                                                    ";
                        // line 427
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 427)) {
                            // line 428
                            echo "                                                        <span class=\"required option-required\"> *</span>
                                                    ";
                        }
                        // line 430
                        echo "                                                </label>
                                                <select name=\"option[";
                        // line 431
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 431);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 431);
                        echo "\" class=\"sc-select form-control\">
                                                    <option value=\"\">";
                        // line 432
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                                                    ";
                        // line 433
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 433));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 434
                            echo "                                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 434);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 434);
                            echo "
                                                            ";
                            // line 435
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 435)) {
                                // line 436
                                echo "                                                                (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 436);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 436);
                                echo ")
                                                            ";
                            }
                            // line 438
                            echo "                                                        </option>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 440
                        echo "                                                </select>
                                            </div>
                                        ";
                    }
                    // line 443
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 443) == "radio")) {
                        // line 444
                        echo "                                            <div class=\"form-group d-flex flex-column flex-md-row align-items-md-center mb-3\">
                                                <label class=\"sc-control-label fw-600 dark-text fsz-14\">";
                        // line 445
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 445);
                        echo "
                                                    ";
                        // line 446
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 446)) {
                            // line 447
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 448
                        echo "                                                </label>
                                                <div id=\"input-option";
                        // line 449
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 449);
                        echo "\" class=\"options-box d-flex mt-3 mt-sm-0\">
                                                    ";
                        // line 450
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 450));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 451
                            echo "                                                        <div class=\"radio\">
                                                            <label
                                                                data-bs-toggle=\"tooltip\"
                                                                data-bs-placement=\"top\"
                                                                class=\"option optid-";
                            // line 455
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 455);
                            echo " not-selected";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 455)) {
                                echo " radio-img";
                            } else {
                                echo " sc-radio";
                            }
                            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 455), ($context["allowed_options_ids"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 455) == 1))) {
                                echo " auto-choose";
                            }
                            echo "\"
                                                                title=\"";
                            // line 456
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 456);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 456)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 456);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 456);
                            }
                            echo "\">
                                                                <input type=\"radio\" name=\"option[";
                            // line 457
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 457);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 457);
                            echo "\" class=\"input-radio\"/>
                                                                ";
                            // line 458
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 458)) {
                                // line 459
                                echo "                                                                    <img src=\"";
                                if ((((array_key_exists("oct_product_main_image_option_status", $context) && ($context["oct_product_main_image_option_status"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["option_value"], "o_v_image", [], "any", true, true, false, 459)) && twig_get_attribute($this->env, $this->source, $context["option_value"], "o_v_image", [], "any", false, false, false, 459))) {
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "o_v_image", [], "any", false, false, false, 459);
                                } else {
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 459);
                                }
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 459);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 459)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 459);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 459);
                                    echo " ";
                                }
                                echo "\" width=\"50\" height=\"50\" />
                                                                ";
                            } else {
                                // line 461
                                echo "                                                                    ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 461);
                                echo "
                                                                ";
                            }
                            // line 463
                            echo "                                                            </label>
                                                            <script>
                                                                \$(document).ready(function() {
                                                                    \$(document).on('click', 'label.optid-";
                            // line 466
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 466);
                            echo "', function(event) {
                                                                        \$('label.optid-";
                            // line 467
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 467);
                            echo "').removeClass('selected').addClass('not-selected');
                                                                        \$(this).removeClass('not-selected').addClass('selected');
                                                                    });
                                                                });
                                                            </script>
                                                        </div>
                                                    ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 474
                        echo "                                                </div>
                                            </div>
                                        ";
                    }
                    // line 477
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 477) == "checkbox")) {
                        // line 478
                        echo "                                            <div class=\"form-checkbox-group mb-3\">
                                                <div class=\"sc-control-label fw-600 dark-text fsz-14 mb-2\">";
                        // line 479
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 479);
                        echo "
                                                    ";
                        // line 480
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 480)) {
                            // line 481
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 482
                        echo "                                                </div>
                                                <div id=\"input-option";
                        // line 483
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 483);
                        echo "\">
                                                    ";
                        // line 484
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 484));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 485
                            echo "                                                        <div class=\"form-check d-flex align-items-center mb-0\">
                                                            <label class=\"form-check-label\">
                                                                ";
                            // line 487
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 487)) {
                                echo "<img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 487);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 487);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 487)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 487);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 487);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" width=\"50\" height=\"50\" />";
                            }
                            // line 488
                            echo "                                                                <input type=\"checkbox\" id=\"option[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 488);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 488);
                            echo "]\" name=\"option[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 488);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 488);
                            echo "\" class=\"form-check-input\"/>
                                                                ";
                            // line 489
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 489);
                            echo "
                                                                ";
                            // line 490
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 490)) {
                                // line 491
                                echo "                                                                    (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 491);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 491);
                                echo ")
                                                                ";
                            }
                            // line 493
                            echo "                                                            </label>
                                                        </div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 496
                        echo "                                                </div>
                                            </div>
                                        ";
                    }
                    // line 499
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 499) == "text")) {
                        // line 500
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"sc-control-label fw-600 dark-text fsz-14\" for=\"input-option";
                        // line 501
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 501);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 501);
                        echo "
                                                    ";
                        // line 502
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 502)) {
                            // line 503
                            echo "                                                        <span class=\"required option-required\"> *</span>
                                                    ";
                        }
                        // line 505
                        echo "                                                </label>
                                                <input type=\"text\" name=\"option[";
                        // line 506
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 506);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 506);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 506);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 506);
                        echo "\" class=\"form-control\" inputmode=\"text\">
                                            </div>
                                        ";
                    }
                    // line 509
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 509) == "textarea")) {
                        // line 510
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"sc-control-label fw-600 dark-text fsz-14\" for=\"input-option";
                        // line 511
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 511);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 511);
                        echo "
                                                    ";
                        // line 512
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 512)) {
                            // line 513
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 514
                        echo "                                                </label>
                                                <textarea name=\"option[";
                        // line 515
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 515);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 515);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 515);
                        echo "\" class=\"form-control\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 515);
                        echo "</textarea>
                                            </div>
                                        ";
                    }
                    // line 518
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 518) == "file")) {
                        // line 519
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"sc-control-label fw-600 dark-text fsz-14\">";
                        // line 520
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 520);
                        echo "
                                                    ";
                        // line 521
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 521)) {
                            // line 522
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 523
                        echo "                                                </label>
                                                <button type=\"button\" id=\"button-upload";
                        // line 524
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 524);
                        echo "\" data-loading-text=\"";
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"sc-btn sc-btn-primary br-4\">
                                                    <i class=\"fa fa-upload me-2\"></i>
                                                    ";
                        // line 526
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                                                <input type=\"hidden\" name=\"option[";
                        // line 527
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 527);
                        echo "]\" value=\"\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 527);
                        echo "\"/>
                                            </div>
                                        ";
                    }
                    // line 530
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 530) == "date")) {
                        // line 531
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"sc-control-label fw-600 dark-text fsz-14\" for=\"input-option";
                        // line 532
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 532);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 532);
                        echo "
                                                    ";
                        // line 533
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 533)) {
                            // line 534
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 535
                        echo "                                                </label>
                                                <div class=\"input-group date\">
                                                    <input type=\"date\" name=\"option[";
                        // line 537
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 537);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 537);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 537);
                        echo "\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 541
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 541) == "datetime")) {
                        // line 542
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"sc-control-label fw-600 dark-text fsz-14\" for=\"input-option";
                        // line 543
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 543);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 543);
                        echo "
                                                    ";
                        // line 544
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 544)) {
                            // line 545
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 546
                        echo "                                                </label>
                                                <div class=\"input-group datetime\">
                                                    <input type=\"datetime-local\" name=\"option[";
                        // line 548
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 548);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 548);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 548);
                        echo "\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 552
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 552) == "time")) {
                        // line 553
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"sc-control-label fw-600 dark-text fsz-14\" for=\"input-option";
                        // line 554
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 554);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 554);
                        echo "
                                                    ";
                        // line 555
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 555)) {
                            // line 556
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 557
                        echo "                                                </label>
                                                <div class=\"input-group time\">
                                                    <input type=\"time\" name=\"option[";
                        // line 559
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 559);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 559);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 559);
                        echo "\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 563
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 564
                echo "                                </div>
                            ";
            }
            // line 566
            echo "                            <div class=\"sc-product-buttons d-flex align-items-center\">
                                <div class=\"sc-module-quantity d-flex align-items-center justify-content-center py-1 br-12\">
                                    <button type=\"button\" aria-label=\"Minus\" class=\"sc-module-quantity-btn d-flex align-items-center justify-content-center\" onclick=\"updateValueProduct(true, false, false);\">
                                        <span class=\"minus\"></span>
                                    </button>
                                    <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"";
            // line 571
            echo ($context["minimum"] ?? null);
            echo "\" id=\"input-quantity\" aria-label=\"Quantity\" inputmode=\"numeric\">
                                    <button type=\"button\" aria-label=\"Plus\" class=\"sc-module-quantity-btn d-flex align-items-center justify-content-center\" onclick=\"updateValueProduct(false, true, false);\">
                                        <span class=\"plus\"></span>
                                    </button>
                                    <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 575
            echo ($context["product_id"] ?? null);
            echo "\"/>
                                    <input type=\"hidden\" id=\"min-product-quantity\" value=\"";
            // line 576
            echo ($context["minimum"] ?? null);
            echo "\" name=\"min_quantity\">
                                    <input type=\"hidden\" id=\"max-product-quantity\" value=\"";
            // line 577
            echo ($context["max_quantity"] ?? null);
            echo "\" name=\"max_quantity\">
                                </div>
                                <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 579
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"sc-btn sc-btn-primary br-4 \">
                                    <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--btn-cart-icon\" alt=\"\" width=\"20\" height=\"20\" class=\"sc-btn-icon sc-btn-icon-cart-img\">
                                    <span class=\"sc-btn-text\">";
            // line 581
            echo ($context["button_cart"] ?? null);
            echo "</span>
                                </button>
                            </div>
                        </div>
                        ";
            // line 585
            echo ($context["oct_byoneclick"] ?? null);
            echo "
                    ";
        }
        // line 587
        echo "                </div>
                 ";
        // line 588
        if (($context["oct_attributs"] ?? null)) {
            // line 589
            echo "                    <div class=\"sc-product-attr d-none d-md-block\">
                        <div class=\"sc-product-attr-title p-3\">
                            <span class=\"fsz-14 dark-text fw-600\">";
            // line 591
            echo ($context["oct_product_attributes"] ?? null);
            echo "</span>
                            <span class=\"blue-link fsz-12\" id=\"attr-quick-view\" onclick=\"scrollToElement('.sc-product-content-attributes', '.sc-product-tab-attributes', -140);\">";
            // line 592
            echo ($context["oct_product_attributes_seeall"] ?? null);
            echo "</span>
                        </div>
                        <div class=\"sc-product-attr-list fsz-14\">
                            ";
            // line 595
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_attributs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 596
                echo "                            <div class=\"sc-product-attr-list-item d-flex\">
                                <div class=\"dark-text fw-500 fsz-14\">";
                // line 597
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 597);
                echo "</div>
                                <div>";
                // line 598
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 598);
                echo "</div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 601
            echo "                        </div>
                    </div>
                ";
        }
        // line 604
        echo "            </div>
            <div class=\"sc-product-content col-12\">
                <div class=\"row g-0\">
                    <div class=\"col-lg-8 col-xl-9 sc-product-content-left py-3 py-lg-4 order-1 order-lg-0\">
                        ";
        // line 608
        if (($context["description"] ?? null)) {
            // line 609
            echo "                            <div class=\"sc-product-content-description pb-4 mb-md-4 px-3 px-lg-4\">
                                <div class=\"sc-product-content-title d-flex align-items-center\">
                                    <div class=\"sc-product-content-title-icon d-flex align-items-center justify-content-center br-4\">
                                        <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-content-description-icon\" alt=\"\" width=\"16\" height=\"16\">
                                    </div>
                                    <span class=\"fsz-24 fw-600 dark-text\">";
            // line 614
            echo ($context["oct_product_description"] ?? null);
            echo "</span>
                                </div>
                                <div class=\"sc-product-content-text dark-text fsz-14 mt-3\">
                                    ";
            // line 617
            echo ($context["description"] ?? null);
            echo "
                                    ";
            // line 618
            if (($context["tags"] ?? null)) {
                // line 619
                echo "                                        <p class=\"sc-product-tags\">";
                echo ($context["text_tags"] ?? null);
                echo "
                                            ";
                // line 620
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 621
                    echo "                                                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 621);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 621);
                    echo "</a>";
                    if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                        echo ",";
                    }
                    // line 622
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 623
                echo "                                        </p>
                                    ";
            }
            // line 625
            echo "                                </div>
                            </div>
                        ";
        }
        // line 628
        echo "                        ";
        if (($context["attribute_groups"] ?? null)) {
            // line 629
            echo "                            <div class=\"sc-product-content-attributes pb-4 mb-md-4 pt-4 pt-md-0 px-3 px-lg-4\">
                                <div class=\"sc-product-content-title d-flex align-items-center\">
                                    <div class=\"sc-product-content-title-icon d-flex align-items-center justify-content-center br-4\">
                                        <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-content-attrs-icon\" alt=\"\" width=\"16\" height=\"16\">
                                    </div>
                                    <span class=\"fsz-24 fw-600 dark-text\">";
            // line 634
            echo ($context["oct_product_attributes_tab"] ?? null);
            echo "</span>
                                </div>
                                <div class=\"dark-text fsz-14 mt-3\">
                                    ";
            // line 637
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 638
                echo "                                        <div class=\"sc-product-content-attributes-list\">
                                            <div class=\"sc-product-content-attributes-list-title\">";
                // line 639
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 639);
                echo "</div>
                                            ";
                // line 640
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 640));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 641
                    echo "                                                <div class=\"sc-product-content-attributes-list-item d-flex justify-content-between\">
                                                    <div>";
                    // line 642
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 642);
                    echo "</div>
                                                    <div>";
                    // line 643
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 643);
                    echo "</div>
                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 646
                echo "                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 648
            echo "                                </div>
                            </div>
                        ";
        }
        // line 651
        echo "                        ";
        if (($context["review_status"] ?? null)) {
            // line 652
            echo "                            <div class=\"sc-product-content-reviews pb-4 mb-md-4 pt-4 pt-md-0 px-3 px-lg-4\">
                                <div class=\"d-flex flex-column flex-md-row align-items-md-end justify-content-md-between\">
                                    <div class=\"mb-4 mb-md-0\">
                                        <div class=\"sc-product-content-title d-flex align-items-center\">
                                            <div class=\"sc-product-content-title-icon d-flex align-items-center justify-content-center br-4\">
                                                <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-content-reviews-icon\" alt=\"\" width=\"16\" height=\"16\">
                                            </div>
                                            <span class=\"fsz-24 fw-600 dark-text\">";
            // line 659
            echo ($context["tab_review_view"] ?? null);
            echo "</span>
                                        </div>
                                        <div class=\"sc-product-content-reviews-rating fw-600\"><span class=\"fsz-32 \">";
            // line 661
            echo ($context["oct_rating"] ?? null);
            echo "</span><span class=\"fsz-20 light-text\"> / 5</span></div>
                                        <div class=\"sc-product-content-reviews-rating-text light-text fsz-14 mb-4\">";
            // line 662
            echo ($context["tab_review_c"] ?? null);
            echo "</div>
                                        ";
            // line 663
            if (($context["review_guest"] ?? null)) {
                // line 664
                echo "                                            <button type=\"button\" class=\"sc-btn sc-btn-outline sc-btn-outline-primary br-4\" data-bs-toggle=\"modal\" data-bs-target=\"#reviewModal\">";
                echo ($context["tab_review_add"] ?? null);
                echo "</button>
                                            <div class=\"modal fade\" id=\"reviewModal\" tabindex=\"-1\" aria-labelledby=\"reviewModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header p-4\">
                                                            <h5 class=\"modal-title fsz-20 d-flex align-items-center justify-content-between\" id=\"reviewModalLabel\">";
                // line 669
                echo ($context["text_write"] ?? null);
                echo "</h5>
                                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                        </div>
                                                        <div class=\"modal-body p-4\">
                                                            <form id=\"popup_review_form\">
                                                                <div class=\"content-block d-flex modal-body-product br-8 mb-4\">
                                                                    <div class=\"modal-body-product-img p-2 br-8 d-flex align-items-center justify-content-center\">
                                                                        <img src=\"";
                // line 676
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"64\" height=\"64\">
                                                                    </div>
                                                                    <div class=\"modal-body-product-info ps-3 dark-text d-flex flex-column justify-content-between\">
                                                                        <div class=\"modal-body-product-title fw-700 fsz-12\">";
                // line 679
                echo ($context["heading_title"] ?? null);
                echo "</div>
                                                                        <div class=\"sc-module-rating-box d-flex align-items-center\">
                                                                            <span class=\"fw-700 dark-text pe-2 pe-sm-4\">";
                // line 681
                echo ($context["text_oct_review"] ?? null);
                echo "</span>
                                                                            <div class=\"sc-module-rating d-flex align-items-center br-4\">
                                                                                <div class=\"sc-module-rating-stars d-flex align-items-center\">
                                                                                    <label class=\"sc-module-rating-star sc-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"1\" checked/></label>
                                                                                    <label class=\"sc-module-rating-star sc-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"2\" checked/></label>
                                                                                    <label class=\"sc-module-rating-star sc-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"3\" checked/></label>
                                                                                    <label class=\"sc-module-rating-star sc-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"4\" checked/></label>
                                                                                    <label class=\"sc-module-rating-star sc-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"5\" checked/></label>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.addEventListener('DOMContentLoaded', () => {
                                                                                    reviewsRating('#popup_review_form');
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-group pb-3\">
                                                                     <label for=\"inputReviewName\" class=\"fsz-14 dark-text fw-500 pb-1\"><span class=\"required\">* </span>";
                // line 700
                echo ($context["entry_name"] ?? null);
                echo "</label>
                                                                    <input type=\"text\" name=\"name\" class=\"form-control\" id=\"inputReviewName\" placeholder=\"";
                // line 701
                echo ($context["entry_name"] ?? null);
                echo "\" inputmode=\"text\">
                                                                </div>
                                                                <div class=\"form-group pb-3\">
                                                                    <label for=\"inputReviewComment\" class=\"fsz-14 dark-text fw-500 pb-1\"><span class=\"required\">* </span>";
                // line 704
                echo ($context["oct_product_yourreview"] ?? null);
                echo "</label>
                                                                    <textarea id=\"inputReviewComment\" name=\"text\" class=\"form-control\" placeholder=\"";
                // line 705
                echo ($context["oct_product_yourreview"] ?? null);
                echo "\"></textarea>
                                                                </div>
                                                                <div class=\"sc-modal-comment fsz-12\">";
                // line 707
                echo ($context["text_note"] ?? null);
                echo "</div>
                                                                <div class=\"form-group pb-3\">
                                                                    ";
                // line 709
                echo ($context["captcha"] ?? null);
                echo "
                                                                </div>
                                                                <button type=\"button\" id=\"button-review\" class=\"sc-btn sc-btn-primary br-2\">";
                // line 711
                echo ($context["button_continue"] ?? null);
                echo "</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            // line 718
            echo "                                    </div>
                                    <div class=\"sc-product-content-reviews-summary\">
                                        ";
            // line 720
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_raiting_stats"] ?? null));
            foreach ($context['_seq'] as $context["oct_key"] => $context["oct_raiting_stat"]) {
                // line 721
                echo "                                            <div class=\"sc-product-content-reviews-rating-item d-flex align-items-center\">
                                                <div class=\"sc-product-content-reviews-rating-stars d-flex align-items-center\">
                                                    <span class=\"sc-module-rating-star";
                // line 723
                if (($context["oct_key"] >= 5)) {
                    echo " sc-module-rating-star-is";
                }
                echo "\"></span>
                                                    <span class=\"sc-module-rating-star";
                // line 724
                if (($context["oct_key"] >= 4)) {
                    echo "  sc-module-rating-star-is";
                }
                echo "\"></span>
                                                    <span class=\"sc-module-rating-star";
                // line 725
                if (($context["oct_key"] >= 3)) {
                    echo "  sc-module-rating-star-is";
                }
                echo "\"></span>
                                                    <span class=\"sc-module-rating-star";
                // line 726
                if (($context["oct_key"] >= 2)) {
                    echo "  sc-module-rating-star-is";
                }
                echo "\"></span>
                                                    <span class=\"sc-module-rating-star";
                // line 727
                if (($context["oct_key"] >= 1)) {
                    echo "  sc-module-rating-star-is";
                }
                echo "\"></span>
                                                </div>
                                                <div class=\"sc-product-content-reviews-rating-line\">
                                                    <span class=\"sc-product-content-reviews-rating-line-value\" style=\"width: ";
                // line 730
                echo twig_get_attribute($this->env, $this->source, $context["oct_raiting_stat"], "raiting", [], "any", false, false, false, 730);
                echo "%;\"></span>
                                                </div>
                                                <div class=\"sc-product-content-reviews-rating-value text-center\">";
                // line 732
                echo twig_get_attribute($this->env, $this->source, $context["oct_raiting_stat"], "sum", [], "any", false, false, false, 732);
                echo "</div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['oct_key'], $context['oct_raiting_stat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 735
            echo "                                    </div>
                                </div>
                                <div id=\"review\" class=\"dark-text fsz-14 mt-4\">
                                    ";
            // line 738
            if ( !twig_test_empty(($context["oct_reviews_list"] ?? null))) {
                // line 739
                echo "                                        ";
                echo ($context["oct_reviews_list"] ?? null);
                echo "
                                    ";
            }
            // line 741
            echo "                                </div>
                            </div>
                        ";
        }
        // line 744
        echo "                        ";
        if ((array_key_exists("oct_product_faq", $context) && ($context["oct_product_faq"] ?? null))) {
            // line 745
            echo "                            ";
            echo ($context["oct_product_faq"] ?? null);
            echo "
                        ";
        }
        // line 747
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", true, true, false, 747) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 747)) && (twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", true, true, false, 747) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 747)))) {
            // line 748
            echo "                            <div id=\"product_dop_tab\" class=\"sc-product-content-info pt-4 pt-md-0 px-3 px-lg-4\">
                                <div class=\"sc-product-content-title d-flex align-items-center\">
                                    <div class=\"sc-product-content-title-icon d-flex align-items-center justify-content-center br-4\">
                                        <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-content-info-icon\" alt=\"\" width=\"16\" height=\"16\">
                                    </div>
                                    <span class=\"fsz-24 fw-600 dark-text\">";
            // line 753
            echo twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 753);
            echo "</span>
                                </div>
                                <div class=\"sc-product-content-text dark-text fsz-14 mt-3\">";
            // line 755
            echo twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 755);
            echo "</div>
                            </div>
                        ";
        }
        // line 758
        echo "                        ";
        if (($context["oct_product_extra_tabs"] ?? null)) {
            // line 759
            echo "                            ";
            $context["key"] = 0;
            // line 760
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_extra_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra_tab"]) {
                // line 761
                echo "                                ";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 762
                echo "                                    <div id=\"product_extra_tab-";
                echo ($context["key"] ?? null);
                echo "\" class=\"sc-product-content-info pt-4 pt-md-0 px-3 px-lg-4\">
                                        <div class=\"sc-product-content-title d-flex align-items-center\">
                                            <div class=\"sc-product-content-title-icon d-flex align-items-center justify-content-center br-4\">
                                                <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-content-info-icon\" alt=\"\" width=\"16\" height=\"16\">
                                            </div>
                                            <span class=\"fsz-24 fw-600 dark-text\">";
                // line 767
                echo twig_get_attribute($this->env, $this->source, $context["extra_tab"], "title", [], "any", false, false, false, 767);
                echo "</span>
                                        </div>
                                        <div class=\"sc-product-content-text dark-text fsz-14 mt-3\">";
                // line 769
                echo twig_get_attribute($this->env, $this->source, $context["extra_tab"], "text", [], "any", false, false, false, 769);
                echo "</div>
                                    </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 772
            echo "                        ";
        }
        // line 773
        echo "                    </div>
                    <div class=\"col-lg-4 col-xl-3 sc-product-content-right p-3 px-md-0 p-lg-4 order-0 order-lg-1\">
                        ";
        // line 775
        if (((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "product_advantage", [], "any", true, true, false, 775) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "product_advantage", [], "any", false, false, false, 775) == "on")) && (array_key_exists("oct_product_advantages", $context) &&  !twig_test_empty(($context["oct_product_advantages"] ?? null))))) {
            // line 776
            echo "                            <div class=\"sc-product-content-advantages d-flex flex-column flex-md-row flex-lg-column pb-lg-3 g-3\">
                                ";
            // line 777
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_advantages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["advantage"]) {
                // line 778
                echo "                                    <div class=\"sc-product-content-advantages-item\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"";
                // line 780
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 780);
                echo "\" alt=\"\" width=\"32\" height=\"32\" />
                                            <a href=\"";
                // line 781
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "link", [], "any", false, false, false, 781);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 781) && twig_get_attribute($this->env, $this->source, $context["advantage"], "popup", [], "any", false, false, false, 781))) {
                    echo " data-rel=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 781);
                    echo "\" ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["advantage"], "link", [], "any", false, false, false, 781) != "javascript:;")) {
                    echo " target=\"_blank\" ";
                }
                echo " class=\"sc-product-content-advantages-item-title text-uppercase fsz-14 fw-600";
                if (twig_get_attribute($this->env, $this->source, $context["advantage"], "popup", [], "any", false, false, false, 781)) {
                    echo " agree";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "title", [], "any", false, false, false, 781);
                echo "</a>
                                        </div>
                                        <div class=\"sc-product-content-advantages-item-text fsz-12 mt-2\">
                                            ";
                // line 784
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "text", [], "any", false, false, false, 784);
                echo "
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advantage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 788
            echo "                            </div>
                        ";
        }
        // line 790
        echo "                        <div class=\"sc-product-content-card sc-module-item sticky-top d-none d-lg-block\">
                            <div class=\"content-block d-flex flex-column\">
                                <div class=\"sc-module-img position-relative\">
                                    ";
        // line 793
        if (($context["thumb"] ?? null)) {
            // line 794
            echo "                                        <img class=\"img-fluid\" src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"\" width=\"230\" height=\"180\">
                                    ";
        }
        // line 796
        echo "                                    <div class=\"sc-module-btns d-flex flex-column position-absolute\">
                                        <button type=\"button\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 sc-wishlist-btn\" onclick=\"wishlist.add('";
        // line 797
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\" aria-label=\"Wishlist button\">
                                            <span class=\"sc-btn-icon sc-btn-icon-wishlist\"></span>
                                        </button>
                                        <button type=\"button\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 sc-compare-btn\" onclick=\"compare.add('";
        // line 800
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\" aria-label=\"Compare button\">
                                            <span class=\"sc-btn-icon sc-btn-icon-compare\"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class=\"sc-module-caption d-flex flex-column justify-content-between py-md-2 h-100\">
                                    <div class=\"dark-text fw-700 fsz-14\">";
        // line 806
        echo ($context["heading_title"] ?? null);
        echo "</div>
                                    ";
        // line 807
        if (($context["price"] ?? null)) {
            // line 808
            echo "                                        <div class=\"sc-module-price-box py-2 mt-auto\">
                                            ";
            // line 809
            if ( !($context["special"] ?? null)) {
                // line 810
                echo "                                                <div class=\"sc-module-price fw-800 dark-text mt-1\">";
                echo ($context["price"] ?? null);
                echo "</div>
                                            ";
            } else {
                // line 812
                echo "                                                <div class=\"sc-module-price-old light-text fsz-14\">";
                echo ($context["price"] ?? null);
                echo "</div>
                                                <div class=\"sc-module-price fw-800 dark-text mt-1\">";
                // line 813
                echo ($context["special"] ?? null);
                echo "</div>
                                            ";
            }
            // line 815
            echo "                                        </div>
                                    ";
        }
        // line 817
        echo "                                </div>
                                ";
        // line 818
        if (($context["can_buy"] ?? null)) {
            // line 819
            echo "                                    <div class=\"sc-module-cart d-flex align-items-stretch justify-content-between\">
                                        <div class=\"sc-module-quantity d-flex align-items-center justify-content-center py-1 br-12 \">
                                            <button type=\"button\" aria-label=\"Minus\" class=\"sc-module-quantity-btn d-flex align-items-center justify-content-center sc-minus\">
                                                <span class=\"minus\"></span>
                                            </button>
                                            <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"1\" aria-label=\"Quantity\" inputmode=\"numeric\">
                                            <button type=\"button\" aria-label=\"Plus\" class=\"sc-module-quantity-btn d-flex align-items-center justify-content-center sc-plus\">
                                                <span class=\"plus\"></span>
                                            </button>
                                            <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 828
            echo ($context["product_id"] ?? null);
            echo "\">
                                        </div>
                                        <button type=\"button\" class=\"sc-btn sc-btn-primary sc-btn-with-icon br-4 sc-product-fixed-cart-btn\" aria-label=\"To cart\">
                                            <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--btn-cart-icon\" alt=\"\" width=\"20\" height=\"20\" class=\"sc-btn-icon sc-btn-icon-cart-img\">
                                            <span class=\"sc-btn-text\">";
            // line 832
            echo ($context["button_cart"] ?? null);
            echo "</span>
                                        </button>
                                    </div>
                                ";
        }
        // line 836
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    ";
        // line 843
        if (($context["products"] ?? null)) {
            // line 844
            echo "        ";
            echo ($context["products"] ?? null);
            echo "
    ";
        }
        // line 846
        echo "    ";
        if (($context["oct_related_articles"] ?? null)) {
            // line 847
            echo "        <div id=\"sc-related-article\" class=\"row mt-3 mt-md-0 p-3 p-md-0 pt-xl-3 g-3 g-xl-4 sc-module\">
            <div class=\"sc-module-header fsz-22 dark-text fw-700 text-center text-md-start mt-0 mt-md-2 mb-2\">";
            // line 848
            echo ($context["oct_product_related_articles"] ?? null);
            echo "</div>
            ";
            // line 849
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_related_articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 850
                echo "                <div class=\"sc-last-news-item\">
                    <div class=\"content-block h-100 d-flex flex-column p-0 pb-3 overflow-hidden\">
                            <a href=\"";
                // line 852
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 852);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 852);
                echo "\">
                                <img src=\"";
                // line 853
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 853);
                echo "\"";
                if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                    echo " data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 853);
                    echo " 100w\" srcset=\"";
                    echo ($context["oct_lazy_image"] ?? null);
                    echo " 100w\" sizes=\"100vw\" class=\"img-fluid oct-lazy\"";
                } else {
                    echo " class=\"img-fluid w-md-100\"";
                }
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 853);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "width", [], "any", false, false, false, 853);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "height", [], "any", false, false, false, 853);
                echo "\" />
                            </a>
                        <div class=\"sc-last-news-caption d-flex flex-column justify-content-between w-100\">
                            <div class=\"sc-last-news-info d-flex align-items-center justify-content-between p-3\">
                                <div class=\"d-flex align-items-center\">
                                    ";
                // line 858
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 858));
                foreach ($context['_seq'] as $context["_key"] => $context["blog_category_name"]) {
                    // line 859
                    echo "                                        <span class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-green me-1\">";
                    echo $context["blog_category_name"];
                    echo "</span>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 861
                echo "                                </div>
                                <span class=\"sc-last-news-item-date fsz-12\">";
                // line 862
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 862);
                echo "</span>
                            </div>
                            <a href=\"";
                // line 864
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 864);
                echo "\" class=\"sc-last-news-title fw-700 fsz-14 dark-text px-3\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 864);
                echo "</a>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 869
            echo "        </div>
    ";
        }
        // line 871
        echo "    ";
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 873
        if ((array_key_exists("oct_product_main_image_option_status", $context) && ($context["oct_product_main_image_option_status"] ?? null))) {
            // line 874
            echo "\t<script>
\t\$(document).on('change', '#sc-product-options .radio', function() {

\t\t\$.ajax({
\t\turl: 'index.php?route=product/product/getPImages&product_id=";
            // line 878
            echo ($context["product_id"] ?? null);
            echo "',
\t\ttype: 'post',
\t\tdata: \$('#sc-product-options input[type=\\'radio\\']:checked'),
\t\tdataType: 'json',
\t\tsuccess: function(json) {

\t\t\tif (json['images']) {
                \$('.sc-product-images-additional, .sc-product-images-main').slick('slickRemove', null, null, true);
                \$.fancybox.destroy();
                
                const obj = JSON.parse(JSON.stringify(json['images']));
                
                Object.keys(obj).forEach(el => {
                    const popupImage = obj[el].popup,
                        thumbImage = obj[el].thumb,
                        sliderImage = obj[el].thumb_slider,
                        width = obj[el].width,
                        height = obj[el].height,
                        thumbHeight = obj[el].thumb_height,
                        thumbWidth = obj[el].thumb_width;
                    
                    \$('.sc-product-images-additional').slick('slickAdd',`
                        <div class=\"image-additional-item\">
                            <a class=\"sc-product-images-additional-item\" href=\"\${thumbImage}\" onClick=\"return false;\" data-href=\"\${thumbImage}\">
                                <img src=\"\${thumbImage}\" width=\"\${thumbWidth}\" height=\"\${thumbHeight}\" />
                            </a>
                        </div>`);
                    
                    \$('.sc-product-images-main').slick('slickAdd',`
                        <div class=\"sc-product-images-slide sc-product-images-slide-opt pb-3 pb-md-4\">
                            <a href=\"\${popupImage}\" class=\"oct-gallery d-block\" onClick=\"return false;\">
                                <img src=\"\${sliderImage}\" width=\"\${width}\" height=\"\${height}\" class=\"d-block mx-auto\" />
                            </a>
                        </div>`);
                });
                
                ";
            // line 914
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "product_zoom", [], "any", true, true, false, 914) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "product_zoom", [], "any", false, false, false, 914))) {
                // line 915
                echo "                    \$(\".oct-gallery\").zoom();
                ";
            }
            // line 917
            echo "
                let sliderProductsOpt = \$('.sc-product-images-slide-opt:not(.slick-cloned) a');
                
                \$('.sc-product-images-slide a').on('click', function(e) {
                    e.preventDefault();
                
                    var totalSlides = \$(this).parents('.sc-product-images-main').slick(\"getSlick\").slideCount,
                        dataIndex = \$(this).parents('.sc-product-images-slide').data('slick-index'),
                        trueIndex;
                
                    switch(true) {
                        case (dataIndex < 0):
                            trueIndex = totalSlides+dataIndex;
                
                            break;
                        case (dataIndex >= totalSlides):
                            trueIndex = dataIndex%totalSlides;
                
                            break;
                        default:
                            trueIndex = dataIndex;
                    }
                
                    \$.fancybox.open(sliderProductsOpt, {backFocus: false, hideScrollbar: false}, trueIndex);
                
                    return false;
                });
\t\t\t}
\t\t}
\t\t});
\t});
\t</script>
";
        }
        // line 950
        echo "<script>
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function() {
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                \$('#recurring-description').html('');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
</script>
<script>
    \$('body').on('click', '#button-cart, .sc-product-fixed-cart-btn', function(){
        let data;

        if (this.classList.contains('sc-product-fixed-cart-btn')) {
            data = \$('.sc-product-content-card input[type=\\'text\\'], .sc-product-content-card input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea, #product input[type=\\'date\\'], #product input[type=\\'datetime-local\\'], #product input[type=\\'time\\']');
        } else {
            data = \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea, #product input[type=\\'date\\'], #product input[type=\\'datetime-local\\'], #product input[type=\\'time\\']');
        }

        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: data,
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                \$('#button-cart').button('loading');
            },
            complete: function() {
                \$('#button-cart').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        let errorOption = '';
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger fsz-14 fw-500 mb-4\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.parent().after('<div class=\"text-danger fsz-14 fw-500 mb-4\">' + json['error']['option'][i] + '</div>');
                            }
                            errorOption += '<div class=\"alert-text-item\">' + json['error']['option'][i] + '</div>';
                        }
                        scNotify('danger', errorOption);
                        
                        scrollToElement('.sc-product-actions-middle', false, -110);
                        return;
                    }

                    if (json['error']['error_warning']) {
                        scNotify('danger', json['error']['error_warning']);
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    if (json['isPopup']) {
                        octPopupCart();
                    } else {
                        scNotify('success', json['success']);
                    }

                    let cartIdsHolder = document.querySelector(\"[data-cart-ids]\");

                    if (json.oct_cart_ids && json.oct_cart_ids.length > 0 && cartIdsHolder) {
                        cartIdsHolder.dataset.cartIds = json.oct_cart_ids;
                        setCartBtnAdded();
                    }

                    // Need to set timeout otherwise it wont update the total
                    setTimeout(function() {
                        \$('#cart .header-buttons-cart-quantity').html(json['total_products']);
                        \$('.rm-header-cart-text').html(json['total_amount']);
                    }, 100);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
</script>
<script>
    \$('button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
</script>
<script>
    \$('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();
        \$('#review').load(this.href);
        scrollToElement('.sc-product-content-reviews', false, -140);
    });

    \$(\"#inputReviewName, #inputReviewComment\").on(\"change paste keyup\", function() {
        \$(this).removeClass('error_style');
    });

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 1121
        echo ($context["product_id"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            cache: false,
            data: \$('#popup_review_form').serialize(),
            beforeSend: function() {
                \$('#button-review').button('loading');
            },
            complete: function() {
                \$('#button-review').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    let errorOption = '';

                    \$.each(json['error'], function(i, val) {
                        \$('#reviewModal [name=\"' + i + '\"]').addClass('error_style');
                        errorOption += '<div class=\"alert-text-item\">' + val + '</div>';
                    });

                    scNotify('danger', errorOption);
                }

                if (json['success']) {
                    scNotify('success', json['success']);
                    \$('#reviewModal').modal('hide');
                    \$('#popup_review_form input[name=\\'name\\']').val('');
                    \$('#popup_review_form textarea[name=\\'text\\']').val('');
                    \$('#reviewModal .rm-module-rating-star-is').removeClass('rm-module-rating-star-is');
                }
            }
        });
    });

    \$('#input-quantity').on('change', function(e) {
        updateValueProduct(false, false, true);
    });

    function updateValueProduct(minus, plus, manual) {
        let min = parseInt(\$('#input-quantity').val());
        let currentMinimum = parseInt(\$('#min-product-quantity').val());
        let max = parseInt(\$('#max-product-quantity').val());

        if (max === 0)
            return;

        if (minus && min > 1) {

            if (currentMinimum >= min) {
                \$(\"#input-quantity\").val(currentMinimum);
                updateProductPrice();
                return;
            } else if (min > max) {
                \$('#input-quantity').val(max);
                updateProductPrice();
                return;
            }

            \$('#input-quantity').val(~~ \$('#input-quantity').val() - 1);
        }

        if (plus) {
            if (max && min > max - 1) {
                \$('#input-quantity').val(max);
                updateProductPrice();
                return;
            } else if (currentMinimum > min) {
                \$('#input-quantity').val(currentMinimum);
                updateProductPrice();
                return;
            }

            \$('#input-quantity').val(~~ \$('#input-quantity').val() + 1);
        }

        if (manual) {
            if (currentMinimum >= min) {
                \$('#input-quantity').val(currentMinimum);
                updateProductPrice();
                return;
            } else if (min > max) {
                \$('#input-quantity').val(max);
                updateProductPrice();
                return;
            }

        }

        updateProductPrice();
    }

    \$('#sc-product-options input, #sc-product-options select').on('change', function() {
        updateProductPrice();
    });

    ";
        // line 1218
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "product_zoom", [], "any", true, true, false, 1218) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "product_zoom", [], "any", false, false, false, 1218))) {
            // line 1219
            echo "    \$(document).ready(function() {
        \$(\".oct-gallery\").zoom();
    });
    ";
        }
        // line 1223
        echo "
    function updateProductPrice() {
        \$.ajax({
            type: 'post',
            url: 'index.php?route=octemplates/main/oct_functions/updatePrices',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\']:not(\"#oct_purchase_byoneclick_form_product input\"), #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select'),
            dataType: 'json',
            cache: false,
            success: function(json) {
                ";
        // line 1232
        if (($context["special"] ?? null)) {
            // line 1233
            echo "                    \$('#product .sc-module-price-old').html(json['price']);
                    \$('#product .sc-module-price').html(json['special']);
                ";
        } else {
            // line 1236
            echo "                    \$('#product .sc-module-price').html(json['price']);
                ";
        }
        // line 1238
        echo "
                ";
        // line 1239
        if ((($context["oct_sticker_you_save"] ?? null) && ($context["you_save"] ?? null))) {
            // line 1240
            echo "                    \$('#main-product-you-save').html(json['you_save']);
                ";
        }
        // line 1242
        echo "
                ";
        // line 1243
        if (($context["tax"] ?? null)) {
            // line 1244
            echo "                    \$('.price-tax > span').html(json['tax']);
                ";
        }
        // line 1246
        echo "        }
    });
}
";
        // line 1249
        if ((($context["minimum"] ?? null) > 1)) {
            // line 1250
            echo "    updateProductPrice();
";
        }
        // line 1252
        echo "</script>
";
        // line 1253
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "micro", [], "any", true, true, false, 1253) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "micro", [], "any", false, false, false, 1253))) {
            // line 1254
            echo "<script type=\"application/ld+json\">
{
    \"@context\": \"https://schema.org\",
    \"@type\": \"Product\",
    \"url\": \"";
            // line 1258
            echo ($context["share"] ?? null);
            echo "\",
    \"category\": \"";
            // line 1259
            echo ($context["oct_product_categories"] ?? null);
            echo "\",
    \"image\": \"";
            // line 1260
            echo ($context["thumb"] ?? null);
            echo "\",
    \"brand\": {\"@type\": \"Brand\",\"name\": \"";
            // line 1261
            echo ($context["manufacturer"] ?? null);
            echo "\"},
    \"manufacturer\": \"";
            // line 1262
            echo ($context["manufacturer"] ?? null);
            echo "\",
    \"model\": \"";
            // line 1263
            echo ($context["model"] ?? null);
            echo "\",
    \"productID\": \"";
            // line 1264
            echo ($context["product_id"] ?? null);
            echo "\",
    ";
            // line 1265
            if ((array_key_exists("upc", $context) && ($context["upc"] ?? null))) {
                // line 1266
                echo "    \"gtin12\": \"";
                echo ($context["upc"] ?? null);
                echo "\",
    ";
            }
            // line 1268
            echo "    ";
            if ((array_key_exists("ean", $context) && ($context["ean"] ?? null))) {
                // line 1269
                echo "    \"gtin8\": \"";
                echo ($context["ean"] ?? null);
                echo "\",
    ";
            }
            // line 1271
            echo "    ";
            if ((array_key_exists("mpn", $context) && ($context["mpn"] ?? null))) {
                // line 1272
                echo "    \"mpn\": \"";
                echo ($context["mpn"] ?? null);
                echo "\",
    ";
            }
            // line 1274
            echo "    ";
            if ((array_key_exists("sku", $context) && ($context["sku"] ?? null))) {
                // line 1275
                echo "    \"sku\": \"";
                echo ($context["sku"] ?? null);
                echo "\",
    ";
            }
            // line 1277
            echo "    ";
            if (($context["rating"] ?? null)) {
                // line 1278
                echo "    \"aggregateRating\": {
        \"@type\": \"AggregateRating\",
        \"ratingValue\": \"";
                // line 1280
                echo ($context["rating"] ?? null);
                echo "\",
        \"ratingCount\": \"";
                // line 1281
                echo ($context["total_reviews"] ?? null);
                echo "\",
        \"reviewCount\": \"";
                // line 1282
                echo ($context["total_reviews"] ?? null);
                echo "\",
        \"bestRating\": \"5\",
        \"worstRating\": \"1\"
    },
    ";
            }
            // line 1287
            echo "
    \"description\": \"";
            // line 1288
            echo ($context["oct_description_microdata"] ?? null);
            echo "\",
    \"name\": \"";
            // line 1289
            echo ($context["oct_micro_heading_title"] ?? null);
            echo "\",

    \"offers\": {
        \"@type\": \"Offer\",
        \"url\": \"";
            // line 1293
            echo ($context["share"] ?? null);
            echo "\",

        ";
            // line 1295
            if (($context["oct_special_microdata"] ?? null)) {
                // line 1296
                echo "        ";
                $context["special_date"] = twig_date_modify_filter($this->env, "now", "+30 day");
                // line 1297
                echo "        \"priceValidUntil\" : \"";
                echo twig_date_format_filter($this->env, ($context["special_date"] ?? null), "Y-m-d");
                echo "\",
        ";
            } else {
                // line 1299
                echo "        \"priceValidUntil\" : \"";
                echo twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["now"] ?? null), "+60 days"), "Y-m-d");
                echo "\",
        ";
            }
            // line 1301
            echo "
        ";
            // line 1302
            if (($context["out_of_stock"] ?? null)) {
                // line 1303
                echo "        \"availability\": \"https://schema.org/OutOfStock\",
        ";
            } else {
                // line 1305
                echo "        \"availability\": \"https://schema.org/InStock\",
        ";
            }
            // line 1307
            echo "
        \"price\": \"";
            // line 1308
            if ( !($context["oct_special_microdata"] ?? null)) {
                echo ($context["oct_price_microdata"] ?? null);
            } else {
                echo ($context["oct_special_microdata"] ?? null);
            }
            echo "\",
        \"priceCurrency\": \"";
            // line 1309
            echo ($context["oct_price_currency"] ?? null);
            echo "\",
        \"itemCondition\": \"https://schema.org/NewCondition\"

    ";
            // line 1312
            if (($context["rating"] ?? null)) {
                // line 1313
                echo "    },

    \"review\": [
        ";
                // line 1316
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_reviews_all"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["rew_one"]) {
                    // line 1317
                    echo "        {
            \"@type\": \"Review\",
            \"author\": {
\t\t\t   \"@type\": \"Person\",
\t\t\t   \"name\": \"";
                    // line 1321
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "author", [], "any", false, false, false, 1321);
                    echo "\"
\t\t\t},
            \"datePublished\": \"";
                    // line 1323
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "date_added", [], "any", false, false, false, 1323);
                    echo "\",
            \"description\": \"";
                    // line 1324
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "text", [], "any", false, false, false, 1324);
                    echo "\",
            \"reviewRating\": {
                \"@type\": \"Rating\",
                \"bestRating\": \"5\",
                \"ratingValue\": \"";
                    // line 1328
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "rating", [], "any", false, false, false, 1328);
                    echo "\",
                \"worstRating\": \"1\"
            }
        }";
                    // line 1331
                    if ((twig_length_filter($this->env, ($context["oct_reviews_all"] ?? null)) > twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1331))) {
                        echo ",";
                    }
                    // line 1332
                    echo "
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rew_one'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1334
                echo "    ]
    ";
            } else {
                // line 1336
                echo "    }
    ";
            }
            // line 1338
            echo "}
</script>
";
        }
        // line 1341
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2934 => 1341,  2929 => 1338,  2925 => 1336,  2921 => 1334,  2906 => 1332,  2902 => 1331,  2896 => 1328,  2889 => 1324,  2885 => 1323,  2880 => 1321,  2874 => 1317,  2857 => 1316,  2852 => 1313,  2850 => 1312,  2844 => 1309,  2836 => 1308,  2833 => 1307,  2829 => 1305,  2825 => 1303,  2823 => 1302,  2820 => 1301,  2814 => 1299,  2808 => 1297,  2805 => 1296,  2803 => 1295,  2798 => 1293,  2791 => 1289,  2787 => 1288,  2784 => 1287,  2776 => 1282,  2772 => 1281,  2768 => 1280,  2764 => 1278,  2761 => 1277,  2755 => 1275,  2752 => 1274,  2746 => 1272,  2743 => 1271,  2737 => 1269,  2734 => 1268,  2728 => 1266,  2726 => 1265,  2722 => 1264,  2718 => 1263,  2714 => 1262,  2710 => 1261,  2706 => 1260,  2702 => 1259,  2698 => 1258,  2692 => 1254,  2690 => 1253,  2687 => 1252,  2683 => 1250,  2681 => 1249,  2676 => 1246,  2672 => 1244,  2670 => 1243,  2667 => 1242,  2663 => 1240,  2661 => 1239,  2658 => 1238,  2654 => 1236,  2649 => 1233,  2647 => 1232,  2636 => 1223,  2630 => 1219,  2628 => 1218,  2528 => 1121,  2355 => 950,  2320 => 917,  2316 => 915,  2314 => 914,  2275 => 878,  2269 => 874,  2267 => 873,  2261 => 871,  2257 => 869,  2244 => 864,  2239 => 862,  2236 => 861,  2227 => 859,  2223 => 858,  2199 => 853,  2193 => 852,  2189 => 850,  2185 => 849,  2181 => 848,  2178 => 847,  2175 => 846,  2169 => 844,  2167 => 843,  2158 => 836,  2151 => 832,  2144 => 828,  2133 => 819,  2131 => 818,  2128 => 817,  2124 => 815,  2119 => 813,  2114 => 812,  2108 => 810,  2106 => 809,  2103 => 808,  2101 => 807,  2097 => 806,  2086 => 800,  2078 => 797,  2075 => 796,  2069 => 794,  2067 => 793,  2062 => 790,  2058 => 788,  2048 => 784,  2028 => 781,  2024 => 780,  2020 => 778,  2016 => 777,  2013 => 776,  2011 => 775,  2007 => 773,  2004 => 772,  1995 => 769,  1990 => 767,  1981 => 762,  1978 => 761,  1973 => 760,  1970 => 759,  1967 => 758,  1961 => 755,  1956 => 753,  1949 => 748,  1946 => 747,  1940 => 745,  1937 => 744,  1932 => 741,  1926 => 739,  1924 => 738,  1919 => 735,  1910 => 732,  1905 => 730,  1897 => 727,  1891 => 726,  1885 => 725,  1879 => 724,  1873 => 723,  1869 => 721,  1865 => 720,  1861 => 718,  1851 => 711,  1846 => 709,  1841 => 707,  1836 => 705,  1832 => 704,  1826 => 701,  1822 => 700,  1800 => 681,  1795 => 679,  1787 => 676,  1777 => 669,  1768 => 664,  1766 => 663,  1762 => 662,  1758 => 661,  1753 => 659,  1744 => 652,  1741 => 651,  1736 => 648,  1729 => 646,  1720 => 643,  1716 => 642,  1713 => 641,  1709 => 640,  1705 => 639,  1702 => 638,  1698 => 637,  1692 => 634,  1685 => 629,  1682 => 628,  1677 => 625,  1673 => 623,  1667 => 622,  1658 => 621,  1654 => 620,  1649 => 619,  1647 => 618,  1643 => 617,  1637 => 614,  1630 => 609,  1628 => 608,  1622 => 604,  1617 => 601,  1608 => 598,  1604 => 597,  1601 => 596,  1597 => 595,  1591 => 592,  1587 => 591,  1583 => 589,  1581 => 588,  1578 => 587,  1573 => 585,  1566 => 581,  1561 => 579,  1556 => 577,  1552 => 576,  1548 => 575,  1541 => 571,  1534 => 566,  1530 => 564,  1524 => 563,  1513 => 559,  1509 => 557,  1506 => 556,  1504 => 555,  1498 => 554,  1495 => 553,  1492 => 552,  1481 => 548,  1477 => 546,  1474 => 545,  1472 => 544,  1466 => 543,  1463 => 542,  1460 => 541,  1449 => 537,  1445 => 535,  1442 => 534,  1440 => 533,  1434 => 532,  1431 => 531,  1428 => 530,  1420 => 527,  1416 => 526,  1409 => 524,  1406 => 523,  1403 => 522,  1401 => 521,  1397 => 520,  1394 => 519,  1391 => 518,  1379 => 515,  1376 => 514,  1373 => 513,  1371 => 512,  1365 => 511,  1362 => 510,  1359 => 509,  1347 => 506,  1344 => 505,  1340 => 503,  1338 => 502,  1332 => 501,  1329 => 500,  1326 => 499,  1321 => 496,  1313 => 493,  1306 => 491,  1304 => 490,  1300 => 489,  1289 => 488,  1273 => 487,  1269 => 485,  1265 => 484,  1261 => 483,  1258 => 482,  1255 => 481,  1253 => 480,  1249 => 479,  1246 => 478,  1243 => 477,  1238 => 474,  1217 => 467,  1213 => 466,  1208 => 463,  1202 => 461,  1182 => 459,  1180 => 458,  1174 => 457,  1165 => 456,  1152 => 455,  1146 => 451,  1129 => 450,  1125 => 449,  1122 => 448,  1119 => 447,  1117 => 446,  1113 => 445,  1110 => 444,  1107 => 443,  1102 => 440,  1095 => 438,  1088 => 436,  1086 => 435,  1079 => 434,  1075 => 433,  1071 => 432,  1065 => 431,  1062 => 430,  1058 => 428,  1056 => 427,  1050 => 426,  1047 => 425,  1044 => 424,  1040 => 423,  1037 => 422,  1035 => 421,  1032 => 420,  1030 => 419,  1020 => 414,  1012 => 411,  1008 => 409,  1002 => 407,  999 => 406,  991 => 404,  988 => 403,  984 => 401,  977 => 396,  966 => 394,  962 => 393,  958 => 392,  951 => 388,  948 => 387,  945 => 386,  940 => 384,  935 => 383,  932 => 382,  927 => 380,  922 => 379,  919 => 378,  913 => 376,  910 => 375,  907 => 374,  896 => 372,  891 => 371,  888 => 370,  882 => 367,  877 => 366,  874 => 365,  871 => 364,  865 => 361,  857 => 356,  849 => 351,  841 => 346,  833 => 341,  826 => 337,  823 => 336,  821 => 335,  817 => 334,  812 => 333,  806 => 331,  804 => 330,  801 => 329,  798 => 328,  790 => 326,  788 => 325,  781 => 323,  777 => 321,  771 => 317,  765 => 316,  761 => 314,  757 => 312,  754 => 311,  750 => 310,  745 => 308,  728 => 294,  724 => 292,  722 => 291,  719 => 290,  709 => 287,  702 => 286,  699 => 285,  691 => 282,  688 => 281,  686 => 280,  679 => 275,  674 => 272,  670 => 270,  626 => 233,  619 => 228,  613 => 227,  598 => 214,  596 => 213,  560 => 179,  556 => 177,  539 => 174,  532 => 173,  529 => 172,  525 => 171,  522 => 170,  519 => 169,  515 => 167,  501 => 166,  486 => 162,  482 => 161,  479 => 160,  476 => 159,  473 => 158,  456 => 157,  442 => 154,  438 => 153,  434 => 151,  431 => 150,  429 => 149,  415 => 147,  412 => 146,  409 => 145,  403 => 144,  397 => 141,  392 => 140,  390 => 139,  379 => 137,  376 => 136,  373 => 135,  368 => 134,  365 => 133,  359 => 131,  357 => 130,  344 => 119,  338 => 116,  331 => 111,  328 => 110,  325 => 109,  316 => 106,  310 => 104,  307 => 103,  302 => 102,  299 => 101,  296 => 100,  290 => 97,  286 => 95,  283 => 94,  277 => 91,  273 => 89,  270 => 88,  264 => 85,  260 => 83,  257 => 82,  251 => 79,  247 => 77,  245 => 76,  240 => 74,  229 => 66,  224 => 63,  211 => 53,  204 => 49,  200 => 48,  196 => 47,  190 => 44,  186 => 43,  182 => 41,  180 => 40,  175 => 39,  169 => 35,  155 => 34,  152 => 33,  148 => 32,  143 => 30,  139 => 29,  133 => 26,  129 => 24,  126 => 23,  123 => 22,  106 => 21,  98 => 15,  96 => 14,  92 => 12,  78 => 11,  70 => 9,  64 => 7,  61 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/product/product.twig", "");
    }
}
