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

/* oct_showcase/template/product/category.twig */
class __TwigTemplate_db0f4b511d74391ae07b9a5105ed5fc27c76997093376e5eba3e49756c02194e extends \Twig\Template
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
    <div id=\"product-category\" class=\"container-fluid container-lg flex-grow-1\">
    <nav aria-label=\"breadcrumb\">
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
        echo "    <main class=\"main\">
        <div class=\"row\">
            <div class=\"col-12 sc-page-title pb-3\">
                <h1>";
        // line 42
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
        </div>
        <div class=\"content-top-box\">";
        // line 45
        echo ($context["content_top"] ?? null);
        echo "</div>
        <div class=\"row\">
            ";
        // line 47
        echo ($context["column_left"] ?? null);
        echo "
            ";
        // line 48
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 49
            echo "                ";
            $context["class"] = "col-xl-6 is-cols";
            // line 50
            echo "            ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 51
            echo "                ";
            $context["class"] = "col-xl-9";
            // line 52
            echo "            ";
        } else {
            // line 53
            echo "                ";
            $context["class"] = "col-xl-12 no-col";
            // line 54
            echo "            ";
        }
        // line 55
        echo "            <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " sc-category\">
                ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_desc_position", [], "any", true, true, false, 56) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_desc_position", [], "any", false, false, false, 56) == "top"))) {
            // line 57
            echo "                    ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 58
                echo "                        <div class=\"row sc-category-description-row mb-2\">
                            <div class=\"col-12\">
                                <div class=\"sc-category-description content-block content-block-text\">
                                    <div class=\"d-flex flex-column flex-md-row\">
                                        ";
                // line 62
                if (($context["thumb"] ?? null)) {
                    // line 63
                    echo "                                        <div class=\"sc-category-description-img\">
                                            <img src=\"";
                    // line 64
                    echo ($context["thumb"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" width=\"";
                    echo ($context["cat_image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["cat_image_height"] ?? null);
                    echo "\" />
                                        </div>
                                        ";
                }
                // line 67
                echo "                                        ";
                if (($context["description"] ?? null)) {
                    // line 68
                    echo "                                        <div id=\"sc-category-description\">
                                            <div class=\"sc-category-description-text pt-3 pt-md-0 ps-md-3\">
                                                ";
                    // line 70
                    echo ($context["description"] ?? null);
                    echo "
                                                <!-- if button enabled -->
                                                ";
                    // line 72
                    if ((((twig_length_filter($this->env, ($context["description"] ?? null)) > 700) && (($context["categories"] ?? null) || ($context["products"] ?? null))) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_desc_up", [], "any", true, true, false, 72))) {
                        // line 73
                        echo "                                                <div class=\"sc-category-description-text-opacity\"></div>
                                                ";
                    }
                    // line 75
                    echo "                                                <!-- end if -->
                                            </div>
                                            <!-- CAT PAGES START -->
                                            ";
                    // line 78
                    if ((array_key_exists("categories_page", $context) &&  !twig_test_empty(($context["categories_page"] ?? null)))) {
                        // line 79
                        echo "                                            <div class=\"sc-category-categories_page-text mt-3\">
                                                <ul class=\"category-landing-links list-unstyled ps-0\">
                                                ";
                        // line 81
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["categories_page"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 82
                            echo "                                                    ";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 82))) {
                                // line 83
                                echo "                                                    <li class=\"category-landing-links-item\">
                                                        <span class=\"category-landing-links-item-title\">";
                                // line 84
                                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 84)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</span>
                                                        ";
                                // line 85
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 85));
                                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                                    // line 86
                                    echo "                                                        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 86);
                                    echo "\" class=\"blue-link d-flex-inline align-items-center\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["link"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 86);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["link"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 86);
                                    echo "</a>
                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 88
                                echo "                                                    </li>
                                                    ";
                            }
                            // line 90
                            echo "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 91
                        echo "                                                </ul>
                                            </div>
                                            ";
                    }
                    // line 94
                    echo "                                            <!-- CAT PAGES END -->
                                            <!-- if button enabled -->
                                            ";
                    // line 96
                    if ((((twig_length_filter($this->env, ($context["description"] ?? null)) > 700) && (($context["categories"] ?? null) || ($context["products"] ?? null))) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_desc_up", [], "any", true, true, false, 96))) {
                        // line 97
                        echo "                                            <button id=\"oct-sc-category-more\" class=\"sc-btn sc-btn-secondary br-4 mt-3 ms-md-3\"><span class=\"sc-btn-text\">";
                        echo ($context["oct_expand"] ?? null);
                        echo "</span></button>
                                            ";
                    }
                    // line 99
                    echo "                                            <!-- end if -->
                                        </div>
                                        <!-- if button enabled -->
                                        ";
                    // line 102
                    if ((((twig_length_filter($this->env, ($context["description"] ?? null)) > 700) && (($context["categories"] ?? null) || ($context["products"] ?? null))) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_desc_up", [], "any", true, true, false, 102))) {
                        // line 103
                        echo "                                        <style>
                                            .sc-category-description-text {
                                                height: 220px;
                                                display: block;
                                                overflow: hidden;
                                            }
                                        </style>
                                        <script>
                                            \$('#oct-sc-category-more').click(function(e) {
                                                e.stopPropagation();
                                                
                                                const curHeight = \$('.sc-category-description-text').innerHeight();
                                                \$('.sc-category-description-text').css('height', 'auto');
                                                const autoHeight = \$('.sc-category-description-text').innerHeight();
                                                
                                                \$('.sc-category-description-text').height(curHeight).animate({
                                                    'height': autoHeight
                                                });
                                                
                                                \$('.sc-category-description-text').addClass('expanded');
                                                \$(this).css('display', 'none');
                                            });
                                        </script>
                                        ";
                    }
                    // line 127
                    echo "                                        <!-- end if -->
                                        ";
                }
                // line 129
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 134
            echo "                ";
        }
        // line 135
        echo "                ";
        if (($context["categories"] ?? null)) {
            // line 136
            echo "                <div class=\"sc-subcategories row g-2 pb-2\">
                    ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 138
                echo "                    <div class=\"col-sm-4 col-md-3 col-lg-2\">
                        <a href=\"";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 139);
                echo "\" class=\"sc-subcategories-item content-block d-flex flex-column align-items-center text-center h-100\">
                            <img src=\"";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 140);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 140);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 140);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "width", [], "any", false, false, false, 140);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "height", [], "any", false, false, false, 140);
                echo "\" class=\"img-fluid mb-3\" />
                            <span class=\"fsz-12 fw-500\">";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 141);
                echo "</span>
                        </a>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                </div>
                ";
        }
        // line 147
        echo "                ";
        if (($context["products"] ?? null)) {
            // line 148
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_view_sort_oder", [], "any", true, true, false, 148) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_view_sort_oder", [], "any", false, false, false, 148) || (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_view_sort_oder", [], "any", false, false, false, 148) == "on")))) {
                // line 149
                echo "                        <div class=\"row sc-category-sort-row pb-sm-2\">
                            <div class=\"col-12\">
                                <div class=\"sc-category-sort d-flex justify-content-between content-block\">
                                    <div class=\"sc-category-sort-limit d-flex align-items-center\">
                                        <div class=\"sc-category-sort-title pe-3 fw-700 dark-text d-none d-sm-block\">";
                // line 153
                echo ($context["text_sort"] ?? null);
                echo "</div>
                                        <select id=\"input-sort\" class=\"sc-category-sort-select fsz-12 br-4 light-text fw-600\" onchange=\"location = this.value;\" aria-label=\"Sort select\">
                                            ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 156
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 156) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 157
                        echo "                                                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 157);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 157);
                        echo "</option>
                                                ";
                    } else {
                        // line 159
                        echo "                                                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 159);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 159);
                        echo "</option>
                                                ";
                    }
                    // line 161
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "                                        </select>
                                        <select id=\"input-limit\" class=\"sc-category-limit-select fsz-12 br-4 light-text fw-600\" onchange=\"location = this.value;\" aria-label=\"Limit select\">
                                            ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 165
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 165) == ($context["limit"] ?? null))) {
                        // line 166
                        echo "                                                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 166);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 166);
                        echo "</option>
                                                ";
                    } else {
                        // line 168
                        echo "                                                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 168);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 168);
                        echo "</option>
                                                ";
                    }
                    // line 170
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "                                        </select>
                                    </div>
                                    <div class=\"sc-category-appearance btn-group d-none d-md-flex\">
                                        <button type=\"button\" aria-label=\"Grid view\" id=\"grid-view\" class=\"sc-btn sc-btn-secondary sc-btn-with-icon sc-category-appearance-btn br-4 active\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 174
                echo ($context["button_grid"] ?? null);
                echo "\" data-bs-original-title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\">
                                            <span class=\"sc-btn-icon sc-btn-icon-catalog\"></span>
                                        </button>
                                        <button type=\"button\" aria-label=\"List view\" id=\"list-view\" class=\"sc-btn sc-btn-secondary sc-btn-with-icon sc-category-appearance-btn br-4\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 177
                echo ($context["button_list"] ?? null);
                echo "\" data-bs-original-title=\"";
                echo ($context["button_list"] ?? null);
                echo "\">
                                            <span class=\"sc-btn-icon sc-btn-icon-list\"></span>
                                        </button>
                                        <button type=\"button\" aria-label=\"Price view\" id=\"price-view\" class=\"sc-btn sc-btn-secondary sc-btn-with-icon sc-category-appearance-btn br-4\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 180
                echo ($context["oct_pricelist"] ?? null);
                echo "\" data-bs-original-title=\"";
                echo ($context["oct_pricelist"] ?? null);
                echo "\">
                                            <span class=\"sc-btn-icon sc-btn-icon-price\"></span>
                                        </button>
                                    </div>
                                </div>
                                <script>
                                    window.addEventListener('DOMContentLoaded', () => {
                                        switchCategoryDisplay();
                                    });
                                </script>
                            </div>
                        </div>
                    ";
            }
            // line 193
            echo "                    <div class=\"row gy-2 g-sm-2 sc-module sc-category-products\"
                        ";
            // line 194
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_show_type", [], "any", false, false, false, 194) == "")) {
                echo " data-type=\"split\"";
            }
            // line 195
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_show_type", [], "any", false, false, false, 195) == "width-100")) {
                echo " data-type=\"width100\"";
            }
            // line 196
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_show_type", [], "any", false, false, false, 196) == "width-50")) {
                echo " data-type=\"width50\"";
            }
            // line 197
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_show_type", [], "any", false, false, false, 197) == "width-minimal")) {
                echo " data-type=\"minimal\"";
            }
            echo ">
                        ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 199
                echo "                            <div class=\"product-layout sc-module-col product-grid col-sm-6 col-md-4 col-lg-3\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 199);
                echo "\">
                                <div class=\"content-block h-100 d-flex flex-column";
                // line 200
                if (twig_get_attribute($this->env, $this->source, $context["product"], "oct_grayscale", [], "any", false, false, false, 200)) {
                    echo " sc-no-stock";
                }
                echo "\">
                                    <div class=\"sc-module-img position-relative\">
                                        <a href=\"";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 202);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 202);
                echo "\">
                                            <img
                                                src=\"";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 204);
                echo "\"
                                                ";
                // line 205
                if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                    // line 206
                    echo "                                                data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 206);
                    echo " 100w\"
                                                srcset=\"";
                    // line 207
                    echo ($context["oct_lazy_image"] ?? null);
                    echo " 100w\"
                                                sizes=\"100vw\"
                                                class=\"img-fluid oct-lazy\"
                                                ";
                } else {
                    // line 211
                    echo "                                                class=\"img-fluid\"
                                                ";
                }
                // line 213
                echo "                                                alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 213);
                echo "\"
                                                width=\"";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 214);
                echo "\"
                                                height=\"";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 215);
                echo "\"/>
                                        </a>
                                        <div class=\"sc-module-stickers d-flex align-items-center mt-3\">
                                            ";
                // line 218
                if ((($context["oct_sticker_you_save"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 218))) {
                    // line 219
                    echo "                                                <div class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-red sc-module-sticker-infinity\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 219);
                    echo "</div>
                                            ";
                }
                // line 221
                echo "                                            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 221)) {
                    // line 222
                    echo "                                                <div class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-green sc-module-sticker-infinity\">";
                    echo ($context["oct_product_stock"] ?? null);
                    echo "</div>
                                            ";
                }
                // line 224
                echo "                                            ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 224))) {
                    // line 225
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 225));
                    foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                        // line 226
                        echo "                                                    ";
                        if (( !twig_test_empty($context["oct_sticker"]) && twig_test_iterable($context["oct_sticker"]))) {
                            // line 227
                            echo "                                                        <div class=\"sc-module-sticker sc-module-sticker-image pe-0 py-0 order-1\">
                                                            <img src=\"";
                            // line 228
                            echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "image", [], "any", false, false, false, 228);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 228);
                            echo "\" data-bs-html=\"true\" data-bs-placement=\"top\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 228);
                            echo "\" data-bs-content=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "description", [], "any", false, false, false, 228);
                            echo "\" width=\"24\" height=\"24\" />
                                                        </div>
                                                    ";
                        } elseif ( !twig_test_empty(                        // line 230
$context["oct_sticker"])) {
                            // line 231
                            echo "                                                        <div class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-";
                            echo $context["key"];
                            echo " order-0\">
                                                            ";
                            // line 232
                            echo $context["oct_sticker"];
                            echo "
                                                        </div>
                                                    ";
                        }
                        // line 235
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 236
                    echo "                                            ";
                }
                // line 237
                echo "                                        </div>
                                        <div class=\"sc-module-btns d-flex flex-column position-absolute\">
                                            ";
                // line 239
                if (($context["oct_popup_view_status"] ?? null)) {
                    // line 240
                    echo "                                            <button type=\"button\" aria-label=\"Quick view\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4\" title=\"";
                    echo ($context["oct_popup_view"] ?? null);
                    echo "\" onclick=\"octPopUpView('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 240);
                    echo "')\">
                                                <span class=\"sc-btn-icon sc-btn-icon-viewed\"></span>
                                            </button>
                                            ";
                }
                // line 244
                echo "                                            <button type=\"button\" aria-label=\"Wishlist\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 sc-wishlist-btn\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 244);
                echo "');\">
                                                <span class=\"sc-btn-icon sc-btn-icon-wishlist\"></span>
                                            </button>
                                            <button type=\"button\" aria-label=\"Compare\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 sc-compare-btn\" title=\"";
                // line 247
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 247);
                echo "');\">
                                                <span class=\"sc-btn-icon sc-btn-icon-compare\"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"sc-module-caption d-flex flex-column justify-content-between py-md-2 h-100\">
                                        <div class=\"sc-module-info\">
                                            <a href=\"";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 254);
                echo "\" class=\"sc-module-title dark-text fw-700\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 254);
                echo "</a>
                                            <div class=\"sc-module-product-info\">
                                                ";
                // line 256
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 256))) {
                    // line 257
                    echo "                                                <div class=\"sc-module-model light-text fsz-10 mt-2\"><span>";
                    echo ($context["oct_view_model_cat"] ?? null);
                    echo "</span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 257);
                    echo "</div>
                                                ";
                }
                // line 259
                echo "                                                ";
                if ( !(twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 259) === false)) {
                    // line 260
                    echo "                                                <div class=\"sc-module-rating d-flex align-items-center mt-2 mb-1 br-4\">
                                                    <div class=\"sc-module-rating-stars d-flex align-items-center\">
                                                        ";
                    // line 262
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 263
                        echo "                                                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 263) < $context["i"])) {
                            // line 264
                            echo "                                                                <span class=\"sc-module-rating-star\"></span>
                                                            ";
                        } else {
                            // line 266
                            echo "                                                                <span class=\"sc-module-rating-star sc-module-rating-star-is\"></span>
                                                            ";
                        }
                        // line 268
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 269
                    echo "                                                    </div>
                                                    <div class=\"sc-module-reviews d-flex align-items-center\">
                                                        <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--module-comments-icon\" alt=\"\" width=\"12\" height=\"12\" />
                                                        <span class=\"dark-text fsz-12 ps-1\">";
                    // line 272
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 272);
                    echo "</span>
                                                    </div>
                                                </div>
                                                ";
                }
                // line 276
                echo "                                            </div>
                                        </div>
                                        ";
                // line 278
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 278)) {
                    // line 279
                    echo "                                        <div class=\"sc-module-price-box py-2 mt-auto\">
                                            ";
                    // line 280
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 280)) {
                        // line 281
                        echo "                                            <div class=\"price-tax fw-300 fsz-12 light-text\">
                                                ";
                        // line 282
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 282);
                        echo "
                                            </div>
                                            ";
                    }
                    // line 285
                    echo "                                            ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 285)) {
                        // line 286
                        echo "                                            <span class=\"sc-module-price fw-800 dark-text mt-1\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 286);
                        echo "</span>
                                            ";
                    } else {
                        // line 288
                        echo "                                            <span class=\"sc-module-price-old light-text fsz-14\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 288);
                        echo "</span>
                                            <span class=\"sc-module-price fw-800 dark-text mt-1\">";
                        // line 289
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 289);
                        echo "</span>
                                            ";
                    }
                    // line 291
                    echo "                                        </div>
                                        ";
                }
                // line 293
                echo "                                    </div>
                                    <div class=\"sc-module-cart d-flex align-items-stretch justify-content-between\">
                                        ";
                // line 295
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 295)) && twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 295))) {
                    // line 296
                    echo "                                            ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_view_quantity", [], "any", true, true, false, 296) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_view_quantity", [], "any", false, false, false, 296)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 296)))) {
                        // line 297
                        echo "                                                <div class=\"sc-module-quantity d-flex align-items-center justify-content-center py-1 br-12\">
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
                    // line 307
                    echo "                                            <button type=\"button\" aria-label=\"To cart\" class=\"sc-btn sc-btn-primary sc-btn-with-icon br-4";
                    if (((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_view_quantity", [], "any", true, true, false, 307) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_view_quantity", [], "any", false, false, false, 307)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 307)))) {
                        echo " sc-module-cart-btn";
                    } else {
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 307);
                        echo "');";
                    }
                    echo "\">
                                                <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--btn-cart-icon\" alt=\"\" width=\"20\" height=\"20\" class=\"sc-btn-icon sc-btn-icon-cart-img\">
                                                <span class=\"sc-btn-text\">";
                    // line 309
                    echo (((twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 309) &&  !twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 309))) ? (twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 309)) : (($context["button_cart"] ?? null)));
                    echo "</span>
                                            </button>
                                        ";
                }
                // line 312
                echo "                                        <input type=\"hidden\" name=\"product_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 312);
                echo "\" />
                                    </div>
                                    ";
                // line 314
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", true, true, false, 314) && twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 314))) {
                    // line 315
                    echo "                                    <div class=\"sc-category-attr p-3 fsz-10 dark-text d-none d-md-block\">
                                        ";
                    // line 316
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 316));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 317
                        echo "                                        <div class=\"sc-category-attr-item\">
                                            <span class=\"fw-500\">";
                        // line 318
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 318);
                        echo ":</span> ";
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 318);
                        echo "
                                        </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 321
                    echo "                                    </div>
                                    ";
                }
                // line 323
                echo "                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            echo "                    </div>
                    ";
            // line 327
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_show_more", [], "any", true, true, false, 327) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_show_more", [], "any", false, false, false, 327))) {
                // line 328
                echo "                        <div class=\"sc-module-showmore d-flex justify-content-center py-4 oct-load-more\">
                            <button class=\"sc-btn sc-btn-primary br-4 oct-load-more-button\">
                                <span class=\"sc-btn-icon sc-btn-icon-showmore\"></span>
                                <span class=\"sc-btn-text\">";
                // line 331
                echo ($context["oct_show_more"] ?? null);
                echo "</span>
                            </button>
                        </div>
                    ";
            }
            // line 335
            echo "                    ";
            echo ($context["pagination"] ?? null);
            echo "
                    ";
            // line 336
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_show_more", [], "any", true, true, false, 336) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_show_more", [], "any", false, false, false, 336))) {
                // line 337
                echo "                        <script>
                            window.addEventListener('DOMContentLoaded', () => {
                                let scShowMoreBtn = document.querySelector('.oct-load-more-button');
                                octCheckPagination();

                                scShowMoreBtn.addEventListener('click', () => {
                                    octLoadMore(";
                // line 343
                if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                    echo "1";
                }
                echo ");
                                });
                            });
                        </script>
                    ";
            }
            // line 348
            echo "                ";
        } else {
            // line 349
            echo "                    <div class=\"content-block-p24\">
                        <p>";
            // line 350
            echo ($context["text_empty"] ?? null);
            echo "</p>
                        <a href=\"";
            // line 351
            echo ($context["continue"] ?? null);
            echo "\" class=\"sc-btn sc-btn-primary mt-3 br-4 d-inline-flex\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
                    </div>
                ";
        }
        // line 354
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_desc_position", [], "any", true, true, false, 354) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_desc_position", [], "any", false, false, false, 354) == "bottom"))) {
            // line 355
            echo "                    ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 356
                echo "                        <div class=\"row sc-category-description-row mt-3 mt-md-4\">
                            <div class=\"col-12\">
                                <div class=\"sc-category-description content-block content-block-text\">
                                    <div class=\"d-flex flex-column flex-md-row\">
                                        ";
                // line 360
                if (($context["thumb"] ?? null)) {
                    // line 361
                    echo "                                        <div class=\"sc-category-description-img\">
                                            <img src=\"";
                    // line 362
                    echo ($context["thumb"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" width=\"";
                    echo ($context["cat_image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["cat_image_height"] ?? null);
                    echo "\" />
                                        </div>
                                        ";
                }
                // line 365
                echo "                                        ";
                if (($context["description"] ?? null)) {
                    // line 366
                    echo "                                        <div id=\"sc-category-description\">
                                            <div class=\"sc-category-description-text pt-3 pt-md-0 ps-md-3\">
                                                ";
                    // line 368
                    echo ($context["description"] ?? null);
                    echo "
                                                <!-- if button enabled -->
                                                ";
                    // line 370
                    if ((((twig_length_filter($this->env, ($context["description"] ?? null)) > 700) && (($context["categories"] ?? null) || ($context["products"] ?? null))) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_desc_up", [], "any", true, true, false, 370))) {
                        // line 371
                        echo "                                                <div class=\"sc-category-description-text-opacity\"></div>
                                                ";
                    }
                    // line 373
                    echo "                                                <!-- end if -->
                                            </div>
                                            <!-- CAT PAGES START -->
                                            ";
                    // line 376
                    if ((array_key_exists("categories_page", $context) &&  !twig_test_empty(($context["categories_page"] ?? null)))) {
                        // line 377
                        echo "                                            <div class=\"sc-category-categories_page-text mt-3\">
                                                <ul class=\"category-landing-links list-unstyled ps-0\">
                                                ";
                        // line 379
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["categories_page"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 380
                            echo "                                                    ";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 380))) {
                                // line 381
                                echo "                                                    <li class=\"category-landing-links-item\">
                                                        <span class=\"category-landing-links-item-title\">";
                                // line 382
                                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 382)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</span>
                                                        ";
                                // line 383
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 383));
                                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                                    // line 384
                                    echo "                                                        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["link"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 384);
                                    echo "\" class=\"blue-link d-flex-inline align-items-center\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["link"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 384);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["link"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 384);
                                    echo "</a>
                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 386
                                echo "                                                    </li>
                                                    ";
                            }
                            // line 388
                            echo "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 389
                        echo "                                                </ul>
                                            </div>
                                            ";
                    }
                    // line 392
                    echo "                                            <!-- CAT PAGES END -->
                                            <!-- if button enabled -->
                                            ";
                    // line 394
                    if ((((twig_length_filter($this->env, ($context["description"] ?? null)) > 700) && (($context["categories"] ?? null) || ($context["products"] ?? null))) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_desc_up", [], "any", true, true, false, 394))) {
                        // line 395
                        echo "                                            <button id=\"oct-sc-category-more\" class=\"sc-btn sc-btn-secondary br-4 mt-3 ms-md-3\"><span class=\"sc-btn-text\">";
                        echo ($context["oct_expand"] ?? null);
                        echo "</span></button>
                                            ";
                    }
                    // line 397
                    echo "                                            <!-- end if -->
                                        </div>
                                        <!-- if button enabled -->
                                        ";
                    // line 400
                    if ((((twig_length_filter($this->env, ($context["description"] ?? null)) > 700) && (($context["categories"] ?? null) || ($context["products"] ?? null))) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "category_desc_up", [], "any", true, true, false, 400))) {
                        // line 401
                        echo "                                        <style>
                                            .sc-category-description-text {
                                                height: 220px;
                                                display: block;
                                                overflow: hidden;
                                            }
                                        </style>
                                        <script>
                                            \$('#oct-sc-category-more').click(function(e) {
                                                e.stopPropagation();
                                                
                                                const curHeight = \$('.sc-category-description-text').innerHeight();
                                                \$('.sc-category-description-text').css('height', 'auto');
                                                const autoHeight = \$('.sc-category-description-text').innerHeight();
                                                
                                                \$('.sc-category-description-text').height(curHeight).animate({
                                                    'height': autoHeight
                                                });
                                                
                                                \$('.sc-category-description-text').addClass('expanded');
                                                \$(this).css('display', 'none');
                                            });
                                        </script>
                                        ";
                    }
                    // line 425
                    echo "                                        <!-- end if -->
                                        ";
                }
                // line 427
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 432
            echo "                ";
        }
        // line 433
        echo "            </div>
            ";
        // line 434
        echo ($context["column_right"] ?? null);
        echo "
        </div>
        ";
        // line 436
        echo ($context["content_bottom"] ?? null);
        echo "
    </main>
