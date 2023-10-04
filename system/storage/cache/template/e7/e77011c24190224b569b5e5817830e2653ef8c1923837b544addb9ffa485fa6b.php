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

/* oct_showcase/template/common/footer.twig */
class __TwigTemplate_a12198d8068f0cbaf8d09da62e2f7953f93880f2a31b05aaa7d4229ce045d92a extends \Twig\Template
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
        echo "<footer class=\"sc-footer mt-3 mt-md-4\">
\t<div class=\"container-fluid container-md\">
\t\t<div class=\"sc-footer-top row flex-column flex-md-row\">
\t\t\t";
        // line 4
        if ((array_key_exists("oct_contact_telephones", $context) &&  !twig_test_empty(($context["oct_contact_telephones"] ?? null)))) {
            // line 5
            echo "\t\t\t<div class=\"sc-footer-phones d-flex flex-column align-items-center align-items-md-start\">
\t\t\t\t<div class=\"sc-footer-title fw-500 text-uppercase d-flex align-items-center mb-3\">
\t\t\t\t\t<img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--footer-phones-title-icon\" alt=\"\" width=\"24\" height=\"24\" class=\"me-2\">
\t\t\t\t\t";
            // line 8
            echo ($context["oct_telephones"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_contact_telephones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_contact_telephone"]) {
                // line 11
                echo "\t\t\t\t<a href=\"tel:";
                echo twig_replace_filter($context["oct_contact_telephone"], [" " => "", "-" => "", "(" => "", ")" => ""]);
                echo "\" class=\"fw-700\">";
                echo $context["oct_contact_telephone"];
                echo "</a>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_contact_telephone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 15
        echo "\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "socials", [], "any", true, true, false, 15) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "socials", [], "any", false, false, false, 15)))) {
            // line 16
            echo "\t\t\t<div class=\"sc-footer-socials d-flex flex-column align-items-center align-items-xl-start\">
\t\t\t\t<div class=\"sc-footer-title fw-500 text-uppercase d-flex align-items-center mb-3\">
\t\t\t\t\t<img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--footer-socials-title-icon\" alt=\"\" width=\"24\" height=\"24\" class=\"me-2\">
\t\t\t\t\t";
            // line 19
            echo ($context["oct_footer_social_tex"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"sc-footer-socials-box d-flex align-items-center justify-content-center justify-content-xl-start\">
\t\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "socials", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 23
                echo "\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"";
                echo ((((twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 23) == "#") || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 23)))) ? ("javascript:;") : (twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 23)));
                echo "\" class=\"sc-footer-socials-item sc-footer-socials-item-";
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 23), ["fa " => "", "fab " => "", "far " => "", "fas " => ""]);
                echo " d-flex align-items-center justify-content-center\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 24);
                echo "\"></i>
\t\t\t\t\t\t";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 25);
                echo "
\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 31
        echo "\t\t\t";
        if (array_key_exists("oct_subscribe", $context)) {
            // line 32
            echo "\t\t\t\t";
            echo ($context["oct_subscribe"] ?? null);
            echo "
\t\t\t";
        }
        // line 34
        echo "\t\t\t<hr class=\"d-none d-md-inline-block d-xl-none order-1 mt-4\">
\t\t</div>
\t\t<div class=\"sc-footer-middle row\">
\t\t\t<hr class=\"mb-md-4\">
\t\t\t";
        // line 38
        if (($context["informations"] ?? null)) {
            // line 39
            echo "\t\t\t<div class=\"col-md-8 col-xl-3\">
\t\t\t\t<div class=\"sc-footer-list sc-footer-middle-list\">
\t\t\t\t\t<div class=\"sc-footer-title fw-500 text-uppercase mb-md-3\">";
            // line 41
            echo ($context["text_information"] ?? null);
            echo "</div>
\t\t\t\t\t<ul class=\"list-unstyled fsz-12 sc-footer-middle-info\">
\t\t\t\t\t\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 44
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 45);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 45);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 45);
                echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 52
        echo "\t\t\t";
        if ((array_key_exists("categories", $context) && ($context["categories"] ?? null))) {
            // line 53
            echo "\t\t\t<div class=\"col-md-4 col-xl-3\">
\t\t\t\t<div class=\"sc-footer-list sc-footer-middle-list\">
\t\t\t\t\t<div class=\"sc-footer-title fw-500 text-uppercase mb-md-3\">";
            // line 55
            echo ($context["oct_footer_category"] ?? null);
            echo "</div>
\t\t\t\t\t<ul class=\"list-unstyled fsz-12 sc-footer-middle-info\">
\t\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 58
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 59);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 59);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 59);
                echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 66
        echo "\t\t\t<div class=\"col-md-8 col-xl-4 pt-md-4 pt-xl-0\">
