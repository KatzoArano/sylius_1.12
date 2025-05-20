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

/* @SyliusAdmin/Product/_showInShopButton.html.twig */
class __TwigTemplate_d0e91230504b7734d2768305b689c484 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_showInShopButton.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_showInShopButton.html.twig"));

        // line 1
        $context["enabledChannels"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "channels", [], "any", false, false, false, 1), function ($__channel__) use ($context, $macros) { $context["channel"] = $__channel__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 1, $this->source); })()), "enabled", [], "any", false, false, false, 1) == true); });
        // line 2
        yield "
";
        // line 3
        if ((($tmp = $this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "enabled", [], "any", false, false, false, 4) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["enabledChannels"]) || array_key_exists("enabledChannels", $context) ? $context["enabledChannels"] : (function () { throw new RuntimeError('Variable "enabledChannels" does not exist.', 4, $this->source); })())) < 1))) {
                // line 5
                yield "        <a class=\"ui labeled icon button disabled\" href=\"#\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("show-product-in-shop-page");
                yield ">
            <i class=\"angle right icon\"></i>
            ";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_product_in_shop_page"), "html", null, true);
                yield "
        </a>
    ";
            } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 9
(isset($context["enabledChannels"]) || array_key_exists("enabledChannels", $context) ? $context["enabledChannels"] : (function () { throw new RuntimeError('Variable "enabledChannels" does not exist.', 9, $this->source); })())) > 1)) {
                // line 10
                yield "        <div class=\"ui floating dropdown labeled icon button\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("show-product-in-shop-page");
                yield ">
            <i class=\"share alternate icon\"></i>
            <span class=\"text\">
                ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_product_in_shop_page"), "html", null, true);
                yield "
            </span>
            <div class=\"menu\">
                <div class=\"scrolling menu\">
                    ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enabledChannels"]) || array_key_exists("enabledChannels", $context) ? $context["enabledChannels"] : (function () { throw new RuntimeError('Variable "enabledChannels" does not exist.', 17, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 18
                    yield "                        ";
                    $context["product_translation"] = $this->env->getFunction('sylius_product_translation')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), $context["channel"]);
                    // line 19
                    yield "                        ";
                    if ((($tmp =  !(null === (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 19, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 20
                        yield "                            ";
                        $context["url"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 20, $this->source); })()), "slug", [], "any", false, false, false, 20), "_locale" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 20, $this->source); })()), "locale", [], "any", false, false, false, 20)]), $context["channel"]);
                        // line 21
                        yield "                        ";
                    }
                    // line 22
                    yield "
                        <a
                            href=\"";
                    // line 24
                    yield (((($tmp = (!array_key_exists("url", $context))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 24, $this->source); })())));
                    yield "\"
                            class=\"item ";
                    // line 25
                    if ((($tmp =  !array_key_exists("url", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "disabled";
                    }
                    yield "\"
                            target=\"_blank\"
                        >
                            <i class=\"angle right icon\"></i>
                            ";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_in"), "html", null, true);
                    yield "
                            ";
                    // line 30
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "name", [], "any", false, false, false, 30), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "code", [], "any", false, false, false, 30), "html", null, true);
                    yield ")
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "                </div>
            </div>
        </div>
    ";
            } else {
                // line 37
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enabledChannels"]) || array_key_exists("enabledChannels", $context) ? $context["enabledChannels"] : (function () { throw new RuntimeError('Variable "enabledChannels" does not exist.', 37, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 38
                    yield "            ";
                    $context["product_translation"] = $this->env->getFunction('sylius_product_translation')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), $context["channel"]);
                    // line 39
                    yield "            ";
                    if ((($tmp =  !(null === (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 39, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 40
                        yield "                ";
                        $context["url"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 40, $this->source); })()), "slug", [], "any", false, false, false, 40), "_locale" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 40, $this->source); })()), "locale", [], "any", false, false, false, 40)]), $context["channel"]);
                        // line 41
                        yield "            ";
                    }
                    // line 42
                    yield "
            <a
                class=\"ui labeled icon button ";
                    // line 44
                    if ((($tmp =  !array_key_exists("url", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "disabled";
                    }
                    yield "\"
                href=\"";
                    // line 45
                    yield (((($tmp = (!array_key_exists("url", $context))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 45, $this->source); })())));
                    yield "\"
                target=\"_blank\"
                ";
                    // line 47
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("show-product-in-shop-page");
                    yield "
            >
                <i class=\"angle right icon\"></i>
                ";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_product_in_shop_page"), "html", null, true);
                    yield "
            </a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                yield "    ";
            }
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/Product/_showInShopButton.html.twig";
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
        return array (  186 => 53,  177 => 50,  171 => 47,  166 => 45,  160 => 44,  156 => 42,  153 => 41,  150 => 40,  147 => 39,  144 => 38,  139 => 37,  133 => 33,  122 => 30,  118 => 29,  109 => 25,  105 => 24,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  85 => 17,  78 => 13,  71 => 10,  69 => 9,  64 => 7,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set enabledChannels = product.channels|filter(channel => channel.enabled == true) %}

{% if sylius_bundle_loaded_checker('SyliusShopBundle') %}
    {% if not product.enabled or enabledChannels|length < 1 %}
        <a class=\"ui labeled icon button disabled\" href=\"#\" {{ sylius_test_html_attribute('show-product-in-shop-page') }}>
            <i class=\"angle right icon\"></i>
            {{ 'sylius.ui.show_product_in_shop_page'|trans }}
        </a>
    {% elseif enabledChannels|length > 1 %}
        <div class=\"ui floating dropdown labeled icon button\" {{ sylius_test_html_attribute('show-product-in-shop-page') }}>
            <i class=\"share alternate icon\"></i>
            <span class=\"text\">
                {{ 'sylius.ui.show_product_in_shop_page'|trans }}
            </span>
            <div class=\"menu\">
                <div class=\"scrolling menu\">
                    {% for channel in enabledChannels %}
                        {% set product_translation = sylius_product_translation(product, channel) %}
                        {% if product_translation is not null %}
                            {% set url = sylius_channel_url(path('sylius_shop_product_show', {'slug': product_translation.slug, '_locale': product_translation.locale}), channel) %}
                        {% endif %}

                        <a
                            href=\"{{ (url is not defined) ? '#' : url|raw }}\"
                            class=\"item {% if url is not defined %}disabled{% endif %}\"
                            target=\"_blank\"
                        >
                            <i class=\"angle right icon\"></i>
                            {{ 'sylius.ui.show_in'|trans }}
                            {{ channel.name }} ({{ channel.code }})
                        </a>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% else %}
        {% for channel in enabledChannels %}
            {% set product_translation = sylius_product_translation(product, channel) %}
            {% if product_translation is not null %}
                {% set url = sylius_channel_url(path('sylius_shop_product_show', {'slug': product_translation.slug, '_locale': product_translation.locale}), channel) %}
            {% endif %}

            <a
                class=\"ui labeled icon button {% if url is not defined %}disabled{% endif %}\"
                href=\"{{ (url is not defined) ? '#' : url|raw }}\"
                target=\"_blank\"
                {{ sylius_test_html_attribute('show-product-in-shop-page') }}
            >
                <i class=\"angle right icon\"></i>
                {{ 'sylius.ui.show_product_in_shop_page'|trans }}
            </a>
        {% endfor %}
    {% endif %}
{% endif %}
", "@SyliusAdmin/Product/_showInShopButton.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_showInShopButton.html.twig");
    }
}
