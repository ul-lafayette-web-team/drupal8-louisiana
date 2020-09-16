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

/* themes/louisiana/templates/block/block--footer-content-block.html.twig */
class __TwigTemplate_efb923835ae4e3ca44b5f25e301c6da04c51fe480e65bd8cc81d93a3aea460bd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 1];
        $filters = ["escape" => 12, "t" => 12];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import'],
                ['escape', 't'],
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
        $context["oho_macros"] = $this->loadTemplate("@oho_base/includes/oho-macros.html.twig", "themes/louisiana/templates/block/block--footer-content-block.html.twig", 1)->unwrap();
        // line 2
        echo "<footer class=\"site-footer\">
  <div class=\"grid-container\">
    <div class=\"grid-y\">
      <div class=\"cell\">
        <div class=\"grid-x\">
          <div class=\"cell small-12 medium-12 large-6\">
            <div class=\"grid-y\" >
              <div class=\"cell shrink\">
                <div class=\"grid-x grid-padding-x\">
                  <div class=\"cell small-12 medium-6\">
                    <a class=\"site-footer__logo\" href=\"/\"><img src=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/assets/img/ULL-logo-vertical.svg\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("University of Loouisiana logo with the fleur de lis"));
        echo "\"></a>
                  </div>

                  <div class=\"cell small-12 medium-6\">
                    <div class=\"site-footer__contact\">
                      ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_fcb_phone_number", [])), "html", null, true);
        echo "
                      ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_fcb_email", [])), "html", null, true);
        echo "
                      ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_component_body", [])), "html", null, true);
        echo "
                    </div>
                  </div>
                </div>
              </div>

              <div class=\"cell auto small-12\">
                <section class=\"site-footer__campaign-callout site-footer__campaign-callout--desktop\">
                  <h2>";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_fcb_cc_title", [])), "html", null, true);
        echo "</h2>
                  ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["oho_macros"]->getlink_field_link($this->getAttribute(($context["content"] ?? null), "field_fcb_cc_link", []), "btn"));
        echo "
                </section>
              </div>
            </div>
          </div>

          <div class=\"cell small-12 medium-12 large-6\">
            <div class=\"grid-x grid-padding-x\">
              <div class=\"cell small-12 medium-6\">
                <div class=\"site-footer__main-nav\">
                  ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_nav"] ?? null)), "html", null, true);
        echo "
                </div>
              </div>

              <div class=\"cell small-12 medium-6\">
                <div class=\"site-footer__links site-footer__links--primary\">
                  ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["oho_macros"]->getlink_field_list($this->getAttribute(($context["content"] ?? null), "field_fcb_primary_links", [])));
        echo "
                </div>
                <div class=\"site-footer__links site-footer__links--secondary\">
                  ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["oho_macros"]->getlink_field_list($this->getAttribute(($context["content"] ?? null), "field_fcb_secondary_links", [])));
        echo "
                </div>
              </div>

              <div class=\"site-footer__social\">
                ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["oho_macros"]->getfield_list($this->getAttribute(($context["content"] ?? null), "field_fcb_social_media_links", [])));
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"cell\">
      <section class=\"site-footer__campaign-callout site-footer__campaign-callout--mobile\">
        <h2>";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_fcb_cc_title", [])), "html", null, true);
        echo "</h2>
        ";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["oho_macros"]->getlink_field_link($this->getAttribute(($context["content"] ?? null), "field_fcb_cc_link", []), "btn"));
        echo "
      </section>
    </div>
  </div>
</footer>

<footer class=\"site-footer--footer\">
  <div class=\"grid-container\">
    <div class=\"grid-x grid-margin-x\">
      <div class=\"cell\">
        <p>&copy; ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_year"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("University of Louisiana at Lafayette. All rights reserved."));
        echo "</p>
        ";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["oho_macros"]->getlink_field_list($this->getAttribute(($context["content"] ?? null), "field_fcb_utility_links", [])));
        echo "
      </div>
    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/block/block--footer-content-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 74,  168 => 73,  155 => 63,  151 => 62,  138 => 52,  130 => 47,  124 => 44,  115 => 38,  102 => 28,  98 => 27,  87 => 19,  83 => 18,  79 => 17,  69 => 12,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/block/block--footer-content-block.html.twig", "/var/www/vhost/d8-la-test.ucs.louisiana.edu/docroot/themes/louisiana/templates/block/block--footer-content-block.html.twig");
    }
}