\t\t\t\t<div class=\"sc-footer-middle-list\">
\t\t\t\t\t<div class=\"sc-footer-title fw-500 text-uppercase mb-md-3\">";
        // line 68
        echo ($context["oct_our_address"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"sc-footer-middle-info\">
\t\t\t\t\t\t";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_address", [], "any", false, true, false, 70), ($context["oct_lang_id"] ?? null), [], "array", true, true, false, 70) && (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_address", [], "any", false, false, false, 70)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["oct_lang_id"] ?? null)] ?? null) : null))) {
            // line 71
            echo "\t\t\t\t\t\t\t<div class=\"sc-footer-address fw-600 fsz-14 mb-3\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_address", [], "any", false, false, false, 71)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["oct_lang_id"] ?? null)] ?? null) : null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_email", [], "any", true, true, false, 73) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_email", [], "any", false, false, false, 73))) {
            // line 74
            echo "\t\t\t\t\t\t\t<a href=\"mailto:";
            echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_email", [], "any", false, false, false, 74);
            echo "\" class=\"sc-footer-email fsz-14\">";
            echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_email", [], "any", false, false, false, 74);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t\t";
        if ((array_key_exists("oct_contact_opens", $context) &&  !twig_test_empty(($context["oct_contact_opens"] ?? null)))) {
            // line 77
            echo "\t\t\t\t\t\t\t<div class=\"sc-footer-shedule mt-3 fw-500 fsz-14\">
\t\t\t\t\t\t\t\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_contact_opens"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_contact_open"]) {
                // line 79
                echo "\t\t\t\t\t\t\t\t";
                echo $context["oct_contact_open"];
                echo "<br>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_contact_open'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t\t<ul class=\"sc-footer-payments-list list-unstyled d-flex align-items-center justify-content-center justify-content-lg-start mt-4\">
\t\t\t\t\t\t\t";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, true, false, 84), "privat24", [], "any", true, true, false, 84) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 84), "privat24", [], "any", false, false, false, 84))) {
            // line 85
            echo "\t\t\t\t\t\t\t<li class=\"sc-footer-payments-item privat24\"></li>
\t\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, true, false, 87), "visa", [], "any", true, true, false, 87) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 87), "visa", [], "any", false, false, false, 87))) {
            // line 88
            echo "\t\t\t\t\t\t\t<li class=\"sc-footer-payments-item visa\"></li>
\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, true, false, 90), "skrill", [], "any", true, true, false, 90) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 90), "skrill", [], "any", false, false, false, 90))) {
            // line 91
            echo "\t\t\t\t\t\t\t<li class=\"sc-footer-payments-item skrill\"></li>
\t\t\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, true, false, 93), "lp", [], "any", true, true, false, 93) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 93), "lp", [], "any", false, false, false, 93))) {
            // line 94
            echo "\t\t\t\t\t\t\t<li class=\"sc-footer-payments-item liqpay\"></li>
\t\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, true, false, 96), "pp", [], "any", true, true, false, 96) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 96), "pp", [], "any", false, false, false, 96))) {
            // line 97
            echo "\t\t\t\t\t\t\t<li class=\"sc-footer-payments-item paypal\"></li>
\t\t\t\t\t\t\t";
        }
        // line 99
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, true, false, 99), "mc", [], "any", true, true, false, 99) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 99), "mc", [], "any", false, false, false, 99))) {
            // line 100
            echo "\t\t\t\t\t\t\t<li class=\"sc-footer-payments-item mastercard\"></li>
\t\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, true, false, 102), "maestro", [], "any", true, true, false, 102) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "payments", [], "any", false, false, false, 102), "maestro", [], "any", false, false, false, 102))) {
            // line 103
            echo "\t\t\t\t\t\t\t<li class=\"sc-footer-payments-item maestro\"></li>
\t\t\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oct_customer_payments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_customer"]) {
            // line 106
            echo "\t\t\t\t\t\t\t<li class=\"sc-footer-payments-item custom-payment\"><img src=\"";
            echo $context["payment_customer"];
            echo "\" alt=\"\"></li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-xl-2 pt-md-4 pt-xl-0\">
                <div class=\"sc-footer-list sc-footer-middle-list\">
                    <div class=\"sc-footer-title fw-500 text-uppercase mb-md-3\">";
        // line 114
        echo ($context["oct_footer_messengers_text"] ?? null);
        echo "</div>
                    <ul class=\"list-unstyled fsz-12 sc-footer-middle-info\">
\t\t\t\t\t\t";
        // line 116
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_telegram", [], "any", true, true, false, 116) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_telegram", [], "any", false, false, false, 116))) {
            // line 117
            echo "                        <li class=\"d-flex align-items-center mb-2\">
\t\t\t\t\t\t\t<img class=\"me-2\" width=\"20\" height=\"20\" src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--telegram-icon\" alt=\"\">
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"https://t.me/";
            // line 119
            echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_telegram", [], "any", false, false, false, 119);
            echo "\" target=\"_blank\">Telegram</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_viber", [], "any", true, true, false, 122) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_viber", [], "any", false, false, false, 122))) {
            // line 123
            echo "                        <li class=\"d-flex align-items-center mb-2\">
