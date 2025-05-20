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

/* @SyliusShop/Common/Order/Table/_promotion.html.twig */
class __TwigTemplate_cbb6aa54c3ce608a71f14db1eedc9554 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_promotion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_promotion.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["orderPromotionAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        $context["orderPromotions"] = $this->env->getFunction('sylius_aggregate_adjustments')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "getAdjustmentsRecursively", [(isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "orderPromotionAdjustment" does not exist.', 4, $this->source); })())], "method", false, false, false, 4));
        // line 5
        yield "
";
        // line 6
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new RuntimeError('Variable "orderPromotions" does not exist.', 6, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "    <td colspan=\"2\" id=\"promotion-discounts\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("promotion-discounts");
            yield ">
        <div class=\"ui relaxed divided list\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new RuntimeError('Variable "orderPromotions" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 10
                yield "                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "</div>
                        <div class=\"description\">
                            ";
                // line 14
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 14, $this->getSourceContext())->macro_convertAndFormat(...[$context["amount"]]);
                yield "
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['amount'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "        </div>
    </td>
";
        }
        // line 22
        yield "<td colspan=\"";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new RuntimeError('Variable "orderPromotions" does not exist.', 22, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "2";
        } else {
            yield "4";
        }
        yield "\" id=\"promotion-total\" class=\"right aligned\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("promotion-total");
        yield ">
    ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.promotion_total"), "html", null, true);
        yield ":
    ";
        // line 24
        yield $macros["money"]->getTemplateForMacro("macro_format", $context, 24, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "orderPromotionTotal", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "currencyCode", [], "any", false, false, false, 24)]);
        yield "
</td>
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
        return "@SyliusShop/Common/Order/Table/_promotion.html.twig";
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
        return array (  112 => 24,  108 => 23,  97 => 22,  92 => 19,  81 => 14,  76 => 12,  72 => 10,  68 => 9,  62 => 7,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set orderPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderPromotionAdjustment)) %}

{% if not orderPromotions is empty %}
    <td colspan=\"2\" id=\"promotion-discounts\" {{ sylius_test_html_attribute('promotion-discounts') }}>
        <div class=\"ui relaxed divided list\">
            {% for label, amount in orderPromotions %}
                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">{{ label }}</div>
                        <div class=\"description\">
                            {{ money.convertAndFormat(amount) }}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </td>
{% endif %}
<td colspan=\"{% if not orderPromotions is empty %}2{% else %}4{% endif %}\" id=\"promotion-total\" class=\"right aligned\" {{ sylius_test_html_attribute('promotion-total') }}>
    {{ 'sylius.ui.promotion_total'|trans }}:
    {{ money.format(order.orderPromotionTotal, order.currencyCode) }}
</td>
", "@SyliusShop/Common/Order/Table/_promotion.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_promotion.html.twig");
    }
}
