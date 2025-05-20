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

/* @SyliusRefundPlugin/Order/Admin/Refund/_paymentMethod.html.twig */
class __TwigTemplate_a375eb9f79c66878710128750f36bec5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/Refund/_paymentMethod.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/Refund/_paymentMethod.html.twig"));

        // line 1
        yield "<div class=\"ui form column\">
    <div class=\"field\">
        <label for=\"payment-methods\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.payment_method"), "html", null, true);
        yield "</label>
        <select id=\"payment-methods\" name=\"sylius_refund_payment_method\" class=\"ui fluid selection dropdown\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payment_methods"]) || array_key_exists("payment_methods", $context) ? $context["payment_methods"] : (function () { throw new RuntimeError('Variable "payment_methods" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
            // line 6
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "id", [], "any", false, false, false, 6), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 6) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["original_payment_method"]) || array_key_exists("original_payment_method", $context) ? $context["original_payment_method"] : (function () { throw new RuntimeError('Variable "original_payment_method" does not exist.', 6, $this->source); })()), "code", [], "any", false, false, false, 6))) ? ("selected=\"selected\"") : (""));
            yield ">
                    ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "name", [], "any", false, false, false, 7), "html", null, true);
            yield "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['payment_method'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "        </select>
        <small id=\"original-payment-method\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.original_payment_method"), "html", null, true);
        yield ": <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["original_payment_method"]) || array_key_exists("original_payment_method", $context) ? $context["original_payment_method"] : (function () { throw new RuntimeError('Variable "original_payment_method" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "</strong></small>
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
        return "@SyliusRefundPlugin/Order/Admin/Refund/_paymentMethod.html.twig";
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
        return array (  80 => 11,  77 => 10,  68 => 7,  61 => 6,  57 => 5,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui form column\">
    <div class=\"field\">
        <label for=\"payment-methods\">{{ 'sylius.ui.payment_method'|trans }}</label>
        <select id=\"payment-methods\" name=\"sylius_refund_payment_method\" class=\"ui fluid selection dropdown\">
            {% for payment_method in payment_methods %}
                <option value=\"{{ payment_method.id }}\" {{ (payment_method.code == original_payment_method.code) ? 'selected=\"selected\"' : '' }}>
                    {{ payment_method.name }}
                </option>
            {% endfor %}
        </select>
        <small id=\"original-payment-method\">{{ 'sylius.ui.original_payment_method'|trans }}: <strong>{{ original_payment_method }}</strong></small>
    </div>
</div>
", "@SyliusRefundPlugin/Order/Admin/Refund/_paymentMethod.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Order/Admin/Refund/_paymentMethod.html.twig");
    }
}
