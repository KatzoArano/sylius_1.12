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

/* @SyliusUi/Grid/Body/_table.html.twig */
class __TwigTemplate_5331416b0023505092630efc4473a02c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Body/_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Body/_table.html.twig"));

        // line 1
        $macros["table"] = $this->macros["table"] = $this->load("@SyliusUi/Macro/table.html.twig", 1)->unwrap();
        // line 2
        $macros["messages"] = $this->macros["messages"] = $this->load("@SyliusUi/Macro/messages.html.twig", 2)->unwrap();
        // line 3
        yield "
";
        // line 4
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })())) > 0)) {
            // line 5
            yield "    <div class=\"ui segment spaceless sylius-grid-table-wrapper\">
        <table class=\"ui sortable stackable very basic celled table\" ";
            // line 6
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("grid-table");
            yield ">
            <thead>
            <tr>
                ";
            // line 9
            yield $macros["table"]->getTemplateForMacro("macro_headers", $context, 9, $this->getSourceContext())->macro_headers(...[(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 9, $this->source); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 9, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9)]);
            yield "
            </tr>
            </thead>
            <tbody ";
            // line 12
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("grid-table-body");
            yield ">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 14
                yield "                ";
                yield $macros["table"]->getTemplateForMacro("macro_row", $context, 14, $this->getSourceContext())->macro_row(...[(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 14, $this->source); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 14, $this->source); })()), $context["row"]]);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "            </tbody>
        </table>
    </div>
";
        } else {
            // line 20
            yield "    ";
            yield $macros["messages"]->getTemplateForMacro("macro_info", $context, 20, $this->getSourceContext())->macro_info(...["sylius.ui.no_results_to_display"]);
            yield "
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
        return "@SyliusUi/Grid/Body/_table.html.twig";
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
        return array (  95 => 20,  89 => 16,  80 => 14,  76 => 13,  72 => 12,  66 => 9,  60 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/table.html.twig' as table %}
{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% if data|length > 0 %}
    <div class=\"ui segment spaceless sylius-grid-table-wrapper\">
        <table class=\"ui sortable stackable very basic celled table\" {{ sylius_test_html_attribute('grid-table') }}>
            <thead>
            <tr>
                {{ table.headers(grid, definition, app.request.attributes) }}
            </tr>
            </thead>
            <tbody {{ sylius_test_html_attribute('grid-table-body') }}>
            {% for row in data %}
                {{ table.row(grid, definition, row) }}
            {% endfor %}
            </tbody>
        </table>
    </div>
{% else %}
    {{ messages.info('sylius.ui.no_results_to_display') }}
{% endif %}
", "@SyliusUi/Grid/Body/_table.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Body/_table.html.twig");
    }
}
