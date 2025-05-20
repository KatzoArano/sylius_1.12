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

/* @SyliusAdmin/Product/Attribute/attributeValues.html.twig */
class __TwigTemplate_9fea2bc15097d9761bfb90d47c434862 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Attribute/attributeValues.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Attribute/attributeValues.html.twig"));

        // line 1
        $macros["self"] = $this->macros["self"] = $this;
        // line 2
        $macros["flags"] = $this->macros["flags"] = $this->load("@SyliusUi/Macro/flags.html.twig", 2)->unwrap();
        // line 3
        yield "
";
        // line 4
        $context["subject"] = Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), ["_attribute" => ""]);
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["code"] => $context["localeCodes"]) {
            // line 6
            yield "    <div class=\"attributes-group\" data-attribute-code=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["code"], "html", null, true);
            yield "\">
        <div class=\"attributes-header\">
            <strong>";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeCodes"]), "vars", [], "any", false, false, false, 8), "label", [], "any", false, false, false, 8), "html", null, true);
            yield "</strong>
            <div>
                <button class=\"ui basic red labeled icon button\" data-attribute=\"delete\">
                    <i class=\"remove icon\"></i>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
            yield "
                </button>
            </div>
        </div>
        <div class=\"attributes-list\">
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["localeCodes"]);
            foreach ($context['_seq'] as $context["localeCode"] => $context["form"]) {
                // line 17
                yield "                <div class=\"attribute\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["code"], "html", null, true);
                yield "\">
                    ";
                // line 18
                $context["id"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form"], "vars", [], "any", false, false, false, 18), "label", [], "any", false, false, false, 18), [" " => "_"]));
                // line 19
                yield "                    <div class=\"attribute-row\">
                        <div class=\"attribute-label";
                // line 20
                if (( !$context["localeCode"] || ($context["localeCode"] == (isset($context["sylius_base_locale"]) || array_key_exists("sylius_base_locale", $context) ? $context["sylius_base_locale"] : (function () { throw new RuntimeError('Variable "sylius_base_locale" does not exist.', 20, $this->source); })())))) {
                    yield " required field";
                }
                yield "\">
                            <label>
                                ";
                // line 22
                if ((($tmp = $context["localeCode"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 23
                    yield "                                    <span class=\"language\">";
                    yield $macros["flags"]->getTemplateForMacro("macro_fromLocaleCode", $context, 23, $this->getSourceContext())->macro_fromLocaleCode(...[$context["localeCode"]]);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_locale_name')->getCallable()($context["localeCode"]), "html", null, true);
                    yield "</span>
                                    <br>
                                ";
                } else {
                    // line 26
                    yield "                                    <i class=\"globe icon\"></i>
                                ";
                }
                // line 28
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form"], "vars", [], "any", false, false, false, 28), "label", [], "any", false, false, false, 28), "html", null, true);
                yield "
                            </label>
                        </div>
                        <div class=\"attribute-input\" data-test-product-attribute-value-in-locale=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%s %s", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form"], "vars", [], "any", false, false, false, 31), "label", [], "any", false, false, false, 31), $context["localeCode"]), "html", null, true);
                yield "\">
                            ";
                // line 32
                if (CoreExtension::inFilter("type_checkbox", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form"], "vars", [], "any", false, false, false, 32), "cache_key", [], "any", false, false, false, 32))) {
                    // line 33
                    yield "                                <div class=\"ui toggle checkbox\">
                                    ";
                    // line 34
                    yield $macros["self"]->getTemplateForMacro("macro_formField", $context, 34, $this->getSourceContext())->macro_formField(...[$context["form"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 34, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })()), "", (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 34, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 34, $this->source); })()), "applicationName", [], "any", false, false, false, 34)]);
                    yield "
                                    <label></label>
                                </div>
                            ";
                } else {
                    // line 38
                    yield "                                ";
                    yield $macros["self"]->getTemplateForMacro("macro_formField", $context, 38, $this->getSourceContext())->macro_formField(...[$context["form"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 38, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 38, $this->source); })()), "", (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 38, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 38, $this->source); })()), "applicationName", [], "any", false, false, false, 38)]);
                    yield "
                            ";
                }
                // line 40
                yield "                        </div>
                        <div class=\"attribute-action\">
                            ";
                // line 42
                if ((($tmp = $context["localeCode"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 43
                    yield "                                <a href=\"#\" class=\"ui basic button\" data-attribute=\"copy\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.apply_to_all"), "html", null, true);
                    yield "</a>
                            ";
                }
                // line 45
                yield "                        </div>
                    </div>
                    <input type=\"hidden\"
                           name=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 48, $this->source); })()), "applicationName", [], "any", false, false, false, 48), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 48, $this->source); })()), "html", null, true);
                yield "[attributes][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 48, $this->source); })()), "html", null, true);
                yield "][attribute]\"
                           id=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 49, $this->source); })()), "applicationName", [], "any", false, false, false, 49), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 49, $this->source); })()), "html", null, true);
                yield "_attributes_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 49, $this->source); })()), "html", null, true);
                yield "_attribute\"
                           value=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["code"], "html", null, true);
                yield "\"/>
                    <input type=\"hidden\"
                           name=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 52, $this->source); })()), "applicationName", [], "any", false, false, false, 52), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 52, $this->source); })()), "html", null, true);
                yield "[attributes][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 52, $this->source); })()), "html", null, true);
                yield "][localeCode]\"
                           id=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 53, $this->source); })()), "applicationName", [], "any", false, false, false, 53), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 53, $this->source); })()), "html", null, true);
                yield "_attributes_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 53, $this->source); })()), "html", null, true);
                yield "_localeCode\"
                           value=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["localeCode"], "html", null, true);
                yield "\"/>
                    ";
                // line 55
                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 55, $this->source); })()) + 1);
                // line 56
                yield "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['localeCode'], $context['form'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['code'], $context['localeCodes'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 62
    public function macro_formField($item = null, $count = null, $id = null, $prefix = null, $subject = null, $applicationName = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "count" => $count,
            "id" => $id,
            "prefix" => $prefix,
            "subject" => $subject,
            "applicationName" => $applicationName,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "formField"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "formField"));

            // line 63
            yield "    ";
            $macros["_v0"] = $this;
            // line 64
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 64, $this->source); })()), "children", [], "any", false, false, false, 64)) > 0)) {
                // line 65
                yield "        ";
                $context["prefix"] = (((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 65, $this->source); })()) . "_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65));
                // line 66
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })()), "children", [], "any", false, false, false, 66));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 67
                    yield "            ";
                    yield $macros["_v0"]->getTemplateForMacro("macro_formField", $context, 67, $this->getSourceContext())->macro_formField(...[$context["child"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 67, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 67, $this->source); })()), (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 67, $this->source); })()), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 67, $this->source); })()), (isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new RuntimeError('Variable "applicationName" does not exist.', 67, $this->source); })())]);
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69) != "_token")) {
                // line 70
                yield "        ";
                $context["namePrefix"] = Twig\Extension\CoreExtension::replace((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 70, $this->source); })()), ["_" => "]["]);
                // line 71
                yield "        ";
                $context["dataName"] = (((((((((isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new RuntimeError('Variable "applicationName" does not exist.', 71, $this->source); })()) . "_") . (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 71, $this->source); })())) . "[attributes][") . (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 71, $this->source); })())) . (isset($context["namePrefix"]) || array_key_exists("namePrefix", $context) ? $context["namePrefix"] : (function () { throw new RuntimeError('Variable "namePrefix" does not exist.', 71, $this->source); })())) . "][") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 71, $this->source); })()), "vars", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71)) . "]");
                // line 72
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "vars", [], "any", false, true, false, 72), "multiple", [], "any", true, true, false, 72) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "multiple", [], "any", false, false, false, 72))) {
                    // line 73
                    yield "            ";
                    $context["dataName"] = ((isset($context["dataName"]) || array_key_exists("dataName", $context) ? $context["dataName"] : (function () { throw new RuntimeError('Variable "dataName" does not exist.', 73, $this->source); })()) . "[]");
                    // line 74
                    yield "        ";
                }
                // line 75
                yield "
        ";
                // line 76
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 76, $this->source); })()), 'widget', ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 76, $this->source); })()), "attr" => ["data-name" => (isset($context["dataName"]) || array_key_exists("dataName", $context) ? $context["dataName"] : (function () { throw new RuntimeError('Variable "dataName" does not exist.', 76, $this->source); })())]]);
                yield "
    ";
            }
            
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
        return "@SyliusAdmin/Product/Attribute/attributeValues.html.twig";
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
        return array (  300 => 76,  297 => 75,  294 => 74,  291 => 73,  288 => 72,  285 => 71,  282 => 70,  279 => 69,  270 => 67,  265 => 66,  262 => 65,  259 => 64,  256 => 63,  233 => 62,  221 => 61,  213 => 58,  206 => 56,  204 => 55,  200 => 54,  192 => 53,  184 => 52,  179 => 50,  171 => 49,  163 => 48,  158 => 45,  152 => 43,  150 => 42,  146 => 40,  140 => 38,  133 => 34,  130 => 33,  128 => 32,  124 => 31,  117 => 28,  113 => 26,  104 => 23,  102 => 22,  95 => 20,  92 => 19,  90 => 18,  85 => 17,  81 => 16,  73 => 11,  67 => 8,  61 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import _self as self %}
{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

{% set subject = metadata.name|replace({'_attribute': ''}) %}
{% for code, localeCodes in forms %}
    <div class=\"attributes-group\" data-attribute-code=\"{{ code }}\">
        <div class=\"attributes-header\">
            <strong>{{ (localeCodes|first).vars.label }}</strong>
            <div>
                <button class=\"ui basic red labeled icon button\" data-attribute=\"delete\">
                    <i class=\"remove icon\"></i>{{ 'sylius.ui.delete'|trans }}
                </button>
            </div>
        </div>
        <div class=\"attributes-list\">
            {% for localeCode, form in localeCodes %}
                <div class=\"attribute\" data-id=\"{{ code }}\">
                    {% set id = form.vars.label|replace({' ': '_'})|lower %}
                    <div class=\"attribute-row\">
                        <div class=\"attribute-label{% if not localeCode or localeCode == sylius_base_locale %} required field{% endif %}\">
                            <label>
                                {% if localeCode %}
                                    <span class=\"language\">{{ flags.fromLocaleCode(localeCode) }} {{ localeCode|sylius_locale_name }}</span>
                                    <br>
                                {% else %}
                                    <i class=\"globe icon\"></i>
                                {% endif %}
                                {{ form.vars.label }}
                            </label>
                        </div>
                        <div class=\"attribute-input\" data-test-product-attribute-value-in-locale=\"{{ \"%s %s\"|format(form.vars.label, localeCode) }}\">
                            {% if 'type_checkbox' in form.vars.cache_key %}
                                <div class=\"ui toggle checkbox\">
                                    {{ self.formField(form, count, id, '', subject, metadata.applicationName) }}
                                    <label></label>
                                </div>
                            {% else %}
                                {{ self.formField(form, count, id, '', subject, metadata.applicationName) }}
                            {% endif %}
                        </div>
                        <div class=\"attribute-action\">
                            {% if localeCode %}
                                <a href=\"#\" class=\"ui basic button\" data-attribute=\"copy\">{{ 'sylius.ui.apply_to_all'|trans }}</a>
                            {% endif %}
                        </div>
                    </div>
                    <input type=\"hidden\"
                           name=\"{{ metadata.applicationName }}_{{ subject }}[attributes][{{ count }}][attribute]\"
                           id=\"{{ metadata.applicationName }}_{{ subject }}_attributes_{{ count }}_attribute\"
                           value=\"{{ code }}\"/>
                    <input type=\"hidden\"
                           name=\"{{ metadata.applicationName }}_{{ subject }}[attributes][{{ count }}][localeCode]\"
                           id=\"{{ metadata.applicationName }}_{{ subject }}_attributes_{{ count }}_localeCode\"
                           value=\"{{ localeCode }}\"/>
                    {% set count = count + 1 %}
                </div>
            {% endfor %}
        </div>
    </div>
{% endfor %}

{% macro formField(item, count, id, prefix, subject, applicationName) %}
    {% from _self import formField %}
    {% if item.children|length > 0 %}
        {% set prefix = prefix~'_'~item.vars.name %}
        {% for child in item.children %}
            {{ formField(child, count, id, prefix, subject, applicationName) }}
        {% endfor %}
    {% elseif item.vars.name != '_token' %}
        {% set namePrefix = prefix|replace({'_': ']['}) %}
        {% set dataName = applicationName~'_'~subject~'[attributes]['~count~namePrefix~']['~item.vars.name~']' %}
        {% if item.vars.multiple is defined and item.vars.multiple %}
            {% set dataName = dataName~'[]' %}
        {% endif %}

        {{ form_widget(item, {'id': id, 'attr': {'data-name': dataName }}) }}
    {% endif %}
{% endmacro %}
", "@SyliusAdmin/Product/Attribute/attributeValues.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributeValues.html.twig");
    }
}
