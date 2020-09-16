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

/* themes/louisiana/templates/node/news/node--news--large-feature.html.twig */
class __TwigTemplate_27770bcc7fbd269d3d6527bc41281b13bd4dc3f0c083ce5aa5330d8807bc70d7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6];
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
        echo "<article class=\"news-story--featured oho-animate-sequence\">
  ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_news_image", [])), "html", null, true);
        echo "
  <a href class=\"link-box oho-animate fade-in-up\">
    <div class=\"news-story__text \">
      <div class=\"news-story__eyebrow\">
      ";
        // line 6
        if ($this->getAttribute(($context["content"] ?? null), "field_news_type", [])) {
            // line 7
            echo "        <span class=\"news-story__type\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_news_type", [])), "html", null, true);
            echo "</span>
      ";
        }
        // line 9
        echo "      ";
        if ($this->getAttribute(($context["content"] ?? null), "field_news_date", [])) {
            // line 10
            echo "        <span class=\"news-story__publish-date\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_news_date", [])), "html", null, true);
            echo "</span>
      ";
        }
        // line 12
        echo "      </div>
      <h3>";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
        echo "</h3>
      <p>";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "</p>
      ";
        // line 15
        if ($this->getAttribute(($context["content"] ?? null), "field_news_tags", [])) {
            // line 16
            echo "      <div class=\"listing-item__tags tags\">
        <h2 class=\"tags__heading show-for-sr\">Tags:</h2>
        ";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_news_tags", [])), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 21
        echo "    </div>
  </a>
</article> 
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/node/news/node--news--large-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  99 => 18,  95 => 16,  93 => 15,  89 => 14,  85 => 13,  82 => 12,  76 => 10,  73 => 9,  67 => 7,  65 => 6,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/node/news/node--news--large-feature.html.twig", "/var/www/vhost/d8-la-test.ucs.louisiana.edu/docroot/themes/louisiana/templates/node/news/node--news--large-feature.html.twig");
    }
}
