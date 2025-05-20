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

/* @SyliusShop/Product/Show/_addToCart.html.twig */
class __TwigTemplate_b064e4a382cb2cf33185df77bd91d372 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_addToCart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_addToCart.html.twig"));

        // line 1
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order_item"]) || array_key_exists("order_item", $context) ? $context["order_item"] : (function () { throw new RuntimeError('Variable "order_item" does not exist.', 1, $this->source); })()), "variant", [], "any", false, false, false, 1), "product", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), ["@SyliusShop/Form/theme.html.twig"], true);
        // line 4
        yield "
<div class=\"ui segment\" id=\"sylius-product-selecting-variant\" ";
        // line 5
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-selecting-variant");
        yield ">
    ";
        // line 6
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.show.before_add_to_cart", ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "order_item" => (isset($context["order_item"]) || array_key_exists("order_item", $context) ? $context["order_item"] : (function () { throw new RuntimeError('Variable "order_item" does not exist.', 6, $this->source); })())]);
        yield "

    ";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_cart_add_item", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "attr" => ["id" => "sylius-product-adding-to-cart", "class" => "ui loadable form", "novalidate" => "novalidate", "autocomplete" => "off", "data-redirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 8, $this->source); })()), "getRedirectRoute", ["summary"], "method", false, false, false, 8))]]);
        yield "
    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'errors');
        yield "
    <div class=\"ui red label bottom pointing hidden sylius-validation-error\" id=\"sylius-cart-validation-error\" ";
        // line 10
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-validation-error");
        yield "></div>
    ";
        // line 11
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "simple", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "variantSelectionMethodChoice", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                yield "            ";
                yield from $this->load("@SyliusShop/Product/Show/_variants.html.twig", 13)->unwrap()->yield($context);
                // line 14
                yield "        ";
            } else {
                // line 15
                yield "            ";
                yield from $this->load("@SyliusShop/Product/Show/_options.html.twig", 15)->unwrap()->yield($context);
                // line 16
                yield "        ";
            }
            // line 17
            yield "    ";
        }
        // line 18
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "cartItem", [], "any", false, false, false, 18), "quantity", [], "any", false, false, false, 18), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("quantity"));
        yield "

    ";
        // line 20
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.show.add_to_cart_form", ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "order_item" => (isset($context["order_item"]) || array_key_exists("order_item", $context) ? $context["order_item"] : (function () { throw new RuntimeError('Variable "order_item" does not exist.', 20, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })())]);
        yield "

    <button type=\"submit\" class=\"ui huge primary icon labeled button\" ";
        // line 22
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("add-to-cart-button");
        yield "><i class=\"cart icon\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_to_cart"), "html", null, true);
        yield "</button>
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "_token", [], "any", false, false, false, 23), 'row');
        yield "
    ";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
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
        return "@SyliusShop/Product/Show/_addToCart.html.twig";
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
        return array (  120 => 24,  116 => 23,  110 => 22,  105 => 20,  99 => 18,  96 => 17,  93 => 16,  90 => 15,  87 => 14,  84 => 13,  81 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  62 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set product = order_item.variant.product %}

{% form_theme form '@SyliusShop/Form/theme.html.twig' %}

<div class=\"ui segment\" id=\"sylius-product-selecting-variant\" {{ sylius_test_html_attribute('product-selecting-variant') }}>
    {{ sylius_template_event('sylius.shop.product.show.before_add_to_cart', {'product': product, 'order_item': order_item}) }}

    {{ form_start(form, {'action': path('sylius_shop_ajax_cart_add_item', {'productId': product.id}), 'attr': {'id': 'sylius-product-adding-to-cart', 'class': 'ui loadable form', 'novalidate': 'novalidate', 'autocomplete': 'off', 'data-redirect': path(configuration.getRedirectRoute('summary'))}}) }}
    {{ form_errors(form) }}
    <div class=\"ui red label bottom pointing hidden sylius-validation-error\" id=\"sylius-cart-validation-error\" {{ sylius_test_html_attribute('cart-validation-error') }}></div>
    {% if not product.simple %}
        {% if product.variantSelectionMethodChoice %}
            {% include '@SyliusShop/Product/Show/_variants.html.twig' %}
        {% else %}
            {% include '@SyliusShop/Product/Show/_options.html.twig' %}
        {% endif %}
    {% endif %}
    {{ form_row(form.cartItem.quantity, sylius_test_form_attribute('quantity')) }}

    {{ sylius_template_event('sylius.shop.product.show.add_to_cart_form', {'product': product, 'order_item': order_item, 'form': form}) }}

    <button type=\"submit\" class=\"ui huge primary icon labeled button\" {{ sylius_test_html_attribute('add-to-cart-button') }}><i class=\"cart icon\"></i> {{ 'sylius.ui.add_to_cart'|trans }}</button>
    {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "@SyliusShop/Product/Show/_addToCart.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_addToCart.html.twig");
    }
}
