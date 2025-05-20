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

/* @SyliusRefundPlugin/Order/Shop/_creditMemos.html.twig */
class __TwigTemplate_be7c60091040eb5832f6f4ca5cc26444 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Shop/_creditMemos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Shop/_creditMemos.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusUi/Macro/buttons.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["credit_memos"]) || array_key_exists("credit_memos", $context) ? $context["credit_memos"] : (function () { throw new RuntimeError('Variable "credit_memos" does not exist.', 3, $this->source); })())) > 0)) {
            // line 4
            yield "    <div class=\"ui segment\" id=\"credit-memos\">
        <h3 class=\"ui dividing header\">";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.credit_memos"), "html", null, true);
            yield "</h3>
        <table class=\"ui celled compact small table fixed\">
            <thead>
            <tr>
                <th>";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.number"), "html", null, true);
            yield "</th>
                <th>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
            yield "</th>
                <th>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.issued_at"), "html", null, true);
            yield "</th>
                <th>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.actions"), "html", null, true);
            yield "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["credit_memos"]) || array_key_exists("credit_memos", $context) ? $context["credit_memos"] : (function () { throw new RuntimeError('Variable "credit_memos" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_memo"]) {
                // line 17
                yield "                <tr>
                    <td>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["credit_memo"], "number", [], "any", false, false, false, 18), "html", null, true);
                yield "</td>
                    <td>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_format_money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["credit_memo"], "total", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, $context["credit_memo"], "currencyCode", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, $context["credit_memo"], "localeCode", [], "any", false, false, false, 19)), "html", null, true);
                yield "</td>
                    <td>";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["credit_memo"], "issuedAt", [], "any", false, false, false, 20), "d-m-Y"), "html", null, true);
                yield "</td>
                    <td>
                        ";
                // line 22
                yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius_refund.shop.order.credit_memos.list.actions.buttons", $context);
                yield "
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['credit_memo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "            </tbody>
        </table>
    </div>
";
        }
        // line 30
        yield "
<style>
    #credit-memos th, #credit-memos td {
        text-align: left !important;
    }

    #credit-memos td {
        padding: 1rem 0 1rem .5rem !important;
    }

    #credit-memos th:nth-child(3) {
        width: auto;
    }

    #credit-memos th:nth-child(4) {
        width: 170px;
    }
</style>
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
        return "@SyliusRefundPlugin/Order/Shop/_creditMemos.html.twig";
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
        return array (  120 => 30,  114 => 26,  104 => 22,  99 => 20,  95 => 19,  91 => 18,  88 => 17,  84 => 16,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% if credit_memos|length > 0 %}
    <div class=\"ui segment\" id=\"credit-memos\">
        <h3 class=\"ui dividing header\">{{ 'sylius_refund.ui.credit_memos'|trans }}</h3>
        <table class=\"ui celled compact small table fixed\">
            <thead>
            <tr>
                <th>{{ 'sylius.ui.number'|trans }}</th>
                <th>{{ 'sylius.ui.total'|trans }}</th>
                <th>{{ 'sylius_refund.ui.issued_at'|trans }}</th>
                <th>{{ 'sylius.ui.actions'|trans }}</th>
            </tr>
            </thead>
            <tbody>
            {% for credit_memo in credit_memos %}
                <tr>
                    <td>{{ credit_memo.number }}</td>
                    <td>{{ credit_memo.total|sylius_format_money(credit_memo.currencyCode, credit_memo.localeCode) }}</td>
                    <td>{{ credit_memo.issuedAt|date('d-m-Y') }}</td>
                    <td>
                        {{ sylius_template_event('sylius_refund.shop.order.credit_memos.list.actions.buttons', _context) }}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endif %}

<style>
    #credit-memos th, #credit-memos td {
        text-align: left !important;
    }

    #credit-memos td {
        padding: 1rem 0 1rem .5rem !important;
    }

    #credit-memos th:nth-child(3) {
        width: auto;
    }

    #credit-memos th:nth-child(4) {
        width: 170px;
    }
</style>
", "@SyliusRefundPlugin/Order/Shop/_creditMemos.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Order/Shop/_creditMemos.html.twig");
    }
}
