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

/* @PayPlugSyliusPayPlugPlugin/oney/popin.html.twig */
class __TwigTemplate_3c0123d7e91145b3e5b945db1fea852d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/oney/popin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/oney/popin.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()))) {
            // line 3
            yield "    ";
            $context["data"] = (isset($context["ineligibilityData"]) || array_key_exists("ineligibilityData", $context) ? $context["ineligibilityData"] : (function () { throw new RuntimeError('Variable "ineligibilityData" does not exist.', 3, $this->source); })());
            // line 4
            yield "    ";
            if ((($tmp = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneySimulationExtension']->isPaymentChoiceWithoutFees()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "        ";
                $context["logo_name"] = "3x4x-without-fees.svg";
                // line 6
                yield "    ";
            } else {
                // line 7
                yield "        ";
                $context["logo_name"] = "3x4x.svg";
                // line 8
                yield "    ";
            }
            // line 9
            yield "    <div class=\"oney-popin__header\">
        <a class=\"close\" href=\"javascript:void(0);\" title=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.popin_close"), "html", null, true);
            yield "\">
            <span></span><span></span>
        </a>
    </div>
    <div class=\"oney-popin__content\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "reasons", [], "any", false, false, false, 15));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                // line 16
                yield "            <p class=\"reasons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["reason"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "trans_params", [], "any", false, false, false, 16)), "html", null, true);
                yield "</p>
        ";
                $context['_iterated'] = true;
            }
            // line 17
            if (!$context['_iterated']) {
                // line 18
                yield "            <p class=\"reasons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.oney_unavailable"), "html", null, true);
                yield "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reason'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "    </div>
