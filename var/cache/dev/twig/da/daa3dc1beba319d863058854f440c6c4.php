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

/* @SyliusRefundPlugin/_unitInput.html.twig */
class __TwigTemplate_1a04e0854720bde447dd010faf8a3fd7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_unitInput.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_unitInput.html.twig"));

        // line 1
        $context["inputName"] = (("sylius_refund_units[" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)) . "][amount]");
        // line 2
        $context["hiddenInputName"] = (("sylius_refund_units[" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)) . "][partial-id]");
        // line 3
        yield "
<div class=\"ui labeled input\">
    <div class=\"ui label\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_currency_symbol')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "currencyCode", [], "any", false, false, false, 5)), "html", null, true);
        yield "</div>
    <input data-refund-input type=\"number\" step=\"0.01\" name=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\" ";
        if ((($tmp =  !$this->extensions['Sylius\RefundPlugin\Twig\OrderRefundsExtension']->canUnitBeRefunded(CoreExtension::getAttribute($this->env, $this->source, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), Twig\Extension\CoreExtension::constant("Sylius\\RefundPlugin\\Model\\RefundType::ORDER_ITEM_UNIT"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " disabled";
        }
        yield "/>
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
        return "@SyliusRefundPlugin/_unitInput.html.twig";
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
        return array (  60 => 6,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set inputName = \"sylius_refund_units[\"~unit.id~\"][amount]\" %}
{% set hiddenInputName = \"sylius_refund_units[\"~unit.id~\"][partial-id]\" %}

<div class=\"ui labeled input\">
    <div class=\"ui label\">{{ order.currencyCode|sylius_currency_symbol }}</div>
    <input data-refund-input type=\"number\" step=\"0.01\" name=\"{{ inputName }}\" {% if not can_unit_be_refunded(unit.id, constant('Sylius\\\\RefundPlugin\\\\Model\\\\RefundType::ORDER_ITEM_UNIT')) %} disabled{% endif %}/>
</div>
", "@SyliusRefundPlugin/_unitInput.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/_unitInput.html.twig");
    }
}
