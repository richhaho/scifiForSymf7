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

/* landing.html.twig */
class __TwigTemplate_c14c62370cafab75d4e2a51bfdd6eb72 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing.html.twig"));

        // line 1
        yield "
<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\" data-nav-layout=\"horizontal\" data-nav-style=\"menu-click\" data-menu-position=\"fixed\" data-theme-mode=\"dark\" data-card-style=\"style1\" data-card-background=\"background1\">

    <head>

        <!-- Meta Data -->
\t\t<meta charset=\"UTF-8\">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"Description\" content=\"SciFi - Symfony 7 Admin Dashboard Template\">
        <meta name=\"Author\" content=\"Spruko Technologies Private Limited\">
        <meta name=\"keywords\" content=\"dashboard, dashboard template, symfony my admin, symfony admin dashboard, symfony admin template, symfony, admin panel, php dashboard, php backend, php admin, template admin, admin, bootstrap dashboard, admin panel template, bootstrap dashboard, bootstrap 5 admin template\">
        
        <!-- TITLE -->
\t\t<title>SciFi - Symfony-7 Admin &amp; Dashboard Template </title>

        <!-- FAVICON -->
        <link rel=\"icon\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/brand-logos/favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\">

        <!-- BOOTSTRAP CSS -->
\t    <link  id=\"style\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- ICONS CSS -->
\t    <link  id=\"style\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        
        <!-- STYLES CSS -->
        <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- NODE WAVES CSS -->
        <link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/node-waves/waves.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        
        <!-- SwiperJS Css -->
        <link href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- COLOR PICKER CSS -->
        <link href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/flatpickr/flatpickr.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@simonwep/pickr/themes/nano.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- CHOICES CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/choices.js/public/assets/styles/choices.min.css"), "html", null, true);
        yield "\">

        <!-- Internal Landing JS -->
        <script src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/landing.js"), "html", null, true);
        yield "\"></script>
\t</head>



";
        // line 49
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 1551
        yield "        <!-- END PAGE-->

        <!-- SCRIPTS -->
        

        <!-- POPPER JS -->
        <script src=\"";
        // line 1557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@popperjs/core/umd/popper.min.js"), "html", null, true);
        yield "\"></script>

        <!-- BOOTSTRAP JS -->
        <script src=\"";
        // line 1560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

        <!-- COLOR PICKER JS -->
        <script src=\"";
        // line 1563
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/@simonwep/pickr/pickr.es5.min.js"), "html", null, true);
        yield "\"></script>

        <!-- Swiper JS -->
        // <script src=\"";
        // line 1566
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>

        // <!-- CHOICES JS -->
        // <script src=\"";
        // line 1569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/choices.js/public/assets/scripts/choices.min.js"), "html", null, true);
        yield "\"></script>
        
        // <!-- NODE WAVES JS -->
        // <script src=\"";
        // line 1572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libs/node-waves/waves.min.js"), "html", null, true);
        yield "\"></script>

        // <!-- DEFAULTMENU JS -->
        // <script src=\"";
        // line 1575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/defaultmenu.js"), "html", null, true);
        yield "\"></script>


        // <!-- STICKY JS -->
        // <script src=\"";
        // line 1579
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sticky.js"), "html", null, true);
        yield "\"></script>

        <!-- END SCRIPTS -->

