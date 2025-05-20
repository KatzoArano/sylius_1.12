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

/* @SyliusShop/Cart/Summary/_coupon.html.twig */
class __TwigTemplate_cff36d98da190597565abe1fbacc981c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_coupon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_coupon.html.twig"));

        // line 1
        yield "<div id=\"sylius-coupon\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-promotion-coupon");
        yield ">
    <div class=\"ui coupon action input\">
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "promotionCoupon", [], "any", false, false, false, 3), 'widget', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->env->getFunction('sylius_test_form_attribute')->getCallable()("cart-promotion-coupon-input"), ["attr" => ["form" => (isset($context["main_form"]) || array_key_exists("main_form", $context) ? $context["main_form"] : (function () { throw new RuntimeError('Variable "main_form" does not exist.', 3, $this->source); })()), "placeholder" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enter_your_code") . "...")]]));
        yield "
        <button type=\"submit\" id=\"sylius-save\" ";
        // line 4
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("apply-coupon-button");
        yield " class=\"ui teal icon labeled button\" form=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["main_form"]) || array_key_exists("main_form", $context) ? $context["main_form"] : (function () { throw new RuntimeError('Variable "main_form" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\"><i class=\"ticket icon\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.apply_coupon"), "html", null, true);
        yield "</button>
    </div>
    <br>
    ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "promotionCoupon", [], "any", false, false, false, 7), 'errors');
        yield "
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
        return "@SyliusShop/Cart/Summary/_coupon.html.twig";
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
        return array (  68 => 7,  58 => 4,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"sylius-coupon\" {{ sylius_test_html_attribute('cart-promotion-coupon') }}>
    <div class=\"ui coupon action input\">
        {{ form_widget(form.promotionCoupon, sylius_test_form_attribute('cart-promotion-coupon-input')|sylius_merge_recursive({'attr': {'form': main_form, 'placeholder': 'sylius.ui.enter_your_code'|trans~'...'}})) }}
        <button type=\"submit\" id=\"sylius-save\" {{ sylius_test_html_attribute('apply-coupon-button') }} class=\"ui teal icon labeled button\" form=\"{{ main_form }}\"><i class=\"ticket icon\"></i> {{ 'sylius.ui.apply_coupon'|trans }}</button>
    </div>
    <br>
    {{ form_errors(form.promotionCoupon) }}
</div>
", "@SyliusShop/Cart/Summary/_coupon.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_coupon.html.twig");
    }
}
