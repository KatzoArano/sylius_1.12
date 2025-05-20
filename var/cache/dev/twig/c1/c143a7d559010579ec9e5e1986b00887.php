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

/* @PayPlugSyliusPayPlugPlugin/form/form_gateway_config_row.html.twig */
class __TwigTemplate_d11b0f26bbacaf7310978df6b0812e88 extends Template
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
            '_sylius_payment_method_gatewayConfig_factoryName_row' => [$this, 'block__sylius_payment_method_gatewayConfig_factoryName_row'],
            '_sylius_payment_method_gatewayConfig_config_secretKey_row' => [$this, 'block__sylius_payment_method_gatewayConfig_config_secretKey_row'],
            '_sylius_payment_method_gatewayConfig_config_fees_for_row' => [$this, 'block__sylius_payment_method_gatewayConfig_config_fees_for_row'],
            '_sylius_payment_method_gatewayConfig_config_oneClick_row' => [$this, 'block__sylius_payment_method_gatewayConfig_config_oneClick_row'],
            '_sylius_payment_method_enabled_errors' => [$this, 'block__sylius_payment_method_enabled_errors'],
            '_sylius_checkout_select_payment_payments_entry_oney_payment_choice_row' => [$this, 'block__sylius_checkout_select_payment_payments_entry_oney_payment_choice_row'],
            '_sylius_checkout_select_payment_payments_entry_payplug_card_choice_row' => [$this, 'block__sylius_checkout_select_payment_payments_entry_payplug_card_choice_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/form/form_gateway_config_row.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PayPlugSyliusPayPlugPlugin/form/form_gateway_config_row.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('_sylius_payment_method_gatewayConfig_factoryName_row', $context, $blocks);
        // line 16
        yield "
";
        // line 17
        yield from $this->unwrap()->yieldBlock('_sylius_payment_method_gatewayConfig_config_secretKey_row', $context, $blocks);
        // line 38
        yield "
";
        // line 39
        yield from $this->unwrap()->yieldBlock('_sylius_payment_method_gatewayConfig_config_fees_for_row', $context, $blocks);
        // line 62
        yield "
";
        // line 63
        yield from $this->unwrap()->yieldBlock('_sylius_payment_method_gatewayConfig_config_oneClick_row', $context, $blocks);
        // line 80
        yield "
";
        // line 81
        yield from $this->unwrap()->yieldBlock('_sylius_payment_method_enabled_errors', $context, $blocks);
        // line 88
        yield "
";
        // line 89
        yield from $this->unwrap()->yieldBlock('_sylius_checkout_select_payment_payments_entry_oney_payment_choice_row', $context, $blocks);
        // line 155
        yield "
";
        // line 156
        yield from $this->unwrap()->yieldBlock('_sylius_checkout_select_payment_payments_entry_payplug_card_choice_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_payment_method_gatewayConfig_factoryName_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_payment_method_gatewayConfig_factoryName_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_payment_method_gatewayConfig_factoryName_row"));

        // line 2
        yield "    ";
        $context["isOney"] = CoreExtension::inFilter(Twig\Extension\CoreExtension::constant("\\PayPlug\\SyliusPayPlugPlugin\\Gateway\\OneyGatewayFactory::FACTORY_NAME"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2));
        // line 3
        yield "    ";
        if ((($tmp = (isset($context["isOney"]) || array_key_exists("isOney", $context) ? $context["isOney"] : (function () { throw new RuntimeError('Variable "isOney" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "        <div class=\"field\">
            <div class=\"ui message positive\">
                <div class=\"content\">
                    <div class=\"header\">";
            // line 7
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.oney_gateway_config.info", ["%link%" => "https://support.payplug.com/hc/fr/articles/360015899980-Le-paiement-fractionn%C3%A9-garanti-avec-Oney-sur-Sylius"]);
            yield "</div>
                </div>
            </div>
        </div>
    ";
        }
        // line 12
        yield "    <div class=\"";
        if ((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required ";
        }
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 12, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 12, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 12, $this->source); })()))) {
            yield " error";
        }
        yield "\">";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'row', (((($tmp =  !(isset($context["isOney"]) || array_key_exists("isOney", $context) ? $context["isOney"] : (function () { throw new RuntimeError('Variable "isOney" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["attr" => ["style" => "margin: 0 0 1rem;"]]) : ([])));
        // line 14
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_payment_method_gatewayConfig_config_secretKey_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_payment_method_gatewayConfig_config_secretKey_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_payment_method_gatewayConfig_config_secretKey_row"));

        // line 18
        yield "    ";
        $context["hasFeesFor"] = CoreExtension::inFilter(Twig\Extension\CoreExtension::constant("PayPlug\\SyliusPayPlugPlugin\\Gateway\\OneyGatewayFactory::FEES_FOR"), Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "parent", [], "any", false, false, false, 18), "children", [], "any", false, false, false, 18)));
        // line 19
        yield "    ";
        if ((($tmp = (isset($context["hasFeesFor"]) || array_key_exists("hasFeesFor", $context) ? $context["hasFeesFor"] : (function () { throw new RuntimeError('Variable "hasFeesFor" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "        </div>";
            // line 21
            yield "    ";
        }
        // line 22
        yield "    <div class=\"";
        if ((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required ";
        }
        yield "field";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 22, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 22, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 22, $this->source); })()))) {
            yield " error";
        }
        yield "\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'label');
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'widget');
        // line 25
        yield "<span style=\"font-size: 0.8rem; font-style: italic\">";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'help');
        // line 27
        yield "</span>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 29
            yield "            <div class=\"ui red pointing label sylius-validation-error\">
                ";
            // line 30
            yield CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 30);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "    </div>
    ";
        // line 34
        if ((($tmp = (isset($context["hasFeesFor"]) || array_key_exists("hasFeesFor", $context) ? $context["hasFeesFor"] : (function () { throw new RuntimeError('Variable "hasFeesFor" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "        <div class=\"required field\">
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_payment_method_gatewayConfig_config_fees_for_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_payment_method_gatewayConfig_config_fees_for_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_payment_method_gatewayConfig_config_fees_for_row"));

        // line 40
        yield "    <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
        <div class=\"inline fields\">
            <div class=\"field ";
        // line 42
        if ((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 42, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required ";
        }
        yield "\">
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'label');
        yield "
            </div>";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 46
            yield "                <div class=\"field\">
                    <div class=\"ui radio checkbox\">";
            // line 48
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 48, $this->source); })())]);
            // line 49
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ((CoreExtension::inFilter("client", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49))) ? (["checked" => "checked"]) : ([]))]);
            // line 50
            yield "</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "</div>";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'errors');
        // line 55
        yield "</div>
    <style>
        ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("#" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "vars", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)), "html", null, true);
        yield " .ui.radio.checkbox input:checked ~ label:after {
            background-color: #1abb9c;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_payment_method_gatewayConfig_config_oneClick_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_payment_method_gatewayConfig_config_oneClick_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_payment_method_gatewayConfig_config_oneClick_row"));

        // line 64
        yield "    <div style=\"margin-left: 2rem;\" class=\"";
        if ((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required ";
        }
        yield "field";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 64, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 64, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 64, $this->source); })()))) {
            yield " error";
        }
        yield " ui toggle checkbox\">
        <div class=\"ui toggle checkbox\" style=\"margin-top: 2rem; margin-bottom: 0.8rem;\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'label');
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'widget');
        // line 68
        yield "</div>

        <span style=\"font-size: 0.8rem; font-style: italic;\">";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'help');
        // line 72
        yield "</span>
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 74
            yield "            <div class=\"ui red pointing label sylius-validation-error\">
                ";
            // line 75
            yield CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 75);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_payment_method_enabled_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_payment_method_enabled_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_payment_method_enabled_errors"));

        // line 82
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 83
            yield "        <div class=\"ui red pointing label sylius-validation-error\">
            ";
            // line 84
            yield CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 84);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_checkout_select_payment_payments_entry_oney_payment_choice_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_checkout_select_payment_payments_entry_oney_payment_choice_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_checkout_select_payment_payments_entry_oney_payment_choice_row"));

        // line 90
        yield "    ";
        $context["data"] = $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\OneySimulationExtension']->getSimulationData();
        // line 91
        yield "    ";
        $macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 91)->unwrap();
        // line 92
        yield "    <div class=\"oney-payment-choice__container\">
        <div class=\"oney-payment-choice__tab\">
            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "choices", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["keyChoice"] => $context["choice"]) {
            // line 95
            yield "                <a class=\"tablink\" href=\"javascript:void(0);\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 95), "html", null, true);
            yield "\">
                    <img class=\"oney-payment__image\" src=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/payplugsyliuspayplugplugin/assets/oney/" . CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 96)) . ".svg")), "html", null, true);
            yield "\">
                    ";
            // line 97
            if (!CoreExtension::inFilter(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 97), "oney_")), Twig\Extension\CoreExtension::constant("PayPlug\\SyliusPayPlugPlugin\\Gateway\\OneyGatewayFactory::ONEY_WITHOUT_FEES_CHOICES"))) {
                // line 98
                yield "                        <img class=\"oney-payment__image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/oney/logo.svg"), "html", null, true);
                yield "\">
                    ";
            }
            // line 100
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("payplug_sylius_payplug_plugin.ui." . CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 100)) . "_payment")), "html", null, true);
            yield "</p>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['keyChoice'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "        </div>
        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "vars", [], "any", false, false, false, 104), "choices", [], "any", false, false, false, 104));
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
        foreach ($context['_seq'] as $context["keyChoice"] => $context["choice"]) {
            // line 105
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 105, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 106
                yield "                ";
                $context["nx_with_fees"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 106), "_", 2), 1, [], "array", false, false, false, 106);
                // line 107
                yield "                ";
                $context["grand_total"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 107, $this->source); })()), (isset($context["nx_with_fees"]) || array_key_exists("nx_with_fees", $context) ? $context["nx_with_fees"] : (function () { throw new RuntimeError('Variable "nx_with_fees" does not exist.', 107, $this->source); })()), [], "array", false, false, false, 107), "down_payment_amount", [], "array", false, false, false, 107);
                // line 108
                yield "            ";
            }
            // line 109
            yield "            <div class=\"oney-payment-choice__item oney-payment-choice__item--";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 109), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 109), "html", null, true);
            yield "\">
                <input
                        type=\"radio\"
                        value=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 112), "html", null, true);
            yield "\"
                        id=\"oney_choice_";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyChoice"], "html", null, true);
            yield "\"
                        name=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "vars", [], "any", false, false, false, 114), "full_name", [], "any", false, false, false, 114), "html", null, true);
            yield "\"
                        class=\"oney-payment-choice__input payment-choice__input\"
                        ";
            // line 116
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "vars", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "                            ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "vars", [], "any", false, false, false, 117), "value", [], "any", false, false, false, 117) == CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 117))) ? ("checked=\"checked\"") : (""));
                yield "
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 118
$context["loop"], "index", [], "any", false, false, false, 118) === 1)) {
                // line 119
                yield "                            checked=\"checked\"
                        ";
            }
            // line 121
            yield "                >
                <label for=\"oney_choice_";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyChoice"], "html", null, true);
            yield "\" class=\"oney-payment-choice__label\">
                    <span class=\"oney-payment-choice__header\">
                            <img class=\"oney-payment__image\" src=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/payplugsyliuspayplugplugin/assets/oney/" . CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 124)) . ".svg")), "html", null, true);
            yield "\">
                            ";
            // line 125
            if (!CoreExtension::inFilter(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 125), "oney_")), Twig\Extension\CoreExtension::constant("PayPlug\\SyliusPayPlugPlugin\\Gateway\\OneyGatewayFactory::ONEY_WITHOUT_FEES_CHOICES"))) {
                // line 126
                yield "                                <img class=\"oney-payment__image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/oney/logo.svg"), "html", null, true);
                yield "\">
                            ";
            }
            // line 128
            yield "                        <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("payplug_sylius_payplug_plugin.ui." . CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 128)) . "_payment")), "html", null, true);
            yield "</p>
                    </span>
                    ";
            // line 130
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 130, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 131
                yield "                        <span class=\"oney-payment-choice__content\">
                            <p><span><strong>";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.payment_choice.current_total"), "html", null, true);
                yield " : </strong></span><span><strong>";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 132, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 132, $this->source); })()), "current_total", [], "array", false, false, false, 132)]);
                yield "</strong></span></p>
                            <p>
                                <span>";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.payment_choice.down_payment_amount"), "html", null, true);
                yield " : </span><span><strong>";
                yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 134, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 134, $this->source); })()), (isset($context["nx_with_fees"]) || array_key_exists("nx_with_fees", $context) ? $context["nx_with_fees"] : (function () { throw new RuntimeError('Variable "nx_with_fees" does not exist.', 134, $this->source); })()), [], "array", false, false, false, 134), "down_payment_amount", [], "array", false, false, false, 134)]);
                yield "</strong></span>
                                ";
                // line 135
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 135, $this->source); })()), (isset($context["nx_with_fees"]) || array_key_exists("nx_with_fees", $context) ? $context["nx_with_fees"] : (function () { throw new RuntimeError('Variable "nx_with_fees" does not exist.', 135, $this->source); })()), [], "array", false, false, false, 135), "total_cost", [], "array", false, false, false, 135) > 0)) {
                    // line 136
                    yield "                                    <small>(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.payment_choice.total_cost"), "html", null, true);
                    yield " : <strong>";
                    yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 136, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 136, $this->source); })()), (isset($context["nx_with_fees"]) || array_key_exists("nx_with_fees", $context) ? $context["nx_with_fees"] : (function () { throw new RuntimeError('Variable "nx_with_fees" does not exist.', 136, $this->source); })()), [], "array", false, false, false, 136), "total_cost", [], "array", false, false, false, 136)]);
                    yield "</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.payment_choice.effective_annual_percentage_rate"), "html", null, true);
                    yield " : <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 136, $this->source); })()), (isset($context["nx_with_fees"]) || array_key_exists("nx_with_fees", $context) ? $context["nx_with_fees"] : (function () { throw new RuntimeError('Variable "nx_with_fees" does not exist.', 136, $this->source); })()), [], "array", false, false, false, 136), "effective_annual_percentage_rate", [], "array", false, false, false, 136) . "%"), "html", null, true);
                    yield "</strong>)</small>
                                ";
                }
                // line 138
                yield "                            </p>
                            ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 139, $this->source); })()), (isset($context["nx_with_fees"]) || array_key_exists("nx_with_fees", $context) ? $context["nx_with_fees"] : (function () { throw new RuntimeError('Variable "nx_with_fees" does not exist.', 139, $this->source); })()), [], "array", false, false, false, 139), "installments", [], "array", false, false, false, 139));
                foreach ($context['_seq'] as $context["key"] => $context["installment"]) {
                    // line 140
                    yield "                                ";
                    $context["grand_total"] = ((isset($context["grand_total"]) || array_key_exists("grand_total", $context) ? $context["grand_total"] : (function () { throw new RuntimeError('Variable "grand_total" does not exist.', 140, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["installment"], "amount", [], "array", false, false, false, 140));
                    // line 141
                    yield "                                <p><span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.payment_choice.installment_amount"), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["key"] + 1), "html", null, true);
                    yield " :</span><span><strong>";
                    yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 141, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, $context["installment"], "amount", [], "any", false, false, false, 141)]);
                    yield "</strong></span></p>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['installment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 143, $this->source); })()), (isset($context["nx_with_fees"]) || array_key_exists("nx_with_fees", $context) ? $context["nx_with_fees"] : (function () { throw new RuntimeError('Variable "nx_with_fees" does not exist.', 143, $this->source); })()), [], "array", false, false, false, 143), "total_cost", [], "array", false, false, false, 143) > 0)) {
                    // line 144
                    yield "                                <p><span><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.payment_choice.grand_total"), "html", null, true);
                    yield " :</strong></span><span><strong>";
                    yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 144, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["grand_total"]) || array_key_exists("grand_total", $context) ? $context["grand_total"] : (function () { throw new RuntimeError('Variable "grand_total" does not exist.', 144, $this->source); })())]);
                    yield "</strong></span></p>
                            ";
                } else {
                    // line 146
                    yield "                                <p class=\"oney-without-fees-financing\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.payment_choice.total_cost"), "html", null, true);
                    yield " : <strong>";
                    yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 146, $this->getSourceContext())->macro_convertAndFormat(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 146, $this->source); })()), (isset($context["nx_with_fees"]) || array_key_exists("nx_with_fees", $context) ? $context["nx_with_fees"] : (function () { throw new RuntimeError('Variable "nx_with_fees" does not exist.', 146, $this->source); })()), [], "array", false, false, false, 146), "total_cost", [], "array", false, false, false, 146)]);
                    yield "</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.payment_choice.effective_annual_percentage_rate"), "html", null, true);
                    yield " : <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 146, $this->source); })()), (isset($context["nx_with_fees"]) || array_key_exists("nx_with_fees", $context) ? $context["nx_with_fees"] : (function () { throw new RuntimeError('Variable "nx_with_fees" does not exist.', 146, $this->source); })()), [], "array", false, false, false, 146), "effective_annual_percentage_rate", [], "array", false, false, false, 146) . "%"), "html", null, true);
                    yield "</strong></p>
                            ";
                }
                // line 148
                yield "                        </span>
                    ";
            }
            // line 150
            yield "                </label>
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
        unset($context['_seq'], $context['keyChoice'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 156
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__sylius_checkout_select_payment_payments_entry_payplug_card_choice_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_checkout_select_payment_payments_entry_payplug_card_choice_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_checkout_select_payment_payments_entry_payplug_card_choice_row"));

        // line 157
        yield "    <div class=\"payplug-payment-choice__container\">
        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 158, $this->source); })()), "customer", [], "any", false, false, false, 158), "cards", [], "any", false, false, false, 158));
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
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 159
            yield "            ";
            $context["cardExpirationDate"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(((Twig\Extension\CoreExtension::sprintf("%04d", CoreExtension::getAttribute($this->env, $this->source, $context["card"], "expirationYear", [], "any", false, false, false, 159)) . "-") . Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["card"], "expirationMonth", [], "any", false, false, false, 159))), "Y-m");
            // line 160
            yield "            ";
            if (((isset($context["cardExpirationDate"]) || array_key_exists("cardExpirationDate", $context) ? $context["cardExpirationDate"] : (function () { throw new RuntimeError('Variable "cardExpirationDate" does not exist.', 160, $this->source); })()) >= $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m"))) {
                // line 161
                yield "                <div class=\"payplug-payment-choice__item payplug-payment-choice__item--card-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 161), "html", null, true);
                yield "\" id=\"card-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 161), "html", null, true);
                yield "\">
                    <input type=\"radio\"
                           value=\"";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 163), "html", null, true);
                yield "\"
                           id=\"payplug_choice_card_";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 164), "html", null, true);
                yield "\"
                           name=\"";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "vars", [], "any", false, false, false, 165), "full_name", [], "any", false, false, false, 165), "html", null, true);
                yield "\"
                           class=\"payplug-payment-choice__input payment-choice__input\"
                           ";
                // line 167
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "vars", [], "any", false, false, false, 167), "value", [], "any", false, false, false, 167))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 168
                    yield "                               ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "vars", [], "any", false, false, false, 168), "value", [], "any", false, false, false, 168) == CoreExtension::getAttribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 168))) ? ("checked=\"checked\"") : (""));
                    yield "
                           ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 169
