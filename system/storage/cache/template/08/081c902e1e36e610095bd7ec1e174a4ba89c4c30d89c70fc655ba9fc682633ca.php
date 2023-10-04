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

/* oct_showcase/template/octemplates/module/oct_category_wall.twig */
class __TwigTemplate_941d6cdb1f766ee35b37d88148553c72a05a690326b2e66abd5f9a27f399704f extends \Twig\Template
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
        if ( !twig_test_empty(($context["categories"] ?? null))) {
            // line 2
            echo "\t<div class=\"row pt-3 pt-xl-4 g-3 g-xl-4 sc-category-wall\">
\t\t<div class=\"sc-module-header fsz-22 dark-text fw-700 text-center text-md-start mt-3 mt-md-4\">
\t\t\t";
            // line 4
            echo ($context["heading_title"] ?? null);
            echo "
\t\t</div>
\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 7
                echo "\t  \t<div class=\"sc-category-wall-item\">
\t\t\t";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "\t\t\t\t<div class=\"content-block sc-category-wall-item-block d-flex flex-column align-items-center text-center h-100\">
\t\t\t\t\t";
                    // line 10
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 10)) {
                        // line 11
                        echo "\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 11);
                        echo "\"";
                        if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 11);
                            echo " 100w\" srcset=\"";
                            echo ($context["oct_lazy_image"] ?? null);
                            echo " 100w\" sizes=\"100vw\" class=\"oct-lazy\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "width", [], "any", false, false, false, 11);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "height", [], "any", false, false, false, 11);
                        echo "\" />
\t\t\t\t\t";
                    }
                    // line 13
                    echo "\t\t\t\t\t<span class=\"sc-category-wall-title dark-text fw-600 fsz-14 mt-3\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
                    echo "</span>
\t\t\t\t\t<div class=\"sc-category-wall-item-list d-none flex-column text-start\">
\t\t\t\t\t\t";
                    // line 15
                    $context["countstop"] = 1;
                    // line 16
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 16));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 17
                        echo "\t\t\t\t\t\t\t";
                        $context["countstop"] = (($context["countstop"] ?? null) + 1);
                        // line 18
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                        echo "\" class=\"blue-link fsz-12\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "\t\t\t\t\t\t<div class=\"pt-3 mt-auto\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                    echo "\" class=\"sc-btn sc-btn-primary small br-4 text-center\">";
                    echo ($context["text_see_more"] ?? null);
                    echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 26);
                    echo "\" class=\"content-block d-flex flex-column align-items-center text-center h-100\">
\t\t\t\t\t";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 27)) {
                        // line 28
                        echo "\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 28);
                        echo "\"";
                        if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                            echo " data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 28);
                            echo " 100w\" srcset=\"";
                            echo ($context["oct_lazy_image"] ?? null);
                            echo " 100w\" sizes=\"100vw\" class=\"oct-lazy\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "width", [], "any", false, false, false, 28);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "height", [], "any", false, false, false, 28);
                        echo "\" />
\t\t\t\t\t";
                    }
                    // line 30
                    echo "\t\t\t\t\t<span class=\"sc-category-wall-title dark-text fw-600 fsz-14 mt-3\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                    echo "</span>
\t\t\t\t</a>
\t\t\t";
                }
                // line 33
                echo "\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t</div>
\t<div class=\"row mt-3 d-md-none\">
\t\t<div class=\"col-12 text-center\">
\t\t\t<button type=\"button\" class=\"sc-btn sc-btn-primary br-4 w-100 mb-0\" onclick=\"scSidebar('";
            // line 38
            echo ($context["oct_menu"] ?? null);
            echo "', 'menu', 'menu');\">
\t\t\t\t<span class=\"sc-btn-icon sc-btn-icon-catalog\"></span>
\t\t\t\t<span class=\"sc-btn-text\">";
            // line 40
            echo ($context["oct_menu_catalog"] ?? null);
            echo "</span>
\t\t\t</button>
\t\t</div>
\t</div>
<script>
    window.addEventListener('DOMContentLoaded', () => {
\t\tcategoryWall();
\t});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/module/oct_category_wall.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 40,  172 => 38,  167 => 35,  160 => 33,  153 => 30,  131 => 28,  129 => 27,  124 => 26,  114 => 21,  111 => 20,  100 => 18,  97 => 17,  92 => 16,  90 => 15,  84 => 13,  62 => 11,  60 => 10,  57 => 9,  55 => 8,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/module/oct_category_wall.twig", "");
    }
}
