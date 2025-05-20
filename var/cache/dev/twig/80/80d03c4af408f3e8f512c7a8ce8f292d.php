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

/* @SyliusShop/Login/_form.html.twig */
class __TwigTemplate_f03f4038577bc0aa51cbe6a97de07f49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_form.html.twig"));

        // line 1
        $macros["messages"] = $this->macros["messages"] = $this->load("@SyliusUi/Macro/messages.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        if ((($tmp = (isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new RuntimeError('Variable "last_error" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            yield $macros["messages"]->getTemplateForMacro("macro_error", $context, 4, $this->getSourceContext())->macro_error(...[$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new RuntimeError('Variable "last_error" does not exist.', 4, $this->source); })()), "messageKey", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, (isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new RuntimeError('Variable "last_error" does not exist.', 4, $this->source); })()), "messageData", [], "any", false, false, false, 4), "security")]);
            yield "
";
        }
        // line 6
        yield "
";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "_username", [], "any", false, false, false, 7), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("login-username"));
        yield "
";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "_password", [], "any", false, false, false, 8), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("login-password"));
        yield "
";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "_remember_me", [], "any", false, false, false, 9), 'row', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("remember-me"));
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
        return "@SyliusShop/Login/_form.html.twig";
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
        return array (  72 => 9,  68 => 8,  64 => 7,  61 => 6,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% if last_error %}
    {{ messages.error(last_error.messageKey|trans(last_error.messageData, 'security')) }}
{% endif %}

{{ form_row(form._username, sylius_test_form_attribute('login-username')) }}
{{ form_row(form._password, sylius_test_form_attribute('login-password')) }}
{{ form_row(form._remember_me, sylius_test_form_attribute('remember-me')) }}
", "@SyliusShop/Login/_form.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Login/_form.html.twig");
    }
}
