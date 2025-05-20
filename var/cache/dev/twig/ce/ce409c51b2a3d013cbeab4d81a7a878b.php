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

/* @PayPlugSyliusPayPlugPlugin/form/integrated.html.twig */
class __TwigTemplate_1fb9a660ad37f57220ffbd5b7794b484 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/form/integrated.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/form/integrated.html.twig"));

        // line 1
        $context["initRouteParam"] = ["paymentMethodId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["paymentMethod"]) || array_key_exists("paymentMethod", $context) ? $context["paymentMethod"] : (function () { throw new RuntimeError('Variable "paymentMethod" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)];
        // line 2
        if (((array_key_exists("order", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 2, $this->source); })()), "getCheckoutCompletedAt", [], "any", false, false, false, 2))) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 2, $this->source); })()), "tokenValue", [], "any", false, false, false, 2)))) {
            // line 3
            yield "  ";
            $context["initRouteParam"] = Twig\Extension\CoreExtension::merge((isset($context["initRouteParam"]) || array_key_exists("initRouteParam", $context) ? $context["initRouteParam"] : (function () { throw new RuntimeError('Variable "initRouteParam" does not exist.', 3, $this->source); })()), ["orderToken" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()), "tokenValue", [], "any", false, false, false, 3)]);
        }
        // line 5
        yield "
<script type=\"text/javascript\" src=\"https://cdn.payplug.com/js/integrated-payment/v1/index.js\"></script>
<script type=\"text/javascript\">
  /* <![CDATA[ */
  var payplug_integrated_payment_params = {
    is_test_mode: '";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\PayPlugExtension']->isTest((isset($context["paymentMethod"]) || array_key_exists("paymentMethod", $context) ? $context["paymentMethod"] : (function () { throw new RuntimeError('Variable "paymentMethod" does not exist.', 10, $this->source); })())), "html", null, true);
        yield "',
    has_saved_cards: '";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hasSavedCards"]) || array_key_exists("hasSavedCards", $context) ? $context["hasSavedCards"] : (function () { throw new RuntimeError('Variable "hasSavedCards" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "',
    payment_method_code: '";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paymentMethod"]) || array_key_exists("paymentMethod", $context) ? $context["paymentMethod"] : (function () { throw new RuntimeError('Variable "paymentMethod" does not exist.', 12, $this->source); })()), "code", [], "any", false, false, false, 12), "html", null, true);
        yield "',
    ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "details", [], "any", false, true, false, 13), "payment_id", [], "any", true, true, false, 13)) {
            // line 14
            yield "    payment_id: '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 14, $this->source); })()), "details", [], "any", false, false, false, 14), "payment_id", [], "any", false, false, false, 14), "html", null, true);
            yield "',
    ";
        }
        // line 16
        yield "    routes: {
      init_payment: '";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payplug_sylius_integrated_payment_init", (isset($context["initRouteParam"]) || array_key_exists("initRouteParam", $context) ? $context["initRouteParam"] : (function () { throw new RuntimeError('Variable "initRouteParam" does not exist.', 17, $this->source); })())), "html", null, true);
        yield "',
    },
    cardholder: '";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.card_holder.title"), "html", null, true);
        yield "',
    pan: '";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.pan.title"), "html", null, true);
        yield "',
    cvv: '";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.cvv.title"), "html", null, true);
        yield "',
    exp: '";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.exp.title"), "html", null, true);
        yield "',
  }
  /* ]] */
</script>

