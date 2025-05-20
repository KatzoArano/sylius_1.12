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

/* @SyliusAdmin/Product/Tab/_associations.html.twig */
class __TwigTemplate_93ff7bc97cc80cfd4ec243427a3922a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_associations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_associations.html.twig"));

        // line 1
        yield "<div class=\"ui tab\" data-tab=\"associations\">
    <h3 class=\"ui top attached header\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.associations"), "html", null, true);
        yield "</h3>

    <div class=\"ui attached segment\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "associations", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["associationForm"]) {
            // line 6
            yield "            <div class=\"field\">";
            // line 7
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["associationForm"], 'label');
            // line 8
            yield "<div class=\"product-select ui fluid multiple search selection dropdown\" data-url=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_index", ["limit" => 20]);
            yield "\">
                    ";
            // line 9
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["associationForm"], 'widget', ["attr" => ["class" => "autocomplete"]]);
            yield "
                    <i class=\"dropdown icon\"></i>
                    <div class=\"default text\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.select_products"), "html", null, true);
            yield "</div>
                    <div class=\"menu\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "associations", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
                // line 14
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["association"], "type", [], "any", false, false, false, 14), "code", [], "any", false, false, false, 14) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["associationForm"], "vars", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14))) {
                    // line 15
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["association"], "associatedProducts", [], "any", false, false, false, 15));
                    foreach ($context['_seq'] as $context["_key"] => $context["associatedProduct"]) {
                        // line 16
                        yield "                                    <div class=\"item\" data-value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["associatedProduct"], "code", [], "any", false, false, false, 16), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["associatedProduct"], "name", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["associatedProduct"], "name", [], "any", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source, $context["associatedProduct"], "code", [], "any", false, false, false, 16))) : (CoreExtension::getAttribute($this->env, $this->source, $context["associatedProduct"], "code", [], "any", false, false, false, 16))), "html", null, true);
                        yield "</div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['associatedProduct'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    yield "                            ";
                }
                // line 19
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['association'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "                    </div>
                </div>
                ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["associationForm"], 'errors');
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['associationForm'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
        ";
        // line 26
        yield $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([(("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 26, $this->source); })())) . ".tab_associations"), "sylius.admin.product.tab_associations"], ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })())]);
        yield "
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
        return "@SyliusAdmin/Product/Tab/_associations.html.twig";
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
        return array (  128 => 26,  125 => 25,  116 => 22,  112 => 20,  106 => 19,  103 => 18,  92 => 16,  87 => 15,  84 => 14,  80 => 13,  75 => 11,  70 => 9,  65 => 8,  63 => 7,  61 => 6,  57 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ui tab\" data-tab=\"associations\">
    <h3 class=\"ui top attached header\">{{ 'sylius.ui.associations'|trans }}</h3>

    <div class=\"ui attached segment\">
        {% for associationForm in form.associations %}
            <div class=\"field\">
                {{- form_label(associationForm) -}}
                <div class=\"product-select ui fluid multiple search selection dropdown\" data-url=\"{{ path('sylius_admin_ajax_product_index', {'limit': 20}) }}\">
                    {{ form_widget(associationForm, {'attr': {'class': 'autocomplete'}}) }}
                    <i class=\"dropdown icon\"></i>
                    <div class=\"default text\">{{'sylius.ui.select_products'|trans}}</div>
                    <div class=\"menu\">
                        {% for association in product.associations %}
                            {% if association.type.code == associationForm.vars.name %}
                                {% for associatedProduct in association.associatedProducts %}
                                    <div class=\"item\" data-value=\"{{ associatedProduct.code }}\">{{ associatedProduct.name|default(associatedProduct.code) }}</div>
                                {% endfor %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
                {{ form_errors(associationForm) }}
            </div>
        {% endfor %}

        {{ sylius_template_event(['sylius.admin.product.' ~ action ~ '.tab_associations', 'sylius.admin.product.tab_associations'], {'form': form}) }}
    </div>
</div>
", "@SyliusAdmin/Product/Tab/_associations.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_associations.html.twig");
    }
}
