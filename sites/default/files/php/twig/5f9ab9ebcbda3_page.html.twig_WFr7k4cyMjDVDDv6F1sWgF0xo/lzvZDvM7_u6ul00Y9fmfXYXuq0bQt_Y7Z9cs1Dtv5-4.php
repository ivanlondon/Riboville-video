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

/* themes/contrib/yg_hotel/templates/page.html.twig */
class __TwigTemplate_e6ae02f41c75ba2f94961239605043ec7939c2de7b4231e2e3d2b51d18c1eaf4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "block" => 31];
        $filters = ["escape" => 9];
        $functions = ["path" => 9];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
        // line 1
        if (($context["whiteheader"] ?? null)) {
            // line 2
            echo "<header id=\"header\"    class=\"main\" >
";
        } else {
            // line 4
            echo "<header id=\"header\" class=\"\">
";
        }
        // line 6
        echo "
<nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top \" id=\"mainNav\">
  <div class=\"container-fluid topnav\"><div class=\"contact d-none d-lg-block d-sm-none\"> <ul><li ><img src=\"img/phone.png\"><a  href=\"+27 11 234 2456\">+27 11 234 2456</a></li><li><img src=\"img/email.png\"><a  href=\"contact\">Contact</a></li></ul>
  </div> <a href=\"";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
        echo "\" style=\"text-align: center !important;\" class=\"logo\"><img src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null)), "html", null, true);
        echo "\" alt=\"logo\"></a>
    <div class=\"dropdown\" style=\"position: absolute;right: 51px; border: 1px solid #d2ac67;\" >
      <button class=\"btn btn-secondary dropdown-toggle icon \"  type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Make Reservation
      </button>
      <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
        <a class=\"dropdown-item\" href=\"#\">Suite</a>
        <a class=\"dropdown-item\" href=\"#\">Confrencing</a>
        <a class=\"dropdown-item\" href=\"#\">Spa</a>
      </div>
    </div></div> 
  <div class=\"container mobile-nav\">
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <i class=\"fa fa-bars\"></i> </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\" style=\"margin: auto;\">
      ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
    </div>
  </div>
</nav>
</header>
";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slider", [])), "html", null, true);
        echo "
<section ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 31
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "</section>
<!-- footer section -->
<!-- FOOTER SECTION-->
<section id=\"footer\">
  <footer class=\"page-footer font-small\">
    <div class=\"container text-center\">

        <div class=\"row py-2 d-flex align-items-center\">

   

            <div class=\"col-12 mt-1 \">
                <img src=\"img/logo_3.png\" class=\"d-inline-block align-top\" alt=\"\">

            </div>

            <div class=\"col-12 py-3\">
                <div class=\" text-center\">
                  <!-- Facebook -->
                  <a class=\"fb-ic\">
                    <i class=\"fab fa-facebook-f white-text mr-md-5 mr-2 \">
                      
                    </i>
                  </a>
                  <!-- Twitter -->
                  <a class=\"tw-ic\">
                    <i class=\"fab fa-twitter  white-text mr-md-5 mr-2 \">
                    </i>
                  </a>
                  <!-- Google +-->
                  <a class=\"gplus-ic\">
                    <i class=\"fab fa-google-plus-g  white-text mr-md-5 mr-2 \">
                    </i>
                  </a>
                  <!--Linkedin -->
                  <a class=\"li-ic\">
                    <i class=\"fab fa-linkedin-in  white-text mr-md-5 mr-2 \">
                    </i>
                  </a>
                  <!--Instagram-->
                  <a class=\"ins-ic\">
                    <i class=\"fab fa-instagram  white-text mr-md-5 mr-2 \">
                    </i>
                  </a>
                  <!--Pinterest-->
                  <a class=\"pin-ic\">
                    <i class=\"fab fa-pinterest  white-text \"> </i>
                  </a>
                </div>
              </div>



            <div class=\"col-12 \">
                <h6 class=\"footer-copyright\">
                    All rights reserved &copy; 2020
                </h6>
            </div>

        </div>

    </div>
