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

/* @SyliusUi/Macro/table.html.twig */
class __TwigTemplate_475f061cf5653b7670d3fd530900658d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/table.html.twig"));

        // line 23
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_headers($grid = null, $definition = null, $requestAttributes = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "grid" => $grid,
            "definition" => $definition,
            "requestAttributes" => $requestAttributes,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "headers"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "headers"));

            // line 2
            yield "    ";
            $macros["sorting"] = $this->load("@SyliusUi/Macro/sorting.html.twig", 2)->unwrap();
            // line 3
            yield "
    ";
            // line 4
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 4), "bulk", [], "any", true, true, false, 4) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 4, $this->source); })()), "getEnabledActions", ["bulk"], "method", false, false, false, 4)) > 0))) {
                // line 5
                yield "        <th class=\"center aligned\">
            <input data-js-bulk-checkboxes=\".bulk-select-checkbox\" data-js-bulk-buttons=\".sylius-grid-nav__bulk\" type=\"checkbox\">
        </th>
    ";
            }
            // line 9
            yield "
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 10, $this->source); })()), "fields", [], "any", false, false, false, 10), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 11
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "enabled", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 12
                    yield "            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 13
                        yield "                ";
                        yield $macros["sorting"]->getTemplateForMacro("macro_tableHeader", $context, 13, $this->getSourceContext())->macro_tableHeader(...[(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 13, $this->source); })()), $context["field"], (isset($context["requestAttributes"]) || array_key_exists("requestAttributes", $context) ? $context["requestAttributes"] : (function () { throw new RuntimeError('Variable "requestAttributes" does not exist.', 13, $this->source); })())]);
                        yield "
            ";
                    } else {
                        // line 15
                        yield "                <th class=\"sylius-table-column-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 15), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 15)), "html", null, true);
                        yield "</th>
            ";
                    }
                    // line 17
                    yield "        ";
                }
                // line 18
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 19), "item", [], "any", true, true, false, 19) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 19, $this->source); })()), "getEnabledActions", ["item"], "method", false, false, false, 19)) > 0))) {
                // line 20
                yield "        <th class=\"sylius-table-column-actions\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.actions"), "html", null, true);
                yield "</th>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function macro_row($grid = null, $definition = null, $row = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "grid" => $grid,
            "definition" => $definition,
            "row" => $row,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "row"));

            // line 25
            yield "    <tr class=\"item\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("row");
            yield ">
    ";
            // line 26
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 26), "bulk", [], "any", true, true, false, 26) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 26, $this->source); })()), "getEnabledActions", ["bulk"], "method", false, false, false, 26)) > 0))) {
                // line 27
                yield "        <td class=\"center aligned\"><input class=\"bulk-select-checkbox\" type=\"checkbox\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
                yield "\" /></td>
    ";
            }
            // line 29
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 29, $this->source); })()), "enabledFields", [], "any", false, false, false, 29), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 30
                yield "        <td>";
                yield $this->env->getFunction('sylius_grid_render_field')->getCallable()((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 30, $this->source); })()), $context["field"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 30, $this->source); })()));
                yield "</td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 32), "item", [], "any", true, true, false, 32) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 32, $this->source); })()), "getEnabledActions", ["item"], "method", false, false, false, 32)) > 0))) {
                // line 33
                yield "        <td ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("actions");
                yield ">
            <div class=\"ui buttons\">
                ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 35, $this->source); })()), "getEnabledActions", ["item"], "method", false, false, false, 35), "position"));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 36
                    yield "                    ";
                    yield $this->env->getFunction('sylius_grid_render_action')->getCallable()((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 36, $this->source); })()), $context["action"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 36, $this->source); })()));
                    yield "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                yield "            </div>
            ";
                // line 39
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 39), "subitem", [], "any", true, true, false, 39) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 39, $this->source); })()), "getEnabledActions", ["subitem"], "method", false, false, false, 39)) > 0))) {
                    // line 40
                    yield "            <div class=\"ui divider\"></div>
            <div class=\"ui buttons\">
                ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 42, $this->source); })()), "getEnabledActions", ["subitem"], "method", false, false, false, 42), "position"));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 43
                        yield "                    ";
                        yield $this->env->getFunction('sylius_grid_render_action')->getCallable()((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 43, $this->source); })()), $context["action"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 43, $this->source); })()));
                        yield "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    yield "            </div>
            ";
                }
                // line 47
                yield "        </td>
    ";
            }
            // line 49
            yield "    </tr>
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
        return "@SyliusUi/Macro/table.html.twig";
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
        return array (  248 => 49,  244 => 47,  240 => 45,  231 => 43,  227 => 42,  223 => 40,  221 => 39,  218 => 38,  209 => 36,  205 => 35,  199 => 33,  196 => 32,  187 => 30,  182 => 29,  176 => 27,  174 => 26,  169 => 25,  149 => 24,  133 => 20,  130 => 19,  124 => 18,  121 => 17,  113 => 15,  107 => 13,  104 => 12,  101 => 11,  97 => 10,  94 => 9,  88 => 5,  86 => 4,  83 => 3,  80 => 2,  60 => 1,  48 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro headers(grid, definition, requestAttributes) %}
    {% import '@SyliusUi/Macro/sorting.html.twig' as sorting %}

    {% if definition.actionGroups.bulk is defined and definition.getEnabledActions('bulk')|length > 0 %}
        <th class=\"center aligned\">
            <input data-js-bulk-checkboxes=\".bulk-select-checkbox\" data-js-bulk-buttons=\".sylius-grid-nav__bulk\" type=\"checkbox\">
        </th>
    {% endif %}

    {% for field in definition.fields|sort_by('position') %}
        {% if field.enabled %}
            {% if field.isSortable %}
                {{ sorting.tableHeader(grid, field, requestAttributes) }}
            {% else %}
                <th class=\"sylius-table-column-{{ field.name }}\">{{ field.label|trans }}</th>
            {% endif %}
        {% endif %}
    {% endfor %}
    {% if definition.actionGroups.item is defined and definition.getEnabledActions('item')|length > 0 %}
        <th class=\"sylius-table-column-actions\">{{ 'sylius.ui.actions'|trans }}</th>
    {% endif %}
{% endmacro %}

