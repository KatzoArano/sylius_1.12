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

/* @SyliusAdmin/Crud/Index/_actions.html.twig */
class __TwigTemplate_c3842f879a692b2b67caaf781ac98540 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_actions.html.twig"));

        // line 1
        yield "<div class=\"middle aligned column\">
    <div class=\"ui right floated buttons\">
        ";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 3), "main", [], "any", true, true, false, 3)) {
            // line 4
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 4, $this->source); })()), "getEnabledActions", ["main"], "method", false, false, false, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 5
                yield "                ";
                yield $this->env->getFunction('sylius_grid_render_action')->getCallable()((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 5, $this->source); })()), $context["action"], null);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            yield "        ";
        }
        // line 8
        yield "    </div>
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
        return "@SyliusAdmin/Crud/Index/_actions.html.twig";
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
        return array (  71 => 8,  68 => 7,  59 => 5,  54 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"middle aligned column\">
    <div class=\"ui right floated buttons\">
        {% if definition.actionGroups.main is defined %}
            {% for action in definition.getEnabledActions('main') %}
                {{ sylius_grid_render_action(resources, action, null) }}
            {% endfor %}
        {% endif %}
    </div>
</div>
", "@SyliusAdmin/Crud/Index/_actions.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Index/_actions.html.twig");
    }
}
