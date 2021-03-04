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

/* extension/module/d_admin_menu/d_admin_menu_custom_section.twig */
class __TwigTemplate_7318d9f736f6c1e580c7966462f5d073dad5301999ae8ebae0f383af3e8ddd73 extends \Twig\Template
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
        echo "<div class=\"well well-sm\">
  <div style=\"float: right;\">
    <button type=\"button\" id=\"button-collapse-custom\" class=\"btn btn-sm btn-default\" >Collapse All</button>
    <button type=\"button\" id=\"button-expand-custom\" class=\"btn btn-sm btn-default\">Expand All</button>
  </div>
  <button type=\"button\" id=\"button-add-custom\" class=\"btn btn-sm btn-primary\" ><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Item</button>
  <button type=\"button\" id=\"button-add-custom-route\" class=\"btn btn-sm btn-basic btn-default\" ><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 7
        echo ($context["button_custom_route_item"] ?? null);
        echo "</button>

</div>

";
        // line 11
        if ( !($context["custom_menu_data"] ?? null)) {
            // line 12
            echo "<ol class=\"dd-list dd-nodrag main-custom-list\">
</ol>
";
        }
        // line 15
        echo "

";
        // line 17
        if (($context["custom_menu_data"] ?? null)) {
            // line 18
            echo "<ol class=\"dd-list dd-nodrag main-custom-list\">

      <!-- first level -->
      ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_menu_data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cmd_first_item"]) {
                // line 22
                echo "      <li id=\"dd_custom_";
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["cmd_first_item"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null);
                echo "\" class=\"dd-item dd-nodrag custom-menu-item\" data-id=\"";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["cmd_first_item"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["id"] ?? null) : null);
                echo "\">

        <div class=\"dd-handle form-inline\">

          <span class=\"item-icon-picker btn-group\">
            <button type=\"button\" class=\"btn btn-default iconpicker-component\" style=\"pointer-events: none\"><i class=\"fa fa-fw fa-heart\"></i></button>
            <button type=\"button\" class=\"icp btn-default icp-dd btn dropdown-toggle supericon-yep\" data-selected=\"";
                // line 28
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["cmd_first_item"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["icon"] ?? null) : null);
                echo "\" data-id=\"";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["cmd_first_item"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["id"] ?? null) : null);
                echo "\" data-toggle=\"dropdown\">
              <span class=\"caret\"></span>
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <span class=\"dropdown-menu\"></span>
            <input type=\"hidden\" name=\"custom-menu[";
                // line 33
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["cmd_first_item"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["id"] ?? null) : null);
                echo "][icon]\" value=\"";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["cmd_first_item"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["icon"] ?? null) : null);
                echo "\">
          </span>

          <span class=\"item-name\">
            <input type=\"item-name\" name=\"custom-menu[";
                // line 37
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["cmd_first_item"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["id"] ?? null) : null);
                echo "][name]\" value=\"";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["cmd_first_item"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                echo "\" class=\"custom-item-name form-control\" placeholder=\"";
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["cmd_first_item"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["name"] ?? null) : null);
                echo "\">
          </span>
          <span class=\"item-link\">

            ";
                // line 41
                if ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["cmd_first_item"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["custom_route"] ?? null) : null)) {
                    // line 42
                    echo "
              <input type=\"hidden\" name=\"custom-menu[";
                    // line 43
                    echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["cmd_first_item"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["id"] ?? null) : null);
                    echo "][custom_route]\" value=\"1\">
              <input type=\"text\" name=\"custom-menu[";
                    // line 44
                    echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["cmd_first_item"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["id"] ?? null) : null);
                    echo "][item_link]\" value=\"";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["cmd_first_item"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["custom_route"] ?? null) : null);
                    echo "\" class=\"custom-item-link custom_route_input form-control\" placeholder=\"";
                    echo ($context["text_custom_route"] ?? null);
                    echo "\" title=\"";
                    echo ($context["help_custom_route"] ?? null);
                    echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\">

            ";
                } else {
                    // line 47
                    echo "              <select name=\"custom-menu[";
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["cmd_first_item"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["id"] ?? null) : null);
                    echo "][item_link]\" class=\"form-control custom-item-link\">
                ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["modules_for_links"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["mfl"]) {
                        // line 49
                        echo "                <optgroup label=\"";
                        echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["mfl"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["text"] ?? null) : null);
                        echo "\">
                ";
                        // line 50
                        if ( !(($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["mfl"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["extra"] ?? null) : null)) {
                            // line 51
                            echo "                <!-- ? -->
                ";
                        } else {
                            // line 53
                            echo "                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["mfl"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["extra"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["ex_mfl"]) {
                                // line 54
                                echo "                <option ";
                                echo ((((("index.php?route=" . (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["ex_mfl"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["edit"] ?? null) : null)) . "&") == (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["cmd_first_item"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["href"] ?? null) : null))) ? ("selected") : (""));
                                echo " value=\"";
                                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["ex_mfl"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["edit"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["ex_mfl"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["name"] ?? null) : null);
                                echo "</option>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex_mfl'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 56
                            echo "                ";
                        }
                        // line 57
                        echo "                </optgroup>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mfl'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "              </select>

            ";
                }
                // line 62
                echo "
          </span>
          <span class=\"item-icons-custom dd-nodrag\">
            <span class=\"fa fa-times fa-lg custom-removebtn\" style=\"color: red;\" data-del-id=\"";
                // line 65
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["cmd_first_item"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["id"] ?? null) : null);
                echo "\"></span>
          </span>
        </div>


        <!-- second level -->
        ";
                // line 71
                if ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["cmd_first_item"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["children"] ?? null) : null)) {
                    // line 72
                    echo "        <ol class=\"dd-list dd-nodrag\">
        ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["cmd_first_item"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["children"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["cmd_second_item"]) {
                        // line 74
                        echo "
        <li id=\"dd_custom_";
                        // line 75
                        echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["cmd_second_item"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["id"] ?? null) : null);
                        echo "\" class=\"dd-item dd-nodrag custom-menu-item\" data-id=\"";
                        echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["cmd_second_item"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["id"] ?? null) : null);
                        echo "\">


          <div class=\"dd-handle form-inline\">

            <span class=\"item-icon-picker btn-group\">
              <button type=\"button\" class=\"btn btn-default iconpicker-component\" style=\"pointer-events: none\"><i class=\"fa fa-fw fa-heart\"></i></button>
              <button type=\"button\" class=\"icp btn-default icp-dd btn dropdown-toggle supericon-yep\" data-selected=\"";
                        // line 82
                        echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["cmd_second_item"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["icon"] ?? null) : null);
                        echo "\" data-id=\"";
                        echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["cmd_second_item"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["id"] ?? null) : null);
                        echo "\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
              </button>
              <span class=\"dropdown-menu\"></span>
              <input type=\"hidden\" name=\"custom-menu[";
                        // line 87
                        echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["cmd_second_item"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["id"] ?? null) : null);
                        echo "][icon]\" value=\"";
                        echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["cmd_second_item"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["icon"] ?? null) : null);
                        echo "\">
            </span>

            <span class=\"item-name\">
              <input type=\"item-name\" name=\"custom-menu[";
                        // line 91
                        echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["cmd_second_item"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["id"] ?? null) : null);
                        echo "][name]\" value=\"";
                        echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["cmd_second_item"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["name"] ?? null) : null);
                        echo "\" class=\"custom-item-name form-control\" placeholder=\"";
                        echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["cmd_second_item"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["name"] ?? null) : null);
                        echo "\">
            </span>
            <span class=\"item-link\">

              ";
                        // line 95
                        if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["cmd_second_item"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["custom_route"] ?? null) : null)) {
                            // line 96
                            echo "
                <input type=\"hidden\" name=\"custom-menu[";
                            // line 97
                            echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["cmd_second_item"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["id"] ?? null) : null);
                            echo "][custom_route]\" value=\"1\">
                <input type=\"text\" name=\"custom-menu[";
                            // line 98
                            echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["cmd_second_item"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["id"] ?? null) : null);
                            echo "][item_link]\" value=\"";
                            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["cmd_second_item"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["custom_route"] ?? null) : null);
                            echo "\" class=\"custom-item-link custom_route_input form-control\" placeholder=\"";
                            echo ($context["text_custom_route"] ?? null);
                            echo "\"  title=\"";
                            echo ($context["help_custom_route"] ?? null);
                            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\">

              ";
                        } else {
                            // line 101
                            echo "
                <select name=\"custom-menu[";
                            // line 102
                            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["cmd_second_item"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["id"] ?? null) : null);
                            echo "][item_link]\" class=\"form-control custom-item-link\">
                  ";
                            // line 103
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["modules_for_links"] ?? null));
                            foreach ($context['_seq'] as $context["_key"] => $context["mfl"]) {
                                // line 104
                                echo "                  <optgroup label=\"";
                                echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["mfl"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["text"] ?? null) : null);
                                echo "\">
                  ";
                                // line 105
                                if ( !(($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["mfl"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["extra"] ?? null) : null)) {
                                    // line 106
                                    echo "                  <!-- ? -->
                  ";
                                } else {
                                    // line 108
                                    echo "                  ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["mfl"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["extra"] ?? null) : null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ex_mfl"]) {
                                        // line 109
                                        echo "                  <option ";
                                        echo ((((("index.php?route=" . (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["ex_mfl"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["edit"] ?? null) : null)) . "&") == (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["cmd_second_item"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["href"] ?? null) : null))) ? ("selected") : (""));
                                        echo " value=\"";
                                        echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["ex_mfl"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["edit"] ?? null) : null);
                                        echo "\">";
                                        echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["ex_mfl"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["name"] ?? null) : null);
                                        echo "</option>
                  ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex_mfl'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 111
                                    echo "                  ";
                                }
                                // line 112
                                echo "                  </optgroup>
                  ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mfl'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 114
                            echo "                </select>

              ";
                        }
                        // line 117
                        echo "
            </span>
            <span class=\"item-icons-custom dd-nodrag\">
              <span class=\"fa fa-times fa-lg custom-removebtn\" style=\"color: red;\" data-del-id=\"";
                        // line 120
                        echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["cmd_second_item"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["id"] ?? null) : null);
                        echo "\"></span>
            </span>
          </div>


          <!-- third level -->
          ";
                        // line 126
                        if ((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["cmd_second_item"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["children"] ?? null) : null)) {
                            // line 127
                            echo "          <ol class=\"dd-list dd-nodrag\">
          ";
                            // line 128
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["cmd_second_item"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["children"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["cmd_third_item"]) {
                                // line 129
                                echo "          <li id=\"dd_custom_";
                                echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["cmd_third_item"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["id"] ?? null) : null);
                                echo "\" class=\"dd-item dd-nodrag custom-menu-item\" data-id=\"";
                                echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["cmd_third_item"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["id"] ?? null) : null);
                                echo "\">

            <div class=\"dd-handle form-inline\">

              <span class=\"item-icon-picker btn-group\">
                <button type=\"button\" class=\"btn btn-default iconpicker-component\" style=\"pointer-events: none\"><i class=\"fa fa-fw fa-heart\"></i></button>
                <button type=\"button\" class=\"icp btn-default icp-dd btn dropdown-toggle supericon-yep\" data-selected=\"";
                                // line 135
                                echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["cmd_third_item"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["icon"] ?? null) : null);
                                echo "\" data-id=\"";
                                echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["cmd_third_item"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["id"] ?? null) : null);
                                echo "\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                  <span class=\"sr-only\">Toggle Dropdown</span>
                </button>
                <span class=\"dropdown-menu\"></span>
                <input type=\"hidden\" name=\"custom-menu[";
                                // line 140
                                echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["cmd_third_item"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["id"] ?? null) : null);
                                echo "][icon]\" value=\"";
                                echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["cmd_third_item"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["icon"] ?? null) : null);
                                echo "\">
              </span>

              <span class=\"item-name\">
                <input type=\"item-name\" name=\"custom-menu[";
                                // line 144
                                echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["cmd_third_item"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["id"] ?? null) : null);
                                echo "][name]\" value=\"";
                                echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["cmd_third_item"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["name"] ?? null) : null);
                                echo "\" class=\"custom-item-name form-control\" placeholder=\"";
                                echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["cmd_third_item"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["name"] ?? null) : null);
                                echo "\">
              </span>
              <span class=\"item-link\">

                ";
                                // line 148
                                if ((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["cmd_third_item"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["custom_route"] ?? null) : null)) {
                                    // line 149
                                    echo "
                  <input type=\"hidden\" name=\"custom-menu[";
                                    // line 150
                                    echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["cmd_third_item"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["id"] ?? null) : null);
                                    echo "][custom_route]\" value=\"1\">
                  <input type=\"text\" name=\"custom-menu[";
                                    // line 151
                                    echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["cmd_third_item"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["id"] ?? null) : null);
                                    echo "][item_link]\" value=\"";
                                    echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["cmd_third_item"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["custom_route"] ?? null) : null);
                                    echo "\" class=\"custom-item-link custom_route_input form-control\" placeholder=\"";
                                    echo ($context["text_custom_route"] ?? null);
                                    echo "\"  title=\"";
                                    echo ($context["help_custom_route"] ?? null);
                                    echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\">

                ";
                                } else {
                                    // line 154
                                    echo "
                  <select name=\"custom-menu[";
                                    // line 155
                                    echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["cmd_third_item"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["id"] ?? null) : null);
                                    echo "][item_link]\" class=\"form-control custom-item-link\">
                    ";
                                    // line 156
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(($context["modules_for_links"] ?? null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["mfl"]) {
                                        // line 157
                                        echo "                    <optgroup label=\"";
                                        echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["mfl"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["text"] ?? null) : null);
                                        echo "\">
                    ";
                                        // line 158
                                        if ( !(($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["mfl"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["extra"] ?? null) : null)) {
                                            // line 159
                                            echo "                    <!-- ? -->
                    ";
                                        } else {
                                            // line 161
                                            echo "                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["mfl"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["extra"] ?? null) : null));
                                            foreach ($context['_seq'] as $context["_key"] => $context["ex_mfl"]) {
                                                // line 162
                                                echo "                      <option ";
                                                echo ((((("index.php?route=" . (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["ex_mfl"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["edit"] ?? null) : null)) . "&") == (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["cmd_third_item"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["href"] ?? null) : null))) ? ("selected") : (""));
                                                echo " value=\"";
                                                echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["ex_mfl"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["edit"] ?? null) : null);
                                                echo "\">";
                                                echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["ex_mfl"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["name"] ?? null) : null);
                                                echo "</option>
                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex_mfl'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 164
                                            echo "                    ";
                                        }
                                        // line 165
                                        echo "                    </optgroup>
                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mfl'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 167
                                    echo "                  </select>

                ";
                                }
                                // line 170
                                echo "
              </span>
              <span class=\"item-icons-custom dd-nodrag\">
                <span class=\"fa fa-times fa-lg custom-removebtn\" style=\"color: red;\" data-del-id=\"";
                                // line 173
                                echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["cmd_third_item"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["id"] ?? null) : null);
                                echo "\"></span>
              </span>
            </div>

          </li>
          ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd_third_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 179
                            echo "          </ol>
          ";
                        }
                        // line 181
                        echo "

        </li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd_second_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    echo "        </ol>
        ";
                }
                // line 187
                echo "

      </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd_first_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "
