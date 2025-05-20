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

/* @SyliusShop/Common/Form/_address.html.twig */
class __TwigTemplate_a7b046ddfdfa55e02416fc0a67be457a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Form/_address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Form/_address.html.twig"));

        // line 1
        if (array_key_exists("type", $context)) {
            // line 2
            yield "    ";
            $context["type"] = ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 2, $this->source); })()) . "-");
        } else {
            // line 4
            yield "    ";
            $context["type"] = null;
        }
        // line 6
        yield "
<div class=\"two fields\">
    ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "firstName", [], "any", false, false, false, 8), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()(((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 8, $this->source); })()) . "first-name")));
        yield "
    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "lastName", [], "any", false, false, false, 9), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()(((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 9, $this->source); })()) . "last-name")));
        yield "
</div>
";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "company", [], "any", false, false, false, 11), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()(((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 11, $this->source); })()) . "company")));
        yield "
";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "street", [], "any", false, false, false, 12), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()(((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })()) . "street")));
        yield "

";
        // line 14
        yield from $this->load("@SyliusShop/Common/Form/_countryCode.html.twig", 14)->unwrap()->yield(CoreExtension::merge($context, ["form" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "countryCode", [], "any", false, false, false, 14)]));
        // line 15
        yield "
<div class=\"province-container field\" data-url=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_render_province_form");
        yield "\">
    ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "provinceCode", [], "any", true, true, false, 17)) {
            // line 18
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "provinceCode", [], "any", false, false, false, 18), 'row', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->env->getFunction('sylius_test_form_attribute')->getCallable()("province-code"), ["attr" => ["class" => "ui dropdown"]]));
            yield "
    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["form"] ?? null), "provinceName", [], "any", true, true, false, 19)) {
            // line 20
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "provinceName", [], "any", false, false, false, 20), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("province-name"));
            yield "
    ";
        }
        // line 22
        yield "</div>

";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "provinceCode", [], "any", true, true, false, 24)) {
            // line 25
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'errors');
            yield "
";
        }
        // line 27
        yield "
<div class=\"two fields\">
    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "city", [], "any", false, false, false, 29), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()(((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()) . "city")));
        yield "
    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "postcode", [], "any", false, false, false, 30), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()(((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 30, $this->source); })()) . "postcode")));
        yield "
</div>
";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "phoneNumber", [], "any", false, false, false, 32), 'row');
        yield "
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
        return "@SyliusShop/Common/Form/_address.html.twig";
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
        return array (  129 => 32,  124 => 30,  120 => 29,  116 => 27,  110 => 25,  108 => 24,  104 => 22,  98 => 20,  96 => 19,  91 => 18,  89 => 17,  85 => 16,  82 => 15,  80 => 14,  75 => 12,  71 => 11,  66 => 9,  62 => 8,  58 => 6,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if type is defined %}
    {% set type = type ~ '-' %}
{% else %}
    {% set type = null %}
{% endif %}

<div class=\"two fields\">
    {{ form_row(form.firstName, sylius_test_form_attribute(type ~ 'first-name')) }}
    {{ form_row(form.lastName, sylius_test_form_attribute(type ~ 'last-name')) }}
</div>
{{ form_row(form.company, sylius_test_form_attribute(type ~ 'company')) }}
{{ form_row(form.street, sylius_test_form_attribute(type ~ 'street')) }}

{% include '@SyliusShop/Common/Form/_countryCode.html.twig' with {'form': form.countryCode} %}

<div class=\"province-container field\" data-url=\"{{ path('sylius_shop_ajax_render_province_form') }}\">
    {% if form.provinceCode is defined %}
        {{ form_row(form.provinceCode, sylius_test_form_attribute('province-code')|sylius_merge_recursive( {'attr': {'class': 'ui dropdown'}})) }}
    {% elseif form.provinceName is defined %}
        {{ form_row(form.provinceName, sylius_test_form_attribute('province-name')) }}
    {% endif %}
</div>

{% if form.provinceCode is defined %}
    {{ form_errors(form) }}
{% endif %}

<div class=\"two fields\">
    {{ form_row(form.city, sylius_test_form_attribute(type ~ 'city')) }}
    {{ form_row(form.postcode, sylius_test_form_attribute(type ~ 'postcode')) }}
</div>
{{ form_row(form.phoneNumber) }}
", "@SyliusShop/Common/Form/_address.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Form/_address.html.twig");
    }
}
