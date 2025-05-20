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

/* @SyliusPayPalPlugin/javascripts.html.twig */
class __TwigTemplate_d44c5ff77ea0e8430c587a270b80b58f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/javascripts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/javascripts.html.twig"));

        // line 1
        yield "<script type=\"application/javascript\">
    const confirmationText = document.querySelector('#confirmation-modal > div.content');;
    const defaultText = confirmationText.innerHTML;

    document.querySelector('#confirmation-button').addEventListener('click', evt => {
        window.location.href = evt.currentTarget.getAttribute('href');
    })

    document.querySelectorAll('[data-confirm-pay-pal-consent]').forEach((item) => {
        item.addEventListener('click', (evt) => {
            evt.preventDefault();

            const actionButton = evt.currentTarget;
            document.querySelector('#confirmation-button').setAttribute('href', actionButton.getAttribute('href'));

            confirmationText.innerHTML = '";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.share_data_consent_confirmation"), "html", null, true);
        yield "';
            \$('#confirmation-modal')
                .modal({
                    onHidden: function() {
                        confirmationText.innerHTML = defaultText;
                    }
                })
                .modal('show')
            ;
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
        return "@SyliusPayPalPlugin/javascripts.html.twig";
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
        return array (  65 => 16,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script type=\"application/javascript\">
    const confirmationText = document.querySelector('#confirmation-modal > div.content');;
    const defaultText = confirmationText.innerHTML;

    document.querySelector('#confirmation-button').addEventListener('click', evt => {
        window.location.href = evt.currentTarget.getAttribute('href');
    })

    document.querySelectorAll('[data-confirm-pay-pal-consent]').forEach((item) => {
        item.addEventListener('click', (evt) => {
            evt.preventDefault();

            const actionButton = evt.currentTarget;
            document.querySelector('#confirmation-button').setAttribute('href', actionButton.getAttribute('href'));

            confirmationText.innerHTML = '{{ 'sylius.pay_pal.share_data_consent_confirmation'|trans }}';
            \$('#confirmation-modal')
                .modal({
                    onHidden: function() {
                        confirmationText.innerHTML = defaultText;
                    }
                })
                .modal('show')
            ;
        });
    });
</script>
", "@SyliusPayPalPlugin/javascripts.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/paypal-plugin/src/Resources/views/javascripts.html.twig");
    }
}
