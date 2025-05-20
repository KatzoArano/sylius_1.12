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

/* @SyliusAdmin/PaymentMethod/_form.html.twig */
class __TwigTemplate_781f1f776a72b9970ea24947f477ac74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/PaymentMethod/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/PaymentMethod/_form.html.twig"));

        // line 1
        $macros["flags"] = $this->macros["flags"] = $this->load("@SyliusUi/Macro/flags.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'errors');
        yield "

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        yield "</h4>
    ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        yield "

    <div class=\"two fields\">
        ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "code", [], "any", false, false, false, 10), 'row');
        yield "
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "position", [], "any", false, false, false, 11), 'row');
        yield "
    </div>
    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "enabled", [], "any", false, false, false, 13), 'row');
        yield "
    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "channels", [], "any", false, false, false, 14), 'row');
        yield "
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.gateway_configuration"), "html", null, true);
        yield "</h4>

    ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 20, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 20), "factoryName", [], "any", false, false, false, 20) == "stripe_checkout")) {
            // line 21
            yield "        <div class=\"ui icon negative orange message sylius-flash-message\">
            <i class=\"close icon\"></i>
            <i class=\"warning icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.gateway.no_sca_support_notice"), "html", null, true);
            yield "
                </div>
            </div>
        </div>
    ";
        }
        // line 31
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 31, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 31), "factoryName", [], "any", false, false, false, 31) == "paypal_express_checkout")) {
            // line 32
            yield "        <div class=\"ui icon negative orange message sylius-flash-message\">
            <i class=\"close icon\"></i>
            <i class=\"warning icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    ";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.gateway.pay_pal_express_checkout_deprecation_notice");
            // line 38
            yield "                </div>
            </div>
        </div>
    ";
        }
        // line 42
        yield "
    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 43), "factoryName", [], "any", false, false, false, 43), 'row');
        yield "
    ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "gatewayConfig", [], "any", false, true, false, 44), "config", [], "any", true, true, false, 44)) {
            // line 45
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 45), "config", [], "any", false, false, false, 45));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 46
                yield "            ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46) % 2 != 0) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 46))) {
                    yield "<div class=\"two fields\">";
                }
                // line 47
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                yield "
            ";
                // line 48
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48) % 2 == 0)) {
                    yield "</div>";
                }
                // line 49
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
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "    ";
        }
        // line 51
        yield "</div>

<div class=\"ui styled fluid accordion\">
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "translations", [], "any", false, false, false, 54));
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
        foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
            // line 55
            yield "        <div class=\"title";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " active";
            }
            yield "\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 57
            yield $macros["flags"]->getTemplateForMacro("macro_fromLocaleCode", $context, 57, $this->getSourceContext())->macro_fromLocaleCode(...[$context["locale"]]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_locale_name')->getCallable()($context["locale"]), "html", null, true);
            yield "
        </div>
        <div class=\"content";
            // line 59
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " active";
            }
            yield "\">
            ";
            // line 60
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["translationForm"], "name", [], "any", false, false, false, 60), 'row');
            yield "
            ";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["translationForm"], "description", [], "any", false, false, false, 61), 'row');
            yield "
            <div class=\"ui compact message\">
                <p>
                    <i class=\"icon info circle\"></i> ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.the_instructions_below_will_be_displayed_to_the_customer"), "html", null, true);
            yield ".
                </p>
            </div>
            ";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["translationForm"], "instructions", [], "any", false, false, false, 67), 'row');
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
        unset($context['_seq'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
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
        return "@SyliusAdmin/PaymentMethod/_form.html.twig";
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
        return array (  263 => 70,  246 => 67,  240 => 64,  234 => 61,  230 => 60,  224 => 59,  217 => 57,  209 => 55,  192 => 54,  187 => 51,  184 => 50,  170 => 49,  166 => 48,  161 => 47,  156 => 46,  138 => 45,  136 => 44,  132 => 43,  129 => 42,  123 => 38,  121 => 37,  114 => 32,  111 => 31,  103 => 26,  96 => 21,  94 => 20,  89 => 18,  82 => 14,  78 => 13,  73 => 11,  69 => 10,  63 => 7,  59 => 6,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

{{ form_errors(form) }}

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.details'|trans }}</h4>
    {{ form_errors(form) }}

    <div class=\"two fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.position) }}
    </div>
    {{ form_row(form.enabled) }}
    {{ form_row(form.channels) }}
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.gateway_configuration'|trans }}</h4>

    {% if resource.gatewayConfig.factoryName == 'stripe_checkout' %}
        <div class=\"ui icon negative orange message sylius-flash-message\">
            <i class=\"close icon\"></i>
            <i class=\"warning icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    {{ 'sylius.ui.gateway.no_sca_support_notice'|trans }}
                </div>
            </div>
        </div>
    {% endif %}
    {% if resource.gatewayConfig.factoryName == 'paypal_express_checkout' %}
        <div class=\"ui icon negative orange message sylius-flash-message\">
            <i class=\"close icon\"></i>
            <i class=\"warning icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    {% autoescape false %}{{ 'sylius.ui.gateway.pay_pal_express_checkout_deprecation_notice'|trans }}{% endautoescape %}
                </div>
            </div>
        </div>
    {% endif %}

    {{ form_row(form.gatewayConfig.factoryName) }}
    {% if form.gatewayConfig.config is defined %}
        {% for field in form.gatewayConfig.config %}
            {% if loop.index is odd and not loop.last %}<div class=\"two fields\">{% endif %}
            {{ form_row(field) }}
            {% if loop.index is even %}</div>{% endif %}
        {% endfor %}
    {% endif %}
</div>

<div class=\"ui styled fluid accordion\">
    {% for locale, translationForm in form.translations %}
        <div class=\"title{% if loop.first %} active{% endif %}\">
            <i class=\"dropdown icon\"></i>
            {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
        </div>
        <div class=\"content{% if loop.first %} active{% endif %}\">
            {{ form_row(translationForm.name) }}
            {{ form_row(translationForm.description) }}
            <div class=\"ui compact message\">
                <p>
                    <i class=\"icon info circle\"></i> {{ 'sylius.ui.the_instructions_below_will_be_displayed_to_the_customer'|trans }}.
                </p>
            </div>
            {{ form_row(translationForm.instructions) }}
        </div>
    {% endfor %}
</div>
", "@SyliusAdmin/PaymentMethod/_form.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PaymentMethod/_form.html.twig");
    }
}
