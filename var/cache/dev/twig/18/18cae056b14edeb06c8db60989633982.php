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

/* base.html.twig */
class __TwigTemplate_a78c559a2f9581bcee7f9767cf9471ea extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
";
        // line 3
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <link rel=\"icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/brand-logos/favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\">


    <!-- BOOTSTRAP CSS -->
    <link  id=\"style\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- ICONS CSS -->
    <link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    
    <!-- STYLES CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">

    <!-- MAIN JS -->
    <script src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- NODE WAVES CSS -->
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/node-waves/waves.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"> 

    <!-- SIMPLEBAR CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/simplebar/simplebar.min.css"), "html", null, true);
        yield "\">

    <!-- COLOR PICKER CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/flatpickr/flatpickr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@simonwep/pickr/themes/nano.min.css"), "html", null, true);
        yield "\">

    <!-- MAIN JS -->
    ";
        // line 37
        yield "

    <!-- CHOICES CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/choices.js/public/assets/styles/choices.min.css"), "html", null, true);
        yield "\">
    <!-- CHOICES JS -->
    <script src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/choices.js/public/assets/scripts/choices.min.js"), "html", null, true);
        yield "\"></script>
</head>
<body>
    ";
        // line 46
        yield "    ";
        yield from         $this->loadTemplate("pages/topMenu.html.twig", "base.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "
    ";
        // line 49
        yield "    ";
        yield from         $this->loadTemplate("pages/leftMenu.html.twig", "base.html.twig", 49)->unwrap()->yield($context);
        // line 50
        yield "
    ";
        // line 52
        yield "    <div class=\"container\">
        ";
        // line 53
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 54
        yield "    </div>

    ";
        // line 57
        yield "
    <script src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/alerts.js"), "html", null, true);
        yield "\"></script>

    <!-- POPPER JS -->
    <script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@popperjs/core/umd/popper.min.js"), "html", null, true);
        yield "\"></script>

    <!-- BOOTSTRAP JS -->
    <script src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

    <!-- NODE WAVES JS -->
    <script src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/node-waves/waves.min.js"), "html", null, true);
        yield "\"></script>

    <!-- SIMPLEBAR JS -->
    <script src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/simplebar/simplebar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/simplebar.js"), "html", null, true);
        yield "\"></script>

    <!-- COLOR PICKER JS -->
    <script src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@simonwep/pickr/pickr.es5.min.js"), "html", null, true);
        yield "\"></script>

    <!-- STICKY JS -->
    <script src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sticky.js"), "html", null, true);
        yield "\"></script>

    <!-- DEFAULTMENU JS -->
    <script src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/defaultmenu.js"), "html", null, true);
        yield "\"></script>

    <!-- CUSTOM JS -->
    <script src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        yield "\"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <script src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom-switcher.js"), "html", null, true);
        yield "\"></script>

    <!-- POPPER JS -->
    <script src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@popperjs/core/umd/popper.min.js"), "html", null, true);
        yield "\"></script>

    <!-- BOOTSTRAP JS -->
    <script src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

    <!-- NODE WAVES JS -->
    <script src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/node-waves/waves.min.js"), "html", null, true);
        yield "\"></script>

    <!-- SIMPLEBAR JS -->
    <script src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/simplebar/simplebar.min.js"), "html", null, true);
        yield "\"></script>

    <!-- COLOR PICKER JS -->
    <script src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@simonwep/pickr/pickr.es5.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Apex Charts JS -->
    <script src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/apexcharts/apexcharts.min.js"), "html", null, true);
        yield "\"></script>

    <!-- JSVector Maps JS -->
    <script src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jsvectormap.js"), "html", null, true);
        yield "\"></script>

    <!-- JSVector Maps MapsJS -->
    <script src=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/jsvectormap/maps/world-merc.js"), "html", null, true);
        yield "\"></script>

    <!-- Dashboard --> 
    <script src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gaming-dashboard.js"), "html", null, true);
        yield "\"></script>
    <!-- Internal Landing JS -->
    <script src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/landing.js"), "html", null, true);
        yield "\"></script>
    <!-- END SCRIPTS -->

