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

/* @SyliusShop/Taxon/_horizontalMenu.html.twig */
class __TwigTemplate_d8dd879974ed1040a92fa222d478f651 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_horizontalMenu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_horizontalMenu.html.twig"));

        // line 18
        yield "
";
        // line 19
        $macros["͜macros"] = $this->macros["͜macros"] = $this;
        // line 20
        yield "
";
        // line 21
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new RuntimeError('Variable "taxons" does not exist.', 21, $this->source); })())) > 0)) {
            // line 22
            yield "<div class=\"ui large stackable menu\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("menu");
            yield ">
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new RuntimeError('Variable "taxons" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 24
                yield "        ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_item", $context, 24, $this->getSourceContext())->macro_item(...[$context["taxon"]]);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['taxon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_item($taxon = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "taxon" => $taxon,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "item"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "item"));

            // line 2
            yield "    ";
            $macros["͜macros"] = $this;
            // line 3
            yield "
    ";
            // line 4
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 4, $this->source); })()), "enabledChildren", [], "any", false, false, false, 4)) > 0)) {
                // line 5
                yield "        <div class=\"ui dropdown item\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("menu-item");
                yield ">
            <span class=\"text\">";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
                yield "</span>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 9, $this->source); })()), "enabledChildren", [], "any", false, false, false, 9));
                foreach ($context['_seq'] as $context["_key"] => $context["childTaxon"]) {
                    // line 10
                    yield "                    ";
                    yield $macros["͜macros"]->getTemplateForMacro("macro_item", $context, 10, $this->getSourceContext())->macro_item(...[$context["childTaxon"]]);
                    yield "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['childTaxon'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                yield "            </div>
        </div>
    ";
            } else {
                // line 15
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 15, $this->source); })()), "slug", [], "any", false, false, false, 15), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 15, $this->source); })()), "translation", [], "any", false, false, false, 15), "locale", [], "any", false, false, false, 15)]), "html", null, true);
                yield "\" class=\"item\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("menu-item");
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
                yield "</a>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusShop/Taxon/_horizontalMenu.html.twig";
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
        return array (  144 => 15,  139 => 12,  130 => 10,  126 => 9,  120 => 6,  115 => 5,  113 => 4,  110 => 3,  107 => 2,  89 => 1,  76 => 26,  67 => 24,  63 => 23,  58 => 22,  56 => 21,  53 => 20,  51 => 19,  48 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro item(taxon) %}
    {% import _self as macros %}

    {% if taxon.enabledChildren|length > 0 %}
        <div class=\"ui dropdown item\" {{ sylius_test_html_attribute('menu-item') }}>
            <span class=\"text\">{{ taxon.name }}</span>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                {% for childTaxon in taxon.enabledChildren %}
                    {{ macros.item(childTaxon) }}
                {% endfor %}
            </div>
        </div>
    {% else %}
        <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.slug, '_locale': taxon.translation.locale}) }}\" class=\"item\" {{ sylius_test_html_attribute('menu-item') }}>{{ taxon.name }}</a>
    {% endif %}
{% endmacro %}

{% import _self as macros %}

{% if taxons|length > 0 %}
<div class=\"ui large stackable menu\" {{ sylius_test_html_attribute('menu') }}>
    {% for taxon in taxons %}
        {{ macros.item(taxon) }}
    {% endfor %}
</div>
{% endif %}
", "@SyliusShop/Taxon/_horizontalMenu.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Taxon/_horizontalMenu.html.twig");
    }
}
