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

/* @SyliusAdmin/Dashboard/Statistics/_template.html.twig */
class __TwigTemplate_b3a2dc93591f435685f572fd55d014b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/Statistics/_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/Statistics/_template.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        [$context["labels"], $context["values"]] =         [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sales_summary"]) || array_key_exists("sales_summary", $context) ? $context["sales_summary"] : (function () { throw new RuntimeError('Variable "sales_summary" does not exist.', 3, $this->source); })()), "intervals", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, (isset($context["sales_summary"]) || array_key_exists("sales_summary", $context) ? $context["sales_summary"] : (function () { throw new RuntimeError('Variable "sales_summary" does not exist.', 3, $this->source); })()), "sales", [], "any", false, false, false, 3)];
        // line 4
        yield "
<div class=\"ui grid\">
    <div class=\"column\">
        <div class=\"stats\">
            <div class=\"ui top attached action header\">
                ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sales_summary"), "html", null, true);
        yield "
                <div class=\"ui buttons\">
                    <button
                        class=\"ui basic button\"
                        data-stats-button=\"week\"
                        data-stats-url=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_dashboard_statistics", ["channelCode" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 14, $this->source); })()), "channel_code", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\">
                        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.statistics.2weeks"), "html", null, true);
        yield "
                    </button>
                    <button
                        class=\"ui basic button\"
                        data-stats-button=\"month\"
                        data-stats-url=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_dashboard_statistics", ["channelCode" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 20, $this->source); })()), "channel_code", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\">
                        ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.statistics.month"), "html", null, true);
        yield "
                    </button>
                    <button
                        class=\"ui basic button\"
                        data-stats-button=\"year\"
                        data-stats-url=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_dashboard_statistics", ["channelCode" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 26, $this->source); })()), "channel_code", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\">
                        ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.statistics.year"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
            <div class=\"ui attached segment spaceless\">
                <div class=\"stats-grid\">
                    <div class=\"stats-column\">
                        <div class=\"ui tiny statistic\">
                            <div id=\"total-sales\" data-stats-summary=\"total_sales\" class=\"value\" style=\"padding-bottom: 10px;\">
                                ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 36, $this->source); })()), "total_sales", [], "any", false, false, false, 36), "html", null, true);
        yield "
                            </div>
                            <div class=\"label\">
                                ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sales"), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"stats-column\">
                        <div class=\"ui tiny statistic\">
                            <div id=\"new-orders\" data-stats-summary=\"number_of_new_orders\" class=\"value\" style=\"padding-bottom: 10px;\">
                                ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 46, $this->source); })()), "number_of_new_orders", [], "any", false, false, false, 46), "html", null, true);
        yield "
                            </div>
                            <div class=\"label\">
                                ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.paid_orders"), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"stats-column\">
                        <div class=\"ui tiny statistic\">
                            <div id=\"new-customers\" data-stats-summary=\"number_of_new_customers\" class=\"value\" style=\"padding-bottom: 10px;\">
                                ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 56, $this->source); })()), "number_of_new_customers", [], "any", false, false, false, 56), "html", null, true);
        yield "
                            </div>
                            <div class=\"label\">
                                ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customers"), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"stats-column\">
                        <div class=\"ui tiny statistic\">
                            <div id=\"average-order-value\" data-stats-summary=\"average_order_value\" class=\"value\" style=\"padding-bottom: 10px;\">
                                ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 66, $this->source); })()), "average_order_value", [], "any", false, false, false, 66), "html", null, true);
        yield "
                            </div>
                            <div class=\"label\">
                                ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.average_order_value"), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 75
        if (((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 75, $this->source); })()) && (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 75, $this->source); })()))) {
            // line 76
            yield "                <div class=\"ui bottom attached segment stats-graph\">
                    <button id=\"navigation-prev\"
                            class=\"navigation navigation-prev\"
                            interval=\"year\"
                            data-stats-url=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_dashboard_statistics", ["channelCode" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 80, $this->source); })()), "channel_code", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\">
                        <i class=\"angle left icon\"></i>
                    </button>
                    <canvas
                        id=\"stats-graph\"
                        data-labels=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 85, $this->source); })())), "html", null, true);
            yield "\"
                        data-values=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 86, $this->source); })())), "html", null, true);
            yield "\"
                        data-currency=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sylius_currency_symbol')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 87, $this->source); })()), "base_currency_code", [], "any", false, false, false, 87)), "html", null, true);
            yield "\">
                    </canvas>
                    <button id=\"navigation-next\"
                            class=\"navigation navigation-next\"
                            interval=\"year\"
                            data-stats-url=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_dashboard_statistics", ["channelCode" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 92, $this->source); })()), "channel_code", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\">
                        <i class=\"angle right icon\"></i>
                    </button>
                </div>
            ";
        }
        // line 97
        yield "            <div class=\"ui inverted dimmer stats-loader\">
                <div class=\"ui loader\"></div>
            </div>
        </div>
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
        return "@SyliusAdmin/Dashboard/Statistics/_template.html.twig";
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
        return array (  213 => 97,  205 => 92,  197 => 87,  193 => 86,  189 => 85,  181 => 80,  175 => 76,  173 => 75,  164 => 69,  158 => 66,  148 => 59,  142 => 56,  132 => 49,  126 => 46,  116 => 39,  110 => 36,  98 => 27,  94 => 26,  86 => 21,  82 => 20,  74 => 15,  70 => 14,  62 => 9,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

{% set labels, values = sales_summary.intervals, sales_summary.sales %}

<div class=\"ui grid\">
    <div class=\"column\">
        <div class=\"stats\">
            <div class=\"ui top attached action header\">
                {{ 'sylius.ui.sales_summary'|trans }}
                <div class=\"ui buttons\">
                    <button
                        class=\"ui basic button\"
                        data-stats-button=\"week\"
                        data-stats-url=\"{{ url('sylius_admin_dashboard_statistics', {channelCode: channel.channel_code}) }}\">
                        {{ 'sylius.ui.statistics.2weeks'|trans }}
                    </button>
                    <button
                        class=\"ui basic button\"
                        data-stats-button=\"month\"
                        data-stats-url=\"{{ url('sylius_admin_dashboard_statistics', {channelCode: channel.channel_code}) }}\">
                        {{ 'sylius.ui.statistics.month'|trans }}
                    </button>
                    <button
                        class=\"ui basic button\"
                        data-stats-button=\"year\"
                        data-stats-url=\"{{ url('sylius_admin_dashboard_statistics', {channelCode: channel.channel_code}) }}\">
                        {{ 'sylius.ui.statistics.year'|trans }}
                    </button>
                </div>
            </div>
            <div class=\"ui attached segment spaceless\">
                <div class=\"stats-grid\">
                    <div class=\"stats-column\">
                        <div class=\"ui tiny statistic\">
                            <div id=\"total-sales\" data-stats-summary=\"total_sales\" class=\"value\" style=\"padding-bottom: 10px;\">
                                {{ statistics.total_sales }}
                            </div>
                            <div class=\"label\">
                                {{ 'sylius.ui.sales'|trans }}
                            </div>
                        </div>
                    </div>
                    <div class=\"stats-column\">
                        <div class=\"ui tiny statistic\">
                            <div id=\"new-orders\" data-stats-summary=\"number_of_new_orders\" class=\"value\" style=\"padding-bottom: 10px;\">
                                {{ statistics.number_of_new_orders }}
                            </div>
                            <div class=\"label\">
                                {{ 'sylius.ui.paid_orders'|trans }}
                            </div>
                        </div>
                    </div>
                    <div class=\"stats-column\">
                        <div class=\"ui tiny statistic\">
                            <div id=\"new-customers\" data-stats-summary=\"number_of_new_customers\" class=\"value\" style=\"padding-bottom: 10px;\">
                                {{ statistics.number_of_new_customers }}
                            </div>
                            <div class=\"label\">
                                {{ 'sylius.ui.customers'|trans }}
                            </div>
                        </div>
                    </div>
                    <div class=\"stats-column\">
                        <div class=\"ui tiny statistic\">
                            <div id=\"average-order-value\" data-stats-summary=\"average_order_value\" class=\"value\" style=\"padding-bottom: 10px;\">
                                {{ statistics.average_order_value }}
                            </div>
                            <div class=\"label\">
                                {{ 'sylius.ui.average_order_value'|trans }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% if labels and values %}
                <div class=\"ui bottom attached segment stats-graph\">
                    <button id=\"navigation-prev\"
                            class=\"navigation navigation-prev\"
                            interval=\"year\"
                            data-stats-url=\"{{ url('sylius_admin_dashboard_statistics', {channelCode: channel.channel_code}) }}\">
                        <i class=\"angle left icon\"></i>
                    </button>
                    <canvas
                        id=\"stats-graph\"
                        data-labels=\"{{ labels|json_encode() }}\"
                        data-values=\"{{ values|json_encode() }}\"
                        data-currency=\"{{ channel.base_currency_code|sylius_currency_symbol }}\">
                    </canvas>
                    <button id=\"navigation-next\"
                            class=\"navigation navigation-next\"
                            interval=\"year\"
                            data-stats-url=\"{{ url('sylius_admin_dashboard_statistics', {channelCode: channel.channel_code}) }}\">
                        <i class=\"angle right icon\"></i>
                    </button>
                </div>
            {% endif %}
            <div class=\"ui inverted dimmer stats-loader\">
                <div class=\"ui loader\"></div>
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/Dashboard/Statistics/_template.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/Statistics/_template.html.twig");
    }
}
