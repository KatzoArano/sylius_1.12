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

/* @SyliusShop/Common/Order/_shipments.html.twig */
class __TwigTemplate_824dbdb4f033ca702cb5a1ac483d627e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_shipments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_shipments.html.twig"));

        // line 1
        $context["state"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 1, $this->source); })()), "shippingState", [], "any", false, false, false, 1);
        // line 2
        if (((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 2, $this->source); })()) != "cart")) {
            // line 3
            yield "    ";
            yield from $this->load("@SyliusShop/Common/Order/Label/ShipmentState/orderShipmentState.html.twig", 3)->unwrap()->yield($context);
        }
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "shipments", [], "any", false, false, false, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
            // line 6
            yield "    ";
            $context["state"] = CoreExtension::getAttribute($this->env, $this->source, $context["shipment"], "state", [], "any", false, false, false, 6);
            // line 7
            yield "    <div class=\"ui small icon message\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"header\" id=\"sylius-shipping-method\" ";
            // line 10
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipping-method");
            yield ">
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shipment"], "method", [], "any", false, false, false, 11), "html", null, true);
            yield "
            </div>
            ";
            // line 13
            if (((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 13, $this->source); })()) != "cart")) {
                // line 14
                yield "            <p id=\"shipment-status\" ";
                yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("shipment-state");
                yield ">
                ";
                // line 15
                yield from $this->load("@SyliusShop/Common/Order/Label/ShipmentState/singleShipmentState.html.twig", 15)->unwrap()->yield(CoreExtension::merge($context, ["state" => (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 15, $this->source); })())]));
                // line 16
                yield "            </p>
            ";
            }
            // line 18
            yield "        </div>
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
        unset($context['_seq'], $context['_key'], $context['shipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusShop/Common/Order/_shipments.html.twig";
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
        return array (  103 => 18,  99 => 16,  97 => 15,  92 => 14,  90 => 13,  85 => 11,  81 => 10,  76 => 7,  73 => 6,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set state = order.shippingState %}
{% if state != 'cart' %}
    {% include \"@SyliusShop/Common/Order/Label/ShipmentState/orderShipmentState.html.twig\" %}
{% endif %}
{% for shipment in order.shipments %}
    {% set state = shipment.state %}
    <div class=\"ui small icon message\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"header\" id=\"sylius-shipping-method\" {{ sylius_test_html_attribute('shipping-method') }}>
                {{ shipment.method }}
            </div>
            {% if state != 'cart' %}
            <p id=\"shipment-status\" {{ sylius_test_html_attribute('shipment-state') }}>
                {% include \"@SyliusShop/Common/Order/Label/ShipmentState/singleShipmentState.html.twig\" with { 'state': state } %}
            </p>
            {% endif %}
        </div>
    </div>
{% endfor %}
", "@SyliusShop/Common/Order/_shipments.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_shipments.html.twig");
    }
}
