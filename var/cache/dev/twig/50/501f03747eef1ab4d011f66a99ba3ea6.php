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

/* @SyliusShop/Checkout/SelectPayment/_navigation.html.twig */
class __TwigTemplate_3f2bcc392b340afdee65a2349fc79eac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig"));

        // line 1
        $context["enabled"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 1, $this->source); })()), "payments", [], "any", false, false, false, 1));
        // line 2
        yield "
<div class=\"ui two column grid\">
    <div class=\"column\">
        ";
        // line 5
        if ((($tmp = $this->env->getFunction('sylius_is_shipping_required')->getCallable()((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_shipping");
            yield "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_shipping_method"), "html", null, true);
            yield "</a>
        ";
        } else {
            // line 8
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_address");
            yield "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_address"), "html", null, true);
            yield "</a>
        ";
        }
        // line 10
        yield "    </div>
    <div class=\"right aligned column select-payment-submit\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled";
        // line 12
        if ((($tmp =  !(isset($context["enabled"]) || array_key_exists("enabled", $context) ? $context["enabled"] : (function () { throw new RuntimeError('Variable "enabled" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " disabled";
        }
        yield " button\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("next-step");
        yield ">
            <i class=\"arrow right icon\"></i>
            ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.next"), "html", null, true);
        yield "
        </button>
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
        return "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig";
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
        return array (  86 => 14,  77 => 12,  73 => 10,  65 => 8,  57 => 6,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set enabled = order.payments|length %}

<div class=\"ui two column grid\">
    <div class=\"column\">
        {% if sylius_is_shipping_required(order) %}
            <a href=\"{{ path('sylius_shop_checkout_select_shipping') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_shipping_method'|trans }}</a>
        {% else %}
            <a href=\"{{ path('sylius_shop_checkout_address') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_address'|trans }}</a>
        {% endif %}
    </div>
    <div class=\"right aligned column select-payment-submit\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled{% if not enabled %} disabled{% endif %} button\" {{ sylius_test_html_attribute('next-step') }}>
            <i class=\"arrow right icon\"></i>
            {{ 'sylius.ui.next'|trans }}
        </button>
    </div>
</div>
", "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/payplug/sylius-payplug-plugin/src/Resources/views/SyliusShopBundle/Checkout/SelectPayment/_navigation.html.twig");
    }
}