\t\t\t\t\t\t\t<img class=\"me-2\" width=\"20\" height=\"20\" src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--viber-icon\" alt=\"\">
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"viber://chat?number=+";
            // line 125
            echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_viber", [], "any", false, false, false, 125);
            echo "\" target=\"_blank\" class=\"d-none d-xl-inline\">Viber</a>
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"viber://add?number=";
            // line 126
            echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_viber", [], "any", false, false, false, 126);
            echo "\" target=\"_blank\" class=\"d-xl-none\">Viber</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 129
        echo "\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_whatsapp", [], "any", true, true, false, 129) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 129))) {
            // line 130
            echo "                        <li class=\"d-flex align-items-center mb-2\">
\t\t\t\t\t\t\t<img class=\"me-2\" width=\"20\" height=\"20\" src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--whatsapp-icon\" alt=\"\">
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"https://api.whatsapp.com/send?phone=";
            // line 132
            echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 132);
            echo "\" target=\"_blank\">WhatsApp</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 135
        echo "\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_messenger", [], "any", true, true, false, 135) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_messenger", [], "any", false, false, false, 135))) {
            // line 136
            echo "                        <li class=\"d-flex align-items-center mb-2\">
\t\t\t\t\t\t\t<img class=\"me-2\" width=\"20\" height=\"20\" src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--messenger-icon\" alt=\"\">
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"https://m.me/";
            // line 138
            echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_messenger", [], "any", false, false, false, 138);
            echo "\" target=\"_blank\">Messenger</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 141
        echo "\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_skype", [], "any", true, true, false, 141) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_skype", [], "any", false, false, false, 141))) {
            // line 142
            echo "                        <li class=\"d-flex align-items-center mb-2\">
\t\t\t\t\t\t\t<img class=\"me-2\" width=\"20\" height=\"20\" src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--skype-icon\" alt=\"\">
\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"skype:";
            // line 144
            echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_skype", [], "any", false, false, false, 144);
            echo "?chat\">Skype</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 147
        echo "                    </ul>
                </div>
            </div>
            <hr class=\"mt-md-4 d-none d-md-inline-block\">
