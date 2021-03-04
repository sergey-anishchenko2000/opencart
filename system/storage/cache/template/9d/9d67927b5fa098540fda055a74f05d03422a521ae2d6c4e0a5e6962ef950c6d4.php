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

/* extension/module/d_admin_menu/d_admin_menu_editor.twig */
class __TwigTemplate_0d1edaaca351beefe0f64a53ead37f242e28192d8fcb38495db448d4046972bc extends \Twig\Template
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
            <div class=\"form-inline pull-right\">
                <button id=\"save_and_stay\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save_and_stay"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                <li><a href=\"";
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
        // line 20
        if ( !twig_test_empty((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["warning"] ?? null) : null))) {
            // line 21
            echo "        <div class=\"alert alert-danger\">
            <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 22
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["warning"] ?? null) : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 26
        echo "        ";
        if ( !twig_test_empty((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["shopunity"] ?? null) : null))) {
            // line 27
            echo "        <div class=\"alert alert-danger\">
            <i class=\"fa fa-exclamation-circle\"></i>
            ";
            // line 29
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["error"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["shopunity"] ?? null) : null);
            echo "
        </div>
        ";
        }
        // line 32
        echo "        ";
        if ( !twig_test_empty(($context["success"] ?? null))) {
            // line 33
            echo "        <div class=\"alert alert-success\">
            <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 34
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 38
        echo "        ";
        if (($context["d_shopunity"] ?? null)) {
            // line 39
            echo "            <div class=\"d_shopunity_update\"></div>
            <script src=\"view/javascript/d_shopunity/d_shopunity_widget.js\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">
            var d_shopunity_update = jQuery.extend(true, {}, d_shopunity_widget);
            d_shopunity_update.init({
            class: '.d_shopunity_update',
            token: '";
            // line 45
            echo ($context["get_token"] ?? null);
            echo "',
            extension_id: 'd_admin_menu',
            action: 'loadUpdate'
            });
            </script>
        ";
        }
        // line 51
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 54
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
              ";
        // line 57
        if (($context["setup"] ?? null)) {
            // line 58
            echo "                <form action=\"";
            echo ($context["save_and_stay"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">

                  <ul class=\"nav nav-tabs\">
                    <li class=\"active\">
                        <a href=\"#setting\" data-toggle=\"tab\">
                            <span class=\"fa fa-cog\"></span>
                            ";
            // line 64
            echo ($context["tab_setting"] ?? null);
            echo "
                        </a>
                    </li>
                    <li>
                        <a href=\"#instructions\" data-toggle=\"tab\">
                            <span class=\"fa fa-graduation-cap fa-fw\"></span>
                            ";
            // line 70
            echo ($context["tab_instruction"] ?? null);
            echo "
                        </a>
                    </li>
                  </ul>

                  <div class=\"tab-content\">

                      <div class=\"tab-pane active\" id=\"setting\" >
                          <div class=\"tab-body\">
                            <div>
                              <div>
                                <div class=\"tab-content\">


                                  <div id=\"d_menu\" class=\"tab-pane active\">

                                    <div class=\"row\">
                                      <!-- HOME CONTENT -->

                                      <div class=\"col-lg-6\">
                                          <div class=\"form-group\">
                                              <label class=\"col-sm-4 control-label\" for=\"input_status\">";
            // line 91
            echo ($context["entry_status"] ?? null);
            echo "</label>
                                              <div class=\"col-sm-8\">
                                                  <input type=\"checkbox\" value=\"1\" name=\"";
            // line 93
            echo ($context["codename"] ?? null);
            echo "_status\" id=\"input_status\" data-on-color=\"success\"  data-bs-status=\"true\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context, (($context["codename"] ?? null) . "_status"), [], "any", false, false, false, 93) == "1")) ? ("checked=\"checked\"") : (""));
            echo " class=\"form-control\" />
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class=\"row\">
                                      <div class=\"col-lg-6\">
                                          <div class=\"form-group\">
                                              <label class=\"col-sm-4 control-label\" for=\"input_work_mode\"><span data-toggle=\"tooltip\" title=\"";
            // line 101
            echo ($context["help_work_mode"] ?? null);
            echo "\">";
            echo ($context["entry_work_mode"] ?? null);
            echo "</span></label>
                                              <div class=\"col-sm-8\">
                                                  <input type=\"checkbox\" value=\"1\" name=\"";
            // line 103
            echo ($context["codename"] ?? null);
            echo "_work_mode\" id=\"input_work_mode\" data-on-color=\"primary\" data-off-color=\"primary\" data-on-text=\"";
            echo ($context["text_inherit"] ?? null);
            echo "\" data-off-text=\"";
            echo ($context["text_replace"] ?? null);
            echo "\" data-label-width=\"20\" data-bs-status=\"true\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context, (($context["codename"] ?? null) . "_work_mode"), [], "any", false, false, false, 103) == "1")) ? ("checked=\"checked\"") : (""));
            echo " class=\"form-control\" />
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>

                                    <hr>

                                    <div class=\"row\">

                                      <!-- STANDART MENU -->
                                      <div class=\"panel-group col-sm-12 col-md-12 col-lg-5\">
                                        <h3 class=\"page-header pd-10px\">
                                            <span class=\"fa fa-bookmark-o fa-fw\"></span> <span>";
            // line 117
            echo ($context["text_standart_menu"] ?? null);
            echo "</span>
                                        </h3>
                                        <div id=\"standart-menu\">
                                          <div class=\"dd nestable\" id=\"nestable-standart\">
                                            ";
            // line 121
            echo ($context["standart_menu"] ?? null);
            echo "
                                          </div>
                                        </div>
                                      </div>

                                      <!-- CUSTOM MENU -->
                                      <div class=\"panel-group col-sm-12 col-md-12 col-lg-7\">
                                        <h3 class=\"page-header pd-10px\">
                                            <span class=\"fa fa-bookmark fa-fw\"></span> <span>";
            // line 129
            echo ($context["text_custom_menu"] ?? null);
            echo "</span>
                                        </h3>
                                        <div id=\"custom-menu\">
                                          <div class=\"dd nestable\" id=\"nestable-custom\">
                                            ";
            // line 133
            echo ($context["custom_menu"] ?? null);
            echo "
                                          </div>
                                        </div>
                                      </div>
                                    </div> 
                                    ";
            // line 139
            echo "                                    <div>
                                      <hr>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"button_support_email\">";
            // line 142
            echo ($context["entry_support"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                           <a href=\"";
            // line 144
            echo ($context["support_url"] ?? null);
            echo "\" class=\"btn btn-success\" target=\"_blank\">";
            echo ($context["button_support"] ?? null);
            echo "</a>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class=\"tab-pane\" id=\"instructions\">
                        <div class=\"instruction\" style=\"max-width:700px\"></div>
                      </div>
                  </div>
                </form>
                <div style=\"text-align: center; padding: 30px;\">";
            // line 158
            echo ($context["text_powered_by"] ?? null);
            echo "</div>
            </div>
          ";
        } else {
            // line 161
            echo "            ";
            echo ($context["text_setup"] ?? null);
            echo "
          ";
        }
        // line 163
        echo "        </div>
    </div>
</div>

<script>

  function alert_handler(json)
  {
    if (typeof json === 'string') {
      json = JSON.parse(json);
    }

    if (json['error']) {

      for (i in json['error']) {
          alertify.error(json['error'][i]);
      }
    }

    if (json['success']) {
      alertify.success(json['success']);
    }
  }

  function goose_templating(some_html, some_json)
  {
    var re = /%%([^%%]+)?%%/g, match;
    while(match = re.exec(some_html)) {
        some_html = some_html.replace(match[0], some_json[match[1]]);
    };
    return some_html;
  }

  function updateOutput(e)
  {
      var list   = e.length ? e : \$(e.target),
          output = list.data('output');
      if (window.JSON) {
          output.val(window.JSON.stringify(list.nestable('serialize')));
      } else {
          output.val('JSON browser support required for this demo.');
      }
  };

  function changeCustomItemsType(serialize_data)
  {

    for (var i = serialize_data.length - 1; i >= 0; i--) {
      if (\"children\" in serialize_data[i]) {

        \$('#dd_custom_' + serialize_data[i]['id'] + ' > .dd-handle .item-link').css('display', 'none');

        // second children
        for (var ii = serialize_data[i]['children'].length - 1; ii >= 0; ii--) {
          if (\"children\" in serialize_data[i]['children'][ii]) {
            \$('#dd_custom_' + serialize_data[i]['children'][ii]['id'] + ' > .dd-handle .item-link').css('display', 'none');
          } else {
            \$('#dd_custom_' + serialize_data[i]['children'][ii]['id'] + ' > .dd-handle .item-link').css('display', 'inline-block');
          }
        }

      } else {
        \$('#dd_custom_' + serialize_data[i]['id'] + ' > .dd-handle .item-link').css('display', 'inline-block');
      }

    }
  }

  \$(document).ready(function()
  {

      \$('#nestable-standart').nestable_nodrag({maxDepth: '3', group: \"standart\"});

      \$('#nestable-custom').nestable({maxDepth: '3', group: \"custom\"})
      .on('change', function(){
        changeCustomItemsType(\$('#nestable-custom').nestable('serialize'));
      });
      changeCustomItemsType(\$('#nestable-custom').nestable('serialize'));

      \$('#nestable-standart').nestable_nodrag('collapseAll');

      \$('[data-bs=\"true\"]').bootstrapSwitch();
      \$('[data-bs-status=\"true\"]').bootstrapSwitch();

      if (\$('#input_work_mode').prop('checked')) {
        \$('#standart-menu').css('pointer-events', 'none');
        \$('#standart-menu').fadeTo('slow', 0.3);
      }

      \$('#input_work_mode').on('switchChange.bootstrapSwitch', function(event, state) {
          if (state == true) {
            \$('#standart-menu').css('pointer-events', 'none');
            \$('#standart-menu').fadeTo('slow', 0.3);
          } else {
            \$('#standart-menu').css('pointer-events', 'all');
            \$('#standart-menu').fadeTo('slow', 1);
          }
      });

      \$('[data-bs=\"true\"]').on('switchChange.bootstrapSwitch', function(event, state) {
        var tmp_vis = 1;
        if (state == true) { tmp_vis = 1; } else { tmp_vis = 0; };
        \$(this).val(tmp_vis);
      });

      // restore default setting (standart-menu)
      \$('#button-restore-standart').on('click', function() {
        \$('[data-bs=\"true\"]').each(function() {
          \$(this).bootstrapSwitch('state', true, true);
        });
      });

      // collapse-expand buttons
      \$('#button-collapse-standart').on('click', function()
      { \$('#nestable-standart').nestable_nodrag('collapseAll'); });

      \$('#button-expand-standart').on('click', function()
      { \$('#nestable-standart').nestable_nodrag('expandAll'); });

      \$('#button-collapse-custom').on('click', function()
      { \$('#nestable-custom').nestable('collapseAll'); });

      \$('#button-expand-custom').on('click', function()
      { \$('#nestable-custom').nestable('expandAll'); });


      // add new custom element (button)
      \$('#button-add-custom').on('click', function()
      {
        var tmp_new_id = 0;
        \$('.custom-removebtn').each(function() {
          if (\$(this).data('delId') > tmp_new_id) {
            tmp_new_id = \$(this).data('delId');
          }
        });
        tmp_new_id = tmp_new_id + 1;

        var html = \$('#new_custom_item').html();
        var tmp_json = {
          new_custom_id: tmp_new_id
        };
        html = goose_templating(html, tmp_json);
        \$('.main-custom-list').append(html);
        console.log('create custom element ID: ', tmp_new_id);

        // iconpicker re-init
        \$('.supericon-yep').each(function() {
          \$(this).iconpicker();
        });

        return false;
      });

      // add new custom element (button)
      \$('#button-add-custom-route').on('click', function()
      {
        var tmp_new_id = 0;
        \$('.custom-removebtn').each(function() {
          if (\$(this).data('delId') > tmp_new_id) {
            tmp_new_id = \$(this).data('delId');
          }
        });
        tmp_new_id = tmp_new_id + 1;

        var html = \$('#new_custom_route_item').html();
        var tmp_json = {
          new_custom_id: tmp_new_id
        };
        html = goose_templating(html, tmp_json);
        \$('.main-custom-list').append(html);
        console.log('create custom element ID: ', tmp_new_id);

        // iconpicker re-init
        \$('.supericon-yep').each(function() {
          \$(this).iconpicker();
        });

        return false;
      });

      // remove custom element
      \$(document).on('click','.custom-removebtn', function() {
        \$(('#dd_custom_' + \$(this).data('delId'))).remove();
        console.log('removing custom element ID: ', \$(this).data('delId'));
      });


      // iconpicker init
      \$('.supericon-yep').each(function() {
        \$(this).iconpicker();
      });

      // icon input update
      \$(document).on('iconpickerSelected', '.icp', function(e) {
        \$(\"input[name='custom-menu[\" + \$(this).data('id') +\"][icon]']\").val(e.iconpickerValue);
      });

      // TOOLTIP
      \$('.custom_route_input').tooltip();

  });

  \$(document).on('click', '#save_and_stay', function() {

    var jsn = {
      'menus-data': \$('#form').serializeArray(),
      'custom-nested-data': \$('#nestable-custom').nestable('serialize')
    };

    \$.ajax({
        type: 'post',
        url: \$('#form').attr('action'),
        data: jsn,
        beforeSend: function() {
            \$('#form').fadeTo('slow', 0.5);
        },
        complete: function() {
            \$('#form').fadeTo('slow', 1);
        },
        success: function(json) {
            alert_handler(json);
        },
        error: function(json) {
            alert_handler(json);
        }
    });
  });

    \$(document).on('click', '.setup', function(){
        window.location.replace(\"";
        // line 392
        echo ($context["setup_link"] ?? null);
        echo "\");
    });

    var url = 'https://dreamvention.ee/d-admin-menu-instruction';

    \$.getJSON(url + '?format=json&callback=?', function(data) {
        \$('.instruction').html(data['description']);
    });

</script>

";
        // line 403
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/d_admin_menu/d_admin_menu_editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 403,  554 => 392,  323 => 163,  317 => 161,  311 => 158,  292 => 144,  287 => 142,  282 => 139,  274 => 133,  267 => 129,  256 => 121,  249 => 117,  226 => 103,  219 => 101,  206 => 93,  201 => 91,  177 => 70,  168 => 64,  158 => 58,  156 => 57,  150 => 54,  145 => 51,  136 => 45,  128 => 39,  125 => 38,  118 => 34,  115 => 33,  112 => 32,  106 => 29,  102 => 27,  99 => 26,  92 => 22,  89 => 21,  87 => 20,  80 => 15,  69 => 13,  65 => 12,  58 => 10,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/d_admin_menu/d_admin_menu_editor.twig", "");
    }
}
