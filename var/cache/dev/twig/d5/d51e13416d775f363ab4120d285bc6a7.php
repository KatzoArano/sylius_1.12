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

/* @SyliusAdmin/Product/Show/_pricing.html.twig */
class __TwigTemplate_4d7e6514bd73ba5589715df0e6663010 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_pricing.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "<div id=\"pricing\">
    <h4 class=\"ui top attached large header\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
        yield "</h4>
    <div class=\"ui attached segment\">
        <table id=\"pricing\" class=\"ui very basic celled table\">
            <thead>
                <tr>
                    <th><strong class=\"gray text\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channels"), "html", null, true);
        yield "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        yield "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.original_price"), "html", null, true);
        yield "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discounted_by"), "html", null, true);
        yield "</strong></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "variants", [], "any", false, false, false, 15), "first", [], "any", false, false, false, 15), "channelPricings", [], "any", false, false, false, 15));
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
            // line 16
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "channels", [], "any", false, false, false, 16), "first", [], "any", false, false, false, 16) != false)) {
                // line 17
                yield "                    <tr>
                        <td class=\"five wide gray text\">
                            <strong>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelNameExtension']->getChannelNameByCode(CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "channelCode", [], "any", false, false, false, 19)), "html", null, true);
                yield "</strong>
                        </td>
                        <td>";
                // line 21
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 21, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "price", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "channels", [], "any", false, false, false, 21), "first", [], "any", false, false, false, 21), "baseCurrency", [], "any", false, false, false, 21)]);
                yield "</td>
                        ";
                // line 22
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 22) != null)) {
                    // line 23
                    yield "                            <td>";
                    yield $macros["money"]->getTemplateForMacro("macro_format", $context, 23, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "channels", [], "any", false, false, false, 23), "first", [], "any", false, false, false, 23), "baseCurrency", [], "any", false, false, false, 23)]);
                    yield "</td>
                        ";
                } else {
                    // line 25
                    yield "                            <td>-</td>
                        ";
                }
                // line 27
                yield "                        ";
                yield from $this->load("@SyliusAdmin/Product/Show/_appliedPromotions.html.twig", 27)->unwrap()->yield($context);
                // line 28
                yield "                    </tr>
                ";
            }
            // line 30
            yield "            ";
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
        // line 31
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
        return "@SyliusAdmin/Product/Show/_pricing.html.twig";
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
        return array (  146 => 31,  132 => 30,  128 => 28,  125 => 27,  121 => 25,  115 => 23,  113 => 22,  109 => 21,  104 => 19,  100 => 17,  97 => 16,  80 => 15,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}
<div id=\"pricing\">
    <h4 class=\"ui top attached large header\">{{ 'sylius.ui.pricing'|trans }}</h4>
    <div class=\"ui attached segment\">
        <table id=\"pricing\" class=\"ui very basic celled table\">
            <thead>
                <tr>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.channels'|trans }}</strong></th>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.price'|trans }}</strong></th>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.original_price'|trans }}</strong></th>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.discounted_by'|trans }}</strong></th>
                </tr>
            </thead>
            <tbody>
            {% for channelPricing in product.variants.first.channelPricings %}
                {% if product.channels.first != false %}
                    <tr>
                        <td class=\"five wide gray text\">
                            <strong>{{ channelPricing.channelCode|sylius_channel_name }}</strong>
                        </td>
                        <td>{{ money.format(channelPricing.price, product.channels.first.baseCurrency) }}</td>
                        {% if channelPricing.originalPrice != null %}
                            <td>{{ money.format(channelPricing.originalPrice, product.channels.first.baseCurrency) }}</td>
                        {% else %}
                            <td>-</td>
                        {% endif %}
                        {% include '@SyliusAdmin/Product/Show/_appliedPromotions.html.twig' %}
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
", "@SyliusAdmin/Product/Show/_pricing.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_pricing.html.twig");
    }
}
