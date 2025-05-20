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

/* @SyliusShop/Common/Order/_table.html.twig */
class __TwigTemplate_bad39c5af8b8b7fc4fe12c7aecf5a876 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_table.html.twig"));

        // line 1
        yield "<table class=\"ui celled table\" id=\"sylius-order\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("order-table");
        yield ">
    <thead>
        ";
        // line 3
        yield from $this->load("@SyliusShop/Common/Order/Table/_headers.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "    </thead>
    <tbody>
        ";
        // line 6
        yield from $this->load("@SyliusShop/Common/Order/Table/_items.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    </tbody>
    <tfoot>
        ";
        // line 9
        yield from $this->load("@SyliusShop/Common/Order/Table/_totals.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "    </tfoot>
</table>
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
        return "@SyliusShop/Common/Order/_table.html.twig";
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
        return array (  68 => 10,  66 => 9,  62 => 7,  60 => 6,  56 => 4,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"ui celled table\" id=\"sylius-order\" {{ sylius_test_html_attribute('order-table') }}>
    <thead>
        {% include '@SyliusShop/Common/Order/Table/_headers.html.twig' %}
    </thead>
    <tbody>
        {% include '@SyliusShop/Common/Order/Table/_items.html.twig' %}
    </tbody>
    <tfoot>
        {% include '@SyliusShop/Common/Order/Table/_totals.html.twig' %}
    </tfoot>
</table>
", "@SyliusShop/Common/Order/_table.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_table.html.twig");
    }
}
