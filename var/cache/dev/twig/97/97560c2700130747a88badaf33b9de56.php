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

/* @SyliusAdmin/ProductVariant/Tab/_details.html.twig */
class __TwigTemplate_e7cda87c518a6f5e91d20cd353a0ebd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Tab/_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Tab/_details.html.twig"));

        // line 1
        $macros["_v0"] = $this->macros["_v0"] = $this->load("@SyliusAdmin/Macro/translationForm.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        yield "</h3>

    <div class=\"ui segments\">
        ";
        // line 7
        yield $macros["_v0"]->getTemplateForMacro("macro_translationForm", $context, 7, $this->getSourceContext())->macro_translationForm(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "translations", [], "any", false, false, false, 7)]);
        yield "
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "code", [], "any", false, false, false, 10), 'row');
        yield "
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "enabled", [], "any", false, false, false, 11), 'row');
        yield "
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <div class=\"two fields\">
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "shippingCategory", [], "any", false, false, false, 16), 'row');
        yield "
            </div>
            <div class=\"one field\">
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "shippingRequired", [], "any", false, false, false, 19), 'row');
        yield "
            </div>
        </div>
        ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "optionValues", [], "any", true, true, false, 22) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "optionValues", [], "any", false, false, false, 22)) > 0))) {
            // line 23
            yield "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.options"), "html", null, true);
            yield "</h4>
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "optionValues", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["option_form"]) {
                // line 27
                yield "                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option_form"], 'row');
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option_form'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        </div>
        ";
        }
        // line 31
        yield "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.properties"), "html", null, true);
        yield "</h4>
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "height", [], "any", false, false, false, 34), 'row');
        yield "
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "width", [], "any", false, false, false, 35), 'row');
        yield "
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "depth", [], "any", false, false, false, 36), 'row');
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "weight", [], "any", false, false, false, 37), 'row');
        yield "
        </div>
    </div>

    ";
        // line 41
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([(("sylius.admin.product_variant." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 41, $this->source); })())) . ".tab_details"), "sylius.admin.product_variant.tab_details"], ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })())]);
        yield "
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
        return "@SyliusAdmin/ProductVariant/Tab/_details.html.twig";
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
        return array (  144 => 41,  137 => 37,  133 => 36,  129 => 35,  125 => 34,  121 => 33,  117 => 31,  113 => 29,  104 => 27,  100 => 26,  96 => 25,  92 => 23,  90 => 22,  84 => 19,  78 => 16,  70 => 11,  66 => 10,  60 => 7,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.details'|trans }}</h3>

    <div class=\"ui segments\">
        {{ translationForm(form.translations) }}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            {{ form_row(form.code) }}
            {{ form_row(form.enabled) }}
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <div class=\"two fields\">
                {{ form_row(form.shippingCategory) }}
            </div>
            <div class=\"one field\">
                {{ form_row(form.shippingRequired) }}
            </div>
        </div>
        {% if form.optionValues is defined and form.optionValues|length > 0 %}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.options'|trans }}</h4>
            {% for option_form in form.optionValues %}
                {{ form_row(option_form) }}
            {% endfor %}
        </div>
        {% endif %}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.properties'|trans }}</h4>
            {{ form_row(form.height) }}
            {{ form_row(form.width) }}
            {{ form_row(form.depth) }}
            {{ form_row(form.weight) }}
        </div>
    </div>

    {{ sylius_template_event(['sylius.admin.product_variant.' ~ action ~ '.tab_details', 'sylius.admin.product_variant.tab_details'], {'form': form}) }}
</div>
", "@SyliusAdmin/ProductVariant/Tab/_details.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Tab/_details.html.twig");
    }
}
