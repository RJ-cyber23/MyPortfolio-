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

/* AboutMe.html */
class __TwigTemplate_1718503a0fc8d9734020288875186c23 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AboutMe.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AboutMe.html"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"About RJ — back-end software developer building well-designed, maintainable systems.\">
    <title>About Me · RJ Portfolio</title>
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
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/about.css"), "html", null, true);
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
                        <button class=\"dropdown-toggle active\" type=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\">
                            About Me
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"";
        // line 40
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\" aria-current=\"page\">
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
                                <a href=\"";
        // line 52
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\">
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
                <a class=\"btn btn-primary nav-cta\" href=\"";
        // line 61
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\">Let\x27s talk</a>
            </div>
        </nav>
    </header>

    <main id=\"main\">
        <section class=\"hero about-hero\">
            <div class=\"container\">
                <div class=\"about-intro\" data-reveal>
                    <span class=\"hero-greeting\">About me</span>
                    <h1 class=\"hero-name\">Hi, I\x27m RJ.<br>I build systems that last.</h1>
                    <p class=\"hero-lead\">
                        I\x27m a back-end software developer at your service. I build
                        well-designed architecture for your system not just a working
                        system, but one that is built to be sustained and maintained.
                    </p>
                    <p class=\"hero-lead\">
                        From data models and REST APIs to containers and CI/CD pipelines,
                        I focus on the parts that keep a product stable long after launch.
                    </p>
                    <div class=\"hero-actions\">
                        <a class=\"btn btn-primary\" href=\"#skills\">
                            Explore my stack
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/><polyline points=\"12 5 19 12 12 19\"/></svg>
                        </a>
                        <a class=\"btn btn-ghost\" href=\"";
        // line 86
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\">Let\x27s talk</a>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"section section-alt\" id=\"skills\">
            <div class=\"container\">
                <div class=\"section-head\" data-reveal>
                    <span class=\"section-kicker\">My tech stack</span>
                    <h2>Tools I know well.</h2>
                    <p>Back-end focus, plus the surrounding tooling needed to ship and maintain dependable systems.</p>
                </div>

                <div class=\"stack-grid\">
                    <article class=\"card stack-card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"16 18 22 12 16 6\"/><polyline points=\"8 6 2 12 8 18\"/></svg>
                        </div>
                        <h3>Languages</h3>
                        <ul class=\"stack-list\">
                            <li><img class=\"stack-logo\" src=\"";
        // line 107
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/php.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">PHP</li>
                            <li><img class=\"stack-logo\" src=\"";
        // line 108
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/openjdk.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">Java</li>
                            <li><img class=\"stack-logo\" src=\"";
        // line 109
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/typescript.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">TypeScript</li>
                        </ul>
                    </article>

                    <article class=\"card stack-card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polygon points=\"12 2 2 7 12 12 22 7 12 2\"/><polyline points=\"2 17 12 22 22 17\"/><polyline points=\"2 12 12 17 22 12\"/></svg>
                        </div>
                        <h3>Frameworks</h3>
                        <ul class=\"stack-list\">
                            <li><img class=\"stack-logo\" src=\"";
        // line 119
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/laravel.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">Laravel</li>
                            <li><img class=\"stack-logo\" src=\"";
        // line 120
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/symfony.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">Symfony</li>
                            <li><img class=\"stack-logo\" src=\"";
        // line 121
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/springboot.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">Spring Boot</li>
                        </ul>
                    </article>

                    <article class=\"card stack-card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><ellipse cx=\"12\" cy=\"5\" rx=\"9\" ry=\"3\"/><path d=\"M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5\"/><path d=\"M3 12c0 1.66 4 3 9 3s9-1.34 9-3\"/></svg>
                        </div>
                        <h3>Data</h3>
                        <ul class=\"stack-list\">
                            <li><img class=\"stack-logo\" src=\"";
        // line 131
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/mariadb.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">MariaDB</li>
                            <li><img class=\"stack-logo\" src=\"";
        // line 132
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/phpmyadmin.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">phpMyAdmin</li>
                        </ul>
                    </article>

                    <article class=\"card stack-card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/><polyline points=\"9 12 11 14 15 10\"/></svg>
                        </div>
                        <h3>Delivery &amp; security</h3>
                        <ul class=\"stack-list\">
                            <li><img class=\"stack-logo\" src=\"";
        // line 142
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/docker.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">Docker</li>
                            <li><img class=\"stack-logo\" src=\"";
        // line 143
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/cicd.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">CI/CD</li>
                            <li><img class=\"stack-logo\" src=\"";
        // line 144
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/rest-api.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">REST API</li>
                            <li><img class=\"stack-logo\" src=\"";
        // line 145
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/jwt.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">JWT</li>
                        </ul>
                    </article>
                </div>

                <article class=\"ai-tools\" data-reveal>
                    <div class=\"ai-tools-intro\">
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M12 3l1.8 4.2L18 9l-4.2 1.8L12 15l-1.8-4.2L6 9l4.2-1.8z\"/><path d=\"M18 14l.8 1.9 2.2.8-2.2.8L18 20l-.8-2.5-2.2-.8 2.2-.8z\"/></svg>
                        </div>
                        <div>
                            <h3>AI-assisted coding</h3>
                            <p>I use AI tools to speed up research, refactoring, and delivery while keeping architecture and code quality under control.</p>
                        </div>
                    </div>
                    <ul class=\"stack-list\">
                        <li><img class=\"stack-logo\" src=\"";
        // line 161
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/opencode.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">OpenCode</li>
                        <li><img class=\"stack-logo\" src=\"";
        // line 162
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/antigravity.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">Antigravity</li>
                        <li><img class=\"stack-logo\" src=\"";
        // line 163
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/gemini.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">Gemini</li>
                        <li><img class=\"stack-logo\" src=\"";
        // line 164
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/openai.svg"), "html", null, true);
        yield "\" alt=\"\" width=\"18\" height=\"18\">ChatGPT</li>
                    </ul>
                </article>
            </div>
        </section>

        <section class=\"cta\" id=\"contact\">
            <div class=\"container\">
                <div class=\"cta-panel\" data-reveal>
                    <div>
                        <h2>Need a system that lasts?</h2>
                        <p>Let\x27s talk about the architecture behind it clear, maintainable, and ready to grow with you.</p>
                    </div>
                    <a class=\"btn btn-white btn-lg\" href=\"";
        // line 177
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\">
                        Start a conversation
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/><polyline points=\"12 5 19 12 12 19\"/></svg>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class=\"site-footer\">
        <div class=\"container footer-inner\">
            <p>&copy; <span id=\"year\">2026</span> RJ Portfolio. All rights reserved.</p>
            <ul class=\"footer-links\">
                <li><a href=\"";
        // line 190
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Root");
        yield "\">Home</a></li>
                <li><a href=\"";
        // line 191
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Work");
        yield "\">Work</a></li>
                <li><a href=\"";
        // line 192
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\">About Me</a></li>
                <li><a href=\"";
        // line 193
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script type=\"module\" src=\"";
        // line 198
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home.js"), "html", null, true);
        yield "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "AboutMe.html";
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
        return array (  348 => 198,  340 => 193,  336 => 192,  332 => 191,  328 => 190,  312 => 177,  296 => 164,  292 => 163,  288 => 162,  284 => 161,  265 => 145,  261 => 144,  257 => 143,  253 => 142,  240 => 132,  236 => 131,  223 => 121,  219 => 120,  215 => 119,  202 => 109,  198 => 108,  194 => 107,  170 => 86,  142 => 61,  137 => 59,  127 => 52,  118 => 46,  109 => 40,  98 => 32,  84 => 21,  80 => 20,  70 => 13,  66 => 12,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"About RJ — back-end software developer building well-designed, maintainable systems.\">
    <title>About Me · RJ Portfolio</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2224%22 fill=%22%234f46e5%22/><text x=%2250%22 y=%2268%22 font-size=%2254%22 font-family=%22Arial%22 font-weight=%22bold%22 fill=%22white%22 text-anchor=%22middle%22>R</text></svg>\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/home.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/about.css\x27) }}\">
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
                        <button class=\"dropdown-toggle active\" type=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\">
                            About Me
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"{{ path(\x27About\x27) }}\" aria-current=\"page\">
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
                                <a href=\"{{ path(\x27Contact\x27) }}\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M4 4h16v16H4z\"/><path d=\"M4 6l8 6 8-6\"/></svg>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href=\"{{ path(\x27Work\x27) }}\">Work</a></li>
                </ul>
                <a class=\"btn btn-primary nav-cta\" href=\"{{ path(\x27Contact\x27) }}\">Let\x27s talk</a>
            </div>
        </nav>
    </header>

    <main id=\"main\">
        <section class=\"hero about-hero\">
            <div class=\"container\">
                <div class=\"about-intro\" data-reveal>
                    <span class=\"hero-greeting\">About me</span>
                    <h1 class=\"hero-name\">Hi, I\x27m RJ.<br>I build systems that last.</h1>
                    <p class=\"hero-lead\">
                        I\x27m a back-end software developer at your service. I build
                        well-designed architecture for your system not just a working
                        system, but one that is built to be sustained and maintained.
                    </p>
                    <p class=\"hero-lead\">
                        From data models and REST APIs to containers and CI/CD pipelines,
                        I focus on the parts that keep a product stable long after launch.
                    </p>
                    <div class=\"hero-actions\">
                        <a class=\"btn btn-primary\" href=\"#skills\">
                            Explore my stack
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/><polyline points=\"12 5 19 12 12 19\"/></svg>
                        </a>
                        <a class=\"btn btn-ghost\" href=\"{{ path(\x27Contact\x27) }}\">Let\x27s talk</a>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"section section-alt\" id=\"skills\">
            <div class=\"container\">
                <div class=\"section-head\" data-reveal>
                    <span class=\"section-kicker\">My tech stack</span>
                    <h2>Tools I know well.</h2>
                    <p>Back-end focus, plus the surrounding tooling needed to ship and maintain dependable systems.</p>
                </div>

                <div class=\"stack-grid\">
                    <article class=\"card stack-card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"16 18 22 12 16 6\"/><polyline points=\"8 6 2 12 8 18\"/></svg>
                        </div>
                        <h3>Languages</h3>
                        <ul class=\"stack-list\">
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/php.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">PHP</li>
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/openjdk.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">Java</li>
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/typescript.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">TypeScript</li>
                        </ul>
                    </article>

                    <article class=\"card stack-card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polygon points=\"12 2 2 7 12 12 22 7 12 2\"/><polyline points=\"2 17 12 22 22 17\"/><polyline points=\"2 12 12 17 22 12\"/></svg>
                        </div>
                        <h3>Frameworks</h3>
                        <ul class=\"stack-list\">
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/laravel.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">Laravel</li>
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/symfony.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">Symfony</li>
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/springboot.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">Spring Boot</li>
                        </ul>
                    </article>

                    <article class=\"card stack-card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><ellipse cx=\"12\" cy=\"5\" rx=\"9\" ry=\"3\"/><path d=\"M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5\"/><path d=\"M3 12c0 1.66 4 3 9 3s9-1.34 9-3\"/></svg>
                        </div>
                        <h3>Data</h3>
                        <ul class=\"stack-list\">
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/mariadb.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">MariaDB</li>
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/phpmyadmin.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">phpMyAdmin</li>
                        </ul>
                    </article>

                    <article class=\"card stack-card\" data-reveal>
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/><polyline points=\"9 12 11 14 15 10\"/></svg>
                        </div>
                        <h3>Delivery &amp; security</h3>
                        <ul class=\"stack-list\">
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/docker.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">Docker</li>
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/cicd.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">CI/CD</li>
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/rest-api.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">REST API</li>
                            <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/jwt.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">JWT</li>
                        </ul>
                    </article>
                </div>

                <article class=\"ai-tools\" data-reveal>
                    <div class=\"ai-tools-intro\">
                        <div class=\"card-icon\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M12 3l1.8 4.2L18 9l-4.2 1.8L12 15l-1.8-4.2L6 9l4.2-1.8z\"/><path d=\"M18 14l.8 1.9 2.2.8-2.2.8L18 20l-.8-2.5-2.2-.8 2.2-.8z\"/></svg>
                        </div>
                        <div>
                            <h3>AI-assisted coding</h3>
                            <p>I use AI tools to speed up research, refactoring, and delivery while keeping architecture and code quality under control.</p>
                        </div>
                    </div>
                    <ul class=\"stack-list\">
                        <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/opencode.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">OpenCode</li>
                        <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/antigravity.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">Antigravity</li>
                        <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/gemini.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">Gemini</li>
                        <li><img class=\"stack-logo\" src=\"{{ asset(\x27logos/openai.svg\x27) }}\" alt=\"\" width=\"18\" height=\"18\">ChatGPT</li>
                    </ul>
                </article>
            </div>
        </section>

        <section class=\"cta\" id=\"contact\">
            <div class=\"container\">
                <div class=\"cta-panel\" data-reveal>
                    <div>
                        <h2>Need a system that lasts?</h2>
                        <p>Let\x27s talk about the architecture behind it clear, maintainable, and ready to grow with you.</p>
                    </div>
                    <a class=\"btn btn-white btn-lg\" href=\"{{ path(\x27Contact\x27) }}\">
                        Start a conversation
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/><polyline points=\"12 5 19 12 12 19\"/></svg>
                    </a>
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
                <li><a href=\"{{ path(\x27Contact\x27) }}\">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script type=\"module\" src=\"{{ asset(\x27js/home.js\x27) }}\"></script>
</body>
</html>", "AboutMe.html", "/home/rj/myproject/templates/AboutMe.html");
    }
}
