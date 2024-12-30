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

/* pages/login_error.html.twig */
class __TwigTemplate_937424cdbb95fca02eb991034b743f16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "pages/login_error.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "<div class=\"alert alert-warning\">
    <div class=\"d-flex align-items-center\">
        <div class=\"me-4\">
            <i class=\"ti ti-alert-triangle fa-2x\"></i>
        </div>
        <div>
            <h4 class=\"alert-title\">
                ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Error"), "html", null, true);
        yield "
            </h4>
            <div>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 48
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
            yield "<br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "            </div>

            <a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["login_url"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-primary mt-3\">
                <i class=\"ti ti-login\"></i>
                <span>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Log in again"), "html", null, true);
        yield "</span>
            </a>
        </div>
    </div>
</div>

";
        return; yield '';
    }

    // line 62
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<script type=\"text/javascript\">
/**
* Preloader
*/
const preloader = document.querySelector(\"#preloader\");

if (preloader) {
   window.addEventListener(\"load\", () => {
       // Añadir clase de fade-out
       setTimeout(() => {
         preloader.classList.add(\"fade-out\");
       }, 1000);
       
       // Esperar a que termine la animación antes de eliminarlo
       setTimeout(() => {
           preloader.remove();
         }, 1500);
   });
}

</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/login_error.html.twig";
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
        return array (  101 => 62,  89 => 54,  84 => 52,  80 => 50,  71 => 48,  67 => 47,  61 => 44,  52 => 37,  48 => 36,  37 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/login_error.html.twig", "C:\\laragon\\www\\Softlogy\\templates\\pages\\login_error.html.twig");
    }
}
