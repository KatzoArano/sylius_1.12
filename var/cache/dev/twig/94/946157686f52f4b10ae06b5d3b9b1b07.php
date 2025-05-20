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

/* @SyliusShop/Checkout/_summary.html.twig */
class __TwigTemplate_b7812f5c4032157fdb4d0f1cbb92e3c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_summary.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_summary.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["itemsSubtotal"] = $this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderItemsSubtotalExtension']->getSubtotal((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()));
        // line 4
        $context["taxIncluded"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "getTaxIncludedTotal", [], "method", false, false, false, 4);
        // line 5
        $context["taxExcluded"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "getTaxExcludedTotal", [], "method", false, false, false, 5);
        // line 6
        yield "
<div class=\"ui segment\">
    <table class=\"ui very basic table\" id=\"sylius-checkout-subtotal\" ";
        // line 8
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("checkout-subtotal");
        yield ">
        <thead>
        <tr>
            <th class=\"sylius-table-column-item\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.item"), "html", null, true);
        yield "</th>
            <th class=\"sylius-table-column-qty\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.qty"), "html", null, true);
        yield "</th>
            <th class=\"sylius-table-column-subtotal\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subtotal"), "html", null, true);
        yield "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "items", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            yield "            <tr>
                <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getVariant", [], "any", false, false, false, 19), "product", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                <td class=\"center aligned\" ";
            // line 20
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("item-subtotal-quantity", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 20), "product", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20));
            yield ">
                    ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 21), "html", null, true);
            yield "
                </td>
                <td class=\"right aligned\" id=\"sylius-item-";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 23), "product", [], "any", false, false, false, 23), "slug", [], "any", false, false, false, 23), "html", null, true);
            yield "-subtotal\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("item-subtotal", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 23), "product", [], "any", false, false, false, 23), "slug", [], "any", false, false, false, 23));
            yield ">
                    ";
            // line 24
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 24, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "subtotal", [], "any", false, false, false, 24)]);
            yield "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"1\" style=\"border-top: 2px solid #ddd;\">
                    <strong>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items_total"), "html", null, true);
        yield ":</strong>
                </td>
                <td colspan=\"2\" id=\"sylius-summary-items-subtotal\" class=\"right aligned\" style=\"border-top: 2px solid #ddd;\">
                    ";
        // line 35
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 35, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["itemsSubtotal"]) || array_key_exists("itemsSubtotal", $context) ? $context["itemsSubtotal"] : (function () { throw new RuntimeError('Variable "itemsSubtotal" does not exist.', 35, $this->source); })())]);
        yield "
                </td>
            </tr>
            <tr ";
        // line 38
        if (((isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 38, $this->source); })()) &&  !(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 38, $this->source); })()))) {
            yield "class=\"tax-disabled\" ";
        }
        yield ">
                <td colspan=\"1\">
                    <strong>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes_total"), "html", null, true);
        yield ":</strong>
                </td>
                <td colspan=\"2\" class=\"right aligned\">
                    ";
        // line 43
        if (( !(isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 43, $this->source); })()) &&  !(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 43, $this->source); })()))) {
            // line 44
            yield "                        <div id=\"sylius-summary-tax-none\">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 44, $this->getSourceContext())->macro_convertAndFormat(...[0]);
            yield "</div>
                    ";
        }
        // line 46
        yield "                    ";
        if ((($tmp = (isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "                        <div id=\"sylius-summary-tax-excluded\">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 47, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 47, $this->source); })())]);
            yield "</div>
                    ";
        }
        // line 49
        yield "                    ";
        if ((($tmp = (isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                        <div class=\"tax-disabled\">
                            <span id=\"sylius-summary-tax-included\">";
            // line 51
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 51, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 51, $this->source); })())]);
            yield "</span>
                            <div><small>(";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
            yield ")</small></div>
                        </div>
                    ";
        }
        // line 55
        yield "                </td>
            </tr>
            <tr>
                <td colspan=\"1\">
                    <strong>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discount"), "html", null, true);
        yield ":</strong>
                </td>
                <td colspan=\"2\" id=\"sylius-summary-promotion-total\" class=\"right aligned\">
                    ";
        // line 62
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 62, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 62, $this->source); })()), "orderPromotionTotal", [], "any", false, false, false, 62)]);
        yield "
                </td>
            </tr>
            ";
        // line 65
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 65, $this->source); })()), "shipments", [], "any", false, false, false, 65))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "                <tr>
                    <td colspan=\"1\">
                        <strong>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_estimated_cost"), "html", null, true);
            yield ":</strong>
                    </td>
                    <td colspan=\"2\" class=\"right aligned\">
                        ";
            // line 71
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 71, $this->source); })()), "getAdjustmentsTotal", ["shipping"], "method", false, false, false, 71) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 71, $this->source); })()), "shippingTotal", [], "any", false, false, false, 71))) {
                // line 72
                yield "                            <div class=\"old-price\">";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 72, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 72, $this->source); })()), "getAdjustmentsTotal", ["shipping"], "method", false, false, false, 72)]);
                yield "</div>
                        ";
            }
            // line 74
            yield "                        <span id=\"sylius-summary-shipping-total\">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 74, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 74, $this->source); })()), "shippingTotal", [], "any", false, false, false, 74)]);
            yield "</span>
                    </td>
                </tr>
            ";
        }
        // line 78
        yield "            <tr class=\"ui large header\">
                <td colspan=\"1\">
                    <strong>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order_total"), "html", null, true);
        yield ":</strong>
                </td>
                <td colspan=\"2\" id=\"sylius-summary-grand-total\" class=\"right aligned\">
                    ";
        // line 83
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 83, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 83, $this->source); })()), "total", [], "any", false, false, false, 83)]);
        yield "
                </td>
            </tr>
        </tfoot>
    </table>
