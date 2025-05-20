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

/* @SyliusAdmin/Taxon/_treeWithoutButtons.html.twig */
class __TwigTemplate_adb8cb0daa82a0b34c3bf5a072b05ff0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig"));

        // line 1
        $macros["tree"] = $this->macros["tree"] = $this;
        // line 2
        yield "
";
        // line 24
        yield "
<div class=\"ui vertical fluid labeled icon buttons\">
    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_index");
        yield "\" class=\"ui primary button\">
        <i class=\"search icon\"></i>
        ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.browse_all_products"), "html", null, true);
        yield "
    </a>

    <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create");
        yield "\" class=\"ui button\">
        <i class=\"sitemap icon\"></i>
        ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.manage_taxons"), "html", null, true);
        yield "
    </a>
</div>

<div class=\"ui segment sylius-tree hidden\" data-sylius-js-tree>
    <a href=\"#\" class=\"sylius-tree__toggle-all\" data-sylius-js-tree-trigger>
        <i class=\"icon\">&bull;</i>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.toggle_all"), "html", null, true);
        yield "
    </a>
    ";
        // line 41
        yield $macros["tree"]->getTemplateForMacro("macro_render", $context, 41, $this->getSourceContext())->macro_render(...[(isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new RuntimeError('Variable "taxons" does not exist.', 41, $this->source); })())]);
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    public function macro_render($taxons = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "taxons" => $taxons,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render"));

            // line 4
            yield "    ";
            $macros["tree"] = $this;
            // line 5
            yield "
    <ul>
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new RuntimeError('Variable "taxons" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 8
                yield "            <li data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 8), "html", null, true);
                yield "\" ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 8))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-sylius-js-tree-parent=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 8), "html", null, true);
                    yield "\"";
                }
                yield ">
                <div class=\"sylius-tree__item\">
                    <div class=\"sylius-tree__icon\" ";
                // line 10
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 10))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-sylius-js-tree-trigger=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 10), "html", null, true);
                    yield "\"";
                }
                yield ">
                        <i class=\"";
                // line 11
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 11))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("caret down") : ("angle left"));
                yield " icon\"></i>
                    </div>
                    <div class=\"sylius-tree__title\">
                        <a href=\"";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_per_taxon_index", ["taxonId" => CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 14)]), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "enabled", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " class=\"text gray\"";
                }
                yield ">
                            ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "name", [], "any", false, false, false, 15), "html", null, true);
                yield "
                        </a>
                    </div>
                </div>
                ";
                // line 19
                yield $macros["tree"]->getTemplateForMacro("macro_render", $context, 19, $this->getSourceContext())->macro_render(...[CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 19)]);
                yield "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['taxon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "    </ul>
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
        return "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig";
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
        return array (  180 => 22,  171 => 19,  164 => 15,  156 => 14,  150 => 11,  142 => 10,  130 => 8,  126 => 7,  122 => 5,  119 => 4,  101 => 3,  87 => 41,  82 => 39,  73 => 33,  68 => 31,  62 => 28,  57 => 26,  53 => 24,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import _self as tree %}

{% macro render(taxons) %}
    {% import _self as tree %}

    <ul>
        {% for taxon in taxons %}
            <li data-id=\"{{ taxon.id }}\" {% if taxon.children is not empty %}data-sylius-js-tree-parent=\"{{ taxon.id }}\"{% endif %}>
                <div class=\"sylius-tree__item\">
                    <div class=\"sylius-tree__icon\" {% if taxon.children is not empty %}data-sylius-js-tree-trigger=\"{{ taxon.id }}\"{% endif %}>
                        <i class=\"{{ taxon.children is not empty ? 'caret down' : 'angle left' }} icon\"></i>
                    </div>
                    <div class=\"sylius-tree__title\">
                        <a href=\"{{ path('sylius_admin_product_per_taxon_index', {'taxonId': taxon.id}) }}\"{% if not taxon.enabled %} class=\"text gray\"{% endif %}>
                            {{ taxon.name }}
                        </a>
                    </div>
                </div>
                {{ tree.render(taxon.children) }}
            </li>
        {% endfor %}
    </ul>
{% endmacro %}

<div class=\"ui vertical fluid labeled icon buttons\">
    <a href=\"{{ path('sylius_admin_product_index') }}\" class=\"ui primary button\">
        <i class=\"search icon\"></i>
        {{ 'sylius.ui.browse_all_products'|trans }}
    </a>

    <a href=\"{{ path('sylius_admin_taxon_create') }}\" class=\"ui button\">
        <i class=\"sitemap icon\"></i>
        {{ 'sylius.ui.manage_taxons'|trans }}
    </a>
</div>

<div class=\"ui segment sylius-tree hidden\" data-sylius-js-tree>
    <a href=\"#\" class=\"sylius-tree__toggle-all\" data-sylius-js-tree-trigger>
        <i class=\"icon\">&bull;</i>{{ 'sylius.ui.toggle_all'|trans }}
    </a>
    {{ tree.render(taxons) }}
</div>
", "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_treeWithoutButtons.html.twig");
    }
}
