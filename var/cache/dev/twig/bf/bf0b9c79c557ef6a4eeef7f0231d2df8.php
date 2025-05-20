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

/* @PayPlugSyliusPayPlugPlugin/oney/cart/pay_with_oney.html.twig */
class __TwigTemplate_c8dc868aa386fb27e2fb3236d11f4ff4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/oney/cart/pay_with_oney.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/oney/cart/pay_with_oney.html.twig"));

        // line 1
        if (($this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneyExtension']->isOneyEnabled() && $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\ShowMeaExtension']->canShowMEA())) {
            // line 2
            yield "    ";
            $context["data"] = [];
            // line 3
            yield "    ";
            $context["logo_disabled"] = "3x4x-alt.svg";
            // line 4
            yield "    ";
            $context["logo_enabled"] = "3x4x.svg";
            // line 5
            yield "    ";
            if ((($tmp = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneySimulationExtension']->isPaymentChoiceWithoutFees()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "        ";
                $context["logo_enabled"] = "3x4x-without-fees.svg";
                // line 7
                yield "        ";
                $context["logo_disabled"] = "3x4x-without-fees-alt.svg";
                // line 8
                yield "    ";
            }
            // line 9
            yield "    ";
            if ((($tmp = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneyRulesExtension']->isCartEligible()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "        ";
                $context["logo_name"] = (isset($context["logo_enabled"]) || array_key_exists("logo_enabled", $context) ? $context["logo_enabled"] : (function () { throw new RuntimeError('Variable "logo_enabled" does not exist.', 10, $this->source); })());
                // line 11
                yield "        ";
                if ((($tmp = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneySimulationExtension']->isPaymentChoiceWithoutFees()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 12
                    yield "            ";
                    $context["logo_enabled"] = "3x4x-without-fees.svg";
                    // line 13
                    yield "        ";
                }
                // line 14
                yield "    ";
            } else {
                // line 15
                yield "        ";
                $context["data"] = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneyRulesExtension']->getReasonsOfIneligibility();
                // line 16
                yield "        ";
                $context["logo_name"] = (isset($context["logo_disabled"]) || array_key_exists("logo_disabled", $context) ? $context["logo_disabled"] : (function () { throw new RuntimeError('Variable "logo_disabled" does not exist.', 16, $this->source); })());
                // line 17
                yield "    ";
            }
            // line 18
            yield "    <div class=\"oney-info\">
        <span>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.or_pay_with_oney"), "html", null, true);
            yield "</span>
        <img src=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("bundles/payplugsyliuspayplugplugin/assets/oney/" . (isset($context["logo_name"]) || array_key_exists("logo_name", $context) ? $context["logo_name"] : (function () { throw new RuntimeError('Variable "logo_name" does not exist.', 20, $this->source); })()))), "html", null, true);
            yield "\" class=\"oney-logo\" alt=\"oney-logo\"/>
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
        <div class=\"oney-popin ";
            // line 24
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            } else {
                yield "enabled";
            }
            yield "\"
             data-popin-url=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payplug_sylius_oney_simulation_popin");
            yield "\">";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "            <div class=\"oney-popin__header\">
                <a class=\"close\" href=\"javascript:void(0);\" title=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.popin_close"), "html", null, true);
                yield "\">
                    <span></span><span></span>
                </a>
            </div>
            <div class=\"oney-popin__content\">
                ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "reasons", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 33
                    yield "                    <p class=\"reasons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["reason"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "trans_params", [], "any", false, false, false, 33)), "html", null, true);
                    yield "</p>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reason'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "            </div>
        ";
            }
            // line 36
            yield "</div>
        <script type=\"text/javascript\" src=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/shop/oney_cart/index.js"), "html", null, true);
            yield "\"></script>
        <script type=\"text/javascript\" src=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/shop/oney_popin/index.js"), "html", null, true);
            yield "\"></script>
        <script type=\"text/javascript\">//<![CDATA[
            ";
            // line 41
            yield "              var translations = {
                reason: \"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.oney_unavailable"), "js", null, true);
            yield "\",
                close: \"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.popin_close"), "js", null, true);
            yield "\"
              }
            ";
            // line 46
            yield "          //]]></script>
        <link rel=\"stylesheet\" href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/shop/oney_popin/index.css"), "html", null, true);
            yield "\">
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
        return "@PayPlugSyliusPayPlugPlugin/oney/cart/pay_with_oney.html.twig";
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
        return array (  179 => 47,  176 => 46,  171 => 43,  167 => 42,  164 => 41,  159 => 38,  155 => 37,  152 => 36,  148 => 35,  139 => 33,  135 => 32,  127 => 27,  124 => 26,  120 => 25,  112 => 24,  105 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  89 => 15,  86 => 14,  83 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  65 => 7,  62 => 6,  59 => 5,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if is_oney_enabled() and can_show_mea() %}
    {% set data = [] %}
    {% set logo_disabled = '3x4x-alt.svg' %}
    {% set logo_enabled = '3x4x.svg' %}
    {% if is_oney_without_fees() %}
        {% set logo_enabled = '3x4x-without-fees.svg' %}
        {% set logo_disabled = '3x4x-without-fees-alt.svg' %}
    {% endif %}
    {% if oney_cart_eligible() %}
        {% set logo_name = logo_enabled %}
        {% if is_oney_without_fees() %}
            {% set logo_enabled = '3x4x-without-fees.svg' %}
        {% endif %}
    {% else %}
        {% set data = oney_ineligible_reasons() %}
        {% set logo_name = logo_disabled %}
    {% endif %}
    <div class=\"oney-info\">
        <span>{{ 'payplug_sylius_payplug_plugin.ui.or_pay_with_oney'|trans }}</span>
        <img src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/' ~ logo_name) }}\" class=\"oney-logo\" alt=\"oney-logo\"/>
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
        <div class=\"oney-popin {% if data is not empty %}disabled{% else %}enabled{% endif %}\"
             data-popin-url=\"{{ path('payplug_sylius_oney_simulation_popin') }}\">{% if data is not empty %}
            <div class=\"oney-popin__header\">
                <a class=\"close\" href=\"javascript:void(0);\" title=\"{{ 'payplug_sylius_payplug_plugin.ui.popin_close'|trans }}\">
                    <span></span><span></span>
                </a>
            </div>
            <div class=\"oney-popin__content\">
                {% for reason in data.reasons %}
                    <p class=\"reasons\">{{ reason|trans(data.trans_params) }}</p>
                {% endfor %}
            </div>
        {% endif %}</div>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/shop/oney_cart/index.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/shop/oney_popin/index.js') }}\"></script>
        <script type=\"text/javascript\">//<![CDATA[
            {% autoescape 'js' %}
              var translations = {
                reason: \"{{ 'payplug_sylius_payplug_plugin.ui.oney_unavailable'|trans }}\",
                close: \"{{ 'payplug_sylius_payplug_plugin.ui.popin_close'|trans }}\"
              }
            {% endautoescape %}
          //]]></script>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/shop/oney_popin/index.css') }}\">
    </div>
{% endif %}
", "@PayPlugSyliusPayPlugPlugin/oney/cart/pay_with_oney.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/payplug/sylius-payplug-plugin/src/Resources/views/oney/cart/pay_with_oney.html.twig");
    }
}
