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

/* pages/topMenu.html.twig */
class __TwigTemplate_6d1ccdca7427254e814f90fc87c7a3d0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/topMenu.html.twig"));

        // line 2
        yield "    
        <header class=\"app-header sticky\"> 

            <!-- Start::main-header-container -->
            <div class=\"main-header-container container-fluid\"> 

                <!-- Start::header-content-left -->
                <div class=\"header-content-left\">

                    <!-- Start::header-element -->
                    <div class=\"header-element\">
                        <div class=\"horizontal-logo\">
                            <a href=\"index.php\" class=\"header-logo\">
                                ";
        // line 16
        yield "                                ";
        // line 19
        yield "                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class=\"header-element mx-lg-0 mx-2\">
                        <a aria-label=\"Hide Sidebar\" class=\"sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle\" data-bs-toggle=\"sidebar\" href=\"javascript:void(0);\"><span></span></a>
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <ul class=\"header-content-right\">

                    <!-- Start::header-element -->
                    <li class=\"header-element header-search d-md-block d-none\">
                        <!-- Start::header-link -->
                        <input type=\"text\" class=\"header-search-bar form-control border-0\" placeholder=\"Search for Results...\">
                        <a href=\"javascript:void(0);\" class=\"header-search-icon border-0\">
                            <i class=\"bi bi-search\"></i>
                        </a>
                        <!-- End::header-link -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element d-md-none d-block\">
                        <a href=\"javascript:void(0);\" class=\"header-link\" data-bs-toggle=\"modal\" data-bs-target=\"#header-responsive-search\">
                            <!-- Start::header-link-icon -->
                            <i class=\"bi bi-search header-link-icon\"></i>
                            <!-- End::header-link-icon -->
                        </a>  
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element country-selector dropdown\">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href=\"javascript:void(0);\" class=\"header-link dropdown-toggle\" id=\"mainHeaderProfile\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <img src=\"assets/images/flags/us_flag.jpg\" alt=\"img\" class=\"header-link-icon\">
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class=\"main-header-dropdown dropdown-menu dropdown-menu-end\" data-popper-placement=\"none\">
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/us_flag.jpg\" alt=\"img\" class=\"header-link-icon\">
                                    </span>
                                    English
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/spain_flag.jpg\" alt=\"img\" >
                                    </span>
                                    Spanish
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/french_flag.jpg\" alt=\"img\" >
                                    </span>
                                    French
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/Germany_flag.jpg\" alt=\"img\" >
                                    </span>
                                    German
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/italy_flag.jpg\" alt=\"img\" >
                                    </span>
                                    Italian
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/russia_flag.jpg\" alt=\"img\" >
                                    </span>
                                    Russian
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element header-fullscreen\">
                        <!-- Start::header-link -->
                        <a onclick=\"openFullscreen();\" href=\"javascript:void(0);\" class=\"header-link\">
                            <i class=\"bi bi-fullscreen full-screen-open header-link-icon\"></i>
                            <i class=\"bi bi-fullscreen-exit full-screen-close header-link-icon d-none\"></i>
                        </a>
                        <!-- End::header-link -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element\">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href=\"javascript:void(0);\" class=\"header-link\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#apps-header-offcanvas\">
                            <i class=\"bi bi-grid header-link-icon\"></i>
                        </a>
                        <!-- End::main-header-dropdown -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element notifications-dropdown  dropdown\">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href=\"javascript:void(0);\" class=\"header-link dropdown-toggle\" data-bs-auto-close=\"outside\" data-bs-toggle=\"dropdown\">
                            <i class=\"bi bi-bell header-link-icon\"></i>
                            <span class=\"header-icon-pulse bg-warning rounded pulse\"></span>
                        </a>
                        <div class=\"main-header-dropdown dropdown-menu dropdown-menu-end\" data-popper-placement=\"none\">
                            <div class=\"p-3\">
                                <div class=\"d-flex align-items-center justify-content-between\">
                                    <p class=\"mb-0 fs-16\">Notifications</p>
                                    <span class=\"badge bg-secondary-transparent\" id=\"notifiation-data\">4 Unread</span>
                                </div>
                            </div>
                            <div class=\"dropdown-divider\"></div>
                            <ul class=\"list-unstyled mb-0\" id=\"header-notification-scroll\">
                                <li class=\"dropdown-item\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"pe-2 lh-1\">
                                            <span class=\"avatar avatar-rounded\">
                                                <img src=\"assets/images/faces/6.jpg\" alt=\"\">
                                            </span>
                                        </div>
                                        <div class=\"flex-grow-1 d-flex align-items-center justify-content-between\">
                                            <div>
                                                <p class=\"mb-0 fw-medium\"><a href=\"notifications.php\">Jessica Lily</a></p>
                                                <span class=\"text-muted fw-normal fs-12 header-notification-text\">Reminder to complete your weekly tasks</span>
                                            </div>
                                            <div>
                                                <a href=\"javascript:void(0);\" class=\"min-w-fit-content text-muted me-1 dropdown-item-close1\"><i class=\"bi bi-x\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"dropdown-item\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"pe-2 lh-1\">
                                            <span class=\"avatar bg-success-transparent avatar-rounded\">
                                                <i class=\"ri-arrow-left-down-fill fs-18\"></i>
                                            </span>
                                        </div>
                                        <div class=\"flex-grow-1 d-flex align-items-center justify-content-between\">
                                            <div>
                                                <p class=\"mb-0 fw-medium\"><a href=\"notifications.php\">Payment Received</a></p>
                                                <span class=\"text-muted fw-normal fs-12 header-notification-text\">You've been paid for freelance project.</span>
                                            </div>
                                            <div>
                                                <a href=\"javascript:void(0);\" class=\"min-w-fit-content text-muted me-1 dropdown-item-close1\"><i class=\"bi bi-x\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"dropdown-item\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"pe-2 lh-1\">
                                            <span class=\"avatar bg-secondary-transparent avatar-rounded\">
                                                <img src=\"assets/images/faces/23.jpg\" alt=\"\">
                                            </span>
                                        </div>
                                        <div class=\"flex-grow-1 d-flex align-items-center justify-content-between\">
                                            <div>
                                                <p class=\"mb-0 fw-medium\"><a href=\"notifications.php\">New Message</a></p>
                                                <span class=\"text-muted fw-normal fs-12 header-notification-text\">You've received a new message from a friend.</span>
                                            </div>
                                            <div>
                                                <a href=\"javascript:void(0);\" class=\"min-w-fit-content text-muted me-1 dropdown-item-close1\"><i class=\"bi bi-x\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"dropdown-item\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"pe-2 lh-1\">
                                            <span class=\"avatar bg-info-transparent avatar-rounded\"><i class=\"ri-calendar-schedule-line fs-18\"></i></span>
                                        </div>
                                        <div class=\"flex-grow-1 d-flex align-items-center justify-content-between\">
                                            <div>
                                                <p class=\"mb-0 fw-medium\"><a href=\"notifications.php\">Appointment Confirmed</a></p>
                                                <span class=\"text-muted fw-normal fs-12 header-notification-text\">Your appointment for next week has been confirmed.</span>
                                            </div>
                                            <div>
                                                <a href=\"javascript:void(0);\" class=\"min-w-fit-content text-muted me-1 dropdown-item-close1\"><i class=\"bi bi-x\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"dropdown-item\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"pe-2 lh-1\">
                                            <span class=\"avatar bg-success-transparent avatar-rounded\">
                                                <img src=\"assets/images/faces/11.jpg\" alt=\"\">
                                            </span>
                                        </div>
                                        <div class=\"flex-grow-1 d-flex align-items-center justify-content-between\">
                                            <div>
                                                <p class=\"mb-0 fw-medium\"><a href=\"notifications.php\">Exclusive Offer</a></p>
                                                <span class=\"text-muted fw-normal fs-12 header-notification-text\">Limited-time offer just for you! Check it out now.</span>
                                            </div>
                                            <div>
                                                <a href=\"javascript:void(0);\" class=\"min-w-fit-content text-muted me-1 dropdown-item-close1\"><i class=\"bi bi-x\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class=\"p-3 empty-header-item1 border-top\">
                                <div class=\"text-center\">
                                    <a href=\"notifications.php\" class=\"link-primary text-decoration-underline\">View All</a>
                                </div>
                            </div>
                            <div class=\"p-5 empty-item1 d-none\">
                                <div class=\"text-center\">
                                    <span class=\"avatar avatar-xl avatar-rounded bg-secondary-transparent\">
                                        <i class=\"bi bi-bell-slash fs-2\"></i>
                                    </span>
                                    <h6 class=\"fw-medium mt-3\">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element dropdown\">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href=\"javascript:void(0);\" class=\"header-link dropdown-toggle\" id=\"mainHeaderProfile\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <img src=\"assets/images/faces/22.jpg\" alt=\"img\" class=\"avatar avatar-sm rounded-0\">
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class=\"main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end\" aria-labelledby=\"mainHeaderProfile\">
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"profile.php\"><i class=\"bi bi-person fs-18 me-2 op-7\"></i>Profile</a></li>
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"mail.php\"><i class=\"bi bi-envelope fs-16 me-2 op-7\"></i>Inbox <span class=\"ms-auto badge bg-info\">17</span></a></li>
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"todo-list.php\"><i class=\"bi bi-check-square fs-16 me-2 op-7\"></i>Task Manager</a></li>
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"mail-settings.php\"><i class=\"bi bi-gear fs-16 me-2 op-7\"></i>Settings</a></li>
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"chat.php\"><i class=\"bi bi-headset fs-18 me-2 op-7\"></i>Support</a></li>
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"signin-cover.php\"><i class=\"bi bi-box-arrow-right fs-18 me-2 op-7\"></i>Log Out</a></li>
                        </ul>
                    </li>  
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element\">
                        <!-- Start::header-link|switcher-icon -->
                        <a href=\"javascript:void(0);\" class=\"header-link switcher-icon\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#switcher-canvas\">
                            <i class=\"bi bi-gear header-link-icon border-0\"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </li>
                    <!-- End::header-element -->

                </ul>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/topMenu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  62 => 19,  60 => 16,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# James say:Header #}
    
        <header class=\"app-header sticky\"> 

            <!-- Start::main-header-container -->
            <div class=\"main-header-container container-fluid\"> 

                <!-- Start::header-content-left -->
                <div class=\"header-content-left\">

                    <!-- Start::header-element -->
                    <div class=\"header-element\">
                        <div class=\"horizontal-logo\">
                            <a href=\"index.php\" class=\"header-logo\">
                                {# <img src=\"{{asset ('images/brand-logos/desktop-logo.png')}}\" alt=\"logo\" class=\"desktop-logo\"> #}
                                {# <img src=\"images/brand-logos/toggle-logo.png\" alt=\"logo\" class=\"toggle-logo\">
                                <img src=\"images/brand-logos/desktop-dark.png\" alt=\"logo\" class=\"desktop-dark\">
                                <img src=\"images/brand-logos/toggle-dark.png\" alt=\"logo\" class=\"toggle-dark\"> #}
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class=\"header-element mx-lg-0 mx-2\">
                        <a aria-label=\"Hide Sidebar\" class=\"sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle\" data-bs-toggle=\"sidebar\" href=\"javascript:void(0);\"><span></span></a>
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <ul class=\"header-content-right\">

                    <!-- Start::header-element -->
                    <li class=\"header-element header-search d-md-block d-none\">
                        <!-- Start::header-link -->
                        <input type=\"text\" class=\"header-search-bar form-control border-0\" placeholder=\"Search for Results...\">
                        <a href=\"javascript:void(0);\" class=\"header-search-icon border-0\">
                            <i class=\"bi bi-search\"></i>
                        </a>
                        <!-- End::header-link -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element d-md-none d-block\">
                        <a href=\"javascript:void(0);\" class=\"header-link\" data-bs-toggle=\"modal\" data-bs-target=\"#header-responsive-search\">
                            <!-- Start::header-link-icon -->
                            <i class=\"bi bi-search header-link-icon\"></i>
                            <!-- End::header-link-icon -->
                        </a>  
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element country-selector dropdown\">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href=\"javascript:void(0);\" class=\"header-link dropdown-toggle\" id=\"mainHeaderProfile\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <img src=\"assets/images/flags/us_flag.jpg\" alt=\"img\" class=\"header-link-icon\">
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class=\"main-header-dropdown dropdown-menu dropdown-menu-end\" data-popper-placement=\"none\">
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/us_flag.jpg\" alt=\"img\" class=\"header-link-icon\">
                                    </span>
                                    English
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/spain_flag.jpg\" alt=\"img\" >
                                    </span>
                                    Spanish
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/french_flag.jpg\" alt=\"img\" >
                                    </span>
                                    French
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/Germany_flag.jpg\" alt=\"img\" >
                                    </span>
                                    German
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/italy_flag.jpg\" alt=\"img\" >
                                    </span>
                                    Italian
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"javascript:void(0);\">
                                    <span class=\"avatar avatar-xs lh-1 me-2\">
                                        <img src=\"assets/images/flags/russia_flag.jpg\" alt=\"img\" >
                                    </span>
                                    Russian
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element header-fullscreen\">
                        <!-- Start::header-link -->
                        <a onclick=\"openFullscreen();\" href=\"javascript:void(0);\" class=\"header-link\">
                            <i class=\"bi bi-fullscreen full-screen-open header-link-icon\"></i>
                            <i class=\"bi bi-fullscreen-exit full-screen-close header-link-icon d-none\"></i>
                        </a>
                        <!-- End::header-link -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element\">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href=\"javascript:void(0);\" class=\"header-link\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#apps-header-offcanvas\">
                            <i class=\"bi bi-grid header-link-icon\"></i>
                        </a>
                        <!-- End::main-header-dropdown -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element notifications-dropdown  dropdown\">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href=\"javascript:void(0);\" class=\"header-link dropdown-toggle\" data-bs-auto-close=\"outside\" data-bs-toggle=\"dropdown\">
                            <i class=\"bi bi-bell header-link-icon\"></i>
                            <span class=\"header-icon-pulse bg-warning rounded pulse\"></span>
                        </a>
                        <div class=\"main-header-dropdown dropdown-menu dropdown-menu-end\" data-popper-placement=\"none\">
                            <div class=\"p-3\">
                                <div class=\"d-flex align-items-center justify-content-between\">
                                    <p class=\"mb-0 fs-16\">Notifications</p>
                                    <span class=\"badge bg-secondary-transparent\" id=\"notifiation-data\">4 Unread</span>
                                </div>
                            </div>
                            <div class=\"dropdown-divider\"></div>
                            <ul class=\"list-unstyled mb-0\" id=\"header-notification-scroll\">
                                <li class=\"dropdown-item\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"pe-2 lh-1\">
                                            <span class=\"avatar avatar-rounded\">
                                                <img src=\"assets/images/faces/6.jpg\" alt=\"\">
                                            </span>
                                        </div>
                                        <div class=\"flex-grow-1 d-flex align-items-center justify-content-between\">
                                            <div>
                                                <p class=\"mb-0 fw-medium\"><a href=\"notifications.php\">Jessica Lily</a></p>
                                                <span class=\"text-muted fw-normal fs-12 header-notification-text\">Reminder to complete your weekly tasks</span>
                                            </div>
                                            <div>
                                                <a href=\"javascript:void(0);\" class=\"min-w-fit-content text-muted me-1 dropdown-item-close1\"><i class=\"bi bi-x\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"dropdown-item\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"pe-2 lh-1\">
                                            <span class=\"avatar bg-success-transparent avatar-rounded\">
                                                <i class=\"ri-arrow-left-down-fill fs-18\"></i>
                                            </span>
                                        </div>
                                        <div class=\"flex-grow-1 d-flex align-items-center justify-content-between\">
                                            <div>
                                                <p class=\"mb-0 fw-medium\"><a href=\"notifications.php\">Payment Received</a></p>
                                                <span class=\"text-muted fw-normal fs-12 header-notification-text\">You've been paid for freelance project.</span>
                                            </div>
                                            <div>
                                                <a href=\"javascript:void(0);\" class=\"min-w-fit-content text-muted me-1 dropdown-item-close1\"><i class=\"bi bi-x\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"dropdown-item\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"pe-2 lh-1\">
                                            <span class=\"avatar bg-secondary-transparent avatar-rounded\">
                                                <img src=\"assets/images/faces/23.jpg\" alt=\"\">
                                            </span>
                                        </div>
                                        <div class=\"flex-grow-1 d-flex align-items-center justify-content-between\">
                                            <div>
                                                <p class=\"mb-0 fw-medium\"><a href=\"notifications.php\">New Message</a></p>
                                                <span class=\"text-muted fw-normal fs-12 header-notification-text\">You've received a new message from a friend.</span>
                                            </div>
                                            <div>
                                                <a href=\"javascript:void(0);\" class=\"min-w-fit-content text-muted me-1 dropdown-item-close1\"><i class=\"bi bi-x\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"dropdown-item\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"pe-2 lh-1\">
                                            <span class=\"avatar bg-info-transparent avatar-rounded\"><i class=\"ri-calendar-schedule-line fs-18\"></i></span>
                                        </div>
                                        <div class=\"flex-grow-1 d-flex align-items-center justify-content-between\">
                                            <div>
                                                <p class=\"mb-0 fw-medium\"><a href=\"notifications.php\">Appointment Confirmed</a></p>
                                                <span class=\"text-muted fw-normal fs-12 header-notification-text\">Your appointment for next week has been confirmed.</span>
                                            </div>
                                            <div>
                                                <a href=\"javascript:void(0);\" class=\"min-w-fit-content text-muted me-1 dropdown-item-close1\"><i class=\"bi bi-x\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"dropdown-item\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"pe-2 lh-1\">
                                            <span class=\"avatar bg-success-transparent avatar-rounded\">
                                                <img src=\"assets/images/faces/11.jpg\" alt=\"\">
                                            </span>
                                        </div>
                                        <div class=\"flex-grow-1 d-flex align-items-center justify-content-between\">
                                            <div>
                                                <p class=\"mb-0 fw-medium\"><a href=\"notifications.php\">Exclusive Offer</a></p>
                                                <span class=\"text-muted fw-normal fs-12 header-notification-text\">Limited-time offer just for you! Check it out now.</span>
                                            </div>
                                            <div>
                                                <a href=\"javascript:void(0);\" class=\"min-w-fit-content text-muted me-1 dropdown-item-close1\"><i class=\"bi bi-x\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class=\"p-3 empty-header-item1 border-top\">
                                <div class=\"text-center\">
                                    <a href=\"notifications.php\" class=\"link-primary text-decoration-underline\">View All</a>
                                </div>
                            </div>
                            <div class=\"p-5 empty-item1 d-none\">
                                <div class=\"text-center\">
                                    <span class=\"avatar avatar-xl avatar-rounded bg-secondary-transparent\">
                                        <i class=\"bi bi-bell-slash fs-2\"></i>
                                    </span>
                                    <h6 class=\"fw-medium mt-3\">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </li>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element dropdown\">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href=\"javascript:void(0);\" class=\"header-link dropdown-toggle\" id=\"mainHeaderProfile\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                            <div class=\"d-flex align-items-center\">
                                <div>
                                    <img src=\"assets/images/faces/22.jpg\" alt=\"img\" class=\"avatar avatar-sm rounded-0\">
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class=\"main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end\" aria-labelledby=\"mainHeaderProfile\">
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"profile.php\"><i class=\"bi bi-person fs-18 me-2 op-7\"></i>Profile</a></li>
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"mail.php\"><i class=\"bi bi-envelope fs-16 me-2 op-7\"></i>Inbox <span class=\"ms-auto badge bg-info\">17</span></a></li>
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"todo-list.php\"><i class=\"bi bi-check-square fs-16 me-2 op-7\"></i>Task Manager</a></li>
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"mail-settings.php\"><i class=\"bi bi-gear fs-16 me-2 op-7\"></i>Settings</a></li>
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"chat.php\"><i class=\"bi bi-headset fs-18 me-2 op-7\"></i>Support</a></li>
                            <li><a class=\"dropdown-item d-flex align-items-center\" href=\"signin-cover.php\"><i class=\"bi bi-box-arrow-right fs-18 me-2 op-7\"></i>Log Out</a></li>
                        </ul>
                    </li>  
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <li class=\"header-element\">
                        <!-- Start::header-link|switcher-icon -->
                        <a href=\"javascript:void(0);\" class=\"header-link switcher-icon\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#switcher-canvas\">
                            <i class=\"bi bi-gear header-link-icon border-0\"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </li>
                    <!-- End::header-element -->

                </ul>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
    ", "pages/topMenu.html.twig", "E:\\work\\scifi\\templates\\pages\\topMenu.html.twig");
    }
}
