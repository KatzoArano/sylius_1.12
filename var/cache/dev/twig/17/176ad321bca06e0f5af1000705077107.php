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

/* @SyliusShop/Homepage/_aboutUs.html.twig */
class __TwigTemplate_78a67546c93661a541f7a2e4ea3b2e97 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/_aboutUs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/_aboutUs.html.twig"));

        // line 1
        yield "<div class=\"ui very padded center aligned secondary segment\">
    <div class=\"ui centered grid\">
        <div class=\"sixteen wide tablet twelve wide computer center aligned column\">
            <h2 class=\"ui huge header\">
                ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.about_us"), "html", null, true);
        yield "
            </h2>
            <p>
                ";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.about_us_content");
        yield "
            </p>
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
        return "@SyliusShop/Homepage/_aboutUs.html.twig";
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
        return array (  60 => 8,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui very padded center aligned secondary segment\">
    <div class=\"ui centered grid\">
        <div class=\"sixteen wide tablet twelve wide computer center aligned column\">
            <h2 class=\"ui huge header\">
                {{ 'sylius.homepage.about_us'|trans }}
            </h2>
            <p>
                {{ 'sylius.homepage.about_us_content'|trans|raw }}
            </p>
        </div>
    </div>
</div>
", "@SyliusShop/Homepage/_aboutUs.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Homepage/_aboutUs.html.twig");
    }
}
