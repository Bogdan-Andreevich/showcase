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

/* octemplates/events/admin_header.twig */
class __TwigTemplate_be026f3700f1b6754a8e54e3fcad143f4d9a940a66198dac9cb0ff7e9774cea5 extends \Twig\Template
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
        if ((array_key_exists("oct_alert_status", $context) && ($context["oct_alert_status"] ?? null))) {
            // line 2
            echo "    ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "orders", [], "any", true, true, false, 2) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "orders", [], "any", false, false, false, 2)) || (twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "products", [], "any", true, true, false, 2) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "products", [], "any", false, false, false, 2))) || (twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "oct_modules", [], "any", true, true, false, 2) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "oct_modules", [], "any", false, false, false, 2)))) {
                // line 3
                echo "    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" style=\"padding:0 20px;\">";
                // line 4
                if ((($context["oct_alerts"] ?? null) > 0)) {
                    echo "<span class=\"label label-danger pull-left\" style=\"position:absolute;top:10px;left:6px;\">";
                    echo ($context["oct_alerts"] ?? null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-bell fa-lg\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\" style=\"padding: 6px 10px;\">
            ";
                // line 6
                if (((twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "oct_modules", [], "any", true, true, false, 6) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "oct_modules", [], "any", false, false, false, 6)) && ((array_key_exists("oct_total_reviews", $context) || array_key_exists("oct_total_found_cheaper", $context)) || array_key_exists("oct_total_calls", $context)))) {
                    // line 7
                    echo "            <li class=\"dropdown-header\">";
                    echo ($context["text_oct_modules"] ?? null);
                    echo "</li>
            ";
                    // line 8
                    if ((array_key_exists("oct_popup_call_phone", $context) && ($context["oct_popup_call_phone"] ?? null))) {
                        // line 9
                        echo "            <li><a href=\"";
                        echo ($context["oct_popup_call_phone"] ?? null);
                        echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-warning pull-right\">";
                        echo ($context["oct_total_calls"] ?? null);
                        echo "</span>";
                        echo ($context["text_oct_calls"] ?? null);
                        echo "</a></li>
            ";
                    }
                    // line 11
                    echo "            ";
                    if ((array_key_exists("oct_popup_found_cheaper", $context) && ($context["oct_popup_found_cheaper"] ?? null))) {
                        // line 12
                        echo "            <li><a href=\"";
                        echo ($context["oct_popup_found_cheaper"] ?? null);
                        echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-warning pull-right\">";
                        echo ($context["oct_total_found_cheaper"] ?? null);
                        echo "</span>";
                        echo ($context["text_oct_found_cheaper"] ?? null);
                        echo "</a></li>
            ";
                    }
                    // line 14
                    echo "            ";
                    if ((array_key_exists("oct_reviews", $context) && ($context["oct_reviews"] ?? null))) {
                        // line 15
                        echo "            <li><a href=\"";
                        echo ($context["oct_reviews"] ?? null);
                        echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-warning pull-right\">";
                        echo ($context["oct_total_reviews"] ?? null);
                        echo "</span>";
                        echo ($context["text_oct_reviews"] ?? null);
                        echo "</a></li>
            ";
                    }
                    // line 17
                    echo "            ";
                    if ((array_key_exists("oct_faqs", $context) && ($context["oct_faqs"] ?? null))) {
                        // line 18
                        echo "            <li><a href=\"";
                        echo ($context["oct_faqs"] ?? null);
                        echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-warning pull-right\">";
                        echo ($context["oct_total_faqs"] ?? null);
                        echo "</span>";
                        echo ($context["text_oct_faqs"] ?? null);
                        echo "</a></li>
            <li class=\"divider\"></li>
            ";
                    }
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "orders", [], "any", true, true, false, 22) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "orders", [], "any", false, false, false, 22))) {
                    // line 23
                    echo "            <li class=\"dropdown-header\">";
                    echo ($context["text_oct_order"] ?? null);
                    echo "</li>
            <li><a href=\"";
                    // line 24
                    echo ($context["processing_status"] ?? null);
                    echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-warning pull-right\">";
                    echo ($context["processing_status_total"] ?? null);
                    echo "</span>";
                    echo ($context["text_processing_status"] ?? null);
                    echo "</a></li>
            <li><a href=\"";
                    // line 25
                    echo ($context["complete_status"] ?? null);
                    echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-success pull-right\">";
                    echo ($context["complete_status_total"] ?? null);
                    echo "</span>";
                    echo ($context["text_complete_status"] ?? null);
                    echo "</a></li>
            <li><a href=\"";
                    // line 26
                    echo ($context["return"] ?? null);
                    echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-danger pull-right\">";
                    echo ($context["return_total"] ?? null);
                    echo "</span>";
                    echo ($context["text_return"] ?? null);
                    echo "</a></li>
            <li class=\"divider\"></li>
            ";
                }
                // line 29
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "products", [], "any", true, true, false, 29) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "products", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "            <li class=\"dropdown-header\">";
                    echo ($context["text_oct_product"] ?? null);
                    echo "</li>
            <li><a href=\"";
                    // line 31
                    echo ($context["product"] ?? null);
                    echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-danger pull-right\">";
                    echo ($context["product_total"] ?? null);
                    echo "</span>";
                    echo ($context["text_stock"] ?? null);
                    echo "</a></li>
            <li><a href=\"";
                    // line 32
                    echo ($context["review"] ?? null);
                    echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-danger pull-right\">";
                    echo ($context["review_total"] ?? null);
                    echo "</span>";
                    echo ($context["text_review"] ?? null);
                    echo "</a></li>
            ";
                }
                // line 34
                echo "        </ul>
    </li>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "octemplates/events/admin_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 34,  166 => 32,  158 => 31,  153 => 30,  150 => 29,  140 => 26,  132 => 25,  124 => 24,  119 => 23,  116 => 22,  113 => 21,  102 => 18,  99 => 17,  89 => 15,  86 => 14,  76 => 12,  73 => 11,  63 => 9,  61 => 8,  56 => 7,  54 => 6,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/events/admin_header.twig", "");
    }
}
