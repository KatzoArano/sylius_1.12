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

/* @SyliusCore/Collector/cart.html.twig */
class __TwigTemplate_550ab7ff305aa0dcd2e98431cfb5cba0 extends Template
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

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Collector/cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Collector/cart.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "hasCart", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        ";
            $macros["money"] = $this->load("@SyliusCore/Common/Macro/money.html.twig", 5)->unwrap();
            // line 6
            yield "
        ";
            // line 7
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@SyliusCore/Collector/Icon/cart.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "quantity", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "quantity", [], "any", false, false, false, 9), 0)) : (0)), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            yield "
        ";
            // line 12
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 13
                yield "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>ID</b>
                    <span>";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
                yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Subtotal</b>
                    <span>";
                // line 20
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 20, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "subtotal", [], "any", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "currency", [], "any", false, false, false, 20)]);
                yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Total</b>
                    <span>";
                // line 24
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 24, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "total", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "currency", [], "any", false, false, false, 24)]);
                yield "</span>
                </div>
            </div>
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <span><a href=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 29, $this->source); })()) . "?panel=sylius_cart"), "html", null, true);
                yield "\" rel=\"help\">View details</a></span>
                </div>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 33
            yield "
        ";
            // line 34
            yield from $this->load("@WebProfiler/Profiler/toolbar_item.html.twig", 34)->unwrap()->yield(CoreExtension::merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 34, $this->source); })())]));
            // line 35
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 39
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 39, $this->source); })()), "hasCart", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "        <span class=\"label ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "quantity", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "quantity", [], "any", false, false, false, 40), 0)) : (0)) == 0)) {
                yield "disabled";
            }
            yield "\">
            <span class=\"icon\">";
            // line 41
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@SyliusCore/Collector/Icon/cart.svg");
            yield "</span>
            <strong>Cart</strong>
            <span class=\"count\">
                <span>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "quantity", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "quantity", [], "any", false, false, false, 44), 0)) : (0)), "html", null, true);
            yield "</span>
            </span>
        </span>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 51
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "hasCart", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "        ";
            $macros["money"] = $this->load("@SyliusCore/Common/Macro/money.html.twig", 52)->unwrap();
            // line 53
            yield "
        <h2>Cart</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Currency</th>
                <th>Locale</th>
                <th>Subtotal</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "currency", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "locale", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                <td>";
            // line 67
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 67, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "subtotal", [], "any", false, false, false, 67), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "currency", [], "any", false, false, false, 67)]);
            yield "</td>
                <td>";
            // line 68
            yield $macros["money"]->getTemplateForMacro("macro_format", $context, 68, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "total", [], "any", false, false, false, 68), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "currency", [], "any", false, false, false, 68)]);
            yield "</td>
            </tr>
        </table>

        <h2>States</h2>
        <table>
            <tr>
                <th>Main</th>
                <th>Checkout</th>
                <th>Shipping</th>
                <th>Payment</th>
            </tr>
            <tr>
                <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 81, $this->source); })()), "states", [], "any", false, false, false, 81), "main", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                <td>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 82, $this->source); })()), "states", [], "any", false, false, false, 82), "checkout", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "states", [], "any", false, false, false, 83), "shipping", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>
                <td>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 84, $this->source); })()), "states", [], "any", false, false, false, 84), "payment", [], "any", false, false, false, 84), "html", null, true);
            yield "</td>
            </tr>
        </table>

        ";
            // line 88
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 88, $this->source); })()), "items", [], "any", false, false, false, 88)) > 0)) {
                // line 89
                yield "            <h2>Items</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Product (Code, ID)</th>
                    <th>Variant (Code, ID)</th>
                    <th>Quantity</th>
                </tr>
                ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 97, $this->source); })()), "items", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 98
                    yield "                <tr>
                    <td>";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 99), "html", null, true);
                    yield "</td>
                    <td>";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 100), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productCode", [], "any", false, false, false, 100), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 100), "html", null, true);
                    yield ")</td>
                    <td>";
                    // line 101
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variantName", [], "any", false, false, false, 101), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variantCode", [], "any", false, false, false, 101), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variantId", [], "any", false, false, false, 101), "html", null, true);
                    yield ")</td>
                    <td>";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 102), "html", null, true);
                    yield "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                yield "            </table>
        ";
            }
            // line 107
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusCore/Collector/cart.html.twig";
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
        return array (  337 => 107,  333 => 105,  324 => 102,  316 => 101,  308 => 100,  304 => 99,  301 => 98,  297 => 97,  287 => 89,  285 => 88,  278 => 84,  274 => 83,  270 => 82,  266 => 81,  250 => 68,  246 => 67,  242 => 66,  238 => 65,  234 => 64,  221 => 53,  218 => 52,  215 => 51,  202 => 50,  186 => 44,  180 => 41,  173 => 40,  170 => 39,  157 => 38,  145 => 35,  143 => 34,  140 => 33,  132 => 29,  124 => 24,  117 => 20,  110 => 16,  105 => 13,  103 => 12,  100 => 11,  94 => 9,  89 => 8,  87 => 7,  84 => 6,  81 => 5,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.hasCart %}
        {% import \"@SyliusCore/Common/Macro/money.html.twig\" as money %}

        {% set icon %}
            {{ include('@SyliusCore/Collector/Icon/cart.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.quantity|default(0) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>ID</b>
                    <span>{{ collector.id }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Subtotal</b>
                    <span>{{ money.format(collector.subtotal, collector.currency) }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Total</b>
                    <span>{{ money.format(collector.total, collector.currency) }}</span>
                </div>
            </div>
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <span><a href=\"{{ profiler_url ~ '?panel=sylius_cart' }}\" rel=\"help\">View details</a></span>
                </div>
            </div>
        {% endset %}

        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with {'link': profiler_url} %}
    {% endif %}
{% endblock %}

{% block menu %}
    {% if collector.hasCart %}
        <span class=\"label {% if collector.quantity|default(0) == 0 %}disabled{% endif %}\">
            <span class=\"icon\">{{ include('@SyliusCore/Collector/Icon/cart.svg') }}</span>
            <strong>Cart</strong>
            <span class=\"count\">
                <span>{{ collector.quantity|default(0) }}</span>
            </span>
        </span>
    {% endif %}
{% endblock %}

{% block panel %}
    {% if collector.hasCart %}
        {% import \"@SyliusCore/Common/Macro/money.html.twig\" as money %}

        <h2>Cart</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Currency</th>
                <th>Locale</th>
                <th>Subtotal</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>{{ collector.id }}</td>
                <td>{{ collector.currency }}</td>
                <td>{{ collector.locale }}</td>
                <td>{{ money.format(collector.subtotal, collector.currency) }}</td>
                <td>{{ money.format(collector.total, collector.currency) }}</td>
            </tr>
        </table>

        <h2>States</h2>
        <table>
            <tr>
                <th>Main</th>
                <th>Checkout</th>
                <th>Shipping</th>
                <th>Payment</th>
            </tr>
            <tr>
                <td>{{ collector.states.main }}</td>
                <td>{{ collector.states.checkout }}</td>
                <td>{{ collector.states.shipping }}</td>
                <td>{{ collector.states.payment }}</td>
            </tr>
        </table>

        {% if collector.items|length > 0 %}
            <h2>Items</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Product (Code, ID)</th>
                    <th>Variant (Code, ID)</th>
                    <th>Quantity</th>
                </tr>
                {% for item in collector.items %}
                <tr>
                    <td>{{ item.id }}</td>
                    <td>{{ item.productName }} ({{ item.productCode }}, {{ item.productId }})</td>
                    <td>{{ item.variantName }} ({{ item.variantCode }}, {{ item.variantId }})</td>
                    <td>{{ item.quantity }}</td>
                </tr>
                {% endfor %}
            </table>
        {% endif %}
    {% endif %}
{% endblock %}
", "@SyliusCore/Collector/cart.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/views/Collector/cart.html.twig");
    }
}
