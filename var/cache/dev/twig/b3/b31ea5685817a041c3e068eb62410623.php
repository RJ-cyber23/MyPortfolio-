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

/* Home.html */
class __TwigTemplate_aa36dd725495e4f6cfa44fe797dcd071 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home.html"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"A modern portfolio home page — thoughtful design, reliable code.\">
    <title>Home · RJ Portfolio</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2224%22 fill=%22%234f46e5%22/><text x=%2250%22 y=%2268%22 font-size=%2254%22 font-family=%22Arial%22 font-weight=%22bold%22 fill=%22white%22 text-anchor=%22middle%22>R</text></svg>\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        yield "\">
</head>
<body>
    <a class=\"skip-link\" href=\"#main\">Skip to content</a>

    <header class=\"site-header\">
        <nav class=\"nav container\" aria-label=\"Main navigation\">
            <a class=\"brand\" href=\"";
        // line 19
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Root");
        yield "\">
                <img class=\"brand-logo\" src=\"";
        // line 20
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
                    <li><a class=\"active\" href=\"";
        // line 31
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Root");
        yield "\" aria-current=\"page\">Home</a></li>
                    <li class=\"dropdown\">
                        <button class=\"dropdown-toggle\" type=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\">
                            About Me
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"";
        // line 39
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"8\" r=\"4\"/><path d=\"M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1\"/></svg>
                                    About Me
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 45
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "#skills\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M12 2l2.4 5.2L20 8l-4 4 1 5.8-5-2.8-5 2.8L8 12 4 8l5.6-.8z\"/></svg>
                                    Skills
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 51
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M4 4h16v16H4z\"/><path d=\"M4 6l8 6 8-6\"/></svg>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 58
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Work");
        yield "\">Work</a></li>
                </ul>
                <a class=\"btn btn-primary nav-cta\" href=\"";
        // line 60
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\">Let\x27s talk</a>
            </div>
        </nav>
    </header>

    <main id=\"main\">
        <section class=\"hero\">
            <div class=\"container hero-inner\">
                <div class=\"hero-media\">
                    <div class=\"hero-photo-wrap\">
                        <img
                            class=\"hero-photo\"
                            src=\"";
        // line 72
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("picture/rj.jpg"), "html", null, true);
        yield "\"
                            alt=\"Profile portrait\"
                            width=\"896\"
                            height=\"885\"
                        >
                    </div>
                </div>

                <div class=\"hero-copy\" data-reveal>
                    <span class=\"hero-greeting\">Hello, I\x27m</span>
                    <h1 class=\"hero-name\">Rey John Marcelo</h1>
                    <p class=\"hero-role\">
                        Your
                        <span class=\"typed\" data-role=\"Software Developer\" aria-hidden=\"true\"></span><span class=\"typed-caret\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Software Developer</span>
                        <noscript><span aria-hidden=\"true\">Software Developer</span></noscript>
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer class=\"site-footer\">
        <div class=\"container footer-inner\">
            <p>&copy; <span id=\"year\">2026</span> RJ Portfolio. All rights reserved.</p>
            <ul class=\"footer-links\">
                <li><a href=\"";
        // line 98
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Root");
        yield "\">Home</a></li>
                <li><a href=\"";
        // line 99
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Work");
        yield "\">Work</a></li>
                <li><a href=\"";
        // line 100
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\">About Me</a></li>
                <li><a href=\"";
        // line 101
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script type=\"module\" src=\"";
        // line 106
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
        return "Home.html";
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
        return array (  202 => 106,  194 => 101,  190 => 100,  186 => 99,  182 => 98,  153 => 72,  138 => 60,  133 => 58,  123 => 51,  114 => 45,  105 => 39,  94 => 31,  80 => 20,  76 => 19,  66 => 12,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"A modern portfolio home page — thoughtful design, reliable code.\">
    <title>Home · RJ Portfolio</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2224%22 fill=%22%234f46e5%22/><text x=%2250%22 y=%2268%22 font-size=%2254%22 font-family=%22Arial%22 font-weight=%22bold%22 fill=%22white%22 text-anchor=%22middle%22>R</text></svg>\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/home.css\x27) }}\">
</head>
<body>
    <a class=\"skip-link\" href=\"#main\">Skip to content</a>

    <header class=\"site-header\">
        <nav class=\"nav container\" aria-label=\"Main navigation\">
            <a class=\"brand\" href=\"{{path(\x27Root\x27)}}\">
                <img class=\"brand-logo\" src=\"{{ asset(\x27picture/rj.jpg\x27) }}\" alt=\"\" width=\"896\" height=\"885\">
                RJ Portfolio
            </a>

            <button class=\"nav-toggle\" type=\"button\" aria-expanded=\"false\" aria-controls=\"nav-menu\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span></span><span></span><span></span>
            </button>

            <div class=\"nav-menu\" id=\"nav-menu\">
                <ul class=\"nav-links\">
                    <li><a class=\"active\" href=\"{{path(\x27Root\x27)}}\" aria-current=\"page\">Home</a></li>
                    <li class=\"dropdown\">
                        <button class=\"dropdown-toggle\" type=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\">
                            About Me
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"{{path(\x27About\x27)}}\">
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
                    <li><a href=\"{{path(\x27Work\x27)}}\">Work</a></li>
                </ul>
                <a class=\"btn btn-primary nav-cta\" href=\"{{ path(\x27Contact\x27) }}\">Let\x27s talk</a>
            </div>
        </nav>
    </header>

    <main id=\"main\">
        <section class=\"hero\">
            <div class=\"container hero-inner\">
                <div class=\"hero-media\">
                    <div class=\"hero-photo-wrap\">
                        <img
                            class=\"hero-photo\"
                            src=\"{{ asset(\x27picture/rj.jpg\x27) }}\"
                            alt=\"Profile portrait\"
                            width=\"896\"
                            height=\"885\"
                        >
                    </div>
                </div>

                <div class=\"hero-copy\" data-reveal>
                    <span class=\"hero-greeting\">Hello, I\x27m</span>
                    <h1 class=\"hero-name\">Rey John Marcelo</h1>
                    <p class=\"hero-role\">
                        Your
                        <span class=\"typed\" data-role=\"Software Developer\" aria-hidden=\"true\"></span><span class=\"typed-caret\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Software Developer</span>
                        <noscript><span aria-hidden=\"true\">Software Developer</span></noscript>
                    </p>
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
</html>", "Home.html", "/home/rj/myproject/templates/Home.html");
    }
}
