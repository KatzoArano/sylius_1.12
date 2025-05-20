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

/* @SyliusAdmin/Product/Show/_configurableProduct.html.twig */
class __TwigTemplate_a5fc63ceceecd0e912591123eee6f7ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig"));

        // line 1
        yield from $this->load("@SyliusAdmin/Product/Show/_header.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 5
        yield from $this->load("@SyliusAdmin/Product/Show/_taxonomy.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 8
        yield from $this->load("@SyliusAdmin/Product/Show/_options.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "    </div>
</div>
<div class=\"ui hidden divider\"></div>
";
        // line 12
        yield from $this->load("@SyliusAdmin/Product/Show/_media.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "<div class=\"ui hidden divider\"></div>
";
        // line 14
        yield from $this->load("@SyliusAdmin/Product/Show/_moreDetails.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "<div class=\"ui hidden divider\"></div>
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 18
        yield from $this->load("@SyliusAdmin/Product/Show/_attributes.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 21
        yield from $this->load("@SyliusAdmin/Product/Show/_associations.html.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "    </div>
</div>
<div class=\"ui hidden divider\"></div>

";
        // line 26
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.configurable_product.show", $context);
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
        return "@SyliusAdmin/Product/Show/_configurableProduct.html.twig";
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
        return array (  94 => 26,  88 => 22,  86 => 21,  82 => 19,  80 => 18,  75 => 15,  73 => 14,  70 => 13,  68 => 12,  63 => 9,  61 => 8,  57 => 6,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% include '@SyliusAdmin/Product/Show/_header.html.twig' %}

<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_taxonomy.html.twig' %}
    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_options.html.twig' %}
    </div>
</div>
<div class=\"ui hidden divider\"></div>
{% include '@SyliusAdmin/Product/Show/_media.html.twig' %}
<div class=\"ui hidden divider\"></div>
{% include '@SyliusAdmin/Product/Show/_moreDetails.html.twig' %}
<div class=\"ui hidden divider\"></div>
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_attributes.html.twig' %}
    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_associations.html.twig' %}
    </div>
</div>
<div class=\"ui hidden divider\"></div>

{{ sylius_template_event('sylius.admin.configurable_product.show', _context) }}
", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_configurableProduct.html.twig");
    }
}
