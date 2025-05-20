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

/* @PayPlugSyliusPayPlugPlugin/SyliusShopBundle/Account/SavedCards/Index/_subcontent.html.twig */
class __TwigTemplate_0e36dc921d32565b1aa6fe06cc749245 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/SyliusShopBundle/Account/SavedCards/Index/_subcontent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/SyliusShopBundle/Account/SavedCards/Index/_subcontent.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusUi/Macro/buttons.html.twig", 1)->unwrap();
        // line 2
        $macros["messages"] = $this->macros["messages"] = $this->load("@SyliusUi/Macro/messages.html.twig", 2)->unwrap();
        // line 3
        yield "
<div class=\"ui hidden divider\"></div>
<div class=\"sylius-grid-wrapper\">
    ";
        // line 6
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["savedCards"]) || array_key_exists("savedCards", $context) ? $context["savedCards"] : (function () { throw new RuntimeError('Variable "savedCards" does not exist.', 6, $this->source); })())) == 0)) {
            // line 7
            yield "        ";
            yield $macros["messages"]->getTemplateForMacro("macro_info", $context, 7, $this->getSourceContext())->macro_info(...["payplug_sylius_payplug_plugin.ui.account.saved_cards.no_results_to_display"]);
            yield "
    ";
        } else {
            // line 9
            yield "        <div class=\"ui segment spaceless sylius-grid-table-wrapper sylius-customer-account-saved-cards-grid\">
            <table class=\"ui stackable very basic celled table\">
                <thead>
                    <tr>
                        <th>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.account.saved_cards.brand"), "html", null, true);
            yield "</th>
                        <th>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.account.saved_cards.mask"), "html", null, true);
            yield "</th>
                        <th>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.account.saved_cards.expire"), "html", null, true);
            yield "</th>
                        <th class=\"sylius-table-column-actions\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.action"), "html", null, true);
            yield "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["savedCards"]) || array_key_exists("savedCards", $context) ? $context["savedCards"] : (function () { throw new RuntimeError('Variable "savedCards" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["savedCard"]) {
                // line 21
                yield "                        <tr>
                            <td data-label=\"";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.account.saved_cards.mobile.brand"), "html", null, true);
                yield "\">
                                <span>
                                    ";
                // line 24
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "brand", [], "any", false, false, false, 24) == "CB")) {
                    // line 25
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "brand", [], "any", false, false, false, 25), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 27
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "brand", [], "any", false, false, false, 27))), "html", null, true);
                    yield "
                                    ";
                }
                // line 29
                yield "                                </span>
                            </td>
                            <td data-label=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.account.saved_cards.mobile.mask"), "html", null, true);
                yield "\">
                                <span>****";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "last4", [], "any", false, false, false, 32), "html", null, true);
                yield "</span>
                            </td>
                            ";
                // line 34
                if ((($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") > CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "expirationYear", [], "any", false, false, false, 34)) || (($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") == CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "expirationYear", [], "any", false, false, false, 34)) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "m") > CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "expirationMonth", [], "any", false, false, false, 34))))) {
                    // line 35
                    yield "                                <td data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.account.saved_cards.mobile.expire"), "html", null, true);
                    yield "\">
                                    <span class=\"expired\">
                                        ";
                    // line 37
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "expirationMonth", [], "any", false, false, false, 37)), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "expirationYear", [], "any", false, false, false, 37)), "html", null, true);
                    yield "
                                        (";
                    // line 38
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.account.saved_cards.expired"), "html", null, true);
                    yield ")
                                    </span>
                                </td>
                            ";
                } else {
                    // line 42
                    yield "                                <td data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.account.saved_cards.mobile.expire"), "html", null, true);
                    yield "\">
                                    <span>";
                    // line 43
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "expirationMonth", [], "any", false, false, false, 43)), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "expirationYear", [], "any", false, false, false, 43)), "html", null, true);
                    yield "</span>
                                </td>
                            ";
                }
                // line 46
                yield "                            <td class=\"actions\">
                                <div class=\"ui icon labeled buttons\">
                                    ";
                // line 48
                yield $macros["buttons"]->getTemplateForMacro("macro_delete", $context, 48, $this->getSourceContext())->macro_delete(...[$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payplug_sylius_card_account_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "id", [], "any", false, false, false, 48)]), null, true, CoreExtension::getAttribute($this->env, $this->source, $context["savedCard"], "id", [], "any", false, false, false, 48)]);
                yield "
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['savedCard'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "                </tbody>
            </table>
        </div>
    ";
        }
        // line 57
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
        return "@PayPlugSyliusPayPlugPlugin/SyliusShopBundle/Account/SavedCards/Index/_subcontent.html.twig";
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
        return array (  184 => 57,  178 => 53,  167 => 48,  163 => 46,  155 => 43,  150 => 42,  143 => 38,  137 => 37,  131 => 35,  129 => 34,  124 => 32,  120 => 31,  116 => 29,  110 => 27,  104 => 25,  102 => 24,  97 => 22,  94 => 21,  90 => 20,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  65 => 9,  59 => 7,  57 => 6,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

<div class=\"ui hidden divider\"></div>
<div class=\"sylius-grid-wrapper\">
    {% if savedCards|length == 0 %}
        {{ messages.info('payplug_sylius_payplug_plugin.ui.account.saved_cards.no_results_to_display') }}
    {% else %}
        <div class=\"ui segment spaceless sylius-grid-table-wrapper sylius-customer-account-saved-cards-grid\">
            <table class=\"ui stackable very basic celled table\">
                <thead>
                    <tr>
                        <th>{{ 'payplug_sylius_payplug_plugin.ui.account.saved_cards.brand'|trans }}</th>
                        <th>{{ 'payplug_sylius_payplug_plugin.ui.account.saved_cards.mask'|trans }}</th>
                        <th>{{ 'payplug_sylius_payplug_plugin.ui.account.saved_cards.expire'|trans }}</th>
                        <th class=\"sylius-table-column-actions\">{{ 'sylius.ui.action'|trans }}</th>
                    </tr>
                </thead>
                <tbody>
                    {% for savedCard in savedCards %}
                        <tr>
                            <td data-label=\"{{ 'payplug_sylius_payplug_plugin.ui.account.saved_cards.mobile.brand'|trans }}\">
                                <span>
                                    {% if savedCard.brand == 'CB' %}
                                        {{ savedCard.brand }}
                                    {% else %}
                                        {{ savedCard.brand|lower|capitalize }}
                                    {% endif %}
                                </span>
                            </td>
                            <td data-label=\"{{ 'payplug_sylius_payplug_plugin.ui.account.saved_cards.mobile.mask'|trans }}\">
                                <span>****{{ savedCard.last4 }}</span>
                            </td>
                            {% if \"now\"|date(\"Y\") > savedCard.expirationYear or (\"now\"|date(\"Y\") == savedCard.expirationYear and \"now\"|date(\"m\") > savedCard.expirationMonth)  %}
                                <td data-label=\"{{ 'payplug_sylius_payplug_plugin.ui.account.saved_cards.mobile.expire'|trans }}\">
                                    <span class=\"expired\">
                                        {{ \"%02d\"|format(savedCard.expirationMonth) }}/{{ \"%02d\"|format(savedCard.expirationYear) }}
                                        ({{ 'payplug_sylius_payplug_plugin.ui.account.saved_cards.expired'|trans }})
                                    </span>
                                </td>
                            {% else %}
                                <td data-label=\"{{ 'payplug_sylius_payplug_plugin.ui.account.saved_cards.mobile.expire'|trans }}\">
                                    <span>{{ \"%02d\"|format(savedCard.expirationMonth) }}/{{ \"%02d\"|format(savedCard.expirationYear) }}</span>
                                </td>
                            {% endif %}
                            <td class=\"actions\">
                                <div class=\"ui icon labeled buttons\">
                                    {{ buttons.delete(path('payplug_sylius_card_account_delete', {'id': savedCard.id}), null, true, savedCard.id) }}
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif %}
</div>
", "@PayPlugSyliusPayPlugPlugin/SyliusShopBundle/Account/SavedCards/Index/_subcontent.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/payplug/sylius-payplug-plugin/src/Resources/views/SyliusShopBundle/Account/SavedCards/Index/_subcontent.html.twig");
    }
}
