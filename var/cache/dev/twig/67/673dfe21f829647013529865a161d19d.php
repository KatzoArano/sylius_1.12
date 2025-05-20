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

/* @SyliusAdmin/Order/Show/Payment/_completeTransition.html.twig */
class __TwigTemplate_e7bc1a93001e86f0c2b488948e53b9c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Payment/_completeTransition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Payment/_completeTransition.html.twig"));

        // line 1
        if ((($tmp = $this->extensions['SM\Extension\Twig\SMExtension']->can((isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 1, $this->source); })()), "complete", "sylius_payment")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <div class=\"ui segment\">
        <form action=\"";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_payment_complete", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
            yield "\" method=\"post\" novalidate>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
            <button type=\"submit\" class=\"ui icon labeled tiny blue fluid loadable button\"><i class=\"check icon\"></i> ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.complete"), "html", null, true);
            yield "</button>
        </form>
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
        return "@SyliusAdmin/Order/Show/Payment/_completeTransition.html.twig";
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
        return array (  62 => 6,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if sm_can(payment, 'complete', 'sylius_payment') %}
    <div class=\"ui segment\">
        <form action=\"{{ path('sylius_admin_order_payment_complete', {'orderId': order.id, 'id': payment.id}) }}\" method=\"post\" novalidate>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(payment.id) }}\" />
            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
            <button type=\"submit\" class=\"ui icon labeled tiny blue fluid loadable button\"><i class=\"check icon\"></i> {{ 'sylius.ui.complete'|trans }}</button>
        </form>
    </div>
{% endif %}
", "@SyliusAdmin/Order/Show/Payment/_completeTransition.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Payment/_completeTransition.html.twig");
    }
}
