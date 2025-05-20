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

/* @SyliusPayPalPlugin/Grid/enablePayPal.html.twig */
class __TwigTemplate_6674de43d13be82453bc72d7cf768fd2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/Grid/enablePayPal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/Grid/enablePayPal.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusUi/Macro/buttons.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_payment_method_create", ["factory" => "sylius.pay_pal"]);
        // line 4
        yield "
";
        // line 5
        if ((($tmp =  !$this->extensions['Sylius\PayPalPlugin\Twig\PayPalExtension']->isPayPalEnabled(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5), "currentPageResults", [], "any", false, false, false, 5))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "<a class=\"ui labeled buttons icon top floating button yellow\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "\" data-confirm-pay-pal-consent>
    <i class=\"paypal icon\"></i>
    ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.enable_paypal"), "html", null, true);
            yield "
</a>
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
        return "@SyliusPayPalPlugin/Grid/enablePayPal.html.twig";
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
        return array (  66 => 8,  60 => 6,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% set path = path('sylius_admin_payment_method_create', {'factory': 'sylius.pay_pal'}) %}

{% if not sylius_is_pay_pal_enabled(grid.data.currentPageResults) %}
<a class=\"ui labeled buttons icon top floating button yellow\" href=\"{{ path }}\" data-confirm-pay-pal-consent>
    <i class=\"paypal icon\"></i>
    {{ 'sylius.pay_pal.enable_paypal'|trans }}
</a>
{% endif %}
", "@SyliusPayPalPlugin/Grid/enablePayPal.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/paypal-plugin/src/Resources/views/Grid/enablePayPal.html.twig");
    }
}
