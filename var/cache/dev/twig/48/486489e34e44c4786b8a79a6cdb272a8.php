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

/* @PayPlugSyliusPayPlugPlugin/oney/product/pay_with_oney.html.twig */
class __TwigTemplate_b173726ccebae4bde4851d41bcaad749 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/oney/product/pay_with_oney.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/oney/product/pay_with_oney.html.twig"));

        // line 1
        if (($this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneyExtension']->isOneyEnabled() && $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\ShowMeaExtension']->canShowMEA())) {
            // line 2
            yield "    ";
            $context["logo_disabled"] = "3x4x-alt.svg";
            // line 3
            yield "    ";
            $context["logo_enabled"] = "3x4x.svg";
            // line 4
            yield "    ";
            if ((($tmp = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneySimulationExtension']->isPaymentChoiceWithoutFees()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "        ";
                $context["logo_enabled"] = "3x4x-without-fees.svg";
                // line 6
                yield "        ";
                $context["logo_disabled"] = "3x4x-without-fees-alt.svg";
                // line 7
                yield "    ";
            }
            // line 8
            yield "    ";
            if ((($tmp = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneyRulesExtension']->isProductEligible()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "        ";
                $context["logo_name"] = (isset($context["logo_enabled"]) || array_key_exists("logo_enabled", $context) ? $context["logo_enabled"] : (function () { throw new RuntimeError('Variable "logo_enabled" does not exist.', 9, $this->source); })());
                // line 10
                yield "        ";
                if ((($tmp = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneySimulationExtension']->isPaymentChoiceWithoutFees()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 11
                    yield "            ";
                    $context["logo_enabled"] = "3x4x-without-fees.svg";
                    // line 12
                    yield "        ";
                }
                // line 13
                yield "    ";
            } else {
                // line 14
                yield "        ";
                $context["logo_name"] = (isset($context["logo_disabled"]) || array_key_exists("logo_disabled", $context) ? $context["logo_disabled"] : (function () { throw new RuntimeError('Variable "logo_disabled" does not exist.', 14, $this->source); })());
                // line 15
                yield "    ";
            }
            // line 16
            yield "    <div class=\"oney-info\">
        <span>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.or_pay_with_oney"), "html", null, true);
            yield "</span>
        <img src=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("bundles/payplugsyliuspayplugplugin/assets/oney/" . (isset($context["logo_name"]) || array_key_exists("logo_name", $context) ? $context["logo_name"] : (function () { throw new RuntimeError('Variable "logo_name" does not exist.', 18, $this->source); })()))), "html", null, true);
            yield "\" class=\"oney-logo\" alt=\"oney-logo\"/>
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
        <div class=\"oney-popin ";
            // line 22
            if ((($tmp = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneyRulesExtension']->isProductEligible()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "enabled";
            } else {
                yield "disabled";
            }
            yield "\"
             data-popin-url=\"";
            // line 23
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payplug_sylius_oney_simulation_popin");
            yield "\">
        </div>
    </div>
    <script type=\"text/javascript\" src=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/shop/oney_popin/index.js"), "html", null, true);
            yield "\"></script>
    <link rel=\"stylesheet\" href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/shop/oney_popin/index.css"), "html", null, true);
            yield "\">
    <div id=\"payplug-product-variant-codes\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\ProductVariantsCodesExtension']->provideVariantsCodes((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 29, $this->source); })()), "channel", [], "any", false, false, false, 29)));
            foreach ($context['_seq'] as $context["_key"] => $context["variantCodes"]) {
                // line 30
                yield "            <div ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["variantCodes"]);
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    yield "data-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "></div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['variantCodes'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "    </div>
    <script type=\"text/javascript\">//<![CDATA[
      ";
            // line 35
            yield "        var productMeta = {
          product_variant_code: \"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->env->getFilter('sylius_resolve_variant')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })())), "code", [], "any", false, false, false, 36), "js", null, true);
            yield "\",
          url: \"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payplug_sylius_oney_is_product_eligible"), "js", null, true);
            yield "\",
          img: {
            true: \"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("bundles/payplugsyliuspayplugplugin/assets/oney/" . (isset($context["logo_enabled"]) || array_key_exists("logo_enabled", $context) ? $context["logo_enabled"] : (function () { throw new RuntimeError('Variable "logo_enabled" does not exist.', 39, $this->source); })()))), "js", null, true);
            yield "\",
            false: \"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("bundles/payplugsyliuspayplugplugin/assets/oney/" . (isset($context["logo_disabled"]) || array_key_exists("logo_disabled", $context) ? $context["logo_disabled"] : (function () { throw new RuntimeError('Variable "logo_disabled" does not exist.', 40, $this->source); })()))), "js", null, true);
            yield "\",
          }
        }
        var translations = {
          reason: \"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.oney_unavailable"), "js", null, true);
            yield "\",
          close: \"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.popin_close"), "js", null, true);
            yield "\"
        }
      ";
            // line 48
            yield "    //]]></script>
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
        return "@PayPlugSyliusPayPlugPlugin/oney/product/pay_with_oney.html.twig";
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
        return array (  189 => 48,  184 => 45,  180 => 44,  173 => 40,  169 => 39,  164 => 37,  160 => 36,  157 => 35,  153 => 32,  133 => 30,  129 => 29,  124 => 27,  120 => 26,  114 => 23,  106 => 22,  99 => 18,  95 => 17,  92 => 16,  89 => 15,  86 => 14,  83 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  65 => 7,  62 => 6,  59 => 5,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if is_oney_enabled() and can_show_mea() %}
    {% set logo_disabled = '3x4x-alt.svg' %}
    {% set logo_enabled = '3x4x.svg' %}
    {% if is_oney_without_fees() %}
        {% set logo_enabled = '3x4x-without-fees.svg' %}
        {% set logo_disabled = '3x4x-without-fees-alt.svg' %}
    {% endif %}
    {% if oney_product_eligible() %}
        {% set logo_name = logo_enabled %}
        {% if is_oney_without_fees() %}
            {% set logo_enabled = '3x4x-without-fees.svg' %}
        {% endif %}
    {% else %}
        {% set logo_name = logo_disabled %}
    {% endif %}
    <div class=\"oney-info\">
        <span>{{ 'payplug_sylius_payplug_plugin.ui.or_pay_with_oney'|trans }}</span>
        <img src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/' ~ logo_name) }}\" class=\"oney-logo\" alt=\"oney-logo\"/>
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
        <div class=\"oney-popin {% if oney_product_eligible() %}enabled{% else %}disabled{% endif %}\"
             data-popin-url=\"{{ path('payplug_sylius_oney_simulation_popin') }}\">
        </div>
    </div>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/shop/oney_popin/index.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/shop/oney_popin/index.css') }}\">
    <div id=\"payplug-product-variant-codes\">
        {% for variantCodes in sylius_product_variant_codes(product, sylius.channel) %}
            <div {% for key, option in variantCodes %}data-{{ key }}=\"{{ option }}\"{% endfor %}></div>
        {% endfor %}
    </div>
    <script type=\"text/javascript\">//<![CDATA[
      {% autoescape 'js' %}
        var productMeta = {
          product_variant_code: \"{{ (product|sylius_resolve_variant).code }}\",
          url: \"{{ path('payplug_sylius_oney_is_product_eligible') }}\",
          img: {
            true: \"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/' ~ logo_enabled) }}\",
            false: \"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/' ~ logo_disabled) }}\",
          }
        }
        var translations = {
          reason: \"{{ 'payplug_sylius_payplug_plugin.ui.oney_unavailable'|trans }}\",
          close: \"{{ 'payplug_sylius_payplug_plugin.ui.popin_close'|trans }}\"
        }
      {% endautoescape %}
    //]]></script>
{% endif %}
", "@PayPlugSyliusPayPlugPlugin/oney/product/pay_with_oney.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/payplug/sylius-payplug-plugin/src/Resources/views/oney/product/pay_with_oney.html.twig");
    }
}
