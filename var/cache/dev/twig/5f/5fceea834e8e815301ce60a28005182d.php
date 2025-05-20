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

/* bundles/SyliusAdminBundle/Order/Show/_payment.html.twig */
class __TwigTemplate_605a81b71a3acb6e5d5810f7629223e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/SyliusAdminBundle/Order/Show/_payment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/SyliusAdminBundle/Order/Show/_payment.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        $macros["label"] = $this->macros["label"] = $this->load("@SyliusUi/Macro/labels.html.twig", 2)->unwrap();
        // line 3
        yield "
<div class=\"item\">
    <div class=\"right floated content\">
        ";
        // line 6
        yield $macros["label"]->getTemplateForMacro("macro_default", $context, 6, $this->getSourceContext())->macro_default(...[$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius.ui." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 6, $this->source); })()), "state", [], "any", false, false, false, 6)))]);
        yield "
    </div>
    <i class=\"large payment icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 11, $this->source); })()), "method", [], "any", false, false, false, 11), "html", null, true);
        yield "
        </div>
        <div class=\"description\">
            ";
        // line 14
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 14, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 14, $this->source); })()), "amount", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 14, $this->source); })()), "order", [], "any", false, false, false, 14), "currencyCode", [], "any", false, false, false, 14)]);
        yield "
        </div>
    </div>
    <br/>
    ";
        // line 18
        if ((((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 18, $this->source); })()), "method", [], "any", false, false, false, 18), "gatewayConfig", [], "any", false, false, false, 18), "factoryName", [], "any", false, false, false, 18) == Twig\Extension\CoreExtension::constant("\\PayPlug\\SyliusPayPlugPlugin\\Gateway\\PayPlugGatewayFactory::FACTORY_NAME")) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 19, $this->source); })()), "method", [], "any", false, false, false, 19), "gatewayConfig", [], "any", false, false, false, 19), "factoryName", [], "any", false, false, false, 19) == Twig\Extension\CoreExtension::constant("\\PayPlug\\SyliusPayPlugPlugin\\Gateway\\OneyGatewayFactory::FACTORY_NAME"))) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 20, $this->source); })()), "method", [], "any", false, false, false, 20), "gatewayConfig", [], "any", false, false, false, 20), "factoryName", [], "any", false, false, false, 20) == Twig\Extension\CoreExtension::constant("\\PayPlug\\SyliusPayPlugPlugin\\Gateway\\BancontactGatewayFactory::FACTORY_NAME"))) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 21, $this->source); })()), "method", [], "any", false, false, false, 21), "gatewayConfig", [], "any", false, false, false, 21), "factoryName", [], "any", false, false, false, 21) == Twig\Extension\CoreExtension::constant("\\PayPlug\\SyliusPayPlugPlugin\\Gateway\\ApplePayGatewayFactory::FACTORY_NAME"))) || ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 22, $this->source); })()), "method", [], "any", false, false, false, 22), "gatewayConfig", [], "any", false, false, false, 22), "factoryName", [], "any", false, false, false, 22) == Twig\Extension\CoreExtension::constant("\\PayPlug\\SyliusPayPlugPlugin\\Gateway\\AmericanExpressGatewayFactory::FACTORY_NAME")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["payment"] ?? null), "details", [], "any", false, true, false, 23), "payment_id", [], "any", true, true, false, 23)))) {
            // line 24
            yield "        <div class=\"ui\" style=\"word-break: break-word\">
            ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.payplug_id", ["%paymentId%" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "details", [], "any", false, true, false, 25), "payment_id", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 25, $this->source); })()), "details", [], "any", false, false, false, 25), "payment_id", [], "any", false, false, false, 25), "")) : (""))]), "html", null, true);
            yield "
            ";
            // line 26
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 26, $this->source); })()), "method", [], "any", false, false, false, 26), "gatewayConfig", [], "any", false, false, false, 26), "factoryName", [], "any", false, false, false, 26) == Twig\Extension\CoreExtension::constant("\\PayPlug\\SyliusPayPlugPlugin\\Gateway\\OneyGatewayFactory::FACTORY_NAME"))) {
                // line 27
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "details", [], "any", false, true, false, 27), "payment_method", [], "any", true, true, false, 27)) {
                    // line 28
                    yield "                    <br/>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("payplug_sylius_payplug_plugin.admin.ui." . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 28, $this->source); })()), "details", [], "any", false, false, false, 28), "payment_method", [], "any", false, false, false, 28)) . "_payment")), "html", null, true);
                    yield "
                ";
                }
                // line 30
                yield "            ";
            }
            // line 31
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "details", [], "any", false, true, false, 31), "is_live", [], "any", true, true, false, 31) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 31, $this->source); })()), "details", [], "any", false, false, false, 31), "is_live", [], "any", false, false, false, 31) == false))) {
                // line 32
                yield "                <br/><i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.test_mode"), "html", null, true);
                yield "</i>
            ";
            }
            // line 34
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "details", [], "any", false, true, false, 34), "failure", [], "any", true, true, false, 34) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "details", [], "any", false, true, false, 34), "failure", [], "any", false, true, false, 34), "message", [], "any", true, true, false, 34))) {
                // line 35
                yield "                <br/><i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 35, $this->source); })()), "details", [], "any", false, false, false, 35), "failure", [], "any", false, false, false, 35), "message", [], "any", false, false, false, 35), "html", null, true);
                yield "</i>
            ";
            }
            // line 37
            yield "        </div>
    ";
        }
        // line 39
        yield "    ";
        if ((($tmp = $this->extensions['SM\Extension\Twig\SMExtension']->can((isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 39, $this->source); })()), "complete", "sylius_payment")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "        <div class=\"ui segment\">
            <form action=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_payment_complete", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" method=\"post\" novalidate>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)), "html", null, true);
            yield "\"/>
                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                <button type=\"submit\" class=\"ui icon labeled tiny blue fluid loadable button\"><i class=\"check icon\"></i> ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.complete"), "html", null, true);
            yield "</button>
            </form>
        </div>
    ";
        }
        // line 48
        yield "</div>
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
        return "bundles/SyliusAdminBundle/Order/Show/_payment.html.twig";
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
        return array (  150 => 48,  143 => 44,  138 => 42,  134 => 41,  131 => 40,  128 => 39,  124 => 37,  118 => 35,  115 => 34,  109 => 32,  106 => 31,  103 => 30,  97 => 28,  94 => 27,  92 => 26,  88 => 25,  85 => 24,  83 => 23,  82 => 22,  81 => 21,  80 => 20,  79 => 19,  78 => 18,  71 => 14,  65 => 11,  57 => 6,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}
{% import '@SyliusUi/Macro/labels.html.twig' as label %}

