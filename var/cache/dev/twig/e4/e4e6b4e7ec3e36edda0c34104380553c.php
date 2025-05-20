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

/* @SyliusShop/Checkout/Address/_navigation.html.twig */
class __TwigTemplate_32a80855ce679cdf2236578136ba337c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/Address/_navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/Address/_navigation.html.twig"));

        // line 1
        yield "<div class=\"ui two column grid\">
    <div class=\"column\">
        <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        yield "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.back_to_store"), "html", null, true);
        yield "</a>
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled button\" ";
        // line 6
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("next-step");
        yield "><i class=\"arrow right icon\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.next"), "html", null, true);
        yield "</button>
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
        return "@SyliusShop/Checkout/Address/_navigation.html.twig";
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
        return array (  60 => 6,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui two column grid\">
    <div class=\"column\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.back_to_store'|trans }}</a>
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled button\" {{ sylius_test_html_attribute('next-step') }}><i class=\"arrow right icon\"></i> {{ 'sylius.ui.next'|trans }}</button>
    </div>
</div>
", "@SyliusShop/Checkout/Address/_navigation.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/Address/_navigation.html.twig");
    }
}
