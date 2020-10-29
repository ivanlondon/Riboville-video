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

/* __string_template__1b6c264d5b01e2a558f2fa2f010cefb0b3c70350f55999e02717bedf0ebcecd3 */
class __TwigTemplate_6216e94982000ab940e599c5abc5e0fa2e8337ee0905cdd42b57f2b1fd108bd1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 11];
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
        echo "<section id=\"about\">


<div class=\"animsition\">\t


\t\t
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-6 about-description wow fadeInUp\" style=\"visibility: visible; animation-name: fadeInUp;\">
<h4>";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h4>
<p>
";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "
<h2>Amenities</h2>
<ul>";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_amenities"] ?? null)), "html", null, true);
        echo "</ul></p>
</div>
<div class=\"col-md-6 about-image\">
<div class=\"row\">
<div class=\"col-md-12 about-full-img-outer\">
<div class=\"about-full-img wow fadeInUp\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
<span></span>
<img src=\"";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null)), "html", null, true);
        echo "\" alt=\"about-full-width-image\" class=\"img-responsive\">
</div>
</div>
<div class=\"col-md-6 about-left-image-outer\">
<div class=\"about-left-image wow fadeInUp\" data-wow-delay=\"0.5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
<img src=\"";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image_1"] ?? null)), "html", null, true);
        echo "\" alt=\"about-left-image\" class=\"img-responsive\">
</div>
<div class=\"explore-btn wow fadeInUp\" data-wow-delay=\"0.9s\" style=\"visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;\">
<a href=\"\" class=\"btn btn-info\">Reserve</a>
</div>
</div>
<div class=\"col-md-6 about-right-image-outer\">
<div class=\"about-right-image wow fadeInUp\" data-wow-delay=\"0.7s\" style=\"visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;\">
<img src=\"";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image_2"] ?? null)), "html", null, true);
        echo "\" alt=\"about-left-image\" class=\"img-responsive\">
</div>
</div>
</div>
</div>
</div>
</div>
\t<div class=\"social-fixed\">
\t\t\t
\t\t\t<a class=\"fb-ic hover-target\">
\t\t\t\t<i class=\"fab fa-facebook-f white-text mr-md-5 mr-2 \">
\t\t\t\t  
\t\t\t\t</i>
\t\t\t  </a>
\t\t\t  <a class=\"tw-ic hover-target\">
\t\t\t\t<i class=\"fab fa-twitter  white-text mr-md-5 mr-2 \">
\t\t\t\t</i>
\t\t\t  </a>
\t\t\t  <a class=\"ins-ic hover-target\">
\t\t\t\t<i class=\"fab fa-instagram  white-text mr-md-5 mr-2 \">
\t\t\t\t</i>
\t\t\t  </a>
\t\t\t  <a class=\"pin-ic hover-target\">
\t\t\t\t<i class=\"fab fa-pinterest   white-text mr-md-5 mr-2 \"> </i>
\t\t\t  </a>
\t\t</div>
\t\t<div class=\"copyr\">
\t\t\t2020 © <a href=\"https://themeforest.net/user/ig_design/portfolio\" class=\"hover-target\">Riboville Collection</a>
\t\t</div>

</div>
</section>";
    }

    public function getTemplateName()
    {
        return "__string_template__1b6c264d5b01e2a558f2fa2f010cefb0b3c70350f55999e02717bedf0ebcecd3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  95 => 27,  87 => 22,  77 => 15,  72 => 13,  67 => 11,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<section id=\"about\">


<div class=\"animsition\">\t


\t\t
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-6 about-description wow fadeInUp\" style=\"visibility: visible; animation-name: fadeInUp;\">
<h4>{{ title }}</h4>
<p>
{{ body }}
<h2>Amenities</h2>
<ul>{{ field_amenities }}</ul></p>
</div>
<div class=\"col-md-6 about-image\">
<div class=\"row\">
<div class=\"col-md-12 about-full-img-outer\">
<div class=\"about-full-img wow fadeInUp\" data-wow-delay=\"0.3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
<span></span>
<img src=\"{{ field_image }}\" alt=\"about-full-width-image\" class=\"img-responsive\">
</div>
</div>
<div class=\"col-md-6 about-left-image-outer\">
<div class=\"about-left-image wow fadeInUp\" data-wow-delay=\"0.5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
<img src=\"{{ field_image_1 }}\" alt=\"about-left-image\" class=\"img-responsive\">
</div>
<div class=\"explore-btn wow fadeInUp\" data-wow-delay=\"0.9s\" style=\"visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;\">
<a href=\"\" class=\"btn btn-info\">Reserve</a>
</div>
</div>
<div class=\"col-md-6 about-right-image-outer\">
<div class=\"about-right-image wow fadeInUp\" data-wow-delay=\"0.7s\" style=\"visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;\">
<img src=\"{{ field_image_2 }}\" alt=\"about-left-image\" class=\"img-responsive\">
</div>
</div>
</div>
</div>
</div>
</div>
\t<div class=\"social-fixed\">
\t\t\t
\t\t\t<a class=\"fb-ic hover-target\">
\t\t\t\t<i class=\"fab fa-facebook-f white-text mr-md-5 mr-2 \">
\t\t\t\t  
\t\t\t\t</i>
\t\t\t  </a>
\t\t\t  <a class=\"tw-ic hover-target\">
\t\t\t\t<i class=\"fab fa-twitter  white-text mr-md-5 mr-2 \">
\t\t\t\t</i>
\t\t\t  </a>
\t\t\t  <a class=\"ins-ic hover-target\">
\t\t\t\t<i class=\"fab fa-instagram  white-text mr-md-5 mr-2 \">
\t\t\t\t</i>
\t\t\t  </a>
\t\t\t  <a class=\"pin-ic hover-target\">
\t\t\t\t<i class=\"fab fa-pinterest   white-text mr-md-5 mr-2 \"> </i>
\t\t\t  </a>
\t\t</div>
\t\t<div class=\"copyr\">
\t\t\t2020 © <a href=\"https://themeforest.net/user/ig_design/portfolio\" class=\"hover-target\">Riboville Collection</a>
\t\t</div>

</div>
</section>", "__string_template__1b6c264d5b01e2a558f2fa2f010cefb0b3c70350f55999e02717bedf0ebcecd3", "");
    }
}