<div class=\"item\">
    <div class=\"right floated content\">
        {{ label.default(('sylius.ui.' ~ payment.state)|trans) }}
    </div>
    <i class=\"large payment icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            {{ payment.method }}
        </div>
        <div class=\"description\">
            {{ money.format(payment.amount, payment.order.currencyCode) }}
        </div>
    </div>
    <br/>
    {% if (payment.method.gatewayConfig.factoryName == constant('\\\\PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\PayPlugGatewayFactory::FACTORY_NAME')
        or payment.method.gatewayConfig.factoryName == constant('\\\\PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\OneyGatewayFactory::FACTORY_NAME'))
        or payment.method.gatewayConfig.factoryName == constant('\\\\PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\BancontactGatewayFactory::FACTORY_NAME')
        or payment.method.gatewayConfig.factoryName == constant('\\\\PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\ApplePayGatewayFactory::FACTORY_NAME')
        or payment.method.gatewayConfig.factoryName == constant('\\\\PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\AmericanExpressGatewayFactory::FACTORY_NAME')
        and payment.details.payment_id is defined %}
        <div class=\"ui\" style=\"word-break: break-word\">
            {{ 'payplug_sylius_payplug_plugin.ui.payplug_id'|trans({'%paymentId%': payment.details.payment_id|default('')}) }}
            {% if payment.method.gatewayConfig.factoryName == constant('\\\\PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\OneyGatewayFactory::FACTORY_NAME') %}
                {% if payment.details.payment_method is defined %}
                    <br/>{{ ('payplug_sylius_payplug_plugin.admin.ui.' ~ payment.details.payment_method ~ '_payment')|trans }}
                {% endif %}
            {% endif %}
            {% if payment.details.is_live is defined and payment.details.is_live == false %}
                <br/><i>{{ 'payplug_sylius_payplug_plugin.ui.test_mode'|trans }}</i>
            {% endif %}
            {% if payment.details.failure is defined and payment.details.failure.message is defined %}
                <br/><i>{{ payment.details.failure.message }}</i>
            {% endif %}
        </div>
    {% endif %}
    {% if sm_can(payment, 'complete', 'sylius_payment') %}
        <div class=\"ui segment\">
            <form action=\"{{ path('sylius_admin_order_payment_complete', {'orderId': order.id, 'id': payment.id}) }}\" method=\"post\" novalidate>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(payment.id) }}\"/>
                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                <button type=\"submit\" class=\"ui icon labeled tiny blue fluid loadable button\"><i class=\"check icon\"></i> {{ 'sylius.ui.complete'|trans }}</button>
            </form>
        </div>
    {% endif %}
</div>
", "bundles/SyliusAdminBundle/Order/Show/_payment.html.twig", "/Users/orkatz/Documents/sylius_1.12/templates/bundles/SyliusAdminBundle/Order/Show/_payment.html.twig");
    }
}
