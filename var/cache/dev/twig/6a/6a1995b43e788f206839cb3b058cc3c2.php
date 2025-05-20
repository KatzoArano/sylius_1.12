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

/* @SyliusAdmin/ShippingMethod/_form.html.twig */
class __TwigTemplate_5a4dc19e6cd58f2c2119764d4bf33df5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ShippingMethod/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ShippingMethod/_form.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/Macro/translationForm.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors');
        yield "
            <div class=\"three fields\">
                ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "code", [], "any", false, false, false, 8), 'row');
        yield "
                ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "zone", [], "any", false, false, false, 9), 'row');
        yield "
                ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "position", [], "any", false, false, false, 10), 'row');
        yield "
            </div>
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "enabled", [], "any", false, false, false, 12), 'row');
        yield "
            <h4 class=\"ui dividing header\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.availability"), "html", null, true);
        yield "</h4>
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "channels", [], "any", false, false, false, 14), 'row');
        yield "
            <h4 class=\"ui dividing header\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.category_requirements"), "html", null, true);
        yield "</h4>
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "category", [], "any", false, false, false, 16), 'row');
        yield "
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "categoryRequirement", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryRequirementChoiceForm"]) {
            // line 18
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["categoryRequirementChoiceForm"], 'row');
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categoryRequirementChoiceForm'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "            <h4 class=\"ui dividing header\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes"), "html", null, true);
        yield "</h4>
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "taxCategory", [], "any", false, false, false, 21), 'row');
        yield "
            <h4 class=\"ui dividing header\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_charges"), "html", null, true);
        yield "</h4>
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "calculator", [], "any", false, false, false, 23), 'row');
        yield "
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "prototypes", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["name"] => $context["calculatorConfigurationPrototype"]) {
            // line 25
            yield "                <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "calculator", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "\" data-container=\".configuration\"
                     data-prototype=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["calculatorConfigurationPrototype"], 'widget'));
            yield "\">
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['calculatorConfigurationPrototype'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "            <div class=\"ui segment configuration\">
                ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "configuration", [], "any", true, true, false, 30)) {
            // line 31
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "configuration", [], "any", false, false, false, 31), 'widget');
            yield "
                ";
        }
        // line 33
        yield "            </div>

            <h4 class=\"ui dividing header\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.rules"), "html", null, true);
        yield "</h4>
            <div id=\"rules\">
                ";
        // line 37
        yield from $this->load("@SyliusAdmin/ShippingMethod/_rules.html.twig", 37)->unwrap()->yield($context);
        // line 38
        yield "            </div>
        </div>
    </div>
    <div class=\"column\">
        ";
        // line 42
        yield $macros["_v0"]->getTemplateForMacro("macro_translationForm", $context, 42, $this->getSourceContext())->macro_translationForm(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "translations", [], "any", false, false, false, 42)]);
        yield "
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
        return "@SyliusAdmin/ShippingMethod/_form.html.twig";
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
        return array (  172 => 42,  166 => 38,  164 => 37,  159 => 35,  155 => 33,  149 => 31,  147 => 30,  144 => 29,  135 => 26,  128 => 25,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  107 => 20,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  69 => 10,  65 => 9,  61 => 8,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            {{ form_errors(form) }}
            <div class=\"three fields\">
                {{ form_row(form.code) }}
                {{ form_row(form.zone) }}
                {{ form_row(form.position) }}
            </div>
            {{ form_row(form.enabled) }}
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.availability'|trans }}</h4>
            {{ form_row(form.channels) }}
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.category_requirements'|trans }}</h4>
            {{ form_row(form.category) }}
            {% for categoryRequirementChoiceForm in form.categoryRequirement %}
                {{ form_row(categoryRequirementChoiceForm) }}
            {% endfor %}
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.taxes'|trans }}</h4>
            {{ form_row(form.taxCategory) }}
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.shipping_charges'|trans }}</h4>
            {{ form_row(form.calculator) }}
            {% for name, calculatorConfigurationPrototype in form.vars.prototypes %}
                <div id=\"{{ form.calculator.vars.id }}_{{ name }}\" data-container=\".configuration\"
                     data-prototype=\"{{ form_widget(calculatorConfigurationPrototype)|e }}\">
                </div>
            {% endfor %}
            <div class=\"ui segment configuration\">
                {% if form.configuration is defined %}
                    {{ form_widget(form.configuration) }}
                {% endif %}
            </div>

            <h4 class=\"ui dividing header\">{{ 'sylius.ui.rules'|trans }}</h4>
            <div id=\"rules\">
                {% include '@SyliusAdmin/ShippingMethod/_rules.html.twig' %}
            </div>
        </div>
    </div>
    <div class=\"column\">
        {{ translationForm(form.translations) }}
    </div>
</div>
", "@SyliusAdmin/ShippingMethod/_form.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ShippingMethod/_form.html.twig");
    }
}
