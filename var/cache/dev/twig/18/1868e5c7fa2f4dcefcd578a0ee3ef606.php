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

/* @SyliusUi/Modal/_confirmation.html.twig */
class __TwigTemplate_883d1b9a82e6f091695e04221d04bb62 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Modal/_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Modal/_confirmation.html.twig"));

        // line 1
        $context["currentRoute"] = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\GetCurrentRouteExtension']->payplugGetCurrentRoute();
        // line 2
        yield "<div class=\"ui small basic modal\" id=\"confirmation-modal\">
    <div class=\"ui icon header\">
        <i class=\"warning sign icon\"></i>
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.confirm_your_action"), "html", null, true);
        yield "
    </div>
    <div class=\"content\">
        <p>
            ";
        // line 9
        if (((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 9, $this->source); })()) == "payplug_sylius_card_account_index")) {
            // line 10
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.account.saved_cards.confirmation_modal.confirm_card_deletion"), "html", null, true);
            yield "
            ";
        } else {
            // line 12
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.are_your_sure_you_want_to_perform_this_action"), "html", null, true);
            yield "
            ";
        }
        // line 14
        yield "        </p>
    </div>
    <div class=\"actions\">
        <div class=\"ui red basic cancel inverted button\">
            <i class=\"remove icon\"></i>
            ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_label"), "html", null, true);
        yield "
        </div>
        <div class=\"ui green ok inverted button\" id=\"confirmation-button\">
            <i class=\"checkmark icon\"></i>
            ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.yes_label"), "html", null, true);
        yield "
        </div>
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
        return "@SyliusUi/Modal/_confirmation.html.twig";
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
        return array (  90 => 23,  83 => 19,  76 => 14,  70 => 12,  64 => 10,  62 => 9,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set currentRoute = payplug_get_current_route() %}
<div class=\"ui small basic modal\" id=\"confirmation-modal\">
    <div class=\"ui icon header\">
        <i class=\"warning sign icon\"></i>
        {{ 'sylius.ui.confirm_your_action'|trans }}
    </div>
    <div class=\"content\">
        <p>
            {% if currentRoute == 'payplug_sylius_card_account_index' %}
                {{ 'payplug_sylius_payplug_plugin.ui.account.saved_cards.confirmation_modal.confirm_card_deletion'|trans }}
            {% else %}
                {{ 'sylius.ui.are_your_sure_you_want_to_perform_this_action'|trans }}
            {% endif %}
        </p>
    </div>
    <div class=\"actions\">
        <div class=\"ui red basic cancel inverted button\">
            <i class=\"remove icon\"></i>
            {{ 'sylius.ui.no_label'|trans }}
        </div>
        <div class=\"ui green ok inverted button\" id=\"confirmation-button\">
            <i class=\"checkmark icon\"></i>
            {{ 'sylius.ui.yes_label'|trans }}
        </div>
    </div>
</div>
", "@SyliusUi/Modal/_confirmation.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/payplug/sylius-payplug-plugin/src/Resources/views/SyliusUiBundle/Modal/_confirmation.html.twig");
    }
}
