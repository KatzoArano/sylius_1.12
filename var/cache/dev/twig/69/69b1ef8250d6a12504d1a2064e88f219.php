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

/* @SyliusRefundPlugin/Order/Admin/CreditMemo/_header.html.twig */
class __TwigTemplate_168956273b204fde300ed7343eba6fa8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/CreditMemo/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/CreditMemo/_header.html.twig"));

        // line 1
        yield "<h1 class=\"ui header\">
    <i class=\"circular inbox icon\"></i>
    <div class=\"content\">
        ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.credit_memo"), "html", null, true);
        yield " <span id=\"credit-memo-number\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 4, $this->source); })()), "number", [], "any", false, false, false, 4), "html", null, true);
        yield "</span>
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.issued_for_order"), "html", null, true);
        yield ": #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 8, $this->source); })()), "order", [], "any", false, false, false, 8), "number", [], "any", false, false, false, 8), "html", null, true);
        yield "
                </div>
                <div class=\"item\">
                    ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.issued_at"), "html", null, true);
        yield ": ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 11, $this->source); })()), "issuedAt", [], "any", false, false, false, 11), "d-m-Y"), "html", null, true);
        yield "
                </div>
                <div class=\"item\">
                    ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.issued_from"), "html", null, true);
        yield "
                    ";
        // line 15
        yield from $this->load("@SyliusAdmin/Common/_channel.html.twig", 15)->unwrap()->yield(CoreExtension::merge($context, ["channel" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 15, $this->source); })()), "channel", [], "any", false, false, false, 15)]));
        // line 16
        yield "                </div>
            </div>
        </div>
    </div>
</h1>
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
        return "@SyliusRefundPlugin/Order/Admin/CreditMemo/_header.html.twig";
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
        return array (  84 => 16,  82 => 15,  78 => 14,  70 => 11,  62 => 8,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1 class=\"ui header\">
    <i class=\"circular inbox icon\"></i>
    <div class=\"content\">
        {{ 'sylius_refund.ui.credit_memo'|trans }} <span id=\"credit-memo-number\">{{ credit_memo.number }}</span>
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    {{ 'sylius_refund.ui.issued_for_order'|trans }}: #{{ credit_memo.order.number }}
                </div>
                <div class=\"item\">
                    {{ 'sylius_refund.ui.issued_at'|trans }}: {{ credit_memo.issuedAt|date('d-m-Y') }}
                </div>
                <div class=\"item\">
                    {{ 'sylius_refund.ui.issued_from'|trans }}
                    {% include '@SyliusAdmin/Common/_channel.html.twig' with {'channel': credit_memo.channel} %}
                </div>
            </div>
        </div>
    </div>
</h1>
", "@SyliusRefundPlugin/Order/Admin/CreditMemo/_header.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Order/Admin/CreditMemo/_header.html.twig");
    }
}
