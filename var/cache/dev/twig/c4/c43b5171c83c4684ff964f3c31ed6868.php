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

/* @SyliusUi/Form/Buttons/_update.html.twig */
class __TwigTemplate_28e51cb3b4af8d7eaa235780212e1455 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_update.html.twig"));

        // line 1
        yield "<div class=\"ui hidden divider\"></div>
<div class=\"ui buttons\">
    <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_changes"), "html", null, true);
        yield "</button>
    ";
        // line 4
        yield from $this->load("@SyliusUi/Form/Buttons/_cancel.html.twig", 4)->unwrap()->yield(CoreExtension::merge($context, ["path" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["paths"] ?? null), "cancel", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 4, $this->source); })()), "cancel", [], "any", false, false, false, 4), null)) : (null))]));
        // line 5
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
        return "@SyliusUi/Form/Buttons/_update.html.twig";
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
        return array (  58 => 5,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui hidden divider\"></div>
<div class=\"ui buttons\">
    <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> {{ 'sylius.ui.save_changes'|trans }}</button>
    {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': paths.cancel|default(null)} %}
</div>
", "@SyliusUi/Form/Buttons/_update.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/Buttons/_update.html.twig");
    }
}
