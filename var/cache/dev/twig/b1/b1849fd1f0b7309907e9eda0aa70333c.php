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

/* @SyliusAdmin/Product/Show/_media.html.twig */
class __TwigTemplate_6bba074191303fdcfd1db11ff59e1d53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_media.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_media.html.twig"));

        // line 1
        yield "<div id=\"media\" class=\"ui styled fluid accordion\">
    <div class=\"title\">
        <i class=\"dropdown icon\"></i>
        ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.media"), "html", null, true);
        yield "
    </div>
    <div class=\"content\">
        ";
        // line 7
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "images", [], "any", false, false, false, 7)) >= 1)) {
            // line 8
            yield "            <div class=\"ui small images\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "images", [], "any", false, false, false, 9));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 10
                yield "                    ";
                if ((($tmp = (isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 10, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 11
                    yield "                        ";
                    $context["path"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 11))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 11), "sylius_admin_product_small_thumbnail")) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin/images/200x200.png", "admin")));
                    // line 12
                    yield "                    ";
                } else {
                    // line 13
                    yield "                        ";
                    $context["path"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 13))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 13), "sylius_admin_product_small_thumbnail")) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img/200x200.png")));
                    // line 14
                    yield "                    ";
                }
                // line 15
                yield "                    <div class=\"ui image\">
                        ";
                // line 16
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "isConfigurable", [], "method", false, false, false, 16) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "variants", [], "any", false, false, false, 16)) > 0))) {
                    // line 17
                    yield "                            ";
                    yield from $this->load("@SyliusAdmin/Product/Show/_imageVariants.html.twig", 17)->unwrap()->yield($context);
                    // line 18
                    yield "                        ";
                }
                // line 19
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 19), "sylius_admin_product_original"), "html", null, true);
                yield "\" data-lightbox=\"sylius-product-image\">
                            <img src=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 20, $this->source); })()), "html", null, true);
                yield "\" data-large-thumbnail=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 20), "sylius_admin_product_large_thumbnail"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
                yield "\" />
                        </a>
                    </div>
                ";
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
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "            </div>
        ";
        }
        // line 26
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
        return "@SyliusAdmin/Product/Show/_media.html.twig";
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
        return array (  138 => 26,  134 => 24,  112 => 20,  107 => 19,  104 => 18,  101 => 17,  99 => 16,  96 => 15,  93 => 14,  90 => 13,  87 => 12,  84 => 11,  81 => 10,  64 => 9,  61 => 8,  59 => 7,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"media\" class=\"ui styled fluid accordion\">
    <div class=\"title\">
        <i class=\"dropdown icon\"></i>
        {{ 'sylius.ui.media'|trans }}
    </div>
    <div class=\"content\">
        {% if product.images|length >= 1 %}
            <div class=\"ui small images\">
                {% for image in product.images %}
                    {% if use_webpack %}
                        {% set path = image.path is not null ? image.path|imagine_filter('sylius_admin_product_small_thumbnail') : asset('build/admin/images/200x200.png', 'admin') %}
                    {% else %}
                        {% set path = image.path is not null ? image.path|imagine_filter('sylius_admin_product_small_thumbnail') : asset('assets/admin/img/200x200.png') %}
                    {% endif %}
                    <div class=\"ui image\">
                        {% if product.isConfigurable() and product.variants|length > 0 %}
                            {% include '@SyliusAdmin/Product/Show/_imageVariants.html.twig' %}
                        {% endif %}
                        <a href=\"{{ image.path|imagine_filter('sylius_admin_product_original') }}\" data-lightbox=\"sylius-product-image\">
                            <img src=\"{{ path }}\" data-large-thumbnail=\"{{ image.path|imagine_filter('sylius_admin_product_large_thumbnail') }}\" alt=\"{{ product.name }}\" />
                        </a>
                    </div>
                {% endfor %}
            </div>
        {% endif %}
    </div>
</div>
", "@SyliusAdmin/Product/Show/_media.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_media.html.twig");
    }
}
