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

/* pages/base.html.twig */
class __TwigTemplate_9abd895efc6fedb53d8fb2d493eb6bd2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/base.html.twig"));

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
        // line 9
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <link rel=\"icon\" href=\"";
        // line 11
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
    ";
        // line 24
        yield "
    <!-- NODE WAVES CSS -->
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/node-waves/waves.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"> 

    <!-- SIMPLEBAR CSS -->
    
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/simplebar/simplebar.min.css"), "html", null, true);
        yield "\">

    <!-- COLOR PICKER CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/flatpickr/flatpickr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@simonwep/pickr/themes/nano.min.css"), "html", null, true);
        yield "\">

    <link href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- CHOICES CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/choices.js/public/assets/styles/choices.min.css"), "html", null, true);
        yield "\">
    <!-- CHOICES JS -->
    <script src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/choices.js/public/assets/scripts/choices.min.js"), "html", null, true);
        yield "\"></script>
</head>
<body>
    ";
        // line 45
        yield "    ";
        yield from         $this->loadTemplate("pages/topMenu.html.twig", "pages/base.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "
    ";
        // line 48
        yield "    ";
        yield from         $this->loadTemplate("pages/leftMenu.html.twig", "pages/base.html.twig", 48)->unwrap()->yield($context);
        // line 49
        yield "
    ";
        // line 51
        yield "    <div class=\"container\">
        ";
        // line 52
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 53
        yield "    </div>

    ";
        // line 56
        yield "
    <script src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/alerts.js"), "html", null, true);
        yield "\"></script>

    <!-- POPPER JS -->
    <script src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@popperjs/core/umd/popper.min.js"), "html", null, true);
        yield "\"></script>

    <!-- BOOTSTRAP JS -->
    <script src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

    <!-- NODE WAVES JS -->
    <script src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/node-waves/waves.min.js"), "html", null, true);
        yield "\"></script>

    <!-- SIMPLEBAR JS -->
    <script src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/simplebar/simplebar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/simplebar.js"), "html", null, true);
        yield "\"></script>

    <!-- COLOR PICKER JS -->
    <script src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@simonwep/pickr/pickr.es5.min.js"), "html", null, true);
        yield "\"></script>

    <!-- STICKY JS -->
    <script src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sticky.js"), "html", null, true);
        yield "\"></script>

    <!-- DEFAULTMENU JS -->
    <script src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/defaultmenu.js"), "html", null, true);
        yield "\"></script>

    <!-- CUSTOM JS -->
    <script src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        yield "\"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <script src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom-switcher.js"), "html", null, true);
        yield "\"></script>

    <!-- POPPER JS -->
    <script src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@popperjs/core/umd/popper.min.js"), "html", null, true);
        yield "\"></script>

    <!-- BOOTSTRAP JS -->
    <script src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

    <!-- NODE WAVES JS -->
    <script src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/node-waves/waves.min.js"), "html", null, true);
        yield "\"></script>

    <!-- SIMPLEBAR JS -->
    <script src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/simplebar/simplebar.min.js"), "html", null, true);
        yield "\"></script>

    <!-- COLOR PICKER JS -->
    <script src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@simonwep/pickr/pickr.es5.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Apex Charts JS -->
    <script src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/apexcharts/apexcharts.min.js"), "html", null, true);
        yield "\"></script>

    <!-- JSVector Maps JS -->
    <script src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/jsvectormap/maps/world-merc.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/jsvectormap/maps/worlds.js"), "html", null, true);
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
    <!-- END SCRIPTS -->

</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "SCIFI-Symfony7";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 52
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
        return "pages/base.html.twig";
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
        return array (  297 => 52,  283 => 9,  270 => 113,  264 => 110,  258 => 107,  254 => 106,  248 => 103,  242 => 100,  236 => 97,  230 => 94,  224 => 91,  218 => 88,  212 => 85,  206 => 82,  200 => 79,  194 => 76,  188 => 73,  182 => 70,  178 => 69,  172 => 66,  166 => 63,  160 => 60,  154 => 57,  151 => 56,  147 => 53,  145 => 52,  142 => 51,  139 => 49,  136 => 48,  133 => 46,  130 => 45,  124 => 41,  119 => 39,  113 => 36,  108 => 34,  104 => 33,  98 => 30,  91 => 26,  87 => 24,  81 => 20,  75 => 17,  69 => 14,  63 => 11,  58 => 9,  50 => 3,  47 => 1,);
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
    {# // <script src=\"{{ asset ('js/main.js') }}\"></script> #}

    <!-- NODE WAVES CSS -->
    <link href=\"{{ asset ('libs/node-waves/waves.min.css') }}\" rel=\"stylesheet\"> 

    <!-- SIMPLEBAR CSS -->
    
    <link rel=\"stylesheet\" href=\"{{ asset ('libs/simplebar/simplebar.min.css') }}\">

    <!-- COLOR PICKER CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset ('libs/flatpickr/flatpickr.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('libs/@simonwep/pickr/themes/nano.min.css') }}\">

    <link href=\"{{asset ('libs/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

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
    <script src=\"{{asset ('libs/jsvectormap/maps/world-merc.js') }}\"></script>
    <script src=\"{{asset ('libs/jsvectormap/maps/worlds.js') }}\"></script>

    <!-- JSVector Maps MapsJS -->
    <script src=\"{{asset ('libs/jsvectormap/maps/world-merc.js') }}\"></script>

    <!-- Dashboard --> 
    <script src=\"{{asset ('js/gaming-dashboard.js') }}\"></script>
    <!-- END SCRIPTS -->

</body>
</html>", "pages/base.html.twig", "E:\\work\\scifi\\templates\\pages\\base.html.twig");
    }
}
