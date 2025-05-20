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

/* @SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig */
class __TwigTemplate_5bd36db72f4d9a8181fb74195f6cdbf5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig"));

        // line 1
        yield "<div class=\"pre-footer\">
    <div>
        <div><i class=\"shipping fast icon\"></i></div>
        <strong>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.free_shipping_title"), "html", null, true);
        yield "</strong>
        <div>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.free_shipping_content"), "html", null, true);
        yield "</div>
    </div>
    <div>
        <div><i class=\"dollar sign icon\"></i></div>
        <strong>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.multiple_payments_title"), "html", null, true);
        yield "</strong>
        <div>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.multiple_payments_content"), "html", null, true);
        yield "</div>
    </div>
    <div>
        <div><i class=\"certificate icon\"></i></div>
        <strong>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.guarantee_title"), "html", null, true);
        yield "</strong>
        <div>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.guarantee_content"), "html", null, true);
        yield "</div>
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
        return "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig";
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
        return array (  79 => 15,  75 => 14,  68 => 10,  64 => 9,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"pre-footer\">
    <div>
        <div><i class=\"shipping fast icon\"></i></div>
        <strong>{{ 'sylius.footer.banner.free_shipping_title'|trans }}</strong>
        <div>{{ 'sylius.footer.banner.free_shipping_content'|trans }}</div>
    </div>
    <div>
        <div><i class=\"dollar sign icon\"></i></div>
        <strong>{{ 'sylius.footer.banner.multiple_payments_title'|trans }}</strong>
        <div>{{ 'sylius.footer.banner.multiple_payments_content'|trans }}</div>
    </div>
    <div>
        <div><i class=\"certificate icon\"></i></div>
        <strong>{{ 'sylius.footer.banner.guarantee_title'|trans }}</strong>
        <div>{{ 'sylius.footer.banner.guarantee_content'|trans }}</div>
    </div>
</div>
", "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Layout/Footer/Grid/_pre_footer.html.twig");
    }
}
