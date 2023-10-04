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

/* oct_showcase/template/octemplates/menu/oct_menu.twig */
class __TwigTemplate_74a2e1702244585eb4b88f3dc6a117b6437235899949e6cb2d93f4c2dd5d7928 extends \Twig\Template
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
        if (($context["oct_menu"] ?? null)) {
            // line 2
            echo "    <div class=\"sc-megamenu d-none d-xl-block\">
        <nav>
            <ul class=\"sc-megamenu-list list-unstyled py-2\">
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_category"]) {
                // line 6
                echo "                <li class=\"sc-megamenu-list-item d-flex align-items-center justify-content-between\">
                    <a href=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 7);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 7);
                echo " class=\"d-flex align-items-center flex-grow-1\">
                        ";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "                            <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 9);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 9);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "width", [], "any", false, false, false, 9);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "height", [], "any", false, false, false, 9);
                    echo "\">
                        ";
                }
                // line 11
                echo "                        <span class=\"fsz-14 ps-3\">";
                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 11);
                echo "</span>
                    </a>
                    ";
                // line 13
                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 13) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 13))) {
                    // line 14
                    echo "                        <span class=\"sc-btn sc-btn-with-icon br-4 no-btn d-flex align-items-center justify-content-center\">
                            <span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
                        </span>
                    ";
                }
                // line 18
                echo "                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 18) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 18)) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 18) == "standard"))) {
                    // line 19
                    echo "                    <div class=\"sc-megamenu-child";
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 19) == "1")) {
                        echo " sc-megamenu-child-narrow";
                    }
                    echo "\">
                        ";
                    // line 20
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 20) == "1")) {
                        // line 21
                        echo "                            <ul class=\"list-unstyled\">
                                ";
                        // line 22
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 22));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 23
                            echo "                                    <li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-between\">
                                        <a class=\"flex-grow-1\" href=\"";
                            // line 24
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 24);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 24);
                            echo "</a>
                                        ";
                            // line 25
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 25) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 25))) {
                                // line 26
                                echo "                                            <span class=\"sc-btn sc-btn-with-icon br-4 no-btn d-flex align-items-center justify-content-center\">
                                                <span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
                                            </span>
                                        ";
                            }
                            // line 30
                            echo "                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 30) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 30))) {
                                // line 31
                                echo "                                            <div class=\"sc-megamenu-child sc-megamenu-child-narrow\">
                                                <ul class=\"list-unstyled\">
                                                    ";
                                // line 33
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 33));
                                foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                    // line 34
                                    echo "                                                        <li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-between\">
                                                            <a class=\"flex-grow-1\" href=\"";
                                    // line 35
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 35);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 35);
                                    echo "</a>
                                                            ";
                                    // line 36
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 36) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 36))) {
                                        // line 37
                                        echo "                                                                <span class=\"sc-btn sc-btn-with-icon br-4 no-btn d-flex align-items-center justify-content-center\">
                                                                    <span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
                                                                </span>
                                                            ";
                                    }
                                    // line 41
                                    echo "                                                            ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 41) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 41))) {
                                        // line 42
                                        echo "                                                                <div class=\"sc-megamenu-child sc-megamenu-child-narrow\">
                                                                    <ul class=\"list-unstyled\">
                                                                        ";
                                        // line 44
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 44));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 45
                                            echo "                                                                            <li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-start\">
                                                                                <a class=\"flex-grow-1\" href=\"";
                                            // line 46
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 46);
                                            echo "\">
                                                                                    ";
                                            // line 47
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 47);
                                            echo "
                                                                                </a>
                                                                            </li>
                                                                        ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 51
                                        echo "                                                                        ";
                                        if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 51)) {
                                            // line 52
                                            echo "                                                                            <li class=\"sc-menu-list-landings\">
                                                                                <ul>
                                                                                    ";
                                            // line 54
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 54));
                                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                                // line 55
                                                echo "                                                                                        ";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 55))) {
                                                    // line 56
                                                    echo "                                                                                        <li class=\"d-flex flex-column align-items-start\">
                                                                                            <span class=\"sc-megamenu-children-title fw-700 mb-2\">";
                                                    // line 57
                                                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 57)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null);
                                                    echo "</span>
                                                                                            ";
                                                    // line 58
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 58));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                        // line 59
                                                        echo "                                                                                            <a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["page_link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 59);
                                                        echo "\" title=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["page_link"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 59);
                                                        echo "\" class=\"sc-menu-list-landings-link fsz-12\">";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["page_link"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 59);
                                                        echo "</a>
                                                                                            ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 61
                                                    echo "                                                                                        </li>
                                                                                        ";
                                                }
                                                // line 63
                                                echo "                                                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 64
                                            echo "                                                                                </ul>
                                                                            </li>
                                                                        ";
                                        }
                                        // line 67
                                        echo "                                                                    </ul>
                                                                </div>
                                                            ";
                                    }
                                    // line 70
                                    echo "                                                        </li>
                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 72
                                echo "                                                    ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 72)) {
                                    // line 73
                                    echo "                                                        <li class=\"sc-menu-list-landings\">
                                                            <ul>
                                                                ";
                                    // line 75
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 75));
                                    foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                        // line 76
                                        echo "                                                                    ";
                                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 76))) {
                                            // line 77
                                            echo "                                                                    <li class=\"d-flex flex-column align-items-start\">
                                                                        <span class=\"sc-megamenu-children-title fw-700 mb-2\">";
                                            // line 78
                                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 78)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                                            echo "</span>
                                                                        ";
                                            // line 79
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 79));
                                            foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                // line 80
                                                echo "                                                                        <a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["page_link"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 80);
                                                echo "\" title=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["page_link"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 80);
                                                echo "\" class=\"sc-menu-list-landings-link fsz-12\">";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["page_link"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 80);
                                                echo "</a>
                                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 82
                                            echo "                                                                    </li>
                                                                    ";
                                        }
                                        // line 84
                                        echo "                                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 85
                                    echo "                                                            </ul>
                                                        </li>
                                                    ";
                                }
                                // line 88
                                echo "                                                </ul>
                                            </div>
                                        ";
                            }
                            // line 91
                            echo "                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 93
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 93)) {
                            // line 94
                            echo "                                    <li class=\"sc-menu-list-landings\">
                                        <ul>
                                            ";
                            // line 96
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 96));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 97
                                echo "                                                ";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 97))) {
                                    // line 98
                                    echo "                                                <li class=\"d-flex flex-column align-items-start\">
                                                    <span class=\"sc-megamenu-children-title fw-700 mb-2\">";
                                    // line 99
                                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 99)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</span>
                                                    ";
                                    // line 100
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 100));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 101
                                        echo "                                                    <a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["page_link"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 101);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["page_link"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 101);
                                        echo "\" class=\"sc-menu-list-landings-link fsz-12\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["page_link"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 101);
                                        echo "</a>
                                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 103
                                    echo "                                                </li>
                                                ";
                                }
                                // line 105
                                echo "                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 106
                            echo "                                        </ul>
                                    </li>
                                ";
                        }
                        // line 109
                        echo "                            </ul>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 110
