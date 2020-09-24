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

/* themes/louisiana/templates/paragraph/paragraph--instagram-gallery-item-.html.twig */
class __TwigTemplate_85577ad3c67ab0e61068bd5f6cc8ca7bd6797039c1797539d091179898f6718d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "      <div class=\"image-video-grid__slide\">
        <a href=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "id", [])), "html", null, true);
        echo "\" data-fancybox=\"image-video-gallery\"  class=\"fancybox image-video-grid__item\">
          <div class=\"video-indicator\">
            <i class=\"fas fa-circle\"></i>
            ";
        // line 5
        if ($this->getAttribute(($context["content"] ?? null), "field_video", [])) {
            // line 6
            echo "              <i class=\"fas fa-play\"></i>
            ";
        } else {
            // line 8
            echo "              <i class=\"far fa-expand-arrows\"></i>
            ";
        }
        // line 10
        echo "          </div>
          <div class=\"image-video-grid-item__media\">
            ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_image", [])), "html", null, true);
        echo "
          </div>
          <div class=\"image-video-grid-item__text\">
            <div>";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_title", [])), "html", null, true);
        echo "</div>
            <div class=\"insta-credit\"><i class=\"fab fa-instagram\"></i><span>ullafayette</span></div>
          </div>
        </a>
        <figure class=\"image-video-grid__fancy\" id=\"";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "id", [])), "html", null, true);
        echo "\">
          ";
        // line 20
        if ($this->getAttribute(($context["content"] ?? null), "field_component_video", [])) {
            // line 21
            echo "          <div class=\"iframe-wrapper\">
          <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/yAZi5p3Dljk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
          </div>
          ";
        } else {
            // line 25
            echo "            <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_image", [])), "html", null, true);
            echo "\" alt=\"something\">

          ";
        }
        // line 28
        echo "            <figcaption class=\"image-video-grid-fancy__text\">
              ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_title", [])), "html", null, true);
        echo "
            </figcaption>
        </figure>        
      </div><!-- /__slide -->
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/paragraph/paragraph--instagram-gallery-item-.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  110 => 28,  103 => 25,  97 => 21,  95 => 20,  91 => 19,  84 => 15,  78 => 12,  74 => 10,  70 => 8,  66 => 6,  64 => 5,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/paragraph/paragraph--instagram-gallery-item-.html.twig", "/var/www/vhost/d8-la-dev.ucs.louisiana.edu/docroot/themes/louisiana/templates/paragraph/paragraph--instagram-gallery-item-.html.twig");
    }
}
