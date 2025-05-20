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

/* @SyliusUi/_flashes.html.twig */
class __TwigTemplate_a38415ce545c8fb6ceeb515eb8e91a52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/_flashes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/_flashes.html.twig"));

        // line 1
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1), "started", [], "any", false, false, false, 1))) {
            // line 2
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(["success", "error", "info", "warning"]);
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 3
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "flashbag", [], "any", false, false, false, 3), "get", [$context["type"]], "method", false, false, false, 3));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 4
                    yield "            ";
                    if (("error" == $context["type"])) {
                        // line 5
                        yield "                ";
                        $context["result"] = "negative";
                        // line 6
                        yield "                ";
                        $context["icon"] = "remove";
                        // line 7
                        yield "            ";
                    }
                    // line 8
                    yield "            ";
                    if (("info" == $context["type"])) {
                        // line 9
                        yield "                ";
                        $context["result"] = "info";
                        // line 10
                        yield "                ";
                        $context["icon"] = "info";
                        // line 11
                        yield "            ";
                    }
                    // line 12
                    yield "            <div class=\"ui icon ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("result", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 12, $this->source); })()), "positive")) : ("positive")), "html", null, true);
                    yield " message sylius-flash-message\">
                <i class=\"close icon\"></i>
                <i class=\"";
                    // line 14
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 14, $this->source); })()), "checkmark")) : ("checkmark")), "html", null, true);
                    yield " icon\"></i>
                <div class=\"content\">
                    <div class=\"header\">
                        ";
                    // line 17
                    $context["header"] = ("sylius.ui." . $context["type"]);
                    // line 18
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 18, $this->source); })())), "html", null, true);
                    yield "
                    </div>
                    <p ";
                    // line 20
                    yield $this->env->getFunction('sylius_test_html_attribute')->getCallable()("flash-messages");
                    yield ">
                    ";
                    // line 21
                    if (is_iterable($context["flash"])) {
                        // line 22
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["flash"], "message", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, $context["flash"], "parameters", [], "any", false, false, false, 22), "flashes"), "html", null, true);
                        yield "
                    ";
                    } else {
                        // line 24
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["flash"], [], "flashes"), "html", null, true);
                        yield "
                    ";
                    }
                    // line 26
                    yield "                    </p>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "@SyliusUi/_flashes.html.twig";
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
        return array (  131 => 30,  122 => 26,  116 => 24,  110 => 22,  108 => 21,  104 => 20,  98 => 18,  96 => 17,  90 => 14,  84 => 12,  81 => 11,  78 => 10,  75 => 9,  72 => 8,  69 => 7,  66 => 6,  63 => 5,  60 => 4,  55 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if app.session is not null and app.session.started %}
    {% for type in ['success', 'error', 'info', 'warning'] %}
        {% for flash in app.session.flashbag.get(type) %}
            {% if 'error' == type %}
                {% set result = 'negative' %}
                {% set icon = 'remove' %}
            {% endif %}
            {% if 'info' == type %}
                {% set result = 'info' %}
                {% set icon = 'info' %}
            {% endif %}
            <div class=\"ui icon {{ result|default('positive') }} message sylius-flash-message\">
                <i class=\"close icon\"></i>
                <i class=\"{{ icon|default('checkmark') }} icon\"></i>
                <div class=\"content\">
                    <div class=\"header\">
                        {% set header = 'sylius.ui.'~type %}
                        {{ header|trans }}
                    </div>
                    <p {{ sylius_test_html_attribute('flash-messages') }}>
                    {% if flash is iterable %}
                        {{ flash.message|trans(flash.parameters, 'flashes') }}
                    {% else %}
                        {{ flash|trans({}, 'flashes') }}
                    {% endif %}
                    </p>
                </div>
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}
", "@SyliusUi/_flashes.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/_flashes.html.twig");
    }
}
