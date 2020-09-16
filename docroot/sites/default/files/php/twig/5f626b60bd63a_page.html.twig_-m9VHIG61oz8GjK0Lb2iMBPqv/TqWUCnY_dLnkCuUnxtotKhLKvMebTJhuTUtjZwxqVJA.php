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

/* themes/louisiana/templates/system/page.html.twig */
class __TwigTemplate_767748677878ff0ac9dd8b12dc93af214829b56ddf52be9e4184dac8905ec7ec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 23];
        $filters = ["escape" => 19, "join" => 19, "merge" => 19, "t" => 37];
        $functions = ["drupal_block" => 75];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'join', 'merge', 't'],
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
        // line 2
        $context["page_classes"] = [0 => "page"];
        // line 6
        echo "
";
        // line 8
        $context["wrapper_classes"] = [0 => "page-wrapper"];
        // line 12
        echo "
";
        // line 14
        $context["content_classes"] = [0 => "main-content"];
        // line 18
        echo "
<div class=\"";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter(twig_array_merge($this->sandbox->ensureToStringAllowed(($context["page_classes"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["preprocess_page_classes"] ?? null))), " "), "html", null, true);
        echo "\">

  ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["alert_message"] ?? null)), "html", null, true);
        echo "

  ";
        // line 23
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 24
            echo "    <div class=\"system-region\">
      <div class=\"grid-container\">
        <div class=\"system-messages\">
          ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 32
        echo "
  <div class=\"header__bg\"></div>
  <header class=\"site-header ull-header\">
    <section class=\"ull-header--mobile\">
      <a class=\"ull-header__logo\" href=\"/\">
        <img width=\"194\" height=\"48\" src=\"";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/assets/img/ULL-logo-horizontal.svg\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("logo of University of Louisiana at Lafayette"));
        echo "\">
      </a>
      <div class=\"ull-header__buttons\">
        <button class=\"ull-header__button--search\" data-button-open-text=\"";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Open the search panel"));
        echo "\" data-button-close-text=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close the search panel"));
        echo "\" data-button-enable-at=\"1024\" data-button-open-class=\"search-panel-open\">
          <span class=\"show-for-sr\">";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Open the search panel"));
        echo "</span>
        </button>
        <button class=\"ull-header__button--menu\" data-button-open-text=\"";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Open the main menu"));
        echo "\" data-button-close-text=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close the main menu"));
        echo "\" data-button-enable-at=\"0\" data-button-disable-at=\"1024\" data-button-open-class=\"mobile-menu-open\">
          <span class=\"show-for-sr\">";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Open the main menu"));
        echo "</span>
        </button>
      </div><!-- /.ull-header__buttons -->
    </section>

    <section class=\"ull-header__dropdown\">
      <div class=\"ull-header__utility\">
        <div class=\"ull-header__container ull-header__container--utility\">
          <div class=\"ull-header__container ull-header__container--utility\">
            ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_nav", [])), "html", null, true);
        echo "

            <button class=\"ull-header__button--search\" data-button-open-text=\"";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Open the search panel"));
        echo "\" data-button-close-text=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close the search panel"));
        echo "\" data-button-enable-at=\"1024\" data-button-open-class=\"search-panel-open\">
              <span><span class=\"show-for-sr\">";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Open the"));
        echo " </span>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search"));
        echo "<span class=\"show-for-sr\"> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("panel"));
        echo "</span>
            </button>
          </div>
        </div>
      </div>

      <div class=\"ull-header__main \" id=\"main-menu\">
        <div class=\"ull-header__container\">
          <nav class=\"ull-header__main-nav\">
            ";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_nav", [])), "html", null, true);
        echo "
          </nav>
        </div>
      </div>
    </section>

    <section class=\"ull-header__search\">
      ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
        echo "
    </section><!-- /.ull-header__search -->
  </header>
  ";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("system_breadcrumb_block"), "html", null, true);
        echo "
  <div class=\"";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter(twig_array_merge($this->sandbox->ensureToStringAllowed(($context["wrapper_classes"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["preprocess_wrapper_classes"] ?? null))), " "), "html", null, true);
        echo "\">
    <main id=\"main-content\" class=\"";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter(twig_array_merge($this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["preprocess_content_classes"] ?? null))), " "), "html", null, true);
        echo "\">
      ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "title", [])), "html", null, true);
        echo "
      ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </main>
  </div>

  ";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_upper", [])), "html", null, true);
        echo "

  ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_lower", [])), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 85,  205 => 83,  198 => 79,  194 => 78,  190 => 77,  186 => 76,  182 => 75,  176 => 72,  166 => 65,  150 => 56,  144 => 55,  139 => 53,  127 => 44,  121 => 43,  116 => 41,  110 => 40,  102 => 37,  95 => 32,  87 => 27,  82 => 24,  80 => 23,  75 => 21,  70 => 19,  67 => 18,  65 => 14,  62 => 12,  60 => 8,  57 => 6,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/system/page.html.twig", "/var/www/vhost/d8-la-test.ucs.louisiana.edu/docroot/themes/louisiana/templates/system/page.html.twig");
    }
}
