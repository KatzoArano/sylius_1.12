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

/* @SyliusAdmin/Product/Attribute/attributesCollection.html.twig */
class __TwigTemplate_8cb12aed739d684441a36d099db740af extends Template
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
            'collection_widget' => [$this, 'block_collection_widget'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusAdmin/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig"));

        $this->parent = $this->load("@SyliusAdmin/Form/theme.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        $macros["self"] = $this;
        // line 5
        yield "
    <div>
        ";
        // line 7
        $context["attributes"] = [];
        // line 8
        yield "
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 10
            yield "            ";
            $context["code"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 10), "data", [], "any", false, false, false, 10), "attribute", [], "any", false, false, false, 10), "code", [], "any", false, false, false, 10);
            // line 11
            yield "
            ";
            // line 12
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 12, $this->source); })()), [], "array", true, true, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                yield "                ";
                $context["attributes"] = Twig\Extension\CoreExtension::merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 13, $this->source); })()), [ (string)(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 13, $this->source); })()) => []]);
                // line 14
                yield "            ";
            }
            // line 15
            yield "
            ";
            // line 16
            $context["attributes"] = Twig\Extension\CoreExtension::merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 16, $this->source); })()), [ (string)(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 16, $this->source); })()) => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 16, $this->source); })()), (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16), [$context["child"]])]);
            // line 17
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
            // line 20
            yield "            <div class=\"attributes-group\" data-attribute-code=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\">
                <div class=\"attributes-header\">
                    <strong>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], 0, [], "array", false, false, false, 22), "value", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "label", [], "any", false, false, false, 22), "html", null, true);
            yield "</strong>
                    <div>
                        <button class=\"ui basic red labeled icon button\" data-attribute=\"delete\">
                            <i class=\"remove icon\"></i>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
            yield "
                        </button>
                    </div>
                </div>
                <div class=\"attributes-list\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["attribute"]);
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 31
                yield "                        ";
                yield $macros["self"]->getTemplateForMacro("macro_collection_item", $context, 31, $this->getSourceContext())->macro_collection_item(...[$context["child"]]);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
    public function macro_collection_item($form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_item"));

            // line 40
            yield "    ";
            $macros["flags"] = $this->load("@SyliusUi/Macro/flags.html.twig", 40)->unwrap();
            // line 41
            yield "
    <div class=\"attribute\" data-id=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "data", [], "any", false, false, false, 42), "attribute", [], "any", false, false, false, 42), "code", [], "any", false, false, false, 42), "html", null, true);
            yield "\">
        <div class=\"attribute-row\">
            <div class=\"attribute-label";
            // line 44
            if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "localeCode", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "localeCode", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44) == (isset($context["sylius_base_locale"]) || array_key_exists("sylius_base_locale", $context) ? $context["sylius_base_locale"] : (function () { throw new RuntimeError('Variable "sylius_base_locale" does not exist.', 44, $this->source); })())))) {
                yield " required field";
            }
            yield "\">
                <label>
                    ";
            // line 46
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "localeCode", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "value", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 47
                yield "                        <span class=\"language\">";
                yield $macros["flags"]->getTemplateForMacro("macro_fromLocaleCode", $context, 47, $this->getSourceContext())->macro_fromLocaleCode(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "localeCode", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47)]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_locale_name')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "localeCode", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47)), "html", null, true);
                yield "</span>
                        <br>
                    ";
            } else {
                // line 50
                yield "                        <i class=\"globe icon\"></i>
                    ";
            }
            // line 52
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "attribute", [], "any", false, false, false, 52), "translation", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "localeCode", [], "any", false, false, false, 52)], "method", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
            yield "
                </label>
            </div>
            <div class=\"attribute-input\" data-test-product-attribute-value-in-locale=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%s %s", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "data", [], "any", false, false, false, 55), "attribute", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "localeCode", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55)), "html", null, true);
            yield "\">
                <div ";
            // line 56
            yield ((CoreExtension::inFilter("checkbox", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "children", [], "any", false, false, false, 56), "value", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "block_prefixes", [], "any", false, false, false, 56))) ? ("class=\"ui toggle checkbox\"") : (""));
            yield ">
                    ";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "value", [], "any", false, false, false, 57), 'widget');
            yield "
                </div>
            </div>
            <div class=\"attribute-action\">
                ";
            // line 61
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "localeCode", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "value", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "                    <a href=\"#\" class=\"ui basic button\" data-attribute=\"copy\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.apply_to_all"), "html", null, true);
                yield "</a>
                ";
            }
            // line 64
            yield "            </div>
            <div class=\"attribute-error\">
                ";
            // line 66
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "value", [], "any", false, false, false, 66), 'errors');
            yield "
            </div>
        </div>
        <input type=\"hidden\" name=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "attribute", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "full_name", [], "any", false, false, false, 69), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "attribute", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "data", [], "any", false, false, false, 69), "attribute", [], "any", false, false, false, 69), "code", [], "any", false, false, false, 69), "html", null, true);
            yield "\"/>
        <input type=\"hidden\" name=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "localeCode", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "full_name", [], "any", false, false, false, 70), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "localeCode", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "localeCode", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "value", [], "any", false, false, false, 70), "html", null, true);
            yield "\"/>
    </div>
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
        return "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig";
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
        return array (  274 => 70,  266 => 69,  260 => 66,  256 => 64,  250 => 62,  248 => 61,  241 => 57,  237 => 56,  233 => 55,  226 => 52,  222 => 50,  213 => 47,  211 => 46,  204 => 44,  199 => 42,  196 => 41,  193 => 40,  175 => 39,  164 => 36,  156 => 33,  147 => 31,  143 => 30,  135 => 25,  129 => 22,  123 => 20,  119 => 19,  116 => 18,  110 => 17,  108 => 16,  105 => 15,  102 => 14,  99 => 13,  97 => 12,  94 => 11,  91 => 10,  87 => 9,  84 => 8,  82 => 7,  78 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusAdmin/Form/theme.html.twig' %}

{% block collection_widget -%}
    {% import _self as self %}

    <div>
        {% set attributes = {} %}

        {% for child in form %}
            {% set code = child.vars.data.attribute.code %}

            {% if attributes[code] is not defined %}
                {% set attributes = attributes|merge({ (code): [] }) %}
            {% endif %}

            {% set attributes = attributes|merge({ (code): attributes[code]|merge([child]) }) %}
        {% endfor %}

        {% for key, attribute in attributes %}
            <div class=\"attributes-group\" data-attribute-code=\"{{ key }}\">
                <div class=\"attributes-header\">
                    <strong>{{ attribute[0].value.vars.label }}</strong>
                    <div>
                        <button class=\"ui basic red labeled icon button\" data-attribute=\"delete\">
                            <i class=\"remove icon\"></i>{{ 'sylius.ui.delete'|trans }}
                        </button>
                    </div>
                </div>
                <div class=\"attributes-list\">
                    {% for child in attribute %}
                        {{ self.collection_item(child) }}
                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{%- endblock collection_widget %}

{% macro collection_item(form) %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"attribute\" data-id=\"{{ form.vars.data.attribute.code }}\">
        <div class=\"attribute-row\">
            <div class=\"attribute-label{% if not form.localeCode.vars.value or form.localeCode.vars.value == sylius_base_locale %} required field{% endif %}\">
                <label>
                    {% if form.localeCode.vars.value %}
                        <span class=\"language\">{{ flags.fromLocaleCode(form.localeCode.vars.value) }} {{ form.localeCode.vars.value|sylius_locale_name }}</span>
                        <br>
                    {% else %}
                        <i class=\"globe icon\"></i>
                    {% endif %}
                    {{ form.vars.value.attribute.translation(form.vars.value.localeCode).name }}
                </label>
            </div>
            <div class=\"attribute-input\" data-test-product-attribute-value-in-locale=\"{{ \"%s %s\"|format(form.vars.data.attribute.name, form.localeCode.vars.value) }}\">
                <div {{ 'checkbox' in form.children.value.vars.block_prefixes ? 'class=\"ui toggle checkbox\"' : '' }}>
                    {{ form_widget(form.value) }}
                </div>
            </div>
            <div class=\"attribute-action\">
                {% if form.localeCode.vars.value %}
                    <a href=\"#\" class=\"ui basic button\" data-attribute=\"copy\">{{ 'sylius.ui.apply_to_all'|trans }}</a>
                {% endif %}
            </div>
            <div class=\"attribute-error\">
                {{ form_errors(form.value) }}
            </div>
        </div>
        <input type=\"hidden\" name=\"{{ form.attribute.vars.full_name }}\" id=\"{{ form.attribute.vars.id }}\" value=\"{{ form.vars.data.attribute.code }}\"/>
        <input type=\"hidden\" name=\"{{ form.localeCode.vars.full_name }}\" id=\"{{ form.localeCode.vars.id }}\" value=\"{{ form.localeCode.vars.value }}\"/>
    </div>
{% endmacro %}
", "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributesCollection.html.twig");
    }
}