</footer>
</section>

 
<!-- End footer section -->";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "    <a id=\"main-content\"></a>
    ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_hotel/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 33,  182 => 32,  179 => 31,  109 => 35,  106 => 31,  102 => 29,  98 => 28,  90 => 23,  71 => 9,  66 => 6,  62 => 4,  58 => 2,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if whiteheader  %}
<header id=\"header\"    class=\"main\" >
{% else %}
<header id=\"header\" class=\"\">
{% endif %}

<nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top \" id=\"mainNav\">
  <div class=\"container-fluid topnav\"><div class=\"contact d-none d-lg-block d-sm-none\"> <ul><li ><img src=\"img/phone.png\"><a  href=\"+27 11 234 2456\">+27 11 234 2456</a></li><li><img src=\"img/email.png\"><a  href=\"contact\">Contact</a></li></ul>
  </div> <a href=\"{{ path('<front>') }}\" style=\"text-align: center !important;\" class=\"logo\"><img src=\"{{ logopath }}\" alt=\"logo\"></a>
    <div class=\"dropdown\" style=\"position: absolute;right: 51px; border: 1px solid #d2ac67;\" >
      <button class=\"btn btn-secondary dropdown-toggle icon \"  type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Make Reservation
      </button>
      <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
        <a class=\"dropdown-item\" href=\"#\">Suite</a>
        <a class=\"dropdown-item\" href=\"#\">Confrencing</a>
        <a class=\"dropdown-item\" href=\"#\">Spa</a>
      </div>
    </div></div> 
  <div class=\"container mobile-nav\">
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <i class=\"fa fa-bars\"></i> </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\" style=\"margin: auto;\">
      {{ page.primary_menu }}
    </div>
  </div>
</nav>
</header>
{{page.slider}}
<section {{ content_attributes.addClass(content_classes) }}>
  {# Content #}
  {% block content %}
    <a id=\"main-content\"></a>
    {{ page.content }}
  {% endblock %}
</section>
<!-- footer section -->
<!-- FOOTER SECTION-->
<section id=\"footer\">
  <footer class=\"page-footer font-small\">
    <div class=\"container text-center\">

        <div class=\"row py-2 d-flex align-items-center\">

   

            <div class=\"col-12 mt-1 \">
                <img src=\"img/logo_3.png\" class=\"d-inline-block align-top\" alt=\"\">

            </div>

            <div class=\"col-12 py-3\">
                <div class=\" text-center\">
                  <!-- Facebook -->
                  <a class=\"fb-ic\">
                    <i class=\"fab fa-facebook-f white-text mr-md-5 mr-2 \">
                      
                    </i>
                  </a>
                  <!-- Twitter -->
                  <a class=\"tw-ic\">
                    <i class=\"fab fa-twitter  white-text mr-md-5 mr-2 \">
                    </i>
                  </a>
                  <!-- Google +-->
                  <a class=\"gplus-ic\">
                    <i class=\"fab fa-google-plus-g  white-text mr-md-5 mr-2 \">
                    </i>
                  </a>
                  <!--Linkedin -->
                  <a class=\"li-ic\">
                    <i class=\"fab fa-linkedin-in  white-text mr-md-5 mr-2 \">
                    </i>
                  </a>
                  <!--Instagram-->
                  <a class=\"ins-ic\">
                    <i class=\"fab fa-instagram  white-text mr-md-5 mr-2 \">
                    </i>
                  </a>
                  <!--Pinterest-->
                  <a class=\"pin-ic\">
                    <i class=\"fab fa-pinterest  white-text \"> </i>
                  </a>
                </div>
              </div>



            <div class=\"col-12 \">
                <h6 class=\"footer-copyright\">
                    All rights reserved &copy; 2020
                </h6>
            </div>

        </div>

    </div>
</footer>
</section>

 
<!-- End footer section -->", "themes/contrib/yg_hotel/templates/page.html.twig", "/opt/lampp/htdocs/riboville-drupal-8/themes/contrib/yg_hotel/templates/page.html.twig");
    }
}