$context["oct_category"], "view", [], "any", false, false, false, 110) == "2")) {
                        // line 111
                        echo "                            <div class=\"sc-megamenu-child-wrapper\">
                                <div class=\"sc-megamenu-child-title fw-700 fsz-20 dark-text mb-4\">";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 112);
                        echo "</div>
                                <div class=\"d-flex\">
                                    <div class=\"sc-megamenu-children flex-grow-1\">
                                        ";
                        // line 115
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 115)) {
                            // line 116
                            echo "                                        <div class=\"sc-megamenu-children-item\">
                                            ";
                            // line 117
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 117));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 118
                                echo "                                                ";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 118))) {
                                    // line 119
                                    echo "                                                    <span class=\"sc-megamenu-children-title fw-700\">";
                                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 119)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</span>
                                                    <ul class=\"list-unstyled fsz-12\">
                                                        ";
                                    // line 121
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 121));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 122
                                        echo "                                                        <li>
                                                            <a href=\"";
                                        // line 123
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["page_link"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 123);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["page_link"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 123);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["page_link"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 123);
                                        echo "</a>
                                                        </li>
                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 126
                                    echo "                                                    </ul>
                                                ";
                                }
                                // line 128
                                echo "                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 129
                            echo "                                        </div>
                                        ";
                        }
                        // line 131
                        echo "                                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 131)) {
                            // line 132
                            echo "                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 132));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 133
                                echo "                                        <div class=\"sc-megamenu-children-item\">
                                            <a href=\"";
                                // line 134
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 134);
                                echo "\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 134);
                                echo "\" class=\"sc-megamenu-children-title fw-700\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 134);
                                echo "</a>
                                            ";
                                // line 135
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 135)) {
                                    // line 136
                                    echo "                                                <ul class=\"list-unstyled fsz-12\">
                                                    ";
                                    // line 137
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 137));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                        // line 138
                                        echo "                                                    <li>
                                                        <a href=\"";
                                        // line 139
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 139);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 139);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 139);
                                        echo "</a>
                                                    </li>
                                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 142
                                    echo "                                                </ul>
                                            ";
                                }
                                // line 144
                                echo "                                        </div>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 146
                            echo "                                        ";
                        }
                        // line 147
                        echo "                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    // line 151
                    echo "                    </div>
                    ";
                }
                // line 153
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 153) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 153) == "category"))) {
                    // line 154
                    echo "                    <div class=\"sc-megamenu-child";
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 154) == "1")) {
                        echo " sc-megamenu-child-narrow";
                    }
                    echo "\">
                        ";
                    // line 155
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 155) == "1")) {
                        // line 156
                        echo "                        <ul class=\"list-unstyled\">
                            ";
                        // line 157
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 157));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 158
                            echo "                            <li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-between\">
                                <a class=\"flex-grow-1\" href=\"";
                            // line 159
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 159);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 159);
                            echo "</a>
                                ";
                            // line 160
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 160) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 160))) {
                                // line 161
                                echo "                                <span class=\"sc-btn sc-btn-with-icon br-4 no-btn d-flex align-items-center justify-content-center\">
                                    <span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
                                </span>
                                ";
                            }
                            // line 165
                            echo "                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 165) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 165))) {
                                // line 166
                                echo "                                <div class=\"sc-megamenu-child sc-megamenu-child-narrow\">
                                    <ul class=\"list-unstyled\">
                                        ";
                                // line 168
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 168));
                                foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                    // line 169
                                    echo "                                        <li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-between\">
                                            <a class=\"flex-grow-1\" href=\"";
                                    // line 170
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 170);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 170);
                                    echo "</a>
                                            ";
                                    // line 171
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 171) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 171))) {
                                        // line 172
                                        echo "                                            <span class=\"sc-btn sc-btn-with-icon br-4 no-btn d-flex align-items-center justify-content-center\">
                                                <span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
                                            </span>
                                            ";
                                    }
                                    // line 176
                                    echo "                                            ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 176) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 176))) {
                                        // line 177
                                        echo "                                            <div class=\"sc-megamenu-child sc-megamenu-child-narrow\">
                                                <ul class=\"list-unstyled\">
                                                    ";
                                        // line 179
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 179));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 180
                                            echo "                                                    <li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-start\">
                                                        <a class=\"flex-grow-1\" href=\"";
                                            // line 181
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 181);
                                            echo "\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 181);
                                            echo "</span></a>
                                                    </li>
                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 184
                                        echo "                                                    ";
                                        if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 184)) {
                                            // line 185
                                            echo "                                                    <li class=\"sc-menu-list-landings\">
                                                        <ul>
                                                            ";
                                            // line 187
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 187));
                                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                                // line 188
                                                echo "                                                                ";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 188))) {
                                                    // line 189
                                                    echo "                                                                <li class=\"d-flex flex-column align-items-start\">
                                                                    <span class=\"sc-megamenu-children-title fw-700 mb-2\">";
                                                    // line 190
                                                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 190)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[($context["language_id"] ?? null)] ?? null) : null);
                                                    echo "</span>
                                                                    ";
                                                    // line 191
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 191));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                        // line 192
                                                        echo "                                                                    <a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["page_link"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 192);
                                                        echo "\" title=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["page_link"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 192);
                                                        echo "\" class=\"sc-menu-list-landings-link fsz-12\">";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["page_link"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 192);
                                                        echo "</a>
                                                                    ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 194
                                                    echo "                                                                </li>
                                                                ";
                                                }
                                                // line 196
                                                echo "                                                            ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 197
                                            echo "                                                        </ul>
                                                    </li>
                                                    ";
                                        }
                                        // line 200
                                        echo "                                                </ul>
                                            </div>
                                            ";
                                    }
                                    // line 203
                                    echo "                                        </li>
                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 205
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 205)) {
                                    // line 206
                                    echo "                                        <li class=\"sc-menu-list-landings\">
                                            <ul>
                                                ";
                                    // line 208
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 208));
                                    foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                        // line 209
                                        echo "                                                    ";
                                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 209))) {
                                            // line 210
                                            echo "                                                    <li class=\"d-flex flex-column align-items-start\">
                                                        <span class=\"sc-megamenu-children-title fw-700 mb-2\">";
                                            // line 211
                                            echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 211)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["language_id"] ?? null)] ?? null) : null);
                                            echo "</span>
                                                        ";
                                            // line 212
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 212));
                                            foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                // line 213
                                                echo "                                                        <a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["page_link"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 213);
                                                echo "\" title=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["page_link"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 213);
                                                echo "\" class=\"sc-menu-list-landings-link fsz-12\">";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["page_link"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 213);
                                                echo "</a>
                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 215
                                            echo "                                                    </li>
                                                    ";
                                        }
                                        // line 217
                                        echo "                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 218
                                    echo "                                            </ul>
                                        </li>
                                        ";
                                }
                                // line 221
                                echo "                                    </ul>
                                </div>
                                ";
                            }
                            // line 224
                            echo "                            </li>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 226
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 226)) {
                            // line 227
                            echo "                            <li class=\"sc-menu-list-landings\">
                                <ul>
                                    ";
                            // line 229
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 229));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 230
                                echo "                                        ";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 230))) {
                                    // line 231
                                    echo "                                        <li class=\"d-flex flex-column align-items-start\">
                                            <span class=\"sc-megamenu-children-title fw-700 mb-2\">";
                                    // line 232
                                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 232)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</span>
                                            ";
                                    // line 233
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 233));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 234
                                        echo "                                            <a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["page_link"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 234);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["page_link"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 234);
                                        echo "\" class=\"sc-menu-list-landings-link fsz-12\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["page_link"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 234);
                                        echo "</a>
                                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 236
                                    echo "                                        </li>
                                        ";
                                }
                                // line 238
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 239
                            echo "                                </ul>
                            </li>
                            ";
                        }
                        // line 242
                        echo "                        </ul>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 243
