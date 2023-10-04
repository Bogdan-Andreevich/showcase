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

/* oct_showcase/template/common/search.twig */
class __TwigTemplate_49c8afaa07a5f7d49f7bca96a23ada43520d848d643b8c54043f42c6a8c7d34f extends \Twig\Template
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
        echo "<div class=\"header-search flex-grow-1 d-none d-md-block\">
\t<form id=\"search\" class=\"position-relative\">
\t    <input id=\"input_search\" type=\"text\" name=\"search\" value=\"";
        // line 3
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["search_input_header_text"] ?? null);
        echo "\" class=\"form-control br-8 py-2 px-3\">
\t    <button type=\"button\" aria-label=\"Search\" id=\"sc-search-button\" class=\"sc-btn sc-btn-outline sc-btn-outline-secondary sc-btn-with-icon\">
\t\t\t<span class=\"sc-btn-icon sc-btn-icon-search\"></span>
\t\t</button>
\t\t<div id=\"sc_livesearch_close\" onclick=\"clearLiveSearch();\" class=\"sc-livesearch-close d-flex align-items-center justify-content-center\">
\t\t\t<span></span>
\t\t</div>
\t\t<div id=\"sc_livesearch\" class=\"sc-livesearch\"></div>
\t</form>
</div>

";
        // line 14
        if (($context["oct_live_search_status"] ?? null)) {
            // line 15
            echo "<script>
function clearLiveSearch() {
\t\$('#sc_livesearch_close').removeClass('visible');
    \$('#overlay').removeClass('active');
\t\$('#overlay').removeClass('transparent');
\t\$('#sc_livesearch').removeClass('expanded');
\t\$('#sc_livesearch').html('');
\t\$('#input_search').val('').removeClass('active');
}

\$(document).ready(function() {
\tlet timer, delay = ";
            // line 26
            echo ($context["delay_setting"] ?? null);
            echo ";

    \$('#input_search').keyup(function(event) {
\t    switch(event.keyCode) {
\t\t\tcase 37:
\t\t\tcase 39:
\t\t\tcase 38:
\t\t\tcase 40:
\t\t\t\treturn;
\t\t\tcase 27:
\t\t\t\tclearLiveSearch();
\t\t\t\treturn;
\t\t  }

\t    clearTimeout(timer);

\t    timer = setTimeout(function() {
\t        let value = \$('#search input[name=\\'search\\']').val();
\t\t\tconst overlay = document.getElementById('overlay');

\t\t\tif (value.length >= ";
            // line 46
            echo ($context["count_symbol"] ?? null);
            echo ") {
\t\t\t\tlet key = encodeURIComponent(value);
\t\t\t\toctsearch.search(key, 'desktop');
\t\t\t} else if (value.length === 0) {
\t\t\t\tclearLiveSearch();
\t\t\t}

\t\t\toverlay.addEventListener('click', (e) => {
\t\t\t\tconst target = e.target;

\t\t\t\ttarget.classList.remove('active');

\t\t\t\tclearLiveSearch();
\t\t\t});

\t    }, delay );
\t});
});

var octsearch = {
\t'search': function(key, type) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=octemplates/module/oct_live_search',
\t\t\ttype: 'post',
\t\t\tdata: 'key=' + key,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tsuccess: function(data) {
\t\t\t\t\$('#sc_livesearch').html(data).addClass('expanded');

\t\t\t\tif(data = data.match(/livesearch/g)) {
\t\t\t\t\t\$('#sc_livesearch_close').addClass('visible');
\t                \$('#input_search, #overlay').addClass('active');
                    \$('#overlay').addClass('transparent');

\t\t\t\t} else {
\t\t\t\t\t\$('#sc_livesearch_close').removeClass('visible');
\t                \$('#input_search, #overlay').removeClass('active');
                    \$('#overlay').removeClass('transparent');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
}
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_showcase/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 46,  72 => 26,  59 => 15,  57 => 14,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_showcase/template/common/search.twig", "");
    }
}
