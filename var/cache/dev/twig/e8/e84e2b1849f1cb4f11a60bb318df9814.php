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

/* @SyliusRefundPlugin/Download/creditMemo.html.twig */
class __TwigTemplate_9c5880d235fd788e5c9afbd01675fce0 extends Template
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
            'header' => [$this, 'block_header'],
            'buyer' => [$this, 'block_buyer'],
            'seller' => [$this, 'block_seller'],
            'title' => [$this, 'block_title'],
            'data' => [$this, 'block_data'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusRefundPlugin/Download/pdfLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Download/creditMemo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Download/creditMemo.html.twig"));

        // line 3
        $context["from"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 3, $this->source); })()), "from", [], "any", false, false, false, 3);
        // line 4
        $context["to"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 4, $this->source); })()), "to", [], "any", false, false, false, 4);
        // line 5
        $context["localeCode"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 5, $this->source); })()), "localeCode", [], "any", false, false, false, 5);
        // line 6
        $context["logoPath"] = (isset($context["creditMemoLogoPath"]) || array_key_exists("creditMemoLogoPath", $context) ? $context["creditMemoLogoPath"] : (function () { throw new RuntimeError('Variable "creditMemoLogoPath" does not exist.', 6, $this->source); })());
        // line 1
        $this->parent = $this->load("@SyliusRefundPlugin/Download/pdfLayout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 9
        yield "    <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.issued_at", [], "messages", (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 9, $this->source); })())), "html", null, true);
        yield ":</strong>
    ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 10, $this->source); })()), "issuedAt", [], "any", false, false, false, 10), "Y-m-d H:i:s"), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_buyer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "buyer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "buyer"));

        // line 14
        yield "    <h6>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.buyer", [], "messages", (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 14, $this->source); })())), "html", null, true);
        yield "</h6>
    <strong>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 15, $this->source); })()), "fullName", [], "any", false, false, false, 15), "html", null, true);
        yield "</strong><br/>
    ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 16, $this->source); })()), "company", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 16, $this->source); })()), "company", [], "any", false, false, false, 16), "html", null, true);
            yield "<br/>";
        }
        // line 17
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 17, $this->source); })()), "street", [], "any", false, false, false, 17), "html", null, true);
        yield "<br/>
    ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 18, $this->source); })()), "city", [], "any", false, false, false, 18), "html", null, true);
        yield "<br/>
    ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 19, $this->source); })()), "provinceName", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 19, $this->source); })()), "provinceName", [], "any", false, false, false, 19), "html", null, true);
        }
        // line 20
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->extensions['Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension']->translateCountryIsoCode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 20, $this->source); })()), "countryCode", [], "any", false, false, false, 20))), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 20, $this->source); })()), "postcode", [], "any", false, false, false, 20), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_seller(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "seller"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "seller"));

        // line 24
        if ((($tmp = (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 24, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "        <h6>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.seller", [], "messages", (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 25, $this->source); })())), "html", null, true);
            yield "</h6>
        ";
            // line 26
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 26, $this->source); })()), "company", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 26, $this->source); })()), "company", [], "any", false, false, false, 26), "html", null, true);
                yield "</strong><br/>";
            }
            // line 27
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 27, $this->source); })()), "street", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 27, $this->source); })()), "street", [], "any", false, false, false, 27), "html", null, true);
                yield "<br/>";
            }
            // line 28
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 28, $this->source); })()), "city", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 28, $this->source); })()), "city", [], "any", false, false, false, 28), "html", null, true);
                yield "<br/>";
            }
            // line 29
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 29, $this->source); })()), "taxId", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 29, $this->source); })()), "taxId", [], "any", false, false, false, 29), "html", null, true);
                yield "<br/>";
            }
            // line 30
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 30, $this->source); })()), "countryCode", [], "any", false, false, false, 30) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 30, $this->source); })()), "postcode", [], "any", false, false, false, 30))) {
                // line 31
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->extensions['Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension']->translateCountryIsoCode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 31, $this->source); })()), "countryCode", [], "any", false, false, false, 31))), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 31, $this->source); })()), "postcode", [], "any", false, false, false, 31), "html", null, true);
                yield "
        ";
            }
            // line 33
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
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

        // line 37
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.credit_memo", [], "messages", (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 37, $this->source); })())), "html", null, true);
        yield " #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 37, $this->source); })()), "number", [], "any", false, false, false, 37), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_data(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "data"));

        // line 41
        yield "    <table>
        <tr>
            <th>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.no", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 43, $this->source); })()), "localeCode", [], "any", false, false, false, 43)), "html", null, true);
        yield "</th>
            <th>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.name", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 44, $this->source); })()), "localeCode", [], "any", false, false, false, 44)), "html", null, true);
        yield "</th>
            <th class=\"text-right\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.quantity", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 45, $this->source); })()), "localeCode", [], "any", false, false, false, 45)), "html", null, true);
        yield "</th>
            <th class=\"text-right\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.unit_net_price", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 46, $this->source); })()), "localeCode", [], "any", false, false, false, 46)), "html", null, true);
        yield "</th>
            <th class=\"text-right\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.net_value", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 47, $this->source); })()), "localeCode", [], "any", false, false, false, 47)), "html", null, true);
        yield "</th>
            <th class=\"text-right\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.tax_rate", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 48, $this->source); })()), "localeCode", [], "any", false, false, false, 48)), "html", null, true);
        yield "</th>
            <th class=\"text-right\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.tax_amount", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 49, $this->source); })()), "localeCode", [], "any", false, false, false, 49)), "html", null, true);
        yield "</th>
            <th class=\"text-right\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.gross_value", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 50, $this->source); })()), "localeCode", [], "any", false, false, false, 50)), "html", null, true);
        yield "</th>
            <th class=\"text-right\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.currency", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 51, $this->source); })()), "localeCode", [], "any", false, false, false, 51)), "html", null, true);
        yield "</th>
        </tr>

        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 54, $this->source); })()), "lineItems", [], "any", false, false, false, 54));
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
            // line 55
            yield "            <tr>
                <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                <td><strong>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 57), "html", null, true);
            yield "</strong></td>
                <td class=\"text-right\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                <td class=\"text-right\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitNetPrice", [], "any", false, false, false, 59) / 100)), "html", null, true);
            yield "</td>
                <td class=\"text-right\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "netValue", [], "any", false, false, false, 60) / 100)), "html", null, true);
            yield "</td>
                <td class=\"text-right\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "taxRate", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>
                <td class=\"text-right\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "taxAmount", [], "any", false, false, false, 62) / 100)), "html", null, true);
            yield "</td>
                <td class=\"text-right\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "grossValue", [], "any", false, false, false, 63) / 100)), "html", null, true);
            yield "</td>
                <td class=\"text-right\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 64, $this->source); })()), "currencyCode", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
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
        // line 67
        yield "
        <tr>
            <td colspan=\"9\" class=\"bg-gray border-0\"></td>
        </tr>

        <tr>
            <td class=\"border-0\" colspan=\"5\"></td>
            <td class=\"text-right bg-gray\" colspan=\"2\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.net_total", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 74, $this->source); })()), "localeCode", [], "any", false, false, false, 74)), "html", null, true);
        yield ":</td>
            <td class=\"text-right bg-gray\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 75, $this->source); })()), "getNetValueTotal", [], "method", false, false, false, 75) / 100)), "html", null, true);
        yield "</td>
            <td class=\"text-right bg-gray\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 76, $this->source); })()), "currencyCode", [], "any", false, false, false, 76), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td class=\"border-0\" colspan=\"5\"></td>
            <td class=\"text-right bg-gray\" colspan=\"2\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.tax_total", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 80, $this->source); })()), "localeCode", [], "any", false, false, false, 80)), "html", null, true);
        yield ":</td>
            <td class=\"text-right bg-gray\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 81, $this->source); })()), "getTaxTotal", [], "method", false, false, false, 81) / 100)), "html", null, true);
        yield "</td>
            <td class=\"text-right bg-gray\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 82, $this->source); })()), "currencyCode", [], "any", false, false, false, 82), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td class=\"border-0\" colspan=\"5\"></td>
            <td class=\"text-right bg-gray\" colspan=\"2\"><strong>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 86, $this->source); })()), "localeCode", [], "any", false, false, false, 86)), "html", null, true);
        yield ":</strong></td>
            <td class=\"text-right bg-gray\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 87, $this->source); })()), "total", [], "any", false, false, false, 87) / 100)), "html", null, true);
        yield "</td>
            <td class=\"text-right bg-gray\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 88, $this->source); })()), "currencyCode", [], "any", false, false, false, 88), "html", null, true);
        yield "</td>
        </tr>

        ";
        // line 91
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 91, $this->source); })()), "taxItems", [], "any", false, false, false, 91)) > 0)) {
            // line 92
            yield "            <tr>
                <td class=\"border-0\" colspan=\"5\"></td>
                <td class=\"text-right\" colspan=\"2\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.tax_rate", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 94, $this->source); })()), "localeCode", [], "any", false, false, false, 94)), "html", null, true);
            yield "</td>
                <td class=\"text-right\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius_refund.ui.tax_amount", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 95, $this->source); })()), "localeCode", [], "any", false, false, false, 95)), "html", null, true);
            yield "</td>
                <td class=\"text-right\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.currency", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 96, $this->source); })()), "localeCode", [], "any", false, false, false, 96)), "html", null, true);
            yield "</td>
            </tr>

            ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 99, $this->source); })()), "taxItems", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 100
                yield "                <tr>
                    <td class=\"border-0\" colspan=\"5\"></td>
                    <td class=\"text-right\" colspan=\"2\">";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 102), "html", null, true);
                yield "</td>
                    <td class=\"text-right\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 103) / 100)), "html", null, true);
                yield "</td>
                    <td class=\"text-right\">";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 104, $this->source); })()), "currencyCode", [], "any", false, false, false, 104), "html", null, true);
                yield "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "        ";
        }
        // line 108
        yield "
        ";
        // line 109
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 109, $this->source); })()), "comment", [], "any", false, false, false, 109) != null)) {
            // line 110
            yield "            <tr>
                <td class=\"border-0\" colspan=\"9\"><p>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditMemo"]) || array_key_exists("creditMemo", $context) ? $context["creditMemo"] : (function () { throw new RuntimeError('Variable "creditMemo" does not exist.', 111, $this->source); })()), "comment", [], "any", false, false, false, 111), "html", null, true);
            yield "</p></td>
            </tr>
        ";
        }
        // line 114
        yield "    </table>
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
        return "@SyliusRefundPlugin/Download/creditMemo.html.twig";
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
        return array (  498 => 114,  492 => 111,  489 => 110,  487 => 109,  484 => 108,  481 => 107,  472 => 104,  468 => 103,  464 => 102,  460 => 100,  456 => 99,  450 => 96,  446 => 95,  442 => 94,  438 => 92,  436 => 91,  430 => 88,  426 => 87,  422 => 86,  415 => 82,  411 => 81,  407 => 80,  400 => 76,  396 => 75,  392 => 74,  383 => 67,  366 => 64,  362 => 63,  358 => 62,  354 => 61,  350 => 60,  346 => 59,  342 => 58,  338 => 57,  334 => 56,  331 => 55,  314 => 54,  308 => 51,  304 => 50,  300 => 49,  296 => 48,  292 => 47,  288 => 46,  284 => 45,  280 => 44,  276 => 43,  272 => 41,  259 => 40,  243 => 37,  230 => 36,  218 => 33,  210 => 31,  207 => 30,  201 => 29,  195 => 28,  189 => 27,  183 => 26,  178 => 25,  176 => 24,  163 => 23,  147 => 20,  143 => 19,  139 => 18,  134 => 17,  129 => 16,  125 => 15,  120 => 14,  107 => 13,  94 => 10,  89 => 9,  76 => 8,  65 => 1,  63 => 6,  61 => 5,  59 => 4,  57 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusRefundPlugin/Download/pdfLayout.html.twig' %}

{% set from = creditMemo.from %}
{% set to = creditMemo.to %}
{% set localeCode = creditMemo.localeCode %}
{% set logoPath = creditMemoLogoPath %}

{% block header %}
    <strong>{{ 'sylius_refund.ui.issued_at'|trans([], 'messages', localeCode) }}:</strong>
    {{ creditMemo.issuedAt|date('Y-m-d H:i:s') }}
{% endblock %}

{% block buyer %}
    <h6>{{ 'sylius_refund.ui.buyer'|trans([], 'messages', localeCode) }}</h6>
    <strong>{{ from.fullName }}</strong><br/>
    {% if from.company %}{{ from.company }}<br/>{% endif %}
    {{ from.street }}<br/>
    {{ from.city }}<br/>
    {% if from.provinceName %}{{ from.provinceName }}{% endif %}
    {{ from.countryCode|sylius_country_name|upper }} {{ from.postcode }}
{% endblock %}

{% block seller %}
    {%- if to %}
        <h6>{{ 'sylius_refund.ui.seller'|trans([], 'messages', localeCode) }}</h6>
        {% if to.company %}<strong>{{ to.company }}</strong><br/>{% endif %}
        {% if to.street %}{{ to.street }}<br/>{% endif %}
        {% if to.city %}{{ to.city }}<br/>{% endif %}
        {% if to.taxId %}{{ to.taxId }}<br/>{% endif %}
        {% if to.countryCode and to.postcode %}
            {{ to.countryCode|sylius_country_name|upper }} {{ to.postcode }}
        {% endif %}
    {% endif -%}
{% endblock %}

{% block title %}
    {{ 'sylius_refund.ui.credit_memo'|trans([], 'messages', localeCode) }} #{{ creditMemo.number }}
{% endblock %}

{% block data %}
    <table>
        <tr>
            <th>{{ 'sylius_refund.ui.no'|trans([], 'messages', creditMemo.localeCode) }}</th>
            <th>{{ 'sylius.ui.name'|trans([], 'messages', creditMemo.localeCode) }}</th>
            <th class=\"text-right\">{{ 'sylius.ui.quantity'|trans([], 'messages', creditMemo.localeCode) }}</th>
            <th class=\"text-right\">{{ 'sylius_refund.ui.unit_net_price'|trans([], 'messages', creditMemo.localeCode) }}</th>
            <th class=\"text-right\">{{ 'sylius_refund.ui.net_value'|trans([], 'messages', creditMemo.localeCode) }}</th>
            <th class=\"text-right\">{{ 'sylius_refund.ui.tax_rate'|trans([], 'messages', creditMemo.localeCode) }}</th>
            <th class=\"text-right\">{{ 'sylius_refund.ui.tax_amount'|trans([], 'messages', creditMemo.localeCode) }}</th>
            <th class=\"text-right\">{{ 'sylius_refund.ui.gross_value'|trans([], 'messages', creditMemo.localeCode) }}</th>
            <th class=\"text-right\">{{ 'sylius.ui.currency'|trans([], 'messages', creditMemo.localeCode) }}</th>
        </tr>

        {% for item in creditMemo.lineItems %}
            <tr>
                <td>{{ loop.index }}</td>
                <td><strong>{{ item.name }}</strong></td>
                <td class=\"text-right\">{{ item.quantity }}</td>
                <td class=\"text-right\">{{ '%0.2f'|format(item.unitNetPrice/100) }}</td>
                <td class=\"text-right\">{{ '%0.2f'|format(item.netValue/100) }}</td>
                <td class=\"text-right\">{{ item.taxRate }}</td>
                <td class=\"text-right\">{{ '%0.2f'|format(item.taxAmount/100) }}</td>
                <td class=\"text-right\">{{ '%0.2f'|format(item.grossValue/100) }}</td>
                <td class=\"text-right\">{{ creditMemo.currencyCode }}</td>
            </tr>
        {% endfor %}

        <tr>
            <td colspan=\"9\" class=\"bg-gray border-0\"></td>
        </tr>

        <tr>
            <td class=\"border-0\" colspan=\"5\"></td>
            <td class=\"text-right bg-gray\" colspan=\"2\">{{ 'sylius_refund.ui.net_total'|trans([], 'messages', creditMemo.localeCode) }}:</td>
            <td class=\"text-right bg-gray\">{{ '%0.2f'|format(creditMemo.getNetValueTotal()/100) }}</td>
            <td class=\"text-right bg-gray\">{{ creditMemo.currencyCode }}</td>
        </tr>
        <tr>
            <td class=\"border-0\" colspan=\"5\"></td>
            <td class=\"text-right bg-gray\" colspan=\"2\">{{ 'sylius_refund.ui.tax_total'|trans([], 'messages', creditMemo.localeCode) }}:</td>
            <td class=\"text-right bg-gray\">{{ '%0.2f'|format(creditMemo.getTaxTotal()/100) }}</td>
            <td class=\"text-right bg-gray\">{{ creditMemo.currencyCode }}</td>
        </tr>
        <tr>
            <td class=\"border-0\" colspan=\"5\"></td>
            <td class=\"text-right bg-gray\" colspan=\"2\"><strong>{{ 'sylius.ui.total'|trans([], 'messages', creditMemo.localeCode) }}:</strong></td>
            <td class=\"text-right bg-gray\">{{ '%0.2f'|format(creditMemo.total/100) }}</td>
            <td class=\"text-right bg-gray\">{{ creditMemo.currencyCode }}</td>
        </tr>

        {% if creditMemo.taxItems|length > 0 %}
            <tr>
                <td class=\"border-0\" colspan=\"5\"></td>
                <td class=\"text-right\" colspan=\"2\">{{ 'sylius_refund.ui.tax_rate'|trans([], 'messages', creditMemo.localeCode) }}</td>
                <td class=\"text-right\">{{ 'sylius_refund.ui.tax_amount'|trans([], 'messages', creditMemo.localeCode) }}</td>
                <td class=\"text-right\">{{ 'sylius.ui.currency'|trans([], 'messages', creditMemo.localeCode) }}</td>
            </tr>

            {% for item in creditMemo.taxItems %}
                <tr>
                    <td class=\"border-0\" colspan=\"5\"></td>
                    <td class=\"text-right\" colspan=\"2\">{{ item.label }}</td>
                    <td class=\"text-right\">{{ '%0.2f'|format(item.amount/100) }}</td>
                    <td class=\"text-right\">{{ creditMemo.currencyCode }}</td>
                </tr>
            {% endfor %}
        {% endif %}

        {% if creditMemo.comment != null %}
            <tr>
                <td class=\"border-0\" colspan=\"9\"><p>{{ creditMemo.comment }}</p></td>
            </tr>
        {% endif %}
    </table>
{% endblock %}
", "@SyliusRefundPlugin/Download/creditMemo.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Download/creditMemo.html.twig");
    }
}
