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

/* @SyliusShop/Product/_mainImage.html.twig */
class __TwigTemplate_4b1379e5c4881f3d4aca9ef1bae0a958 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_mainImage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_mainImage.html.twig"));

        // line 1
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "imagesByType", ["thumbnail"], "method", false, false, false, 1))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            $context["path"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "imagesByType", ["thumbnail"], "method", false, false, false, 2), "first", [], "any", false, false, false, 2), "path", [], "any", false, false, false, 2), ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 2, $this->source); })()), "sylius_shop_product_thumbnail")) : ("sylius_shop_product_thumbnail")));
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 3
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "images", [], "any", false, false, false, 3), "first", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            $context["path"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "images", [], "any", false, false, false, 4), "first", [], "any", false, false, false, 4), "path", [], "any", false, false, false, 4), ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 4, $this->source); })()), "sylius_shop_product_thumbnail")) : ("sylius_shop_product_thumbnail")));
        } else {
            // line 6
            yield "    ";
            if ((($tmp = (isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "        ";
                $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/200x200.png", "shop");
                // line 8
                yield "    ";
            } else {
                // line 9
                yield "        ";
                $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop/img/200x200.png");
                // line 10
                yield "    ";
            }
        }
        // line 12
        yield "
<img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("main-image");
        yield " alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "\" class=\"ui bordered image\" />
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
        return "@SyliusShop/Product/_mainImage.html.twig";
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
        return array (  78 => 13,  75 => 12,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if product.imagesByType('thumbnail') is not empty %}
    {% set path = product.imagesByType('thumbnail').first.path|imagine_filter(filter|default('sylius_shop_product_thumbnail')) %}
{% elseif product.images.first %}
    {% set path = product.images.first.path|imagine_filter(filter|default('sylius_shop_product_thumbnail')) %}
{% else %}
    {% if use_webpack %}
        {% set path = asset('build/shop/images/200x200.png', 'shop') %}
    {% else %}
        {% set path = asset('assets/shop/img/200x200.png') %}
    {% endif %}
{% endif %}

<img src=\"{{ path }}\" {{ sylius_test_html_attribute('main-image') }} alt=\"{{ product.name }}\" class=\"ui bordered image\" />
", "@SyliusShop/Product/_mainImage.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_mainImage.html.twig");
    }
}
