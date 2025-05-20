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

/* @SyliusResource/Macros/buttons.html.twig */
class __TwigTemplate_29a8b5498d8f8b38544582e354458ecf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusResource/Macros/buttons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusResource/Macros/buttons.html.twig"));

        // line 6
        yield "
";
        // line 12
        yield "
";
        // line 18
        yield "
";
        // line 24
        yield "
";
        // line 39
        yield "
";
        // line 45
        yield "
";
        // line 54
        yield "
";
        // line 63
        yield "
";
        // line 72
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_show($url = null, $message = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "show"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "show"));

            // line 2
            yield "<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 2, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-default\">
   <i class=\"glyphicon glyphicon-book\"></i><span>";
            // line 3
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 3, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 3, $this->source); })()), "html", null, true)));
            yield "</span>
</a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function macro_generic($url = null, $message = null, $icon = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "icon" => $icon,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "generic"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "generic"));

            // line 8
            yield "<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-default\">
    ";
            // line 9
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 9, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<i class=\"glyphicon glyphicon-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 9, $this->source); })()), "html", null, true);
                yield "\"></i>";
            }
            yield "<span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 9, $this->source); })()), "html", null, true);
            yield "</span>
</a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function macro_create($url = null, $message = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "create"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "create"));

            // line 14
            yield "<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-plus-sign\"></i><span>";
            // line 15
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })()), "html", null, true)));
            yield "</span>
</a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function macro_edit($url = null, $message = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "edit"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "edit"));

            // line 20
            yield "<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-pencil\"></i><span>";
            // line 21
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 21, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 21, $this->source); })()), "html", null, true)));
            yield "</span>
</a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function macro_delete($url = null, $message = null, $disabled = false, $modal = true, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "disabled" => $disabled,
            "modal" => $modal,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "delete"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "delete"));

            // line 26
            if ((($tmp = (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 26, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "<span class=\"btn btn-danger disabled\">
    <i class=\"glyphicon glyphicon-trash\"></i><span>";
                // line 28
                yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 28, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 28, $this->source); })()), "html", null, true)));
                yield "</span>
</span>
";
            } else {
                // line 31
                yield "<form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 31, $this->source); })()), "html", null, true);
                yield "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <button class=\"btn btn-danger";
                // line 33
                if ((($tmp = (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " btn-confirm";
                }
                yield "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-trash\"></i> <span>";
                // line 34
                yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 34, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 34, $this->source); })()), "html", null, true)));
                yield "</span>
    </button>
</form>
";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 40
    public function macro_manage($url = null, $message = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "manage"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "manage"));

            // line 41
            yield "<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-success\">
    <i class=\"glyphicon glyphicon-folder-open\"></i><span>";
            // line 42
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 42, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.manage"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 42, $this->source); })()), "html", null, true)));
            yield "</span>
</a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 46
    public function macro_move($url = null, $direction = null, $first = false, $last = false, $message = "", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "direction" => $direction,
            "first" => $first,
            "last" => $last,
            "message" => $message,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "move"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "move"));

            // line 47
            yield "<form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <button title=\"";
            // line 49
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 49, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius.ui.move_" . (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 49, $this->source); })()))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 49, $this->source); })()), "html", null, true)));
            yield "\" class=\"btn btn-default ";
            if (((("up" == (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 49, $this->source); })())) && (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 49, $this->source); })())) || (("down" == (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 49, $this->source); })())) && (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 49, $this->source); })())))) {
                yield "disabled";
            }
            yield "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-arrow-";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 50, $this->source); })()), "html", null, true);
            yield "\"></i>
    </button>
</form>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function macro_patch($url = null, $message = null, $icon = null, $button = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "icon" => $icon,
            "button" => $button,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "patch"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "patch"));

            // line 56
            yield "<form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 56, $this->source); })()), "html", null, true);
            yield "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 58, $this->source); })()), "success")) : ("success")), "html", null, true);
            yield "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 59, $this->source); })()), "transfer")) : ("transfer")), "html", null, true);
            yield "\"></i> <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 59, $this->source); })()), "html", null, true);
            yield "</span>
    </button>
</form>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 64
    public function macro_enable($url = null, $message = null, $icon = null, $button = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "icon" => $icon,
            "button" => $button,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "enable"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "enable"));

            // line 65
            yield "<form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 65, $this->source); })()), "html", null, true);
            yield "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 67, $this->source); })()), "success")) : ("success")), "html", null, true);
            yield "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 68, $this->source); })()), "ok")) : ("ok")), "html", null, true);
            yield "\"></i> <span>";
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 68, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enable"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 68, $this->source); })()), "html", null, true)));
            yield "</span>
    </button>
