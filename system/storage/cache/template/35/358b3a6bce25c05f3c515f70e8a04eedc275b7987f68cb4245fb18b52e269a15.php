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

/* oct_showcase/template/octemplates/module/oct_blogarticle.twig */
class __TwigTemplate_2a78a64f80a6f725b3cad824dbe04b1d0c770fb41642b3ec5a821de784d47809 extends \Twig\Template
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
        if (($context["articles"] ?? null)) {
            // line 2
            echo "\t";
            if (((($context["position"] ?? null) == "column_left") || (($context["position"] ?? null) == "column_right"))) {
                // line 3
                echo "\t\t<div  class=\"content-block p-0 overflow-hidden with-border position-relative\">
\t\t\t<div class=\"sc-column-title fsz-20 fw-700 dark-text\">";
                // line 4
                echo ($context["heading_title"] ?? null);
                echo "</div>
\t\t\t<div id=\"sc_blog_column_article-";
                // line 5
                echo ($context["module"] ?? null);
                echo "\" class=\"sc-column-blog-articles\">
\t\t\t\t";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 7
                    echo "\t\t\t\t\t<div class=\"sc-last-news-item w-100\">
\t\t\t\t\t\t<div class=\"content-block h-100 d-flex flex-column p-0 pb-3 overflow-hidden border-0\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 9);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 9);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 10);
                    echo "\"";
                    if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                        echo " data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 10);
                        echo " 100w\" srcset=\"";
                        echo ($context["oct_lazy_image"] ?? null);
                        echo " 100w\" sizes=\"100vw\" class=\"img-fluid oct-lazy\"";
                    } else {
                        echo " class=\"img-fluid w-md-100\"";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 10);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "width", [], "any", false, false, false, 10);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "height", [], "any", false, false, false, 10);
                    echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"sc-last-news-caption d-flex flex-column justify-content-between w-100\">
\t\t\t\t\t\t\t\t<div class=\"sc-last-news-info d-flex align-items-center justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 15));
                    foreach ($context['_seq'] as $context["_key"] => $context["blog_category_name"]) {
                        // line 16
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-green me-1\">";
                        echo $context["blog_category_name"];
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"sc-last-news-item-date fsz-12\">";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 19);
                    echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 21);
                    echo "\" class=\"sc-last-news-title fw-700 fsz-14 dark-text px-3\">";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 21);
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t\t\t</div>
\t\t\t<script>
\t\t\t\t\$('#sc_blog_column_article-";
                // line 28
                echo ($context["module"] ?? null);
                echo "').slick({
\t\t\t\t\tdots: false,
\t\t\t\t\tinfinite: true,
\t\t\t\t\tprevArrow: '<button type=\"button\" class=\"slick-slider-btn slick-slider-btn-prev sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center\" aria-label=\"Previous\"><span class=\"sc-btn-icon\"></span></button>',
\t\t\t\t\tnextArrow: '<button type=\"button\" class=\"slick-slider-btn slick-slider-btn-next sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center\" aria-label=\"Next\"><span class=\"sc-btn-icon\"></span></button>',
\t\t\t\t\tslidesToShow: 1
\t\t\t\t});
\t\t\t</script>
\t\t</div>
\t";
            } else {
                // line 38
                echo "\t\t<div class=\"row mt-3 mt-md-0 p-3 p-md-0 pt-xl-3 g-3 g-xl-4 sc-module\">
\t\t\t<div class=\"sc-module-header fsz-22 dark-text fw-700 text-center text-md-start mt-0 mt-md-2 mb-2\">
\t\t\t\t";
                // line 40
                echo ($context["heading_title"] ?? null);
                echo "
\t\t\t</div>
\t\t\t";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 43
                    echo "\t\t\t\t<div class=\"sc-last-news-item\">
\t\t\t\t\t<div class=\"content-block h-100 d-flex flex-column p-0 pb-3 overflow-hidden\">
\t\t\t\t\t\t<a href=\"";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 45);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 45);
                    echo "\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 46);
                    echo "\"";
                    if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                        echo " data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 46);
                        echo " 100w\" srcset=\"";
                        echo ($context["oct_lazy_image"] ?? null);
                        echo " 100w\" sizes=\"100vw\" class=\"img-fluid oct-lazy\"";
                    } else {
                        echo " class=\"img-fluid w-md-100\"";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 46);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "width", [], "any", false, false, false, 46);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "height", [], "any", false, false, false, 46);
                    echo "\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"sc-last-news-caption d-flex flex-column justify-content-between w-100\">
\t\t\t\t\t\t\t<div class=\"sc-last-news-info d-flex flex-column flex-md-row align-items-md-center justify-content-between p-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-2 mb-md-0\">
\t\t\t\t\t\t\t\t\t";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 51));
                    foreach ($context['_seq'] as $context["_key"] => $context["blog_category_name"]) {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"sc-module-sticker br-4 fsz-10 fw-500 sc-module-sticker-green me-1\">";
                        echo $context["blog_category_name"];
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"sc-last-news-item-date fsz-12\">";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 55);
                    echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 57);
                    echo "\" class=\"sc-last-news-title fw-700 fsz-14 dark-text px-3\">";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 57);
                    echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "\t\t</div>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/module/oct_blogarticle.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 62,  210 => 57,  205 => 55,  202 => 54,  193 => 52,  189 => 51,  165 => 46,  159 => 45,  155 => 43,  151 => 42,  146 => 40,  142 => 38,  129 => 28,  125 => 26,  112 => 21,  107 => 19,  104 => 18,  95 => 16,  91 => 15,  67 => 10,  61 => 9,  57 => 7,  53 => 6,  49 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/module/oct_blogarticle.twig", "");
    }
}
