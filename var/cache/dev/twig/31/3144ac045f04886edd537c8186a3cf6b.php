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

/* @SyliusAdmin/Product/Index/Header/_content.html.twig */
class __TwigTemplate_8546f3ff11e70e0a37891679b25a6053 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Index/Header/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Index/Header/_content.html.twig"));

        // line 1
        $macros["headers"] = $this->macros["headers"] = $this->load("@SyliusUi/Macro/headers.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["header"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 3), "header", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "header", [], "any", false, false, false, 3), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 3, $this->source); })()), "applicationName", [], "any", false, false, false, 3) . ".ui.") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 3, $this->source); })()), "pluralName", [], "any", false, false, false, 3)))) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 3, $this->source); })()), "applicationName", [], "any", false, false, false, 3) . ".ui.") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 3, $this->source); })()), "pluralName", [], "any", false, false, false, 3))));
        // line 4
        yield $macros["headers"]->getTemplateForMacro("macro_default", $context, 4, $this->getSourceContext())->macro_default(...[$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 4, $this->source); })())), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 4), "icon", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "icon", [], "any", false, false, false, 4), "cube")) : ("cube")), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 4), "subheader", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "subheader", [], "any", false, false, false, 4), "sylius.ui.manage_your_product_catalog")) : ("sylius.ui.manage_your_product_catalog")))]);
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
        return "@SyliusAdmin/Product/Index/Header/_content.html.twig";
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
        return array (  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/headers.html.twig' as headers %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}
{{ headers.default(header|trans, configuration.vars.icon|default('cube'), configuration.vars.subheader|default('sylius.ui.manage_your_product_catalog')|trans) }}
", "@SyliusAdmin/Product/Index/Header/_content.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Index/Header/_content.html.twig");
    }
}
