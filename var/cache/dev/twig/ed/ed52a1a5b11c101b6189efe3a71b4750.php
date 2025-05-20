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

/* @SyliusAdmin/Product/_channel_pricing.html.twig */
class __TwigTemplate_117bf3503bda94f7395f9187dea3a2bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_channel_pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_channel_pricing.html.twig"));

        // line 1
        yield "<div id=\"sylius_product_variant_channelPricings\">
    ";
        // line 2
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variantForm"]) || array_key_exists("variantForm", $context) ? $context["variantForm"] : (function () { throw new RuntimeError('Variable "variantForm" does not exist.', 2, $this->source); })()), "channelPricings", [], "any", false, false, false, 2), 'errors');
        yield "
    <div class=\"ui top attached tabular menu\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variantForm"]) || array_key_exists("variantForm", $context) ? $context["variantForm"] : (function () { throw new RuntimeError('Variable "variantForm" does not exist.', 4, $this->source); })()), "channelPricings", [], "any", false, false, false, 4));
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
        foreach ($context['_seq'] as $context["channelCode"] => $context["channelPricing"]) {
            // line 5
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 5) == 0)) {
                // line 6
                yield "                <a class=\"item active\" data-tab=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channelCode"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "vars", [], "any", false, false, false, 6), "label", [], "any", false, false, false, 6), "html", null, true);
                yield "</a>
            ";
            } else {
                // line 8
                yield "                <a class=\"item\" data-tab=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channelCode"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "vars", [], "any", false, false, false, 8), "label", [], "any", false, false, false, 8), "html", null, true);
                yield "</a>
            ";
            }
            // line 10
            yield "        ";
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
        unset($context['_seq'], $context['channelCode'], $context['channelPricing'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "    </div>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variantForm"]) || array_key_exists("variantForm", $context) ? $context["variantForm"] : (function () { throw new RuntimeError('Variable "variantForm" does not exist.', 12, $this->source); })()), "channelPricings", [], "any", false, false, false, 12));
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
        foreach ($context['_seq'] as $context["channelCode"] => $context["channelPricing"]) {
            // line 13
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 13) == 0)) {
                // line 14
                yield "            <div class=\"ui bottom attached active tab segment\" data-tab=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channelCode"], "html", null, true);
                yield "\">
        ";
            } else {
                // line 16
                yield "            <div class=\"ui bottom attached tab segment\" data-tab=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channelCode"], "html", null, true);
                yield "\">
        ";
            }
            // line 18
            yield "
        ";
            // line 19
            if (!CoreExtension::inFilter($context["channelCode"], Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "channels", [], "any", false, false, false, 19), function ($__channel__) use ($context, $macros) { $context["channel"] = $__channel__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 19, $this->source); })()), "code", [], "any", false, false, false, 19); }))) {
                // line 20
                yield "        <div class=\"ui info message\">
            ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.product.product_not_active_in_channel"), "html", null, true);
                yield "
        </div>
        ";
            }
            // line 24
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["channelPricing"], 'row', ["label" => false]);
            yield "
        </div>
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
        unset($context['_seq'], $context['channelCode'], $context['channelPricing'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
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
        return "@SyliusAdmin/Product/_channel_pricing.html.twig";
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
        return array (  173 => 27,  155 => 24,  149 => 21,  146 => 20,  144 => 19,  141 => 18,  135 => 16,  129 => 14,  126 => 13,  109 => 12,  106 => 11,  92 => 10,  84 => 8,  76 => 6,  73 => 5,  56 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"sylius_product_variant_channelPricings\">
    {{ form_errors(variantForm.channelPricings) }}
    <div class=\"ui top attached tabular menu\">
        {% for channelCode, channelPricing in variantForm.channelPricings %}
            {% if loop.index0 == 0 %}
                <a class=\"item active\" data-tab=\"{{ channelCode }}\">{{ channelPricing.vars.label }}</a>
            {% else %}
                <a class=\"item\" data-tab=\"{{ channelCode }}\">{{ channelPricing.vars.label }}</a>
            {% endif %}
        {% endfor %}
    </div>
    {% for channelCode, channelPricing in variantForm.channelPricings %}
        {% if loop.index0 == 0 %}
            <div class=\"ui bottom attached active tab segment\" data-tab=\"{{ channelCode }}\">
        {% else %}
            <div class=\"ui bottom attached tab segment\" data-tab=\"{{ channelCode }}\">
        {% endif %}

        {% if channelCode not in product.channels|map(channel => channel.code) %}
        <div class=\"ui info message\">
            {{ 'sylius.ui.product.product_not_active_in_channel'|trans }}
        </div>
        {% endif %}
            {{ form_row(channelPricing, {'label': false}) }}
        </div>
    {% endfor %}
</div>
", "@SyliusAdmin/Product/_channel_pricing.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_channel_pricing.html.twig");
    }
}
