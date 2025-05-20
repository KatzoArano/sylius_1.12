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

/* @SyliusAdmin/Customer/Show/Statistics/index.html.twig */
class __TwigTemplate_df3810c5dc6fc83d4c1a4f0773b54297 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/Statistics/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/Statistics/index.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->load("@SyliusAdmin/Common/Macro/money.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"ui segment\" id=\"statistics\">
    ";
        // line 4
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 4, $this->source); })()), "perChannelsStatistics", [], "any", false, false, false, 4))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        <div class=\"ui accordion\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 6, $this->source); })()), "perChannelsStatistics", [], "any", false, false, false, 6));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                // line 7
                yield "                ";
                yield from $this->load("@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig", 7)->unwrap()->yield($context);
                // line 8
                yield "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            yield "        </div>
    ";
        } else {
            // line 11
            yield "        <h4>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.this_customer_has_not_completed_any_orders_yet"), "html", null, true);
            yield "</h4>
    ";
        }
        // line 13
        yield "</div>
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
        return "@SyliusAdmin/Customer/Show/Statistics/index.html.twig";
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
        return array (  103 => 13,  97 => 11,  93 => 9,  79 => 8,  76 => 7,  59 => 6,  56 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\" id=\"statistics\">
    {% if statistics.perChannelsStatistics is not empty %}
        <div class=\"ui accordion\">
            {% for statistic in statistics.perChannelsStatistics %}
                {% include '@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig' %}
            {% endfor %}
        </div>
    {% else %}
        <h4>{{ 'sylius.ui.this_customer_has_not_completed_any_orders_yet'|trans }}</h4>
    {% endif %}
</div>
", "@SyliusAdmin/Customer/Show/Statistics/index.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Statistics/index.html.twig");
    }
}
