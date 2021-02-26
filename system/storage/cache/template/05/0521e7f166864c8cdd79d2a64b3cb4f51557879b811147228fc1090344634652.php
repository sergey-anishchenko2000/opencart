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

/* default/template/extension/module/price_slider.twig */
class __TwigTemplate_99c617df9019b1dedb0c51530128f32a7944bda040d0587371898f6b3ddff0c5 extends \Twig\Template
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
        echo "<style type=\"text/css\">
    .slider-example {
        padding-top: 10px;
        padding-bottom: 55px;
        margin: 35px 0;
    }
</style>
";
        // line 8
        if ((($context["min_max"] ?? null) != 0)) {
            // line 9
            echo "    <div class=\"box sidebarFilter panel panel-default\"";
            if ((($context["module_price_filter_status"] ?? null) && (($context["module_price_filter_status"] ?? null) == 0))) {
                echo " style=\"display: none; border-bottom:none;\" ";
            }
            echo " >
        <div class=\"box-heading\">Filtered By</div>
        <div class=\"panel-heading\" style=\"color:#000;\">";
            // line 11
            echo ($context["price_slider_title"] ?? null);
            echo "</div>
        <div class=\"list-group\">
            <div class=\"list-group-item price-filter\">
                <div id=\"filter-group1\"><span class=\"min-amount\">";
            // line 14
            echo ($context["price_min"] ?? null);
            echo " - ";
            echo ($context["price_max"] ?? null);
            echo "</span>
                    <input id=\"price-slider\" onchange=\"buttonFilter();\" type=\"text\" class=\"span2\" value=\"\"
                           data-slider-min=\"";
            // line 16
            echo ($context["price_range_min"] ?? null);
            echo "\" data-slider-max=\"";
            echo ($context["price_range_max"] ?? null);
            echo "\"
                           data-slider-step=\"2\"
                           data-slider-value=\"[";
            // line 18
            echo (((twig_get_attribute($this->env, $this->source, ($context["price_range"] ?? null), 0, [], "array", true, true, false, 18) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["price_range"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null) != ""))) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["price_range"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) : (($context["price_range_min"] ?? null)));
            echo ",";
            echo (((twig_get_attribute($this->env, $this->source, ($context["price_range"] ?? null), 1, [], "array", true, true, false, 18) && ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["price_range"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[1] ?? null) : null) != ""))) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["price_range"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null)) : (($context["price_range_max"] ?? null)));
            echo "]\"/>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 24
        echo "<script>

    \$(\"#price-slider\").slider({
        range: true,
        min: ";
        // line 28
        echo ($context["price_range_min"] ?? null);
        echo ",
        max: ";
        // line 29
        echo ($context["price_range_max"] ?? null);
        echo ",
        values: [75, 300],
        slide: function (event, ui) {
            \$(\"#amount\").val(\"\$\" + ui.values[0] + \" - \$\" + ui.values[1]);
        }
    });

    /*<div class=\"panel-footer text-right\">
      <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 37
        echo ($context["button_filter"] ?? null);
        echo "</button>
</div>*/

    function buttonFilter() {
        pr = '';
        price = \$('#price-slider').val();
        if (price != '') {
            pr = \"&pr=\" + price;
        }
        location = \"";
        // line 46
        echo ($context["action"] ?? null);
        echo "\" + pr;
    }

    /* \$( document ).ready( function () {

         \$('#button-filter').on('click', function() {
             console.log(\"asdfsd\");
             pr = '';
             price = \$('#price-slider').val();
             if(price!='')
             {
                 pr = \"&pr=\"+price;
             }
             location = \"";
        // line 59
        echo ($context["action"] ?? null);
        echo "\"+pr;
        });
    });*/


</script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/price_slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 59,  120 => 46,  108 => 37,  97 => 29,  93 => 28,  87 => 24,  76 => 18,  69 => 16,  62 => 14,  56 => 11,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/price_slider.twig", "");
    }
}
