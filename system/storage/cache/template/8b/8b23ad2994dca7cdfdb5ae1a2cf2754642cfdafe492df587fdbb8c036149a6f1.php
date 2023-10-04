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

/* oct_showcase/template/octemplates/module/oct_benefits.twig */
class __TwigTemplate_dbdc7cc810488dbf86b4dd9b6fb57e79bbdfa86a2a224412283a96c7f34c30fa extends \Twig\Template
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
        if (($context["oct_benefits"] ?? null)) {
            // line 2
            echo "<div id=\"rm-shop-advantages-";
            echo ($context["module"] ?? null);
            echo "\" class=\"row pt-3 pt-xl-4 g-3 g-xl-4 sc-advantages\">
\t";
            // line 3
            $context["key"] = 0;
            // line 4
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_benefits"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_benefit"]) {
                // line 5
                echo "\t";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 6
                echo "\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, true, false, 6), ($context["language_id"] ?? null), [], "array", true, true, false, 6) && (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 6)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null))) {
                    // line 7
                    echo "\t\t<div class=\"sc-advantages-item\">
\t\t\t<div id=\"block";
                    // line 8
                    echo ($context["module"] ?? null);
                    echo "-";
                    echo ($context["key"] ?? null);
                    echo "\" class=\"content-block d-flex flex-column align-items-center text-center h-100\">
\t\t\t\t<img src=\"";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "icon", [], "any", false, false, false, 9);
                    echo "\" alt=\"";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 9)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null);
                    echo "\" width=\"50\" height=\"50\">
\t\t\t\t";
                    // line 10
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "link", [], "any", false, true, false, 10), ($context["language_id"] ?? null), [], "array", true, true, false, 10) && (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "link", [], "any", false, false, false, 10)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null))) {
                        // line 11
                        echo "\t\t\t\t<a href=\"";
                        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "link", [], "any", false, false, false, 11)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null);
                        echo "\" class=\"sc-advantages-item-title mt-3 mb-1 fsz-14 fw-600 dark-text\">";
                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 11)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                        echo "</a>
\t\t\t\t";
                    } else {
                        // line 13
                        echo "\t\t\t\t<span class=\"sc-advantages-item-title mt-3 mb-1 fsz-14 fw-600 dark-text\">";
                        echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 13)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null);
                        echo "</span>
\t\t\t\t";
                    }
                    // line 15
                    echo "\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "text", [], "any", false, true, false, 15), ($context["language_id"] ?? null), [], "array", true, true, false, 15) && (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "text", [], "any", false, false, false, 15)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null))) {
                        // line 16
                        echo "\t\t\t\t<div class=\"sc-advantages-item-text fsz-12\">";
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "text", [], "any", false, false, false, 16)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null);
                        echo "</div>
\t\t\t\t";
                    }
                    // line 18
                    echo "\t\t\t</div>
\t\t</div>
\t\t<style>
\t\t\t";
                    // line 21
                    if (twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_title", [], "any", false, false, false, 21)) {
                        // line 22
                        echo "\t\t\t#block";
                        echo ($context["module"] ?? null);
                        echo "-";
                        echo ($context["key"] ?? null);
                        echo " .sc-advantages-item-title {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_title", [], "any", false, false, false, 22);
                        echo ";}
\t\t\t";
                    }
                    // line 24
                    echo "
\t\t\t";
                    // line 25
                    if (twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_text", [], "any", false, false, false, 25)) {
                        // line 26
                        echo "\t\t\t#block";
                        echo ($context["module"] ?? null);
                        echo "-";
                        echo ($context["key"] ?? null);
                        echo " .sc-advantages-item-text {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_text", [], "any", false, false, false, 26);
                        echo ";}
\t\t\t";
                    }
                    // line 28
                    echo "
\t\t\t";
                    // line 29
                    if (twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_fon_hover", [], "any", false, false, false, 29)) {
                        // line 30
                        echo "\t\t\t#block";
                        echo ($context["module"] ?? null);
                        echo "-";
                        echo ($context["key"] ?? null);
                        echo ":hover .sc-advantages-item-title {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_fon_hover", [], "any", false, false, false, 30);
                        echo ";}
\t\t\t";
                    }
                    // line 32
                    echo "\t\t</style>
\t\t";
                }
                // line 34
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_benefit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/module/oct_benefits.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 35,  148 => 34,  144 => 32,  134 => 30,  132 => 29,  129 => 28,  119 => 26,  117 => 25,  114 => 24,  104 => 22,  102 => 21,  97 => 18,  91 => 16,  88 => 15,  82 => 13,  74 => 11,  72 => 10,  66 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/module/oct_benefits.twig", "");
    }
}