\t\t</div>
\t\t<div class=\"row sc-footer-credits\">
\t\t\t<div class=\"text-center fsz-12\">";
        // line 153
        echo ($context["powered"] ?? null);
        echo "</div>
\t\t</div>
\t</div>
\t";
        // line 156
        if ((array_key_exists("oct_feedback_data", $context) && ($context["oct_feedback_data"] ?? null))) {
            // line 157
            echo "\t<div id=\"sc_fixed_contact_substrate\"></div>
\t<div id=\"sc_fixed_contact_button\" class=\"d-flex align-items-center justify-content-center\">
\t\t<div class=\"sc-fixed-contact-pulsation\"></div>
\t\t<div class=\"sc-fixed-contact-icon text-center d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t<span class=\"sc-fixed-contact-text d-none\">";
            // line 162
            echo ($context["oct_feedback_text"] ?? null);
            echo "</span>
\t\t</div>
\t\t<div class=\"sc-fixed-contact-dropdown d-flex flex-column align-items-start\">
\t\t\t";
            // line 165
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_messenger", [], "any", true, true, false, 165) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_messenger", [], "any", false, false, false, 165)) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_messenger", [], "any", true, true, false, 165) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_messenger", [], "any", false, false, false, 165)))) {
                // line 166
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"https://m.me/";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_messenger", [], "any", false, false, false, 166);
                echo "\" target=\"_blank\" class=\"sc-fixed-contact-item d-flex align-items-center\"><span class=\"sc-fixed-contact-item-icon sc-fixed-contact-messenger d-flex align-items-center justify-content-center\"><i class=\"fab fa-facebook-messenger\"></i></span><span>Messenger</span></a>
\t\t\t";
            }
            // line 168
            echo "
\t\t\t";
            // line 169
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_viber", [], "any", true, true, false, 169) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_viber", [], "any", false, false, false, 169)) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_viber", [], "any", true, true, false, 169) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_viber", [], "any", false, false, false, 169)))) {
                // line 170
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"viber://chat?number=+";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_viber", [], "any", false, false, false, 170);
                echo "\" target=\"_blank\" class=\"sc-fixed-contact-item d-none d-xl-flex align-items-center sc-fixed-contact-viber-desktop\"><span class=\"sc-fixed-contact-item-icon sc-fixed-contact-viber d-flex align-items-center justify-content-center\"><i class=\"fab fa-viber\"></i></span><span>Viber</span></a>
\t\t\t<a rel=\"noopener noreferrer\" href=\"viber://add?number=";
                // line 171
                echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_viber", [], "any", false, false, false, 171);
                echo "\" target=\"_blank\" class=\"sc-fixed-contact-item d-flex d-xl-none align-items-center sc-fixed-contact-viber-mobile\"><span class=\"sc-fixed-contact-item-icon sc-fixed-contact-viber d-flex align-items-center justify-content-center\"><i class=\"fab fa-viber\"></i></span><span>Viber</span></a>
\t\t\t";
            }
            // line 173
            echo "
\t\t\t";
            // line 174
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_telegram", [], "any", true, true, false, 174) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_telegram", [], "any", false, false, false, 174)) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_telegram", [], "any", true, true, false, 174) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_telegram", [], "any", false, false, false, 174)))) {
                // line 175
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"https://t.me/";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_telegram", [], "any", false, false, false, 175);
                echo "\" target=\"_blank\" class=\"sc-fixed-contact-item d-flex align-items-center\"><span class=\"sc-fixed-contact-item-icon sc-fixed-contact-telegram d-flex align-items-center justify-content-center\"><i class=\"fab fa-telegram\"></i></span><span>Telegram</span></a>
\t\t\t";
            }
            // line 177
            echo "
