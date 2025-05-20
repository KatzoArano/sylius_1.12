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

/* @SyliusAdmin/CatalogPromotion/Show/Scope/for_variants.html.twig */
class __TwigTemplate_08f2db338f95010c57a6a879ceac0d83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/CatalogPromotion/Show/Scope/for_variants.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/CatalogPromotion/Show/Scope/for_variants.html.twig"));

        // line 1
        yield "<table class=\"ui very basic celled table\">
    <tbody>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.type"), "html", null, true);
        yield "</strong></td>
        <td>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.for_variants"), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.variants"), "html", null, true);
        yield "</strong></td>
        <td ";
        // line 9
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("scope-variants");
        yield ">
            <ul class=\"ui bulleted list\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["scope"]) || array_key_exists("scope", $context) ? $context["scope"] : (function () { throw new RuntimeError('Variable "scope" does not exist.', 11, $this->source); })()), "configuration", [], "any", false, false, false, 11), "variants", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
            // line 12
            yield "                    <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["variant"], "html", null, true);
            yield "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['variant'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "            </ul>
        </td>
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
        return "@SyliusAdmin/CatalogPromotion/Show/Scope/for_variants.html.twig";
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
        return array (  85 => 14,  76 => 12,  72 => 11,  67 => 9,  63 => 8,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"ui very basic celled table\">
    <tbody>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.type'|trans }}</strong></td>
        <td>{{ 'sylius.ui.for_variants'|trans }}</td>
    </tr>
    <tr>
        <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.variants'|trans }}</strong></td>
        <td {{ sylius_test_html_attribute('scope-variants') }}>
            <ul class=\"ui bulleted list\">
                {% for variant in scope.configuration.variants %}
                    <li>{{ variant }}</li>
                {% endfor %}
            </ul>
        </td>
    </tr>
    </tbody>
</table>
", "@SyliusAdmin/CatalogPromotion/Show/Scope/for_variants.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/CatalogPromotion/Show/Scope/for_variants.html.twig");
    }
}
