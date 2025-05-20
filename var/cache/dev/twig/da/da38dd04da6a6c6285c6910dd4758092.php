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

/* @SyliusAdmin/Taxon/_treeWithButtons.html.twig */
class __TwigTemplate_d2eba491f4271df3bff7164f2ad8841b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusUi/Macro/buttons.html.twig", 1)->unwrap();
        // line 2
        $macros["tree"] = $this->macros["tree"] = $this;
        // line 3
        yield "
";
        // line 56
        yield "
<div class=\"ui segment sylius-tree hidden\" data-sylius-js-tree>
    <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create");
        yield "\" class=\"ui fluid labeled icon primary button\">
        <i class=\"plus icon\"></i>
        ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create"), "html", null, true);
        yield "
    </a>

    <div class=\"ui hidden divider small\"></div>

    <a href=\"#\" class=\"sylius-tree__toggle-all\" data-sylius-js-tree-trigger>
        <i class=\"icon\">&bull;</i>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.toggle_all"), "html", null, true);
        yield "
    </a>
    ";
        // line 68
        yield $macros["tree"]->getTemplateForMacro("macro_render", $context, 68, $this->getSourceContext())->macro_render(...[(isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new RuntimeError('Variable "taxons" does not exist.', 68, $this->source); })())]);
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
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

            // line 5
            yield "    ";
            $macros["buttons"] = $this->load("@SyliusUi/Macro/buttons.html.twig", 5)->unwrap();
            // line 6
            yield "    ";
            $macros["tree"] = $this;
            // line 7
            yield "
    <ul>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new RuntimeError('Variable "taxons" does not exist.', 9, $this->source); })()), function ($__taxon__) use ($context, $macros) { $context["taxon"] = $__taxon__; return  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 9)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 10
                yield "            <li data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 10), "html", null, true);
                yield "\" ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 10))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-sylius-js-tree-parent=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 10), "html", null, true);
                    yield "\"";
                }
                yield ">
                <div class=\"sylius-tree__item\">
                    <div class=\"sylius-tree__icon\" ";
                // line 12
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 12))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-sylius-js-tree-trigger=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 12), "html", null, true);
                    yield "\"";
                }
                yield ">
                        <i class=\"";
                // line 13
                yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 13))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("caret down") : ("angle left"));
                yield " icon\"></i>
                    </div>
                    <div class=\"sylius-tree__title\">
                        <a href=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_per_taxon_index", ["taxonId" => CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 16)]), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "enabled", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " class=\"text gray\"";
                }
                yield ">
                            ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "name", [], "any", false, false, false, 17), "html", null, true);
                yield "
                        </a>
                    </div>
                    <div class=\"sylius-tree__action\">
                        <form action=\"";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                yield "\" method=\"post\">
                            <div class=\"ui tiny basic icon top right pointing dropdown button sylius-tree__action__trigger\">
                            <i class=\"ellipsis horizontal icon\"></i>
                                <div class=\"menu\">
                                    <a class=\"item\" href=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create_for_parent", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                yield "\">
                                        <i class=\"plus icon blue\"></i>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create"), "html", null, true);
                yield "
                                    </a>
                                    <a class=\"item\" href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\">
                                        <i class=\"pencil icon grey\"></i>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true);
                yield "
                                    </a>
                                    <button class=\"item\" type=\"submit\" style=\"width: 100%;\" data-requires-confirmation>
                                        <i class=\"icon trash red\"></i>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
                yield "
                                    </button>

                                    <div class=\"divider\"></div>

                                    <div class=\"item sylius-taxon-move-up\" data-url=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_move_up", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\">
                                        <i class=\"arrow up icon grey\"></i>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.move_up"), "html", null, true);
                yield "
                                    </div>
                                    <div class=\"item sylius-taxon-move-down\" data-url=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_move_down", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                yield "\">
                                        <i class=\"arrow down icon grey\"></i>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.move_down"), "html", null, true);
                yield "
                                    </div>

                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 45)), "html", null, true);
                yield "\" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                ";
                // line 51
                yield $macros["tree"]->getTemplateForMacro("macro_render", $context, 51, $this->getSourceContext())->macro_render(...[CoreExtension::getAttribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 51)]);
                yield "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['taxon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
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
        return "@SyliusAdmin/Taxon/_treeWithButtons.html.twig";
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
        return array (  237 => 54,  228 => 51,  219 => 45,  212 => 41,  208 => 40,  203 => 38,  199 => 37,  191 => 32,  185 => 29,  181 => 28,  176 => 26,  172 => 25,  165 => 21,  158 => 17,  150 => 16,  144 => 13,  136 => 12,  124 => 10,  120 => 9,  116 => 7,  113 => 6,  110 => 5,  92 => 4,  78 => 68,  73 => 66,  64 => 60,  59 => 58,  55 => 56,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import _self as tree %}

{% macro render(taxons) %}
    {% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
    {% import _self as tree %}

    <ul>
        {% for taxon in taxons|filter(taxon => taxon.id is not null) %}
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
                    <div class=\"sylius-tree__action\">
                        <form action=\"{{ path('sylius_admin_taxon_delete', { 'id': taxon.id }) }}\" method=\"post\">
                            <div class=\"ui tiny basic icon top right pointing dropdown button sylius-tree__action__trigger\">
                            <i class=\"ellipsis horizontal icon\"></i>
                                <div class=\"menu\">
                                    <a class=\"item\" href=\"{{ path('sylius_admin_taxon_create_for_parent', { 'id': taxon.id }) }}\">
                                        <i class=\"plus icon blue\"></i>{{ 'sylius.ui.create'|trans }}
                                    </a>
                                    <a class=\"item\" href=\"{{ path('sylius_admin_taxon_update', { 'id': taxon.id }) }}\">
                                        <i class=\"pencil icon grey\"></i>{{ 'sylius.ui.edit'|trans }}
                                    </a>
                                    <button class=\"item\" type=\"submit\" style=\"width: 100%;\" data-requires-confirmation>
                                        <i class=\"icon trash red\"></i>{{ 'sylius.ui.delete'|trans }}
                                    </button>

                                    <div class=\"divider\"></div>

                                    <div class=\"item sylius-taxon-move-up\" data-url=\"{{ path('sylius_admin_ajax_taxon_move_up', { id: taxon.id }) }}\">
                                        <i class=\"arrow up icon grey\"></i>{{ 'sylius.ui.move_up'|trans }}
                                    </div>
                                    <div class=\"item sylius-taxon-move-down\" data-url=\"{{ path('sylius_admin_ajax_taxon_move_down', { id: taxon.id }) }}\">
                                        <i class=\"arrow down icon grey\"></i>{{ 'sylius.ui.move_down'|trans }}
                                    </div>

                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(taxon.id) }}\" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{ tree.render(taxon.children) }}
            </li>
        {% endfor %}
    </ul>
{% endmacro %}

<div class=\"ui segment sylius-tree hidden\" data-sylius-js-tree>
    <a href=\"{{ path('sylius_admin_taxon_create') }}\" class=\"ui fluid labeled icon primary button\">
        <i class=\"plus icon\"></i>
        {{ 'sylius.ui.create'|trans }}
    </a>

    <div class=\"ui hidden divider small\"></div>

    <a href=\"#\" class=\"sylius-tree__toggle-all\" data-sylius-js-tree-trigger>
        <i class=\"icon\">&bull;</i>{{ 'sylius.ui.toggle_all'|trans }}
    </a>
    {{ tree.render(taxons) }}
</div>
", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_treeWithButtons.html.twig");
    }
}
