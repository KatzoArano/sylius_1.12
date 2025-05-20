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

/* @SyliusAdmin/Order/Show/Summary/_item.html.twig */
class __TwigTemplate_3d78ef9c1f43a6639a2c12b496271b2a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Summary/_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Summary/_item.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["orderPromotionAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        $context["unitPromotionAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT");
        // line 5
        $context["shippingAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 6
        $context["taxAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::TAX_ADJUSTMENT");
        // line 7
        yield "
";
        // line 8
        $context["variant"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "variant", [], "any", false, false, false, 8);
        // line 9
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 9, $this->source); })()), "product", [], "any", false, false, false, 9);
        // line 10
        yield "
";
        // line 11
        $context["aggregatedUnitPromotionAdjustments"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "getAdjustmentsTotalRecursively", [(isset($context["unitPromotionAdjustment"]) || array_key_exists("unitPromotionAdjustment", $context) ? $context["unitPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "unitPromotionAdjustment" does not exist.', 11, $this->source); })())], "method", false, false, false, 11) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "getAdjustmentsTotalRecursively", [(isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "orderPromotionAdjustment" does not exist.', 11, $this->source); })())], "method", false, false, false, 11));
        // line 12
        $context["subtotal"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "unitPrice", [], "any", false, false, false, 12) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "quantity", [], "any", false, false, false, 12)) + (isset($context["aggregatedUnitPromotionAdjustments"]) || array_key_exists("aggregatedUnitPromotionAdjustments", $context) ? $context["aggregatedUnitPromotionAdjustments"] : (function () { throw new RuntimeError('Variable "aggregatedUnitPromotionAdjustments" does not exist.', 12, $this->source); })()));
        // line 13
        yield "
";
        // line 14
        $context["taxIncluded"] = $this->extensions['Sylius\Bundle\AdminBundle\Twig\OrderUnitTaxesExtension']->getIncludedTax((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()));
        // line 15
        $context["taxExcluded"] = $this->extensions['Sylius\Bundle\AdminBundle\Twig\OrderUnitTaxesExtension']->getExcludedTax((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()));
        // line 16
        yield "
<tr>
    <td class=\"single line\">
        ";
        // line 19
        yield from $this->load("@SyliusAdmin/Product/_info.html.twig", 19)->unwrap()->yield($context);
        // line 20
        yield "    </td>
    <td class=\"right aligned unit-price\">
        ";
        // line 22
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 22, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "unitPrice", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "currencyCode", [], "any", false, false, false, 22)]);
        yield "
    </td>
    <td class=\"right aligned unit-discount\">
        ";
        // line 25
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 25, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "units", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25), "adjustmentsTotal", [(isset($context["unitPromotionAdjustment"]) || array_key_exists("unitPromotionAdjustment", $context) ? $context["unitPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "unitPromotionAdjustment" does not exist.', 25, $this->source); })())], "method", false, false, false, 25), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "currencyCode", [], "any", false, false, false, 25)]);
        yield "
    </td>
    <td class=\"right aligned unit-order-discount\">
        <span style=\"font-style: italic;\">~ ";
        // line 28
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 28, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "units", [], "any", false, false, false, 28), "first", [], "any", false, false, false, 28), "adjustmentsTotal", [(isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "orderPromotionAdjustment" does not exist.', 28, $this->source); })())], "method", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()), "currencyCode", [], "any", false, false, false, 28)]);
        yield "</span>
    </td>
    <td class=\"right aligned discounted-unit-price\">
        ";
        // line 31
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 31, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "fullDiscountedUnitPrice", [], "any", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 31, $this->source); })()), "currencyCode", [], "any", false, false, false, 31)]);
        yield "
    </td>
    <td class=\"right aligned quantity\">
        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "quantity", [], "any", false, false, false, 34), "html", null, true);
        yield "
    </td>
    <td class=\"right aligned subtotal\">
      ";
        // line 37
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 37, $this->getSourceContext())->macro_format(...[(isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 37, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 37, $this->source); })()), "currencyCode", [], "any", false, false, false, 37)]);
        yield "
    </td>
    <td class=\"right aligned tax\">
        <div class=\"tax-excluded\">";
        // line 40
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 40, $this->getSourceContext())->macro_format(...[(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 40, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "currencyCode", [], "any", false, false, false, 40)]);
        yield "</div>
        <div class=\"tax-disabled\">
            <div class=\"tax-included\"> ";
        // line 42
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 42, $this->getSourceContext())->macro_format(...[(isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 42, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 42, $this->source); })()), "currencyCode", [], "any", false, false, false, 42)]);
        yield "
            </div>
            <small>(";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
        yield ")</small>
        </div>
    </td>
    <td class=\"right aligned total\">
        ";
        // line 48
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 48, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "total", [], "any", false, false, false, 48), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "currencyCode", [], "any", false, false, false, 48)]);
        yield "
    </td>
</tr>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/Order/Show/Summary/_item.html.twig";
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
        return array (  146 => 48,  139 => 44,  134 => 42,  129 => 40,  123 => 37,  117 => 34,  111 => 31,  105 => 28,  99 => 25,  93 => 22,  89 => 20,  87 => 19,  82 => 16,  80 => 15,  78 => 14,  75 => 13,  73 => 12,  71 => 11,  68 => 10,  66 => 9,  64 => 8,  61 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set unitPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT') %}
{% set shippingAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::SHIPPING_ADJUSTMENT') %}
{% set taxAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::TAX_ADJUSTMENT') %}

{% set variant = item.variant %}
{% set product = variant.product %}

{% set aggregatedUnitPromotionAdjustments = item.getAdjustmentsTotalRecursively(unitPromotionAdjustment) + item.getAdjustmentsTotalRecursively(orderPromotionAdjustment) %}
{% set subtotal = (item.unitPrice * item.quantity) + aggregatedUnitPromotionAdjustments %}

{% set taxIncluded = sylius_admin_order_unit_tax_included(item) %}
{% set taxExcluded = sylius_admin_order_unit_tax_excluded(item) %}

<tr>
    <td class=\"single line\">
        {% include '@SyliusAdmin/Product/_info.html.twig' %}
    </td>
    <td class=\"right aligned unit-price\">
        {{ money.format(item.unitPrice, order.currencyCode) }}
    </td>
    <td class=\"right aligned unit-discount\">
        {{ money.format(item.units.first.adjustmentsTotal(unitPromotionAdjustment), order.currencyCode) }}
    </td>
    <td class=\"right aligned unit-order-discount\">
        <span style=\"font-style: italic;\">~ {{ money.format(item.units.first.adjustmentsTotal(orderPromotionAdjustment), order.currencyCode) }}</span>
    </td>
    <td class=\"right aligned discounted-unit-price\">
        {{ money.format(item.fullDiscountedUnitPrice, order.currencyCode) }}
    </td>
    <td class=\"right aligned quantity\">
        {{ item.quantity }}
    </td>
    <td class=\"right aligned subtotal\">
      {{ money.format(subtotal, order.currencyCode) }}
    </td>
    <td class=\"right aligned tax\">
        <div class=\"tax-excluded\">{{ money.format(taxExcluded, order.currencyCode) }}</div>
        <div class=\"tax-disabled\">
            <div class=\"tax-included\"> {{ money.format(taxIncluded, order.currencyCode) }}
            </div>
            <small>({{ 'sylius.ui.included_in_price'|trans }})</small>
        </div>
    </td>
    <td class=\"right aligned total\">
        {{ money.format(item.total, order.currencyCode) }}
    </td>
</tr>
", "@SyliusAdmin/Order/Show/Summary/_item.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Summary/_item.html.twig");
    }
}
