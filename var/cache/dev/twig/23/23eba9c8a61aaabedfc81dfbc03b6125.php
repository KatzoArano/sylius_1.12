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

/* @SyliusShop/Cart/Summary/_totals.html.twig */
class __TwigTemplate_9fa1f772d458e9524913be9344d7238d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_totals.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_totals.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["itemsSubtotal"] = $this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderItemsSubtotalExtension']->getSubtotal((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 3, $this->source); })()));
        // line 4
        $context["taxIncluded"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 4, $this->source); })()), "getTaxIncludedTotal", [], "method", false, false, false, 4);
        // line 5
        $context["taxExcluded"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 5, $this->source); })()), "getTaxExcludedTotal", [], "method", false, false, false, 5);
        // line 6
        yield "
<div class=\"ui segment\">
    <h2 class=\"ui dividing header\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.summary"), "html", null, true);
        yield "</h2>

    ";
        // line 10
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.cart.summary.totals", ["cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 10, $this->source); })())]);
        yield "

    <table class=\"ui very basic table\">
        <tbody>
        <tr>
            <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items_total"), "html", null, true);
        yield ":</td>
            <td class=\"right aligned\" ";
        // line 16
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-items-total");
        yield ">";
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 16, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["itemsSubtotal"]) || array_key_exists("itemsSubtotal", $context) ? $context["itemsSubtotal"] : (function () { throw new RuntimeError('Variable "itemsSubtotal" does not exist.', 16, $this->source); })())]);
        yield "</td>
        </tr>
        ";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 18, $this->source); })()), "orderPromotionTotal", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "            <tr>
                <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discount"), "html", null, true);
            yield ":</td>
                <td id=\"sylius-cart-promotion-total\" ";
            // line 21
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-promotion-total");
            yield " class=\"right aligned\">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 21, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 21, $this->source); })()), "orderPromotionTotal", [], "any", false, false, false, 21)]);
            yield "</td>
            </tr>
        ";
        }
        // line 24
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 24, $this->source); })()), "shipments", [], "any", false, false, false, 24))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "            <tr>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_estimated_cost"), "html", null, true);
            yield ":</td>
                <td class=\"right aligned\">
                    ";
            // line 28
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 28, $this->source); })()), "getAdjustmentsTotal", ["shipping"], "method", false, false, false, 28) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 28, $this->source); })()), "shippingTotal", [], "any", false, false, false, 28))) {
                // line 29
                yield "                        <span class=\"old-price\">";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 29, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 29, $this->source); })()), "getAdjustmentsTotal", ["shipping"], "method", false, false, false, 29)]);
                yield "</span>
                    ";
            }
            // line 31
            yield "                    <span id=\"sylius-cart-shipping-total\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-shipping-total");
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 31, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 31, $this->source); })()), "shippingTotal", [], "any", false, false, false, 31)]);
            yield "</span>
                </td>
            </tr>
        ";
        }
        // line 35
        yield "        <tr ";
        if (((isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 35, $this->source); })()) &&  !(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 35, $this->source); })()))) {
            yield "class=\"tax-disabled\"";
        }
        yield ">
            <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes_total"), "html", null, true);
        yield ":</td>
            <td class=\"right aligned\">
                ";
        // line 38
        if (( !(isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 38, $this->source); })()) &&  !(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 38, $this->source); })()))) {
            // line 39
            yield "                    <div id=\"sylius-cart-tax-none\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-no-tax");
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 39, $this->getSourceContext())->macro_convertAndFormat(...[0]);
            yield "</div>
                ";
        }
        // line 41
        yield "                ";
        if ((($tmp = (isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                    <div id=\"sylius-cart-tax-excluded\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-tax-exluded");
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 42, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["taxExcluded"]) || array_key_exists("taxExcluded", $context) ? $context["taxExcluded"] : (function () { throw new RuntimeError('Variable "taxExcluded" does not exist.', 42, $this->source); })())]);
            yield "</div>
                ";
        }
        // line 44
        yield "                ";
        if ((($tmp = (isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 44, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "                    <div class=\"tax-disabled\">
                        <small>(";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
            yield ")</small>
                        <span id=\"sylius-cart-tax-included\" ";
            // line 47
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-tax-included");
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 47, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["taxIncluded"]) || array_key_exists("taxIncluded", $context) ? $context["taxIncluded"] : (function () { throw new RuntimeError('Variable "taxIncluded" does not exist.', 47, $this->source); })())]);
            yield "</span>
                    </div>
                ";
        }
        // line 50
        yield "            </td>
        </tr>
        <tr class=\"ui large header\">
            <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order_total"), "html", null, true);
        yield ":</td>
            <td id=\"sylius-cart-grand-total\" ";
        // line 54
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-grand-total");
        yield " class=\"right aligned\">";
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 54, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 54, $this->source); })()), "total", [], "any", false, false, false, 54)]);
        yield "</td>
        </tr>
        ";
        // line 56
        if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 56, $this->source); })()), "currencyCode", [], "any", false, false, false, 56) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 56, $this->source); })()), "currencyCode", [], "any", false, false, false, 56))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "            <tr>
                <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.base_currency_order_total"), "html", null, true);
            yield ":</td>
                <td id=\"sylius-cart-base-grand-total\" ";
            // line 59
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-base-grand-total");
            yield " class=\"right aligned\">";
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 59, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 59, $this->source); })()), "total", [], "any", false, false, false, 59), CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 59, $this->source); })()), "currencyCode", [], "any", false, false, false, 59)]);
            yield "</td>
            </tr>
        ";
        }
        // line 62
        yield "        </tbody>
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
        return "@SyliusShop/Cart/Summary/_totals.html.twig";
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
        return array (  217 => 62,  209 => 59,  205 => 58,  202 => 57,  200 => 56,  193 => 54,  189 => 53,  184 => 50,  176 => 47,  172 => 46,  169 => 45,  166 => 44,  158 => 42,  155 => 41,  147 => 39,  145 => 38,  140 => 36,  133 => 35,  123 => 31,  117 => 29,  115 => 28,  110 => 26,  107 => 25,  104 => 24,  96 => 21,  92 => 20,  89 => 19,  87 => 18,  80 => 16,  76 => 15,  68 => 10,  63 => 8,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set itemsSubtotal = sylius_order_items_subtotal(cart) %}
{% set taxIncluded = cart.getTaxIncludedTotal() %}
{% set taxExcluded = cart.getTaxExcludedTotal() %}

