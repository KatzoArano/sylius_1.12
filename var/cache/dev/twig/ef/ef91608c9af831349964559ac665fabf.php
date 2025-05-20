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

/* @SyliusShop/Checkout/_steps.html.twig */
class __TwigTemplate_e76c7395fae854d49541403e257a9059 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_steps.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_steps.html.twig"));

        // line 1
        if (( !array_key_exists("active", $context) || ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 1, $this->source); })()) == "address"))) {
            // line 2
            yield "    ";
            $context["steps"] = ["address" => "active", "select_shipping" => "disabled", "select_payment" => "disabled", "complete" => "disabled"];
        } elseif ((        // line 3
(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 3, $this->source); })()) == "select_shipping")) {
            // line 4
            yield "    ";
            $context["steps"] = ["address" => "completed", "select_shipping" => "active", "select_payment" => "disabled", "complete" => "disabled"];
        } elseif ((        // line 5
(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 5, $this->source); })()) == "select_payment")) {
            // line 6
            yield "    ";
            $context["steps"] = ["address" => "completed", "select_shipping" => "completed", "select_payment" => "active", "complete" => "disabled"];
        } else {
            // line 8
            yield "    ";
            $context["steps"] = ["address" => "completed", "select_shipping" => "completed", "select_payment" => "completed", "complete" => "active"];
        }
        // line 10
        yield "
";
        // line 11
        $context["order_requires_payment"] = $this->env->getFunction('sylius_is_payment_required')->getCallable()((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()));
        // line 12
        $context["order_requires_shipping"] = $this->env->getFunction('sylius_is_shipping_required')->getCallable()((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()));
        // line 13
        yield "
";
        // line 14
        $context["steps_count"] = "four";
        // line 15
        if (( !(isset($context["order_requires_payment"]) || array_key_exists("order_requires_payment", $context) ? $context["order_requires_payment"] : (function () { throw new RuntimeError('Variable "order_requires_payment" does not exist.', 15, $this->source); })()) &&  !(isset($context["order_requires_shipping"]) || array_key_exists("order_requires_shipping", $context) ? $context["order_requires_shipping"] : (function () { throw new RuntimeError('Variable "order_requires_shipping" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "    ";
            $context["steps_count"] = "two";
        } elseif (( !        // line 17
(isset($context["order_requires_payment"]) || array_key_exists("order_requires_payment", $context) ? $context["order_requires_payment"] : (function () { throw new RuntimeError('Variable "order_requires_payment" does not exist.', 17, $this->source); })()) ||  !(isset($context["order_requires_shipping"]) || array_key_exists("order_requires_shipping", $context) ? $context["order_requires_shipping"] : (function () { throw new RuntimeError('Variable "order_requires_shipping" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "    ";
            $context["steps_count"] = "three";
        }
        // line 20
        yield "
<div class=\"ui ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["steps_count"]) || array_key_exists("steps_count", $context) ? $context["steps_count"] : (function () { throw new RuntimeError('Variable "steps_count" does not exist.', 21, $this->source); })()), "html", null, true);
        yield " steps\">
    <a class=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 22, $this->source); })()), "address", [], "array", false, false, false, 22), "html", null, true);
        yield " step\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_address");
        yield "\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("step-address");
        yield ">
        <i class=\"map icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.address"), "html", null, true);
        yield "</div>
            <div class=\"description\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.fill_in_your_billing_and_shipping_addresses"), "html", null, true);
        yield "</div>
        </div>
    </a>
    ";
        // line 29
        if ((($tmp = (isset($context["order_requires_shipping"]) || array_key_exists("order_requires_shipping", $context) ? $context["order_requires_shipping"] : (function () { throw new RuntimeError('Variable "order_requires_shipping" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "    <a class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 30, $this->source); })()), "select_shipping", [], "array", false, false, false, 30), "html", null, true);
            yield " step\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_shipping");
            yield "\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("step-shipping");
            yield ">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
            yield "</div>
            <div class=\"description\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_how_your_goods_will_be_delivered"), "html", null, true);
            yield "</div>
        </div>
    </a>
    ";
        }
        // line 38
        yield "    ";
        if ((($tmp = (isset($context["order_requires_payment"]) || array_key_exists("order_requires_payment", $context) ? $context["order_requires_payment"] : (function () { throw new RuntimeError('Variable "order_requires_payment" does not exist.', 38, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "    <a class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 39, $this->source); })()), "select_payment", [], "array", false, false, false, 39), "html", null, true);
            yield " step\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_payment");
            yield "\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("step-payment");
            yield ">
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.payment"), "html", null, true);
            yield "</div>
            <div class=\"description\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_how_you_will_pay"), "html", null, true);
            yield "</div>
        </div>
    </a>
    ";
        }
        // line 47
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 47, $this->source); })()), "complete", [], "array", false, false, false, 47), "html", null, true);
        yield " step\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_complete");
        yield "\">
        <i class=\"checkered flag icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.complete"), "html", null, true);
        yield "</div>
            <div class=\"description\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.review_and_confirm_your_order"), "html", null, true);
        yield "</div>
        </div>
    </div>
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
        return "@SyliusShop/Checkout/_steps.html.twig";
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
        return array (  180 => 51,  176 => 50,  167 => 47,  160 => 43,  156 => 42,  145 => 39,  142 => 38,  135 => 34,  131 => 33,  120 => 30,  118 => 29,  112 => 26,  108 => 25,  98 => 22,  94 => 21,  91 => 20,  87 => 18,  85 => 17,  82 => 16,  80 => 15,  78 => 14,  75 => 13,  73 => 12,  71 => 11,  68 => 10,  64 => 8,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if active is not defined or active == 'address' %}
    {% set steps = {'address': 'active', 'select_shipping': 'disabled', 'select_payment': 'disabled', 'complete': 'disabled'} %}
{% elseif active == 'select_shipping' %}
    {% set steps = {'address': 'completed', 'select_shipping': 'active', 'select_payment': 'disabled', 'complete': 'disabled'} %}
{% elseif active == 'select_payment' %}
    {% set steps = {'address': 'completed', 'select_shipping': 'completed', 'select_payment': 'active', 'complete': 'disabled'} %}
{% else %}
    {% set steps = {'address': 'completed', 'select_shipping': 'completed', 'select_payment': 'completed', 'complete': 'active'} %}
{% endif %}

