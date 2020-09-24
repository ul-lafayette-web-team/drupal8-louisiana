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

/* themes/louisiana/templates/block/block--search-form-block.html.twig */
class __TwigTemplate_29243b9004f8d82658e9c9c1a27386c46b5c5877916cef901cdc2bc9c5263d51 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 10];
        $filters = ["t" => 7, "escape" => 11];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['t', 'escape'],
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
        // line 6
        echo "<div class=\"site-search\">
  <button class=\"site-search__toggle\" data-button-open-text=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Open the search panel"));
        echo "\" data-button-close-text=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close the search panel"));
        echo "\" data-button-enable-at=\"1024\" data-button-open-class=\"search-panel-open\">
    <span class=\"show-for-sr\"></span>
  </button>
  ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        // line 11
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/block/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  74 => 10,  69 => 13,  67 => 10,  59 => 7,  56 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/block/block--search-form-block.html.twig", "/var/www/vhost/d8-la-dev.ucs.louisiana.edu/docroot/themes/louisiana/templates/block/block--search-form-block.html.twig");
    }
}
