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

/* @SyliusAdmin/Order/Show/Summary/_totalsPromotions.html.twig */
class __TwigTemplate_a18f29f8417ff949b0dea64623c0ae78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Summary/_totalsPromotions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Summary/_totalsPromotions.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["orderPromotionAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        $context["unitPromotionAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT");
        // line 5
        yield "
<tr>
    <td colspan=\"5\" id=\"promotion-discounts\" class=\"promotion-disabled\">
        ";
        // line 8
        $context["orderPromotionAdjustments"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "getAdjustmentsRecursively", [(isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "orderPromotionAdjustment" does not exist.', 8, $this->source); })())], "method", false, false, false, 8));
        // line 9
        yield "        ";
        $context["unitPromotionAdjustments"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "getAdjustmentsRecursively", [(isset($context["unitPromotionAdjustment"]) || array_key_exists("unitPromotionAdjustment", $context) ? $context["unitPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "unitPromotionAdjustment" does not exist.', 9, $this->source); })())], "method", false, false, false, 9));
        // line 10
        yield "        ";
        $context["promotionAdjustments"] = Twig\Extension\CoreExtension::merge((isset($context["orderPromotionAdjustments"]) || array_key_exists("orderPromotionAdjustments", $context) ? $context["orderPromotionAdjustments"] : (function () { throw new RuntimeError('Variable "orderPromotionAdjustments" does not exist.', 10, $this->source); })()), (isset($context["unitPromotionAdjustments"]) || array_key_exists("unitPromotionAdjustments", $context) ? $context["unitPromotionAdjustments"] : (function () { throw new RuntimeError('Variable "unitPromotionAdjustments" does not exist.', 10, $this->source); })()));
        // line 11
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["promotionAdjustments"]) || array_key_exists("promotionAdjustments", $context) ? $context["promotionAdjustments"] : (function () { throw new RuntimeError('Variable "promotionAdjustments" does not exist.', 11, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "            <div class=\"ui relaxed divided list\">
                <div class=\"item\"><strong>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.promotions"), "html", null, true);
            yield ":</strong></div>
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotionAdjustments"]) || array_key_exists("promotionAdjustments", $context) ? $context["promotionAdjustments"] : (function () { throw new RuntimeError('Variable "promotionAdjustments" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 15
                yield "                    <div class=\"item\">
                        <div class=\"right floated\">";
                // line 16
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 16, $this->getSourceContext())->macro_format(...[$context["amount"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "currencyCode", [], "any", false, false, false, 16)]);
                yield "</div>
                        <div class=\"content\"><strong>";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "</strong>:</div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['amount'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "            </div>
        ";
        } else {
            // line 22
            yield "            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_promotion"), "html", null, true);
            yield ".</p>
        ";
        }
        // line 24
        yield "    </td>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned promotion-disabled\">
        ";
        // line 26
        $context["orderPromotionTotal"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "getAdjustmentsTotalRecursively", [(isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "orderPromotionAdjustment" does not exist.', 26, $this->source); })())], "method", false, false, false, 26);
        // line 27
        yield "        ";
        $context["unitPromotionTotal"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 27, $this->source); })()), "getAdjustmentsTotalRecursively", [(isset($context["unitPromotionAdjustment"]) || array_key_exists("unitPromotionAdjustment", $context) ? $context["unitPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "unitPromotionAdjustment" does not exist.', 27, $this->source); })())], "method", false, false, false, 27);
        // line 28
        yield "        <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.promotion_total"), "html", null, true);
        yield "</strong>:
        ";
        // line 29
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 29, $this->getSourceContext())->macro_format(...[((isset($context["orderPromotionTotal"]) || array_key_exists("orderPromotionTotal", $context) ? $context["orderPromotionTotal"] : (function () { throw new RuntimeError('Variable "orderPromotionTotal" does not exist.', 29, $this->source); })()) + (isset($context["unitPromotionTotal"]) || array_key_exists("unitPromotionTotal", $context) ? $context["unitPromotionTotal"] : (function () { throw new RuntimeError('Variable "unitPromotionTotal" does not exist.', 29, $this->source); })())), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "currencyCode", [], "any", false, false, false, 29)]);
        yield "
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
        return "@SyliusAdmin/Order/Show/Summary/_totalsPromotions.html.twig";
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
        return array (  124 => 29,  119 => 28,  116 => 27,  114 => 26,  110 => 24,  104 => 22,  100 => 20,  91 => 17,  87 => 16,  84 => 15,  80 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  62 => 8,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set unitPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT') %}

<tr>
    <td colspan=\"5\" id=\"promotion-discounts\" class=\"promotion-disabled\">
        {% set orderPromotionAdjustments = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderPromotionAdjustment)) %}
        {% set unitPromotionAdjustments = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(unitPromotionAdjustment)) %}
        {% set promotionAdjustments = orderPromotionAdjustments|merge(unitPromotionAdjustments) %}
        {% if not promotionAdjustments is empty %}
            <div class=\"ui relaxed divided list\">
                <div class=\"item\"><strong>{{ 'sylius.ui.promotions'|trans }}:</strong></div>
                {% for label, amount in promotionAdjustments %}
                    <div class=\"item\">
                        <div class=\"right floated\">{{ money.format(amount, order.currencyCode) }}</div>
                        <div class=\"content\"><strong>{{ label }}</strong>:</div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p>{{ 'sylius.ui.no_promotion'|trans }}.</p>
        {% endif %}
    </td>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned promotion-disabled\">
        {% set orderPromotionTotal = order.getAdjustmentsTotalRecursively(orderPromotionAdjustment) %}
        {% set unitPromotionTotal = order.getAdjustmentsTotalRecursively(unitPromotionAdjustment) %}
        <strong>{{ 'sylius.ui.promotion_total'|trans }}</strong>:
        {{ money.format(orderPromotionTotal + unitPromotionTotal, order.currencyCode) }}
    </td>
</tr>
", "@SyliusAdmin/Order/Show/Summary/_totalsPromotions.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Summary/_totalsPromotions.html.twig");
    }
}
