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

/* @SyliusAdmin/ProductVariant/Grid/Field/name.html.twig */
class __TwigTemplate_92101439235a63091d63abfbbbe855d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig"));

        // line 1
        $context["current_locale"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 1, $this->source); })()), "localeCode", [], "any", false, false, false, 1);
        // line 2
        $context["translation"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), "getTranslation", [(isset($context["current_locale"]) || array_key_exists("current_locale", $context) ? $context["current_locale"] : (function () { throw new RuntimeError('Variable "current_locale" does not exist.', 2, $this->source); })())], "method", false, false, false, 2);
        // line 3
        $context["translation"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 3, $this->source); })()), "locale", [], "any", false, false, false, 3) == (isset($context["current_locale"]) || array_key_exists("current_locale", $context) ? $context["current_locale"] : (function () { throw new RuntimeError('Variable "current_locale" does not exist.', 3, $this->source); })()))) ? ((isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 3, $this->source); })())) : (null));
        // line 4
        yield "
";
        // line 5
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "optionValues", [], "any", false, false, false, 5))) {
            // line 6
            yield "    ";
            if (( !(null === (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 6, $this->source); })())) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)))) {
                // line 7
                yield "        <span class=\"ui small header\">
            ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
                yield "
        </span>
    ";
            } else {
                // line 11
                yield "        ";
                yield from $this->load("@SyliusAdmin/Common/_missingTranslation.html.twig", 11)->unwrap()->yield($context);
                // line 12
                yield "    ";
            }
        } else {
            // line 14
            yield "    <span class=\"ui small header\">
        ";
            // line 15
            $context["product"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "product", [], "any", false, false, false, 15);
            // line 16
            yield "        ";
            yield ((( !(null === (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 16, $this->source); })())) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true)));
            yield "
    </span>
    <br>
    <div class=\"ui horizontal divided list\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "optionValues", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 21
                yield "            <div class=\"item\">
                ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 22), "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['optionValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "    </div>
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
        return "@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig";
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
        return array (  107 => 25,  98 => 22,  95 => 21,  91 => 20,  83 => 16,  81 => 15,  78 => 14,  74 => 12,  71 => 11,  65 => 8,  62 => 7,  59 => 6,  57 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set current_locale = sylius.localeCode %}
{% set translation = data.getTranslation(current_locale) %}
{% set translation = translation.locale == current_locale ? translation : null %}

{% if data.optionValues is empty %}
    {% if translation is not null and translation.name is not null %}
        <span class=\"ui small header\">
            {{ translation.name }}
        </span>
    {% else %}
        {% include '@SyliusAdmin/Common/_missingTranslation.html.twig' %}
    {% endif %}
{% else %}
    <span class=\"ui small header\">
        {% set product = data.product %}
        {{ translation is not null and translation.name is not null ? translation.name : product.name }}
    </span>
    <br>
    <div class=\"ui horizontal divided list\">
        {% for optionValue in data.optionValues %}
            <div class=\"item\">
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% endif %}
", "@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Grid/Field/name.html.twig");
    }
}
