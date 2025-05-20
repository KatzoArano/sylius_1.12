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

/* @SyliusShop/Checkout/SelectShipping/_choice.html.twig */
class __TwigTemplate_8411433a9b9418e4f984bedcbcdd1cde extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectShipping/_choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectShipping/_choice.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusShop/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"item\" ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-item");
        yield ">
    <div class=\"field\">
        <div class=\"ui radio checkbox\" ";
        // line 5
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-method-checkbox");
        yield ">
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'widget', $this->env->getFunction('sylius_test_form_attribute')->getCallable()("shipping-method-select"));
        yield "
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\" ";
        // line 10
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-method-label");
        yield ">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'label');
        yield "</a>
        ";
        // line 11
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "            <div class=\"description\">
                <p>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), "html", null, true);
            yield "</p>
            </div>
        ";
        }
        // line 16
        yield "    </div>
    <div class=\"extra\">
        <div class=\"ui large right floated fee label\" ";
        // line 18
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-method-fee");
        yield ">
            ";
        // line 19
        yield $macros["money"]->getTemplateForMacro("macro_convertAndFormat", $context, 19, $this->getSourceContext())->macro_convertAndFormat(...[(isset($context["fee"]) || array_key_exists("fee", $context) ? $context["fee"] : (function () { throw new RuntimeError('Variable "fee" does not exist.', 19, $this->source); })())]);
        yield "
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
        return "@SyliusShop/Checkout/SelectShipping/_choice.html.twig";
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
        return array (  94 => 19,  90 => 18,  86 => 16,  80 => 13,  77 => 12,  75 => 11,  69 => 10,  62 => 6,  58 => 5,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusShop/Common/Macro/money.html.twig' as money %}

<div class=\"item\" {{ sylius_test_html_attribute('shipping-item') }}>
    <div class=\"field\">
        <div class=\"ui radio checkbox\" {{ sylius_test_html_attribute('shipping-method-checkbox') }}>
            {{ form_widget(form, sylius_test_form_attribute('shipping-method-select')) }}
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\" {{ sylius_test_html_attribute('shipping-method-label') }}>{{ form_label(form) }}</a>
        {% if method.description is not null %}
            <div class=\"description\">
                <p>{{ method.description }}</p>
            </div>
        {% endif %}
    </div>
    <div class=\"extra\">
        <div class=\"ui large right floated fee label\" {{ sylius_test_html_attribute('shipping-method-fee') }}>
            {{ money.convertAndFormat(fee) }}
        </div>
    </div>
</div>
", "@SyliusShop/Checkout/SelectShipping/_choice.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectShipping/_choice.html.twig");
    }
}
