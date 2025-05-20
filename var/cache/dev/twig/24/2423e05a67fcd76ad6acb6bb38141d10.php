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

/* @SyliusAdmin/Order/Show/_headerItems.html.twig */
class __TwigTemplate_b90dc2ea026f5b6791f3cd55eec6b88b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/_headerItems.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/_headerItems.html.twig"));

        // line 1
        $macros["flags"] = $this->macros["flags"] = $this->load("@SyliusUi/Macro/flags.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"item\">
    ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "checkoutCompletedAt", [], "any", false, false, false, 4)), "html", null, true);
        yield "
</div>
<div class=\"item\" id=\"sylius-order-state\">
    ";
        // line 7
        yield from $this->load([((("@SyliusAdmin/Order/Label/State" . "/") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "state", [], "any", false, false, false, 7)) . ".html.twig"), "@SyliusUi/Label/_default.html.twig"], 7)->unwrap()->yield(CoreExtension::merge($context, ["value" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius.ui." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "state", [], "any", false, false, false, 7)))]));
        // line 8
        yield "</div>
<div class=\"item\" id=\"sylius-order-currency\">
    ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "currencyCode", [], "any", false, false, false, 10), "html", null, true);
        yield "
</div>
<div class=\"item\">
    ";
        // line 13
        yield $macros["flags"]->getTemplateForMacro("macro_fromLocaleCode", $context, 13, $this->getSourceContext())->macro_fromLocaleCode(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "localeCode", [], "any", false, false, false, 13)]);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_locale_name')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "localeCode", [], "any", false, false, false, 13)), "html", null, true);
        yield "
</div>
<div class=\"item\">
    ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.purchased_from"), "html", null, true);
        yield "
    ";
        // line 17
        yield from $this->load("@SyliusAdmin/Common/_channel.html.twig", 17)->unwrap()->yield(CoreExtension::merge($context, ["channel" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "channel", [], "any", false, false, false, 17)]));
        // line 18
        yield "</div>
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
        return "@SyliusAdmin/Order/Show/_headerItems.html.twig";
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
        return array (  85 => 18,  83 => 17,  79 => 16,  72 => 13,  66 => 10,  62 => 8,  60 => 7,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

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
", "@SyliusAdmin/Order/Show/_headerItems.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_headerItems.html.twig");
    }
}
