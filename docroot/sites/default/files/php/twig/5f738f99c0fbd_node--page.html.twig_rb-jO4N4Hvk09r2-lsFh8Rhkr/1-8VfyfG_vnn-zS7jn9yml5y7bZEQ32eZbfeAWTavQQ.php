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

/* themes/louisiana/templates/node/node--page.html.twig */
class __TwigTemplate_0f4dcdbb5a7ecc7d34f7fd37ae215792df6d4e77f621bf386d1e15e4823bba48 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 14];
        $filters = ["render" => 14, "escape" => 22];
        $functions = ["drupal_block" => 25];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['render', 'escape'],
                ['drupal_block']
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
        // line 12
        echo "
<div class=\"hero__media general-pg__media\">
  ";
        // line 14
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_header_video", []))) {
            // line 15
            echo "    <div class=\"video-feature\">
      <video id=\"hero\" loop=\"\" muted=\"\" poster=\"http://placehold.it/768x480\" autoplay=\"autoplay\">
        <source src=\"https://player.vimeo.com/external/264260655.sd.mp4?s=5bffe0d3766c547c7eb27d5f12b72b2f34ea5753&amp;profile_id=165\">
      </video>
    </div>    
  ";
        }
        // line 21
        echo "  ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_header_image", []))) {
            // line 22
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_header_image", [])), "html", null, true);
            echo "
  ";
        }
        // line 24
        echo "</div>
";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("system_breadcrumb_block"), "html", null, true);
        echo "
<div class=\"grid-container main-content-cols basic-page-cols\">
  <div class=\"grid-x grid-margin-x\">
    <div class=\"cell initial-12\">    
      <h1>";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
        echo "</h1>
    </div>
    ";
        // line 31
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["sidebar_nav"] ?? null))) {
            // line 32
            echo "    <div class=\"cell medium-3\">
      ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_nav"] ?? null)), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 36
        echo "    <div class=\"cell medium-auto\">
      <article class=\"basic-page\">
        <div class=\"intro-text\">";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_intro_text", [])), "html", null, true);
        echo "</div>
        <section class=\"clearfix full-wysiwyg\">
          ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
        </section>
      </article>
    </div>
  </div>
</div>
";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_page_components", [])), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/node/node--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 46,  113 => 40,  108 => 38,  104 => 36,  98 => 33,  95 => 32,  93 => 31,  88 => 29,  81 => 25,  78 => 24,  72 => 22,  69 => 21,  61 => 15,  59 => 14,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/node/node--page.html.twig", "/var/www/vhost/d8-la-dev.ucs.louisiana.edu/docroot/themes/louisiana/templates/node/node--page.html.twig");
    }
}
