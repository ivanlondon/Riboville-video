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

/* __string_template__2107303e432e6ee6e3a93b521b0103fa922064735c2827871c5fcf1df539288a */
class __TwigTemplate_87e586d3936da0c38fc41e7da7f20c0d680a77d4f7882b596ab677be5711e222 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 19];
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
        echo "<div class=\"col-md-12 text-center wow fadeInUp\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; font-size: 24px; padding-left:20%; padding-right:20%; margin-bottom:150px;\">
\t<p >With an instinctual eye for excellence, this new five-star stable is not only about betting on a good business horse – it is something symbolic to the spirit of the family and a soul of success and the stamina it takes to transform intangible luck into a true fortune.

\t\tThat’s why this beautiful establishment shall simply be renamed as Riboville.</p>
\t</div>

<div class=\"animsition\">
\t<div class=\"nav cursor-show\">&nbsp;</div>
\t<!-- Primary Page Layout
\t\t\t================================================== -->
\t
\t

\t<div class=\"section padding-bottom-big over-hide z-bigger\">
\t<div class=\"container-fluid\">

\t<div class=\"row px-5 px-xl-2\">
\t<div class=\"col-md-6 img-slice-wrap mb-5 over-hide\">
\t<div class=\"scroll-img\" style=\"background-image: url(";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image_1"] ?? null)), "html", null, true);
        echo ");\">&nbsp;</div>
\t</div>
\t<div class=\"col-md-6 wow fadeInUp \" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;padding-top: 50px; padding-left:10%;  padding-right:10%; margin-bottom:50px;\">
\t\t<p>Boutique Hotel</p>
\t
\t\t<h4 style=\"color:#000; margin-bottom: 30px\">Welcome To Riboville</h4>
\t\t<p >In 1974, a bet placed on a horse called Ribovillle who was 20:1 outsider to win in the Durban July, turned out to be just the right bet. Through a series of extraordinary events, the horse romped to the finish line four lengths ahead of the nearest rival, a feat which has never been matched.</p>
\t\t\t<div class=\"explore-btn wow fadeInUp\" data-wow-delay=\"0.9s\"><a class=\"btn btn-info\" href=\"suite\">EXPLORE US</a></div>
\t\t\t
\t\t</div>
\t<div class=\"section clearfix\">&nbsp;</div>
\t<div class=\"col-md-12 img-slice-wrap mt-5 mb-5 over-hide\">
\t\t<div class=\"scroll-img\" style=\"background-image: url(img/dining.jpg);\">&nbsp;</div>
\t
\t\t</div>
\t\t\t
\t<div class=\"section clearfix\">&nbsp;</div>
\t<div class=\"col-md-6 wow fadeInUp \" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;padding-top: 50px; padding-left:10%;  padding-right:10%; margin-bottom:50px;\">
\t\t<p>Conferencing</p>
\t
\t\t<h4 style=\"color:#000; margin-bottom: 30px\">Equestrian Confrencing</h4>
\t\t<p >Meeting Rooms pair 20th century art with state-of-the-art Meeting amenities and exceptional service. From Outdoor Conferences on the Lawn to Board Meetings in one of our three well appointed confrence rooms, the Hotel ensures productive business gatherings and memorable occasions. </p>
\t\t\t<div class=\"explore-btn wow fadeInUp\" data-wow-delay=\"0.9s\"><a class=\"btn btn-info\" href=\"#\">Learn More</a></div>
\t\t\t
\t\t</div>
\t<div class=\"col-md-6 img-slice-wrap mt-5 mb-5 over-hide\">
\t<div class=\"scroll-img\" style=\"background-image: url(img/confrencing.jpeg);\">&nbsp;</div>
\t
\t</div>

\t<div class=\"section clearfix\">&nbsp;</div>
\t






\t</div>
\t</div>
\t</div>
\t
\t<!-- Social links
\t\t\t================================================== -->
\t
\t\t\t<div class=\"social-fixed\">
\t\t\t
\t\t\t\t<a class=\"fb-ic hover-target\">
\t\t\t\t\t<i class=\"fab fa-facebook-f white-text mr-md-5 mr-2 \">
\t\t\t\t\t  
\t\t\t\t\t</i>
\t\t\t\t  </a>
\t\t\t\t  <a class=\"tw-ic hover-target\">
\t\t\t\t\t<i class=\"fab fa-twitter  white-text mr-md-5 mr-2 \">
\t\t\t\t\t</i>
\t\t\t\t  </a>
\t\t\t\t  <a class=\"ins-ic hover-target\">
\t\t\t\t\t<i class=\"fab fa-instagram  white-text mr-md-5 mr-2 \">
\t\t\t\t\t</i>
\t\t\t\t  </a>
\t\t\t\t  <a class=\"pin-ic hover-target\">
\t\t\t\t\t<i class=\"fab fa-pinterest   white-text mr-md-5 mr-2 \"> </i>
\t\t\t\t  </a>
\t\t\t</div>
\t
\t<div class=\"copyr\">2020 © <a class=\"hover-target\" href=\"#\">Riboville Hotel</a></div>
\t
\t<div class=\"scroll-to-top hover-target\">&nbsp;</div>
\t<!-- Page cursor
\t\t\t================================================== -->
\t
\t<div class=\"cursor\" id=\"cursor\">&nbsp;</div>
\t
\t<div class=\"cursor2\" id=\"cursor2\">&nbsp;</div>
\t
\t<div class=\"cursor3\" id=\"cursor3\">&nbsp;</div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "__string_template__2107303e432e6ee6e3a93b521b0103fa922064735c2827871c5fcf1df539288a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"col-md-12 text-center wow fadeInUp\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; font-size: 24px; padding-left:20%; padding-right:20%; margin-bottom:150px;\">
\t<p >With an instinctual eye for excellence, this new five-star stable is not only about betting on a good business horse – it is something symbolic to the spirit of the family and a soul of success and the stamina it takes to transform intangible luck into a true fortune.

