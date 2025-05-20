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

/* @SyliusShop/Product/Box/_content.html.twig */
class __TwigTemplate_55052b148b0e91af64b530fa70b713ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Box/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Box/_content.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"ui fluid card\" ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product");
        yield ">
    <a href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "slug", [], "any", false, false, false, 4), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "translation", [], "any", false, false, false, 4), "locale", [], "any", false, false, false, 4)]), "html", null, true);
        yield "\" class=\"blurring dimmable image\">
        <div class=\"ui dimmer\">
            <div class=\"content\">
                <div class=\"center\">
                    <div class=\"ui inverted button\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_more"), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        ";
        // line 12
        yield from $this->load("@SyliusShop/Product/_mainImage.html.twig", 12)->unwrap()->yield(CoreExtension::merge($context, ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })())]));
        // line 13
        yield "    </a>
    <div class=\"content\" ";
        // line 14
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-content");
        yield ">
        <a href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "slug", [], "any", false, false, false, 15), "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "translation", [], "any", false, false, false, 15), "locale", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" class=\"header sylius-product-name\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-name", CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "</a>

        ";
        // line 17
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "enabledVariants", [], "any", false, false, false, 17), "empty", [], "method", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "            ";
            $context["variant"] = $this->env->getFilter('sylius_resolve_variant')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()));
            // line 19
            yield "            ";
            $context["price"] = $macros["money"]->getTemplateForMacro("macro_calculatePrice", $context, 19, $this->getSourceContext())->macro_calculatePrice(...[(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 19, $this->source); })())]);
            // line 20
            yield "            ";
            $context["originalPrice"] = $macros["money"]->getTemplateForMacro("macro_calculateOriginalPrice", $context, 20, $this->getSourceContext())->macro_calculateOriginalPrice(...[(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 20, $this->source); })())]);
            // line 21
            yield "            ";
            $context["appliedPromotions"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 21, $this->source); })()), "getAppliedPromotionsForChannel", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 21, $this->source); })()), "channel", [], "any", false, false, false, 21)], "method", false, false, false, 21);
            // line 22
            yield "
            ";
            // line 23
            yield from $this->load("@SyliusShop/Product/Show/_catalogPromotionLabels.html.twig", 23)->unwrap()->yield(CoreExtension::merge($context, ["appliedPromotions" => (isset($context["appliedPromotions"]) || array_key_exists("appliedPromotions", $context) ? $context["appliedPromotions"] : (function () { throw new RuntimeError('Variable "appliedPromotions" does not exist.', 23, $this->source); })()), "withDescription" => false]));
            // line 24
            yield "
            ";
            // line 25
            if ((($tmp = $this->env->getFilter('sylius_has_discount')->getCallable()((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 25, $this->source); })()), ["channel" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 25, $this->source); })()), "channel", [], "any", false, false, false, 25)])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "            <div class=\"sylius-product-original-price\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-original-price");
                yield "><del>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["originalPrice"]) || array_key_exists("originalPrice", $context) ? $context["originalPrice"] : (function () { throw new RuntimeError('Variable "originalPrice" does not exist.', 26, $this->source); })()), "html", null, true);
                yield "</del></div>
            ";
            }
            // line 28
            yield "            <div class=\"sylius-product-price\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-price");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 28, $this->source); })()), "html", null, true);
            yield "</div>
        ";
        }
        // line 30
        yield "    </div>
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
        return "@SyliusShop/Product/Box/_content.html.twig";
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
        return array (  129 => 30,  121 => 28,  113 => 26,  111 => 25,  108 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  89 => 17,  80 => 15,  76 => 14,  73 => 13,  71 => 12,  64 => 8,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<div class=\"ui fluid card\" {{ sylius_test_html_attribute('product') }}>
    <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"blurring dimmable image\">
        <div class=\"ui dimmer\">
            <div class=\"content\">
                <div class=\"center\">
                    <div class=\"ui inverted button\">{{ 'sylius.ui.view_more'|trans }}</div>
                </div>
            </div>
        </div>
        {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product} %}
    </a>
    <div class=\"content\" {{ sylius_test_html_attribute('product-content') }}>
        <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"header sylius-product-name\" {{ sylius_test_html_attribute('product-name', product.name) }}>{{ product.name }}</a>

        {% if not product.enabledVariants.empty() %}
            {% set variant = product|sylius_resolve_variant %}
            {% set price = money.calculatePrice(variant) %}
            {% set originalPrice = money.calculateOriginalPrice(variant) %}
            {% set appliedPromotions = variant.getAppliedPromotionsForChannel(sylius.channel) %}

            {% include '@SyliusShop/Product/Show/_catalogPromotionLabels.html.twig' with {'appliedPromotions': appliedPromotions, 'withDescription': false} %}

            {% if variant|sylius_has_discount({'channel': sylius.channel}) %}
            <div class=\"sylius-product-original-price\" {{ sylius_test_html_attribute('product-original-price') }}><del>{{ originalPrice }}</del></div>
            {% endif %}
            <div class=\"sylius-product-price\" {{ sylius_test_html_attribute('product-price') }}>{{ price }}</div>
        {% endif %}
    </div>
</div>
", "@SyliusShop/Product/Box/_content.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Box/_content.html.twig");
    }
}
