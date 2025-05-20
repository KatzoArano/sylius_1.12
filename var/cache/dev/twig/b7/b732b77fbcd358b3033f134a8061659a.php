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

/* @SyliusShop/Product/Show/_variants.html.twig */
class __TwigTemplate_84ed1a8ce58adb728a231e17aa8d97d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variants.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variants.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
<table class=\"ui single line small table\" id=\"sylius-product-variants\" ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-variants");
        yield ">
    <thead>
    <tr>
        <th>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.variant"), "html", null, true);
        yield "</th>
        <th>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        yield "</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "enabledVariants", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["key"] => $context["variant"]) {
            // line 13
            yield "        ";
            $context["channelPricing"] = CoreExtension::getAttribute($this->env, $this->source, $context["variant"], "getChannelPricingForChannel", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 13, $this->source); })()), "channel", [], "any", false, false, false, 13)], "method", false, false, false, 13);
            // line 14
            yield "        <tr ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-variants-row");
            yield ">
            <td>
                ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["variant"], "name", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source, $context["variant"], "descriptor", [], "any", false, false, false, 16))) : (CoreExtension::getAttribute($this->env, $this->source, $context["variant"], "descriptor", [], "any", false, false, false, 16))), "html", null, true);
            yield "
                ";
            // line 17
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "hasOptions", [], "method", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "                    <div class=\"ui horizontal divided list\">
                        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["variant"], "optionValues", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                    // line 20
                    yield "                            <div class=\"item\">
                                ";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 21), "html", null, true);
                    yield "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['optionValue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                yield "                    </div>
                ";
            }
            // line 26
            yield "            </td>
            ";
            // line 27
            $context["appliedPromotions"] = Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["channelPricing"]) || array_key_exists("channelPricing", $context) ? $context["channelPricing"] : (function () { throw new RuntimeError('Variable "channelPricing" does not exist.', 27, $this->source); })()), "appliedPromotions", [], "any", false, false, false, 27), function ($__promotion__) use ($context, $macros) { $context["promotion"] = $__promotion__; return ["label" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 27, $this->source); })()), "label", [], "any", false, false, false, 27), "description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27)]; });
            // line 28
            yield "            <td class=\"sylius-product-variant-price\" data-applied-promotions=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["appliedPromotions"]) || array_key_exists("appliedPromotions", $context) ? $context["appliedPromotions"] : (function () { throw new RuntimeError('Variable "appliedPromotions" does not exist.', 28, $this->source); })())), "html", null, true);
            yield "\"  ";
            if ((($tmp = $this->env->getFilter('sylius_has_discount')->getCallable()($context["variant"], ["channel" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 28, $this->source); })()), "channel", [], "any", false, false, false, 28)])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-original-price=\"";
                yield $macros["money"]->getTemplateForMacro("macro_calculateOriginalPrice", $context, 28, $this->getSourceContext())->macro_calculateOriginalPrice(...[$context["variant"]]);
                yield "\"";
            }
            yield ">
                ";
            // line 29
            yield $macros["money"]->getTemplateForMacro("macro_calculatePrice", $context, 29, $this->getSourceContext())->macro_calculatePrice(...[$context["variant"]]);
            yield "
            </td>
            <td class=\"right aligned\">
                ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "cartItem", [], "any", false, false, false, 32), "variant", [], "any", false, false, false, 32), $context["key"], [], "array", false, false, false, 32), 'widget', ["label" => false]);
            yield "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['variant'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "    </tbody>
</table>
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
        return "@SyliusShop/Product/Show/_variants.html.twig";
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
        return array (  145 => 36,  135 => 32,  129 => 29,  118 => 28,  116 => 27,  113 => 26,  109 => 24,  100 => 21,  97 => 20,  93 => 19,  90 => 18,  88 => 17,  84 => 16,  78 => 14,  75 => 13,  71 => 12,  63 => 7,  59 => 6,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<table class=\"ui single line small table\" id=\"sylius-product-variants\" {{ sylius_test_html_attribute('product-variants') }}>
    <thead>
    <tr>
        <th>{{ 'sylius.ui.variant'|trans }}</th>
        <th>{{ 'sylius.ui.price'|trans }}</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    {% for key, variant in product.enabledVariants %}
        {% set channelPricing = variant.getChannelPricingForChannel(sylius.channel) %}
        <tr {{ sylius_test_html_attribute('product-variants-row') }}>
            <td>
                {{ variant.name|default(variant.descriptor) }}
                {% if product.hasOptions() %}
                    <div class=\"ui horizontal divided list\">
                        {% for optionValue in variant.optionValues %}
                            <div class=\"item\">
                                {{ optionValue.value }}
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </td>
            {% set appliedPromotions = channelPricing.appliedPromotions|map(promotion => ({'label': promotion.label, 'description': promotion.description})) %}
            <td class=\"sylius-product-variant-price\" data-applied-promotions=\"{{ appliedPromotions|json_encode }}\"  {% if variant|sylius_has_discount({'channel': sylius.channel}) %}data-original-price=\"{{ money.calculateOriginalPrice(variant) }}\"{% endif %}>
                {{ money.calculatePrice(variant) }}
            </td>
            <td class=\"right aligned\">
                {{ form_widget(form.cartItem.variant[key], {'label': false}) }}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@SyliusShop/Product/Show/_variants.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variants.html.twig");
    }
}
