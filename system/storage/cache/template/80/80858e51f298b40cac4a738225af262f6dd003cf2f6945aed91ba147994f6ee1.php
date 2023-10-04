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

/* oct_showcase/template/octemplates/blog/oct_blogarticle.twig */
class __TwigTemplate_a2757811881b87c6e67777bda55e2e1bc80f29f5556b32920a28893c11f37a94 extends \Twig\Template
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
<div class=\"container-fluid container-lg flex-grow-1 mobile-no-gutters\">
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
        echo "\t<main class=\"main\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 sc-page-title pb-3\">
\t\t\t\t<h1>";
        // line 42
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"content-top-box\">";
        // line 45
        echo ($context["content_top"] ?? null);
        echo "</div>
\t\t<div class=\"row sc-account-row\">
\t\t\t";
        // line 47
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t";
        // line 48
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 49
            echo "\t\t\t\t";
            $context["class"] = "col-xl-6";
            // line 50
            echo "\t\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 51
            echo "\t\t\t\t";
            $context["class"] = "col-xl-9";
            // line 52
            echo "\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t";
            $context["class"] = "col-xl-12";
            // line 54
            echo "\t\t\t";
        }
        // line 55
        echo "\t\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t<div class=\"content-block content-block-text p-3 p-md-4 mobile-no-radius sc-blog-post\">
\t\t\t\t\t";
        // line 57
        if (($context["thumb"] ?? null)) {
            // line 58
            echo "\t\t\t\t\t<div class=\"sc-blog-post-photo br-4 overflow-hidden mb-3\">
\t\t\t\t\t\t<img src=\"";
            // line 59
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"img-fluid\" width=\"";
            echo ($context["thumb_width"] ?? null);
            echo "\" height=\"";
            echo ($context["thumb_height"] ?? null);
            echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t<div class=\"sc-blog-post-text\">
\t\t\t\t\t\t";
        // line 63
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 64
        if (($context["tags"] ?? null)) {
            // line 65
            echo "\t\t\t\t\t\t<p class=\"sc-product-tags\">";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t\t\t\t";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 67
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 67);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 67);
                echo "</a>";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo ",";
                }
                // line 68
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 72
        if (($context["images"] ?? null)) {
            // line 73
            echo "\t\t\t\t\t<div class=\"sc-blog-post-gallery\">
\t\t\t\t\t\t<div class=\"h4\">";
            // line 74
            echo ($context["entry_dop_photo"] ?? null);
            echo "</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 77
                echo "\t\t\t\t\t\t\t<div class=\"col-4 col-md-3 col-lg-2\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 78);
                echo "\" data-fancybox=\"images\" class=\"sc-blog-post-gallery-item br-4 overflow-hidden\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 79);
                echo "\" alt=\"\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb_width", [], "any", false, false, false, 79);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb_height", [], "any", false, false, false, 79);
                echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-flex align-items-center justify-content-center\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t<div class=\"sc-blog-post-info d-flex flex-column flex-md-row mt-3 py-3 py-xl-4 fsz-14 dark-text\">
