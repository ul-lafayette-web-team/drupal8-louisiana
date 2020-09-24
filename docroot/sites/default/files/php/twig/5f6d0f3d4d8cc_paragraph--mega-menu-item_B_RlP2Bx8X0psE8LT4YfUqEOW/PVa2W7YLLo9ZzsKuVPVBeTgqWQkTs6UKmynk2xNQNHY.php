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

/* themes/louisiana/templates/paragraph/paragraph--mega-menu-item.html.twig */
class __TwigTemplate_1aef56f356ebbe5e2ea248e1003a79d5a42bfbc156c26903aa672bfbe4e7b81f extends \Twig\Template
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
        $context["oho_macros"] = $this->loadTemplate("@oho_base/includes/oho-macros.html.twig", "themes/louisiana/templates/paragraph/paragraph--mega-menu-item.html.twig", 1)->unwrap();
        // line 2
        echo "<a href=\"#\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_component_link", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
        echo "</a>

<div class=\"ull-header__mega-menu\">
  <div class=\"ull-header-mega-menu__title\">
    ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_link", [])), "html", null, true);
        echo "
  </div>

  <div class=\"ull-header-mega-menu__row\">
    ";
        // line 10
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_component_body", []))) {
            // line 11
            echo "      <div class=\"ull-header-mega-menu__text\">
        <p>";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_body", [])), "html", null, true);
            echo "</p>
      </div>
    ";
        }
        // line 15
        echo "
    <nav class=\"ull-header-mega-menu__list\">
      ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["oho_macros"]->getlink_field_list($this->getAttribute(($context["content"] ?? null), "field_mmi_links", []), "menu"));
        echo "
    </nav>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/paragraph/paragraph--mega-menu-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  83 => 15,  77 => 12,  74 => 11,  72 => 10,  65 => 6,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/paragraph/paragraph--mega-menu-item.html.twig", "/var/www/vhost/d8-la-dev.ucs.louisiana.edu/docroot/themes/louisiana/templates/paragraph/paragraph--mega-menu-item.html.twig");
    }
}
