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

/* themes/louisiana/templates/paragraph/paragraph--news-story-curated-feature.html.twig */
class __TwigTemplate_c076ffd597dbc5dfc647809734be5eadd134bd987f75695323532c935182cca6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 10, "if" => 18, "for" => 42];
        $filters = ["merge" => 15, "default" => 15, "escape" => 17, "join" => 17, "first" => 42];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['merge', 'default', 'escape', 'join', 'first'],
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
        // line 10
        $context["news_story_feature_classes"] = twig_array_merge([0 => "section--news-story-feature", 1 => "section--wide-lined-title", 2 => "section--banded", 3 => "section--dusty-light"], ((        // line 15
(isset($context["classes"]) || array_key_exists("classes", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [])) : ([])));
        // line 17
        echo "<section class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["news_story_feature_classes"] ?? null)), " "), "html", null, true);
        echo "\">
  ";
        // line 18
        if (($context["section_title"] ?? null)) {
            // line 19
            echo "    <div class=\"grid-container\">
      <div class=\"grid-x\">
        <div class=\"cell\">
          <h2><span>Featured News/Story Area</span></h2>
        </div>
      </div>
    </div>
  ";
        }
        // line 27
        echo "  <div class=\"section__content\">

   ";
        // line 36
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_ncf_featured_news", [])), "html", null, true);
        echo "
    
    <div class=\"grid-container oho-animate-sequence\">
      <div class=\"grid-x\">
        <div class=\"cell news-story__set\">    
\t";
        // line 41
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_ncf_news", []), 0, [], "array")) {
            // line 42
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "field_ncf_news", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if ((twig_first($this->env, $context["key"]) != "#")) {
                    // line 43
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"]), "html", null, true);
                    echo "
          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
        }
        // line 46
        echo "        </div>
      </div>
    </div>
  </div>
  <div class=\"grid-container\">
    <div class=\"grid-x section__all-link\">
      <div class=\"cell\">
        <a href=\"/news\" class=\"link-underline\">All News &amp; Stories</a>
      </div>
    </div>
  </div>  
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/paragraph/paragraph--news-story-curated-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 46,  106 => 45,  96 => 43,  90 => 42,  88 => 41,  79 => 36,  75 => 27,  65 => 19,  63 => 18,  58 => 17,  56 => 15,  55 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/paragraph/paragraph--news-story-curated-feature.html.twig", "/var/www/vhost/d8-la-test.ucs.louisiana.edu/docroot/themes/louisiana/templates/paragraph/paragraph--news-story-curated-feature.html.twig");
    }
}
