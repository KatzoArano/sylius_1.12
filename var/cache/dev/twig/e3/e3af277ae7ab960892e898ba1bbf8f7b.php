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

/* @SyliusCore/Email/passwordReset.html.twig */
class __TwigTemplate_f8cb99dfb1d1213dce3a56908c1e0bcd extends Template
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

        $this->blocks = [
            'subject' => [$this, 'block_subject'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusCore/Email/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Email/passwordReset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Email/passwordReset.html.twig"));

        $this->parent = $this->load("@SyliusCore/Email/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_subject(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subject"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        yield "    ";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.password_reset.subject", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 4, $this->source); })()));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "    ";
        if ((($tmp = $this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        ";
            $context["url"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_password_reset", ["token" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "passwordResetToken", [], "any", false, false, false, 9), "_locale" => (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 9, $this->source); })())]), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 9, $this->source); })()));
            // line 10
            yield "    ";
        }
        // line 11
        yield "    <div style=\"text-align: center; margin-bottom: 30px;\">
        <div style=\"font-size: 24px;\">
            ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.password_reset.hello", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 13, $this->source); })())), "html", null, true);
        yield " <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "username", [], "any", false, false, false, 13), "html", null, true);
        yield "</strong><br>
        </div>
        ";
        // line 15
        if ((($tmp = $this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.password_reset.to_reset_your_password", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 16, $this->source); })())), "html", null, true);
            yield ":
        ";
        } else {
            // line 18
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.password_reset.to_reset_your_password_token", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 18, $this->source); })())), "html", null, true);
            yield ":
        ";
        }
        // line 20
        yield "    </div>

    <div style=\"text-align: center;\">
        ";
        // line 23
        if ((($tmp = $this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "        <a href=\"";
            yield (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 24, $this->source); })());
            yield "\" style=\"display: inline-block; text-align: center; background: #1abb9c; padding: 18px 28px; color: #fff; text-decoration: none; border-radius: 3px;\">
            ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.password_reset.reset_your_password", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 25, $this->source); })())), "html", null, true);
            yield "
        </a>
        ";
        } else {
            // line 28
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.password_reset.token", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 28, $this->source); })())), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "passwordResetToken", [], "any", false, false, false, 28), "html", null, true);
            yield "
        ";
        }
        // line 30
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusCore/Email/passwordReset.html.twig";
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
        return array (  164 => 30,  156 => 28,  150 => 25,  145 => 24,  143 => 23,  138 => 20,  132 => 18,  126 => 16,  124 => 15,  117 => 13,  113 => 11,  110 => 10,  107 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusCore/Email/layout.html.twig' %}

{% block subject %}
    {{ 'sylius.email.password_reset.subject'|trans({}, null, localeCode)|raw }}
{% endblock %}

{% block content %}
    {% if sylius_bundle_loaded_checker('SyliusShopBundle') %}
        {% set url = sylius_channel_url(path('sylius_shop_password_reset', { 'token': user.passwordResetToken, '_locale': localeCode }), channel) %}
    {% endif %}
    <div style=\"text-align: center; margin-bottom: 30px;\">
        <div style=\"font-size: 24px;\">
            {{ 'sylius.email.password_reset.hello'|trans({}, null, localeCode) }} <strong>{{ user.username }}</strong><br>
        </div>
        {% if sylius_bundle_loaded_checker('SyliusShopBundle') %}
            {{ 'sylius.email.password_reset.to_reset_your_password'|trans({}, null, localeCode) }}:
        {% else %}
            {{ 'sylius.email.password_reset.to_reset_your_password_token'|trans({}, null, localeCode) }}:
        {% endif %}
    </div>

    <div style=\"text-align: center;\">
        {% if sylius_bundle_loaded_checker('SyliusShopBundle') %}
        <a href=\"{{ url|raw }}\" style=\"display: inline-block; text-align: center; background: #1abb9c; padding: 18px 28px; color: #fff; text-decoration: none; border-radius: 3px;\">
            {{ 'sylius.email.password_reset.reset_your_password'|trans({}, null, localeCode) }}
        </a>
        {% else %}
            {{ 'sylius.email.password_reset.token'|trans({}, null, localeCode) }}: {{ user.passwordResetToken }}
        {% endif %}
    </div>
{% endblock %}
", "@SyliusCore/Email/passwordReset.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/views/Email/passwordReset.html.twig");
    }
}
