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

/* @SyliusShop/Product/Show/_breadcrumb.html.twig */
class __TwigTemplate_8a1c51f9345fe3533deab27537ef7fce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_breadcrumb.html.twig"));

        // line 1
        yield "<div class=\"ui breadcrumb\">
    <a href=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        yield "\" class=\"section\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home"), "html", null, true);
        yield "</a>
    <div class=\"divider\"> / </div>
    ";
        // line 4
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "mainTaxon", [], "any", false, false, false, 4))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        ";
            $context["taxon"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "mainTaxon", [], "any", false, false, false, 5);
            // line 6
            yield "        ";
            $context["ancestors"] = Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 6, $this->source); })()), "ancestors", [], "any", false, false, false, 6));
            // line 7
            yield "
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ancestors"]) || array_key_exists("ancestors", $context) ? $context["ancestors"] : (function () { throw new RuntimeError('Variable "ancestors" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ancestor"]) {
                // line 9
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "isRoot", [], "method", false, false, false, 9) ||  !CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "enabled", [], "any", false, false, false, 9))) {
                    // line 10
                    yield "                <div class=\"section\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "name", [], "any", false, false, false, 10), "html", null, true);
                    yield "</div>
            ";
                } else {
                    // line 12
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "slug", [], "any", false, false, false, 12), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "translation", [], "any", false, false, false, 12), "locale", [], "any", false, false, false, 12)]), "html", null, true);
                    yield "\" class=\"section\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ancestor"], "name", [], "any", false, false, false, 12), "html", null, true);
                    yield "</a>
            ";
                }
                // line 14
                yield "            <div class=\"divider\"> / </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ancestor'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "
        ";
            // line 17
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 17, $this->source); })()), "enabled", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 18, $this->source); })()), "translation", [], "any", false, false, false, 18), "locale", [], "any", false, false, false, 18)]), "html", null, true);
                yield "\" class=\"section\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 20
                yield "            <div class=\"section\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
                yield "</div>
        ";
            }
            // line 22
            yield "        <div class=\"divider\"> / </div>
    ";
        }
        // line 24
        yield "    <div class=\"active section\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        yield "</div>
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
        return "@SyliusShop/Product/Show/_breadcrumb.html.twig";
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
        return array (  120 => 24,  116 => 22,  110 => 20,  102 => 18,  100 => 17,  97 => 16,  90 => 14,  82 => 12,  76 => 10,  73 => 9,  69 => 8,  66 => 7,  63 => 6,  60 => 5,  58 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui breadcrumb\">
    <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
    <div class=\"divider\"> / </div>
    {% if product.mainTaxon is not null %}
        {% set taxon = product.mainTaxon %}
        {% set ancestors = taxon.ancestors|reverse %}

        {% for ancestor in ancestors %}
            {% if ancestor.isRoot()  or not ancestor.enabled %}
                <div class=\"section\">{{ ancestor.name }}</div>
            {% else %}
                <a href=\"{{ path('sylius_shop_product_index', {'slug': ancestor.slug, '_locale': ancestor.translation.locale}) }}\" class=\"section\">{{ ancestor.name }}</a>
            {% endif %}
            <div class=\"divider\"> / </div>
        {% endfor %}

        {% if taxon.enabled %}
            <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.slug, '_locale': taxon.translation.locale}) }}\" class=\"section\">{{ taxon.name }}</a>
        {% else %}
            <div class=\"section\">{{ taxon.name }}</div>
        {% endif %}
        <div class=\"divider\"> / </div>
    {% endif %}
    <div class=\"active section\">{{ product.name }}</div>
</div>
", "@SyliusShop/Product/Show/_breadcrumb.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_breadcrumb.html.twig");
    }
}
