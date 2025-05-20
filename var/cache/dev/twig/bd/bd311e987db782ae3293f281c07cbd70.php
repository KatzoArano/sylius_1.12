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

/* @SyliusShop/Checkout/SelectPayment/_choice.html.twig */
class __TwigTemplate_c6198adf8688e4bfd3cc7d347ff8d32b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectPayment/_choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectPayment/_choice.html.twig"));

        // line 1
        $context["oneyFactoryName"] = Twig\Extension\CoreExtension::constant("PayPlug\\SyliusPayPlugPlugin\\Gateway\\OneyGatewayFactory::FACTORY_NAME");
        // line 2
        $context["payplugFactoryName"] = Twig\Extension\CoreExtension::constant("PayPlug\\SyliusPayPlugPlugin\\Gateway\\PayplugGatewayFactory::FACTORY_NAME");
        // line 3
        $context["bancontactFactoryName"] = Twig\Extension\CoreExtension::constant("PayPlug\\SyliusPayPlugPlugin\\Gateway\\BancontactGatewayFactory::FACTORY_NAME");
        // line 4
        $context["applePayFactoryName"] = Twig\Extension\CoreExtension::constant("PayPlug\\SyliusPayPlugPlugin\\Gateway\\ApplePayGatewayFactory::FACTORY_NAME");
        // line 5
        $context["americanExpressFactoryName"] = Twig\Extension\CoreExtension::constant("PayPlug\\SyliusPayPlugPlugin\\Gateway\\AmericanExpressGatewayFactory::FACTORY_NAME");
        // line 6
        yield "
";
        // line 7
        $context["checkboxClass"] = "";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 8, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 8), "factoryName", [], "any", false, false, false, 8) == (isset($context["oneyFactoryName"]) || array_key_exists("oneyFactoryName", $context) ? $context["oneyFactoryName"] : (function () { throw new RuntimeError('Variable "oneyFactoryName" does not exist.', 8, $this->source); })()))) {
            // line 9
            yield "    ";
            $context["checkboxClass"] = "checkbox-oney";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 10, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 10), "factoryName", [], "any", false, false, false, 10) == (isset($context["payplugFactoryName"]) || array_key_exists("payplugFactoryName", $context) ? $context["payplugFactoryName"] : (function () { throw new RuntimeError('Variable "payplugFactoryName" does not exist.', 10, $this->source); })()))) {
            // line 11
            yield "    ";
            $context["checkboxClass"] = "checkbox-payplug";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 12, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 12), "factoryName", [], "any", false, false, false, 12) == (isset($context["bancontactFactoryName"]) || array_key_exists("bancontactFactoryName", $context) ? $context["bancontactFactoryName"] : (function () { throw new RuntimeError('Variable "bancontactFactoryName" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "    ";
            $context["checkboxClass"] = "checkbox-bancontact";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 14, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 14), "factoryName", [], "any", false, false, false, 14) == (isset($context["applePayFactoryName"]) || array_key_exists("applePayFactoryName", $context) ? $context["applePayFactoryName"] : (function () { throw new RuntimeError('Variable "applePayFactoryName" does not exist.', 14, $this->source); })()))) {
            // line 15
            yield "    ";
            $context["checkboxClass"] = "checkbox-applepay";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 16, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 16), "factoryName", [], "any", false, false, false, 16) == (isset($context["americanExpressFactoryName"]) || array_key_exists("americanExpressFactoryName", $context) ? $context["americanExpressFactoryName"] : (function () { throw new RuntimeError('Variable "americanExpressFactoryName" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "    ";
            $context["checkboxClass"] = "checkbox-american-express";
        }
        // line 19
        yield "
";
        // line 20
        $context["showOney"] = false;
        // line 21
        $context["hasSavedCards"] = false;
        // line 22
        yield "
";
        // line 23
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 23, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 23), "factoryName", [], "any", false, false, false, 23) == (isset($context["oneyFactoryName"]) || array_key_exists("oneyFactoryName", $context) ? $context["oneyFactoryName"] : (function () { throw new RuntimeError('Variable "oneyFactoryName" does not exist.', 23, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 23), "parent", [], "any", false, true, false, 23), "oney_payment_choice", [], "any", true, true, false, 23))) {
            // line 24
            yield "    ";
            $context["showOney"] = true;
        } elseif ((((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 26, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 26), "factoryName", [], "any", false, false, false, 26) == (isset($context["payplugFactoryName"]) || array_key_exists("payplugFactoryName", $context) ? $context["payplugFactoryName"] : (function () { throw new RuntimeError('Variable "payplugFactoryName" does not exist.', 26, $this->source); })()))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["form"] ?? null), "parent", [], "any", false, true, false, 27), "parent", [], "any", false, true, false, 27), "payplug_card_choice", [], "any", true, true, false, 27)) && $this->extensions['PayPlug\SyliusPayPlugPlugin\Twig\PayPlugExtension']->isSaveCardAllowed(        // line 28
(isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 28, $this->source); })()))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 29, $this->source); })()), "customer", [], "any", false, false, false, 29), "cards", [], "any", false, false, false, 29)))) {
            // line 31
            yield "    ";
            $context["hasSavedCards"] = true;
        }
        // line 33
        yield "
