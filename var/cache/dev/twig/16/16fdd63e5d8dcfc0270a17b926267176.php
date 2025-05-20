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

/* @SyliusRefundPlugin/Order/Admin/CreditMemo/_downloadButton.html.twig */
class __TwigTemplate_f82cac5b8e7e715c86aed6a72464ccc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/CreditMemo/_downloadButton.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/CreditMemo/_downloadButton.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusUi/Macro/buttons.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        yield $macros["buttons"]->getTemplateForMacro("macro_default", $context, 3, $this->getSourceContext())->macro_default(...[$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_refund_admin_credit_memo_download", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "sylius_refund.ui.download", null, "download", "blue"]);
        // line 9
        yield "
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
        return "@SyliusRefundPlugin/Order/Admin/CreditMemo/_downloadButton.html.twig";
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
        return array (  56 => 9,  54 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{{ buttons.default(
    path('sylius_refund_admin_credit_memo_download', {'id': credit_memo.id}),
    'sylius_refund.ui.download',
    null,
    'download',
    'blue'
) }}
", "@SyliusRefundPlugin/Order/Admin/CreditMemo/_downloadButton.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Order/Admin/CreditMemo/_downloadButton.html.twig");
    }
}
