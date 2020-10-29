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

/* themes/contrib/yg_hotel/templates/node/node--13--full.html.twig */
class __TwigTemplate_4036a0eb9d47cdefea6bde19751161b6b04715271379d5edfefe780d1f60f6d1 extends \Twig\Template
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
        // line 85
        echo "
<!-- Page preloader wrap
\t================================================== -->

\t<div class=\"animsition\">\t
\t\t
\t\t<!-- Nav and Logo
\t\t================================================== -->

\t

\t\t<!-- Primary Page Layout
\t\t================================================== -->\t

\t\t<div class=\"shadow-title parallax-top-shadow\">David Tlale</div>
\t\t
\t\t<div class=\"section padding-page-top padding-bottom over-hide z-bigger\">
\t\t\t<div class=\"container z-bigger\">
\t\t\t\t<div class=\"row page-title px-5 px-xl-2\">
\t\t\t\t\t<div class=\"col-12 parallax-fade-top\">
\t\t\t\t\t\t<h1>David Tlale</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"offset-1 col-11 parallax-fade-top mt-2 mt-sm-3\">
\t\t\t\t\t\t<p>fashion, art direction</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"section padding-bottom-big over-hide z-bigger\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row px-5 px-xl-2 justify-content-center\">
\t\t\t\t\t<div class=\"col-md-6 mb-5 top1\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/6.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"col-md-6 mb-5 top1\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/headshot.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8 mb-5 text-center\">
\t\t\t\t\t\t<p class=\"mb-0 pb-0 lead\">\"The Riboville David Tlale store is about offering a curated consumer experience that is synonymous with the exclusivity and craftsmanship the brand is known for, servicing their customers with excellence.\"</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-12 mb-5 text-center\">
\t\t\t\t\t\t<div class=\"video-section hover-target\">
\t\t\t\t\t\t\t<figure class=\"vimeo\"> 
\t\t\t\t\t\t\t\t<a href=\"https://player.vimeo.com/video/289474455\" class=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"img/project1/2.jpg\" alt=\"image\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-5\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/dressfull.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"col-md-6 mb-5\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/dressbody.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mb-5 text-center\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<h5 class=\"mb-3\">art direction</h5>
\t\t\t\t\t\t<p class=\"mb-0 pb-0\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mb-5 text-center\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<h5 class=\"mb-3\">photography</h5>
\t\t\t\t\t\t<p class=\"mb-0 pb-0\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mb-5 text-center\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<h5 class=\"mb-3\">advertising</h5>
\t\t\t\t\t\t<p class=\"mb-0 pb-0\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-5\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/manequin2.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"col-md-6 mb-5\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/manequin1.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8 mb-5 text-center\">
\t\t\t\t\t\t<p class=\"mb-0 pb-0 lead\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<img src=\"img/project1/David_Tlale_Bolto_Shoes_Photo_-_MF-7_1728x.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t</div>\t\t\t
\t\t</div>

\t\t<div class=\"section padding-top-bottom over-hide z-bigger background-dark-3 footer\">
\t\t\t<div class=\"shadow-on-footer\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.1s\">The Battle</div>
\t\t\t<div class=\"container\" data-scroll-reveal=\"enter bottom move 20px over 0.5s after 0.4s\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 text-center z-bigger py-5\">
\t\t\t\t\t\t<div class=\"footer-lines\">
\t\t\t\t\t\t\t<a href=\"project.html\" class=\"hover-target animsition-link\"><h4>Shop Collection</h4></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t</div>\t
\t\t
\t\t<!-- Social links
\t\t================================================== -->
\t\t
\t\t<div class=\"social-fixed\">
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
\t\t
\t\t<div class=\"scroll-to-top hover-target\"></div>
\t\t
\t\t<!-- Page cursor
\t\t================================================== -->
\t\t
        <div class='cursor' id=\"cursor\"></div>
        <div class='cursor2' id=\"cursor2\"></div>
        <div class='cursor3' id=\"cursor3\"></div>\t\t
\t\t
\t</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_hotel/templates/node/node--13--full.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 85,);
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
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 *
 * @ingroup themeable
 */
