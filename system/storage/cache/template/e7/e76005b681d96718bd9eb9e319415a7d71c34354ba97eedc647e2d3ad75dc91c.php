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

/* oct_showcase/template/common/header.twig */
class __TwigTemplate_25dd9cb9137ac8861ccca0eb2aa4f3696f574b293bbfd5f423278c341d181090 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"";
        if (($context["body_class"] ?? null)) {
            echo " class=\"body-product\"";
        }
        echo ">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
";
        // line 13
        if (((twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "open_graph", [], "any", true, true, false, 13) && twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "open_graph", [], "any", false, false, false, 13)) &&  !twig_test_empty(($context["octOpenGraphs"] ?? null)))) {
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["octOpenGraphs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["octOpenGraph"]) {
                // line 15
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["octOpenGraph"], "content", [], "any", false, false, false, 15))) {
                    // line 16
                    echo "<meta property=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["octOpenGraph"], "property", [], "any", false, false, false, 16);
                    echo "\" content=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["octOpenGraph"], "content", [], "any", false, false, false, 16);
                    echo "\" />
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['octOpenGraph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 20
        if ((array_key_exists("oct_analytics_google_webmaster_code", $context) &&  !twig_test_empty(($context["oct_analytics_google_webmaster_code"] ?? null)))) {
            // line 21
            echo "<meta name=\"google-site-verification\" content=\"";
            echo ($context["oct_analytics_google_webmaster_code"] ?? null);
            echo "\" />
";
        }
        // line 23
        if ((array_key_exists("oct_analytics_googletm_code", $context) &&  !twig_test_empty(($context["oct_analytics_googletm_code"] ?? null)))) {
            // line 24
            echo "<!-- Google Tag Manager -->
<script id=\"octGtm\">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','";
            // line 29
            echo ($context["oct_analytics_googletm_code"] ?? null);
            echo "');</script>
<!-- End Google Tag Manager -->
";
        }
        // line 32
        echo "<base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 33
        if (($context["robots"] ?? null)) {
            // line 34
            echo "<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
";
        }
        // line 36
        if (($context["description"] ?? null)) {
            // line 37
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 39
        if (($context["keywords"] ?? null)) {
            // line 40
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 42
        if ((array_key_exists("oct_theme_color", $context) && ($context["oct_theme_color"] ?? null))) {
            // line 43
            echo "<meta name=\"theme-color\" content=\"";
            echo ($context["oct_theme_color"] ?? null);
            echo "\"/>
";
        }
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 46
            if ((((array_key_exists("oct_preload_styles", $context) && ($context["oct_preload_styles"] ?? null)) && array_key_exists("oct_minify", $context)) && ($context["oct_minify"] ?? null))) {
                // line 47
                echo "<link rel=\"preload\" as=\"style\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 47);
                echo "\">
";
            }
            // line 49
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 49);
            echo "\" rel=\"stylesheet\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 49);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        if (($context["oct_preloads"] ?? null)) {
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_preloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_preload"]) {
                // line 53
                echo "<link rel=\"preload\" as=\"image\" href=\"";
                echo $context["oct_preload"];
                echo "\">
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_preload'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 57
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 60
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 60);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 60);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 63
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "<script";
        if ((((array_key_exists("oct_footer_scripts", $context) && ($context["oct_footer_scripts"] ?? null)) && array_key_exists("oct_minify", $context)) && ($context["oct_minify"] ?? null))) {
            echo " id=\"dataFonts\"";
        }
        echo ">
    let octFonts = localStorage.getItem('octFonts');
    if (octFonts !== null) {
        var octHead  = document.getElementsByTagName('head')[0];
        var octLink  = document.createElement('link');
        octLink.rel  = 'stylesheet';
        octLink.type = 'text/css';
        octLink.href = location.protocol + '//' + location.host + '/catalog/view/theme/oct_showcase/stylesheet/oct-fonts.css';
        octLink.media = 'all';
        octHead.appendChild(octLink);
    }
</script>
</head>
<body>
";
        // line 79
        if ((array_key_exists("oct_analytics_googletm_code", $context) &&  !twig_test_empty(($context["oct_analytics_googletm_code"] ?? null)))) {
            // line 80
            echo "<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=";
            // line 81
            echo ($context["oct_analytics_googletm_code"] ?? null);
            echo "\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
";
        }
        // line 84
        echo "<div id=\"sidebar\" class=\"sidebar d-xl-none fade\">
    <button type=\"button\" class=\"sc-btn sc-btn-with-icon no-btn br-4 ms-auto sc-btn-close\" data-sidebar=\"close\" aria-label=\"Close\">
        <span class=\"sc-btn-icon sc-btn-icon-close\"></span>
    </button>
    <div class=\"sidebar-header py-2 ps-4 pe-2 fw-700 dark-text d-flex align-items-center\">
        <span class=\"sidebar-header-text\">";
        // line 89
        echo ($context["oct_menu"] ?? null);
        echo "</span>
    </div>
    <div id=\"sc_sidebar_content\" class=\"sidebar-inner\"></div>
</div>
";
        // line 93
        if (((array_key_exists("oct_information_bar_value", $context) &&  !twig_test_empty(($context["oct_information_bar_value"] ?? null))) && ($context["oct_information_bar_value"] ?? null))) {
            // line 94
            echo "<div id=\"oct-infobar\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 d-flex align-items-center justify-content-between flex-column flex-md-row py-3 py-md-4\">
                <div class=\"oct-infobar-text fsz-12\">";
            // line 98
            echo ($context["text_oct_information_bar"] ?? null);
            echo "</div>
                <button type=\"button\" aria-label=\"Information\" id=\"oct-infobar-btn\" class=\"sc-btn small br-4 mt-3 mt-md-0 ms-md-4\">";
            // line 99
            echo ($context["oct_info_bar_close"] ?? null);
            echo "</button>
            </div>
        </div>
    </div>
</div>
<script>
\$('#oct-infobar-btn').on('click', function () {
    \$('#oct-infobar').addClass('hidden');
    const date = new Date('";
            // line 107
            echo ($context["oct_information_bar_day_now"] ?? null);
            echo "'.replace(/-/g, \"/\"));
    date.setTime(date.getTime() + (";
            // line 108
            echo ($context["oct_info_max_day"] ?? null);
            echo " * 24 * 60 * 60 * 1000));
    document.cookie = '";
            // line 109
            echo ($context["oct_information_bar_value"] ?? null);
            echo "=1; path=/; expires=' + date.toUTCString();
});
</script>
<style>
#oct-infobar {background:";
            // line 113
            echo ($context["oct_information_bar_background"] ?? null);
            echo ";}
.oct-infobar-text {color:";
            // line 114
            echo ($context["oct_information_bar_color_text"] ?? null);
            echo ";}
.oct-infobar-text a {color:";
            // line 115
            echo ($context["oct_information_bar_color_url"] ?? null);
            echo ";}
#oct-infobar-btn {background:";
            // line 116
            echo ($context["oct_information_bar_background_button"] ?? null);
            echo ";color:";
            echo ($context["oct_information_bar_color_text_button"] ?? null);
            echo ";}
#oct-infobar-btn:hover {background:";
            // line 117
            echo ($context["oct_information_bar_background_button_hover"] ?? null);
            echo ";color:";
            echo ($context["oct_information_bar_color_text_button_hover"] ?? null);
            echo ";}
</style>
";
        }
        // line 120
        echo "<nav id=\"top\">
\t<div class=\"container-fluid container-xxl d-flex align-items-center justify-content-between h-100\">
        <div class=\"top-left d-flex align-items-center\">
            ";
        // line 123
        if (($context["logo"] ?? null)) {
            // line 124
            echo "                <div id=\"logo\" class=\"d-flex align-items-center justify-content-center order-1 order-xl-0\">
                    ";
            // line 125
            if ((array_key_exists("oct_home", $context) && ($context["oct_home"] ?? null))) {
                // line 126
                echo "                        <span><img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-fluid\"";
                if ((array_key_exists("logo_width", $context) && ($context["logo_width"] ?? null))) {
                    echo " width=\"";
                    echo ($context["logo_width"] ?? null);
                    echo "\"";
                }
                if ((array_key_exists("logo_height", $context) && ($context["logo_height"] ?? null))) {
                    echo " height=\"";
                    echo ($context["logo_height"] ?? null);
                    echo "\"";
                }
                echo " /></span>
                    ";
            } else {
                // line 128
                echo "                        <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">
                            <img src=\"";
                // line 129
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-fluid\"";
                if ((array_key_exists("logo_width", $context) && ($context["logo_width"] ?? null))) {
                    echo " width=\"";
                    echo ($context["logo_width"] ?? null);
                    echo "\"";
                }
                if ((array_key_exists("logo_height", $context) && ($context["logo_height"] ?? null))) {
                    echo " height=\"";
                    echo ($context["logo_height"] ?? null);
                    echo "\"";
                }
                echo " />
                        </a>
                    ";
            }
            // line 132
            echo "                </div>
            ";
        } else {
            // line 134
            echo "                <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
            ";
        }
        // line 136
        echo "            <button id=\"mobile-menu-button\" type=\"button\" class=\"sc-btn sc-btn-with-icon no-btn br-4 sc-top-btn d-xl-none order-0 order-xl-1 ms-1 me-3\" onclick=\"scSidebar('";
        echo ($context["oct_menu"] ?? null);
        echo "', 'menu');\" aria-label=\"Menu\">
                <span class=\"sc-btn-icon sc-btn-icon-menu\"></span>
            </button>
            <button id=\"mobile-search-button\" type=\"button\" class=\"sc-btn sc-btn-with-icon no-btn br-4 sc-top-btn d-md-none order-0 order-xl-1 me-3\" onclick=\"scSidebar('";
        // line 139
        echo ($context["oct_search"] ?? null);
        echo "', 'search');\" aria-label=\"Search\">
                <span class=\"sc-btn-icon sc-btn-icon-search\"></span>
            </button>
            ";
        // line 142
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_address", [], "any", false, true, false, 142), ($context["oct_lang_id"] ?? null), [], "array", true, true, false, 142) && (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_address", [], "any", false, false, false, 142)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["oct_lang_id"] ?? null)] ?? null) : null))) {
            // line 143
            echo "                <button id=\"mobile-locations-button\" type=\"button\" class=\"sc-btn sc-btn-with-icon no-btn br-4 sc-top-btn d-md-none order-2 me-3 ms-auto\" onclick=\"scSidebar('";
            echo ($context["oct_our_address"] ?? null);
            echo "', 'locations');\" aria-label=\"Locations\">
                    <span class=\"sc-btn-icon sc-btn-icon-location\"></span>
                </button>
                <button type=\"button\" class=\"sc-btn sc-btn-with-icon no-btn br-4 sc-top-btn d-md-none order-3\" onclick=\"scSidebar('";
            // line 146
            echo ($context["oct_menu"] ?? null);
            echo "', 'menu', 'account');\" aria-label=\"Account\">
            ";
        } else {
            // line 148
            echo "                <button type=\"button\" class=\"sc-btn sc-btn-with-icon no-btn br-4 sc-top-btn d-md-none order-3 ms-auto\" onclick=\"scSidebar('";
            echo ($context["oct_menu"] ?? null);
            echo "', 'menu', 'account');\" aria-label=\"Account\">
            ";
        }
        // line 150
        echo "                <span class=\"sc-btn-icon sc-btn-icon-account\"></span>
            </button>
            ";
        // line 152
        if ((array_key_exists("header_informations", $context) &&  !twig_test_empty(($context["header_informations"] ?? null)))) {
            // line 153
            echo "                <ul class=\"top-left-links list-unstyled fw-600 fsz-12 d-none d-xl-flex align-items-center\">
                    ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header_informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["header_link"]) {
                // line 155
                echo "                    <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["header_link"], "href", [], "any", false, false, false, 155);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["header_link"], "title", [], "any", false, false, false, 155);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                </ul>
            ";
        }
        // line 159
        echo "        </div>
        <div class=\"top-right d-none d-md-flex align-items-center pe-md-3\">
            ";
        // line 161
        if (((array_key_exists("contact_open", $context) && ($context["contact_open"] ?? null)) || (array_key_exists("oct_contact_telephones", $context) &&  !twig_test_empty(($context["oct_contact_telephones"] ?? null))))) {
            // line 162
            echo "                <div class=\"sc-dropdown-box\">
                    <div class=\"sc-dropdown-toggle fw-700 fsz-14\">";
            // line 163
            echo ($context["telephone"] ?? null);
            echo "</div>
                    <div class=\"sc-dropdown\">
                        <div class=\"sc-dropdown-inner br-4 p-3\">
                            ";
            // line 166
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_open", [], "any", false, true, false, 166), ($context["oct_lang_id"] ?? null), [], "array", true, true, false, 166) && (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_open", [], "any", false, false, false, 166)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["oct_lang_id"] ?? null)] ?? null) : null))) {
                // line 167
                echo "                                <div class=\"sc-dropdown-inner-title d-flex align-items-center mb-2\">
                                    <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--dropdown-shedule-icon\" alt=\"\" width=\"24\" height=\"24\">
                                    <span class=\"fw-500 dark-text ms-2\">";
                // line 169
                echo ($context["oct_working_hours"] ?? null);
                echo ":</span>
                                </div>
                                <ul class=\"list-unstyled fsz-14 light-text\">
                                    ";
                // line 172
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_contact_opens"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["contact_open"]) {
                    // line 173
                    echo "                                        <li>";
                    echo $context["contact_open"];
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact_open'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "                                </ul>
                            ";
            }
            // line 177
            echo "                            ";
            if ((array_key_exists("oct_contact_telephones", $context) &&  !twig_test_empty(($context["oct_contact_telephones"] ?? null)))) {
                // line 178
                echo "                                <div class=\"sc-header-location-phones\">
                                    <div class=\"sc-dropdown-inner-title d-flex align-items-center mt-3 mb-2\">
                                        <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--dropdown-phones-icon\" alt=\"\" width=\"24\" height=\"24\">
                                        <span class=\"fw-500 dark-text ms-2\">";
                // line 181
                echo ($context["oct_our_call"] ?? null);
                echo "</span>
                                    </div>
                                    <ul class=\"list-unstyled\">
                                        ";
                // line 184
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_contact_telephones"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oct_contact_telephone"]) {
                    // line 185
                    echo "                                            <li class=\"mb-1\"><a href=\"tel:";
                    echo twig_replace_filter($context["oct_contact_telephone"], [" " => "", "-" => "", "(" => "", ")" => ""]);
                    echo "\" class=\"blue-link\">";
                    echo $context["oct_contact_telephone"];
                    echo "</a></li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_contact_telephone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "                                    </ul>
                                </div>
                            ";
            }
            // line 190
            echo "                            <a href=\"";
            echo ($context["contact"] ?? null);
            echo "\" class=\"sc-btn sc-btn-primary small br-4 w-100 mt-3\">";
            echo ($context["oct_go_contact_text"] ?? null);
            echo "</a>
                        </div>
                    </div>
                </div>
                ";
            // line 194
            if ((array_key_exists("oct_popup_call_phone_status", $context) && ($context["oct_popup_call_phone_status"] ?? null))) {
                // line 195
                echo "                    <span class=\"fsz-12 fw-600 popup-call-trigger\" onclick=\"octPopupCallPhone();\">";
                echo ($context["oct_call_phone"] ?? null);
                echo "</span>
                ";
            }
            // line 197
            echo "            ";
        }
        // line 198
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "header_lang", [], "any", true, true, false, 198)) {
            // line 199
            echo "\t\t\t    ";
            echo ($context["language"] ?? null);
            echo "
            ";
        }
        // line 201
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "header_cur", [], "any", true, true, false, 201)) {
            // line 202
            echo "\t\t\t    ";
            echo ($context["currency"] ?? null);
            echo "
            ";
        }
        // line 204
        echo "        </div>
