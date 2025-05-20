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

/* @SyliusAdmin/Dashboard/_orders.html.twig */
class __TwigTemplate_d3741193eebb15c6ad37121100d27866 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_orders.html.twig"));

        // line 1
        $macros["messages"] = $this->macros["messages"] = $this->load("@SyliusUi/Macro/messages.html.twig", 1)->unwrap();
        // line 2
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusUi/Macro/buttons.html.twig", 2)->unwrap();
        // line 3
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 3)->unwrap();
        // line 4
        yield "
<h3 class=\"ui top attached header\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.new_orders"), "html", null, true);
        yield "</h3>
<div class=\"ui attached segment\">
    ";
        // line 7
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 7, $this->source); })())) > 0)) {
            // line 8
            yield "        <table class=\"ui stackable very basic table\" id=\"orders\">
            <thead>
                <th style=\"color: #ababab;\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order"), "html", null, true);
            yield "</th>
                <th style=\"color: #ababab;\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items"), "html", null, true);
            yield "</th>
                <th style=\"color: #ababab;\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
            yield "</th>
                <th></th>
            </thead>
            <tbody>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 17
                yield "                <tr>
                    <td>
                        <strong>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 19), "fullName", [], "any", false, false, false, 19), "html", null, true);
                yield "</strong><br>
                        <div style=\"color: #ababab;\">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
                yield "</div>
                    </td>
                    <td>
                        ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalQuantity", [], "any", false, false, false, 23), "html", null, true);
                yield "
                    </td>
                    <td>
                        ";
                // line 26
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 26, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "currencyCode", [], "any", false, false, false, 26)]);
                yield "
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            ";
                // line 30
                yield $macros["buttons"]->getTemplateForMacro("macro_show", $context, 30, $this->getSourceContext())->macro_show(...[$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 30)])]);
                yield "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "            </tbody>
        </table>
    ";
        } else {
            // line 38
            yield "        ";
            yield $macros["messages"]->getTemplateForMacro("macro_info", $context, 38, $this->getSourceContext())->macro_info(...["sylius.ui.no_results_to_display"]);
            yield "
    ";
        }
        // line 40
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
        return "@SyliusAdmin/Dashboard/_orders.html.twig";
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
        return array (  136 => 40,  130 => 38,  125 => 35,  114 => 30,  107 => 26,  101 => 23,  95 => 20,  91 => 19,  87 => 17,  83 => 16,  76 => 12,  72 => 11,  68 => 10,  64 => 8,  62 => 7,  57 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/messages.html.twig' as messages %}
{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<h3 class=\"ui top attached header\">{{ 'sylius.ui.new_orders'|trans }}</h3>
<div class=\"ui attached segment\">
    {% if orders|length > 0 %}
        <table class=\"ui stackable very basic table\" id=\"orders\">
            <thead>
                <th style=\"color: #ababab;\">{{ 'sylius.ui.order'|trans }}</th>
                <th style=\"color: #ababab;\">{{ 'sylius.ui.items'|trans }}</th>
                <th style=\"color: #ababab;\">{{ 'sylius.ui.total'|trans }}</th>
                <th></th>
            </thead>
            <tbody>
            {% for order in orders %}
                <tr>
                    <td>
                        <strong>{{ order.customer.fullName }}</strong><br>
                        <div style=\"color: #ababab;\">{{ order.customer.email }}</div>
                    </td>
                    <td>
                        {{ order.totalQuantity }}
                    </td>
                    <td>
                        {{ money.format(order.total, order.currencyCode) }}
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            {{ buttons.show(path('sylius_admin_order_show', {'id': order.id})) }}
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        {{ messages.info('sylius.ui.no_results_to_display') }}
    {% endif %}
</div>
", "@SyliusAdmin/Dashboard/_orders.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_orders.html.twig");
    }
}
