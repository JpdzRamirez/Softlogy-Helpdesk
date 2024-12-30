<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_a7b6d74b7a5a05420d2470e68d5a39cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "
";
        // line 34
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("palette");
        // line 35
        if ( !array_key_exists("css_files", $context)) {
            // line 36
            yield "   ";
            $context["css_files"] = [["path" => "public/lib/base.css"], ["path" => "public/css/softlogy-login.css"], ["path" => (("css/palettes/" .             // line 39
($context["theme"] ?? null)) . ".scss")]];
            // line 41
            yield "   ";
        }
        // line 43
        if ( !array_key_exists("js_files", $context)) {
            // line 44
            yield "   ";
            $context["js_files"] = [["path" => "public/lib/base.js"], ["path" => "js/common.js"], ["path" => "public/lib/fuzzy.js"]];
        }
        // line 50
        yield "
";
        // line 51
        yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/head-login.html.twig");
        yield "
<body class=\"container\">
   <div class=\"spinner-background\" id=\"preloader\">
      <div class=\"spinner\"></div>
   </div>

   <div class=\"d-flex justify-content-center align-items-center h-100\">
      <div class=\"card\">
         ";
        // line 59
        $context["style"] = null;
        // line 60
        yield "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 61
            yield "            ";
            $context["style"] = "max-width: 40rem";
            // line 62
            yield "         ";
        }
        // line 63
        yield "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 64
            yield "            ";
            $context["style"] = "max-width: 60rem";
            // line 65
            yield "         ";
        }
        // line 66
        yield "         <div class=\"card-header\">
\t\t\t\t<h2 style=\"color:white;\">Mesa de Ayuda</h2>
\t\t\t\t<div class=\"d-flex justify-content-end social_icon\">
               <div class=\"brand_logo_container\">
\t\t\t\t\t\t<img src=\"https://media.licdn.com/dms/image/v2/D4E0BAQHv0sOdw1_-Rg/company-logo_200_200/company-logo_200_200/0/1702927309224?e=1741824000&v=beta&t=n9iH1vKIRxtI97mEc0V3a0cx0wTTv8a10591nKGJdO0\" class=\"brand_logo\" alt=\"Logo\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
         <div class=\"card-body\">
            ";
        // line 75
        yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
        // line 76
        yield "\t\t\t</div>
         <div class=\"card-footer\">
            ";
        // line 78
        yield from $this->unwrap()->yieldBlock('footer_block', $context, $blocks);
        // line 79
        yield "\t\t\t</div>
      </div>
   </div>

   ";
        // line 83
        yield from $this->unwrap()->yieldBlock('javascript_block', $context, $blocks);
        // line 84
        yield "</body>
</html>
";
        return; yield '';
    }

    // line 75
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 78
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 83
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/page_card_notlogged.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  143 => 83,  136 => 78,  129 => 75,  122 => 84,  120 => 83,  114 => 79,  112 => 78,  108 => 76,  106 => 75,  95 => 66,  92 => 65,  89 => 64,  86 => 63,  83 => 62,  80 => 61,  77 => 60,  75 => 59,  64 => 51,  61 => 50,  57 => 44,  55 => 43,  52 => 41,  50 => 39,  48 => 36,  46 => 35,  44 => 34,  41 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2024 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

{% set theme = config('palette') %}
{% if css_files is not defined %}
   {% set css_files = [
       {'path': 'public/lib/base.css'},
       {'path': 'public/css/softlogy-login.css'},
       {'path': 'css/palettes/' ~ theme ~ '.scss'}
   ] %}
   {# TODO : load hight contrast css #}
{% endif %}
{% if js_files is not defined %}
   {% set js_files = [
       {'path': 'public/lib/base.js'},
       {'path': 'js/common.js'},
       {'path': 'public/lib/fuzzy.js'}
   ] %}
{% endif %}

{{ include('layout/parts/head-login.html.twig') }}
<body class=\"container\">
   <div class=\"spinner-background\" id=\"preloader\">
      <div class=\"spinner\"></div>
   </div>

   <div class=\"d-flex justify-content-center align-items-center h-100\">
      <div class=\"card\">
         {% set style = null %}
         {% if card_md_width is defined %}
            {% set style = 'max-width: 40rem' %}
         {% endif %}
         {% if card_bg_width is defined %}
            {% set style = 'max-width: 60rem' %}
         {% endif %}
         <div class=\"card-header\">
\t\t\t\t<h2 style=\"color:white;\">Mesa de Ayuda</h2>
\t\t\t\t<div class=\"d-flex justify-content-end social_icon\">
               <div class=\"brand_logo_container\">
\t\t\t\t\t\t<img src=\"https://media.licdn.com/dms/image/v2/D4E0BAQHv0sOdw1_-Rg/company-logo_200_200/company-logo_200_200/0/1702927309224?e=1741824000&v=beta&t=n9iH1vKIRxtI97mEc0V3a0cx0wTTv8a10591nKGJdO0\" class=\"brand_logo\" alt=\"Logo\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
         <div class=\"card-body\">
            {% block content_block %}{% endblock %}
\t\t\t</div>
         <div class=\"card-footer\">
            {% block footer_block %}{% endblock %}
\t\t\t</div>
      </div>
   </div>

   {% block javascript_block %}{% endblock %}
</body>
</html>
", "layout/page_card_notlogged.html.twig", "C:\\laragon\\www\\glpi\\templates\\layout\\page_card_notlogged.html.twig");
    }
}