$context["oct_category"], "view", [], "any", false, false, false, 243) == "2")) {
                        // line 244
                        echo "                        <div class=\"sc-megamenu-child-wrapper\">
                            <div class=\"sc-megamenu-child-title fw-700 fsz-20 dark-text mb-4\">";
                        // line 245
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 245);
                        echo "</div>
                            <div class=\"d-flex\">
                                ";
                        // line 247
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 247)) {
                            // line 248
                            echo "                                <div class=\"col-3\">
                                    ";
                            // line 249
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 249));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_pages"]) {
                                // line 250
                                echo "                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["oct_pages"]);
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 251
                                    echo "                                    <div class=\"sc-megamenu-children-item\">
                                        ";
                                    // line 252
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 252))) {
                                        // line 253
                                        echo "                                            <span class=\"sc-megamenu-children-title fw-700\">";
                                        echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 253)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
                                            <ul class=\"list-unstyled fsz-12\">
                                                ";
                                        // line 255
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 255));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 256
                                            echo "                                                <li>
                                                    <a href=\"";
                                            // line 257
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["page_link"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 257);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["page_link"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 257);
                                            echo "\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["page_link"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 257);
                                            echo "</a>
                                                </li>
                                                ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 260
                                        echo "                                            </ul>
                                        ";
                                    }
                                    // line 262
                                    echo "                                    </div>
                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 264
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_pages'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 265
                            echo "                                </div>
                                ";
                        }
                        // line 267
                        echo "                                <div class=\"sc-megamenu-children flex-grow-1\">
                                    ";
                        // line 268
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 268)) {
                            // line 269
                            echo "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 269));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 270
                                echo "                                    <div class=\"sc-megamenu-children-item\">
                                        <a href=\"";
                                // line 271
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 271);
                                echo "\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 271);
                                echo "\" class=\"sc-megamenu-children-title fw-700";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 271)) {
                                    echo " d-flex flex-column";
                                }
                                echo "\">
                                            ";
                                // line 272
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 272)) {
                                    // line 273
                                    echo "                                                <img class=\"my-2\" src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 273);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 273);
                                    echo "\" width=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_width", [], "any", false, false, false, 273);
                                    echo "\" height=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_height", [], "any", false, false, false, 273);
                                    echo "\" />
                                            ";
                                }
                                // line 275
                                echo "                                            <span>";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 275);
                                echo "</span>
                                        </a>
                                        ";
                                // line 277
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 277)) {
                                    // line 278
                                    echo "                                            <ul class=\"list-unstyled fsz-12\">
                                                ";
                                    // line 279
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 279));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                        // line 280
                                        echo "                                                <li>
                                                    <a href=\"";
                                        // line 281
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 281);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 281);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 281);
                                        echo "</a>
                                                </li>
                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 284
                                    echo "                                            </ul>
                                        ";
                                }
                                // line 286
                                echo "                                    </div>
                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 288
                            echo "                                    ";
                        }
                        // line 289
                        echo "                                </div>
                            </div>
                        </div>
                        ";
                    }
                    // line 293
                    echo "                    </div>
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 294
$context["oct_category"], "children", [], "any", false, false, false, 294) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 294) == "oct_blogcategory"))) {
                    // line 295
                    echo "                    <div class=\"sc-megamenu-child sc-megamenu-child-narrow\">
                        <ul class=\"list-unstyled\">
                            ";
                    // line 297
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 297));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 298
                        echo "                            <li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-between\">
                                <a class=\"flex-grow-1\" href=\"";
                        // line 299
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 299);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 299);
                        echo "</a>
                                ";
                        // line 300
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 300)) {
                            // line 301
                            echo "                                    <span class=\"sc-btn sc-btn-with-icon br-4 no-btn d-flex align-items-center justify-content-center\">
                                        <span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
                                    </span>
                                ";
                        }
                        // line 305
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 305)) {
                            // line 306
                            echo "                                <div class=\"sc-megamenu-child sc-megamenu-child-narrow\">
                                    <ul class=\"list-unstyled\">
                                        ";
                            // line 308
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 308));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 309
                                echo "                                        <li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-between\">
                                            <a class=\"flex-grow-1\" href=\"";
                                // line 310
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 310);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 310);
                                echo "</a>
                                        </li>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 313
                            echo "                                    </ul>
                                </div>
                                ";
                        }
                        // line 316
                        echo "                            </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 318
                    echo "                        </ul>
                    </div>
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 320
$context["oct_category"], "children", [], "any", false, false, false, 320) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 320) == "manufacturer"))) {
                    // line 321
                    echo "                        <div class=\"sc-megamenu-child";
                    if ( !twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 321)) {
                        echo " sc-megamenu-child-narrow";
                    }
                    echo "\">
                            ";
                    // line 322
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 322)) {
                        // line 323
                        echo "                                <div class=\"sc-megamenu-child-wrapper\">
                                    <div class=\"sc-megamenu-children sc-megamenu-children-manufacturers\">
                                        ";
                        // line 325
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 325));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 326
                            echo "                                            <div class=\"sc-megamenu-children-item text-center\">
                                                <a href=\"";
                            // line 327
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 327);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 327);
                            echo "\" class=\"sc-megamenu-children-title fw-700 d-flex flex-column\">
                                                    ";
                            // line 328
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 328)) {
                                // line 329
                                echo "                                                        <img class=\"my-2 mx-auto\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 329);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 329);
                                echo "\" width=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_width", [], "any", false, false, false, 329);
                                echo "\" height=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_height", [], "any", false, false, false, 329);
                                echo "\" />
                                                    ";
                            }
                            // line 331
                            echo "                                                    <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 331);
                            echo "</span>
                                                </a>
                                            </div>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 335
                        echo "                                    </div>
                                </div>
                            ";
                    } else {
                        // line 338
                        echo "                                <ul class=\"list-unstyled\">
                                    ";
                        // line 339
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 339));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 340
                            echo "                                    <li class=\"fsz-14 fw-500 d-flex align-items-center justify-content-between\">
                                        <a class=\"flex-grow-1\" href=\"";
                            // line 341
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 341);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 341);
                            echo "</a>
                                    </li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 344
                        echo "                                </ul>
                            ";
                    }
                    // line 346
                    echo "                        </div>
                    ";
                }
                // line 348
                echo "                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "            </ul>
        </nav>
    </div>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            megaMenu();
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/menu/oct_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1098 => 350,  1091 => 348,  1087 => 346,  1083 => 344,  1072 => 341,  1069 => 340,  1065 => 339,  1062 => 338,  1057 => 335,  1046 => 331,  1034 => 329,  1032 => 328,  1026 => 327,  1023 => 326,  1019 => 325,  1015 => 323,  1013 => 322,  1006 => 321,  1004 => 320,  1000 => 318,  993 => 316,  988 => 313,  977 => 310,  974 => 309,  970 => 308,  966 => 306,  963 => 305,  957 => 301,  955 => 300,  949 => 299,  946 => 298,  942 => 297,  938 => 295,  936 => 294,  933 => 293,  927 => 289,  924 => 288,  917 => 286,  913 => 284,  900 => 281,  897 => 280,  893 => 279,  890 => 278,  888 => 277,  882 => 275,  870 => 273,  868 => 272,  858 => 271,  855 => 270,  850 => 269,  848 => 268,  845 => 267,  841 => 265,  835 => 264,  828 => 262,  824 => 260,  811 => 257,  808 => 256,  804 => 255,  798 => 253,  796 => 252,  793 => 251,  788 => 250,  784 => 249,  781 => 248,  779 => 247,  774 => 245,  771 => 244,  769 => 243,  766 => 242,  761 => 239,  755 => 238,  751 => 236,  738 => 234,  734 => 233,  730 => 232,  727 => 231,  724 => 230,  720 => 229,  716 => 227,  713 => 226,  706 => 224,  701 => 221,  696 => 218,  690 => 217,  686 => 215,  673 => 213,  669 => 212,  665 => 211,  662 => 210,  659 => 209,  655 => 208,  651 => 206,  648 => 205,  641 => 203,  636 => 200,  631 => 197,  625 => 196,  621 => 194,  608 => 192,  604 => 191,  600 => 190,  597 => 189,  594 => 188,  590 => 187,  586 => 185,  583 => 184,  572 => 181,  569 => 180,  565 => 179,  561 => 177,  558 => 176,  552 => 172,  550 => 171,  544 => 170,  541 => 169,  537 => 168,  533 => 166,  530 => 165,  524 => 161,  522 => 160,  516 => 159,  513 => 158,  509 => 157,  506 => 156,  504 => 155,  497 => 154,  494 => 153,  490 => 151,  484 => 147,  481 => 146,  474 => 144,  470 => 142,  457 => 139,  454 => 138,  450 => 137,  447 => 136,  445 => 135,  437 => 134,  434 => 133,  429 => 132,  426 => 131,  422 => 129,  416 => 128,  412 => 126,  399 => 123,  396 => 122,  392 => 121,  386 => 119,  383 => 118,  379 => 117,  376 => 116,  374 => 115,  368 => 112,  365 => 111,  363 => 110,  360 => 109,  355 => 106,  349 => 105,  345 => 103,  332 => 101,  328 => 100,  324 => 99,  321 => 98,  318 => 97,  314 => 96,  310 => 94,  307 => 93,  300 => 91,  295 => 88,  290 => 85,  284 => 84,  280 => 82,  267 => 80,  263 => 79,  259 => 78,  256 => 77,  253 => 76,  249 => 75,  245 => 73,  242 => 72,  235 => 70,  230 => 67,  225 => 64,  219 => 63,  215 => 61,  202 => 59,  198 => 58,  194 => 57,  191 => 56,  188 => 55,  184 => 54,  180 => 52,  177 => 51,  167 => 47,  163 => 46,  160 => 45,  156 => 44,  152 => 42,  149 => 41,  143 => 37,  141 => 36,  135 => 35,  132 => 34,  128 => 33,  124 => 31,  121 => 30,  115 => 26,  113 => 25,  107 => 24,  104 => 23,  100 => 22,  97 => 21,  95 => 20,  88 => 19,  85 => 18,  79 => 14,  77 => 13,  71 => 11,  59 => 9,  57 => 8,  51 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/menu/oct_menu.twig", "");
    }
}
