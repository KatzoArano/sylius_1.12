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

/* @SyliusShop/Menu/_security.html.twig */
class __TwigTemplate_68b9d0f7cce2b26101ff50a75ad159f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_security.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_security.html.twig"));

        // line 1
        yield "<div class=\"ui right stackable inverted menu\">
    ";
        // line 2
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "        <div class=\"item\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("full-name");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.hello"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "customer", [], "any", false, false, false, 3), "fullName", [], "any", false, false, false, 3), "html", null, true);
            yield "!</div>
        <a href=\"";
            // line 4
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_dashboard");
            yield "\" class=\"item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.my_account"), "html", null, true);
            yield "</a>
        <a href=\"";
            // line 5
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_logout");
            yield "\" class=\"item sylius-logout-button\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("logout-button");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.logout"), "html", null, true);
            yield "</a>
    ";
        } else {
            // line 7
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login");
            yield "\" class=\"item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.login"), "html", null, true);
            yield "</a>
        <a href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_register");
            yield "\" class=\"item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.register"), "html", null, true);
            yield "</a>
    ";
        }
        // line 10
        yield "</div>
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
        return "@SyliusShop/Menu/_security.html.twig";
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
        return array (  91 => 10,  84 => 8,  77 => 7,  68 => 5,  62 => 4,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui right stackable inverted menu\">
    {% if is_granted('ROLE_USER') %}
        <div class=\"item\" {{ sylius_test_html_attribute('full-name') }}>{{ 'sylius.ui.hello'|trans }} {{ app.user.customer.fullName }}!</div>
        <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"item\">{{ 'sylius.ui.my_account'|trans }}</a>
        <a href=\"{{ path('sylius_shop_logout') }}\" class=\"item sylius-logout-button\" {{ sylius_test_html_attribute('logout-button') }}>{{ 'sylius.ui.logout'|trans }}</a>
    {% else %}
        <a href=\"{{ path('sylius_shop_login') }}\" class=\"item\">{{ 'sylius.ui.login'|trans }}</a>
        <a href=\"{{ path('sylius_shop_register') }}\" class=\"item\">{{ 'sylius.ui.register'|trans }}</a>
    {% endif %}
</div>
", "@SyliusShop/Menu/_security.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Menu/_security.html.twig");
    }
}
