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

/* @SyliusResource/Macros/notification.html.twig */
class __TwigTemplate_4108c7eea8e5ed86772291dea055c9c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusResource/Macros/notification.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusResource/Macros/notification.html.twig"));

        // line 13
        yield "

";
        // line 41
        yield "
";
        // line 46
        yield "
";
        // line 51
        yield "
";
        // line 56
        yield "
";
        // line 61
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    public function macro_flashes(...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "flashes"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "flashes"));

            // line 3
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "flashBag", [], "any", false, false, false, 3), "all", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
                // line 4
                yield "        <div id=\"flashesMessage\" class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">
            <ul class=\"list-unstyled\">
                ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["flashes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 7
                    yield "                    <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                yield "            </ul>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['type'], $context['flashes'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function macro_alert($text = null, $type = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "type" => $type,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            // line 21
            yield "    ";
            $context["type"] = ("alert-" . ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 21, $this->source); })()), "info")) : ("info")));
            // line 22
            yield "
    ";
            // line 23
            if ((($tmp = ((array_key_exists("text", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 23, $this->source); })()))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "    <div class=\"alert ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })()), "html", null, true);
                yield "\">
        ";
                // line 25
                if (is_iterable((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 25, $this->source); })()))) {
                    // line 26
                    yield "            <ul class=\"form-type-errors list-unstyled\">
                ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 27, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                        // line 28
                        yield "                    <li>
                        <p class=\"text-";
                        // line 29
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()), "html", null, true);
                        yield "\">
                            ";
                        // line 30
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "message", [], "any", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, $context["line"], "messageParameters", [], "any", false, false, false, 30)), "html", null, true);
                        yield "
                        </p>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['line'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    yield "            </ul>
        ";
                } else {
                    // line 36
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 36, $this->source); })())), "html", null, true);
                    yield "
        ";
                }
                // line 38
                yield "    </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function macro_danger($text = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "danger"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "danger"));

            // line 43
            yield "    ";
            $macros["_v0"] = $this;
            // line 44
            yield "    ";
            yield $macros["_v0"]->getTemplateForMacro("macro_alert", $context, 44, $this->getSourceContext())->macro_alert(...[(isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 44, $this->source); })()), "danger"]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function macro_error($text = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "error"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "error"));

            // line 48
            yield "    ";
            $macros["_v1"] = $this;
            // line 49
            yield "    ";
            yield $macros["_v1"]->getTemplateForMacro("macro_danger", $context, 49, $this->getSourceContext())->macro_danger(...[(isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 49, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function macro_warning($text = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "warning"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "warning"));

            // line 53
            yield "    ";
            $macros["_v2"] = $this;
            // line 54
            yield "    ";
            yield $macros["_v2"]->getTemplateForMacro("macro_alert", $context, 54, $this->getSourceContext())->macro_alert(...[(isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 54, $this->source); })()), "warning"]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function macro_success($text = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "success"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "success"));

            // line 58
            yield "    ";
            $macros["_v3"] = $this;
            // line 59
            yield "    ";
            yield $macros["_v3"]->getTemplateForMacro("macro_alert", $context, 59, $this->getSourceContext())->macro_alert(...[(isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 59, $this->source); })()), "success"]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 62
    public function macro_info($text = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "info"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "info"));

            // line 63
            yield "    ";
            $macros["_v4"] = $this;
            // line 64
            yield "    ";
            yield $macros["_v4"]->getTemplateForMacro("macro_alert", $context, 64, $this->getSourceContext())->macro_alert(...[(isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 64, $this->source); })()), "info"]);
            yield "
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
        return "@SyliusResource/Macros/notification.html.twig";
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
        return array (  382 => 64,  379 => 63,  361 => 62,  346 => 59,  343 => 58,  325 => 57,  310 => 54,  307 => 53,  289 => 52,  274 => 49,  271 => 48,  253 => 47,  238 => 44,  235 => 43,  217 => 42,  203 => 38,  197 => 36,  193 => 34,  183 => 30,  179 => 29,  176 => 28,  172 => 27,  169 => 26,  167 => 25,  162 => 24,  160 => 23,  157 => 22,  154 => 21,  135 => 20,  117 => 9,  108 => 7,  104 => 6,  98 => 4,  93 => 3,  76 => 2,  64 => 61,  61 => 56,  58 => 51,  55 => 46,  52 => 41,  48 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Display all the flashes messages #}
{% macro flashes() %}
    {% for type, flashes in app.session.flashBag.all %}
        <div id=\"flashesMessage\" class=\"alert alert-{{ type }}\">
            <ul class=\"list-unstyled\">
                {% for flash in flashes %}
                    <li>{{ flash }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endfor %}
{% endmacro %}


{#
    Display a bootstrap alert :
    - text : Message to print (string or array)
    - type : danger | warning | success | info (Default : info)
#}
{% macro alert(text, type) %}
    {% set type = 'alert-' ~ type|default('info') %}

    {% if text|default %}
    <div class=\"alert {{ type }}\">
        {% if text is iterable %}
            <ul class=\"form-type-errors list-unstyled\">
                {% for line in text %}
                    <li>
                        <p class=\"text-{{ type }}\">
                            {{ line.message|trans(line.messageParameters) }}
                        </p>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            {{ text|trans }}
        {% endif %}
    </div>
    {% endif %}
{% endmacro %}

{% macro danger(text) %}
    {% from _self import alert %}
    {{ alert(text, 'danger') }}
{% endmacro %}

{% macro error(text) %}
    {% from _self import danger %}
    {{ danger(text) }}
{% endmacro %}

{% macro warning(text) %}
    {% from _self import alert %}
    {{ alert(text, 'warning') }}
{% endmacro %}

{% macro success(text) %}
    {% from _self import alert %}
    {{ alert(text, 'success') }}
{% endmacro %}

{% macro info(text) %}
    {% from _self import alert %}
    {{ alert(text, 'info') }}
{% endmacro %}
", "@SyliusResource/Macros/notification.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/resource-bundle/src/Bundle/Resources/views/Macros/notification.html.twig");
    }
}
