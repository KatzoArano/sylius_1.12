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

/* @SyliusShop/Product/Show/_variantSelection.html.twig */
class __TwigTemplate_0ae2ebd3c2e6f57896cbf04b47336860 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variantSelection.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variantSelection.html.twig"));

        // line 1
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "isConfigurable", [], "method", false, false, false, 1) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "getVariantSelectionMethod", [], "method", false, false, false, 1) == "match")) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "enabledVariants", [], "any", false, false, false, 1), "empty", [], "method", false, false, false, 1))) {
            // line 2
            yield "    ";
            yield from $this->load("@SyliusShop/Product/Show/_variantsPricing.html.twig", 2)->unwrap()->yield(CoreExtension::merge($context, ["pricing" => $this->env->getFunction('sylius_product_variant_prices')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 2, $this->source); })()), "channel", [], "any", false, false, false, 2)), "variants" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "enabledVariants", [], "any", false, false, false, 2)]));
        }
        // line 4
        yield "
";
        // line 5
        yield from $this->load("@SyliusShop/Product/Show/_inventory.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "
<div class=\"ui hidden divider\"></div>
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
        return "@SyliusShop/Product/Show/_variantSelection.html.twig";
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
        return array (  59 => 6,  57 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if product.isConfigurable() and product.getVariantSelectionMethod() == 'match' and not product.enabledVariants.empty() %}
    {% include '@SyliusShop/Product/Show/_variantsPricing.html.twig' with {'pricing': sylius_product_variant_prices(product, sylius.channel), 'variants': product.enabledVariants} %}
{% endif %}

{% include '@SyliusShop/Product/Show/_inventory.html.twig' %}

<div class=\"ui hidden divider\"></div>
", "@SyliusShop/Product/Show/_variantSelection.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variantSelection.html.twig");
    }
}
