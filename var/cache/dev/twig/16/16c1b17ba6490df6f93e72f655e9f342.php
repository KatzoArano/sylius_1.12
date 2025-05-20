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

/* @SyliusRefundPlugin/_paymentMethod.html.twig */
class __TwigTemplate_891e3b645c3b76897ce33498e4254690 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_paymentMethod.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_paymentMethod.html.twig"));

        // line 1
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 1, $this->source); })()), "payments", [], "any", false, false, false, 1), "first", [], "method", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            $context["completed"] = Twig\Extension\CoreExtension::constant("Sylius\\Component\\Core\\Model\\PaymentInterface::STATE_COMPLETED");
            // line 3
            yield "    ";
            $context["original_payment_method"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()), "lastPayment", [(isset($context["completed"]) || array_key_exists("completed", $context) ? $context["completed"] : (function () { throw new RuntimeError('Variable "completed" does not exist.', 3, $this->source); })())], "method", false, false, false, 3), "method", [], "any", false, false, false, 3);
            // line 4
            yield "    <div class=\"ui hidden divider\"></div>

    <div class=\"ui stackable grid\">
        <div class=\"two column row\">
            ";
            // line 8
            yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius_refund.admin.order.refund.form.payment_method", $context);
            yield "
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
        return "@SyliusRefundPlugin/_paymentMethod.html.twig";
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
        return array (  62 => 8,  56 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if order.payments.first()  %}
    {% set completed = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\PaymentInterface::STATE_COMPLETED') %}
    {% set original_payment_method = order.lastPayment(completed).method %}
    <div class=\"ui hidden divider\"></div>

    <div class=\"ui stackable grid\">
        <div class=\"two column row\">
            {{ sylius_template_event('sylius_refund.admin.order.refund.form.payment_method', _context) }}
        </div>
    </div>
{% endif %}
", "@SyliusRefundPlugin/_paymentMethod.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/_paymentMethod.html.twig");
    }
}
