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

/* themes/louisiana/templates/node/node--culture-feature--large-feature.html.twig */
class __TwigTemplate_d7a3bd44c56d9413a0a8be227d80b740d267d47143a9025d57d196cbe148e8d9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 4];
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
        echo "<div class=\"culture-component__slide\">
  <article class=\"culture-component__item\">
    <div class=\"culture-component-item__media\">
      ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cf_image", [])), "html", null, true);
        echo "
      ";
        // line 5
        if (($context["video"] ?? null)) {
            // line 6
            echo "      <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["video"] ?? null)), "html", null, true);
            echo "\" data-fancybox class=\"video-link--fancy culture-component-item__link\">
        <span class=\"show-for-sr\">Click to play the video</span>
        <span class=\"play-button\"></span>
      </a>
      ";
        }
        // line 11
        echo "    </div>
    <div class=\"culture-component-item__details\">
      <div class=\"grid-x\">
        <div class=\"cell small-12 medium-6\">
          <h3 class=\"h4\">";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
        echo "</h3>
          ";
        // line 16
        if ($this->getAttribute(($context["content"] ?? null), "field_cf_description", [])) {
            // line 17
            echo "          <p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cf_description", [])), "html", null, true);
            echo "</p>
          ";
        }
        // line 19
        echo "        </div>
        <div class=\"cell small-12 medium-6\">
        <ul>
          ";
        // line 22
        if ($this->getAttribute(($context["content"] ?? null), "field_cf_highlight", [])) {
            // line 23
            echo "          <li class=\"culture-component-item-details__highlight\"><span class=\"eyebrow\">Highlight</span><span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cf_highlight", [])), "html", null, true);
            echo "</span></li>
          ";
        }
        // line 25
        echo "          ";
        if ($this->getAttribute(($context["content"] ?? null), "field_cf_distance", [])) {
            // line 26
            echo "          <li class=\"culture-component-item-details__distance\"><span class=\"eyebrow\">Distance</span><span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cf_distance", [])), "html", null, true);
            echo "</span></li>
          ";
        }
        // line 28
        echo "          ";
        if ($this->getAttribute(($context["content"] ?? null), "field_cf_when", [])) {
            // line 29
            echo "          <li class=\"culture-component-item-details__when\"><span class=\"eyebrow\">When it Happens</span><span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cf_when", [])), "html", null, true);
            echo "</span></li>
          ";
        }
        // line 31
        echo "        </ul>
        </div>
      </div>
    </div>
  </article>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/node/node--culture-feature--large-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  118 => 29,  115 => 28,  109 => 26,  106 => 25,  100 => 23,  98 => 22,  93 => 19,  87 => 17,  85 => 16,  81 => 15,  75 => 11,  66 => 6,  64 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/node/node--culture-feature--large-feature.html.twig", "/var/www/vhost/d8-la-test.ucs.louisiana.edu/docroot/themes/louisiana/templates/node/node--culture-feature--large-feature.html.twig");
    }
}
