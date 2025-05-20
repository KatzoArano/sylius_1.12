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

/* @SyliusAdmin/Order/Show/_addresses.html.twig */
class __TwigTemplate_1bed20628bd4ef100573db24af5db8bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/_addresses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/_addresses.html.twig"));

        // line 1
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 1, $this->source); })()), "billingAddress", [], "any", false, false, false, 1))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <h4 class=\"ui attached styled header top\">
        ";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
            yield "
    </h4>
    <div class=\"ui attached segment\" id=\"billing-address\">
        ";
            // line 6
            yield from $this->load("@SyliusAdmin/Common/_address.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["address" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "billingAddress", [], "any", false, false, false, 6)]));
            // line 7
            yield "    </div>
";
        }
        // line 9
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "shippingAddress", [], "any", false, false, false, 9))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "    <h4 class=\"ui attached styled header";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "billingAddress", [], "any", false, false, false, 10))) {
                yield " top";
            }
            yield "\">
        ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
            yield "
    </h4>
    <div class=\"ui attached segment\" id=\"shipping-address\">
        ";
            // line 14
            yield from $this->load("@SyliusAdmin/Common/_address.html.twig", 14)->unwrap()->yield(CoreExtension::merge($context, ["address" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "shippingAddress", [], "any", false, false, false, 14)]));
            // line 15
            yield "    </div>
";
        }
        // line 17
        yield "<div class=\"ui attached segment\" id=\"edit-addresses\">
    <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" class=\"ui icon labeled tiny fluid button\">
        <i class=\"pencil icon\"></i> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit_addresses"), "html", null, true);
        yield "
    </a>
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
        return "@SyliusAdmin/Order/Show/_addresses.html.twig";
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
        return array (  93 => 19,  89 => 18,  86 => 17,  82 => 15,  80 => 14,  74 => 11,  67 => 10,  65 => 9,  61 => 7,  59 => 6,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if order.billingAddress is not null %}
    <h4 class=\"ui attached styled header top\">
        {{ 'sylius.ui.billing_address'|trans }}
    </h4>
    <div class=\"ui attached segment\" id=\"billing-address\">
        {% include '@SyliusAdmin/Common/_address.html.twig' with {'address': order.billingAddress} %}
    </div>
{% endif %}
{% if order.shippingAddress is not null %}
    <h4 class=\"ui attached styled header{% if order.billingAddress is null %} top{% endif %}\">
        {{ 'sylius.ui.shipping_address'|trans }}
    </h4>
    <div class=\"ui attached segment\" id=\"shipping-address\">
        {% include '@SyliusAdmin/Common/_address.html.twig' with {'address': order.shippingAddress} %}
    </div>
{% endif %}
<div class=\"ui attached segment\" id=\"edit-addresses\">
    <a href=\"{{ path('sylius_admin_order_update', {'id': order.id}) }}\" class=\"ui icon labeled tiny fluid button\">
        <i class=\"pencil icon\"></i> {{ 'sylius.ui.edit_addresses'|trans }}
    </a>
</div>
", "@SyliusAdmin/Order/Show/_addresses.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_addresses.html.twig");
    }
}
