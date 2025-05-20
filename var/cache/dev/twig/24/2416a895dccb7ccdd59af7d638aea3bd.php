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

/* @SyliusApi/SwaggerUi/index.html.twig */
class __TwigTemplate_7223efbebf4fca7b7bc2705d3939df2e extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusApi/SwaggerUi/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusApi/SwaggerUi/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        if ((($tmp = (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
            yield " - ";
        }
        yield "API Platform</title>

    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheet', $context, $blocks);
        // line 12
        yield "
    ";
        // line 13
        $context["oauth_data"] = ["oauth" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["swagger_data"]) || array_key_exists("swagger_data", $context) ? $context["swagger_data"] : (function () { throw new RuntimeError('Variable "swagger_data" does not exist.', 13, $this->source); })()), "oauth", [], "any", false, false, false, 13), ["redirectUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/swagger-ui/oauth2-redirect.html"))])];
        // line 14
        yield "    ";
        // line 15
        yield "    <script id=\"swagger-data\" type=\"application/json\">";
        yield json_encode(Twig\Extension\CoreExtension::merge((isset($context["swagger_data"]) || array_key_exists("swagger_data", $context) ? $context["swagger_data"] : (function () { throw new RuntimeError('Variable "swagger_data" does not exist.', 15, $this->source); })()), (isset($context["oauth_data"]) || array_key_exists("oauth_data", $context) ? $context["oauth_data"] : (function () { throw new RuntimeError('Variable "oauth_data" does not exist.', 15, $this->source); })())), 65);
        yield "</script>
</head>

<body>
<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"position:absolute;width:0;height:0\">
    <defs>
        <symbol viewBox=\"0 0 20 20\" id=\"unlocked\">
            <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"locked\">
            <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"close\">
            <path d=\"M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"large-arrow\">
            <path d=\"M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"large-arrow-down\">
            <path d=\"M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z\"></path>
        </symbol>


        <symbol viewBox=\"0 0 24 24\" id=\"jump-to\">
            <path d=\"M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 24 24\" id=\"expand\">
            <path d=\"M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z\"></path>
        </symbol>

    </defs>
</svg>
<header>
    <a id=\"logo\" href=\"https://api-platform.com\"><img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/logo-header.svg"), "html", null, true);
        yield "\" alt=\"API Platform\"></a>
    <a href=\"https://docs.sylius.com/en/latest/book/api/introduction.html\">
        <div style=\"align-items: center; display: flex; height: 70px; font-size: 14px; color: #fff; font-weight: 700; font-family: sans-serif; padding: 10px 40px; position: fixed; top: 0; left: 0; background: #ed6a5a; z-index: 103;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-alert-circle\" style=\"margin-right: 10px;\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line><line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line></svg>EXPERIMENTAL</div>
    </a>
</header>

