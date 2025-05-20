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

/* @SyliusAdmin/AdminUser/Form/_avatar.html.twig */
class __TwigTemplate_291054095c22f8e8bf1dfc281a39486a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/AdminUser/Form/_avatar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/AdminUser/Form/_avatar.html.twig"));

        // line 1
        yield "<div class=\"field\" id=\"add-avatar\">
    <label>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.avatar"), "html", null, true);
        yield "</label>
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "avatar", [], "any", false, false, false, 3), 'row', ["label" => false]);
        yield "
</div>
";
        // line 5
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 5, $this->source); })()), "avatar", [], "any", false, false, false, 5)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)))) {
            // line 6
            yield "    <button
        formaction=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_admin_user_remove_avatar", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "_csrf_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7))]), "html", null, true);
            yield "\"
        type=\"submit\"
        class=\"ui icon red labeled button\"
    >
        <i class=\"icon trash\"></i> ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
            yield "
    </button>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusAdmin/AdminUser/Form/_avatar.html.twig";
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
        return array (  72 => 11,  65 => 7,  62 => 6,  60 => 5,  55 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"field\" id=\"add-avatar\">
    <label>{{ 'sylius.ui.avatar'|trans }}</label>
    {{ form_row(form.avatar, {'label': false}) }}
</div>
{% if admin_user.avatar is not null and admin_user.id is not null %}
    <button
        formaction=\"{{ path('sylius_admin_admin_user_remove_avatar', {'id': admin_user.id, '_csrf_token': csrf_token(admin_user.id)}) }}\"
        type=\"submit\"
        class=\"ui icon red labeled button\"
    >
        <i class=\"icon trash\"></i> {{ 'sylius.ui.delete'|trans }}
    </button>
{% endif %}
", "@SyliusAdmin/AdminUser/Form/_avatar.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/AdminUser/Form/_avatar.html.twig");
    }
}
