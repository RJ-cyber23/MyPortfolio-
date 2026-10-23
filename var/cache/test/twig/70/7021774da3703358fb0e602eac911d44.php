<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Contact.html */
class __TwigTemplate_aba1215fb7f0eb294c7e4f267778d60a extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact.html"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Contact RJ — let\x27s talk about the system you\x27re building, the problem you\x27re solving, and how to make it last.\">
    <title>Contact · RJ Portfolio</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2224%22 fill=%22%234f46e5%22/><text x=%2250%22 y=%2268%22 font-size=%2254%22 font-family=%22Arial%22 font-weight=%22bold%22 fill=%22white%22 text-anchor=%22middle%22>R</text></svg>\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/contact.css"), "html", null, true);
        yield "\">
</head>
<body>
    <a class=\"skip-link\" href=\"#main\">Skip to content</a>

    <header class=\"site-header\">
        <nav class=\"nav container\" aria-label=\"Main navigation\">
            <a class=\"brand\" href=\"";
        // line 20
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Root");
        yield "\">
                <img class=\"brand-logo\" src=\"";
        // line 21
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("picture/rj.jpg"), "html", null, true);
        yield "\" alt=\"\" width=\"896\" height=\"885\">
                RJ Portfolio
            </a>

            <button class=\"nav-toggle\" type=\"button\" aria-expanded=\"false\" aria-controls=\"nav-menu\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span></span><span></span><span></span>
            </button>

            <div class=\"nav-menu\" id=\"nav-menu\">
                <ul class=\"nav-links\">
                    <li><a href=\"";
        // line 32
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Root");
        yield "\">Home</a></li>
                    <li class=\"dropdown\">
                        <button class=\"dropdown-toggle\" type=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\">
                            About Me
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"";
        // line 40
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"8\" r=\"4\"/><path d=\"M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1\"/></svg>
                                    About Me
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 46
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "#skills\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M12 2l2.4 5.2L20 8l-4 4 1 5.8-5-2.8-5 2.8L8 12 4 8l5.6-.8z\"/></svg>
                                    Skills
                                </a>
                            </li>
                            <li>
                                <a class=\"active\" href=\"";
        // line 52
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\" aria-current=\"page\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M4 4h16v16H4z\"/><path d=\"M4 6l8 6 8-6\"/></svg>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 59
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Work");
        yield "\">Work</a></li>
                </ul>
                <a class=\"btn btn-primary nav-cta\" href=\"#get-in-touch\">Let\x27s talk</a>
            </div>
        </nav>
    </header>

    <main id=\"main\">
        <section class=\"hero contact-hero\">
            <div class=\"container\">
                <div class=\"contact-intro\" data-reveal>
                    <span class=\"hero-greeting\">Contact</span>
                    <h1 class=\"hero-name\">Let\x27s talk about<br>what you\x27re building.</h1>
                    <p class=\"hero-lead\">
                        Whether you\x27re starting a new system, cleaning up an existing one,
                        or looking for a back-end developer who cares about the architecture,
                        I\x27d like to hear about it.
                    </p>
                    <div class=\"hero-actions\">
                        <a class=\"btn btn-primary\" href=\"#get-in-touch\">
                            Send a message
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/><polyline points=\"12 5 19 12 12 19\"/></svg>
                        </a>
                        <a class=\"btn btn-ghost\" href=\"";
        // line 82
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Work");
        yield "\">See my work</a>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"section section-alt\" id=\"help\">
            <div class=\"container\">
                <div class=\"section-head\" data-reveal>
                    <span class=\"section-kicker\">How I can help</span>
                    <h2>From data model to deployment.</h2>
                    <p>
                        I focus on the back end and the delivery pipeline — the parts that
                        decide whether a system is easy to maintain or expensive to touch.
                    </p>
                </div>

                <div class=\"cards\">
                    <article class=\"card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"16 18 22 12 16 6\"/><polyline points=\"8 6 2 12 8 18\"/></svg>
                        </div>
                        <h3>Back-end development</h3>
                        <p>REST APIs, authentication, integrations, and business logic built to be clear, testable, and easy to extend.</p>
                    </article>

                    <article class=\"card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polygon points=\"12 2 2 7 12 12 22 7 12 2\"/><polyline points=\"2 17 12 22 22 17\"/><polyline points=\"2 12 12 17 22 12\"/></svg>
                        </div>
                        <h3>Architecture &amp; data</h3>
                        <p>Data models, database design, and service boundaries that keep a system understandable as it grows.</p>
                    </article>

                    <article class=\"card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/><polyline points=\"9 12 11 14 15 10\"/></svg>
                        </div>
                        <h3>Delivery &amp; maintenance</h3>
                        <p>Docker, CI/CD, and the practical work that keeps a product stable after launch.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class=\"section\" id=\"get-in-touch\">
            <div class=\"container\">
                <div class=\"contact-split\">
                    <div class=\"contact-copy\" data-reveal>
                        <span class=\"section-kicker\">Get in touch</span>
                        <h2>Tell me about the problem.</h2>
                        <p>
                            You don\x27t need a finished specification. A short description of
                            what you\x27re trying to do is enough to start.
                        </p>

                        <ul class=\"checklist\">
                            <li>
                                <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                                <div>
                                    <strong>What it needs to do</strong>
                                    The core workflow, who uses it, and the outcome you need.
                                </div>
                            </li>
                            <li>
                                <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                                <div>
                                    <strong>What you\x27re working with</strong>
                                    Your current stack, constraints, and any existing code.
                                </div>
                            </li>
                            <li>
                                <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                                <div>
                                    <strong>What “done” looks like</strong>
                                    The timeline, the must-haves, and what success means to you.
                                </div>
                            </li>
                        </ul>
                    </div>

                    <aside class=\"contact-card contact-form-card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M4 4h16v16H4z\"/><path d=\"M4 6l8 6 8-6\"/></svg>
                        </div>
                        <h3>Send a message</h3>
                        <p>Tell me a little about what you need. Your message goes straight to my inbox.</p>

                        ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "flashes", ["contact_success"], "method", false, false, false, 170));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 171
            yield "                            <div class=\"flash flash-success\" role=\"status\">";
            yield (string) $this->escaper->escape($context["message"], "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 173
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "flashes", ["contact_error"], "method", false, false, false, 173));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 174
            yield "                            <div class=\"flash flash-error\" role=\"alert\">";
            yield (string) $this->escaper->escape($context["message"], "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 176
        yield "
                        ";
        // line 177
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), 'form_start', ["attr" => ["class" => "contact-form", "novalidate" => "novalidate"]]);
        yield "
                            ";
        // line 178
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), 'errors');
        yield "

                            <div class=\"form-grid\">
                                <div class=\"form-field\">
                                    ";
        // line 182
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "name", [], "any", false, false, false, 182), 'label');
        yield "
                                    ";
        // line 183
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "name", [], "any", false, false, false, 183), 'widget');
        yield "
                                    ";
        // line 184
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "name", [], "any", false, false, false, 184), 'errors');
        yield "
                                </div>
                                <div class=\"form-field\">
                                    ";
        // line 187
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "email", [], "any", false, false, false, 187), 'label');
        yield "
                                    ";
        // line 188
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "email", [], "any", false, false, false, 188), 'widget');
        yield "
                                    ";
        // line 189
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "email", [], "any", false, false, false, 189), 'errors');
        yield "
                                </div>
                                <div class=\"form-field form-field-full\">
                                    ";
        // line 192
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "subject", [], "any", false, false, false, 192), 'label');
        yield "
                                    ";
        // line 193
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "subject", [], "any", false, false, false, 193), 'widget');
        yield "
                                    ";
        // line 194
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "subject", [], "any", false, false, false, 194), 'errors');
        yield "
                                </div>
                                <div class=\"form-field form-field-full\">
                                    ";
        // line 197
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "message", [], "any", false, false, false, 197), 'label');
        yield "
                                    ";
        // line 198
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "message", [], "any", false, false, false, 198), 'widget');
        yield "
                                    ";
        // line 199
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "message", [], "any", false, false, false, 199), 'errors');
        yield "
                                </div>
                            </div>

                            <button class=\"btn btn-primary btn-lg contact-submit\" type=\"submit\">
                                Send message
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/><polyline points=\"12 5 19 12 12 19\"/></svg>
                            </button>
                            <p class=\"contact-privacy\">Your details are only used to reply to this message.</p>
                        ";
        // line 208
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), 'form_end');
        yield "
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <footer class=\"site-footer\">
        <div class=\"container footer-inner\">
            <p>&copy; <span id=\"year\">2026</span> RJ Portfolio. All rights reserved.</p>
            <ul class=\"footer-links\">
                <li><a href=\"";
        // line 219
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Root");
        yield "\">Home</a></li>
                <li><a href=\"";
        // line 220
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Work");
        yield "\">Work</a></li>
                <li><a href=\"";
        // line 221
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\">About Me</a></li>
                <li><a href=\"";
        // line 222
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\" aria-current=\"page\">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script type=\"module\" src=\"";
        // line 227
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home.js"), "html", null, true);
        yield "\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Contact.html";
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
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  393 => 227,  385 => 222,  381 => 221,  377 => 220,  373 => 219,  359 => 208,  347 => 199,  343 => 198,  339 => 197,  333 => 194,  329 => 193,  325 => 192,  319 => 189,  315 => 188,  311 => 187,  305 => 184,  301 => 183,  297 => 182,  290 => 178,  286 => 177,  283 => 176,  273 => 174,  268 => 173,  258 => 171,  254 => 170,  163 => 82,  137 => 59,  127 => 52,  118 => 46,  109 => 40,  98 => 32,  84 => 21,  80 => 20,  70 => 13,  66 => 12,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Contact RJ — let\x27s talk about the system you\x27re building, the problem you\x27re solving, and how to make it last.\">
    <title>Contact · RJ Portfolio</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2224%22 fill=%22%234f46e5%22/><text x=%2250%22 y=%2268%22 font-size=%2254%22 font-family=%22Arial%22 font-weight=%22bold%22 fill=%22white%22 text-anchor=%22middle%22>R</text></svg>\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/home.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/contact.css\x27) }}\">