#}
{#
<article id=\"main-content\" {{ attributes }}>


  <div>
    {{ content }}
  </div>

</article>
#}

<!-- Page preloader wrap
\t================================================== -->

\t<div class=\"animsition\">\t
\t\t
\t\t<!-- Nav and Logo
\t\t================================================== -->

\t

\t\t<!-- Primary Page Layout
\t\t================================================== -->\t

\t\t<div class=\"shadow-title parallax-top-shadow\">David Tlale</div>
\t\t
\t\t<div class=\"section padding-page-top padding-bottom over-hide z-bigger\">
\t\t\t<div class=\"container z-bigger\">
\t\t\t\t<div class=\"row page-title px-5 px-xl-2\">
\t\t\t\t\t<div class=\"col-12 parallax-fade-top\">
\t\t\t\t\t\t<h1>David Tlale</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"offset-1 col-11 parallax-fade-top mt-2 mt-sm-3\">
\t\t\t\t\t\t<p>fashion, art direction</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"section padding-bottom-big over-hide z-bigger\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row px-5 px-xl-2 justify-content-center\">
\t\t\t\t\t<div class=\"col-md-6 mb-5 top1\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/6.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"col-md-6 mb-5 top1\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/headshot.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8 mb-5 text-center\">
\t\t\t\t\t\t<p class=\"mb-0 pb-0 lead\">\"The Riboville David Tlale store is about offering a curated consumer experience that is synonymous with the exclusivity and craftsmanship the brand is known for, servicing their customers with excellence.\"</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-12 mb-5 text-center\">
\t\t\t\t\t\t<div class=\"video-section hover-target\">
\t\t\t\t\t\t\t<figure class=\"vimeo\"> 
\t\t\t\t\t\t\t\t<a href=\"https://player.vimeo.com/video/289474455\" class=\"\">
\t\t\t\t\t\t\t\t\t<img src=\"img/project1/2.jpg\" alt=\"image\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-5\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/dressfull.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"col-md-6 mb-5\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/dressbody.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mb-5 text-center\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<h5 class=\"mb-3\">art direction</h5>
\t\t\t\t\t\t<p class=\"mb-0 pb-0\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mb-5 text-center\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<h5 class=\"mb-3\">photography</h5>
\t\t\t\t\t\t<p class=\"mb-0 pb-0\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mb-5 text-center\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<h5 class=\"mb-3\">advertising</h5>
\t\t\t\t\t\t<p class=\"mb-0 pb-0\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-5\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/manequin2.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"col-md-6 mb-5\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<div class=\"img-overlay\"></div>
\t\t\t\t\t\t\t<img src=\"img/project1/manequin1.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8 mb-5 text-center\">
\t\t\t\t\t\t<p class=\"mb-0 pb-0 lead\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.2s\">
\t\t\t\t\t\t<div class=\"img-wrap\">
\t\t\t\t\t\t\t<img src=\"img/project1/David_Tlale_Bolto_Shoes_Photo_-_MF-7_1728x.jpg\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t</div>\t\t\t
\t\t</div>

\t\t<div class=\"section padding-top-bottom over-hide z-bigger background-dark-3 footer\">
\t\t\t<div class=\"shadow-on-footer\" data-scroll-reveal=\"enter bottom move 30px over 0.5s after 0.1s\">The Battle</div>
\t\t\t<div class=\"container\" data-scroll-reveal=\"enter bottom move 20px over 0.5s after 0.4s\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 text-center z-bigger py-5\">
\t\t\t\t\t\t<div class=\"footer-lines\">
\t\t\t\t\t\t\t<a href=\"project.html\" class=\"hover-target animsition-link\"><h4>Shop Collection</h4></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t</div>\t
\t\t
\t\t<!-- Social links
\t\t================================================== -->
\t\t
\t\t<div class=\"social-fixed\">
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
\t\t
\t\t<div class=\"scroll-to-top hover-target\"></div>
\t\t
\t\t<!-- Page cursor
\t\t================================================== -->
\t\t
        <div class='cursor' id=\"cursor\"></div>
        <div class='cursor2' id=\"cursor2\"></div>
        <div class='cursor3' id=\"cursor3\"></div>\t\t
\t\t
\t</div>", "themes/contrib/yg_hotel/templates/node/node--13--full.html.twig", "/opt/lampp/htdocs/riboville-drupal-8/themes/contrib/yg_hotel/templates/node/node--13--full.html.twig");
    }
}
