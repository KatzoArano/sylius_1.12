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

/* @SyliusRefundPlugin/Order/Admin/CreditMemo/list.html.twig */
class __TwigTemplate_2e52128fec58512208b500fb21c51dce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/CreditMemo/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/CreditMemo/list.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["credit_memos"]) || array_key_exists("credit_memos", $context) ? $context["credit_memos"] : (function () { throw new RuntimeError('Variable "credit_memos" does not exist.', 3, $this->source); })())) > 0)) {
            // line 4
            yield "<div class=\"ui segment\" id=\"credit-memos\">
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channel"), "html", null, true);
            yield "</th>
                <th>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
            yield "</th>
                <th>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.issued_at"), "html", null, true);
            yield "</th>
                <th class=\"six wide\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.actions"), "html", null, true);
            yield "</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["credit_memos"]) || array_key_exists("credit_memos", $context) ? $context["credit_memos"] : (function () { throw new RuntimeError('Variable "credit_memos" does not exist.', 17, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["credit_memo"]) {
                // line 18
                yield "            <tr>
                <td>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["credit_memo"], "number", [], "any", false, false, false, 19), "html", null, true);
                yield "</td>
                <td>";
                // line 20
                yield from $this->load("@SyliusAdmin/Common/_channel.html.twig", 20)->unwrap()->yield(CoreExtension::merge($context, ["channel" => CoreExtension::getAttribute($this->env, $this->source, $context["credit_memo"], "channel", [], "any", false, false, false, 20)]));
                yield "</td>
                <td>";
                // line 21
                yield $macros["money"]->getTemplateForMacro("macro_format", $context, 21, $this->getSourceContext())->macro_format(...[CoreExtension::getAttribute($this->env, $this->source, $context["credit_memo"], "total", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, $context["credit_memo"], "currencyCode", [], "any", false, false, false, 21)]);
                yield "</td>
                <td>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["credit_memo"], "issuedAt", [], "any", false, false, false, 22), "d-m-Y"), "html", null, true);
                yield "</td>
                <td>
                    <div class=\"ui buttons\">
                        ";
                // line 25
                yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius_refund.admin.order.credit_memos.list.actions.buttons", $context);
                yield "
                    </div>
                </td>
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
            unset($context['_seq'], $context['_key'], $context['credit_memo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "        </tbody>
    </table>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusRefundPlugin/Order/Admin/CreditMemo/list.html.twig";
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
        return array (  145 => 30,  126 => 25,  120 => 22,  116 => 21,  112 => 20,  108 => 19,  105 => 18,  88 => 17,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  58 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusAdmin/Common/Macro/money.html.twig' as money %}

{% if credit_memos|length > 0 %}
<div class=\"ui segment\" id=\"credit-memos\">
    <h3 class=\"ui dividing header\">{{ 'sylius_refund.ui.credit_memos'|trans }}</h3>
    <table class=\"ui celled compact small table fixed\">
        <thead>
            <tr>
                <th>{{ 'sylius.ui.number'|trans }}</th>
                <th>{{ 'sylius.ui.channel'|trans }}</th>
                <th>{{ 'sylius.ui.total'|trans }}</th>
                <th>{{ 'sylius_refund.ui.issued_at'|trans }}</th>
                <th class=\"six wide\">{{ 'sylius.ui.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for credit_memo in credit_memos %}
            <tr>
                <td>{{ credit_memo.number }}</td>
                <td>{% include '@SyliusAdmin/Common/_channel.html.twig' with {'channel': credit_memo.channel} %}</td>
                <td>{{ money.format(credit_memo.total, credit_memo.currencyCode) }}</td>
                <td>{{ credit_memo.issuedAt|date('d-m-Y') }}</td>
                <td>
                    <div class=\"ui buttons\">
                        {{ sylius_template_event('sylius_refund.admin.order.credit_memos.list.actions.buttons', _context) }}
                    </div>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endif %}
", "@SyliusRefundPlugin/Order/Admin/CreditMemo/list.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Order/Admin/CreditMemo/list.html.twig");
    }
}
