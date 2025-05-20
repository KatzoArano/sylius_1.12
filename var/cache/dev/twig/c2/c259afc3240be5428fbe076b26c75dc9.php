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

/* @SyliusShop/Product/Show/_variantsPricing.html.twig */
class __TwigTemplate_28a5837b504ee6906a55b3ea516c331a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variantsPricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variantsPricing.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
<div id=\"sylius-variants-pricing\" data-unavailable-text=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.unavailable"), "html", null, true);
        yield "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 5
            yield "    ";
            $context["catalog_promotions"] = [];
            // line 6
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["price"], "applied_promotions", [], "any", true, true, false, 6)) {
                // line 7
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["price"], "applied_promotions", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                    // line 8
                    yield "            ";
                    $context["catalog_promotions"] = Twig\Extension\CoreExtension::merge((isset($context["catalog_promotions"]) || array_key_exists("catalog_promotions", $context) ? $context["catalog_promotions"] : (function () { throw new RuntimeError('Variable "catalog_promotions" does not exist.', 8, $this->source); })()), [["label" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 8), "description" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 8)]]);
                    // line 9
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                yield "    ";
            }
            // line 11
            yield "    <div ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["price"]);
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                yield "data-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "=\"";
                if ((($context["option"] == "value") || ($context["option"] == "original-price"))) {
                    yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 11, $this->getSourceContext())->macro_convertAndFormat(...[$context["value"]]);
                } elseif (($context["option"] == "applied_promotions")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["catalog_promotions"]) || array_key_exists("catalog_promotions", $context) ? $context["catalog_promotions"] : (function () { throw new RuntimeError('Variable "catalog_promotions" does not exist.', 11, $this->source); })())), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["value"], ["\"" => "'"]), "html", null, true);
                }
                yield "\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("variant-price");
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['option'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['price'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
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
        return "@SyliusShop/Product/Show/_variantsPricing.html.twig";
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
        return array (  111 => 13,  84 => 11,  81 => 10,  75 => 9,  72 => 8,  67 => 7,  64 => 6,  61 => 5,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<div id=\"sylius-variants-pricing\" data-unavailable-text=\"{{ 'sylius.ui.unavailable'|trans }}\">
{% for price in pricing %}
    {% set catalog_promotions = [] %}
    {% if price.applied_promotions is defined %}
        {% for promotion in price.applied_promotions %}
            {% set catalog_promotions = catalog_promotions|merge([{'label': promotion.name, 'description': promotion.description}]) %}
        {% endfor %}
    {% endif %}
    <div {% for option, value in price %}data-{{ option }}=\"{% if option == 'value' or option == 'original-price' %}{{ money.convertAndFormat(value) }}{% elseif option == 'applied_promotions' %}{{ catalog_promotions|json_encode }}{% else %}{{ value|replace({'\\\"': '\\''}) }}{% endif %}\" {{ sylius_test_html_attribute('variant-price') }}{% endfor %}></div>
{% endfor %}
</div>
", "@SyliusShop/Product/Show/_variantsPricing.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variantsPricing.html.twig");
    }
}
