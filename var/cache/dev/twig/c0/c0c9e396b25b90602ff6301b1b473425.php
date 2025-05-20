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

/* bundles/SyliusShopBundle/Checkout/SelectPayment/_choice.html.twig */
class __TwigTemplate_3f4bf8b7b933cf2acd9ce38cba48710e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/SyliusShopBundle/Checkout/SelectPayment/_choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/SyliusShopBundle/Checkout/SelectPayment/_choice.html.twig"));

        // line 1
        yield "<div class=\"item\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-item");
        yield ">
    <div class=\"field\">
        <div class=\"ui radio checkbox\" ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-method-checkbox");
        yield ">
            ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'widget', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("payment-method-select"));
        yield "
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'label', ["label_attr" => ["data-test-payment-method-label" => ""]]);
        yield "</a>
        ";
        // line 9
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "            <div class=\"description\">
                <p>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), "html", null, true);
            yield "</p>
            </div>
        ";
        }
        // line 14
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 14, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 14), "factoryName", [], "any", false, false, false, 14) == "sylius.pay_pal")) {
            // line 15
            yield "            ";
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Sylius\\PayPalPlugin\\Controller\\PayPalButtonsController::renderPaymentPageButtonsAction", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]));
            yield "
        ";
        }
        // line 17
        yield "    </div>
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
        return "bundles/SyliusShopBundle/Checkout/SelectPayment/_choice.html.twig";
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
        return array (  89 => 17,  83 => 15,  80 => 14,  74 => 11,  71 => 10,  69 => 9,  65 => 8,  58 => 4,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"item\" {{ sylius_test_html_attribute('payment-item') }}>
    <div class=\"field\">
        <div class=\"ui radio checkbox\" {{ sylius_test_html_attribute('payment-method-checkbox') }}>
            {{ form_widget(form, sylius_test_form_attribute('payment-method-select')) }}
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">{{ form_label(form, null, {'label_attr': {'data-test-payment-method-label': ''}}) }}</a>
        {% if method.description is not null %}
            <div class=\"description\">
                <p>{{ method.description }}</p>
            </div>
        {% endif %}
        {% if method.gatewayConfig.factoryName == 'sylius.pay_pal' %}
            {{ render(controller('Sylius\\\\PayPalPlugin\\\\Controller\\\\PayPalButtonsController::renderPaymentPageButtonsAction', {'orderId': order.id})) }}
        {% endif %}
    </div>
</div>
", "bundles/SyliusShopBundle/Checkout/SelectPayment/_choice.html.twig", "/Users/orkatz/Documents/sylius_1.12/templates/bundles/SyliusShopBundle/Checkout/SelectPayment/_choice.html.twig");
    }
}
