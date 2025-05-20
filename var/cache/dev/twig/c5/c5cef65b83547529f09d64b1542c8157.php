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

/* @SyliusAdmin/CatalogPromotion/Show/_details.html.twig */
class __TwigTemplate_e89caa3323e3241e452368a269c6da39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/CatalogPromotion/Show/_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/CatalogPromotion/Show/_details.html.twig"));

        // line 1
        yield "<div class=\"ui attached segment\">
    <div>
        ";
        // line 3
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 3, $this->source); })()), "enabled", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "        <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enabled"), "html", null, true);
            yield "</span>
        ";
        } else {
            // line 6
            yield "        <span class=\"ui red label\"><i class=\"remove icon\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.disabled"), "html", null, true);
            yield "</span>
        ";
        }
        // line 8
        yield "
        ";
        // line 9
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 9, $this->source); })()), "exclusive", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "        <span class=\"ui teal label\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("exclusive");
            yield "><i class=\"checkmark icon\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.exclusive"), "html", null, true);
            yield "</span>
        ";
        }
        // line 12
        yield "
        ";
        // line 13
        yield from $this->load("@SyliusAdmin/Common/Label/catalogPromotionState.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 13, $this->source); })()), "state", [], "any", false, false, false, 13)]));
        // line 14
        yield "
        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.code"), "html", null, true);
        yield "</strong></td>
                <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 19, $this->source); })()), "code", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.name"), "html", null, true);
        yield "</strong></td>
                <td ";
        // line 23
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("name");
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
            </tr>

            ";
        // line 26
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 26, $this->source); })()), "startDate", [], "any", false, false, false, 26))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.start_date"), "html", null, true);
            yield "</strong></td>
                <td ";
            // line 29
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("start-date");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 29, $this->source); })()), "startDate", [], "any", false, false, false, 29), "medium", "medium", "YYYY-MM-dd HH:mm:ss"), "html", null, true);
            yield "</td>
            </tr>
            ";
        }
        // line 32
        yield "
            ";
        // line 33
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 33, $this->source); })()), "endDate", [], "any", false, false, false, 33))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.end_date"), "html", null, true);
            yield "</strong></td>
                <td ";
            // line 36
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("end-date");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 36, $this->source); })()), "endDate", [], "any", false, false, false, 36), "medium", "medium", "YYYY-MM-dd HH:mm:ss"), "html", null, true);
            yield "</td>
            </tr>
            ";
        }
        // line 39
        yield "            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.priority"), "html", null, true);
        yield "</strong></td>
                <td ";
        // line 41
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("priority");
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 41, $this->source); })()), "priority", [], "any", false, false, false, 41), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channels"), "html", null, true);
        yield "</strong></td>
                <td>
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 46, $this->source); })()), "channels", [], "any", false, false, false, 46));
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
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 47
            yield "                        ";
            yield from $this->load("@SyliusAdmin/Common/_channel.html.twig", 47)->unwrap()->yield(CoreExtension::merge($context, ["channel" => $context["channel"]]));
            // line 48
            yield "                        <br />
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
        unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "                </td>
            </tr>
            </tbody>
        </table>
    </div>
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
        return "@SyliusAdmin/CatalogPromotion/Show/_details.html.twig";
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
        return array (  204 => 50,  189 => 48,  186 => 47,  169 => 46,  164 => 44,  156 => 41,  152 => 40,  149 => 39,  141 => 36,  137 => 35,  134 => 34,  132 => 33,  129 => 32,  121 => 29,  117 => 28,  114 => 27,  112 => 26,  104 => 23,  100 => 22,  94 => 19,  90 => 18,  84 => 14,  82 => 13,  79 => 12,  71 => 10,  69 => 9,  66 => 8,  60 => 6,  54 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui attached segment\">
    <div>
        {% if catalog_promotion.enabled %}
        <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>{{ 'sylius.ui.enabled'|trans }}</span>
        {% else %}
        <span class=\"ui red label\"><i class=\"remove icon\"></i>{{ 'sylius.ui.disabled'|trans }}</span>
        {% endif %}

        {% if catalog_promotion.exclusive %}
        <span class=\"ui teal label\" {{ sylius_test_html_attribute('exclusive') }}><i class=\"checkmark icon\"></i>{{ 'sylius.ui.exclusive'|trans }}</span>
        {% endif %}

        {% include '@SyliusAdmin/Common/Label/catalogPromotionState.html.twig' with {'data': catalog_promotion.state} %}

        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.code'|trans }}</strong></td>
                <td>{{ catalog_promotion.code }}</td>
            </tr>
            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.name'|trans }}</strong></td>
                <td {{ sylius_test_html_attribute('name') }}>{{ catalog_promotion.name }}</td>
            </tr>

            {% if catalog_promotion.startDate is not null %}
            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.start_date'|trans }}</strong></td>
                <td {{ sylius_test_html_attribute('start-date') }}>{{ catalog_promotion.startDate|format_datetime(pattern='YYYY-MM-dd HH:mm:ss') }}</td>
            </tr>
            {% endif %}

            {% if catalog_promotion.endDate is not null %}
            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.end_date'|trans }}</strong></td>
                <td {{ sylius_test_html_attribute('end-date') }}>{{ catalog_promotion.endDate|format_datetime(pattern='YYYY-MM-dd HH:mm:ss') }}</td>
            </tr>
            {% endif %}
            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.priority'|trans }}</strong></td>
                <td {{ sylius_test_html_attribute('priority') }}>{{ catalog_promotion.priority }}</td>
            </tr>
            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.channels'|trans }}</strong></td>
                <td>
                    {% for channel in catalog_promotion.channels %}
                        {% include '@SyliusAdmin/Common/_channel.html.twig' with {'channel': channel} %}
                        <br />
                    {% endfor %}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
", "@SyliusAdmin/CatalogPromotion/Show/_details.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/CatalogPromotion/Show/_details.html.twig");
    }
}