</ol>
";
        }
        // line 194
        echo "
<template id=\"new_custom_item\">
  <li id=\"dd_custom_%%new_custom_id%%\" class=\"dd-item dd-nodrag custom-menu-item\" data-id=\"%%new_custom_id%%\">

      <div class=\"dd-handle form-inline\">
          <span class=\"item-icon-picker btn-group\">
            <button type=\"button\" class=\"btn btn-default iconpicker-component\" style=\"pointer-events: none\"><i class=\"fa fa-fw fa-flask\"></i></button>
            <button type=\"button\" class=\"icp btn-default icp-dd btn dropdown-toggle supericon-yep\" data-selected=\"fa-flask\" data-id=\"%%new_custom_id%%\" data-toggle=\"dropdown\">
              <span class=\"caret\"></span>
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <span class=\"dropdown-menu\"></span>
            <input type=\"hidden\" name=\"custom-menu[%%new_custom_id%%][icon]\" value=\"fa-flask\">
          </span>

        <span class=\"item-name\">
          <input type=\"item-name\" name=\"custom-menu[%%new_custom_id%%][name]\" value=\"Shopunity\" class=\"custom-item-name form-control\" placeholder=\"";
        // line 210
        echo ($context["text_phd_item_name"] ?? null);
        echo "\">
        </span>

        <span class=\"item-link\">
          <select name=\"custom-menu[%%new_custom_id%%][item_link]\" class=\"form-control custom-item-link\">
            ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules_for_links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mfl"]) {
            // line 216
            echo "            <optgroup label=\"";
            echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["mfl"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["text"] ?? null) : null);
            echo "\">
            ";
            // line 217
            if ( !(($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["mfl"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["extra"] ?? null) : null)) {
                // line 218
                echo "            <!-- ? -->
            ";
            } else {
                // line 220
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["mfl"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["extra"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ex_mfl"]) {
                    // line 221
                    echo "            <option ";
                    echo ((((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["ex_mfl"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["edit"] ?? null) : null) == "extension/module/d_shopunity")) ? ("selected") : (""));
                    echo " value=\"";
                    echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["ex_mfl"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["edit"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["ex_mfl"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["name"] ?? null) : null);
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex_mfl'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                echo "            ";
            }
            // line 224
            echo "            </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mfl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "          </select>
        </span>

        <span class=\"item-icons-custom dd-nodrag\">
          <span class=\"fa fa-times fa-lg custom-removebtn\" style=\"color: red;\" data-del-id=\"%%new_custom_id%%\" aria-hidden=\"true\"></span>
        </span>
      </div>
  </li>
</template>

<template id=\"new_custom_route_item\">
  <li id=\"dd_custom_%%new_custom_id%%\" class=\"dd-item dd-nodrag custom-menu-item\" data-id=\"%%new_custom_id%%\">

      <div class=\"dd-handle form-inline\">
          <span class=\"item-icon-picker btn-group\">
            <button type=\"button\" class=\"btn btn-default iconpicker-component\" style=\"pointer-events: none\"><i class=\"fa fa-fw fa-flask\"></i></button>
            <button type=\"button\" class=\"icp btn-default icp-dd btn dropdown-toggle supericon-yep\" data-selected=\"fa-flask\" data-id=\"%%new_custom_id%%\" data-toggle=\"dropdown\">
              <span class=\"caret\"></span>
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <span class=\"dropdown-menu\"></span>
            <input type=\"hidden\" name=\"custom-menu[%%new_custom_id%%][icon]\" value=\"fa-flask\">
          </span>

        <span class=\"item-name\">
          <input type=\"item-name\" name=\"custom-menu[%%new_custom_id%%][name]\" value=\"Shopunity\" class=\"custom-item-name form-control\" placeholder=\"";
        // line 251
        echo ($context["text_phd_item_name"] ?? null);
        echo "\">
        </span>

        <span class=\"item-link\">
          <input type=\"hidden\" name=\"custom-menu[%%new_custom_id%%][custom_route]\" value=\"1\">
          <input type=\"text\" name=\"custom-menu[%%new_custom_id%%][item_link]\" value=\"\" class=\"custom-item-link custom_route_input form-control\" placeholder=\"";
        // line 256
        echo ($context["text_custom_route"] ?? null);
        echo "\"  title=\"";
        echo ($context["help_custom_route"] ?? null);
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\">
        </span>

        <span class=\"item-icons-custom dd-nodrag\">
          <span class=\"fa fa-times fa-lg custom-removebtn\" style=\"color: red;\" data-del-id=\"%%new_custom_id%%\" aria-hidden=\"true\"></span>
        </span>
      </div>
  </li>
</template>

";
    }

    public function getTemplateName()
    {
        return "extension/module/d_admin_menu/d_admin_menu_custom_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 256,  619 => 251,  592 => 226,  585 => 224,  582 => 223,  569 => 221,  564 => 220,  560 => 218,  558 => 217,  553 => 216,  549 => 215,  541 => 210,  523 => 194,  518 => 191,  509 => 187,  505 => 185,  496 => 181,  492 => 179,  480 => 173,  475 => 170,  470 => 167,  463 => 165,  460 => 164,  447 => 162,  442 => 161,  438 => 159,  436 => 158,  431 => 157,  427 => 156,  423 => 155,  420 => 154,  408 => 151,  404 => 150,  401 => 149,  399 => 148,  388 => 144,  379 => 140,  369 => 135,  357 => 129,  353 => 128,  350 => 127,  348 => 126,  339 => 120,  334 => 117,  329 => 114,  322 => 112,  319 => 111,  306 => 109,  301 => 108,  297 => 106,  295 => 105,  290 => 104,  286 => 103,  282 => 102,  279 => 101,  267 => 98,  263 => 97,  260 => 96,  258 => 95,  247 => 91,  238 => 87,  228 => 82,  216 => 75,  213 => 74,  209 => 73,  206 => 72,  204 => 71,  195 => 65,  190 => 62,  185 => 59,  178 => 57,  175 => 56,  162 => 54,  157 => 53,  153 => 51,  151 => 50,  146 => 49,  142 => 48,  137 => 47,  125 => 44,  121 => 43,  118 => 42,  116 => 41,  105 => 37,  96 => 33,  86 => 28,  74 => 22,  70 => 21,  65 => 18,  63 => 17,  59 => 15,  54 => 12,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/d_admin_menu/d_admin_menu_custom_section.twig", "");
    }
}
