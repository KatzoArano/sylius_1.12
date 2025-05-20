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

/* @SyliusAdmin/Order/Show/Summary/_totals.html.twig */
class __TwigTemplate_978b1ae7907c4a16176d148d010943a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Summary/_totals.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Summary/_totals.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["orderShippingPromotionAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT");
        // line 4
        $context["shippingAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 5
        $context["taxAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::TAX_ADJUSTMENT");
        // line 6
        yield "
";
        // line 7
        $context["orderShippingPromotions"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "getAdjustmentsRecursively", [(isset($context["orderShippingPromotionAdjustment"]) || array_key_exists("orderShippingPromotionAdjustment", $context) ? $context["orderShippingPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "orderShippingPromotionAdjustment" does not exist.', 7, $this->source); })())], "method", false, false, false, 7));
        // line 8
        yield "
<tr>
    <th colspan=\"7\"></th>
    <th colspan=\"1\" id=\"tax-total\" class=\"right aligned\">
        <strong>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax_total"), "html", null, true);
        yield "</strong>:
        ";
        // line 13
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 13, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "taxTotal", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "currencyCode", [], "any", false, false, false, 13)]);
        yield "
    </th>
    <th colspan=\"1\" id=\"items-total\" class=\"right aligned\">
        <strong>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items_total"), "html", null, true);
        yield "</strong>:
        ";
        // line 17
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 17, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "itemsTotal", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "currencyCode", [], "any", false, false, false, 17)]);
        yield "
    </th>
</tr>
<tr>
    <td colspan=\"";
        // line 21
        yield (((($tmp = (isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new RuntimeError('Variable "orderShippingPromotions" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (2) : (5));
        yield "\" id=\"shipping-charges\">
        ";
        // line 22
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "adjustments", [(isset($context["shippingAdjustment"]) || array_key_exists("shippingAdjustment", $context) ? $context["shippingAdjustment"] : (function () { throw new RuntimeError('Variable "shippingAdjustment" does not exist.', 22, $this->source); })())], "method", false, false, false, 22), "isEmpty", [], "method", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "            <div class=\"ui relaxed divided list\">
                <div class=\"item\"><strong>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
            yield ":</strong></div>
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "shipments", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
                // line 26
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["shipment"], "adjustments", [(isset($context["shippingAdjustment"]) || array_key_exists("shippingAdjustment", $context) ? $context["shippingAdjustment"] : (function () { throw new RuntimeError('Variable "shippingAdjustment" does not exist.', 26, $this->source); })())], "method", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                    // line 27
                    yield "                        <div class=\"item\">
                            <div id=\"shipping-base-value\" class=\"right floated\">";
                    // line 28
                    yield $macros["money"]->getTemplateForMacro("macro_format", $context, 28, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "amount", [], "any", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()), "currencyCode", [], "any", false, false, false, 28)]);
                    yield "</div>
                            <div class=\"content\">
                                <div id=\"shipping-adjustment-label\" class=\"description\">
                                    <strong>";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "label", [], "any", false, false, false, 31), "html", null, true);
                    yield "</strong>:
                                </div>
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['adjustment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "
                    ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["shipment"], "adjustments", [(isset($context["taxAdjustment"]) || array_key_exists("taxAdjustment", $context) ? $context["taxAdjustment"] : (function () { throw new RuntimeError('Variable "taxAdjustment" does not exist.', 37, $this->source); })())], "method", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                    // line 38
                    yield "                        <div class=\"item";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "isNeutral", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " tax-disabled";
                    }
                    yield "\">
                            <div id=\"shipping-tax-value\" class=\"right floated\">
                                ";
                    // line 40
                    yield $macros["money"]->getTemplateForMacro("macro_format", $context, 40, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "amount", [], "any", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "currencyCode", [], "any", false, false, false, 40)]);
                    yield "
                                ";
                    // line 41
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "isNeutral", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 42
                        yield "                                    <small>(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
                        yield ")</small>
                                ";
                    }
                    // line 44
                    yield "                            </div>
                            <div class=\"content\">
                                <div id=\"shipping-adjustment-label\" class=\"description\">
                                    <strong";
                    // line 47
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "isNeutral", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " class=\"tax-disabled\"";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "label", [], "any", false, false, false, 47), "html", null, true);
                    yield "</strong>:
                                </div>
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['adjustment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['shipment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "            </div>
        ";
        } else {
            // line 55
            yield "            <p><small>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_shipping_charges"), "html", null, true);
            yield "</small></p>
        ";
        }
        // line 57
        yield "    </td>
    ";
        // line 58
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new RuntimeError('Variable "orderShippingPromotions" does not exist.', 58, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "    <td colspan=\"3\" id=\"promotion-shipping-discounts\">
        <div class=\"ui relaxed divided list\">
            <div class=\"item\"><strong>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_discount"), "html", null, true);
            yield ":</strong></div>
            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new RuntimeError('Variable "orderShippingPromotions" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 63
                yield "                <div class=\"item\">
                    <div id=\"shipping-discount-value\" class=\"right floated\">
                        ";
                // line 65
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 65, $this->getSourceContext())->macro_format(...[$context["amount"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 65, $this->source); })()), "currencyCode", [], "any", false, false, false, 65)]);
                yield "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['amount'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "        </div>
    </td>
    ";
        }
        // line 72
        yield "    <td colspan=\"4\" id=\"shipping-total\" class=\"right aligned\">
        <strong>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_total"), "html", null, true);
        yield "</strong>:
        ";
        // line 74
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 74, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 74, $this->source); })()), "shippingTotal", [], "any", false, false, false, 74), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 74, $this->source); })()), "currencyCode", [], "any", false, false, false, 74)]);
        yield "
    </td>
