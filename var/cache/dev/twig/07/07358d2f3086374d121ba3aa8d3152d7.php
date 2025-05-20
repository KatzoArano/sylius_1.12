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

/* @SyliusAdmin/Product/Show/_attributes.html.twig */
class __TwigTemplate_f6e18a6f2ee545fe1ad92a1855582683 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_attributes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_attributes.html.twig"));

        // line 1
        $macros["flags"] = $this->macros["flags"] = $this->load("@SyliusUi/Macro/flags.html.twig", 1)->unwrap();
        // line 2
        yield "
<div id=\"attributes\">
    <h4 class=\"ui top attached large header\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.attributes"), "html", null, true);
        yield "</h4>
    <div class=\"ui attached segment\">
        <div class=\"ui top attached tabular menu\">
            ";
        // line 7
        $context["setLocales"] = [];
        // line 8
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "attributes", [], "any", false, false, false, 8));
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
        foreach ($context['_seq'] as $context["_key"] => $context["attributeValue"]) {
            // line 9
            yield "                ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 9), (isset($context["setLocales"]) || array_key_exists("setLocales", $context) ? $context["setLocales"] : (function () { throw new RuntimeError('Variable "setLocales" does not exist.', 9, $this->source); })()))) {
                // line 10
                yield "                    ";
                $context["localeCode"] = CoreExtension::getAttribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 10);
                // line 11
                yield "                    ";
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 11))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 12
                    yield "                        <a class=\"item";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " active ";
                    }
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("active");
                    }
                    yield " data-tab=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_locale_name')->getCallable()((isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 12, $this->source); })())), "html", null, true);
                    yield "\" ";
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("tab", $this->env->getFilter('sylius_locale_name')->getCallable()((isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 12, $this->source); })())));
                    yield ">";
                    yield $macros["flags"]->getTemplateForMacro("macro_fromLocaleCode", $context, 12, $this->getSourceContext())->macro_fromLocaleCode(...[(isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 12, $this->source); })())]);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_locale_name')->getCallable()((isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 12, $this->source); })())), "html", null, true);
                    yield "</a>
                    ";
                } else {
                    // line 14
                    yield "                        <a class=\"item";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " active ";
                    }
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("active");
                    }
                    yield " data-tab=\"";
                    yield "non-translatable";
                    yield "\" ";
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("tab", "non-translatable");
                    yield "><i class=\"globe icon\"></i></a>
                    ";
                }
                // line 16
                yield "                    ";
                $context["setLocales"] = Twig\Extension\CoreExtension::merge((isset($context["setLocales"]) || array_key_exists("setLocales", $context) ? $context["setLocales"] : (function () { throw new RuntimeError('Variable "setLocales" does not exist.', 16, $this->source); })()), [(isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 16, $this->source); })())]);
                // line 17
                yield "                ";
            }
            // line 18
            yield "            ";
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
        unset($context['_seq'], $context['_key'], $context['attributeValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "        </div>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["setLocales"]) || array_key_exists("setLocales", $context) ? $context["setLocales"] : (function () { throw new RuntimeError('Variable "setLocales" does not exist.', 20, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 21
            yield "            ";
            $context["data_tab"] = (((($tmp =  !(null === $context["locale"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getFilter('sylius_locale_name')->getCallable()($context["locale"])) : ("non-translatable"));
            // line 22
            yield "            <div class=\"ui bottom attached tab segment";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " active";
            }
            yield "\" data-tab=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_tab"]) || array_key_exists("data_tab", $context) ? $context["data_tab"] : (function () { throw new RuntimeError('Variable "data_tab" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("tab", (isset($context["data_tab"]) || array_key_exists("data_tab", $context) ? $context["data_tab"] : (function () { throw new RuntimeError('Variable "data_tab" does not exist.', 22, $this->source); })()));
            yield ">
                <table class=\"ui very basic celled table\">
                    <tbody>
                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "attributes", [], "any", false, false, false, 25), function ($__attributeValue__) use ($context, $macros) { $context["attributeValue"] = $__attributeValue__; return (CoreExtension::getAttribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 25) == $context["locale"]); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["attributeValue"]) {
                // line 26
                yield "                        <tr>
                            <td class=\"five wide\">
                                <strong class=\"gray text\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attributeValue"], "name", [], "any", false, false, false, 28), "html", null, true);
                yield "</strong>
                            </td>
                            <td>
                                ";
                // line 31
                yield from $this->load([(("@SyliusAdmin/Product/Show/Types/" . CoreExtension::getAttribute($this->env, $this->source,                 // line 32
$context["attributeValue"], "type", [], "any", false, false, false, 32)) . ".html.twig"), (("@SyliusAttribute/Types/" . CoreExtension::getAttribute($this->env, $this->source,                 // line 33
$context["attributeValue"], "type", [], "any", false, false, false, 33)) . ".html.twig"), "@SyliusAdmin/Product/Show/Types/default.html.twig"], 31)->unwrap()->yield(CoreExtension::merge($context, ["attribute" =>                 // line 36
$context["attributeValue"], "locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 37
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "locale", [], "any", false, false, false, 37), "fallbackLocale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 38
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "defaultLocale", [], "any", false, false, false, 38)]));
                // line 40
                yield "                            </td>
                        </tr>
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
            unset($context['_seq'], $context['_key'], $context['attributeValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "                    </tbody>
                </table>
            </div>
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
        unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/Product/Show/_attributes.html.twig";
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
        return array (  248 => 47,  231 => 43,  215 => 40,  213 => 38,  212 => 37,  211 => 36,  210 => 33,  209 => 32,  208 => 31,  202 => 28,  198 => 26,  181 => 25,  168 => 22,  165 => 21,  148 => 20,  145 => 19,  131 => 18,  128 => 17,  125 => 16,  109 => 14,  89 => 12,  86 => 11,  83 => 10,  80 => 9,  62 => 8,  60 => 7,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

<div id=\"attributes\">
    <h4 class=\"ui top attached large header\">{{ 'sylius.ui.attributes'|trans }}</h4>
    <div class=\"ui attached segment\">
        <div class=\"ui top attached tabular menu\">
            {% set setLocales = [] %}
            {% for attributeValue in product.attributes %}
                {% if attributeValue.localeCode not in setLocales %}
                    {% set localeCode = attributeValue.localeCode %}
                    {% if attributeValue.localeCode is not null  %}
                        <a class=\"item{% if loop.first %} active {% endif %}\" {% if loop.first %}{{ sylius_test_html_attribute('active') }}{% endif %} data-tab=\"{{ localeCode|sylius_locale_name }}\" {{ sylius_test_html_attribute('tab', localeCode|sylius_locale_name) }}>{{ flags.fromLocaleCode(localeCode)}} {{ localeCode|sylius_locale_name }}</a>
                    {% else %}
                        <a class=\"item{% if loop.first %} active {% endif %}\" {% if loop.first %}{{ sylius_test_html_attribute('active') }}{% endif %} data-tab=\"{{ 'non-translatable' }}\" {{ sylius_test_html_attribute('tab', 'non-translatable') }}><i class=\"globe icon\"></i></a>
                    {% endif %}
                    {%  set setLocales = setLocales|merge([localeCode]) %}
                {% endif %}
            {% endfor %}
        </div>
        {% for locale in setLocales %}
            {% set data_tab = (locale is not null ? locale|sylius_locale_name : 'non-translatable') %}
            <div class=\"ui bottom attached tab segment{% if loop.first %} active{% endif %}\" data-tab=\"{{ data_tab }}\" {{ sylius_test_html_attribute('tab', data_tab) }}>
                <table class=\"ui very basic celled table\">
                    <tbody>
                    {% for attributeValue in product.attributes|filter(attributeValue => attributeValue.localeCode == locale) %}
                        <tr>
                            <td class=\"five wide\">
                                <strong class=\"gray text\">{{ attributeValue.name }}</strong>
                            </td>
                            <td>
                                {% include [
                                    '@SyliusAdmin/Product/Show/Types/'~attributeValue.type~'.html.twig',
                                    '@SyliusAttribute/Types/'~attributeValue.type~'.html.twig',
                                    '@SyliusAdmin/Product/Show/Types/default.html.twig'
                                ] with {
                                    'attribute': attributeValue,
                                    'locale': configuration.request.locale,
                                    'fallbackLocale': configuration.request.defaultLocale
                                } %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endfor %}
    </div>
</div>
", "@SyliusAdmin/Product/Show/_attributes.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_attributes.html.twig");
    }
}
