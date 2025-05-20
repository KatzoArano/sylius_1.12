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

/* @SyliusAdmin/Dashboard/_chart.html.twig */
class __TwigTemplate_7e54c58564ab1af5ca5cbc86b2b899f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_chart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_chart.html.twig"));

        // line 1
        trigger_deprecation('', '', "This template is deprecated since Sylius 1.8"." in \"@SyliusAdmin/Dashboard/_chart.html.twig\" at line 1.");
        // line 2
        [$context["labels"], $context["values"]] =         [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sales_summary"]) || array_key_exists("sales_summary", $context) ? $context["sales_summary"] : (function () { throw new RuntimeError('Variable "sales_summary" does not exist.', 2, $this->source); })()), "months", [], "any", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, (isset($context["sales_summary"]) || array_key_exists("sales_summary", $context) ? $context["sales_summary"] : (function () { throw new RuntimeError('Variable "sales_summary" does not exist.', 2, $this->source); })()), "sales", [], "any", false, false, false, 2)];
        // line 3
        yield "
";
        // line 4
        if (((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 4, $this->source); })()) && (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 4, $this->source); })()))) {
            // line 5
            yield "    <div class=\"ui grid\">
        <div class=\"column\">
            <h3 class=\"ui top attached header\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sales_summary"), "html", null, true);
            yield "</h3>
            <div class=\"ui attached segment\" style=\"height: 400px;\">
                <canvas id=\"dashboard-chart\" data-labels=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 9, $this->source); })())), "html", null, true);
            yield "\" data-values=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 9, $this->source); })())), "html", null, true);
            yield "\" data-currency=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_currency_symbol')->getCallable()((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 9, $this->source); })())), "html", null, true);
            yield "\"></canvas>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/Dashboard/_chart.html.twig";
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
        return array (  66 => 9,  61 => 7,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% deprecated \"This template is deprecated since Sylius 1.8\" %}
{% set labels, values = sales_summary.months, sales_summary.sales %}

{% if labels and values %}
    <div class=\"ui grid\">
        <div class=\"column\">
            <h3 class=\"ui top attached header\">{{ 'sylius.ui.sales_summary'|trans }}</h3>
            <div class=\"ui attached segment\" style=\"height: 400px;\">
                <canvas id=\"dashboard-chart\" data-labels=\"{{ labels|json_encode() }}\" data-values=\"{{ values|json_encode() }}\" data-currency=\"{{ currency|sylius_currency_symbol }}\"></canvas>
            </div>
        </div>
    </div>
{% endif %}
", "@SyliusAdmin/Dashboard/_chart.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_chart.html.twig");
    }
}
