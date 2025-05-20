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

/* @SonataBlock/Block/block_core_rss.html.twig */
class __TwigTemplate_7224ec7b1bb796f8cc066bd06719eb36 extends Template
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
            'block' => [$this, 'block_block'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 11
        return $this->load(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new RuntimeError('Variable "sonata_block" does not exist.', 11, $this->source); })()), "templates", [], "any", false, false, false, 11), "block_base", [], "any", false, false, false, 11), 11);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_rss.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_rss.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        // line 14
        yield "    <div class=\"panel panel-default ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 14, $this->source); })()), "class", [], "any", false, false, false, 14), "html", null, true);
        yield "\">
        ";
        // line 15
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    ";
            // line 18
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 18, $this->source); })()), "icon", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 19
                yield "                        <i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 19, $this->source); })()), "icon", [], "any", false, false, false, 19), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 21
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 21, $this->source); })()), "translation_domain", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 22
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 22, $this->source); })()), "translation_domain", [], "any", false, false, false, 22)), "html", null, true);
                yield "
                    ";
            } else {
                // line 24
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
                yield "
                    ";
            }
            // line 26
            yield "                </h4>
            </div>
        ";
        }
        // line 29
        yield "
        <div class=\"panel-body\">
            <div class=\"media\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["feeds"]) || array_key_exists("feeds", $context) ? $context["feeds"] : (function () { throw new RuntimeError('Variable "feeds" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 33
            yield "                    <div class=\"media-body\">
                        <h5 class=\"media-heading\">
                            <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feed"], "link", [], "any", false, false, false, 35), "html", null, true);
            yield "\" rel=\"nofollow\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feed"], "title", [], "any", false, false, false, 35), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feed"], "title", [], "any", false, false, false, 35), "html", null, true);
            yield "</a>
                        </h5>
                        ";
            // line 37
            yield CoreExtension::getAttribute($this->env, $this->source, $context["feed"], "description", [], "any", false, false, false, 37);
            yield "
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 39
        if (!$context['_iterated']) {
            // line 40
            yield "                    No feeds available.
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feed'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            </div>
        </div>
    </div>
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
        return "@SonataBlock/Block/block_core_rss.html.twig";
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
        return array (  153 => 42,  146 => 40,  144 => 39,  137 => 37,  128 => 35,  124 => 33,  119 => 32,  114 => 29,  109 => 26,  103 => 24,  97 => 22,  94 => 21,  88 => 19,  86 => 18,  82 => 16,  80 => 15,  75 => 14,  62 => 13,  40 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"panel panel-default {{ settings.class }}\">
        {% if settings.title is not empty %}
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    {% if settings.icon %}
                        <i class=\"{{ settings.icon }}\" aria-hidden=\"true\"></i>
                    {% endif %}
                    {% if settings.translation_domain %}
                        {{ settings.title|trans({}, settings.translation_domain) }}
                    {% else %}
                        {{ settings.title }}
                    {% endif %}
                </h4>
            </div>
        {% endif %}

        <div class=\"panel-body\">
            <div class=\"media\">
                {% for feed in feeds %}
                    <div class=\"media-body\">
                        <h5 class=\"media-heading\">
                            <a href=\"{{ feed.link }}\" rel=\"nofollow\" title=\"{{ feed.title }}\">{{ feed.title }}</a>
                        </h5>
                        {{ feed.description|raw }}
                    </div>
                {% else %}
                    No feeds available.
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "@SonataBlock/Block/block_core_rss.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_core_rss.html.twig");
    }
}
