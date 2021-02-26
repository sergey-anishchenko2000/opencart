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

/* unero/template/extension/module/revslideroutput.twig */
class __TwigTemplate_bfb38aed411ca35438371da66954191b6257a7b616f1458e112cb5a7e68593ba extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "has", [0 => "theme_options"], "method", false, false, false, 1) == twig_constant("true"))) {
            echo " 
\t";
            // line 2
            $context["config"] = twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "get", [0 => "config"], "method", false, false, false, 2);
            echo " 

\t<script type=\"text/javascript\" src=\"system/config/revslider/public/assets/js/jquery.themepunch.tools.min.js\"></script>
\t<script type=\"text/javascript\" src=\"system/config/revslider/public/assets/js/jquery.themepunch.revolution.min.js\"></script>
\t";
            // line 6
            echo ($context["rev_content"] ?? null);
            echo " 

\t";
            // line 8
            if ((($context["slider_align_top"] ?? null) == 1)) {
                echo " 
\t<script type=\"text/javascript\">
\t     \$('body').addClass('slider-align-top');
\t</script>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "unero/template/extension/module/revslideroutput.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  48 => 6,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unero/template/extension/module/revslideroutput.twig", "");
    }
}
