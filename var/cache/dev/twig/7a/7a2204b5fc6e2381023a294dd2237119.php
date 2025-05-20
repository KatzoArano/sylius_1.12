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

/* @SyliusShop/Product/_info.html.twig */
class __TwigTemplate_45d72ebf0f9f9116ebb2108574ab7b4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_info.html.twig"));

        // line 1
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 1, $this->source); })()), "product", [], "any", false, false, false, 1);
        // line 2
        yield "
<div class=\"ui header\">
    ";
        // line 4
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 4, $this->source); })()), "hasImages", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        ";
            yield from $this->load("@SyliusShop/Product/_mainImage.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["product" => (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 5, $this->source); })()), "filter" => "sylius_shop_product_tiny_thumbnail"]));
            // line 6
            yield "    ";
        } else {
            // line 7
            yield "        ";
            yield from $this->load("@SyliusShop/Product/_mainImage.html.twig", 7)->unwrap()->yield(CoreExtension::merge($context, ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "filter" => "sylius_shop_product_tiny_thumbnail"]));
            // line 8
            yield "    ";
        }
        // line 9
        yield "    <div class=\"content\">
        <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "slug", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\">
            <div class=\"sylius-product-name\" ";
        // line 11
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-name", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "productName", [], "any", false, false, false, 11));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "productName", [], "any", false, false, false, 11), "html", null, true);
        yield "</div>
            <span class=\"sub header sylius-product-variant-code\" ";
        // line 12
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-variant-code", CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 12, $this->source); })()), "code", [], "any", false, false, false, 12));
        yield ">
                ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 13, $this->source); })()), "code", [], "any", false, false, false, 13), "html", null, true);
        yield "
            </span>
        </a>
    </div>
</div>
";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "hasOptions", [], "method", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "    <div class=\"ui horizontal divided list sylius-product-options\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-options");
            yield ">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 20, $this->source); })()), "optionValues", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 21
                yield "            <div class=\"item\" data-sylius-option-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["optionValue"], "name", [], "any", false, false, false, 21), "html", null, true);
                yield "\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("option-name", CoreExtension::getAttribute($this->env, $this->source, $context["optionValue"], "name", [], "any", false, false, false, 21));
                yield ">
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
        } elseif ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "variantName", [], "any", false, false, false, 26))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\" ";
            // line 28
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-variant-name");
            yield ">
            ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "variantName", [], "any", false, false, false, 29), "html", null, true);
            yield "
        </div>
    </div>
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
        return "@SyliusShop/Product/_info.html.twig";
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
        return array (  132 => 29,  128 => 28,  125 => 27,  123 => 26,  120 => 25,  111 => 22,  104 => 21,  100 => 20,  95 => 19,  93 => 18,  85 => 13,  81 => 12,  75 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product = variant.product %}

<div class=\"ui header\">
    {% if variant.hasImages %}
        {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': variant, 'filter': 'sylius_shop_product_tiny_thumbnail'} %}
    {% else %}
        {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product, 'filter': 'sylius_shop_product_tiny_thumbnail'} %}
    {% endif %}
    <div class=\"content\">
        <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug}) }}\">
            <div class=\"sylius-product-name\" {{ sylius_test_html_attribute('product-name', item.productName) }}>{{ item.productName }}</div>
            <span class=\"sub header sylius-product-variant-code\" {{ sylius_test_html_attribute('product-variant-code', variant.code) }}>
                {{ variant.code }}
            </span>
        </a>
    </div>
</div>
{% if product.hasOptions() %}
    <div class=\"ui horizontal divided list sylius-product-options\" {{ sylius_test_html_attribute('product-options') }}>
        {% for optionValue in variant.optionValues %}
            <div class=\"item\" data-sylius-option-name=\"{{ optionValue.name }}\" {{ sylius_test_html_attribute('option-name', optionValue.name) }}>
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% elseif item.variantName is not null %}
    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\" {{ sylius_test_html_attribute('product-variant-name') }}>
            {{ item.variantName }}
        </div>
    </div>
{% endif %}
", "@SyliusShop/Product/_info.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_info.html.twig");
    }
}
