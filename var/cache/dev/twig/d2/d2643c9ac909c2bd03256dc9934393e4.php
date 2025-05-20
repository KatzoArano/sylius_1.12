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

/* @SyliusUi/Form/imagesTheme.html.twig */
class __TwigTemplate_06a0a6bbae4006516aca8420d730163a extends Template
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

        $this->blocks = [
            'collection_widget' => [$this, 'block_collection_widget'],
            'sylius_product_image_widget' => [$this, 'block_sylius_product_image_widget'],
            'sylius_taxon_image_widget' => [$this, 'block_sylius_taxon_image_widget'],
            'sylius_avatar_image_widget' => [$this, 'block_sylius_avatar_image_widget'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@SyliusUi/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Form/imagesTheme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Form/imagesTheme.html.twig"));

        $this->parent = $this->load("@SyliusUi/Form/theme.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 4
        $macros["_v0"] = $this->load("@SyliusResource/Macros/notification.html.twig", 4)->unwrap();
        // line 5
        yield "    ";
        $macros["self"] = $this;
        // line 6
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 6, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 6, $this->source); })()), "class", [], "any", false, false, false, 6))) : ("")) . " controls collection-widget")]);
        // line 7
        yield "
    ";
        // line 8
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 9
            yield "        <div data-form-type=\"collection\" ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield "
            ";
            // line 10
            if ((array_key_exists("prototype", $context) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 10, $this->source); })()))) {
                // line 11
                yield "                data-prototype='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($macros["self"]->getTemplateForMacro("macro_collection_item", $context, 11, $this->getSourceContext())->macro_collection_item(...[(isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 11, $this->source); })()), (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 11, $this->source); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new RuntimeError('Variable "button_delete_label" does not exist.', 11, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11)]));
                yield "'
                data-prototype-name='";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
                yield "'";
            }
            // line 14
            yield ">
            ";
            // line 15
            yield $macros["_v0"]->getTemplateForMacro("macro_error", $context, 15, $this->getSourceContext())->macro_error(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15)]);
            yield "

            ";
            // line 17
            if (is_iterable(((array_key_exists("prototypes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new RuntimeError('Variable "prototypes" does not exist.', 17, $this->source); })()))) : ("")))) {
                // line 18
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new RuntimeError('Variable "prototypes" does not exist.', 18, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                    // line 19
                    yield "                    <input type=\"hidden\" data-form-prototype=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\"
                           value=\"";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($macros["self"]->getTemplateForMacro("macro_collection_item", $context, 20, $this->getSourceContext())->macro_collection_item(...[$context["subPrototype"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 20, $this->source); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new RuntimeError('Variable "button_delete_label" does not exist.', 20, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subPrototype"], "vars", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20)]));
                    yield "\"
                           data-subprototype-name=\"";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subPrototype"], "vars", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
                    yield "\"
                    />
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['subPrototype'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                yield "            ";
            }
            // line 25
            yield "
            <div data-form-collection=\"list\" class=\"ui three column stackable grid\">
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 28
                yield "                    ";
                yield $macros["self"]->getTemplateForMacro("macro_collection_item", $context, 28, $this->getSourceContext())->macro_collection_item(...[$context["child"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 28, $this->source); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new RuntimeError('Variable "button_delete_label" does not exist.', 28, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 28)]);
                yield "
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
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "            </div>

            ";
            // line 32
            if ((array_key_exists("prototype", $context) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 32, $this->source); })()))) {
                // line 33
                yield "                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["button_add_label"]) || array_key_exists("button_add_label", $context) ? $context["button_add_label"] : (function () { throw new RuntimeError('Variable "button_add_label" does not exist.', 35, $this->source); })())), "html", null, true);
                yield "
                </a>
            ";
            }
            // line 38
            yield "        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        yield Twig\Extension\CoreExtension::spaceless($_v1);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sylius_product_image_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        // line 59
        yield "    ";
        $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 60
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "type", [], "any", false, false, false, 60), 'row');
            yield "
        <div class=\"ui-element-spacer\">
            <label for=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "file", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_file"), "html", null, true);
            yield "</label>
        </div>
        ";
            // line 64
            if ((($tmp =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 64), "value", [], "any", false, true, false, 64), "path", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "vars", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64), "path", [], "any", false, false, false, 64), null)) : (null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "            <img class=\"ui small bordered image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65), "path", [], "any", false, false, false, 65), "sylius_small"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65), "type", [], "any", false, false, false, 65), "html", null, true);
                yield "\" />
        ";
            }
            // line 67
            yield "        <div class=\"ui hidden element\">
            ";
            // line 68
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "file", [], "any", false, false, false, 68), 'widget');
            yield "
        </div>
        <div class=\"ui element\">";
            // line 71
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "file", [], "any", false, false, false, 71), 'errors');
            // line 72
            yield "</div>
        ";
            // line 73
            if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)) && (0 != Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "variants", [], "any", false, false, false, 73)))) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "simple", [], "any", false, false, false, 73))) {
                // line 74
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "productVariants", [], "any", false, false, false, 74), 'row');
                yield "
        ";
            }
            // line 76
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield Twig\Extension\CoreExtension::spaceless($_v2);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sylius_taxon_image_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_taxon_image_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_taxon_image_widget"));

        // line 80
        yield "    ";
        $_v3 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 81
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "type", [], "any", false, false, false, 81), 'row');
            yield "
        ";
            // line 82
            if ((null === ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 82), "value", [], "any", false, true, false, 82), "path", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "vars", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82), "path", [], "any", false, false, false, 82), null)) : (null)))) {
                // line 83
                yield "        <div class=\"ui-element-spacer\">
            <label for=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "file", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
                yield "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_file"), "html", null, true);
                yield "</label>
        </div>
        ";
            } else {
                // line 87
                yield "            <img class=\"ui small bordered image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "vars", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87), "path", [], "any", false, false, false, 87), "sylius_small"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "vars", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87), "type", [], "any", false, false, false, 87), "html", null, true);
                yield "\" />
            <label for=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "file", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "html", null, true);
                yield "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_file"), "html", null, true);
                yield "</label>
        ";
            }
            // line 90
            yield "        <div class=\"ui hidden element\">
            ";
            // line 91
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "file", [], "any", false, false, false, 91), 'widget');
            yield "
        </div>
        <div class=\"ui element\">";
            // line 94
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "file", [], "any", false, false, false, 94), 'errors');
            // line 95
            yield "</div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        yield Twig\Extension\CoreExtension::spaceless($_v3);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sylius_avatar_image_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_avatar_image_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_avatar_image_widget"));

        // line 100
        yield "    ";
        $_v4 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 101
            yield "        ";
            if ((($tmp =  !(null === ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 101), "value", [], "any", false, true, false, 101), "path", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "vars", [], "any", false, false, false, 101), "value", [], "any", false, false, false, 101), "path", [], "any", false, false, false, 101), null)) : (null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 102
                yield "            <img class=\"ui small bordered image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "vars", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102), "path", [], "any", false, false, false, 102), "sylius_small"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "vars", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102), "type", [], "any", false, false, false, 102), "html", null, true);
                yield "\" />
        ";
            }
            // line 104
            yield "        <div class=\"ui hidden element\">
            ";
            // line 105
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "file", [], "any", false, false, false, 105), 'widget');
            yield "
        </div>
        <div style=\"margin-top: 10px\" >
            <label for=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "file", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108), "html", null, true);
            yield "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_file"), "html", null, true);
            yield "</label>
        </div>
        <div class=\"ui element\">";
            // line 111
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "file", [], "any", false, false, false, 111), 'errors');
            // line 112
            yield "</div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        yield Twig\Extension\CoreExtension::spaceless($_v4);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
    public function macro_collection_item($form = null, $allow_delete = null, $button_delete_label = null, $index = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "allow_delete" => $allow_delete,
            "button_delete_label" => $button_delete_label,
            "index" => $index,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_item"));

            // line 43
            yield "    ";
            $_v5 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 44
                yield "        <div data-form-collection=\"item\" data-form-collection-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 44, $this->source); })()), "html", null, true);
                yield "\" class=\"column\">
            <div class=\"ui box segment\">
                ";
                // line 46
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'widget');
                yield "
            </div>
            ";
                // line 48
                if ((($tmp = (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    ";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new RuntimeError('Variable "button_delete_label" does not exist.', 51, $this->source); })())), "html", null, true);
                    yield "
                </a>
            ";
                }
                // line 54
                yield "        </div>
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 43
            yield Twig\Extension\CoreExtension::spaceless($_v5);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusUi/Form/imagesTheme.html.twig";
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
        return array (  476 => 43,  471 => 54,  465 => 51,  461 => 49,  459 => 48,  454 => 46,  448 => 44,  445 => 43,  424 => 42,  413 => 100,  408 => 112,  406 => 111,  399 => 108,  393 => 105,  390 => 104,  382 => 102,  379 => 101,  376 => 100,  363 => 99,  352 => 80,  347 => 95,  345 => 94,  340 => 91,  337 => 90,  330 => 88,  323 => 87,  315 => 84,  312 => 83,  310 => 82,  305 => 81,  302 => 80,  289 => 79,  278 => 59,  274 => 76,  268 => 74,  266 => 73,  263 => 72,  261 => 71,  256 => 68,  253 => 67,  245 => 65,  243 => 64,  236 => 62,  230 => 60,  227 => 59,  214 => 58,  203 => 8,  198 => 38,  192 => 35,  188 => 33,  186 => 32,  182 => 30,  165 => 28,  148 => 27,  144 => 25,  141 => 24,  132 => 21,  128 => 20,  123 => 19,  118 => 18,  116 => 17,  111 => 15,  108 => 14,  104 => 12,  99 => 11,  97 => 10,  92 => 9,  90 => 8,  87 => 7,  84 => 6,  81 => 5,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@SyliusUi/Form/theme.html.twig' %}

{% block collection_widget -%}
    {% from '@SyliusResource/Macros/notification.html.twig' import error %}
    {% import _self as self %}
    {% set attr = attr|merge({'class': attr.class|default ~ ' controls collection-widget'}) %}

    {% apply spaceless %}
        <div data-form-type=\"collection\" {{ block('widget_container_attributes') }}
            {% if prototype is defined and allow_add %}
                data-prototype='{{ self.collection_item(prototype, allow_delete, button_delete_label, prototype.vars.name)|e }}'
                data-prototype-name='{{ prototype.vars.name }}'
            {%- endif -%}
        >
            {{ error(form.vars.errors) }}

            {% if prototypes|default is iterable %}
                {% for key, subPrototype in prototypes %}
                    <input type=\"hidden\" data-form-prototype=\"{{ key }}\"
                           value=\"{{ self.collection_item(subPrototype, allow_delete, button_delete_label, subPrototype.vars.name)|e }}\"
                           data-subprototype-name=\"{{ subPrototype.vars.name }}\"
                    />
                {% endfor %}
            {% endif %}

            <div data-form-collection=\"list\" class=\"ui three column stackable grid\">
                {% for child in form %}
                    {{ self.collection_item(child, allow_delete, button_delete_label, loop.index0) }}
                {% endfor %}
            </div>

            {% if prototype is defined and allow_add %}
                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    {{ button_add_label|trans }}
                </a>
            {% endif %}
        </div>
    {% endapply %}
{%- endblock collection_widget %}

{% macro collection_item(form, allow_delete, button_delete_label, index) %}
    {% apply spaceless %}
        <div data-form-collection=\"item\" data-form-collection-index=\"{{ index }}\" class=\"column\">
            <div class=\"ui box segment\">
                {{ form_widget(form) }}
            </div>
            {% if allow_delete %}
                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    {{ button_delete_label|trans }}
                </a>
            {% endif %}
        </div>
    {% endapply %}
{% endmacro %}

{% block sylius_product_image_widget %}
    {% apply spaceless %}
        {{ form_row(form.type) }}
        <div class=\"ui-element-spacer\">
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
        </div>
        {% if form.vars.value.path|default(null) is not null %}
            <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
        {% endif %}
        <div class=\"ui hidden element\">
            {{ form_widget(form.file) }}
        </div>
        <div class=\"ui element\">
            {{- form_errors(form.file) -}}
        </div>
        {% if product.id is not null and 0 != product.variants|length and not product.simple %}
            {{ form_row(form.productVariants) }}
        {% endif %}
    {% endapply %}
{% endblock %}

{% block sylius_taxon_image_widget %}
    {% apply spaceless %}
        {{ form_row(form.type) }}
        {% if form.vars.value.path|default(null) is null %}
        <div class=\"ui-element-spacer\">
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
        </div>
        {% else %}
            <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.change_file'|trans }}</label>
        {% endif %}
        <div class=\"ui hidden element\">
            {{ form_widget(form.file) }}
        </div>
        <div class=\"ui element\">
            {{- form_errors(form.file) -}}
        </div>
    {% endapply %}
{% endblock %}

{% block sylius_avatar_image_widget %}
    {% apply spaceless %}
        {% if form.vars.value.path|default(null) is not null %}
            <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
        {% endif %}
        <div class=\"ui hidden element\">
            {{ form_widget(form.file) }}
        </div>
        <div style=\"margin-top: 10px\" >
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
        </div>
        <div class=\"ui element\">
            {{- form_errors(form.file) -}}
        </div>
    {% endapply %}
{% endblock %}
", "@SyliusUi/Form/imagesTheme.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/imagesTheme.html.twig");
    }
}