\t</div>
</nav>
<header class=\"header py-2";
        // line 207
        if ((array_key_exists("oct_expand_menu", $context) && ($context["oct_expand_menu"] ?? null))) {
            echo " with-slideshow";
        }
        echo "\">
    <div class=\"container-fluid container-xl position-relative\">
        <div class=\"row\">
            <div class=\"col-md-3 d-none d-xl-flex\">
                <button id=\"menuToggleButton\" type=\"button\" class=\"sc-btn sc-btn-secondary br-4 py-2 px-3 w-100 fsz-14\">
                    <span class=\"sc-btn-icon sc-btn-icon-catalog\"></span>
                    <span class=\"sc-btn-text\">";
        // line 213
        echo ($context["oct_menu_catalog"] ?? null);
        echo "</span>
                </button>
            </div>
            <div class=\"col-12 col-xl-9\">
                <div class=\"d-flex align-items-center header-search-box\">
                    ";
        // line 218
        echo ($context["search"] ?? null);
        echo "
                    <div class=\"header-buttons d-flex justify-content-between justify-content-md-end align-items-center pe-md-3\">
                        <button type=\"button\" class=\"sc-btn sc-btn-with-icon no-btn d-flex flex-column justify-content-between align-items-center d-md-none header-buttons-catalog align-self-stretch\" onclick=\"scSidebar('";
        // line 220
        echo ($context["oct_menu"] ?? null);
        echo "', 'menu', 'menu');\">
                            <svg width=\"17\" height=\"16\" viewBox=\"0 0 17 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <g clip-path=\"url(#clip0_2678_3096)\">
                                    <path d=\"M6.0999 0.399994H2.0999C1.43716 0.399994 0.899902 0.937252 0.899902 1.59999V5.59999C0.899902 6.26274 1.43716 6.79999 2.0999 6.79999H6.0999C6.76264 6.79999 7.2999 6.26274 7.2999 5.59999V1.59999C7.2999 0.937252 6.76264 0.399994 6.0999 0.399994Z\" stroke=\"#1C1C28\"/>
                                    <path d=\"M14.9002 0.399994H10.9002C10.2375 0.399994 9.7002 0.937252 9.7002 1.59999V5.59999C9.7002 6.26274 10.2375 6.79999 10.9002 6.79999H14.9002C15.5629 6.79999 16.1002 6.26274 16.1002 5.59999V1.59999C16.1002 0.937252 15.5629 0.399994 14.9002 0.399994Z\" stroke=\"#1C1C28\"/>
                                    <path d=\"M14.9002 9.20001H10.9002C10.2375 9.20001 9.7002 9.73727 9.7002 10.4V14.4C9.7002 15.0628 10.2375 15.6 10.9002 15.6H14.9002C15.5629 15.6 16.1002 15.0628 16.1002 14.4V10.4C16.1002 9.73727 15.5629 9.20001 14.9002 9.20001Z\" stroke=\"#1C1C28\"/>
                                    <path d=\"M6.0999 9.20001H2.0999C1.43716 9.20001 0.899902 9.73727 0.899902 10.4V14.4C0.899902 15.0628 1.43716 15.6 2.0999 15.6H6.0999C6.76264 15.6 7.2999 15.0628 7.2999 14.4V10.4C7.2999 9.73727 6.76264 9.20001 6.0999 9.20001Z\" stroke=\"#1C1C28\"/>
                                </g>
                                <defs>
                                    <clipPath id=\"clip0_2678_3096\">
                                    <rect width=\"16\" height=\"16\" fill=\"white\" transform=\"translate(0.5)\"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class=\"text-lowercase\">";
        // line 234
        echo ($context["oct_catalog"] ?? null);
        echo "</span>
                        </button>
                        ";
        // line 236
        if (($context["product_views_count"] ?? null)) {
            // line 237
            echo "                            <button type=\"button\" class=\"sc-btn sc-btn-with-icon no-btn d-flex flex-column justify-content-between align-items-center d-md-none header-buttons-viewed align-self-stretch\" onclick=\"scSidebar('";
            echo ($context["oct_menu"] ?? null);
            echo "', 'menu', 'viewed');\">
                                <svg viewBox=\"0 0 16 16\" width=\"16\" height=\"16\">
                                    <use href=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--header-btns-viewed\"></use>
                                </svg>
                                <span class=\"text-lowercase\">";
            // line 241
            echo ($context["oct_sidebar_views"] ?? null);
            echo "</span>
                                <span class=\"header-buttons-cart-quantity px-1\">";
            // line 242
            echo ($context["viewed_total"] ?? null);
            echo "</span>
                            </button>
                        ";
        }
        // line 245
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "header_account", [], "any", true, true, false, 245)) {
            // line 246
            echo "                            ";
            if (($context["logged"] ?? null)) {
                // line 247
                echo "                                <a href=\"";
                echo ($context["login"] ?? null);
                echo "\" class=\"sc-btn sc-btn-with-icon no-btn header-buttons-account d-none d-md-flex flex-column justify-content-between align-items-center align-self-stretch\">
                                    <span class=\"sc-btn-icon sc-btn-icon-account\"></span>
                                    <span class=\"text-lowercase\">";
                // line 249
                echo ($context["oct_account"] ?? null);
                echo "</span>
                                </a>
                            ";
            } else {
                // line 252
                echo "                                <button type=\"button\" onclick=\"octPopupLogin();\" class=\"sc-btn sc-btn-with-icon no-btn header-buttons-account d-none d-md-flex flex-column justify-content-between fsz-12 align-items-center align-self-stretch\">
                                    <span class=\"sc-btn-icon sc-btn-icon-account\"></span>
                                    <span class=\"text-lowercase\">";
                // line 254
                echo ($context["oct_account"] ?? null);
                echo "</span>
                                </button>
                            ";
            }
            // line 257
            echo "                        ";
        }
        // line 258
        echo "                        <a href=\"";
        echo ($context["compare_link"] ?? null);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "isbuttoninteractive", [], "any", true, true, false, 258)) {
            echo "data-compare-ids=\"";
            echo ($context["compare_ids"] ?? null);
            echo "\"";
        }
        echo " data-compare-text=\"";
        echo ($context["compare_text"] ?? null);
        echo "\" data-compare-text-in=\"";
        echo ($context["compare_text_in"] ?? null);
        echo "\" class=\"sc-btn sc-btn-with-icon no-btn header-buttons-compare d-flex flex-column justify-content-between fsz-12 align-items-center align-self-stretch\">
                            <svg viewBox=\"0 0 16 16\" width=\"16\" height=\"16\">
                                <use href=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--header-btns-compare\"></use>
                            </svg>
                            <span class=\"text-lowercase\">";
        // line 262
        echo ($context["oct_compare"] ?? null);
        echo "</span>
                            <span class=\"header-buttons-cart-quantity px-1\">";
        // line 263
        echo ($context["compare_total"] ?? null);
        echo "</span>
                        </a>
                        <a href=\"";
        // line 265
        echo ($context["wishlist"] ?? null);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "isbuttoninteractive", [], "any", true, true, false, 265)) {
            echo "data-wishlist-ids=\"";
            echo ($context["wishlist_ids"] ?? null);
            echo "\"";
        }
        echo " data-wishlist-text=\"";
        echo ($context["wishlist_text"] ?? null);
        echo "\" data-wishlist-text-in=\"";
        echo ($context["wishlist_text_in"] ?? null);
        echo "\" class=\"sc-btn sc-btn-with-icon no-btn d-flex flex-column justify-content-between header-buttons-wishlist fsz-12 align-items-center align-self-stretch\">
                            <svg viewBox=\"0 0 16 16\" width=\"16\" height=\"16\">
                                <use href=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--header-btns-wishlist\"></use>
                            </svg>
                            <span class=\"text-lowercase\">";
        // line 269
        echo ($context["oct_wishlist"] ?? null);
        echo "</span>
                            <span class=\"header-buttons-cart-quantity px-1\">";
        // line 270
        echo ($context["wishlist_total"] ?? null);
        echo "</span>
                        </a>
                        ";
        // line 272
        echo ($context["cart"] ?? null);
        echo "
                        <span class=\"d-none\" ";
        // line 273
        if (twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "isbuttoninteractive", [], "any", true, true, false, 273)) {
            echo "data-cart-ids=\"";
            echo ($context["cart_ids"] ?? null);
            echo "\"";
        }
        echo " data-cart-text=\"";
        echo ($context["cart_text"] ?? null);
        echo "\" data-cart-text-in=\"";
        echo ($context["cart_text_in"] ?? null);
        echo "\"></span>
                    </div>
                    ";
        // line 275
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_address", [], "any", false, true, false, 275), ($context["oct_lang_id"] ?? null), [], "array", true, true, false, 275) && (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_address", [], "any", false, false, false, 275)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["oct_lang_id"] ?? null)] ?? null) : null))) {
            // line 276
            echo "                        <div id=\"sc_sidebar_locations_inner\" class=\"d-none\">
                            <div id=\"sc_sidebar_locations\" class=\"d-none sidebar-locations p-3\">
                                <div class=\"sc-location content-block active fsz-12\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"sc-location-address fw-700 dark-text pe-4 fsz-14\">";
            // line 280
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_address", [], "any", false, false, false, 280)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["oct_lang_id"] ?? null)] ?? null) : null);
            echo "</div>
                                        ";
            // line 281
            if (($context["oct_locations"] ?? null)) {
                // line 282
                echo "                                            <button type=\"button\" class=\"sc-btn sc-btn-secondary sc-btn-with-icon br-4 ms-auto p-0 d-flex align-items-center justify-content-center\">
                                                <span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
                                            </button>
                                        ";
            }
            // line 286
            echo "                                    </div>
                                    ";
            // line 287
            if (((array_key_exists("contact_open", $context) && ($context["contact_open"] ?? null)) || (array_key_exists("oct_contact_telephones", $context) &&  !twig_test_empty(($context["oct_contact_telephones"] ?? null))))) {
                // line 288
                echo "                                        <div class=\"sc-location-collapsed\">
                                            ";
                // line 289
                if ((array_key_exists("oct_contact_telephones", $context) &&  !twig_test_empty(($context["oct_contact_telephones"] ?? null)))) {
                    // line 290
                    echo "                                                <div class=\"sc-location-phones mb-3\">
                                                    <span class=\"sidebar-main-menu-item-title fw-600 dark-text\">";
                    // line 291
                    echo ($context["oct_telephones"] ?? null);
                    echo "</span>
                                                    ";
                    // line 292
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["oct_contact_telephones"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["oct_contact_telephone"]) {
                        // line 293
                        echo "                                                        <a href=\"tel:";
                        echo twig_replace_filter($context["oct_contact_telephone"], [" " => "", "-" => "", "(" => "", ")" => ""]);
                        echo "\" class=\"blue-link fw-500\">";
                        echo $context["oct_contact_telephone"];
                        echo "</a>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_contact_telephone'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 295
                    echo "                                                </div>
                                            ";
                }
                // line 297
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_open", [], "any", false, true, false, 297), ($context["oct_lang_id"] ?? null), [], "array", true, true, false, 297) && (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["oct_showcase_data"] ?? null), "contact_open", [], "any", false, false, false, 297)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["oct_lang_id"] ?? null)] ?? null) : null))) {
                    // line 298
                    echo "                                                <div class=\"sc-location-shedule mb-3\">
                                                    <div class=\"sidebar-main-menu-item-title fw-600 dark-text mb-2\">";
                    // line 299
                    echo ($context["oct_working_hours"] ?? null);
                    echo ":</div>
                                                    ";
                    // line 300
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["oct_contact_opens"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["contact_open"]) {
                        // line 301
                        echo "                                                        <span>";
                        echo $context["contact_open"];
                        echo "</span><br>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact_open'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 303
                    echo "                                                </div>
                                            ";
                }
                // line 305
                echo "                                            ";
                if ((array_key_exists("contact_map", $context) && ($context["contact_map"] ?? null))) {
                    // line 306
                    echo "                                                <div class=\"sc-location-map\">
                                                    <div class=\"sidebar-main-menu-item-title fw-600 mb-3 dark-text\">";
                    // line 307
                    echo ($context["oct_location"] ?? null);
                    echo "</div>
                                                    <div id=\"oct-contact-map\" class=\"not_in\"></div>
                                                </div>
                                                <script>
                                                    if (window.innerWidth < 768) {
                                                        \$('#mobile-locations-button').on('click', function() {
                            \t\t\t\t\t\t    \toctShowMap('";
                    // line 313
                    echo ($context["contact_map"] ?? null);
                    echo "', '#oct-contact-map');
                            \t\t\t\t\t\t\t});
                                                    }
                        \t\t\t\t\t    </script>
                                            ";
                }
                // line 318
                echo "                                        </div>
                                    ";
            }
            // line 320
            echo "                                </div>
                                ";
            // line 321
            if (($context["oct_locations"] ?? null)) {
                // line 322
                echo "                                    ";
                $context["key"] = 0;
                // line 323
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_locations"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                    // line 324
                    echo "                                        ";
                    $context["key"] = (($context["key"] ?? null) + 1);
                    // line 325
                    echo "                                        <div id=\"sc-location-";
                    echo ($context["key"] ?? null);
                    echo "\" class=\"sc-location content-block fsz-12\">
                                            <div class=\"d-flex align-items-center\">
                                                ";
                    // line 327
                    if ((twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", true, true, false, 327) && twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 327))) {
                        // line 328
                        echo "                                                    <div class=\"sc-location-address fw-700 dark-text pe-4 fsz-14\">";
                        echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 328);
                        echo "</div>
                                                ";
                    }
                    // line 330
                    echo "                                                <button type=\"button\" class=\"sc-btn sc-btn-secondary sc-btn-with-icon br-4 ms-auto p-0 d-flex align-items-center justify-content-center\">
                                                    <span class=\"sc-btn-icon sc-btn-icon-chevron\"></span>
                                                </button>
                                            </div>
                                            ";
                    // line 334
                    if (((twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", true, true, false, 334) && twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 334)) || ((twig_get_attribute($this->env, $this->source, $context["location"], "map", [], "any", true, true, false, 334) && twig_get_attribute($this->env, $this->source, $context["location"], "phone", [], "any", true, true, false, 334)) && twig_get_attribute($this->env, $this->source, $context["location"], "phone", [], "any", false, false, false, 334)))) {
                        // line 335
                        echo "                                                <div class=\"sc-location-collapsed\">
                                                    ";
                        // line 336
                        if ((twig_get_attribute($this->env, $this->source, $context["location"], "phone", [], "any", true, true, false, 336) && twig_get_attribute($this->env, $this->source, $context["location"], "phone", [], "any", false, false, false, 336))) {
                            // line 337
                            echo "                                                        <div class=\"sc-location-phones mb-3\">
                                                            <span class=\"sidebar-main-menu-item-title fw-600 dark-text\">";
                            // line 338
                            echo ($context["oct_telephones"] ?? null);
                            echo "</span>
                                                            ";
                            // line 339
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["location"], "phone", [], "any", false, false, false, 339));
                            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                                // line 340
                                echo "                                                                <a href=\"tel:";
                                echo twig_replace_filter($context["phone"], [" " => "", "-" => "", "(" => "", ")" => ""]);
                                echo "\" class=\"blue-link fw-500\">";
                                echo $context["phone"];
                                echo "</a>
                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 342
                            echo "                                                        </div>
                                                    ";
                        }
                        // line 344
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", true, true, false, 344) && twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 344))) {
                            // line 345
                            echo "                                                        <div class=\"sc-location-shedule mb-3\">
                                                            <div class=\"sidebar-main-menu-item-title fw-600 dark-text mb-2\">";
                            // line 346
                            echo ($context["oct_working_hours"] ?? null);
                            echo ":</div>
                                                            ";
                            // line 347
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 347));
                            foreach ($context['_seq'] as $context["_key"] => $context["open"]) {
                                // line 348
                                echo "                                                                <span>";
                                echo $context["open"];
                                echo "</span><br>
                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['open'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 350
                            echo "                                                        </div>
                                                    ";
                        }
                        // line 352
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["location"], "map", [], "any", true, true, false, 352) && twig_get_attribute($this->env, $this->source, $context["location"], "map", [], "any", false, false, false, 352))) {
                            // line 353
                            echo "                                                        <div class=\"sc-location-map\">
                                                            <div class=\"sidebar-main-menu-item-title fw-600 mb-3 dark-text\">";
                            // line 354
                            echo ($context["oct_location"] ?? null);
                            echo "</div>
                                                            <div id=\"oct-location-map-";
                            // line 355
                            echo ($context["key"] ?? null);
                            echo "\" class=\"not_in\"></div>
                                                        </div>
                                                        <script>
                                                            \$('body').on('click', '#sc-location-";
                            // line 358
                            echo ($context["key"] ?? null);
                            echo "', function(){
                                                                octShowMap('";
                            // line 359
                            echo twig_get_attribute($this->env, $this->source, $context["location"], "map", [], "any", false, false, false, 359);
                            echo "', '#oct-location-map-";
                            echo ($context["key"] ?? null);
                            echo "');
                                                            });
                                                        </script>
                                                    ";
                        }
                        // line 363
                        echo "                                                </div>
                                            ";
                    }
                    // line 365
                    echo "                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                                ";
            }
            // line 368
            echo "                                <script>
                                    window.addEventListener('DOMContentLoaded', () => {
                                        toggleActiveClass('.sc-location');
                                    });
                                </script>
                            </div>
                        </div>
                    ";
        }
        // line 376
        echo "                </div>
            </div>
        </div>
        ";
        // line 379
        echo ($context["menu"] ?? null);
        echo "
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1027 => 379,  1022 => 376,  1012 => 368,  1009 => 367,  1002 => 365,  998 => 363,  989 => 359,  985 => 358,  979 => 355,  975 => 354,  972 => 353,  969 => 352,  965 => 350,  956 => 348,  952 => 347,  948 => 346,  945 => 345,  942 => 344,  938 => 342,  927 => 340,  923 => 339,  919 => 338,  916 => 337,  914 => 336,  911 => 335,  909 => 334,  903 => 330,  897 => 328,  895 => 327,  889 => 325,  886 => 324,  881 => 323,  878 => 322,  876 => 321,  873 => 320,  869 => 318,  861 => 313,  852 => 307,  849 => 306,  846 => 305,  842 => 303,  833 => 301,  829 => 300,  825 => 299,  822 => 298,  819 => 297,  815 => 295,  804 => 293,  800 => 292,  796 => 291,  793 => 290,  791 => 289,  788 => 288,  786 => 287,  783 => 286,  777 => 282,  775 => 281,  771 => 280,  765 => 276,  763 => 275,  750 => 273,  746 => 272,  741 => 270,  737 => 269,  720 => 265,  715 => 263,  711 => 262,  693 => 258,  690 => 257,  684 => 254,  680 => 252,  674 => 249,  668 => 247,  665 => 246,  662 => 245,  656 => 242,  652 => 241,  644 => 237,  642 => 236,  637 => 234,  620 => 220,  615 => 218,  607 => 213,  596 => 207,  591 => 204,  585 => 202,  582 => 201,  576 => 199,  573 => 198,  570 => 197,  564 => 195,  562 => 194,  552 => 190,  547 => 187,  536 => 185,  532 => 184,  526 => 181,  521 => 178,  518 => 177,  514 => 175,  505 => 173,  501 => 172,  495 => 169,  491 => 167,  489 => 166,  483 => 163,  480 => 162,  478 => 161,  474 => 159,  470 => 157,  459 => 155,  455 => 154,  452 => 153,  450 => 152,  446 => 150,  440 => 148,  435 => 146,  428 => 143,  426 => 142,  420 => 139,  413 => 136,  405 => 134,  401 => 132,  380 => 129,  375 => 128,  354 => 126,  352 => 125,  349 => 124,  347 => 123,  342 => 120,  334 => 117,  328 => 116,  324 => 115,  320 => 114,  316 => 113,  309 => 109,  305 => 108,  301 => 107,  290 => 99,  286 => 98,  280 => 94,  278 => 93,  271 => 89,  264 => 84,  258 => 81,  255 => 80,  253 => 79,  233 => 65,  225 => 63,  221 => 62,  210 => 60,  206 => 59,  197 => 57,  193 => 56,  183 => 53,  179 => 52,  177 => 51,  166 => 49,  160 => 47,  158 => 46,  154 => 45,  148 => 43,  146 => 42,  140 => 40,  138 => 39,  132 => 37,  130 => 36,  124 => 34,  122 => 33,  117 => 32,  111 => 29,  104 => 24,  102 => 23,  96 => 21,  94 => 20,  81 => 16,  79 => 15,  75 => 14,  73 => 13,  69 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/common/header.twig", "");
    }
}
