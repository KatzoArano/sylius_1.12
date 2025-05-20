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

/* @SyliusRefundPlugin/Order/Admin/CreditMemo/details.html.twig */
class __TwigTemplate_7ec77ac079e84b3271ed08ca5132b2f6 extends Template
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
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/CreditMemo/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/CreditMemo/details.html.twig"));

        $this->parent = $this->load("@SyliusAdmin/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.credit_memo") . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 3, $this->source); })()), "number", [], "any", false, false, false, 3)), "html", null, true);
        yield " ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "    <div class=\"ui stackable two column grid\">
        <div class=\"eight wide column\">
            ";
        // line 8
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius_refund.admin.order.credit_memo.left_metadata", $context);
        yield "
        </div>
        <div class=\"eight wide right aligned column\">
            ";
        // line 11
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius_refund.admin.order.credit_memo.right_metadata", $context);
        yield "
        </div>
    </div>
    ";
        // line 14
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 14, $this->source); })()), "from", [], "any", false, false, false, 14) != null) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 14, $this->source); })()), "to", [], "any", false, false, false, 14) != null))) {
            // line 15
            yield "    <div class=\"ui stackable grid\">
        ";
            // line 16
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 16, $this->source); })()), "from", [], "any", false, false, false, 16) != null)) {
                // line 17
                yield "        <div class=\"eight wide column\">
            <h4 class=\"ui top attached styled header\">";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.buyer"), "html", null, true);
                yield "</h4>
            <div class=\"ui attached segment\" id=\"from-address\">
                ";
                // line 20
                $context["from"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 20, $this->source); })()), "from", [], "any", false, false, false, 20);
                // line 21
                yield "                <address>
                    <strong>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 22, $this->source); })()), "fullName", [], "any", false, false, false, 22), "html", null, true);
                yield "</strong>
                    ";
                // line 23
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 23, $this->source); })()), "company", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 24
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 24, $this->source); })()), "company", [], "any", false, false, false, 24), "html", null, true);
                    yield "
                    ";
                }
                // line 26
                yield "                    <br/>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 26, $this->source); })()), "street", [], "any", false, false, false, 26), "html", null, true);
                yield "<br/>
                    ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 27, $this->source); })()), "city", [], "any", false, false, false, 27), "html", null, true);
                yield "<br/>
                    ";
                // line 28
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 28, $this->source); })()), "provinceName", [], "any", false, false, false, 28))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 29
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 29, $this->source); })()), "provinceName", [], "any", false, false, false, 29), "html", null, true);
                    yield "<br/>
                    ";
                }
                // line 31
                yield "                    <i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 31, $this->source); })()), "countryCode", [], "any", false, false, false, 31)), "html", null, true);
                yield " flag\"></i>
                    ";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->extensions['Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension']->translateCountryIsoCode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 32, $this->source); })()), "countryCode", [], "any", false, false, false, 32))), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 32, $this->source); })()), "postcode", [], "any", false, false, false, 32), "html", null, true);
                yield "
                </address>
            </div>
        </div>
        ";
            }
            // line 37
            yield "        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 37, $this->source); })()), "to", [], "any", false, false, false, 37) != null) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 37, $this->source); })()), "to", [], "any", false, false, false, 37), "taxId", [], "any", false, false, false, 37) != null))) {
                // line 38
                yield "        <div class=\"eight wide column\">
            <h4 class=\"ui top attached styled header\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.seller"), "html", null, true);
                yield "</h4>
            <div class=\"ui attached segment\" id=\"to-address\">
                ";
                // line 41
                $context["to"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 41, $this->source); })()), "to", [], "any", false, false, false, 41);
                // line 42
                yield "                <address>
                    <strong>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 43, $this->source); })()), "company", [], "any", false, false, false, 43), "html", null, true);
                yield "</strong>
                    ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 44, $this->source); })()), "taxId", [], "any", false, false, false, 44), "html", null, true);
                yield "<br/>
                    ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 45, $this->source); })()), "city", [], "any", false, false, false, 45), "html", null, true);
                yield "<br/>
                    ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 46, $this->source); })()), "street", [], "any", false, false, false, 46), "html", null, true);
                yield "<br/>
                    <i class=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 47, $this->source); })()), "countryCode", [], "any", false, false, false, 47)), "html", null, true);
                yield " flag\"></i>
                    ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->extensions['Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension']->translateCountryIsoCode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 48, $this->source); })()), "countryCode", [], "any", false, false, false, 48))), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 48, $this->source); })()), "postcode", [], "any", false, false, false, 48), "html", null, true);
                yield "
                </address>
            </div>
        </div>
        ";
            }
            // line 53
            yield "    </div>
    ";
        }
        // line 55
        yield "    <div class=\"ui stackable segment grid\">
        <div class=\"sixteen wide column\">
            <table class=\"ui celled compact small table fixed\">
                <thead>
                <tr>
                    <th class=\"four wide\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.no"), "html", null, true);
        yield "</th>
                    <th class=\"four wide sylius-table-column-name\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.name"), "html", null, true);
        yield "</th>
                    <th class=\"four wide sylius-table-column-quantity\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.quantity"), "html", null, true);
        yield "</th>
                    <th class=\"four wide\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.unit_net_price"), "html", null, true);
        yield "</th>
                    <th class=\"four wide sylius-table-column-net_value\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.net_value"), "html", null, true);
        yield "</th>
                    <th class=\"four wide\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.tax_rate"), "html", null, true);
        yield "</th>
                    <th class=\"four wide sylius-table-column-tax_amount\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.tax_amount"), "html", null, true);
        yield "</th>
                    <th class=\"four wide sylius-table-column-gross_value\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.gross_value"), "html", null, true);
        yield "</th>
                    <th class=\"four wide sylius-table-column-currency_code\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.currency"), "html", null, true);
        yield "</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 72, $this->source); })()), "lineItems", [], "any", false, false, false, 72));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 73
            yield "                    <tr>
                        <td class=\"single line\">
                            ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 75), "html", null, true);
            yield "
                        </td>
                        <td class=\"single line line-item-name\">
                            ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 78), "html", null, true);
            yield "
                        </td>
                        <td class=\"single line line-item-quantity\">
                            ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 81), "html", null, true);
            yield "
                        </td>
                        <td class=\"right aligned line-item-unit-net-price\">
                            ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitNetPrice", [], "any", false, false, false, 84) / 100)), "html", null, true);
            yield "
                        </td>
                        <td class=\"right aligned line-item-net-value\">
                            ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "netValue", [], "any", false, false, false, 87) / 100)), "html", null, true);
            yield "
                        </td>
                        <td class=\"single line\">
                            ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "taxRate", [], "any", false, false, false, 90), "html", null, true);
            yield "
                        </td>
                        <td class=\"right aligned line-item-tax-amount\">
                            ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "taxAmount", [], "any", false, false, false, 93) / 100)), "html", null, true);
            yield "
                        </td>
                        <td class=\"right aligned line-item-gross-value\">
                            ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "grossValue", [], "any", false, false, false, 96) / 100)), "html", null, true);
            yield "
                        </td>
                        <td class=\"single line line-item-currency-code\">
                            ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 99, $this->source); })()), "currencyCode", [], "any", false, false, false, 99), "html", null, true);
            yield "
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                </tbody>
                <tfoot>
                    <tr>
                        <th colspan=\"3\" class=\"right aligned\">
                            <strong>";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.net_total"), "html", null, true);
        yield "</strong>:
                        </th>
                        <th id=\"credit-memo-net-value-total\" class=\"right aligned\">
                            ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 110, $this->source); })()), "getNetValueTotal", [], "method", false, false, false, 110) / 100)), "html", null, true);
        yield "
                        </th>
                        <th colspan=\"1\" class=\"right aligned\">
                            <strong>";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.tax_total"), "html", null, true);
        yield "</strong>:
                        </th>
                        <th id=\"credit-memo-tax-total\" class=\"right aligned\">
                            ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 116, $this->source); })()), "getTaxTotal", [], "method", false, false, false, 116) / 100)), "html", null, true);
        yield "
                        </th>
                        <th colspan=\"1\" class=\"right aligned\">
                            <strong>";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
        yield "</strong>:
                        </th>
                        <th id=\"credit-memo-total\" class=\"right aligned\">
                            ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 122, $this->source); })()), "total", [], "any", false, false, false, 122) / 100)), "html", null, true);
        yield "
                        </th>
                        <th id=\"credit-memo-total-currency-code\" class=\"single line\">
                            ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 125, $this->source); })()), "currencyCode", [], "any", false, false, false, 125), "html", null, true);
        yield "
                        </th>
                    </tr>
                    <tr>
                        <th colspan=\"7\" class=\"right aligned\">
                            <strong>";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.tax_rate"), "html", null, true);
        yield "</strong>
                        </th>
                        <th class=\"right aligned\">
                            <strong>";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.tax_amount"), "html", null, true);
        yield "</strong>
                        </th>
                        <th class=\"left aligned\">
                            <strong>";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.currency"), "html", null, true);
        yield "</strong>
                        </th>
                    </tr>
                    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 139, $this->source); })()), "taxItems", [], "any", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 140
            yield "                        <tr class=\"tax-item\">
                            <th colspan=\"7\" class=\"right aligned\">
                                ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 142), "html", null, true);
            yield ":
                            </th>
                            <th class=\"right aligned tax-item-amount\">
                                ";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 145) / 100)), "html", null, true);
            yield "
                            </th>
                            <th class=\"single line tax-item-currency-code\">
                                ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 148, $this->source); })()), "currencyCode", [], "any", false, false, false, 148), "html", null, true);
            yield "
                            </th>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                </tfoot>
            </table>

            ";
        // line 155
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 155, $this->source); })()), "comment", [], "any", false, false, false, 155) != "")) {
            // line 156
            yield "            <div class=\"ui sizer vertical segment\">
                <div class=\"ui tiny header\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.comment"), "html", null, true);
            yield "</div>
                <p id=\"credit-memo-comment\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["credit_memo"]) || array_key_exists("credit_memo", $context) ? $context["credit_memo"] : (function () { throw new RuntimeError('Variable "credit_memo" does not exist.', 158, $this->source); })()), "comment", [], "any", false, false, false, 158), "html", null, true);
            yield "</p>
            </div>
            ";
        }
        // line 161
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusRefundPlugin/Order/Admin/CreditMemo/details.html.twig";
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
        return array (  483 => 161,  477 => 158,  473 => 157,  470 => 156,  468 => 155,  463 => 152,  453 => 148,  447 => 145,  441 => 142,  437 => 140,  433 => 139,  427 => 136,  421 => 133,  415 => 130,  407 => 125,  401 => 122,  395 => 119,  389 => 116,  383 => 113,  377 => 110,  371 => 107,  365 => 103,  347 => 99,  341 => 96,  335 => 93,  329 => 90,  323 => 87,  317 => 84,  311 => 81,  305 => 78,  299 => 75,  295 => 73,  278 => 72,  271 => 68,  267 => 67,  263 => 66,  259 => 65,  255 => 64,  251 => 63,  247 => 62,  243 => 61,  239 => 60,  232 => 55,  228 => 53,  218 => 48,  214 => 47,  210 => 46,  206 => 45,  202 => 44,  198 => 43,  195 => 42,  193 => 41,  188 => 39,  185 => 38,  182 => 37,  172 => 32,  167 => 31,  161 => 29,  159 => 28,  155 => 27,  150 => 26,  144 => 24,  142 => 23,  138 => 22,  135 => 21,  133 => 20,  128 => 18,  125 => 17,  123 => 16,  120 => 15,  118 => 14,  112 => 11,  106 => 8,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusAdmin/layout.html.twig' %}

{% block title %}{{ 'sylius_refund.ui.credit_memo'|trans ~ ' ' ~ credit_memo.number }} {{ parent() }}{% endblock %}

{% block content %}
    <div class=\"ui stackable two column grid\">
        <div class=\"eight wide column\">
            {{ sylius_template_event('sylius_refund.admin.order.credit_memo.left_metadata', _context) }}
        </div>
        <div class=\"eight wide right aligned column\">
            {{ sylius_template_event('sylius_refund.admin.order.credit_memo.right_metadata', _context) }}
        </div>
    </div>
    {% if credit_memo.from != null or credit_memo.to != null %}
    <div class=\"ui stackable grid\">
        {% if credit_memo.from != null %}
        <div class=\"eight wide column\">
            <h4 class=\"ui top attached styled header\">{{ 'sylius_refund.ui.buyer'|trans }}</h4>
            <div class=\"ui attached segment\" id=\"from-address\">
                {% set from = credit_memo.from %}
                <address>
                    <strong>{{ from.fullName }}</strong>
                    {% if from.company %}
                        {{ from.company }}
                    {% endif %}
                    <br/>{{ from.street }}<br/>
                    {{ from.city }}<br/>
                    {% if from.provinceName is not empty %}
                        {{ from.provinceName }}<br/>
                    {% endif %}
                    <i class=\"{{ from.countryCode|lower }} flag\"></i>
                    {{ from.countryCode|sylius_country_name|upper }} {{ from.postcode }}
                </address>
            </div>
        </div>
        {% endif %}
        {% if credit_memo.to != null and credit_memo.to.taxId != null %}
        <div class=\"eight wide column\">
            <h4 class=\"ui top attached styled header\">{{ 'sylius_refund.ui.seller'|trans }}</h4>
            <div class=\"ui attached segment\" id=\"to-address\">
                {% set to = credit_memo.to %}
                <address>
                    <strong>{{ to.company }}</strong>
                    {{ to.taxId }}<br/>
                    {{ to.city }}<br/>
                    {{ to.street }}<br/>
                    <i class=\"{{ to.countryCode|lower }} flag\"></i>
                    {{ to.countryCode|sylius_country_name|upper }} {{ to.postcode }}
                </address>
            </div>
        </div>
        {% endif %}
    </div>
    {% endif %}
    <div class=\"ui stackable segment grid\">
        <div class=\"sixteen wide column\">
            <table class=\"ui celled compact small table fixed\">
                <thead>
                <tr>
                    <th class=\"four wide\">{{ 'sylius_refund.ui.no'|trans }}</th>
                    <th class=\"four wide sylius-table-column-name\">{{ 'sylius.ui.name'|trans }}</th>
                    <th class=\"four wide sylius-table-column-quantity\">{{ 'sylius.ui.quantity'|trans }}</th>
                    <th class=\"four wide\">{{ 'sylius_refund.ui.unit_net_price'|trans }}</th>
                    <th class=\"four wide sylius-table-column-net_value\">{{ 'sylius_refund.ui.net_value'|trans }}</th>
                    <th class=\"four wide\">{{ 'sylius_refund.ui.tax_rate'|trans }}</th>
                    <th class=\"four wide sylius-table-column-tax_amount\">{{ 'sylius_refund.ui.tax_amount'|trans }}</th>
                    <th class=\"four wide sylius-table-column-gross_value\">{{ 'sylius_refund.ui.gross_value'|trans }}</th>
                    <th class=\"four wide sylius-table-column-currency_code\">{{ 'sylius.ui.currency'|trans }}</th>
                </tr>
                </thead>
                <tbody>
                {% for item in credit_memo.lineItems %}
                    <tr>
                        <td class=\"single line\">
                            {{ loop.index }}
                        </td>
                        <td class=\"single line line-item-name\">
                            {{ item.name }}
                        </td>
                        <td class=\"single line line-item-quantity\">
                            {{ item.quantity }}
                        </td>
                        <td class=\"right aligned line-item-unit-net-price\">
                            {{ '%0.2f'|format(item.unitNetPrice/100) }}
                        </td>
                        <td class=\"right aligned line-item-net-value\">
                            {{ '%0.2f'|format(item.netValue/100) }}
                        </td>
                        <td class=\"single line\">
                            {{ item.taxRate }}
                        </td>
                        <td class=\"right aligned line-item-tax-amount\">
                            {{ '%0.2f'|format(item.taxAmount/100) }}
                        </td>
                        <td class=\"right aligned line-item-gross-value\">
                            {{ '%0.2f'|format(item.grossValue/100) }}
                        </td>
                        <td class=\"single line line-item-currency-code\">
                            {{ credit_memo.currencyCode }}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan=\"3\" class=\"right aligned\">
                            <strong>{{ 'sylius_refund.ui.net_total'|trans }}</strong>:
                        </th>
                        <th id=\"credit-memo-net-value-total\" class=\"right aligned\">
                            {{ '%0.2f'|format(credit_memo.getNetValueTotal()/100) }}
                        </th>
                        <th colspan=\"1\" class=\"right aligned\">
                            <strong>{{ 'sylius_refund.ui.tax_total'|trans }}</strong>:
                        </th>
                        <th id=\"credit-memo-tax-total\" class=\"right aligned\">
                            {{ '%0.2f'|format(credit_memo.getTaxTotal()/100) }}
                        </th>
                        <th colspan=\"1\" class=\"right aligned\">
                            <strong>{{ 'sylius.ui.total'|trans }}</strong>:
                        </th>
                        <th id=\"credit-memo-total\" class=\"right aligned\">
                            {{ '%0.2f'|format(credit_memo.total/100) }}
                        </th>
                        <th id=\"credit-memo-total-currency-code\" class=\"single line\">
                            {{ credit_memo.currencyCode }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan=\"7\" class=\"right aligned\">
                            <strong>{{ 'sylius_refund.ui.tax_rate'|trans }}</strong>
                        </th>
                        <th class=\"right aligned\">
                            <strong>{{ 'sylius_refund.ui.tax_amount'|trans }}</strong>
                        </th>
                        <th class=\"left aligned\">
                            <strong>{{ 'sylius.ui.currency'|trans }}</strong>
                        </th>
                    </tr>
                    {% for item in credit_memo.taxItems %}
                        <tr class=\"tax-item\">
                            <th colspan=\"7\" class=\"right aligned\">
                                {{ item.label }}:
                            </th>
                            <th class=\"right aligned tax-item-amount\">
                                {{ '%0.2f'|format(item.amount/100) }}
                            </th>
                            <th class=\"single line tax-item-currency-code\">
                                {{ credit_memo.currencyCode }}
                            </th>
                        </tr>
                    {% endfor %}
                </tfoot>
            </table>

            {% if credit_memo.comment != '' %}
            <div class=\"ui sizer vertical segment\">
                <div class=\"ui tiny header\">{{ 'sylius.ui.comment'|trans }}</div>
                <p id=\"credit-memo-comment\">{{ credit_memo.comment }}</p>
            </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "@SyliusRefundPlugin/Order/Admin/CreditMemo/details.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Order/Admin/CreditMemo/details.html.twig");
    }
}