\t\t\t\t\t\t<div class=\"sc-blog-post-info-item sc-blog-post-info-item-date d-flex align-items-center\">
\t\t\t\t\t\t\t<span class=\"fw-700\">";
        // line 89
        echo ($context["date_added"] ?? null);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 91
        if (($context["review_status"] ?? null)) {
            // line 92
            echo "\t\t\t\t\t\t<div class=\"sc-blog-post-info-item sc-blog-post-info-item-comments d-flex align-items-center\">
\t\t\t\t\t\t\t<span class=\"fw-700\">";
            // line 93
            echo ($context["comments_total"] ?? null);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t<div class=\"sc-blog-post-info-item sc-blog-post-info-item-views d-flex align-items-center\">
\t\t\t\t\t\t\t<span class=\"fw-700\">";
        // line 97
        echo ($context["comments_viewed"] ?? null);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 100
        if (($context["review_status"] ?? null)) {
            // line 101
            echo "\t\t\t\t\t<div class=\"sc-blog-post-comments mt-4\">
\t\t\t\t\t\t<button type=\"button\" class=\"sc-btn sc-btn-outline sc-btn-outline-primary br-4\" data-bs-toggle=\"modal\" data-bs-target=\"#blogCommentModal\">";
            // line 102
            echo ($context["text_add_comment"] ?? null);
            echo "</button>
\t\t\t\t\t\t<div class=\"d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between\">
\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"blogCommentModal\" tabindex=\"-1\" aria-labelledby=\"blogCommentModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header p-4\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title fsz-20 fw-700 d-flex align-items-center justify-content-between my-0\" id=\"blogCommentModalLabel\">";
            // line 108
            echo ($context["text_write"] ?? null);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"form-comment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group pb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"inputNameComment\" class=\"fsz-14 dark-text fw-500 pb-1\"><span class=\"required\">* </span>";
            // line 114
            echo ($context["entry_name"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"inputNameComment\" placeholder=\"";
            // line 115
            echo ($context["entry_name"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group pb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"inputReviewComment\" class=\"fsz-14 dark-text fw-500 pb-1\"><span class=\"required\">* </span>";
            // line 118
            echo ($context["oct_article_your_comment"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"inputReviewComment\" name=\"text\" class=\"form-control\" placeholder=\"";
            // line 119
            echo ($context["oct_article_your_comment"] ?? null);
            echo "\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc-modal-comment fsz-12 dark-text mb-3\">";
            // line 121
            echo ($context["text_note"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 122
            if (($context["captcha"] ?? null)) {
                // line 123
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 124
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-comment\" class=\"sc-btn sc-btn-primary br-2\">";
            echo ($context["button_continue"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"article-comments\" class=\"dark-text fsz-14 mt-4\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 139
        echo ($context["column_right"] ?? null);
        echo "
\t\t</div>
\t</main>
\t";
        // line 142
        if (($context["products"] ?? null)) {
            // line 143
            echo "\t\t";
            echo ($context["products"] ?? null);
            echo "
\t";
        }
        // line 145
        echo "\t";
        if (($context["articles"] ?? null)) {
            // line 146
            echo "\t<div id=\"rm-related-article\" class=\"row mt-3 mt-md-0 p-3 p-md-0 pt-xl-3 g-3 g-xl-4 sc-module\">
\t\t<div class=\"sc-module-header fsz-22 dark-text fw-700 text-center text-md-start mt-0 mt-md-2 mb-2\">";
            // line 147
            echo ($context["text_related_articles"] ?? null);
            echo "</div>
\t\t";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 149
                echo "\t\t\t<div class=\"sc-last-news-item\">
\t\t\t\t<div class=\"content-block h-100 d-flex flex-column p-0 pb-3 overflow-hidden\">
\t\t\t\t\t\t<a href=\"";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 151);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 151);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 152);
                echo "\"";
                if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                    echo " data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 152);
                    echo " 100w\" srcset=\"";
                    echo ($context["oct_lazy_image"] ?? null);
                    echo " 100w\" sizes=\"100vw\" class=\"img-fluid oct-lazy\"";
                } else {
                    echo " class=\"img-fluid w-md-100\"";
                }
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 152);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "width", [], "any", false, false, false, 152);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "height", [], "any", false, false, false, 152);
                echo "\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"sc-last-news-caption d-flex flex-column justify-content-between w-100\">
\t\t\t\t\t\t<div class=\"sc-last-news-info d-flex align-items-center justify-content-between p-3\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 157));
                foreach ($context['_seq'] as $context["_key"] => $context["blog_category_name"]) {
                    // line 158
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-green me-1\">";
                    echo $context["blog_category_name"];
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"sc-last-news-item-date fsz-12\">";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 161);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 163);
                echo "\" class=\"sc-last-news-title fw-700 fsz-14 dark-text px-3\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 163);
                echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "\t</div>
\t";
        }
        // line 170
        echo "\t";
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
<script>
\t\$(\"#inputNameComment, #inputReviewComment\").on(\"change paste keyup\", function() {
\t\t\$(this).removeClass('error_style');
\t});

\t\$('#article-comments').delegate('.pagination a', 'click', function(e) {
\t    e.preventDefault();
\t    \$('#article-comments').load(this.href);
        scrollToElement('.sc-blog-post-comments', false, -90);
\t});

\t\$('#article-comments').load('index.php?route=octemplates/blog/oct_blogarticle/comment&blogarticle_id=";
        // line 183
        echo ($context["blogarticle_id"] ?? null);
        echo "');

\t\$('#button-comment').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=octemplates/blog/oct_blogarticle/write&blogarticle_id=";
        // line 187
        echo ($context["blogarticle_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tdata: \$('#form-comment').serialize(),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-comment').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-comment').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\tlet errors = '';

\t\t\t\t\t\$.each(json['error'], function(i, val) {
\t\t\t\t\t\tif (val) {
\t\t\t\t\t\t\t\$('#form-comment [name=\"' + i + '\"]').addClass('error_style');
\t\t\t\t\t\t\terrors += '<div class=\"alert-text-item\">' + val + '</div>';
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tscNotify('danger', errors);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tscNotify('success', json['success']);
\t\t\t\t\t\$('#blogCommentModal').modal('hide');
\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t\t\t\$('.sc-module-rating-star-is').removeClass('sc-module-rating-star-is');
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>
";
        // line 226
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/blog/oct_blogarticle.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 226,  547 => 187,  540 => 183,  523 => 170,  519 => 168,  506 => 163,  501 => 161,  498 => 160,  489 => 158,  485 => 157,  461 => 152,  455 => 151,  451 => 149,  447 => 148,  443 => 147,  440 => 146,  437 => 145,  431 => 143,  429 => 142,  423 => 139,  419 => 137,  405 => 127,  399 => 124,  396 => 123,  394 => 122,  390 => 121,  385 => 119,  381 => 118,  375 => 115,  371 => 114,  362 => 108,  353 => 102,  350 => 101,  348 => 100,  342 => 97,  339 => 96,  333 => 93,  330 => 92,  328 => 91,  323 => 89,  319 => 87,  314 => 84,  299 => 79,  295 => 78,  292 => 77,  288 => 76,  283 => 74,  280 => 73,  278 => 72,  275 => 71,  271 => 69,  265 => 68,  256 => 67,  252 => 66,  247 => 65,  245 => 64,  241 => 63,  238 => 62,  226 => 59,  223 => 58,  221 => 57,  215 => 55,  212 => 54,  209 => 53,  206 => 52,  203 => 51,  200 => 50,  197 => 49,  195 => 48,  191 => 47,  186 => 45,  180 => 42,  175 => 39,  169 => 35,  155 => 34,  152 => 33,  148 => 32,  143 => 30,  139 => 29,  133 => 26,  129 => 24,  126 => 23,  123 => 22,  106 => 21,  98 => 15,  96 => 14,  92 => 12,  78 => 11,  70 => 9,  64 => 7,  61 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/blog/oct_blogarticle.twig", "");
    }
}
