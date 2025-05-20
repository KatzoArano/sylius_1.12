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

/* @SyliusShop/Product/Index/_search.html.twig */
class __TwigTemplate_8e03fd84039ef8c5a584aa9f395851ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_search.html.twig"));

        // line 1
        yield "<div class=\"ui segment\">
    <form method=\"get\" action=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", ["slug"], "method", false, false, false, 2)]), "html", null, true);
        yield "\" class=\"ui loadable form\">
        <div class=\"ui stackable grid\" id=\"searchbar\">
            <div class=\"column\" id=\"searchbarTextField\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 5, $this->source); })()), "definition", [], "any", false, false, false, 5), "enabledFilters", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 6
            yield "                    ";
            yield $this->env->getFunction('sylius_grid_render_filter')->getCallable()((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 6, $this->source); })()), $context["filter"]);
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "            </div>
            <div class=\"right aligned column\" id=\"searchbarButtons\">
                <div class=\"ui buttons\">
                    <button type=\"submit\" class=\"ui primary icon labeled button\" ";
        // line 11
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("search");
        yield "><i class=\"search icon\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.search"), "html", null, true);
        yield "</button>
                    <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", ["slug"], "method", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"ui negative icon labeled button\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("clear");
        yield ">
                        <i class=\"cancel icon\"></i> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.clear"), "html", null, true);
        yield "
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
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
        return "@SyliusShop/Product/Index/_search.html.twig";
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
        return array (  87 => 13,  81 => 12,  75 => 11,  70 => 8,  61 => 6,  57 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui segment\">
    <form method=\"get\" action=\"{{ path('sylius_shop_product_index', {'slug': app.request.attributes.get('slug')}) }}\" class=\"ui loadable form\">
        <div class=\"ui stackable grid\" id=\"searchbar\">
            <div class=\"column\" id=\"searchbarTextField\">
                {% for filter in products.definition.enabledFilters %}
                    {{ sylius_grid_render_filter(products, filter) }}
                {% endfor %}
            </div>
            <div class=\"right aligned column\" id=\"searchbarButtons\">
                <div class=\"ui buttons\">
                    <button type=\"submit\" class=\"ui primary icon labeled button\" {{ sylius_test_html_attribute('search') }}><i class=\"search icon\"></i> {{ 'sylius.ui.search'|trans }}</button>
                    <a href=\"{{ path('sylius_shop_product_index', {'slug': app.request.attributes.get('slug')}) }}\" class=\"ui negative icon labeled button\" {{ sylius_test_html_attribute('clear') }}>
                        <i class=\"cancel icon\"></i> {{ 'sylius.ui.clear'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
", "@SyliusShop/Product/Index/_search.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_search.html.twig");
    }
}
