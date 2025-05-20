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

/* @SyliusShop/Cart/Summary/_item.html.twig */
class __TwigTemplate_9115a7db29bcc4baa58f6e2136bebe66 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_item.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["product_variant"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "variant", [], "any", false, false, false, 3);
        // line 4
        $context["original_price_to_display"] = $this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderItemOriginalPriceToDisplayExtension']->getOriginalPriceToDisplay((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()));
        // line 5
        yield "
<tr ";
        // line 6
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-product-row", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "productName", [], "any", false, false, false, 6));
        yield ">
    <td class=\"single line\" ";
        // line 7
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-item", ((array_key_exists("loop_index", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["loop_index"]) || array_key_exists("loop_index", $context) ? $context["loop_index"] : (function () { throw new RuntimeError('Variable "loop_index" does not exist.', 7, $this->source); })()), null)) : (null)));
        yield ">
        ";
        // line 8
        yield from $this->load("@SyliusShop/Product/_info.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["variant" => (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 8, $this->source); })())]));
        // line 9
        yield "    </td>
    <td class=\"right aligned\">
        ";
        // line 11
        if ((($tmp =  !(null === (isset($context["original_price_to_display"]) || array_key_exists("original_price_to_display", $context) ? $context["original_price_to_display"] : (function () { throw new RuntimeError('Variable "original_price_to_display" does not exist.', 11, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "            <span class=\"sylius-regular-unit-price\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-product-regular-unit-price");
            yield ">
                <span class=\"old-price\">";
            // line 13
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 13, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["original_price_to_display"]) || array_key_exists("original_price_to_display", $context) ? $context["original_price_to_display"] : (function () { throw new RuntimeError('Variable "original_price_to_display" does not exist.', 13, $this->source); })())]);
            yield "</span>
            </span>
        ";
        }
        // line 16
        yield "        <span class=\"sylius-unit-price\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-product-unit-price", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "productName", [], "any", false, false, false, 16));
        yield ">";
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 16, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "discountedUnitPrice", [], "any", false, false, false, 16)]);
        yield "</span>
    </td>
    <td class=\"center aligned\">
        <span class=\"sylius-quantity ui form\">";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "quantity", [], "any", false, false, false, 19), 'widget', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->env->getFunction('sylius_test_form_attribute')->getCallable()("cart-item-quantity-input", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "productName", [], "any", false, false, false, 19)), ["attr" => ["form" => (isset($context["main_form"]) || array_key_exists("main_form", $context) ? $context["main_form"] : (function () { throw new RuntimeError('Variable "main_form" does not exist.', 19, $this->source); })())]]));
        yield "</span>
    </td>
    <td class=\"center aligned\">
        <form action=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_item_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        yield "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)), "html", null, true);
        yield "\" />
            <button type=\"submit\" class=\"ui circular icon button sylius-cart-remove-button\" ";
        // line 25
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-remove-button", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "productName", [], "any", false, false, false, 25));
        yield " ><i class=\"remove icon\"></i></button>
        </form>
    </td>
    <td class=\"right aligned\">
        <span class=\"sylius-total\" ";
        // line 29
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-product-subtotal");
        yield ">";
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 29, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "subtotal", [], "any", false, false, false, 29)]);
        yield "</span>
    </td>
</tr>
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
        return "@SyliusShop/Cart/Summary/_item.html.twig";
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
        return array (  118 => 29,  111 => 25,  107 => 24,  102 => 22,  96 => 19,  87 => 16,  81 => 13,  76 => 12,  74 => 11,  70 => 9,  68 => 8,  64 => 7,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set product_variant = item.variant %}
{% set original_price_to_display = sylius_order_item_original_price_to_display(item) %}

<tr {{ sylius_test_html_attribute('cart-product-row', item.productName) }}>
    <td class=\"single line\" {{ sylius_test_html_attribute('cart-item', loop_index|default(null) ) }}>
        {% include '@SyliusShop/Product/_info.html.twig' with {'variant': product_variant} %}
    </td>
    <td class=\"right aligned\">
        {% if original_price_to_display is not null %}
            <span class=\"sylius-regular-unit-price\" {{ sylius_test_html_attribute('cart-product-regular-unit-price') }}>
                <span class=\"old-price\">{{ money.convertAndFormat(original_price_to_display) }}</span>
            </span>
        {% endif %}
        <span class=\"sylius-unit-price\" {{ sylius_test_html_attribute('cart-product-unit-price', item.productName) }}>{{ money.convertAndFormat(item.discountedUnitPrice) }}</span>
    </td>
    <td class=\"center aligned\">
        <span class=\"sylius-quantity ui form\">{{ form_widget(form.quantity, sylius_test_form_attribute('cart-item-quantity-input', item.productName)|sylius_merge_recursive({'attr': {'form': main_form}})) }}</span>
    </td>
    <td class=\"center aligned\">
        <form action=\"{{ path('sylius_shop_cart_item_remove', {'id': item.id}) }}\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(item.id) }}\" />
            <button type=\"submit\" class=\"ui circular icon button sylius-cart-remove-button\" {{ sylius_test_html_attribute('cart-remove-button', item.productName) }} ><i class=\"remove icon\"></i></button>
        </form>
    </td>
    <td class=\"right aligned\">
        <span class=\"sylius-total\" {{ sylius_test_html_attribute('cart-product-subtotal') }}>{{ money.convertAndFormat(item.subtotal) }}</span>
    </td>
</tr>
", "@SyliusShop/Cart/Summary/_item.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_item.html.twig");
    }
}
