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

/* @SyliusShop/Checkout/_header.html.twig */
class __TwigTemplate_2e4583de7060db3199a337e5c22a1920 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_header.html.twig"));

        // line 1
        yield "<div class=\"ui basic segment\">
    <div class=\"ui large text menu\">
        <div class=\"ui small image\">
            ";
        // line 4
        if ((($tmp = (isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
            yield "\">
                    <img src=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/logo.png", "shop"), "html", null, true);
            yield "\" />
                </a>
            ";
        } else {
            // line 9
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
            yield "\">
                    <img src=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
            yield "\" />
                </a>
            ";
        }
        // line 13
        yield "        </div>
        <div class=\"right menu\">
            ";
        // line 15
        if ((($tmp =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customer", [], "any", false, true, false, 15), "id", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "customer", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), null)) : (null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                <div class=\"item\" id=\"purchaser-email\" ";
            yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("purchaser-name-or-email");
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.checking_out_as"), "html", null, true);
            yield " ";
            yield (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "customer", [], "any", false, false, false, 16), "email", [], "any", false, false, false, 16), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customer", [], "any", false, true, false, 16), "fullName", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "customer", [], "any", false, false, false, 16), "fullName", [], "any", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "customer", [], "any", false, false, false, 16), "email", [], "any", false, false, false, 16))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "customer", [], "any", false, false, false, 16), "email", [], "any", false, false, false, 16))), "html", null, true)));
            yield ".</div>
            ";
        } else {
            // line 18
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login");
            yield "\" class=\"item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sign_in"), "html", null, true);
            yield "</a>
            ";
        }
        // line 20
        yield "        </div>
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
        return "@SyliusShop/Checkout/_header.html.twig";
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
        return array (  101 => 20,  93 => 18,  83 => 16,  81 => 15,  77 => 13,  71 => 10,  66 => 9,  60 => 6,  55 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui basic segment\">
    <div class=\"ui large text menu\">
        <div class=\"ui small image\">
            {% if use_webpack %}
                <a href=\"{{ path('sylius_shop_homepage') }}\">
                    <img src=\"{{ asset('build/shop/images/logo.png', 'shop') }}\" />
                </a>
            {% else %}
                <a href=\"{{ path('sylius_shop_homepage') }}\">
                    <img src=\"{{ asset('assets/shop/img/logo.png') }}\" />
                </a>
            {% endif %}
        </div>
        <div class=\"right menu\">
            {% if order.customer.id|default(null) is not null %}
                <div class=\"item\" id=\"purchaser-email\" {{ sylius_test_html_attribute('purchaser-name-or-email') }}>{{ 'sylius.ui.checking_out_as'|trans }} {{ app.user is null ? order.customer.email : order.customer.fullName|default(order.customer.email) }}.</div>
            {% else %}
                <a href=\"{{ path('sylius_shop_login') }}\" class=\"item\">{{ 'sylius.ui.sign_in'|trans }}</a>
            {% endif %}
        </div>
    </div>
</div>
", "@SyliusShop/Checkout/_header.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/_header.html.twig");
    }
}