\t</body>
</html>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        yield "    <body class=\"landing-body\">
            <!-- SWITCHER -->
            <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"switcher-canvas\" aria-labelledby=\"offcanvasRightLabel\">
                <div class=\"offcanvas-header border-bottom\">
                    <h5 class=\"offcanvas-title\" id=\"offcanvasRightLabel\">Switcher</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                </div>
                <div class=\"offcanvas-body\">
                    <div class=\"\">
                        <p class=\"switcher-style-head\">Directions:</p>
                        <div class=\"row switcher-style\">
                            <div class=\"col-4\">
                                <div class=\"form-check switch-select\">
                                    <label class=\"form-check-label\" for=\"switcher-ltr\">
                                        LTR
                                    </label>
                                    <input class=\"form-check-input\" type=\"radio\" name=\"direction\" id=\"switcher-ltr\" checked>
                                </div>
                            </div>
                            <div class=\"col-4\">
                                <div class=\"form-check switch-select\">
                                    <label class=\"form-check-label\" for=\"switcher-rtl\">
                                        RTL
                                    </label>
                                    <input class=\"form-check-input\" type=\"radio\" name=\"direction\" id=\"switcher-rtl\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"theme-colors\">
                        <p class=\"switcher-style-head\">Theme Primary:</p>
                        <div class=\"d-flex align-items-center switcher-style\">
                            <div class=\"form-check switch-select me-3\">
                                <input class=\"form-check-input color-input color-primary-1\" type=\"radio\"
                                    name=\"theme-primary\" id=\"switcher-primary\">
                            </div>
                            <div class=\"form-check switch-select me-3\">
                                <input class=\"form-check-input color-input color-primary-2\" type=\"radio\"
                                    name=\"theme-primary\" id=\"switcher-primary1\">
                            </div>
                            <div class=\"form-check switch-select me-3\">
                                <input class=\"form-check-input color-input color-primary-3\" type=\"radio\" name=\"theme-primary\"
                                    id=\"switcher-primary2\">
                            </div>
                            <div class=\"form-check switch-select me-3\">
                                <input class=\"form-check-input color-input color-primary-4\" type=\"radio\" name=\"theme-primary\"
                                    id=\"switcher-primary3\">
                            </div>
                            <div class=\"form-check switch-select me-3\">
                                <input class=\"form-check-input color-input color-primary-5\" type=\"radio\" name=\"theme-primary\"
                                    id=\"switcher-primary4\">
                            </div>
                            <div class=\"form-check switch-select me-3 ps-0 mt-1 color-primary-light\">
                                <div class=\"theme-container-primary\"></div>
                                <div class=\"pickr-container-primary\"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class=\"switcher-style-head\">reset:</p>
                        <div class=\"text-center\">
                            <button id=\"reset-all\" class=\"btn btn-danger mt-3\">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SWITCHER -->
        <!-- PAGE -->
        <div class=\"landing-page-wrapper\">
            <!-- Start:: Header -->
            
            <!-- End:: Header -->
            <!-- Start:: Section-1 -->
            <aside class=\"app-sidebar sticky\" id=\"sidebar\">

                <div class=\"container-xl\">
                    <!-- Start::main-sidebar -->
                    <div class=\"main-sidebar\">

                        <!-- Start::nav -->
                        <nav class=\"main-menu-container nav nav-pills sub-open\">
                            <div class=\"landing-logo-container\">
                                <div class=\"horizontal-logo\">
                                    <a href=\"index.php\" class=\"header-logo\">
                                        <img src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/brand-logos/desktop-logo.png"), "html", null, true);
        yield "\" alt=\"logo\" class=\"desktop-logo\">
                                        <img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/brand-logos/desktop-dark.png"), "html", null, true);
        yield "\" alt=\"logo\" class=\"desktop-logo\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"slide-left\" id=\"slide-left\"><svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#7b8191\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"> <path d=\"M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z\"></path> </svg></div>
                            <ul class=\"main-menu\">
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a class=\"side-menu__item\" href=\"#home\">
                                        <span class=\"side-menu__label\">Home</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#glance\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">Glance</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide has-sub\">
                                    <a href=\"javascript:void(0);\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label me-2\">More</span>
                                        <i class=\"fe fe-chevron-right side-menu__angle op-8\"></i>
                                    </a>
                                    <ul class=\"slide-menu child1\">
                                        <li class=\"slide\">
                                            <a href=\"#about-us\" class=\"side-menu__item\">About Us</a>
                                        </li>
                                        <li class=\"slide\">
                                            <a href=\"#services\" class=\"side-menu__item\">Services</a>
                                        </li>
                                        <li class=\"slide\">
                                            <a href=\"#features\" class=\"side-menu__item\">Features</a>
                                        </li>
                                        <li class=\"slide has-sub\">
                                            <a href=\"javascript:void(0);\" class=\"side-menu__item\">Level-2
                                                <i class=\"fe fe-chevron-right side-menu__angle\"></i></a>
                                            <ul class=\"slide-menu child2\">
                                                <li class=\"slide\">
                                                    <a href=\"javascript:void(0);\" class=\"side-menu__item\">Level-2-1</a>
                                                </li>
                                                <li class=\"slide has-sub\">
                                                    <a href=\"javascript:void(0);\" class=\"side-menu__item\">Level-2-2
                                                        <i class=\"fe fe-chevron-right side-menu__angle\"></i></a>
                                                    <ul class=\"slide-menu child3\">
                                                        <li class=\"slide\">
                                                            <a href=\"javascript:void(0);\" class=\"side-menu__item\">Level-2-2-1</a>
                                                        </li>
                                                        <li class=\"slide has-sub\">
                                                            <a href=\"javascript:void(0);\" class=\"side-menu__item\">Level-2-2-2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#pricing\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">Pricing</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#testimonials\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">Testimonials</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#faqs\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">FAQ's</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#team\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">Team</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#contact\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">Contact Us</span>
                                    </a>
                                </li>
                                <!-- End::slide -->

                            </ul>
                            <div class=\"slide-right\" id=\"slide-right\"><svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#7b8191\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"> <path d=\"M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z\"></path> </svg></div>
                            <div class=\"d-lg-flex d-none\">
                                <div class=\"btn-list d-lg-flex d-none mt-lg-2 mt-xl-0 mt-0\">
                                    <a href=\"signup-basic.php\" class=\"btn btn-wave btn-primary\">
                                        Sign Up
                                    </a>
                                    <button class=\"btn btn-wave btn-icon btn-success switcher-icon\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#switcher-canvas\">
                                        <i class=\"ri-settings-3-line\"></i>
                                    </button>
                                </div>
                            </div>
                        </nav>
                        <!-- End::nav -->

                    </div>
                    <!-- End::main-sidebar -->
                </div>

            </aside>
            <div class=\"landing-banner\" id=\"home\">
                <section class=\"section\">
                    <div class=\"container main-banner-container pb-lg-0\">
                        <div class=\"row\">
                            <div class=\"col-xxl-7 col-xl-7 col-lg-7 col-md-8\">
                                <div class=\"py-lg-5\">
                                    <div class=\"mb-3\">
                                        <h6 class=\"fw-medium text-fixed-white op-8 fs-14\">- Level Up Your Design Universe</h6>
                                    </div>
                                    <p class=\"landing-banner-heading mb-3\">Empower your vision with our <span class=\"text-warning\">SciFi Template!</span> Design</p>
                                    <div class=\"fs-15 mb-5 text-fixed-white op-7\">SciFi -  Turn imagination into reality as you explore a realm where ideas flourish, and designs come to life. Elevate your brand and redefine excellence through our creative designs.</div>
                                    <a href=\"index.php\" class=\"m-1 btn btn-lg btn-secondary\">
                                        <i class=\"ri-eye-line me-2 align-middle\"></i>
                                        View Demos
                                    </a>
                                    <a href=\"index.php\" class=\"m-1 btn btn-lg bg-primary-transparent\">
                                        <i class=\"ri-arrow-right-line me-2 align-middle\"></i>
                                        Get Started
                                    </a>
                                </div>
                            </div>
                            <div class=\"col-xxl-5 col-xl-5 col-lg-5 col-md-4 my-auto\">
                                <div class=\"text-end landing-main-image landing-heading-img\">
                                    <img src=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/1.png"), "html", null, true);
        yield "\" alt=\"logo\" class=\"desktop-logo\">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End:: Section-1 -->

            <!-- Start:: Section-2 -->
            <section class=\"section\" id=\"glance\">
                <div class=\"container position-relative\">
                    <div class=\"text-center\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-Glance-</span></p>
                        <h3 class=\"fw-medium mb-2\">Why you choose us</h3>
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-7\">
                                <p class=\"text-muted fs-15 mb-5 fw-normal\">Our mission is to support you in achieving your goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xl-4\">
                            <div class=\"card custom-card landing-card border shadow-none text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-xl rounded-2 icon-shadow-primary bg-primary-transparent\">
                                            <i class=\"ri-lightbulb-flash-line fs-3\"></i>
                                        </span> 
                                    </div>
                                    <h4 class=\"fw-medium\">Creative Designs</h4>
                                    <p class=\"fs-14 text-muted\">Nam rhoncus mauris id nisi semper tempor. Phasellus vulputate sit amet elit eu rutrum</p>
                                    <a href=\"javascript:void(0);\" class=\"fw-medium text-primary\">Read More<i class=\"ti ti-arrow-narrow-right ms-2 fs-5 align-middle\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4\">
                            <div class=\"card custom-card landing-card border shadow-none text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-xl rounded-2 icon-shadow-info bg-info-transparent\">
                                            <i class=\"ri-customer-service-2-line fs-3\"></i>
                                        </span> 
                                    </div>
                                    <h4 class=\"fw-medium\">24/7 Customer Support</h4>
                                    <p class=\"fs-14 text-muted\">Nam rhoncus mauris id nisi semper tempor. Phasellus vulputate sit amet elit eu rutrum</p>
                                    <a href=\"javascript:void(0);\" class=\"fw-medium text-info\">Read More<i class=\"ti ti-arrow-narrow-right ms-2 fs-5 al align-middle\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4\">
                            <div class=\"card custom-card landing-card border shadow-none text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-xl rounded-2 icon-shadow-warning bg-warning-transparent\">
                                            <i class=\"ri-vip-diamond-line fs-3\"></i>
                                        </span> 
                                    </div>
                                    <h4 class=\"fw-medium\">Skilled Staff</h4>
                                    <p class=\"fs-14 text-muted\">Nam rhoncus mauris id nisi semper tempor. Phasellus vulputate sit amet elit eu rutrum</p>
                                    <a href=\"javascript:void(0);\" class=\"fw-medium text-warning\">Read More<i class=\"ti ti-arrow-narrow-right ms-2 fs-5 align-middle\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-2 -->

            <!-- Start:: Section-3 -->
            <section class=\"section  section-bg\" id=\"about-us\">
                <div class=\"container\">
                    <div class=\"row gx-5 mx-0\">
                        <div class=\"col-xl-4\">
                            <div class=\"home-proving-image\">
                                <img src=\"";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/2.png"), "html", null, true);
        yield "\" alt=\"logo\" class=\"desktop-logo\">
                            </div>
                            <div class=\"proving-pattern-1\"></div>
                        </div>
                        <div class=\"col-xl-8 my-auto\">
                            <div class=\"heading-section text-start mb-4\">
                                <div class=\"heading-subtitle fw-medium\"><span class=\"landing-section-heading text-success\">-About Us-</span></div>
                                <h4 class=\"heading-title\">Where Innovation Meets Passion!</h4>
                                <div class=\"heading-description fs-14 op-8\">Welcome to SciFi, where we offer a unique and tailored
                                    experience that is sure to exceed your expectations. Choose us and let us show you
                                    what true excellence looks like</div>
                            </div>
                            <div class=\"row gy-3 mb-0 ps-3\">
                                <div class=\"col-xl-12\">
                                    <div class=\"d-flex align-items-top\">
                                        <div class=\"me-2 home-prove-svg\">
                                            <i class=\"ri-arrow-right-circle-line align-middle fs-16 text-secondary d-inline-block\"></i>
                                        </div>
                                        <div>
                                            <span class=\"fs-14\">
                                                Benefiting from years of industry experience, we've forged a reputable standing in our field.Sed convallis lobortis nisl. Maecenas aliquet lorem turpis, nec vehicula ante finibus in. Donec id egestas eros. 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-12\">
                                    <div class=\"d-flex align-items-top\">
                                        <div class=\"me-2 home-prove-svg\">
                                            <i class=\"ri-arrow-right-circle-line align-middle fs-16 text-secondary d-inline-block\"></i>
                                        </div>
                                        <div>
                                            <span class=\"fs-14\">
                                                Comprising skilled and seasoned professionals, our team.Sed convallis lobortis nisl. Maecenas aliquet lorem turpis, nec vehicula ante finibus in. Donec id egestas eros. 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-12\">
                                    <div class=\"d-flex align-items-top\">
                                        <div class=\"me-2 home-prove-svg\">
                                            <i class=\"ri-arrow-right-circle-line align-middle fs-16 text-secondary d-inline-block\"></i>
                                        </div>
                                        <div>
                                            <span class=\"fs-14\">
                                                We customize our services to meet individual needs..Sed convallis lobortis nisl. Maecenas aliquet lorem turpis, nec vehicula ante finibus in. Donec id egestas eros. 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-3 -->

            <!-- Start:: Section-4 -->
            <section class=\"section\" id=\"services\">
                <div class=\"container\">
                    <div class=\"text-center\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-SERVICES-</span></p>
                        <h3 class=\"fw-medium mb-2\">Our Best Services</h3>
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-7\">
                                <p class=\"text-muted fs-15 mb-5 fw-normal\">Sed semper euismod, augue justo ullamcorper orci, eu imperdiet </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-3\">
                                        <span class=\"avatar avatar-lg bg-primary-transparent border border-primary border-opacity-10\">
                                            <i class=\"ri-pencil-ruler-2-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Design</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet dolorem ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-warning-transparent border border-warning border-opacity-10\">
                                            <i class=\"ri-settings-3-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Development</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet dolorem ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-info-transparent border border-info border-opacity-10\">
                                            <i class=\"ri-shield-check-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\"> Quality Tested</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet dolorem ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-success-transparent border border-success border-opacity-10\">
                                            <i class=\"ri-palette-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Multiple Themes</h5>
                                    <p class=\"fs-14 text-muted mb-0\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiiss.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-danger-transparent border border-danger border-opacity-10\">
                                            <i class=\"ri-equalizer-2-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Customization</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-secondary-transparent border border-secondary border-opacity-10\">
                                            <i class=\"ri-dashboard-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Multiple Demos</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-teal-transparent border border-teal border-opacity-10\">
                                            <i class=\"ri-refresh-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Regular Updates</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-pink-transparent border border-pink border-opacity-10\">
                                            <i class=\"ri-smartphone-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Fully Responsive</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-4 -->

            <!-- Start:: Section-5 -->
            <section class=\"section landing-Features\" id=\"features\">
                <div class=\"container\">
                    <div class=\"heading-section text-center mb-0\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-Features-</span></p>
                        <h2 class=\"text-fixed-white text-center fw-medium\">Our Features</h2>
                        <div class=\"fs-16 text-fixed-white text-center op-8 mb-5\">Ullamco ea commodo.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.perspiciatis unde omnis.</div>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center trusted-companies sub-card-companies flex-wrap mb-3 mb-xl-0 gap-5\">
                        <div class=\"trust-img\"><img src=\"";
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/web/1.png"), "html", null, true);
        yield "\" alt=\"img\" class=\"border-0\"></div>
                        <div class=\"trust-img\"><img src=\"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/web/2.png"), "html", null, true);
        yield "\" alt=\"img\" class=\"border-0\"></div>
                        <div class=\"trust-img\"><img src=\"";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/web/3.png"), "html", null, true);
        yield "\" alt=\"img\" class=\"border-0\"></div>
                        <div class=\"trust-img\"><img src=\"";
        // line 583
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/web/4.png"), "html", null, true);
        yield "\" alt=\"img\" class=\"border-0\"></div>
                        <div class=\"trust-img\"><img src=\"";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/web/5.png"), "html", null, true);
        yield "\" alt=\"img\" class=\"border-0\"></div>
                        <div class=\"trust-img\"><img src=\"";
        // line 585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/web/6.png"), "html", null, true);
        yield "\" alt=\"img\" class=\"border-0\"></div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-5 -->

            <!-- Start:: Section-7 -->
            <section class=\"section\" id=\"pricing\">
                <div class=\"container\">
                    <div class=\"text-center\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-PRICING-</span></p>
                        <h3 class=\"fw-medium mb-2\">Pricing Plans for You</h3>
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-7\">
                                <p class=\"text-muted fs-15 mb-5 fw-normal\">Our user-friendly plans are carefully tailored to accommodate every category effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card custom-card landing-card pricing-card border shadow-none\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <p class=\"fs-18 fw-medium mb-1\">Intro</p>
                                        <p class=\"mb-1 fs-14 op-8\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                        <p class=\"text-justify fw-medium mb-1\">
                                            <span class=\"fs-2\">\$</span><span class=\"fs-40 me-1\">0</span>
                                            <span class=\"fs-20 op-6\"><span class=\"fs-20\">/</span> month</span>
                                        </p>
                                        <p class=\"fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex\"><i class=\"ri-information-line align-middle me-1 d-inline-block fs-11\"></i>Billed monthly on regular basis!</p>
                                    </div>
                                    <ul class=\"text-justify list-unstyled pricing-body ps-0\">
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 6 Users
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span>10 Days Pack
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Basic serivces
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Backups
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-x-circle align-middle fs-16 op-5 d-inline-block\"></i></span> Advanced Security</li>
                                        <li class=\"mb-0\"><span class=\"me-1\"><i class=\"fe fe-x-circle align-middle fs-16 op-5 d-inline-block\"></i></span> 24/7 support serivce</li>
                                    </ul>
                                    <div class=\"text-center border-top-0 pt-4 d-grid\">
                                        <button type=\"button\" class=\"btn btn-lg btn-primary-light\">
                                            <span class=\"ms-4 me-4\">Get Plan Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card custom-card landing-card pricing-card border shadow-none\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <p class=\"fs-18 fw-medium mb-1\">Basic</p>
                                        <p class=\"mb-1 fs-14 op-8\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                        <p class=\"text-justify fw-medium mb-1\">
                                            <span class=\"fs-2\">\$</span><span class=\"fs-40 me-1\">29</span>
                                            <span class=\"fs-20 op-6\"><span class=\"fs-20\">/</span> month</span>
                                        </p>
                                        <p class=\"fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex\"><i class=\"ri-information-line align-middle me-1 d-inline-block fs-11\"></i>Billed monthly on regular basis!</p>
                                    </div>
                                    <ul class=\"text-justify list-unstyled pricing-body ps-0\">
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 8 Users
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span>48 Days Pack
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Basic serivces
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Backups
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-x-circle align-middle fs-16 op-5 d-inline-block\"></i></span> Advanced Security</li>
                                        <li class=\"mb-0\"><span class=\"me-1\"><i class=\"fe fe-x-circle align-middle fs-16 op-5 d-inline-block\"></i></span> 24/7 support serivce</li>
                                    </ul>
                                    <div class=\"text-center border-top-0 pt-4 d-grid\">
                                        <button type=\"button\" class=\"btn btn-lg btn-primary-light\">
                                            <span class=\"ms-4 me-4\">Get Plan Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card pricing-card border custom-card landing-card border-primary shadow-none\">
                                <div class=\"card-body\">
                                    <span class=\"popular-pricing-badge\"><i class=\"ri-flashlight-line me-1 d-inline-block\"></i>Most Popluar</span>
                                    <div class=\"mb-4\">
                                        <p class=\"fs-18 fw-medium mb-1\">Popular</p>
                                        <p class=\"mb-1 fs-14 op-8\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                        <p class=\"text-justify fw-medium mb-1\">
                                            <span class=\"fs-2\">\$</span><span class=\"fs-40 me-1\">49</span>
                                            <span class=\"fs-20 op-6\"><span class=\"fs-20\">/</span> month</span>
                                        </p>
                                        <p class=\"fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex\"><i class=\"ri-information-line align-middle me-1 d-inline-block fs-11\"></i>Billed monthly on regular basis!</p>
                                    </div>
                                    <ul class=\"text-justify list-unstyled pricing-body ps-0\">
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 8 Users
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 28 Days Pack
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Basic serivces
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Backups
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Advanced Security</li>
                                        <li class=\"mb-0\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 24/7 support serivce</li>
                                    </ul>
                                    <div class=\"text-center border-top-0 pt-4 d-grid\">
                                        <button type=\"button\" class=\"btn btn-lg btn-primary\">
                                            <span class=\"ms-4 me-4\">Get Plan Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card custom-card landing-card pricing-card border shadow-none\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <p class=\"fs-18 fw-medium mb-1\">Advanced</p>
                                        <p class=\"mb-1 fs-14 op-8\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                        <p class=\"text-justify fw-medium mb-1\">
                                            <span class=\"fs-2\">\$</span><span class=\"fs-40 me-1\">29</span>
                                            <span class=\"fs-20 op-6\"><span class=\"fs-20\">/</span> month</span>
                                        </p>
                                        <p class=\"fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex\"><i class=\"ri-information-line align-middle me-1 d-inline-block fs-11\"></i>Billed monthly on regular basis!</p>
                                    </div>
                                    <ul class=\"text-justify list-unstyled pricing-body ps-0\">
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 4 Users
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span>28 Days Pack
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Basic serivces
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Backups
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Advanced Security</li>
                                        <li class=\"mb-0\"><span class=\"me-1\"><i class=\"fe fe-x-circle align-middle fs-16 op-5 d-inline-block\"></i></span> 24/7 support serivce</li>
                                    </ul>
                                    <div class=\"text-center border-top-0 pt-4 d-grid\">
                                        <button type=\"button\" class=\"btn btn-lg btn-primary-light\">
                                            <span class=\"ms-4 me-4\">Get Plan Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-7 -->

            <!-- Start:: Section-8 -->
            <section class=\"section section-bg\" id=\"testimonials\">
                <div class=\"container reviews-container\">
                    <div class=\"text-center\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-Testimonials-</span></p>
                        <h3 class=\"fw-medium mb-2\">What people think about us</h3>
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-7\">
                                <p class=\"text-muted fs-15 mb-5 fw-normal\">Here are the testimonials shared by our highly satisfied customers about our product.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper testimonialSwiperService\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.5 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">10 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">Violet Sofi</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">violetsofi@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"";
        // line 795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-half-line fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.3 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">5 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">David John</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">davidjohn@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"";
        // line 833
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/9.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-half-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.3 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">2 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">Arunima Alice</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">Arunimaalice@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"";
        // line 871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/8.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-half-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.3 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">17 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">Isaac Elias</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">isaacelias@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"";
        // line 909
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/10.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.1 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">13 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">Stella Joy</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">Stellajoy@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"";
        // line 947
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/2.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-half-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.3 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">2 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">Reva Saan</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">revasaan@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"";
        // line 985
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/5.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal\"></div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-8 -->

            <!-- Start:: Section-9 -->
            <section class=\"section\" id=\"faqs\">
                <div class=\"container text-center\">
                    <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-F.A.Q-</span></p>
                    <h3 class=\"fw-medium mb-2\">Frequently asked questions ?</h3>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7\">
                            <p class=\"text-muted fs-15 mb-5 fw-normal\">We have provided a list of commonly asked questions to assist you..</p>
                        </div>
                    </div>
                    <div class=\"row text-start\">
                        <div class=\"col-xl-12\">
                            <div class=\"row gy-2\">
                                <div class=\"col-xl-6\">
                                    <div class=\"accordion accordion-customicon1 accordion-primary accordions-items-seperate\" id=\"accordionFAQ1\">
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1One\">
                                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\"
                                                    data-bs-target=\"#collapsecustomicon1One\" aria-expanded=\"true\"
                                                    aria-controls=\"collapsecustomicon1One\">
                                                     How do I integrate the template into my project?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1One\" class=\"accordion-collapse collapse show\"
                                                aria-labelledby=\"headingcustomicon1One\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1Two\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon1Two\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon1Two\">
                                                    How frequently is the template updated?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1Two\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon1Two\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    Check the template provider's website or documentation for information on updates. Regular updates may include bug fixes, new features, or compatibility improvements.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1Three\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon1Three\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon1Three\">
                                                    What support options are available for landing page services?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1Three\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon1Three\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1Four\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon1Four\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon1Four\">
                                                    Can I upgrade or downgrade my subscription plan?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1Four\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon1Four\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    Yes, you can upgrade or downgrade your subscription plan at any time. Visit your account settings or contact our support team to make changes to your subscription level.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1Five\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon1Five\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon1Five\">
                                                     How often will I be billed for my subscription?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1Five\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon1Five\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    Billing frequency depends on your chosen subscription plan. We offer monthly, quarterly, and annual billing options. Check your subscription details for the billing cycle information.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1Six\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon1Six\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon1Six\">
                                                    What is included in the subscription service?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1Six\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon1Six\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    Our subscription service typically provides access to premium features, exclusive content, and ongoing updates related to our landing page offerings.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-6\">
                                    <div class=\"accordion accordion-customicon1 accordion-primary accordions-items-seperate\" id=\"accordionFAQ2\">
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2Five\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon2Five\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon2Five\">
                                                     How often will I be billed for my subscription?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2Five\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon2Five\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    Billing frequency depends on your chosen subscription plan. We offer monthly, quarterly, and annual billing options. Check your subscription details for the billing cycle information.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2Six\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon2Six\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon2Six\">
                                                    What is included in the subscription service?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2Six\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon2Six\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    Our subscription service typically provides access to premium features, exclusive content, and ongoing updates related to our landing page offerings.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2One\">
                                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                                    data-bs-target=\"#collapsecustomicon2One\" aria-expanded=\"true\"
                                                    aria-controls=\"collapsecustomicon2One\">
                                                     How do I integrate the template into my project?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2One\" class=\"accordion-collapse collapse \"
                                                aria-labelledby=\"headingcustomicon2One\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2Two\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon2Two\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon2Two\">
                                                    How frequently is the template updated?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2Two\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon2Two\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    Check the template provider's website or documentation for information on updates. Regular updates may include bug fixes, new features, or compatibility improvements.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2Three\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon2Three\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon2Three\">
                                                    What are your opening hours?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2Three\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon2Three\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2Four\">
                                                <button class=\"accordion-button\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon2Four\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon2Four\">
                                                    Do I have the right to return an item?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2Four\" class=\"accordion-collapse collapse show\"
                                                aria-labelledby=\"headingcustomicon2Four\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-9 -->

            <!-- Start:: Section-10 -->
            <section class=\"section section-bg\" id=\"team\">
                <div class=\"container\">
                    <div class=\"text-center\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-TEAM-</span></p>
                        <h3 class=\"fw-medium mb-2\">Meet our amazing Team</h3>
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-7\">
                                <p class=\"text-muted fs-15 mb-5 fw-normal\">Our team is made up of real people who are passionate about what they do.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4\">
                            <div class=\"card custom-card  team-card text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <img src=\"";
        // line 1269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/team/1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2\">
                                    <div class=\"text-center py-2\">
                                        <h5 class=\"mb-0 fw-medium\">Charlie John</h5>
                                        <p class=\"mb-1 fs-14 fw-medium text-primary\">HR Manager</p>
                                        <p class=\"mb-0 fs-13 text-muted op-8\">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                        <div class=\"d-flex justify-content-center mt-4\">
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light\"><i class=\"ri-twitter-x-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-facebook-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-instagram-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-linkedin-line align-middle\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4\">
                            <div class=\"card custom-card  team-card text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <img src=\"";
        // line 1291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/team/2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2\">
                                    <div class=\"text-center py-2\">
                                        <h5 class=\"mb-0 fw-medium\">Marlin Shane</h5>
                                        <p class=\"mb-1 fs-14 fw-medium text-primary\">Team Lead</p>
                                        <p class=\"mb-0 fs-13 text-muted op-8\">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                        <div class=\"d-flex justify-content-center mt-4\">
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light\"><i class=\"ri-twitter-x-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-facebook-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-instagram-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-linkedin-line align-middle\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4\">
                            <div class=\"card custom-card  team-card text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <img src=\"";
        // line 1313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/team/3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2\">
                                    <div class=\"text-center py-2\">
                                        <h5 class=\"mb-0 fw-medium\">Angela Lia</h5>
                                        <p class=\"mb-1 fs-14 fw-medium text-primary\">Project Manager</p>
                                        <p class=\"mb-0 fs-13 text-muted op-8\">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                        <div class=\"d-flex justify-content-center mt-4\">
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light\"><i class=\"ri-twitter-x-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-facebook-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-instagram-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-linkedin-line align-middle\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4\">
                            <div class=\"card custom-card  team-card text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <img src=\"";
        // line 1335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/landing/team/4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2\">
                                    <div class=\"text-center py-2\">
                                        <h5 class=\"mb-0 fw-medium\">Stella Daisy</h5>
                                        <p class=\"mb-1 fs-14 fw-medium text-primary\">Head of Department</p>
                                        <p class=\"mb-0 fs-13 text-muted op-8\">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                        <div class=\"d-flex justify-content-center mt-4\">
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light\"><i class=\"ri-twitter-x-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-facebook-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-instagram-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-linkedin-line align-middle\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-10 -->

            <!-- Start:: Section-11 -->
            <section class=\"section\" id=\"contact\">
                <div class=\"container text-center\">
                    <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-CONTACT US-</span></p>
                    <h3 class=\"fw-medium mb-2\">Do you have any questions?</h3>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-9\">
                            <p class=\"text-muted fs-15 mb-5 fw-normal\"> Have questions, or need help with a product or service, contacting support allows you to connect with a dedicated team of professionals</p>
                        </div>
                    </div>
                    <div class=\"card custom-card  overflow-hidden section-bg border overflow-hidden shadow-none\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-body p-0\">
                            <div class=\"row text-start align-items-center\">
                                <div class=\"col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                                    <div class=\"p-4\">
                                        <div class=\"row mt-2 px-3\">
                                            <div class=\"col-xl-12\">
                                                <div class=\"row gy-3\">
                                                    <div class=\"col-xl-12\">
                                                        <label for=\"contact-address-name\" class=\"form-label \">Full Name :</label>
                                                        <input type=\"text\" class=\"form-control \" id=\"contact-address-name\" placeholder=\"Enter Name\">
                                                    </div>
                                                    <div class=\"col-xl-12\">
                                                        <label for=\"contact-address-mail\" class=\"form-label \">Mail Address :</label>
                                                        <input type=\"text\" class=\"form-control \" id=\"contact-address-mail\" placeholder=\"Enter Mail Address\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-12\">
                                                <label for=\"contact-address-message\" class=\"form-label \">Message :</label>
                                                <textarea class=\"form-control \" id=\"contact-address-message\" rows=\"2\" placeholder=\"Type Here\"></textarea>
                                            </div>
                                            <div class=\"col-xl-12\">
                                                <div class=\"text-end mt-4\">
                                                    <button class=\"btn btn-primary btn-wave\">Send Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                                    <div class=\"p-4 landing-contact-info\">
                                        <div class=\"p-3\">
                                            <div class=\"fs-18 text-primary fw-medium mb-3\">Contact Information</div>
                                            <div class=\"mb-3\">
                                                <i class=\"ri-map-pin-fill me-2 text-primary\"></i> 1352/A-12, Abcd Street, KLM Town, Hyderabad.
                                            </div>
                                            <div class=\"d-flex mb-3\">
                                                <i class=\"ri-phone-fill me-2 d-inline-block text-primary\"></i> 
                                                <div>
                                                    <div>+122 1234 32422</div>
                                                    <span>+121 1234 14511</span>
                                                </div>
                                            </div>
                                            <div class=\"mb-4\"><i class=\"ri-mail-fill me-2 d-inline-block text-primary\"></i> carolinahanasandy4424@example.com</div>
                                        </div>
                                        <div class=\"p-3 pt-0\">
                                            <div class=\"card custom-card border mb-0 shadow-none overflow-hidden\">
                                                <iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d30444.274596168965!2d78.54114692513858!3d17.48198883339408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d17.4886524!2d78.5495041!4m5!1s0x3bcb9c7ec139a15d%3A0x326d1c90786b2ab6!2sspruko%20technologies!3m2!1d17.474805099999998!2d78.570258!5e0!3m2!1sen!2sin!4v1670225507254!5m2!1sen!2sin\"  
                                                height=\"100\" style=\"border:0;width:100%\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-11 -->

            <!-- Start:: Section-12 -->
            <section class=\"section landing-footer text-fixed-white\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-sm-6 col-12 mb-md-0 mb-3\">
                            <div class=\"px-4\">
                                <p class=\"fw-medium mb-3\"><a href=\"index.php\"><img src=\"";
        // line 1436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/brand-logos/desktop-dark.png"), "html", null, true);
        yield "\" alt=\"\" class=\"landing-footer-logo\"></a></p>
                                <p class=\"mb-2 op-6 fw-normal fs-14\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed. Reprehenderit et magnam, fuga est mollitia eius.
                                </p>
                                <p class=\"mb-0 op-6 fw-normal fs-14\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem ea esse ad</p>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6 col-12\">
                            <div class=\"px-4\">
                                <h6 class=\"fw-medium mb-3 text-fixed-white\">PAGES</h6>
                                <ul class=\"list-unstyled op-6 fw-normal landing-footer-list fs-14 mb-lg-0\">
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Profile</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Timeline</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Email</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Contacts</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Projects</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6 col-12\">
                            <div class=\"px-4\">
                                <h6 class=\"fw-medium text-fixed-white\">INFO</h6>
                                <ul class=\"list-unstyled op-6 fw-normal landing-footer-list fs-14 mb-lg-0\">
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Contact US</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Services</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Our Team</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Blog</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">About</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6 col-12\">
                            <div class=\"px-4\">
                                <h6 class=\"fw-medium text-fixed-white\">Social</h6>
                                <ul class=\"list-unstyled fw-normal mb-lg-0 landing-footer-list fs-14\">
                                    <li class=\"d-flex gap-1 align-items-center\">
                                        <button class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light\">
                                            <i class=\"ri-facebook-line fw-bold\"></i>
                                        </button>
                                        <div class=\"ms-2 op-8\">Facebook</div>
                                    </li>
                                    <li class=\"d-flex gap-1 align-items-center\">
                                        <button class=\"btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light\">
                                            <i class=\"ri-twitter-x-line fw-bold\"></i>
                                        </button>
                                        <div class=\"ms-2 op-8\">Twitter</div>
                                    </li>
                                    <li class=\"d-flex gap-1 align-items-center\">
                                        <button class=\"btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light\">
                                            <i class=\"ri-instagram-line fw-bold\"></i>
                                        </button>
                                        <div class=\"ms-2 op-8\">Instagram</div>
                                    </li>
                                    <li class=\"d-flex gap-1 align-items-center\">
                                        <button class=\"btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light\">
                                            <i class=\"ri-youtube-line fw-bold\"></i>
                                        </button>
                                        <div class=\"ms-2 op-8\">Youtube</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6 col-12\">
                            <div class=\"px-4\">
                                <h6 class=\"fw-medium text-fixed-white\">CONTACT INFO</h6>
                                <ul class=\"list-unstyled fw-normal mb-lg-0 landing-footer-list fs-14\">
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white op-6\"><i class=\"ri-home-4-line me-1 align-middle\"></i> New York, NY 10012, US</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white op-6\"><i class=\"ri-mail-line me-1 align-middle\"></i> info@fmail.com</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white op-6\"><i class=\"ri-mail-line me-1 align-middle\"></i> contact@fmail.com</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white op-6\"><i class=\"ri-phone-line me-1 align-middle\"></i> +(555)-1920 1831</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white op-6\"><i class=\"ri-printer-line me-1 align-middle\"></i> +(123) 1293 123</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-12 -->
            <!-- SCROLL-TO-TOP -->
            <div class=\"scrollToTop\">
                    <span class=\"arrow\"><i class=\"ri-arrow-up-s-fill fs-20\"></i></span>
            </div>
            <div id=\"responsive-overlay\"></div>
        </div>    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "landing.html.twig";
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
        return array (  1653 => 1436,  1549 => 1335,  1524 => 1313,  1499 => 1291,  1474 => 1269,  1187 => 985,  1146 => 947,  1105 => 909,  1064 => 871,  1023 => 833,  982 => 795,  769 => 585,  765 => 584,  761 => 583,  757 => 582,  753 => 581,  749 => 580,  527 => 361,  437 => 274,  295 => 135,  291 => 134,  205 => 50,  198 => 49,  179 => 1579,  172 => 1575,  166 => 1572,  160 => 1569,  154 => 1566,  148 => 1563,  142 => 1560,  136 => 1557,  128 => 1551,  126 => 49,  118 => 44,  112 => 41,  106 => 38,  102 => 37,  96 => 34,  90 => 31,  84 => 28,  78 => 25,  72 => 22,  66 => 19,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\" data-nav-layout=\"horizontal\" data-nav-style=\"menu-click\" data-menu-position=\"fixed\" data-theme-mode=\"dark\" data-card-style=\"style1\" data-card-background=\"background1\">

    <head>

        <!-- Meta Data -->
\t\t<meta charset=\"UTF-8\">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"Description\" content=\"SciFi - Symfony 7 Admin Dashboard Template\">
        <meta name=\"Author\" content=\"Spruko Technologies Private Limited\">
        <meta name=\"keywords\" content=\"dashboard, dashboard template, symfony my admin, symfony admin dashboard, symfony admin template, symfony, admin panel, php dashboard, php backend, php admin, template admin, admin, bootstrap dashboard, admin panel template, bootstrap dashboard, bootstrap 5 admin template\">
        
        <!-- TITLE -->
\t\t<title>SciFi - Symfony-7 Admin &amp; Dashboard Template </title>

        <!-- FAVICON -->
        <link rel=\"icon\" href=\"{{ asset ('assets/images/brand-logos/favicon.ico') }}\" type=\"image/x-icon\">

        <!-- BOOTSTRAP CSS -->
\t    <link  id=\"style\" href=\"{{ asset ('libs/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- ICONS CSS -->
\t    <link  id=\"style\" href=\"{{ asset ('css/icons.css') }}\" rel=\"stylesheet\">
        
        <!-- STYLES CSS -->
        <link href=\"{{ asset ('css/styles.css') }}\" rel=\"stylesheet\">

        <!-- NODE WAVES CSS -->
        <link href=\"{{asset ('libs/node-waves/waves.min.css') }}\" rel=\"stylesheet\">
        
        <!-- SwiperJS Css -->
        <link href=\"{{asset ('libs/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

        <!-- COLOR PICKER CSS -->
        <link href=\"{{asset ('libs/flatpickr/flatpickr.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{asset ('libs/@simonwep/pickr/themes/nano.min.css') }}\" rel=\"stylesheet\">

        <!-- CHOICES CSS -->
        <link rel=\"stylesheet\" href=\"{{asset ('libs/choices.js/public/assets/styles/choices.min.css') }}\">

        <!-- Internal Landing JS -->
        <script src=\"{{asset ('js/landing.js')}}\"></script>
\t</head>



{% block body %}
    <body class=\"landing-body\">
            <!-- SWITCHER -->
            <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"switcher-canvas\" aria-labelledby=\"offcanvasRightLabel\">
                <div class=\"offcanvas-header border-bottom\">
                    <h5 class=\"offcanvas-title\" id=\"offcanvasRightLabel\">Switcher</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                </div>
                <div class=\"offcanvas-body\">
                    <div class=\"\">
                        <p class=\"switcher-style-head\">Directions:</p>
                        <div class=\"row switcher-style\">
                            <div class=\"col-4\">
                                <div class=\"form-check switch-select\">
                                    <label class=\"form-check-label\" for=\"switcher-ltr\">
                                        LTR
                                    </label>
                                    <input class=\"form-check-input\" type=\"radio\" name=\"direction\" id=\"switcher-ltr\" checked>
                                </div>
                            </div>
                            <div class=\"col-4\">
                                <div class=\"form-check switch-select\">
                                    <label class=\"form-check-label\" for=\"switcher-rtl\">
                                        RTL
                                    </label>
                                    <input class=\"form-check-input\" type=\"radio\" name=\"direction\" id=\"switcher-rtl\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"theme-colors\">
                        <p class=\"switcher-style-head\">Theme Primary:</p>
                        <div class=\"d-flex align-items-center switcher-style\">
                            <div class=\"form-check switch-select me-3\">
                                <input class=\"form-check-input color-input color-primary-1\" type=\"radio\"
                                    name=\"theme-primary\" id=\"switcher-primary\">
                            </div>
                            <div class=\"form-check switch-select me-3\">
                                <input class=\"form-check-input color-input color-primary-2\" type=\"radio\"
                                    name=\"theme-primary\" id=\"switcher-primary1\">
                            </div>
                            <div class=\"form-check switch-select me-3\">
                                <input class=\"form-check-input color-input color-primary-3\" type=\"radio\" name=\"theme-primary\"
                                    id=\"switcher-primary2\">
                            </div>
                            <div class=\"form-check switch-select me-3\">
                                <input class=\"form-check-input color-input color-primary-4\" type=\"radio\" name=\"theme-primary\"
                                    id=\"switcher-primary3\">
                            </div>
                            <div class=\"form-check switch-select me-3\">
                                <input class=\"form-check-input color-input color-primary-5\" type=\"radio\" name=\"theme-primary\"
                                    id=\"switcher-primary4\">
                            </div>
                            <div class=\"form-check switch-select me-3 ps-0 mt-1 color-primary-light\">
                                <div class=\"theme-container-primary\"></div>
                                <div class=\"pickr-container-primary\"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class=\"switcher-style-head\">reset:</p>
                        <div class=\"text-center\">
                            <button id=\"reset-all\" class=\"btn btn-danger mt-3\">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SWITCHER -->
        <!-- PAGE -->
        <div class=\"landing-page-wrapper\">
            <!-- Start:: Header -->
            
            <!-- End:: Header -->
            <!-- Start:: Section-1 -->
            <aside class=\"app-sidebar sticky\" id=\"sidebar\">

                <div class=\"container-xl\">
                    <!-- Start::main-sidebar -->
                    <div class=\"main-sidebar\">

                        <!-- Start::nav -->
                        <nav class=\"main-menu-container nav nav-pills sub-open\">
                            <div class=\"landing-logo-container\">
                                <div class=\"horizontal-logo\">
                                    <a href=\"index.php\" class=\"header-logo\">
                                        <img src=\"{{ asset ('assets/images/brand-logos/desktop-logo.png') }}\" alt=\"logo\" class=\"desktop-logo\">
                                        <img src=\"{{ asset ('assets/images/brand-logos/desktop-dark.png') }}\" alt=\"logo\" class=\"desktop-logo\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"slide-left\" id=\"slide-left\"><svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#7b8191\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"> <path d=\"M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z\"></path> </svg></div>
                            <ul class=\"main-menu\">
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a class=\"side-menu__item\" href=\"#home\">
                                        <span class=\"side-menu__label\">Home</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#glance\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">Glance</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide has-sub\">
                                    <a href=\"javascript:void(0);\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label me-2\">More</span>
                                        <i class=\"fe fe-chevron-right side-menu__angle op-8\"></i>
                                    </a>
                                    <ul class=\"slide-menu child1\">
                                        <li class=\"slide\">
                                            <a href=\"#about-us\" class=\"side-menu__item\">About Us</a>
                                        </li>
                                        <li class=\"slide\">
                                            <a href=\"#services\" class=\"side-menu__item\">Services</a>
                                        </li>
                                        <li class=\"slide\">
                                            <a href=\"#features\" class=\"side-menu__item\">Features</a>
                                        </li>
                                        <li class=\"slide has-sub\">
                                            <a href=\"javascript:void(0);\" class=\"side-menu__item\">Level-2
                                                <i class=\"fe fe-chevron-right side-menu__angle\"></i></a>
                                            <ul class=\"slide-menu child2\">
                                                <li class=\"slide\">
                                                    <a href=\"javascript:void(0);\" class=\"side-menu__item\">Level-2-1</a>
                                                </li>
                                                <li class=\"slide has-sub\">
                                                    <a href=\"javascript:void(0);\" class=\"side-menu__item\">Level-2-2
                                                        <i class=\"fe fe-chevron-right side-menu__angle\"></i></a>
                                                    <ul class=\"slide-menu child3\">
                                                        <li class=\"slide\">
                                                            <a href=\"javascript:void(0);\" class=\"side-menu__item\">Level-2-2-1</a>
                                                        </li>
                                                        <li class=\"slide has-sub\">
                                                            <a href=\"javascript:void(0);\" class=\"side-menu__item\">Level-2-2-2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#pricing\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">Pricing</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#testimonials\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">Testimonials</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#faqs\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">FAQ's</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#team\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">Team</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class=\"slide\">
                                    <a href=\"#contact\" class=\"side-menu__item\">
                                        <span class=\"side-menu__label\">Contact Us</span>
                                    </a>
                                </li>
                                <!-- End::slide -->

                            </ul>
                            <div class=\"slide-right\" id=\"slide-right\"><svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#7b8191\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"> <path d=\"M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z\"></path> </svg></div>
                            <div class=\"d-lg-flex d-none\">
                                <div class=\"btn-list d-lg-flex d-none mt-lg-2 mt-xl-0 mt-0\">
                                    <a href=\"signup-basic.php\" class=\"btn btn-wave btn-primary\">
                                        Sign Up
                                    </a>
                                    <button class=\"btn btn-wave btn-icon btn-success switcher-icon\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#switcher-canvas\">
                                        <i class=\"ri-settings-3-line\"></i>
                                    </button>
                                </div>
                            </div>
                        </nav>
                        <!-- End::nav -->

                    </div>
                    <!-- End::main-sidebar -->
                </div>

            </aside>
            <div class=\"landing-banner\" id=\"home\">
                <section class=\"section\">
                    <div class=\"container main-banner-container pb-lg-0\">
                        <div class=\"row\">
                            <div class=\"col-xxl-7 col-xl-7 col-lg-7 col-md-8\">
                                <div class=\"py-lg-5\">
                                    <div class=\"mb-3\">
                                        <h6 class=\"fw-medium text-fixed-white op-8 fs-14\">- Level Up Your Design Universe</h6>
                                    </div>
                                    <p class=\"landing-banner-heading mb-3\">Empower your vision with our <span class=\"text-warning\">SciFi Template!</span> Design</p>
                                    <div class=\"fs-15 mb-5 text-fixed-white op-7\">SciFi -  Turn imagination into reality as you explore a realm where ideas flourish, and designs come to life. Elevate your brand and redefine excellence through our creative designs.</div>
                                    <a href=\"index.php\" class=\"m-1 btn btn-lg btn-secondary\">
                                        <i class=\"ri-eye-line me-2 align-middle\"></i>
                                        View Demos
                                    </a>
                                    <a href=\"index.php\" class=\"m-1 btn btn-lg bg-primary-transparent\">
                                        <i class=\"ri-arrow-right-line me-2 align-middle\"></i>
                                        Get Started
                                    </a>
                                </div>
                            </div>
                            <div class=\"col-xxl-5 col-xl-5 col-lg-5 col-md-4 my-auto\">
                                <div class=\"text-end landing-main-image landing-heading-img\">
                                    <img src=\"{{ asset ('assets/images/media/landing/1.png') }}\" alt=\"logo\" class=\"desktop-logo\">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End:: Section-1 -->

            <!-- Start:: Section-2 -->
            <section class=\"section\" id=\"glance\">
                <div class=\"container position-relative\">
                    <div class=\"text-center\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-Glance-</span></p>
                        <h3 class=\"fw-medium mb-2\">Why you choose us</h3>
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-7\">
                                <p class=\"text-muted fs-15 mb-5 fw-normal\">Our mission is to support you in achieving your goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xl-4\">
                            <div class=\"card custom-card landing-card border shadow-none text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-xl rounded-2 icon-shadow-primary bg-primary-transparent\">
                                            <i class=\"ri-lightbulb-flash-line fs-3\"></i>
                                        </span> 
                                    </div>
                                    <h4 class=\"fw-medium\">Creative Designs</h4>
                                    <p class=\"fs-14 text-muted\">Nam rhoncus mauris id nisi semper tempor. Phasellus vulputate sit amet elit eu rutrum</p>
                                    <a href=\"javascript:void(0);\" class=\"fw-medium text-primary\">Read More<i class=\"ti ti-arrow-narrow-right ms-2 fs-5 align-middle\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4\">
                            <div class=\"card custom-card landing-card border shadow-none text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-xl rounded-2 icon-shadow-info bg-info-transparent\">
                                            <i class=\"ri-customer-service-2-line fs-3\"></i>
                                        </span> 
                                    </div>
                                    <h4 class=\"fw-medium\">24/7 Customer Support</h4>
                                    <p class=\"fs-14 text-muted\">Nam rhoncus mauris id nisi semper tempor. Phasellus vulputate sit amet elit eu rutrum</p>
                                    <a href=\"javascript:void(0);\" class=\"fw-medium text-info\">Read More<i class=\"ti ti-arrow-narrow-right ms-2 fs-5 al align-middle\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4\">
                            <div class=\"card custom-card landing-card border shadow-none text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-xl rounded-2 icon-shadow-warning bg-warning-transparent\">
                                            <i class=\"ri-vip-diamond-line fs-3\"></i>
                                        </span> 
                                    </div>
                                    <h4 class=\"fw-medium\">Skilled Staff</h4>
                                    <p class=\"fs-14 text-muted\">Nam rhoncus mauris id nisi semper tempor. Phasellus vulputate sit amet elit eu rutrum</p>
                                    <a href=\"javascript:void(0);\" class=\"fw-medium text-warning\">Read More<i class=\"ti ti-arrow-narrow-right ms-2 fs-5 align-middle\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-2 -->

            <!-- Start:: Section-3 -->
            <section class=\"section  section-bg\" id=\"about-us\">
                <div class=\"container\">
                    <div class=\"row gx-5 mx-0\">
                        <div class=\"col-xl-4\">
                            <div class=\"home-proving-image\">
                                <img src=\"{{ asset ('assets/images/media/landing/2.png') }}\" alt=\"logo\" class=\"desktop-logo\">
                            </div>
                            <div class=\"proving-pattern-1\"></div>
                        </div>
                        <div class=\"col-xl-8 my-auto\">
                            <div class=\"heading-section text-start mb-4\">
                                <div class=\"heading-subtitle fw-medium\"><span class=\"landing-section-heading text-success\">-About Us-</span></div>
                                <h4 class=\"heading-title\">Where Innovation Meets Passion!</h4>
                                <div class=\"heading-description fs-14 op-8\">Welcome to SciFi, where we offer a unique and tailored
                                    experience that is sure to exceed your expectations. Choose us and let us show you
                                    what true excellence looks like</div>
                            </div>
                            <div class=\"row gy-3 mb-0 ps-3\">
                                <div class=\"col-xl-12\">
                                    <div class=\"d-flex align-items-top\">
                                        <div class=\"me-2 home-prove-svg\">
                                            <i class=\"ri-arrow-right-circle-line align-middle fs-16 text-secondary d-inline-block\"></i>
                                        </div>
                                        <div>
                                            <span class=\"fs-14\">
                                                Benefiting from years of industry experience, we've forged a reputable standing in our field.Sed convallis lobortis nisl. Maecenas aliquet lorem turpis, nec vehicula ante finibus in. Donec id egestas eros. 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-12\">
                                    <div class=\"d-flex align-items-top\">
                                        <div class=\"me-2 home-prove-svg\">
                                            <i class=\"ri-arrow-right-circle-line align-middle fs-16 text-secondary d-inline-block\"></i>
                                        </div>
                                        <div>
                                            <span class=\"fs-14\">
                                                Comprising skilled and seasoned professionals, our team.Sed convallis lobortis nisl. Maecenas aliquet lorem turpis, nec vehicula ante finibus in. Donec id egestas eros. 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-12\">
                                    <div class=\"d-flex align-items-top\">
                                        <div class=\"me-2 home-prove-svg\">
                                            <i class=\"ri-arrow-right-circle-line align-middle fs-16 text-secondary d-inline-block\"></i>
                                        </div>
                                        <div>
                                            <span class=\"fs-14\">
                                                We customize our services to meet individual needs..Sed convallis lobortis nisl. Maecenas aliquet lorem turpis, nec vehicula ante finibus in. Donec id egestas eros. 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-3 -->

            <!-- Start:: Section-4 -->
            <section class=\"section\" id=\"services\">
                <div class=\"container\">
                    <div class=\"text-center\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-SERVICES-</span></p>
                        <h3 class=\"fw-medium mb-2\">Our Best Services</h3>
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-7\">
                                <p class=\"text-muted fs-15 mb-5 fw-normal\">Sed semper euismod, augue justo ullamcorper orci, eu imperdiet </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-3\">
                                        <span class=\"avatar avatar-lg bg-primary-transparent border border-primary border-opacity-10\">
                                            <i class=\"ri-pencil-ruler-2-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Design</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet dolorem ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-warning-transparent border border-warning border-opacity-10\">
                                            <i class=\"ri-settings-3-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Development</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet dolorem ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-info-transparent border border-info border-opacity-10\">
                                            <i class=\"ri-shield-check-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\"> Quality Tested</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet dolorem ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-success-transparent border border-success border-opacity-10\">
                                            <i class=\"ri-palette-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Multiple Themes</h5>
                                    <p class=\"fs-14 text-muted mb-0\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiiss.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-danger-transparent border border-danger border-opacity-10\">
                                            <i class=\"ri-equalizer-2-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Customization</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-secondary-transparent border border-secondary border-opacity-10\">
                                            <i class=\"ri-dashboard-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Multiple Demos</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-teal-transparent border border-teal border-opacity-10\">
                                            <i class=\"ri-refresh-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Regular Updates</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3\">
                            <div class=\"card custom-card landing-card\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <span class=\"avatar avatar-lg bg-pink-transparent border border-pink border-opacity-10\">
                                            <i class=\"ri-smartphone-line fs-5\"></i>
                                        </span>
                                    </div>
                                    <h5 class=\"fw-medium\">Fully Responsive</h5>
                                    <p class=\"fs-14 text-muted mb-0\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-4 -->

            <!-- Start:: Section-5 -->
            <section class=\"section landing-Features\" id=\"features\">
                <div class=\"container\">
                    <div class=\"heading-section text-center mb-0\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-Features-</span></p>
                        <h2 class=\"text-fixed-white text-center fw-medium\">Our Features</h2>
                        <div class=\"fs-16 text-fixed-white text-center op-8 mb-5\">Ullamco ea commodo.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.perspiciatis unde omnis.</div>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center trusted-companies sub-card-companies flex-wrap mb-3 mb-xl-0 gap-5\">
                        <div class=\"trust-img\"><img src=\"{{ asset ('assets/images/media/landing/web/1.png') }}\" alt=\"img\" class=\"border-0\"></div>
                        <div class=\"trust-img\"><img src=\"{{ asset ('assets/images/media/landing/web/2.png') }}\" alt=\"img\" class=\"border-0\"></div>
                        <div class=\"trust-img\"><img src=\"{{ asset ('assets/images/media/landing/web/3.png') }}\" alt=\"img\" class=\"border-0\"></div>
                        <div class=\"trust-img\"><img src=\"{{ asset ('assets/images/media/landing/web/4.png') }}\" alt=\"img\" class=\"border-0\"></div>
                        <div class=\"trust-img\"><img src=\"{{ asset ('assets/images/media/landing/web/5.png') }}\" alt=\"img\" class=\"border-0\"></div>
                        <div class=\"trust-img\"><img src=\"{{ asset ('assets/images/media/landing/web/6.png') }}\" alt=\"img\" class=\"border-0\"></div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-5 -->

            <!-- Start:: Section-7 -->
            <section class=\"section\" id=\"pricing\">
                <div class=\"container\">
                    <div class=\"text-center\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-PRICING-</span></p>
                        <h3 class=\"fw-medium mb-2\">Pricing Plans for You</h3>
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-7\">
                                <p class=\"text-muted fs-15 mb-5 fw-normal\">Our user-friendly plans are carefully tailored to accommodate every category effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card custom-card landing-card pricing-card border shadow-none\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <p class=\"fs-18 fw-medium mb-1\">Intro</p>
                                        <p class=\"mb-1 fs-14 op-8\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                        <p class=\"text-justify fw-medium mb-1\">
                                            <span class=\"fs-2\">\$</span><span class=\"fs-40 me-1\">0</span>
                                            <span class=\"fs-20 op-6\"><span class=\"fs-20\">/</span> month</span>
                                        </p>
                                        <p class=\"fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex\"><i class=\"ri-information-line align-middle me-1 d-inline-block fs-11\"></i>Billed monthly on regular basis!</p>
                                    </div>
                                    <ul class=\"text-justify list-unstyled pricing-body ps-0\">
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 6 Users
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span>10 Days Pack
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Basic serivces
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Backups
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-x-circle align-middle fs-16 op-5 d-inline-block\"></i></span> Advanced Security</li>
                                        <li class=\"mb-0\"><span class=\"me-1\"><i class=\"fe fe-x-circle align-middle fs-16 op-5 d-inline-block\"></i></span> 24/7 support serivce</li>
                                    </ul>
                                    <div class=\"text-center border-top-0 pt-4 d-grid\">
                                        <button type=\"button\" class=\"btn btn-lg btn-primary-light\">
                                            <span class=\"ms-4 me-4\">Get Plan Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card custom-card landing-card pricing-card border shadow-none\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <p class=\"fs-18 fw-medium mb-1\">Basic</p>
                                        <p class=\"mb-1 fs-14 op-8\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                        <p class=\"text-justify fw-medium mb-1\">
                                            <span class=\"fs-2\">\$</span><span class=\"fs-40 me-1\">29</span>
                                            <span class=\"fs-20 op-6\"><span class=\"fs-20\">/</span> month</span>
                                        </p>
                                        <p class=\"fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex\"><i class=\"ri-information-line align-middle me-1 d-inline-block fs-11\"></i>Billed monthly on regular basis!</p>
                                    </div>
                                    <ul class=\"text-justify list-unstyled pricing-body ps-0\">
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 8 Users
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span>48 Days Pack
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Basic serivces
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Backups
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-x-circle align-middle fs-16 op-5 d-inline-block\"></i></span> Advanced Security</li>
                                        <li class=\"mb-0\"><span class=\"me-1\"><i class=\"fe fe-x-circle align-middle fs-16 op-5 d-inline-block\"></i></span> 24/7 support serivce</li>
                                    </ul>
                                    <div class=\"text-center border-top-0 pt-4 d-grid\">
                                        <button type=\"button\" class=\"btn btn-lg btn-primary-light\">
                                            <span class=\"ms-4 me-4\">Get Plan Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card pricing-card border custom-card landing-card border-primary shadow-none\">
                                <div class=\"card-body\">
                                    <span class=\"popular-pricing-badge\"><i class=\"ri-flashlight-line me-1 d-inline-block\"></i>Most Popluar</span>
                                    <div class=\"mb-4\">
                                        <p class=\"fs-18 fw-medium mb-1\">Popular</p>
                                        <p class=\"mb-1 fs-14 op-8\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                        <p class=\"text-justify fw-medium mb-1\">
                                            <span class=\"fs-2\">\$</span><span class=\"fs-40 me-1\">49</span>
                                            <span class=\"fs-20 op-6\"><span class=\"fs-20\">/</span> month</span>
                                        </p>
                                        <p class=\"fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex\"><i class=\"ri-information-line align-middle me-1 d-inline-block fs-11\"></i>Billed monthly on regular basis!</p>
                                    </div>
                                    <ul class=\"text-justify list-unstyled pricing-body ps-0\">
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 8 Users
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 28 Days Pack
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Basic serivces
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Backups
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Advanced Security</li>
                                        <li class=\"mb-0\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 24/7 support serivce</li>
                                    </ul>
                                    <div class=\"text-center border-top-0 pt-4 d-grid\">
                                        <button type=\"button\" class=\"btn btn-lg btn-primary\">
                                            <span class=\"ms-4 me-4\">Get Plan Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12\">
                            <div class=\"card custom-card landing-card pricing-card border shadow-none\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <div class=\"mb-4\">
                                        <p class=\"fs-18 fw-medium mb-1\">Advanced</p>
                                        <p class=\"mb-1 fs-14 op-8\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                        <p class=\"text-justify fw-medium mb-1\">
                                            <span class=\"fs-2\">\$</span><span class=\"fs-40 me-1\">29</span>
                                            <span class=\"fs-20 op-6\"><span class=\"fs-20\">/</span> month</span>
                                        </p>
                                        <p class=\"fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex\"><i class=\"ri-information-line align-middle me-1 d-inline-block fs-11\"></i>Billed monthly on regular basis!</p>
                                    </div>
                                    <ul class=\"text-justify list-unstyled pricing-body ps-0\">
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> 4 Users
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span>28 Days Pack
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Basic serivces
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Backups
                                        </li>
                                        <li class=\"mb-3\"><span class=\"me-1\"><i class=\"fe fe-check-circle align-middle fs-14 text-success d-inline-block\"></i></span> Advanced Security</li>
                                        <li class=\"mb-0\"><span class=\"me-1\"><i class=\"fe fe-x-circle align-middle fs-16 op-5 d-inline-block\"></i></span> 24/7 support serivce</li>
                                    </ul>
                                    <div class=\"text-center border-top-0 pt-4 d-grid\">
                                        <button type=\"button\" class=\"btn btn-lg btn-primary-light\">
                                            <span class=\"ms-4 me-4\">Get Plan Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-7 -->

            <!-- Start:: Section-8 -->
            <section class=\"section section-bg\" id=\"testimonials\">
                <div class=\"container reviews-container\">
                    <div class=\"text-center\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-Testimonials-</span></p>
                        <h3 class=\"fw-medium mb-2\">What people think about us</h3>
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-7\">
                                <p class=\"text-muted fs-15 mb-5 fw-normal\">Here are the testimonials shared by our highly satisfied customers about our product.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper testimonialSwiperService\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.5 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">10 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">Violet Sofi</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">violetsofi@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"{{ asset ('assets/images/faces/3.jpg') }}\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-half-line fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.3 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">5 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">David John</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">davidjohn@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"{{ asset ('assets/images/faces/9.jpg') }}\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-half-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.3 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">2 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">Arunima Alice</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">Arunimaalice@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"{{ asset ('assets/images/faces/8.jpg') }}\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-half-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.3 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">17 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">Isaac Elias</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">isaacelias@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"{{ asset ('assets/images/faces/10.jpg') }}\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.1 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">13 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">Stella Joy</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">Stellajoy@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"{{ asset ('assets/images/faces/2.jpg') }}\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"card custom-card text-fixed-white\">
                                    <div class=\"top-left\"></div>
                                    <div class=\"top-right\"></div>
                                    <div class=\"bottom-left\"></div>
                                    <div class=\"bottom-right\"></div>
                                    <div class=\"card-body\">
                                        <i class=\"ri-double-quotes-l text-primary fs-2\"></i>
                                        <div class=\"op-9 fs-14 mb-3\">Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.  -- 
                                            <a href=\"javascript:void(0);\" class=\"fw-medium fs-11 text-info\" data-bs-toggle=\"tooltip\" data-bs-custom-class=\"tooltip-primary\" data-bs-placement=\"top\" data-bs-title=\"Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.\">Read More</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <span class=\"text-warning d-block me-1\">
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-fill fs-14 align-middle lh-1\"></i>
                                                        <i class=\"ri-star-half-line fs-14 align-middle lh-1\"></i>
                                                    </span>
                                                    <span class=\"op-8\">4.3 </span>
                                                </div>
                                                <span class=\"fs-11 op-7\">2 days ago</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-end me-2\">
                                                    <p class=\"mb-0 fw-medium fs-14\">Reva Saan</p>
                                                    <p class=\"mb-0 fs-11 fw-normal op-7\">revasaan@gmail.com</p>
                                                </div>
                                                <span class=\"avatar\">
                                                    <img src=\"{{ asset ('assets/images/faces/5.jpg') }}\" alt=\"\" class=\"img-fluid\">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal\"></div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-8 -->

            <!-- Start:: Section-9 -->
            <section class=\"section\" id=\"faqs\">
                <div class=\"container text-center\">
                    <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-F.A.Q-</span></p>
                    <h3 class=\"fw-medium mb-2\">Frequently asked questions ?</h3>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-7\">
                            <p class=\"text-muted fs-15 mb-5 fw-normal\">We have provided a list of commonly asked questions to assist you..</p>
                        </div>
                    </div>
                    <div class=\"row text-start\">
                        <div class=\"col-xl-12\">
                            <div class=\"row gy-2\">
                                <div class=\"col-xl-6\">
                                    <div class=\"accordion accordion-customicon1 accordion-primary accordions-items-seperate\" id=\"accordionFAQ1\">
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1One\">
                                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\"
                                                    data-bs-target=\"#collapsecustomicon1One\" aria-expanded=\"true\"
                                                    aria-controls=\"collapsecustomicon1One\">
                                                     How do I integrate the template into my project?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1One\" class=\"accordion-collapse collapse show\"
                                                aria-labelledby=\"headingcustomicon1One\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1Two\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon1Two\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon1Two\">
                                                    How frequently is the template updated?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1Two\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon1Two\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    Check the template provider's website or documentation for information on updates. Regular updates may include bug fixes, new features, or compatibility improvements.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1Three\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon1Three\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon1Three\">
                                                    What support options are available for landing page services?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1Three\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon1Three\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1Four\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon1Four\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon1Four\">
                                                    Can I upgrade or downgrade my subscription plan?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1Four\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon1Four\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    Yes, you can upgrade or downgrade your subscription plan at any time. Visit your account settings or contact our support team to make changes to your subscription level.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1Five\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon1Five\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon1Five\">
                                                     How often will I be billed for my subscription?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1Five\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon1Five\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    Billing frequency depends on your chosen subscription plan. We offer monthly, quarterly, and annual billing options. Check your subscription details for the billing cycle information.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon1Six\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon1Six\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon1Six\">
                                                    What is included in the subscription service?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon1Six\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon1Six\"
                                                data-bs-parent=\"#accordionFAQ1\">
                                                <div class=\"accordion-body\">
                                                    Our subscription service typically provides access to premium features, exclusive content, and ongoing updates related to our landing page offerings.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-6\">
                                    <div class=\"accordion accordion-customicon1 accordion-primary accordions-items-seperate\" id=\"accordionFAQ2\">
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2Five\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon2Five\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon2Five\">
                                                     How often will I be billed for my subscription?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2Five\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon2Five\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    Billing frequency depends on your chosen subscription plan. We offer monthly, quarterly, and annual billing options. Check your subscription details for the billing cycle information.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2Six\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon2Six\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon2Six\">
                                                    What is included in the subscription service?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2Six\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon2Six\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    Our subscription service typically provides access to premium features, exclusive content, and ongoing updates related to our landing page offerings.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2One\">
                                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                                    data-bs-target=\"#collapsecustomicon2One\" aria-expanded=\"true\"
                                                    aria-controls=\"collapsecustomicon2One\">
                                                     How do I integrate the template into my project?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2One\" class=\"accordion-collapse collapse \"
                                                aria-labelledby=\"headingcustomicon2One\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2Two\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon2Two\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon2Two\">
                                                    How frequently is the template updated?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2Two\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon2Two\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    Check the template provider's website or documentation for information on updates. Regular updates may include bug fixes, new features, or compatibility improvements.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2Three\">
                                                <button class=\"accordion-button collapsed\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon2Three\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon2Three\">
                                                    What are your opening hours?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2Three\" class=\"accordion-collapse collapse\"
                                                aria-labelledby=\"headingcustomicon2Three\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\" id=\"headingcustomicon2Four\">
                                                <button class=\"accordion-button\" type=\"button\"
                                                    data-bs-toggle=\"collapse\" data-bs-target=\"#collapsecustomicon2Four\"
                                                    aria-expanded=\"false\" aria-controls=\"collapsecustomicon2Four\">
                                                    Do I have the right to return an item?
                                                </button>
                                            </h2>
                                            <div id=\"collapsecustomicon2Four\" class=\"accordion-collapse collapse show\"
                                                aria-labelledby=\"headingcustomicon2Four\"
                                                data-bs-parent=\"#accordionFAQ2\">
                                                <div class=\"accordion-body\">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element. These classes control the overall appearance,
                                                    as well as the showing and hiding via CSS transitions. You can modify
                                                    any of this with custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-9 -->

            <!-- Start:: Section-10 -->
            <section class=\"section section-bg\" id=\"team\">
                <div class=\"container\">
                    <div class=\"text-center\">
                        <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-TEAM-</span></p>
                        <h3 class=\"fw-medium mb-2\">Meet our amazing Team</h3>
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-7\">
                                <p class=\"text-muted fs-15 mb-5 fw-normal\">Our team is made up of real people who are passionate about what they do.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4\">
                            <div class=\"card custom-card  team-card text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <img src=\"{{ asset ('assets/images/media/landing/team/1.png') }}\" alt=\"\" class=\"avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2\">
                                    <div class=\"text-center py-2\">
                                        <h5 class=\"mb-0 fw-medium\">Charlie John</h5>
                                        <p class=\"mb-1 fs-14 fw-medium text-primary\">HR Manager</p>
                                        <p class=\"mb-0 fs-13 text-muted op-8\">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                        <div class=\"d-flex justify-content-center mt-4\">
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light\"><i class=\"ri-twitter-x-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-facebook-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-instagram-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-linkedin-line align-middle\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4\">
                            <div class=\"card custom-card  team-card text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <img src=\"{{ asset ('assets/images/media/landing/team/2.png') }}\" alt=\"\" class=\"avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2\">
                                    <div class=\"text-center py-2\">
                                        <h5 class=\"mb-0 fw-medium\">Marlin Shane</h5>
                                        <p class=\"mb-1 fs-14 fw-medium text-primary\">Team Lead</p>
                                        <p class=\"mb-0 fs-13 text-muted op-8\">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                        <div class=\"d-flex justify-content-center mt-4\">
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light\"><i class=\"ri-twitter-x-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-facebook-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-instagram-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-linkedin-line align-middle\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4\">
                            <div class=\"card custom-card  team-card text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <img src=\"{{ asset ('assets/images/media/landing/team/3.png') }}\" alt=\"\" class=\"avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2\">
                                    <div class=\"text-center py-2\">
                                        <h5 class=\"mb-0 fw-medium\">Angela Lia</h5>
                                        <p class=\"mb-1 fs-14 fw-medium text-primary\">Project Manager</p>
                                        <p class=\"mb-0 fs-13 text-muted op-8\">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                        <div class=\"d-flex justify-content-center mt-4\">
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light\"><i class=\"ri-twitter-x-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-facebook-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-instagram-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-linkedin-line align-middle\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4\">
                            <div class=\"card custom-card  team-card text-center\">
                                <div class=\"top-left\"></div>
                                <div class=\"top-right\"></div>
                                <div class=\"bottom-left\"></div>
                                <div class=\"bottom-right\"></div>
                                <div class=\"card-body\">
                                    <img src=\"{{ asset ('assets/images/media/landing/team/4.png') }}\" alt=\"\" class=\"avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2\">
                                    <div class=\"text-center py-2\">
                                        <h5 class=\"mb-0 fw-medium\">Stella Daisy</h5>
                                        <p class=\"mb-1 fs-14 fw-medium text-primary\">Head of Department</p>
                                        <p class=\"mb-0 fs-13 text-muted op-8\">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                        <div class=\"d-flex justify-content-center mt-4\">
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light\"><i class=\"ri-twitter-x-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-facebook-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-instagram-line align-middle\"></i></a>
                                            <a aria-label=\"anchor\" href=\"javascript:void(0);\" class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2\"><i class=\"ri-linkedin-line align-middle\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End:: Section-10 -->

            <!-- Start:: Section-11 -->
            <section class=\"section\" id=\"contact\">
                <div class=\"container text-center\">
                    <p class=\"fs-12 fw-medium text-success mb-1\"><span class=\"landing-section-heading\">-CONTACT US-</span></p>
                    <h3 class=\"fw-medium mb-2\">Do you have any questions?</h3>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-9\">
                            <p class=\"text-muted fs-15 mb-5 fw-normal\"> Have questions, or need help with a product or service, contacting support allows you to connect with a dedicated team of professionals</p>
                        </div>
                    </div>
                    <div class=\"card custom-card  overflow-hidden section-bg border overflow-hidden shadow-none\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-body p-0\">
                            <div class=\"row text-start align-items-center\">
                                <div class=\"col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                                    <div class=\"p-4\">
                                        <div class=\"row mt-2 px-3\">
                                            <div class=\"col-xl-12\">
                                                <div class=\"row gy-3\">
                                                    <div class=\"col-xl-12\">
                                                        <label for=\"contact-address-name\" class=\"form-label \">Full Name :</label>
                                                        <input type=\"text\" class=\"form-control \" id=\"contact-address-name\" placeholder=\"Enter Name\">
                                                    </div>
                                                    <div class=\"col-xl-12\">
                                                        <label for=\"contact-address-mail\" class=\"form-label \">Mail Address :</label>
                                                        <input type=\"text\" class=\"form-control \" id=\"contact-address-mail\" placeholder=\"Enter Mail Address\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-12\">
                                                <label for=\"contact-address-message\" class=\"form-label \">Message :</label>
                                                <textarea class=\"form-control \" id=\"contact-address-message\" rows=\"2\" placeholder=\"Type Here\"></textarea>
                                            </div>
                                            <div class=\"col-xl-12\">
                                                <div class=\"text-end mt-4\">
                                                    <button class=\"btn btn-primary btn-wave\">Send Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                                    <div class=\"p-4 landing-contact-info\">
                                        <div class=\"p-3\">
                                            <div class=\"fs-18 text-primary fw-medium mb-3\">Contact Information</div>
                                            <div class=\"mb-3\">
                                                <i class=\"ri-map-pin-fill me-2 text-primary\"></i> 1352/A-12, Abcd Street, KLM Town, Hyderabad.
                                            </div>
                                            <div class=\"d-flex mb-3\">
                                                <i class=\"ri-phone-fill me-2 d-inline-block text-primary\"></i> 
                                                <div>
                                                    <div>+122 1234 32422</div>
                                                    <span>+121 1234 14511</span>
                                                </div>
                                            </div>
                                            <div class=\"mb-4\"><i class=\"ri-mail-fill me-2 d-inline-block text-primary\"></i> carolinahanasandy4424@example.com</div>
                                        </div>
                                        <div class=\"p-3 pt-0\">
                                            <div class=\"card custom-card border mb-0 shadow-none overflow-hidden\">
                                                <iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d30444.274596168965!2d78.54114692513858!3d17.48198883339408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d17.4886524!2d78.5495041!4m5!1s0x3bcb9c7ec139a15d%3A0x326d1c90786b2ab6!2sspruko%20technologies!3m2!1d17.474805099999998!2d78.570258!5e0!3m2!1sen!2sin!4v1670225507254!5m2!1sen!2sin\"  
                                                height=\"100\" style=\"border:0;width:100%\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-11 -->

            <!-- Start:: Section-12 -->
            <section class=\"section landing-footer text-fixed-white\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-sm-6 col-12 mb-md-0 mb-3\">
                            <div class=\"px-4\">
                                <p class=\"fw-medium mb-3\"><a href=\"index.php\"><img src=\"{{ asset ('assets/images/brand-logos/desktop-dark.png') }}\" alt=\"\" class=\"landing-footer-logo\"></a></p>
                                <p class=\"mb-2 op-6 fw-normal fs-14\">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed. Reprehenderit et magnam, fuga est mollitia eius.
                                </p>
                                <p class=\"mb-0 op-6 fw-normal fs-14\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem ea esse ad</p>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6 col-12\">
                            <div class=\"px-4\">
                                <h6 class=\"fw-medium mb-3 text-fixed-white\">PAGES</h6>
                                <ul class=\"list-unstyled op-6 fw-normal landing-footer-list fs-14 mb-lg-0\">
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Profile</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Timeline</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Email</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Contacts</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Projects</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6 col-12\">
                            <div class=\"px-4\">
                                <h6 class=\"fw-medium text-fixed-white\">INFO</h6>
                                <ul class=\"list-unstyled op-6 fw-normal landing-footer-list fs-14 mb-lg-0\">
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Contact US</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Services</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Our Team</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">Blog</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white\">About</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6 col-12\">
                            <div class=\"px-4\">
                                <h6 class=\"fw-medium text-fixed-white\">Social</h6>
                                <ul class=\"list-unstyled fw-normal mb-lg-0 landing-footer-list fs-14\">
                                    <li class=\"d-flex gap-1 align-items-center\">
                                        <button class=\"btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light\">
                                            <i class=\"ri-facebook-line fw-bold\"></i>
                                        </button>
                                        <div class=\"ms-2 op-8\">Facebook</div>
                                    </li>
                                    <li class=\"d-flex gap-1 align-items-center\">
                                        <button class=\"btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light\">
                                            <i class=\"ri-twitter-x-line fw-bold\"></i>
                                        </button>
                                        <div class=\"ms-2 op-8\">Twitter</div>
                                    </li>
                                    <li class=\"d-flex gap-1 align-items-center\">
                                        <button class=\"btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light\">
                                            <i class=\"ri-instagram-line fw-bold\"></i>
                                        </button>
                                        <div class=\"ms-2 op-8\">Instagram</div>
                                    </li>
                                    <li class=\"d-flex gap-1 align-items-center\">
                                        <button class=\"btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light\">
                                            <i class=\"ri-youtube-line fw-bold\"></i>
                                        </button>
                                        <div class=\"ms-2 op-8\">Youtube</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6 col-12\">
                            <div class=\"px-4\">
                                <h6 class=\"fw-medium text-fixed-white\">CONTACT INFO</h6>
                                <ul class=\"list-unstyled fw-normal mb-lg-0 landing-footer-list fs-14\">
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white op-6\"><i class=\"ri-home-4-line me-1 align-middle\"></i> New York, NY 10012, US</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white op-6\"><i class=\"ri-mail-line me-1 align-middle\"></i> info@fmail.com</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white op-6\"><i class=\"ri-mail-line me-1 align-middle\"></i> contact@fmail.com</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white op-6\"><i class=\"ri-phone-line me-1 align-middle\"></i> +(555)-1920 1831</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\" class=\"text-fixed-white op-6\"><i class=\"ri-printer-line me-1 align-middle\"></i> +(123) 1293 123</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-12 -->
            <!-- SCROLL-TO-TOP -->
            <div class=\"scrollToTop\">
                    <span class=\"arrow\"><i class=\"ri-arrow-up-s-fill fs-20\"></i></span>
            </div>
            <div id=\"responsive-overlay\"></div>
        </div>    
{% endblock %}
        <!-- END PAGE-->

        <!-- SCRIPTS -->
        

        <!-- POPPER JS -->
        <script src=\"{{ asset ('libs/@popperjs/core/umd/popper.min.js') }}\"></script>

        <!-- BOOTSTRAP JS -->
        <script src=\"{{ asset ('libs/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

        <!-- COLOR PICKER JS -->
        <script src=\"{{ asset ('libs/@simonwep/pickr/pickr.es5.min.js') }}\"></script>

        <!-- Swiper JS -->
        // <script src=\"{{ asset ('libs/swiper/swiper-bundle.min.js') }}\"></script>

        // <!-- CHOICES JS -->
        // <script src=\"{{ asset ('libs/choices.js/public/assets/scripts/choices.min.js') }}\"></script>
        
        // <!-- NODE WAVES JS -->
        // <script src=\"{{ asset ('libs/node-waves/waves.min.js') }}\"></script>

        // <!-- DEFAULTMENU JS -->
        // <script src=\"{{ asset ('js/defaultmenu.js') }}\"></script>


        // <!-- STICKY JS -->
        // <script src=\"{{ asset ('js/sticky.js') }}\"></script>

        <!-- END SCRIPTS -->

\t</body>
</html>




", "landing.html.twig", "E:\\work\\scifi\\templates\\landing.html.twig");
    }
}
