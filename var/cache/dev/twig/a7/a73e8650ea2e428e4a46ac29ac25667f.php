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

/* @SyliusShop/Cart/Summary/_checkout.html.twig */
class __TwigTemplate_32346e78fbb357fe926e6c374d64fbc2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_checkout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_checkout.html.twig"));

        // line 1
        yield "<button
    type=\"submit\"
    name=\"submit-type\"
    value=\"checkout\"
    class=\"ui huge primary fluid labeled icon button\"
    form=\"sylius_cart\"
    formaction=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_checkout");
        yield "\"
    formmethod=\"post\"
    ";
        // line 9
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-checkout-button");
        yield "
>
    <i class=\"check icon\"></i> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.checkout"), "html", null, true);
        yield "
</button>
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
        return "@SyliusShop/Cart/Summary/_checkout.html.twig";
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
        return array (  66 => 11,  61 => 9,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<button
    type=\"submit\"
    name=\"submit-type\"
    value=\"checkout\"
    class=\"ui huge primary fluid labeled icon button\"
    form=\"sylius_cart\"
    formaction=\"{{ path('sylius_shop_cart_checkout') }}\"
    formmethod=\"post\"
    {{ sylius_test_html_attribute('cart-checkout-button') }}
>
    <i class=\"check icon\"></i> {{ 'sylius.ui.checkout'|trans }}
</button>
", "@SyliusShop/Cart/Summary/_checkout.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_checkout.html.twig");
    }
}
