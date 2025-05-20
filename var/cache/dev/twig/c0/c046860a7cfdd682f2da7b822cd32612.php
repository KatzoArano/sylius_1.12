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

/* @SyliusShop/Account/AddressBook/update.html.twig */
class __TwigTemplate_091849af8ed717ccd8dd24ce9528a9f9 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'subcontent' => [$this, 'block_subcontent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusShop/Account/AddressBook/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/update.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), ["@SyliusShop/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->load("@SyliusShop/Account/AddressBook/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit_my_address"), "html", null, true);
        yield " | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_subcontent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        // line 8
        yield "    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.address_book"), "html", null, true);
        yield "
            <div class=\"sub header\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit_my_address"), "html", null, true);
        yield "</div>
        </h1>

        ";
        // line 14
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.address_book.update.after_content_header", ["address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 14, $this->source); })())]);
        yield "

        ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "method" => "PUT", "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        yield "

        ";
        // line 18
        yield from $this->load("@SyliusShop/Common/Form/_address.html.twig", 18)->unwrap()->yield(CoreExtension::merge($context, ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })())]));
        // line 19
        yield "
        <div class=\"ui two column grid\">
            <div class=\"column\">
                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_index");
        yield "\" class=\"ui large icon labeled button\">
                    <i class=\"left arrow icon\"></i> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cancel"), "html", null, true);
        yield "
                </a>
            </div>
            <div class=\"right aligned column\">
                <button type=\"submit\" class=\"ui large icon labeled blue button\" ";
        // line 27
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("save-changes");
        yield ">
                    <i class=\"icon save\"></i> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_changes"), "html", null, true);
        yield "
                </button>
            </div>
        </div>

        ";
        // line 33
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.address_book.update.form", ["address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 33, $this->source); })())]);
        yield "

        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "_token", [], "any", false, false, false, 35), 'row');
        yield "
        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusShop/Account/AddressBook/update.html.twig";
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
        return array (  168 => 36,  164 => 35,  159 => 33,  151 => 28,  147 => 27,  140 => 23,  136 => 22,  131 => 19,  129 => 18,  124 => 16,  119 => 14,  113 => 11,  109 => 10,  105 => 8,  92 => 7,  67 => 5,  56 => 1,  54 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusShop/Account/AddressBook/layout.html.twig' %}

{% form_theme form '@SyliusShop/Form/theme.html.twig' %}

{% block title %}{{ 'sylius.ui.edit_my_address'|trans }} | {{ parent() }}{% endblock %}

{% block subcontent %}
    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            {{ 'sylius.ui.address_book'|trans }}
            <div class=\"sub header\">{{ 'sylius.ui.edit_my_address'|trans }}</div>
        </h1>

        {{ sylius_template_event('sylius.shop.account.address_book.update.after_content_header', {'address': address}) }}

        {{ form_start(form, {'action': path('sylius_shop_account_address_book_update', {'id': address.id}), 'method': 'PUT', 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}

        {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form} %}

        <div class=\"ui two column grid\">
            <div class=\"column\">
                <a href=\"{{ path('sylius_shop_account_address_book_index') }}\" class=\"ui large icon labeled button\">
                    <i class=\"left arrow icon\"></i> {{ 'sylius.ui.cancel'|trans }}
                </a>
            </div>
            <div class=\"right aligned column\">
                <button type=\"submit\" class=\"ui large icon labeled blue button\" {{ sylius_test_html_attribute('save-changes') }}>
                    <i class=\"icon save\"></i> {{ 'sylius.ui.save_changes'|trans}}
                </button>
            </div>
        </div>

        {{ sylius_template_event('sylius.shop.account.address_book.update.form', {'address': address}) }}

        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "@SyliusShop/Account/AddressBook/update.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/update.html.twig");
    }
}
