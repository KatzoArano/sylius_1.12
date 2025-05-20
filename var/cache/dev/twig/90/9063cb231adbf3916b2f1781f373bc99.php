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

/* @SyliusAdmin/Product/Tab/_attributes.html.twig */
class __TwigTemplate_54dcd548d8269a789a88d67df02b10d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_attributes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_attributes.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["@SyliusAdmin/Product/Attribute/attributesCollection.html.twig"], true);
        // line 2
        yield "
<div class=\"ui tab\" data-tab=\"attributes\">
    <h3 class=\"ui top attached header\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.attributes"), "html", null, true);
        yield "</h3>

    <div class=\"ui attached segment\">
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_get_product_attributes"));
        yield "
        <div id=\"attributesContainer\" data-count=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "attributes", [], "any", false, false, false, 8)), "html", null, true);
        yield "\">
            ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "attributes", [], "any", false, false, false, 9), 'widget', ["attr" => ["translations" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "translations", [], "any", false, false, false, 9)]]);
        yield "
        </div>

        ";
        // line 12
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([(("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })())) . ".tab_attributes"), "sylius.admin.product.tab_attributes"], ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })())]);
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
        return "@SyliusAdmin/Product/Tab/_attributes.html.twig";
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
        return array (  74 => 12,  68 => 9,  64 => 8,  60 => 7,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% form_theme form '@SyliusAdmin/Product/Attribute/attributesCollection.html.twig' %}

<div class=\"ui tab\" data-tab=\"attributes\">
    <h3 class=\"ui top attached header\">{{ 'sylius.ui.attributes'|trans }}</h3>

    <div class=\"ui attached segment\">
        {{ render(url('sylius_admin_get_product_attributes')) }}
        <div id=\"attributesContainer\" data-count=\"{{ form.attributes|length }}\">
            {{ form_widget(form.attributes, {'attr': {'translations': form.translations} }) }}
        </div>

        {{ sylius_template_event(['sylius.admin.product.' ~ action ~ '.tab_attributes', 'sylius.admin.product.tab_attributes'], {'form': form}) }}
    </div>
</div>
", "@SyliusAdmin/Product/Tab/_attributes.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_attributes.html.twig");
    }
}
