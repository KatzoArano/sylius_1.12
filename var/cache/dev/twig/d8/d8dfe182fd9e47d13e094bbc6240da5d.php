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

/* @SyliusAdmin/Customer/Show/_breadcrumb.html.twig */
class __TwigTemplate_b718849c5131930916f8852ff0646ade extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/_breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/_breadcrumb.html.twig"));

        // line 1
        $macros["breadcrumb"] = $this->macros["breadcrumb"] = $this->load("@SyliusAdmin/Macro/breadcrumb.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["breadcrumbs"] = [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard")], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customers"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_index")], ["label" => CoreExtension::getAttribute($this->env, $this->source,         // line 6
(isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 6, $this->source); })()), "email", [], "any", false, false, false, 6)]];
        // line 8
        yield "
";
        // line 9
        yield $macros["breadcrumb"]->getTemplateForMacro("macro_crumble", $context, 9, $this->getSourceContext())->macro_crumble(...[(isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 9, $this->source); })())]);
        yield "
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
        return "@SyliusAdmin/Customer/Show/_breadcrumb.html.twig";
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
        return array (  59 => 9,  56 => 8,  54 => 6,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
    { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
    { label: 'sylius.ui.customers'|trans, url: path('sylius_admin_customer_index') },
    { label: customer.email }
] %}

{{ breadcrumb.crumble(breadcrumbs) }}
", "@SyliusAdmin/Customer/Show/_breadcrumb.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_breadcrumb.html.twig");
    }
}
