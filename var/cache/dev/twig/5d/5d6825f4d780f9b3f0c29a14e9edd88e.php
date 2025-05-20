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

/* @SyliusPayPalPlugin/Admin/Order/Show/Payment/_refundedPayPal.html.twig */
class __TwigTemplate_23f190ddbbb109ff06cf1251872920d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/Admin/Order/Show/Payment/_refundedPayPal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/Admin/Order/Show/Payment/_refundedPayPal.html.twig"));

        // line 1
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 2
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 2, $this->source); })()), "method", [], "any", false, false, false, 2), "gatewayConfig", [], "any", false, false, false, 2), "factoryName", [], "any", false, false, false, 2) == "sylius.pay_pal") && (CoreExtension::getAttribute($this->env, $this->source,         // line 3
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 3, $this->source); })()), "state", [], "any", false, false, false, 3) == Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\PaymentInterface::STATE_REFUNDED")))) {
            // line 5
            yield "    <div class=\"ui icon mini message\">
        <i class=\"paypal icon\"></i>
        <div class=\"content\">
            <p>";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.tender_type"), "html", null, true);
            yield "</p>
        </div>
    </div>
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
        return "@SyliusPayPalPlugin/Admin/Order/Show/Payment/_refundedPayPal.html.twig";
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
        return array (  57 => 8,  52 => 5,  50 => 3,  49 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if
    payment.method.gatewayConfig.factoryName == 'sylius.pay_pal' and
    payment.state == constant('Sylius\\\\Component\\\\Core\\\\Model\\\\PaymentInterface::STATE_REFUNDED')
%}
    <div class=\"ui icon mini message\">
        <i class=\"paypal icon\"></i>
        <div class=\"content\">
            <p>{{ 'sylius.pay_pal.tender_type'|trans }}</p>
        </div>
    </div>
{% endif %}
", "@SyliusPayPalPlugin/Admin/Order/Show/Payment/_refundedPayPal.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/paypal-plugin/src/Resources/views/Admin/Order/Show/Payment/_refundedPayPal.html.twig");
    }
}
