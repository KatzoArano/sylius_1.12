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

/* @SyliusAdmin/Product/Show/_header.html.twig */
class __TwigTemplate_c78db7ce7408f3443bc6c65f4a6c33d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_header.html.twig"));

        // line 1
        yield "<div id=\"header\" class=\"ui stackable two column grid\">
    <div class=\"column\">
        <h1 class=\"ui header\">
            <i class=\"circular cube icon\"></i>
            <div class=\"content\">
                <span>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "</span>
                <div class=\"sub header\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_product"), "html", null, true);
        yield "</div>
            </div>
        </h1>
        ";
        // line 10
        yield from $this->load("@SyliusAdmin/Product/Show/_breadcrumb.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "    </div>
    <div class=\"middle aligned column\">
        <div class=\"ui right floated buttons\">
            ";
        // line 14
        yield from $this->load("@SyliusAdmin/Product/_showInShopButton.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "            <a id=\"edit-product\" class=\"ui labeled icon button\" href= ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield ">
                <i class=\"edit icon\"></i>
                ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true);
        yield "
            </a>
        </div>
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
        return "@SyliusAdmin/Product/Show/_header.html.twig";
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
        return array (  80 => 17,  74 => 15,  72 => 14,  67 => 11,  65 => 10,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"header\" class=\"ui stackable two column grid\">
    <div class=\"column\">
        <h1 class=\"ui header\">
            <i class=\"circular cube icon\"></i>
            <div class=\"content\">
                <span>{{ product.name }}</span>
                <div class=\"sub header\">{{ 'sylius.ui.show_product'|trans }}</div>
            </div>
        </h1>
        {% include \"@SyliusAdmin/Product/Show/_breadcrumb.html.twig\" %}
    </div>
    <div class=\"middle aligned column\">
        <div class=\"ui right floated buttons\">
            {% include '@SyliusAdmin/Product/_showInShopButton.html.twig' %}
            <a id=\"edit-product\" class=\"ui labeled icon button\" href= {{path('sylius_admin_product_update', {'id':product.id}) }}>
                <i class=\"edit icon\"></i>
                {{ 'sylius.ui.edit'|trans }}
            </a>
        </div>
    </div>
</div>
", "@SyliusAdmin/Product/Show/_header.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_header.html.twig");
    }
}