</tr>

";
        // line 78
        yield from $this->load("@SyliusAdmin/Order/Show/Summary/_totalsPromotions.html.twig", 78)->unwrap()->yield($context);
        // line 79
        yield "
<tr>
    <td colspan=\"9\" id=\"total\" class=\"ui large header right aligned\">
        <strong>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order_total"), "html", null, true);
        yield "</strong>:
        ";
        // line 83
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 83, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 83, $this->source); })()), "total", [], "any", false, false, false, 83), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 83, $this->source); })()), "currencyCode", [], "any", false, false, false, 83)]);
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
        return "@SyliusAdmin/Order/Show/Summary/_totals.html.twig";
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
        return array (  257 => 83,  253 => 82,  248 => 79,  246 => 78,  239 => 74,  235 => 73,  232 => 72,  227 => 69,  217 => 65,  213 => 63,  209 => 62,  205 => 61,  201 => 59,  199 => 58,  196 => 57,  190 => 55,  186 => 53,  180 => 52,  165 => 47,  160 => 44,  154 => 42,  152 => 41,  148 => 40,  140 => 38,  136 => 37,  133 => 36,  122 => 31,  116 => 28,  113 => 27,  108 => 26,  104 => 25,  100 => 24,  97 => 23,  95 => 22,  91 => 21,  84 => 17,  80 => 16,  74 => 13,  70 => 12,  64 => 8,  62 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

{% set orderShippingPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT') %}
{% set shippingAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::SHIPPING_ADJUSTMENT') %}
{% set taxAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::TAX_ADJUSTMENT') %}

{% set orderShippingPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderShippingPromotionAdjustment)) %}

<tr>
    <th colspan=\"7\"></th>
    <th colspan=\"1\" id=\"tax-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.tax_total'|trans }}</strong>:
        {{ money.format(order.taxTotal, order.currencyCode) }}
    </th>
    <th colspan=\"1\" id=\"items-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.items_total'|trans }}</strong>:
        {{ money.format(order.itemsTotal, order.currencyCode) }}
    </th>
</tr>
<tr>
    <td colspan=\"{{ orderShippingPromotions ? 2 : 5 }}\" id=\"shipping-charges\">
        {% if not order.adjustments(shippingAdjustment).isEmpty() %}
            <div class=\"ui relaxed divided list\">
                <div class=\"item\"><strong>{{ 'sylius.ui.shipping'|trans }}:</strong></div>
                {% for shipment in order.shipments %}
                    {% for adjustment in shipment.adjustments(shippingAdjustment) %}
                        <div class=\"item\">
                            <div id=\"shipping-base-value\" class=\"right floated\">{{ money.format(adjustment.amount, order.currencyCode) }}</div>
                            <div class=\"content\">
                                <div id=\"shipping-adjustment-label\" class=\"description\">
                                    <strong>{{ adjustment.label }}</strong>:
                                </div>
                            </div>
                        </div>
                    {% endfor %}

                    {% for adjustment in shipment.adjustments(taxAdjustment) %}
                        <div class=\"item{% if adjustment.isNeutral %} tax-disabled{% endif %}\">
                            <div id=\"shipping-tax-value\" class=\"right floated\">
                                {{ money.format(adjustment.amount, order.currencyCode) }}
                                {% if adjustment.isNeutral %}
                                    <small>({{ 'sylius.ui.included_in_price'|trans }})</small>
                                {% endif %}
                            </div>
                            <div class=\"content\">
                                <div id=\"shipping-adjustment-label\" class=\"description\">
                                    <strong{% if adjustment.isNeutral %} class=\"tax-disabled\"{% endif %}>{{ adjustment.label }}</strong>:
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        {% else %}
            <p><small>{{ 'sylius.ui.no_shipping_charges'|trans }}</small></p>
        {% endif %}
    </td>
    {% if not orderShippingPromotions is empty %}
    <td colspan=\"3\" id=\"promotion-shipping-discounts\">
        <div class=\"ui relaxed divided list\">
            <div class=\"item\"><strong>{{ 'sylius.ui.shipping_discount'|trans }}:</strong></div>
            {% for label, amount in orderShippingPromotions %}
                <div class=\"item\">
                    <div id=\"shipping-discount-value\" class=\"right floated\">
                        {{ money.format(amount, order.currencyCode) }}
                    </div>
                </div>
            {% endfor %}
        </div>
    </td>
    {% endif %}
    <td colspan=\"4\" id=\"shipping-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.shipping_total'|trans }}</strong>:
        {{ money.format(order.shippingTotal, order.currencyCode) }}
    </td>
</tr>

{% include '@SyliusAdmin/Order/Show/Summary/_totalsPromotions.html.twig' %}

<tr>
    <td colspan=\"9\" id=\"total\" class=\"ui large header right aligned\">
        <strong>{{ 'sylius.ui.order_total'|trans }}</strong>:
        {{ money.format(order.total, order.currencyCode) }}
    </td>
</tr>
", "@SyliusAdmin/Order/Show/Summary/_totals.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Summary/_totals.html.twig");
    }
}
