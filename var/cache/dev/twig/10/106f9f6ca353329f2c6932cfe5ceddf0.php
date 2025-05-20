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

/* @SyliusAdmin/Security/_logo.html.twig */
class __TwigTemplate_a603d64828e1fe8c3f01f0750a7a97a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Security/_logo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Security/_logo.html.twig"));

        // line 1
        if ((($tmp = (isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    ";
            yield from $this->load("@SyliusUi/Security/_logo.html.twig", 2)->unwrap()->yield(CoreExtension::merge($context, ["paths" => ["logo" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin/images/logo.png", "admin")]]));
        } else {
            // line 4
            yield "    ";
            yield from $this->load("@SyliusUi/Security/_logo.html.twig", 4)->unwrap()->yield(CoreExtension::merge($context, ["paths" => ["logo" => "assets/admin/img/logo.png"]]));
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
        return "@SyliusAdmin/Security/_logo.html.twig";
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
        return array (  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if use_webpack %}
    {% include '@SyliusUi/Security/_logo.html.twig' with {'paths': {'logo': asset('build/admin/images/logo.png', 'admin')}} %}
{% else %}
    {% include '@SyliusUi/Security/_logo.html.twig' with {'paths': {'logo': 'assets/admin/img/logo.png'}} %}
{% endif %}
", "@SyliusAdmin/Security/_logo.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Security/_logo.html.twig");
    }
}
