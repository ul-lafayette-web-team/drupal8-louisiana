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

/* themes/louisiana/templates/node/profile/node--profile.html.twig */
class __TwigTemplate_d95208a2d036c3ff5bc41ac68cabc68680d8b8b514d151b724e3ec6a92df5344 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
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
        echo "<section class=\"profile-detail grid-x grid-padding-x\">
  <div class=\"cell small-12\">
    <h1>";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</h1>
  </div>
  <div class=\"cell small-12 medium-3\">
    <figure class=\"profile__figure\">
      ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_image", [])), "html", null, true);
        echo "
    </figure>
  </div>
  <div class=\"cell small-12 medium-9\">
    <div class=\"profile__types\">
      <ul>
        <li class=\"term-type\"> 
          ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_type", [])), "html", null, true);
        echo "
        </li>
    </ul>
    </div>
    <div class=\"profile__titles\" style=\"font-size: 1.25rem; font-weight: 400\">
      ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_position", [])), "html", null, true);
        echo "
    </div>
    <div class=\"profile__contact\">
      <ul>
        <li>
          <i class=\"far fa-phone\"></i><span>";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_phone_number", [])), "html", null, true);
        echo "</span>
        </li>
        <li>
          <i class=\"far fa-envelope\"></i><span>";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_email", [])), "html", null, true);
        echo "</span>
        </li>        
        <li>
          <i class=\"far fa-map-signs\"></i><span>";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_office_location", [])), "html", null, true);
        echo "</span>
        </li> 
      </ul>
    </div>
  </div>
  <div class=\"cell small-12 medium-8\">
    <div class=\"intro-text\">
      ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_summary", [])), "html", null, true);
        echo "
    </div>
    <h2>Biography</h2>
    <div class=\"profile__html-basic wysiwyg\">
      ";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
    </div>
    <h2>Education</h2>
    <div class=\"profile__html-basic wysiwyg\">
      ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_education", [])), "html", null, true);
        echo "
    </div>
    <h2>Student Research/Collaboration</h2>
    <div class=\"profile__html-basic wysiwyg\">
      ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_research", [])), "html", null, true);
        echo "
    </div>
    <h2>Publications</h2>
    <div class=\"profile__html-basic wysiwyg\">
      ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_publications", [])), "html", null, true);
        echo "
    </div>    
    <h2>Awards & Recognition</h2>
    <div class=\"profile__html-basic wysiwyg\">
      ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_awards", [])), "html", null, true);
        echo "
    </div>
    <div class=\"profile__html-basic wysiwyg\">
      ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_other_info_text", [])), "html", null, true);
        echo "
    </div> 
  </div>
  <div class=\"cell small-12 medium-4\">

  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/louisiana/templates/node/profile/node--profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 60,  149 => 57,  142 => 53,  135 => 49,  128 => 45,  121 => 41,  114 => 37,  104 => 30,  98 => 27,  92 => 24,  84 => 19,  76 => 14,  66 => 7,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/louisiana/templates/node/profile/node--profile.html.twig", "/var/www/vhost/d8-la-dev.ucs.louisiana.edu/docroot/themes/louisiana/templates/node/profile/node--profile.html.twig");
    }
}
