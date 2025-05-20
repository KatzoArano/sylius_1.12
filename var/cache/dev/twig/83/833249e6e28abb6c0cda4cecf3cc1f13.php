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

/* @SyliusAdmin/Shipment/Show/_shipmentUnits.html.twig */
class __TwigTemplate_87004d1ee1d66a3af2759e26d1ded585 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Shipment/Show/_shipmentUnits.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Shipment/Show/_shipmentUnits.html.twig"));

        // line 1
        yield "<div class=\"ui segment spaceless sylius-grid-table-wrapper\">
    <table class=\"ui sortable stackable very basic celled table\">
        <thead>
        <tr>
            <th>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.product"), "html", null, true);
        yield "</th>
            <th>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.variant"), "html", null, true);
        yield "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 10, $this->source); })()), "units", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 11
            yield "            <tr class=\"item\">
                <td>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["unit"], "orderItem", [], "any", false, false, false, 12), "product", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
            yield "</td>
                <td>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["unit"], "orderItem", [], "any", false, false, false, 13), "variant", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['unit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "        </tbody>
    </table>
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
        return "@SyliusAdmin/Shipment/Show/_shipmentUnits.html.twig";
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
        return array (  85 => 16,  76 => 13,  72 => 12,  69 => 11,  65 => 10,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui segment spaceless sylius-grid-table-wrapper\">
    <table class=\"ui sortable stackable very basic celled table\">
        <thead>
        <tr>
            <th>{{ 'sylius.ui.product'|trans }}</th>
            <th>{{ 'sylius.ui.variant'|trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for unit in shipment.units %}
            <tr class=\"item\">
                <td>{{ unit.orderItem.product.name }}</td>
                <td>{{ unit.orderItem.variant.name }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "@SyliusAdmin/Shipment/Show/_shipmentUnits.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Shipment/Show/_shipmentUnits.html.twig");
    }
}