";
        } else {
            // line 22
            yield "    <div class=\"oney-popin__header\">
        <a class=\"close\" href=\"javascript:void(0);\" title=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.popin_close"), "html", null, true);
            yield "\">
            <span></span><span></span>
        </a>
    </div>
    <div class=\"oney-popin__content\">
        <img src=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/oney/logo.svg"), "html", null, true);
            yield "\" alt=\"oney-logo\"/>
        <p>
            ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.pay"), "html", null, true);
            yield "
            ";
            // line 31
            if ((($tmp = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneySimulationExtension']->isPaymentChoiceWithoutFees()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "                <u>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.without_fees"), "html", null, true);
                yield "</u>
            ";
            }
            // line 34
            yield "        </p>
        <p><strong>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.by_credit_cart"), "html", null, true);
            yield "</strong></p>
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneySimulationExtension']->getSupportedPaymentChoices());
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                // line 37
                yield "            <section class=\"section-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice"], "html", null, true);
                yield "\">
                <div>
                    <img src=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/payplugsyliuspayplugplugin/assets/oney/" . ($context["key"] + 3)) . "x.svg")), "html", null, true);
                yield "\"
                         alt=\"Paiement en ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["key"] + 3), "html", null, true);
                yield "x\"/>
                </div>
                <div>
                    ";
                // line 43
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.popin_paiement_desc", ["%apport%" => $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 44, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 44
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })()), $context["choice"], [], "array", false, false, false, 44), "down_payment_amount", [], "array", false, false, false, 44)]), "%nb_mensuality%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 45
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), $context["choice"], [], "array", false, false, false, 45), "installments", [], "array", false, false, false, 45)), "%mensuality%" => $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 46, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 46
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), $context["choice"], [], "array", false, false, false, 46), "installments", [], "array", false, false, false, 46), 0, [], "array", false, false, false, 46), "amount", [], "array", false, false, false, 46)]), "%cost%" => $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 47, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 47
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), $context["choice"], [], "array", false, false, false, 47), "total_cost", [], "array", false, false, false, 47)]), "%percentage%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 48
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), $context["choice"], [], "array", false, false, false, 48), "effective_annual_percentage_rate", [], "array", false, false, false, 48)]);
                // line 49
                yield "
                </div>
            </section>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['choice'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "        <div class=\"oney-popin__footer\">
            <p>
                ";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("payplug_sylius_payplug_plugin.ui.popin_legal_mention" . (((($tmp = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneySimulationExtension']->isPaymentChoiceWithoutFees()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("_without_fees") : (""))), ["%min_amount%" => $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 56, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source,             // line 56
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "min_amount", [], "array", false, false, false, 56)]), "%max_amount%" => $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 57, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source,             // line 57
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "max_amount", [], "array", false, false, false, 57)])]);
            // line 58
            yield "
            </p>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PayPlugSyliusPayPlugPlugin/oney/popin.html.twig";
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
        return array (  187 => 58,  185 => 57,  184 => 56,  183 => 55,  179 => 53,  170 => 49,  168 => 48,  167 => 47,  166 => 46,  165 => 45,  164 => 44,  163 => 43,  157 => 40,  153 => 39,  147 => 37,  143 => 36,  139 => 35,  136 => 34,  130 => 32,  128 => 31,  124 => 30,  119 => 28,  111 => 23,  108 => 22,  104 => 20,  95 => 18,  93 => 17,  86 => 16,  81 => 15,  73 => 10,  70 => 9,  67 => 8,  64 => 7,  61 => 6,  58 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}
{% if data is empty %}
    {% set data = ineligibilityData %}
    {% if is_oney_without_fees() %}
        {% set logo_name = '3x4x-without-fees.svg' %}
    {% else %}
        {% set logo_name = '3x4x.svg' %}
    {% endif %}
    <div class=\"oney-popin__header\">
        <a class=\"close\" href=\"javascript:void(0);\" title=\"{{ 'payplug_sylius_payplug_plugin.ui.popin_close'|trans }}\">
            <span></span><span></span>
        </a>
    </div>
    <div class=\"oney-popin__content\">
        {% for reason in data.reasons %}
            <p class=\"reasons\">{{ reason|trans(data.trans_params) }}</p>
        {% else %}
            <p class=\"reasons\">{{ 'payplug_sylius_payplug_plugin.ui.oney_unavailable'|trans }}</p>
        {% endfor %}
    </div>
{% else %}
    <div class=\"oney-popin__header\">
        <a class=\"close\" href=\"javascript:void(0);\" title=\"{{ 'payplug_sylius_payplug_plugin.ui.popin_close'|trans }}\">
            <span></span><span></span>
        </a>
    </div>
    <div class=\"oney-popin__content\">
        <img src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/logo.svg') }}\" alt=\"oney-logo\"/>
        <p>
            {{ 'payplug_sylius_payplug_plugin.ui.pay'|trans }}
            {% if is_oney_without_fees() %}
                <u>{{ 'payplug_sylius_payplug_plugin.ui.without_fees'|trans }}</u>
            {% endif %}
        </p>
        <p><strong>{{ 'payplug_sylius_payplug_plugin.ui.by_credit_cart'|trans }}</strong></p>
        {% for key, choice in oney_supported_choices() %}
            <section class=\"section-{{ choice }}\">
                <div>
                    <img src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/' ~ (key + 3) ~ 'x.svg') }}\"
                         alt=\"Paiement en {{ key + 3 }}x\"/>
                </div>
                <div>
                    {{ 'payplug_sylius_payplug_plugin.ui.popin_paiement_desc'|trans({
                        '%apport%': money.convertAndFormat(data[choice]['down_payment_amount']),
                        '%nb_mensuality%': data[choice]['installments']|length,
                        '%mensuality%': money.convertAndFormat(data[choice]['installments'][0]['amount']),
                        '%cost%': money.convertAndFormat(data[choice]['total_cost']),
                        '%percentage%': data[choice]['effective_annual_percentage_rate']
                    })|raw }}
                </div>
            </section>
        {% endfor %}
        <div class=\"oney-popin__footer\">
            <p>
                {{ (('payplug_sylius_payplug_plugin.ui.popin_legal_mention') ~ (is_oney_without_fees() ? '_without_fees' : ''))|trans({
                    '%min_amount%': money.convertAndFormat(data['min_amount']),
                    '%max_amount%': money.convertAndFormat(data['max_amount']),
                })|raw }}
            </p>
        </div>
    </div>
{% endif %}
", "@PayPlugSyliusPayPlugPlugin/oney/popin.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/payplug/sylius-payplug-plugin/src/Resources/views/oney/popin.html.twig");
    }
}
