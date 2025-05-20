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

/* @SyliusRefundPlugin/_shipping.html.twig */
class __TwigTemplate_25b64d657ccaf40ea4a7741c102f2ff5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_shipping.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_shipping.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["shipmentRefundType"] = Twig\Extension\CoreExtension::constant("Sylius\\RefundPlugin\\Model\\RefundType::SHIPMENT");
        // line 4
        yield "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "getAdjustments", ["shipping"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["shippingAdjustment"]) {
            // line 6
            yield "    ";
            $context["shipment"] = CoreExtension::getAttribute($this->env, $this->source, $context["shippingAdjustment"], "shipment", [], "any", false, false, false, 6);
            // line 7
            yield "
    <tr class=\"shipment\">
        <td class=\"single line\">
            ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipment"), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shippingAdjustment"], "label", [], "any", false, false, false, 10), "html", null, true);
            yield "
        </td>
        <td class=\"right aligned total\">
            <span class=\"unit-total\">";
            // line 13
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 13, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 13, $this->source); })()), "adjustmentsTotal", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "currencyCode", [], "any", false, false, false, 13)]);
            yield "</span>
            ";
            // line 14
            $context["refundedTotal"] = $this->extensions['Sylius\RefundPlugin\Twig\OrderRefundsExtension']->getUnitRefundedTotal(CoreExtension::getAttribute($this->env, $this->source, $context["shippingAdjustment"], "id", [], "any", false, false, false, 14), (isset($context["shipmentRefundType"]) || array_key_exists("shipmentRefundType", $context) ? $context["shipmentRefundType"] : (function () { throw new RuntimeError('Variable "shipmentRefundType" does not exist.', 14, $this->source); })()));
            // line 15
            yield "            ";
            if (((isset($context["refundedTotal"]) || array_key_exists("refundedTotal", $context) ? $context["refundedTotal"] : (function () { throw new RuntimeError('Variable "refundedTotal" does not exist.', 15, $this->source); })()) != 0)) {
                // line 16
                yield "                <br/><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.refunded"), "html", null, true);
                yield ":</strong> <span class=\"unit-refunded-total\">";
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 16, $this->getSourceContext())->macro_format(...[(isset($context["refundedTotal"]) || array_key_exists("refundedTotal", $context) ? $context["refundedTotal"] : (function () { throw new RuntimeError('Variable "refundedTotal" does not exist.', 16, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "currencyCode", [], "any", false, false, false, 16)]);
                yield "</span>
            ";
            }
            // line 18
            yield "        </td>
        <td class=\"aligned collapsing partial-refund\">

            <div class=\"ui labeled input\">
                <div class=\"ui label\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_currency_symbol')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "currencyCode", [], "any", false, false, false, 22)), "html", null, true);
            yield "</div>
                ";
            // line 23
            $context["inputName"] = (("sylius_refund_shipments[" . CoreExtension::getAttribute($this->env, $this->source, $context["shippingAdjustment"], "id", [], "any", false, false, false, 23)) . "][amount]");
            // line 24
            yield "                <input data-refund-input type=\"number\" step=\"0.01\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "\" ";
            if ((($tmp =  !$this->extensions['Sylius\RefundPlugin\Twig\OrderRefundsExtension']->canUnitBeRefunded(CoreExtension::getAttribute($this->env, $this->source, $context["shippingAdjustment"], "id", [], "any", false, false, false, 24), (isset($context["shipmentRefundType"]) || array_key_exists("shipmentRefundType", $context) ? $context["shipmentRefundType"] : (function () { throw new RuntimeError('Variable "shipmentRefundType" does not exist.', 24, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " disabled";
            }
            yield "/>
            </div>
        </td>
        <td class=\"aligned collapsing\">
            <button data-refund=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\RefundPlugin\Twig\OrderRefundsExtension']->getUnitRefundLeft(CoreExtension::getAttribute($this->env, $this->source, $context["shippingAdjustment"], "id", [], "any", false, false, false, 28), (isset($context["shipmentRefundType"]) || array_key_exists("shipmentRefundType", $context) ? $context["shipmentRefundType"] : (function () { throw new RuntimeError('Variable "shipmentRefundType" does not exist.', 28, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 28, $this->source); })()), "adjustmentsTotal", [], "any", false, false, false, 28)), "html", null, true);
            yield "\" type=\"button\" class=\"ui button primary\" ";
            if ((($tmp =  !$this->extensions['Sylius\RefundPlugin\Twig\OrderRefundsExtension']->canUnitBeRefunded(CoreExtension::getAttribute($this->env, $this->source, $context["shippingAdjustment"], "id", [], "any", false, false, false, 28), (isset($context["shipmentRefundType"]) || array_key_exists("shipmentRefundType", $context) ? $context["shipmentRefundType"] : (function () { throw new RuntimeError('Variable "shipmentRefundType" does not exist.', 28, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " disabled";
            }
            yield ">
                ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.refund"), "html", null, true);
            yield "
            </button>
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['shippingAdjustment'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusRefundPlugin/_shipping.html.twig";
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
        return array (  127 => 29,  119 => 28,  107 => 24,  105 => 23,  101 => 22,  95 => 18,  87 => 16,  84 => 15,  82 => 14,  78 => 13,  70 => 10,  65 => 7,  62 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/Common/Macro/money.html.twig' as money %}

{% set shipmentRefundType = constant('Sylius\\\\RefundPlugin\\\\Model\\\\RefundType::SHIPMENT') %}

{% for shippingAdjustment in order.getAdjustments('shipping') %}
    {% set shipment = shippingAdjustment.shipment %}

    <tr class=\"shipment\">
        <td class=\"single line\">
            {{ 'sylius.ui.shipment'|trans }}: {{ shippingAdjustment.label }}
        </td>
        <td class=\"right aligned total\">
            <span class=\"unit-total\">{{ money.format(shipment.adjustmentsTotal, order.currencyCode) }}</span>
            {% set refundedTotal = unit_refunded_total(shippingAdjustment.id, shipmentRefundType) %}
            {% if refundedTotal != 0 %}
                <br/><strong>{{ 'sylius_refund.ui.refunded'|trans }}:</strong> <span class=\"unit-refunded-total\">{{ money.format(refundedTotal, order.currencyCode) }}</span>
            {% endif %}
        </td>
        <td class=\"aligned collapsing partial-refund\">

            <div class=\"ui labeled input\">
                <div class=\"ui label\">{{ order.currencyCode|sylius_currency_symbol }}</div>
                {% set inputName = \"sylius_refund_shipments[\"~shippingAdjustment.id~\"][amount]\" %}
                <input data-refund-input type=\"number\" step=\"0.01\" name=\"{{ inputName }}\" {% if not can_unit_be_refunded(shippingAdjustment.id, shipmentRefundType) %} disabled{% endif %}/>
            </div>
        </td>
        <td class=\"aligned collapsing\">
            <button data-refund=\"{{ unit_refund_left(shippingAdjustment.id, shipmentRefundType, shipment.adjustmentsTotal) }}\" type=\"button\" class=\"ui button primary\" {% if not can_unit_be_refunded(shippingAdjustment.id, shipmentRefundType) %} disabled{% endif %}>
                {{ 'sylius_refund.ui.refund'|trans }}
            </button>
        </td>
    </tr>
{% endfor %}
", "@SyliusRefundPlugin/_shipping.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/_shipping.html.twig");
    }
}
