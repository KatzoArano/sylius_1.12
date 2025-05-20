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

/* @SyliusShop/Cart/Summary/_items.html.twig */
class __TwigTemplate_48f80764f06a5cd198925d4014a82161 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_items.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_items.html.twig"));

        // line 1
        yield "<div class=\"ui segment\">
    ";
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_save"), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2)]]);
        yield "
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'errors');
        yield "
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\"/>
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "_token", [], "any", false, false, false, 5), 'row');
        yield "
    ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "

    ";
        // line 8
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.cart.summary.items", ["cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 8, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })())]);
        yield "

    <table id=\"sylius-cart-items\" ";
        // line 10
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-items");
        yield " class=\"ui very basic celled table\">
        <thead>
        <tr>
            <th>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.item"), "html", null, true);
        yield "</th>
            <th>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.unit_price"), "html", null, true);
        yield "</th>
            <th>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.qty"), "html", null, true);
        yield "</th>
            <th></th>
            <th class=\"right aligned\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
        yield "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 21, $this->source); })()), "items", [], "any", false, false, false, 21));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 22
            yield "            ";
            yield from $this->load("@SyliusShop/Cart/Summary/_item.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["item" => $context["item"], "form" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "items", [], "any", false, false, false, 22), $context["key"], [], "array", false, false, false, 22), "main_form" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "loop_index" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22)]));
            // line 23
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "        </tbody>
    </table>
    ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "promotionCoupon", [], "any", true, true, false, 26)) {
            // line 27
            yield "        <div class=\"ui hidden divider\"></div>

        ";
            // line 29
            yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.cart.coupon", ["cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 29, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "main_form" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]);
            yield "

    ";
        }
        // line 32
        yield "    <div class=\"ui hidden divider\"></div>
    ";
        // line 33
        yield from $this->load("@SyliusShop/Cart/Summary/_update.html.twig", 33)->unwrap()->yield(CoreExtension::merge($context, ["main_form" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]));
        // line 34
        yield "</div>
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
        return "@SyliusShop/Cart/Summary/_items.html.twig";
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
        return array (  155 => 34,  153 => 33,  150 => 32,  144 => 29,  140 => 27,  138 => 26,  134 => 24,  120 => 23,  117 => 22,  100 => 21,  93 => 17,  88 => 15,  84 => 14,  80 => 13,  74 => 10,  69 => 8,  64 => 6,  60 => 5,  55 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui segment\">
    {{ form_start(form, {'action': path('sylius_shop_cart_save'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate', 'id': form.vars.id}}) }}
    {{ form_errors(form) }}
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\"/>
    {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}

    {{ sylius_template_event('sylius.shop.cart.summary.items', {'cart': cart, 'form': form}) }}

    <table id=\"sylius-cart-items\" {{ sylius_test_html_attribute('cart-items') }} class=\"ui very basic celled table\">
        <thead>
        <tr>
            <th>{{ 'sylius.ui.item'|trans }}</th>
            <th>{{ 'sylius.ui.unit_price'|trans }}</th>
            <th>{{ 'sylius.ui.qty'|trans }}</th>
            <th></th>
            <th class=\"right aligned\">{{ 'sylius.ui.total'|trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for key, item in cart.items %}
            {% include '@SyliusShop/Cart/Summary/_item.html.twig' with {'item': item, 'form': form.items[key], 'main_form': form.vars.id, 'loop_index': loop.index} %}
        {% endfor %}
        </tbody>
    </table>
    {% if form.promotionCoupon is defined %}
        <div class=\"ui hidden divider\"></div>

        {{ sylius_template_event('sylius.shop.cart.coupon', {'cart': cart, 'form': form, 'main_form': form.vars.id}) }}

    {% endif %}
    <div class=\"ui hidden divider\"></div>
    {% include '@SyliusShop/Cart/Summary/_update.html.twig' with {'main_form': form.vars.id} %}
</div>
", "@SyliusShop/Cart/Summary/_items.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_items.html.twig");
    }
}
