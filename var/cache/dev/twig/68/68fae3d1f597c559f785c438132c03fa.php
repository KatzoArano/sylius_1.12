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

/* @SyliusRefundPlugin/Common/Label/refundPaymentState.html.twig */
class __TwigTemplate_ee565b24b07b5ae3ce8a46676e164510 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Common/Label/refundPaymentState.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Common/Label/refundPaymentState.html.twig"));

        // line 2
        $context["viewOptions"] = ["completed" => ["icon" => "adjust", "color" => "green"], "new" => ["icon" => "clock", "color" => "olive"]];
        // line 7
        yield "
";
        // line 8
        $context["value"] = ("sylius_refund.ui." . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()));
        // line 9
        yield "
<span class=\"ui ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewOptions"]) || array_key_exists("viewOptions", $context) ? $context["viewOptions"] : (function () { throw new RuntimeError('Variable "viewOptions" does not exist.', 10, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), [], "array", false, false, false, 10), "color", [], "array", false, false, false, 10), "html", null, true);
        yield " label\">
    <i class=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewOptions"]) || array_key_exists("viewOptions", $context) ? $context["viewOptions"] : (function () { throw new RuntimeError('Variable "viewOptions" does not exist.', 11, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), [], "array", false, false, false, 11), "icon", [], "array", false, false, false, 11), "html", null, true);
        yield " icon\"></i>
    ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 12, $this->source); })())), "html", null, true);
        yield "
</span>
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
        return "@SyliusRefundPlugin/Common/Label/refundPaymentState.html.twig";
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
        return array (  66 => 12,  62 => 11,  58 => 10,  55 => 9,  53 => 8,  50 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%
    set viewOptions = {
        completed: { icon: 'adjust', color: 'green' },
        new: { icon: 'clock', color: 'olive' },
    }
%}

{% set value = 'sylius_refund.ui.' ~ data %}

<span class=\"ui {{ viewOptions[data]['color'] }} label\">
    <i class=\"{{ viewOptions[data]['icon'] }} icon\"></i>
    {{ value|trans }}
</span>
", "@SyliusRefundPlugin/Common/Label/refundPaymentState.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Common/Label/refundPaymentState.html.twig");
    }
}
