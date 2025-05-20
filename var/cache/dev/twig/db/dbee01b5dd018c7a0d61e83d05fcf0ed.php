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

/* @SyliusRefundPlugin/Download/pdfLayout.html.twig */
class __TwigTemplate_f4abfbb8420c55d4a0147f3392dcc859 extends Template
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
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'data' => [$this, 'block_data'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Download/pdfLayout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Download/pdfLayout.html.twig"));

        // line 1
        $context["_seller"] =         $this->unwrap()->renderBlock("seller", $context, $blocks);
        // line 2
        $context["_buyer"] =         $this->unwrap()->renderBlock("buyer", $context, $blocks);
        // line 3
        yield "
<html lang=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\">
<head>
    <meta charset=\"utf-8\">

    <style>
        * {
            line-height: 18px;
            font-size: 12px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #1a1a1a;
        }

        body {
            margin: 0;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: bold;
            margin: 0;
        }

        h1 {
            font-size: 17px;
            margin-bottom: 21px;
        }

        h2 {
            font-size: 16px;
            margin-bottom: 18px;
        }

        h3 {
            font-size: 15px;
            margin-bottom: 15px;
        }

        h4 {
            font-size: 14px;
            margin-bottom: 12px;
        }

        h5 {
            font-size: 13px;
            margin-bottom: 9px;
        }

        h6 {
            font-size: 12px;
            margin-bottom: 6px;
        }

        table.layout {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            border-spacing: 10px;
        }

        table.layout tr {
            vertical-align: top;
        }

        .data table {
            width: 100%;
            border-spacing: 0;
        }

        .data table tr th {
            background-color: #e8e8e8;
            -webkit-print-color-adjust: exact;
            padding: 6px 10px;
            text-align: left;
            font-weight: bold;
        }

        .data table tr td {
            padding: 6px 10px;
            border-bottom: 1px solid #e8e8e8;
        }

        .info-box {
            width: 50%;
            border: 2px solid #e8e8e8;
            padding: 14px;
        }

        .spacer {
            height: 14px;
        }

        .text-center {
            text-align: center !important;
        }

        .text-right {
            text-align: right !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .bg-gray {
            background-color: #f5f5f5;
            -webkit-print-color-adjust: exact;
        }
    </style>
</head>
<body>
    <table class=\"layout\">
        <tr>
            <td>
                <img width=\"160\" src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logoPath"]) || array_key_exists("logoPath", $context) ? $context["logoPath"] : (function () { throw new RuntimeError('Variable "logoPath" does not exist.', 116, $this->source); })()), "html", null, true);
        yield "\">
            </td>
            <td class=\"text-right\">
                ";
        // line 119
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 120
        yield "            </td>
        </tr>
        <tr>
            <td class=\"spacer\"></td>
        </tr>
        <tr>
            ";
        // line 126
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["_buyer"]) || array_key_exists("_buyer", $context) ? $context["_buyer"] : (function () { throw new RuntimeError('Variable "_buyer" does not exist.', 126, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "                <td class=\"info-box\">
                    ";
            // line 128
            yield (isset($context["_buyer"]) || array_key_exists("_buyer", $context) ? $context["_buyer"] : (function () { throw new RuntimeError('Variable "_buyer" does not exist.', 128, $this->source); })());
            yield "
                </td>
            ";
        }
        // line 131
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["_seller"]) || array_key_exists("_seller", $context) ? $context["_seller"] : (function () { throw new RuntimeError('Variable "_seller" does not exist.', 131, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "                <td class=\"info-box\">
                    ";
            // line 133
            yield (isset($context["_seller"]) || array_key_exists("_seller", $context) ? $context["_seller"] : (function () { throw new RuntimeError('Variable "_seller" does not exist.', 133, $this->source); })());
            yield "
                </td>
            ";
        }
        // line 136
        yield "        </tr>
        <tr>
            <td class=\"spacer\"></td>
        </tr>
        <tr>
            <td colspan=\"2\">
                <h1 class=\"text-center\">
                    ";
        // line 143
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 144
        yield "                </h1>
            </td>
        </tr>
        <tr>
            <td colspan=\"2\">
                <div class=\"data\">
                    ";
        // line 150
        yield from $this->unwrap()->yieldBlock('data', $context, $blocks);
        // line 151
        yield "                </div>
            </td>
        </tr>
    </table>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 119
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 150
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusRefundPlugin/Download/pdfLayout.html.twig";
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
        return array (  294 => 150,  272 => 143,  250 => 119,  233 => 151,  231 => 150,  223 => 144,  221 => 143,  212 => 136,  206 => 133,  203 => 132,  200 => 131,  194 => 128,  191 => 127,  189 => 126,  181 => 120,  179 => 119,  173 => 116,  58 => 4,  55 => 3,  53 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set _seller = block('seller') %}
{% set _buyer = block('buyer') %}

<html lang=\"{{ localeCode }}\">
<head>
    <meta charset=\"utf-8\">

    <style>
        * {
            line-height: 18px;
            font-size: 12px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #1a1a1a;
        }

        body {
            margin: 0;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: bold;
            margin: 0;
        }

        h1 {
            font-size: 17px;
            margin-bottom: 21px;
        }

        h2 {
            font-size: 16px;
            margin-bottom: 18px;
        }

        h3 {
            font-size: 15px;
            margin-bottom: 15px;
        }

        h4 {
            font-size: 14px;
            margin-bottom: 12px;
        }

        h5 {
            font-size: 13px;
            margin-bottom: 9px;
        }

        h6 {
            font-size: 12px;
            margin-bottom: 6px;
        }

        table.layout {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            border-spacing: 10px;
        }

        table.layout tr {
            vertical-align: top;
        }

        .data table {
            width: 100%;
            border-spacing: 0;
        }

        .data table tr th {
            background-color: #e8e8e8;
            -webkit-print-color-adjust: exact;
            padding: 6px 10px;
            text-align: left;
            font-weight: bold;
        }

        .data table tr td {
            padding: 6px 10px;
            border-bottom: 1px solid #e8e8e8;
        }

        .info-box {
            width: 50%;
            border: 2px solid #e8e8e8;
            padding: 14px;
        }

        .spacer {
            height: 14px;
        }

        .text-center {
            text-align: center !important;
        }

        .text-right {
            text-align: right !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .bg-gray {
            background-color: #f5f5f5;
            -webkit-print-color-adjust: exact;
        }
    </style>
</head>
<body>
    <table class=\"layout\">
        <tr>
            <td>
                <img width=\"160\" src=\"{{ logoPath }}\">
            </td>
            <td class=\"text-right\">
                {% block header %}{% endblock %}
            </td>
        </tr>
        <tr>
            <td class=\"spacer\"></td>
        </tr>
        <tr>
            {% if _buyer is not empty %}
                <td class=\"info-box\">
                    {{ _buyer|raw }}
                </td>
            {% endif %}
            {% if _seller is not empty %}
                <td class=\"info-box\">
                    {{ _seller|raw }}
                </td>
            {% endif %}
        </tr>
        <tr>
            <td class=\"spacer\"></td>
        </tr>
        <tr>
            <td colspan=\"2\">
                <h1 class=\"text-center\">
                    {% block title %}{% endblock %}
                </h1>
            </td>
        </tr>
        <tr>
            <td colspan=\"2\">
                <div class=\"data\">
                    {% block data %}{% endblock %}
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
", "@SyliusRefundPlugin/Download/pdfLayout.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Download/pdfLayout.html.twig");
    }
}
