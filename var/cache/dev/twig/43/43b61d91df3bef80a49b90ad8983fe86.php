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

/* @SyliusShop/Account/AddressBook/_defaultAddress.html.twig */
class __TwigTemplate_b6b940bc3c39a173b2f53ebc5bd93e79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->load("@SyliusUi/Macro/buttons.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"address-card address-card--default\" id=\"sylius-default-address\" ";
        // line 3
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("default-address");
        yield ">
    <div class=\"address-card-content default\" ";
        // line 4
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("address", Twig\Extension\CoreExtension::sprintf("%s %s", CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 4, $this->source); })()), "firstName", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 4, $this->source); })()), "lastName", [], "any", false, false, false, 4)));
        yield ">
        <div>
            ";
        // line 6
        yield from $this->load("@SyliusShop/Common/_address.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 6, $this->source); })())]));
        // line 7
        yield "        </div>
        <div class=\"buttons\">
            <div ";
        // line 9
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("edit-button");
        yield ">";
        yield $macros["buttons"]->getTemplateForMacro("macro_edit", $context, 9, $this->getSourceContext())->macro_edit(...[$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)])]);
        yield "</div>
            ";
        // line 10
        yield $macros["buttons"]->getTemplateForMacro("macro_delete", $context, 10, $this->getSourceContext())->macro_delete(...[$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), null, true, CoreExtension::getAttribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]);
        yield "
        </div>
        <div class=\"address-label\">
            ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_default_address"), "html", null, true);
        yield "
        </div>
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
        return "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig";
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
        return array (  80 => 13,  74 => 10,  68 => 9,  64 => 7,  62 => 6,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

<div class=\"address-card address-card--default\" id=\"sylius-default-address\" {{ sylius_test_html_attribute('default-address') }}>
    <div class=\"address-card-content default\" {{ sylius_test_html_attribute('address', \"%s %s\"|format(address.firstName, address.lastName)) }}>
        <div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': address} %}
        </div>
        <div class=\"buttons\">
            <div {{ sylius_test_html_attribute('edit-button') }}>{{ buttons.edit(path('sylius_shop_account_address_book_update', {'id': address.id})) }}</div>
            {{ buttons.delete(path('sylius_shop_account_address_book_delete', {'id': address.id}), null, true, address.id) }}
        </div>
        <div class=\"address-label\">
            {{ 'sylius.ui.your_default_address'|trans }}
        </div>
    </div>
</div>
", "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/_defaultAddress.html.twig");
    }
}
