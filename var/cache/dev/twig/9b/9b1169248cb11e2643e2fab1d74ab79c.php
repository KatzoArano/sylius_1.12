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

/* @SyliusAdmin/Layout/_support.html.twig */
class __TwigTemplate_05aafc86eacd0f3da36f704692663080 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Layout/_support.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Layout/_support.html.twig"));

        // line 1
        yield "<div class=\"ui floated simple dropdown item\">
    <i class=\"life ring icon\"></i>
    <span>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.get_support"), "html", null, true);
        yield "</span>
    <div class=\"menu\">
        <a href=\"https://docs.sylius.com\" class=\"item\" target=\"_blank\">
            <i class=\"book icon\"></i>
            ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.documentation"), "html", null, true);
        yield "
        </a>
        <a href=\"https://sylius.com/slack\" class=\"item\" target=\"_blank\">
            <i class=\"slack icon\"></i>
            ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.join_slack"), "html", null, true);
        yield "
        </a>
        <a href=\"https://github.com/Sylius/Sylius/issues\" class=\"item\" target=\"_blank\">
            <i class=\"github icon\"></i>
            ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.issue_tracker"), "html", null, true);
        yield "
        </a>
        <a href=\"https://www.youtube.com/channel/UCtZI2yUM2bZwbVlGpQJ9VCQ\" class=\"item\" target=\"_blank\">
            <i class=\"youtube icon\"></i>
            ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.youtube"), "html", null, true);
        yield "
        </a>
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
        return "@SyliusAdmin/Layout/_support.html.twig";
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
        return array (  80 => 19,  73 => 15,  66 => 11,  59 => 7,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui floated simple dropdown item\">
    <i class=\"life ring icon\"></i>
    <span>{{ 'sylius.ui.get_support'|trans }}</span>
    <div class=\"menu\">
        <a href=\"https://docs.sylius.com\" class=\"item\" target=\"_blank\">
            <i class=\"book icon\"></i>
            {{ 'sylius.ui.documentation'|trans }}
        </a>
        <a href=\"https://sylius.com/slack\" class=\"item\" target=\"_blank\">
            <i class=\"slack icon\"></i>
            {{ 'sylius.ui.join_slack'|trans }}
        </a>
        <a href=\"https://github.com/Sylius/Sylius/issues\" class=\"item\" target=\"_blank\">
            <i class=\"github icon\"></i>
            {{ 'sylius.ui.issue_tracker'|trans }}
        </a>
        <a href=\"https://www.youtube.com/channel/UCtZI2yUM2bZwbVlGpQJ9VCQ\" class=\"item\" target=\"_blank\">
            <i class=\"youtube icon\"></i>
            {{ 'sylius.ui.youtube'|trans }}
        </a>
    </div>
</div>
", "@SyliusAdmin/Layout/_support.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Layout/_support.html.twig");
    }
}
