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

/* @SyliusPayPalPlugin/bundles/SyliusShopBundle/Common/Order/_addresses.html.twig */
class __TwigTemplate_358e42559661299d6b8f3f4cd86b46be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/bundles/SyliusShopBundle/Common/Order/_addresses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/bundles/SyliusShopBundle/Common/Order/_addresses.html.twig"));

        // line 1
        yield "<div class=\"ui segment\">
    <div class=\"ui ";
        // line 2
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 2, $this->source); })()), "isShippingRequired", [], "method", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "two";
        } else {
            yield "one";
        }
        yield " column divided stackable grid\">
        <div class=\"column\" id=\"sylius-billing-address\" ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("billing-address");
        yield ">
            <div class=\"ui small dividing header\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        yield "</div>
            ";
        // line 5
        yield from $this->load("@SyliusShop/Common/_address.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["address" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "billingAddress", [], "any", false, false, false, 5)]));
        // line 6
        yield "        </div>
        ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "isShippingRequired", [], "method", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "        <div class=\"column\" id=\"sylius-shipping-address\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-address");
            yield ">
            <div class=\"ui small dividing header\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
            yield "</div>
            ";
            // line 10
            yield from $this->load("@SyliusShop/Common/_address.html.twig", 10)->unwrap()->yield(CoreExtension::merge($context, ["address" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "shippingAddress", [], "any", false, false, false, 10)]));
            // line 11
            yield "        </div>
        ";
        }
        // line 13
        yield "    </div>
</div>
";
        // line 15
        if ((($tmp = $this->extensions['Sylius\PayPalPlugin\Twig\OrderAddressExtension']->isBillingAddressMissing((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "<div class=\"ui icon message\">
    <i class=\"address card icon\"></i>
    <div class=\"content\">
        <div class=\"header\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.missing_billing_address_header"), "html", null, true);
            yield "</div>
        <p>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.missing_billing_address_content"), "html", null, true);
            yield "</p>
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
        return "@SyliusPayPalPlugin/bundles/SyliusShopBundle/Common/Order/_addresses.html.twig";
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
        return array (  104 => 20,  100 => 19,  95 => 16,  93 => 15,  89 => 13,  85 => 11,  83 => 10,  79 => 9,  74 => 8,  72 => 7,  69 => 6,  67 => 5,  63 => 4,  59 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui segment\">
    <div class=\"ui {% if order.isShippingRequired() %}two{% else %}one{% endif %} column divided stackable grid\">
        <div class=\"column\" id=\"sylius-billing-address\" {{ sylius_test_html_attribute('billing-address') }}>
            <div class=\"ui small dividing header\">{{ 'sylius.ui.billing_address'|trans }}</div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': order.billingAddress} %}
        </div>
        {% if order.isShippingRequired() %}
        <div class=\"column\" id=\"sylius-shipping-address\" {{ sylius_test_html_attribute('shipping-address') }}>
            <div class=\"ui small dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': order.shippingAddress} %}
        </div>
        {% endif %}
    </div>
</div>
{% if sylius_is_billing_address_missing(order) %}
<div class=\"ui icon message\">
    <i class=\"address card icon\"></i>
    <div class=\"content\">
        <div class=\"header\">{{ 'sylius.pay_pal.missing_billing_address_header'|trans }}</div>
        <p>{{ 'sylius.pay_pal.missing_billing_address_content'|trans }}</p>
    </div>
</div>
{% endif %}
", "@SyliusPayPalPlugin/bundles/SyliusShopBundle/Common/Order/_addresses.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/paypal-plugin/src/Resources/views/bundles/SyliusShopBundle/Common/Order/_addresses.html.twig");
    }
}