$context["loop"], "index", [], "any", false, false, false, 169) === 1)) {
                    // line 170
                    yield "                               checked=\"checked\"
                           ";
                }
                // line 172
                yield "                    >
                    <label for=\"payplug_choice_card_";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 173), "html", null, true);
                yield "\" class=\"payplug-payment-choice__label\">
                        <span class=\"payplug-payment-choice__header\">
                            <span class=\"card-type\">";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "brand", [], "any", false, false, false, 175));
                yield " ****";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "last4", [], "any", false, false, false, 175));
                yield "</span>
                            <span class=\"card-expiry\">";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.card_expires_on"), "html", null, true);
                yield " <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["card"], "expirationMonth", [], "any", false, false, false, 176)) . "/") . Twig\Extension\CoreExtension::sprintf("%04d", CoreExtension::getAttribute($this->env, $this->source, $context["card"], "expirationYear", [], "any", false, false, false, 176))), "html", null, true);
                yield "</span></span>
                        </span>
                    </label>
                </div>
            ";
            }
            // line 181
            yield "        ";
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
        unset($context['_seq'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield "        <div class=\"payplug-payment-choice__item payplug-payment-choice__item--card-other\" id=\"card-other\">
            <input type=\"radio\"
                   value=\"other\"
                   id=\"payplug_choice_card_other\"
                   name=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "vars", [], "any", false, false, false, 186), "full_name", [], "any", false, false, false, 186), "html", null, true);
        yield "\"
                   class=\"payplug-payment-choice__input payment-choice__input\"
                   ";
        // line 188
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "vars", [], "any", false, false, false, 188), "value", [], "any", false, false, false, 188))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 189
            yield "                       ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "vars", [], "any", false, false, false, 189), "value", [], "any", false, false, false, 189) == "other")) ? ("checked=\"checked\"") : (""));
            yield "
                   ";
        } elseif (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 190
(isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 190, $this->source); })()), "customer", [], "any", false, false, false, 190), "cards", [], "any", false, false, false, 190))) {
            // line 191
            yield "                       checked=\"checked\"
                   ";
        }
        // line 193
        yield "            >
            <label for=\"payplug_choice_card_other\" class=\"payplug-payment-choice__label\">
                <span class=\"payplug-payment-choice__header\">";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("payplug_sylius_payplug_plugin.ui.pay_with_another_card"), "html", null, true);
        yield "</span>
            </label>
        </div>
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
        return "@PayPlugSyliusPayPlugPlugin/form/form_gateway_config_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  802 => 195,  798 => 193,  794 => 191,  792 => 190,  787 => 189,  785 => 188,  780 => 186,  774 => 182,  760 => 181,  750 => 176,  744 => 175,  739 => 173,  736 => 172,  732 => 170,  730 => 169,  725 => 168,  723 => 167,  718 => 165,  714 => 164,  710 => 163,  702 => 161,  699 => 160,  696 => 159,  679 => 158,  676 => 157,  663 => 156,  651 => 153,  635 => 150,  631 => 148,  619 => 146,  611 => 144,  608 => 143,  595 => 141,  592 => 140,  588 => 139,  585 => 138,  573 => 136,  571 => 135,  565 => 134,  558 => 132,  555 => 131,  553 => 130,  547 => 128,  541 => 126,  539 => 125,  535 => 124,  530 => 122,  527 => 121,  523 => 119,  521 => 118,  516 => 117,  514 => 116,  509 => 114,  505 => 113,  501 => 112,  492 => 109,  489 => 108,  486 => 107,  483 => 106,  480 => 105,  463 => 104,  460 => 103,  450 => 100,  444 => 98,  442 => 97,  438 => 96,  433 => 95,  429 => 94,  425 => 92,  422 => 91,  419 => 90,  406 => 89,  388 => 84,  385 => 83,  380 => 82,  367 => 81,  355 => 78,  346 => 75,  343 => 74,  339 => 73,  336 => 72,  334 => 71,  330 => 68,  328 => 67,  326 => 66,  315 => 64,  302 => 63,  286 => 57,  282 => 55,  280 => 54,  278 => 53,  270 => 50,  268 => 49,  266 => 48,  263 => 46,  259 => 45,  255 => 43,  249 => 42,  243 => 40,  230 => 39,  217 => 35,  215 => 34,  212 => 33,  203 => 30,  200 => 29,  196 => 28,  193 => 27,  191 => 26,  189 => 25,  187 => 24,  185 => 23,  175 => 22,  172 => 21,  170 => 20,  167 => 19,  164 => 18,  151 => 17,  139 => 14,  137 => 13,  128 => 12,  120 => 7,  115 => 4,  112 => 3,  109 => 2,  96 => 1,  85 => 156,  82 => 155,  80 => 89,  77 => 88,  75 => 81,  72 => 80,  70 => 63,  67 => 62,  65 => 39,  62 => 38,  60 => 17,  57 => 16,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block _sylius_payment_method_gatewayConfig_factoryName_row %}
    {% set isOney = constant('\\\\PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\OneyGatewayFactory::FACTORY_NAME') in form.vars.value %}
    {% if isOney %}
        <div class=\"field\">
            <div class=\"ui message positive\">
                <div class=\"content\">
                    <div class=\"header\">{{ ('payplug_sylius_payplug_plugin.ui.oney_gateway_config.info')|trans({'%link%': 'https://support.payplug.com/hc/fr/articles/360015899980-Le-paiement-fractionn%C3%A9-garanti-avec-Oney-sur-Sylius'})|raw }}</div>
                </div>
            </div>
        </div>
    {% endif %}
    <div class=\"{% if required %}required {% endif %}{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        {{- form_row(form, not isOney ? {'attr': {'style': 'margin: 0 0 1rem;'}} : {}) -}}
    </div>
{% endblock %}

