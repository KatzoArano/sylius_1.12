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

/* @SyliusRefundPlugin/_items.html.twig */
class __TwigTemplate_d3b3af58096856658f8e6afd086571c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_items.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_items.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 1, $this->source); })()), "items", [], "any", false, false, false, 1));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "units", [], "any", false, false, false, 2));
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
            foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
                // line 3
                yield "        ";
                $context["variant"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 3);
                // line 4
                yield "        ";
                $context["product"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 4, $this->source); })()), "product", [], "any", false, false, false, 4);
                // line 5
                yield "
        <tr class=\"unit\">
            <td class=\"single line\">
                ";
                // line 8
                yield from $this->load("@SyliusAdmin/Product/_info.html.twig", 8)->unwrap()->yield($context);
                // line 9
                yield "            </td>
            <td class=\"right aligned total\">
                ";
                // line 11
                yield from $this->load("@SyliusRefundPlugin/_unitTotal.html.twig", 11)->unwrap()->yield($context);
                // line 12
                yield "            </td>
            <td class=\"aligned collapsing partial-refund\">
                ";
                // line 14
                yield from $this->load("@SyliusRefundPlugin/_unitInput.html.twig", 14)->unwrap()->yield($context);
                // line 15
                yield "            </td>
            <td class=\"aligned collapsing\">
                <button data-refund=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\RefundPlugin\Twig\OrderRefundsExtension']->getUnitRefundLeft(CoreExtension::getAttribute($this->env, $this->source, $context["unit"], "id", [], "any", false, false, false, 17), Twig\Extension\CoreExtension::constant("Sylius\\RefundPlugin\\Model\\RefundType::ORDER_ITEM_UNIT"), CoreExtension::getAttribute($this->env, $this->source, $context["unit"], "total", [], "any", false, false, false, 17)), "html", null, true);
                yield "\" type=\"button\" class=\"ui button primary\" ";
                if ((($tmp =  !$this->extensions['Sylius\RefundPlugin\Twig\OrderRefundsExtension']->canUnitBeRefunded(CoreExtension::getAttribute($this->env, $this->source, $context["unit"], "id", [], "any", false, false, false, 17), Twig\Extension\CoreExtension::constant("Sylius\\RefundPlugin\\Model\\RefundType::ORDER_ITEM_UNIT"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "disabled";
                }
                yield ">
                    ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.refund"), "html", null, true);
                yield "
                </button>
            </td>
        </tr>
    ";
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
            unset($context['_seq'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusRefundPlugin/_items.html.twig";
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
        return array (  120 => 18,  112 => 17,  108 => 15,  106 => 14,  102 => 12,  100 => 11,  96 => 9,  94 => 8,  89 => 5,  86 => 4,  83 => 3,  65 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for item in order.items %}
    {% for unit in item.units %}
        {% set variant = item.variant %}
        {% set product = variant.product %}

        <tr class=\"unit\">
            <td class=\"single line\">
                {% include '@SyliusAdmin/Product/_info.html.twig' %}
            </td>
            <td class=\"right aligned total\">
                {% include '@SyliusRefundPlugin/_unitTotal.html.twig' %}
            </td>
            <td class=\"aligned collapsing partial-refund\">
                {% include '@SyliusRefundPlugin/_unitInput.html.twig' %}
            </td>
            <td class=\"aligned collapsing\">
                <button data-refund=\"{{ unit_refund_left(unit.id, constant('Sylius\\\\RefundPlugin\\\\Model\\\\RefundType::ORDER_ITEM_UNIT'), unit.total) }}\" type=\"button\" class=\"ui button primary\" {% if not can_unit_be_refunded(unit.id, constant('Sylius\\\\RefundPlugin\\\\Model\\\\RefundType::ORDER_ITEM_UNIT')) %}disabled{% endif %}>
                    {{ 'sylius_refund.ui.refund'|trans }}
                </button>
            </td>
        </tr>
    {% endfor %}
{% endfor %}
", "@SyliusRefundPlugin/_items.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/_items.html.twig");
    }
}
