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

/* @SyliusShop/Checkout/SelectShipping/_shipment.html.twig */
class __TwigTemplate_c7866870efa6cf494dec1f56a052bf24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectShipping/_shipment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectShipping/_shipment.html.twig"));

        // line 1
        yield "<div class=\"ui segment\">
    <div class=\"ui dividing header\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipment"), "html", null, true);
        yield " #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 2, $this->source); })()), "index", [], "any", false, false, false, 2), "html", null, true);
        yield "</div>
    <div class=\"ui fluid stackable items\" ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipments");
        yield ">
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "method", [], "any", false, false, false, 4), 'errors');
        yield "

        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "method", [], "any", false, false, false, 6));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["choice_form"]) {
            // line 7
            yield "            ";
            $context["fee"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "method", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "shipping_costs", [], "any", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice_form"], "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), [], "array", false, false, false, 7);
            // line 8
            yield "            ";
            $context["method"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "method", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "choices", [], "any", false, false, false, 8), $context["key"], [], "array", false, false, false, 8), "data", [], "any", false, false, false, 8);
            // line 9
            yield "            ";
            yield from $this->load("@SyliusShop/Checkout/SelectShipping/_choice.html.twig", 9)->unwrap()->yield(CoreExtension::merge($context, ["form" => $context["choice_form"], "method" => (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 9, $this->source); })()), "fee" => (isset($context["fee"]) || array_key_exists("fee", $context) ? $context["fee"] : (function () { throw new RuntimeError('Variable "fee" does not exist.', 9, $this->source); })())]));
            // line 10
            yield "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 11
            yield "            ";
            yield from $this->load("@SyliusShop/Checkout/SelectShipping/_unavailable.html.twig", 11)->unwrap()->yield($context);
            // line 12
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['choice_form'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "    </div>
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
        return "@SyliusShop/Checkout/SelectShipping/_shipment.html.twig";
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
        return array (  115 => 13,  109 => 12,  106 => 11,  93 => 10,  90 => 9,  87 => 8,  84 => 7,  66 => 6,  61 => 4,  57 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui segment\">
    <div class=\"ui dividing header\">{{ 'sylius.ui.shipment'|trans }} #{{ loop.index }}</div>
    <div class=\"ui fluid stackable items\" {{ sylius_test_html_attribute('shipments') }}>
        {{ form_errors(form.method) }}

        {% for key, choice_form in form.method %}
            {% set fee = form.method.vars.shipping_costs[choice_form.vars.value] %}
            {% set method = form.method.vars.choices[key].data %}
            {% include '@SyliusShop/Checkout/SelectShipping/_choice.html.twig' with {'form': choice_form, 'method': method, 'fee': fee} %}
        {% else %}
            {% include '@SyliusShop/Checkout/SelectShipping/_unavailable.html.twig' %}
        {% endfor %}
    </div>
</div>
", "@SyliusShop/Checkout/SelectShipping/_shipment.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectShipping/_shipment.html.twig");
    }
}
