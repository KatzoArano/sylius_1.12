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

/* @SyliusAdmin/Product/Tab/_details.html.twig */
class __TwigTemplate_6997ef85bb2d1ce23d80e0232c0b5edd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_details.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/Macro/translationForm.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui top attached header\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        yield "</h3>

    <div class=\"ui attached segment\">
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        yield "

        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                <div class=\"ui segment\">
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "code", [], "any", false, false, false, 12), 'row');
        yield "
                    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "enabled", [], "any", false, false, false, 13), 'row');
        yield "
                    ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "simple", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "variant", [], "any", false, false, false, 15), "shippingRequired", [], "any", false, false, false, 15), 'row');
            yield "
                    ";
        } else {
            // line 17
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "options", [], "any", false, false, false, 17), 'row', ["remote_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_options_by_phrase"), "load_edit_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_find_product_options")]);
            yield "
                        ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "variantSelectionMethod", [], "any", false, false, false, 18), 'row');
            yield "
                    ";
        }
        // line 20
        yield "
                    ";
        // line 22
        yield "                    <div class=\"ui hidden element\">
                        ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "simple", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "variant", [], "any", false, false, false, 24), "translations", [], "any", false, false, false, 24), 'row');
            yield "
                            ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "variantSelectionMethod", [], "any", false, false, false, 25), 'row');
            yield "
                        ";
        }
        // line 27
        yield "                    </div>
                </div>
            </div>
            <div class=\"column\">
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "channels", [], "any", false, false, false, 31), 'row');
        yield "
            </div>
        </div>
        ";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "simple", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "            <div class=\"ui one column stackable grid\">
                <div class=\"column\">
                    <h4 class=\"ui dividing header\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
            yield "</h4>
                    ";
            // line 38
            yield from $this->load("@SyliusAdmin/Product/_channel_pricing.html.twig", 38)->unwrap()->yield(CoreExtension::toArray(["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "variantForm" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "variant", [], "any", false, false, false, 38)]));
            // line 39
            yield "                </div>
            </div>
        ";
        }
        // line 42
        yield "        <div class=\"ui hidden divider\"></div>
        ";
        // line 43
        yield $macros["_v0"]->getTemplateForMacro("macro_translationFormWithSlug", $context, 43, $this->getSourceContext())->macro_translationFormWithSlug(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "translations", [], "any", false, false, false, 43), "@SyliusAdmin/Product/_slugField.html.twig", (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })())]);
        yield "
        ";
        // line 44
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "simple", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                <h4 class=\"ui top attached header\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
            yield "</h4>
                <div class=\"ui attached segment\">
                    ";
            // line 50
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "variant", [], "any", false, false, false, 50), "shippingCategory", [], "any", false, false, false, 50), 'row');
            yield "
                    ";
            // line 51
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "variant", [], "any", false, false, false, 51), "width", [], "any", false, false, false, 51), 'row');
            yield "
                    ";
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "variant", [], "any", false, false, false, 52), "height", [], "any", false, false, false, 52), 'row');
            yield "
                    ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "variant", [], "any", false, false, false, 53), "depth", [], "any", false, false, false, 53), 'row');
            yield "
                    ";
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "variant", [], "any", false, false, false, 54), "weight", [], "any", false, false, false, 54), 'row');
            yield "
                </div>
            </div>
            <div class=\"column\">
                <h4 class=\"ui top attached header\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes"), "html", null, true);
            yield "</h4>
                <div class=\"ui attached segment\">
                    ";
            // line 60
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "variant", [], "any", false, false, false, 60), "taxCategory", [], "any", false, false, false, 60), 'row');
            yield "
                </div>
            </div>
        </div>
        ";
        }
        // line 65
        yield "
        ";
        // line 66
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([(("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 66, $this->source); })())) . ".tab_details"), "sylius.admin.product.tab_details"], ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })())]);
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
        return "@SyliusAdmin/Product/Tab/_details.html.twig";
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
        return array (  199 => 66,  196 => 65,  188 => 60,  183 => 58,  176 => 54,  172 => 53,  168 => 52,  164 => 51,  160 => 50,  155 => 48,  150 => 45,  148 => 44,  144 => 43,  141 => 42,  136 => 39,  134 => 38,  130 => 37,  126 => 35,  124 => 34,  118 => 31,  112 => 27,  107 => 25,  102 => 24,  100 => 23,  97 => 22,  94 => 20,  89 => 18,  84 => 17,  78 => 15,  76 => 14,  72 => 13,  68 => 12,  60 => 7,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationFormWithSlug %}

<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui top attached header\">{{ 'sylius.ui.details'|trans }}</h3>

    <div class=\"ui attached segment\">
        {{ form_errors(form) }}

        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                <div class=\"ui segment\">
                    {{ form_row(form.code) }}
                    {{ form_row(form.enabled) }}
                    {% if product.simple %}
                        {{ form_row(form.variant.shippingRequired) }}
                    {% else %}
                        {{ form_row(form.options, {'remote_url': path('sylius_admin_ajax_product_options_by_phrase'), 'load_edit_url': path('sylius_admin_ajax_find_product_options')}) }}
                        {{ form_row(form.variantSelectionMethod) }}
                    {% endif %}

                    {# Nothing to see here. #}
                    <div class=\"ui hidden element\">
                        {% if product.simple %}
                            {{ form_row(form.variant.translations) }}
                            {{ form_row(form.variantSelectionMethod) }}
                        {% endif %}
                    </div>
                </div>
            </div>
            <div class=\"column\">
                {{ form_row(form.channels) }}
            </div>
        </div>
        {% if product.simple %}
            <div class=\"ui one column stackable grid\">
                <div class=\"column\">
                    <h4 class=\"ui dividing header\">{{ 'sylius.ui.pricing'|trans }}</h4>
                    {% include \"@SyliusAdmin/Product/_channel_pricing.html.twig\" with { product: product, variantForm: form.variant } only %}
                </div>
            </div>
        {% endif %}
        <div class=\"ui hidden divider\"></div>
        {{ translationFormWithSlug(form.translations, '@SyliusAdmin/Product/_slugField.html.twig', product) }}
        {% if product.simple %}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                <h4 class=\"ui top attached header\">{{ 'sylius.ui.shipping'|trans }}</h4>
                <div class=\"ui attached segment\">
                    {{ form_row(form.variant.shippingCategory) }}
                    {{ form_row(form.variant.width) }}
                    {{ form_row(form.variant.height) }}
                    {{ form_row(form.variant.depth) }}
                    {{ form_row(form.variant.weight) }}
                </div>
            </div>
            <div class=\"column\">
                <h4 class=\"ui top attached header\">{{ 'sylius.ui.taxes'|trans }}</h4>
                <div class=\"ui attached segment\">
                    {{ form_row(form.variant.taxCategory) }}
                </div>
            </div>
        </div>
        {% endif %}

        {{ sylius_template_event(['sylius.admin.product.' ~ action ~ '.tab_details', 'sylius.admin.product.tab_details'], {'form': form}) }}
    </div>
</div>
", "@SyliusAdmin/Product/Tab/_details.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_details.html.twig");
    }
}
