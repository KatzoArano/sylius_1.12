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

/* @SyliusShop/Product/Show/_association.html.twig */
class __TwigTemplate_c904add562d756f59b469ef7576c9a4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_association.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_association.html.twig"));

        // line 1
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new RuntimeError('Variable "product_association" does not exist.', 1, $this->source); })()), "associatedProducts", [], "any", false, false, false, 1), "empty", [], "method", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <h4 class=\"ui horizontal section divider header\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new RuntimeError('Variable "product_association" does not exist.', 2, $this->source); })()), "type", [], "any", false, false, false, 2), "name", [], "any", false, false, false, 2), "html", null, true);
            yield "</h4>
    <div id=\"sylius-product-association-";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new RuntimeError('Variable "product_association" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
            yield "\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-association", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new RuntimeError('Variable "product_association" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3));
            yield ">
    ";
            // line 4
            yield from $this->load("@SyliusShop/Product/_horizontalList.html.twig", 4)->unwrap()->yield(CoreExtension::merge($context, ["products" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new RuntimeError('Variable "product_association" does not exist.', 4, $this->source); })()), "associatedProducts", [], "any", false, false, false, 4)]));
            // line 5
            yield "    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusShop/Product/Show/_association.html.twig";
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
        return array (  63 => 5,  61 => 4,  55 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if not product_association.associatedProducts.empty() %}
    <h4 class=\"ui horizontal section divider header\">{{ product_association.type.name }}</h4>
    <div id=\"sylius-product-association-{{ product_association.type.name }}\" {{ sylius_test_html_attribute('product-association', product_association.type.name) }}>
    {% include '@SyliusShop/Product/_horizontalList.html.twig' with {'products': product_association.associatedProducts} %}
    </div>
{% endif %}
", "@SyliusShop/Product/Show/_association.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_association.html.twig");
    }
}
