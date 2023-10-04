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

/* oct_showcase/template/octemplates/module/oct_static_subscribe.twig */
class __TwigTemplate_50cee9f9a38499814e0bd2eb52d84b4e6d549f9904a318964d484a45d5e706b4 extends \Twig\Template
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
        echo "<div class=\"sc-footer-subscribe d-flex flex-column align-items-center justify-content-center\">
\t<div class=\"sc-footer-title fw-500 text-uppercase d-flex align-items-center mb-3\">
\t\t<img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--footer-subscribe-title-icon\" alt=\"\" width=\"24\" height=\"24\" class=\"me-2\">
\t\t";
        // line 4
        echo ($context["oct_text_subscribe_title"] ?? null);
        echo "
\t</div>
\t<form action=\"javascript:;\" id=\"footer-subscribe\" class=\"sc-footer-subscribe-form\">
\t\t<div class=\"input-group\">
\t    \t<input type=\"email\" id=\"InputSubscribeEmail\" class=\"form-control sc-input-with-btn fw-400\" name=\"email\" placeholder=\"";
        // line 8
        echo ($context["enter_email_static_subscribe"] ?? null);
        echo "\">
\t\t    <button type=\"submit\" id=\"footer-make-subscribe\" class=\"sc-btn sc-btn-primary\">";
        // line 9
        echo ($context["oct_text_subscribe_button"] ?? null);
        echo "</button>
\t\t</div>
\t    ";
        // line 11
        if (($context["text_terms"] ?? null)) {
            // line 12
            echo "\t    <div class=\"d-flex align-items-center justify-content-center mt-2 text-center\">
\t        <input type=\"checkbox\" class=\"form-check-input\" name=\"agree\" id=\"oct-scales-static\">
\t\t\t<label class=\"form-check-label fsz-10\" for=\"oct-scales-static\">";
            // line 14
            echo ($context["text_terms"] ?? null);
            echo "</label>
\t    </div>
\t    ";
        }
        // line 17
        echo "\t</form>
</div>
<script>
\$(\"#InputSubscribeEmail, #oct-scales-static\").on(\"change paste keyup\", function() {
\t\$(this).removeClass('error_style');
});
\$('#footer-make-subscribe').on('click', function() {
\t\$.ajax({
\t\ttype: 'post',
\t\turl:  'index.php?route=octemplates/module/oct_subscribe/makeSubscribe',
\t\tdataType: 'json',
\t\tcache: false,
\t\tdata: \$('#footer-subscribe').serialize(),
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\t\$('#us-subscribe-modal .text-danger').remove();
\t\t\t\tlet errorOption = '';

\t\t\t\t\$.each(json['error'], function(i, val) {
\t\t\t\t\t\$('#footer-subscribe [name=\"' + i + '\"]').addClass('error_style');
\t\t\t\t\terrorOption += '<div class=\"alert-text-item\">' + val + '</div>';
\t\t\t\t});

\t\t\t\tscNotify('danger', errorOption);
\t\t\t} else {
\t\t\t\tif (json['output']) {
\t\t\t\t\t\$('#footer-subscribe [name=\"email\"]').val('');
\t\t\t\t\tscNotify('success', '<div class=\"alert-text-item\">' + json['output'] + '</div>');
\t\t\t\t}
\t\t\t}
\t\t}
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/module/oct_static_subscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  64 => 14,  60 => 12,  58 => 11,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/module/oct_static_subscribe.twig", "");
    }
}
