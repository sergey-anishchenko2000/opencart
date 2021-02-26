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

/* extension/module/revslideropencart.twig */
class __TwigTemplate_a6db38f272414e8d44de60cf5ae02c050cd15922a54d98a3ff7cf204e0341fd2 extends \Twig\Template
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
  ";
        // line 4
        if (twig_in_filter("slide_selector", ($context["rev_content"] ?? null))) {
            // line 5
            echo "    <script type=\"text/javascript\">
      \$('<script />', { type : 'text/javascript', src : '../system/config/revslider/admin/assets/js/jquery/jquery.min.js'}).appendTo('head');;
      \$('<script />', { type : 'text/javascript', src : '../system/config/revslider/admin/assets/js/jquery/jquery.ui.core.min.js'}).appendTo('head');
    </script>
  ";
        }
        // line 10
        echo " <div class=\"page-header\">
    <div class=\"container-fluid\">
    
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 16
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo " 
      </ul>
    </div>
  </div>
<div class=\"container-fluid\">
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            echo " 
      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 23
            echo ($context["error_warning"] ?? null);
            echo " 
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 26
        echo " 
    <div class=\"box \">
      <div class=\"rev_content content\" style=\"min-width: 1095px;\">
          <!-- content here --> 
          ";
        // line 30
        echo ($context["rev_content"] ?? null);
        echo " 
      </div>
  </div>
</div>
</div>
<style type=\"text/css\">
.rev_content .content.wrap {
  margin: 0px 0px 0 0px;
}
</style>
<script type=\"text/javascript\">
  jQuery(document).ready(function(\$){
    \$(this.body).addClass('rev_backoffice wp-core-ui');
  });
</script>
";
        // line 45
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/revslideropencart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  103 => 30,  97 => 26,  90 => 23,  86 => 22,  79 => 17,  69 => 16,  63 => 15,  58 => 13,  53 => 10,  46 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/revslideropencart.twig", "");
    }
}
