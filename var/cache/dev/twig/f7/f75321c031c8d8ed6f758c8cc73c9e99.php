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

/* @SyliusUi/DataCollector/templateBlock.html.twig */
class __TwigTemplate_46839cae5306a6b6aa2d37241d514cb5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/DataCollector/templateBlock.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/DataCollector/templateBlock.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <div class=\"sf-toolbar-block\">
        <a href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 5, $this->source); })()), "panel" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 5, $this->source); })())]), "html", null, true);
        yield "\">
            <div class=\"sf-toolbar-icon\">
                ";
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@SyliusUi/DataCollector/icon.svg");
        yield "
                <span class=\"sf-toolbar-value\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "numberOfRenderedEvents", [], "any", false, false, false, 8), "html", null, true);
        yield "</span>
            </div>
        </a>

        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Rendered events</b>
                <span class=\"sf-toolbar-status\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "numberOfRenderedEvents", [], "any", false, false, false, 15), "html", null, true);
        yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Rendered blocks</b>
                <span class=\"sf-toolbar-status\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 19, $this->source); })()), "numberOfRenderedBlocks", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        // line 26
        yield "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@SyliusUi/DataCollector/icon.svg");
        yield "
        </span>
        <strong>Template events</strong>
        <span class=\"count\">
            <span>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "numberOfRenderedEvents", [], "any", false, false, false, 32), "html", null, true);
        yield "</span>
        </span>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 37
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

        // line 38
        yield "    <h2>Template events metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.0f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "totalDuration", [], "any", false, false, false, 42) * 1000)), "html", null, true);
        yield " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.0f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "numberOfRenderedEvents", [], "any", false, false, false, 47)), "html", null, true);
        yield "</span>
            <span class=\"label\">Rendered events</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.0f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "numberOfRenderedBlocks", [], "any", false, false, false, 52)), "html", null, true);
        yield "</span>
            <span class=\"label\">Rendered blocks</span>
        </div>
    </div>

    <h2>Rendered template events</h2>

    ";
        // line 59
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "renderedEvents", [], "any", false, false, false, 59)) > 0)) {
            // line 60
            yield "        <table>
            <tr>
                <th>Event</th>
                <th>Duration</th>
                <th>Blocks</th>
            </tr>

            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "renderedEvents", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 68
                yield "                <tr>
                    <td>
                        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "names", [], "any", false, false, false, 70));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                    // line 71
                    yield "                            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<strong>";
                    }
                    // line 72
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield ", ";
                    }
                    // line 73
                    yield "                            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "</strong>";
                    }
                    // line 74
                    yield "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                yield "                    </td>
                    <td>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.0f", (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "time", [], "any", false, false, false, 76) * 1000)), "html", null, true);
                yield "ms</td>
                    <td>
                        ";
                // line 78
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "blocks", [], "any", false, false, false, 78)) > 0)) {
                    // line 79
                    yield "                            <table>
                                <tr>
                                    ";
                    // line 81
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "names", [], "any", false, false, false, 81)) > 1)) {
                        yield "<th>Origin event</th>";
                    }
                    // line 82
                    yield "                                    <th>Name</th>
                                    <th>Template</th>
                                    <th>Duration</th>
                                    <th>Priority</th>
                                </tr>
                                ";
                    // line 87
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "blocks", [], "any", false, false, false, 87));
                    foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                        // line 88
                        yield "                                    <tr>
                                        ";
                        // line 89
                        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "names", [], "any", false, false, false, 89)) > 1)) {
                            yield "<td>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["block"], "definition", [], "any", false, false, false, 89), "eventName", [], "any", false, false, false, 89), "html", null, true);
                            yield "</td>";
                        }
                        // line 90
                        yield "                                        <td>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["block"], "definition", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90), "html", null, true);
                        yield "</td>
                                        <td>";
                        // line 91
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["block"], "definition", [], "any", false, false, false, 91), "template", [], "any", false, false, false, 91), "html", null, true);
                        yield "</td>
                                        <td>";
                        // line 92
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.0f", (CoreExtension::getAttribute($this->env, $this->source, $context["block"], "time", [], "any", false, false, false, 92) * 1000)), "html", null, true);
                        yield "ms</td>
                                        <td>";
                        // line 93
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["block"], "definition", [], "any", false, false, false, 93), "priority", [], "any", false, false, false, 93), "html", null, true);
                        yield "</td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['block'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    yield "                            </table>
                        ";
                } else {
                    // line 98
                    yield "                            <i>no blocks rendered</i>
                        ";
                }
                // line 100
                yield "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "        </table>
    ";
        } else {
            // line 105
            yield "        <div class=\"empty\">
            No template events have been rendered.
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusUi/DataCollector/templateBlock.html.twig";
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
        return array (  353 => 105,  349 => 103,  341 => 100,  337 => 98,  333 => 96,  324 => 93,  320 => 92,  316 => 91,  311 => 90,  305 => 89,  302 => 88,  298 => 87,  291 => 82,  287 => 81,  283 => 79,  281 => 78,  276 => 76,  273 => 75,  259 => 74,  254 => 73,  248 => 72,  243 => 71,  226 => 70,  222 => 68,  218 => 67,  209 => 60,  207 => 59,  197 => 52,  189 => 47,  181 => 42,  175 => 38,  162 => 37,  147 => 32,  140 => 28,  136 => 26,  123 => 25,  107 => 19,  100 => 15,  90 => 8,  86 => 7,  81 => 5,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    <div class=\"sf-toolbar-block\">
        <a href=\"{{ path('_profiler', { 'token': token, 'panel': name }) }}\">
            <div class=\"sf-toolbar-icon\">
                {{ include('@SyliusUi/DataCollector/icon.svg') }}
                <span class=\"sf-toolbar-value\">{{ collector.numberOfRenderedEvents }}</span>
            </div>
        </a>

        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Rendered events</b>
                <span class=\"sf-toolbar-status\">{{ collector.numberOfRenderedEvents }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Rendered blocks</b>
                <span class=\"sf-toolbar-status\">{{ collector.numberOfRenderedBlocks }}</span>
            </div>
        </div>
    </div>
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">
            {{ include('@SyliusUi/DataCollector/icon.svg') }}
        </span>
        <strong>Template events</strong>
        <span class=\"count\">
            <span>{{ collector.numberOfRenderedEvents }}</span>
        </span>
    </span>
{% endblock %}

{% block panel %}
    <h2>Template events metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.totalDuration * 1000) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.numberOfRenderedEvents) }}</span>
            <span class=\"label\">Rendered events</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.numberOfRenderedBlocks) }}</span>
            <span class=\"label\">Rendered blocks</span>
        </div>
    </div>

    <h2>Rendered template events</h2>

    {% if collector.renderedEvents|length > 0 %}
        <table>
            <tr>
                <th>Event</th>
                <th>Duration</th>
                <th>Blocks</th>
            </tr>

            {% for event in collector.renderedEvents %}
                <tr>
                    <td>
                        {% for name in event.names %}
                            {% if loop.first %}<strong>{% endif %}
                            {{ name }}{% if not loop.last %}, {% endif %}
                            {% if loop.first %}</strong>{% endif %}
                        {% endfor %}
                    </td>
                    <td>{{ '%.0f'|format(event.time * 1000) }}ms</td>
                    <td>
                        {% if event.blocks|length > 0 %}
                            <table>
                                <tr>
                                    {% if event.names|length > 1 %}<th>Origin event</th>{% endif %}
                                    <th>Name</th>
                                    <th>Template</th>
                                    <th>Duration</th>
                                    <th>Priority</th>
                                </tr>
                                {% for block in event.blocks %}
                                    <tr>
                                        {% if event.names|length > 1 %}<td>{{ block.definition.eventName }}</td>{% endif %}
                                        <td>{{ block.definition.name }}</td>
                                        <td>{{ block.definition.template }}</td>
                                        <td>{{ '%.0f'|format(block.time * 1000) }}ms</td>
                                        <td>{{ block.definition.priority }}</td>
                                    </tr>
                                {% endfor %}
                            </table>
                        {% else %}
                            <i>no blocks rendered</i>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
        </table>
    {% else %}
        <div class=\"empty\">
            No template events have been rendered.
        </div>
    {% endif %}
{% endblock %}
", "@SyliusUi/DataCollector/templateBlock.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/DataCollector/templateBlock.html.twig");
    }
}
