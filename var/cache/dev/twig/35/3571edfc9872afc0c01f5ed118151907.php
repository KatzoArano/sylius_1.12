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

/* @SyliusPayPalPlugin/payFromCartPage.html.twig */
class __TwigTemplate_947aad3b6898572b7fe73b5829449461 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/payFromCartPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/payFromCartPage.html.twig"));

        // line 1
        yield "<div id=\"paypal-button-container\" style=\"margin-top: 10px\"></div>
<script src=\"https://www.paypal.com/sdk/js?client-id=";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clientId"]) || array_key_exists("clientId", $context) ? $context["clientId"] : (function () { throw new RuntimeError('Variable "clientId" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "&locale=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "&currency=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "&commit=false&disable-funding=credit,card,bancontact,blik,eps,giropay,ideal,mybank,p24,sepa,sofort,venmo\" data-partner-attribution-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["partnerAttributionId"]) || array_key_exists("partnerAttributionId", $context) ? $context["partnerAttributionId"] : (function () { throw new RuntimeError('Variable "partnerAttributionId" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "\"></script>
<script>
    let completeUrl = \"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["completeUrl"]) || array_key_exists("completeUrl", $context) ? $context["completeUrl"] : (function () { throw new RuntimeError('Variable "completeUrl" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\";
    let createPayPalOrderFromCartUrl = \"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["createPayPalOrderFromCartUrl"]) || array_key_exists("createPayPalOrderFromCartUrl", $context) ? $context["createPayPalOrderFromCartUrl"] : (function () { throw new RuntimeError('Variable "createPayPalOrderFromCartUrl" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\";
    let orderId = \"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\";
    let processPayPalOrderUrl = \"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["processPayPalOrderUrl"]) || array_key_exists("processPayPalOrderUrl", $context) ? $context["processPayPalOrderUrl"] : (function () { throw new RuntimeError('Variable "processPayPalOrderUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\";
    let cancelPayPalOrderUrl = \"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_cancel_order");
        yield "\";
    let errorPayPalPaymentUrl = \"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["errorPayPalPaymentUrl"]) || array_key_exists("errorPayPalPaymentUrl", $context) ? $context["errorPayPalPaymentUrl"] : (function () { throw new RuntimeError('Variable "errorPayPalPaymentUrl" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "\";
    let availableCountries = ";
        // line 10
        yield json_encode((isset($context["available_countries"]) || array_key_exists("available_countries", $context) ? $context["available_countries"] : (function () { throw new RuntimeError('Variable "available_countries" does not exist.', 10, $this->source); })()));
        yield ";
    let updatePayPalOrderUrl = \"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_update_paypal_order");
        yield "\";

    paypal.Buttons({
        locale: '";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "',
        style: {
            label: 'checkout'
        },
        createOrder: function(data, actions) {
            return fetch(createPayPalOrderFromCartUrl, {
                method: 'post'
            })
            .then(function(res) {
                document.querySelector(\"#sylius_cart\").parentElement.classList.add('loadable');
                document.querySelector(\"#sylius_cart\").parentElement.classList.add('loading');
                return res.status === 400 ? window.location.reload() : res.json();
            }).then(data => data.orderID);
        },
        onApprove: function(data, actions) {
            return fetch(processPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: data.orderID, orderId: orderId })
            })
            .then(res => res.json())
            .then(details => window.location.href = completeUrl);
        },
        onCancel: function (data, actions) {
            return fetch(cancelPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: data.orderID })
            }).then(data => window.location.reload());
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
        return "@SyliusPayPalPlugin/payFromCartPage.html.twig";
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
        return array (  96 => 14,  90 => 11,  86 => 10,  82 => 9,  78 => 8,  74 => 7,  70 => 6,  66 => 5,  62 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"paypal-button-container\" style=\"margin-top: 10px\"></div>
<script src=\"https://www.paypal.com/sdk/js?client-id={{ clientId }}&locale={{ locale }}&currency={{ currency }}&commit=false&disable-funding=credit,card,bancontact,blik,eps,giropay,ideal,mybank,p24,sepa,sofort,venmo\" data-partner-attribution-id=\"{{ partnerAttributionId }}\"></script>
<script>
    let completeUrl = \"{{ completeUrl }}\";
    let createPayPalOrderFromCartUrl = \"{{ createPayPalOrderFromCartUrl }}\";
    let orderId = \"{{ orderId }}\";
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
            return fetch(createPayPalOrderFromCartUrl, {
                method: 'post'
            })
            .then(function(res) {
                document.querySelector(\"#sylius_cart\").parentElement.classList.add('loadable');
                document.querySelector(\"#sylius_cart\").parentElement.classList.add('loading');
                return res.status === 400 ? window.location.reload() : res.json();
            }).then(data => data.orderID);
        },
        onApprove: function(data, actions) {
            return fetch(processPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: data.orderID, orderId: orderId })
            })
            .then(res => res.json())
            .then(details => window.location.href = completeUrl);
        },
        onCancel: function (data, actions) {
            return fetch(cancelPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: data.orderID })
            }).then(data => window.location.reload());
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
", "@SyliusPayPalPlugin/payFromCartPage.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/paypal-plugin/src/Resources/views/payFromCartPage.html.twig");
    }
}
