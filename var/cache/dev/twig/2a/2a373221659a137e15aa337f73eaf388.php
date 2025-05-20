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

/* @SyliusAdmin/Product/Grid/Action/updatePositions.html.twig */
class __TwigTemplate_48bc1be5c51984d61d3fe0a1c796df38 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Grid/Action/updatePositions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Grid/Action/updatePositions.html.twig"));

        // line 1
        yield "<form id=\"sylius-update-product-taxons\" class=\"sylius-update-product-taxons\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_taxons_update_position");
        yield "\" method=\"post\">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update-product-taxon-position"), "html", null, true);
        yield "\" />
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_positions"), "html", null, true);
        yield "
    </button>
</form>
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
        return "@SyliusAdmin/Product/Grid/Action/updatePositions.html.twig";
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
        return array (  60 => 6,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"sylius-update-product-taxons\" class=\"sylius-update-product-taxons\" action=\"{{ path('sylius_admin_product_taxons_update_position') }}\" method=\"post\">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('update-product-taxon-position') }}\" />
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        {{ 'sylius.ui.save_positions'|trans }}
    </button>
</form>
", "@SyliusAdmin/Product/Grid/Action/updatePositions.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Grid/Action/updatePositions.html.twig");
    }
}
