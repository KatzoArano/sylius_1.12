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

/* @SyliusShop/Common/Order/Label/PaymentState/singlePaymentState.html.twig */
class __TwigTemplate_6ca3e8f108748d318b5d5de8eef22a90 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Label/PaymentState/singlePaymentState.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Label/PaymentState/singlePaymentState.html.twig"));

        // line 2
        $context["viewOptions"] = ["authorized" => ["icon" => "check", "color" => "orange"], "cancelled" => ["icon" => "ban", "color" => "yellow"], "completed" => ["icon" => "adjust", "color" => "green"], "failed" => ["icon" => "ban", "color" => "red"], "new" => ["icon" => "clock", "color" => "olive"], "processing" => ["icon" => "check", "color" => "violet"], "refunded" => ["icon" => "reply all", "color" => "purple"]];
        // line 12
        yield "
";
        // line 13
        $context["value"] = ("sylius.ui." . (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 13, $this->source); })()));
        // line 14
        yield "
<span class=\"ui ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewOptions"]) || array_key_exists("viewOptions", $context) ? $context["viewOptions"] : (function () { throw new RuntimeError('Variable "viewOptions" does not exist.', 15, $this->source); })()), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 15, $this->source); })()), [], "array", false, false, false, 15), "color", [], "array", false, false, false, 15), "html", null, true);
        yield " label\">
    <i class=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["viewOptions"]) || array_key_exists("viewOptions", $context) ? $context["viewOptions"] : (function () { throw new RuntimeError('Variable "viewOptions" does not exist.', 16, $this->source); })()), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16), "icon", [], "array", false, false, false, 16), "html", null, true);
        yield " icon\"></i>
    ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })())), "html", null, true);
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
        return "@SyliusShop/Common/Order/Label/PaymentState/singlePaymentState.html.twig";
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
        return array (  66 => 17,  62 => 16,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%
    set viewOptions = {
        authorized: { icon: \"check\", color: \"orange\" } ,
        cancelled: { icon: \"ban\", color: \"yellow\" } ,
        completed: { icon: \"adjust\", color: \"green\" } ,
        failed: { icon: \"ban\", color: \"red\" } ,
        new: { icon: \"clock\", color: \"olive\" } ,
        processing: { icon: \"check\", color: \"violet\" } ,
        refunded: { icon: \"reply all\", color: \"purple\" } ,
    }
%}

{% set value = 'sylius.ui.' ~ state %}

<span class=\"ui {{ viewOptions[state]['color'] }} label\">
    <i class=\"{{ viewOptions[state]['icon'] }} icon\"></i>
    {{ value|trans }}
</span>
", "@SyliusShop/Common/Order/Label/PaymentState/singlePaymentState.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Label/PaymentState/singlePaymentState.html.twig");
    }
}
