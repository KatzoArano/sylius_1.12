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

/* @SyliusTheme/Collector/theme.html.twig */
class __TwigTemplate_bbb444f36cb5056c6bccf5f1a3737ee4 extends Template
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

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusTheme/Collector/theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusTheme/Collector/theme.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        yield "    ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "themes", [], "any", false, false, false, 6))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@SyliusTheme/Collector/Icon/theme.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "usedTheme", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "usedTheme", [], "any", false, false, false, 9), Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "themes", [], "any", false, false, false, 9)))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "themes", [], "any", false, false, false, 9)))), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            yield "
        ";
            // line 12
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 13
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>All themes</b>
                <span class=\"sf-toolbar-status\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "themes", [], "any", false, false, false, 15)), "html", null, true);
                yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Used themes</b>
                <span class=\"sf-toolbar-status\">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "usedThemes", [], "any", false, false, false, 20)), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            yield "
        ";
            // line 24
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig");
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        yield "    <span class=\"label ";
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "usedThemes", [], "any", false, false, false, 29))) {
            yield "disabled";
        }
        yield "\">
        <span class=\"icon\">";
        // line 30
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@SyliusTheme/Collector/Icon/theme.svg");
        yield "</span>
        <strong>Themes</strong>
        <span class=\"count\">
            <span>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "usedThemes", [], "any", false, false, false, 33)), "html", null, true);
        yield "</span>
        </span>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        yield "    <h2>Theme Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "usedThemes", [], "any", false, false, false, 43)), "html", null, true);
        yield "</span>
            <span class=\"label\">Used themes</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "themes", [], "any", false, false, false, 48)), "html", null, true);
        yield "</span>
            <span class=\"label\">All themes</span>
        </div>
    </div>

    <h2>Themes List</h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Used <span class=\"badge\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "usedThemes", [], "any", false, false, false, 57)), "html", null, true);
        yield "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes used.
                </p>

                ";
        // line 64
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "usedThemes", [], "any", false, false, false, 64))) {
            // line 65
            yield "                    <div class=\"empty\">
                        <p>No themes were used.</p>
                    </div>
                ";
        } else {
            // line 69
            yield "                    ";
            yield $macros["helper"]->getTemplateForMacro("macro_render_table", $context, 69, $this->getSourceContext())->macro_render_table(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 69, $this->source); })()), "usedThemes", [], "any", false, false, false, 69)]);
            yield "
                ";
        }
        // line 71
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">All <span class=\"badge\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "themes", [], "any", false, false, false, 75)), "html", null, true);
        yield "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes found.
                </p>

                ";
        // line 82
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 82, $this->source); })()), "themes", [], "any", false, false, false, 82))) {
            // line 83
            yield "                    <div class=\"empty\">
                        <p>No themes were found.</p>
                    </div>
                ";
        } else {
            // line 87
            yield "                    ";
            yield $macros["helper"]->getTemplateForMacro("macro_render_table", $context, 87, $this->getSourceContext())->macro_render_table(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "themes", [], "any", false, false, false, 87)]);
            yield "
                ";
        }
        // line 89
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 94
    public function macro_render_table($themes = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "themes" => $themes,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 95
            yield "    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 104, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 105
                yield "            <tr>
                <td class=\"font-normal text-small text-bold\">";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 106), "html", null, true);
                yield "</td>
                <td class=\"font-normal text-small\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "path", [], "any", false, false, false, 107), "html", null, true);
                yield "</td>
                <td class=\"font-normal text-small\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, false, 108), "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "        </tbody>
    </table>
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
        return "@SyliusTheme/Collector/theme.html.twig";
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
        return array (  340 => 111,  331 => 108,  327 => 107,  323 => 106,  320 => 105,  316 => 104,  305 => 95,  287 => 94,  273 => 89,  267 => 87,  261 => 83,  259 => 82,  249 => 75,  243 => 71,  237 => 69,  231 => 65,  229 => 64,  219 => 57,  207 => 48,  199 => 43,  193 => 39,  180 => 38,  165 => 33,  159 => 30,  152 => 29,  139 => 28,  125 => 24,  122 => 23,  115 => 20,  107 => 15,  103 => 13,  101 => 12,  98 => 11,  92 => 9,  87 => 8,  84 => 7,  81 => 6,  68 => 5,  57 => 1,  55 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.themes is not empty %}
        {% set icon %}
            {{ include('@SyliusTheme/Collector/Icon/theme.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.usedTheme|default(collector.themes|length) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>All themes</b>
                <span class=\"sf-toolbar-status\">{{ collector.themes|length }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Used themes</b>
                <span class=\"sf-toolbar-status\">{{ collector.usedThemes|length }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig') }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {% if collector.usedThemes is empty %}disabled{% endif %}\">
        <span class=\"icon\">{{ include('@SyliusTheme/Collector/Icon/theme.svg') }}</span>
        <strong>Themes</strong>
        <span class=\"count\">
            <span>{{ collector.usedThemes|length }}</span>
        </span>
    </span>
{% endblock %}

{% block panel %}
    <h2>Theme Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.usedThemes|length }}</span>
            <span class=\"label\">Used themes</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.themes|length }}</span>
            <span class=\"label\">All themes</span>
        </div>
    </div>

    <h2>Themes List</h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Used <span class=\"badge\">{{ collector.usedThemes|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes used.
                </p>

                {% if collector.usedThemes is empty %}
                    <div class=\"empty\">
                        <p>No themes were used.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(collector.usedThemes) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">All <span class=\"badge\">{{ collector.themes|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes found.
                </p>

                {% if collector.themes is empty %}
                    <div class=\"empty\">
                        <p>No themes were found.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(collector.themes) }}
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% macro render_table(themes) %}
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        {% for theme in themes %}
            <tr>
                <td class=\"font-normal text-small text-bold\">{{ theme.name }}</td>
                <td class=\"font-normal text-small\">{{ theme.path }}</td>
                <td class=\"font-normal text-small\">{{ theme.description }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@SyliusTheme/Collector/theme.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/theme-bundle/src/Resources/views/Collector/theme.html.twig");
    }
}
