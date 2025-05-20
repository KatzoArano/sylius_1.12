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

/* @SyliusAdmin/Order/Update/_content.html.twig */
class __TwigTemplate_8409197990fb5978593a5d52b56e71c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Update/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Update/_content.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["@SyliusAdmin/Form/theme.html.twig"], true);
        // line 2
        yield "
";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        yield "
<div class=\"ui segment\">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

    <div class=\"ui segment\">
        <h4 class=\"ui dividing header\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
        yield "</h4>
        ";
        // line 9
        yield from $this->load("@SyliusAdmin/Common/Form/_address.html.twig", 9)->unwrap()->yield(CoreExtension::merge($context, ["form" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "shippingAddress", [], "any", false, false, false, 9)]));
        // line 10
        yield "    </div>

    <div class=\"ui segment\">
        <h4 class=\"ui dividing header\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        yield "</h4>
        ";
        // line 14
        yield from $this->load("@SyliusAdmin/Common/Form/_address.html.twig", 14)->unwrap()->yield(CoreExtension::merge($context, ["form" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "billingAddress", [], "any", false, false, false, 14)]));
        // line 15
        yield "    </div>

    ";
        // line 17
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.order.update.form", ["resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 17, $this->source); })())]);
        yield "

    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "_token", [], "any", false, false, false, 19), 'row');
        yield "
    ";
        // line 20
        yield from $this->load("@SyliusUi/Form/Buttons/_update.html.twig", 20)->unwrap()->yield(CoreExtension::merge($context, ["paths" => ["cancel" => $this->extensions['Sylius\Bundle\UiBundle\Twig\RedirectPathExtension']->generateRedirectPath($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_index"))]]));
        // line 21
        yield "</div>
";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
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
        return "@SyliusAdmin/Order/Update/_content.html.twig";
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
        return array (  96 => 22,  93 => 21,  91 => 20,  87 => 19,  82 => 17,  78 => 15,  76 => 14,  72 => 13,  67 => 10,  65 => 9,  61 => 8,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% form_theme form '@SyliusAdmin/Form/theme.html.twig' %}

{{ form_start(form, {'action': path('sylius_admin_order_update', {'id': order.id}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
<div class=\"ui segment\">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

    <div class=\"ui segment\">
        <h4 class=\"ui dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</h4>
        {% include '@SyliusAdmin/Common/Form/_address.html.twig' with {'form': form.shippingAddress} %}
    </div>

    <div class=\"ui segment\">
        <h4 class=\"ui dividing header\">{{ 'sylius.ui.billing_address'|trans }}</h4>
        {% include '@SyliusAdmin/Common/Form/_address.html.twig' with {'form': form.billingAddress} %}
    </div>

    {{ sylius_template_event('sylius.admin.order.update.form', {'resource': resource}) }}

    {{ form_row(form._token) }}
    {% include '@SyliusUi/Form/Buttons/_update.html.twig' with {'paths': {'cancel': sylius_generate_redirect_path(path('sylius_admin_order_index'))}} %}
</div>
{{ form_end(form, {'render_rest': false}) }}
", "@SyliusAdmin/Order/Update/_content.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Update/_content.html.twig");
    }
}
