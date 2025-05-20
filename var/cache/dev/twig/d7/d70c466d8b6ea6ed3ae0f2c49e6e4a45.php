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

/* @SyliusShop/Register/_form.html.twig */
class __TwigTemplate_84254d38da2b95b1ee03cf4cf6b954cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Register/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Register/_form.html.twig"));

        // line 1
        yield "<h4 class=\"ui dividing header\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.personal_information"), "html", null, true);
        yield "</h4>
<div class=\"two fields\">
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "firstName", [], "any", false, false, false, 3), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("first-name"));
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "lastName", [], "any", false, false, false, 4), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("last-name"));
        yield "
</div>
";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "email", [], "any", false, false, false, 6), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("email"));
        yield "
";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "phoneNumber", [], "any", false, false, false, 7), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("phone-number"));
        yield "
";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "subscribedToNewsletter", [], "any", false, false, false, 8), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("subscribed-to-newsletter"));
        yield "
<h4 class=\"ui dividing header\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.account_credentials"), "html", null, true);
        yield "</h4>
";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "plainPassword", [], "any", false, false, false, 10), "first", [], "any", false, false, false, 10), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("password-first"));
        yield "
";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "plainPassword", [], "any", false, false, false, 11), "second", [], "any", false, false, false, 11), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("password-second"));
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
        return "@SyliusShop/Register/_form.html.twig";
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
        return array (  83 => 11,  79 => 10,  75 => 9,  71 => 8,  67 => 7,  63 => 6,  58 => 4,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h4 class=\"ui dividing header\">{{ 'sylius.ui.personal_information'|trans }}</h4>
<div class=\"two fields\">
    {{ form_row(form.firstName, sylius_test_form_attribute('first-name')) }}
    {{ form_row(form.lastName, sylius_test_form_attribute('last-name')) }}
</div>
{{ form_row(form.email, sylius_test_form_attribute('email')) }}
{{ form_row(form.phoneNumber, sylius_test_form_attribute('phone-number')) }}
{{ form_row(form.subscribedToNewsletter, sylius_test_form_attribute('subscribed-to-newsletter')) }}
<h4 class=\"ui dividing header\">{{ 'sylius.ui.account_credentials'|trans }}</h4>
{{ form_row(form.user.plainPassword.first, sylius_test_form_attribute('password-first')) }}
{{ form_row(form.user.plainPassword.second, sylius_test_form_attribute('password-second')) }}
", "@SyliusShop/Register/_form.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Register/_form.html.twig");
    }
}
