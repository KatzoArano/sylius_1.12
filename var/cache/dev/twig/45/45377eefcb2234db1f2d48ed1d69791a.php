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

/* @SyliusAdmin/PaymentMethod/Gateways/paymentGateways.html.twig */
class __TwigTemplate_65e61841d8ed44bcf5c0df944fac8ad4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/PaymentMethod/Gateways/paymentGateways.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/PaymentMethod/Gateways/paymentGateways.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["gatewayFactories"]) || array_key_exists("gatewayFactories", $context) ? $context["gatewayFactories"] : (function () { throw new RuntimeError('Variable "gatewayFactories" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["gateway"]) {
            // line 2
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_payment_method_create", ["factory" => $context["name"]]), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "\" class=\"item\" ";
            if (($context["name"] == "sylius.pay_pal")) {
                yield "data-confirm-pay-pal-consent";
            }
            yield ">
        ";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["gateway"]), "html", null, true);
            yield "
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['gateway'], $context['_parent']);
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
        return "@SyliusAdmin/PaymentMethod/Gateways/paymentGateways.html.twig";
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
        return array (  63 => 3,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for name, gateway in gatewayFactories %}
    <a href=\"{{ url('sylius_admin_payment_method_create', { 'factory': name }) }}\" id=\"{{ name }}\" class=\"item\" {% if name == 'sylius.pay_pal' %}data-confirm-pay-pal-consent{% endif %}>
        {{ gateway|trans }}
    </a>
{% endfor %}
", "@SyliusAdmin/PaymentMethod/Gateways/paymentGateways.html.twig", "/Users/orkatz/Documents/sylius_1.12/templates/bundles/SyliusAdminBundle/PaymentMethod/Gateways/paymentGateways.html.twig");
    }
}
