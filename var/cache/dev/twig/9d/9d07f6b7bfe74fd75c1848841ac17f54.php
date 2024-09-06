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

/* pages/leftMenu.html.twig */
class __TwigTemplate_d9f5c0d2b6ce2f1873c5cf3a8e9f2d6d extends Template
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/leftMenu.html.twig"));

        // line 1
        yield "

        <aside class=\"app-sidebar sticky\" id=\"sidebar\">
            
            <div class=\"top-left\"></div>
            <div class=\"top-right\"></div>
            <div class=\"bottom-left\"></div>
            <div class=\"bottom-right\"></div>
            <!-- Start::main-sidebar-header -->
            <div class=\"main-sidebar-header\">
                <a href=\"index.php\" class=\"header-logo\">
                    <img src=\"assets/images/brand-logos/desktop-logo.png\" alt=\"img'\" >
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class=\"main-sidebar\" id=\"sidebar-scroll\">

                <!-- Start::nav -->
                <nav class=\"main-menu-container nav nav-pills flex-column sub-open\">
                    <div class=\"slide-left\" id=\"slide-left\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#7b8191\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"> <path d=\"M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z\"></path> </svg>
                    </div>
                    <ul class=\"main-menu\">

                        <!-- Start::slide -->
                        <li class=\"slide has-sub\">
                            <a href=\"javascript:void(0);\" class=\"side-menu__item\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"side-menu__icon\" viewBox=\"0 0 256 256\"><rect width=\"256\" height=\"256\" fill=\"none\"/><path d=\"M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54a8,8,0,0,1,2.62,5.92V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z\" opacity=\"0.2\"/><path d=\"M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54a8,8,0,0,1,2.62,5.92V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"/></svg>
                                <span class=\"side-menu__label\">Dashboards</span>
                                <i class=\"fe fe-chevron-right side-menu__angle\"></i>
                            </a>
                            <ul class=\"slide-menu child1\">
                                <li class=\"slide side-menu__label1\">
                                    <a href=\"javascript:void(0)\">Dashboards</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"/gaming\" class=\"side-menu__item\">Gaming</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index2.php\" class=\"side-menu__item\">Sales</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index3.php\" class=\"side-menu__item\">Analytics</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index4.php\" class=\"side-menu__item\">Ecommerce</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index5.php\" class=\"side-menu__item\">Crypto</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index6.php\" class=\"side-menu__item\">NFT</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index7.php\" class=\"side-menu__item\">CRM</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index8.php\" class=\"side-menu__item\">HRM</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index9.php\" class=\"side-menu__item\">Jobs</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index10.php\" class=\"side-menu__item\">Projects</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index11.php\" class=\"side-menu__item\">Stocks</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index12.php\" class=\"side-menu__item\">Courses</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class=\"slide has-sub\">
                            <a href=\"javascript:void(0);\" class=\"side-menu__item\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"side-menu__icon\" viewBox=\"0 0 256 256\"><rect width=\"256\" height=\"256\" fill=\"none\"/><polygon points=\"152 32 152 88 208 88 152 32\" opacity=\"0.2\"/><path d=\"M200,224H56a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96l56,56V216A8,8,0,0,1,200,224Z\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"/><polyline points=\"152 32 152 88 208 88\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"/></svg>
                                <span class=\"side-menu__label\">Pages</span>
                                <i class=\"fe fe-chevron-right side-menu__angle\"></i>
                            </a>
                            <ul class=\"slide-menu child1 pages-ul\">
                                <li class=\"slide\">
                                    <a href=\"/landing\" class=\"side-menu__item\">Landing</a>
                                </li>
                                
                            </ul>
                        </li>
                        <!-- End::slide -->

                    </ul>
                    <div class=\"slide-right\" id=\"slide-right\"><svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#7b8191\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"> <path d=\"M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z\"></path> </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/leftMenu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

        <aside class=\"app-sidebar sticky\" id=\"sidebar\">
            
            <div class=\"top-left\"></div>
            <div class=\"top-right\"></div>
            <div class=\"bottom-left\"></div>
            <div class=\"bottom-right\"></div>
            <!-- Start::main-sidebar-header -->
            <div class=\"main-sidebar-header\">
                <a href=\"index.php\" class=\"header-logo\">
                    <img src=\"assets/images/brand-logos/desktop-logo.png\" alt=\"img'\" >
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class=\"main-sidebar\" id=\"sidebar-scroll\">

                <!-- Start::nav -->
                <nav class=\"main-menu-container nav nav-pills flex-column sub-open\">
                    <div class=\"slide-left\" id=\"slide-left\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#7b8191\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"> <path d=\"M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z\"></path> </svg>
                    </div>
                    <ul class=\"main-menu\">

                        <!-- Start::slide -->
                        <li class=\"slide has-sub\">
                            <a href=\"javascript:void(0);\" class=\"side-menu__item\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"side-menu__icon\" viewBox=\"0 0 256 256\"><rect width=\"256\" height=\"256\" fill=\"none\"/><path d=\"M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54a8,8,0,0,1,2.62,5.92V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z\" opacity=\"0.2\"/><path d=\"M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54a8,8,0,0,1,2.62,5.92V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"/></svg>
                                <span class=\"side-menu__label\">Dashboards</span>
                                <i class=\"fe fe-chevron-right side-menu__angle\"></i>
                            </a>
                            <ul class=\"slide-menu child1\">
                                <li class=\"slide side-menu__label1\">
                                    <a href=\"javascript:void(0)\">Dashboards</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"/gaming\" class=\"side-menu__item\">Gaming</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index2.php\" class=\"side-menu__item\">Sales</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index3.php\" class=\"side-menu__item\">Analytics</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index4.php\" class=\"side-menu__item\">Ecommerce</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index5.php\" class=\"side-menu__item\">Crypto</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index6.php\" class=\"side-menu__item\">NFT</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index7.php\" class=\"side-menu__item\">CRM</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index8.php\" class=\"side-menu__item\">HRM</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index9.php\" class=\"side-menu__item\">Jobs</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index10.php\" class=\"side-menu__item\">Projects</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index11.php\" class=\"side-menu__item\">Stocks</a>
                                </li>
                                <li class=\"slide\">
                                    <a href=\"index12.php\" class=\"side-menu__item\">Courses</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class=\"slide has-sub\">
                            <a href=\"javascript:void(0);\" class=\"side-menu__item\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"side-menu__icon\" viewBox=\"0 0 256 256\"><rect width=\"256\" height=\"256\" fill=\"none\"/><polygon points=\"152 32 152 88 208 88 152 32\" opacity=\"0.2\"/><path d=\"M200,224H56a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96l56,56V216A8,8,0,0,1,200,224Z\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"/><polyline points=\"152 32 152 88 208 88\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"16\"/></svg>
                                <span class=\"side-menu__label\">Pages</span>
                                <i class=\"fe fe-chevron-right side-menu__angle\"></i>
                            </a>
                            <ul class=\"slide-menu child1 pages-ul\">
                                <li class=\"slide\">
                                    <a href=\"/landing\" class=\"side-menu__item\">Landing</a>
                                </li>
                                
                            </ul>
                        </li>
                        <!-- End::slide -->

                    </ul>
                    <div class=\"slide-right\" id=\"slide-right\"><svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#7b8191\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"> <path d=\"M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z\"></path> </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
", "pages/leftMenu.html.twig", "E:\\work\\scifi\\templates\\pages\\leftMenu.html.twig");
    }
}
