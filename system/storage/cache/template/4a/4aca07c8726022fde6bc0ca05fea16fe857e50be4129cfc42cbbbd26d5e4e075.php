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

/* oct_showcase/template/octemplates/faq/oct_product_faq.twig */
class __TwigTemplate_e34ee9852d98a20dff4158c6c5994ed8da48946f8677ed35e67e608eb905cb63 extends \Twig\Template
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
        if ((($context["page"] ?? null) == 1)) {
            // line 2
            echo "<div id=\"";
            echo ($context["oct_id_div"] ?? null);
            echo "\" class=\"sc-product-content-faq pb-4 mb-md-4 pt-4 pt-md-0 px-3 px-lg-4\">
    ";
            // line 3
            if (($context["poup_is_not"] ?? null)) {
                // line 4
                echo "        <div class=\"sc-product-content-title d-flex align-items-center mb-4\">
            <div class=\"sc-product-content-title-icon d-flex align-items-center justify-content-center br-4\">
                <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--product-content-faq-icon\" alt=\"\" width=\"16\" height=\"16\">
            </div>
            <span class=\"fsz-24 fw-600 dark-text\">";
                // line 8
                echo ($context["text_faq_title"] ?? null);
                echo "</span>
        </div>
        <button type=\"button\" class=\"sc-btn sc-btn-outline sc-btn-outline-primary br-4\" data-bs-toggle=\"modal\" data-bs-target=\"#faqModal\">";
                // line 10
                echo ($context["text_faq_button"] ?? null);
                echo "</button>
        <div class=\"modal fade\" id=\"faqModal\" tabindex=\"-1\" aria-labelledby=\"faqModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header p-4\">
                        <h5 class=\"modal-title fsz-20 d-flex align-items-center justify-content-between\" id=\"faqModalLabel\">";
                // line 15
                echo ($context["text_faq"] ?? null);
                echo "</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body p-4\">
                        <div class=\"sc-product-content-reviews-rating-text light-text fsz-14 mb-3 text-sm-start\">";
                // line 19
                echo ($context["text_faq_text"] ?? null);
                echo "</div>
                        <form id=\"form-faq\" enctype=\"multipart/form-data\" method=\"post\">
                            <div class=\"form-group pb-3\">
                                <label for=\"faqInputName\" class=\"fsz-14 dark-text fw-500 pb-1\"><span class=\"required\">* </span>";
                // line 22
                echo ($context["entry_name"] ?? null);
                echo "</label>
                                <input type=\"text\" name=\"name\" ";
                // line 23
                if (($context["firstname"] ?? null)) {
                    echo "value=\"";
                    echo ($context["firstname"] ?? null);
                    echo "\"";
                }
                echo " class=\"form-control\" id=\"faqInputName\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\" inputmode=\"text\">
                            </div>
                            <div class=\"form-group pb-3\">
                                <label for=\"faqInputEmail\" class=\"fsz-14 dark-text fw-500 pb-1\">";
                // line 26
                echo ($context["text_faq_email"] ?? null);
                echo "</label>
                                <span class=\"small\">";
                // line 27
                echo ($context["text_faq_email_detail"] ?? null);
                echo "</span>
                                <input type=\"text\" name=\"email\" ";
                // line 28
                if (($context["email_user"] ?? null)) {
                    echo "value=\"";
                    echo ($context["email_user"] ?? null);
                    echo "\"";
                }
                echo " class=\"form-control\" id=\"faqInputEmail\" placeholder=\"";
                echo ($context["text_faq_email"] ?? null);
                echo "\" inputmode=\"email\">
                            </div>
                            <div class=\"form-group pb-3\">
                                <label for=\"faqText\" class=\"fsz-14 dark-text fw-500 pb-1\"><span class=\"required\">* </span>";
                // line 31
                echo ($context["text_faq_textarea"] ?? null);
                echo "</label>
                                <textarea id=\"faqText\" name=\"text\" class=\"form-control\" placeholder=\"";
                // line 32
                echo ($context["text_faq_textarea"] ?? null);
                echo "\"></textarea>
                            </div>
                            <div class=\"form-group\">
                                ";
                // line 35
                echo ($context["captcha"] ?? null);
                echo "
                            </div>
                            <button type=\"button\" id=\"button-oct_faq\" class=\"sc-btn sc-btn-primary br-2\">";
                // line 37
                echo ($context["button_continue"] ?? null);
                echo "</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
            // line 44
            echo "    <div id=\"";
            echo ($context["oct_faqs_id"] ?? null);
            echo "\" class=\"dark-text fsz-14 mt-4\">
        ";
            // line 45
            if (($context["oct_faqs"] ?? null)) {
                // line 46
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_faqs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oct_faq"]) {
                    // line 47
                    echo "                <div class=\"sc-product-content-reviews-item p-3\">
                    <div class=\"sc-product-content-reviews-item-info\">
                        <div class=\"sc-last-reviews-author d-flex align-items-center\">
                            <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--review-author-icon\" alt=\"\" width=\"50\" height=\"50\">
                        <div class=\"sc-last-reviews-author-info ps-3\">
                                <div class=\"sc-last-reviews-author-name fw-600 dark-text\">";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "author", [], "any", false, false, false, 52);
                    echo "</div>
                                <div class=\"sc-last-reviews-date fsz-12 light-text\">";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "date_added", [], "any", false, false, false, 53);
                    echo "</div>
                        </div>
                        </div>
                    </div>
                    <div class=\"sc-product-content-reviews-item-text pt-3\">
                        <p>";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "text", [], "any", false, false, false, 58);
                    echo "</p>
                    </div>
                    ";
                    // line 60
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", true, true, false, 60) && twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", false, false, false, 60))) {
                        // line 61
                        echo "                    <div class=\"sc-product-content-reviews-item-answer p-3 br-4 mt-3\">
                        <div class=\"sc-product-content-reviews-item-answer-title text-uppercase fw-600 mb-3\">";
                        // line 62
                        echo ($context["text_faq_answer"] ?? null);
                        echo "</div>
                        <p>";
                        // line 63
                        echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", false, false, false, 63);
                        echo "</p>
                    </div>
                    ";
                    }
                    // line 66
                    echo "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_faq'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "            <div class=\"text-right\">";
                echo ($context["pagination"] ?? null);
                echo "</div>
        ";
            }
            // line 70
            echo "        ";
            if (twig_test_empty(($context["oct_faqs"] ?? null))) {
                // line 71
                echo "            <div class=\"d-flex flex-column justify-content-center sc-empty-reviews mb-3 mb-md-0 text-center p-4 br-4\">
                <p class=\"fw-500 fsz-16 mb-3\">";
                // line 72
                echo ($context["text_faq_empty"] ?? null);
                echo "</p>
                <img src=\"catalog/view/theme/oct_showcase/img/answers-empty.svg\" alt=\"\" class=\"img-fluid d-block my-5 mx-auto\" width=\"85\" height=\"85\">
            </div>
        ";
            }
            // line 76
            echo "    </div>