{% macro row(grid, definition, row) %}
    <tr class=\"item\" {{ sylius_test_html_attribute('row') }}>
    {% if definition.actionGroups.bulk is defined and definition.getEnabledActions('bulk')|length > 0 %}
        <td class=\"center aligned\"><input class=\"bulk-select-checkbox\" type=\"checkbox\" value=\"{{ row.id }}\" /></td>
    {% endif %}
    {% for field in definition.enabledFields|sort_by('position') %}
        <td>{{ sylius_grid_render_field(grid, field, row) }}</td>
    {% endfor %}
    {% if definition.actionGroups.item is defined and definition.getEnabledActions('item')|length > 0 %}
        <td {{ sylius_test_html_attribute('actions') }}>
            <div class=\"ui buttons\">
                {% for action in definition.getEnabledActions('item')|sort_by('position') %}
                    {{ sylius_grid_render_action(grid, action, row) }}
                {% endfor %}
            </div>
            {% if definition.actionGroups.subitem is defined and definition.getEnabledActions('subitem')|length > 0 %}
            <div class=\"ui divider\"></div>
            <div class=\"ui buttons\">
                {% for action in definition.getEnabledActions('subitem')|sort_by('position') %}
                    {{ sylius_grid_render_action(grid, action, row) }}
                {% endfor %}
            </div>
            {% endif %}
        </td>
    {% endif %}
    </tr>
{% endmacro %}
", "@SyliusUi/Macro/table.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/table.html.twig");
    }
}
