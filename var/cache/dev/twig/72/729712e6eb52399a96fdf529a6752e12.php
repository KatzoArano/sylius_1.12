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

/* @SyliusAdmin/ProductVariant/Grid/Field/inventory.html.twig */
class __TwigTemplate_7b4277e96ef398508a33e7d858ed716d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Grid/Field/inventory.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Grid/Field/inventory.html.twig"));

        // line 1
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "isTracked", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "<div class=\"ui ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), "onHand", [], "any", false, false, false, 2) > 0)) ? ("green") : ("red"));
            yield " icon label\">
    <i class=\"cube icon\"></i>
    <span class=\"onHand\" data-product-variant-id=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "onHand", [], "any", false, false, false, 4), "html", null, true);
            yield "</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.available_on_hand"), "html", null, true);
            yield "
    ";
            // line 5
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "onHold", [], "any", false, false, false, 5) > 0)) {
                // line 6
                yield "    <div class=\"detail\">
        <span class=\"onHold\" data-product-variant-id=\"";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "onHold", [], "any", false, false, false, 7), "html", null, true);
                yield "</span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.reserved"), "html", null, true);
                yield "
    </div>
    ";
            }
            // line 10
            yield "</div>
";
        } else {
            // line 12
            yield "    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.not_tracked"), "html", null, true);
            yield "
    </span>
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
        return "@SyliusAdmin/ProductVariant/Grid/Field/inventory.html.twig";
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
        return array (  87 => 14,  83 => 12,  79 => 10,  69 => 7,  66 => 6,  64 => 5,  56 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if data.isTracked %}
<div class=\"ui {{ data.onHand > 0 ? 'green' : 'red' }} icon label\">
    <i class=\"cube icon\"></i>
    <span class=\"onHand\" data-product-variant-id=\"{{ data.id }}\">{{ data.onHand }}</span> {{ 'sylius.ui.available_on_hand'|trans }}
    {% if data.onHold > 0 %}
    <div class=\"detail\">
        <span class=\"onHold\" data-product-variant-id=\"{{ data.id }}\">{{ data.onHold }}</span> {{ 'sylius.ui.reserved'|trans }}
    </div>
    {% endif %}
</div>
{% else %}
    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        {{ 'sylius.ui.not_tracked'|trans }}
    </span>
{% endif %}
", "@SyliusAdmin/ProductVariant/Grid/Field/inventory.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Grid/Field/inventory.html.twig");
    }
}
