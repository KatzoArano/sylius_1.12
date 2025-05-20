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

/* @SyliusShop/Common/Order/Table/_shipping.html.twig */
class __TwigTemplate_89c777db3dc7ab463cd77fe92b408870 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_shipping.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_shipping.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["orderShippingPromotionAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT");
        // line 4
        $context["shippingAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 5
        $context["orderShippingPromotions"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "getAdjustmentsRecursively", [(isset($context["orderShippingPromotionAdjustment"]) || array_key_exists("orderShippingPromotionAdjustment", $context) ? $context["orderShippingPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "orderShippingPromotionAdjustment" does not exist.', 5, $this->source); })())], "method", false, false, false, 5));
        // line 6
        yield "
";
        // line 7
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new RuntimeError('Variable "orderShippingPromotions" does not exist.', 7, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    <td colspan=\"4\" class=\"right aligned\" id=\"promotion-shipping-discounts\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("promotion-shipping-discounts");
            yield ">
        ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_total"), "html", null, true);
            yield ":
        <span class=\"old-price\">";
            // line 10
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 10, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "getAdjustmentsTotal", [(isset($context["shippingAdjustment"]) || array_key_exists("shippingAdjustment", $context) ? $context["shippingAdjustment"] : (function () { throw new RuntimeError('Variable "shippingAdjustment" does not exist.', 10, $this->source); })())], "method", false, false, false, 10)]);
            yield "</span>
        <span>
           <span id=\"shipping-total\" ";
            // line 12
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-total");
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 12, $this->getSourceContext())->macro_convertAndFormat(...[(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "getAdjustmentsTotal", [(isset($context["shippingAdjustment"]) || array_key_exists("shippingAdjustment", $context) ? $context["shippingAdjustment"] : (function () { throw new RuntimeError('Variable "shippingAdjustment" does not exist.', 12, $this->source); })())], "method", false, false, false, 12) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "getAdjustmentsTotal", [(isset($context["orderShippingPromotionAdjustment"]) || array_key_exists("orderShippingPromotionAdjustment", $context) ? $context["orderShippingPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "orderShippingPromotionAdjustment" does not exist.', 12, $this->source); })())], "method", false, false, false, 12))]);
            yield "</span>
            <i id=\"shipping-promotion-details\" class=\"question circle icon popup-js\"
               ";
            // line 14
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-promotion-details");
            yield "
               data-html=\"";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new RuntimeError('Variable "orderShippingPromotions" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                yield "<div>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield ": ";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 15, $this->getSourceContext())->macro_convertAndFormat(...[$context["amount"]]);
                yield "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['amount'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\"
            ></i>
        </span>
    </td>
";
        } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()), "shipments", [], "any", false, false, false, 19))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "    <td colspan=\"4\" class=\"right aligned\" id=\"shipping-total\">
        ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_total"), "html", null, true);
            yield ":
        <span ";
            // line 22
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-total");
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 22, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "shippingTotal", [], "any", false, false, false, 22)]);
            yield "</span>
    </td>
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
        return "@SyliusShop/Common/Order/Table/_shipping.html.twig";
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
        return array (  116 => 22,  112 => 21,  109 => 20,  107 => 19,  89 => 15,  85 => 14,  78 => 12,  73 => 10,  69 => 9,  64 => 8,  62 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set orderShippingPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT') %}
{% set shippingAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::SHIPPING_ADJUSTMENT') %}
{% set orderShippingPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderShippingPromotionAdjustment)) %}

{% if not orderShippingPromotions is empty %}
    <td colspan=\"4\" class=\"right aligned\" id=\"promotion-shipping-discounts\" {{ sylius_test_html_attribute('promotion-shipping-discounts') }}>
        {{ 'sylius.ui.shipping_total'|trans }}:
        <span class=\"old-price\">{{ money.convertAndFormat(order.getAdjustmentsTotal(shippingAdjustment)) }}</span>
        <span>
           <span id=\"shipping-total\" {{ sylius_test_html_attribute('shipping-total') }}>{{ money.convertAndFormat(order.getAdjustmentsTotal(shippingAdjustment) + order.getAdjustmentsTotal(orderShippingPromotionAdjustment)) }}</span>
            <i id=\"shipping-promotion-details\" class=\"question circle icon popup-js\"
               {{ sylius_test_html_attribute('shipping-promotion-details') }}
               data-html=\"{% for label, amount in orderShippingPromotions %}<div>{{ label }}: {{ money.convertAndFormat(amount) }}</div>{% endfor %}\"
            ></i>
        </span>
    </td>
{% elseif order.shipments is not empty %}
    <td colspan=\"4\" class=\"right aligned\" id=\"shipping-total\">
        {{ 'sylius.ui.shipping_total'|trans }}:
        <span {{ sylius_test_html_attribute('shipping-total') }}>{{ money.convertAndFormat(order.shippingTotal) }}</span>
    </td>
{% endif %}
", "@SyliusShop/Common/Order/Table/_shipping.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_shipping.html.twig");
    }
}
