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

/* pages/main.html.twig */
class __TwigTemplate_697396b89f78839316af299aa93a340f extends Template
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

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "pages/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/main.html.twig"));

        $this->parent = $this->loadTemplate("pages/base.html.twig", "pages/main.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    
    ";
        // line 8
        yield "    <div class=\"main-content app-content\">
        <div class=\"container-fluid\">

            <!-- Start:: row-1 -->
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-body\">
                            <div class=\"mb-3 d-flex align-items-start justify-content-between\">
                                <div>
                                    <span class=\"text-fixed-white fs-11\">New Events</span> 
                                    <h4 class=\"text-fixed-white mb-0\">13,278<span class=\"text-success fs-12 ms-2 fw-semibold d-inline-block\"><i class=\"ti ti-trending-up align-middle me-1 d-inline-block\"></i>0.25%</span></h4>  
                                </div>
                                <div class=\"dropdown\"> 
                                    <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                        <i class=\"bi bi-grid text-primary\"></i>
                                    </a> 
                                    <ul class=\"dropdown-menu\" role=\"menu\"> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                    </ul> 
                                </div>
                            </div>
                            <div id=\"new-issues\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-body\">
                            <div class=\"mb-3 d-flex align-items-start justify-content-between\">
                                <div>
                                    <span class=\"text-fixed-white fs-11\">Completed Events</span> 
                                    <h4 class=\"text-fixed-white mb-0\">29,912<span class=\"text-danger fs-12 ms-2 fw-semibold\"><i class=\"ti ti-trending-down align-middle me-1 d-inline-block\"></i>0.25%</span></h4>  
                                </div>
                                <div class=\"dropdown\"> 
                                    <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                        <i class=\"bi bi-grid text-primary\"></i>
                                    </a> 
                                    <ul class=\"dropdown-menu\" role=\"menu\"> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                    </ul> 
                                </div>
                            </div>
                            <div id=\"completed-issues\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-body\">
                            <div class=\"mb-3 d-flex align-items-start justify-content-between\">
                                <div>
                                    <span class=\"text-fixed-white fs-11\">Pending Events</span> 
                                    <h4 class=\"text-fixed-white mb-0\">1,214<span class=\"text-success fs-12 ms-2 fw-semibold d-inline-block\"><i class=\"ti ti-trending-up align-middle me-1 d-inline-block\"></i>0.25%</span></h4>  
                                </div>
                                <div class=\"dropdown\"> 
                                    <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                        <i class=\"bi bi-grid text-primary\"></i>
                                    </a> 
                                    <ul class=\"dropdown-menu\" role=\"menu\"> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                    </ul> 
                                </div>
                            </div>
                            <div id=\"pending-issues\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-body\">
                            <div class=\"mb-3 d-flex align-items-start justify-content-between\">
                                <div>
                                    <span class=\"text-fixed-white fs-11\">Unresolved Events</span> 
                                    <h4 class=\"text-fixed-white mb-0\">563<span class=\"text-success fs-12 ms-2 fw-semibold d-inline-block\"><i class=\"ti ti-trending-up align-middle me-1 d-inline-block\"></i>0.25%</span></h4>  
                                </div>
                                <div class=\"dropdown\"> 
                                    <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                        <i class=\"bi bi-grid text-primary\"></i>
                                    </a> 
                                    <ul class=\"dropdown-menu\" role=\"menu\"> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                    </ul> 
                                </div>
                            </div>
                            <div id=\"unresolved-issues\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-1 -->
            
            <!-- Start:: row-2 -->
            <div class=\"row\">
                <div class=\"col-xxl-6 col-xl-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Distance Covered
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"distance-covered-content container\">
                                <div class=\"row gy-3\">
                                    <div class=\"col-xl-5 col-sm-4 col-12\">
                                        <div class=\"d-flex align-items-center gap-1\">
                                            <div id=\"safe-zones\"></div>
                                            <div class=\"flex-fill\">
                                                <span class=\"d-block fs-12\">Safe Zone</span>
                                                <h4 class=\"fw-medium mb-1\">32.17H</h4>
                                                <div class=\"progress rounded-0 custom-progress-padding progress-sm border border-primary border-opacity-10\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <div class=\"progress-bar bg-success\" style=\"width: 65%\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xl-5 col-sm-4 col-12\">
                                        <div class=\"d-flex align-items-center gap-1\">
                                            <div id=\"danger-zones\"></div>
                                            <div class=\"flex-fill\">
                                                <span class=\"d-block fs-12\">Danger Zone</span>
                                                <h4 class=\"fw-medium mb-1\">18.65H</h4>
                                                <div class=\"progress rounded-0 custom-progress-padding progress-sm border border-primary border-opacity-10\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <div class=\"progress-bar bg-danger\" style=\"width: 65%\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"distance-covered\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xxl-3 col-xl-6 col-lg-6 col-md-6\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Skills Achieved
                            </div>
                            <a href=\"javascript:void(0);\" class=\"badge bg-primary-transparent border border-primary border-opacity-10 rounded-0\">View All</a>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"list-unstyled mb-0 skills-achieved-list\">
                                <li>
                                    <a href=\"javascript:void(0);\">
                                        <div class=\"d-flex align-items-center justify-content-between mb-1 fs-13\">
                                            <div>
                                                Epic Button Masher
                                            </div>
                                            <div>65%</div>
                                        </div>
                                        <div>
                                            <div class=\"progress rounded-0 progress-sm border border-primary border-opacity-10 custom-progress-padding\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar\" style=\"width: 65%\"><div class=\"progress-before\"></div></div>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">
                                        <div class=\"d-flex align-items-center justify-content-between mb-1 fs-13\">
                                            <div>
                                                Alertness Alchemist
                                            </div>
                                            <div>58%</div>
                                        </div>
                                        <div>
                                            <div class=\"progress rounded-0 progress-sm border border-primary border-opacity-10 custom-progress-padding\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"58\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar\" style=\"width: 58%\"><div class=\"progress-before\"></div></div>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">
                                        <div class=\"d-flex align-items-center justify-content-between mb-1 fs-13\">
                                            <div>
                                                Resolution Wizard
                                            </div>
                                            <div>37%</div>
                                        </div>
                                        <div>
                                            <div class=\"progress rounded-0 progress-sm border border-primary border-opacity-10 custom-progress-padding\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"37\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar\" style=\"width: 37%\"><div class=\"progress-before\"></div></div>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">
                                        <div class=\"d-flex align-items-center justify-content-between mb-1 fs-13\">
                                            <div>
                                                Dropdown Diviner
                                            </div>
                                            <div>48%</div>
                                        </div>
                                        <div>
                                            <div class=\"progress rounded-0 progress-sm border border-primary border-opacity-10 custom-progress-padding\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"48\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar\" style=\"width: 48%\"><div class=\"progress-before\"></div></div>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">
                                        <div class=\"d-flex align-items-center justify-content-between mb-1 fs-13\">
                                            <div>
                                                Modal Maestro
                                            </div>
                                            <div>22%</div>
                                        </div>
                                        <div>
                                            <div class=\"progress rounded-0 progress-sm border border-primary border-opacity-10 custom-progress-padding\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"22\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar\" style=\"width: 22%\"><div class=\"progress-before\"></div></div>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-xxl-3 col-xl-6 col-lg-6 col-md-6\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Energy Block
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body px-1\">
                            <div id=\"energy-block\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-2 -->

            <!-- Start:: row-3 -->
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Air Support
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"air-support\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-5 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Player Statistics
                            </div>
                            <a href=\"javascript:void(0);\" class=\"badge bg-primary-transparent border border-primary border-opacity-10 rounded-0\">View All</a>
                        </div>
                        <div class=\"card-body player-statistics\">
                            <div class=\"table-responsive\">
                                <table class=\"table text-nowrap table-borderless table-striped\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\">Player</th>
                                            <th scope=\"col\">Score</th>
                                            <th scope=\"col\">Performance</th>
                                            <th scope=\"col\">Objective </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope=\"row\">Harshrath</th>
                                            <td>
                                                <span class=\"fs-15 fw-medium\">1200</span>
                                            </td>
                                            <td><div id=\"player1-stats\"></div></td>
                                            <td><span class=\"text-primary\">Defeat Boss</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Zozo Hadid</th>
                                            <td>
                                                <span class=\"fs-15 fw-medium\">950</span>
                                            </td>
                                            <td><div id=\"player2-stats\"></div></td>
                                            <td><span class=\"text-primary\">In Progress</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Martiana</th>
                                            <td>
                                                <span class=\"fs-15 fw-medium\">1800</span>
                                            </td>
                                            <td><div id=\"player3-stats\"></div></td>
                                            <td><span class=\"text-primary\">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Reva Shaan</th>
                                            <td>
                                                <span class=\"fs-15 fw-medium\">1100</span>
                                            </td>
                                            <td><div id=\"player4-stats\"></div></td>
                                            <td><span class=\"text-primary\">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Reva Shaan</th>
                                            <td>
                                                <span class=\"fs-15 fw-medium\">1500</span>
                                            </td>
                                            <td><div id=\"player5-stats\"></div></td>
                                            <td><span class=\"text-primary\">Pending</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Total Time Spent
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"time-spent\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Civilian Population
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu dropdown-menu-end\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"civilian-population-support\"></div>
                            <div id=\"civilian-population\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Top Countries
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"top-country\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Top Players
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"users-report\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-3 -->

        </div>
    </div>

    <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"apps-header-offcanvas\">
        <div class=\"offcanvas-header border-bottom\">
            <h6 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Shortcuts</h6>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
        </div>
        <div class=\"offcanvas-body\">
            <div class=\"panel tabs-style2\">
                <div class=\"panel-head\">
                    <ul class=\"nav d-flex  app-header-nav-tabs\">
                        <li class=\"nav-item mb-2 flex-grow-1 text-center\"><a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#side1\"><i
                                class=\"bi bi-chat me-2 d-inline-block\"></i> Chat</a></li>
                        <li class=\"nav-item  flex-grow-1 text-center mb-sm-0 mb-2\"><a class=\"nav-link\" data-bs-toggle=\"tab\"
                        href=\"#side2\"><i class=\"bi bi-person-gear me-2 d-inline-block\"></i> Settings</a></li>
                    </ul>
                </div>
                <div class=\"panel-body\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane p-0 show active\" id=\"side1\">
                            <div class=\"text-end m-3\">
                                <a href=\"mail-settings.php\" class=\"text-primary\">Mail Settings</a>
                            </div>
                            <div class=\"px-3 pt-0 pb-3 border-bottom border-block-end-dashed\">
                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-3\">
                                    <p class=\"mb-0 font-weight-semibold\">Messages</p>
                                    <a href=\"mail.php\" class=\"btn btn-sm btn-primary-light btn-icon btn-icon\"><i class=\"ri-chat-1-line\"></i></a>
                                </div>
                                <ul class=\"list-unstyled mb-0 mt-2\">
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/5.jpg"), "html", null, true);
        yield "\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Elizabeth Ava<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">2</span><span
                                                        class=\"ms-2\"><i class=\"ti-pin-alt fs-11 text-muted\"></i></span></h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">3:55 PM</span>
                                                </div>
                                                <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\">Elizabeth is
                                                online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/9.jpg"), "html", null, true);
        yield "\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">George Rhys<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">12:04 PM</span>
                                                </div>
                                                <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\">I must explain...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"";
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/8.jpg"), "html", null, true);
        yield "\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Bethany Isla<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">2</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">Yesterday</span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">We denounce with righteous..</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/3.jpg"), "html", null, true);
        yield "\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Margaret Emma<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">01 Mar</span>
                                                </div>
                                                <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                    class=\"fe fe-link-2 me-1 fs-12 text-primary\"></i><a
                                                    href=\"javascript:void(0);\">http://Diam-duoet.xd</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-0\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"";
        // line 613
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/10.jpg"), "html", null, true);
        yield "\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Michael Souris<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">22 Feb</span>
                                                </div>
                                                <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                    class=\"fe fe-image me-1 fs-12 text-primary\"></i>+13 photos</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"text-end mt-2\">
                                    <a href=\"chat.php\" class=\"text-primary\">View All</a>
                                </div>
                            </div>
                            <div class=\"p-3 border-bottom border-block-end-dashed\">
                                <div class=\"d-flex align-items-center justify-content-between gap-1 my-3\">
                                    <p class=\"mb-0 font-weight-semibold\">Workspace</p>
                                    <a href=\"mail.php\" class=\"btn btn-sm btn-primary-light btn-icon btn-icon\"><i class=\"ri-add-circle-line\"></i></a>
                                </div>
                                <ul class=\"list-unstyled mb-0 mt-1\">
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex\">
                                            <div class=\"avatar avatar  shadow bg-primary-transparent\">
                                                <i class=\"ri-user-line\"></i>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Olivia Lily<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">2:00 PM</span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">Aliquyam ipsum sit.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex\">
                                            <div class=\"avatar avatar  shadow bg-secondary-transparent\">
                                                <i class=\"ri-arrow-right-circle-line\"></i>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Smith Brown<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">2</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">12:00 PM</span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">At eos no sit...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex\">
                                            <div class=\"avatar avatar  shadow bg-warning-transparent\">
                                                <i class=\"ri-drag-move-line\"></i>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Wilson Li<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">24</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">16 Feb</span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">Sit est dolor dolor.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex\">
                                            <div class=\"avatar avatar  shadow bg-success-transparent\">
                                                <i class=\"ri-home-8-line\"></i>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Jones Morton<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">3</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">12 Jan </span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">Erat diam ipsum... Sed dolor...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-0\">
                                        <div class=\"d-flex\">
                                            <div class=\"avatar avatar  shadow bg-danger-transparent\">
                                                <i class=\"ri-global-line\"></i>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">White Lee<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">01 Feb</span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">Justo accusam stet eirmod et....</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"text-end mt-2\">
                                    <a href=\"chat.php\" class=\"text-primary\">View All</a>
                                </div>
                            </div>
                            <div class=\"p-3 border-bottom border-block-end-dashed\">
                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-3\">
                                    <p class=\"mb-0 font-weight-semibold\">Calls</p>
                                    <a href=\"contacts.php\" class=\"btn btn-sm btn-primary-light btn-icon btn-icon\"><i class=\"ri-phone-line\"></i></a>
                                </div>
                                <ul class=\"list-unstyled mb-0 mt-2\">
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"";
        // line 733
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/14.jpg"), "html", null, true);
        yield "\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Wilfrid Price<span
                                                        class=\"badge bg-danger-transparent text-danger fs-11 ms-2 font-weight-normal\">3</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">11:15 AM</span>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                    <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                        class=\"fe fe-x me-1 fs-13 text-danger\"></i>Missed call</p>
                                                    <span class=\"text-primary\"><i class=\"fe fe-phone\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\" data-bs-toggle=\"modal\"
                                            data-bs-target=\"#videoModal\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"";
        // line 755
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/7.jpg"), "html", null, true);
        yield "\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Jasmin O'Kon</h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">Yesterday</span>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                    <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                        class=\"fe fe-arrow-down-left me-1 fs-13 text-primary\"></i>Duration:
                                                    15:30</p>
                                                    <span class=\"text-primary\"><i class=\"fe fe-video\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\" data-bs-toggle=\"modal\"
                                            data-bs-target=\"#videoModal\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"";
        // line 776
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/faces/4.jpg"), "html", null, true);
        yield "\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">River Gleichner</h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">01 Mar</span>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                    <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                        class=\"fe fe-arrow-up-right me-1 fs-13 text-primary\"></i>Declined
                                                    </p>
                                                    <span class=\"text-primary\"><i class=\"fe fe-video\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"";
        // line 796
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/12.jpg"), "html", null, true);
        yield "\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Saul Goodmate<span
                                                        class=\"badge bg-danger-transparent text-danger fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">20 Feb</span>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                    <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                        class=\"fe fe-x me-1 fs-13 text-danger\"></i>Missed call</p>
                                                    <span class=\"text-primary\"><i class=\"fe fe-phone\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-0\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"";
        // line 817
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/13.jpg"), "html", null, true);
        yield "\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Edgardo Huel</h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">15 Feb</span>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                    <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                        class=\"fe fe-arrow-down-left me-1 fs-13 text-success\"></i>Duration:
                                                    01:20:10</p>
                                                    <span class=\"text-primary\"><i class=\"fe fe-phone\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"text-end mt-3\">
                                    <a href=\"chat.php\" class=\"text-primary\">View All</a>
                                </div>
                            </div>
                            <div class=\"p-3 text-center\">
                                <div class=\"svg-card overflow-hidden\">
                                    <img alt=\"avatar\" class=\"shadow\" src=\"";
        // line 840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/media-67.jpg"), "html", null, true);
        yield "\">
                                </div>
                                <h6 class=\"mt-3\">Find out more !</h6>
                                <a href=\"mail-settings.php\" class=\"btn btn-outline-primary btn-block\">Mail Settings</a>
                            </div>
                        </div>
                        <div class=\"tab-pane p-0\" id=\"side2\">
                            <div class=\"p-3 border-bottom\">
                                <h6>Notifications :</h6>
                                <div class=\"panel mt-2 tabs-style5\">
                                    <div class=\"panel-head\">
                                        <ul class=\"nav app-header-nav-tabs tab-style-2 mb-3\">
                                            <li class=\"nav-item flex-grow-1 text-center\"><a class=\"nav-link active\" data-bs-toggle=\"tab\"
                                                href=\"#tab_chat\">Home</a></li>
                                            <li class=\"nav-item flex-grow-1 text-center\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab_tasks\">Tasks</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"panel-body p-0\">
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane rounded-0 border border-dashed active\" id=\"tab_chat\">
                                                <div class=\"mt-0\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">Someone
                                                            mentioned</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"some\" name=\"toggleswitchsize\" type=\"checkbox\"> 
                                                            <label for=\"some\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mt-3\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">Someone
                                                        Replies</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"reply\" name=\"toggleswitchsize\" type=\"checkbox\"> 
                                                            <label for=\"reply\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mt-3\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">Allow All
                                                        Notifications</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"notify-allow\" name=\"toggleswitchsize\" type=\"checkbox\" checked> 
                                                            <label for=\"notify-allow\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mt-3 flex-wrap\">
                                                    <label class=\"text-muted mb-0\">Notifications On</label>
                                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioChat\" id=\"radio1\">
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio1\">In App</label>

                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioChat\" id=\"radio2\" checked>
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio2\">Email</label>

                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioChat\" id=\"radio3\">
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio3\">Both</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane rounded-0 border border-dashed\" id=\"tab_tasks\">
                                                <div class=\"mt-0\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">Assigned a
                                                        Task</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"task\" name=\"toggleswitchsize\" type=\"checkbox\"> 
                                                            <label for=\"task\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mt-3\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">If I Have More
                                                        Than 24 Tasks</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"listed\" name=\"toggleswitchsize\" type=\"checkbox\"> 
                                                            <label for=\"listed\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mt-3\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">Allow All
                                                        Notifications</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"all-notify\" name=\"toggleswitchsize\" type=\"checkbox\" checked> 
                                                            <label for=\"all-notify\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mt-3 flex-wrap\">
                                                    <label class=\"text-muted mb-0\">Notifications On</label>
                                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioTasks\" id=\"radio4\" checked>
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio4\">In App</label>

                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioTasks\" id=\"radio5\">
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio5\">Email</label>

                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioTasks\" id=\"radio6\">
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio6\">Both</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"p-3 border-bottom\">
                                <h6>App :</h6>
                                <div class=\"panel mt-2 tabs-style5\">
                                    <div class=\"panel-head\">
                                        <ul class=\"nav app-header-nav-tabs tab-style-2 mb-3\">
                                            <li class=\"nav-item flex-grow-1 text-center\"><a class=\"nav-link active\" data-bs-toggle=\"tab\"
                                                href=\"#tab_apps\">Files</a></li>
                                            <li class=\"nav-item flex-grow-1 text-center\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab_profile\">Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"panel-body p-0\">
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane rounded-0 border border-dashed active\" id=\"tab_apps\">
                                                <div class=\"mt-3\">
                                                    <p class=\"mb-0\">Files : </p>
                                                    <div class=\"mt-3\">
                                                        <div class=\"mb-0 d-flex align-items-center justify-content-between gap-1\">
                                                            <span class=\"text-muted\">
                                                            <i class=\"ri-folder-image-fill me-1 d-inline-block fs-18 text-primary\"></i>
                                                            Images
                                                            </span>
                                                            
                                                            <div class=\" ms-auto=\"> 
                                                                1,458
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-3\">
                                                        <div class=\"mb-0 d-flex align-items-center justify-content-between gap-1\">
                                                            <span class=\"text-muted\">
                                                            <i class=\"ri-live-line me-1 d-inline-block fs-18 text-secondary\"></i>
                                                            Videos
                                                            </span>
                                                            
                                                            <div class=\" ms-auto=\"> 
                                                                213
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-3\">
                                                        <div class=\"mb-0 d-flex align-items-center justify-content-between gap-1\">
                                                            <span class=\"text-muted\">
                                                            <i class=\"ri-database-2-line me-1 d-inline-block fs-18 text-success\"></i>
                                                            Storage
                                                            </span>
                                                            
                                                            <div class=\" ms-auto text-success\"> 
                                                                8.50MB free space
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mt-4\">
                                                    <p class=\"mb-0\">Files Privacy Settings :</p>
                                                    <div class=\"mt-3\">
                                                        <div class=\"form-group mb-0\">
                                                            <p class=\"mb-2 d-flex align-items-center justify-content-between gap-1\">
                                                            <label for=\"inputPassword\" class=\"mb-0 text-muted\">Password</label>
                                                            <a href=\"javascript:void(0)\" class=\"fs-11 text-primary\" id=\"changePassword\">change</a>
                                                            </p>
                                                            <input type=\"password\" class=\"form-control form-contron-sm radius-4\" id=\"inputPassword\"
                                                            placeholder=\"Enter New Password\" value=\"passwordzem\">
                                                            <div class=\"mt-2 d-none\" id=\"reEnterPassword\">
                                                                <input type=\"password\" class=\"form-control form-contron-sm radius-4\" id=\"inputPasswordTwo\"
                                                                placeholder=\"Re-Enter Password\">
                                                                <div class=\"btn-list mt-2 text-end\">
                                                                    <a href=\"javascript:void(0)\" class=\"text-danger\" id=\"closePassword\">Discard</a>
                                                                    <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary ms-3\">Save
                                                                    Changes</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-3\">
                                                        <div class=\"mb-0 d-flex align-items-center justify-content-between gap-1\">
                                                            <span class=\"text-muted d-flex align-items-center\">Two Factor
                                                            Authentication</span>
                                                            <div class=\"custom-toggle-switch ms-auto\"> 
                                                                <input id=\"authentication\" name=\"toggleswitchsize\" type=\"checkbox\" checked> 
                                                                <label for=\"authentication\" class=\"label-primary mb-1\"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-3\">
                                                        <div class=\"form-group mb-0\">
                                                            <p class=\"mb-0 d-flex align-items-center justify-content-between gap-1\">
                                                            <label for=\"inputPassword\" class=\"mb-0 text-muted\">Recent Deleted Files</label>
                                                                <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-outline-danger mt-2\">Delete All</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane border border-dashed rounded-0\" id=\"tab_profile\">
                                                <div class=\"mt-3\">
                                                    <div class=\"form-group mb-3\">
                                                        <label class=\"text-muted\" for=\"inputName\">Full Name</label>
                                                        <input type=\"text\" class=\"form-control radius-4\" id=\"inputName\" placeholder=\"Enter Full Name\"
                                                            value=\"Json Taylor\">
                                                    </div>
                                                    <div class=\"form-group mb-3\">
                                                        <label class=\"text-muted\" for=\"inputMail\">Email</label>
                                                        <input type=\"email\" class=\"form-control radius-4\" id=\"inputMail\" placeholder=\"Enter Your Mail\"
                                                            value=\"nicktaylor@spruko.me\">
                                                    </div>
                                                    <div class=\"form-group mb-3\">
                                                        <label for=\"inputNumber\" class=\"text-muted d-flex align-items-center justify-content-between gap-1\">
                                                            Mobile Number
                                                            <a href=\"javascript:void(0)\" class=\"fs-11 text-primary\">change number</a>
                                                        </label>
                                                        <div class=\"input-group\">
                                                            <span class=\"input-group-text br-ts-20 br-bs-20\">+91</span>
                                                            <input type=\"number\" class=\"form-control br-te-4 br-be-4\" id=\"inputNumber\"
                                                            placeholder=\"Enter Your Number\" value=\"1212313231\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"p-3 border-bottom\">
                                <h6>Remaiders :</h6>
                                <div class=\"mt-3\">
                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                        <label class=\"text-muted\">Get alert for remaiders</label>
                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                            <input id=\"mails-images\" name=\"toggleswitchsize\" type=\"checkbox\" checked> 
                                            <label for=\"mails-images\" class=\"label-primary mb-1\"></label>
                                        </div>
                                        <span class=\"custom-switch-indicator\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"p-3\">
                                <div class=\"text-center\">
                                    <img src=\"";
        // line 1092
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/media/media-66.png"), "html", null, true);
        yield "\" alt=\"\">
                                    <h6 class=\"mt-4\">This Is Not You're Looking For?</h6>
                                    <a href=\"profile-settings.php\" class=\"btn btn-block btn-outline-primary\">Go To Profile Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 1105
        yield "    <footer class=\"footer mt-auto py-3 text-center\">
        <div class=\"container\">
            <span class=\"text-muted\"> Copyright © <span id=\"year\"></span> <a
                    href=\"javascript:void(0);\" class=\"text-dark fw-medium\">SciFi</a>.
                Designed with <span class=\"ri-heart-fill text-danger\"></span> by <a href=\"javascript:void(0);\">
                    <span class=\"fw-medium text-primary text-decoration-underline\">Spruko</span>
                </a> All
                rights
                reserved
            </span>
        </div>
    </footer>

    <!-- SCROLL-TO-TOP -->
        <div class=\"scrollToTop\">
                <span class=\"arrow\"><i class=\"ti ti-arrow-narrow-up fs-20\"></i></span>
        </div>
        <div id=\"responsive-overlay\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/main.html.twig";
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
        return array (  1201 => 1105,  1186 => 1092,  931 => 840,  905 => 817,  881 => 796,  858 => 776,  834 => 755,  809 => 733,  686 => 613,  664 => 594,  644 => 577,  624 => 560,  603 => 542,  67 => 8,  64 => 6,  57 => 5,  40 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard.html.twig #}

{% extends 'pages/base.html.twig' %}

{% block body %}
    
    {# James say:Main #}
    <div class=\"main-content app-content\">
        <div class=\"container-fluid\">

            <!-- Start:: row-1 -->
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-body\">
                            <div class=\"mb-3 d-flex align-items-start justify-content-between\">
                                <div>
                                    <span class=\"text-fixed-white fs-11\">New Events</span> 
                                    <h4 class=\"text-fixed-white mb-0\">13,278<span class=\"text-success fs-12 ms-2 fw-semibold d-inline-block\"><i class=\"ti ti-trending-up align-middle me-1 d-inline-block\"></i>0.25%</span></h4>  
                                </div>
                                <div class=\"dropdown\"> 
                                    <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                        <i class=\"bi bi-grid text-primary\"></i>
                                    </a> 
                                    <ul class=\"dropdown-menu\" role=\"menu\"> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                    </ul> 
                                </div>
                            </div>
                            <div id=\"new-issues\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-body\">
                            <div class=\"mb-3 d-flex align-items-start justify-content-between\">
                                <div>
                                    <span class=\"text-fixed-white fs-11\">Completed Events</span> 
                                    <h4 class=\"text-fixed-white mb-0\">29,912<span class=\"text-danger fs-12 ms-2 fw-semibold\"><i class=\"ti ti-trending-down align-middle me-1 d-inline-block\"></i>0.25%</span></h4>  
                                </div>
                                <div class=\"dropdown\"> 
                                    <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                        <i class=\"bi bi-grid text-primary\"></i>
                                    </a> 
                                    <ul class=\"dropdown-menu\" role=\"menu\"> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                    </ul> 
                                </div>
                            </div>
                            <div id=\"completed-issues\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-body\">
                            <div class=\"mb-3 d-flex align-items-start justify-content-between\">
                                <div>
                                    <span class=\"text-fixed-white fs-11\">Pending Events</span> 
                                    <h4 class=\"text-fixed-white mb-0\">1,214<span class=\"text-success fs-12 ms-2 fw-semibold d-inline-block\"><i class=\"ti ti-trending-up align-middle me-1 d-inline-block\"></i>0.25%</span></h4>  
                                </div>
                                <div class=\"dropdown\"> 
                                    <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                        <i class=\"bi bi-grid text-primary\"></i>
                                    </a> 
                                    <ul class=\"dropdown-menu\" role=\"menu\"> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                    </ul> 
                                </div>
                            </div>
                            <div id=\"pending-issues\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-body\">
                            <div class=\"mb-3 d-flex align-items-start justify-content-between\">
                                <div>
                                    <span class=\"text-fixed-white fs-11\">Unresolved Events</span> 
                                    <h4 class=\"text-fixed-white mb-0\">563<span class=\"text-success fs-12 ms-2 fw-semibold d-inline-block\"><i class=\"ti ti-trending-up align-middle me-1 d-inline-block\"></i>0.25%</span></h4>  
                                </div>
                                <div class=\"dropdown\"> 
                                    <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                        <i class=\"bi bi-grid text-primary\"></i>
                                    </a> 
                                    <ul class=\"dropdown-menu\" role=\"menu\"> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                        <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                    </ul> 
                                </div>
                            </div>
                            <div id=\"unresolved-issues\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-1 -->
            
            <!-- Start:: row-2 -->
            <div class=\"row\">
                <div class=\"col-xxl-6 col-xl-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Distance Covered
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"distance-covered-content container\">
                                <div class=\"row gy-3\">
                                    <div class=\"col-xl-5 col-sm-4 col-12\">
                                        <div class=\"d-flex align-items-center gap-1\">
                                            <div id=\"safe-zones\"></div>
                                            <div class=\"flex-fill\">
                                                <span class=\"d-block fs-12\">Safe Zone</span>
                                                <h4 class=\"fw-medium mb-1\">32.17H</h4>
                                                <div class=\"progress rounded-0 custom-progress-padding progress-sm border border-primary border-opacity-10\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <div class=\"progress-bar bg-success\" style=\"width: 65%\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xl-5 col-sm-4 col-12\">
                                        <div class=\"d-flex align-items-center gap-1\">
                                            <div id=\"danger-zones\"></div>
                                            <div class=\"flex-fill\">
                                                <span class=\"d-block fs-12\">Danger Zone</span>
                                                <h4 class=\"fw-medium mb-1\">18.65H</h4>
                                                <div class=\"progress rounded-0 custom-progress-padding progress-sm border border-primary border-opacity-10\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <div class=\"progress-bar bg-danger\" style=\"width: 65%\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"distance-covered\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xxl-3 col-xl-6 col-lg-6 col-md-6\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Skills Achieved
                            </div>
                            <a href=\"javascript:void(0);\" class=\"badge bg-primary-transparent border border-primary border-opacity-10 rounded-0\">View All</a>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"list-unstyled mb-0 skills-achieved-list\">
                                <li>
                                    <a href=\"javascript:void(0);\">
                                        <div class=\"d-flex align-items-center justify-content-between mb-1 fs-13\">
                                            <div>
                                                Epic Button Masher
                                            </div>
                                            <div>65%</div>
                                        </div>
                                        <div>
                                            <div class=\"progress rounded-0 progress-sm border border-primary border-opacity-10 custom-progress-padding\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar\" style=\"width: 65%\"><div class=\"progress-before\"></div></div>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">
                                        <div class=\"d-flex align-items-center justify-content-between mb-1 fs-13\">
                                            <div>
                                                Alertness Alchemist
                                            </div>
                                            <div>58%</div>
                                        </div>
                                        <div>
                                            <div class=\"progress rounded-0 progress-sm border border-primary border-opacity-10 custom-progress-padding\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"58\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar\" style=\"width: 58%\"><div class=\"progress-before\"></div></div>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">
                                        <div class=\"d-flex align-items-center justify-content-between mb-1 fs-13\">
                                            <div>
                                                Resolution Wizard
                                            </div>
                                            <div>37%</div>
                                        </div>
                                        <div>
                                            <div class=\"progress rounded-0 progress-sm border border-primary border-opacity-10 custom-progress-padding\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"37\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar\" style=\"width: 37%\"><div class=\"progress-before\"></div></div>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">
                                        <div class=\"d-flex align-items-center justify-content-between mb-1 fs-13\">
                                            <div>
                                                Dropdown Diviner
                                            </div>
                                            <div>48%</div>
                                        </div>
                                        <div>
                                            <div class=\"progress rounded-0 progress-sm border border-primary border-opacity-10 custom-progress-padding\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"48\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar\" style=\"width: 48%\"><div class=\"progress-before\"></div></div>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                                <li>
                                    <a href=\"javascript:void(0);\">
                                        <div class=\"d-flex align-items-center justify-content-between mb-1 fs-13\">
                                            <div>
                                                Modal Maestro
                                            </div>
                                            <div>22%</div>
                                        </div>
                                        <div>
                                            <div class=\"progress rounded-0 progress-sm border border-primary border-opacity-10 custom-progress-padding\" role=\"progressbar\" aria-label=\"Basic example\" aria-valuenow=\"22\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"progress-bar\" style=\"width: 22%\"><div class=\"progress-before\"></div></div>
                                            </div>
                                        </div>
                                    </a>    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-xxl-3 col-xl-6 col-lg-6 col-md-6\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Energy Block
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body px-1\">
                            <div id=\"energy-block\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-2 -->

            <!-- Start:: row-3 -->
            <div class=\"row\">
                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Air Support
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"air-support\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-5 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Player Statistics
                            </div>
                            <a href=\"javascript:void(0);\" class=\"badge bg-primary-transparent border border-primary border-opacity-10 rounded-0\">View All</a>
                        </div>
                        <div class=\"card-body player-statistics\">
                            <div class=\"table-responsive\">
                                <table class=\"table text-nowrap table-borderless table-striped\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\">Player</th>
                                            <th scope=\"col\">Score</th>
                                            <th scope=\"col\">Performance</th>
                                            <th scope=\"col\">Objective </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope=\"row\">Harshrath</th>
                                            <td>
                                                <span class=\"fs-15 fw-medium\">1200</span>
                                            </td>
                                            <td><div id=\"player1-stats\"></div></td>
                                            <td><span class=\"text-primary\">Defeat Boss</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Zozo Hadid</th>
                                            <td>
                                                <span class=\"fs-15 fw-medium\">950</span>
                                            </td>
                                            <td><div id=\"player2-stats\"></div></td>
                                            <td><span class=\"text-primary\">In Progress</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Martiana</th>
                                            <td>
                                                <span class=\"fs-15 fw-medium\">1800</span>
                                            </td>
                                            <td><div id=\"player3-stats\"></div></td>
                                            <td><span class=\"text-primary\">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Reva Shaan</th>
                                            <td>
                                                <span class=\"fs-15 fw-medium\">1100</span>
                                            </td>
                                            <td><div id=\"player4-stats\"></div></td>
                                            <td><span class=\"text-primary\">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Reva Shaan</th>
                                            <td>
                                                <span class=\"fs-15 fw-medium\">1500</span>
                                            </td>
                                            <td><div id=\"player5-stats\"></div></td>
                                            <td><span class=\"text-primary\">Pending</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Total Time Spent
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"time-spent\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Civilian Population
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu dropdown-menu-end\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"civilian-population-support\"></div>
                            <div id=\"civilian-population\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Top Countries
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"top-country\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                    <div class=\"card custom-card\">
                        <div class=\"top-left\"></div>
                        <div class=\"top-right\"></div>
                        <div class=\"bottom-left\"></div>
                        <div class=\"bottom-right\"></div>
                        <div class=\"card-header justify-content-between\">
                            <div class=\"card-title\">
                                Top Players
                            </div>
                            <div class=\"dropdown\"> 
                                <a aria-label=\"anchor\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" class=\"op-4\"> 
                                    <i class=\"bi bi-grid text-primary\"></i>
                                </a> 
                                <ul class=\"dropdown-menu\" role=\"menu\"> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Day</a></li>
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Week</a></li> 
                                    <li><a class=\"dropdown-item\" href=\"javascript:void(0);\">Year</a></li> 
                                </ul> 
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"users-report\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-3 -->

        </div>
    </div>

    <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"apps-header-offcanvas\">
        <div class=\"offcanvas-header border-bottom\">
            <h6 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Shortcuts</h6>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
        </div>
        <div class=\"offcanvas-body\">
            <div class=\"panel tabs-style2\">
                <div class=\"panel-head\">
                    <ul class=\"nav d-flex  app-header-nav-tabs\">
                        <li class=\"nav-item mb-2 flex-grow-1 text-center\"><a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#side1\"><i
                                class=\"bi bi-chat me-2 d-inline-block\"></i> Chat</a></li>
                        <li class=\"nav-item  flex-grow-1 text-center mb-sm-0 mb-2\"><a class=\"nav-link\" data-bs-toggle=\"tab\"
                        href=\"#side2\"><i class=\"bi bi-person-gear me-2 d-inline-block\"></i> Settings</a></li>
                    </ul>
                </div>
                <div class=\"panel-body\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane p-0 show active\" id=\"side1\">
                            <div class=\"text-end m-3\">
                                <a href=\"mail-settings.php\" class=\"text-primary\">Mail Settings</a>
                            </div>
                            <div class=\"px-3 pt-0 pb-3 border-bottom border-block-end-dashed\">
                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-3\">
                                    <p class=\"mb-0 font-weight-semibold\">Messages</p>
                                    <a href=\"mail.php\" class=\"btn btn-sm btn-primary-light btn-icon btn-icon\"><i class=\"ri-chat-1-line\"></i></a>
                                </div>
                                <ul class=\"list-unstyled mb-0 mt-2\">
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"{{asset ('assets/images/faces/5.jpg')}}\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Elizabeth Ava<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">2</span><span
                                                        class=\"ms-2\"><i class=\"ti-pin-alt fs-11 text-muted\"></i></span></h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">3:55 PM</span>
                                                </div>
                                                <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\">Elizabeth is
                                                online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"{{asset ('assets/images/faces/9.jpg')}}\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">George Rhys<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">12:04 PM</span>
                                                </div>
                                                <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\">I must explain...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"{{ asset ('assets/images/faces/8.jpg') }}\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Bethany Isla<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">2</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">Yesterday</span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">We denounce with righteous..</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"{{ asset ('assets/images/faces/3.jpg') }}\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Margaret Emma<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">01 Mar</span>
                                                </div>
                                                <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                    class=\"fe fe-link-2 me-1 fs-12 text-primary\"></i><a
                                                    href=\"javascript:void(0);\">http://Diam-duoet.xd</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-0\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"{{ asset ('assets/images/faces/10.jpg') }}\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Michael Souris<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">22 Feb</span>
                                                </div>
                                                <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                    class=\"fe fe-image me-1 fs-12 text-primary\"></i>+13 photos</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"text-end mt-2\">
                                    <a href=\"chat.php\" class=\"text-primary\">View All</a>
                                </div>
                            </div>
                            <div class=\"p-3 border-bottom border-block-end-dashed\">
                                <div class=\"d-flex align-items-center justify-content-between gap-1 my-3\">
                                    <p class=\"mb-0 font-weight-semibold\">Workspace</p>
                                    <a href=\"mail.php\" class=\"btn btn-sm btn-primary-light btn-icon btn-icon\"><i class=\"ri-add-circle-line\"></i></a>
                                </div>
                                <ul class=\"list-unstyled mb-0 mt-1\">
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex\">
                                            <div class=\"avatar avatar  shadow bg-primary-transparent\">
                                                <i class=\"ri-user-line\"></i>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Olivia Lily<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">2:00 PM</span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">Aliquyam ipsum sit.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex\">
                                            <div class=\"avatar avatar  shadow bg-secondary-transparent\">
                                                <i class=\"ri-arrow-right-circle-line\"></i>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Smith Brown<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">2</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">12:00 PM</span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">At eos no sit...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex\">
                                            <div class=\"avatar avatar  shadow bg-warning-transparent\">
                                                <i class=\"ri-drag-move-line\"></i>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Wilson Li<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">24</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">16 Feb</span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">Sit est dolor dolor.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex\">
                                            <div class=\"avatar avatar  shadow bg-success-transparent\">
                                                <i class=\"ri-home-8-line\"></i>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Jones Morton<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">3</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">12 Jan </span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">Erat diam ipsum... Sed dolor...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-0\">
                                        <div class=\"d-flex\">
                                            <div class=\"avatar avatar  shadow bg-danger-transparent\">
                                                <i class=\"ri-global-line\"></i>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">White Lee<span
                                                        class=\"badge bg-primary-transparent fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">01 Feb</span>
                                                </div>
                                                <p class=\"mb-0 fs-12\">Justo accusam stet eirmod et....</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"text-end mt-2\">
                                    <a href=\"chat.php\" class=\"text-primary\">View All</a>
                                </div>
                            </div>
                            <div class=\"p-3 border-bottom border-block-end-dashed\">
                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-3\">
                                    <p class=\"mb-0 font-weight-semibold\">Calls</p>
                                    <a href=\"contacts.php\" class=\"btn btn-sm btn-primary-light btn-icon btn-icon\"><i class=\"ri-phone-line\"></i></a>
                                </div>
                                <ul class=\"list-unstyled mb-0 mt-2\">
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"{{asset ('assets/images/faces/14.jpg') }}\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Wilfrid Price<span
                                                        class=\"badge bg-danger-transparent text-danger fs-11 ms-2 font-weight-normal\">3</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">11:15 AM</span>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                    <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                        class=\"fe fe-x me-1 fs-13 text-danger\"></i>Missed call</p>
                                                    <span class=\"text-primary\"><i class=\"fe fe-phone\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\" data-bs-toggle=\"modal\"
                                            data-bs-target=\"#videoModal\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"{{ asset('assets/images/faces/7.jpg') }}\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Jasmin O'Kon</h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">Yesterday</span>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                    <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                        class=\"fe fe-arrow-down-left me-1 fs-13 text-primary\"></i>Duration:
                                                    15:30</p>
                                                    <span class=\"text-primary\"><i class=\"fe fe-video\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\" data-bs-toggle=\"modal\"
                                            data-bs-target=\"#videoModal\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"{{ asset('/assets/images/faces/4.jpg') }}\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">River Gleichner</h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">01 Mar</span>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                    <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                        class=\"fe fe-arrow-up-right me-1 fs-13 text-primary\"></i>Declined
                                                    </p>
                                                    <span class=\"text-primary\"><i class=\"fe fe-video\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-3\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"{{ asset('assets/images/faces/12.jpg') }}\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Saul Goodmate<span
                                                        class=\"badge bg-danger-transparent text-danger fs-11 ms-2 font-weight-normal\">1</span>
                                                    </h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">20 Feb</span>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                    <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                        class=\"fe fe-x me-1 fs-13 text-danger\"></i>Missed call</p>
                                                    <span class=\"text-primary\"><i class=\"fe fe-phone\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"mb-0\">
                                        <div class=\"d-flex pos-relative\">
                                            <a href=\"javascript:void(0)\" class=\"link-overlap\"></a>
                                            <div class=\"main-img-user avatar d-none d-sm-block\">
                                                <img alt=\"avatar\" class=\"shadow\" src=\"{{ asset('assets/images/faces/13.jpg') }}\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-2 fs-13\">
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mb-1\">
                                                    <h6 class=\"mb-0\">Edgardo Huel</h6>
                                                    <span class=\"fs-11 text-muted ms-auto my-auto\">15 Feb</span>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                    <p class=\"mb-0 fs-12 text-muted d-flex align-items-center\"><i
                                                        class=\"fe fe-arrow-down-left me-1 fs-13 text-success\"></i>Duration:
                                                    01:20:10</p>
                                                    <span class=\"text-primary\"><i class=\"fe fe-phone\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"text-end mt-3\">
                                    <a href=\"chat.php\" class=\"text-primary\">View All</a>
                                </div>
                            </div>
                            <div class=\"p-3 text-center\">
                                <div class=\"svg-card overflow-hidden\">
                                    <img alt=\"avatar\" class=\"shadow\" src=\"{{ asset('assets/images/media/media-67.jpg') }}\">
                                </div>
                                <h6 class=\"mt-3\">Find out more !</h6>
                                <a href=\"mail-settings.php\" class=\"btn btn-outline-primary btn-block\">Mail Settings</a>
                            </div>
                        </div>
                        <div class=\"tab-pane p-0\" id=\"side2\">
                            <div class=\"p-3 border-bottom\">
                                <h6>Notifications :</h6>
                                <div class=\"panel mt-2 tabs-style5\">
                                    <div class=\"panel-head\">
                                        <ul class=\"nav app-header-nav-tabs tab-style-2 mb-3\">
                                            <li class=\"nav-item flex-grow-1 text-center\"><a class=\"nav-link active\" data-bs-toggle=\"tab\"
                                                href=\"#tab_chat\">Home</a></li>
                                            <li class=\"nav-item flex-grow-1 text-center\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab_tasks\">Tasks</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"panel-body p-0\">
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane rounded-0 border border-dashed active\" id=\"tab_chat\">
                                                <div class=\"mt-0\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">Someone
                                                            mentioned</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"some\" name=\"toggleswitchsize\" type=\"checkbox\"> 
                                                            <label for=\"some\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mt-3\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">Someone
                                                        Replies</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"reply\" name=\"toggleswitchsize\" type=\"checkbox\"> 
                                                            <label for=\"reply\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mt-3\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">Allow All
                                                        Notifications</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"notify-allow\" name=\"toggleswitchsize\" type=\"checkbox\" checked> 
                                                            <label for=\"notify-allow\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mt-3 flex-wrap\">
                                                    <label class=\"text-muted mb-0\">Notifications On</label>
                                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioChat\" id=\"radio1\">
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio1\">In App</label>

                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioChat\" id=\"radio2\" checked>
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio2\">Email</label>

                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioChat\" id=\"radio3\">
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio3\">Both</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane rounded-0 border border-dashed\" id=\"tab_tasks\">
                                                <div class=\"mt-0\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">Assigned a
                                                        Task</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"task\" name=\"toggleswitchsize\" type=\"checkbox\"> 
                                                            <label for=\"task\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mt-3\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">If I Have More
                                                        Than 24 Tasks</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"listed\" name=\"toggleswitchsize\" type=\"checkbox\"> 
                                                            <label for=\"listed\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mt-3\">
                                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                                        <label class=\"text-muted d-flex align-items-center\">Allow All
                                                        Notifications</label>
                                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                                            <input id=\"all-notify\" name=\"toggleswitchsize\" type=\"checkbox\" checked> 
                                                            <label for=\"all-notify\" class=\"label-primary mb-1\"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between gap-1 mt-3 flex-wrap\">
                                                    <label class=\"text-muted mb-0\">Notifications On</label>
                                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioTasks\" id=\"radio4\" checked>
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio4\">In App</label>

                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioTasks\" id=\"radio5\">
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio5\">Email</label>

                                                        <input type=\"radio\" class=\"btn-check\" name=\"radioTasks\" id=\"radio6\">
                                                        <label class=\"btn btn-sm btn-outline-primary mb-0\" for=\"radio6\">Both</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"p-3 border-bottom\">
                                <h6>App :</h6>
                                <div class=\"panel mt-2 tabs-style5\">
                                    <div class=\"panel-head\">
                                        <ul class=\"nav app-header-nav-tabs tab-style-2 mb-3\">
                                            <li class=\"nav-item flex-grow-1 text-center\"><a class=\"nav-link active\" data-bs-toggle=\"tab\"
                                                href=\"#tab_apps\">Files</a></li>
                                            <li class=\"nav-item flex-grow-1 text-center\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab_profile\">Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"panel-body p-0\">
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane rounded-0 border border-dashed active\" id=\"tab_apps\">
                                                <div class=\"mt-3\">
                                                    <p class=\"mb-0\">Files : </p>
                                                    <div class=\"mt-3\">
                                                        <div class=\"mb-0 d-flex align-items-center justify-content-between gap-1\">
                                                            <span class=\"text-muted\">
                                                            <i class=\"ri-folder-image-fill me-1 d-inline-block fs-18 text-primary\"></i>
                                                            Images
                                                            </span>
                                                            
                                                            <div class=\" ms-auto=\"> 
                                                                1,458
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-3\">
                                                        <div class=\"mb-0 d-flex align-items-center justify-content-between gap-1\">
                                                            <span class=\"text-muted\">
                                                            <i class=\"ri-live-line me-1 d-inline-block fs-18 text-secondary\"></i>
                                                            Videos
                                                            </span>
                                                            
                                                            <div class=\" ms-auto=\"> 
                                                                213
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-3\">
                                                        <div class=\"mb-0 d-flex align-items-center justify-content-between gap-1\">
                                                            <span class=\"text-muted\">
                                                            <i class=\"ri-database-2-line me-1 d-inline-block fs-18 text-success\"></i>
                                                            Storage
                                                            </span>
                                                            
                                                            <div class=\" ms-auto text-success\"> 
                                                                8.50MB free space
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mt-4\">
                                                    <p class=\"mb-0\">Files Privacy Settings :</p>
                                                    <div class=\"mt-3\">
                                                        <div class=\"form-group mb-0\">
                                                            <p class=\"mb-2 d-flex align-items-center justify-content-between gap-1\">
                                                            <label for=\"inputPassword\" class=\"mb-0 text-muted\">Password</label>
                                                            <a href=\"javascript:void(0)\" class=\"fs-11 text-primary\" id=\"changePassword\">change</a>
                                                            </p>
                                                            <input type=\"password\" class=\"form-control form-contron-sm radius-4\" id=\"inputPassword\"
                                                            placeholder=\"Enter New Password\" value=\"passwordzem\">
                                                            <div class=\"mt-2 d-none\" id=\"reEnterPassword\">
                                                                <input type=\"password\" class=\"form-control form-contron-sm radius-4\" id=\"inputPasswordTwo\"
                                                                placeholder=\"Re-Enter Password\">
                                                                <div class=\"btn-list mt-2 text-end\">
                                                                    <a href=\"javascript:void(0)\" class=\"text-danger\" id=\"closePassword\">Discard</a>
                                                                    <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary ms-3\">Save
                                                                    Changes</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-3\">
                                                        <div class=\"mb-0 d-flex align-items-center justify-content-between gap-1\">
                                                            <span class=\"text-muted d-flex align-items-center\">Two Factor
                                                            Authentication</span>
                                                            <div class=\"custom-toggle-switch ms-auto\"> 
                                                                <input id=\"authentication\" name=\"toggleswitchsize\" type=\"checkbox\" checked> 
                                                                <label for=\"authentication\" class=\"label-primary mb-1\"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-3\">
                                                        <div class=\"form-group mb-0\">
                                                            <p class=\"mb-0 d-flex align-items-center justify-content-between gap-1\">
                                                            <label for=\"inputPassword\" class=\"mb-0 text-muted\">Recent Deleted Files</label>
                                                                <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-outline-danger mt-2\">Delete All</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane border border-dashed rounded-0\" id=\"tab_profile\">
                                                <div class=\"mt-3\">
                                                    <div class=\"form-group mb-3\">
                                                        <label class=\"text-muted\" for=\"inputName\">Full Name</label>
                                                        <input type=\"text\" class=\"form-control radius-4\" id=\"inputName\" placeholder=\"Enter Full Name\"
                                                            value=\"Json Taylor\">
                                                    </div>
                                                    <div class=\"form-group mb-3\">
                                                        <label class=\"text-muted\" for=\"inputMail\">Email</label>
                                                        <input type=\"email\" class=\"form-control radius-4\" id=\"inputMail\" placeholder=\"Enter Your Mail\"
                                                            value=\"nicktaylor@spruko.me\">
                                                    </div>
                                                    <div class=\"form-group mb-3\">
                                                        <label for=\"inputNumber\" class=\"text-muted d-flex align-items-center justify-content-between gap-1\">
                                                            Mobile Number
                                                            <a href=\"javascript:void(0)\" class=\"fs-11 text-primary\">change number</a>
                                                        </label>
                                                        <div class=\"input-group\">
                                                            <span class=\"input-group-text br-ts-20 br-bs-20\">+91</span>
                                                            <input type=\"number\" class=\"form-control br-te-4 br-be-4\" id=\"inputNumber\"
                                                            placeholder=\"Enter Your Number\" value=\"1212313231\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"p-3 border-bottom\">
                                <h6>Remaiders :</h6>
                                <div class=\"mt-3\">
                                    <div class=\"d-flex align-items-center justify-content-between gap-1\">
                                        <label class=\"text-muted\">Get alert for remaiders</label>
                                        <div class=\"custom-toggle-switch ms-auto\"> 
                                            <input id=\"mails-images\" name=\"toggleswitchsize\" type=\"checkbox\" checked> 
                                            <label for=\"mails-images\" class=\"label-primary mb-1\"></label>
                                        </div>
                                        <span class=\"custom-switch-indicator\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"p-3\">
                                <div class=\"text-center\">
                                    <img src=\"{{ asset ('assets/images/media/media-66.png')}}\" alt=\"\">
                                    <h6 class=\"mt-4\">This Is Not You're Looking For?</h6>
                                    <a href=\"profile-settings.php\" class=\"btn btn-block btn-outline-primary\">Go To Profile Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {# James say:Footer #}
    <footer class=\"footer mt-auto py-3 text-center\">
        <div class=\"container\">
            <span class=\"text-muted\"> Copyright © <span id=\"year\"></span> <a
                    href=\"javascript:void(0);\" class=\"text-dark fw-medium\">SciFi</a>.
                Designed with <span class=\"ri-heart-fill text-danger\"></span> by <a href=\"javascript:void(0);\">
                    <span class=\"fw-medium text-primary text-decoration-underline\">Spruko</span>
                </a> All
                rights
                reserved
            </span>
        </div>
    </footer>

    <!-- SCROLL-TO-TOP -->
        <div class=\"scrollToTop\">
                <span class=\"arrow\"><i class=\"ti ti-arrow-narrow-up fs-20\"></i></span>
        </div>
        <div id=\"responsive-overlay\"></div>
{% endblock %}

", "pages/main.html.twig", "E:\\work\\scifi\\templates\\pages\\main.html.twig");
    }
}
