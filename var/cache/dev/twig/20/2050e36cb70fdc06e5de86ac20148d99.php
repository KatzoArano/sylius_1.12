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

/* @SyliusRefundPlugin/Order/Admin/Refund/Form/Table/_items.html.twig */
class __TwigTemplate_9cc7a5e6dcc14272979bd971aa06e274 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/Refund/Form/Table/_items.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/Refund/Form/Table/_items.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 1, $this->source); })()), "items", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "units", [], "any", false, false, false, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
                // line 3
                yield "        ";
                $context["variant"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 3);
                // line 4
                yield "        ";
                $context["product"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 4, $this->source); })()), "product", [], "any", false, false, false, 4);
                // line 5
                yield "        <tr class=\"unit\">
            ";
                // line 6
                yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius_refund.admin.order.refund.table.body.item", $context);
                yield "
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['unit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
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
        return "@SyliusRefundPlugin/Order/Admin/Refund/Form/Table/_items.html.twig";
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
        return array (  66 => 6,  63 => 5,  60 => 4,  57 => 3,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for item in order.items %}
    {% for unit in item.units %}
        {% set variant = item.variant %}
        {% set product = variant.product %}
        <tr class=\"unit\">
            {{ sylius_template_event('sylius_refund.admin.order.refund.table.body.item', _context) }}
        </tr>
    {% endfor %}
{% endfor %}
", "@SyliusRefundPlugin/Order/Admin/Refund/Form/Table/_items.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Order/Admin/Refund/Form/Table/_items.html.twig");
    }
}
