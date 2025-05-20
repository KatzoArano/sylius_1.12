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

/* @SyliusAdmin/Product/Show/_variantContentShipping.html.twig */
class __TwigTemplate_348d42f6c353ef23b22e639618468377 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContentShipping.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContentShipping.html.twig"));

        // line 1
        yield "<div class=\"column\">
    <div class=\"ui segment\">
        <div class=\"ui small header\">
            ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
        yield "
        </div>
        ";
        // line 6
        if ((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 6, $this->source); })()), "shippingCategory", [], "any", false, false, false, 6) === null) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 6, $this->source); })()), "width", [], "any", false, false, false, 6) === null)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 6, $this->source); })()), "height", [], "any", false, false, false, 6) === null)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 6, $this->source); })()), "depth", [], "any", false, false, false, 6) === null)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 6, $this->source); })()), "weight", [], "any", false, false, false, 6) === null))) {
            // line 7
            yield "            <div class=\"ui teal message\">
                <p>";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_shipping_data"), "html", null, true);
            yield "</p>
            </div>
        ";
        } else {
            // line 11
            yield "            <table class=\"ui very basic celled table\">
                <tbody>
                <tr>
                    <td class=\"five wide gray text\"><strong>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_category"), "html", null, true);
            yield "</strong></td>
                    <td>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 15, $this->source); })()), "shippingCategory", [], "any", false, false, false, 15), "html", null, true);
            yield "</td>
                </tr>
                <tr>
                    <td class=\"five wide gray text\"><strong>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.width"), "html", null, true);
            yield "</strong></td>
                    <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 19, $this->source); })()), "width", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                </tr>
                <tr>
                    <td class=\"five wide gray text\"><strong>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.height"), "html", null, true);
            yield "</strong></td>
                    <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 23, $this->source); })()), "height", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                </tr>
                <tr>
                    <td class=\"five wide gray text\"><strong>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.depth"), "html", null, true);
            yield "</strong></td>
                    <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 27, $this->source); })()), "depth", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                </tr>
                <tr>
                    <td class=\"five wide gray text\"><strong>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.weight"), "html", null, true);
            yield "</strong></td>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 31, $this->source); })()), "weight", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                </tr>
                </tbody>
            </table>
        ";
        }
        // line 36
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
        return "@SyliusAdmin/Product/Show/_variantContentShipping.html.twig";
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
        return array (  126 => 36,  118 => 31,  114 => 30,  108 => 27,  104 => 26,  98 => 23,  94 => 22,  88 => 19,  84 => 18,  78 => 15,  74 => 14,  69 => 11,  63 => 8,  60 => 7,  58 => 6,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"column\">
    <div class=\"ui segment\">
        <div class=\"ui small header\">
            {{ 'sylius.ui.shipping'|trans }}
        </div>
        {% if variant.shippingCategory is same as(null) and variant.width is same as(null) and variant.height is same as(null) and variant.depth is same as(null) and variant.weight is same as(null) %}
            <div class=\"ui teal message\">
                <p>{{ 'sylius.ui.no_shipping_data'|trans }}</p>
            </div>
        {% else %}
            <table class=\"ui very basic celled table\">
                <tbody>
                <tr>
                    <td class=\"five wide gray text\"><strong>{{ 'sylius.ui.shipping_category'|trans }}</strong></td>
                    <td>{{ variant.shippingCategory }}</td>
                </tr>
                <tr>
                    <td class=\"five wide gray text\"><strong>{{ 'sylius.ui.width'|trans }}</strong></td>
                    <td>{{ variant.width }}</td>
                </tr>
                <tr>
                    <td class=\"five wide gray text\"><strong>{{ 'sylius.ui.height'|trans }}</strong></td>
                    <td>{{ variant.height }}</td>
                </tr>
                <tr>
                    <td class=\"five wide gray text\"><strong>{{ 'sylius.ui.depth'|trans }}</strong></td>
                    <td>{{ variant.depth }}</td>
                </tr>
                <tr>
                    <td class=\"five wide gray text\"><strong>{{ 'sylius.ui.weight'|trans }}</strong></td>
                    <td>{{ variant.weight }}</td>
                </tr>
                </tbody>
            </table>
        {% endif %}
    </div>
</div>
", "@SyliusAdmin/Product/Show/_variantContentShipping.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_variantContentShipping.html.twig");
    }
}