</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "SCIFI-Symfony7";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  299 => 53,  285 => 8,  272 => 115,  267 => 113,  261 => 110,  255 => 107,  249 => 104,  243 => 101,  237 => 98,  231 => 95,  225 => 92,  219 => 89,  213 => 86,  207 => 83,  201 => 80,  195 => 77,  189 => 74,  183 => 71,  179 => 70,  173 => 67,  167 => 64,  161 => 61,  155 => 58,  152 => 57,  148 => 54,  146 => 53,  143 => 52,  140 => 50,  137 => 49,  134 => 47,  131 => 46,  125 => 42,  120 => 40,  115 => 37,  109 => 33,  105 => 32,  99 => 29,  93 => 26,  87 => 23,  81 => 20,  75 => 17,  69 => 14,  62 => 10,  57 => 8,  50 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
{# templates/base.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}SCIFI-Symfony7{% endblock %}</title>

    <link rel=\"icon\" href=\"{{ asset ('assets/images/brand-logos/favicon.ico') }}\" type=\"image/x-icon\">


    <!-- BOOTSTRAP CSS -->
    <link  id=\"style\" href=\"{{ asset ('libs/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- ICONS CSS -->
    <link href=\"{{ asset('css/icons.css') }}\" rel=\"stylesheet\">
    
    <!-- STYLES CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">

    <!-- MAIN JS -->
    <script src=\"{{ asset ('js/main.js') }}\"></script>

    <!-- NODE WAVES CSS -->
    <link href=\"{{ asset ('libs/node-waves/waves.min.css') }}\" rel=\"stylesheet\"> 

    <!-- SIMPLEBAR CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset ('libs/simplebar/simplebar.min.css') }}\">

    <!-- COLOR PICKER CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset ('libs/flatpickr/flatpickr.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('libs/@simonwep/pickr/themes/nano.min.css') }}\">

    <!-- MAIN JS -->
    {# // <script src=\"{{asset ('js/authentication-main.js')}}\"></script> #}


    <!-- CHOICES CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset ('libs/choices.js/public/assets/styles/choices.min.css') }}\">
    <!-- CHOICES JS -->
    <script src=\"{{asset ('libs/choices.js/public/assets/scripts/choices.min.js')}}\"></script>
</head>
<body>
    {# TopMenu #}
    {% include 'pages/topMenu.html.twig' %}

    {# LeftMenu #}
    {% include 'pages/leftMenu.html.twig' %}

    {# Main #}
    <div class=\"container\">
        {% block body %}{% endblock %}
    </div>

    {# Here are Script JS #}

    <script src=\"{{asset ('js/alerts.js') }}\"></script>

    <!-- POPPER JS -->
    <script src=\"{{ asset ('libs/@popperjs/core/umd/popper.min.js') }}\"></script>

    <!-- BOOTSTRAP JS -->
    <script src=\"{{ asset ('libs/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

    <!-- NODE WAVES JS -->
    <script src=\"{{ asset ('libs/node-waves/waves.min.js') }}\"></script>

    <!-- SIMPLEBAR JS -->
    <script src=\"{{ asset ('libs/simplebar/simplebar.min.js') }}\"></script>
    <script src=\"{{ asset ('js/simplebar.js') }}\"></script>

    <!-- COLOR PICKER JS -->
    <script src=\"{{ asset ('libs/@simonwep/pickr/pickr.es5.min.js') }}\"></script>

    <!-- STICKY JS -->
    <script src=\"{{ asset ('js/sticky.js') }}\"></script>

    <!-- DEFAULTMENU JS -->
    <script src=\"{{ asset ('js/defaultmenu.js') }}\"></script>

    <!-- CUSTOM JS -->
    <script src=\"{{ asset ('js/custom.js') }}\"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <script src=\"{{ asset ('js/custom-switcher.js') }}\"></script>

    <!-- POPPER JS -->
    <script src=\"{{asset ('libs/@popperjs/core/umd/popper.min.js')}}\"></script>

    <!-- BOOTSTRAP JS -->
    <script src=\"{{ asset ('libs/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>

    <!-- NODE WAVES JS -->
    <script src=\"{{asset ('libs/node-waves/waves.min.js')}}\"></script>

    <!-- SIMPLEBAR JS -->
    <script src=\"{{asset ('libs/simplebar/simplebar.min.js')}}\"></script>

    <!-- COLOR PICKER JS -->
    <script src=\"{{asset ('libs/@simonwep/pickr/pickr.es5.min.js')}}\"></script>

    <!-- Apex Charts JS -->
    <script src=\"{{asset ('libs/apexcharts/apexcharts.min.js') }}\"></script>

    <!-- JSVector Maps JS -->
    <script src=\"{{asset ('js/jsvectormap.js') }}\"></script>

    <!-- JSVector Maps MapsJS -->
    <script src=\"{{asset ('libs/jsvectormap/maps/world-merc.js') }}\"></script>

    <!-- Dashboard --> 
    <script src=\"{{asset ('js/gaming-dashboard.js') }}\"></script>
    <!-- Internal Landing JS -->
    <script src=\"{{asset ('js/landing.js') }}\"></script>
    <!-- END SCRIPTS -->

</body>
</html>", "base.html.twig", "E:\\work\\scifi\\templates\\base.html.twig");
    }
}
