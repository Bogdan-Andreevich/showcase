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

/* oct_showcase/template/octemplates/module/oct_banner_plus.twig */
class __TwigTemplate_115b78e8a16dc885dcd60f0fccb6fd18eaf913641e4854c3eee02dcb0f4be9e7 extends \Twig\Template
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
        if (($context["oct_banner_pluss"] ?? null)) {
            // line 2
            echo "\t";
            if ((twig_length_filter($this->env, ($context["oct_banner_pluss"] ?? null)) <= 4)) {
                // line 3
                echo "\t\t";
                if (((($context["position"] ?? null) == "column_left") || (($context["position"] ?? null) == "column_right"))) {
                    // line 4
                    echo "\t\t\t<div class=\"sc-column-banners overflow-hidden position-relative\">
\t\t\t\t<div id=\"banner_plus_column\" class=\"sc-column-banners-box\">
\t\t\t\t\t";
                    // line 6
                    $context["key"] = 0;
                    // line 7
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["oct_banner_pluss"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                        // line 8
                        echo "\t\t\t\t\t\t";
                        $context["key"] = (($context["key"] ?? null) + 1);
                        // line 9
                        echo "\t\t\t\t\t\t<div id=\"banner_plus_column";
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo "\" class=\"sc-banner-plus-item\">
\t\t\t\t\t\t\t<div class=\"content-block h-100 d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"sc-banner-plus-title fw-700 dark-text\">";
                        // line 11
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 11);
                        echo "</div>
\t\t\t\t\t\t\t\t<p class=\"mb-3\">";
                        // line 12
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 12);
                        echo "</p>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 13
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 13);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 13);
                        echo "\" class=\"sc-banner-plus-item-img d-block mb-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 14
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 14);
                        echo "\"";
                        if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 14);
                            echo " 100w\" srcset=\"";
                            echo ($context["oct_lazy_image"] ?? null);
                            echo " 100w\" sizes=\"100vw\" class=\"oct-lazy\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 14);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "width", [], "any", false, false, false, 14);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "height", [], "any", false, false, false, 14);
                        echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 16);
                        echo "\" class=\"sc-btn sc-btn-secondary br-4 w-100 mt-auto\">";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button", [], "any", false, false, false, 16);
                        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t#banner_plus_column";
                        // line 20
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo ".sc-banner-plus-item .content-block {background: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "background_color", [], "any", false, false, false, 20);
                        echo ";}
\t\t\t\t\t\t\t#banner_plus_column";
                        // line 21
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " .sc-banner-plus-title {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title_color", [], "any", false, false, false, 21);
                        echo ";}
\t\t\t\t\t\t\t#banner_plus_column";
                        // line 22
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " p {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "text_color", [], "any", false, false, false, 22);
                        echo ";}
\t\t\t\t\t\t\t#banner_plus_column";
                        // line 23
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " .sc-btn {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_color", [], "any", false, false, false, 23);
                        echo "; background: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_background", [], "any", false, false, false, 23);
                        echo ";}
\t\t\t\t\t\t\t#banner_plus_column";
                        // line 24
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " .sc-btn:hover {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_text_hover", [], "any", false, false, false, 24);
                        echo "; background: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_background_hover", [], "any", false, false, false, 24);
                        echo ";}
