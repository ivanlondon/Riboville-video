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

/* __string_template__e5e0f3a4cb17a5bd0d67152f878c57539e32ad7f244dd429dff75beb15b4ecea */
class __TwigTemplate_a923d2d26f2d33163949c986edce35df4e226c0e96ac739ac79761b6f2964abb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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
        echo "<section class=\"main-sec2\">
<div class=\"main-sec\">
      <div class=\"container\">
        <div class=\"row text-center\">
          <div class=\"col-12\">
              <h1>Conferencing</h1>
              <hr class=\"style-eight \">
          </div>
      </div>
          <div class=\"row\">
            <div class=\"col-lg-6 col-6\">
              <h1>Our Conference</h1>
              <h2 class=\"roomtext\"><i class=\"fas fa-users mr-2\"></i>16</h2>
              <p class=\"card-text\">";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
               <a type=\"button\" class=\"btn btn-outline-primary\" href=\"conferencing\">Make a Reservation</a>
          </div>
              <div class=\"col-lg-6 col-6\">
                  <div class=\"card mb-5\">
                      <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-ride=\"carousel\">
          
                          <div class=\"carousel-inner\">
                              <div class=\"carousel-item\">
                                  <img src=\"";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null)), "html", null, true);
        echo " \" class=\"d-block w-100\" alt=\"...\">
                                  <div class=\"carousel-caption d-none d-md-block\">
                                    

                                  </div>
                              </div>  
                              <div class=\"carousel-item\">
                                  <img src=\"";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image_1"] ?? null)), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                  <div class=\"carousel-caption d-none d-md-block\">
                                    

                                  </div>
                              </div>
                              <div class=\"carousel-item active\">
                                  <img src=\"";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image_2"] ?? null)), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                                  <div class=\"carousel-caption d-none d-md-block \">
                                    

                                  </div>
                              </div>
                          </div>
                          <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
                              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Previous</span>
                          </a>
                          <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
                              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Next</span>
                          </a>
                      </div>
                   
                  </div>


              </div>
              
        


          </div>
     
      

      </div>
  </div>

  

</section>";
    }

    public function getTemplateName()
    {
        return "__string_template__e5e0f3a4cb17a5bd0d67152f878c57539e32ad7f244dd429dff75beb15b4ecea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  92 => 30,  82 => 23,  70 => 14,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<section class=\"main-sec2\">
<div class=\"main-sec\">
      <div class=\"container\">
        <div class=\"row text-center\">
          <div class=\"col-12\">
              <h1>Conferencing</h1>
              <hr class=\"style-eight \">
          </div>
      </div>
          <div class=\"row\">
            <div class=\"col-lg-6 col-6\">
              <h1>Our Conference</h1>
              <h2 class=\"roomtext\"><i class=\"fas fa-users mr-2\"></i>16</h2>
              <p class=\"card-text\">{{ body }}</p>
               <a type=\"button\" class=\"btn btn-outline-primary\" href=\"conferencing\">Make a Reservation</a>
          </div>
              <div class=\"col-lg-6 col-6\">
                  <div class=\"card mb-5\">
                      <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-ride=\"carousel\">
          
                          <div class=\"carousel-inner\">
                              <div class=\"carousel-item\">
                                  <img src=\"{{ field_image }} \" class=\"d-block w-100\" alt=\"...\">
                                  <div class=\"carousel-caption d-none d-md-block\">
                                    

                                  </div>
                              </div>  
                              <div class=\"carousel-item\">
                                  <img src=\"{{ field_image_1 }}\" class=\"d-block w-100\" alt=\"...\">
                                  <div class=\"carousel-caption d-none d-md-block\">
                                    

                                  </div>
                              </div>
                              <div class=\"carousel-item active\">
                                  <img src=\"{{ field_image_2 }}\" class=\"d-block w-100\" alt=\"...\">
                                  <div class=\"carousel-caption d-none d-md-block \">
                                    

                                  </div>
                              </div>
                          </div>
                          <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
                              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Previous</span>
                          </a>
                          <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
                              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Next</span>
                          </a>
                      </div>
                   
                  </div>


              </div>
              
        


          </div>
     
      

      </div>
  </div>

  

</section>", "__string_template__e5e0f3a4cb17a5bd0d67152f878c57539e32ad7f244dd429dff75beb15b4ecea", "");
    }
}
