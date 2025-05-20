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

/* @SyliusUi/Macro/breadcrumb.html.twig */
class __TwigTemplate_cad65397dcbf06084ebf4887639d5868 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/breadcrumb.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_crumble($crumbs = [], $root_path = null, $root_label = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "crumbs" => $crumbs,
            "root_path" => $root_path,
            "root_label" => $root_label,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "crumble"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "crumble"));

            // line 2
            yield "    <div class=\"ui breadcrumb\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new RuntimeError('Variable "crumbs" does not exist.', 3, $this->source); })()));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 4
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 5
                    yield "                <div class=\"active section\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "label", [], "any", false, false, false, 5), "html", null, true);
                    yield "</div>
            ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 6
$context["crumb"], "url", [], "any", true, true, false, 6)) {
                    // line 7
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "url", [], "any", false, false, false, 7), "html", null, true);
                    yield "\" class=\"section\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "label", [], "any", false, false, false, 7), "html", null, true);
                    yield "</a>
                <i class=\"right chevron icon divider\"></i>
            ";
                } else {
                    // line 10
                    yield "                <div class=\"section\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "label", [], "any", false, false, false, 10), "html", null, true);
                    yield "</div>
                <i class=\"right chevron icon divider\"></i>
            ";
                }
                // line 13
                yield "        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 14
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("root_url", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["root_url"]) || array_key_exists("root_url", $context) ? $context["root_url"] : (function () { throw new RuntimeError('Variable "root_url" does not exist.', 14, $this->source); })()), "/")) : ("/")), "html", null, true);
                yield "\" class=\"section\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("root_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["root_label"]) || array_key_exists("root_label", $context) ? $context["root_label"] : (function () { throw new RuntimeError('Variable "root_label" does not exist.', 14, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.root"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.root"))), "html", null, true);
                yield "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['crumb'], $context['_parent'], $context['_iterated'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusUi/Macro/breadcrumb.html.twig";
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
        return array (  148 => 16,  137 => 14,  124 => 13,  117 => 10,  108 => 7,  106 => 6,  101 => 5,  98 => 4,  80 => 3,  77 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro crumble(crumbs = {}, root_path, root_label) %}
    <div class=\"ui breadcrumb\">
        {% for crumb in crumbs %}
            {% if loop.last %}
                <div class=\"active section\">{{ crumb.label }}</div>
            {% elseif crumb.url is defined %}
                <a href=\"{{ crumb.url }}\" class=\"section\">{{ crumb.label }}</a>
                <i class=\"right chevron icon divider\"></i>
            {% else %}
                <div class=\"section\">{{ crumb.label }}</div>
                <i class=\"right chevron icon divider\"></i>
            {% endif %}
        {% else %}
            <a href=\"{{ root_url|default('/') }}\" class=\"section\">{{ root_label|default('sylius.ui.root'|trans) }}</a>
        {% endfor %}
    </div>
{% endmacro %}
", "@SyliusUi/Macro/breadcrumb.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/breadcrumb.html.twig");
    }
}