<div class=\"item payment-item\" ";
        // line 34
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-item");
        yield ">
    <div class=\"field\">
        <div class=\"ui radio checkbox ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["checkboxClass"]) || array_key_exists("checkboxClass", $context) ? $context["checkboxClass"] : (function () { throw new RuntimeError('Variable "checkboxClass" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-method-checkbox");
        yield ">
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'widget', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("payment-method-select"));
        yield "
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">
            ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 42, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 42), "factoryName", [], "any", false, false, false, 42) == (isset($context["oneyFactoryName"]) || array_key_exists("oneyFactoryName", $context) ? $context["oneyFactoryName"] : (function () { throw new RuntimeError('Variable "oneyFactoryName" does not exist.', 42, $this->source); })()))) {
            // line 43
            yield "                <label for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "vars", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\" data-test-payment-method-label=\"\" data-gateway=\"oney\">
                    ";
            // line 44
            if (!CoreExtension::inFilter(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "parent", [], "any", false, false, false, 44), "parent", [], "any", false, false, false, 44), "oney_payment_choice", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "choices", [], "any", false, false, false, 44)), "value", [], "any", false, false, false, 44), "oney_")), Twig\Extension\CoreExtension::constant("PayPlug\\SyliusPayPlugPlugin\\Gateway\\OneyGatewayFactory::ONEY_WITHOUT_FEES_CHOICES"))) {
                // line 45
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/oney/3x4x.svg"), "html", null, true);
                yield "\" class=\"oney-logo\" alt=\"Oney\"/>
                    ";
            } else {
                // line 47
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/oney/3x4x-without-fees.svg"), "html", null, true);
                yield "\" class=\"oney-logo\" alt=\"Oney Sans Frais\"/>
                    ";
            }
            // line 49
            yield "                </label>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 50, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 50), "factoryName", [], "any", false, false, false, 50) == (isset($context["payplugFactoryName"]) || array_key_exists("payplugFactoryName", $context) ? $context["payplugFactoryName"] : (function () { throw new RuntimeError('Variable "payplugFactoryName" does not exist.', 50, $this->source); })()))) {
            // line 51
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'label', ["label_attr" => ["data-test-payment-method-label" => "", "data-gateway" => "payplug"]]);
            yield "
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 52, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 52), "factoryName", [], "any", false, false, false, 52) == (isset($context["applePayFactoryName"]) || array_key_exists("applePayFactoryName", $context) ? $context["applePayFactoryName"] : (function () { throw new RuntimeError('Variable "applePayFactoryName" does not exist.', 52, $this->source); })()))) {
            // line 53
            yield "                <div class=\"apple-pay-method\">
                    <label for=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
            yield "\" data-test-payment-method-label=\"\" data-gateway=\"apple-pay\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "label", [], "any", false, false, false, 54), "html", null, true);
            yield "
                        <img src=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/apple-pay/logo.svg"), "html", null, true);
            yield "\" class=\"apple-pay-logo\" alt=\"Apple Pay\" height=\"45\" width=\"60\" />
                    </label>
                </div>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 58
(isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 58, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 58), "factoryName", [], "any", false, false, false, 58) == (isset($context["americanExpressFactoryName"]) || array_key_exists("americanExpressFactoryName", $context) ? $context["americanExpressFactoryName"] : (function () { throw new RuntimeError('Variable "americanExpressFactoryName" does not exist.', 58, $this->source); })()))) {
            // line 59
            yield "                <div class=\"american-express-method\">
                    <label for=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" data-test-payment-method-label=\"\" data-gateway=\"american-express\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "label", [], "any", false, false, false, 60), "html", null, true);
            yield "
                        <img src=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/american-express/logo.svg"), "html", null, true);
            yield "\" class=\"american-express-logo\" alt=\"American Express\" height=\"45\" width=\"60\" />
                    </label>
                </div>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 64
(isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 64, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 64), "factoryName", [], "any", false, false, false, 64) == (isset($context["bancontactFactoryName"]) || array_key_exists("bancontactFactoryName", $context) ? $context["bancontactFactoryName"] : (function () { throw new RuntimeError('Variable "bancontactFactoryName" does not exist.', 64, $this->source); })()))) {
            // line 65
            yield "                <div class=\"bancontact-method\">
                    <label for=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
            yield "\" data-test-payment-method-label=\"\" data-gateway=\"bancontact\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "vars", [], "any", false, false, false, 66), "label", [], "any", false, false, false, 66), "html", null, true);
            yield "
                        <img src=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/payplugsyliuspayplugplugin/assets/bancontact/logo.svg"), "html", null, true);
            yield "\" class=\"bancontact-logo\" alt=\"Bancontact\" height=\"45\" width=\"60\" />
                    </label>
                </div>
            ";
        } else {
            // line 71
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'label', ["label_attr" => ["data-test-payment-method-label" => ""]]);
            yield "
            ";
        }
        // line 73
        yield "        </a>
        ";
        // line 74
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "            <div class=\"description\">
                <p>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), "html", null, true);
            yield "</p>
            </div>
        ";
        }
        // line 79
        yield "        ";
        if ((($tmp = (isset($context["showOney"]) || array_key_exists("showOney", $context) ? $context["showOney"] : (function () { throw new RuntimeError('Variable "showOney" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "            <div class=\"oney-payment-choice payment-method-choice\" data-payment-input-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "vars", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
            yield "\">
                ";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "parent", [], "any", false, false, false, 81), "parent", [], "any", false, false, false, 81), "oney_payment_choice", [], "any", false, false, false, 81), 'row');
            yield "
            </div>
            ";
            // line 83
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "session", [], "any", false, false, false, 83)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "session", [], "any", false, false, false, 83), "get", ["oney_has_error"], "method", false, false, false, 83) == true))) {
                // line 84
                yield "                <script type=\"text/javascript\">
                    /* <![CDATA[ */
                    var completeInfoRoute = '";
                // line 86
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payplug_sylius_oney_complete_info");
                yield "?tokenValue=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 86, $this->source); })()), "tokenValue", [], "any", false, false, false, 86), "html", null, true);
                yield "';
                    /* ]] */
                </script>
            ";
            }
            // line 90
            yield "        ";
        } elseif ((($tmp = (isset($context["hasSavedCards"]) || array_key_exists("hasSavedCards", $context) ? $context["hasSavedCards"] : (function () { throw new RuntimeError('Variable "hasSavedCards" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "            <div class=\"payplug-payment-choice payment-method-choice\" data-payment-input-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "vars", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91), "html", null, true);
            yield "\">
                ";
            // line 92
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "parent", [], "any", false, false, false, 92), "parent", [], "any", false, false, false, 92), "payplug_card_choice", [], "any", false, false, false, 92), 'row');
            yield "
            </div>
        ";
        }
        // line 95
        yield "        ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 95, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 95), "factoryName", [], "any", false, false, false, 95) === (isset($context["payplugFactoryName"]) || array_key_exists("payplugFactoryName", $context) ? $context["payplugFactoryName"] : (function () { throw new RuntimeError('Variable "payplugFactoryName" does not exist.', 95, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["method"] ?? null), "gatewayConfig", [], "any", false, true, false, 95), "config", [], "any", false, true, false, 95), "integratedPayment", [], "any", true, true, false, 95)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 95, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 95), "config", [], "any", false, false, false, 95), "integratedPayment", [], "any", false, false, false, 95) === true))) {
            // line 96
            yield "            ";
            yield from $this->load("@PayPlugSyliusPayPlugPlugin/form/integrated.html.twig", 96)->unwrap()->yield(CoreExtension::merge($context, ["paymentMethod" =>             // line 97
(isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 97, $this->source); })()), "payment" => CoreExtension::getAttribute($this->env, $this->source,             // line 98
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 98, $this->source); })()), "getLastPayment", ["cart"], "method", false, false, false, 98), "hasSavedCards" =>             // line 99
(isset($context["hasSavedCards"]) || array_key_exists("hasSavedCards", $context) ? $context["hasSavedCards"] : (function () { throw new RuntimeError('Variable "hasSavedCards" does not exist.', 99, $this->source); })())]));
            // line 101
            yield "        ";
        }
        // line 102
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 102, $this->source); })()), "gatewayConfig", [], "any", false, false, false, 102), "factoryName", [], "any", false, false, false, 102) == (isset($context["applePayFactoryName"]) || array_key_exists("applePayFactoryName", $context) ? $context["applePayFactoryName"] : (function () { throw new RuntimeError('Variable "applePayFactoryName" does not exist.', 102, $this->source); })()))) {
            // line 103
            yield "            <script src=\"https://applepay.cdn-apple.com/jsapi/v1/apple-pay-sdk.js\"></script>
            <script>
                const applePaySessionRequestSettings = {
                    \"countryCode\": \"";
            // line 106
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 106, $this->source); })()), "channel", [], "any", false, false, false, 106), "defaultLocale", [], "any", false, false, false, 106), "code", [], "any", false, false, false, 106)) == 2)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 106, $this->source); })()), "channel", [], "any", false, false, false, 106), "defaultLocale", [], "any", false, false, false, 106), "code", [], "any", false, false, false, 106), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 106, $this->source); })()), "channel", [], "any", false, false, false, 106), "defaultLocale", [], "any", false, false, false, 106), "code", [], "any", false, false, false, 106), 3, 2), "html", null, true);
            }
            yield "\",
                    \"currencyCode\": \"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 107, $this->source); })()), "channel", [], "any", false, false, false, 107), "baseCurrency", [], "any", false, false, false, 107), "code", [], "any", false, false, false, 107), "html", null, true);
            yield "\",
                    \"merchantCapabilities\": [
                        \"supports3DS\"
                    ],
                    \"supportedNetworks\": [
                        \"visa\",
                        \"mastercard\"
                    ],
                    \"total\": {
                        \"label\": \"\",
                        \"type\": \"final\",
                        \"amount\": ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 118, $this->source); })()), "total", [], "any", false, false, false, 118) / 100), "html", null, true);
            yield "
                    },
                    'applicationData': btoa(JSON.stringify({
                        'apple_pay_domain': \"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 121, $this->source); })()), "channel", [], "any", false, false, false, 121), "hostname", [], "any", false, false, false, 121), "html", null, true);
            yield "\"
                    }))
                };
            </script>
            <apple-pay-button id=\"payplug-applepay-btn\"
                              buttonstyle=\"black\"
                              type=\"pay\"
                              locale=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "request", [], "any", false, false, false, 128), "locale", [], "any", false, false, false, 128), "html", null, true);
            yield "\"
                              data-validate-merchant-route=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payplug_shop_checkout_apple_prepare", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129)]), "html", null, true);
            yield "\"
                              data-payment-authorized-route=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payplug_shop_checkout_apple_confirm", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
            yield "\"
                              data-session-cancel-route=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payplug_shop_checkout_apple_cancel", ["orderId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131)]), "html", null, true);
            yield "\"
            ></apple-pay-button>
        ";
        }
        // line 134
        yield "    </div>
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
        return "@SyliusShop/Checkout/SelectPayment/_choice.html.twig";
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
        return array (  356 => 134,  350 => 131,  346 => 130,  342 => 129,  338 => 128,  328 => 121,  322 => 118,  308 => 107,  300 => 106,  295 => 103,  292 => 102,  289 => 101,  287 => 99,  286 => 98,  285 => 97,  283 => 96,  280 => 95,  274 => 92,  269 => 91,  266 => 90,  257 => 86,  253 => 84,  251 => 83,  246 => 81,  241 => 80,  238 => 79,  232 => 76,  229 => 75,  227 => 74,  224 => 73,  218 => 71,  211 => 67,  205 => 66,  202 => 65,  200 => 64,  194 => 61,  188 => 60,  185 => 59,  183 => 58,  177 => 55,  171 => 54,  168 => 53,  166 => 52,  161 => 51,  159 => 50,  156 => 49,  150 => 47,  144 => 45,  142 => 44,  137 => 43,  135 => 42,  127 => 37,  121 => 36,  116 => 34,  113 => 33,  109 => 31,  107 => 29,  106 => 28,  105 => 27,  104 => 26,  101 => 24,  99 => 23,  96 => 22,  94 => 21,  92 => 20,  89 => 19,  85 => 17,  83 => 16,  80 => 15,  78 => 14,  75 => 13,  73 => 12,  70 => 11,  68 => 10,  65 => 9,  63 => 8,  61 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set oneyFactoryName = constant('PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\OneyGatewayFactory::FACTORY_NAME') %}
{% set payplugFactoryName = constant('PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\PayplugGatewayFactory::FACTORY_NAME') %}
{% set bancontactFactoryName = constant('PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\BancontactGatewayFactory::FACTORY_NAME') %}
{% set applePayFactoryName = constant('PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\ApplePayGatewayFactory::FACTORY_NAME') %}
{% set americanExpressFactoryName = constant('PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\AmericanExpressGatewayFactory::FACTORY_NAME') %}

