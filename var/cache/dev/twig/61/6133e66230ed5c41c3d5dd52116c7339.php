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

/* @SyliusAdmin/ProductVariant/Tab/_channelPricings.html.twig */
class __TwigTemplate_b0e97229acfa770fa7b819fef16e70ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Tab/_channelPricings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Tab/_channelPricings.html.twig"));

        // line 1
        yield "<div class=\"ui tab\" data-tab=\"channel_pricings\">
    <h3 class=\"ui dividing header\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channel_pricings"), "html", null, true);
        yield "</h3>
    <div class=\"ui info message\">
        ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price_details"), "html", null, true);
        yield "
        <br/>
        ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.original_price_details"), "html", null, true);
        yield "
        <br/>
        ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.minimum_price_details"), "html", null, true);
        yield "
    </div>
    <div id=\"sylius_product_variant_channelPricings\">
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "channelPricings", [], "any", false, false, false, 11), 'errors');
        yield "
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "channelPricings", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["channelCode"] => $context["channelPricing"]) {
            // line 13
            yield "            <div class=\"ui segment\">
                <div>
                    <strong>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "vars", [], "any", false, false, false, 15), "label", [], "any", false, false, false, 15), "html", null, true);
            yield "</strong>
                </div>
                ";
            // line 17
            if (!CoreExtension::inFilter($context["channelCode"], Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 17, $this->source); })()), "product", [], "any", false, false, false, 17), "channels", [], "any", false, false, false, 17), function ($__channel__) use ($context, $macros) { $context["channel"] = $__channel__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 17, $this->source); })()), "code", [], "any", false, false, false, 17); }))) {
                // line 18
                yield "                    <div class=\"ui info message\">
                        ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.product.product_not_active_in_channel"), "html", null, true);
                yield "
                    </div>
                ";
            }
            // line 22
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "price", [], "any", false, false, false, 22), 'row');
            yield "
                ";
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 23), 'row');
            yield "
                ";
            // line 24
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["channelPricing"], "minimumPrice", [], "any", false, false, false, 24), 'row');
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['channelCode'], $context['channelPricing'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    </div>

    ";
        // line 29
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([(("sylius.admin.product_variant." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 29, $this->source); })())) . ".tab_channel_pricings"), "sylius.admin.product_variant.channelPricings"], ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })())]);
        yield "
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
        return "@SyliusAdmin/ProductVariant/Tab/_channelPricings.html.twig";
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
        return array (  122 => 29,  118 => 27,  109 => 24,  105 => 23,  100 => 22,  94 => 19,  91 => 18,  89 => 17,  84 => 15,  80 => 13,  76 => 12,  72 => 11,  66 => 8,  61 => 6,  56 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui tab\" data-tab=\"channel_pricings\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.channel_pricings'|trans }}</h3>
    <div class=\"ui info message\">
        {{ 'sylius.ui.price_details'|trans }}
        <br/>
        {{ 'sylius.ui.original_price_details'|trans }}
        <br/>
        {{ 'sylius.ui.minimum_price_details'|trans }}
    </div>
    <div id=\"sylius_product_variant_channelPricings\">
        {{ form_errors(form.channelPricings) }}
        {% for channelCode, channelPricing in form.channelPricings %}
            <div class=\"ui segment\">
                <div>
                    <strong>{{ channelPricing.vars.label }}</strong>
                </div>
                {% if channelCode not in product_variant.product.channels|map(channel => channel.code) %}
                    <div class=\"ui info message\">
                        {{ 'sylius.ui.product.product_not_active_in_channel'|trans }}
                    </div>
                {% endif %}
                {{ form_row(channelPricing.price) }}
                {{ form_row(channelPricing.originalPrice) }}
                {{ form_row(channelPricing.minimumPrice) }}
            </div>
        {% endfor %}
    </div>

    {{ sylius_template_event(['sylius.admin.product_variant.' ~ action ~ '.tab_channel_pricings', 'sylius.admin.product_variant.channelPricings'], {'form': form}) }}
</div>
", "@SyliusAdmin/ProductVariant/Tab/_channelPricings.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Tab/_channelPricings.html.twig");
    }
}
