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

/* extension/module/elfsight_contact_form.twig */
class __TwigTemplate_eb059301b076555b590486ed7b919fa0f32fc9137d50adc1f946e0c97b3e6667 extends \Twig\Template
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

<div class=\"elfsight-portal-embed\">
    <iframe src=\"";
        // line 4
        echo ($context["url"] ?? null);
        echo "\"></iframe>    
</div>

<script>
    jQuery(function () {
        window.onmessage = function (e) {
            if (e.data && e.data.params) {
                jQuery.ajax({
                    type: 'POST',
                    url: '',
                    data: {
                        params: e.data.params
                    },
                    success: function (response) {
                    }
                })
            }
        };
    });
</script>

<style>
    .elfsight-portal-embed{
        position: absolute;
        margin-left: 235px;
        width: calc(100% - 235px);
        height: calc(100% - 45px);
        overflow: hidden;
    }
    
    .elfsight-portal-embed iframe {
        width: 100%;
        height: 100%;
        overflow: hidden;
        border: none;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "extension/module/elfsight_contact_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/elfsight_contact_form.twig", "");
    }
}
