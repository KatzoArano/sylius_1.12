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

/* @SyliusChannel/Collector/Icon/channel.svg */
class __TwigTemplate_e81c749cc06337051b8fc917c742f178 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusChannel/Collector/Icon/channel.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusChannel/Collector/Icon/channel.svg"));

        // line 1
        yield "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 1792 1792\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M666 481q-60 92-137 273-22-45-37-72.5t-40.5-63.5-51-56.5-63-35-81.5-14.5h-224q-14 0-23-9t-9-23v-192q0-14 9-23t23-9h224q250 0 410 225zm1126 799q0 14-9 23l-320 320q-9 9-23 9-13 0-22.5-9.5t-9.5-22.5v-192q-32 0-85 .5t-81 1-73-1-71-5-64-10.5-63-18.5-58-28.5-59-40-55-53.5-56-69.5q59-93 136-273 22 45 37 72.5t40.5 63.5 51 56.5 63 35 81.5 14.5h256v-192q0-14 9-23t23-9q12 0 24 10l319 319q9 9 9 23zm0-896q0 14-9 23l-320 320q-9 9-23 9-13 0-22.5-9.5t-9.5-22.5v-192h-256q-48 0-87 15t-69 45-51 61.5-45 77.5q-32 62-78 171-29 66-49.5 111t-54 105-64 100-74 83-90 68.5-106.5 42-128 16.5h-224q-14 0-23-9t-9-23v-192q0-14 9-23t23-9h224q48 0 87-15t69-45 51-61.5 45-77.5q32-62 78-171 29-66 49.5-111t54-105 64-100 74-83 90-68.5 106.5-42 128-16.5h256v-192q0-14 9-23t23-9q12 0 24 10l319 319q9 9 9 23z\" />
</svg>
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
        return "@SyliusChannel/Collector/Icon/channel.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 1792 1792\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M666 481q-60 92-137 273-22-45-37-72.5t-40.5-63.5-51-56.5-63-35-81.5-14.5h-224q-14 0-23-9t-9-23v-192q0-14 9-23t23-9h224q250 0 410 225zm1126 799q0 14-9 23l-320 320q-9 9-23 9-13 0-22.5-9.5t-9.5-22.5v-192q-32 0-85 .5t-81 1-73-1-71-5-64-10.5-63-18.5-58-28.5-59-40-55-53.5-56-69.5q59-93 136-273 22 45 37 72.5t40.5 63.5 51 56.5 63 35 81.5 14.5h256v-192q0-14 9-23t23-9q12 0 24 10l319 319q9 9 9 23zm0-896q0 14-9 23l-320 320q-9 9-23 9-13 0-22.5-9.5t-9.5-22.5v-192h-256q-48 0-87 15t-69 45-51 61.5-45 77.5q-32 62-78 171-29 66-49.5 111t-54 105-64 100-74 83-90 68.5-106.5 42-128 16.5h-224q-14 0-23-9t-9-23v-192q0-14 9-23t23-9h224q48 0 87-15t69-45 51-61.5 45-77.5q32-62 78-171 29-66 49.5-111t54-105 64-100 74-83 90-68.5 106.5-42 128-16.5h256v-192q0-14 9-23t23-9q12 0 24 10l319 319q9 9 9 23z\" />
</svg>
", "@SyliusChannel/Collector/Icon/channel.svg", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/views/Collector/Icon/channel.svg");
    }
}
