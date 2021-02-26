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

/* extension/module/price_slider.twig */
class __TwigTemplate_f1099e44264e2962f489fbd54d57ac089fcf09cea199fbfcf71c41f912a686cd extends \Twig\Template
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
                <button type=\"submit\" form=\"form-price_slider\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-manufacturer1\"
                      class=\"form-horizontal\">
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-heading\">";
        // line 32
        echo ($context["entry_heading"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_price_slider_heading\"
                                   value=\"";
        // line 35
        echo ($context["module_price_slider_heading"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 36
        echo ($context["entry_heading"] ?? null);
        echo "\" id=\"price_slider_heading\" class=\"form-control\"
                                   required/>
                            ";
        // line 38
        if (($context["error_ps_heading"] ?? null)) {
            // line 39
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_ps_heading"] ?? null);
            echo "</div>
                            ";
        }
        // line 41
        echo "                        </div>
                    </div>

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-price-range\">";
        // line 45
        echo ($context["entry_price_range"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_price_slider_range\"
                                   value=\"";
        // line 48
        echo ($context["module_price_slider_range"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 49
        echo ($context["entry_price_range"] ?? null);
        echo "\" id=\"price_slider_range\" class=\"form-control\"
                                   required/>
                            ";
        // line 51
        if (($context["error_ps_heading"] ?? null)) {
            // line 52
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_ps_heading"] ?? null);
            echo "</div>
                            ";
        }
        // line 54
        echo "                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-price-status\">";
        // line 58
        echo ($context["entry_status_price"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"module_price_slider_status\" id=\"input-price-status\"
                                    class=\"form-control form-magic-setting\">
                                ";
        // line 62
        if (($context["module_price_slider_status"] ?? null)) {
            // line 63
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\">";
            // line 64
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 66
            echo "                                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 67
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 69
        echo "                            </select>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 78
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/price_slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 78,  197 => 69,  192 => 67,  187 => 66,  182 => 64,  177 => 63,  175 => 62,  168 => 58,  162 => 54,  156 => 52,  154 => 51,  149 => 49,  145 => 48,  139 => 45,  133 => 41,  127 => 39,  125 => 38,  120 => 36,  116 => 35,  110 => 32,  104 => 29,  98 => 26,  94 => 24,  86 => 20,  84 => 19,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/price_slider.twig", "");
    }
}
