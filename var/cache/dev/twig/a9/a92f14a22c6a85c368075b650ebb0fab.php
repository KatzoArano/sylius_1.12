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

/* @SyliusPayPalPlugin/payFromProductPage.html.twig */
class __TwigTemplate_8a8af3dd2693acfb675a9f586aa52732 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/payFromProductPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/payFromProductPage.html.twig"));

        // line 1
        yield "<div id=\"paypal-button-container\"></div>
<script src=\"https://www.paypal.com/sdk/js?client-id=";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clientId"]) || array_key_exists("clientId", $context) ? $context["clientId"] : (function () { throw new RuntimeError('Variable "clientId" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "&locale=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "&currency=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 2, $this->source); })()), "currencyCode", [], "any", false, false, false, 2), "html", null, true);
        yield "&commit=false&disable-funding=credit,card,bancontact,blik,eps,giropay,ideal,mybank,p24,sepa,sofort,venmo\" data-partner-attribution-id=\"sylius-ppcp4p-bn-code\"></script>
<script>
    let payPalOrderId = null;
    let orderId = null;

    let completeUrl = \"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["completeUrl"]) || array_key_exists("completeUrl", $context) ? $context["completeUrl"] : (function () { throw new RuntimeError('Variable "completeUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\";
    let createPayPalOrderFromProductUrl = \"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["createPayPalOrderFromProductUrl"]) || array_key_exists("createPayPalOrderFromProductUrl", $context) ? $context["createPayPalOrderFromProductUrl"] : (function () { throw new RuntimeError('Variable "createPayPalOrderFromProductUrl" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\";
    let processPayPalOrderUrl = \"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["processPayPalOrderUrl"]) || array_key_exists("processPayPalOrderUrl", $context) ? $context["processPayPalOrderUrl"] : (function () { throw new RuntimeError('Variable "processPayPalOrderUrl" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "\";
    let cancelPayPalOrderUrl = \"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_cancel_order");
        yield "\";
    let errorPayPalPaymentUrl = \"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["errorPayPalPaymentUrl"]) || array_key_exists("errorPayPalPaymentUrl", $context) ? $context["errorPayPalPaymentUrl"] : (function () { throw new RuntimeError('Variable "errorPayPalPaymentUrl" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\";
    let availableCountries = ";
        // line 12
        yield json_encode((isset($context["available_countries"]) || array_key_exists("available_countries", $context) ? $context["available_countries"] : (function () { throw new RuntimeError('Variable "available_countries" does not exist.', 12, $this->source); })()));
        yield ";
    let updatePayPalOrderUrl = \"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_update_paypal_order");
        yield "\";

    paypal.Buttons({
        locale: '";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "',
        style: {
            label: 'checkout'
        },
        createOrder: function(data, actions) {
            let formData = new FormData(document.getElementsByName('sylius_add_to_cart')[0]);
            return fetch(createPayPalOrderFromProductUrl, {
                method: 'post',
                body: formData
            })
            .then(function(res) {
                document.forms[0].classList.add('loading');
                return res.status === 400 ? window.location.reload() : res.json();
            })
            .then(data => {
                payPalOrderId = data.orderID;
                orderId = data.id;

                return data.orderID;
            });
        },
        onApprove: function(data, actions) {
            return fetch(processPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: payPalOrderId, orderId: orderId })
            })
            .then(res => res.json())
            .then(details => window.location.href = completeUrl);
        },
        onCancel: function (data, actions) {
            return fetch(cancelPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: data.orderID })
            })
            .then(data => window.location.reload());
        },
        onError: function (error) {
            return fetch(errorPayPalPaymentUrl, {
                method: 'post',
                headers: {},
                body: error
            }).then(window.location.reload());
        },
        onShippingChange: function(data, actions) {
            if (!availableCountries.filter(country => country === data.shipping_address.country_code).length) {
                return actions.reject();
            }

            return fetch(updatePayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify(data)
            }).then(res => {
                if (!res || res.error) {
                    return actions.reject();
                }

                return actions.resolve();
            });
        }
    }).render('#paypal-button-container');
</script>
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
        return "@SyliusPayPalPlugin/payFromProductPage.html.twig";
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
        return array (  93 => 16,  87 => 13,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"paypal-button-container\"></div>
<script src=\"https://www.paypal.com/sdk/js?client-id={{ clientId }}&locale={{ locale }}&currency={{ sylius.currencyCode }}&commit=false&disable-funding=credit,card,bancontact,blik,eps,giropay,ideal,mybank,p24,sepa,sofort,venmo\" data-partner-attribution-id=\"sylius-ppcp4p-bn-code\"></script>
<script>
    let payPalOrderId = null;
    let orderId = null;

    let completeUrl = \"{{ completeUrl }}\";
    let createPayPalOrderFromProductUrl = \"{{ createPayPalOrderFromProductUrl }}\";
    let processPayPalOrderUrl = \"{{ processPayPalOrderUrl }}\";
    let cancelPayPalOrderUrl = \"{{ path('sylius_paypal_plugin_cancel_order') }}\";
    let errorPayPalPaymentUrl = \"{{ errorPayPalPaymentUrl }}\";
    let availableCountries = {{ available_countries|json_encode|raw }};
    let updatePayPalOrderUrl = \"{{ path('sylius_paypal_plugin_update_paypal_order') }}\";

    paypal.Buttons({
        locale: '{{ locale }}',
        style: {
            label: 'checkout'
        },
        createOrder: function(data, actions) {
            let formData = new FormData(document.getElementsByName('sylius_add_to_cart')[0]);
            return fetch(createPayPalOrderFromProductUrl, {
                method: 'post',
                body: formData
            })
            .then(function(res) {
                document.forms[0].classList.add('loading');
                return res.status === 400 ? window.location.reload() : res.json();
            })
            .then(data => {
                payPalOrderId = data.orderID;
                orderId = data.id;

                return data.orderID;
            });
        },
        onApprove: function(data, actions) {
            return fetch(processPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: payPalOrderId, orderId: orderId })
            })
            .then(res => res.json())
            .then(details => window.location.href = completeUrl);
        },
        onCancel: function (data, actions) {
            return fetch(cancelPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: data.orderID })
            })
            .then(data => window.location.reload());
        },
        onError: function (error) {
            return fetch(errorPayPalPaymentUrl, {
                method: 'post',
                headers: {},
                body: error
            }).then(window.location.reload());
        },
        onShippingChange: function(data, actions) {
            if (!availableCountries.filter(country => country === data.shipping_address.country_code).length) {
                return actions.reject();
            }

            return fetch(updatePayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify(data)
            }).then(res => {
                if (!res || res.error) {
                    return actions.reject();
                }

                return actions.resolve();
            });
        }
    }).render('#paypal-button-container');
</script>
", "@SyliusPayPalPlugin/payFromProductPage.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/paypal-plugin/src/Resources/views/payFromProductPage.html.twig");
    }
}
