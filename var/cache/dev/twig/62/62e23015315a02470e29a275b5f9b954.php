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

/* @SyliusUi/Form/Buttons/_create.html.twig */
class __TwigTemplate_8d2c2f28f0a51e2e6088fbcc2d69f2fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_create.html.twig"));

        // line 1
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 1, $this->source); })()), "cancel", [], "any", false, false, false, 1))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            $context["cancelPath"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 2, $this->source); })()), "cancel", [], "any", false, false, false, 2), "?"), 0, [], "array", false, false, false, 2);
        } else {
            // line 4
            yield "    ";
            $context["cancelPath"] = null;
        }
        // line 6
        yield "
<div class=\"ui hidden divider\"></div>
<div class=\"ui buttons\">
    <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create"), "html", null, true);
        yield "</button>
    ";
        // line 10
        yield from $this->load("@SyliusUi/Form/Buttons/_cancel.html.twig", 10)->unwrap()->yield(CoreExtension::merge($context, ["path" => $this->extensions['Sylius\Bundle\UiBundle\Twig\RedirectPathExtension']->generateRedirectPath((isset($context["cancelPath"]) || array_key_exists("cancelPath", $context) ? $context["cancelPath"] : (function () { throw new RuntimeError('Variable "cancelPath" does not exist.', 10, $this->source); })()))]));
        // line 11
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
        return "@SyliusUi/Form/Buttons/_create.html.twig";
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
        return array (  69 => 11,  67 => 10,  63 => 9,  58 => 6,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if paths.cancel is not null %}
    {% set cancelPath = paths.cancel|split('?')[0] %}
{% else %}
    {% set cancelPath = null %}
{% endif %}

<div class=\"ui hidden divider\"></div>
<div class=\"ui buttons\">
    <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>{{- 'sylius.ui.create'|trans -}}</button>
    {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': sylius_generate_redirect_path(cancelPath)} %}
</div>
", "@SyliusUi/Form/Buttons/_create.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/Buttons/_create.html.twig");
    }
}