<div class=\"payplugIntegratedPayment\">
    <div class=\"ui inverted dimmer\">
        <div class=\"ui loader\"></div>
    </div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--cardHolder cardHolder-input-container\"></div>
    <div class=\"payplugIntegratedPayment__error payplugIntegratedPayment__error--cardHolder payplugIntegratedPayment__error--hide\">
        <span class=\"payplugIntegratedPayment__error--hide invalidField\">
            ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.card_holder.error"), "html", null, true);
        yield "
        </span>
        <span class=\"payplugIntegratedPayment__error--hide emptyField\">
            ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.empty"), "html", null, true);
        yield "
        </span>
    </div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--scheme\">
        <div>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.scheme.label"), "html", null, true);
        yield "</div>
        <div class=\"payplugIntegratedPayment__schemes\">
            <label class=\"payplugIntegratedPayment__scheme payplugIntegratedPayment__scheme--cb\">
                <input type=\"radio\" name=\"schemeOptions\" value=\"cb\" />
                <span></span>
            </label>
            <label class=\"payplugIntegratedPayment__scheme payplugIntegratedPayment__scheme--visa\">
                <input type=\"radio\" name=\"schemeOptions\" value=\"visa\"/>
                <span></span>
            </label>
            <label class=\"payplugIntegratedPayment__scheme payplugIntegratedPayment__scheme--mastercard\">
                <input type=\"radio\" name=\"schemeOptions\" value=\"mastercard\" />
                <span></span>
            </label>
        </div>
    </div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--pan pan-input-container\"></div>
    <div class=\"payplugIntegratedPayment__error payplugIntegratedPayment__error--pan payplugIntegratedPayment__error--hide\">
        <span class=\"payplugIntegratedPayment__error--hide invalidField\">
            ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.pan.error"), "html", null, true);
        yield "
        </span>
        <span class=\"payplugIntegratedPayment__error--hide emptyField\">
            ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.empty"), "html", null, true);
        yield "
        </span>
    </div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--exp exp-input-container\" ></div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--cvv cvv-input-container\"></div>
    <div class=\"payplugIntegratedPayment__error payplugIntegratedPayment__error--exp payplugIntegratedPayment__error--hide\">
        <span class=\"payplugIntegratedPayment__error--hide invalidField\">
            ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.exp.error"), "html", null, true);
        yield "
        </span>
        <span class=\"payplugIntegratedPayment__error--hide emptyField\">
            ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.empty"), "html", null, true);
        yield "
        </span>
    </div>
    <div class=\"payplugIntegratedPayment__error payplugIntegratedPayment__error--cvv payplugIntegratedPayment__error--hide\">
        <span class=\"payplugIntegratedPayment__error--hide invalidField\">
            ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.cvv.error"), "html", null, true);
        yield "
        </span>
        <span class=\"payplugIntegratedPayment__error--hide emptyField\">
            ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.empty"), "html", null, true);
        yield "
        </span>
    </div>
    ";
        // line 84
        if ((($tmp = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\PayPlugExtension']->isSaveCardAllowed((isset($context["paymentMethod"]) || array_key_exists("paymentMethod", $context) ? $context["paymentMethod"] : (function () { throw new RuntimeError('Variable "paymentMethod" does not exist.', 84, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "        <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--saveCard\">
            <input type=\"checkbox\" name=\"savecard\" id=\"savecard\">
            <label for=\"savecard\">
                <span></span>
                ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.save_card.label"), "html", null, true);
            yield "
            </label>
        </div>
    ";
        }
        // line 93
        yield "    <button id=\"paid\" class=\"ui large primary button\" type=\"button\">
        ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.place_order.label"), "html", null, true);
        yield "
    </button>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--transaction\">
        <img class=\"lock-icon\" src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/shop/images/integrated/lock.svg"), "html", null, true);
        yield "\" />
        <div class=\"transaction-label\">
            ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.transaction_secure.label"), "html", null, true);
        yield "
        </div>
        <img class=\"payplug-logo\" src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/shop/images/integrated/logo-payplug.png"), "html", null, true);
        yield "\" />
    </div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--privacy-policy\">
        <a href=\"https://www.payplug.com/privacy-policy\" target=\"_blank\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.integrated_payment.privacy_policy.label"), "html", null, true);
        yield "</a>
    </div>
</div>

<input type=\"hidden\" name=\"payplug_integrated_payment_token\" id=\"payplug_integrated_payment_token\" />

";
        // line 110
        yield from $this->load("@SyliusUi/_javascripts.html.twig", 110)->unwrap()->yield(CoreExtension::merge($context, ["path" => "bundles/payplugsyliuspayplugplugin/assets/shop/payment/integrated.js"]));
        // line 111
        yield from $this->load("@SyliusUi/_stylesheets.html.twig", 111)->unwrap()->yield(CoreExtension::merge($context, ["path" => "bundles/payplugsyliuspayplugplugin/assets/shop/payment/integrated.css"]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PayPlugSyliusPayPlugPlugin/form/integrated.html.twig";
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
        return array (  246 => 111,  244 => 110,  235 => 104,  229 => 101,  224 => 99,  219 => 97,  213 => 94,  210 => 93,  203 => 89,  197 => 85,  195 => 84,  189 => 81,  183 => 78,  175 => 73,  169 => 70,  159 => 63,  153 => 60,  131 => 41,  124 => 37,  118 => 34,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  86 => 17,  83 => 16,  77 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set initRouteParam = {'paymentMethodId': paymentMethod.id} %}
{% if order is defined and order.getCheckoutCompletedAt is not null and order.tokenValue is not null %}
  {% set initRouteParam = initRouteParam|merge({'orderToken': order.tokenValue}) %}
{% endif %}

<script type=\"text/javascript\" src=\"https://cdn.payplug.com/js/integrated-payment/v1/index.js\"></script>
<script type=\"text/javascript\">
  /* <![CDATA[ */
  var payplug_integrated_payment_params = {
    is_test_mode: '{{ is_payplug_test_mode_enabled(paymentMethod) }}',
    has_saved_cards: '{{ hasSavedCards }}',
    payment_method_code: '{{ paymentMethod.code }}',
    {% if payment.details.payment_id is defined %}
    payment_id: '{{ payment.details.payment_id }}',
    {% endif %}
    routes: {
      init_payment: '{{ path('payplug_sylius_integrated_payment_init', initRouteParam) }}',
    },
    cardholder: '{{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.card_holder.title'|trans }}',
    pan: '{{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.pan.title'|trans }}',
    cvv: '{{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.cvv.title'|trans }}',
    exp: '{{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.exp.title'|trans }}',
  }
  /* ]] */
