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

/* @SyliusAdmin/Order/Show/Shipment/_content.html.twig */
class __TwigTemplate_17ef0ba6a782e6fad1cdc820b99345b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Shipment/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Shipment/_content.html.twig"));

        // line 1
        yield "<div class=\"content\">
    <div class=\"header\">
        ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 3, $this->source); })()), "method", [], "any", false, false, false, 3), "html", null, true);
        yield "
    </div>
    <div class=\"description\">
        <i class=\"globe icon\"></i>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 6, $this->source); })()), "method", [], "any", false, false, false, 6), "zone", [], "any", false, false, false, 6), "html", null, true);
        yield "
    </div>
    ";
        // line 8
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 8, $this->source); })()), "shippedAt", [], "any", false, false, false, 8))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipped_at"), "html", null, true);
            yield ": <span class=\"shipped-at-date\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 9, $this->source); })()), "shippedAt", [], "any", false, false, false, 9), "d-m-Y H:i:s"), "html", null, true);
            yield "</span>
    ";
        }
        // line 11
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
        return "@SyliusAdmin/Order/Show/Shipment/_content.html.twig";
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
        return array (  73 => 11,  65 => 9,  63 => 8,  58 => 6,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"content\">
    <div class=\"header\">
        {{ shipment.method }}
    </div>
    <div class=\"description\">
        <i class=\"globe icon\"></i>{{ shipment.method.zone }}
    </div>
    {% if shipment.shippedAt is not empty %}
        {{ 'sylius.ui.shipped_at'|trans }}: <span class=\"shipped-at-date\">{{ shipment.shippedAt|date('d-m-Y H:i:s') }}</span>
    {% endif %}
</div>
", "@SyliusAdmin/Order/Show/Shipment/_content.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Shipment/_content.html.twig");
    }
}
