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

/* @SyliusShop/ProductReview/_form.html.twig */
class __TwigTemplate_c952ae0778b90515311bd2b53a4892cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/ProductReview/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/ProductReview/_form.html.twig"));

        // line 1
        yield "<div class=\"field\">
    <div class=\"ui huge star rating\" data-rating=\"0\" data-max-rating=\"5\"></div>
    <br/>
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "rating", [], "any", false, false, false, 4), 'errors');
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "rating", [], "any", false, false, false, 5), 'widget', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->env->getFunction('sylius_test_form_attribute')->getCallable()("rating"), ["attr" => ["style" => "display: none"]]));
        yield "
</div>
<div class=\"field\">
    ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), 'widget', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->env->getFunction('sylius_test_form_attribute')->getCallable()("title"), ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.title")]]));
        yield "
    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), 'errors');
        yield "
</div>
<div class=\"field\">
    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "comment", [], "any", false, false, false, 12), 'widget', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->env->getFunction('sylius_test_form_attribute')->getCallable()("comment"), ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.write_your_own_review")]]));
        yield "
    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "comment", [], "any", false, false, false, 13), 'errors');
        yield "
</div>
";
        // line 15
        if ((($tmp =  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "    <div class=\"field\">
        ";
            // line 17
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "author", [], "any", false, false, false, 17), "email", [], "any", false, false, false, 17), 'widget', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->env->getFunction('sylius_test_form_attribute')->getCallable()("author-email"), ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.email")]]));
            yield "
        ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "author", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), 'errors');
            yield "
    </div>
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
        return "@SyliusShop/ProductReview/_form.html.twig";
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
        return array (  91 => 18,  87 => 17,  84 => 16,  82 => 15,  77 => 13,  73 => 12,  67 => 9,  63 => 8,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"field\">
    <div class=\"ui huge star rating\" data-rating=\"0\" data-max-rating=\"5\"></div>
    <br/>
    {{ form_errors(form.rating) }}
    {{ form_widget(form.rating, sylius_test_form_attribute('rating')|sylius_merge_recursive( {'attr': {'style': 'display: none'}})) }}
</div>
<div class=\"field\">
    {{ form_widget(form.title, sylius_test_form_attribute('title')|sylius_merge_recursive( {'attr': {'placeholder': 'sylius.ui.title'|trans}})) }}
    {{ form_errors(form.title) }}
</div>
<div class=\"field\">
    {{ form_widget(form.comment, sylius_test_form_attribute('comment')|sylius_merge_recursive( {'attr': {'placeholder': 'sylius.ui.write_your_own_review'|trans}})) }}
    {{ form_errors(form.comment) }}
</div>
{% if not is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    <div class=\"field\">
        {{ form_widget(form.author.email, sylius_test_form_attribute('author-email')|sylius_merge_recursive( {'attr': {'placeholder': 'sylius.ui.email'|trans}})) }}
        {{ form_errors(form.author.email) }}
    </div>
{% endif %}
", "@SyliusShop/ProductReview/_form.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/_form.html.twig");
    }
}
