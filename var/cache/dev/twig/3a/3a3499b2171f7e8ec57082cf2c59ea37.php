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

/* @SyliusShop/Common/Order/Table/_totals.html.twig */
class __TwigTemplate_b64f57ba0deccc9fd7fca0c904040455 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_totals.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_totals.html.twig"));

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
";
        // line 7
        $context["orderPromotionAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 8
        $context["orderPromotions"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "adjustmentsRecursively", [(isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "orderPromotionAdjustment" does not exist.', 8, $this->source); })())], "method", false, false, false, 8));
        // line 9
        yield "
<tr>
    <th colspan=\"4\" class=\"right aligned\" id=\"subtotal\" ";
        // line 11
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("subtotal");
        yield ">
        ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items_total"), "html", null, true);
        yield ": ";
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 12, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["itemsSubtotal"]) || array_key_exists("itemsSubtotal", $context) ? $context["itemsSubtotal"] : (function () { throw new RuntimeError('Variable "itemsSubtotal" does not exist.', 12, $this->source); })())]);
        yield "
    </th>
</tr>
<tr";
        // line 15
        if (((isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 15, $this->source); })()) &&  !(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 15, $this->source); })()))) {
            yield " class=\"tax-disabled\"";
        }
        yield ">
    <td colspan=\"4\" class=\"right aligned\" id=\"tax-total\">
        <div style=\"display: flex; justify-content: flex-end; align-items: center\">
            <div>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes_total"), "html", null, true);
        yield ":&nbsp;</div>
            <div data-test=\"tax-total\" ";
        // line 19
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("tax-total");
        yield ">
            ";
        // line 20
        if (( !(isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 20, $this->source); })()) &&  !(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "                <div id=\"sylius-cart-tax-none\">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 21, $this->getSourceContext())->macro_convertAndFormat(...[0]);
            yield "</div>
            ";
        }
        // line 23
        yield "            ";
        if ((($tmp = (isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                <div id=\"sylius-cart-tax-excluded\">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 24, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 24, $this->source); })())]);
            yield "</div>
            ";
        }
        // line 26
        yield "            ";
        if ((($tmp = (isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 26, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                <div class=\"tax-disabled\">
                    <small>(";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
            yield ")</small>
                    <span id=\"sylius-cart-tax-included\">";
            // line 29
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 29, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 29, $this->source); })())]);
            yield "</span>
                </div>
            ";
        }
        // line 32
        yield "            </div>
        </div>
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned\" ";
        // line 37
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("promotion-total");
        yield ">
        ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discount"), "html", null, true);
        yield ": ";
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 38, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 38, $this->source); })()), "orderPromotionTotal", [], "any", false, false, false, 38)]);
        yield "
        ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 39, $this->source); })()), "orderPromotionTotal", [], "any", false, false, false, 39) != 0)) {
            // line 40
            yield "            <i
                id=\"order-promotions-details\" class=\"question circle icon popup-js\"
                ";
            // line 42
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("order-promotions-details");
            yield "
                data-html=\"";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new RuntimeError('Variable "orderPromotions" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                yield "<div>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield ": ";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 43, $this->getSourceContext())->macro_convertAndFormat(...[$context["value"]]);
                yield "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\"
            >
            </i>
        ";
        }
        // line 47
        yield "    </td>
</tr>
<tr>
    ";
        // line 50
        yield from $this->load("@SyliusShop/Common/Order/Table/_shipping.html.twig", 50)->unwrap()->yield(CoreExtension::merge($context, ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 50, $this->source); })())]));
        // line 51
        yield "</tr>
<tr>
    <td colspan=\"4\" class=\"right aligned\" style=\"font-size: 1.5em;\" id=\"total\" ";
        // line 53
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("order-total");
        yield ">
        ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
        yield ": ";
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 54, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 54, $this->source); })()), "total", [], "any", false, false, false, 54)]);
        yield "
    </td>
