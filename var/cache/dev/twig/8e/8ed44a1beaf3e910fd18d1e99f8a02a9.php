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

/* @SyliusRefundPlugin/_javascripts.html.twig */
class __TwigTemplate_24678f1733d1f1f24d036ccfd1213a0c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_javascripts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusRefundPlugin/_javascripts.html.twig"));

        // line 1
        yield "<script>
    \$(document).ready(function() {
        const \$refundButtons = \$('[data-refund]');
        const \$refundAllButton = \$('[data-refund-all]');
        const \$refundClearAllButton = \$('[data-refund-clear]');
        const \$refundInputs = \$('[data-refund-input]');

        \$refundButtons.on('click', function(e) {
            const \$button = \$(this);
            const refundValue = \$button.attr('data-refund');
            const \$refundInput = \$button.closest('tr').find('[data-refund-input]');

            \$refundInput.val(refundValue);
        });

        \$refundAllButton.on('click', function () {
            \$refundButtons.not(':disabled').trigger('click');
        });

        \$refundClearAllButton.on('click', function () {
            \$refundInputs.val('');
        });
    });
</script>
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
        return "@SyliusRefundPlugin/_javascripts.html.twig";
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
        return new Source("<script>
    \$(document).ready(function() {
        const \$refundButtons = \$('[data-refund]');
        const \$refundAllButton = \$('[data-refund-all]');
        const \$refundClearAllButton = \$('[data-refund-clear]');
        const \$refundInputs = \$('[data-refund-input]');

        \$refundButtons.on('click', function(e) {
            const \$button = \$(this);
            const refundValue = \$button.attr('data-refund');
            const \$refundInput = \$button.closest('tr').find('[data-refund-input]');

            \$refundInput.val(refundValue);
        });

        \$refundAllButton.on('click', function () {
            \$refundButtons.not(':disabled').trigger('click');
        });

        \$refundClearAllButton.on('click', function () {
            \$refundInputs.val('');
        });
    });
</script>
", "@SyliusRefundPlugin/_javascripts.html.twig", "/Users/orkatz/Documents/sylius_1.12/vendor/sylius/refund-plugin/src/Resources/views/_javascripts.html.twig");
    }
}
