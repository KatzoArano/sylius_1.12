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

/* @SyliusAdmin/Product/Tab/_inventoryContent.html.twig */
class __TwigTemplate_5d846cb7a959da40ee2de9204ddd355a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_inventoryContent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_inventoryContent.html.twig"));

        // line 1
        yield "<h3 class=\"ui top attached header\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.inventory"), "html", null, true);
        yield "</h3>
<div class=\"ui attached segment\">
    ";
        // line 3
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "simple", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "variant", [], "any", false, false, false, 4), "onHand", [], "any", false, false, false, 4), 'row');
            yield "
        <br />

        ";
            // line 7
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "variant", [], "any", false, false, false, 7), "tracked", [], "any", false, false, false, 7), 'row');
            yield "
        <div class=\"ui pointing above ignored label\">
            ";
            // line 9
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "variant", [], "any", false, false, false, 9), "tracked", [], "any", false, false, false, 9), 'help');
            yield "
        </div>

        ";
            // line 12
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "variant", [], "any", false, false, false, 12), "version", [], "any", false, false, false, 12), 'row');
            yield "
    ";
        }
        // line 14
        yield "</div>

";
        // line 16
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([(("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })())) . ".tab_inventory"), "sylius.admin.product.tab_inventory"], ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })())]);
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
        return "@SyliusAdmin/Product/Tab/_inventoryContent.html.twig";
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
        return array (  83 => 16,  79 => 14,  74 => 12,  68 => 9,  63 => 7,  56 => 4,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h3 class=\"ui top attached header\">{{ 'sylius.ui.inventory'|trans }}</h3>
<div class=\"ui attached segment\">
    {% if product.simple %}
        {{ form_row(form.variant.onHand) }}
        <br />

        {{ form_row(form.variant.tracked) }}
        <div class=\"ui pointing above ignored label\">
            {{ form_help(form.variant.tracked) }}
        </div>

        {{ form_row(form.variant.version) }}
    {% endif %}
</div>

{{ sylius_template_event(['sylius.admin.product.' ~ action ~ '.tab_inventory', 'sylius.admin.product.tab_inventory'], {'form': form}) }}
", "@SyliusAdmin/Product/Tab/_inventoryContent.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_inventoryContent.html.twig");
    }
}
