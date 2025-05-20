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

/* @SyliusAdmin/Shipment/Grid/Action/_shipWithTrackingCodeContent.html.twig */
class __TwigTemplate_4c5844f8c97e854c26e67a015705b94d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Shipment/Grid/Action/_shipWithTrackingCodeContent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Shipment/Grid/Action/_shipWithTrackingCodeContent.html.twig"));

        // line 1
        if ((($tmp = $this->extensions['SM\Extension\Twig\SMExtension']->can((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "ship", "sylius_shipment")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shipment::updateAction", ["_sylius" => ["event" => "ship", "repository" => ["method" => "findOneByOrderId", "arguments" => ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 8
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "orderId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 9
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "order", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]], "state_machine" => ["graph" => "sylius_shipment", "transition" => "ship"], "section" => "admin", "permission" => true, "template" => "@SyliusAdmin/Shipment/Grid/_ship.html.twig", "form" => "Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType", "vars" => ["route" => ["parameters" => ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 23
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "orderId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 24
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "order", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]]]]]));
            // line 29
            yield "
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/Shipment/Grid/Action/_shipWithTrackingCodeContent.html.twig";
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
        return array (  57 => 29,  55 => 24,  54 => 23,  53 => 9,  52 => 8,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if sm_can(data, 'ship', 'sylius_shipment') %}
    {{ render(controller('sylius.controller.shipment::updateAction', {
        '_sylius': {
            'event': 'ship',
            'repository': {
                'method': 'findOneByOrderId',
                'arguments': {
                    'id': data.id,
                    'orderId': data.order.id
                }
            },
            'state_machine': {
                'graph': 'sylius_shipment',
                'transition': 'ship'
            },
            'section': 'admin',
            'permission': true,
            'template': '@SyliusAdmin/Shipment/Grid/_ship.html.twig',
            'form': 'Sylius\\\\Bundle\\\\ShippingBundle\\\\Form\\\\Type\\\\ShipmentShipType',
            'vars': {
                'route': {
                    'parameters': {
                        'id': data.id,
                        'orderId': data.order.id
                    }
                }
            }
        }
    })) }}
{% endif %}
", "@SyliusAdmin/Shipment/Grid/Action/_shipWithTrackingCodeContent.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Shipment/Grid/Action/_shipWithTrackingCodeContent.html.twig");
    }
}