</div>
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
        return "@SyliusShop/Checkout/_summary.html.twig";
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
        return array (  240 => 83,  234 => 80,  230 => 78,  222 => 74,  216 => 72,  214 => 71,  208 => 68,  204 => 66,  202 => 65,  196 => 62,  190 => 59,  184 => 55,  178 => 52,  174 => 51,  171 => 50,  168 => 49,  162 => 47,  159 => 46,  153 => 44,  151 => 43,  145 => 40,  138 => 38,  132 => 35,  126 => 32,  120 => 28,  110 => 24,  104 => 23,  99 => 21,  95 => 20,  91 => 19,  88 => 18,  84 => 17,  77 => 13,  73 => 12,  69 => 11,  63 => 8,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set itemsSubtotal = sylius_order_items_subtotal(order) %}
{% set taxIncluded = order.getTaxIncludedTotal() %}
{% set taxExcluded = order.getTaxExcludedTotal() %}

<div class=\"ui segment\">
    <table class=\"ui very basic table\" id=\"sylius-checkout-subtotal\" {{ sylius_test_html_attribute('checkout-subtotal') }}>
        <thead>
        <tr>
            <th class=\"sylius-table-column-item\">{{ 'sylius.ui.item'|trans }}</th>
            <th class=\"sylius-table-column-qty\">{{ 'sylius.ui.qty'|trans }}</th>
            <th class=\"sylius-table-column-subtotal\">{{ 'sylius.ui.subtotal'|trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for item in order.items %}
            <tr>
                <td>{{ item.getVariant.product.name }}</td>
                <td class=\"center aligned\" {{ sylius_test_html_attribute('item-subtotal-quantity', item.variant.product.name) }}>
                    {{ item.quantity }}
                </td>
                <td class=\"right aligned\" id=\"sylius-item-{{ item.variant.product.slug }}-subtotal\" {{ sylius_test_html_attribute('item-subtotal', item.variant.product.slug) }}>
                    {{ money.convertAndFormat(item.subtotal) }}
                </td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"1\" style=\"border-top: 2px solid #ddd;\">
                    <strong>{{ 'sylius.ui.items_total'|trans }}:</strong>
                </td>
                <td colspan=\"2\" id=\"sylius-summary-items-subtotal\" class=\"right aligned\" style=\"border-top: 2px solid #ddd;\">
                    {{ money.convertAndFormat(itemsSubtotal) }}
                </td>
            </tr>
            <tr {% if taxIncluded and not taxExcluded %}class=\"tax-disabled\" {% endif %}>
                <td colspan=\"1\">
                    <strong>{{ 'sylius.ui.taxes_total'|trans }}:</strong>
                </td>
                <td colspan=\"2\" class=\"right aligned\">
                    {% if not taxIncluded and not taxExcluded %}
                        <div id=\"sylius-summary-tax-none\">{{ money.convertAndFormat(0) }}</div>
                    {% endif %}
                    {% if taxExcluded %}
                        <div id=\"sylius-summary-tax-excluded\">{{ money.convertAndFormat(taxExcluded) }}</div>
                    {% endif %}
                    {% if taxIncluded %}
                        <div class=\"tax-disabled\">
                            <span id=\"sylius-summary-tax-included\">{{ money.convertAndFormat(taxIncluded) }}</span>
                            <div><small>({{ 'sylius.ui.included_in_price'|trans }})</small></div>
                        </div>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <td colspan=\"1\">
                    <strong>{{ 'sylius.ui.discount'|trans }}:</strong>
                </td>
                <td colspan=\"2\" id=\"sylius-summary-promotion-total\" class=\"right aligned\">
                    {{ money.convertAndFormat(order.orderPromotionTotal) }}
                </td>
            </tr>
            {% if order.shipments is not empty %}
                <tr>
                    <td colspan=\"1\">
                        <strong>{{ 'sylius.ui.shipping_estimated_cost'|trans }}:</strong>
                    </td>
                    <td colspan=\"2\" class=\"right aligned\">
                        {% if order.getAdjustmentsTotal('shipping') > order.shippingTotal %}
                            <div class=\"old-price\">{{ money.convertAndFormat(order.getAdjustmentsTotal('shipping')) }}</div>
                        {% endif %}
                        <span id=\"sylius-summary-shipping-total\">{{ money.convertAndFormat(order.shippingTotal) }}</span>
                    </td>
                </tr>
            {% endif %}
            <tr class=\"ui large header\">
                <td colspan=\"1\">
                    <strong>{{ 'sylius.ui.order_total'|trans }}:</strong>
                </td>
                <td colspan=\"2\" id=\"sylius-summary-grand-total\" class=\"right aligned\">
                    {{ money.convertAndFormat(order.total) }}
                </td>
            </tr>
        </tfoot>
    </table>
</div>
", "@SyliusShop/Checkout/_summary.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/_summary.html.twig");
    }
}
