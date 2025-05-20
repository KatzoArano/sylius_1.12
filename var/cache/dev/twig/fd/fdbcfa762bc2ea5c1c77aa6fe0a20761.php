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

/* @SyliusCore/Collector/sylius.html.twig */
class __TwigTemplate_f647c64be76821f82a99f490b66a7bda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Collector/sylius.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Collector/sylius.html.twig"));

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
        yield "    ";
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 5
            yield "        <img width=\"20\" height=\"30\" alt=\"Sylius\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAFS0lEQVRIx61WaUxcVRRmGEqtCyaaGBP/maYxsdX0B5RSQKBlhmFtC7QspbRoAdHQ2EhqK8u0oGUX2afDOkOHZXDCvradYbZSmFJAxEawGqppqv5qMBFm3lzPue8NDiCGgi85efe9e3K/833n3HOvg8MzPmf6JDxBe64TjtsWJnZF6GqUEfpaI52sjeM5/B/PMa2U79mdz8fxcWWRe+BQ2axQU0mE6goSZai/hP+DR6qdtgxw/t43vJDhcrpAo+n2zsD2/PxDN8SMqzyDCPtL/hCNVC2LAPDD8RY/9Im/I+NvCShAU0klSZho8RT2FM+6yTKImzxj2aMpi4Qri/wSTM1RgZoqEjJS/ZN4uu8V9E0aa9m8jMl3m6mz5IF2R6SupjBQU8kI1OXkUGv2X66N6SRAmddp8001KfeGjkgWwnU1w/i9u0vsuGmgpDEWqGB22AWifeR/u5wAu+Ujw6XEU3FlMVJV8jbOh9+sdsZ31y/TO0/q6/rijI1imkeddPMSgiQ0N6eMjRcw6WBLAniHqqtN1EH+AY08xtDAd+vP5XEBJuXMDLyL44v3OzcnYfI4q3Xx97deAmkeonQAZsbkRxvqL9NK07CVlgx52d+f6wggfMXPppefuRiAFZUgxthwnmNlFoCMQZoqBqL3xbnTdpUWt9WqS4Xyxrd0Tv9imPb6j8gqAMHgHaaVzGdO99BKSzG1rcikXJjY2uaFjUijBLlSAlhWFsoMxpH6WiXO7ekU87fdFS5NddEIVY8mXwBWcygdADEIFqCuJLHGxtRtdwbbYytXYJWIi3OsrCChFQCWoTMc2FZnsD0ZUz2U1ciTueeB1QOuApEVgwzh30zlD1oX9Em73/HfOYLqcQQZNowIujWdA59zIs0KK1qJQjZfDTjvPlS4eo3Y7gp+REfJunaxp1vMg/J1+tjUtmoubZLdgKO/P3wO9tWMHSsChWFBSePvyBPRBxiuz9c+xed8rmfFgMYi+zn3gXz+SUM93yYdRM3n2L+/hhXmi0C+FiFf79Dza1TOBnq6tyowuqv8Tduin052uEEk2ImnovX1n6TdU71Bo9PV8PYqP+NBaTudG1NQoPmnv+0I1Uqm7FkhKObrmE460fvrzC70uzwNAUZ1lUW/15y95K3IHhUq8wpPKUv2xxoamgWaCgLnDBOslSxCR1aeMcpEdbM6Z1tAInWFM1th8rN2FUjW5KsSfbyGi1kJ4SC7eECeScCYg01ZjJfi6lOv9i8Zn+4C8+Ghr1F7a6C2moTppPMnDPXilLHW3TZAQggfFFjLiuYLjhUC0sVQx9fLkqkMgrZchRsLtkQPtka0dPy2Hmy+YvZSXWN8+4qI4GYZCYI9c9xQOxg/foMuEm+UHeW6BWPHypavJxcmVG85JA7W0ASXmgZcfFtyphDEXZ5p4RhSY4HTEZyBb7NHa7bVuzOP+A+WkCB11ePYUdlXR/XSx1y3sNqB0YPyhL5OS1lFdpZSVmf7JPtQNlwYmdiDrQG2ArAFzV0hJp7tXxC/3iIi1KwA2OSzYlXCWZawUsLCNvYKFd5REuXRJMY7gWUjoFUmy2QA0IyMDwPDAO5WZCsIYFOzbi9BpE5cceRyC5k3BQaXFFTBU5ljA6KS4WUla7L71X/vMeIQusH8W6/1AytcaHPMKLsMcgRYwV3PKsKOrm8QUpW4trXqieutokBpasVrPs05866ydIyWcYVF0Nw2MgDCm5FHW7YFL5XQEwtwHb9bpRsfG2GqIhoBbGYfqEQrbGYCm9oKRnDsrbi6yrz+MQZuRyR4qOzb2j+/o13ho7vsneNvcYu7Y+75gz8AAAAASUVORK5CYII=\" />
        <span class=\"sf-toolbar-value\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "version", [], "any", false, false, false, 6), "html", null, true);
            yield "</span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        yield "    ";
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 9
            yield "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Sylius</b>
                <span><a href=\"https://sylius.com\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "version", [], "any", false, false, false, 12), "html", null, true);
            yield "</a></span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Extensions</b>
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "extensions", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 17
                yield "                    <span class=\"sf-toolbar-status sf-toolbar-status-";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "enabled", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green") : ("red"));
                yield "\">
                        ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 18), "html", null, true);
                yield "
                    </span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "            </div>
        </div>
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Currency</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                    <abbr title=\"Current ";
            // line 27
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "currencyCode", [], "any", false, false, false, 27) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "defaultCurrencyCode", [], "any", false, false, false, 27))) {
                yield "and default ";
            }
            yield "currency\">
                        ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "currencyCode", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "currencyCode", [], "any", false, false, false, 28), "Undefined")) : ("Undefined")), "html", null, true);
            yield "
                    </abbr>
                </span>
                ";
            // line 31
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "currencyCode", [], "any", false, false, false, 31) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "defaultCurrencyCode", [], "any", false, false, false, 31))) {
                // line 32
                yield "                    <span class=\"sf-toolbar-status\">
                        <abbr title=\"Default locale\">
                            ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "defaultCurrencyCode", [], "any", false, false, false, 34), "html", null, true);
                yield "
                        </abbr>
                    </span>
                ";
            }
            // line 38
            yield "            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Locale</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                    <abbr title=\"Current ";
            // line 42
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "localeCode", [], "any", false, false, false, 42) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "defaultLocaleCode", [], "any", false, false, false, 42))) {
                yield "and default ";
            }
            yield "locale\">
                        ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "localeCode", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "localeCode", [], "any", false, false, false, 43), "Undefined")) : ("Undefined")), "html", null, true);
            yield "
                    </abbr>
                </span>
                ";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "localeCode", [], "any", false, false, false, 46) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "defaultLocaleCode", [], "any", false, false, false, 46))) {
                // line 47
                yield "                    <span class=\"sf-toolbar-status\">
                        <abbr title=\"Default locale\">
                            ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "defaultLocaleCode", [], "any", false, false, false, 49), "html", null, true);
                yield "
                        </abbr>
                    </span>
                ";
            }
            // line 53
            yield "            </div>
        </div>
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Resources</b>
                <span><a href=\"https://docs.sylius.com/en/latest/\" rel=\"help\">Sylius Documentation</a></span>
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "
    ";
        // line 63
        yield from $this->load("@WebProfiler/Profiler/toolbar_item.html.twig", 63)->unwrap()->yield(CoreExtension::merge($context, ["link" => false, "additional_classes" => "sf-toolbar-block-right"]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusCore/Collector/sylius.html.twig";
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
        return array (  200 => 63,  197 => 62,  185 => 53,  178 => 49,  174 => 47,  172 => 46,  166 => 43,  160 => 42,  154 => 38,  147 => 34,  143 => 32,  141 => 31,  135 => 28,  129 => 27,  121 => 21,  112 => 18,  107 => 17,  103 => 16,  96 => 12,  91 => 9,  88 => 8,  82 => 6,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <img width=\"20\" height=\"30\" alt=\"Sylius\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAFS0lEQVRIx61WaUxcVRRmGEqtCyaaGBP/maYxsdX0B5RSQKBlhmFtC7QspbRoAdHQ2EhqK8u0oGUX2afDOkOHZXDCvradYbZSmFJAxEawGqppqv5qMBFm3lzPue8NDiCGgi85efe9e3K/833n3HOvg8MzPmf6JDxBe64TjtsWJnZF6GqUEfpaI52sjeM5/B/PMa2U79mdz8fxcWWRe+BQ2axQU0mE6goSZai/hP+DR6qdtgxw/t43vJDhcrpAo+n2zsD2/PxDN8SMqzyDCPtL/hCNVC2LAPDD8RY/9Im/I+NvCShAU0klSZho8RT2FM+6yTKImzxj2aMpi4Qri/wSTM1RgZoqEjJS/ZN4uu8V9E0aa9m8jMl3m6mz5IF2R6SupjBQU8kI1OXkUGv2X66N6SRAmddp8001KfeGjkgWwnU1w/i9u0vsuGmgpDEWqGB22AWifeR/u5wAu+Ujw6XEU3FlMVJV8jbOh9+sdsZ31y/TO0/q6/rijI1imkeddPMSgiQ0N6eMjRcw6WBLAniHqqtN1EH+AY08xtDAd+vP5XEBJuXMDLyL44v3OzcnYfI4q3Xx97deAmkeonQAZsbkRxvqL9NK07CVlgx52d+f6wggfMXPppefuRiAFZUgxthwnmNlFoCMQZoqBqL3xbnTdpUWt9WqS4Xyxrd0Tv9imPb6j8gqAMHgHaaVzGdO99BKSzG1rcikXJjY2uaFjUijBLlSAlhWFsoMxpH6WiXO7ekU87fdFS5NddEIVY8mXwBWcygdADEIFqCuJLHGxtRtdwbbYytXYJWIi3OsrCChFQCWoTMc2FZnsD0ZUz2U1ciTueeB1QOuApEVgwzh30zlD1oX9Em73/HfOYLqcQQZNowIujWdA59zIs0KK1qJQjZfDTjvPlS4eo3Y7gp+REfJunaxp1vMg/J1+tjUtmoubZLdgKO/P3wO9tWMHSsChWFBSePvyBPRBxiuz9c+xed8rmfFgMYi+zn3gXz+SUM93yYdRM3n2L+/hhXmi0C+FiFf79Dza1TOBnq6tyowuqv8Tduin052uEEk2ImnovX1n6TdU71Bo9PV8PYqP+NBaTudG1NQoPmnv+0I1Uqm7FkhKObrmE460fvrzC70uzwNAUZ1lUW/15y95K3IHhUq8wpPKUv2xxoamgWaCgLnDBOslSxCR1aeMcpEdbM6Z1tAInWFM1th8rN2FUjW5KsSfbyGi1kJ4SC7eECeScCYg01ZjJfi6lOv9i8Zn+4C8+Ghr1F7a6C2moTppPMnDPXilLHW3TZAQggfFFjLiuYLjhUC0sVQx9fLkqkMgrZchRsLtkQPtka0dPy2Hmy+YvZSXWN8+4qI4GYZCYI9c9xQOxg/foMuEm+UHeW6BWPHypavJxcmVG85JA7W0ASXmgZcfFtyphDEXZ5p4RhSY4HTEZyBb7NHa7bVuzOP+A+WkCB11ePYUdlXR/XSx1y3sNqB0YPyhL5OS1lFdpZSVmf7JPtQNlwYmdiDrQG2ArAFzV0hJp7tXxC/3iIi1KwA2OSzYlXCWZawUsLCNvYKFd5REuXRJMY7gWUjoFUmy2QA0IyMDwPDAO5WZCsIYFOzbi9BpE5cceRyC5k3BQaXFFTBU5ljA6KS4WUla7L71X/vMeIQusH8W6/1AytcaHPMKLsMcgRYwV3PKsKOrm8QUpW4trXqieutokBpasVrPs05866ydIyWcYVF0Nw2MgDCm5FHW7YFL5XQEwtwHb9bpRsfG2GqIhoBbGYfqEQrbGYCm9oKRnDsrbi6yrz+MQZuRyR4qOzb2j+/o13ho7vsneNvcYu7Y+75gz8AAAAASUVORK5CYII=\" />
        <span class=\"sf-toolbar-value\">{{ collector.version }}</span>
    {% endset %}
    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Sylius</b>
                <span><a href=\"https://sylius.com\">{{ collector.version }}</a></span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Extensions</b>
                {% for extension in collector.extensions %}
                    <span class=\"sf-toolbar-status sf-toolbar-status-{{ extension.enabled ? 'green' : 'red' }}\">
                        {{ extension.name }}
                    </span>
                {% endfor %}
            </div>
        </div>
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Currency</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                    <abbr title=\"Current {% if collector.currencyCode == collector.defaultCurrencyCode %}and default {% endif %}currency\">
                        {{ collector.currencyCode|default('Undefined') }}
                    </abbr>
                </span>
                {% if collector.currencyCode != collector.defaultCurrencyCode %}
                    <span class=\"sf-toolbar-status\">
                        <abbr title=\"Default locale\">
                            {{ collector.defaultCurrencyCode }}
                        </abbr>
                    </span>
                {% endif %}
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Locale</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                    <abbr title=\"Current {% if collector.localeCode == collector.defaultLocaleCode %}and default {% endif %}locale\">
                        {{ collector.localeCode|default('Undefined') }}
                    </abbr>
                </span>
                {% if collector.localeCode != collector.defaultLocaleCode %}
                    <span class=\"sf-toolbar-status\">
                        <abbr title=\"Default locale\">
                            {{ collector.defaultLocaleCode }}
                        </abbr>
                    </span>
                {% endif %}
            </div>
        </div>
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Resources</b>
                <span><a href=\"https://docs.sylius.com/en/latest/\" rel=\"help\">Sylius Documentation</a></span>
            </div>
        </div>
    {% endset %}

    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with {'link': false, additional_classes: 'sf-toolbar-block-right'} %}
{% endblock %}
", "@SyliusCore/Collector/sylius.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/views/Collector/sylius.html.twig");
    }
}
