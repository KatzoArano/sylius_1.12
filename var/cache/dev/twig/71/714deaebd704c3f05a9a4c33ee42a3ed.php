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

/* @SyliusAdmin/Customer/Show/Details/_email.html.twig */
class __TwigTemplate_09e4559b3e3382c66660bbe83ae61145 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/Details/_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/Details/_email.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusUi/Macro/buttons.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"content\">
    <div id=\"subscribed-to-newsletter\">
        <i class=\"";
        // line 5
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 5, $this->source); })()), "subscribedToNewsletter", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green checkmark") : ("red remove"));
        yield " icon\"></i>
        ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subscribed_to_newsletter"), "html", null, true);
        yield "
    </div>
    ";
        // line 8
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        ";
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9);
            // line 10
            yield "        <div id=\"verified-email\">
            <i class=\"";
            // line 11
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "verified", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green checkmark") : ("red remove"));
            yield " icon\"></i>
            ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.email_verified"), "html", null, true);
            yield "
        </div>
        <br />
        ";
            // line 15
            if ((($tmp = $this->env->getFunction('is_shop_enabled')->getCallable()()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "            ";
                yield $macros["buttons"]->getTemplateForMacro("macro_default", $context, 16, $this->getSourceContext())->macro_default(...[$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_impersonate_user", ["username" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "emailCanonical", [], "any", false, false, false, 16)]), "sylius.ui.impersonate", "impersonate", "unhide", "blue"]);
                yield "
        ";
            }
            // line 18
            yield "    ";
        }
        // line 19
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
        return "@SyliusAdmin/Customer/Show/Details/_email.html.twig";
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
        return array (  93 => 19,  90 => 18,  84 => 16,  82 => 15,  76 => 12,  72 => 11,  69 => 10,  66 => 9,  64 => 8,  59 => 6,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

<div class=\"content\">
    <div id=\"subscribed-to-newsletter\">
        <i class=\"{{ customer.subscribedToNewsletter ? 'green checkmark' : 'red remove' }} icon\"></i>
        {{ 'sylius.ui.subscribed_to_newsletter'|trans }}
    </div>
    {% if customer.user is not null %}
        {% set user = customer.user %}
        <div id=\"verified-email\">
            <i class=\"{{ user.verified ? 'green checkmark' : 'red remove' }} icon\"></i>
            {{ 'sylius.ui.email_verified'|trans }}
        </div>
        <br />
        {% if is_shop_enabled() %}
            {{ buttons.default(path('sylius_admin_impersonate_user', {'username': user.emailCanonical}), 'sylius.ui.impersonate', 'impersonate', 'unhide', 'blue') }}
        {% endif %}
    {% endif %}
</div>
", "@SyliusAdmin/Customer/Show/Details/_email.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Details/_email.html.twig");
    }
}
