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

/* themes/louisiana/templates/paragraph/paragraph--livewhale-event-feature.html.twig */
class __TwigTemplate_c9a5db6223a7e2bb4e9de480a68e7bcb6eb1f92af2c4e450df3902f02e8e6078 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<section class=\"section--banded section--white section--livewhale\">
  <div class=\"grid-container\">
     ";
        // line 7
        echo "    <div class=\"grid-x grid-padding-x\">
      <div class=\"cell small-12 large-4\">
        <h2> ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_title", [])), "html", null, true);
        echo " </h2>
        <div class=\"section__all-link\">
          <a href=\"https://calendar.louisiana.edu\" class=\"link-underline\">All Events</a>
        </div>
      </div>
      <div class=\"cell small-12 large-8\">
      <div class=\"livewhale--event-set\">
        ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_embed", [])), "html", null, true);
        echo "
      </div>
      </div>
      </div>
      <div class=\"cell small-12 section__all-link all-link--destination\">
      
      </div>
    </div><!-- /.grid-x -->
  </div><!-- /.grid-container -->
</section>
      
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/paragraph/paragraph--livewhale-event-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  63 => 9,  59 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/paragraph/paragraph--livewhale-event-feature.html.twig", "/var/www/vhost/d8-la-dev.ucs.louisiana.edu/docroot/themes/louisiana/templates/paragraph/paragraph--livewhale-event-feature.html.twig");
    }
}