<div class=\"ui segment\">
    <h2 class=\"ui dividing header\">{{ 'sylius.ui.summary'|trans }}</h2>

    {{ sylius_template_event('sylius.shop.cart.summary.totals', {'cart': cart}) }}

    <table class=\"ui very basic table\">
        <tbody>
        <tr>
            <td>{{ 'sylius.ui.items_total'|trans }}:</td>
            <td class=\"right aligned\" {{ sylius_test_html_attribute('cart-items-total') }}>{{ money.convertAndFormat(itemsSubtotal) }}</td>
        </tr>
        {% if cart.orderPromotionTotal %}
            <tr>
                <td>{{ 'sylius.ui.discount'|trans }}:</td>
                <td id=\"sylius-cart-promotion-total\" {{ sylius_test_html_attribute('cart-promotion-total') }} class=\"right aligned\">{{ money.convertAndFormat(cart.orderPromotionTotal) }}</td>
            </tr>
        {% endif %}
        {% if cart.shipments is not empty %}
            <tr>
                <td>{{ 'sylius.ui.shipping_estimated_cost'|trans }}:</td>
                <td class=\"right aligned\">
                    {% if cart.getAdjustmentsTotal('shipping') > cart.shippingTotal %}
                        <span class=\"old-price\">{{ money.convertAndFormat(cart.getAdjustmentsTotal('shipping')) }}</span>
                    {% endif %}
                    <span id=\"sylius-cart-shipping-total\" {{ sylius_test_html_attribute('cart-shipping-total') }}>{{ money.convertAndFormat(cart.shippingTotal) }}</span>
                </td>
            </tr>
        {% endif %}
        <tr {% if taxIncluded and not taxExcluded %}class=\"tax-disabled\"{% endif %}>
            <td>{{ 'sylius.ui.taxes_total'|trans }}:</td>
            <td class=\"right aligned\">
                {% if not taxIncluded and not taxExcluded %}
                    <div id=\"sylius-cart-tax-none\" {{ sylius_test_html_attribute('cart-no-tax') }}>{{ money.convertAndFormat(0) }}</div>
                {% endif %}
                {% if taxExcluded %}
                    <div id=\"sylius-cart-tax-excluded\" {{ sylius_test_html_attribute('cart-tax-exluded') }}>{{ money.convertAndFormat(taxExcluded) }}</div>
                {% endif %}
                {% if taxIncluded %}
                    <div class=\"tax-disabled\">
                        <small>({{ 'sylius.ui.included_in_price'|trans }})</small>
                        <span id=\"sylius-cart-tax-included\" {{ sylius_test_html_attribute('cart-tax-included') }}>{{ money.convertAndFormat(taxIncluded) }}</span>
                    </div>
                {% endif %}
            </td>
        </tr>
        <tr class=\"ui large header\">
            <td>{{ 'sylius.ui.order_total'|trans }}:</td>
            <td id=\"sylius-cart-grand-total\" {{ sylius_test_html_attribute('cart-grand-total') }} class=\"right aligned\">{{ money.convertAndFormat(cart.total) }}</td>
        </tr>
        {% if cart.currencyCode is not same as(sylius.currencyCode) %}
            <tr>
                <td>{{ 'sylius.ui.base_currency_order_total'|trans }}:</td>
                <td id=\"sylius-cart-base-grand-total\" {{ sylius_test_html_attribute('cart-base-grand-total') }} class=\"right aligned\">{{ money.format(cart.total, cart.currencyCode) }}</td>
            </tr>
        {% endif %}
        </tbody>
    </table>
</div>
", "@SyliusShop/Cart/Summary/_totals.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_totals.html.twig");
    }
}
