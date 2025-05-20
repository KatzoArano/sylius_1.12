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

/* @SyliusResource/forms.html.twig */
class __TwigTemplate_2d32995ac99990b7b6a55c8158551413 extends Template
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
            'collection_widget' => [$this, 'block_collection_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusResource/forms.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusResource/forms.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 39
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 2
        $macros["_v0"] = $this->load("@SyliusResource/Macros/notification.html.twig", 2)->unwrap();
        // line 3
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 3, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 3, $this->source); })()), "class", [], "any", false, false, false, 3))) : ("")) . " controls collection-widget")]);
        // line 4
        yield "
    ";
        // line 5
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 6
            yield "        <div data-form-type=\"collection\"
             ";
            // line 7
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield "
             ";
            // line 8
            if ((array_key_exists("prototype", $context) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 8, $this->source); })()))) {
                // line 9
                yield "             data-prototype='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->getTemplateForMacro("macro_collectionItem", $context, 9, $this->getSourceContext())->macro_collectionItem(...[(isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 9, $this->source); })()), (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 9, $this->source); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new RuntimeError('Variable "button_delete_label" does not exist.', 9, $this->source); })()), "__name__"]));
                yield "'";
            }
            // line 10
            yield ">

            ";
            // line 12
            yield $macros["_v0"]->getTemplateForMacro("macro_error", $context, 12, $this->getSourceContext())->macro_error(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12)]);
            yield "

            ";
            // line 14
            if (is_iterable(((array_key_exists("prototypes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new RuntimeError('Variable "prototypes" does not exist.', 14, $this->source); })()))) : ("")))) {
                // line 15
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new RuntimeError('Variable "prototypes" does not exist.', 15, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                    // line 16
                    yield "                    <input type=\"hidden\"
                           data-form-prototype=\"";
                    // line 17
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\"
                           value=\"";
                    // line 18
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->getTemplateForMacro("macro_collectionItem", $context, 18, $this->getSourceContext())->macro_collectionItem(...[$context["subPrototype"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 18, $this->source); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new RuntimeError('Variable "button_delete_label" does not exist.', 18, $this->source); })()), "__name__"]));
                    yield "\" />
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['subPrototype'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                yield "            ";
            }
            // line 21
            yield "
            <div data-form-collection=\"list\"
                 class=\"row collection-list\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 25
                yield "                    ";
                yield $this->getTemplateForMacro("macro_collectionItem", $context, 25, $this->getSourceContext())->macro_collectionItem(...[$context["child"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 25, $this->source); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new RuntimeError('Variable "button_delete_label" does not exist.', 25, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 25)]);
                yield "
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
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "            </div>

            ";
            // line 29
            if ((array_key_exists("prototype", $context) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 29, $this->source); })()))) {
                // line 30
                yield "                <a href=\"#\" class=\"btn btn-success btn-block\"
                   data-form-collection=\"add\">
                    <i class=\"glyphicon glyphicon-plus\"></i>
                    ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["button_add_label"]) || array_key_exists("button_add_label", $context) ? $context["button_add_label"] : (function () { throw new RuntimeError('Variable "button_add_label" does not exist.', 33, $this->source); })())), "html", null, true);
                yield "
                </a>
            ";
            }
            // line 36
            yield "        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 5
        yield Twig\Extension\CoreExtension::spaceless($_v1);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
    public function macro_collectionItem($form = null, $allow_delete = null, $button_delete_label = null, $index = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "allow_delete" => $allow_delete,
            "button_delete_label" => $button_delete_label,
            "index" => $index,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collectionItem"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collectionItem"));

            // line 41
            yield "    ";
            $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 42
                yield "        <div data-form-collection=\"item\"
             data-form-collection-index=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 43, $this->source); })()), "html", null, true);
                yield "\"
             class=\"collection-item\">
            <div class=\"collection-box";
                // line 45
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })())) == 1)) {
                    yield " unique-field";
                }
                yield "\">
                ";
                // line 46
                if ((($tmp = (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "                    <p class=\"text-right\">
                        <a href=\"#\" data-form-collection=\"delete\" class=\"btn btn-danger\">
                            <i class=\"glyphicon glyphicon-remove collection-button-remove\"></i>
                            ";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new RuntimeError('Variable "button_delete_label" does not exist.', 50, $this->source); })())), "html", null, true);
                    yield "
                        </a>
                    </p>
                ";
                }
                // line 54
                yield "                ";
                if ((($tmp =  !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "children", [], "any", false, false, false, 54))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'widget');
                    yield "
                ";
                } else {
                    // line 57
                    yield "                    ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'rest');
                    yield "
                ";
                }
                // line 59
                yield "            </div>
        </div>
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 41
            yield Twig\Extension\CoreExtension::spaceless($_v2);
            
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
        return "@SyliusResource/forms.html.twig";
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
        return array (  279 => 41,  273 => 59,  267 => 57,  261 => 55,  258 => 54,  251 => 50,  246 => 47,  244 => 46,  238 => 45,  233 => 43,  230 => 42,  227 => 41,  206 => 40,  195 => 5,  190 => 36,  184 => 33,  179 => 30,  177 => 29,  173 => 27,  156 => 25,  139 => 24,  134 => 21,  131 => 20,  123 => 18,  119 => 17,  116 => 16,  111 => 15,  109 => 14,  104 => 12,  100 => 10,  95 => 9,  93 => 8,  89 => 7,  86 => 6,  84 => 5,  81 => 4,  78 => 3,  76 => 2,  63 => 1,  51 => 39,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block collection_widget -%}
    {% from '@SyliusResource/Macros/notification.html.twig' import error %}
    {% set attr = attr|merge({'class': attr.class|default ~ ' controls collection-widget'}) %}

    {% apply spaceless %}
        <div data-form-type=\"collection\"
             {{ block('widget_container_attributes') }}
             {% if prototype is defined and allow_add %}
             data-prototype='{{ _self.collectionItem(prototype, allow_delete, button_delete_label, '__name__')|e }}'
             {%- endif -%}>

            {{ error(form.vars.errors) }}

            {% if prototypes|default is iterable %}
                {% for key, subPrototype in prototypes %}
                    <input type=\"hidden\"
                           data-form-prototype=\"{{ key }}\"
                           value=\"{{ _self.collectionItem(subPrototype, allow_delete, button_delete_label, '__name__')|e }}\" />
                {% endfor %}
            {% endif %}

            <div data-form-collection=\"list\"
                 class=\"row collection-list\">
                {% for child in form %}
                    {{ _self.collectionItem(child, allow_delete, button_delete_label, loop.index0) }}
                {% endfor %}
            </div>

            {% if prototype is defined and allow_add %}
                <a href=\"#\" class=\"btn btn-success btn-block\"
                   data-form-collection=\"add\">
                    <i class=\"glyphicon glyphicon-plus\"></i>
                    {{ button_add_label|trans }}
                </a>
            {% endif %}
        </div>
    {% endapply %}
{%- endblock collection_widget %}

{% macro collectionItem(form, allow_delete, button_delete_label, index) %}
    {% apply spaceless %}
        <div data-form-collection=\"item\"
             data-form-collection-index=\"{{ index }}\"
             class=\"collection-item\">
            <div class=\"collection-box{% if form|length == 1 %} unique-field{% endif %}\">
                {% if allow_delete %}
                    <p class=\"text-right\">
                        <a href=\"#\" data-form-collection=\"delete\" class=\"btn btn-danger\">
                            <i class=\"glyphicon glyphicon-remove collection-button-remove\"></i>
                            {{ button_delete_label|trans }}
                        </a>
                    </p>
                {% endif %}
                {% if not form.children|length %}
                    {{ form_widget(form) }}
                {% else %}
                    {{ form_rest(form) }}
                {% endif %}
            </div>
        </div>
    {% endapply %}
{% endmacro %}
", "@SyliusResource/forms.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/resource-bundle/src/Bundle/Resources/views/forms.html.twig");
    }
}