\t\t\t\t\t\t</style>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script>
\t\t\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t\t\t\t\$('#banner_plus_column').slick({
\t\t\t\t\t\tdots: false,
\t\t\t\t\t\tinfinite: true,
\t\t\t\t\t\tprevArrow: '<button type=\"button\" class=\"slick-slider-btn slick-slider-btn-prev sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center\" aria-label=\"Previous\"><span class=\"sc-btn-icon\"></span></button>',
\t\t\t\t\t\tnextArrow: '<button type=\"button\" class=\"slick-slider-btn slick-slider-btn-next sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon br-4 overflow-hidden d-flex align-items-center justify-content-center\" aria-label=\"Next\"><span class=\"sc-btn-icon\"></span></button>',
\t\t\t\t\t\tslidesToShow: 1
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t";
                } else {
                    // line 41
                    echo "\t\t\t<div class=\"row pt-3 pt-xl-4 g-3 g-xl-4 sc-banner-plus\">
\t\t\t\t";
                    // line 42
                    $context["key"] = 0;
                    // line 43
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["oct_banner_pluss"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                        // line 44
                        echo "\t\t\t\t\t";
                        $context["key"] = (($context["key"] ?? null) + 1);
                        // line 45
                        echo "\t\t\t\t\t<div id=\"banner_plus_";
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo "\" class=\"sc-banner-plus-item";
                        if ((twig_length_filter($this->env, ($context["oct_banner_pluss"] ?? null)) == 1)) {
                            echo " sc-banner-plus-100";
                        } elseif ((twig_length_filter($this->env, ($context["oct_banner_pluss"] ?? null)) == 2)) {
                            echo " sc-banner-plus-50";
                        } elseif ((twig_length_filter($this->env, ($context["oct_banner_pluss"] ?? null)) == 3)) {
                            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 45) == 1)) {
                                echo " sc-banner-plus-50";
                            } else {
                                echo " sc-banner-plus-25";
                            }
                        } elseif ((twig_length_filter($this->env, ($context["oct_banner_pluss"] ?? null)) == 4)) {
                            echo " sc-banner-plus-25";
                        }
                        echo "\">
\t\t\t\t\t\t<div class=\"content-block h-100\">
\t\t\t\t\t\t\t<div class=\"sc-banner-plus-title fw-700 dark-text\">";
                        // line 47
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 47);
                        echo "</div>
\t\t\t\t\t\t\t<div class=\"sc-banner-plus-item-box d-flex align-items-start justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"sc-banner-plus-text d-flex flex-column align-items-start align-self-stretch justify-content-between\">
\t\t\t\t\t\t\t\t\t<p>";
                        // line 50
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 50);
                        echo "</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 51
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 51);
                        echo "\" class=\"sc-btn sc-btn-secondary br-4\">";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button", [], "any", false, false, false, 51);
                        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 53
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 53);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 53);
                        echo "\" class=\"sc-banner-plus-item-img\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 54
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 54);
                        echo "\"";
                        if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 54);
                            echo " 100w\" srcset=\"";
                            echo ($context["oct_lazy_image"] ?? null);
                            echo " 100w\" sizes=\"100vw\" class=\"oct-lazy\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 54);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "width", [], "any", false, false, false, 54);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "height", [], "any", false, false, false, 54);
                        echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<style>
\t\t\t\t\t\t#banner_plus_";
                        // line 60
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo ".sc-banner-plus-item .content-block {background: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "background_color", [], "any", false, false, false, 60);
                        echo ";}
\t\t\t\t\t\t#banner_plus_";
                        // line 61
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " .sc-banner-plus-title {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title_color", [], "any", false, false, false, 61);
                        echo ";}
\t\t\t\t\t\t#banner_plus_";
                        // line 62
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " .sc-banner-plus-text p {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "text_color", [], "any", false, false, false, 62);
                        echo ";}
\t\t\t\t\t\t#banner_plus_";
                        // line 63
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " .sc-btn {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_color", [], "any", false, false, false, 63);
                        echo "; background: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_background", [], "any", false, false, false, 63);
                        echo ";}
\t\t\t\t\t\t#banner_plus_";
                        // line 64
                        echo ($context["module"] ?? null);
                        echo "_";
                        echo ($context["key"] ?? null);
                        echo " .sc-btn:hover {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_text_hover", [], "any", false, false, false, 64);
                        echo "; background: ";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_background_hover", [], "any", false, false, false, 64);
                        echo ";}
\t\t\t\t\t</style>
\t\t\t\t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    echo "\t\t\t</div>
\t\t";
                }
                // line 69
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/module/oct_banner_plus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 69,  325 => 67,  302 => 64,  292 => 63,  284 => 62,  276 => 61,  268 => 60,  245 => 54,  239 => 53,  232 => 51,  228 => 50,  222 => 47,  200 => 45,  197 => 44,  179 => 43,  177 => 42,  174 => 41,  158 => 27,  143 => 24,  133 => 23,  125 => 22,  117 => 21,  109 => 20,  100 => 16,  81 => 14,  75 => 13,  71 => 12,  67 => 11,  59 => 9,  56 => 8,  51 => 7,  49 => 6,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/module/oct_banner_plus.twig", "");
    }
}
