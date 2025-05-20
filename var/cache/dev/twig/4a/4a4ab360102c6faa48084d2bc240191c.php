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

/* @SyliusCore/Email/Blocks/OrderConfirmation/_content.html.twig */
class __TwigTemplate_8395d6659ec43ac6d55888cc05737ea0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Email/Blocks/OrderConfirmation/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Email/Blocks/OrderConfirmation/_content.html.twig"));

        // line 1
        yield "<div style=\"text-align: center; margin-bottom: 30px;\">
    ";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.order_confirmation.your_order_number", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 2, $this->source); })())), "html", null, true);
        yield "
    <div style=\"margin: 10px 0;\">
      <span style=\"border: 1px solid #eee; padding: 10px; color: #1abb9c; font-size: 28px;\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "number", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </span>
    </div>
    ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.order_confirmation.has_been_successfully_placed", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 8, $this->source); })())), "html", null, true);
        yield "
</div>

";
        // line 11
        if ((($tmp = $this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "    ";
            $context["url"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", ["tokenValue" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "tokenValue", [], "any", false, false, false, 12), "_locale" => (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 12, $this->source); })())]), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 12, $this->source); })()));
            // line 13
            yield "
    <div style=\"text-align: center; margin-bottom: 30px;\">
        <a href=\"";
            // line 15
            yield (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 15, $this->source); })());
            yield "\" style=\"display: inline-block; text-align: center; background: #1abb9c; padding: 18px 28px; color: #fff; text-decoration: none; border-radius: 3px;\">
            ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.order_confirmation.view_order_or_change_payment_method", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 16, $this->source); })())), "html", null, true);
            yield "
        </a>
    </div>
";
        }
        // line 20
        yield "
<div style=\"text-align: center;\">
    ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.order_confirmation.thank_you", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 22, $this->source); })())), "html", null, true);
        yield "
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
        return "@SyliusCore/Email/Blocks/OrderConfirmation/_content.html.twig";
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
        return array (  93 => 22,  89 => 20,  82 => 16,  78 => 15,  74 => 13,  71 => 12,  69 => 11,  63 => 8,  57 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div style=\"text-align: center; margin-bottom: 30px;\">
    {{ 'sylius.email.order_confirmation.your_order_number'|trans({}, null, localeCode) }}
    <div style=\"margin: 10px 0;\">
      <span style=\"border: 1px solid #eee; padding: 10px; color: #1abb9c; font-size: 28px;\">
        {{ order.number }}
      </span>
    </div>
    {{ 'sylius.email.order_confirmation.has_been_successfully_placed'|trans({}, null, localeCode) }}
</div>

{% if sylius_bundle_loaded_checker('SyliusShopBundle') %}
    {% set url = sylius_channel_url(path('sylius_shop_order_show', {'tokenValue': order.tokenValue, '_locale': localeCode}), channel) %}

    <div style=\"text-align: center; margin-bottom: 30px;\">
        <a href=\"{{ url|raw }}\" style=\"display: inline-block; text-align: center; background: #1abb9c; padding: 18px 28px; color: #fff; text-decoration: none; border-radius: 3px;\">
            {{ 'sylius.email.order_confirmation.view_order_or_change_payment_method'|trans({}, null, localeCode) }}
        </a>
    </div>
{% endif %}

<div style=\"text-align: center;\">
    {{ 'sylius.email.order_confirmation.thank_you'|trans({}, null, localeCode) }}
</div>
", "@SyliusCore/Email/Blocks/OrderConfirmation/_content.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/views/Email/Blocks/OrderConfirmation/_content.html.twig");
    }
}
