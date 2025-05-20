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

/* @SyliusRefundPlugin/Order/Admin/Refund/Form/Table/Body/Item/_refundButton.html.twig */
class __TwigTemplate_49ed151fdcbe8b6721c3e81584b9085b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/Refund/Form/Table/Body/Item/_refundButton.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/Refund/Form/Table/Body/Item/_refundButton.html.twig"));

        // line 1
        yield "<td class=\"aligned collapsing\">
    <button data-refund=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\RefundPlugin\Twig\OrderRefundsExtension']->getUnitRefundLeft(CoreExtension::getAttribute($this->env, $this->source, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), Twig\Extension\CoreExtension::constant("Sylius\\RefundPlugin\\Model\\RefundType::ORDER_ITEM_UNIT"), CoreExtension::getAttribute($this->env, $this->source, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 2, $this->source); })()), "total", [], "any", false, false, false, 2)), "html", null, true);
        yield "\" type=\"button\" class=\"ui button primary\" ";
        if ((($tmp =  !$this->extensions['Sylius\RefundPlugin\Twig\OrderRefundsExtension']->canUnitBeRefunded(CoreExtension::getAttribute($this->env, $this->source, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), Twig\Extension\CoreExtension::constant("Sylius\\RefundPlugin\\Model\\RefundType::ORDER_ITEM_UNIT"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
        ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.refund"), "html", null, true);
        yield "
    </button>
</td>
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
        return "@SyliusRefundPlugin/Order/Admin/Refund/Form/Table/Body/Item/_refundButton.html.twig";
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
        return array (  59 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<td class=\"aligned collapsing\">
    <button data-refund=\"{{ unit_refund_left(unit.id, constant('Sylius\\\\RefundPlugin\\\\Model\\\\RefundType::ORDER_ITEM_UNIT'), unit.total) }}\" type=\"button\" class=\"ui button primary\" {% if not can_unit_be_refunded(unit.id, constant('Sylius\\\\RefundPlugin\\\\Model\\\\RefundType::ORDER_ITEM_UNIT')) %}disabled{% endif %}>
        {{ 'sylius_refund.ui.refund'|trans }}
    </button>
</td>
", "@SyliusRefundPlugin/Order/Admin/Refund/Form/Table/Body/Item/_refundButton.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Order/Admin/Refund/Form/Table/Body/Item/_refundButton.html.twig");
    }
}
