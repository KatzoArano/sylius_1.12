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

/* @SyliusAdmin/Product/Show/_shipping.html.twig */
class __TwigTemplate_ba4e199bf4e333084529d8d2569a54d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_shipping.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_shipping.html.twig"));

        // line 1
        yield "<div id=\"shipping\">
    <h4 class=\"ui top attached large header\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
        yield "</h4>
    <div class=\"ui attached segment\">
        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_category"), "html", null, true);
        yield "</strong></td>
                <td>";
        // line 8
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "variants", [], "any", false, false, false, 8), "first", [], "any", false, false, false, 8), "shippingCategory", [], "any", false, false, false, 8))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "variants", [], "any", false, false, false, 8), "first", [], "any", false, false, false, 8), "shippingCategory", [], "any", false, false, false, 8), "html", null, true)) : ("-"));
        yield "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.width"), "html", null, true);
        yield "</strong></td>
                <td>";
        // line 12
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "variants", [], "any", false, false, false, 12), "first", [], "any", false, false, false, 12), "width", [], "any", false, false, false, 12))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "variants", [], "any", false, false, false, 12), "first", [], "any", false, false, false, 12), "width", [], "any", false, false, false, 12), "html", null, true)) : ("-"));
        yield "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.height"), "html", null, true);
        yield "</strong></td>
                <td>";
        // line 16
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "variants", [], "any", false, false, false, 16), "first", [], "any", false, false, false, 16), "height", [], "any", false, false, false, 16))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "variants", [], "any", false, false, false, 16), "first", [], "any", false, false, false, 16), "height", [], "any", false, false, false, 16), "html", null, true)) : ("-"));
        yield "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.depth"), "html", null, true);
        yield "</strong></td>
                <td>";
        // line 20
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "variants", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20), "depth", [], "any", false, false, false, 20))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "variants", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20), "depth", [], "any", false, false, false, 20), "html", null, true)) : ("-"));
        yield "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.weight"), "html", null, true);
        yield "</strong></td>
                <td>";
        // line 24
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "variants", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), "weight", [], "any", false, false, false, 24))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "variants", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), "weight", [], "any", false, false, false, 24), "html", null, true)) : ("-"));
        yield "</td>
            </tr>
            </tbody>
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
        return "@SyliusAdmin/Product/Show/_shipping.html.twig";
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
        return array (  103 => 24,  99 => 23,  93 => 20,  89 => 19,  83 => 16,  79 => 15,  73 => 12,  69 => 11,  63 => 8,  59 => 7,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"shipping\">
    <h4 class=\"ui top attached large header\">{{ 'sylius.ui.shipping'|trans }}</h4>
    <div class=\"ui attached segment\">
        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">{{ 'sylius.ui.shipping_category'|trans }}</strong></td>
                <td>{{ product.variants.first.shippingCategory is not empty ? product.variants.first.shippingCategory : '-' }}</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">{{ 'sylius.ui.width'|trans }}</strong></td>
                <td>{{ product.variants.first.width is not empty ? product.variants.first.width : '-' }}</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">{{ 'sylius.ui.height'|trans }}</strong></td>
                <td>{{ product.variants.first.height is not empty ? product.variants.first.height : '-' }}</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">{{ 'sylius.ui.depth'|trans }}</strong></td>
                <td>{{ product.variants.first.depth is not empty ? product.variants.first.depth : '-' }}</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">{{ 'sylius.ui.weight'|trans }}</strong></td>
                <td>{{ product.variants.first.weight is not empty ? product.variants.first.weight : '-' }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
", "@SyliusAdmin/Product/Show/_shipping.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_shipping.html.twig");
    }
}