\t\t\t";
            // line 178
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_skype", [], "any", true, true, false, 178) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_skype", [], "any", false, false, false, 178)) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_skype", [], "any", true, true, false, 178) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_skype", [], "any", false, false, false, 178)))) {
                // line 179
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"skype:";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_skype", [], "any", false, false, false, 179);
                echo "?chat\" class=\"sc-fixed-contact-item d-flex align-items-center\"><span class=\"sc-fixed-contact-item-icon sc-fixed-contact-skype d-flex align-items-center justify-content-center\"><i class=\"fab fa-skype\"></i></span><span>Skype</span></a>
\t\t\t";
            }
            // line 181
            echo "
\t\t\t";
            // line 182
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_whatsapp", [], "any", true, true, false, 182) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_whatsapp", [], "any", false, false, false, 182)) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_whatsapp", [], "any", true, true, false, 182) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 182)))) {
                // line 183
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"https://api.whatsapp.com/send?phone=";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 183);
                echo "\" target=\"_blank\" class=\"sc-fixed-contact-item d-flex align-items-center\"><span class=\"sc-fixed-contact-item-icon sc-fixed-contact-whatsapp d-flex align-items-center justify-content-center\"><i class=\"fab fa-whatsapp\"></i></span><span>WhatsApp</span></a>
\t\t\t";
            }
            // line 185
            echo "
\t\t\t";
            // line 186
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_email", [], "any", true, true, false, 186) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_email", [], "any", false, false, false, 186)) && (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_email", [], "any", true, true, false, 186) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_email", [], "any", false, false, false, 186)))) {
                // line 187
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"mailto:";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_email", [], "any", false, false, false, 187);
                echo "\" class=\"sc-fixed-contact-item d-flex align-items-center\"><span class=\"sc-fixed-contact-item-icon sc-fixed-contact-email d-flex align-items-center justify-content-center\"><i class=\"far fa-envelope\"></i></span><span>";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_email", [], "any", false, false, false, 187);
                echo "</span></a>
\t\t\t";
            }
            // line 189
            echo "
\t\t\t";
            // line 190
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_callback", [], "any", true, true, false, 190) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_callback", [], "any", false, false, false, 190)) && (array_key_exists("oct_popup_call_phone_status", $context) && ($context["oct_popup_call_phone_status"] ?? null)))) {
                // line 191
                echo "\t\t\t<div id=\"uptocall-mini\" onclick=\"octPopupCallPhone()\" class=\"sc-fixed-contact-item d-flex align-items-center\"><span class=\"sc-fixed-contact-item-icon sc-fixed-contact-call d-flex align-items-center justify-content-center\"><i class=\"fas fa-phone\"></i></span><span>";
                echo ($context["oct_call_phone"] ?? null);
                echo "</span></div>
\t\t\t";
            }
            // line 193
            echo "
\t\t\t";
            // line 194
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_contact_link", [], "any", true, true, false, 194) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_contact_link", [], "any", false, false, false, 194))) {
                // line 195
                echo "\t\t\t<a href=\"";
                echo ($context["contact"] ?? null);
                echo "\" class=\"sc-fixed-contact-item d-flex align-items-center\"><span class=\"sc-fixed-contact-item-icon sc-fixed-contact-contacts d-flex align-items-center justify-content-center\"><i class=\"fas fa-address-book\"></i></span><span>";
                echo ($context["text_contact"] ?? null);
                echo "</span></a>
\t\t\t";
            }
            // line 197
            echo "\t\t</div>
\t</div>
\t";
        }
        // line 200
        echo "</footer>
";
        // line 201
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "footer_totop", [], "any", true, true, false, 201) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "footer_totop", [], "any", false, false, false, 201))) {
            // line 202
            echo "\t<button id=\"back-top\" class=\"br-6\" type=\"button\"><i class=\"fas fa-chevron-up\"></i></button>
\t<script>
\t\tdocument.addEventListener(\"scroll\", () => {
\t\t\ttoTopButton();
\t\t});
\t</script>
";
        }
        // line 209
        echo "<div id=\"overlay\"></div>
