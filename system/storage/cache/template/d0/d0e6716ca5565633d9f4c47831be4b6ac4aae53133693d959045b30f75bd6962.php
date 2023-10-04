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

/* octemplates/theme/oct_showcase.twig */
class __TwigTemplate_6da6b8a0e4ad093e12437393bde1a98b03ddde43f5c6e57d81f64166736633c0 extends \Twig\Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t";
        // line 6
        if (($context["update"] ?? null)) {
            // line 7
            echo "\t\t\t\t<a href=\"";
            echo ($context["update"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t";
        } else {
            // line 9
            echo "\t\t\t\t";
            if ((array_key_exists("quick_start", $context) && ($context["quick_start"] ?? null))) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo ($context["quick_start"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"Quick Start\" class=\"btn btn-danger\"><i class=\"fa fa-quora\"></i></a>
\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t<a href=\"";
            echo ($context["clear_modification"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_refresh"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t<button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
            // line 13
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
            // line 14
            echo ($context["cache_delete"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_clear_cache"] ?? null);
            echo "\" class=\"btn btn-warning\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t";
            // line 15
            if ((twig_length_filter($this->env, ($context["stores"] ?? null)) > 1)) {
                // line 16
                echo "\t\t\t\t<div class=\"dropdown\" style=\"display:inline-block;\">
\t\t\t\t\t<a href=\"javascript:;\" data-toggle=\"dropdown\" title=\"";
                // line 17
                echo ($context["button_multistore"] ?? null);
                echo "\" class=\"dropdown-toggle btn btn-info\"><i class=\"fas fa-store\"></i></a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 20
                    echo "\t\t\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 20);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t<a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 28
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 31
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 31);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 37
        if (($context["error_warning"] ?? null)) {
            // line 38
            echo "\t\t<script>
\t\t\tusNotify('warning', '";
            // line 39
            echo ($context["error_warning"] ?? null);
            echo "');
\t\t</script>
\t\t";
        }
        // line 42
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 43
            echo "\t    <script>
\t\t\tusNotify('success', '";
            // line 44
            echo ($context["success"] ?? null);
            echo "');
\t\t</script>
\t    ";
        }
        // line 47
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 49
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t\t<div class=\"pull-right oct-version\">v.<span>";
        // line 50
        echo ($context["theme_oct_showcase_version"] ?? null);
        echo "</span></div>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 53
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-cog fw\"></i> ";
        // line 55
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-image\" data-toggle=\"tab\"><i class=\"fa fa-picture-o fw\"></i> ";
        // line 56
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-widgets\" data-toggle=\"tab\"><i class=\"fa fa-cog fw\"></i> ";
        // line 57
        echo ($context["tab_widgets"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-seo_title\" data-toggle=\"tab\"><i class=\"fa fa-info fw\"></i> ";
        // line 58
        echo ($context["text_seo_title"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-help\" data-toggle=\"tab\"><i class=\"fas fa-info-circle\"></i> ";
        // line 59
        echo ($context["tab_help"] ?? null);
        echo "</a></li>
\t\t            </ul>
\t\t            <div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"settings\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-cog fw\"></i> ";
        // line 65
        echo ($context["text_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-header\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-up fw\"></i> ";
        // line 66
        echo ($context["tab_header"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-footer\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-down fw\"></i> ";
        // line 67
        echo ($context["tab_footer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-contacts\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-users fw\"></i> ";
        // line 68
        echo ($context["tab_contacts"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fab fa-medium-m fw\"></i> ";
        // line 69
        echo ($context["tab_menu"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-category\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-folder-open fw\"></i> ";
        // line 70
        echo ($context["tab_category"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-product\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-tv fw\"></i> ";
        // line 71
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-orders\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"far fa-check-circle fw\"></i> ";
        // line 72
        echo ($context["tab_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a id=\"code_mir\" href=\"#tab-css_js\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-cog fw\"></i> ";
        // line 73
        echo ($context["tab_css_js"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings-main\" data-toggle=\"tab\">";
        // line 80
        echo ($context["tab_main_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-optimization\" data-toggle=\"tab\" aria-expanded=\"true\">";
        // line 81
        echo ($context["text_optimization"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-settings-colors\" data-toggle=\"tab\">";
        // line 82
        echo ($context["text_main_color_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings-main\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 87
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_showcase_directory\" value=\"";
        // line 88
        echo ($context["theme_oct_showcase_directory"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"theme_oct_showcase_status\">";
        // line 90
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_status\" ";
        // line 93
        if (($context["theme_oct_showcase_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"theme_oct_showcase_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"theme_oct_showcase_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-license\">";
        // line 105
        echo ($context["entry_license"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-license\" name=\"theme_oct_showcase_license\" value=\"";
        // line 107
        echo ($context["theme_oct_showcase_license"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 108
        if (($context["error_license"] ?? null)) {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 111
            echo ($context["error_license"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-micro\">";
        // line 119
        echo ($context["entry_micro"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[micro]\" ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "micro", [], "any", false, false, false, 122)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-micro\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-micro\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-open_graph\">";
        // line 134
        echo ($context["entry_open_graph"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[open_graph]\" ";
        // line 137
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "open_graph", [], "any", false, false, false, 137)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-open_graph\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-open_graph\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-no_quantity_grayscale\">";
        // line 151
        echo ($context["entry_no_quantity_grayscale"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_no_quantity_grayscale\" ";
        // line 154
        if (($context["theme_oct_showcase_no_quantity_grayscale"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-no_quantity_grayscale\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-no_quantity_grayscale\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-compare\">";
        // line 168
        echo ($context["entry_header_compare"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data_colors[compare]\" ";
        // line 171
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "compare", [], "any", false, false, false, 171)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-compare\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-compare\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-wishlist\">";
        // line 183
        echo ($context["entry_header_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data_colors[wishlist]\" ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "wishlist", [], "any", false, false, false, 186)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-wishlist\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-wishlist\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-isbuttoninteractive\">";
        // line 200
        echo ($context["entry_isbuttoninteractive"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[isbuttoninteractive]\" ";
        // line 203
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "isbuttoninteractive", [], "any", false, false, false, 203)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-isbuttoninteractive\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-isbuttoninteractive\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-optimization\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 219
        echo ($context["text_optimization"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-minify\">";
        // line 222
        echo ($context["entry_minify"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[minify]\" ";
        // line 225
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "minify", [], "any", false, false, false, 225)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-minify\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-minify\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-webp\">";
        // line 237
        echo ($context["entry_webp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_webp\" ";
        // line 240
        if (($context["theme_oct_showcase_webp"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-webp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-webp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer-scripts\">";
        // line 254
        echo ($context["entry_footer_scripts"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[footer_scripts]\" ";
        // line 257
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "footer_scripts", [], "any", false, false, false, 257)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer-scripts\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer-scripts\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 270
        echo ($context["entry_preload_settings"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-preload_images\">";
        // line 273
        echo ($context["entry_preload_images"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[preload_images]\" ";
        // line 276
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "preload_images", [], "any", false, false, false, 276)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-preload_images\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-preload_images\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-preload_styles\">";
        // line 288
        echo ($context["entry_preload_styles"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[preload_styles]\" ";
        // line 291
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "preload_styles", [], "any", false, false, false, 291)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-preload_styles\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-preload_styles\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 305
        echo ($context["entry_lazyload"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-lazyload_mobile\">";
        // line 308
        echo ($context["entry_lazyload_mobile"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_lazyload_mobile\" ";
        // line 311
        if (($context["theme_oct_showcase_lazyload_mobile"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-lazyload_mobile\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-lazyload_mobile\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-lazyload_tablet\">";
        // line 323
        echo ($context["entry_lazyload_tablet"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_lazyload_tablet\" ";
        // line 326
        if (($context["theme_oct_showcase_lazyload_tablet"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-lazyload_tablet\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-lazyload_tablet\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-lazyload_desktop\">";
        // line 340
        echo ($context["entry_lazyload_desktop"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_lazyload_desktop\" ";
        // line 343
        if (($context["theme_oct_showcase_lazyload_desktop"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-lazyload_desktop\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-lazyload_desktop\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-lazyload_image\">";
        // line 355
        echo ($context["entry_lazyload_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width:30px;height:30px;\" src=\"";
        // line 358
        echo ($context["thumb_lazy"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_showcase_lazyload_image\" value=\"";
        // line 360
        echo ($context["image_lazy"] ?? null);
        echo "\" id=\"input-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-settings-colors\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 369
        echo ($context["text_main_colors"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-main_color\">";
        // line 373
        echo ($context["entry_main_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[main_color]\" value=\"";
        // line 375
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "main_color", [], "any", false, false, false, 375);
        echo "\" placeholder=\"";
        echo ($context["entry_main_color"] ?? null);
        echo "\" id=\"input-main_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-fon_color\">";
        // line 379
        echo ($context["entry_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[fon_color]\" value=\"";
        // line 381
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "fon_color", [], "any", false, false, false, 381);
        echo "\" placeholder=\"";
        echo ($context["entry_fon_color"] ?? null);
        echo "\" id=\"input-fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-main_link_color\">";
        // line 387
        echo ($context["entry_main_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[main_link_color]\" value=\"";
        // line 389
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "main_link_color", [], "any", true, true, false, 389) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "main_link_color", [], "any", false, false, false, 389))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "main_link_color", [], "any", false, false, false, 389);
        } else {
            echo "rgb(24, 164, 225)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_main_link_color"] ?? null);
        echo "\" id=\"input-main_link_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 396
        echo ($context["entry_buttons_colors"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-button_color_main\">";
        // line 400
        echo ($context["entry_buttons_main"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[button_color_main]\" value=\"";
        // line 402
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "button_color_main", [], "any", false, false, false, 402);
        echo "\" placeholder=\"";
        echo ($context["entry_buttons_main"] ?? null);
        echo "\" id=\"input-button_color_main\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-button_color_text\">";
        // line 406
        echo ($context["entry_buttons_text"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[button_color_text]\" value=\"";
        // line 408
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "button_color_text", [], "any", false, false, false, 408);
        echo "\" placeholder=\"";
        echo ($context["entry_buttons_text"] ?? null);
        echo "\" id=\"input-button_color_text\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-button_fon_light\">";
        // line 414
        echo ($context["entry_buttons_fon_light"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[button_fon_light]\" value=\"";
        // line 416
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "button_fon_light", [], "any", false, false, false, 416);
        echo "\" placeholder=\"";
        echo ($context["entry_buttons_fon_light"] ?? null);
        echo "\" id=\"input-button_fon_light\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-button_text_light\">";
        // line 420
        echo ($context["entry_buttons_text_light"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[button_text_light]\" value=\"";
        // line 422
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "button_text_light", [], "any", false, false, false, 422);
        echo "\" placeholder=\"";
        echo ($context["entry_buttons_text_light"] ?? null);
        echo "\" id=\"input-button_text_light\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 429
        echo ($context["tab_header"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-top_fon_color\">";
        // line 433
        echo ($context["entry_top_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[top_fon_color]\" value=\"";
        // line 435
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "top_fon_color", [], "any", false, false, false, 435);
        echo "\" placeholder=\"";
        echo ($context["entry_top_fon_color"] ?? null);
        echo "\" id=\"input-top_fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-top_link_color\">";
        // line 441
        echo ($context["entry_top_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[top_link_color]\" value=\"";
        // line 443
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "top_link_color", [], "any", false, false, false, 443);
        echo "\" placeholder=\"";
        echo ($context["entry_top_link_color"] ?? null);
        echo "\" id=\"input-top_link_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-top_link_color_hover\">";
        // line 447
        echo ($context["entry_top_link_color_hover"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[top_link_color_hover]\" value=\"";
        // line 449
        echo ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "top_link_color_hover", [], "any", false, false, false, 449)) ? (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "top_link_color_hover", [], "any", false, false, false, 449)) : ("#e5e5e5"));
        echo "\" placeholder=\"";
        echo ($context["entry_top_link_color_hover"] ?? null);
        echo "\" id=\"input-top_link_color_hover\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 456
        echo ($context["tab_footer"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_fon_color\">";
        // line 460
        echo ($context["entry_footer_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[footer_fon_color]\" value=\"";
        // line 462
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "footer_fon_color", [], "any", false, false, false, 462);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_fon_color"] ?? null);
        echo "\" id=\"input-footer_fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_text_color\">";
        // line 466
        echo ($context["entry_footer_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[footer_text_color]\" value=\"";
        // line 468
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "footer_text_color", [], "any", false, false, false, 468);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_text_color"] ?? null);
        echo "\" id=\"input-footer_text_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_color\">";
        // line 474
        echo ($context["entry_footer_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[footer_link_color]\" value=\"";
        // line 476
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "footer_link_color", [], "any", false, false, false, 476);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_link_color"] ?? null);
        echo "\" id=\"input-footer_link_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_hover_color\">";
        // line 480
        echo ($context["entry_footer_link_hover_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[footer_link_hover_color]\" value=\"";
        // line 482
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "footer_link_hover_color", [], "any", false, false, false, 482);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_link_hover_color"] ?? null);
        echo "\" id=\"input-footer_link_hover_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 489
        echo ($context["text_category_module_color"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_module_fon_color\">";
        // line 493
        echo ($context["entry_category_module_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[category_module_fon_color]\" value=\"";
        // line 495
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "category_module_fon_color", [], "any", false, false, false, 495);
        echo "\" placeholder=\"";
        echo ($context["entry_category_module_fon_color"] ?? null);
        echo "\" id=\"input-mobile_fon_top_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_module_link_color\">";
        // line 499
        echo ($context["entry_category_module_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[category_module_link_color]\" value=\"";
        // line 501
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "category_module_link_color", [], "any", false, false, false, 501);
        echo "\" placeholder=\"";
        echo ($context["entry_category_module_link_color"] ?? null);
        echo "\" id=\"input-category_module_link_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-category_module_link_hover_color\">";
        // line 506
        echo ($context["entry_category_module_link_hover_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[category_module_link_hover_color]\" value=\"";
        // line 508
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "category_module_link_hover_color", [], "any", false, false, false, 508);
        echo "\" placeholder=\"";
        echo ($context["entry_category_module_link_hover_color"] ?? null);
        echo "\" id=\"input-category_module_link_hover_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 514
        echo ($context["tab_mobile"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_fon_top_color\">";
        // line 518
        echo ($context["entry_mobile_fon_top_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[mobile_fon_top_color]\" value=\"";
        // line 520
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "mobile_fon_top_color", [], "any", false, false, false, 520);
        echo "\" placeholder=\"";
        echo ($context["entry_mobile_fon_top_color"] ?? null);
        echo "\" id=\"input-mobile_fon_top_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 527
        echo ($context["tab_modal"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-modal_fon_title_color\">";
        // line 531
        echo ($context["entry_modal_fon_title_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[modal_fon_title_color]\" value=\"";
        // line 533
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "modal_fon_title_color", [], "any", false, false, false, 533);
        echo "\" placeholder=\"";
        echo ($context["entry_modal_fon_title_color"] ?? null);
        echo "\" id=\"input-modal_fon_title_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-modal_text_title_color\">";
        // line 537
        echo ($context["entry_modal_text_title_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[modal_text_title_color]\" value=\"";
        // line 539
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "modal_text_title_color", [], "any", false, false, false, 539);
        echo "\" placeholder=\"";
        echo ($context["entry_modal_text_title_color"] ?? null);
        echo "\" id=\"input-modal_text_title_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-modal_fon_icon_color\">";
        // line 544
        echo ($context["entry_modal_fon_icon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_colors[modal_fon_icon_color]\" value=\"";
        // line 546
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_colors"] ?? null), "modal_fon_icon_color", [], "any", false, false, false, 546);
        echo "\" placeholder=\"";
        echo ($context["entry_modal_fon_icon_color"] ?? null);
        echo "\" id=\"input-modal_fon_icon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-header\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 556
        echo ($context["tab_header"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-header_account\">";
        // line 559
        echo ($context["entry_header_account"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[header_account]\" ";
        // line 562
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "header_account", [], "any", false, false, false, 562)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_account\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_account\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-header_lang\">";
        // line 574
        echo ($context["entry_header_lang"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[header_lang]\" ";
        // line 577
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "header_lang", [], "any", false, false, false, 577)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_lang\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_lang\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-header_cur\">";
        // line 591
        echo ($context["entry_header_cur"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[header_cur]\" ";
        // line 594
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "header_cur", [], "any", false, false, false, 594)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_cur\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_cur\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-footer-settings\" data-toggle=\"tab\">";
        // line 610
        echo ($context["tab_main_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-payments-settings\" data-toggle=\"tab\">";
        // line 611
        echo ($context["text_paymant_systems"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t                    \t<div class=\"tab-pane active\" id=\"tab-footer-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_totop\">";
        // line 618
        echo ($context["entry_footer_totop"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[footer_totop]\" ";
        // line 621
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "footer_totop", [], "any", false, false, false, 621)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_totop\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_totop\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_subscribe\">";
        // line 633
        echo ($context["entry_footer_subscribe"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[footer_subscribe]\" ";
        // line 636
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "footer_subscribe", [], "any", false, false, false, 636)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_subscribe\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_subscribe\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-payments-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 652
        echo ($context["text_paymant_systems"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"payments_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_privat24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/privat.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[payments][privat24]\" ";
        // line 661
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 661), "privat24", [], "any", false, false, false, 661)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_privat24\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_privat24\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_visa\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/visa.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[payments][visa]\" ";
        // line 678
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 678), "visa", [], "any", false, false, false, 678)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_visa\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_visa\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_skrill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/skrill.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[payments][skrill]\" ";
        // line 695
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 695), "skrill", [], "any", false, false, false, 695)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_skrill\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_skrill\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_interkassa\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/interkassa.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[payments][interkassa]\" ";
        // line 712
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 712), "interkassa", [], "any", false, false, false, 712)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_interkassa\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_interkassa\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_lp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/liqpay.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[payments][lp]\" ";
        // line 729
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 729), "lp", [], "any", false, false, false, 729)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_lp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_lp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_pp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/paypal.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[payments][pp]\" ";
        // line 746
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 746), "pp", [], "any", false, false, false, 746)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_pp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_pp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_mc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/mastercard.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[payments][mc]\" ";
        // line 763
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 763), "mc", [], "any", false, false, false, 763)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_mc\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_mc\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_maestro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/maestro.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[payments][maestro]\" ";
        // line 780
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 780), "maestro", [], "any", false, false, false, 780)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_maestro\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_maestro\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 791
        $context["payment_row"] = 0;
        // line 792
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 792), "customers", [], "any", false, false, false, 792));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 793
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"payments-row-";
            echo ($context["payment_row"] ?? null);
            echo "\" class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btnr\" href=\"javascript:;\" onclick=\"\$('#payments-row-";
            // line 794
            echo ($context["payment_row"] ?? null);
            echo "').remove()\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_customers_";
            // line 795
            echo ($context["payment_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"";
            // line 796
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "thumb_image", [], "any", false, false, false, 796);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 797
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "image", [], "any", false, false, false, 797);
            echo "\" name=\"theme_oct_showcase_data[payments][customers][";
            echo ($context["payment_row"] ?? null);
            echo "][image]\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[payments][customers][";
            // line 801
            echo ($context["payment_row"] ?? null);
            echo "][status]\" ";
            if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 801), "customers", [], "any", false, false, false, 801)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["payment_row"] ?? null)] ?? null) : null), "status", [], "any", false, false, false, 801)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-payments_customers_";
            echo ($context["payment_row"] ?? null);
            echo "\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_customers_";
            // line 802
            echo ($context["payment_row"] ?? null);
            echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 812
            $context["payment_row"] = (($context["payment_row"] ?? null) + 1);
            // line 813
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 814
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"add_new_block\" class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_block_in\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addPayment();\" data-toggle=\"tooltip\" title=\"";
        // line 816
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contacts\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-contacts-settings\" data-toggle=\"tab\">";
        // line 826
        echo ($context["tab_contacts"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-contacts-page\" data-toggle=\"tab\">";
        // line 827
        echo ($context["tab_contacts_page"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-locations-settings\" data-toggle=\"tab\">";
        // line 828
        echo ($context["text_locations"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-socials-settings\" data-toggle=\"tab\">";
        // line 829
        echo ($context["text_socials"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t                    \t<div class=\"tab-pane active\" id=\"tab-contacts-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 834
        echo ($context["tab_contacts"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-contact_address\">";
        // line 836
        echo ($context["entry_contact_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"address-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 839
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 840
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#address-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 840);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 840);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 840);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 840);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 840);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 842
        echo "\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t                        \t";
        // line 844
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 845
            echo "\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"address-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 845);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_address\" name=\"theme_oct_showcase_data[contact_address][";
            // line 846
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 846);
            echo "]\" rows=\"5\" class=\"form-control\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_address", [], "any", false, false, false, 846)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 846)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 849
        echo "\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-contact_telephone\">";
        // line 853
        echo ($context["entry_contact_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_telephone\" name=\"theme_oct_showcase_data[contact_telephone]\" rows=\"5\" class=\"form-control\">";
        // line 855
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_telephone", [], "any", false, false, false, 855);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-contact_open\">";
        // line 859
        echo ($context["entry_contact_open"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"open-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 862
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 863
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#open-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 863);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 863);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 863);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 863);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 863);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 865
        echo "\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t                        \t";
        // line 867
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 868
            echo "\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"open-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 868);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_address\" name=\"theme_oct_showcase_data[contact_open][";
            // line 869
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 869);
            echo "]\" rows=\"5\" class=\"form-control\">";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_open", [], "any", false, false, false, 869)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 869)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 872
        echo "\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-contact_map\">";
        // line 876
        echo ($context["entry_contact_map"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_map\" name=\"theme_oct_showcase_data[contact_map]\" rows=\"5\" class=\"form-control\">";
        // line 878
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_map", [], "any", false, false, false, 878);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-contact_image\">";
        // line 882
        echo ($context["entry_location_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_image\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 885
        echo ($context["contact_image_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["contact_placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
                  \t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_showcase_data[contact_image]\" value=\"";
        // line 887
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_image", [], "any", false, false, false, 887);
        echo "\" id=\"input-contact_image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_email\">";
        // line 892
        echo ($context["entry_contact_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"contact_email\" name=\"theme_oct_showcase_data[contact_email]\" value=\"";
        // line 894
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_email", [], "any", false, false, false, 894);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_skype\">";
        // line 898
        echo ($context["entry_contact_skype"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_skype\" name=\"theme_oct_showcase_data[contact_skype]\" value=\"";
        // line 900
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_skype", [], "any", false, false, false, 900);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_whatsapp\">";
        // line 906
        echo ($context["entry_contact_whatsapp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_whatsapp\" name=\"theme_oct_showcase_data[contact_whatsapp]\" value=\"";
        // line 908
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 908);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_viber\">";
        // line 912
        echo ($context["entry_contact_viber"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_viber\" name=\"theme_oct_showcase_data[contact_viber]\" value=\"";
        // line 914
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_viber", [], "any", false, false, false, 914);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_telegram\">";
        // line 920
        echo ($context["entry_contact_telegram"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_telegram\" name=\"theme_oct_showcase_data[contact_telegram]\" value=\"";
        // line 922
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_telegram", [], "any", false, false, false, 922);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_messenger\">";
        // line 926
        echo ($context["entry_contact_messenger"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_messenger\" name=\"theme_oct_showcase_data[contact_messenger]\" value=\"";
        // line 928
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_messenger", [], "any", false, false, false, 928);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contacts-page\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 936
        echo ($context["tab_contacts_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_address\">";
        // line 939
        echo ($context["entry_contact_view_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[contact_view_address]\" ";
        // line 942
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_view_address", [], "any", false, false, false, 942)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_address\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_address\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_phone\">";
        // line 954
        echo ($context["entry_contact_view_phone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[contact_view_phone]\" ";
        // line 957
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_view_phone", [], "any", false, false, false, 957)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_phone\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_phone\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_time\">";
        // line 971
        echo ($context["entry_contact_view_time"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[contact_view_time]\" ";
        // line 974
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_view_time", [], "any", false, false, false, 974)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_time\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_time\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_map\">";
        // line 986
        echo ($context["entry_contact_view_map"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[contact_view_map]\" ";
        // line 989
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_view_map", [], "any", false, false, false, 989)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_map\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_map\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_socials\">";
        // line 1003
        echo ($context["entry_contact_view_socials"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[contact_view_socials]\" ";
        // line 1006
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_view_socials", [], "any", false, false, false, 1006)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_socials\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_socials\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_locations\">";
        // line 1018
        echo ($context["entry_contact_view_locations"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[contact_view_locations]\" ";
        // line 1021
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "contact_view_locations", [], "any", false, false, false, 1021)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_locations\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_locations\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-locations-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1037
        echo ($context["text_locations"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"site_locations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1040
        $context["location_id"] = 1;
        // line 1041
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (($context["oct_locations"] ?? null)) {
            // line 1042
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_location"]) {
                // line 1043
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\" id=\"locations-";
                echo ($context["location_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> ";
                // line 1045
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "title", [], "any", false, false, false, 1045);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#locations-";
                // line 1046
                echo ($context["location_id"] ?? null);
                echo "').remove();return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 1052
                echo ($context["text_locations_descr"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs location-block\" id=\"locations-language-";
                // line 1053
                echo ($context["location_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1054
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1055
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#locations-language";
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1055);
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1055);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1055);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1055);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1055);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1057
                echo "\t\t\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t                        \t";
                // line 1059
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1060
                    echo "\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"locations-language";
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1060);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_title";
                    // line 1062
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1062);
                    echo "\">";
                    echo ($context["entry_location_title"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"descr_title";
                    // line 1064
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1064);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1064);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 1064)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1064)] ?? null) : null), "title", [], "any", false, false, false, 1064);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_address";
                    // line 1068
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1068);
                    echo "\">";
                    echo ($context["entry_location_address"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"descr_address";
                    // line 1070
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1070);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1070);
                    echo "][address]\" rows=\"5\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 1070)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1070)] ?? null) : null), "address", [], "any", false, false, false, 1070);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_open";
                    // line 1074
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1074);
                    echo "\">";
                    echo ($context["entry_contact_open"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"descr_open";
                    // line 1076
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1076);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1076);
                    echo "][open]\" rows=\"5\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 1076)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1076)] ?? null) : null), "open", [], "any", false, false, false, 1076);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1081
                echo "\t\t\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 1084
                echo ($context["text_locations_info"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_phone";
                // line 1086
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_contact_telephone"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"location_phone";
                // line 1088
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][phone]\" rows=\"5\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "phone", [], "any", false, false, false, 1088);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_map";
                // line 1092
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_contact_map"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"location_map";
                // line 1094
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][map]\" rows=\"5\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "map", [], "any", false, false, false, 1094);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_link";
                // line 1098
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_link"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"location_link";
                // line 1100
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "link", [], "any", false, false, false, 1100);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_image";
                // line 1104
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_image"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_location_image";
                // line 1106
                echo ($context["location_id"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 1107
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "thumb", [], "any", false, false, false, 1107);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["contact_placeholder"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t                  \t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_locations[";
                // line 1109
                echo ($context["location_id"] ?? null);
                echo "][image]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "image", [], "any", false, false, false, 1109);
                echo "\" id=\"input-contact_location_image";
                echo ($context["location_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_sort";
                // line 1113
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_sort"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"location_sort";
                // line 1115
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][sort]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "sort", [], "any", false, false, false, 1115);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1121
                $context["location_id"] = (($context["location_id"] ?? null) + 1);
                // line 1122
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1123
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1124
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"empty_locations\">";
            echo ($context["text_locations_empty"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1126
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-primary\" id=\"locations_add\" onclick=\"addNewLocation();\">";
        // line 1128
        echo ($context["text_add_location"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                    <div class=\"tab-pane\" id=\"tab-socials-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1133
        echo ($context["text_socials"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1137
        $context["social_row"] = 0;
        // line 1138
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "socials", [], "any", false, false, false, 1138));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 1139
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"social-row";
            echo ($context["social_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<button onClick=\"fontIcons('social_icone-";
            // line 1143
            echo ($context["social_row"] ?? null);
            echo "', 'social_input_icone-";
            echo ($context["social_row"] ?? null);
            echo "');\" class=\"btn btn-default social_icone\" type=\"button\"><i id=\"social_icone-";
            echo ($context["social_row"] ?? null);
            echo "\" class=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 1143);
            echo "\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_showcase_data[socials][";
            // line 1144
            echo ($context["social_row"] ?? null);
            echo "][icone]\" id=\"social_input_icone-";
            echo ($context["social_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 1144);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <input type=\"text\" name=\"theme_oct_showcase_data[socials][";
            // line 1146
            echo ($context["social_row"] ?? null);
            echo "][title]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "title", [], "any", false, false, false, 1146);
            echo "\" placeholder=\"";
            echo ($context["entry_social_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data[socials][";
            // line 1150
            echo ($context["social_row"] ?? null);
            echo "][link]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 1150);
            echo "\" placeholder=\"";
            echo ($context["entry_social_link"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$('#social-row";
            // line 1152
            echo ($context["social_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1154
            $context["social_row"] = (($context["social_row"] ?? null) + 1);
            // line 1155
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1156
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addSocial();\" data-toggle=\"tooltip\" title=\"";
        // line 1160
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-main-menu\" data-toggle=\"tab\">";
        // line 1171
        echo ($context["text_megamenu_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-header-menu\" data-toggle=\"tab\">";
        // line 1172
        echo ($context["tab_header"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-footer-menu\" data-toggle=\"tab\">";
        // line 1173
        echo ($context["tab_footer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-mobile-menu\" data-toggle=\"tab\">";
        // line 1174
        echo ($context["tab_mobile"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-main-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1179
        echo ($context["text_megamenu_settings"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-megamenu_status\">";
        // line 1182
        echo ($context["text_megamenu_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[megamenu][status]\" ";
        // line 1185
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1185), "status", [], "any", false, false, false, 1185)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-megamenu_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-megamenu_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-megamenu_status\">";
        // line 1197
        echo ($context["text_megamenu_expand"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[megamenu][expand]\" ";
        // line 1200
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1200), "expand", [], "any", false, false, false, 1200)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-megamenu_expand\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-megamenu_expand\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language-megamenu\">
\t\t\t\t\t\t\t\t                      ";
        // line 1213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1214
            echo "\t\t\t\t\t\t\t\t                      <li><a href=\"#language-megamenu";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1214);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1214);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1214);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1214);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1214);
            echo "</a></li>
\t\t\t\t\t\t\t\t                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1216
        echo "\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t                        ";
        // line 1218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1219
            echo "\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"language-megamenu";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1219);
            echo "\">
\t\t\t\t\t\t\t\t                                <div class=\"form-group\">
\t\t\t\t\t\t\t\t                                  <label class=\"col-sm-2 control-label\" for=\"input-dtitle";
            // line 1221
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1221);
            echo "\">";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t                                  <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                                    <input type=\"text\" name=\"theme_oct_showcase_data[megamenu][dtitle][";
            // line 1223
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1223);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, true, false, 1223), "dtitle", [], "any", false, true, false, 1223), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1223), [], "array", true, true, false, 1223)) ? ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1223), "dtitle", [], "any", false, false, false, 1223)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1223)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "\" id=\"input-dtitle";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1223);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                                  </div>
\t\t\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1228
        echo "\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_categories\">";
        // line 1231
        echo ($context["entry_megamenu_categories"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[megamenu][dcategories]\" ";
        // line 1234
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1234), "dcategories", [], "any", false, false, false, 1234)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_categories_limit\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 1246
        echo ($context["help_megamenu_categories_limit"] ?? null);
        echo "\">";
        echo ($context["entry_megamenu_categories_limit"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data[megamenu][limit]\" value=\"";
        // line 1248
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1248), "limit", [], "any", false, false, false, 1248);
        echo "\" placeholder=\"";
        echo ($context["entry_megamenu_categories_limit"] ?? null);
        echo "\" id=\"oct_megamenu_categories_limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 1254
        echo ($context["entry_menu_cat_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_showcase_data[megamenu][view]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1257
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1257), "view", [], "any", false, false, false, 1257) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_cat_view_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1258
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1258), "view", [], "any", false, false, false, 1258) == "2")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_cat_view_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 1263
        echo ($context["entry_menu_sort_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_showcase_data[megamenu][sort]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1266
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1266), "sort", [], "any", false, false, false, 1266) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1267
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1267), "sort", [], "any", false, false, false, 1267) == "2")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 1268
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1268), "sort", [], "any", false, false, false, 1268) == "3")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_3"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_categories_icon\">";
        // line 1275
        echo ($context["entry_megamenu_categories_icon"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[megamenu][icon]\" ";
        // line 1278
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1278), "icon", [], "any", false, false, false, 1278)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories_icon\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories_icon\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_categories_page\">";
        // line 1290
        echo ($context["entry_megamenu_categories_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[megamenu][page]\" ";
        // line 1293
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "megamenu", [], "any", false, false, false, 1293), "page", [], "any", false, false, false, 1293)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1307
        echo ($context["text_megamenu_items"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"megamenu_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1309
        $context["menu_id"] = 1000;
        // line 1310
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (($context["oct_megamenu"] ?? null)) {
            // line 1311
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_megamenu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_menu"]) {
                // line 1312
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\" id=\"megamenu-";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1312);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <span><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> ";
                // line 1314
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "title", [], "any", false, false, false, 1314);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#megamenu-";
                // line 1315
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1315);
                echo "').remove();return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs main_menu_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_general";
                // line 1321
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1321);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_general"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_language";
                // line 1322
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1322);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_language"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_links";
                // line 1323
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1323);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_links"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_general";
                // line 1326
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1326);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1328
                echo ($context["text_menu_type"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_megamenu[";
                // line 1330
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1330);
                echo "][type]\" class=\"form-control menu_type\" id=\"menu_type-";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1330);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
                // line 1331
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1331) == "")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"category\" ";
                // line 1332
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1332) == "category")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_1"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"manufacturer\" ";
                // line 1333
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1333) == "manufacturer")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_2"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"oct_blogcategory\" ";
                // line 1334
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1334) == "oct_blogcategory")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_3"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"link\" ";
                // line 1335
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1335) == "link")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_4"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_megamenu[";
                // line 1339
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1339);
                echo "][setting]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1339);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"menu_settings-";
                // line 1340
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1340);
                echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_language";
                // line 1342
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1342);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 1343
                echo ($context["tab_menu_language"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs menu_lang_block\" id=\"menu_item_language";
                // line 1344
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1344);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1345
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1346
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#menu_item_language";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1346);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1346);
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1346);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1346);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1346);
                    echo "\" />  ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1346);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1348
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1350
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1351
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"menu_item_language";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1351);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1351);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
                    // line 1353
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1353);
                    echo "\">";
                    echo ($context["entry_menu_title"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[";
                    // line 1355
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1355);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1355);
                    echo "][title]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, true, false, 1355), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1355), [], "array", true, true, false, 1355)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, false, false, 1355)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1355)] ?? null) : null), "title", [], "any", false, false, false, 1355)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_menu_title"] ?? null);
                    echo "\" id=\"input-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1355);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
                    // line 1359
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1359);
                    echo "\">";
                    echo ($context["entry_menu_link"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[";
                    // line 1361
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1361);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1361);
                    echo "][link]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, true, false, 1361), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1361), [], "array", true, true, false, 1361)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, false, false, 1361)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1361)] ?? null) : null), "link", [], "any", false, false, false, 1361)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_menu_link"] ?? null);
                    echo "\" id=\"input-link";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1361);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1366
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_links";
                // line 1368
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1368);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1370
                echo ($context["entry_menu_store"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1373
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 1374
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1376
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1376), twig_get_attribute($this->env, $this->source, $context["oct_menu"], "stories", [], "any", false, false, false, 1376))) {
                        // line 1377
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1377);
                        echo "][stories][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1377);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1378
                        echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["store"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 1380
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1380);
                        echo "][stories][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1380);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1381
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["store"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 1383
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1386
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-priority\">";
                // line 1390
                echo ($context["entry_menu_customers"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1393
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 1394
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1396
                    if (twig_in_filter(0, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "customers", [], "any", false, false, false, 1396))) {
                        // line 1397
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1397);
                        echo "][customers][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1397);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1398
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["customer_group"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 1400
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1400), twig_get_attribute($this->env, $this->source, $context["oct_menu"], "customers", [], "any", false, false, false, 1400))) {
                            // line 1401
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1401);
                            echo "][customers][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1401);
                            echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 1402
                            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["customer_group"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 1404
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1404);
                            echo "][customers][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1404);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 1405
                            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["customer_group"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["name"] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 1407
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 1408
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1411
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1418
                $context["menu_id"] = (($context["menu_id"] ?? null) + 1);
                // line 1419
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1420
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1421
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"empty_locations\">";
            echo ($context["text_menuitems_empty"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1423
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-primary\" id=\"menuitem_add\" onclick=\"addNewMenuItem();\">";
        // line 1425
        echo ($context["text_add_menuitem"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-header-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1431
        echo ($context["tab_header"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-header_information_links\"><span data-toggle=\"tooltip\" title=\"";
        // line 1433
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_information_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"header_advantages\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1440
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1441
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        // line 1445
        $context["header_advantages_row"] = 0;
        // line 1446
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "header_links", [], "any", false, false, false, 1446));
        foreach ($context['_seq'] as $context["_key"] => $context["header_link"]) {
            // line 1447
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr id=\"header_advantage-row";
            echo ($context["header_advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <input type=\"text\" name=\"header_advantage_link\" value=\"\" placeholder=\"";
            // line 1450
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"header_advantage-";
            echo ($context["header_advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1453
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1454
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1456
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1456);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1456);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1456);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Title\" name=\"theme_oct_showcase_data[header_links][";
                // line 1458
                echo ($context["header_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1458);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["header_link"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1458)] ?? null) : null), "title", [], "any", false, false, false, 1458);
                echo "\" id=\"header_advantages_row-title-";
                echo ($context["header_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1458);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1461
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1463
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1464
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1466
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1466);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1466);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1466);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Link\" name=\"theme_oct_showcase_data[header_links][";
                // line 1468
                echo ($context["header_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1468);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["header_link"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1468)] ?? null) : null), "link", [], "any", false, false, false, 1468);
                echo "\" id=\"header_advantages_row-href-";
                echo ($context["header_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1468);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1471
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <button type=\"button\" onclick=\"\$('#header_advantage-row";
            // line 1474
            echo ($context["header_advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
            // line 1477
            $context["header_advantages_row"] = (($context["header_advantages_row"] ?? null) + 1);
            // line 1478
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1479
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addHeaderAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 1483
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-footer-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1495
        echo ($context["tab_footer"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer_information_links\"><span data-toggle=\"tooltip\" title=\"";
        // line 1497
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_information_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"footer_advantages\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1504
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1505
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        // line 1509
        $context["footer_advantages_row"] = 0;
        // line 1510
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "footer_links", [], "any", false, false, false, 1510));
        foreach ($context['_seq'] as $context["_key"] => $context["footer_link"]) {
            // line 1511
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr id=\"footer_advantage-row";
            echo ($context["footer_advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <input type=\"text\" name=\"footer_advantage_link\" value=\"\" placeholder=\"";
            // line 1514
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"footer_advantage-";
            echo ($context["footer_advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1517
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1518
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1520
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1520);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1520);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1520);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Title\" name=\"theme_oct_showcase_data[footer_links][";
                // line 1522
                echo ($context["footer_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1522);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["footer_link"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1522)] ?? null) : null), "title", [], "any", false, false, false, 1522);
                echo "\" id=\"footer_advantages_row-title-";
                echo ($context["footer_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1522);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1525
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1527
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1528
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1530
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1530);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1530);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1530);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Link\" name=\"theme_oct_showcase_data[footer_links][";
                // line 1532
                echo ($context["footer_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1532);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["footer_link"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1532)] ?? null) : null), "link", [], "any", false, false, false, 1532);
                echo "\" id=\"footer_advantages_row-href-";
                echo ($context["footer_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1532);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1535
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <button type=\"button\" onclick=\"\$('#footer_advantage-row";
            // line 1538
            echo ($context["footer_advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
            // line 1541
            $context["footer_advantages_row"] = (($context["footer_advantages_row"] ?? null) + 1);
            // line 1542
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1543
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addFooterAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 1547
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_contact\">";
        // line 1557
        echo ($context["entry_footer_link_contact"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[footer_link_contact]\" ";
        // line 1560
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "footer_link_contact", [], "any", false, false, false, 1560)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_contact\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_contact\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_return\">";
        // line 1572
        echo ($context["entry_footer_link_return"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[footer_link_return]\" ";
        // line 1575
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "footer_link_return", [], "any", false, false, false, 1575)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_return\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_return\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_sitemap\">";
        // line 1589
        echo ($context["entry_footer_link_sitemap"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[footer_link_sitemap]\" ";
        // line 1592
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "footer_link_sitemap", [], "any", false, false, false, 1592)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_sitemap\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_sitemap\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_man\">";
        // line 1604
        echo ($context["entry_footer_link_man"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[footer_link_man]\" ";
        // line 1607
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "footer_link_man", [], "any", false, false, false, 1607)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_man\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_man\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_cert\">";
        // line 1621
        echo ($context["entry_footer_link_cert"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[footer_link_cert]\" ";
        // line 1624
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "footer_link_cert", [], "any", false, false, false, 1624)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_cert\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_cert\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_specials\">";
        // line 1636
        echo ($context["entry_footer_link_specials"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[footer_link_specials]\" ";
        // line 1639
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "footer_link_specials", [], "any", false, false, false, 1639)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_specials\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_specials\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 1652
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_category_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 1654
        echo ($context["entry_footer_category_links"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1656
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 1657
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 1657);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1657);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_showcase_data[footer_category_links][]\" value=\"";
            // line 1658
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1658);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1661
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-mobile-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1668
        echo ($context["tab_mobile"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_mobile\">
\t\t\t\t\t\t\t\t                      ";
        // line 1670
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1671
            echo "\t\t\t\t\t\t\t\t                      <li><a href=\"#language_mobile";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1671);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1671);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1671);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1671);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1671);
            echo "</a></li>
\t\t\t\t\t\t\t\t                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1673
        echo "\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t                        ";
        // line 1675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1676
            echo "\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"language_mobile";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1676);
            echo "\">
\t\t\t\t\t\t\t\t                                <div class=\"form-group\">
\t\t\t\t\t\t\t\t                                  <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 1678
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1678);
            echo "\">";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t                                  <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                                    <input type=\"text\" name=\"theme_oct_showcase_data[mobile_menu][title][";
            // line 1680
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1680);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, true, false, 1680), "title", [], "any", false, true, false, 1680), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1680), [], "array", true, true, false, 1680)) ? ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1680), "title", [], "any", false, false, false, 1680)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1680)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1680);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                                  </div>
\t\t\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1685
        echo "\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_mobile_st_categories\">";
        // line 1688
        echo ($context["entry_megamenu_mobile_st_categories"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][st_cats]\" ";
        // line 1691
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1691), "st_cats", [], "any", false, false, false, 1691)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_mobile_st_categories\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_mobile_st_categories\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_mobile_categories\">";
        // line 1703
        echo ($context["entry_megamenu_mobile_categories"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][t_cats]\" ";
        // line 1706
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1706), "t_cats", [], "any", false, false, false, 1706)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_mobile_categories\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_mobile_categories\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_phones\">";
        // line 1720
        echo ($context["entry_mobile_menu_phones"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][phones]\" ";
        // line 1723
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1723), "phones", [], "any", false, false, false, 1723)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_phones\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_phones\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_links\">";
        // line 1735
        echo ($context["entry_megamenu_links"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][links]\" ";
        // line 1738
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1738), "links", [], "any", false, false, false, 1738)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_links\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_links\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_brands\">";
        // line 1752
        echo ($context["entry_megamenu_brands"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][brands]\" ";
        // line 1755
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1755), "brands", [], "any", false, false, false, 1755)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_brands\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_brands\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_blog\">";
        // line 1767
        echo ($context["entry_megamenu_blog"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][blog]\" ";
        // line 1770
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1770), "blog", [], "any", false, false, false, 1770)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_blog\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_blog\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_time\">";
        // line 1784
        echo ($context["entry_mobile_menu_time"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][time]\" ";
        // line 1787
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1787), "time", [], "any", false, false, false, 1787)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_time\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_time\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_currency\">";
        // line 1799
        echo ($context["entry_mobile_menu_currency"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][currency]\" ";
        // line 1802
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1802), "currency", [], "any", false, false, false, 1802)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_currency\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_currency\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_address\">";
        // line 1816
        echo ($context["entry_mobile_menu_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][address]\" ";
        // line 1819
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1819), "address", [], "any", false, false, false, 1819)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_address\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_address\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_languages\">";
        // line 1831
        echo ($context["entry_mobile_menu_languages"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][languages]\" ";
        // line 1834
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1834), "languages", [], "any", false, false, false, 1834)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_languages\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_languages\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_email\">";
        // line 1848
        echo ($context["entry_mobile_menu_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][email]\" ";
        // line 1851
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1851), "email", [], "any", false, false, false, 1851)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_email\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_email\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_telegram\">";
        // line 1863
        echo ($context["entry_mobile_menu_telegram"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][telegram]\" ";
        // line 1866
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1866), "telegram", [], "any", false, false, false, 1866)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_telegram\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_telegram\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_viber\">";
        // line 1880
        echo ($context["entry_mobile_menu_viber"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][viber]\" ";
        // line 1883
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1883), "viber", [], "any", false, false, false, 1883)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_viber\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_viber\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_skype\">";
        // line 1895
        echo ($context["entry_mobile_menu_skype"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][skype]\" ";
        // line 1898
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1898), "skype", [], "any", false, false, false, 1898)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_skype\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_skype\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_whatsapp\">";
        // line 1912
        echo ($context["entry_mobile_menu_whatsapp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][whatsapp]\" ";
        // line 1915
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1915), "whatsapp", [], "any", false, false, false, 1915)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_whatsapp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_whatsapp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_messenger\">";
        // line 1927
        echo ($context["entry_mobile_menu_messenger"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[mobile_menu][messenger]\" ";
        // line 1930
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1930), "messenger", [], "any", false, false, false, 1930)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_messenger\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_messenger\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-mobile_information_links\"><span data-toggle=\"tooltip\" title=\"";
        // line 1943
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_information_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"mobile_advantages\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1950
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1951
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        // line 1955
        $context["mobile_advantages_row"] = 0;
        // line 1956
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "mobile_links", [], "any", false, false, false, 1956));
        foreach ($context['_seq'] as $context["_key"] => $context["mobile_link"]) {
            // line 1957
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr id=\"mobile_advantage-row";
            echo ($context["mobile_advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <input type=\"text\" name=\"mobile_advantage_link\" value=\"\" placeholder=\"";
            // line 1960
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"mobile_advantage-";
            echo ($context["mobile_advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1963
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1964
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1966
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1966);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1966);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1966);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Title\" name=\"theme_oct_showcase_data[mobile_links][";
                // line 1968
                echo ($context["mobile_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1968);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["mobile_link"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1968)] ?? null) : null), "title", [], "any", false, false, false, 1968);
                echo "\" id=\"mobile_advantages_row-title-";
                echo ($context["mobile_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1968);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1971
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1973
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1974
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1976
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1976);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1976);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1976);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Link\" name=\"theme_oct_showcase_data[mobile_links][";
                // line 1978
                echo ($context["mobile_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1978);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["mobile_link"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1978)] ?? null) : null), "link", [], "any", false, false, false, 1978);
                echo "\" id=\"mobile_advantages_row-href-";
                echo ($context["mobile_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1978);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1981
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <button type=\"button\" onclick=\"\$('#mobile_advantage-row";
            // line 1984
            echo ($context["mobile_advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
            // line 1987
            $context["mobile_advantages_row"] = (($context["mobile_advantages_row"] ?? null) + 1);
            // line 1988
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mobile_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1989
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addMobileAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 1993
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-category\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2007
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t    <label class=\"col-sm-4 control-label\" for=\"input-no_quantity_last\">";
        // line 2010
        echo ($context["entry_no_quantity_last"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t        <div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t            <input type=\"checkbox\" name=\"theme_oct_showcase_no_quantity_last\" ";
        // line 2013
        if (($context["theme_oct_showcase_no_quantity_last"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-no_quantity_last\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t            <label for=\"input-no_quantity_last\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t            <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t                <div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_model\">";
        // line 2025
        echo ($context["entry_product_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data_model\" ";
        // line 2028
        if (($context["theme_oct_showcase_data_model"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-atributes_category\">";
        // line 2042
        echo ($context["text_atributes"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data_atributes\" ";
        // line 2045
        if (($context["theme_oct_showcase_data_atributes"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-atributes_category\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-atributes_category\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-atributes_category_limit\">";
        // line 2057
        echo ($context["text_atributes_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-atributes_category_limit\" name=\"theme_oct_showcase_data_cat_atr_limit\" value=\"";
        // line 2059
        echo ($context["theme_oct_showcase_data_cat_atr_limit"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["text_atributes_limit"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_view_sort_oder\">";
        // line 2065
        echo ($context["entry_category_view_sort_oder"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[category_view_sort_oder]\" ";
        // line 2068
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_view_sort_oder", [], "any", false, false, false, 2068)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_sort_oder\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_sort_oder\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_view_quantity\">";
        // line 2080
        echo ($context["entry_category_view_quantity"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[category_view_quantity]\" ";
        // line 2083
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_view_quantity", [], "any", false, false, false, 2083)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_quantity\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_quantity\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_show_more\">";
        // line 2097
        echo ($context["entry_category_show_more"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[category_show_more]\" ";
        // line 2100
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_show_more", [], "any", false, false, false, 2100)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_show_more\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_show_more\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"select-category_show_type\">";
        // line 2112
        echo ($context["entry_category_show_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"select-category_show_type\" name=\"theme_oct_showcase_data[category_show_type]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
        // line 2115
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_show_type", [], "any", false, false, false, 2115) == "")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_deff"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"width-100\" ";
        // line 2116
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_show_type", [], "any", false, false, false, 2116) == "width-100")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_100"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"width-50\" ";
        // line 2117
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_show_type", [], "any", false, false, false, 2117) == "width-50")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_50"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-category_view_sort_oder\">";
        // line 2123
        echo ($context["entry_category_sorts"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 2129
        echo ($context["col_status_sort_order"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 2130
        echo ($context["col_status_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 2131
        echo ($context["col_status_deff"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.sort_order-ASC\" ";
        // line 2137
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2137) && twig_in_filter("p.sort_order-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2137)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_sort_order-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2140
        echo ($context["text_p_sort_order_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.sort_order-ASC\" ";
        // line 2143
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2143) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2143) == "p.sort_order-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.sort_order-DESC\" ";
        // line 2148
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2148) && twig_in_filter("p.sort_order-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2148)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_sort_order-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2151
        echo ($context["text_p_sort_order_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.sort_order-DESC\" ";
        // line 2154
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2154) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2154) == "p.sort_order-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"pd.name-ASC\" ";
        // line 2159
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2159) && twig_in_filter("pd.name-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2159)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-pd_name-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2162
        echo ($context["text_pd_name_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"pd.name-ASC\" ";
        // line 2165
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2165) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2165) == "pd.name-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"pd.name-DESC\" ";
        // line 2170
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2170) && twig_in_filter("pd.name-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2170)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-pd_name-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2173
        echo ($context["text_pd_name_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"pd.name-DESC\" ";
        // line 2176
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2176) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2176) == "pd.name-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.price-ASC\" ";
        // line 2181
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2181) && twig_in_filter("p.price-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2181)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_price-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2184
        echo ($context["text_p_price_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.price-ASC\" ";
        // line 2187
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2187) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2187) == "p.price-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.price-DESC\" ";
        // line 2192
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2192) && twig_in_filter("p.price-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2192)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_price-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2195
        echo ($context["text_p_price_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.price-DESC\" ";
        // line 2198
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2198) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2198) == "p.price-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.model-ASC\" ";
        // line 2203
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2203) && twig_in_filter("p.model-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2203)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_model-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2206
        echo ($context["text_p_model_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.model-ASC\" ";
        // line 2209
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2209) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2209) == "p.model-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.model-DESC\" ";
        // line 2214
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2214) && twig_in_filter("p.model-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2214)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_model-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2217
        echo ($context["text_p_model_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.model-DESC\" ";
        // line 2220
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2220) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2220) == "p.model-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.quantity-ASC\" ";
        // line 2225
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2225) && twig_in_filter("p.quantity-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2225)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_quantity-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2228
        echo ($context["text_p_quantity_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.quantity-ASC\" ";
        // line 2231
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2231) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2231) == "p.quantity-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.quantity-DESC\" ";
        // line 2236
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2236) && twig_in_filter("p.quantity-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2236)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_quantity-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2239
        echo ($context["text_p_quantity_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.quantity-DESC\" ";
        // line 2242
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2242) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2242) == "p.quantity-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.viewed-ASC\" ";
        // line 2247
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2247) && twig_in_filter("p.viewed-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2247)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_viewed-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2250
        echo ($context["text_p_viewed_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.viewed-ASC\" ";
        // line 2253
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2253) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2253) == "p.viewed-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.viewed-DESC\" ";
        // line 2258
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2258) && twig_in_filter("p.viewed-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2258)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_viewed-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2261
        echo ($context["text_p_viewed_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.viewed-DESC\" ";
        // line 2264
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2264) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2264) == "p.viewed-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.date_added-ASC\" ";
        // line 2269
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2269) && twig_in_filter("p.date_added-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2269)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_date_added-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2272
        echo ($context["text_p_date_added_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.date_added-ASC\" ";
        // line 2275
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2275) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2275) == "p.date_added-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"p.date_added-DESC\" ";
        // line 2280
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2280) && twig_in_filter("p.date_added-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2280)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_date_added-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2283
        echo ($context["text_p_date_added_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"p.date_added-DESC\" ";
        // line 2286
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2286) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2286) == "p.date_added-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"rating-ASC\" ";
        // line 2291
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2291) && twig_in_filter("rating-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2291)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-rating-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2294
        echo ($context["text_rating_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"rating-ASC\" ";
        // line 2297
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2297) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2297) == "rating-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_sort_data[sort][]\" value=\"rating-DESC\" ";
        // line 2302
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", true, true, false, 2302) && twig_in_filter("rating-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "sort", [], "any", false, false, false, 2302)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-rating-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2305
        echo ($context["text_rating_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_showcase_sort_data[deff_sort]\" value=\"rating-DESC\" ";
        // line 2308
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2308) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2308) == "rating-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"\$(this).prev().find(':checkbox').attr('checked', true);\">";
        // line 2313
        echo ($context["text_all_select"] ?? null);
        echo "</a> / <a href=\"javascript:;\" onclick=\"\$(this).prev().prev().find(':checkbox').attr('checked', false);\">";
        echo ($context["text_remove_select"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t    <legend>";
        // line 2319
        echo ($context["text_product_limits"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t    <div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 2322
        echo ($context["help_product_limit"] ?? null);
        echo "\">";
        echo ($context["entry_product_limit"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t            <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t                <input type=\"text\" name=\"theme_oct_showcase_product_limit\" value=\"";
        // line 2324
        echo ($context["theme_oct_showcase_product_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_limit"] ?? null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t                ";
        // line 2325
        if (($context["error_product_limit"] ?? null)) {
            // line 2326
            echo "\t\t\t\t\t\t\t\t\t\t                <div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t                    <script>
\t\t\t\t\t\t\t\t\t\t                        usNotify('warning', '";
            // line 2328
            echo ($context["error_product_limit"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t                    </script>
\t\t\t\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t                ";
        }
        // line 2332
        echo "\t\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t        <div class=\"col-sm-6\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t            <label class=\"col-sm-4 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 2335
        echo ($context["help_product_description_length"] ?? null);
        echo "\">";
        echo ($context["entry_product_description_length"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t            <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t                <input type=\"text\" name=\"theme_oct_showcase_product_description_length\" value=\"";
        // line 2337
        echo ($context["theme_oct_showcase_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-description-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t                ";
        // line 2338
        if (($context["error_product_description_length"] ?? null)) {
            // line 2339
            echo "\t\t\t\t\t\t\t\t\t\t                <div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t                    <script>
\t\t\t\t\t\t\t\t\t\t                        usNotify('warning', '";
            // line 2341
            echo ($context["error_product_description_length"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t                    </script>
\t\t\t\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t                ";
        }
        // line 2345
        echo "\t\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2350
        echo ($context["text_categoty_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_desc_in_page\">";
        // line 2353
        echo ($context["entry_category_desc_in_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[category_desc_in_page]\" ";
        // line 2356
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_desc_in_page", [], "any", false, false, false, 2356)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_desc_in_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_desc_in_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"select-category_desc_position\">";
        // line 2368
        echo ($context["entry_category_desc_position"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"select-category_desc_position\" name=\"theme_oct_showcase_data[category_desc_position]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"top\" ";
        // line 2371
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_desc_position", [], "any", false, false, false, 2371) == "top")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_desc_position_top"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bottom\" ";
        // line 2372
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_desc_position", [], "any", false, false, false, 2372) == "bottom")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_desc_position_bottom"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_desc_up\">";
        // line 2379
        echo ($context["entry_category_desc_up"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[category_desc_up]\" ";
        // line 2382
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_desc_up", [], "any", false, false, false, 2382)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_desc_up\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_desc_up\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_view_subcats\">";
        // line 2396
        echo ($context["entry_category_view_subcats"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[category_view_subcats]\" ";
        // line 2399
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_view_subcats", [], "any", false, false, false, 2399)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_subcats\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_subcats\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_subcat_products\">";
        // line 2411
        echo ($context["entry_category_subcat_products"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[category_subcat_products]\" ";
        // line 2414
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_subcat_products", [], "any", false, false, false, 2414)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_subcat_products\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_subcat_products\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_cat_image\">";
        // line 2428
        echo ($context["entry_category_cat_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[category_cat_image]\" ";
        // line 2431
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_cat_image", [], "any", false, false, false, 2431)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_cat_image\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_cat_image\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_cat_image\">";
        // line 2443
        echo ($context["entry_category_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[category_page]\" ";
        // line 2446
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "category_page", [], "any", false, false, false, 2446)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2460
        echo ($context["text_manufacture_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-man_logo\">";
        // line 2462
        echo ($context["entry_man_logo"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[man_logo]\" ";
        // line 2465
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "man_logo", [], "any", false, false, false, 2465)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-man_logo\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-man_logo\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2480
        echo ($context["tab_product"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_model\">";
        // line 2483
        echo ($context["entry_product_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[product_model]\" ";
        // line 2486
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_model", [], "any", false, false, false, 2486)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2497
        if (($context["hasblog"] ?? null)) {
            // line 2498
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_blog_related\">";
            // line 2499
            echo ($context["entry_product_blog_related"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[product_blog_related]\" ";
            // line 2502
            if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_blog_related", [], "any", false, false, false, 2502)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-product_blog_related\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_blog_related\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2514
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_atributes\">";
        // line 2517
        echo ($context["entry_product_atributes"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[product_atributes]\" ";
        // line 2520
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_atributes", [], "any", false, false, false, 2520)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_atributes\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_atributes\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-atributes_product_limit\">";
        // line 2532
        echo ($context["text_atributes_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-atributes_product_limit\" name=\"theme_oct_showcase_data_pr_atr_limit\" value=\"";
        // line 2534
        echo ($context["theme_oct_showcase_data_pr_atr_limit"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["text_atributes_limit"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_zoom\">";
        // line 2540
        echo ($context["entry_product_zoom"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[product_zoom]\" ";
        // line 2543
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_zoom", [], "any", false, false, false, 2543)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_zoom\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_zoom\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_faq\">";
        // line 2555
        echo ($context["entry_product_faq"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[product_faq]\" ";
        // line 2558
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_faq", [], "any", false, false, false, 2558)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_faq\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_faq\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_dop_tab\">";
        // line 2572
        echo ($context["entry_product_dop_tab"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[product_dop_tab]\" ";
        // line 2575
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_dop_tab", [], "any", false, false, false, 2575)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_dop_tab\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_dop_tab\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_timer\">";
        // line 2587
        echo ($context["entry_product_timer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[product_timer]\" ";
        // line 2590
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_timer", [], "any", false, false, false, 2590)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_timer\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_timer\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"product_dop_tabs_text\" class=\"form-group\"";
        // line 2602
        if (( !twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_dop_tab", [], "any", true, true, false, 2602) || (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_dop_tab", [], "any", true, true, false, 2602) &&  !twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_dop_tab", [], "any", false, false, false, 2602)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product_dop_tab_ttt\">";
        // line 2603
        echo ($context["entry_product_dop_tab_ttt"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"product_dop_tab-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2606
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2607
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#product_dop_tab-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2607);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2607);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2607);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2607);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2607);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2609
        echo "\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t                        \t";
        // line 2611
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2612
            echo "\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"product_dop_tab-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2612);
            echo "\">
\t\t\t\t\t\t\t                            \t<div class=\"form-group\">
\t\t\t\t\t\t\t                            \t\t<input type=\"text\" name=\"theme_oct_showcase_data[product_dop_tab_title][";
            // line 2614
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2614);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_dop_tab_title", [], "any", false, true, false, 2614), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2614), [], "array", true, true, false, 2614)) ? ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_dop_tab_title", [], "any", false, false, false, 2614)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2614)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_product_dop_tab_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t                            \t</div>
\t\t\t\t\t\t\t                            \t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"product_dop_tab";
            // line 2617
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2617);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_showcase_data[product_dop_tab_text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2617);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_dop_tab_text", [], "any", false, true, false, 2617), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2617), [], "array", true, true, false, 2617)) ? ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_dop_tab_text", [], "any", false, false, false, 2617)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2617)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t                            \t</div>
\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2621
        echo "\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product_js_button\">";
        // line 2625
        echo ($context["entry_product_js_button"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" name=\"theme_oct_showcase_data[product_js_button]\" placeholder=\"";
        // line 2627
        echo ($context["entry_product_js_button"] ?? null);
        echo "\" id=\"input-product_js_button\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_js_button", [], "any", false, false, false, 2627);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2630
        echo ($context["entry_product_garantii"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product_advantage\">";
        // line 2632
        echo ($context["entry_product_advantages"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[product_advantage]\" ";
        // line 2635
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_advantage", [], "any", false, false, false, 2635)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_advantage\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_advantage\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"product_advantages\" class=\"form-group\"";
        // line 2646
        if (( !twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_advantage", [], "any", true, true, false, 2646) || (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_advantage", [], "any", true, true, false, 2646) &&  !twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_advantage", [], "any", false, false, false, 2646)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\" style=\"padding-bottom: 16px;\"><b>";
        // line 2647
        echo ($context["advantage_help_text"] ?? null);
        echo "</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2653
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2654
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2660
        $context["advantages_row"] = 0;
        // line 2661
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_advantages", [], "any", false, false, false, 2661));
        foreach ($context['_seq'] as $context["_key"] => $context["advantage"]) {
            // line 2662
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"advantage-row";
            echo ($context["advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"advantages_icone-";
            // line 2666
            echo ($context["advantages_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"/image/";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 2666);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"Select Icon\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_showcase_data[product_advantages][";
            // line 2667
            echo ($context["advantages_row"] ?? null);
            echo "][icone]\" id=\"advantages_input_icone-";
            echo ($context["advantages_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 2667);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_showcase_data[product_advantages][";
            // line 2668
            echo ($context["advantages_row"] ?? null);
            echo "][information_id]\" id=\"advantages_id-";
            echo ($context["advantages_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 2668);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"advantage_link\" value=\"\" placeholder=\"";
            // line 2674
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"advantage_link-";
            echo ($context["advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2677
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2678
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2680
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2680);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2680);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2680);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data[product_advantages][";
                // line 2682
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2682);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["advantage"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2682)] ?? null) : null), "title", [], "any", false, false, false, 2682);
                echo "\" id=\"advantage-title-";
                echo ($context["advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2682);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2685
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2687
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2688
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2690
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2690);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2690);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2690);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data[product_advantages][";
                // line 2692
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2692);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["advantage"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2692)] ?? null) : null), "link", [], "any", false, false, false, 2692);
                echo "\" id=\"advantage-href-";
                echo ($context["advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2692);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2695
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2698
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2699
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2701
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2701);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2701);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2701);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_oct_showcase_data[product_advantages][";
                // line 2703
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2703);
                echo "][text]\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["advantage"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2703)] ?? null) : null), "text", [], "any", false, false, false, 2703);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2706
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\" for=\"input-product_advantage_popup-";
            // line 2708
            echo ($context["advantages_row"] ?? null);
            echo "\">";
            echo ($context["entry_product_advantage_popup"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[product_advantages][";
            // line 2711
            echo ($context["advantages_row"] ?? null);
            echo "][popup]\" ";
            if (twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data"] ?? null), "product_advantages", [], "any", false, false, false, 2711)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[($context["advantages_row"] ?? null)] ?? null) : null), "popup", [], "any", false, false, false, 2711)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-product_advantage_popup-";
            echo ($context["advantages_row"] ?? null);
            echo "\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_advantage_popup-";
            // line 2712
            echo ($context["advantages_row"] ?? null);
            echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#advantage-row";
            // line 2723
            echo ($context["advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2726
            $context["advantages_row"] = (($context["advantages_row"] ?? null) + 1);
            // line 2727
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advantage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2728
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 2732
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-orders\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2742
        echo ($context["tab_order"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"theme_oct_showcase_data_osucsess_status\">";
        // line 2744
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data_osucsess[status]\" ";
        // line 2747
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_osucsess"] ?? null), "status", [], "any", false, false, false, 2747)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"theme_oct_showcase_data_osucsess_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"theme_oct_showcase_data_osucsess_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2760
        echo ($context["text_order_register_account"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" style=\"padding-top:80px;text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2762
        echo ($context["entry_order_register_dop"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"padding-top:0;padding-bottom:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"order_register_account-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2767
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2768
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#order_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2768);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2768);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2768);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2768);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2768);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2770
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2773
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2774
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"order_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2774);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 2777
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_osucsess[reg][title][";
            // line 2778
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2778);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_osucsess"] ?? null), "reg", [], "any", false, true, false, 2778), "title", [], "any", false, true, false, 2778), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2778), [], "array", true, true, false, 2778)) ? ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_osucsess"] ?? null), "reg", [], "any", false, false, false, 2778), "title", [], "any", false, false, false, 2778)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2778)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"order_register_account";
            // line 2782
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2782);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_showcase_data_osucsess[reg][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2782);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_osucsess"] ?? null), "reg", [], "any", false, true, false, 2782), "text", [], "any", false, true, false, 2782), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2782), [], "array", true, true, false, 2782)) ? ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_osucsess"] ?? null), "reg", [], "any", false, false, false, 2782), "text", [], "any", false, false, false, 2782)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2782)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2786
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2790
        echo ($context["text_order_no_register_account"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" style=\"padding-top:80px;text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2792
        echo ($context["entry_order_no_register_dop"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"padding-top:0;padding-bottom:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"order_no_register_account-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2797
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2798
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#order_no_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2798);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2798);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2798);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2798);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2798);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2800
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2803
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2804
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"order_no_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2804);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 2807
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data_osucsess[noreg][title][";
            // line 2808
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2808);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_osucsess"] ?? null), "noreg", [], "any", false, true, false, 2808), "title", [], "any", false, true, false, 2808), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2808), [], "array", true, true, false, 2808)) ? ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_osucsess"] ?? null), "noreg", [], "any", false, false, false, 2808), "title", [], "any", false, false, false, 2808)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2808)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"order_no_register_account";
            // line 2812
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2812);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_showcase_data_osucsess[noreg][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2812);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_osucsess"] ?? null), "noreg", [], "any", false, true, false, 2812), "text", [], "any", false, true, false, 2812), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2812), [], "array", true, true, false, 2812)) ? ((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_data_osucsess"] ?? null), "noreg", [], "any", false, false, false, 2812), "text", [], "any", false, false, false, 2812)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2812)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2816
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-css_js\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2822
        echo ($context["tab_css_js"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-css_code\">";
        // line 2824
        echo ($context["entry_css_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"css_code\" name=\"theme_oct_showcase_css_code\" rows=\"15\" class=\"form-control\">";
        // line 2826
        echo ($context["theme_oct_showcase_css_code"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-js_code\">";
        // line 2830
        echo ($context["entry_js_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"js_code\" name=\"theme_oct_showcase_js_code\" rows=\"15\" class=\"form-control\">";
        // line 2832
        echo ($context["theme_oct_showcase_js_code"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-image\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 2842
        echo ($context["text_image"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-logo-width\">";
        // line 2844
        echo ($context["entry_image_logo"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_logo_width\" value=\"";
        // line 2849
        echo ($context["theme_oct_showcase_image_logo_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-logo-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_logo_height\" value=\"";
        // line 2855
        echo ($context["theme_oct_showcase_image_logo_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2860
        if (($context["error_image_category"] ?? null)) {
            // line 2861
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2863
            echo ($context["error_image_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2867
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 2870
        echo ($context["entry_image_sub_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_sub_category_width\" value=\"";
        // line 2875
        echo ($context["theme_oct_showcase_image_sub_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_sub_category_height\" value=\"";
        // line 2881
        echo ($context["theme_oct_showcase_image_sub_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2886
        if (($context["error_image_category"] ?? null)) {
            // line 2887
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2889
            echo ($context["error_image_sub_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2893
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 2896
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_category_width\" value=\"";
        // line 2901
        echo ($context["theme_oct_showcase_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_category_height\" value=\"";
        // line 2907
        echo ($context["theme_oct_showcase_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2912
        if (($context["error_image_category"] ?? null)) {
            // line 2913
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2915
            echo ($context["error_image_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2919
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 2922
        echo ($context["entry_image_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_manufacturer_width\" value=\"";
        // line 2927
        echo ($context["theme_oct_showcase_image_manufacturer_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_manufacturer_height\" value=\"";
        // line 2933
        echo ($context["theme_oct_showcase_image_manufacturer_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2938
        if (($context["error_image_category"] ?? null)) {
            // line 2939
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2941
            echo ($context["error_image_manufacturer"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2945
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 2948
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_thumb_width\" value=\"";
        // line 2953
        echo ($context["theme_oct_showcase_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_showcase_image_popup_width\" value=\"";
        // line 2954
        echo ($context["theme_oct_showcase_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_thumb_height\" value=\"";
        // line 2960
        echo ($context["theme_oct_showcase_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_showcase_image_popup_height\" value=\"";
        // line 2961
        echo ($context["theme_oct_showcase_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2966
        if (($context["error_image_thumb"] ?? null)) {
            // line 2967
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2969
            echo ($context["error_image_thumb"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2973
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 2976
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_popup_width\" value=\"";
        // line 2981
        echo ($context["theme_oct_showcase_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_popup_height\" value=\"";
        // line 2987
        echo ($context["theme_oct_showcase_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2992
        if (($context["error_image_popup"] ?? null)) {
            // line 2993
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2995
            echo ($context["error_image_thumb"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2999
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 3002
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_product_width\" value=\"";
        // line 3007
        echo ($context["theme_oct_showcase_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_product_height\" value=\"";
        // line 3013
        echo ($context["theme_oct_showcase_image_product_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3018
        if (($context["error_image_product"] ?? null)) {
            // line 3019
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3021
            echo ($context["error_image_product"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3025
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 3028
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_additional_width\" value=\"";
        // line 3033
        echo ($context["theme_oct_showcase_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_additional_height\" value=\"";
        // line 3039
        echo ($context["theme_oct_showcase_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3044
        if (($context["error_image_additional"] ?? null)) {
            // line 3045
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3047
            echo ($context["error_image_additional"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3051
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 3054
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_related_width\" value=\"";
        // line 3059
        echo ($context["theme_oct_showcase_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_related_height\" value=\"";
        // line 3065
        echo ($context["theme_oct_showcase_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3070
        if (($context["error_image_related"] ?? null)) {
            // line 3071
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3073
            echo ($context["error_image_related"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3077
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 3080
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_compare_width\" value=\"";
        // line 3085
        echo ($context["theme_oct_showcase_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_compare_height\" value=\"";
        // line 3091
        echo ($context["theme_oct_showcase_image_compare_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3096
        if (($context["error_image_compare"] ?? null)) {
            // line 3097
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3099
            echo ($context["error_image_compare"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3103
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 3106
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_wishlist_width\" value=\"";
        // line 3111
        echo ($context["theme_oct_showcase_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_wishlist_height\" value=\"";
        // line 3117
        echo ($context["theme_oct_showcase_image_wishlist_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3122
        if (($context["error_image_wishlist"] ?? null)) {
            // line 3123
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3125
            echo ($context["error_image_wishlist"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3129
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 3132
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_cart_width\" value=\"";
        // line 3137
        echo ($context["theme_oct_showcase_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_cart_height\" value=\"";
        // line 3143
        echo ($context["theme_oct_showcase_image_cart_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3148
        if (($context["error_image_cart"] ?? null)) {
            // line 3149
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3151
            echo ($context["error_image_cart"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3155
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 3158
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_location_width\" value=\"";
        // line 3163
        echo ($context["theme_oct_showcase_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_image_location_height\" value=\"";
        // line 3169
        echo ($context["theme_oct_showcase_image_location_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3174
        if (($context["error_image_location"] ?? null)) {
            // line 3175
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3177
            echo ($context["error_image_location"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3181
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-widgets\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"widgets\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-popup_cart\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-up fw\"></i> ";
        // line 3188
        echo ($context["text_popup_cart"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-live_search\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-search fw\"></i> ";
        // line 3189
        echo ($context["text_live_search"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-feedback\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-phone-square fw\"></i> ";
        // line 3190
        echo ($context["text_feedback"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-alert\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-bell fw\"></i> ";
        // line 3191
        echo ($context["text_alert"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-popup_cart\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3198
        echo ($context["text_popup_cart"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-popupcart-status\">";
        // line 3200
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_popup_cart_status\" ";
        // line 3203
        if (($context["theme_oct_showcase_popup_cart_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-popupcart-is\">";
        // line 3215
        echo ($context["entry_popup_is"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_isPopup\" ";
        // line 3218
        if (($context["theme_oct_showcase_isPopup"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-is\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-is\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-alert\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3233
        echo ($context["text_alert"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-alert_status\">";
        // line 3235
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_alert_status\" ";
        // line 3238
        if (($context["theme_oct_showcase_alert_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-alert_products\">";
        // line 3251
        echo ($context["entry_show_alert_products"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_alert_data[products]\" ";
        // line 3254
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_alert_data"] ?? null), "products", [], "any", false, false, false, 3254)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_products\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_products\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-alert_orders\">";
        // line 3266
        echo ($context["entry_show_alert_orders"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_alert_data[orders]\" ";
        // line 3269
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_alert_data"] ?? null), "orders", [], "any", false, false, false, 3269)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_orders\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_orders\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-alert_oct_modules\">";
        // line 3283
        echo ($context["entry_show_alert_octemplates"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_alert_data[oct_modules]\" ";
        // line 3286
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_alert_data"] ?? null), "oct_modules", [], "any", false, false, false, 3286)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_oct_modules\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_oct_modules\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-feedback\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3302
        echo ($context["text_feedback"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback-status\">";
        // line 3304
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_feedback_status\" ";
        // line 3307
        if (($context["theme_oct_showcase_feedback_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_messenger\">";
        // line 3319
        echo ($context["entry_show_feedback_messenger"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_feedback_data[feedback_messenger]\" ";
        // line 3322
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_feedback_data"] ?? null), "feedback_messenger", [], "any", false, false, false, 3322)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_messenger\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_messenger\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_viber\">";
        // line 3334
        echo ($context["entry_show_feedback_viber"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_feedback_data[feedback_viber]\" ";
        // line 3337
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_feedback_data"] ?? null), "feedback_viber", [], "any", false, false, false, 3337)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_viber\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_viber\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_telegram\">";
        // line 3349
        echo ($context["entry_show_feedback_telegram"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_feedback_data[feedback_telegram]\" ";
        // line 3352
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_feedback_data"] ?? null), "feedback_telegram", [], "any", false, false, false, 3352)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_telegram\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_telegram\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_skype\">";
        // line 3364
        echo ($context["entry_show_feedback_skype"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_feedback_data[feedback_skype]\" ";
        // line 3367
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_feedback_data"] ?? null), "feedback_skype", [], "any", false, false, false, 3367)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_skype\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_skype\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_whatsapp\">";
        // line 3379
        echo ($context["entry_show_feedback_whatsapp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_feedback_data[feedback_whatsapp]\" ";
        // line 3382
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_feedback_data"] ?? null), "feedback_whatsapp", [], "any", false, false, false, 3382)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_whatsapp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_whatsapp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_email\">";
        // line 3394
        echo ($context["entry_show_feedback_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_feedback_data[feedback_email]\" ";
        // line 3397
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_feedback_data"] ?? null), "feedback_email", [], "any", false, false, false, 3397)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_email\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_email\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_callback\">";
        // line 3409
        echo ($context["entry_show_feedback_callback"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_feedback_data[feedback_callback]\" ";
        // line 3412
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_feedback_data"] ?? null), "feedback_callback", [], "any", false, false, false, 3412)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_callback\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_callback\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_contact_link\">";
        // line 3424
        echo ($context["entry_show_feedback_contact_link"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_feedback_data[feedback_contact_link]\" ";
        // line 3427
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_feedback_data"] ?? null), "feedback_contact_link", [], "any", false, false, false, 3427)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_contact_link\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_contact_link\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-live_search\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3442
        echo ($context["text_live_search"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_status\">";
        // line 3444
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_live_search_status\" ";
        // line 3447
        if (($context["theme_oct_showcase_live_search_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_price\">";
        // line 3459
        echo ($context["entry_show_live_price"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_live_search_data[price]\" ";
        // line 3462
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_live_search_data"] ?? null), "price", [], "any", false, false, false, 3462)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_price\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_price\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_model\">";
        // line 3474
        echo ($context["entry_show_live_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_live_search_data[model]\" ";
        // line 3477
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_live_search_data"] ?? null), "model", [], "any", false, false, false, 3477)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_sku\">";
        // line 3489
        echo ($context["entry_show_live_sku"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_live_search_data[sku]\" ";
        // line 3492
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_live_search_data"] ?? null), "sku", [], "any", false, false, false, 3492)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_sku\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_sku\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-show_live_descr\">";
        // line 3504
        echo ($context["entry_show_live_descr"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_live_search_data[description]\" ";
        // line 3507
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_live_search_data"] ?? null), "description", [], "any", false, false, false, 3507)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-show_live_descr\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-show_live_descr\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_sku\">";
        // line 3519
        echo ($context["entry_live_search_delay"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_live_search_data[delay]\" value=\"";
        // line 3521
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_live_search_data"] ?? null), "delay", [], "any", false, false, false, 3521);
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_delay"] ?? null);
        echo "\" id=\"input-live_search_delay\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_sku\">";
        // line 3525
        echo ($context["entry_live_search_symbols"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_live_search_data[count_symbol]\" value=\"";
        // line 3527
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_live_search_data"] ?? null), "count_symbol", [], "any", false, false, false, 3527);
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_symbols"] ?? null);
        echo "\" id=\"input-live_search_delay\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"settings\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-seo_titles\" data-toggle=\"tab\"  aria-expanded=\"true\">SEO Titles</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_urls\" data-toggle=\"tab\"  aria-expanded=\"true\">";
        // line 3539
        echo ($context["text_seo_url"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_home\" data-toggle=\"tab\"  aria-expanded=\"true\">Home page (title/description/OG-image)</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-seo_titles\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO Titles</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_title_status\">";
        // line 3549
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_title_status\" ";
        // line 3552
        if (($context["theme_oct_showcase_seo_title_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin-left:0;margin-right:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"seo_title-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-seo_title-product\" data-toggle=\"tab\">";
        // line 3565
        echo ($context["text_seo_title_product"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_title-category\" data-toggle=\"tab\">";
        // line 3566
        echo ($context["text_seo_title_category"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_title-manufacturer\" data-toggle=\"tab\">";
        // line 3567
        echo ($context["text_seo_title_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-seo_title-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_title_status\">";
        // line 3574
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_title_data[product][title_status]\" ";
        // line 3577
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3577), "title_status", [], "any", false, false, false, 3577)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_title_empty\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 3591
        echo ($context["help_seo_title_empty"] ?? null);
        echo "\">";
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_title_data[product][title_empty]\" ";
        // line 3594
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3594), "title_empty", [], "any", false, false, false, 3594)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_title_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_title_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3607
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 3609
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3610
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3612
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3612);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3612);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3612);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_title_data[product][title][";
            // line 3614
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3614);
            echo "]\" value=\"";
            echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3614), "title", [], "any", false, false, false, 3614)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3614)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3617
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3618
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[price]<br />[model]<br />[sku]<br />[store]<br />[category]<br />[manufacturer]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_description_status\">";
        // line 3624
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_title_data[product][description_status]\" ";
        // line 3627
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3627), "description_status", [], "any", false, false, false, 3627)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_description_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_description_empty\">";
        // line 3641
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_title_data[product][description_empty]\" ";
        // line 3644
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3644), "description_empty", [], "any", false, false, false, 3644)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_description_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_description_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3657
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 3659
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3660
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3662
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3662);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3662);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3662);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_title_data[product][description][";
            // line 3664
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3664);
            echo "]\" value=\"";
            echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3664), "description", [], "any", false, false, false, 3664)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3664)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3667
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3668
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[price]<br />[model]<br />[sku]<br />[store]<br />[category]<br />[manufacturer]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_title_status\">";
        // line 3676
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_title_data[category][title_status]\" ";
        // line 3679
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3679), "title_status", [], "any", false, false, false, 3679)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_title_empty\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 3693
        echo ($context["help_seo_title_empty"] ?? null);
        echo "\">";
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_title_data[category][title_empty]\" ";
        // line 3696
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3696), "title_empty", [], "any", false, false, false, 3696)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_title_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_title_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3709
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 3711
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3712
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3714
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3714);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3714);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3714);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_title_data[category][title][";
            // line 3716
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3716);
            echo "]\" value=\"";
            echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3716), "title", [], "any", false, false, false, 3716)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3716)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3719
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3720
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_description_status\">";
        // line 3726
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_title_data[category][description_status]\" ";
        // line 3729
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3729), "description_status", [], "any", false, false, false, 3729)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_description_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_description_empty\">";
        // line 3743
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_title_data[category][description_empty]\" ";
        // line 3746
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3746), "description_empty", [], "any", false, false, false, 3746)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_description_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_description_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3759
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 3761
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3762
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3764
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3764);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3764);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3764);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_title_data[category][description][";
            // line 3766
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3766);
            echo "]\" value=\"";
            echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3766), "description", [], "any", false, false, false, 3766)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3766)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3769
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3770
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title-manufacturer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_manufacturer_title_status\">";
        // line 3777
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_title_data[manufacturer][title_status]\" ";
        // line 3780
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3780), "title_status", [], "any", false, false, false, 3780)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_manufacturer_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_manufacturer_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3792
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 3794
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3795
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3797
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3797);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3797);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3797);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_title_data[manufacturer][title][";
            // line 3799
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3799);
            echo "]\" value=\"";
            echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3799), "title", [], "any", false, false, false, 3799)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3799)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3802
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3803
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_manufacturer_description_status\">";
        // line 3808
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_title_data[manufacturer][description_status]\" ";
        // line 3811
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3811), "description_status", [], "any", false, false, false, 3811)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_manufacturer_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_manufacturer_description_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3823
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 3825
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3826
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3828
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3828);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3828);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3828);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_title_data[manufacturer][description][";
            // line 3830
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3830);
            echo "]\" value=\"";
            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3830), "description", [], "any", false, false, false, 3830)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3830)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3833
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3834
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_urls\">
\t\t\t\t\t\t\t\t\t\t<fildset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO URL</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group text_seo_url_danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3848
        echo ($context["text_seo_url_danger"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_status\">";
        // line 3853
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_url_status\" ";
        // line 3856
        if (($context["theme_oct_showcase_seo_url_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_url_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_url_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_status\">";
        // line 3868
        echo ($context["entry_seo_url_lang_prefix"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3870
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3871
            echo "\t\t\t\t\t\t\t                    \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3873
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3873);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3873);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3873);
            echo "\" />
\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_url_data[lang_prefix][";
            // line 3875
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3875);
            echo "]\" value=\"";
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_url_data"] ?? null), "lang_prefix", [], "any", false, false, false, 3875)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3875)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3878
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fildset>
\t\t\t\t\t\t\t\t\t\t<fildset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3882
        echo ($context["entry_seo_url_product"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_product\">";
        // line 3884
        echo ($context["entry_seo_url_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_url_data[product]\" value=\"";
        // line 3886
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_url_data"] ?? null), "product", [], "any", false, false, false, 3886);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3888
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[model]<br />[sku]<br />[brand]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_category\">";
        // line 3893
        echo ($context["entry_seo_url_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_url_data[category]\" value=\"";
        // line 3895
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_url_data"] ?? null), "category", [], "any", false, false, false, 3895);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3897
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_manufacturer\">";
        // line 3902
        echo ($context["entry_seo_url_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_url_data[manufacturer]\" value=\"";
        // line 3904
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_url_data"] ?? null), "manufacturer", [], "any", false, false, false, 3904);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3906
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_information\">";
        // line 3911
        echo ($context["entry_seo_url_information"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_url_data[information]\" value=\"";
        // line 3913
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_url_data"] ?? null), "information", [], "any", false, false, false, 3913);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3915
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_blog_category\">";
        // line 3920
        echo ($context["entry_seo_url_blog_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_url_data[blog_category]\" value=\"";
        // line 3922
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_url_data"] ?? null), "blog_category", [], "any", false, false, false, 3922);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3924
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_blog_article\">";
        // line 3929
        echo ($context["entry_seo_url_blog_article"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_url_data[blog_article]\" value=\"";
        // line 3931
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_url_data"] ?? null), "blog_article", [], "any", false, false, false, 3931);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3933
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fildset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_home\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO Home page (title/description)</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_home_status\">";
        // line 3943
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_home_status\" ";
        // line 3946
        if (($context["theme_oct_showcase_seo_home_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_home_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_home_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3960
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 3962
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3963
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3965
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3965);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3965);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3965);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_showcase_seo_home_data[title][";
            // line 3967
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3967);
            echo "]\" value=\"";
            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_home_data"] ?? null), "title", [], "any", false, false, false, 3967)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3967)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3970
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3974
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 3976
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3977
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\" style=\"margin-bottom: 12px;\" >
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3979
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3979);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3979);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3979);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_oct_showcase_seo_home_data[description][";
            // line 3981
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3981);
            echo "]\" class=\"form-control\" />";
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_home_data"] ?? null), "description", [], "any", false, false, false, 3981)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3981)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3984
        echo "\t\t\t\t\t\t\t\t                            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<legend>Home page Open Graph main image</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_home_image_status\">";
        // line 3992
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_seo_home_image_status\" ";
        // line 3995
        if (($context["theme_oct_showcase_seo_home_image_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_home_image_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_home_image_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4009
        echo ($context["entry_og_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 4011
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4012
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4012);
            echo "
\t\t\t\t\t\t\t\t                            <div class=\"input-group\" style=\"margin-bottom: 12px;\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4015
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4015);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4015);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4015);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"home-images-data-";
            // line 4017
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4017);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-placeholder=\"";
            // line 4018
            echo ($context["thumb"] ?? null);
            echo "\" src=\"";
            if ((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4018)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4018)] ?? null) : null)) {
                echo "/image/";
                echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4018)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4018)] ?? null) : null);
            } else {
                echo ($context["thumb"] ?? null);
            }
            echo "\" alt=\"\" title=\"\" width=\"100\" height=\"100\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"home-image-data-";
            // line 4020
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4020);
            echo "\" type=\"hidden\" name=\"theme_oct_showcase_seo_home_image_data[image][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4020);
            echo "]\" value=\"";
            if ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4020)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4020)] ?? null) : null)) {
                echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_showcase_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4020)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4020)] ?? null) : null);
            }
            echo "\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4023
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-help\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 4035
        echo ($context["tab_help"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t";
        // line 4037
        echo ($context["entry_help_text"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_showcase_version\" value=\"";
        // line 4040
        echo ($context["theme_oct_showcase_version"] ?? null);
        echo "\" />
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\$('input[name=\\'advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4050
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'advantage_link\\']').val('');
\t\t\$('#advantages_id-' + in_id[1]).val(item.value);

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4075
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'header_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4084
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'header_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#header_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4106
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#header_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'footer_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4115
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'footer_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#footer_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4137
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#footer_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'mobile_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4146
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'mobile_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#mobile_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4168
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#mobile_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 4178
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
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
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#product-category' + item['value']).remove();

\t\t\$('#product-category').append(`<div id=\"product-category\${ item['value'] }\"><i class=\"fa fa-minus-circle\"></i> \${ item['label'] }<input type=\"hidden\" name=\"theme_oct_showcase_data[footer_category_links][]\" value=\"\${ item['value'] }\" /></div>`);
\t}
});

\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

\$(\".spectrum\").spectrum({
\tpreferredFormat: \"rgb\",
\tshowInitial: true,
\tshowInput: true,
\tshowAlpha: true,
\tshowPalette: true,
\tpalette: [[\"red\", \"rgba(0, 255, 0, .5)\", \"rgb(0, 0, 255)\"]]
});
</script>
<script>
const codemirror = CodeMirror.fromTextArea(document.getElementById('css_code'), {
\tmode : 'css',
\theight: '100%',
\tlineNumbers: true,
\tautofocus: true,
\tlineWrapping: true
});

const codemirror2 = CodeMirror.fromTextArea(document.getElementById('js_code'), {
\tmode : 'javascript',
\theight: '100%',
\tlineNumbers: true,
\tautofocus: true,
\tlineWrapping: true
});

\$('a#code_mir').on('shown.bs.tab', function () {
\t\$('.CodeMirror').each(function(i, el){
\t\tel.CodeMirror.refresh();
\t});
});

\$('#input-product_dop_tab').change(function() {
    let \$input = \$(this);

    if (\$input.is(\":checked\")) {
        \$(\"#product_dop_tabs_text\").slideDown('slow');
    } else {
        \$(\"#product_dop_tabs_text\").slideUp('slow');
    }
});

\$('#input-product_advantage').change(function() {
    let \$input = \$(this);

    if (\$input.is(\":checked\")) {
        \$(\"#product_advantages\").slideDown('slow');
    } else {
        \$(\"#product_advantages\").slideUp('slow');
    }
});

\$('#address-language a:first,#language-megamenu a:first,#language_mobile a:first,#open-language a:first,#contact_view_html-language a:first,#product_dop_tab-language a:first,#order_register_account-language a:first,#order_no_register_account-language a:first').tab('show');
</script>
<script>
let social_row = ";
        // line 4259
        echo ($context["social_row"] ?? null);
        echo ";

function addSocial() {
\tconst html = `
\t<tr id=\"social-row\${ social_row }\">
\t\t<td class=\"left\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t<button onClick=\"fontIcons('social_icone-\${ social_row }', 'social_input_icone-\${ social_row }');\" class=\"btn btn-default\" type=\"button\"><i id=\"social_icone-\${ social_row }\" class=\"fas fa-asterisk\"></i></button>
\t\t\t\t<input type=\"hidden\" name=\"theme_oct_showcase_data[socials][\${ social_row }][icone]\" id=\"social_input_icone-\${ social_row }\" value=\"\" />
\t\t\t\t</span>
\t\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data[socials][\${ social_row }][title]\" value=\"\" placeholder=\"";
        // line 4270
        echo ($context["entry_social_title"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t</div>
\t\t</td>
\t\t<td class=\"left\">
\t\t\t<input type=\"text\" name=\"theme_oct_showcase_data[socials][\${ social_row }][link]\" value=\"\" placeholder=\"";
        // line 4274
        echo ($context["entry_social_link"] ?? null);
        echo "\" class=\"form-control\" />
\t\t</td>
\t\t<td class=\"left\">
\t\t\t<a onclick=\"\$('#social-row\${ social_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4277
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t</td>
\t</tr>
\t`;

\t\$('#tab-socials-settings table tbody').append(html);

\tsocial_row++;
}
</script>
<script>
let header_advantages_row = ";
        // line 4288
        echo ($context["header_advantages_row"] ?? null);
        echo ";

function addHeaderAdvantage() {
\tconst html = `
\t<tr id=\"header_advantage-row\${ header_advantages_row }\">
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"header_advantage_link\" value=\"\" placeholder=\"";
        // line 4295
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ header_advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4299
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4301
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4301);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4301);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4301);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_showcase_data[header_links][\${ header_advantages_row }][";
            // line 4303
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4303);
            echo "][title]\" value=\"\" id=\"header_advantage-title-\${ header_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4303);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4306
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4309
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4311
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4311);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4311);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4311);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_showcase_data[header_links][\${ header_advantages_row }][";
            // line 4313
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4313);
            echo "][link]\" value=\"\" id=\"header_advantage-href-\${ header_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4313);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4316
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#header_advantage-row\${ header_advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4319
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#header_advantages table tbody').append(html);

\theader_advantages_row++;

\t\$('input[name=\\'header_advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4331
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'header_advantage_link\\']').val('');

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#header_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 4355
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#header_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let footer_advantages_row = ";
        // line 4363
        echo ($context["footer_advantages_row"] ?? null);
        echo ";

function addFooterAdvantage() {
\tconst html = `
\t<tr id=\"footer_advantage-row\${ footer_advantages_row }\">
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"footer_advantage_link\" value=\"\" placeholder=\"";
        // line 4370
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ footer_advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4373
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4374
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4376
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4376);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4376);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4376);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_showcase_data[footer_links][\${ footer_advantages_row }][";
            // line 4378
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4378);
            echo "][title]\" value=\"\" id=\"footer_advantage-title-\${ footer_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4378);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4381
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4383
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4384
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4386
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4386);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4386);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4386);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_showcase_data[footer_links][\${ footer_advantages_row }][";
            // line 4388
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4388);
            echo "][link]\" value=\"\" id=\"footer_advantage-href-\${ footer_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4388);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4391
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#footer_advantage-row\${ footer_advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4394
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#footer_advantages table tbody').append(html);

\tfooter_advantages_row++;

\t\$('input[name=\\'footer_advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4406
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'footer_advantage_link\\']').val('');

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#footer_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 4430
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#footer_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let mobile_advantages_row = ";
        // line 4438
        echo ($context["mobile_advantages_row"] ?? null);
        echo ";

function addMobileAdvantage() {
\tconst html = `
\t<tr id=\"mobile_advantage-row\${ mobile_advantages_row }\">
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"mobile_advantage_link\" value=\"\" placeholder=\"";
        // line 4445
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"mobile_advantage_link-\${ mobile_advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4449
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4451
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4451);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4451);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4451);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_showcase_data[mobile_links][\${ mobile_advantages_row }][";
            // line 4453
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4453);
            echo "][title]\" value=\"\" id=\"mobile_advantage-title-\${ mobile_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4453);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4456
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4458
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4459
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4461
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4461);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4461);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4461);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_showcase_data[mobile_links][\${ mobile_advantages_row }][";
            // line 4463
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4463);
            echo "][link]\" value=\"\" id=\"mobile_advantage-href-\${ mobile_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4463);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4466
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#mobile_advantage-row\${ mobile_advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4469
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#mobile_advantages table tbody').append(html);

\tmobile_advantages_row++;

\t\$('input[name=\\'mobile_advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4481
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'mobile_advantage_link\\']').val('');

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#mobile_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 4505
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#mobile_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let advantages_row = ";
        // line 4513
        echo ($context["advantages_row"] ?? null);
        echo ";

function addAdvantage() {
\tconst html = `
\t<tr id=\"advantage-row\${ advantages_row }\">
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<div class=\"input-group\">
\t            <span class=\"input-group-btn\">
\t\t\t\t\t<a href=\"\" id=\"advantages_icone-\${ advantages_row }\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 4521
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"Select Icon\" /></a>
\t            \t<input type=\"hidden\" name=\"theme_oct_showcase_data[product_advantages][\${ advantages_row }][icone]\" id=\"advantages_input_icone-\${ advantages_row }\" value=\"\" />
\t            \t<input type=\"hidden\" name=\"theme_oct_showcase_data[product_advantages][\${ advantages_row }][information_id]\" id=\"advantages_id-\${ advantages_row }\" value=\"\" />
\t            </span>
\t       </div>
\t\t</td>
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"advantage_link\" value=\"\" placeholder=\"";
        // line 4529
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4532
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4533
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4535
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4535);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4535);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4535);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_showcase_data[product_advantages][\${ advantages_row }][";
            // line 4537
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4537);
            echo "][title]\" value=\"\" id=\"advantage-title-\${ advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4537);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4540
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4542
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4543
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4545
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4545);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4545);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4545);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_showcase_data[product_advantages][\${ advantages_row }][";
            // line 4547
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4547);
            echo "][link]\" value=\"\" id=\"advantage-href-\${ advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4547);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4550
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\">
\t\t\t";
        // line 4553
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4554
            echo "\t\t\t<div class=\"input-group\">
\t            <span class=\"input-group-addon\">
\t            \t<img src=\"language/";
            // line 4556
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4556);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4556);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4556);
            echo "\" />
\t            </span>
\t\t\t\t<textarea name=\"theme_oct_showcase_data[product_advantages][\${ advantages_row }][";
            // line 4558
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4558);
            echo "][text]\" class=\"form-control\"></textarea>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4561
        echo "\t\t</td>
\t\t<td class=\"text-left\" style=\"width:10%;\">
\t\t\t<label class=\"col-sm-12\" for=\"input-product_advantage_popup-\${ advantages_row }\">";
        // line 4563
        echo ($context["entry_product_advantage_popup"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[product_advantages][\${ advantages_row }][popup]\" id=\"input-product_advantage_popup-\${ advantages_row }\" tabindex=\"1\">
\t\t\t\t\t<label for=\"input-product_advantage_popup-\${ advantages_row }\"></label>
\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#advantage-row\${ advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4578
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#product_advantages table tbody').append(html);

\tadvantages_row++;

\t\$('input[name=\\'advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4590
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'advantage_link\\']').val('');

\t\t\t\$('#advantages_id-' + in_id[1]).val(item.value);

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 4616
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let payment_row = ";
        // line 4624
        echo ($context["payment_row"] ?? null);
        echo ";

function addPayment(){
\tconst html = `
\t<div id=\"payments-row-\${ payment_row }\" class=\"col-sm-2 payments\">
\t\t<a href=\"javascript:;\" onclick=\"\$('#payments-row-\${ payment_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4629
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btnr\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_customers_\${ payment_row }\">
\t\t\t<a href=\"\" id=\"thumb-image\${ payment_row }\" data-toggle=\"image\">
\t\t\t\t<img class=\"img-thumbnail\" src=\"";
        // line 4632
        echo ($context["placeholder"] ?? null);
        echo "\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t</a>
\t\t\t<input type=\"hidden\" value=\"\" name=\"theme_oct_showcase_data[payments][customers][\${ payment_row }][image]\" id=\"input-image\${ payment_row }\" />
\t\t</label>
\t\t<div class=\"col-sm-6\">
\t\t\t<div class=\"toggle-group\">
\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_showcase_data[payments][customers][\${ payment_row }][status]\" id=\"input-payments_customers_\${ payment_row }\" tabindex=\"1\">
\t\t\t\t<label for=\"input-payments_customers_\${ payment_row }\"></label>
\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t`;

\t\$(\"#add_new_block\").before(html);

\tpayment_row++;
}
</script>

<script>
\$(document).delegate('[id^=megamenu-] .panel-heading', 'click', function() {
\tlet id_menu = \$(this).parent().attr('id');
\tlet m_id = id_menu.split('-');

\t\$.ajax({
\t\turl: 'index.php?route=octemplates/menu/oct_menu/getMenu&user_token=";
        // line 4663
        echo ($context["user_token"] ?? null);
        echo "&menu_id=' + m_id[1],
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tif (data.length > 1) {
\t\t\t\t\$('#menu_settings-'+ m_id[1]).html(data);
\t\t\t}
\t\t}
\t});

\t\$(this).siblings('.panel-body').find('.main_menu_block a:first').tab('show');
\t\$(this).siblings('.panel-body').find('.menu_lang_block a:first').tab('show');
\t\$(this).siblings('.panel-body').toggle();
});

\$(document).delegate('.menu_type', 'change', function() {
\tlet m_id = \$(this).attr(\"id\").split('-');
\tlet val = \$(this).val();

\t\$.ajax({
\t\turl: 'index.php?route=octemplates/menu/oct_menu/getMenu&user_token=";
        // line 4684
        echo ($context["user_token"] ?? null);
        echo "&type='+ val +'&menu_id=' + m_id[1],
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tif (data.length > 1) {
\t\t\t\t\$('#menu_settings-'+ m_id[1]).html(data);
\t\t\t}
\t\t}
\t});
});

let menu_id = ";
        // line 4696
        echo ($context["menu_id"] ?? null);
        echo ";

function addNewMenuItem() {
\tconst html = `
\t<div class=\"panel panel-default\" id=\"megamenu-\${ menu_id }\">
\t\t<div class=\"panel-heading\">
\t\t\t<span><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> New Menu Item</span>
\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#megamenu-\${ menu_id }').remove();return false;\">
\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<ul class=\"nav nav-tabs main_menu_block\">
\t\t\t\t<li><a href=\"#tab-menu_general\${ menu_id }\" data-toggle=\"tab\">";
        // line 4709
        echo ($context["tab_menu_general"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-menu_language\${ menu_id }\" data-toggle=\"tab\">";
        // line 4710
        echo ($context["tab_menu_language"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-menu_links\${ menu_id }\" data-toggle=\"tab\">";
        // line 4711
        echo ($context["tab_menu_links"] ?? null);
        echo "</a></li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_general\${ menu_id }\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4716
        echo ($context["text_menu_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"oct_megamenu[\${ menu_id }][type]\" class=\"form-control menu_type\" id=\"menu_type-\${ menu_id }\">
\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\">";
        // line 4719
        echo ($context["text_menu_select"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"category\">";
        // line 4720
        echo ($context["text_menu_type_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"manufacturer\">";
        // line 4721
        echo ($context["text_menu_type_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"oct_blogcategory\">";
        // line 4722
        echo ($context["text_menu_type_3"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"link\">";
        // line 4723
        echo ($context["text_menu_type_4"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"menu_settings-\${ menu_id }\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_language\${ menu_id }\">
\t\t\t\t\t<legend>";
        // line 4730
        echo ($context["tab_menu_language"] ?? null);
        echo "</legend>
\t\t\t\t\t<ul class=\"nav nav-tabs menu_lang_block\" id=\"menu_item_language\${ menu_id }\">
\t\t\t\t\t\t";
        // line 4732
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4733
            echo "\t\t\t\t\t\t<li><a href=\"#menu_item_language\${ menu_id }_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4733);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4733);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4733);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4733);
            echo "\" />  ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4733);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4735
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t";
        // line 4737
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4738
            echo "\t\t\t\t\t\t<div class=\"tab-pane\" id=\"menu_item_language\${ menu_id }_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4738);
            echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 4740
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4740);
            echo "\">";
            echo ($context["entry_menu_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[\${ menu_id }][description][";
            // line 4742
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4742);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["entry_menu_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4742);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
            // line 4746
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4746);
            echo "\">";
            echo ($context["entry_menu_link"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[\${ menu_id }][description][";
            // line 4748
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4748);
            echo "][link]\" value=\"\" placeholder=\"";
            echo ($context["entry_menu_link"] ?? null);
            echo "\" id=\"input-link";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4748);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4753
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_links\${ menu_id }\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4757
        echo ($context["entry_menu_store"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t";
        // line 4760
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 4761
            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"oct_megamenu[\${ menu_id }][stories][]\" value=\"";
            // line 4763
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 4763);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
            // line 4764
            echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["store"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["name"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4768
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-priority\">";
        // line 4772
        echo ($context["entry_menu_customers"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t";
        // line 4775
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 4776
            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[\${ menu_id }][customers][]\" value=\"";
            // line 4778
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 4778);
            echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 4779
            echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["customer_group"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["name"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4783
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t`;

\t\$('#megamenu_block .empty_locations').hide();
\t\$(\"#megamenu_block\").append(html);

\tmenu_id++;
}

\$(document).delegate('[id^=locations-] .panel-heading', 'click', function() {
\t\$(this).siblings('.panel-body').find('.location-block a:first').tab('show');
\t\$(this).siblings('.panel-body').toggle();
});

let location_id = ";
        // line 4803
        echo ($context["location_id"] ?? null);
        echo ";

function addNewLocation() {
\tconst html = `
\t<div class=\"panel panel-default\" id=\"locations-\${ location_id }\">
\t\t<div class=\"panel-heading\">
\t\t\t<span><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> Title</span>
\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#locations-\${ location_id }').remove();return false;\">
\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<fieldset>
\t\t\t\t<legend>";
        // line 4816
        echo ($context["text_locations_descr"] ?? null);
        echo "</legend>
\t\t\t\t<ul class=\"nav nav-tabs location-block\" id=\"locations-language-\${ location_id }\">
\t\t\t\t\t";
        // line 4818
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4819
            echo "\t\t\t\t\t\t<li><a href=\"#locations-language\${ location_id }-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4819);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4819);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4819);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4819);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4819);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4821
        echo "\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 4823
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4824
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"locations-language\${ location_id }-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4824);
            echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_title\${ location_id }-";
            // line 4826
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4826);
            echo "\">";
            echo ($context["entry_location_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"descr_title\${ location_id }-";
            // line 4828
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4828);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4828);
            echo "][title]\" value=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_address\${ location_id }-";
            // line 4832
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4832);
            echo "\">";
            echo ($context["entry_location_address"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<textarea id=\"descr_address\${ location_id }-";
            // line 4834
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4834);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4834);
            echo "][address]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_open\${ location_id }-";
            // line 4838
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4838);
            echo "\">";
            echo ($context["entry_contact_open"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<textarea id=\"descr_open\${ location_id }-";
            // line 4840
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4840);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4840);
            echo "][open]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4845
        echo "\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<fieldset>
\t\t\t\t<legend>";
        // line 4848
        echo ($context["text_locations_info"] ?? null);
        echo "</legend>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_phone\">";
        // line 4850
        echo ($context["entry_contact_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea id=\"location_phone\" name=\"oct_locations[\${ location_id }][phone]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_map\${ location_id }\">";
        // line 4856
        echo ($context["entry_contact_map"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea id=\"location_map\${ location_id }\" name=\"oct_locations[\${ location_id }][map]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_link\${ location_id }\">";
        // line 4862
        echo ($context["entry_location_link"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" id=\"location_link\${ location_id }\" name=\"oct_locations[\${ location_id }][link]\" value=\"\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_image\${ location_id }\">";
        // line 4868
        echo ($context["entry_location_image"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_location_image\${ location_id }\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t<img src=\"";
        // line 4871
        echo ($context["contact_placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["contact_placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_locations[\${ location_id }][image]\" value=\"\" id=\"input-contact_location_image\${ location_id }\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_sort\${ location_id }\">";
        // line 4877
        echo ($context["entry_location_sort"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"number\" id=\"location_sort\${ location_id }\" name=\"oct_locations[\${ location_id }][sort]\" value=\"0\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</div>
\t`;

\t\$(\"#site_locations\").append(html);

\tlocation_id++;
}
</script>

<script>
function fontIcons(icone_id, input_id) {
\t\$.ajax({
\t\turl: 'index.php?route=extension/theme/oct_showcase/getIcons&user_token=";
        // line 4896
        echo ($context["user_token"] ?? null);
        echo "&icone_id=' + icone_id + '&input_id=' + input_id,
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tconst html = `
\t\t\t<div id=\"modal-icons\" class=\"modal\">
\t\t\t  <div class=\"modal-dialog\" style=\"width:55%;\">
\t\t\t    <div class=\"modal-content\">
\t\t\t      <div class=\"modal-header\">
\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t        <h4 class=\"modal-title\">Font Awesome Icons</h4>
\t\t\t      </div>
\t\t\t      <div class=\"modal-body\">\${ data }</div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t`;

\t\t\t\$('body').append(html);

\t\t\t\$('#modal-icons').modal('show');
\t\t}
\t});
}
</script>
<script>
\tif ('";
        // line 4923
        echo ($context["success"] ?? null);
        echo "' == '";
        echo ($context["text_success"] ?? null);
        echo "'){
\t\tsetTimeout(function() {
\t\t\tif(confirm(\"";
        // line 4925
        echo ($context["auto_clear_cache"] ?? null);
        echo "\")){
\t\t\t\t\$('.fa.fa-trash-o').click();
\t\t\t}
\t\t}, 500);
\t}
</script>
";
        // line 4931
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "octemplates/theme/oct_showcase.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9410 => 4931,  9401 => 4925,  9394 => 4923,  9364 => 4896,  9342 => 4877,  9331 => 4871,  9325 => 4868,  9316 => 4862,  9307 => 4856,  9298 => 4850,  9293 => 4848,  9288 => 4845,  9275 => 4840,  9268 => 4838,  9259 => 4834,  9252 => 4832,  9243 => 4828,  9236 => 4826,  9230 => 4824,  9226 => 4823,  9222 => 4821,  9205 => 4819,  9201 => 4818,  9196 => 4816,  9180 => 4803,  9158 => 4783,  9148 => 4779,  9144 => 4778,  9140 => 4776,  9136 => 4775,  9130 => 4772,  9124 => 4768,  9114 => 4764,  9110 => 4763,  9106 => 4761,  9102 => 4760,  9096 => 4757,  9090 => 4753,  9075 => 4748,  9068 => 4746,  9057 => 4742,  9050 => 4740,  9044 => 4738,  9040 => 4737,  9036 => 4735,  9019 => 4733,  9015 => 4732,  9010 => 4730,  9000 => 4723,  8996 => 4722,  8992 => 4721,  8988 => 4720,  8984 => 4719,  8978 => 4716,  8970 => 4711,  8966 => 4710,  8962 => 4709,  8946 => 4696,  8931 => 4684,  8907 => 4663,  8871 => 4632,  8865 => 4629,  8857 => 4624,  8846 => 4616,  8817 => 4590,  8802 => 4578,  8784 => 4563,  8780 => 4561,  8771 => 4558,  8762 => 4556,  8758 => 4554,  8754 => 4553,  8749 => 4550,  8738 => 4547,  8729 => 4545,  8725 => 4543,  8721 => 4542,  8717 => 4540,  8706 => 4537,  8697 => 4535,  8693 => 4533,  8689 => 4532,  8683 => 4529,  8672 => 4521,  8661 => 4513,  8650 => 4505,  8623 => 4481,  8608 => 4469,  8603 => 4466,  8592 => 4463,  8583 => 4461,  8579 => 4459,  8575 => 4458,  8571 => 4456,  8560 => 4453,  8551 => 4451,  8547 => 4449,  8543 => 4448,  8537 => 4445,  8527 => 4438,  8516 => 4430,  8489 => 4406,  8474 => 4394,  8469 => 4391,  8458 => 4388,  8449 => 4386,  8445 => 4384,  8441 => 4383,  8437 => 4381,  8426 => 4378,  8417 => 4376,  8413 => 4374,  8409 => 4373,  8403 => 4370,  8393 => 4363,  8382 => 4355,  8355 => 4331,  8340 => 4319,  8335 => 4316,  8324 => 4313,  8315 => 4311,  8311 => 4309,  8307 => 4308,  8303 => 4306,  8292 => 4303,  8283 => 4301,  8279 => 4299,  8275 => 4298,  8269 => 4295,  8259 => 4288,  8245 => 4277,  8239 => 4274,  8232 => 4270,  8218 => 4259,  8134 => 4178,  8121 => 4168,  8096 => 4146,  8084 => 4137,  8059 => 4115,  8047 => 4106,  8022 => 4084,  8010 => 4075,  7982 => 4050,  7969 => 4040,  7963 => 4037,  7958 => 4035,  7944 => 4023,  7929 => 4020,  7917 => 4018,  7913 => 4017,  7904 => 4015,  7897 => 4012,  7893 => 4011,  7888 => 4009,  7869 => 3995,  7863 => 3992,  7853 => 3984,  7842 => 3981,  7833 => 3979,  7829 => 3977,  7825 => 3976,  7820 => 3974,  7814 => 3970,  7803 => 3967,  7794 => 3965,  7790 => 3963,  7786 => 3962,  7781 => 3960,  7762 => 3946,  7756 => 3943,  7743 => 3933,  7738 => 3931,  7733 => 3929,  7725 => 3924,  7720 => 3922,  7715 => 3920,  7707 => 3915,  7702 => 3913,  7697 => 3911,  7689 => 3906,  7684 => 3904,  7679 => 3902,  7671 => 3897,  7666 => 3895,  7661 => 3893,  7653 => 3888,  7648 => 3886,  7643 => 3884,  7638 => 3882,  7632 => 3878,  7621 => 3875,  7612 => 3873,  7608 => 3871,  7604 => 3870,  7599 => 3868,  7582 => 3856,  7576 => 3853,  7568 => 3848,  7551 => 3834,  7548 => 3833,  7537 => 3830,  7528 => 3828,  7524 => 3826,  7520 => 3825,  7515 => 3823,  7498 => 3811,  7492 => 3808,  7484 => 3803,  7481 => 3802,  7470 => 3799,  7461 => 3797,  7457 => 3795,  7453 => 3794,  7448 => 3792,  7431 => 3780,  7425 => 3777,  7415 => 3770,  7412 => 3769,  7401 => 3766,  7392 => 3764,  7388 => 3762,  7384 => 3761,  7379 => 3759,  7361 => 3746,  7355 => 3743,  7336 => 3729,  7330 => 3726,  7321 => 3720,  7318 => 3719,  7307 => 3716,  7298 => 3714,  7294 => 3712,  7290 => 3711,  7285 => 3709,  7267 => 3696,  7259 => 3693,  7240 => 3679,  7234 => 3676,  7223 => 3668,  7220 => 3667,  7209 => 3664,  7200 => 3662,  7196 => 3660,  7192 => 3659,  7187 => 3657,  7169 => 3644,  7163 => 3641,  7144 => 3627,  7138 => 3624,  7129 => 3618,  7126 => 3617,  7115 => 3614,  7106 => 3612,  7102 => 3610,  7098 => 3609,  7093 => 3607,  7075 => 3594,  7067 => 3591,  7048 => 3577,  7042 => 3574,  7032 => 3567,  7028 => 3566,  7024 => 3565,  7006 => 3552,  7000 => 3549,  6987 => 3539,  6970 => 3527,  6965 => 3525,  6956 => 3521,  6951 => 3519,  6934 => 3507,  6928 => 3504,  6911 => 3492,  6905 => 3489,  6888 => 3477,  6882 => 3474,  6865 => 3462,  6859 => 3459,  6842 => 3447,  6836 => 3444,  6831 => 3442,  6811 => 3427,  6805 => 3424,  6788 => 3412,  6782 => 3409,  6765 => 3397,  6759 => 3394,  6742 => 3382,  6736 => 3379,  6719 => 3367,  6713 => 3364,  6696 => 3352,  6690 => 3349,  6673 => 3337,  6667 => 3334,  6650 => 3322,  6644 => 3319,  6627 => 3307,  6621 => 3304,  6616 => 3302,  6595 => 3286,  6589 => 3283,  6570 => 3269,  6564 => 3266,  6547 => 3254,  6541 => 3251,  6523 => 3238,  6517 => 3235,  6512 => 3233,  6492 => 3218,  6486 => 3215,  6469 => 3203,  6463 => 3200,  6458 => 3198,  6448 => 3191,  6444 => 3190,  6440 => 3189,  6436 => 3188,  6427 => 3181,  6420 => 3177,  6416 => 3175,  6414 => 3174,  6404 => 3169,  6393 => 3163,  6385 => 3158,  6380 => 3155,  6373 => 3151,  6369 => 3149,  6367 => 3148,  6357 => 3143,  6346 => 3137,  6338 => 3132,  6333 => 3129,  6326 => 3125,  6322 => 3123,  6320 => 3122,  6310 => 3117,  6299 => 3111,  6291 => 3106,  6286 => 3103,  6279 => 3099,  6275 => 3097,  6273 => 3096,  6263 => 3091,  6252 => 3085,  6244 => 3080,  6239 => 3077,  6232 => 3073,  6228 => 3071,  6226 => 3070,  6216 => 3065,  6205 => 3059,  6197 => 3054,  6192 => 3051,  6185 => 3047,  6181 => 3045,  6179 => 3044,  6169 => 3039,  6158 => 3033,  6150 => 3028,  6145 => 3025,  6138 => 3021,  6134 => 3019,  6132 => 3018,  6122 => 3013,  6111 => 3007,  6103 => 3002,  6098 => 2999,  6091 => 2995,  6087 => 2993,  6085 => 2992,  6075 => 2987,  6064 => 2981,  6056 => 2976,  6051 => 2973,  6044 => 2969,  6040 => 2967,  6038 => 2966,  6028 => 2961,  6022 => 2960,  6011 => 2954,  6005 => 2953,  5997 => 2948,  5992 => 2945,  5985 => 2941,  5981 => 2939,  5979 => 2938,  5969 => 2933,  5958 => 2927,  5950 => 2922,  5945 => 2919,  5938 => 2915,  5934 => 2913,  5932 => 2912,  5922 => 2907,  5911 => 2901,  5903 => 2896,  5898 => 2893,  5891 => 2889,  5887 => 2887,  5885 => 2886,  5875 => 2881,  5864 => 2875,  5856 => 2870,  5851 => 2867,  5844 => 2863,  5840 => 2861,  5838 => 2860,  5828 => 2855,  5817 => 2849,  5809 => 2844,  5804 => 2842,  5791 => 2832,  5786 => 2830,  5779 => 2826,  5774 => 2824,  5769 => 2822,  5761 => 2816,  5743 => 2812,  5732 => 2808,  5728 => 2807,  5721 => 2804,  5717 => 2803,  5712 => 2800,  5695 => 2798,  5691 => 2797,  5683 => 2792,  5678 => 2790,  5672 => 2786,  5654 => 2782,  5643 => 2778,  5639 => 2777,  5632 => 2774,  5628 => 2773,  5623 => 2770,  5606 => 2768,  5602 => 2767,  5594 => 2762,  5589 => 2760,  5571 => 2747,  5565 => 2744,  5560 => 2742,  5547 => 2732,  5541 => 2728,  5535 => 2727,  5533 => 2726,  5525 => 2723,  5511 => 2712,  5501 => 2711,  5493 => 2708,  5489 => 2706,  5476 => 2703,  5467 => 2701,  5463 => 2699,  5459 => 2698,  5454 => 2695,  5438 => 2692,  5429 => 2690,  5425 => 2688,  5421 => 2687,  5417 => 2685,  5401 => 2682,  5392 => 2680,  5388 => 2678,  5384 => 2677,  5376 => 2674,  5363 => 2668,  5355 => 2667,  5349 => 2666,  5341 => 2662,  5336 => 2661,  5334 => 2660,  5325 => 2654,  5321 => 2653,  5312 => 2647,  5306 => 2646,  5290 => 2635,  5284 => 2632,  5279 => 2630,  5271 => 2627,  5266 => 2625,  5260 => 2621,  5242 => 2617,  5232 => 2614,  5226 => 2612,  5222 => 2611,  5218 => 2609,  5201 => 2607,  5197 => 2606,  5191 => 2603,  5185 => 2602,  5168 => 2590,  5162 => 2587,  5145 => 2575,  5139 => 2572,  5120 => 2558,  5114 => 2555,  5097 => 2543,  5091 => 2540,  5080 => 2534,  5075 => 2532,  5058 => 2520,  5052 => 2517,  5047 => 2514,  5030 => 2502,  5024 => 2499,  5021 => 2498,  5019 => 2497,  5003 => 2486,  4997 => 2483,  4991 => 2480,  4971 => 2465,  4965 => 2462,  4960 => 2460,  4941 => 2446,  4935 => 2443,  4918 => 2431,  4912 => 2428,  4893 => 2414,  4887 => 2411,  4870 => 2399,  4864 => 2396,  4845 => 2382,  4839 => 2379,  4825 => 2372,  4817 => 2371,  4811 => 2368,  4794 => 2356,  4788 => 2353,  4782 => 2350,  4775 => 2345,  4768 => 2341,  4764 => 2339,  4762 => 2338,  4756 => 2337,  4749 => 2335,  4744 => 2332,  4737 => 2328,  4733 => 2326,  4731 => 2325,  4725 => 2324,  4718 => 2322,  4712 => 2319,  4701 => 2313,  4691 => 2308,  4685 => 2305,  4677 => 2302,  4667 => 2297,  4661 => 2294,  4653 => 2291,  4643 => 2286,  4637 => 2283,  4629 => 2280,  4619 => 2275,  4613 => 2272,  4605 => 2269,  4595 => 2264,  4589 => 2261,  4581 => 2258,  4571 => 2253,  4565 => 2250,  4557 => 2247,  4547 => 2242,  4541 => 2239,  4533 => 2236,  4523 => 2231,  4517 => 2228,  4509 => 2225,  4499 => 2220,  4493 => 2217,  4485 => 2214,  4475 => 2209,  4469 => 2206,  4461 => 2203,  4451 => 2198,  4445 => 2195,  4437 => 2192,  4427 => 2187,  4421 => 2184,  4413 => 2181,  4403 => 2176,  4397 => 2173,  4389 => 2170,  4379 => 2165,  4373 => 2162,  4365 => 2159,  4355 => 2154,  4349 => 2151,  4341 => 2148,  4331 => 2143,  4325 => 2140,  4317 => 2137,  4308 => 2131,  4304 => 2130,  4300 => 2129,  4291 => 2123,  4278 => 2117,  4270 => 2116,  4262 => 2115,  4256 => 2112,  4239 => 2100,  4233 => 2097,  4214 => 2083,  4208 => 2080,  4191 => 2068,  4185 => 2065,  4174 => 2059,  4169 => 2057,  4152 => 2045,  4146 => 2042,  4127 => 2028,  4121 => 2025,  4104 => 2013,  4098 => 2010,  4092 => 2007,  4075 => 1993,  4069 => 1989,  4063 => 1988,  4061 => 1987,  4053 => 1984,  4048 => 1981,  4032 => 1978,  4023 => 1976,  4019 => 1974,  4015 => 1973,  4011 => 1971,  3995 => 1968,  3986 => 1966,  3982 => 1964,  3978 => 1963,  3970 => 1960,  3963 => 1957,  3958 => 1956,  3956 => 1955,  3949 => 1951,  3945 => 1950,  3933 => 1943,  3915 => 1930,  3909 => 1927,  3892 => 1915,  3886 => 1912,  3867 => 1898,  3861 => 1895,  3844 => 1883,  3838 => 1880,  3819 => 1866,  3813 => 1863,  3796 => 1851,  3790 => 1848,  3771 => 1834,  3765 => 1831,  3748 => 1819,  3742 => 1816,  3723 => 1802,  3717 => 1799,  3700 => 1787,  3694 => 1784,  3675 => 1770,  3669 => 1767,  3652 => 1755,  3646 => 1752,  3627 => 1738,  3621 => 1735,  3604 => 1723,  3598 => 1720,  3579 => 1706,  3573 => 1703,  3556 => 1691,  3550 => 1688,  3545 => 1685,  3528 => 1680,  3521 => 1678,  3515 => 1676,  3511 => 1675,  3507 => 1673,  3490 => 1671,  3486 => 1670,  3481 => 1668,  3472 => 1661,  3463 => 1658,  3456 => 1657,  3452 => 1656,  3447 => 1654,  3440 => 1652,  3422 => 1639,  3416 => 1636,  3399 => 1624,  3393 => 1621,  3374 => 1607,  3368 => 1604,  3351 => 1592,  3345 => 1589,  3326 => 1575,  3320 => 1572,  3303 => 1560,  3297 => 1557,  3284 => 1547,  3278 => 1543,  3272 => 1542,  3270 => 1541,  3262 => 1538,  3257 => 1535,  3241 => 1532,  3232 => 1530,  3228 => 1528,  3224 => 1527,  3220 => 1525,  3204 => 1522,  3195 => 1520,  3191 => 1518,  3187 => 1517,  3179 => 1514,  3172 => 1511,  3167 => 1510,  3165 => 1509,  3158 => 1505,  3154 => 1504,  3142 => 1497,  3137 => 1495,  3122 => 1483,  3116 => 1479,  3110 => 1478,  3108 => 1477,  3100 => 1474,  3095 => 1471,  3079 => 1468,  3070 => 1466,  3066 => 1464,  3062 => 1463,  3058 => 1461,  3042 => 1458,  3033 => 1456,  3029 => 1454,  3025 => 1453,  3017 => 1450,  3010 => 1447,  3005 => 1446,  3003 => 1445,  2996 => 1441,  2992 => 1440,  2980 => 1433,  2975 => 1431,  2966 => 1425,  2962 => 1423,  2956 => 1421,  2953 => 1420,  2947 => 1419,  2945 => 1418,  2936 => 1411,  2928 => 1408,  2925 => 1407,  2920 => 1405,  2913 => 1404,  2908 => 1402,  2901 => 1401,  2898 => 1400,  2893 => 1398,  2886 => 1397,  2884 => 1396,  2880 => 1394,  2876 => 1393,  2870 => 1390,  2864 => 1386,  2856 => 1383,  2851 => 1381,  2844 => 1380,  2839 => 1378,  2832 => 1377,  2830 => 1376,  2826 => 1374,  2822 => 1373,  2816 => 1370,  2811 => 1368,  2807 => 1366,  2788 => 1361,  2781 => 1359,  2766 => 1355,  2759 => 1353,  2751 => 1351,  2747 => 1350,  2743 => 1348,  2724 => 1346,  2720 => 1345,  2716 => 1344,  2712 => 1343,  2708 => 1342,  2703 => 1340,  2697 => 1339,  2688 => 1335,  2682 => 1334,  2676 => 1333,  2670 => 1332,  2664 => 1331,  2658 => 1330,  2653 => 1328,  2648 => 1326,  2640 => 1323,  2634 => 1322,  2628 => 1321,  2619 => 1315,  2615 => 1314,  2609 => 1312,  2604 => 1311,  2601 => 1310,  2599 => 1309,  2594 => 1307,  2575 => 1293,  2569 => 1290,  2552 => 1278,  2546 => 1275,  2534 => 1268,  2528 => 1267,  2522 => 1266,  2516 => 1263,  2506 => 1258,  2500 => 1257,  2494 => 1254,  2483 => 1248,  2476 => 1246,  2459 => 1234,  2453 => 1231,  2448 => 1228,  2431 => 1223,  2424 => 1221,  2418 => 1219,  2414 => 1218,  2410 => 1216,  2393 => 1214,  2389 => 1213,  2371 => 1200,  2365 => 1197,  2348 => 1185,  2342 => 1182,  2336 => 1179,  2328 => 1174,  2324 => 1173,  2320 => 1172,  2316 => 1171,  2302 => 1160,  2296 => 1156,  2290 => 1155,  2288 => 1154,  2281 => 1152,  2272 => 1150,  2261 => 1146,  2252 => 1144,  2242 => 1143,  2234 => 1139,  2229 => 1138,  2227 => 1137,  2220 => 1133,  2212 => 1128,  2208 => 1126,  2202 => 1124,  2199 => 1123,  2193 => 1122,  2191 => 1121,  2178 => 1115,  2171 => 1113,  2160 => 1109,  2153 => 1107,  2149 => 1106,  2142 => 1104,  2131 => 1100,  2124 => 1098,  2113 => 1094,  2106 => 1092,  2095 => 1088,  2088 => 1086,  2083 => 1084,  2078 => 1081,  2059 => 1076,  2050 => 1074,  2035 => 1070,  2026 => 1068,  2011 => 1064,  2002 => 1062,  1994 => 1060,  1990 => 1059,  1986 => 1057,  1967 => 1055,  1963 => 1054,  1959 => 1053,  1955 => 1052,  1946 => 1046,  1942 => 1045,  1936 => 1043,  1931 => 1042,  1928 => 1041,  1926 => 1040,  1920 => 1037,  1899 => 1021,  1893 => 1018,  1876 => 1006,  1870 => 1003,  1851 => 989,  1845 => 986,  1828 => 974,  1822 => 971,  1803 => 957,  1797 => 954,  1780 => 942,  1774 => 939,  1768 => 936,  1757 => 928,  1752 => 926,  1745 => 922,  1740 => 920,  1731 => 914,  1726 => 912,  1719 => 908,  1714 => 906,  1705 => 900,  1700 => 898,  1693 => 894,  1688 => 892,  1680 => 887,  1673 => 885,  1667 => 882,  1660 => 878,  1655 => 876,  1649 => 872,  1638 => 869,  1633 => 868,  1629 => 867,  1625 => 865,  1608 => 863,  1604 => 862,  1598 => 859,  1591 => 855,  1586 => 853,  1580 => 849,  1569 => 846,  1564 => 845,  1560 => 844,  1556 => 842,  1539 => 840,  1535 => 839,  1529 => 836,  1524 => 834,  1516 => 829,  1512 => 828,  1508 => 827,  1504 => 826,  1491 => 816,  1487 => 814,  1481 => 813,  1479 => 812,  1466 => 802,  1456 => 801,  1447 => 797,  1443 => 796,  1439 => 795,  1435 => 794,  1430 => 793,  1425 => 792,  1423 => 791,  1407 => 780,  1385 => 763,  1363 => 746,  1341 => 729,  1319 => 712,  1297 => 695,  1275 => 678,  1253 => 661,  1241 => 652,  1220 => 636,  1214 => 633,  1197 => 621,  1191 => 618,  1181 => 611,  1177 => 610,  1156 => 594,  1150 => 591,  1131 => 577,  1125 => 574,  1108 => 562,  1102 => 559,  1096 => 556,  1081 => 546,  1076 => 544,  1066 => 539,  1061 => 537,  1052 => 533,  1047 => 531,  1040 => 527,  1028 => 520,  1023 => 518,  1016 => 514,  1005 => 508,  1000 => 506,  990 => 501,  985 => 499,  976 => 495,  971 => 493,  964 => 489,  952 => 482,  947 => 480,  938 => 476,  933 => 474,  922 => 468,  917 => 466,  908 => 462,  903 => 460,  896 => 456,  884 => 449,  879 => 447,  870 => 443,  865 => 441,  854 => 435,  849 => 433,  842 => 429,  830 => 422,  825 => 420,  816 => 416,  811 => 414,  800 => 408,  795 => 406,  786 => 402,  781 => 400,  774 => 396,  758 => 389,  753 => 387,  742 => 381,  737 => 379,  728 => 375,  723 => 373,  716 => 369,  704 => 360,  697 => 358,  691 => 355,  674 => 343,  668 => 340,  649 => 326,  643 => 323,  626 => 311,  620 => 308,  614 => 305,  595 => 291,  589 => 288,  572 => 276,  566 => 273,  560 => 270,  542 => 257,  536 => 254,  517 => 240,  511 => 237,  494 => 225,  488 => 222,  482 => 219,  461 => 203,  455 => 200,  436 => 186,  430 => 183,  413 => 171,  407 => 168,  388 => 154,  382 => 151,  363 => 137,  357 => 134,  340 => 122,  334 => 119,  328 => 115,  321 => 111,  317 => 109,  315 => 108,  311 => 107,  306 => 105,  289 => 93,  283 => 90,  278 => 88,  274 => 87,  266 => 82,  262 => 81,  258 => 80,  248 => 73,  244 => 72,  240 => 71,  236 => 70,  232 => 69,  228 => 68,  224 => 67,  220 => 66,  216 => 65,  207 => 59,  203 => 58,  199 => 57,  195 => 56,  191 => 55,  186 => 53,  180 => 50,  176 => 49,  172 => 47,  166 => 44,  163 => 43,  160 => 42,  154 => 39,  151 => 38,  149 => 37,  143 => 33,  132 => 31,  128 => 30,  123 => 28,  115 => 26,  112 => 25,  107 => 22,  96 => 20,  92 => 19,  87 => 17,  84 => 16,  82 => 15,  76 => 14,  72 => 13,  65 => 12,  59 => 10,  56 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/theme/oct_showcase.twig", "");
    }
}
