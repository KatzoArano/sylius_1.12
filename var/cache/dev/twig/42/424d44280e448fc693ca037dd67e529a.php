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

/* @SyliusRefundPlugin/_unitTotal.html.twig */
class __TwigTemplate_1d55a8190992bf1b81e2036cb6798b0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_unitTotal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_unitTotal.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
<span class=\"unit-total\">";
        // line 3
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 3, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 3, $this->source); })()), "total", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()), "currencyCode", [], "any", false, false, false, 3)]);
        yield "</span>
";
        // line 4
        $context["refundedTotal"] = $this->extensions['Sylius\RefundPlugin\Twig\OrderRefundsExtension']->getUnitRefundedTotal(CoreExtension::getAttribute($this->env, $this->source, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), Twig\Extension\CoreExtension::constant("Sylius\\RefundPlugin\\Model\\RefundType::ORDER_ITEM_UNIT"));
        // line 5
        if (((isset($context["refundedTotal"]) || array_key_exists("refundedTotal", $context) ? $context["refundedTotal"] : (function () { throw new RuntimeError('Variable "refundedTotal" does not exist.', 5, $this->source); })()) != 0)) {
            // line 6
            yield "    <br/>
    <strong>";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.refunded"), "html", null, true);
            yield ":</strong>
    <span class=\"unit-refunded-total\">";
            // line 8
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 8, $this->getSourceContext())->macro_format(...[(isset($context["refundedTotal"]) || array_key_exists("refundedTotal", $context) ? $context["refundedTotal"] : (function () { throw new RuntimeError('Variable "refundedTotal" does not exist.', 8, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "currencyCode", [], "any", false, false, false, 8)]);
            yield "</span>
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
        return "@SyliusRefundPlugin/_unitTotal.html.twig";
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
        return array (  68 => 8,  64 => 7,  61 => 6,  59 => 5,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/Common/Macro/money.html.twig' as money %}

<span class=\"unit-total\">{{ money.format(unit.total, order.currencyCode) }}</span>
{% set refundedTotal = unit_refunded_total(unit.id, constant('Sylius\\\\RefundPlugin\\\\Model\\\\RefundType::ORDER_ITEM_UNIT')) %}
{% if refundedTotal != 0 %}
    <br/>
    <strong>{{ 'sylius_refund.ui.refunded'|trans }}:</strong>
    <span class=\"unit-refunded-total\">{{ money.format(refundedTotal, order.currencyCode) }}</span>
{% endif %}
", "@SyliusRefundPlugin/_unitTotal.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/_unitTotal.html.twig");
    }
}
