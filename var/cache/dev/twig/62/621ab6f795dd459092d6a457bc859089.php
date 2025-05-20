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

/* @SyliusUi/Macro/sorting.html.twig */
class __TwigTemplate_917af788cfda1ed883550b0dfd052f34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/sorting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/sorting.html.twig"));

        // line 15
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_tableHeader($grid = null, $field = null, $attributes = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "grid" => $grid,
            "field" => $field,
            "attributes" => $attributes,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tableHeader"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tableHeader"));

            // line 2
            yield "    ";
            $macros["_v0"] = $this;
            // line 3
            yield "    ";
            $context["order"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 3, $this->source); })()), "getSortingOrder", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3)], "method", false, false, false, 3);
            // line 4
            yield "
    ";
            // line 5
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 5, $this->source); })()), "isSortedBy", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)], "method", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "        <th class=\"sortable sorted ";
                yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()) == "desc")) ? ("descending") : ("ascending"));
                yield " sylius-table-column-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
                yield "\">
            <a href=\"";
                // line 7
                yield $macros["_v0"]->getTemplateForMacro("macro_link", $context, 7, $this->getSourceContext())->macro_link(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 7, $this->source); })()), ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()) == "desc")) ? ("asc") : ("desc")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 7, $this->source); })()), "parameters", [], "any", false, false, false, 7), "all", [], "any", false, false, false, 7)]);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "label", [], "any", false, false, false, 7)), "html", null, true);
                yield "</a>
        </th>
    ";
            } else {
                // line 10
                yield "        <th class=\"sortable sylius-table-column-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
                yield "\">
            <a href=\"";
                // line 11
                yield $macros["_v0"]->getTemplateForMacro("macro_link", $context, 11, $this->getSourceContext())->macro_link(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 11, $this->source); })()), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 11, $this->source); })()), "parameters", [], "any", false, false, false, 11), "all", [], "any", false, false, false, 11)]);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 11, $this->source); })()), "label", [], "any", false, false, false, 11)), "html", null, true);
                yield "<i class=\"sort icon\"></i></a>
        </th>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function macro_link($fieldName = null, $attributes = null, $order = null, $parameters = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "fieldName" => $fieldName,
            "attributes" => $attributes,
            "order" => $order,
            "parameters" => $parameters,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link"));

            // line 17
            yield "    ";
            $context["params"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 17, $this->source); })()), "all", ["_route_params"], "method", false, false, false, 17), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 17, $this->source); })()));
            // line 18
            yield "    ";
            $context["sorting"] = ["sorting" => [ (string)(isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 18, $this->source); })()) => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })())]];
            // line 19
            yield "
    ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 20, $this->source); })()), "get", ["_route"], "method", false, false, false, 20), Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 20, $this->source); })()), (isset($context["sorting"]) || array_key_exists("sorting", $context) ? $context["sorting"] : (function () { throw new RuntimeError('Variable "sorting" does not exist.', 20, $this->source); })())), ["page" => 1])), "html", null, true);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusUi/Macro/sorting.html.twig";
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
        return array (  159 => 20,  156 => 19,  153 => 18,  150 => 17,  129 => 16,  111 => 11,  106 => 10,  98 => 7,  91 => 6,  89 => 5,  86 => 4,  83 => 3,  80 => 2,  60 => 1,  48 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro tableHeader(grid, field, attributes) %}
    {% from _self import link %}
    {% set order = grid.getSortingOrder(field.name) %}

    {% if grid.isSortedBy(field.name) %}
        <th class=\"sortable sorted {{ order == 'desc' ? 'descending' : 'ascending' }} sylius-table-column-{{ field.name }}\">
            <a href=\"{{ link(field.name, attributes, (order == 'desc' ? 'asc' : 'desc'), grid.parameters.all) }}\">{{ field.label|trans }}</a>
        </th>
    {% else %}
        <th class=\"sortable sylius-table-column-{{ field.name }}\">
            <a href=\"{{ link(field.name, attributes, order, grid.parameters.all) }}\">{{ field.label|trans }}<i class=\"sort icon\"></i></a>
        </th>
    {% endif %}
{% endmacro %}

{% macro link(fieldName, attributes, order, parameters) %}
    {% set params = attributes.all('_route_params')|merge(parameters) %}
    {% set sorting = {'sorting': {(fieldName): (order)}} %}

    {{ path(attributes.get('_route'), params|merge(sorting)|merge({'page': 1})) }}
{% endmacro %}
", "@SyliusUi/Macro/sorting.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/sorting.html.twig");
    }
}
