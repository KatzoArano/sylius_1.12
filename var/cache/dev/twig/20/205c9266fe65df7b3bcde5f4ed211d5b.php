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

/* @SyliusAdmin/Order/Show/_summary.html.twig */
class __TwigTemplate_2ce0aeebe9f34bb7a14dbe4f2c499c41 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/_summary.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/_summary.html.twig"));

        // line 1
        yield "<table class=\"ui celled compact small table order-summary-table\">
    <thead>
    <tr>
        <th class=\"five wide sylius-table-column-item\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order_item_product"), "html", null, true);
        yield "</th>
        <th class=\"center aligned sylius-table-column-unit_price\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.unit_price"), "html", null, true);
        yield "</th>
        <th class=\"center aligned sylius-table-column-unit_discount\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.unit_discount"), "html", null, true);
        yield "</th>
        <th class=\"center aligned sylius-table-column-unit_order_discount\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.distributed_order_discount"), "html", null, true);
        yield "</th>
        <th class=\"center aligned sylius-table-column-discounted_unit_price\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discounted_unit_price"), "html", null, true);
        yield "</th>
        <th class=\"center aligned sylius-table-column-quantity\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.quantity"), "html", null, true);
        yield "</th>
        <th class=\"center aligned sylius-table-column-subtotal\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subtotal"), "html", null, true);
        yield "</th>
        <th class=\"center aligned sylius-table-column-tax\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax"), "html", null, true);
        yield "</th>
        <th class=\"center aligned sylius-table-column-total\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
        yield "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "items", [], "any", false, false, false, 16));
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
            // line 17
            yield "        ";
            yield from $this->load("@SyliusAdmin/Order/Show/Summary/_item.html.twig", 17)->unwrap()->yield($context);
            // line 18
            yield "    ";
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
        // line 19
        yield "    </tbody>
    <tfoot>
    ";
        // line 21
        yield from $this->load("@SyliusAdmin/Order/Show/Summary/_totals.html.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "    </tfoot>
</table>
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
        return "@SyliusAdmin/Order/Show/_summary.html.twig";
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
        return array (  132 => 22,  130 => 21,  126 => 19,  112 => 18,  109 => 17,  92 => 16,  85 => 12,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"ui celled compact small table order-summary-table\">
    <thead>
    <tr>
        <th class=\"five wide sylius-table-column-item\">{{ 'sylius.ui.order_item_product'|trans }}</th>
        <th class=\"center aligned sylius-table-column-unit_price\">{{ 'sylius.ui.unit_price'|trans }}</th>
        <th class=\"center aligned sylius-table-column-unit_discount\">{{ 'sylius.ui.unit_discount'|trans }}</th>
        <th class=\"center aligned sylius-table-column-unit_order_discount\">{{ 'sylius.ui.distributed_order_discount'|trans }}</th>
        <th class=\"center aligned sylius-table-column-discounted_unit_price\">{{ 'sylius.ui.discounted_unit_price'|trans }}</th>
        <th class=\"center aligned sylius-table-column-quantity\">{{ 'sylius.ui.quantity'|trans }}</th>
        <th class=\"center aligned sylius-table-column-subtotal\">{{ 'sylius.ui.subtotal'|trans }}</th>
        <th class=\"center aligned sylius-table-column-tax\">{{ 'sylius.ui.tax'|trans }}</th>
        <th class=\"center aligned sylius-table-column-total\">{{ 'sylius.ui.total'|trans }}</th>
    </tr>
    </thead>
    <tbody>
    {% for item in order.items %}
        {% include '@SyliusAdmin/Order/Show/Summary/_item.html.twig' %}
    {% endfor %}
    </tbody>
    <tfoot>
    {% include '@SyliusAdmin/Order/Show/Summary/_totals.html.twig' %}
    </tfoot>
</table>
", "@SyliusAdmin/Order/Show/_summary.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_summary.html.twig");
    }
}