</div>
<script>
\$(\"#faqInputName, faqInputEmail, #faqText\").on(\"change paste keyup\", function() {
  \$(this).removeClass('error_style');
});
\$('body').on('click', '#";
            // line 82
            echo ($context["oct_faqs_id"] ?? null);
            echo " .pagination a', function(e){
    e.preventDefault();

    \$('#";
            // line 85
            echo ($context["oct_faqs_id"] ?? null);
            echo "').html();

    \$('#";
            // line 87
            echo ($context["oct_faqs_id"] ?? null);
            echo "').load(this.href);

    scrollToElement('#product_questions');
});

\$('#button-oct_faq').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=octemplates/faq/oct_product_faq/write&faqp_id=";
            // line 94
            echo ($context["product_id"] ?? null);
            echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-faq\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-oct_faq').button('loading');
            \$('#faqModal input, #faqModal textarea').removeClass('error_style');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-oct_faq').button('reset');
\t\t},
\t\tsuccess: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                let errorOption = '';

                \$.each(json['error'], function(i, val) {
                    \$('#faqModal [name=\"' + i + '\"]').addClass('error_style');
                    errorOption += '<div class=\"alert-text-item\">' + val + '</div>';
                });

                scNotify('danger', errorOption);
            }

\t\t\tif (json['success']) {
                scNotify('success', json['success']);

                \$('#faqModal').modal('hide');
                \$('#form-faq input[name=\\'name\\']').val('');
                \$('#form-faq textarea[name=\\'text\\']').val('');
\t\t\t}
\t\t}
\t});
});
</script>
";
        } else {
            // line 131
            if (($context["oct_faqs"] ?? null)) {
                // line 132
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_faqs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oct_faq"]) {
                    // line 133
                    echo "        <div class=\"sc-product-content-reviews-item p-3\">
            <div class=\"sc-product-content-reviews-item-info\">
                <div class=\"sc-last-reviews-author d-flex align-items-center\">
                    <img src=\"catalog/view/theme/oct_showcase/img/sprite.svg#include--review-author-icon\" alt=\"\" width=\"50\" height=\"50\">
                    <div class=\"sc-last-reviews-author-info ps-3\">
                        <div class=\"sc-last-reviews-author-name fw-600 dark-text\">";
                    // line 138
                    echo ($context["text_faq_autor"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "author", [], "any", false, false, false, 138);
                    echo "</div>
                        <div class=\"sc-last-reviews-date fsz-12\">";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "date_added", [], "any", false, false, false, 139);
                    echo "</div>
                    </div>
                </div>
            </div>
            <div class=\"sc-product-content-reviews-item-text pt-3\">
                <p>";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "text", [], "any", false, false, false, 144);
                    echo "</p>
            </div>
            ";
                    // line 146
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", true, true, false, 146) && twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", false, false, false, 146))) {
                        // line 147
                        echo "            <div class=\"sc-product-content-reviews-item-answer p-3 br-4 mt-3\">
                <div class=\"sc-product-content-reviews-item-answer-title text-uppercase fw-600 mb-3\">";
                        // line 148
                        echo ($context["text_faq_answer"] ?? null);
                        echo "</div>
                <p>";
                        // line 149
                        echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", false, false, false, 149);
                        echo "</p>
            </div>
            ";
                    }
                    // line 152
                    echo "        </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_faq'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "    <div class=\"text-right\">";
                echo ($context["pagination"] ?? null);
                echo "</div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/octemplates/faq/oct_product_faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 154,  332 => 152,  326 => 149,  322 => 148,  319 => 147,  317 => 146,  312 => 144,  304 => 139,  299 => 138,  292 => 133,  287 => 132,  285 => 131,  245 => 94,  235 => 87,  230 => 85,  224 => 82,  216 => 76,  209 => 72,  206 => 71,  203 => 70,  197 => 68,  190 => 66,  184 => 63,  180 => 62,  177 => 61,  175 => 60,  170 => 58,  162 => 53,  158 => 52,  151 => 47,  146 => 46,  144 => 45,  139 => 44,  129 => 37,  124 => 35,  118 => 32,  114 => 31,  102 => 28,  98 => 27,  94 => 26,  82 => 23,  78 => 22,  72 => 19,  65 => 15,  57 => 10,  52 => 8,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/octemplates/faq/oct_product_faq.twig", "");
    }
}
