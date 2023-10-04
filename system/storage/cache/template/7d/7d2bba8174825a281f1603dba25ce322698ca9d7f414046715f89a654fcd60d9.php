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

/* catalog/category_form.twig */
class __TwigTemplate_a56d359a035e715a0961d645c1d7efa5702bcada5a642ecc3681fcec7c2120cf extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-category\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_design"] ?? null);
        echo "</a></li>

\t\t\t";
        // line 34
        if ((array_key_exists("oct_cat_page", $context) && ($context["oct_cat_page"] ?? null))) {
            // line 35
            echo "\t\t\t<li><a href=\"#tab-pages\" data-toggle=\"tab\">";
            echo ($context["tab_oct_category_pages"] ?? null);
            echo "</a></li>
\t\t\t";
        }
        // line 37
        echo "\t\t\t
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 43
            echo "                <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 43);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 43);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 48
            echo "                <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            echo "\">
                  
\t\t\t<div class=\"form-group ";
            // line 50
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_seo_title_data"] ?? null), "category", [], "any", false, true, false, 50), "title_empty", [], "any", true, true, false, 50)) {
                echo "required";
            }
            echo "\">
\t\t\t
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["category_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null), "name", [], "any", false, false, false, 54)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\" class=\"form-control\" />
                      ";
            // line 55
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null)) {
                // line 56
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 58
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["category_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["category_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null), "description", [], "any", false, false, false, 63)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  
\t\t\t<div class=\"form-group ";
            // line 67
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_seo_title_data"] ?? null), "category", [], "any", false, true, false, 67), "title_empty", [], "any", true, true, false, 67)) {
                echo "required";
            }
            echo "\">
\t\t\t
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["category_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["category_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null), "meta_title", [], "any", false, false, false, 71)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
            echo "\" class=\"form-control\" />
                      ";
            // line 72
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_meta_title"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null)) {
                // line 73
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_meta_title"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 75
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["category_description"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["category_description"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80)] ?? null) : null), "meta_description", [], "any", false, false, false, 80)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 86
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
            echo "\" class=\"form-control\">";
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["category_description"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["category_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 86)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-parent\">";
        // line 95
        echo ($context["entry_parent"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"path\" value=\"";
        // line 97
        echo ($context["path"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_parent"] ?? null);
        echo "\" id=\"input-parent\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"parent_id\" value=\"";
        // line 98
        echo ($context["parent_id"] ?? null);
        echo "\" />
                  ";
        // line 99
        if (($context["error_parent"] ?? null)) {
            // line 100
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_parent"] ?? null);
            echo "</div>
                  ";
        }
        // line 102
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 105
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 107
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\" />
                  <div id=\"category-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_filter"]) {
            // line 110
            echo "                    <div id=\"category-filter";
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "filter_id", [], "any", false, false, false, 110);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "name", [], "any", false, false, false, 110);
            echo "
                      <input type=\"hidden\" name=\"category_filter[]\" value=\"";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "filter_id", [], "any", false, false, false, 111);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 118
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 122
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 124
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 124), ($context["category_store"] ?? null))) {
                // line 125
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 125);
                echo "\" checked=\"checked\" />
                        ";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 126);
                echo "
                        ";
            } else {
                // line 128
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 128);
                echo "\" />
                        ";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 129);
                echo "
                        ";
            }
            // line 131
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 138
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 139
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 140
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>