";
        // line 210
        if ((array_key_exists("oct_subscribe_status", $context) && ($context["oct_subscribe_status"] ?? null))) {
            // line 211
            echo "<script>
\$(function() {
\tif (getOCTCookie('oct_subscribe') == 'undefined') {
\t\tsetTimeout(function(){
\t\t\toctPopupSubscribe();
\t\t}, ";
            // line 216
            echo ((twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "seconds", [], "any", false, false, false, 216)) ? (twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "seconds", [], "any", false, false, false, 216)) : ("10000"));
            echo ");

\t\tconst date = new Date('";
            // line 218
            echo ($context["oct_subscribe_day_now"] ?? null);
            echo "'.replace(/-/g, \"/\"));
\t\tdate.setTime(date.getTime() + (";
            // line 219
            echo ((twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "expire", [], "any", false, false, false, 219)) ? (twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "expire", [], "any", false, false, false, 219)) : ("1"));
            echo " * 24 * 60 * 60 * 1000));
\t\tdocument.cookie = 'oct_subscribe=1; path=/; expires=' + date.toUTCString();
\t}
});
</script>
";
        }
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 226
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "<div class=\"modal-holder\"></div>
";
        // line 229
        if ((array_key_exists("oct_isiOS", $context) && ($context["oct_isiOS"] ?? null))) {
            // line 230
            echo "<script>
var elementsA = document.getElementsByTagName('a');
for(var i = 0; i < elementsA.length; i++){
    elementsA[i].addEventListener('touchend',function(){});
}

var elementsB = document.getElementsByTagName('button');
for(var i = 1; i < elementsB.length; i++){
    elementsB[i].addEventListener('touchend',function(){});
}

var elementsI = document.getElementsByTagName('input');
for(var i = 0; i < elementsI.length; i++){
    elementsI[i].addEventListener('touchend',function(){});
}

var elementsS = document.getElementsByTagName('span');
for(var i = 0; i < elementsS.length; i++){
    elementsS[i].addEventListener('touchend',function(){});
}
</script>
";
        }
        // line 252
        if ((array_key_exists("oct_analytics_targets", $context) &&  !twig_test_empty(($context["oct_analytics_targets"] ?? null)))) {
            // line 253
            echo "\t<script>
\t";
            // line 254
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_analytics_targets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["target"]) {
                // line 255
                echo "\t \t\$('body').on('click', '";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["target"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["atribute"] ?? null) : null);
                echo "', function() {
\t\t    ";
                // line 256
                if ((twig_get_attribute($this->env, $this->source, $context["target"], "google", [], "array", true, true, false, 256) && (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["target"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["google"] ?? null) : null))) {
                    // line 257
                    echo "\t\t\tgtag('event', '";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["target"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["action"] ?? null) : null);
                    echo "', {
\t\t\t  'event_category' : '";
                    // line 258
                    echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["target"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["category"] ?? null) : null);
                    echo "'
