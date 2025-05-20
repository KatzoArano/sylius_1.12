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

/* @SyliusCore/Email/layout.html.twig */
class __TwigTemplate_3ca6cc389d0d42ff99f6864c00aac030 extends Template
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
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Email/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Email/layout.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        yield "    ";
        // line 3
        yield "        ";
        if ((($tmp = (isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "            ";
            $context["logo"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/logo.png", "shop"), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 4, $this->source); })()));
            // line 5
            yield "        ";
        } else {
            // line 6
            yield "            ";
            $context["logo"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop/img/logo.png"), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 6, $this->source); })()));
            // line 7
            yield "        ";
        }
        // line 8
        yield "
        <div style=\"font-family: sans-serif; background: #eee; padding-top: 30px; padding-bottom: 30px; font-size: 16px; color: #333; line-height: 1.5\">
            <div style=\"max-width: 600px; margin: 20px auto;\">
                <div style=\"margin-bottom: 30px; text-align: center;\">
                    ";
        // line 12
        if ((($tmp = $this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                        ";
            $context["url"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage", ["_locale" => (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 13, $this->source); })())]), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 13, $this->source); })()));
            // line 14
            yield "                        <a href=\"";
            yield (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 14, $this->source); })());
            yield "\">
                            <img src=\"";
            // line 15
            yield (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 15, $this->source); })());
            yield "\" alt=\"Sylius\" style=\"width: 170px\">
                        </a>
                    ";
        } else {
            // line 18
            yield "                        <img src=\"";
            yield (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 18, $this->source); })());
            yield "\" alt=\"Sylius\" style=\"width: 170px\">
                    ";
        }
        // line 20
        yield "                </div>

                <div style=\"background: #fff; padding: 40px 30px;\">
                    ";
        // line 23
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 24
        yield "                </div>

                <div style=\"text-align: center; padding: 20px 0;\">
                    <a href=\"https://sylius.com\" target=\"_blank\" style=\"color: #1abb9c; text-decoration: none;\">sylius.com</a>
                </div>
            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusCore/Email/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  143 => 23,  125 => 24,  123 => 23,  118 => 20,  112 => 18,  106 => 15,  101 => 14,  98 => 13,  96 => 12,  90 => 8,  87 => 7,  84 => 6,  81 => 5,  78 => 4,  75 => 3,  73 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
    {% autoescape false %}
        {% if use_webpack %}
            {% set logo = sylius_channel_url(asset('build/shop/images/logo.png', 'shop'), channel) %}
        {% else %}
            {% set logo = sylius_channel_url(asset('assets/shop/img/logo.png'), channel) %}
        {% endif %}

        <div style=\"font-family: sans-serif; background: #eee; padding-top: 30px; padding-bottom: 30px; font-size: 16px; color: #333; line-height: 1.5\">
            <div style=\"max-width: 600px; margin: 20px auto;\">
                <div style=\"margin-bottom: 30px; text-align: center;\">
                    {% if sylius_bundle_loaded_checker('SyliusShopBundle') %}
                        {% set url = sylius_channel_url(path('sylius_shop_homepage', {'_locale': localeCode}), channel) %}
                        <a href=\"{{ url|raw }}\">
                            <img src=\"{{ logo }}\" alt=\"Sylius\" style=\"width: 170px\">
                        </a>
                    {% else %}
                        <img src=\"{{ logo }}\" alt=\"Sylius\" style=\"width: 170px\">
                    {% endif %}
                </div>

                <div style=\"background: #fff; padding: 40px 30px;\">
                    {% block content %}{% endblock %}
                </div>

                <div style=\"text-align: center; padding: 20px 0;\">
                    <a href=\"https://sylius.com\" target=\"_blank\" style=\"color: #1abb9c; text-decoration: none;\">sylius.com</a>
                </div>
            </div>
        </div>
    {% endautoescape %}
{% endblock %}
", "@SyliusCore/Email/layout.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/views/Email/layout.html.twig");
    }
}