{% set order_requires_payment = sylius_is_payment_required(order) %}
{% set order_requires_shipping = sylius_is_shipping_required(order) %}

{% set steps_count = 'four' %}
{% if not order_requires_payment and not order_requires_shipping %}
    {% set steps_count = 'two' %}
{% elseif not order_requires_payment or not order_requires_shipping %}
    {% set steps_count = 'three' %}
{% endif %}

<div class=\"ui {{ steps_count }} steps\">
    <a class=\"{{ steps['address'] }} step\" href=\"{{ path('sylius_shop_checkout_address') }}\" {{ sylius_test_html_attribute('step-address') }}>
        <i class=\"map icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.address'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.fill_in_your_billing_and_shipping_addresses'|trans }}</div>
        </div>
    </a>
    {% if order_requires_shipping %}
    <a class=\"{{ steps['select_shipping'] }} step\" href=\"{{ path('sylius_shop_checkout_select_shipping') }}\" {{ sylius_test_html_attribute('step-shipping') }}>
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.shipping'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.choose_how_your_goods_will_be_delivered'|trans }}</div>
        </div>
    </a>
    {% endif %}
    {% if order_requires_payment %}
    <a class=\"{{ steps['select_payment'] }} step\" href=\"{{ path('sylius_shop_checkout_select_payment') }}\" {{ sylius_test_html_attribute('step-payment') }}>
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.payment'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.choose_how_you_will_pay'|trans }}</div>
        </div>
    </a>
    {% endif %}
    <div class=\"{{ steps['complete'] }} step\" href=\"{{ path('sylius_shop_checkout_complete') }}\">
        <i class=\"checkered flag icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.complete'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.review_and_confirm_your_order'|trans }}</div>
        </div>
    </div>
</div>
", "@SyliusShop/Checkout/_steps.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/_steps.html.twig");
    }
}
