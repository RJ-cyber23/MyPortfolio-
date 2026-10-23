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

/* Work.html */
class __TwigTemplate_e83e2e69ff4c03c723b05a9c2d591139 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Work.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Work.html"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Selected work by RJ — the Barangay Complaint Management System and a Point of Sale system.\">
    <title>Work · RJ Portfolio</title>
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
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/work.css"), "html", null, true);
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
                    <li><a class=\"active\" href=\"";
        // line 59
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Work");
        yield "\" aria-current=\"page\">Work</a></li>
                </ul>
                <a class=\"btn btn-primary nav-cta\" href=\"";
        // line 61
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\">Let\x27s talk</a>
            </div>
        </nav>
    </header>

    <main id=\"main\">
        <section class=\"hero work-hero\">
            <div class=\"container\">
                <div class=\"work-intro\" data-reveal>
                    <span class=\"hero-greeting\">Selected work</span>
                    <h1 class=\"hero-name\">Work that solves<br>real problems.</h1>
                    <p class=\"hero-lead\">
                        A selection of systems I\x27ve built — focused on clear workflows,
                        dependable back ends, and interfaces people can use without a manual.
                    </p>
                </div>
            </div>
        </section>

        <section class=\"section\" id=\"projects\">
            <div class=\"container\">
                <article class=\"project\">
                    <div class=\"project-head\" data-reveal>
                        <div>
                            <span class=\"project-kicker\">Featured project · 2025</span>
                            <h2>Barangay Complaint Management System</h2>
                            <p>
                                A transparent platform where residents file and track complaints
                                online while barangay officials manage, update, and resolve them —
                                from Pending to In Process to Resolved, in real time.
                            </p>
                        </div>
                        <ul class=\"project-tags\">
                            <li>Web application</li>
                            <li>Complaint management</li>
                            <li>Role-based portals</li>
                        </ul>
                    </div>

                    <div class=\"slider\" data-slider role=\"region\" aria-roledescription=\"carousel\" aria-label=\"Barangay Complaint Management System screenshots\" data-reveal>
                        <div class=\"slider-frame\">
                            <div class=\"slider-bar\" aria-hidden=\"true\">
                                <i></i><i></i><i></i>
                                <span>BMS · Project preview</span>
                            </div>
                            <div class=\"slider-stage\">
                                <div class=\"slider-viewport\" data-slider-track tabindex=\"0\">
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"1 of 5\">
                                        <img src=\"";
        // line 109
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Project/BMS/1777981111014.jpeg"), "html", null, true);
        yield "\" alt=\"Landing page of the Barangay Complaint Management System\" width=\"1280\" height=\"656\" loading=\"eager\" fetchpriority=\"high\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"2 of 5\">
                                        <img src=\"";
        // line 112
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Project/BMS/1777981109871.jpeg"), "html", null, true);
        yield "\" alt=\"Portal selection screen for residents and employees\" width=\"1280\" height=\"656\" loading=\"lazy\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"3 of 5\">
                                        <img src=\"";
        // line 115
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Project/BMS/1777981111270.jpeg"), "html", null, true);
        yield "\" alt=\"Resident portal login screen\" width=\"1280\" height=\"656\" loading=\"lazy\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"4 of 5\">
                                        <img src=\"";
        // line 118
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Project/BMS/1777981111265.jpeg"), "html", null, true);
        yield "\" alt=\"Employee portal login screen\" width=\"1280\" height=\"656\" loading=\"lazy\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"5 of 5\">
                                        <img src=\"";
        // line 121
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Project/BMS/1777981110210.jpeg"), "html", null, true);
        yield "\" alt=\"Resident dashboard with complaint status cards and a complaints table\" width=\"1280\" height=\"656\" loading=\"lazy\">
                                    </figure>
                                </div>

                                <button class=\"slider-btn slider-prev\" type=\"button\" data-slider-prev aria-label=\"Previous screenshot\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"15 18 9 12 15 6\"/></svg>
                                </button>
                                <button class=\"slider-btn slider-next\" type=\"button\" data-slider-next aria-label=\"Next screenshot\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"9 18 15 12 9 6\"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class=\"slider-footer\">
                            <div class=\"slider-dots\">
                                <button class=\"slider-dot is-active\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 1\" aria-current=\"true\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 2\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 3\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 4\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 5\"></button>
                            </div>
                            <p class=\"slider-count\"><span data-slider-current>1</span> / <span data-slider-total>5</span></p>
                        </div>
                    </div>

                    <ul class=\"checklist project-highlights\" data-reveal>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Two focused portals</strong>
                                Separate resident and employee experiences, each built around the tasks people actually need.
                            </div>
                        </li>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Real-time status tracking</strong>
                                Residents can see whether a complaint is Pending, In Process, or Resolved.
                            </div>
                        </li>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Officials in control</strong>
                                Barangay staff and admins manage residents, complaints, and system data from one place.
                            </div>
                        </li>
                    </ul>
                </article>

                <article class=\"project\">
                    <div class=\"project-head\" data-reveal>
                        <div>
                            <span class=\"project-kicker\">Featured project · 2026</span>
                            <h2>Point of Sale System</h2>
                            <p>
                                A web-based point of sale that brings products, inventory,
                                customers, and sales reporting into one place — so day-to-day
                                transactions stay fast and the back office stays organized.
                            </p>
                        </div>
                        <ul class=\"project-tags\">
                            <li>Point of sale</li>
                            <li>Inventory</li>
                            <li>Sales dashboard</li>
                        </ul>
                    </div>

                    <div class=\"slider\" data-slider role=\"region\" aria-roledescription=\"carousel\" aria-label=\"Point of Sale System screenshots\" data-reveal>
                        <div class=\"slider-frame\">
                            <div class=\"slider-bar\" aria-hidden=\"true\">
                                <i></i><i></i><i></i>
                                <span>POS · Project preview</span>
                            </div>
                            <div class=\"slider-stage\">
                                <div class=\"slider-viewport\" data-slider-track tabindex=\"0\">
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"1 of 3\">
                                        <img src=\"";
        // line 198
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Project/POS/pos-dashboard.png"), "html", null, true);
        yield "\" alt=\"POS dashboard with sales charts and system navigation\" width=\"1366\" height=\"768\" loading=\"lazy\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"2 of 3\">
                                        <img src=\"";
        // line 201
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Project/POS/pos-products.png"), "html", null, true);
        yield "\" alt=\"Product management list showing categories, brands, and suppliers\" width=\"1366\" height=\"768\" loading=\"lazy\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"3 of 3\">
                                        <img src=\"";
        // line 204
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Project/POS/pos-add-product.png"), "html", null, true);
        yield "\" alt=\"Add product form for creating a new inventory item\" width=\"1366\" height=\"768\" loading=\"lazy\">
                                    </figure>
                                </div>

                                <button class=\"slider-btn slider-prev\" type=\"button\" data-slider-prev aria-label=\"Previous screenshot\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"15 18 9 12 15 6\"/></svg>
                                </button>
                                <button class=\"slider-btn slider-next\" type=\"button\" data-slider-next aria-label=\"Next screenshot\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"9 18 15 12 9 6\"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class=\"slider-footer\">
                            <div class=\"slider-dots\">
                                <button class=\"slider-dot is-active\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 1\" aria-current=\"true\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 2\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 3\"></button>
                            </div>
                            <p class=\"slider-count\"><span data-slider-current>1</span> / <span data-slider-total>3</span></p>
                        </div>
                    </div>

                    <ul class=\"checklist project-highlights\" data-reveal>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Product &amp; inventory management</strong>
                                Add, edit, and organize products with categories, brands, and supplier records.
                            </div>
                        </li>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Sales at a glance</strong>
                                Dashboard charts summarize sales and performance trends in real time.
                            </div>
                        </li>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Customer records</strong>
                                Keep customer details and purchasing activity organized in one place.
                            </div>
                        </li>
                    </ul>
                </article>
            </div>
        </section>

        <section class=\"cta\" id=\"contact\">
            <div class=\"container\">
                <div class=\"cta-panel\" data-reveal>
                    <div>
                        <h2>Have a system to build?</h2>
                        <p>Let\x27s turn a messy process into something clear, reliable, and easy to maintain.</p>
                    </div>
                    <a class=\"btn btn-white btn-lg\" href=\"";
        // line 261
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
        // line 274
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Root");
        yield "\">Home</a></li>
                <li><a href=\"";
        // line 275
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Work");
        yield "\">Work</a></li>
                <li><a href=\"";
        // line 276
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("About");
        yield "\">About Me</a></li>
                <li><a href=\"";
        // line 277
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        yield "\">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script type=\"module\" src=\"";
        // line 282
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home.js"), "html", null, true);
        yield "\"></script>
    <script type=\"module\" src=\"";
        // line 283
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/work.js"), "html", null, true);
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
        return "Work.html";
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
        return array (  409 => 283,  405 => 282,  397 => 277,  393 => 276,  389 => 275,  385 => 274,  369 => 261,  309 => 204,  303 => 201,  297 => 198,  217 => 121,  211 => 118,  205 => 115,  199 => 112,  193 => 109,  142 => 61,  137 => 59,  127 => 52,  118 => 46,  109 => 40,  98 => 32,  84 => 21,  80 => 20,  70 => 13,  66 => 12,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Selected work by RJ — the Barangay Complaint Management System and a Point of Sale system.\">
    <title>Work · RJ Portfolio</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2224%22 fill=%22%234f46e5%22/><text x=%2250%22 y=%2268%22 font-size=%2254%22 font-family=%22Arial%22 font-weight=%22bold%22 fill=%22white%22 text-anchor=%22middle%22>R</text></svg>\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/home.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/work.css\x27) }}\">
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
                                <a href=\"{{ path(\x27Contact\x27) }}\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><path d=\"M4 4h16v16H4z\"/><path d=\"M4 6l8 6 8-6\"/></svg>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a class=\"active\" href=\"{{ path(\x27Work\x27) }}\" aria-current=\"page\">Work</a></li>
                </ul>
                <a class=\"btn btn-primary nav-cta\" href=\"{{ path(\x27Contact\x27) }}\">Let\x27s talk</a>
            </div>
        </nav>
    </header>

    <main id=\"main\">
        <section class=\"hero work-hero\">
            <div class=\"container\">
                <div class=\"work-intro\" data-reveal>
                    <span class=\"hero-greeting\">Selected work</span>
                    <h1 class=\"hero-name\">Work that solves<br>real problems.</h1>
                    <p class=\"hero-lead\">
                        A selection of systems I\x27ve built — focused on clear workflows,
                        dependable back ends, and interfaces people can use without a manual.
                    </p>
                </div>
            </div>
        </section>

        <section class=\"section\" id=\"projects\">
            <div class=\"container\">
                <article class=\"project\">
                    <div class=\"project-head\" data-reveal>
                        <div>
                            <span class=\"project-kicker\">Featured project · 2025</span>
                            <h2>Barangay Complaint Management System</h2>
                            <p>
                                A transparent platform where residents file and track complaints
                                online while barangay officials manage, update, and resolve them —
                                from Pending to In Process to Resolved, in real time.
                            </p>
                        </div>
                        <ul class=\"project-tags\">
                            <li>Web application</li>
                            <li>Complaint management</li>
                            <li>Role-based portals</li>
                        </ul>
                    </div>

                    <div class=\"slider\" data-slider role=\"region\" aria-roledescription=\"carousel\" aria-label=\"Barangay Complaint Management System screenshots\" data-reveal>
                        <div class=\"slider-frame\">
                            <div class=\"slider-bar\" aria-hidden=\"true\">
                                <i></i><i></i><i></i>
                                <span>BMS · Project preview</span>
                            </div>
                            <div class=\"slider-stage\">
                                <div class=\"slider-viewport\" data-slider-track tabindex=\"0\">
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"1 of 5\">
                                        <img src=\"{{ asset(\x27Project/BMS/1777981111014.jpeg\x27) }}\" alt=\"Landing page of the Barangay Complaint Management System\" width=\"1280\" height=\"656\" loading=\"eager\" fetchpriority=\"high\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"2 of 5\">
                                        <img src=\"{{ asset(\x27Project/BMS/1777981109871.jpeg\x27) }}\" alt=\"Portal selection screen for residents and employees\" width=\"1280\" height=\"656\" loading=\"lazy\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"3 of 5\">
                                        <img src=\"{{ asset(\x27Project/BMS/1777981111270.jpeg\x27) }}\" alt=\"Resident portal login screen\" width=\"1280\" height=\"656\" loading=\"lazy\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"4 of 5\">
                                        <img src=\"{{ asset(\x27Project/BMS/1777981111265.jpeg\x27) }}\" alt=\"Employee portal login screen\" width=\"1280\" height=\"656\" loading=\"lazy\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"5 of 5\">
                                        <img src=\"{{ asset(\x27Project/BMS/1777981110210.jpeg\x27) }}\" alt=\"Resident dashboard with complaint status cards and a complaints table\" width=\"1280\" height=\"656\" loading=\"lazy\">
                                    </figure>
                                </div>

                                <button class=\"slider-btn slider-prev\" type=\"button\" data-slider-prev aria-label=\"Previous screenshot\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"15 18 9 12 15 6\"/></svg>
                                </button>
                                <button class=\"slider-btn slider-next\" type=\"button\" data-slider-next aria-label=\"Next screenshot\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"9 18 15 12 9 6\"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class=\"slider-footer\">
                            <div class=\"slider-dots\">
                                <button class=\"slider-dot is-active\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 1\" aria-current=\"true\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 2\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 3\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 4\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 5\"></button>
                            </div>
                            <p class=\"slider-count\"><span data-slider-current>1</span> / <span data-slider-total>5</span></p>
                        </div>
                    </div>

                    <ul class=\"checklist project-highlights\" data-reveal>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Two focused portals</strong>
                                Separate resident and employee experiences, each built around the tasks people actually need.
                            </div>
                        </li>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Real-time status tracking</strong>
                                Residents can see whether a complaint is Pending, In Process, or Resolved.
                            </div>
                        </li>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Officials in control</strong>
                                Barangay staff and admins manage residents, complaints, and system data from one place.
                            </div>
                        </li>
                    </ul>
                </article>

                <article class=\"project\">
                    <div class=\"project-head\" data-reveal>
                        <div>
                            <span class=\"project-kicker\">Featured project · 2026</span>
                            <h2>Point of Sale System</h2>
                            <p>
                                A web-based point of sale that brings products, inventory,
                                customers, and sales reporting into one place — so day-to-day
                                transactions stay fast and the back office stays organized.
                            </p>
                        </div>
                        <ul class=\"project-tags\">
                            <li>Point of sale</li>
                            <li>Inventory</li>
                            <li>Sales dashboard</li>
                        </ul>
                    </div>

                    <div class=\"slider\" data-slider role=\"region\" aria-roledescription=\"carousel\" aria-label=\"Point of Sale System screenshots\" data-reveal>
                        <div class=\"slider-frame\">
                            <div class=\"slider-bar\" aria-hidden=\"true\">
                                <i></i><i></i><i></i>
                                <span>POS · Project preview</span>
                            </div>
                            <div class=\"slider-stage\">
                                <div class=\"slider-viewport\" data-slider-track tabindex=\"0\">
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"1 of 3\">
                                        <img src=\"{{ asset(\x27Project/POS/pos-dashboard.png\x27) }}\" alt=\"POS dashboard with sales charts and system navigation\" width=\"1366\" height=\"768\" loading=\"lazy\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"2 of 3\">
                                        <img src=\"{{ asset(\x27Project/POS/pos-products.png\x27) }}\" alt=\"Product management list showing categories, brands, and suppliers\" width=\"1366\" height=\"768\" loading=\"lazy\">
                                    </figure>
                                    <figure class=\"slide\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"3 of 3\">
                                        <img src=\"{{ asset(\x27Project/POS/pos-add-product.png\x27) }}\" alt=\"Add product form for creating a new inventory item\" width=\"1366\" height=\"768\" loading=\"lazy\">
                                    </figure>
                                </div>

                                <button class=\"slider-btn slider-prev\" type=\"button\" data-slider-prev aria-label=\"Previous screenshot\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"15 18 9 12 15 6\"/></svg>
                                </button>
                                <button class=\"slider-btn slider-next\" type=\"button\" data-slider-next aria-label=\"Next screenshot\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"9 18 15 12 9 6\"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class=\"slider-footer\">
                            <div class=\"slider-dots\">
                                <button class=\"slider-dot is-active\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 1\" aria-current=\"true\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 2\"></button>
                                <button class=\"slider-dot\" type=\"button\" data-slider-dot aria-label=\"Go to screenshot 3\"></button>
                            </div>
                            <p class=\"slider-count\"><span data-slider-current>1</span> / <span data-slider-total>3</span></p>
                        </div>
                    </div>

                    <ul class=\"checklist project-highlights\" data-reveal>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Product &amp; inventory management</strong>
                                Add, edit, and organize products with categories, brands, and supplier records.
                            </div>
                        </li>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Sales at a glance</strong>
                                Dashboard charts summarize sales and performance trends in real time.
                            </div>
                        </li>
                        <li>
                            <span class=\"tick\"><svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\"><polyline points=\"20 6 9 17 4 12\"/></svg></span>
                            <div>
                                <strong>Customer records</strong>
                                Keep customer details and purchasing activity organized in one place.
                            </div>
                        </li>
                    </ul>
                </article>
            </div>
        </section>

        <section class=\"cta\" id=\"contact\">
            <div class=\"container\">
                <div class=\"cta-panel\" data-reveal>
                    <div>
                        <h2>Have a system to build?</h2>
                        <p>Let\x27s turn a messy process into something clear, reliable, and easy to maintain.</p>
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
    <script type=\"module\" src=\"{{ asset(\x27js/work.js\x27) }}\"></script>
</body>
</html>", "Work.html", "/home/rj/myproject/templates/Work.html");
    }
}
