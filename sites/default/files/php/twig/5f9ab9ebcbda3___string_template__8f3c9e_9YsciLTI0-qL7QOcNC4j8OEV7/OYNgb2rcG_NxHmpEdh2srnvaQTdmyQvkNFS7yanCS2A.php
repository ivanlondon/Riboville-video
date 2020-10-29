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

/* __string_template__8f3c9e4cec5f7a7d014aac444cd80469895e56739f872f238c551a9e67b077ad */
class __TwigTemplate_3c4f33b2a2e2a1e0f27a34da56d4335a842dd986e5f45dc0944843ac6b0eb380 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<a href=\"https://www.youtube.com/watch?v=wf4F2-9UXUo\" id=\"bgndVideo\" class=\"player {containment:'body', autoPlay:true, mute:true, startAt:0, opacity:1}\"></a>
<nav class=\"navbar navbar2 navbar-expand-lg navbar-light bg-light\">
  <div class=\"collapse navbar-collapse\" id=\"navbarText\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Our Story</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Reservation</a>
      </li>
    </ul>
  </div>
</nav>

";
    }

    public function getTemplateName()
    {
        return "__string_template__8f3c9e4cec5f7a7d014aac444cd80469895e56739f872f238c551a9e67b077ad";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<a href=\"https://www.youtube.com/watch?v=wf4F2-9UXUo\" id=\"bgndVideo\" class=\"player {containment:'body', autoPlay:true, mute:true, startAt:0, opacity:1}\"></a>
<nav class=\"navbar navbar2 navbar-expand-lg navbar-light bg-light\">
  <div class=\"collapse navbar-collapse\" id=\"navbarText\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Our Story</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Reservation</a>
      </li>
    </ul>
  </div>
</nav>

", "__string_template__8f3c9e4cec5f7a7d014aac444cd80469895e56739f872f238c551a9e67b077ad", "");
    }
}
