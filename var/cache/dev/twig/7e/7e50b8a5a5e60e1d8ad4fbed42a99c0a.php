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

/* @SyliusAdmin/Product/Show/_simpleProduct.html.twig */
class __TwigTemplate_b37dc469a33fab091988fdf6d102ca98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig"));

        // line 1
        yield from $this->load("@SyliusAdmin/Product/Show/_header.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 5
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.simple_product.show.details", $context);
        yield "
        <div class=\"ui hidden divider\"></div>
        ";
        // line 7
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.simple_product.show.taxonomy", $context);
        yield "
    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 10
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.simple_product.show.pricing", $context);
        yield "
        <div class=\"ui hidden divider\"></div>
        ";
        // line 12
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.simple_product.show.shipping", $context);
        yield "
    </div>
</div>
<div class=\"ui hidden divider\"></div>
";
        // line 16
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.simple_product.show.media", $context);
        yield "

<div class=\"ui hidden divider\"></div>
";
        // line 19
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.simple_product.show.more_details", $context);
        yield "

<div class=\"ui hidden divider\"></div>
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 24
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.simple_product.show.attributes", $context);
        yield "
    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 27
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.simple_product.show.associations", $context);
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
        return "@SyliusAdmin/Product/Show/_simpleProduct.html.twig";
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
        return array (  98 => 27,  92 => 24,  84 => 19,  78 => 16,  71 => 12,  66 => 10,  60 => 7,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% include '@SyliusAdmin/Product/Show/_header.html.twig' %}

<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        {{ sylius_template_event('sylius.admin.simple_product.show.details', _context) }}
        <div class=\"ui hidden divider\"></div>
        {{ sylius_template_event('sylius.admin.simple_product.show.taxonomy', _context) }}
    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        {{ sylius_template_event('sylius.admin.simple_product.show.pricing', _context) }}
        <div class=\"ui hidden divider\"></div>
        {{ sylius_template_event('sylius.admin.simple_product.show.shipping', _context) }}
    </div>
</div>
<div class=\"ui hidden divider\"></div>
{{ sylius_template_event('sylius.admin.simple_product.show.media', _context) }}

<div class=\"ui hidden divider\"></div>
{{ sylius_template_event('sylius.admin.simple_product.show.more_details', _context) }}

<div class=\"ui hidden divider\"></div>
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        {{ sylius_template_event('sylius.admin.simple_product.show.attributes', _context) }}
    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        {{ sylius_template_event('sylius.admin.simple_product.show.associations', _context) }}
    </div>
</div>
", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_simpleProduct.html.twig");
    }
}
