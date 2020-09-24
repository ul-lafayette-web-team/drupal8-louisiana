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

/* themes/louisiana/templates/block/block--menu-block--audience-menu--region-secondary-nav.html.twig */
class __TwigTemplate_58d3760bbda1ba177862f9d7d4a2a9f18788dd977396be0235c17d07375e4683 extends \Twig\Template
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
        $filters = ["t" => 9, "escape" => 11];
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
        echo "<nav id=\"audience-menu\" class=\"audience-menu accessible-menu\" data-item-open-text=\"Open the %s menu\" data-item-close-text=\"Close the %s menu\">
  <ul class=\"menu\">
    <li class=\"menu-item--expanded\">
      <span class=\"audience-menu__trigger\">";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Information For"));
        echo "</span>
      ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "    </li>
  </ul>
</nav>
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        // line 11
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/block/block--menu-block--audience-menu--region-secondary-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  74 => 10,  67 => 13,  65 => 10,  61 => 9,  56 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/block/block--menu-block--audience-menu--region-secondary-nav.html.twig", "/var/www/vhost/d8-la-dev.ucs.louisiana.edu/docroot/themes/louisiana/templates/block/block--menu-block--audience-menu--region-secondary-nav.html.twig");
    }
}