{% set checkboxClass = '' %}
{% if method.gatewayConfig.factoryName == oneyFactoryName %}
    {% set checkboxClass = 'checkbox-oney' %}
{% elseif method.gatewayConfig.factoryName == payplugFactoryName %}
    {% set checkboxClass = 'checkbox-payplug' %}
{% elseif method.gatewayConfig.factoryName == bancontactFactoryName %}
    {% set checkboxClass = 'checkbox-bancontact' %}
{% elseif method.gatewayConfig.factoryName == applePayFactoryName %}
    {% set checkboxClass = 'checkbox-applepay' %}
{% elseif method.gatewayConfig.factoryName == americanExpressFactoryName %}
    {% set checkboxClass = 'checkbox-american-express' %}
{% endif %}

{% set showOney = false %}
{% set hasSavedCards = false %}

{% if method.gatewayConfig.factoryName == oneyFactoryName and form.parent.parent.oney_payment_choice is defined %}
    {% set showOney = true %}
{% elseif is_granted('ROLE_USER')
    and method.gatewayConfig.factoryName == payplugFactoryName
    and form.parent.parent.payplug_card_choice is defined
    and is_save_card_enabled(method)
    and sylius.customer.cards is not empty
%}
    {% set hasSavedCards = true %}
{% endif %}

