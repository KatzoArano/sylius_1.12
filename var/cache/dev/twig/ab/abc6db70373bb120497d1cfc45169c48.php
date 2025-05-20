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

/* @SyliusShop/Layout/Footer/Grid/_plus.html.twig */
class __TwigTemplate_ec33592021e7a7ddf6474925189e62e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/Grid/_plus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/Grid/_plus.html.twig"));

        // line 1
        yield "<div class=\"four wide column\">
    <a href=\"https://sylius.com/plus\" target=\"_blank\" style=\"display: inline-block; text-align: center;\">
        <h4 class=\"ui inverted header\" style=\"color: #808080;\">
            Need even more features?
            <div class=\"sub header\" style=\"padding: 5px 0;\">Check Sylius Plus out!</div>
        </h4>
        ";
        // line 7
        if ((($tmp = (isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "            <img class=\"ui fluid image\" style=\"max-width: 170px;\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/sylius-plus-banner.png", "shop"), "html", null, true);
            yield "\" alt=\"Sylius Plus\">
        ";
        } else {
            // line 10
            yield "            <img class=\"ui fluid image\" style=\"max-width: 170px;\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop/img/sylius-plus-banner.png"), "html", null, true);
            yield "\" alt=\"Sylius Plus\">
        ";
        }
        // line 12
        yield "    </a>
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
        return "@SyliusShop/Layout/Footer/Grid/_plus.html.twig";
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
        return array (  70 => 12,  64 => 10,  58 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"four wide column\">
    <a href=\"https://sylius.com/plus\" target=\"_blank\" style=\"display: inline-block; text-align: center;\">
        <h4 class=\"ui inverted header\" style=\"color: #808080;\">
            Need even more features?
            <div class=\"sub header\" style=\"padding: 5px 0;\">Check Sylius Plus out!</div>
        </h4>
        {% if use_webpack %}
            <img class=\"ui fluid image\" style=\"max-width: 170px;\" src=\"{{ asset('build/shop/images/sylius-plus-banner.png', 'shop') }}\" alt=\"Sylius Plus\">
        {% else %}
            <img class=\"ui fluid image\" style=\"max-width: 170px;\" src=\"{{ asset('assets/shop/img/sylius-plus-banner.png') }}\" alt=\"Sylius Plus\">
        {% endif %}
    </a>
</div>
", "@SyliusShop/Layout/Footer/Grid/_plus.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Layout/Footer/Grid/_plus.html.twig");
    }
}