{% block _sylius_payment_method_gatewayConfig_config_secretKey_row %}
    {% set hasFeesFor = constant('PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\OneyGatewayFactory::FEES_FOR') in form.parent.children|keys %}
    {% if hasFeesFor %}
        </div>{# close previous <div.two.fields> to avoid 2 columns #}
    {% endif %}
    <div class=\"{% if required %}required {% endif %}field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        <span style=\"font-size: 0.8rem; font-style: italic\">
            {{- form_help(form) -}}
        </span>
        {% for error in errors %}
            <div class=\"ui red pointing label sylius-validation-error\">
                {{ error.message|raw }}
            </div>
        {% endfor %}
    </div>
    {% if hasFeesFor %}
        <div class=\"required field\">
    {% endif %}
{% endblock %}

{% block _sylius_payment_method_gatewayConfig_config_fees_for_row %}
    <div {{ block('widget_container_attributes') }}>
        <div class=\"inline fields\">
            <div class=\"field {% if required %}required {% endif %}\">
                {{ form_label(form) }}
            </div>
            {%- for child in form %}
                <div class=\"field\">
                    <div class=\"ui radio checkbox\">
                        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
                        {{- form_widget(child, {'attr': 'client' in child.vars.value ? {'checked': 'checked'} : {}}, sylius_test_form_attribute('option')) -}}
                    </div>
                </div>
            {% endfor -%}
        </div>
        {{- form_errors(form) -}}
    </div>
    <style>
        {{ '#' ~ form.vars.id }} .ui.radio.checkbox input:checked ~ label:after {
            background-color: #1abb9c;
        }
    </style>
{% endblock %}

{% block _sylius_payment_method_gatewayConfig_config_oneClick_row %}
    <div style=\"margin-left: 2rem;\" class=\"{% if required %}required {% endif %}field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %} ui toggle checkbox\">
        <div class=\"ui toggle checkbox\" style=\"margin-top: 2rem; margin-bottom: 0.8rem;\">
            {{- form_label(form) -}}
            {{- form_widget(form) -}}
        </div>

        <span style=\"font-size: 0.8rem; font-style: italic;\">
            {{- form_help(form) -}}
        </span>
        {% for error in errors %}
            <div class=\"ui red pointing label sylius-validation-error\">
                {{ error.message|raw }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block _sylius_payment_method_enabled_errors %}
    {% for error in errors %}
        <div class=\"ui red pointing label sylius-validation-error\">
            {{ error.message|raw }}
        </div>
    {% endfor %}
{% endblock %}

{% block _sylius_checkout_select_payment_payments_entry_oney_payment_choice_row %}
    {% set data = oney_simulation_data() %}
    {% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}
    <div class=\"oney-payment-choice__container\">
        <div class=\"oney-payment-choice__tab\">
            {% for keyChoice, choice in form.vars.choices %}
                <a class=\"tablink\" href=\"javascript:void(0);\" data-id=\"{{ choice.value }}\">
                    <img class=\"oney-payment__image\" src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/' ~ choice.value ~ '.svg') }}\">
                    {% if choice.value|split('oney_')|last not in constant('PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\OneyGatewayFactory::ONEY_WITHOUT_FEES_CHOICES') %}
                        <img class=\"oney-payment__image\" src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/logo.svg') }}\">
                    {% endif %}
                    <p>{{ ('payplug_sylius_payplug_plugin.ui.' ~ choice.value ~ '_payment')|trans }}</p>
                </a>
            {% endfor %}
        </div>
        {% for keyChoice, choice in form.vars.choices %}
            {% if data is not empty %}
                {% set nx_with_fees = (choice.value|split('_', 2))[1] %}
                {% set grand_total = data[nx_with_fees]['down_payment_amount'] %}
            {% endif %}
            <div class=\"oney-payment-choice__item oney-payment-choice__item--{{ choice.value }}\" id=\"{{ choice.value }}\">
                <input
                        type=\"radio\"
                        value=\"{{ choice.value }}\"
                        id=\"oney_choice_{{ keyChoice }}\"
                        name=\"{{ form.vars.full_name }}\"
                        class=\"oney-payment-choice__input payment-choice__input\"
                        {% if form.vars.value is not empty %}
                            {{ form.vars.value == choice.value ? 'checked=\"checked\"' : '' }}
                        {% elseif loop.index is same as(1) %}
                            checked=\"checked\"
                        {% endif %}
                >
                <label for=\"oney_choice_{{ keyChoice }}\" class=\"oney-payment-choice__label\">
                    <span class=\"oney-payment-choice__header\">
                            <img class=\"oney-payment__image\" src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/' ~ choice.value ~ '.svg') }}\">
                            {% if choice.value|split('oney_')|last not in constant('PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\OneyGatewayFactory::ONEY_WITHOUT_FEES_CHOICES') %}
                                <img class=\"oney-payment__image\" src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/logo.svg') }}\">
                            {% endif %}
                        <p>{{ ('payplug_sylius_payplug_plugin.ui.' ~ choice.value ~ '_payment')|trans }}</p>
                    </span>
                    {% if data is not empty %}
                        <span class=\"oney-payment-choice__content\">
                            <p><span><strong>{{ 'payplug_sylius_payplug_plugin.ui.payment_choice.current_total'|trans }} : </strong></span><span><strong>{{ money.convertAndFormat(data['current_total']) }}</strong></span></p>
                            <p>
                                <span>{{ 'payplug_sylius_payplug_plugin.ui.payment_choice.down_payment_amount'|trans }} : </span><span><strong>{{ money.convertAndFormat(data[nx_with_fees]['down_payment_amount']) }}</strong></span>
                                {% if data[nx_with_fees]['total_cost'] > 0 %}
                                    <small>({{ 'payplug_sylius_payplug_plugin.ui.payment_choice.total_cost'|trans }} : <strong>{{ money.convertAndFormat(data[nx_with_fees]['total_cost']) }}</strong> {{ 'payplug_sylius_payplug_plugin.ui.payment_choice.effective_annual_percentage_rate'|trans }} : <strong>{{ data[nx_with_fees]['effective_annual_percentage_rate'] ~ '%' }}</strong>)</small>
                                {% endif %}
                            </p>
                            {% for key, installment in data[nx_with_fees]['installments'] %}
                                {% set grand_total = grand_total + installment['amount'] %}
                                <p><span>{{ 'payplug_sylius_payplug_plugin.ui.payment_choice.installment_amount'|trans }} {{ key + 1 }} :</span><span><strong>{{ money.convertAndFormat(installment.amount) }}</strong></span></p>
                            {% endfor %}
                            {% if data[nx_with_fees]['total_cost'] > 0 %}
                                <p><span><strong>{{ 'payplug_sylius_payplug_plugin.ui.payment_choice.grand_total'|trans }} :</strong></span><span><strong>{{ money.convertAndFormat(grand_total) }}</strong></span></p>
                            {% else %}
                                <p class=\"oney-without-fees-financing\">{{ 'payplug_sylius_payplug_plugin.ui.payment_choice.total_cost'|trans }} : <strong>{{ money.convertAndFormat(data[nx_with_fees]['total_cost']) }}</strong> {{ 'payplug_sylius_payplug_plugin.ui.payment_choice.effective_annual_percentage_rate'|trans }} : <strong>{{ data[nx_with_fees]['effective_annual_percentage_rate'] ~ '%' }}</strong></p>
                            {% endif %}
                        </span>
                    {% endif %}
                </label>
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block _sylius_checkout_select_payment_payments_entry_payplug_card_choice_row %}
    <div class=\"payplug-payment-choice__container\">
        {% for card in sylius.customer.cards %}
            {% set cardExpirationDate = (\"%04d\"|format(card.expirationYear) ~ '-' ~ \"%02d\"|format(card.expirationMonth))|date(\"Y-m\") %}
            {% if cardExpirationDate >= \"now\"|date(\"Y-m\") %}
                <div class=\"payplug-payment-choice__item payplug-payment-choice__item--card-{{ card.id }}\" id=\"card-{{ card.id }}\">
                    <input type=\"radio\"
                           value=\"{{ card.id }}\"
                           id=\"payplug_choice_card_{{ card.id }}\"
                           name=\"{{ form.vars.full_name }}\"
                           class=\"payplug-payment-choice__input payment-choice__input\"
                           {% if form.vars.value is not empty %}
                               {{ form.vars.value == card.id ? 'checked=\"checked\"' : '' }}
                           {% elseif loop.index is same as(1) %}
                               checked=\"checked\"
                           {% endif %}
                    >
                    <label for=\"payplug_choice_card_{{ card.id }}\" class=\"payplug-payment-choice__label\">
                        <span class=\"payplug-payment-choice__header\">
                            <span class=\"card-type\">{{ card.brand|e }} ****{{ card.last4|e }}</span>
                            <span class=\"card-expiry\">{{ ('payplug_sylius_payplug_plugin.ui.card_expires_on')|trans }} <span>{{ \"%02d\"|format(card.expirationMonth) ~ '/' ~ \"%04d\"|format(card.expirationYear) }}</span></span>
                        </span>
                    </label>
                </div>
            {% endif %}
        {% endfor %}
        <div class=\"payplug-payment-choice__item payplug-payment-choice__item--card-other\" id=\"card-other\">
            <input type=\"radio\"
                   value=\"other\"
                   id=\"payplug_choice_card_other\"
                   name=\"{{ form.vars.full_name }}\"
                   class=\"payplug-payment-choice__input payment-choice__input\"
                   {% if form.vars.value is not empty %}
                       {{ form.vars.value == 'other' ? 'checked=\"checked\"' : '' }}
                   {% elseif sylius.customer.cards is empty %}
                       checked=\"checked\"
                   {% endif %}
            >
            <label for=\"payplug_choice_card_other\" class=\"payplug-payment-choice__label\">
                <span class=\"payplug-payment-choice__header\">{{ ('payplug_sylius_payplug_plugin.ui.pay_with_another_card')|trans }}</span>
            </label>
        </div>
    </div>
{% endblock %}
", "@PayPlugSyliusPayPlugPlugin/form/form_gateway_config_row.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/payplug/sylius-payplug-plugin/src/Resources/views/form/form_gateway_config_row.html.twig");
    }
}
