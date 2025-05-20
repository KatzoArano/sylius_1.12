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

/* @SyliusRefundPlugin/Order/Admin/_refundPayments.html.twig */
class __TwigTemplate_e746b9d3980249e13e6e2a591dce0ee1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/_refundPayments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/_refundPayments.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        $context["refund_payments"] = $this->extensions['Sylius\RefundPlugin\Twig\OrderRefundsExtension']->getAllRefundPaymentsByOrder((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 2, $this->source); })()));
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["refund_payments"]) || array_key_exists("refund_payments", $context) ? $context["refund_payments"] : (function () { throw new RuntimeError('Variable "refund_payments" does not exist.', 3, $this->source); })())) > 0)) {
            // line 4
            yield "    ";
            yield from $this->load((("@SyliusAdmin/Order/Label/PaymentState/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "paymentState", [], "any", false, false, false, 4)) . ".html.twig"), 4)->unwrap()->yield(CoreExtension::merge($context, ["value" => ("sylius.ui." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "paymentState", [], "any", false, false, false, 4)), "attached" => true]));
            // line 5
            yield "    <h3 class=\"ui dividing header\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.refund_payments"), "html", null, true);
            yield "</h3>
    <div class=\"ui relaxed divided list\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["refund_payments"]) || array_key_exists("refund_payments", $context) ? $context["refund_payments"] : (function () { throw new RuntimeError('Variable "refund_payments" does not exist.', 7, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["refund_payment"]) {
                // line 8
                yield "            <div class=\"item\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("refund");
                yield ">
                <div class=\"right floated content\" ";
                // line 9
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("refund-status");
                yield ">
                    ";
                // line 10
                yield from $this->load("@SyliusRefundPlugin/Common/Label/refundPaymentState.html.twig", 10)->unwrap()->yield(CoreExtension::merge($context, ["data" => CoreExtension::getAttribute($this->env, $this->source, $context["refund_payment"], "state", [], "any", false, false, false, 10)]));
                // line 11
                yield "                </div>
                <i class=\"large payment icon\"></i>
                <div class=\"content\">
                    <div class=\"header\">
                        ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["refund_payment"], "paymentMethod", [], "any", false, false, false, 15), "html", null, true);
                yield "
                    </div>
                    <div class=\"description\">
                        ";
                // line 18
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 18, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["refund_payment"], "amount", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, $context["refund_payment"], "currencyCode", [], "any", false, false, false, 18)]);
                yield "
                    </div>
                </div>
                ";
                // line 21
                if ((($tmp = $this->extensions['SM\Extension\Twig\SMExtension']->can($context["refund_payment"], "complete", "sylius_refund_refund_payment")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 22
                    yield "                <div class=\"ui segment\">
                    <form action=\"";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_refund_complete_refund_payment", ["orderNumber" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["refund_payment"], "order", [], "any", false, false, false, 23), "number", [], "any", false, false, false, 23), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["refund_payment"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                    yield "\" method=\"POST\" ";
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("refund-button");
                    yield ">
                        <button type=\"submit\" class=\"ui icon labeled tiny blue fluid loadable button\"><i class=\"check icon\"></i> ";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.complete"), "html", null, true);
                    yield "</button>
                    </form>
                </div>
                ";
                }
                // line 28
                yield "            </div>
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
            unset($context['_seq'], $context['_key'], $context['refund_payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "    </div>
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
        return "@SyliusRefundPlugin/Order/Admin/_refundPayments.html.twig";
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
        return array (  142 => 30,  127 => 28,  120 => 24,  114 => 23,  111 => 22,  109 => 21,  103 => 18,  97 => 15,  91 => 11,  89 => 10,  85 => 9,  80 => 8,  63 => 7,  57 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/Common/Macro/money.html.twig' as money %}
{% set refund_payments = get_all_refund_payments_by_order(order) %}
{% if refund_payments|length > 0 %}
    {% include '@SyliusAdmin/Order/Label/PaymentState/' ~ order.paymentState ~ '.html.twig' with { 'value': 'sylius.ui.' ~ order.paymentState, 'attached': true } %}
    <h3 class=\"ui dividing header\">{{ 'sylius_refund.ui.refund_payments'|trans }}</h3>
    <div class=\"ui relaxed divided list\">
        {% for refund_payment in refund_payments %}
            <div class=\"item\" {{ sylius_test_html_attribute('refund') }}>
                <div class=\"right floated content\" {{ sylius_test_html_attribute('refund-status') }}>
                    {% include '@SyliusRefundPlugin/Common/Label/refundPaymentState.html.twig' with {'data': refund_payment.state} %}
                </div>
                <i class=\"large payment icon\"></i>
                <div class=\"content\">
                    <div class=\"header\">
                        {{ refund_payment.paymentMethod  }}
                    </div>
                    <div class=\"description\">
                        {{ money.format(refund_payment.amount, refund_payment.currencyCode) }}
                    </div>
                </div>
                {% if sm_can(refund_payment, 'complete', 'sylius_refund_refund_payment') %}
                <div class=\"ui segment\">
                    <form action=\"{{ path('sylius_refund_complete_refund_payment', {'orderNumber': refund_payment.order.number, 'id': refund_payment.id}) }}\" method=\"POST\" {{ sylius_test_html_attribute('refund-button') }}>
                        <button type=\"submit\" class=\"ui icon labeled tiny blue fluid loadable button\"><i class=\"check icon\"></i> {{ 'sylius.ui.complete'|trans }}</button>
                    </form>
                </div>
                {% endif %}
            </div>
        {% endfor %}
    </div>
{% endif %}
", "@SyliusRefundPlugin/Order/Admin/_refundPayments.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Order/Admin/_refundPayments.html.twig");
    }
}
