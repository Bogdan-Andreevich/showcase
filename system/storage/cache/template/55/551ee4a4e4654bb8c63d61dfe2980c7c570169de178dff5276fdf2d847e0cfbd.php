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

/* oct_showcase/template/octemplates/blog/oct_blogcomment.twig */
class __TwigTemplate_1a38204848da8cea3e17afb80657696b0adca1626bf2e30e4bca62b38722d5d0 extends \Twig\Template
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
        if (($context["comments"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 3
                echo "\t\t<div class=\"sc-product-content-reviews-item p-3\">
\t\t\t<div class=\"sc-product-content-reviews-item-info\">
\t\t\t\t<div class=\"sc-last-reviews-author d-flex align-items-center\">
\t\t\t\t\t<img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--review-author-icon\" alt=\"user-icon\" width=\"50\" height=\"50\" />
\t\t\t\t\t<div class=\"sc-last-reviews-author-info ps-3\">
\t\t\t\t\t\t<div class=\"sc-last-reviews-author-name fw-600 dark-text\">";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 8);
                echo "</div>
\t\t\t\t\t\t<div class=\"sc-last-reviews-date fsz-12 light-text\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "date_added", [], "any", false, false, false, 9);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sc-product-content-reviews-item-text pt-3\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 13);
                echo "</div>
\t\t\t";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "admin_text", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "\t\t\t\t<div class=\"sc-product-content-reviews-item-answer p-3 br-4 mt-3\">
\t\t\t\t\t<div class=\"sc-product-content-reviews-item-answer-title text-uppercase fw-600 mb-3\">";
                    // line 16
                    echo ($context["text_admin_title"] ?? null);
                    echo "</div>
\t\t\t\t\t<p>";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["comment"], "admin_text", [], "any", false, false, false, 17);
                    echo "</p>
\t\t\t\t</div>
\t\t\t";
                }
                // line 20
                echo "\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t<div class=\"pt-3\">";
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        } else {
            // line 24
            echo "\t<div class=\"dark-text fw-500\">";
            echo ($context["entry_empty_comments"] ?? null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/blog/oct_blogcomment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  88 => 22,  81 => 20,  75 => 17,  71 => 16,  68 => 15,  66 => 14,  62 => 13,  55 => 9,  51 => 8,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/blog/oct_blogcomment.twig", "");
    }
}