\t\t\t<div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 145
        echo ($context["entry_oct_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-oct_image\" data-toggle=\"image\" class=\"img-oct_thumbnail\"><img style=\"width:100px;\" src=\"";
        // line 146
        echo ($context["oct_thumb_icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"oct_image\" value=\"";
        // line 147
        echo ($context["oct_image"] ?? null);
        echo "\" id=\"input-oct_image\" />
                </div>
            </div>
\t\t\t
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-top\"><span data-toggle=\"tooltip\" title=\"";
        // line 152
        echo ($context["help_top"] ?? null);
        echo "\">";
        echo ($context["entry_top"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 156
        if (($context["top"] ?? null)) {
            // line 157
            echo "                      <input type=\"checkbox\" name=\"top\" value=\"1\" checked=\"checked\" id=\"input-top\" />
                      ";
        } else {
            // line 159
            echo "                      <input type=\"checkbox\" name=\"top\" value=\"1\" id=\"input-top\" />
                      ";
        }
        // line 161
        echo "                      &nbsp; </label>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-column\"><span data-toggle=\"tooltip\" title=\"";
        // line 166
        echo ($context["help_column"] ?? null);
        echo "\">";
        echo ($context["entry_column"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"column\" value=\"";
        // line 168
        echo ($context["column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_column"] ?? null);
        echo "\" id=\"input-column\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 172
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 174
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 178
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 181
        if (($context["status"] ?? null)) {
            // line 182
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 183
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 185
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 186
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 188
        echo "                  </select>
                </div>
              </div>
            </div>

\t\t\t";
        // line 193
        if ((array_key_exists("oct_cat_page", $context) && ($context["oct_cat_page"] ?? null))) {
            // line 194
            echo "\t\t\t<div class=\"tab-pane\" id=\"tab-pages\">
            \t\t<table class=\"table table-bordered table-hover\" id=\"oct_cat_pages_table\">
\t\t\t\t\t<tbody class=\"group_in\">
\t\t\t\t\t\t";
            // line 197
            $context["advantages_row"] = 0;
            // line 198
            echo "\t\t\t\t\t\t";
            $context["advantages_row_page"] = 0;
            // line 199
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_cat_pages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_cat_page"]) {
                // line 200
                echo "\t\t\t\t\t\t<tr id=\"advantage-row";
                echo ($context["advantages_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 205
                echo ($context["text_oct_group_links"] ?? null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 211
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 212
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t                        \t<img src=\"language/";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 214);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 214);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 214);
                    echo "\" />
\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_cat_pages[";
                    // line 216
                    echo ($context["advantages_row"] ?? null);
                    echo "][page_group][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 216);
                    echo "]\" value=\"";
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["oct_cat_page"], "page_group", [], "any", false, false, false, 216)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 216)] ?? null) : null);
                    echo "\" id=\"advantage-title-";
                    echo ($context["advantages_row"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 216);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 223
                echo ($context["text_oct_group_links_title"] ?? null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 224
                echo ($context["text_oct_group_links_link"] ?? null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody class=\"links_in";
                // line 228
                echo ($context["advantages_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 229
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_cat_page"], "page_links", [], "any", false, false, false, 229));
                foreach ($context['_seq'] as $context["_key"] => $context["oct_cat_page_link"]) {
                    // line 230
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"advantage-page-row";
                    echo ($context["advantages_row"] ?? null);
                    echo "-";
                    echo ($context["advantages_row_page"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 232
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 233
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                        // line 235
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 235);
                        echo "/";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 235);
                        echo ".png\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 235);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_cat_pages[";
                        // line 237
                        echo ($context["advantages_row"] ?? null);
                        echo "][page_links][";
                        echo ($context["advantages_row_page"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237);
                        echo "][title]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["oct_cat_page_link"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237)] ?? null) : null), "title", [], "any", false, false, false, 237);
                        echo "\" id=\"advantage-linktitle-";
                        echo ($context["advantages_row"] ?? null);
                        echo ($context["advantages_row_page"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 240
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 242
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 243
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                        // line 245
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 245);
                        echo "/";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 245);
                        echo ".png\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 245);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_cat_pages[";
                        // line 247
                        echo ($context["advantages_row"] ?? null);
                        echo "][page_links][";
                        echo ($context["advantages_row_page"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 247);
                        echo "][link]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["oct_cat_page_link"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 247)] ?? null) : null), "link", [], "any", false, false, false, 247);
                        echo "\" id=\"advantage-link-";
                        echo ($context["advantages_row"] ?? null);
                        echo ($context["advantages_row_page"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 247);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 250
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#advantage-page-row";
                    // line 252
                    echo ($context["advantages_row"] ?? null);
                    echo "-";
                    echo ($context["advantages_row_page"] ?? null);
                    echo "').remove()\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 255
                    $context["advantages_row_page"] = (($context["advantages_row_page"] ?? null) + 1);
                    // line 256
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_cat_page_link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 257
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addOCTCatLink(";
                // line 262
                echo ($context["advantages_row"] ?? null);
                echo ");\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"add group\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#advantage-row";
                // line 269
                echo ($context["advantages_row"] ?? null);
                echo "').remove()\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                // line 275
                $context["advantages_row"] = (($context["advantages_row"] ?? null) + 1);
                // line 276
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_cat_page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addOCTCatGroup();\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"add group\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<script>
\t\t\t\tlet advantages_row = ";
            // line 287
            echo ($context["advantages_row"] ?? null);
            echo ";

\t\t\t\tfunction addOCTCatGroup() {
\t\t\t\t\tconst html = `
\t\t\t\t\t<tr id=\"advantage-row\${ advantages_row }\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>";
            // line 296
            echo ($context["text_oct_group_links"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 303
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t                        \t<img src=\"language/";
                // line 305
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 305);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 305);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 305);
                echo "\" />
\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_cat_pages[\${ advantages_row }][page_group][";
                // line 307
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 307);
                echo "]\" value=\"\" id=\"advantage-title-\${ advantages_row }";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 307);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            echo "\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
            // line 314
            echo ($context["text_oct_group_links_title"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
            // line 315
            echo ($context["text_oct_group_links_link"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody class=\"links_in\${ advantages_row }\"></tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addOCTCatLink(\${ advantages_row });\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"add group\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#advantage-row\${ advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
            // line 331
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t`;

\t\t\t\t\t\$('#oct_cat_pages_table tbody.group_in').append(html);

\t\t\t\t\tadvantages_row++;
\t\t\t\t}

\t\t\t\tlet advantages_row_page = ";
            // line 344
            echo ($context["advantages_row_page"] ?? null);
            echo ";

\t\t\t\tfunction addOCTCatLink(row) {
\t\t\t\t\tconst html = `
\t\t\t\t\t<tr id=\"advantage-page-row\${ row }-\${ advantages_row_page }\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 350
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 351
                echo "\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t                        <span class=\"input-group-addon\">
\t\t                        \t<img src=\"language/";
                // line 353
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 353);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 353);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 353);
                echo "\" />
\t\t                        </span>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_cat_pages[\${ row }][page_links][\${ advantages_row_page }][";
                // line 355
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 355);
                echo "][title]\" value=\"\" id=\"advantage-linktitle-\${ row }\${ advantages_row_page }";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 355);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 361
                echo "\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t                        <span class=\"input-group-addon\">
\t\t                        \t<img src=\"language/";
                // line 363
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 363);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 363);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 363);
                echo "\" />
\t\t                        </span>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_cat_pages[\${ row }][page_links][\${ advantages_row_page }][";
                // line 365
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 365);
                echo "][link]\" value=\"\" id=\"advantage-link-\${ row }\${ advantages_row_page }";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 365);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#advantage-page-row\${ row }-\${ advantages_row_page }').remove()\" data-toggle=\"tooltip\" title=\"";
            // line 370
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t`;

\t\t\t\t\t\$('#oct_cat_pages_table tbody.links_in'+row).append(html);

\t\t\t\t\tadvantages_row_page++;
\t\t\t\t}
\t\t\t\t</script>
            </div>
            ";
        }
        // line 382
        echo "\t\t\t
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 384
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 389
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 390
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 394
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 395
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 396
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 396);
            echo "</td>
                    <td class=\"text-left\">";
            // line 397
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 398
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 398);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 398);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 398);
                echo "\" /></span>
                        <input type=\"text\" name=\"category_seo_url[";
                // line 399
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 399);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 399);
                echo "]\" value=\"";
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["category_seo_url"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 399)] ?? null) : null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 399)] ?? null) : null)) {
                    echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["category_seo_url"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 399)] ?? null) : null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 399)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" />
                      </div>
                      ";
                // line 401
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["error_keyword"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 401)] ?? null) : null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 401)] ?? null) : null)) {
                    // line 402
                    echo "                      <div class=\"text-danger\">";
                    echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_keyword"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 402)] ?? null) : null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 402)] ?? null) : null);
                    echo "</div>
                      ";
                }
                // line 404
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "                  </tbody>
                  
                </table>
              </div>
            </div>            
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 417
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 418
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 423
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 424
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 425
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 425);
            echo "</td>
                      <td class=\"text-left\"><select name=\"category_layout[";
            // line 426
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 426);
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>
                          ";
            // line 428
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 429
                echo "                          ";
                if (((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["category_layout"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 429)] ?? null) : null) && ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["category_layout"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 429)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 429)))) {
                    // line 430
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 430);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 430);
                    echo "</option>
                          ";
                } else {
                    // line 432
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 432);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 432);
                    echo "</option>
                          ";
                }
                // line 434
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 435
            echo "                        </select></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 438
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  
  <script type=\"text/javascript\"><!--
