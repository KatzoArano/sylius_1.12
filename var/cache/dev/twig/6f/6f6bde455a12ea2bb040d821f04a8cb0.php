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

/* @SyliusUi/Grid/Action/applyTransition.html.twig */
class __TwigTemplate_6a24b8ce876507321e296aa1a9f992fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Action/applyTransition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Action/applyTransition.html.twig"));

        // line 1
        if ((($tmp = $this->extensions['SM\Extension\Twig\SMExtension']->can((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "transition", [], "any", false, false, false, 1), CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "graph", [], "any", false, false, false, 1))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 2, $this->source); })()), "link", [], "any", false, false, false, 2), "route", [], "any", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 2, $this->source); })()), "link", [], "any", false, false, false, 2), "parameters", [], "any", false, false, false, 2)), "html", null, true);
            yield "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)), "html", null, true);
            yield "\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui loadable ";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 5, $this->source); })()), "class", [], "any", false, false, false, 5))) : ("")), "html", null, true);
            yield " labeled icon button\" type=\"submit\" data-js-disable=\".sylius-grid-table-wrapper button, .sylius-grid-table-wrapper a\">
            <i class=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()), "icon", [], "any", false, false, false, 6), "html", null, true);
            yield " icon\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()), "label", [], "any", false, false, false, 6)), "html", null, true);
            yield "
        </button>
    </form>
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
        return "@SyliusUi/Grid/Action/applyTransition.html.twig";
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
        return array (  64 => 6,  60 => 5,  55 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if sm_can(data, options.transition, options.graph) %}
    <form action=\"{{ path(options.link.route, options.link.parameters) }}\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(data.id) }}\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui loadable {{ options.class|default }} labeled icon button\" type=\"submit\" data-js-disable=\".sylius-grid-table-wrapper button, .sylius-grid-table-wrapper a\">
            <i class=\"{{ action.icon }} icon\"></i> {{ action.label|trans }}
        </button>
    </form>
{% endif %}
", "@SyliusUi/Grid/Action/applyTransition.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/applyTransition.html.twig");
    }
}