</tr>
";
        // line 57
        if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 57, $this->source); })()), "currencyCode", [], "any", false, false, false, 57) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 57, $this->source); })()), "currencyCode", [], "any", false, false, false, 57))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "    <tr>
        <td colspan=\"4\" class=\"right aligned\" id=\"base-total\" ";
            // line 59
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("summary-order-total");
            yield ">
            ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total_in_base_currency"), "html", null, true);
            yield ": ";
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 60, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 60, $this->source); })()), "total", [], "any", false, false, false, 60), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 60, $this->source); })()), "currencyCode", [], "any", false, false, false, 60)]);
            yield "
        </td>
    </tr>
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
        return "@SyliusShop/Common/Order/Table/_totals.html.twig";
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
        return array (  208 => 60,  204 => 59,  201 => 58,  199 => 57,  191 => 54,  187 => 53,  183 => 51,  181 => 50,  176 => 47,  158 => 43,  154 => 42,  150 => 40,  148 => 39,  142 => 38,  138 => 37,  131 => 32,  125 => 29,  121 => 28,  118 => 27,  115 => 26,  109 => 24,  106 => 23,  100 => 21,  98 => 20,  94 => 19,  90 => 18,  82 => 15,  74 => 12,  70 => 11,  66 => 9,  64 => 8,  62 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set itemsSubtotal = sylius_order_items_subtotal(order) %}
{% set taxIncluded = order.getTaxIncludedTotal() %}
{% set taxExcluded = order.getTaxExcludedTotal() %}

{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set orderPromotions = sylius_aggregate_adjustments(order.adjustmentsRecursively(orderPromotionAdjustment)) %}

<tr>
    <th colspan=\"4\" class=\"right aligned\" id=\"subtotal\" {{ sylius_test_html_attribute('subtotal') }}>
        {{ 'sylius.ui.items_total'|trans }}: {{ money.convertAndFormat(itemsSubtotal) }}
    </th>
</tr>
<tr{% if taxIncluded and not taxExcluded %} class=\"tax-disabled\"{% endif %}>
    <td colspan=\"4\" class=\"right aligned\" id=\"tax-total\">
        <div style=\"display: flex; justify-content: flex-end; align-items: center\">
            <div>{{ 'sylius.ui.taxes_total'|trans }}:&nbsp;</div>
            <div data-test=\"tax-total\" {{ sylius_test_html_attribute('tax-total') }}>
            {% if not taxIncluded and not taxExcluded %}
                <div id=\"sylius-cart-tax-none\">{{ money.convertAndFormat(0) }}</div>
            {% endif %}
            {% if taxExcluded %}
                <div id=\"sylius-cart-tax-excluded\">{{ money.convertAndFormat(taxExcluded) }}</div>
            {% endif %}
            {% if taxIncluded %}
                <div class=\"tax-disabled\">
                    <small>({{ 'sylius.ui.included_in_price'|trans }})</small>
                    <span id=\"sylius-cart-tax-included\">{{ money.convertAndFormat(taxIncluded) }}</span>
                </div>
            {% endif %}
            </div>
        </div>
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned\" {{ sylius_test_html_attribute('promotion-total') }}>
        {{ 'sylius.ui.discount'|trans }}: {{ money.convertAndFormat(order.orderPromotionTotal)  }}
        {% if order.orderPromotionTotal != 0 %}
            <i
                id=\"order-promotions-details\" class=\"question circle icon popup-js\"
                {{ sylius_test_html_attribute('order-promotions-details') }}
                data-html=\"{% for key, value in orderPromotions %}<div>{{ key }}: {{ money.convertAndFormat(value) }}</div>{% endfor %}\"
            >
            </i>
        {% endif %}
    </td>
</tr>
<tr>
    {% include '@SyliusShop/Common/Order/Table/_shipping.html.twig' with {'order': order} %}
</tr>
<tr>
    <td colspan=\"4\" class=\"right aligned\" style=\"font-size: 1.5em;\" id=\"total\" {{ sylius_test_html_attribute('order-total') }}>
        {{ 'sylius.ui.total'|trans }}: {{ money.convertAndFormat(order.total) }}
    </td>
</tr>
{% if order.currencyCode is not same as(sylius.currencyCode) %}
    <tr>
        <td colspan=\"4\" class=\"right aligned\" id=\"base-total\" {{ sylius_test_html_attribute('summary-order-total') }}>
            {{ 'sylius.ui.total_in_base_currency'|trans }}: {{ money.format(order.total, order.currencyCode) }}
        </td>
    </tr>
{% endif %}
", "@SyliusShop/Common/Order/Table/_totals.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_totals.html.twig");
    }
}
