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

/* oct_showcase/template/common/menu.twig */
class __TwigTemplate_87929063075fce5c88f1e8e28137b6fb0817dfa729e47af5b32e399b8e838a7d extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "\t<div class=\"sc-megamenu\">
\t\t<nav>
\t\t\t<ul class=\"sc-megamenu-list list-unstyled py-2\">
\t\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "\t\t\t\t\t<li class=\"sc-megamenu-list-item d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t<a href=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 7);
                echo "\" class=\"d-flex align-items-center flex-grow-1\">
\t\t\t\t\t\t\t";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["category"], "oct_image", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "oct_image", [], "any", false, false, false, 9);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "width", [], "any", false, false, false, 9);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "height", [], "any", false, false, false, 9);
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                // line 11
                echo "\t\t\t\t\t\t\t<span class=\"fsz-14 ps-3\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                // line 13
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 13) || twig_get_attribute($this->env, $this->source, $context["category"], "oct_pages", [], "any", false, false, false, 13))) {
                    // line 14
                    echo "\t\t\t\t\t\t\t<span class=\"sc-btn sc-btn-with-icon br-4 no-btn d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18) || twig_get_attribute($this->env, $this->source, $context["category"], "oct_pages", [], "any", false, false, false, 18))) {
                    // line 19
                    echo "\t\t\t\t\t\t\t<div class=\"sc-megamenu-child sc-megamenu-child-narrow\">
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 22
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a class=\"flex-grow-1\" href=\"";
                        // line 23
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 23);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 23);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 24
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 24) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 24))) {
                            // line 25
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc-btn sc-btn-with-icon br-4 no-btn d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 29) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 29))) {
                            // line 30
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc-megamenu-child sc-megamenu-child-narrow\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 32
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 32));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 33
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-grow-1\" href=\"";
                                // line 34
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 34);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 34);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 35
                                if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 35) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 35))) {
                                    // line 36
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc-btn sc-btn-with-icon br-4 no-btn d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 40
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 40) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 40))) {
                                    // line 41
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc-megamenu-child sc-megamenu-child-narrow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 43
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 43));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                        // line 44
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex-grow-1\" href=\"";
                                        // line 45
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 45);
                                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 46
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 46);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 50
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 50)) {
                                        // line 51
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"sc-menu-list-landings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 53
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 53));
                                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                            // line 54
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 54))) {
                                                // line 55
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc-megamenu-children-title fw-700 mb-2\">";
                                                // line 56
                                                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 56)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null);
                                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                // line 57
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 57));
                                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                    // line 58
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["page_link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 58);
                                                    echo "\" title=\"";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["page_link"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 58);
                                                    echo "\" class=\"sc-menu-list-landings-link fsz-12\">";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["page_link"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 58);
                                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 60
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 62
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 63
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 66
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 69
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 71
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 71)) {
                                // line 72
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"sc-menu-list-landings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 74
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 74));
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 75
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 75))) {
                                        // line 76
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc-megamenu-children-title fw-700 mb-2\">";
                                        // line 77
                                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 77)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 78
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 78));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 79
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["page_link"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 79);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["page_link"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 79);
                                            echo "\" class=\"sc-menu-list-landings-link fsz-12\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["page_link"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 79);
                                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 81
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 83
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 84
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "oct_pages", [], "any", false, false, false, 92)) {
                        // line 93
                        echo "\t\t\t\t\t\t\t\t\t\t<li class=\"sc-menu-list-landings\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 95
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oct_category"] ?? null), "oct_pages", [], "any", false, false, false, 95));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 96))) {
                                // line 97
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc-megamenu-children-title fw-700 mb-2\">";
                                // line 98
                                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 98)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 99
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 99));
                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                    // line 100
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["page_link"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 100);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["page_link"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 100);
                                    echo "\" class=\"sc-menu-list-landings-link fsz-12\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["page_link"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 100);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 102
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 104
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "\t\t\t</ul>
\t\t</nav>
\t</div>
\t<script>
\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t\tmegaMenu();
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 113,  355 => 111,  350 => 108,  345 => 105,  339 => 104,  335 => 102,  322 => 100,  318 => 99,  314 => 98,  311 => 97,  308 => 96,  304 => 95,  300 => 93,  297 => 92,  290 => 90,  285 => 87,  280 => 84,  274 => 83,  270 => 81,  257 => 79,  253 => 78,  249 => 77,  246 => 76,  243 => 75,  239 => 74,  235 => 72,  232 => 71,  225 => 69,  220 => 66,  215 => 63,  209 => 62,  205 => 60,  192 => 58,  188 => 57,  184 => 56,  181 => 55,  178 => 54,  174 => 53,  170 => 51,  167 => 50,  157 => 46,  153 => 45,  150 => 44,  146 => 43,  142 => 41,  139 => 40,  133 => 36,  131 => 35,  125 => 34,  122 => 33,  118 => 32,  114 => 30,  111 => 29,  105 => 25,  103 => 24,  97 => 23,  94 => 22,  90 => 21,  86 => 19,  83 => 18,  77 => 14,  75 => 13,  69 => 11,  57 => 9,  55 => 8,  51 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/common/menu.twig", "");
    }
}
