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

/* themes/louisiana/templates/paragraph/paragraph--brand-feature.html.twig */
class __TwigTemplate_6a527f9ba787279f8f84e20cb77b58d0575bb9a06b734710129fdd950f206a23 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 1, "if" => 9];
        $filters = ["escape" => 5, "render" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if'],
                ['escape', 'render'],
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
        $context["oho_macros"] = $this->loadTemplate("@oho_base/includes/oho-macros.html.twig", "themes/louisiana/templates/paragraph/paragraph--brand-feature.html.twig", 1)->unwrap();
        // line 2
        echo "<li>
  <article class=\"brand-feature\">
    <div class=\"brand-feature__title\">
      ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_image", [])), "html", null, true);
        echo "
      <h2><span>";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_title", [])), "html", null, true);
        echo "</span></h2>
    </div>
    <div class=\"brand-feature__text\">
      ";
        // line 9
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_component_body", []))) {
            // line 10
            echo "        <div class=\"brand-feature__blurb\">
          ";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_body", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 14
        echo "      <div class=\"brand-feature__button\">
        ";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["oho_macros"]->getlink_field_link($this->getAttribute(($context["content"] ?? null), "field_component_link", []), "btn"));
        echo "
      </div>
    </div>
  </article>
</li>
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/paragraph/paragraph--brand-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  83 => 14,  77 => 11,  74 => 10,  72 => 9,  66 => 6,  62 => 5,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/paragraph/paragraph--brand-feature.html.twig", "/var/www/vhost/d8-la-test.ucs.louisiana.edu/docroot/themes/louisiana/templates/paragraph/paragraph--brand-feature.html.twig");
    }
}