\$('input[name=\\'path\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 462
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcategory_id: 0,
\t\t\t\t\tname: '";
        // line 467
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'path\\']').val(item['label']);
\t\t\$('input[name=\\'parent_id\\']').val(item['value']);
\t}
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 489
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#category-filter' + item['value']).remove();

\t\t\$('#category-filter').append('<div id=\"category-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#category-filter').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div>
";
        // line 517
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/category_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1240 => 517,  1209 => 489,  1184 => 467,  1176 => 462,  1150 => 438,  1142 => 435,  1136 => 434,  1128 => 432,  1120 => 430,  1117 => 429,  1113 => 428,  1108 => 426,  1104 => 425,  1101 => 424,  1097 => 423,  1089 => 418,  1085 => 417,  1073 => 407,  1060 => 404,  1054 => 402,  1052 => 401,  1039 => 399,  1030 => 398,  1026 => 397,  1022 => 396,  1019 => 395,  1015 => 394,  1008 => 390,  1004 => 389,  996 => 384,  992 => 382,  977 => 370,  973 => 368,  962 => 365,  953 => 363,  949 => 361,  945 => 360,  941 => 358,  930 => 355,  921 => 353,  917 => 351,  913 => 350,  904 => 344,  888 => 331,  869 => 315,  865 => 314,  859 => 310,  848 => 307,  839 => 305,  835 => 303,  831 => 302,  822 => 296,  810 => 287,  798 => 277,  792 => 276,  790 => 275,  779 => 269,  769 => 262,  762 => 257,  756 => 256,  754 => 255,  744 => 252,  740 => 250,  721 => 247,  712 => 245,  708 => 243,  704 => 242,  700 => 240,  681 => 237,  672 => 235,  668 => 233,  664 => 232,  656 => 230,  652 => 229,  648 => 228,  641 => 224,  637 => 223,  631 => 219,  615 => 216,  606 => 214,  602 => 212,  598 => 211,  589 => 205,  580 => 200,  575 => 199,  572 => 198,  570 => 197,  565 => 194,  563 => 193,  556 => 188,  551 => 186,  546 => 185,  541 => 183,  536 => 182,  534 => 181,  528 => 178,  519 => 174,  514 => 172,  505 => 168,  498 => 166,  491 => 161,  487 => 159,  483 => 157,  481 => 156,  472 => 152,  464 => 147,  458 => 146,  454 => 145,  446 => 140,  440 => 139,  436 => 138,  430 => 134,  422 => 131,  417 => 129,  412 => 128,  407 => 126,  402 => 125,  400 => 124,  396 => 122,  392 => 121,  386 => 118,  380 => 114,  371 => 111,  364 => 110,  360 => 109,  355 => 107,  348 => 105,  343 => 102,  337 => 100,  335 => 99,  331 => 98,  325 => 97,  320 => 95,  314 => 91,  297 => 86,  290 => 84,  277 => 80,  270 => 78,  265 => 75,  259 => 73,  257 => 72,  247 => 71,  240 => 69,  233 => 67,  218 => 63,  211 => 61,  206 => 58,  200 => 56,  198 => 55,  188 => 54,  181 => 52,  174 => 50,  168 => 48,  164 => 47,  160 => 45,  143 => 43,  139 => 42,  132 => 37,  126 => 35,  124 => 34,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/category_form.twig", "");
    }
}
