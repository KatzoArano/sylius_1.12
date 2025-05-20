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

/* @SyliusShop/Product/Index/_pagination.html.twig */
class __TwigTemplate_399528f176721c3cfa38239887fcaa63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_pagination.html.twig"));

        // line 1
        $context["paginationLimits"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 1, $this->source); })()), "definition", [], "any", false, false, false, 1), "limits", [], "any", false, false, false, 1);
        // line 2
        yield "
<div class=\"ui right floated small header\">
    <div class=\"content\">
        <div class=\"ui inline dropdown sylius-paginate\">
            ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 6, $this->source); })()), "data", [], "any", false, false, false, 6), "maxPerPage", [], "any", false, false, false, 6), "html", null, true);
        yield "
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["paginationLimits"]) || array_key_exists("paginationLimits", $context) ? $context["paginationLimits"] : (function () { throw new RuntimeError('Variable "paginationLimits" does not exist.', 9, $this->source); })()), function ($__limit__) use ($context, $macros) { $context["limit"] = $__limit__; return ($context["limit"] != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9), "maxPerPage", [], "any", false, false, false, 9)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 10
            yield "                ";
            $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", ["_route"], "method", false, false, false, 10), Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "all", ["_route_params"], "method", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "all", [], "any", false, false, false, 10)), ["limit" => $context["limit"]]));
            // line 11
            yield "                <a class=\"item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limit"], "html", null, true);
            yield "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['limit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "            </div>
        </div>
    </div>
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
        return "@SyliusShop/Product/Index/_pagination.html.twig";
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
        return array (  82 => 13,  71 => 11,  68 => 10,  64 => 9,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set paginationLimits = (resources.definition.limits) %}

<div class=\"ui right floated small header\">
    <div class=\"content\">
        <div class=\"ui inline dropdown sylius-paginate\">
            {{ 'sylius.ui.show'|trans }} {{ resources.data.maxPerPage }}
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
            {% for limit in paginationLimits|filter(limit => limit != resources.data.maxPerPage) %}
                {% set path = path(app.request.attributes.get('_route'), app.request.attributes.all('_route_params')|merge(app.request.query.all)|merge({'limit': limit})) %}
                <a class=\"item\" href=\"{{ path }}\">{{ limit }}</a>
            {% endfor %}
            </div>
        </div>
    </div>
</div>
", "@SyliusShop/Product/Index/_pagination.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_pagination.html.twig");
    }
}
