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

/* @SyliusUi/Grid/BulkAction/delete.html.twig */
class __TwigTemplate_4b6b82c0b0e1deb54083f1cf391676b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/BulkAction/delete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/BulkAction/delete.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusUi/Macro/buttons.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["path"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "url", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 3, $this->source); })()), "link", [], "any", false, false, false, 3), "url", [], "any", false, false, false, 3), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "route", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 3, $this->source); })()), "link", [], "any", false, false, false, 3), "route", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 3, $this->source); })()), "requestConfiguration", [], "any", false, false, false, 3), "getRouteName", ["bulk_delete"], "method", false, false, false, 3))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 3, $this->source); })()), "requestConfiguration", [], "any", false, false, false, 3), "getRouteName", ["bulk_delete"], "method", false, false, false, 3))), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "parameters", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 3, $this->source); })()), "link", [], "any", false, false, false, 3), "parameters", [], "any", false, false, false, 3), [])) : ([]))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "route", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 3, $this->source); })()), "link", [], "any", false, false, false, 3), "route", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 3, $this->source); })()), "requestConfiguration", [], "any", false, false, false, 3), "getRouteName", ["bulk_delete"], "method", false, false, false, 3))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 3, $this->source); })()), "requestConfiguration", [], "any", false, false, false, 3), "getRouteName", ["bulk_delete"], "method", false, false, false, 3))), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "parameters", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 3, $this->source); })()), "link", [], "any", false, false, false, 3), "parameters", [], "any", false, false, false, 3), [])) : ([])))));
        // line 4
        yield "
";
        // line 5
        yield $macros["buttons"]->getTemplateForMacro("macro_bulkDelete", $context, 5, $this->getSourceContext())->macro_bulkDelete(...[(isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 5, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "label", [], "any", false, false, false, 5), true]);
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
        return "@SyliusUi/Grid/BulkAction/delete.html.twig";
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
        return array (  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% set path = options.link.url|default(path(options.link.route|default(grid.requestConfiguration.getRouteName('bulk_delete')), options.link.parameters|default({}))) %}

{{ buttons.bulkDelete(path, action.label, true) }}
", "@SyliusUi/Grid/BulkAction/delete.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/BulkAction/delete.html.twig");
    }
}
