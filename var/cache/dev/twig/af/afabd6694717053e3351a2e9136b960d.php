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

/* @SyliusAdmin/Dashboard/_latest.html.twig */
class __TwigTemplate_268e0ef48c090723caf079b4f3c1095a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_latest.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_latest.html.twig"));

        // line 1
        yield "<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_partial_customer_latest", ["count" => 5, "template" => "@SyliusAdmin/Dashboard/_customers.html.twig"]));
        yield "
    </div>
    <div class=\"column\">
        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_partial_order_latest_in_channel", ["channelCode" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 6, $this->source); })()), "code", [], "any", false, false, false, 6), "count" => 5, "template" => "@SyliusAdmin/Dashboard/_orders.html.twig"]));
        yield "
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
        return "@SyliusAdmin/Dashboard/_latest.html.twig";
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
        return array (  58 => 6,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        {{ render(url('sylius_admin_partial_customer_latest', {'count': 5, 'template': '@SyliusAdmin/Dashboard/_customers.html.twig'})) }}
    </div>
    <div class=\"column\">
        {{ render(path('sylius_admin_partial_order_latest_in_channel', {'channelCode': channel.code, 'count': 5, 'template': '@SyliusAdmin/Dashboard/_orders.html.twig'})) }}
    </div>
</div>
", "@SyliusAdmin/Dashboard/_latest.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_latest.html.twig");
    }
}
