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

/* @SyliusUi/Grid/Filter/_content.html.twig */
class __TwigTemplate_3318c887aac94fb8f604beceb8061dad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Filter/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Filter/_content.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusUi/Macro/buttons.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 3, $this->source); })()), "enabledFilters", [], "any", false, false, false, 3)) > 0)) {
            // line 4
            yield "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title ";
            // line 6
            if ((($tmp =  !(null === (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 6, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\">
            <i class=\"dropdown icon\"></i>
            <i class=\"filter icon\"></i>
            ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.filters"), "html", null, true);
            yield "
        </div>
        <div class=\"content ";
            // line 11
            if ((($tmp =  !(null === (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 11, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\">
            <form method=\"get\" action=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "\" class=\"ui loadable form\" novalidate>
                <div class=\"sylius-filters\">
                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 14, $this->source); })()), "enabledFilters", [], "any", false, false, false, 14), function ($__filter__) use ($context, $macros) { $context["filter"] = $__filter__; return CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "enabled", [], "any", false, false, false, 14); }), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 15
                yield "                        <div class=\"sylius-filters__field\">
                            ";
                // line 16
                yield $this->env->getFunction('sylius_grid_render_filter')->getCallable()((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 16, $this->source); })()), $context["filter"]);
                yield "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "                </div>
                ";
            // line 20
            yield $macros["buttons"]->getTemplateForMacro("macro_filter", $context, 20, $this->getSourceContext())->macro_filter(...[]);
            yield "
                ";
            // line 21
            yield $macros["buttons"]->getTemplateForMacro("macro_resetFilters", $context, 21, $this->getSourceContext())->macro_resetFilters(...[(isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 21, $this->source); })())]);
            yield "
            </form>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusUi/Grid/Filter/_content.html.twig";
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
        return array (  106 => 21,  102 => 20,  99 => 19,  90 => 16,  87 => 15,  83 => 14,  78 => 12,  72 => 11,  67 => 9,  59 => 6,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% if definition.enabledFilters|length > 0 %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title {% if criteria is not null %}active{% endif %}\">
            <i class=\"dropdown icon\"></i>
            <i class=\"filter icon\"></i>
            {{ 'sylius.ui.filters'|trans }}
        </div>
        <div class=\"content {% if criteria is not null %}active{% endif %}\">
            <form method=\"get\" action=\"{{ path }}\" class=\"ui loadable form\" novalidate>
                <div class=\"sylius-filters\">
                    {% for filter in definition.enabledFilters|filter(filter => filter.enabled)|sort_by('position') %}
                        <div class=\"sylius-filters__field\">
                            {{ sylius_grid_render_filter(grid, filter) }}
                        </div>
                    {% endfor %}
                </div>
                {{ buttons.filter() }}
                {{ buttons.resetFilters(path) }}
            </form>
        </div>
    </div>
{% endif %}
", "@SyliusUi/Grid/Filter/_content.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Filter/_content.html.twig");
    }
}
