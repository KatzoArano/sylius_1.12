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

/* @SyliusRefundPlugin/Order/Admin/Refund/_navigation.html.twig */
class __TwigTemplate_6f85bcddf2566f0821516bce26f3eef3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/Refund/_navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/Order/Admin/Refund/_navigation.html.twig"));

        // line 1
        yield "<div class=\"column\">
    <div class=\"ui buttons\">
        <button id=\"page-button\" class=\"ui labeled icon primary button\" type=\"submit\" ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["disableButton"]) || array_key_exists("disableButton", $context) ? $context["disableButton"] : (function () { throw new RuntimeError('Variable "disableButton" does not exist.', 3, $this->source); })()), "html", null, true);
        yield ">
            <i class=\"check icon\"></i>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.refund"), "html", null, true);
        yield "
        </button>
        <a id=\"back\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
        yield "\" class=\"ui button\">
            ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.back"), "html", null, true);
        yield "
        </a>
    </div>
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
        return "@SyliusRefundPlugin/Order/Admin/Refund/_navigation.html.twig";
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
        return array (  65 => 7,  61 => 6,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"column\">
    <div class=\"ui buttons\">
        <button id=\"page-button\" class=\"ui labeled icon primary button\" type=\"submit\" {{ disableButton }}>
            <i class=\"check icon\"></i>{{ 'sylius.ui.refund'|trans }}
        </button>
        <a id=\"back\" href=\"{{ path('sylius_admin_order_show', {'id': order.id}) }}\" class=\"ui button\">
            {{ 'sylius.ui.back'|trans }}
        </a>
    </div>
</div>
", "@SyliusRefundPlugin/Order/Admin/Refund/_navigation.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/Order/Admin/Refund/_navigation.html.twig");
    }
}
