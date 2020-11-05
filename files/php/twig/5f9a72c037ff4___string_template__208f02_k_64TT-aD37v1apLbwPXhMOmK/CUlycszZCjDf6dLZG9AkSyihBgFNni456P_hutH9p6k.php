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

/* __string_template__208f02382e8913a705880c46c54104f995a08712b696bec0ee2bd40c23f71a63 */
class __TwigTemplate_b708d4db5fb42905ebb2a72425ea7631c7170098deaf1962bbdf27f2313cc6dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
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
        echo " <div class=\"col-md-3 col-sm-6\">
                    <div class=\"box3\">
                      ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null)), "html", null, true);
        echo "
                        <div class=\"box-content\">
                            <h3 class=\"title\">";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h3>
               
                            <p class=\"description\">
                                ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo " 
                            </p>
                            <ul class=\"icon\">
                                <li><a href=\"#\" class=\"fa fa-search\"></a></li>
                                <li><a href=\"#\" class=\"fa fa-link\"></a></li>
                            </ul>
                        </div>
                    </div>
     <h3 class=\"title\">";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h3>
                </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__208f02382e8913a705880c46c54104f995a08712b696bec0ee2bd40c23f71a63";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  70 => 8,  64 => 5,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #} <div class=\"col-md-3 col-sm-6\">
                    <div class=\"box3\">
                      {{ field_image }}
                        <div class=\"box-content\">
                            <h3 class=\"title\">{{ title }}</h3>
               
                            <p class=\"description\">
                                {{ body }} 
                            </p>
                            <ul class=\"icon\">
                                <li><a href=\"#\" class=\"fa fa-search\"></a></li>
                                <li><a href=\"#\" class=\"fa fa-link\"></a></li>
                            </ul>
                        </div>
                    </div>
     <h3 class=\"title\">{{ title }}</h3>
                </div>", "__string_template__208f02382e8913a705880c46c54104f995a08712b696bec0ee2bd40c23f71a63", "");
    }
}
