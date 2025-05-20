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

/* @SyliusAdmin/Product/Show/_appliedPromotions.html.twig */
class __TwigTemplate_0806bb31a00230768fdda14b09f5c760 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_appliedPromotions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_appliedPromotions.html.twig"));

        // line 1
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["channelPricing"]) || array_key_exists("channelPricing", $context) ? $context["channelPricing"] : (function () { throw new RuntimeError('Variable "channelPricing" does not exist.', 1, $this->source); })()), "appliedPromotions", [], "any", false, false, false, 1))) {
            // line 2
            yield "    <td>-</td>
";
        } else {
            // line 4
            yield "    <td class=\"fourteen wide\">
        <ul class=\"ui list\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["channelPricing"]) || array_key_exists("channelPricing", $context) ? $context["channelPricing"] : (function () { throw new RuntimeError('Variable "channelPricing" does not exist.', 6, $this->source); })()), "appliedPromotions", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["appliedPromotion"]) {
                // line 7
                yield "                <li class=\"label\" style=\"text-decoration: none;\">
                    <a
                        href=\"";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_catalog_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appliedPromotion"], "id", [], "any", false, false, false, 9)]), "html", null, true);
                yield "\"
                        class=\"applied-promotion\"
                    >
                        ";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appliedPromotion"], "name", [], "any", false, false, false, 12), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['appliedPromotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "        </ul>
    </td>
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
        return "@SyliusAdmin/Product/Show/_appliedPromotions.html.twig";
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
        return array (  82 => 16,  72 => 12,  66 => 9,  62 => 7,  58 => 6,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if channelPricing.appliedPromotions is empty %}
    <td>-</td>
{% else %}
    <td class=\"fourteen wide\">
        <ul class=\"ui list\">
            {% for appliedPromotion in channelPricing.appliedPromotions %}
                <li class=\"label\" style=\"text-decoration: none;\">
                    <a
                        href=\"{{ path('sylius_admin_catalog_promotion_show', {'id': appliedPromotion.id}) }}\"
                        class=\"applied-promotion\"
                    >
                        {{ appliedPromotion.name }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </td>
{% endif %}
", "@SyliusAdmin/Product/Show/_appliedPromotions.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_appliedPromotions.html.twig");
    }
}