</form>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 73
    public function macro_disable($url = null, $message = null, $icon = null, $button = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "icon" => $icon,
            "button" => $button,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "disable"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "disable"));

            // line 74
            yield "<form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 74, $this->source); })()), "html", null, true);
            yield "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 76, $this->source); })()), "danger")) : ("danger")), "html", null, true);
            yield "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 77, $this->source); })()), "remove")) : ("remove")), "html", null, true);
            yield "\"></i> <span>";
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 77, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.disable"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 77, $this->source); })()), "html", null, true)));
            yield "</span>
    </button>
</form>
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
        return "@SyliusResource/Macros/buttons.html.twig";
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
        return array (  528 => 77,  524 => 76,  518 => 74,  497 => 73,  479 => 68,  475 => 67,  469 => 65,  448 => 64,  430 => 59,  426 => 58,  420 => 56,  399 => 55,  383 => 50,  375 => 49,  369 => 47,  347 => 46,  332 => 42,  327 => 41,  308 => 40,  291 => 34,  285 => 33,  279 => 31,  273 => 28,  270 => 27,  268 => 26,  247 => 25,  232 => 21,  227 => 20,  208 => 19,  193 => 15,  188 => 14,  169 => 13,  148 => 9,  143 => 8,  123 => 7,  108 => 3,  103 => 2,  84 => 1,  72 => 72,  69 => 63,  66 => 54,  63 => 45,  60 => 39,  57 => 24,  54 => 18,  51 => 12,  48 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro show(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-default\">
   <i class=\"glyphicon glyphicon-book\"></i><span>{{ message is empty ? 'sylius.ui.details'|trans : message }}</span>
</a>
{% endmacro %}

{% macro generic(url, message, icon) %}
<a href=\"{{ url }}\" class=\"btn btn-default\">
    {% if icon is not empty %}<i class=\"glyphicon glyphicon-{{ icon }}\"></i>{% endif %}<span>{{ message }}</span>
</a>
{% endmacro %}

{% macro create(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-plus-sign\"></i><span>{{ message is empty ? 'sylius.ui.create'|trans : message }}</span>
</a>
{% endmacro %}

{% macro edit(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-pencil\"></i><span>{{ message is empty ? 'sylius.ui.edit'|trans : message }}</span>
</a>
{% endmacro %}

{% macro delete(url, message, disabled=false, modal=true) %}
{% if disabled %}
<span class=\"btn btn-danger disabled\">
    <i class=\"glyphicon glyphicon-trash\"></i><span>{{ message is empty ? 'sylius.ui.delete'|trans : message }}</span>
</span>
{% else %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <button class=\"btn btn-danger{% if modal %} btn-confirm{% endif %}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-trash\"></i> <span>{{ message is empty ? 'sylius.ui.delete'|trans : message }}</span>
    </button>
</form>
{% endif %}
{% endmacro %}

{% macro manage(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-success\">
    <i class=\"glyphicon glyphicon-folder-open\"></i><span>{{ message is empty ? 'sylius.ui.manage'|trans : message }}</span>
</a>
{% endmacro %}

{% macro move(url, direction, first=false, last=false, message='') %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <button title=\"{{ message is empty ? ('sylius.ui.move_'~direction)|trans : message }}\" class=\"btn btn-default {% if ('up' == direction and first) or ('down' == direction and last) %}disabled{% endif %}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-arrow-{{ direction }}\"></i>
    </button>
</form>
{% endmacro %}

{% macro patch(url, message, icon, button) %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-{{ button|default('success') }}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-{{ icon|default('transfer') }}\"></i> <span>{{ message }}</span>
    </button>
</form>
{% endmacro %}

{% macro enable(url, message, icon, button) %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-{{ button|default('success') }}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-{{ icon|default('ok') }}\"></i> <span>{{ message is empty ? 'sylius.ui.enable'|trans : message }}</span>
    </button>
</form>
{% endmacro %}

{% macro disable(url, message, icon, button) %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-{{ button|default('danger') }}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-{{ icon|default('remove') }}\"></i> <span>{{ message is empty ? 'sylius.ui.disable'|trans : message }}</span>
    </button>
</form>
{% endmacro %}
", "@SyliusResource/Macros/buttons.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/resource-bundle/src/Bundle/Resources/views/Macros/buttons.html.twig");
    }
}
