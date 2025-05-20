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

/* @SyliusShop/Product/Show/_catalogPromotionLabels.html.twig */
class __TwigTemplate_995c069553d7823f58709d8ddcb0c5cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_catalogPromotionLabels.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_catalogPromotionLabels.html.twig"));

        // line 1
        yield "<div id=\"appliedPromotions\" data-applied-promotions-locale=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 1, $this->source); })()), "localeCode", [], "any", false, false, false, 1), "html", null, true);
        yield "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appliedPromotions"]) || array_key_exists("appliedPromotions", $context) ? $context["appliedPromotions"] : (function () { throw new RuntimeError('Variable "appliedPromotions" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appliedPromotion"]) {
            // line 3
            yield "        <div style=\"margin-top: 20px;\">
            <div class=\"ui label promotion_label\" >
                <div class=\"row ui small sylius_catalog_promotion\">
                    ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appliedPromotion"], "label", [], "any", false, false, false, 6), "html", null, true);
            yield "
                </div>
            </div>
            <span class=\"text-teal\">
                ";
            // line 10
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["appliedPromotion"], "description", [], "any", false, false, false, 10) && (isset($context["withDescription"]) || array_key_exists("withDescription", $context) ? $context["withDescription"] : (function () { throw new RuntimeError('Variable "withDescription" does not exist.', 10, $this->source); })()))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appliedPromotion"], "description", [], "any", false, false, false, 10), "html", null, true);
            }
            // line 11
            yield "            </span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['appliedPromotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "</div>
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
        return "@SyliusShop/Product/Show/_catalogPromotionLabels.html.twig";
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
        return array (  81 => 14,  73 => 11,  69 => 10,  62 => 6,  57 => 3,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"appliedPromotions\" data-applied-promotions-locale=\"{{ sylius.localeCode }}\">
    {% for appliedPromotion in appliedPromotions %}
        <div style=\"margin-top: 20px;\">
            <div class=\"ui label promotion_label\" >
                <div class=\"row ui small sylius_catalog_promotion\">
                    {{ appliedPromotion.label }}
                </div>
            </div>
            <span class=\"text-teal\">
                {% if appliedPromotion.description and withDescription %}{{ appliedPromotion.description }}{% endif %}
            </span>
        </div>
    {% endfor %}
</div>
", "@SyliusShop/Product/Show/_catalogPromotionLabels.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_catalogPromotionLabels.html.twig");
    }
}
