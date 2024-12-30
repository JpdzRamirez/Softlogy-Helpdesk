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

/* pages/setup/apiclient.html.twig */
class __TwigTemplate_496de1f167ac1cc532b835f5246da875 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/setup/apiclient.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/setup/apiclient.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownArrayField", ["dolog_method", (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["dolog_method"] ?? null) : null),         // line 42
($context["log_methods"] ?? null), __("Log connections")], 39, $context, $this->getSourceContext());
        // line 44
        yield "

    <div class=\"hr-text\">
        <i class=\"ti ti-filter\"></i>
        <span>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Filter access"), "html", null, true);
        yield "</span>
    </div>
    <p><em>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Leave these parameters empty to disable API access restriction"), "html", null, true);
        yield "</em></p>


    ";
        // line 53
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["ipv4_range_start", (( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source,         // line 55
($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["ipv4_range_start"] ?? null) : null))) ? (long2ip((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["ipv4_range_start"] ?? null) : null))) : ("")), __("IPv4 address range start")], 53, $context, $this->getSourceContext());
        // line 57
        yield "

    ";
        // line 59
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["ipv4_range_end", (( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["ipv4_range_end"] ?? null) : null))) ? (long2ip((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["ipv4_range_end"] ?? null) : null))) : ("")), __("IPv4 address range end")], 59, $context, $this->getSourceContext());
        // line 63
        yield "

    ";
        // line 65
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["ipv6", (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["ipv6"] ?? null) : null), __("IPv6 address")], 65, $context, $this->getSourceContext());
        // line 69
        yield "

    ";
        // line 71
        $context["reset_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 72
            yield "        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_checkboxField", ["_reset_app_token", ((CoreExtension::getAttribute($this->env, $this->source,             // line 74
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 74)) ? (1) : (0)), __("Regenerate"), ["full_width" => true]], 72, $context, $this->getSourceContext());
            // line 79
            yield "
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        yield "
    ";
        // line 82
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["app_token", (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source,         // line 84
($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["app_token"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Application token"), "app_token"), ["add_field_html" =>         // line 87
($context["reset_btn"] ?? null)]], 82, $context, $this->getSourceContext());
        // line 89
        yield "

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/setup/apiclient.html.twig";
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
        return array (  117 => 89,  115 => 87,  114 => 84,  113 => 82,  110 => 81,  105 => 79,  103 => 74,  101 => 72,  99 => 71,  95 => 69,  93 => 67,  92 => 65,  88 => 63,  86 => 61,  85 => 59,  81 => 57,  79 => 55,  78 => 53,  72 => 50,  67 => 48,  61 => 44,  59 => 42,  58 => 41,  56 => 39,  52 => 38,  47 => 34,  45 => 36,  43 => 35,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/setup/apiclient.html.twig", "C:\\laragon\\www\\Softlogy\\templates\\pages\\setup\\apiclient.html.twig");
    }
}
