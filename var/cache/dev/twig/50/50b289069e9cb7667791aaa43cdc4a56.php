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

/* @SyliusShop/Layout/Footer/_content.html.twig */
class __TwigTemplate_be200b6f3072b568c30292dc130c02a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/_content.html.twig"));

        // line 1
        yield "<div class=\"ui center aligned inverted basic segment\">
    <p>&copy; ";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_store"), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.powered_by"), "html", null, true);
        yield " <a href=\"https://sylius.com\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
    <a target=\"_blank\" href=\"//facebook.com/SyliusEcommerce/\"><i class=\"big grey facebook icon\"></i></a>
    <a target=\"_blank\" href=\"//instagram.com/sylius.team/\"><i class=\"big grey instagram icon\"></i></a>
    <a target=\"_blank\" href=\"//twitter.com/sylius\"><i class=\"big grey twitter card icon\"></i></a>
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
        return "@SyliusShop/Layout/Footer/_content.html.twig";
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
        return array (  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui center aligned inverted basic segment\">
    <p>&copy; {{ 'sylius.ui.your_store'|trans }}, {{ 'sylius.ui.powered_by'|trans }} <a href=\"https://sylius.com\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
    <a target=\"_blank\" href=\"//facebook.com/SyliusEcommerce/\"><i class=\"big grey facebook icon\"></i></a>
    <a target=\"_blank\" href=\"//instagram.com/sylius.team/\"><i class=\"big grey instagram icon\"></i></a>
    <a target=\"_blank\" href=\"//twitter.com/sylius\"><i class=\"big grey twitter card icon\"></i></a>
</div>
", "@SyliusShop/Layout/Footer/_content.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Layout/Footer/_content.html.twig");
    }
}