</div>
";
        // line 439
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1151 => 439,  1145 => 436,  1140 => 434,  1137 => 433,  1134 => 432,  1127 => 427,  1123 => 425,  1097 => 401,  1095 => 400,  1090 => 397,  1084 => 395,  1082 => 394,  1078 => 392,  1073 => 389,  1067 => 388,  1063 => 386,  1050 => 384,  1046 => 383,  1042 => 382,  1039 => 381,  1036 => 380,  1032 => 379,  1028 => 377,  1026 => 376,  1021 => 373,  1017 => 371,  1015 => 370,  1010 => 368,  1006 => 366,  1003 => 365,  989 => 362,  986 => 361,  984 => 360,  978 => 356,  975 => 355,  972 => 354,  964 => 351,  960 => 350,  957 => 349,  954 => 348,  944 => 343,  936 => 337,  934 => 336,  929 => 335,  922 => 331,  917 => 328,  915 => 327,  912 => 326,  904 => 323,  900 => 321,  889 => 318,  886 => 317,  882 => 316,  879 => 315,  877 => 314,  871 => 312,  865 => 309,  853 => 307,  841 => 297,  838 => 296,  836 => 295,  832 => 293,  828 => 291,  823 => 289,  818 => 288,  812 => 286,  809 => 285,  801 => 282,  798 => 281,  796 => 280,  793 => 279,  791 => 278,  787 => 276,  780 => 272,  775 => 269,  769 => 268,  765 => 266,  761 => 264,  758 => 263,  754 => 262,  750 => 260,  747 => 259,  739 => 257,  737 => 256,  730 => 254,  718 => 247,  709 => 244,  699 => 240,  697 => 239,  693 => 237,  690 => 236,  684 => 235,  678 => 232,  673 => 231,  671 => 230,  660 => 228,  657 => 227,  654 => 226,  649 => 225,  646 => 224,  640 => 222,  637 => 221,  631 => 219,  629 => 218,  623 => 215,  619 => 214,  614 => 213,  610 => 211,  603 => 207,  598 => 206,  596 => 205,  592 => 204,  585 => 202,  578 => 200,  573 => 199,  569 => 198,  562 => 197,  557 => 196,  552 => 195,  548 => 194,  545 => 193,  527 => 180,  519 => 177,  511 => 174,  506 => 171,  500 => 170,  492 => 168,  484 => 166,  481 => 165,  477 => 164,  473 => 162,  467 => 161,  459 => 159,  451 => 157,  448 => 156,  444 => 155,  439 => 153,  433 => 149,  430 => 148,  427 => 147,  423 => 145,  413 => 141,  401 => 140,  397 => 139,  394 => 138,  390 => 137,  387 => 136,  384 => 135,  381 => 134,  374 => 129,  370 => 127,  344 => 103,  342 => 102,  337 => 99,  331 => 97,  329 => 96,  325 => 94,  320 => 91,  314 => 90,  310 => 88,  297 => 86,  293 => 85,  289 => 84,  286 => 83,  283 => 82,  279 => 81,  275 => 79,  273 => 78,  268 => 75,  264 => 73,  262 => 72,  257 => 70,  253 => 68,  250 => 67,  236 => 64,  233 => 63,  231 => 62,  225 => 58,  222 => 57,  220 => 56,  215 => 55,  212 => 54,  209 => 53,  206 => 52,  203 => 51,  200 => 50,  197 => 49,  195 => 48,  191 => 47,  186 => 45,  180 => 42,  175 => 39,  169 => 35,  155 => 34,  152 => 33,  148 => 32,  143 => 30,  139 => 29,  133 => 26,  129 => 24,  126 => 23,  123 => 22,  106 => 21,  98 => 15,  96 => 14,  92 => 12,  78 => 11,  70 => 9,  64 => 7,  61 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/product/category.twig", "");
    }
}
