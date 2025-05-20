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

/* @SyliusAdmin/ProductVariant/Generate/_content.html.twig */
class __TwigTemplate_0124deaa3fe6791a110d225034672065 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Generate/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Generate/_content.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["@SyliusAdmin/Form/theme.html.twig"], true);
        // line 2
        yield "
";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_variant_generate", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        yield "
<div class=\"ui segment\">
    ";
        // line 5
        yield from $this->load("@SyliusAdmin/ProductVariant/Generate/_form.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "    <div class=\"ui basic segment\">
        <div class=\"ui buttons\">
            <button class=\"ui labeled icon primary button\" type=\"submit\" ";
        // line 8
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "variants", [], "any", false, false, false, 8), "children", [], "any", false, false, false, 8))) {
            yield "disabled";
        }
        yield "><i class=\"random icon\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.generate"), "html", null, true);
        yield "</button>
            ";
        // line 9
        yield from $this->load("@SyliusUi/Form/Buttons/_cancel.html.twig", 9)->unwrap()->yield(CoreExtension::merge($context, ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 9, $this->source); })()), "getRouteName", ["index"], "method", false, false, false, 9), ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)])]));
        // line 10
        yield "        </div>
    </div>
    ";
        // line 12
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.product_variant.generate.form", ["resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 12, $this->source); })())]);
        yield "
</div>
";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "_token", [], "any", false, false, false, 14), 'row');
        yield "
";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_end', ["render_rest" => false]);
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
        return "@SyliusAdmin/ProductVariant/Generate/_content.html.twig";
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
        return array (  87 => 15,  83 => 14,  78 => 12,  74 => 10,  72 => 9,  64 => 8,  60 => 6,  58 => 5,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% form_theme form '@SyliusAdmin/Form/theme.html.twig' %}

{{ form_start(form, {'action': path('sylius_admin_product_variant_generate', {'productId': product.id}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
<div class=\"ui segment\">
    {% include '@SyliusAdmin/ProductVariant/Generate/_form.html.twig' %}
    <div class=\"ui basic segment\">
        <div class=\"ui buttons\">
            <button class=\"ui labeled icon primary button\" type=\"submit\" {% if form.variants.children is empty %}disabled{% endif %}><i class=\"random icon\"></i>{{- 'sylius.ui.generate'|trans -}}</button>
            {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': path(configuration.getRouteName('index'), {'productId': product.id})} %}
        </div>
    </div>
    {{ sylius_template_event('sylius.admin.product_variant.generate.form', {'resource': resource}) }}
</div>
{{ form_row(form._token) }}
{{ form_end(form, {'render_rest': false}) }}
", "@SyliusAdmin/ProductVariant/Generate/_content.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Generate/_content.html.twig");
    }
}