<div class=\"item payment-item\" {{ sylius_test_html_attribute('payment-item') }}>
    <div class=\"field\">
        <div class=\"ui radio checkbox {{ checkboxClass }}\" {{ sylius_test_html_attribute('payment-method-checkbox') }}>
            {{ form_widget(form, sylius_test_form_attribute('payment-method-select')) }}
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">
            {% if method.gatewayConfig.factoryName == oneyFactoryName %}
                <label for=\"{{ form.vars.id }}\" data-test-payment-method-label=\"\" data-gateway=\"oney\">
                    {% if ((form.parent.parent.oney_payment_choice.vars.choices|last).value|split('oney_')|last) not in constant('PayPlug\\\\SyliusPayPlugPlugin\\\\Gateway\\\\OneyGatewayFactory::ONEY_WITHOUT_FEES_CHOICES') %}
                        <img src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/3x4x.svg') }}\" class=\"oney-logo\" alt=\"Oney\"/>
                    {% else %}
                        <img src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/oney/3x4x-without-fees.svg') }}\" class=\"oney-logo\" alt=\"Oney Sans Frais\"/>
                    {% endif %}
                </label>
            {% elseif method.gatewayConfig.factoryName == payplugFactoryName %}
                {{ form_label(form, null, {'label_attr': {'data-test-payment-method-label': '', 'data-gateway': 'payplug'}}) }}
            {% elseif method.gatewayConfig.factoryName == applePayFactoryName %}
                <div class=\"apple-pay-method\">
                    <label for=\"{{ form.vars.id }}\" data-test-payment-method-label=\"\" data-gateway=\"apple-pay\">{{ form.vars.label }}
                        <img src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/apple-pay/logo.svg') }}\" class=\"apple-pay-logo\" alt=\"Apple Pay\" height=\"45\" width=\"60\" />
                    </label>
                </div>
            {% elseif method.gatewayConfig.factoryName == americanExpressFactoryName %}
                <div class=\"american-express-method\">
                    <label for=\"{{ form.vars.id }}\" data-test-payment-method-label=\"\" data-gateway=\"american-express\">{{ form.vars.label }}
                        <img src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/american-express/logo.svg') }}\" class=\"american-express-logo\" alt=\"American Express\" height=\"45\" width=\"60\" />
                    </label>
                </div>
            {% elseif method.gatewayConfig.factoryName == bancontactFactoryName %}
                <div class=\"bancontact-method\">
                    <label for=\"{{ form.vars.id }}\" data-test-payment-method-label=\"\" data-gateway=\"bancontact\">{{ form.vars.label }}
                        <img src=\"{{ asset('bundles/payplugsyliuspayplugplugin/assets/bancontact/logo.svg') }}\" class=\"bancontact-logo\" alt=\"Bancontact\" height=\"45\" width=\"60\" />
                    </label>
                </div>
            {% else %}
                {{ form_label(form, null, {'label_attr': {'data-test-payment-method-label': ''}}) }}
            {% endif %}
        </a>
        {% if method.description is not null %}
            <div class=\"description\">
                <p>{{ method.description }}</p>
            </div>
        {% endif %}
        {% if showOney %}
            <div class=\"oney-payment-choice payment-method-choice\" data-payment-input-id=\"{{ form.vars.id }}\">
                {{ form_row(form.parent.parent.oney_payment_choice) }}
            </div>
            {% if app.session is not null and app.session.get('oney_has_error') == true %}
                <script type=\"text/javascript\">
                    /* <![CDATA[ */
                    var completeInfoRoute = '{{ path(\"payplug_sylius_oney_complete_info\") }}?tokenValue={{ order.tokenValue }}';
                    /* ]] */
                </script>
            {% endif %}
        {% elseif hasSavedCards %}
            <div class=\"payplug-payment-choice payment-method-choice\" data-payment-input-id=\"{{ form.vars.id }}\">
                {{ form_row(form.parent.parent.payplug_card_choice) }}
            </div>
        {% endif %}
        {% if method.gatewayConfig.factoryName is same as payplugFactoryName and method.gatewayConfig.config.integratedPayment is defined and method.gatewayConfig.config.integratedPayment is same as true %}
            {% include '@PayPlugSyliusPayPlugPlugin/form/integrated.html.twig' with {
                'paymentMethod': method,
                'payment': order.getLastPayment('cart'),
                'hasSavedCards': hasSavedCards,
            } %}
        {% endif %}
        {% if method.gatewayConfig.factoryName == applePayFactoryName %}
            <script src=\"https://applepay.cdn-apple.com/jsapi/v1/apple-pay-sdk.js\"></script>
            <script>
                const applePaySessionRequestSettings = {
                    \"countryCode\": \"{% if sylius.channel.defaultLocale.code|length == 2 %}{{ sylius.channel.defaultLocale.code }}{% else %}{{ sylius.channel.defaultLocale.code|slice(3, 2) }}{% endif %}\",
                    \"currencyCode\": \"{{ sylius.channel.baseCurrency.code }}\",
                    \"merchantCapabilities\": [
                        \"supports3DS\"
                    ],
                    \"supportedNetworks\": [
                        \"visa\",
                        \"mastercard\"
                    ],
                    \"total\": {
                        \"label\": \"\",
                        \"type\": \"final\",
                        \"amount\": {{ order.total / 100 }}
                    },
                    'applicationData': btoa(JSON.stringify({
                        'apple_pay_domain': \"{{ sylius.channel.hostname }}\"
                    }))
                };
            </script>
            <apple-pay-button id=\"payplug-applepay-btn\"
                              buttonstyle=\"black\"
                              type=\"pay\"
                              locale=\"{{ app.request.locale }}\"
                              data-validate-merchant-route=\"{{ path('payplug_shop_checkout_apple_prepare', {'orderId': order.id}) }}\"
                              data-payment-authorized-route=\"{{ path('payplug_shop_checkout_apple_confirm', {'orderId': order.id}) }}\"
                              data-session-cancel-route=\"{{ path('payplug_shop_checkout_apple_cancel', {'orderId': order.id}) }}\"
            ></apple-pay-button>
        {% endif %}
    </div>
</div>
", "@SyliusShop/Checkout/SelectPayment/_choice.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/payplug/sylius-payplug-plugin/src/Resources/views/SyliusShopBundle/Checkout/SelectPayment/_choice.html.twig");
    }
}