</head>
<body>
    <a class=\"skip-link\" href=\"#main\">Skip to content</a>

    <header class=\"site-header\">
        <nav class=\"nav container\" aria-label=\"Main navigation\">
            <a class=\"brand\" href=\"{{ path(\x27Root\x27) }}\">
                <img class=\"brand-logo\" src=\"{{ asset(\x27picture/rj.jpg\x27) }}\" alt=\"\" width=\"896\" height=\"885\">
                RJ Portfolio
            </a>

            <button class=\"nav-toggle\" type=\"button\" aria-expanded=\"false\" aria-controls=\"nav-menu\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span></span><span></span><span></span>
            </button>

            <div class=\"nav-menu\" id=\"nav-menu\">
                <ul class=\"nav-links\">
                    <li><a href=\"{{ path(\x27Root\x27) }}\">Home</a></li>
                    <li class=\"dropdown\">
                        <button class=\"dropdown-toggle\" type=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\">
                            About Me
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"{{ path(\x27About\x27) }}\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"8\" r=\"4\"/><path d=\"M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1\"/></svg>
                                    About Me
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path(\x27About\x27) }}#skills\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M12 2l2.4 5.2L20 8l-4 4 1 5.8-5-2.8-5 2.8L8 12 4 8l5.6-.8z\"/></svg>
                                    Skills
                                </a>
                            </li>
                            <li>
                                <a class=\"active\" href=\"{{ path(\x27Contact\x27) }}\" aria-current=\"page\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M4 4h16v16H4z\"/><path d=\"M4 6l8 6 8-6\"/></svg>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href=\"{{ path(\x27Work\x27) }}\">Work</a></li>
                </ul>
                <a class=\"btn btn-primary nav-cta\" href=\"#get-in-touch\">Let\x27s talk</a>
            </div>
        </nav>
    </header>

    <main id=\"main\">
        <section class=\"hero contact-hero\">
            <div class=\"container\">
                <div class=\"contact-intro\" data-reveal>
                    <span class=\"hero-greeting\">Contact</span>
                    <h1 class=\"hero-name\">Let\x27s talk about<br>what you\x27re building.</h1>
                    <p class=\"hero-lead\">
                        Whether you\x27re starting a new system, cleaning up an existing one,
                        or looking for a back-end developer who cares about the architecture,
                        I\x27d like to hear about it.
                    </p>
                    <div class=\"hero-actions\">
                        <a class=\"btn btn-primary\" href=\"#get-in-touch\">
                            Send a message
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/><polyline points=\"12 5 19 12 12 19\"/></svg>
                        </a>
                        <a class=\"btn btn-ghost\" href=\"{{ path(\x27Work\x27) }}\">See my work</a>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"section section-alt\" id=\"help\">
            <div class=\"container\">
                <div class=\"section-head\" data-reveal>
                    <span class=\"section-kicker\">How I can help</span>
                    <h2>From data model to deployment.</h2>
                    <p>
                        I focus on the back end and the delivery pipeline — the parts that
                        decide whether a system is easy to maintain or expensive to touch.
                    </p>
                </div>

                <div class=\"cards\">
                    <article class=\"card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"16 18 22 12 16 6\"/><polyline points=\"8 6 2 12 8 18\"/></svg>
                        </div>
                        <h3>Back-end development</h3>
                        <p>REST APIs, authentication, integrations, and business logic built to be clear, testable, and easy to extend.</p>
                    </article>

                    <article class=\"card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polygon points=\"12 2 2 7 12 12 22 7 12 2\"/><polyline points=\"2 17 12 22 22 17\"/><polyline points=\"2 12 12 17 22 12\"/></svg>
                        </div>
                        <h3>Architecture &amp; data</h3>
                        <p>Data models, database design, and service boundaries that keep a system understandable as it grows.</p>
                    </article>

                    <article class=\"card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/><polyline points=\"9 12 11 14 15 10\"/></svg>
                        </div>
                        <h3>Delivery &amp; maintenance</h3>
                        <p>Docker, CI/CD, and the practical work that keeps a product stable after launch.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class=\"section\" id=\"get-in-touch\">
            <div class=\"container\">
                <div class=\"contact-split\">
                    <div class=\"contact-copy\" data-reveal>
                        <span class=\"section-kicker\">Get in touch</span>
                        <h2>Tell me about the problem.</h2>
                        <p>
                            You don\x27t need a finished specification. A short description of
                            what you\x27re trying to do is enough to start.
                        </p>

                        <ul class=\"checklist\">
                            <li>
                                <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                                <div>
                                    <strong>What it needs to do</strong>
                                    The core workflow, who uses it, and the outcome you need.
                                </div>
                            </li>
                            <li>
                                <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                                <div>
                                    <strong>What you\x27re working with</strong>
                                    Your current stack, constraints, and any existing code.
                                </div>
                            </li>
                            <li>
                                <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                                <div>
                                    <strong>What “done” looks like</strong>
                                    The timeline, the must-haves, and what success means to you.
                                </div>
                            </li>
                        </ul>
                    </div>

                    <aside class=\"contact-card contact-form-card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M4 4h16v16H4z\"/><path d=\"M4 6l8 6 8-6\"/></svg>
                        </div>
                        <h3>Send a message</h3>
                        <p>Tell me a little about what you need. Your message goes straight to my inbox.</p>

                        {% for message in app.flashes(\x27contact_success\x27) %}
                            <div class=\"flash flash-success\" role=\"status\">{{ message }}</div>
                        {% endfor %}
                        {% for message in app.flashes(\x27contact_error\x27) %}
                            <div class=\"flash flash-error\" role=\"alert\">{{ message }}</div>
                        {% endfor %}

                        {{ form_start(form, {attr: {class: \x27contact-form\x27, novalidate: \x27novalidate\x27}}) }}
                            {{ form_errors(form) }}

                            <div class=\"form-grid\">
                                <div class=\"form-field\">
                                    {{ form_label(form.name) }}
                                    {{ form_widget(form.name) }}
                                    {{ form_errors(form.name) }}
                                </div>
                                <div class=\"form-field\">
                                    {{ form_label(form.email) }}
                                    {{ form_widget(form.email) }}
                                    {{ form_errors(form.email) }}
                                </div>
                                <div class=\"form-field form-field-full\">
                                    {{ form_label(form.subject) }}
                                    {{ form_widget(form.subject) }}
                                    {{ form_errors(form.subject) }}
                                </div>
                                <div class=\"form-field form-field-full\">
                                    {{ form_label(form.message) }}
                                    {{ form_widget(form.message) }}
                                    {{ form_errors(form.message) }}
                                </div>
                            </div>

                            <button class=\"btn btn-primary btn-lg contact-submit\" type=\"submit\">
                                Send message
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/><polyline points=\"12 5 19 12 12 19\"/></svg>
                            </button>
                            <p class=\"contact-privacy\">Your details are only used to reply to this message.</p>
                        {{ form_end(form) }}
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <footer class=\"site-footer\">
        <div class=\"container footer-inner\">
            <p>&copy; <span id=\"year\">2026</span> RJ Portfolio. All rights reserved.</p>
            <ul class=\"footer-links\">
                <li><a href=\"{{ path(\x27Root\x27) }}\">Home</a></li>
                <li><a href=\"{{ path(\x27Work\x27) }}\">Work</a></li>
                <li><a href=\"{{ path(\x27About\x27) }}\">About Me</a></li>
                <li><a href=\"{{ path(\x27Contact\x27) }}\" aria-current=\"page\">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script type=\"module\" src=\"{{ asset(\x27js/home.js\x27) }}\"></script>
</body>
</html>
", "Contact.html", "/home/rj/myproject/templates/Contact.html");
    }
}
