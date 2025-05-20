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

/* @SyliusAdmin/Layout/_logo.html.twig */
class __TwigTemplate_f935fc90474a623dbd35d1eeccbdafcd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Layout/_logo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Layout/_logo.html.twig"));

        // line 1
        yield "<a class=\"item\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard");
        yield "\" style=\"padding: 13px 0;\">
    <div style=\"max-width: 90px; margin: 0 auto;\">
        ";
        // line 3
        if ((($tmp = (isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin/images/admin-logo.svg", "admin"), "html", null, true);
            yield "\" class=\"ui fluid image\">
        ";
        } else {
            // line 6
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img/admin-logo.svg"), "html", null, true);
            yield "\" class=\"ui fluid image\">
        ";
        }
        // line 8
        yield "    </div>
</a>
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
        return "@SyliusAdmin/Layout/_logo.html.twig";
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
        return array (  68 => 8,  62 => 6,  56 => 4,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<a class=\"item\" href=\"{{ path('sylius_admin_dashboard') }}\" style=\"padding: 13px 0;\">
    <div style=\"max-width: 90px; margin: 0 auto;\">
        {% if use_webpack %}
            <img src=\"{{ asset('build/admin/images/admin-logo.svg', 'admin') }}\" class=\"ui fluid image\">
        {% else %}
            <img src=\"{{ asset('assets/admin/img/admin-logo.svg') }}\" class=\"ui fluid image\">
        {% endif %}
    </div>
</a>
", "@SyliusAdmin/Layout/_logo.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Layout/_logo.html.twig");
    }
}
