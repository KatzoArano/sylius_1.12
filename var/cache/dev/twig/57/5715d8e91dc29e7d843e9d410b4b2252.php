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

/* @PayPlugSyliusPayPlugPlugin/shop/1click.html.twig */
class __TwigTemplate_783fdb55d52cfe7562ac58bcc96d6554 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/shop/1click.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/shop/1click.html.twig"));

        // line 1
        yield "<html lang=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "locale", [], "any", false, false, false, 1), 0, 2), "html", null, true);
        yield "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 5, $this->source); })()), "channel", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.payment"), "html", null, true);
        yield "</title>
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <style>
        body {
            background-color: #f9fAfb;
        }
        #wrapper-close-3ds {
            display: none !important;
        }
    </style>
</head>
<body>
<script type=\"text/javascript\" src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\GetPayPlugApiUrlExtension']->getApiUrl(), "html", null, true);
        yield "/js/1/form.latest.js\"></script>
<script>
    Payplug.showPayment('";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["payment_url"]) || array_key_exists("payment_url", $context) ? $context["payment_url"] : (function () { throw new RuntimeError('Variable "payment_url" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "', true)
</script>
</body>
</html>
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
        return "@PayPlugSyliusPayPlugPlugin/shop/1click.html.twig";
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
        return array (  78 => 19,  73 => 17,  56 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<html lang=\"{{ app.request.locale|slice(0, 2) }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{{ sylius.channel.name }} - {{ 'sylius.ui.payment'|trans }}</title>
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <style>
        body {
            background-color: #f9fAfb;
        }
        #wrapper-close-3ds {
            display: none !important;
        }
    </style>
</head>
<body>
<script type=\"text/javascript\" src=\"{{ payplug_get_api_url() }}/js/1/form.latest.js\"></script>
<script>
    Payplug.showPayment('{{ payment_url }}', true)
</script>
</body>
</html>
", "@PayPlugSyliusPayPlugPlugin/shop/1click.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/payplug/sylius-payplug-plugin/src/Resources/views/shop/1click.html.twig");
    }
}
