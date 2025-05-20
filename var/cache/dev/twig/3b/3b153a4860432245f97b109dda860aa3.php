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

/* @SyliusAdmin/Layout/_channelLinks.html.twig */
class __TwigTemplate_d43f5bab857fe14216998925c83d1973 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Layout/_channelLinks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Layout/_channelLinks.html.twig"));

        // line 1
        $context["homepage_path"] = (((($tmp = $this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage")) : ("/"));
        // line 2
        yield "
";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 3, $this->source); })())) > 1)) {
            // line 4
            yield "    <div class=\"ui simple dropdown item\">
        <span>
            ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_your_store"), "html", null, true);
            yield "
        </span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 10, $this->source); })()), function ($__channel__) use ($context, $macros) { $context["channel"] = $__channel__; return  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "hostname", [], "any", false, false, false, 10)); }));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 11
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl((isset($context["homepage_path"]) || array_key_exists("homepage_path", $context) ? $context["homepage_path"] : (function () { throw new RuntimeError('Variable "homepage_path" does not exist.', 11, $this->source); })()), $context["channel"]), "html", null, true);
                yield "\" target=\"_blank\" class=\"item\">
                ";
                // line 12
                yield from $this->load("@SyliusAdmin/Common/_channel.html.twig", 12)->unwrap()->yield($context);
                // line 13
                yield "            </a>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "        </div>
    </div>
";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 17
(isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 17, $this->source); })())) == 1)) {
            // line 18
            yield "    ";
            $context["channel"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 18, $this->source); })()));
            // line 19
            yield "
    <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl((isset($context["homepage_path"]) || array_key_exists("homepage_path", $context) ? $context["homepage_path"] : (function () { throw new RuntimeError('Variable "homepage_path" does not exist.', 20, $this->source); })()), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 20, $this->source); })())), "html", null, true);
            yield "\" target=\"_blank\" class=\"item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_your_store"), "html", null, true);
            yield "</a>
";
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
        return "@SyliusAdmin/Layout/_channelLinks.html.twig";
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
        return array (  117 => 20,  114 => 19,  111 => 18,  109 => 17,  105 => 15,  90 => 13,  88 => 12,  83 => 11,  66 => 10,  59 => 6,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set homepage_path = sylius_bundle_loaded_checker('SyliusShopBundle') ? path('sylius_shop_homepage') : '/' %}

{% if channels|length > 1 %}
    <div class=\"ui simple dropdown item\">
        <span>
            {{ 'sylius.ui.view_your_store'|trans }}
        </span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            {% for channel in channels|filter(channel => channel.hostname is not empty) %}
            <a href=\"{{ sylius_channel_url(homepage_path, channel) }}\" target=\"_blank\" class=\"item\">
                {% include '@SyliusAdmin/Common/_channel.html.twig' %}
            </a>
            {% endfor %}
        </div>
    </div>
{% elseif channels|length == 1 %}
    {% set channel = channels|first %}

    <a href=\"{{ sylius_channel_url(homepage_path, channel) }}\" target=\"_blank\" class=\"item\">{{ 'sylius.ui.view_your_store'|trans }}</a>
{% endif %}
", "@SyliusAdmin/Layout/_channelLinks.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Layout/_channelLinks.html.twig");
    }
}
