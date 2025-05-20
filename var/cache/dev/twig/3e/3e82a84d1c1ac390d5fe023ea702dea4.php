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

/* @SyliusAttribute/Types/date.html.twig */
class __TwigTemplate_cb5a5b1250008f86f957f9b258089f64 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAttribute/Types/date.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAttribute/Types/date.html.twig"));

        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attribute"] ?? null), "attribute", [], "any", false, true, false, 1), "configuration", [], "any", false, true, false, 1), "format", [], "array", true, true, false, 1)) {
            // line 2
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 2, $this->source); })()), "value", [], "any", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 2, $this->source); })()), "attribute", [], "any", false, false, false, 2), "configuration", [], "any", false, false, false, 2), "format", [], "array", false, false, false, 2)), "html", null, true);
            yield "
";
        } else {
            // line 4
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 4, $this->source); })()), "value", [], "any", false, false, false, 4)), "html", null, true);
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
        return "@SyliusAttribute/Types/date.html.twig";
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
        return array (  56 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if attribute.attribute.configuration['format'] is defined %}
    {{ attribute.value|format_date(attribute.attribute.configuration['format']) }}
{% else %}
    {{ attribute.value|format_date }}
{% endif %}
", "@SyliusAttribute/Types/date.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views/Types/date.html.twig");
    }
}
