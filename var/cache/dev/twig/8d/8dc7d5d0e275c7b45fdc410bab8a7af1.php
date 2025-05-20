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

/* @SyliusUi/Grid/Body/_navigation.html.twig */
class __TwigTemplate_a5f42d5fa7d289cddc91799357b1d00f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Body/_navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Body/_navigation.html.twig"));

        // line 1
        $macros["pagination"] = $this->macros["pagination"] = $this->load("@SyliusUi/Macro/pagination.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"sylius-grid-nav\">
    ";
        // line 4
        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })())) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 4), "bulk", [], "any", true, true, false, 4)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 4, $this->source); })()), "getEnabledActions", ["bulk"], "method", false, false, false, 4)) > 0))) {
            // line 5
            yield "        <div class=\"sylius-grid-nav__bulk\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 6, $this->source); })()), "getEnabledActions", ["bulk"], "method", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 7
                yield "                ";
                yield $this->env->getFunction('sylius_grid_render_bulk_action')->getCallable()((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 7, $this->source); })()), $context["action"], null);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            yield "        </div>
    ";
        }
        // line 11
        yield "    <div class=\"sylius-grid-nav__pagination\">
        ";
        // line 12
        yield $macros["pagination"]->getTemplateForMacro("macro_simple", $context, 12, $this->getSourceContext())->macro_simple(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })())]);
        yield "
    </div>
    ";
        // line 14
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 14, $this->source); })()), "limits", [], "any", false, false, false, 14)) > 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })())) > min(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 14, $this->source); })()), "limits", [], "any", false, false, false, 14))))) {
            // line 15
            yield "        <div class=\"sylius-grid-nav__perpage\">
            <div class=\"ui fluid one menu sylius-paginate\">
                ";
            // line 17
            yield $macros["pagination"]->getTemplateForMacro("macro_perPage", $context, 17, $this->getSourceContext())->macro_perPage(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 17, $this->source); })()), "limits", [], "any", false, false, false, 17)]);
            yield "
            </div>
        </div>
    ";
        }
        // line 21
        yield "</div>
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
        return "@SyliusUi/Grid/Body/_navigation.html.twig";
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
        return array (  97 => 21,  90 => 17,  86 => 15,  84 => 14,  79 => 12,  76 => 11,  72 => 9,  63 => 7,  59 => 6,  56 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/pagination.html.twig' as pagination %}

<div class=\"sylius-grid-nav\">
    {% if data|length > 0 and definition.actionGroups.bulk is defined and definition.getEnabledActions('bulk')|length > 0 %}
        <div class=\"sylius-grid-nav__bulk\">
            {% for action in definition.getEnabledActions('bulk') %}
                {{ sylius_grid_render_bulk_action(grid, action, null) }}
            {% endfor %}
        </div>
    {% endif %}
    <div class=\"sylius-grid-nav__pagination\">
        {{ pagination.simple(data) }}
    </div>
    {% if definition.limits|length > 1 and data|length > min(definition.limits) %}
        <div class=\"sylius-grid-nav__perpage\">
            <div class=\"ui fluid one menu sylius-paginate\">
                {{ pagination.perPage(data, definition.limits) }}
            </div>
        </div>
    {% endif %}
</div>
", "@SyliusUi/Grid/Body/_navigation.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Body/_navigation.html.twig");
    }
}