";
        // line 59
        if ((($tmp = (isset($context["showWebby"]) || array_key_exists("showWebby", $context) ? $context["showWebby"] : (function () { throw new RuntimeError('Variable "showWebby" does not exist.', 59, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "    <div class=\"web\"><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/web.png"), "html", null, true);
            yield "\"></div>
    <div class=\"webby\"><img src=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/webby.png"), "html", null, true);
            yield "\"></div>
";
        }
        // line 63
        yield "<div id=\"swagger-ui\" class=\"api-platform\"></div>

<div class=\"swagger-ui\" id=\"formats\">
    <div class=\"information-container wrapper\">
        <div class=\"info\">
            Available formats:
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["formats"]) || array_key_exists("formats", $context) ? $context["formats"] : (function () { throw new RuntimeError('Variable "formats" does not exist.', 69, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 70
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "get", ["_route"], "method", false, false, false, 70), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "all", ["_route_params"], "method", false, false, false, 70), ["_format" => $context["format"]])), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["format"], "html", null, true);
            yield "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['format'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "            <br>
            Other API docs:
            ";
        // line 74
        $context["active_ui"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "request", [], "any", false, false, false, 74), "get", ["ui", "swagger_ui"], "method", false, false, false, 74);
        // line 75
        yield "            ";
        if (((isset($context["swaggerUiEnabled"]) || array_key_exists("swaggerUiEnabled", $context) ? $context["swaggerUiEnabled"] : (function () { throw new RuntimeError('Variable "swaggerUiEnabled" does not exist.', 75, $this->source); })()) && ((isset($context["active_ui"]) || array_key_exists("active_ui", $context) ? $context["active_ui"] : (function () { throw new RuntimeError('Variable "active_ui" does not exist.', 75, $this->source); })()) != "swagger_ui"))) {
            yield "<a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_entrypoint");
            yield "\">Swagger UI</a>";
        }
        // line 76
        yield "            ";
        if (((isset($context["reDocEnabled"]) || array_key_exists("reDocEnabled", $context) ? $context["reDocEnabled"] : (function () { throw new RuntimeError('Variable "reDocEnabled" does not exist.', 76, $this->source); })()) && ((isset($context["active_ui"]) || array_key_exists("active_ui", $context) ? $context["active_ui"] : (function () { throw new RuntimeError('Variable "active_ui" does not exist.', 76, $this->source); })()) != "re_doc"))) {
            yield "<a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_entrypoint", ["ui" => "re_doc"]);
            yield "\">ReDoc</a>";
        }
        // line 77
        yield "            ";
        if ((($tmp =  !(isset($context["graphqlEnabled"]) || array_key_exists("graphqlEnabled", $context) ? $context["graphqlEnabled"] : (function () { throw new RuntimeError('Variable "graphqlEnabled" does not exist.', 77, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"javascript:alert('GraphQL support is not enabled, see https://api-platform.com/docs/core/graphql/')\">GraphiQL</a>";
        }
        // line 78
        yield "            ";
        if ((($tmp = (isset($context["graphiQlEnabled"]) || array_key_exists("graphiQlEnabled", $context) ? $context["graphiQlEnabled"] : (function () { throw new RuntimeError('Variable "graphiQlEnabled" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_graphql_graphiql");
            yield "\">GraphiQL</a>";
        }
        // line 79
        yield "            ";
        if ((($tmp = (isset($context["graphQlPlaygroundEnabled"]) || array_key_exists("graphQlPlaygroundEnabled", $context) ? $context["graphQlPlaygroundEnabled"] : (function () { throw new RuntimeError('Variable "graphQlPlaygroundEnabled" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_graphql_graphql_playground");
            yield "\">GraphQL Playground</a>";
        }
        // line 80
        yield "        </div>
    </div>
</div>

";
        // line 84
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 94
        yield "<script>
    class ClassWatcher {
        constructor(targetNode, classToWatch, classAddedCallback, classRemovedCallback) {
            this.targetNode = targetNode
            this.classToWatch = classToWatch
            this.classAddedCallback = classAddedCallback
            this.classRemovedCallback = classRemovedCallback
            this.observer = null
            this.lastClassState = targetNode.classList.contains(this.classToWatch)

            this.init()
        }

        init() {
            this.observer = new MutationObserver(this.mutationCallback)
            this.observe()
        }

        observe() {
            this.observer.observe(this.targetNode, { attributes: true })
        }

        disconnect() {
            this.observer.disconnect()
        }

        mutationCallback = mutationsList => {
            for(let mutation of mutationsList) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    let currentClassState = mutation.target.classList.contains(this.classToWatch)
                    if(this.lastClassState !== currentClassState) {
                        this.lastClassState = currentClassState
                        if(currentClassState) {
                            this.classAddedCallback()
                        }
                        else {
                            this.classRemovedCallback()
                        }
                    }
                }
            }
        }
    }

    let tokenRequestContainer = null;

    function credentialsRequestReady() {
        const tokenRequestContainer2 = document.querySelector('#operations-AdminUserToken-postCredentialsItem').getElementsByClassName('opblock-body')[0];

        const executeWrapper = tokenRequestContainer2.getElementsByClassName('execute-wrapper')[0];
        new ClassWatcher(executeWrapper, 'btn-group', credentialsRequestFinished, () => {});
    }

    function credentialsRequestFinished() {
        const tokenElement = JSON.parse(tokenRequestContainer.querySelector('.highlight-code').getElementsByTagName('code')[0].innerText)

        const buttonLogin = document.querySelector(\"#swagger-ui > section > div.swagger-ui > div:nth-child(2) > div.scheme-container > section > div > button\");

        const mouseEvent = new MouseEvent('click', {
            view: window,
            bubbles: true,
            cancelable: true
        });

        buttonLogin.dispatchEvent(mouseEvent);

        const authFormField = document.querySelector(\"#swagger-ui > section > div.swagger-ui > div:nth-child(2) > div.scheme-container > section > div > div > div.modal-ux > div > div > div.modal-ux-content > div > form > div:nth-child(1) > div > div:nth-child(5) > section > input[type=text]\");

        const authorizeSubmitButton = document.querySelector(\"#swagger-ui > section > div.swagger-ui > div:nth-child(2) > div.scheme-container > section > div > div > div.modal-ux > div > div > div.modal-ux-content > div > form > div.auth-btn-wrapper > button.btn.modal-btn.auth.authorize.button\");

        const nativeInputValueSetter = Object.getOwnPropertyDescriptor(window.HTMLInputElement.prototype, \"value\").set;
        nativeInputValueSetter.call(authFormField, `Bearer \${tokenElement.token}`);

        authFormField.dispatchEvent(new Event('input', { bubbles: true }));

        authorizeSubmitButton.dispatchEvent(mouseEvent);

        const closeAuthFormButton = document.querySelector(\"#swagger-ui > section > div.swagger-ui > div:nth-child(2) > div.scheme-container > section > div > div > div.modal-ux > div > div > div.modal-ux-content > div > form > div.auth-btn-wrapper > button.btn.modal-btn.auth.btn-done.button\");

        closeAuthFormButton.dispatchEvent(mouseEvent);
    }

    window.addEventListener('load', event => {
        tokenRequestContainer = document.querySelector('#operations-AdminUserToken-postCredentialsItem');

        new ClassWatcher(tokenRequestContainer, 'is-open', credentialsRequestReady, function(){});
    });
</script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 8
        yield "        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/style.css"), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 85
        yield "    ";
        if ((((isset($context["reDocEnabled"]) || array_key_exists("reDocEnabled", $context) ? $context["reDocEnabled"] : (function () { throw new RuntimeError('Variable "reDocEnabled" does not exist.', 85, $this->source); })()) &&  !(isset($context["swaggerUiEnabled"]) || array_key_exists("swaggerUiEnabled", $context) ? $context["swaggerUiEnabled"] : (function () { throw new RuntimeError('Variable "swaggerUiEnabled" does not exist.', 85, $this->source); })())) || ((isset($context["reDocEnabled"]) || array_key_exists("reDocEnabled", $context) ? $context["reDocEnabled"] : (function () { throw new RuntimeError('Variable "reDocEnabled" does not exist.', 85, $this->source); })()) && ("re_doc" == (isset($context["active_ui"]) || array_key_exists("active_ui", $context) ? $context["active_ui"] : (function () { throw new RuntimeError('Variable "active_ui" does not exist.', 85, $this->source); })()))))) {
            // line 86
            yield "        <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/redoc/redoc.standalone.js"), "html", null, true);
            yield "\"></script>
        <script src=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/init-redoc-ui.js"), "html", null, true);
            yield "\"></script>
    ";
        } else {
            // line 89
            yield "        <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui-bundle.js"), "html", null, true);
            yield "\"></script>
        <script src=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui-standalone-preset.js"), "html", null, true);
            yield "\"></script>
        <script src=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/init-swagger-ui.js"), "html", null, true);
            yield "\"></script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SyliusApi/SwaggerUi/index.html.twig";
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
        return array (  376 => 91,  372 => 90,  367 => 89,  362 => 87,  357 => 86,  354 => 85,  341 => 84,  328 => 10,  324 => 9,  321 => 8,  308 => 7,  206 => 94,  204 => 84,  198 => 80,  191 => 79,  184 => 78,  179 => 77,  172 => 76,  165 => 75,  163 => 74,  159 => 72,  148 => 70,  144 => 69,  136 => 63,  131 => 61,  126 => 60,  124 => 59,  115 => 53,  73 => 15,  71 => 14,  69 => 13,  66 => 12,  64 => 7,  56 => 5,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% if title %}{{ title }} - {% endif %}API Platform</title>

    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/apiplatform/swagger-ui/swagger-ui.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/apiplatform/style.css') }}\">
    {% endblock %}

    {% set oauth_data = {'oauth': swagger_data.oauth|merge({'redirectUrl' : absolute_url(asset('bundles/apiplatform/swagger-ui/oauth2-redirect.html')) })} %}
    {# json_encode(65) is for JSON_UNESCAPED_SLASHES|JSON_HEX_TAG to avoid JS XSS #}
    <script id=\"swagger-data\" type=\"application/json\">{{ swagger_data|merge(oauth_data)|json_encode(65)|raw }}</script>
</head>

<body>
<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"position:absolute;width:0;height:0\">
    <defs>
        <symbol viewBox=\"0 0 20 20\" id=\"unlocked\">
            <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"locked\">
            <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"close\">
            <path d=\"M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"large-arrow\">
            <path d=\"M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"large-arrow-down\">
            <path d=\"M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z\"></path>
        </symbol>


        <symbol viewBox=\"0 0 24 24\" id=\"jump-to\">
            <path d=\"M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 24 24\" id=\"expand\">
            <path d=\"M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z\"></path>
        </symbol>

    </defs>
</svg>
<header>
    <a id=\"logo\" href=\"https://api-platform.com\"><img src=\"{{ asset('bundles/apiplatform/logo-header.svg') }}\" alt=\"API Platform\"></a>
    <a href=\"https://docs.sylius.com/en/latest/book/api/introduction.html\">
        <div style=\"align-items: center; display: flex; height: 70px; font-size: 14px; color: #fff; font-weight: 700; font-family: sans-serif; padding: 10px 40px; position: fixed; top: 0; left: 0; background: #ed6a5a; z-index: 103;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-alert-circle\" style=\"margin-right: 10px;\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line><line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line></svg>EXPERIMENTAL</div>
    </a>
</header>

{% if showWebby %}
    <div class=\"web\"><img src=\"{{ asset('bundles/apiplatform/web.png') }}\"></div>
    <div class=\"webby\"><img src=\"{{ asset('bundles/apiplatform/webby.png') }}\"></div>
{% endif %}
<div id=\"swagger-ui\" class=\"api-platform\"></div>

<div class=\"swagger-ui\" id=\"formats\">
    <div class=\"information-container wrapper\">
        <div class=\"info\">
            Available formats:
            {% for format in formats|keys %}
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.all('_route_params')|merge({'_format': format})) }}\">{{ format }}</a>
            {% endfor %}
            <br>
            Other API docs:
            {% set active_ui = app.request.get('ui', 'swagger_ui') %}
            {% if swaggerUiEnabled and active_ui != 'swagger_ui' %}<a href=\"{{ path('api_entrypoint') }}\">Swagger UI</a>{% endif %}
            {% if reDocEnabled and active_ui != 're_doc' %}<a href=\"{{ path('api_entrypoint', {'ui': 're_doc'}) }}\">ReDoc</a>{% endif %}
            {% if not graphqlEnabled %}<a href=\"javascript:alert('GraphQL support is not enabled, see https://api-platform.com/docs/core/graphql/')\">GraphiQL</a>{% endif %}
            {% if graphiQlEnabled %}<a href=\"{{ path('api_graphql_graphiql') }}\">GraphiQL</a>{% endif %}
            {% if graphQlPlaygroundEnabled %}<a href=\"{{ path('api_graphql_graphql_playground') }}\">GraphQL Playground</a>{% endif %}
        </div>
    </div>
</div>

{% block javascript %}
    {% if (reDocEnabled and not swaggerUiEnabled) or (reDocEnabled and 're_doc' == active_ui) %}
        <script src=\"{{ asset('bundles/apiplatform/redoc/redoc.standalone.js') }}\"></script>
        <script src=\"{{ asset('bundles/apiplatform/init-redoc-ui.js') }}\"></script>
    {% else %}
        <script src=\"{{ asset('bundles/apiplatform/swagger-ui/swagger-ui-bundle.js') }}\"></script>
        <script src=\"{{ asset('bundles/apiplatform/swagger-ui/swagger-ui-standalone-preset.js') }}\"></script>
        <script src=\"{{ asset('bundles/apiplatform/init-swagger-ui.js') }}\"></script>
    {% endif %}
{% endblock %}
<script>
    class ClassWatcher {
        constructor(targetNode, classToWatch, classAddedCallback, classRemovedCallback) {
            this.targetNode = targetNode
            this.classToWatch = classToWatch
            this.classAddedCallback = classAddedCallback
            this.classRemovedCallback = classRemovedCallback
            this.observer = null
            this.lastClassState = targetNode.classList.contains(this.classToWatch)

            this.init()
        }

        init() {
            this.observer = new MutationObserver(this.mutationCallback)
            this.observe()
        }

        observe() {
            this.observer.observe(this.targetNode, { attributes: true })
        }

        disconnect() {
            this.observer.disconnect()
        }

        mutationCallback = mutationsList => {
            for(let mutation of mutationsList) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    let currentClassState = mutation.target.classList.contains(this.classToWatch)
                    if(this.lastClassState !== currentClassState) {
                        this.lastClassState = currentClassState
                        if(currentClassState) {
                            this.classAddedCallback()
                        }
                        else {
                            this.classRemovedCallback()
                        }
                    }
                }
            }
        }
    }

    let tokenRequestContainer = null;

    function credentialsRequestReady() {
        const tokenRequestContainer2 = document.querySelector('#operations-AdminUserToken-postCredentialsItem').getElementsByClassName('opblock-body')[0];

        const executeWrapper = tokenRequestContainer2.getElementsByClassName('execute-wrapper')[0];
        new ClassWatcher(executeWrapper, 'btn-group', credentialsRequestFinished, () => {});
    }

    function credentialsRequestFinished() {
        const tokenElement = JSON.parse(tokenRequestContainer.querySelector('.highlight-code').getElementsByTagName('code')[0].innerText)

        const buttonLogin = document.querySelector(\"#swagger-ui > section > div.swagger-ui > div:nth-child(2) > div.scheme-container > section > div > button\");

        const mouseEvent = new MouseEvent('click', {
            view: window,
            bubbles: true,
            cancelable: true
        });

        buttonLogin.dispatchEvent(mouseEvent);

        const authFormField = document.querySelector(\"#swagger-ui > section > div.swagger-ui > div:nth-child(2) > div.scheme-container > section > div > div > div.modal-ux > div > div > div.modal-ux-content > div > form > div:nth-child(1) > div > div:nth-child(5) > section > input[type=text]\");

        const authorizeSubmitButton = document.querySelector(\"#swagger-ui > section > div.swagger-ui > div:nth-child(2) > div.scheme-container > section > div > div > div.modal-ux > div > div > div.modal-ux-content > div > form > div.auth-btn-wrapper > button.btn.modal-btn.auth.authorize.button\");

        const nativeInputValueSetter = Object.getOwnPropertyDescriptor(window.HTMLInputElement.prototype, \"value\").set;
        nativeInputValueSetter.call(authFormField, `Bearer \${tokenElement.token}`);

        authFormField.dispatchEvent(new Event('input', { bubbles: true }));

        authorizeSubmitButton.dispatchEvent(mouseEvent);

        const closeAuthFormButton = document.querySelector(\"#swagger-ui > section > div.swagger-ui > div:nth-child(2) > div.scheme-container > section > div > div > div.modal-ux > div > div > div.modal-ux-content > div > form > div.auth-btn-wrapper > button.btn.modal-btn.auth.btn-done.button\");

        closeAuthFormButton.dispatchEvent(mouseEvent);
    }

    window.addEventListener('load', event => {
        tokenRequestContainer = document.querySelector('#operations-AdminUserToken-postCredentialsItem');

        new ClassWatcher(tokenRequestContainer, 'is-open', credentialsRequestReady, function(){});
    });
</script>

</body>
</html>
", "@SyliusApi/SwaggerUi/index.html.twig", "/Users/orkatz/Documents/Sylius-Standard-1.12/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/views/SwaggerUi/index.html.twig");
    }
}
