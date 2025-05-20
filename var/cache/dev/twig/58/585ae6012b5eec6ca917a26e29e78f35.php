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

/* @SyliusCore/Email/shipmentConfirmation.html.twig */
class __TwigTemplate_14fb9581453f08a01a519528db6d3061 extends Template
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

        $this->blocks = [
            'subject' => [$this, 'block_subject'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusCore/Email/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Email/shipmentConfirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Email/shipmentConfirmation.html.twig"));

        $this->parent = $this->load("@SyliusCore/Email/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_subject(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subject"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        yield "    ";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.shipment_confirmation.subject", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 4, $this->source); })()));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "    <div style=\"text-align: center;\">
        <div>
            ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.shipment_confirmation.your_order_with_number", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 10, $this->source); })())), "html", null, true);
        yield "
            <span style=\"color: #1abb9c;\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "number", [], "any", false, false, false, 11), "html", null, true);
        yield "</span>
            ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.shipment_confirmation.has_been_sent_using", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 12, $this->source); })())), "html", null, true);
        yield "
            <span style=\"color: #1abb9c;\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 13, $this->source); })()), "method", [], "any", false, false, false, 13), "html", null, true);
        yield "</span>.
        </div>
        ";
        // line 15
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 15, $this->source); })()), "tracking", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "            <div style=\"margin-bottom: 20px;\">
                ";
            // line 17
            $context["tracking_code"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "<span style=\"color: #1abb9c;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 17, $this->source); })()), "tracking", [], "any", false, false, false, 17), "html", null, true);
                yield "</span>";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 18
            yield "                ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.shipment_confirmation.you_can_check_its_location_with_the_tracking_code", ["%tracking_code%" =>             // line 19
(isset($context["tracking_code"]) || array_key_exists("tracking_code", $context) ? $context["tracking_code"] : (function () { throw new RuntimeError('Variable "tracking_code" does not exist.', 19, $this->source); })())], null,             // line 20
(isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 20, $this->source); })()));
            yield "
            </div>
        ";
        }
        // line 23
        yield "        <div>
            ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.shipment_confirmation.thank_you_for_transaction", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 24, $this->source); })())), "html", null, true);
        yield "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusCore/Email/shipmentConfirmation.html.twig";
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
        return array (  149 => 24,  146 => 23,  140 => 20,  139 => 19,  137 => 18,  130 => 17,  127 => 16,  125 => 15,  120 => 13,  116 => 12,  112 => 11,  108 => 10,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusCore/Email/layout.html.twig' %}

{% block subject %}
    {{ 'sylius.email.shipment_confirmation.subject'|trans({}, null, localeCode)|raw }}
{% endblock %}

{% block content %}
    <div style=\"text-align: center;\">
        <div>
            {{ 'sylius.email.shipment_confirmation.your_order_with_number'|trans({}, null, localeCode) }}
            <span style=\"color: #1abb9c;\">{{ order.number }}</span>
            {{ 'sylius.email.shipment_confirmation.has_been_sent_using'|trans({}, null, localeCode) }}
            <span style=\"color: #1abb9c;\">{{ shipment.method }}</span>.
        </div>
        {% if shipment.tracking is not null %}
            <div style=\"margin-bottom: 20px;\">
                {% set tracking_code %}<span style=\"color: #1abb9c;\">{{ shipment.tracking }}</span>{% endset %}
                {{ 'sylius.email.shipment_confirmation.you_can_check_its_location_with_the_tracking_code'|trans({
                    '%tracking_code%': tracking_code
                }, null, localeCode)|raw }}
            </div>
        {% endif %}
        <div>
            {{ 'sylius.email.shipment_confirmation.thank_you_for_transaction'|trans({}, null, localeCode) }}
        </div>
    </div>
{% endblock %}
", "@SyliusCore/Email/shipmentConfirmation.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/views/Email/shipmentConfirmation.html.twig");
    }
}
