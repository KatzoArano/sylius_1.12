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

/* @SyliusAdmin/Product/Show/_detailsTable.html.twig */
class __TwigTemplate_d1c684291e8e4643d0dac0d72046ac76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_detailsTable.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_detailsTable.html.twig"));

        // line 1
        yield "<table class=\"ui very basic celled table\">
    <tbody>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.code"), "html", null, true);
        yield "</strong></td>
        <td>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "code", [], "any", false, false, false, 5), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channels"), "html", null, true);
        yield "</strong></td>
        <td>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "channels", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 11
            yield "                <div>
                    <span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "color", [], "any", false, false, false, 12), "html", null, true);
            yield "\"></span>
                    <span class=\"channel-name\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel"], "html", null, true);
            yield "</span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "        </td>
    </tr>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.current_stock"), "html", null, true);
        yield "</strong></td>
        <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "variants", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20), "onHand", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax_category"), "html", null, true);
        yield "</strong></td>
        <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "variants", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), "taxCategory", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
    </tr>
    </tbody>
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
        return "@SyliusAdmin/Product/Show/_detailsTable.html.twig";
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
        return array (  107 => 24,  103 => 23,  97 => 20,  93 => 19,  88 => 16,  79 => 13,  75 => 12,  72 => 11,  68 => 10,  63 => 8,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"ui very basic celled table\">
    <tbody>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.code'|trans }}</strong></td>
        <td>{{ product.code }}</td>
    </tr>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.channels'|trans }}</strong></td>
        <td>
            {% for channel in product.channels %}
                <div>
                    <span class=\"ui large empty horizontal circular label\" style=\"background-color: {{ channel.color }}\"></span>
                    <span class=\"channel-name\">{{ channel }}</span>
                </div>
            {% endfor %}
        </td>
    </tr>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.current_stock'|trans }}</strong></td>
        <td>{{ product.variants.first.onHand }}</td>
    </tr>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.tax_category'|trans }}</strong></td>
        <td>{{ product.variants.first.taxCategory }}</td>
    </tr>
    </tbody>
</table>
", "@SyliusAdmin/Product/Show/_detailsTable.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_detailsTable.html.twig");
    }
}
