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

/* @SyliusShop/Common/Order/Table/_item.html.twig */
class __TwigTemplate_63bb06a776bf60efa9edabcb78deb069 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_item.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["unitPromotionAdjustment"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT");
        // line 4
        $context["unitPromotions"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "units", [], "any", false, false, false, 4), "first", [], "any", false, false, false, 4), "adjustments", [(isset($context["unitPromotionAdjustment"]) || array_key_exists("unitPromotionAdjustment", $context) ? $context["unitPromotionAdjustment"] : (function () { throw new RuntimeError('Variable "unitPromotionAdjustment" does not exist.', 4, $this->source); })())], "method", false, false, false, 4);
        // line 5
        yield "<tr ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-row", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "productName", [], "any", false, false, false, 5));
        yield ">
    <td>
        ";
        // line 7
        yield from $this->load("@SyliusShop/Product/_info.html.twig", 7)->unwrap()->yield(CoreExtension::merge($context, ["variant" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "variant", [], "any", false, false, false, 7)]));
        // line 8
        yield "    </td>
    <td>
        ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "unitPrice", [], "any", false, false, false, 10) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "discountedUnitPrice", [], "any", false, false, false, 10))) {
            // line 11
            yield "            <span class=\"old-price\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-old-price", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "productName", [], "any", false, false, false, 11));
            yield ">";
            yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 11, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "unitPrice", [], "any", false, false, false, 11)]);
            yield "</span>
        ";
        }
        // line 13
        yield "        <span class=\"sylius-unit-price\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-unit-price", CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "productName", [], "any", false, false, false, 13));
        yield ">";
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 13, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "discountedUnitPrice", [], "any", false, false, false, 13)]);
        yield "
            ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "unitPrice", [], "any", false, false, false, 14) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "discountedUnitPrice", [], "any", false, false, false, 14))) {
            // line 15
            yield "            <i id=\"item-promotion-details\" class=\"question circle icon unit-promotions popup-js\"
               data-html=\"";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["unitPromotions"]) || array_key_exists("unitPromotions", $context) ? $context["unitPromotions"] : (function () { throw new RuntimeError('Variable "unitPromotions" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                yield "<div>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "label", [], "any", false, false, false, 16), "html", null, true);
                yield ": ";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 16, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "amount", [], "any", false, false, false, 16)]);
                yield "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\">
            </i>
            ";
        }
        // line 19
        yield "        </span>
    </td>
    <td class=\"center aligned\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "quantity", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
    <td class=\"right aligned\">";
        // line 22
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 22, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "subtotal", [], "any", false, false, false, 22)]);
        yield "</td>
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
        return "@SyliusShop/Common/Order/Table/_item.html.twig";
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
        return array (  116 => 22,  112 => 21,  108 => 19,  91 => 16,  88 => 15,  86 => 14,  79 => 13,  71 => 11,  69 => 10,  65 => 8,  63 => 7,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set unitPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT') %}
{% set unitPromotions = item.units.first.adjustments(unitPromotionAdjustment) %}
<tr {{ sylius_test_html_attribute('product-row', item.productName) }}>
    <td>
        {% include '@SyliusShop/Product/_info.html.twig' with {'variant': item.variant} %}
    </td>
    <td>
        {% if item.unitPrice != item.discountedUnitPrice %}
            <span class=\"old-price\" {{ sylius_test_html_attribute('product-old-price', item.productName) }}>{{ money.convertAndFormat(item.unitPrice) }}</span>
        {% endif %}
        <span class=\"sylius-unit-price\" {{ sylius_test_html_attribute('product-unit-price', item.productName) }}>{{ money.convertAndFormat(item.discountedUnitPrice) }}
            {% if item.unitPrice != item.discountedUnitPrice %}
            <i id=\"item-promotion-details\" class=\"question circle icon unit-promotions popup-js\"
               data-html=\"{% for promotion in unitPromotions %}<div>{{ promotion.label }}: {{ money.convertAndFormat(promotion.amount) }}</div>{% endfor %}\">
            </i>
            {% endif %}
        </span>
    </td>
    <td class=\"center aligned\">{{ item.quantity }}</td>
    <td class=\"right aligned\">{{ money.convertAndFormat(item.subtotal) }}</td>
</tr>
", "@SyliusShop/Common/Order/Table/_item.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_item.html.twig");
    }
}
