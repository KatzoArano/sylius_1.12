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

/* @SyliusUi/Macro/buttons.html.twig */
class __TwigTemplate_cb7fbfdbef2a8d052bf817bb9d256213 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/buttons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/buttons.html.twig"));

        // line 11
        yield "
";
        // line 21
        yield "
";
        // line 31
        yield "
";
        // line 41
        yield "
";
        // line 47
        yield "
";
        // line 53
        yield "
";
        // line 63
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_default($url = null, $message = null, $id = null, $icon = null, $class = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "id" => $id,
            "icon" => $icon,
            "class" => $class,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "default"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            yield "    <a class=\"ui ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 2, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "labeled ";
            }
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 2, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "icon ";
            }
            yield "button ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 2, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 2, $this->source); })()), "html", null, true);
                yield " ";
            }
            yield "\" ";
            if ((($tmp =  !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield " href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 2, $this->source); })()), "html", null, true);
            yield "\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("button", ((array_key_exists("id", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()), (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 2, $this->source); })()))) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 2, $this->source); })()))));
            yield ">
        ";
            // line 3
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 3, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 4
                yield "            <i class=\"icon ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 4, $this->source); })()), "html", null, true);
                yield "\"></i>
        ";
            }
            // line 6
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 6, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 7, $this->source); })())), "html", null, true);
                yield "
        ";
            }
            // line 9
            yield "    </a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function macro_show($url = null, $message = null, $id = null, $class = null, $labeled = true, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "id" => $id,
            "class" => $class,
            "labeled" => $labeled,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "show"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "show"));

            // line 13
            yield "    ";
            $macros["buttons"] = $this;
            // line 14
            yield "
    ";
            // line 15
            if ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new RuntimeError('Variable "labeled" does not exist.', 15, $this->source); })()))) {
                // line 16
                yield "        ";
                $context["message"] = "sylius.ui.show";
                // line 17
                yield "    ";
            }
            // line 18
            yield "
    ";
            // line 19
            yield $macros["buttons"]->getTemplateForMacro("macro_default", $context, 19, $this->getSourceContext())->macro_default(...[(isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 19, $this->source); })()), (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 19, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "search"]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function macro_create($url = null, $message = null, $id = null, $labeled = true, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "id" => $id,
            "labeled" => $labeled,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "create"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "create"));

            // line 23
            yield "    ";
            $macros["buttons"] = $this;
            // line 24
            yield "
    ";
            // line 25
            if ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 25, $this->source); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new RuntimeError('Variable "labeled" does not exist.', 25, $this->source); })()))) {
                // line 26
                yield "        ";
                $context["message"] = "sylius.ui.create";
                // line 27
                yield "    ";
            }
            // line 28
            yield "
    ";
            // line 29
            yield $macros["buttons"]->getTemplateForMacro("macro_default", $context, 29, $this->getSourceContext())->macro_default(...[(isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 29, $this->source); })()), (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 29, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 29, $this->source); })()), "plus", "primary"]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function macro_edit($url = null, $message = null, $id = null, $labeled = true, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "id" => $id,
            "labeled" => $labeled,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "edit"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "edit"));

            // line 33
            yield "    ";
            $macros["buttons"] = $this;
            // line 34
            yield "
    ";
            // line 35
            if ((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 35, $this->source); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new RuntimeError('Variable "labeled" does not exist.', 35, $this->source); })()))) {
                // line 36
                yield "        ";
                $context["message"] = "sylius.ui.edit";
                // line 37
                yield "    ";
            }
            // line 38
            yield "
    ";
            // line 39
            yield $macros["buttons"]->getTemplateForMacro("macro_default", $context, 39, $this->getSourceContext())->macro_default(...[(isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 39, $this->source); })()), (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 39, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 39, $this->source); })()), "pencil"]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function macro_filter($message = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "message" => $message,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "filter"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "filter"));

            // line 43
            yield "    <button class=\"ui blue labeled icon button\" type=\"submit\">
        <i class=\"icon search\"></i> ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 44, $this->source); })()))) ? ("sylius.ui.filter") : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 44, $this->source); })())))), "html", null, true);
            yield "
    </button>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 48
    public function macro_resetFilters($url = null, $message = null, ...$varargs): string|Markup
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
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "resetFilters"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "resetFilters"));

            // line 49
            yield "    <a class=\"ui labeled icon button\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "\">
        <i class=\"icon remove\"></i> ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 50, $this->source); })()))) ? ("sylius.ui.clear_filters") : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 50, $this->source); })())))), "html", null, true);
            yield "
    </a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 54
    public function macro_delete($url = null, $message = null, $labeled = true, $resourceId = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "labeled" => $labeled,
            "resourceId" => $resourceId,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "delete"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "delete"));

            // line 55
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red ";
            // line 57
            if ((($tmp = (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new RuntimeError('Variable "labeled" does not exist.', 57, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "labeled ";
            }
            yield "icon button\" type=\"submit\" data-requires-confirmation ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("delete-button");
            yield ">
            <i class=\"icon trash\"></i> ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 58, $this->source); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new RuntimeError('Variable "labeled" does not exist.', 58, $this->source); })()))) ? ("sylius.ui.delete") : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 58, $this->source); })())))), "html", null, true);
            yield "
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["resourceId"]) || array_key_exists("resourceId", $context) ? $context["resourceId"] : (function () { throw new RuntimeError('Variable "resourceId" does not exist.', 60, $this->source); })())), "html", null, true);
            yield "\" />
    </form>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 64
    public function macro_bulkDelete($url = null, $message = null, $labeled = true, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "message" => $message,
            "labeled" => $labeled,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "bulkDelete"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "bulkDelete"));

            // line 65
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 65, $this->source); })()), "html", null, true);
            yield "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red ";
            // line 67
            if ((($tmp = (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new RuntimeError('Variable "labeled" does not exist.', 67, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "labeled ";
            }
            yield "icon button\" type=\"submit\" data-bulk-action-requires-confirmation disabled>
            <i class=\"icon trash\"></i> ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 68, $this->source); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new RuntimeError('Variable "labeled" does not exist.', 68, $this->source); })()))) ? ("sylius.ui.delete") : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 68, $this->source); })())))), "html", null, true);
            yield "
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("bulk_delete"), "html", null, true);
            yield "\" />
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
        return "@SyliusUi/Macro/buttons.html.twig";
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
        return array (  480 => 70,  475 => 68,  469 => 67,  463 => 65,  443 => 64,  428 => 60,  423 => 58,  415 => 57,  409 => 55,  388 => 54,  373 => 50,  368 => 49,  349 => 48,  334 => 44,  331 => 43,  313 => 42,  299 => 39,  296 => 38,  293 => 37,  290 => 36,  288 => 35,  285 => 34,  282 => 33,  261 => 32,  247 => 29,  244 => 28,  241 => 27,  238 => 26,  236 => 25,  233 => 24,  230 => 23,  209 => 22,  195 => 19,  192 => 18,  189 => 17,  186 => 16,  184 => 15,  181 => 14,  178 => 13,  156 => 12,  143 => 9,  137 => 7,  134 => 6,  128 => 4,  126 => 3,  100 => 2,  78 => 1,  66 => 63,  63 => 53,  60 => 47,  57 => 41,  54 => 31,  51 => 21,  48 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro default(url, message, id, icon, class) %}
    <a class=\"ui {% if message is not empty %}labeled {% endif %}{% if icon is not empty %}icon {% endif %}button {% if class is not empty %} {{ class }} {% endif %}\" {% if id is not null %} id=\"{{ id }}\"{% endif %} href=\"{{ url }}\" {{ sylius_test_html_attribute('button', id|default(message)) }}>
        {% if icon is not empty %}
            <i class=\"icon {{ icon }}\"></i>
        {% endif %}
        {% if message is not empty %}
            {{ message|trans }}
        {% endif %}
    </a>
{% endmacro %}

{% macro show(url, message, id, class, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.show' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'search') }}
{% endmacro %}

{% macro create(url, message, id, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.create' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'plus', 'primary') }}
{% endmacro %}

{% macro edit(url, message, id, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.edit' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'pencil') }}
{% endmacro %}

{% macro filter(message) %}
    <button class=\"ui blue labeled icon button\" type=\"submit\">
        <i class=\"icon search\"></i> {{ (message is empty ? 'sylius.ui.filter' : message)|trans }}
    </button>
{% endmacro %}

{% macro resetFilters(url, message) %}
    <a class=\"ui labeled icon button\" href=\"{{ url }}\">
        <i class=\"icon remove\"></i> {{ (message is empty ? 'sylius.ui.clear_filters' : message)|trans }}
    </a>
{% endmacro %}

{% macro delete(url, message, labeled = true, resourceId = null) %}
    <form action=\"{{ url }}\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red {% if labeled %}labeled {% endif %}icon button\" type=\"submit\" data-requires-confirmation {{ sylius_test_html_attribute('delete-button') }}>
            <i class=\"icon trash\"></i> {{ ((message is empty and labeled) ? 'sylius.ui.delete' : message)|trans }}
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(resourceId) }}\" />
    </form>
{% endmacro %}

{% macro bulkDelete(url, message, labeled = true) %}
    <form action=\"{{ url }}\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red {% if labeled %}labeled {% endif %}icon button\" type=\"submit\" data-bulk-action-requires-confirmation disabled>
            <i class=\"icon trash\"></i> {{ ((message is empty and labeled) ? 'sylius.ui.delete' : message)|trans }}
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('bulk_delete') }}\" />
    </form>
{% endmacro %}
", "@SyliusUi/Macro/buttons.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/buttons.html.twig");
    }
}
