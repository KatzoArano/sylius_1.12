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

/* @SyliusShop/Common/Order/_payments.html.twig */
class __TwigTemplate_dd1d753ad54a1b0c9b77f6c4f0a9f004 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_payments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_payments.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["state"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()), "paymentState", [], "any", false, false, false, 3);
        // line 4
        yield "
";
        // line 5
        if (((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 5, $this->source); })()) != "cart")) {
            // line 6
            yield "    ";
            yield from $this->load("@SyliusShop/Common/Order/Label/PaymentState/orderPaymentState.html.twig", 6)->unwrap()->yield($context);
        }
        // line 8
        yield "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "payments", [], "any", false, false, false, 9));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 10
            yield "    ";
            $context["state"] = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "state", [], "any", false, false, false, 10);
            // line 11
            yield "
    <div class=\"ui small icon message\">
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"header\" id=\"sylius-payment-method\" ";
            // line 15
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-method");
            yield ">
                ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "method", [], "any", false, false, false, 16), "html", null, true);
            yield "
            </div>
            <p ";
            // line 18
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-price");
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 18, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "currencyCode", [], "any", false, false, false, 18)]);
            yield "</p>
            ";
            // line 19
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 19) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "order", [], "any", false, false, false, 19), "total", [], "any", false, false, false, 19)) && ((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 19, $this->source); })()) == "processing"))) {
                // line 20
                yield "                <i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.different_amount"), "html", null, true);
                yield "</i>
            ";
            }
            // line 22
            yield "            ";
            if (((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 22, $this->source); })()) != "cart")) {
                // line 23
                yield "                <p id=\"payment-status\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-state");
                yield ">
                    ";
                // line 24
                yield from $this->load("@SyliusShop/Common/Order/Label/PaymentState/singlePaymentState.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["state" => (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 24, $this->source); })())]));
                // line 25
                yield "                </p>
            ";
            }
            // line 27
            yield "        </div>
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
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
        return "@SyliusShop/Common/Order/_payments.html.twig";
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
        return array (  130 => 27,  126 => 25,  124 => 24,  119 => 23,  116 => 22,  110 => 20,  108 => 19,  102 => 18,  97 => 16,  93 => 15,  87 => 11,  84 => 10,  67 => 9,  64 => 8,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set state = order.paymentState %}

{% if state != 'cart' %}
    {% include \"@SyliusShop/Common/Order/Label/PaymentState/orderPaymentState.html.twig\" %}
{% endif %}

{% for payment in order.payments %}
    {% set state = payment.state %}

    <div class=\"ui small icon message\">
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"header\" id=\"sylius-payment-method\" {{ sylius_test_html_attribute('payment-method') }}>
                {{ payment.method }}
            </div>
            <p {{ sylius_test_html_attribute('payment-price') }}>{{ money.format(payment.amount, payment.currencyCode) }}</p>
            {% if payment.amount != payment.order.total and state == 'processing' %}
                <i>{{ 'sylius.pay_pal.different_amount'|trans }}</i>
            {% endif %}
            {% if state != 'cart' %}
                <p id=\"payment-status\" {{ sylius_test_html_attribute('payment-state') }}>
                    {% include \"@SyliusShop/Common/Order/Label/PaymentState/singlePaymentState.html.twig\" with { 'state': state } %}
                </p>
            {% endif %}
        </div>
    </div>
{% endfor %}
", "@SyliusShop/Common/Order/_payments.html.twig", "/Users/orkatz/Documents/sylius_1.12/templates/bundles/SyliusShopBundle/Common/Order/_payments.html.twig");
    }
}
