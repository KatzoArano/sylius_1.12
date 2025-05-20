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

/* @SyliusShop/Login/_login.html.twig */
class __TwigTemplate_61c03bbb988cb8edc478b2a7d0202775 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_login.html.twig"));

        // line 1
        yield "<h4 class=\"ui dividing header\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.registered_customers"), "html", null, true);
        yield "</h4>
<p>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.if_you_have_an_account_sign_in_with_your_email_address"), "html", null, true);
        yield ".</p>
";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login_check"), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        yield "
    ";
        // line 4
        yield from $this->load("@SyliusShop/Login/_form.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "
    ";
        // line 6
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.login.form", ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })())]);
        yield "

    <button type=\"submit\" class=\"ui blue submit button\" ";
        // line 8
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("login-button");
        yield ">
        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.login"), "html", null, true);
        yield "
    </button>

    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_request_password_reset_token");
        yield "\" class=\"ui right floated button\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.forgot_password"), "html", null, true);
        yield "</a>

    <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
        yield "\">
";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_end', ["render_rest" => false]);
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
        return "@SyliusShop/Login/_login.html.twig";
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
        return array (  92 => 15,  88 => 14,  81 => 12,  75 => 9,  71 => 8,  66 => 6,  63 => 5,  61 => 4,  57 => 3,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h4 class=\"ui dividing header\">{{ 'sylius.ui.registered_customers'|trans }}</h4>
<p>{{ 'sylius.ui.if_you_have_an_account_sign_in_with_your_email_address'|trans }}.</p>
{{ form_start(form, {'action': path('sylius_shop_login_check'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
    {% include '@SyliusShop/Login/_form.html.twig' %}

    {{ sylius_template_event('sylius.shop.login.form', {'form': form}) }}

    <button type=\"submit\" class=\"ui blue submit button\" {{ sylius_test_html_attribute('login-button') }}>
        {{ 'sylius.ui.login'|trans }}
    </button>

    <a href=\"{{ path('sylius_shop_request_password_reset_token') }}\" class=\"ui right floated button\">{{ 'sylius.ui.forgot_password'|trans }}</a>

    <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"{{ csrf_token('shop_authenticate') }}\">
{{ form_end(form, {'render_rest': false}) }}
", "@SyliusShop/Login/_login.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Login/_login.html.twig");
    }
}
