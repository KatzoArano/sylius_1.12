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

/* @PayPlugSyliusPayPlugPlugin/form/complete_info_popin.html.twig */
class __TwigTemplate_3071b0f56a928a3cfbb70b177b2c9024 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/form/complete_info_popin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/form/complete_info_popin.html.twig"));

        // line 1
        yield "<div class=\"oney-complete-info-popin ui segment\">
    <div class=\"oney-complete-info-popin__header\">
        <a class=\"close\" href=\"javascript:void(0);\" title=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.popin_close"), "html", null, true);
        yield "\">
            <span></span><span></span>
        </a>
    </div>
    <div class=\"oney-complete-info-popin__content\">
        <div class=\"ui dividing header\">
            <h3>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.form.complete_info.missing_title"), "html", null, true);
        yield "</h3>
        </div>
        ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "ui form loadable", "novalidate" => "novalidate"]]);
        yield "
        ";
        // line 12
        $context["phoneField"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "billing_phone", [], "any", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "billing_phone", [], "any", false, false, false, 12)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "billing_phone", [], "any", false, false, false, 12)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shipping_phone", [], "any", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "shipping_phone", [], "any", false, false, false, 12)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "shipping_phone", [], "any", false, false, false, 12)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "phone", [], "any", false, false, false, 12)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "phone", [], "any", false, false, false, 12)) : (null))))));
        // line 13
        yield "        ";
        if ((($tmp =  !(null === (isset($context["phoneField"]) || array_key_exists("phoneField", $context) ? $context["phoneField"] : (function () { throw new RuntimeError('Variable "phoneField" does not exist.', 13, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "            <div class=\"required field\">
                <label for=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["phoneField"]) || array_key_exists("phoneField", $context) ? $context["phoneField"] : (function () { throw new RuntimeError('Variable "phoneField" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "html", null, true);
            yield "\"
                       class=\"required\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.form.complete_info.phone"), "html", null, true);
            yield "</label>
                ";
            // line 17
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["phoneField"]) || array_key_exists("phoneField", $context) ? $context["phoneField"] : (function () { throw new RuntimeError('Variable "phoneField" does not exist.', 17, $this->source); })()), 'widget', ["attr" => ["class" => "required"]]);
            yield "
                ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["phoneField"]) || array_key_exists("phoneField", $context) ? $context["phoneField"] : (function () { throw new RuntimeError('Variable "phoneField" does not exist.', 18, $this->source); })()), 'errors');
            yield "
            </div>
        ";
        }
        // line 21
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", true, true, false, 21)) {
            // line 22
            yield "            <div class=\"required field\">
                <label for=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
            yield "\"
                       class=\"required\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.form.complete_info.email"), "html", null, true);
            yield "</label>
                ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "required"]]);
            yield "
                ";
            // line 26
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'errors');
            yield "
            </div>
        ";
        }
        // line 29
        yield "        <div>
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "submit", [], "any", false, false, false, 30), 'widget', ["label" => "payplug_sylius_payplug_plugin.form.complete_info.submit", "attr" => ["class" => "ui large primary button"]]);
        yield "
            <a class=\"close\"
               href=\"javascript:void(0);\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.cancel"), "html", null, true);
        yield "</a>
        </div>
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'rest');
        yield "
        ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        yield "
    </div>
    <div class=\"oney-complete-info-popin__success\">
        <div class=\"ui header\">
            <i class=\"icon check\"></i>
            <h3>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.form.complete_info.success_title"), "html", null, true);
        yield "</h3>
        </div>
        <p>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.form.complete_info.success_instruction"), "html", null, true);
        yield "</p>
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
        return "@PayPlugSyliusPayPlugPlugin/form/complete_info_popin.html.twig";
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
        return array (  150 => 42,  145 => 40,  137 => 35,  133 => 34,  128 => 32,  123 => 30,  120 => 29,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  99 => 22,  96 => 21,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  75 => 14,  72 => 13,  70 => 12,  66 => 11,  61 => 9,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"oney-complete-info-popin ui segment\">
    <div class=\"oney-complete-info-popin__header\">
        <a class=\"close\" href=\"javascript:void(0);\" title=\"{{ 'payplug_sylius_payplug_plugin.ui.popin_close'|trans }}\">
            <span></span><span></span>
        </a>
    </div>
    <div class=\"oney-complete-info-popin__content\">
        <div class=\"ui dividing header\">
            <h3>{{ 'payplug_sylius_payplug_plugin.form.complete_info.missing_title'|trans }}</h3>
        </div>
        {{ form_start(form, {'attr': {'class': 'ui form loadable', 'novalidate': 'novalidate'}}) }}
        {% set phoneField = form.billing_phone ?? form.shipping_phone ?? form.phone ?? null %}
        {% if phoneField is not null %}
            <div class=\"required field\">
                <label for=\"{{ phoneField.vars.id }}\"
                       class=\"required\">{{ 'payplug_sylius_payplug_plugin.form.complete_info.phone'|trans }}</label>
                {{ form_widget(phoneField, {attr: {class: 'required'}}) }}
                {{ form_errors(phoneField) }}
            </div>
        {% endif %}
        {% if form.email is defined %}
            <div class=\"required field\">
                <label for=\"{{ form.email.vars.id }}\"
                       class=\"required\">{{ 'payplug_sylius_payplug_plugin.form.complete_info.email'|trans }}</label>
                {{ form_widget(form.email, {attr: {class: 'required'}}) }}
                {{ form_errors(form.email) }}
            </div>
        {% endif %}
        <div>
            {{ form_widget(form.submit, { label: 'payplug_sylius_payplug_plugin.form.complete_info.submit', attr: { class: 'ui large primary button' }}) }}
            <a class=\"close\"
               href=\"javascript:void(0);\">{{ 'payplug_sylius_payplug_plugin.ui.cancel'|trans }}</a>
        </div>
        {{ form_rest(form) }}
        {{ form_end(form) }}
    </div>
    <div class=\"oney-complete-info-popin__success\">
        <div class=\"ui header\">
            <i class=\"icon check\"></i>
            <h3>{{ 'payplug_sylius_payplug_plugin.form.complete_info.success_title'|trans }}</h3>
        </div>
        <p>{{ 'payplug_sylius_payplug_plugin.form.complete_info.success_instruction'|trans }}</p>
    </div>
</div>
", "@PayPlugSyliusPayPlugPlugin/form/complete_info_popin.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/payplug/sylius-payplug-plugin/src/Resources/views/form/complete_info_popin.html.twig");
    }
}
