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

/* themes/louisiana/templates/paragraph/paragraph--campaign-highllight.html.twig */
class __TwigTemplate_bd0f5307c042bd25fad07d5f2c8d14fb2eff7d0741b1e09673ab4e78a0f2f79d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 1, "if" => 10];
        $filters = ["escape" => 2, "render" => 10];
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
        $context["oho_macros"] = $this->loadTemplate("@oho_base/includes/oho-macros.html.twig", "themes/louisiana/templates/paragraph/paragraph--campaign-highllight.html.twig", 1)->unwrap();
        // line 2
        echo "<section class=\"section--campaign-highlight\" style=\"background-image: url(";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_background", [])), "html", null, true);
        echo "\">
  <div class=\"grid-container\">
    <div class=\"grid-x\">
      <div class=\"cell small-12 medium-6 medium-order-2 large-5 large-order-2\">
        ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_image", [])), "html", null, true);
        echo "
      </div>
      <div class=\"cell small-12 medium-6 medium-order-1 large-5 large-order-1\">
        <h2 class=\"h3\">";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_title", [])), "html", null, true);
        echo "</h2>
        ";
        // line 10
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_component_body", []))) {
            // line 11
            echo "          <p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_body", [])), "html", null, true);
            echo "</p>
        ";
        }
        // line 13
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["oho_macros"]->getlink_field_link($this->getAttribute(($context["content"] ?? null), "field_component_link", []), "btn"));
        echo "
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/paragraph/paragraph--campaign-highllight.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 13,  77 => 11,  75 => 10,  71 => 9,  65 => 6,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/paragraph/paragraph--campaign-highllight.html.twig", "/var/www/vhost/d8-la-dev.ucs.louisiana.edu/docroot/themes/louisiana/templates/paragraph/paragraph--campaign-highllight.html.twig");
    }
}