\t\tThat’s why this beautiful establishment shall simply be renamed as Riboville.</p>
\t</div>

<div class=\"animsition\">
\t<div class=\"nav cursor-show\">&nbsp;</div>
\t<!-- Primary Page Layout
\t\t\t================================================== -->
\t
\t

\t<div class=\"section padding-bottom-big over-hide z-bigger\">
\t<div class=\"container-fluid\">

\t<div class=\"row px-5 px-xl-2\">
\t<div class=\"col-md-6 img-slice-wrap mb-5 over-hide\">
\t<div class=\"scroll-img\" style=\"background-image: url({{ field_image_1 }});\">&nbsp;</div>
\t</div>
\t<div class=\"col-md-6 wow fadeInUp \" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;padding-top: 50px; padding-left:10%;  padding-right:10%; margin-bottom:50px;\">
\t\t<p>Boutique Hotel</p>
\t
\t\t<h4 style=\"color:#000; margin-bottom: 30px\">Welcome To Riboville</h4>
\t\t<p >In 1974, a bet placed on a horse called Ribovillle who was 20:1 outsider to win in the Durban July, turned out to be just the right bet. Through a series of extraordinary events, the horse romped to the finish line four lengths ahead of the nearest rival, a feat which has never been matched.</p>
\t\t\t<div class=\"explore-btn wow fadeInUp\" data-wow-delay=\"0.9s\"><a class=\"btn btn-info\" href=\"suite\">EXPLORE US</a></div>
\t\t\t
\t\t</div>
\t<div class=\"section clearfix\">&nbsp;</div>
\t<div class=\"col-md-12 img-slice-wrap mt-5 mb-5 over-hide\">
\t\t<div class=\"scroll-img\" style=\"background-image: url(img/dining.jpg);\">&nbsp;</div>
\t
\t\t</div>
\t\t\t
\t<div class=\"section clearfix\">&nbsp;</div>
\t<div class=\"col-md-6 wow fadeInUp \" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;padding-top: 50px; padding-left:10%;  padding-right:10%; margin-bottom:50px;\">
\t\t<p>Conferencing</p>
\t
\t\t<h4 style=\"color:#000; margin-bottom: 30px\">Equestrian Confrencing</h4>
\t\t<p >Meeting Rooms pair 20th century art with state-of-the-art Meeting amenities and exceptional service. From Outdoor Conferences on the Lawn to Board Meetings in one of our three well appointed confrence rooms, the Hotel ensures productive business gatherings and memorable occasions. </p>
\t\t\t<div class=\"explore-btn wow fadeInUp\" data-wow-delay=\"0.9s\"><a class=\"btn btn-info\" href=\"#\">Learn More</a></div>
\t\t\t
\t\t</div>
\t<div class=\"col-md-6 img-slice-wrap mt-5 mb-5 over-hide\">
\t<div class=\"scroll-img\" style=\"background-image: url(img/confrencing.jpeg);\">&nbsp;</div>
\t
\t</div>

\t<div class=\"section clearfix\">&nbsp;</div>
\t






\t</div>
\t</div>
\t</div>
\t
\t<!-- Social links
\t\t\t================================================== -->
\t
\t\t\t<div class=\"social-fixed\">
\t\t\t
\t\t\t\t<a class=\"fb-ic hover-target\">
\t\t\t\t\t<i class=\"fab fa-facebook-f white-text mr-md-5 mr-2 \">
\t\t\t\t\t  
\t\t\t\t\t</i>
\t\t\t\t  </a>
\t\t\t\t  <a class=\"tw-ic hover-target\">
\t\t\t\t\t<i class=\"fab fa-twitter  white-text mr-md-5 mr-2 \">
\t\t\t\t\t</i>
\t\t\t\t  </a>
\t\t\t\t  <a class=\"ins-ic hover-target\">
\t\t\t\t\t<i class=\"fab fa-instagram  white-text mr-md-5 mr-2 \">
\t\t\t\t\t</i>
\t\t\t\t  </a>
\t\t\t\t  <a class=\"pin-ic hover-target\">
\t\t\t\t\t<i class=\"fab fa-pinterest   white-text mr-md-5 mr-2 \"> </i>
\t\t\t\t  </a>
\t\t\t</div>
\t
\t<div class=\"copyr\">2020 © <a class=\"hover-target\" href=\"#\">Riboville Hotel</a></div>
\t
\t<div class=\"scroll-to-top hover-target\">&nbsp;</div>
\t<!-- Page cursor
\t\t\t================================================== -->
\t
\t<div class=\"cursor\" id=\"cursor\">&nbsp;</div>
\t
\t<div class=\"cursor2\" id=\"cursor2\">&nbsp;</div>
\t
\t<div class=\"cursor3\" id=\"cursor3\">&nbsp;</div>
\t</div>
\t", "__string_template__2107303e432e6ee6e3a93b521b0103fa922064735c2827871c5fcf1df539288a", "");
    }
}
