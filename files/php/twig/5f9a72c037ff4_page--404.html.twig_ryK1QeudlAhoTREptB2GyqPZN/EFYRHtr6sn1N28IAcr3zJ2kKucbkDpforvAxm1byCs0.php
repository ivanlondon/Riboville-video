<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/yg_hotel/templates/page--404.html.twig */
class __TwigTemplate_e0ba5d6c46212b804c1b8efd45056f265b6d843874152aa0e3b5bfc954777803 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 65];
        $filters = ["escape" => 64];
        $functions = ["path" => 84];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 59
        echo "<header id=\"header\"  class=\"other-page-header\">
  <div id=\"header-top\">
    <div class=\"container\">
      <div class=\"header-right\">
        <ul>
          <li>";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["reachus"] ?? null)), "html", null, true);
        echo "<a class=\"phone\" href=\"tel:123 456 7890\"><span>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null)), "html", null, true);
        echo "</span></a></li>
          ";
        // line 65
        if (((($context["facebook"] ?? null) || ($context["twitter"] ?? null)) || ($context["youtube"] ?? null))) {
            // line 66
            echo "          <li>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["followus"] ?? null)), "html", null, true);
            echo "
          ";
            // line 67
            if (($context["facebook"] ?? null)) {
                // line 68
                echo "          <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
                echo "\" class=\"social\" ><i class=\"fa fa-facebook-f\"></i></a>
          ";
            }
            // line 70
            echo "
          ";
            // line 71
            if (($context["facebook"] ?? null)) {
                // line 72
                echo "          <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
                echo "\" class=\"social\" ><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
          ";
            }
            // line 74
            echo "          ";
            if (($context["facebook"] ?? null)) {
                // line 75
                echo "          <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null)), "html", null, true);
                echo "\" class=\"social\" ><i class=\"fa fa-youtube-play\"></i></a>
          ";
            }
            // line 77
            echo "          </li>
          ";
        }
        // line 79
        echo "        </ul>
      </div>
    </div>
  </div>
  <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"mainNav\">
    <div class=\"container\"> <a href=\"";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
        echo "\" class=\"logo\"><img src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null)), "html", null, true);
        echo "\" alt=\"logo\"></a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <i class=\"fa fa-bars\"></i> </button>
        ";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
      </div>
    </div>
  </nav>
</header>

    
";
        // line 94
        echo "<section id=\"not-found-section\" class=\"text-center\">
  <div class=\"container\">               
    <div class=\"row\"> 
      <div class=\"not-found-body\" >
        <div class=\"not-title\" >
          <h1>404</h1>
          <h2>Page Not Found</h2> 
        </div>  
          <h2>Sorry. We can't find a page.</h2>
          <p>The Page you are looking for might have a removed, had its name changed, or its temporarily unavailable.</p>      
          <a href=\"";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\" class=\"btn btn-custom\"> Go Home </a>      
      </div>
    </div>          
  </div>    
</section>
 

<!-- FOOTER SECTION-->
    <section id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.3s\">
            ";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_1", [])), "html", null, true);
        echo "
          </div>
          ";
        // line 118
        if (((($context["footerphone"] ?? null) || ($context["fax"] ?? null)) || ($context["mail"] ?? null))) {
            // line 119
            echo "          <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.6s\">
          <h6>";
            // line 120
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["getintitle"] ?? null)), "html", null, true);
            echo "</h6>

            ";
            // line 122
            if (($context["footerphone"] ?? null)) {
                // line 123
                echo "            <p><a href=\"tel:123 456 7890\"><i class=\"fa fa-phone\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footerphone"] ?? null)), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 125
            echo "
            ";
            // line 126
            if (($context["fax"] ?? null)) {
                // line 127
                echo "            <p><a href=\"#\"><i class=\"fa fa-fax\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["fax"] ?? null)), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 129
            echo "
            ";
            // line 130
            if (($context["mail"] ?? null)) {
                // line 131
                echo "            <p><a href=\"mailto:";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null)), "html", null, true);
                echo "\"><i class=\"fa fa-envelope\"></i>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null)), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 133
            echo "          </div>
          ";
        }
        // line 135
        echo "          <div class=\"col-md-2 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.6s\">
          ";
        // line 136
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_3", [])), "html", null, true);
        echo "
          </div>

          ";
        // line 139
        if (((($context["facebook"] ?? null) || ($context["twitter"] ?? null)) || ($context["linkedin"] ?? null))) {
            // line 140
            echo "          <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.9s\">
          <h6>SOCIAL</h6>
            <div class=\"social\">
              <ul>
              ";
            // line 144
            if (($context["facebook"] ?? null)) {
                // line 145
                echo "               <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
                echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i> Facebook</a></li>
              ";
            }
            // line 147
            echo "
              ";
            // line 148
            if (($context["twitter"] ?? null)) {
                // line 149
                echo "               <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\"><i class=\"fa fa-twitter\"></i> Twitter</a></li>
              ";
            }
            // line 151
            echo "               
              ";
            // line 152
            if (($context["linkedin"] ?? null)) {
                // line 153
                echo "               <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\"><i class=\"  fa fa-linkedin\"></i> Linkedin</a></li>
              ";
            }
            // line 154
            echo " 
              </ul>  
            </div>
          </div>
          ";
        }
        // line 159
        echo "
        </div>
      </div>
    </section>
    <div class=\"copyright\">
     <div class=\"container\">
     <div class=\"row\">  
      <div class=\"col-md-6 mx-auto text-center wow fadeInUp\" data-wow-delay=\"0.3s\"> 
        <p>Theme By<a href=\"https://www.drupaldevelopersstudio.com/\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\">Young Globes</a></p>  
      </div>
     </div>
     </div>
  </div>
