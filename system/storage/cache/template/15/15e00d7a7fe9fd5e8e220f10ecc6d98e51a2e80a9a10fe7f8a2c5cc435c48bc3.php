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

/* oct_showcase/template/extension/module/category.twig */
class __TwigTemplate_0b4610f72b2fc1c37f500dcf5f7d8c3c4fad65686cb2d5f70fa26b0680f5ece2 extends \Twig\Template
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
        if ((($context["categories"] ?? null) &&  !($context["oct_detect"] ?? null))) {
            // line 2
            echo "<div class=\"content-block p-0 overflow-hidden\">
\t<div class=\"sc-column-title fsz-20 fw-700 dark-text\">";
            // line 3
            echo ($context["text_module_category"] ?? null);
            echo "</div>
\t<ul class=\"list-unstyled sc-column-categories fw-500 fsz-14 p-0\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "\t\t\t<li class=\"sc-column-categories-item";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 6) == ($context["category_id"] ?? null))) {
                    echo " clicked";
                }
                echo "\">
\t\t\t\t<span class=\"d-flex justify-content-between\">
\t\t\t\t\t<a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8);
                echo "</a>
\t\t\t\t\t";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "\t\t\t\t\t<button class=\"sc-column-categories-toggle sc-btn sc-btn-secondary sc-btn-with-icon br-4 p-0 d-flex align-items-center justify-content-center\" aria-label=\"Expand\">
                        <span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
                    </button>
\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t</span>
\t\t\t\t";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "\t\t\t\t<ul class=\"sc-column-categories-children sc-categories-2 list-unstyled ps-0";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 16) == ($context["category_id"] ?? null))) {
                        echo " active";
                    }
                    echo "\">
\t\t\t\t";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 18
                        echo "\t\t\t\t\t<li class=\"sc-column-categories-item";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 18) == ($context["child_id"] ?? null))) {
                            echo " clicked";
                        }
                        echo "\">
\t\t\t\t\t\t<span class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"";
                        // line 20
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 20);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 20);
                        echo "</a>
\t\t\t\t\t\t\t";
                        // line 21
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 21)) {
                            // line 22
                            echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"sc-column-categories-toggle sc-btn sc-btn-secondary sc-btn-with-icon br-4 p-0 d-flex align-items-center justify-content-center\" aria-label=\"Expand\">
\t\t\t\t\t\t\t\t\t<span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
                        }
                        // line 26
                        echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                        // line 27
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 27)) {
                            // line 28
                            echo "\t\t\t\t\t\t<ul class=\"sc-column-categories-children list-unstyled ps-0";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 28) == ($context["child_id"] ?? null))) {
                                echo " active";
                            }
                            echo "\">
\t\t\t\t        \t";
                            // line 29
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 29));
                            foreach ($context['_seq'] as $context["_key"] => $context["child_3"]) {
                                // line 30
                                echo "\t\t\t\t\t\t\t\t<li class=\"sc-column-categories-item";
                                if ((twig_get_attribute($this->env, $this->source, $context["child_3"], "category_id", [], "any", false, false, false, 30) == ($context["ch_id"] ?? null))) {
                                    echo " clicked";
                                }
                                echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 32
                                echo twig_get_attribute($this->env, $this->source, $context["child_3"], "href", [], "any", false, false, false, 32);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child_3"], "name", [], "any", false, false, false, 32);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                                // line 33
                                if (twig_get_attribute($this->env, $this->source, $context["child_3"], "children", [], "any", false, false, false, 33)) {
                                    // line 34
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"sc-column-categories-toggle sc-btn sc-btn-secondary sc-btn-with-icon br-4 p-0 d-flex align-items-center justify-content-center\" aria-label=\"Expand\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 38
                                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                                // line 39
                                if (twig_get_attribute($this->env, $this->source, $context["child_3"], "children", [], "any", false, false, false, 39)) {
                                    // line 40
                                    echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"sc-column-categories-children sc-categories-3 list-unstyled ps-0";
                                    if ((twig_get_attribute($this->env, $this->source, $context["child_3"], "category_id", [], "any", false, false, false, 40) == ($context["ch_id"] ?? null))) {
                                        echo " active";
                                    }
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                                    // line 41
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child_3"], "children", [], "any", false, false, false, 41));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child_4"]) {
                                        // line 42
                                        echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"sc-column-categories-item";
                                        if ((twig_get_attribute($this->env, $this->source, $context["child_4"], "category_id", [], "any", false, false, false, 42) == ($context["child3_id"] ?? null))) {
                                            echo " active";
                                        }
                                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"";
                                        // line 43
                                        echo twig_get_attribute($this->env, $this->source, $context["child_4"], "href", [], "any", false, false, false, 43);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child_4"], "name", [], "any", false, false, false, 43);
                                        echo "</a></span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_4'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 45
                                    echo "\t
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 48
                                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_3'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 50
                            echo "\t\t\t\t\t\t</ul>
\t\t\t\t        ";
                        }
                        // line 52
                        echo "\t\t\t        </li>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "\t\t\t\t</ul>
\t\t\t\t";
                }
                // line 56
                echo "\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t</ul>
</div>
<script>
\twindow.addEventListener('DOMContentLoaded', () => {
\t\ttoggleColumnCategories();
\t});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 58,  210 => 56,  206 => 54,  199 => 52,  195 => 50,  188 => 48,  183 => 45,  172 => 43,  165 => 42,  161 => 41,  154 => 40,  152 => 39,  149 => 38,  143 => 34,  141 => 33,  135 => 32,  127 => 30,  123 => 29,  116 => 28,  114 => 27,  111 => 26,  105 => 22,  103 => 21,  97 => 20,  89 => 18,  85 => 17,  78 => 16,  76 => 15,  73 => 14,  67 => 10,  65 => 9,  59 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/extension/module/category.twig", "");
    }
}
