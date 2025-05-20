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
use Twig\TemplateWrapper;

/* @SyliusUi/Macro/headers.html.twig */
class __TwigTemplate_8df74e6d949c76f10f2da76fde64290e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/headers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/headers.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_default($header = null, $icon = null, $subheader = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "header" => $header,
            "icon" => $icon,
            "subheader" => $subheader,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "default"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            yield "<h1 class=\"ui header\">
    ";
            // line 3
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 3, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 4
                yield "    <i class=\"circular ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 4, $this->source); })()), "html", null, true);
                yield " icon\"></i>
    ";
            }
            // line 6
            yield "    <div class=\"content\">
        ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "
        ";
            // line 8
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["subheader"]) || array_key_exists("subheader", $context) ? $context["subheader"] : (function () { throw new RuntimeError('Variable "subheader" does not exist.', 8, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "        <div class=\"sub header\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subheader"]) || array_key_exists("subheader", $context) ? $context["subheader"] : (function () { throw new RuntimeError('Variable "subheader" does not exist.', 9, $this->source); })()), "html", null, true);
                yield "</div>
        ";
            }
            // line 11
            yield "    </div>
</h1>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusUi/Macro/headers.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  103 => 11,  97 => 9,  95 => 8,  91 => 7,  88 => 6,  82 => 4,  80 => 3,  77 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro default(header, icon, subheader) %}
<h1 class=\"ui header\">
    {% if icon is not empty %}
    <i class=\"circular {{ icon }} icon\"></i>
    {% endif %}
    <div class=\"content\">
        {{ header }}
        {% if subheader is not empty %}
        <div class=\"sub header\">{{ subheader }}</div>
        {% endif %}
    </div>
</h1>
{% endmacro %}
", "@SyliusUi/Macro/headers.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/headers.html.twig");
    }
}