\t\t\t});
\t\t    ";
                }
                // line 261
                echo "\t\t});
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['target'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "\t</script>
";
        }
        // line 265
        if (((array_key_exists("oct_policy_value", $context) &&  !twig_test_empty(($context["oct_policy_value"] ?? null))) && ($context["oct_policy_value"] ?? null))) {
            // line 266
            echo "<script>
function get_oct_policy() {
\t\$.ajax({
\t\turl: \"index.php?route=octemplates/main/oct_functions/getOctPolicy\",
\t\ttype: \"post\",
\t\tdataType: \"json\",
\t\tcache: false,
\t\tsuccess: function(t) {
\t\t\tif (t['text_oct_policy']) {
\t\t\t\tvar html = '<div id=\"oct-policy\" class=\"fixed-bottom\"><div class=\"container\"><div class=\"row\"><div class=\"col-lg-12\"><div class=\"content-block-p24 d-flex align-items-center justify-content-between flex-column flex-md-row\"><div class=\"oct-policy-text dark-text fsz-12 mb-3 mb-md-0\">'+ t['text_oct_policy'] +'</div><button type=\"button\" id=\"oct-policy-btn\" class=\"sc-btn sc-btn-primary small br-4\">'+ t['oct_policy_accept'] +'</button></div></div></div></div></div>';

\t\t\t\t\$('body').append(html);

\t\t\t\t\$('#oct-policy-btn').on('click', function () {
\t\t\t\t\t\$('#oct-policy').addClass('hidden');
\t\t\t\t\tconst date = new Date(t['oct_policy_day_now'].replace(/-/g, \"/\"));
\t\t\t\t\tdate.setTime(date.getTime() + (t['oct_max_day'] * 24 * 60 * 60 * 1000));
\t\t\t\t\tdocument.cookie = t['oct_policy_value']+'=1; path=/; expires=' + date.toUTCString();
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(e, t, i) {
\t\t\tconsole.log(\"error get_oct_policy\");
\t\t}
\t});
}

\$(function() {
\tif (getOCTCookie('";
            // line 294
            echo ($context["oct_policy_value"] ?? null);
            echo "') == 'undefined') {
\t\tget_oct_policy();
\t}
});
</script>
";
        }
        // line 300
        if ((array_key_exists("oct_jscode", $context) && ($context["oct_jscode"] ?? null))) {
            // line 301
            echo "\t<script>
\t";
            // line 302
            echo ($context["oct_jscode"] ?? null);
            echo "
\t</script>
";
        }
        // line 305
        echo "<script async src=\"catalog/view/theme/oct_showcase/js/oct-fonts.js\"></script>
<link rel=\"stylesheet\" href=\"catalog/view/theme/oct_showcase/stylesheet/all.css\"";
        // line 306
        if (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "minify", [], "any", true, true, false, 306)) {
            echo " media=\"print\" onload=\"this.media='all'\"";
        } else {
            echo " media=\"all\"";
        }
        echo ">
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  709 => 306,  706 => 305,  700 => 302,  697 => 301,  695 => 300,  686 => 294,  656 => 266,  654 => 265,  650 => 263,  643 => 261,  637 => 258,  632 => 257,  630 => 256,  625 => 255,  621 => 254,  618 => 253,  616 => 252,  592 => 230,  590 => 229,  587 => 228,  578 => 226,  574 => 225,  565 => 219,  561 => 218,  556 => 216,  549 => 211,  547 => 210,  544 => 209,  535 => 202,  533 => 201,  530 => 200,  525 => 197,  517 => 195,  515 => 194,  512 => 193,  506 => 191,  504 => 190,  501 => 189,  493 => 187,  491 => 186,  488 => 185,  482 => 183,  480 => 182,  477 => 181,  471 => 179,  469 => 178,  466 => 177,  460 => 175,  458 => 174,  455 => 173,  450 => 171,  445 => 170,  443 => 169,  440 => 168,  434 => 166,  432 => 165,  426 => 162,  419 => 157,  417 => 156,  411 => 153,  403 => 147,  397 => 144,  393 => 142,  390 => 141,  384 => 138,  380 => 136,  377 => 135,  371 => 132,  367 => 130,  364 => 129,  358 => 126,  354 => 125,  350 => 123,  347 => 122,  341 => 119,  337 => 117,  335 => 116,  330 => 114,  322 => 108,  313 => 106,  308 => 105,  304 => 103,  301 => 102,  297 => 100,  294 => 99,  290 => 97,  287 => 96,  283 => 94,  280 => 93,  276 => 91,  273 => 90,  269 => 88,  266 => 87,  262 => 85,  260 => 84,  257 => 83,  253 => 81,  244 => 79,  240 => 78,  237 => 77,  234 => 76,  226 => 74,  223 => 73,  217 => 71,  215 => 70,  210 => 68,  206 => 66,  200 => 62,  187 => 59,  184 => 58,  180 => 57,  175 => 55,  171 => 53,  168 => 52,  162 => 48,  149 => 45,  146 => 44,  142 => 43,  137 => 41,  133 => 39,  131 => 38,  125 => 34,  119 => 32,  116 => 31,  111 => 28,  102 => 25,  98 => 24,  91 => 23,  87 => 22,  81 => 19,  76 => 16,  73 => 15,  69 => 13,  58 => 11,  54 => 10,  49 => 8,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/common/footer.twig", "");
    }
}
