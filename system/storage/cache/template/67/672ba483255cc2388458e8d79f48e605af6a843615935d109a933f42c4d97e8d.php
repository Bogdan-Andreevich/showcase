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

/* oct_showcase/template/octemplates/module/oct_popup_purchase_byoneclick.twig */
class __TwigTemplate_6e8c3d13c4a6d16192df98facc3038d9bd2aa5d55d9a17e462a218369b5ec579 extends \Twig\Template
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
        if ((array_key_exists("oct_byoneclick_status", $context) && ($context["oct_byoneclick_status"] ?? null))) {
            // line 2
            echo "<div class=\"sc-buy-one-click d-flex flex-column flex-sm-row align-items-sm-center p-3\">
\t<span class=\"sc-buy-one-click-title dark-text fw-700 flex-grow-1\">";
            // line 3
            echo ($context["oct_product_oneclick"] ?? null);
            echo "</span>
\t<form action=\"javascript:;\" id=\"oct_purchase_byoneclick_form";
            // line 4
            echo ($context["oct_byoneclick_page"] ?? null);
            echo "\" method=\"post\">
\t\t<div class=\"input-group mt-2 mt-sm-0 w-100 w-md-auto\">
\t\t\t<input type=\"tel\" name=\"telephone\" placeholder=\"";
            // line 6
            echo ($context["oct_product_oneclick_placeholder"] ?? null);
            echo "\" id=\"one_click_input\" class=\"one_click_input form-control\" inputmode=\"tel\">
\t\t\t";
            // line 7
            if ((array_key_exists("oct_byoneclick_product_id", $context) && ($context["oct_byoneclick_product_id"] ?? null))) {
                // line 8
                echo "\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
                echo ($context["oct_byoneclick_product_id"] ?? null);
                echo "\" />
\t\t\t";
            }
            // line 10
            echo "\t\t\t<input type=\"hidden\" name=\"oct_byoneclick\" value=\"1\" />
\t\t\t";
            // line 11
            if ((array_key_exists("oct_cart_in", $context) && ($context["oct_cart_in"] ?? null))) {
                // line 12
                echo "\t\t\t<input type=\"hidden\" name=\"oct_cart_in\" value=\"1\" />
\t\t\t";
            }
            // line 14
            echo "\t\t\t<span class=\"input-group-btn\">
\t\t\t\t<button class=\"sc-btn sc-btn-secondary sc-btn-with-icon br-4 sc-product-one-click-btn\" type=\"button\" aria-label=\"Send\">
\t\t\t\t\t<span class=\"sc-btn-icon sc-btn-icon-phone\"></span>
\t\t\t\t</button>
\t\t\t</span>
\t\t</div>
\t</form>
</div>
";
            // line 22
            if ((array_key_exists("oct_byoneclick_mask", $context) && ($context["oct_byoneclick_mask"] ?? null))) {
                // line 23
                echo "<script>
scInputMask ('#oct_purchase_byoneclick_form";
                // line 24
                echo ($context["oct_byoneclick_page"] ?? null);
                echo " .one_click_input', '";
                echo ($context["oct_byoneclick_mask"] ?? null);
                echo "');
</script>
";
            }
            // line 27
            echo "<script>
\$(\"#one_click_input\").on(\"change paste keyup\", function() {
\t\$(this).removeClass('error_style');
});
\$('#oct_purchase_byoneclick_form";
            // line 31
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " .sc-product-one-click-btn').on('click', function() {
\t\$.ajax({
        type: 'post',
        dataType: 'json',
        url: 'index.php?route=octemplates/module/oct_popup_purchase/makeorder',
        cache: false,
        data: \$('#oct_purchase_byoneclick_form";
            // line 37
            echo ($context["oct_byoneclick_page"] ?? null);
            echo "').serialize(),
        beforeSend: function() {
        \t\$('#oct_purchase_byoneclick_form";
            // line 39
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " .sc-product-one-click-btn').button('loading');
\t\t\tmasked('body', true);
\t\t},
        complete: function() {
\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 43
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " .sc-product-one-click-btn').button('reset');
\t\t\tmasked('body', false);
        },
        success: function(json) {
\t        if (json['error']) {
\t\t\t\tlet errorOption = '';

\t\t\t\t\$.each(json['error'], function(i, val) {
\t\t\t\t\tif (val) {
\t\t\t\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 52
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " [name=\"' + i + '\"]').addClass('error_style');
\t\t\t\t\t\terrorOption += '<div class=\"alert-text-item\">' + val + '</div>';
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tscNotify('danger', errorOption);
\t\t\t} else {
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$(this).attr( \"disabled\", \"disabled\" );
\t\t\t\t\tsuccessOption = '<div class=\"alert-text-item\">' + json['success'] + '</div>';

\t\t\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 63
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " #one_click_input').val('');
\t\t\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 64
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " #one_click_input').removeClass('error_style');
\t\t\t\t\t\$('#oct_purchase_byoneclick_form";
            // line 65
            echo ($context["oct_byoneclick_page"] ?? null);
            echo " .sc-product-one-click-btn').prop('disabled', true);

\t\t\t\t\t";
            // line 67
            if ((array_key_exists("oct_cart_in", $context) && ($context["oct_cart_in"] ?? null))) {
                // line 68
                echo "\t\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\t\$('#cart .header-buttons-cart-quantity').html(0);
\t\t\t\t\t\t}, 100);

\t\t\t\t\t\t";
                // line 72
                if ((array_key_exists("oct_cart_page", $context) && ($context["oct_cart_page"] ?? null))) {
                    // line 73
                    echo "\t\t\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\t\tdocument.location.reload(true);
\t\t\t\t\t\t\t}, 3000);
\t\t\t\t\t\t";
                }
                // line 77
                echo "\t\t\t\t\t";
            }
            // line 78
            echo "
\t\t\t\t\t";
            // line 79
            if ((array_key_exists("oct_analytics_google_ecommerce", $context) &&  !twig_test_empty(($context["oct_analytics_google_ecommerce"] ?? null)))) {
                // line 80
                echo "\t\t            if (typeof gtag != 'undefined' && json['ecommerce']) {
\t\t                gtag('event', 'purchase', json['ecommerce']);
\t\t            }
\t\t            ";
            }
            // line 84
            echo "
\t\t\t\t\tlet cartIdsHolder = document.querySelector(\"[data-cart-ids]\");

\t\t\t\t\tif (cartIdsHolder) {
\t\t\t\t\t\tcartIdsHolder.dataset.cartIds = '';
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tsetCartBtnAdded(updateOk = true);

\t\t\t\t\t";
            // line 93
            if ((array_key_exists("isPopup", $context) && ($context["isPopup"] ?? null))) {
                // line 94
                echo "\t\t\t\t\t\toctPopupCart(successOption);
\t\t\t\t\t";
            } else {
                // line 96
                echo "\t\t\t\t\t\tscNotify('success', successOption);
\t\t\t\t\t\t";
                // line 97
                if ((($context["oct_byoneclick_page"] ?? null) == "_popup_cart")) {
                    // line 98
                    echo "\t\t\t\t\t\t\tscSidebar('";
                    echo ($context["oct_cart"] ?? null);
                    echo "', 'cart');
\t\t\t\t\t\t";
                }
                // line 100
                echo "\t\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t}
\t\t\t}
        }
    });
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/module/oct_popup_purchase_byoneclick.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 101,  219 => 100,  213 => 98,  211 => 97,  208 => 96,  204 => 94,  202 => 93,  191 => 84,  185 => 80,  183 => 79,  180 => 78,  177 => 77,  171 => 73,  169 => 72,  163 => 68,  161 => 67,  156 => 65,  152 => 64,  148 => 63,  134 => 52,  122 => 43,  115 => 39,  110 => 37,  101 => 31,  95 => 27,  87 => 24,  84 => 23,  82 => 22,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  57 => 8,  55 => 7,  51 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/module/oct_popup_purchase_byoneclick.twig", "");
    }
}
