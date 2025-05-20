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

/* @SyliusRefundPlugin/_header.html.twig */
class __TwigTemplate_9bf72a6db1304a08d305f57ebe4d69c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_header.html.twig"));

        // line 1
        $macros["flags"] = $this->macros["flags"] = $this->load("@SyliusUi/Macro/flags.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"ui stackable two column grid\">
    <div class=\"ten wide column\">
        <h1 class=\"ui header\">
            <i class=\"circular cart icon\"></i>
            <div class=\"content\">
                ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order"), "html", null, true);
        yield " #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "number", [], "any", false, false, false, 8), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.refunds"), "html", null, true);
        yield "
                <div class=\"sub header\">
                    <div class=\"ui horizontal divided list\">
                        <div class=\"item\">
                            ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "checkoutCompletedAt", [], "any", false, false, false, 12)), "html", null, true);
        yield "
                        </div>
                        <div class=\"item\" id=\"sylius-order-state\">
                            ";
        // line 15
        yield from $this->load([((("@SyliusAdmin/Order/Label/State" . "/") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "state", [], "any", false, false, false, 15)) . ".html.twig"), "@SyliusUi/Label/_default.html.twig"], 15)->unwrap()->yield(CoreExtension::merge($context, ["value" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius.ui." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "state", [], "any", false, false, false, 15)))]));
        // line 16
        yield "                        </div>
                        <div class=\"item\" id=\"sylius-order-currency\">
                            ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "currencyCode", [], "any", false, false, false, 18), "html", null, true);
        yield "
                        </div>
                        <div class=\"item\">
                            ";
        // line 21
        yield $macros["flags"]->getTemplateForMacro("macro_fromLocaleCode", $context, 21, $this->getSourceContext())->macro_fromLocaleCode(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 21, $this->source); })()), "localeCode", [], "any", false, false, false, 21)]);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_locale_name')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 21, $this->source); })()), "localeCode", [], "any", false, false, false, 21)), "html", null, true);
        yield "
                        </div>
                        <div class=\"item\">
                            ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.purchased_from"), "html", null, true);
        yield "
                            ";
        // line 25
        yield from $this->load("@SyliusAdmin/Common/_channel.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["channel" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "channel", [], "any", false, false, false, 25)]));
        // line 26
        yield "                        </div>
                    </div>
                </div>
            </div>
        </h1>
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
        return "@SyliusRefundPlugin/_header.html.twig";
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
        return array (  100 => 26,  98 => 25,  94 => 24,  87 => 21,  81 => 18,  77 => 16,  75 => 15,  69 => 12,  58 => 8,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

<div class=\"ui stackable two column grid\">
    <div class=\"ten wide column\">
        <h1 class=\"ui header\">
            <i class=\"circular cart icon\"></i>
            <div class=\"content\">
                {{ 'sylius.ui.order'|trans }} #{{ order.number }} - {{ 'sylius_refund.ui.refunds'|trans }}
                <div class=\"sub header\">
                    <div class=\"ui horizontal divided list\">
                        <div class=\"item\">
                            {{ order.checkoutCompletedAt|format_datetime }}
                        </div>
                        <div class=\"item\" id=\"sylius-order-state\">
                            {% include [('@SyliusAdmin/Order/Label/State' ~ '/' ~ order.state ~ '.html.twig'), '@SyliusUi/Label/_default.html.twig'] with {'value': ('sylius.ui.' ~ order.state)|trans} %}
                        </div>
                        <div class=\"item\" id=\"sylius-order-currency\">
                            {{ order.currencyCode }}
                        </div>
                        <div class=\"item\">
                            {{ flags.fromLocaleCode(order.localeCode) }}{{ order.localeCode|sylius_locale_name }}
                        </div>
                        <div class=\"item\">
                            {{ 'sylius.ui.purchased_from'|trans }}
                            {% include '@SyliusAdmin/Common/_channel.html.twig' with {'channel': order.channel} %}
                        </div>
                    </div>
                </div>
            </div>
        </h1>
    </div>
</div>
", "@SyliusRefundPlugin/_header.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/_header.html.twig");
    }
}
