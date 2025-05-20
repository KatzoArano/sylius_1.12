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

/* @SyliusAdmin/Product/Show/_variantContentPricing.html.twig */
class __TwigTemplate_77d46e68d476d31654a6dcc71ee3bfa7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"column\">
    <div class=\"ui segment\">
        <div class=\"ui small header\">
            ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
        yield "
        </div>
        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"gray text\"><strong>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channels"), "html", null, true);
        yield "</strong></td>
                <td class=\"gray text\"><strong>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        yield "</strong></td>
                <td class=\"gray text\"><strong>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.original_price"), "html", null, true);
        yield "</strong></td>
                <td class=\"gray text\"><strong>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discounted_by"), "html", null, true);
        yield "</strong></td>
            </tr>
            ";
        // line 16
        $context["currencies"] = $this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelsCurrenciesExtension']->getAllCurrencies();
        // line 17
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 17, $this->source); })()), "channelPricings", [], "any", false, false, false, 17));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["channelPricing"]) {
            // line 18
            yield "                <tr class=\"pricing\">
                    <td class=\"five wide gray text\">
                        <strong>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelNameExtension']->getChannelNameByCode(CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "channelCode", [], "any", false, false, false, 20)), "html", null, true);
            yield "</strong>
                    </td>
                    ";
            // line 22
            $context["channelCode"] = CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "channelCode", [], "any", false, false, false, 22);
            // line 23
            yield "                    <td>";
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 23, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "price", [], "any", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, (isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new RuntimeError('Variable "currencies" does not exist.', 23, $this->source); })()), (isset($context["channelCode"]) || array_key_exists("channelCode", $context) ? $context["channelCode"] : (function () { throw new RuntimeError('Variable "channelCode" does not exist.', 23, $this->source); })()), [], "array", false, false, false, 23)]);
            yield "</td>
                    ";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 24) != null)) {
                // line 25
                yield "                        <td>";
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 25, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 25), CoreExtension::getAttribute($this->env, $this->source, (isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new RuntimeError('Variable "currencies" does not exist.', 25, $this->source); })()), (isset($context["channelCode"]) || array_key_exists("channelCode", $context) ? $context["channelCode"] : (function () { throw new RuntimeError('Variable "channelCode" does not exist.', 25, $this->source); })()), [], "array", false, false, false, 25)]);
                yield "</td>
                    ";
            } else {
                // line 27
                yield "                        <td><span class=\"gray text\">-</span></td>
                    ";
            }
            // line 29
            yield "                    ";
            yield from $this->load("@SyliusAdmin/Product/Show/_appliedPromotions.html.twig", 29)->unwrap()->yield($context);
            // line 30
            yield "                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['channelPricing'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "            </tbody>
        </table>
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
        return "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig";
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
        return array (  147 => 32,  132 => 30,  129 => 29,  125 => 27,  119 => 25,  117 => 24,  112 => 23,  110 => 22,  105 => 20,  101 => 18,  83 => 17,  81 => 16,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"column\">
    <div class=\"ui segment\">
        <div class=\"ui small header\">
            {{ 'sylius.ui.pricing'|trans }}
        </div>
        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"gray text\"><strong>{{ 'sylius.ui.channels'|trans }}</strong></td>
                <td class=\"gray text\"><strong>{{ 'sylius.ui.price'|trans }}</strong></td>
                <td class=\"gray text\"><strong>{{ 'sylius.ui.original_price'|trans }}</strong></td>
                <td class=\"gray text\"><strong>{{ 'sylius.ui.discounted_by'|trans }}</strong></td>
            </tr>
            {% set currencies = sylius_channels_currencies() %}
            {% for channelPricing in variant.channelPricings %}
                <tr class=\"pricing\">
                    <td class=\"five wide gray text\">
                        <strong>{{ channelPricing.channelCode|sylius_channel_name }}</strong>
                    </td>
                    {% set channelCode = channelPricing.channelCode %}
                    <td>{{ money.format(channelPricing.price, currencies[channelCode]) }}</td>
                    {% if channelPricing.originalPrice != null %}
                        <td>{{ money.format(channelPricing.originalPrice, currencies[channelCode]) }}</td>
                    {% else %}
                        <td><span class=\"gray text\">-</span></td>
                    {% endif %}
                    {% include '@SyliusAdmin/Product/Show/_appliedPromotions.html.twig' %}
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_variantContentPricing.html.twig");
    }
}
