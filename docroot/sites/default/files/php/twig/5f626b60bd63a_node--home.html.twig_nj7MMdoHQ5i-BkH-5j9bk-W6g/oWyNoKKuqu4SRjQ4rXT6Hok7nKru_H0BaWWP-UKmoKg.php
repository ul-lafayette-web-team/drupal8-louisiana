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

/* themes/louisiana/templates/node/node--home.html.twig */
class __TwigTemplate_f5a233082271696e326907b788eb8c9a195e687101b658554507e2ed7fa0e5d0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2, "t" => 12];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
        echo "<article class=\"home-page\" style=\"padding: 0px\">
  <section class=\"hero section--global-spacing hero--img ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_classes"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"hero__media\">
        <div class=\"video-feature\">
          <video autoplay=autoplay id=\"hero\" loop muted ";
        // line 5
        echo ">
            <source src=\"https://player.vimeo.com/external/367032013.hd.mp4?s=cf9603fc8ae1cd11aa03261fa08a1f1079869a94&profile_id=175\">
          </video>
        </div>
    </div>
  </section>
  <section class=\"section--brand-features\">
    <h2>";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Find your"));
        echo "&hellip;</h2>
    <ul>
      ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_home_brand_features", [])), "html", null, true);
        echo "
    </ul>
  </section>

  <section class=\"section--campaign-highlight\" style=\"background-image: url(https://picsum.photos/id/134/1440/700\">
    ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_home_campaign_highlight", [])), "html", null, true);
        echo "
  </section>
  
  <section class=\"section--news-story-feature section--wide-lined-title section--banded section--dusty-light\">
    ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_news_curated_feature", [])), "html", null, true);
        echo "
  </section>
  
  ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_culture_component", [])), "html", null, true);
        echo "

  <section class=\"section--banded section--white section--livewhale\">
    ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_livewhale_event_feature", [])), "html", null, true);
        echo "
  </section>
  
  <section class=\"section--image-video-gallery section--wide-lined-title section--banded section--dusty\">
    ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_home_instagram_gallery", [])), "html", null, true);
        echo "
  </section>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/node/node--home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  105 => 29,  99 => 26,  93 => 23,  86 => 19,  78 => 14,  73 => 12,  64 => 5,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/node/node--home.html.twig", "/var/www/vhost/d8-la-test.ucs.louisiana.edu/docroot/themes/louisiana/templates/node/node--home.html.twig");
    }
}
