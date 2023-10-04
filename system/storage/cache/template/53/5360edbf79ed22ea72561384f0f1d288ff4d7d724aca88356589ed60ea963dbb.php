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

/* oct_showcase/template/octemplates/module/oct_blogcategory.twig */
class __TwigTemplate_4a9f646b73d671fe0761ed2bd95bed75de74ff39f85c46c3e123c0203cd1dfb7 extends \Twig\Template
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
        if (($context["blog_categories"] ?? null)) {
            // line 2
            echo "<div class=\"content-block p-0 overflow-hidden\">
\t<div class=\"sc-column-title fsz-20 fw-700 dark-text\">";
            // line 3
            echo ($context["heading_title"] ?? null);
            echo "</div>
\t<ul class=\"list-unstyled sc-column-categories fw-500 fsz-14 p-0\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blog_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog_category"]) {
                // line 6
                echo "\t\t\t<li class=\"sc-column-categories-item\">
\t\t\t\t<span class=\"d-flex justify-content-between\">
\t\t\t\t\t<a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["blog_category"], "href", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["blog_category"], "name", [], "any", false, false, false, 8);
                echo "</a>
\t\t\t\t\t";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["blog_category"], "children", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "\t\t\t\t\t\t<button type=\"button\" class=\"sc-column-categories-toggle sc-btn sc-btn-secondary sc-btn-with-icon br-4 p-0 d-flex align-items-center justify-content-center\" aria-label=\"Expand\">
\t\t\t\t\t\t\t<span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t</span>
\t\t\t\t";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["blog_category"], "children", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "\t\t\t\t<ul class=\"sc-column-categories-children sc-categories-2 list-unstyled ps-0\">
\t\t\t\t\t";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog_category"], "children", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 18
                        echo "\t\t\t\t\t\t<li class=\"sc-column-categories-item\">
\t\t\t\t\t\t\t<span class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 20
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 20);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 20);
                        echo "</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "\t\t\t\t</ul>
\t\t\t\t";
                }
                // line 26
                echo "\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t</ul>
</div>
<script>
\twindow.addEventListener('DOMContentLoaded', () => {
\t\ttoggleColumnCategories();
\t});
</script>
";
        }
        // line 36
        if (($context["search_block"] ?? null)) {
            // line 37
            echo "<div class=\"content-block p-0 overflow-hidden mt-2\">
\t<div class=\"sc-column-title fsz-20 fw-700 dark-text\">";
            // line 38
            echo ($context["search_title"] ?? null);
            echo "</div>
\t<div id=\"blog_search\" class=\"sc-blog-search p-3 position-relative\">
\t\t<input type=\"text\" name=\"blog_search\" value=\"\" placeholder=\"";
            // line 40
            echo ($context["search_placeholder"] ?? null);
            echo "\" class=\"form-control w-100 br-2\">
\t\t<button type=\"button\" id=\"oct-blog-search-button\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon\" aria-label=\"Search\">
\t\t\t<span class=\"sc-btn-icon sc-btn-icon-search\"></span>
\t\t</button>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/module/oct_blogcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 40,  123 => 38,  120 => 37,  118 => 36,  108 => 28,  101 => 26,  97 => 24,  85 => 20,  81 => 18,  77 => 17,  74 => 16,  72 => 15,  69 => 14,  63 => 10,  61 => 9,  55 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/module/oct_blogcategory.twig", "");
    }
}
