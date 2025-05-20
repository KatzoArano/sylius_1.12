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

/* @SyliusShop/Checkout/Address/_billingAddressRequired.html.twig */
class __TwigTemplate_ccc579e82d35aafaa93a4a4f1c9341b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/Address/_billingAddressRequired.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/Address/_billingAddressRequired.html.twig"));

        // line 1
        yield "<div id=\"sylius-billing-address\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("billing-address");
        yield ">
    ";
        // line 2
        yield from $this->load("@SyliusShop/Checkout/Address/_addressBookSelect.html.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "    <h3 class=\"ui dividing header\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        yield "</h3>
    ";
        // line 4
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4))) {
            // line 5
            yield "        ";
            yield from $this->load("@SyliusShop/Common/Form/_login.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["form" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "customer", [], "any", false, false, false, 5)]));
            // line 6
            yield "    ";
        }
        // line 7
        yield "    ";
        yield from $this->load("@SyliusShop/Common/Form/_address.html.twig", 7)->unwrap()->yield(CoreExtension::merge($context, ["form" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "billingAddress", [], "any", false, false, false, 7), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "type" => "billing"]));
        // line 8
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "differentShippingAddress", [], "any", false, false, false, 8), 'row', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->env->getFunction('sylius_test_form_attribute')->getCallable()("different-shipping-address"), ["attr" => ["data-toggles" => "sylius-shipping-address"], "label_attr" => ["data-test-different-shipping-address-label" => ""]]));
        yield "

    ";
        // line 10
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.checkout.address.billing_address_form", ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })())]);
        yield "
</div>

<div id=\"sylius-shipping-address\" ";
        // line 13
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-address");
        yield ">
    <div class=\"ui hidden divider\"></div>
    ";
        // line 15
        yield from $this->load("@SyliusShop/Checkout/Address/_addressBookSelect.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "    <h3 class=\"ui dividing header\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
        yield "</h3>
    ";
        // line 17
        yield from $this->load("@SyliusShop/Common/Form/_address.html.twig", 17)->unwrap()->yield(CoreExtension::merge($context, ["form" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "shippingAddress", [], "any", false, false, false, 17), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "type" => "shipping"]));
        // line 18
        yield "
    ";
        // line 19
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.checkout.address.shipping_address_form", ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })())]);
        yield "
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
        return "@SyliusShop/Checkout/Address/_billingAddressRequired.html.twig";
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
        return array (  100 => 19,  97 => 18,  95 => 17,  90 => 16,  88 => 15,  83 => 13,  77 => 10,  71 => 8,  68 => 7,  65 => 6,  62 => 5,  60 => 4,  55 => 3,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"sylius-billing-address\" {{ sylius_test_html_attribute('billing-address') }}>
    {% include '@SyliusShop/Checkout/Address/_addressBookSelect.html.twig' %}
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.billing_address'|trans }}</h3>
    {% if app.user is null %}
        {% include '@SyliusShop/Common/Form/_login.html.twig' with {'form': form.customer} %}
    {% endif %}
    {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form.billingAddress, 'order': order, 'type': 'billing'} %}
    {{ form_row(form.differentShippingAddress, sylius_test_form_attribute('different-shipping-address')|sylius_merge_recursive({'attr': {'data-toggles': 'sylius-shipping-address'}, 'label_attr': {'data-test-different-shipping-address-label': ''}} )) }}

    {{ sylius_template_event('sylius.shop.checkout.address.billing_address_form', {'order': order}) }}
</div>

<div id=\"sylius-shipping-address\" {{ sylius_test_html_attribute('shipping-address') }}>
    <div class=\"ui hidden divider\"></div>
    {% include '@SyliusShop/Checkout/Address/_addressBookSelect.html.twig' %}
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</h3>
    {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form.shippingAddress, 'order': order, 'type': 'shipping'} %}

    {{ sylius_template_event('sylius.shop.checkout.address.shipping_address_form', {'order': order}) }}
</div>
", "@SyliusShop/Checkout/Address/_billingAddressRequired.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/Address/_billingAddressRequired.html.twig");
    }
}