<!-- End footer section -->";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_hotel/templates/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 159,  256 => 154,  250 => 153,  248 => 152,  245 => 151,  239 => 149,  237 => 148,  234 => 147,  228 => 145,  226 => 144,  220 => 140,  218 => 139,  212 => 136,  209 => 135,  205 => 133,  197 => 131,  195 => 130,  192 => 129,  186 => 127,  184 => 126,  181 => 125,  175 => 123,  173 => 122,  168 => 120,  165 => 119,  163 => 118,  158 => 116,  143 => 104,  131 => 94,  121 => 86,  114 => 84,  107 => 79,  103 => 77,  97 => 75,  94 => 74,  88 => 72,  86 => 71,  83 => 70,  77 => 68,  75 => 67,  70 => 66,  68 => 65,  62 => 64,  55 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<header id=\"header\"  class=\"other-page-header\">
  <div id=\"header-top\">
    <div class=\"container\">
      <div class=\"header-right\">
        <ul>
          <li>{{reachus}}<a class=\"phone\" href=\"tel:123 456 7890\"><span>{{phone}}</span></a></li>
          {% if (facebook or twitter or youtube) %}
          <li>{{followus}}
          {% if facebook  %}
          <a href=\"{{facebook}}\" class=\"social\" ><i class=\"fa fa-facebook-f\"></i></a>
          {% endif %}

          {% if facebook  %}
          <a href=\"{{twitter}}\" class=\"social\" ><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
          {% endif %}
          {% if facebook  %}
          <a href=\"{{youtube}}\" class=\"social\" ><i class=\"fa fa-youtube-play\"></i></a>
          {% endif %}
          </li>
          {% endif %}
        </ul>
      </div>
    </div>
  </div>
  <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"mainNav\">
    <div class=\"container\"> <a href=\"{{ path('<front>') }}\" class=\"logo\"><img src=\"{{ logopath }}\" alt=\"logo\"></a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <i class=\"fa fa-bars\"></i> </button>
        {{ page.primary_menu }}
      </div>
    </div>
  </nav>
</header>

    
{# Main #}
<section id=\"not-found-section\" class=\"text-center\">
  <div class=\"container\">               
    <div class=\"row\"> 
      <div class=\"not-found-body\" >
        <div class=\"not-title\" >
          <h1>404</h1>
          <h2>Page Not Found</h2> 
        </div>  
          <h2>Sorry. We can't find a page.</h2>
          <p>The Page you are looking for might have a removed, had its name changed, or its temporarily unavailable.</p>      
          <a href=\"{{front_page}}\" class=\"btn btn-custom\"> Go Home </a>      
      </div>
    </div>          
  </div>    
</section>
 

<!-- FOOTER SECTION-->
    <section id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.3s\">
            {{ page.footer_col_1}}
          </div>
          {% if (footerphone or fax or mail) %}
          <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.6s\">
          <h6>{{getintitle}}</h6>

            {% if footerphone  %}
            <p><a href=\"tel:123 456 7890\"><i class=\"fa fa-phone\"></i>{{footerphone}}</a></p>
            {% endif %}

            {% if fax  %}
            <p><a href=\"#\"><i class=\"fa fa-fax\"></i>{{fax}}</a></p>
            {% endif %}

            {% if mail  %}
            <p><a href=\"mailto:{{mail}}\"><i class=\"fa fa-envelope\"></i>{{mail}}</a></p>
            {% endif %}
          </div>
          {% endif %}
          <div class=\"col-md-2 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.6s\">
          {{ page.footer_col_3 }}
          </div>

          {% if (facebook or twitter or linkedin) %}
          <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.9s\">
          <h6>SOCIAL</h6>
            <div class=\"social\">
              <ul>
              {% if facebook  %}
               <li><a href=\"{{facebook}}\" class=\"facebook\"><i class=\"fa fa-facebook\"></i> Facebook</a></li>
              {% endif %}

              {% if twitter  %}
               <li><a href=\"{{twitter}}\" class=\"twitter\"><i class=\"fa fa-twitter\"></i> Twitter</a></li>
              {% endif %}
               
              {% if linkedin  %}
               <li><a href=\"{{linkedin}}\" class=\"linkedin\"><i class=\"  fa fa-linkedin\"></i> Linkedin</a></li>
              {% endif %} 
              </ul>  
            </div>
          </div>
          {% endif %}

        </div>
      </div>
    </section>
    <div class=\"copyright\">
     <div class=\"container\">
     <div class=\"row\">  
      <div class=\"col-md-6 mx-auto text-center wow fadeInUp\" data-wow-delay=\"0.3s\"> 
        <p>Theme By<a href=\"https://www.drupaldevelopersstudio.com/\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\">Young Globes</a></p>  
      </div>
     </div>
     </div>
  </div>
<!-- End footer section -->", "themes/contrib/yg_hotel/templates/page--404.html.twig", "/opt/lampp/htdocs/riboville-drupal-8/themes/contrib/yg_hotel/templates/page--404.html.twig");
    }
}
