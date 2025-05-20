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

/* @SyliusUi/Security/_login.html.twig */
class __TwigTemplate_a2efef910fe0494f0c889c1ebe45c35e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Security/_login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Security/_login.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["@SyliusUi/Form/theme.html.twig"], true);
        // line 2
        yield "
<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        ";
        // line 5
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.login.before_form", $context);
        yield "

        ";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["action" => ((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 7, $this->source); })()), "/")) : ("/")), "attr" => ["class" => "ui large loadable form", "novalidate" => "novalidate"]]);
        yield "
            <div class=\"ui left aligned very padded segment\">
                ";
        // line 9
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.login.form.content", $context);
        yield "
            </div>

            ";
        // line 12
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.login.form", $context);
        yield "
        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
    </div>
</div>
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
        return "@SyliusUi/Security/_login.html.twig";
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
        return array (  75 => 13,  71 => 12,  65 => 9,  60 => 7,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        {{ sylius_template_event('sylius.admin.login.before_form', _context) }}

        {{ form_start(form, {'action': action|default('/'), 'attr': {'class': 'ui large loadable form', 'novalidate': 'novalidate'}}) }}
            <div class=\"ui left aligned very padded segment\">
                {{ sylius_template_event('sylius.admin.login.form.content', _context) }}
            </div>

            {{ sylius_template_event('sylius.admin.login.form', _context) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
</div>
", "@SyliusUi/Security/_login.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Security/_login.html.twig");
    }
}
