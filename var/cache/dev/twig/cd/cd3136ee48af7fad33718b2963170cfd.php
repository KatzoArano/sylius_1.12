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

/* @SyliusUi/Grid/_history.html.twig */
class __TwigTemplate_5e1fa06acfe3a6603d893ac99c5a377f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/_history.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/_history.html.twig"));

        // line 1
        $macros["table"] = $this->macros["table"] = $this->load("@SyliusUi/Macro/table.html.twig", 1)->unwrap();
        // line 2
        $macros["messages"] = $this->macros["messages"] = $this->load("@SyliusUi/Macro/messages.html.twig", 2)->unwrap();
        // line 3
        yield "
";
        // line 4
        $context["definition"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 4, $this->source); })()), "definition", [], "any", false, false, false, 4);
        // line 5
        $context["data"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5);
        // line 6
        yield "
";
        // line 7
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })())) > 0)) {
            // line 8
            yield "    <table class=\"ui stackable celled table\">
        <thead>
            <tr>
                ";
            // line 11
            yield $macros["table"]->getTemplateForMacro("macro_headers", $context, 11, $this->getSourceContext())->macro_headers(...[(isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 11, $this->source); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 11, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "attributes", [], "any", false, false, false, 11)]);
            yield "
            </tr>
        </thead>
        <tbody>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 16
                yield "                ";
                yield $macros["table"]->getTemplateForMacro("macro_row", $context, 16, $this->getSourceContext())->macro_row(...[(isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 16, $this->source); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 16, $this->source); })()), $context["row"]]);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "        </tbody>
    </table>
";
        } else {
            // line 21
            yield "    ";
            yield $macros["messages"]->getTemplateForMacro("macro_info", $context, 21, $this->getSourceContext())->macro_info(...["sylius.ui.no_results_to_display"]);
            yield "
";
        }
        // line 23
        yield "
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
        return "@SyliusUi/Grid/_history.html.twig";
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
        return array (  100 => 23,  94 => 21,  89 => 18,  80 => 16,  76 => 15,  69 => 11,  64 => 8,  62 => 7,  59 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/table.html.twig' as table %}
{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% set definition = resources.definition %}
{% set data = resources.data %}

{% if data|length > 0 %}
    <table class=\"ui stackable celled table\">
        <thead>
            <tr>
                {{ table.headers(resources, definition, app.request.attributes) }}
            </tr>
        </thead>
        <tbody>
            {% for row in data %}
                {{ table.row(resources, definition, row) }}
            {% endfor %}
        </tbody>
    </table>
{% else %}
    {{ messages.info('sylius.ui.no_results_to_display') }}
{% endif %}

", "@SyliusUi/Grid/_history.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/_history.html.twig");
    }
}
