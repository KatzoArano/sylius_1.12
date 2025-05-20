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

/* @SyliusShop/Common/Form/_login.html.twig */
class __TwigTemplate_152d319953c0ef274a5a8bc25b54dcc2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Form/_login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Form/_login.html.twig"));

        // line 1
        yield "<div class=\"one field\" id=\"sylius-api-login\">
    ";
        // line 2
        $context["ajax_user_check_action_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_user_check_action");
        // line 3
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "email", [], "any", false, false, false, 3), 'row', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->env->getFunction('sylius_test_form_attribute')->getCallable()("login-email"), ["attr" => ["data-url" => (isset($context["ajax_user_check_action_path"]) || array_key_exists("ajax_user_check_action_path", $context) ? $context["ajax_user_check_action_path"] : (function () { throw new RuntimeError('Variable "ajax_user_check_action_path" does not exist.', 3, $this->source); })())]]));
        yield "

    <div class=\"ui action input\" id=\"sylius-api-login-form\">
        <input type=\"password\" placeholder=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.password"), "html", null, true);
        yield "\" ";
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("password-input");
        yield ">
        <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
        yield "\">
        <a class=\"ui blue button\" href=\"#\" id=\"sylius-api-login-submit\" ";
        // line 8
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("login-button");
        yield " data-url=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login_check");
        yield "\">
            ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sign_in"), "html", null, true);
        yield "
        </a>
    </div>
    <div
        class=\"ui red fluid top pointing basic label hidden sylius-validation-error\"
        id=\"sylius-api-validation-error\"
        ";
        // line 15
        yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("login-validation-error");
        yield "
    >
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
        return "@SyliusShop/Common/Form/_login.html.twig";
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
        return array (  85 => 15,  76 => 9,  70 => 8,  66 => 7,  60 => 6,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"one field\" id=\"sylius-api-login\">
    {% set ajax_user_check_action_path = path('sylius_shop_ajax_user_check_action')  %}
    {{ form_row(form.email, sylius_test_form_attribute('login-email')|sylius_merge_recursive({'attr': {'data-url': ajax_user_check_action_path}})) }}

    <div class=\"ui action input\" id=\"sylius-api-login-form\">
        <input type=\"password\" placeholder=\"{{ 'sylius.ui.password'|trans }}\" {{ sylius_test_html_attribute('password-input') }}>
        <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"{{ csrf_token('shop_authenticate') }}\">
        <a class=\"ui blue button\" href=\"#\" id=\"sylius-api-login-submit\" {{ sylius_test_html_attribute('login-button') }} data-url=\"{{ path('sylius_shop_login_check') }}\">
            {{ 'sylius.ui.sign_in'|trans }}
        </a>
    </div>
    <div
        class=\"ui red fluid top pointing basic label hidden sylius-validation-error\"
        id=\"sylius-api-validation-error\"
        {{ sylius_test_html_attribute('login-validation-error') }}
    >
    </div>
</div>
", "@SyliusShop/Common/Form/_login.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Form/_login.html.twig");
    }
}
