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

/* @SyliusPayPalPlugin/bundles/SyliusShopBundle/Order/thankYou.html.twig */
class __TwigTemplate_cda9c3f210ead754065d4c95f10e1460 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/bundles/SyliusShopBundle/Order/thankYou.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/bundles/SyliusShopBundle/Order/thankYou.html.twig"));

        $this->parent = $this->load("@SyliusShop/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
        <div class=\"center aligned sixteen wide column\">
            <h1 class=\"ui icon header\">
                ";
        // line 8
        $context["lastPayment"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "payments", [], "any", false, false, false, 8), "last", [], "method", false, false, false, 8);
        // line 9
        yield "                <i class=\"circular rocket icon\"></i>
                <div class=\"content\" id=\"sylius-thank-you\" ";
        // line 10
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("thank-you");
        yield ">
                    ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.thank_you"), "html", null, true);
        yield "
                    <div class=\"sub header\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.placed_an_order"), "html", null, true);
        yield "</div>
                </div>
            </h1>

            ";
        // line 16
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.order.thank_you.after_message", ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })())]);
        yield "

            ";
        // line 18
        if (((isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 18, $this->source); })()) != false)) {
            // line 19
            yield "                ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 19, $this->source); })()), "method", [], "any", false, false, false, 19), "instructions", [], "any", false, false, false, 19))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "                    <div id=\"sylius-payment-method-instructions\" class=\"ui segment\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-method-instructions");
                yield ">
                        ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 21, $this->source); })()), "method", [], "any", false, false, false, 21), "instructions", [], "any", false, false, false, 21), "html", null, true);
                yield "
                    </div>
                ";
            }
            // line 24
            yield "                <div class=\"ui hidden divider\"></div>
            ";
        }
        // line 26
        yield "
            ";
        // line 27
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 27, $this->source); })()), "customer", [], "any", false, false, false, 27), "user", [], "any", false, false, false, 27))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_order_show", ["number" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()), "number", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" id=\"sylius-show-order-in-account\" class=\"ui large blue button\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("show-order-in-account");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_order"), "html", null, true);
            yield "</a>
            ";
        } else {
            // line 30
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 30, $this->source); })()), "state", [], "any", false, false, false, 30) != "completed")) {
                // line 31
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", ["tokenValue" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 31, $this->source); })()), "tokenValue", [], "any", false, false, false, 31)]), "html", null, true);
                yield "\" id=\"payment-method-page\" class=\"ui large blue button\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-method-page");
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_payment_method"), "html", null, true);
                yield "</a>
                ";
            }
            // line 33
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_register_after_checkout", ["tokenValue" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 33, $this->source); })()), "tokenValue", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"ui large green button\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("create-an-account");
            yield ">
                    <i class=\"signup icon\"></i>
                    ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create_an_account"), "html", null, true);
            yield "
                </a>
            ";
        }
        // line 38
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusPayPalPlugin/bundles/SyliusShopBundle/Order/thankYou.html.twig";
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
        return array (  169 => 38,  163 => 35,  155 => 33,  145 => 31,  142 => 30,  132 => 28,  130 => 27,  127 => 26,  123 => 24,  117 => 21,  112 => 20,  109 => 19,  107 => 18,  102 => 16,  95 => 12,  91 => 11,  87 => 10,  84 => 9,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
        <div class=\"center aligned sixteen wide column\">
            <h1 class=\"ui icon header\">
                {% set lastPayment = order.payments.last() %}
                <i class=\"circular rocket icon\"></i>
                <div class=\"content\" id=\"sylius-thank-you\" {{ sylius_test_html_attribute('thank-you') }}>
                    {{ 'sylius.ui.thank_you'|trans }}
                    <div class=\"sub header\">{{ 'sylius.ui.placed_an_order'|trans }}</div>
                </div>
            </h1>

            {{ sylius_template_event('sylius.shop.order.thank_you.after_message', {'order': order}) }}

            {% if lastPayment != false %}
                {%  if lastPayment.method.instructions is not null %}
                    <div id=\"sylius-payment-method-instructions\" class=\"ui segment\" {{ sylius_test_html_attribute('payment-method-instructions') }}>
                        {{ lastPayment.method.instructions }}
                    </div>
                {% endif %}
                <div class=\"ui hidden divider\"></div>
            {% endif %}

            {% if order.customer.user is not null %}
                <a href=\"{{ path('sylius_shop_account_order_show', {'number': order.number}) }}\" id=\"sylius-show-order-in-account\" class=\"ui large blue button\" {{ sylius_test_html_attribute('show-order-in-account') }}>{{ 'sylius.ui.view_order'|trans }}</a>
            {% else %}
                {% if lastPayment.state != 'completed' %}
                    <a href=\"{{ path('sylius_shop_order_show', {'tokenValue': order.tokenValue}) }}\" id=\"payment-method-page\" class=\"ui large blue button\" {{ sylius_test_html_attribute('payment-method-page') }}>{{ 'sylius.ui.change_payment_method'|trans }}</a>
                {% endif %}
                <a href=\"{{ path('sylius_shop_register_after_checkout', {'tokenValue': order.tokenValue}) }}\" class=\"ui large green button\" {{ sylius_test_html_attribute('create-an-account') }}>
                    <i class=\"signup icon\"></i>
                    {{ 'sylius.ui.create_an_account'|trans }}
                </a>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "@SyliusPayPalPlugin/bundles/SyliusShopBundle/Order/thankYou.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/paypal-plugin/src/Resources/views/bundles/SyliusShopBundle/Order/thankYou.html.twig");
    }
}
