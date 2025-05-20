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

/* @SyliusAdmin/Product/Show/VariantItem/_item.html.twig */
class __TwigTemplate_eab280d100946690fc040c9ac50283fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/VariantItem/_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/VariantItem/_item.html.twig"));

        // line 1
        yield "<td>
    <div class=\"ui items\">
        <div class=\"item\">
            <div class=\"ui tiny image\">
                ";
        // line 5
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 5, $this->source); })()), "hasImages", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "                    ";
            yield from $this->load("@SyliusAdmin/Product/_mainImage.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["product" => (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 6, $this->source); })()), "filter" => "sylius_admin_product_large_thumbnail"]));
            // line 7
            yield "                ";
        } else {
            // line 8
            yield "                    ";
            yield from $this->load("@SyliusAdmin/Product/_mainImage.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "filter" => "sylius_admin_product_large_thumbnail"]));
            // line 9
            yield "                ";
        }
        // line 10
        yield "            </div>
            <div class=\"middle aligned content\">
                <div><strong class=\"variant-name\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        yield "</strong></div>
                <small class=\"gray text variant-code\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 13, $this->source); })()), "code", [], "any", false, false, false, 13), "html", null, true);
        yield "</small>
            </div>
        </div>
    </div>
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
        return "@SyliusAdmin/Product/Show/VariantItem/_item.html.twig";
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
        return array (  76 => 13,  72 => 12,  68 => 10,  65 => 9,  62 => 8,  59 => 7,  56 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<td>
    <div class=\"ui items\">
        <div class=\"item\">
            <div class=\"ui tiny image\">
                {% if variant.hasImages %}
                    {% include '@SyliusAdmin/Product/_mainImage.html.twig' with {'product': variant, 'filter': 'sylius_admin_product_large_thumbnail'} %}
                {% else %}
                    {% include '@SyliusAdmin/Product/_mainImage.html.twig' with {'product': product, 'filter': 'sylius_admin_product_large_thumbnail'} %}
                {% endif %}
            </div>
            <div class=\"middle aligned content\">
                <div><strong class=\"variant-name\">{{ variant.name }}</strong></div>
                <small class=\"gray text variant-code\">{{ variant.code }}</small>
            </div>
        </div>
    </div>
</td>
", "@SyliusAdmin/Product/Show/VariantItem/_item.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/VariantItem/_item.html.twig");
    }
}