</script>

<div class=\"payplugIntegratedPayment\">
    <div class=\"ui inverted dimmer\">
        <div class=\"ui loader\"></div>
    </div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--cardHolder cardHolder-input-container\"></div>
    <div class=\"payplugIntegratedPayment__error payplugIntegratedPayment__error--cardHolder payplugIntegratedPayment__error--hide\">
        <span class=\"payplugIntegratedPayment__error--hide invalidField\">
            {{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.card_holder.error'|trans }}
        </span>
        <span class=\"payplugIntegratedPayment__error--hide emptyField\">
            {{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.empty'|trans }}
        </span>
    </div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--scheme\">
        <div>{{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.scheme.label'|trans }}</div>
        <div class=\"payplugIntegratedPayment__schemes\">
            <label class=\"payplugIntegratedPayment__scheme payplugIntegratedPayment__scheme--cb\">
                <input type=\"radio\" name=\"schemeOptions\" value=\"cb\" />
                <span></span>
            </label>
            <label class=\"payplugIntegratedPayment__scheme payplugIntegratedPayment__scheme--visa\">
                <input type=\"radio\" name=\"schemeOptions\" value=\"visa\"/>
                <span></span>
            </label>
            <label class=\"payplugIntegratedPayment__scheme payplugIntegratedPayment__scheme--mastercard\">
                <input type=\"radio\" name=\"schemeOptions\" value=\"mastercard\" />
                <span></span>
            </label>
        </div>
    </div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--pan pan-input-container\"></div>
    <div class=\"payplugIntegratedPayment__error payplugIntegratedPayment__error--pan payplugIntegratedPayment__error--hide\">
        <span class=\"payplugIntegratedPayment__error--hide invalidField\">
            {{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.pan.error'|trans }}
        </span>
        <span class=\"payplugIntegratedPayment__error--hide emptyField\">
            {{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.empty'|trans }}
        </span>
    </div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--exp exp-input-container\" ></div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--cvv cvv-input-container\"></div>
    <div class=\"payplugIntegratedPayment__error payplugIntegratedPayment__error--exp payplugIntegratedPayment__error--hide\">
        <span class=\"payplugIntegratedPayment__error--hide invalidField\">
            {{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.exp.error'|trans }}
        </span>
        <span class=\"payplugIntegratedPayment__error--hide emptyField\">
            {{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.empty'|trans }}
        </span>
    </div>
    <div class=\"payplugIntegratedPayment__error payplugIntegratedPayment__error--cvv payplugIntegratedPayment__error--hide\">
        <span class=\"payplugIntegratedPayment__error--hide invalidField\">
            {{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.cvv.error'|trans }}
        </span>
        <span class=\"payplugIntegratedPayment__error--hide emptyField\">
            {{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.empty'|trans }}
        </span>
    </div>
    {% if is_save_card_enabled(paymentMethod) %}
        <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--saveCard\">
            <input type=\"checkbox\" name=\"savecard\" id=\"savecard\">
            <label for=\"savecard\">
                <span></span>
                {{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.save_card.label'|trans }}
            </label>
        </div>
    {% endif %}
    <button id=\"paid\" class=\"ui large primary button\" type=\"button\">
        {{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.place_order.label'|trans }}
    </button>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--transaction\">
        <img class=\"lock-icon\" src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/shop/images/integrated/lock.svg') }}\" />
        <div class=\"transaction-label\">
            {{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.transaction_secure.label'|trans }}
        </div>
        <img class=\"payplug-logo\" src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/shop/images/integrated/logo-payplug.png') }}\" />
    </div>
    <div class=\"payplugIntegratedPayment__container payplugIntegratedPayment__container--privacy-policy\">
        <a href=\"https://www.payplug.com/privacy-policy\" target=\"_blank\">{{ 'payplug_sylius_payplug_plugin.ui.integrated_payment.privacy_policy.label'|trans }}</a>
    </div>
</div>

<input type=\"hidden\" name=\"payplug_integrated_payment_token\" id=\"payplug_integrated_payment_token\" />

{% include '@SyliusUi/_javascripts.html.twig' with {'path': 'bundles/payplugsyliuspayplugplugin/assets/shop/payment/integrated.js'} %}
{% include '@SyliusUi/_stylesheets.html.twig' with {'path': 'bundles/payplugsyliuspayplugplugin/assets/shop/payment/integrated.css'} %}
", "@PayPlugSyliusPayPlugPlugin/form/integrated.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/payplug/sylius-payplug-plugin/src/Resources/views/form/integrated.html.twig");
    }
}
