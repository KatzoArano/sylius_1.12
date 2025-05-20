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

/* @SyliusAdmin/Customer/Show/_header.html.twig */
class __TwigTemplate_a36d153049e25bc8a4a73db608f3f964 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/_header.html.twig"));

        // line 1
        yield "<div class=\"ten wide column\">
    <h1 class=\"ui header\">
        <i class=\"circular user icon\"></i>
        <div class=\"content\">
            ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 5, $this->source); })()), "fullName", [], "any", false, false, false, 5), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))), "html", null, true);
        yield "
            <div class=\"sub header\">
                <div class=\"ui horizontal divided list\">
                    <div class=\"item\">
                        ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), "html", null, true);
        yield "
                    </div>
                    ";
        // line 11
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11))) {
            // line 12
            yield "                        <div class=\"item\">
                            <span class=\"ui label\">
                                <i class=\"icon spy\"></i> ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest"), "html", null, true);
            yield "
                            </span>
                        </div>
                    ";
        }
        // line 18
        yield "                </div>
            </div>
        </div>
    </h1>
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
        return "@SyliusAdmin/Customer/Show/_header.html.twig";
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
        return array (  79 => 18,  72 => 14,  68 => 12,  66 => 11,  61 => 9,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ten wide column\">
    <h1 class=\"ui header\">
        <i class=\"circular user icon\"></i>
        <div class=\"content\">
            {{ customer.fullName|default('sylius.ui.guest_customer'|trans) }}
            <div class=\"sub header\">
                <div class=\"ui horizontal divided list\">
                    <div class=\"item\">
                        {{ customer.email }}
                    </div>
                    {% if customer.user is null %}
                        <div class=\"item\">
                            <span class=\"ui label\">
                                <i class=\"icon spy\"></i> {{ 'sylius.ui.guest'|trans }}
                            </span>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </h1>
</div>
", "@SyliusAdmin/Customer/Show/_header.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_header.html.twig");
    }
}
