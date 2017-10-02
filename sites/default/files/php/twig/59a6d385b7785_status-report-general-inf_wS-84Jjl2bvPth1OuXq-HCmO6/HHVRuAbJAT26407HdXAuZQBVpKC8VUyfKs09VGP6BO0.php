<?php

/* core/themes/stable/templates/admin/status-report-general-info.html.twig */
class __TwigTemplate_24edb539812fa82c828849ec73d920646838ff2f0841ee7638269e4a2bdbd208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 37);
        $filters = array("t" => 33);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 32
        echo "
<h2>";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("General System Information")));
        echo "</h2>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Drupal Version")));
        echo "</h3>
  ";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["drupal"]) ? $context["drupal"] : null), "value", array()), "html", null, true));
        echo "
  ";
        // line 37
        if ($this->getAttribute((isset($context["drupal"]) ? $context["drupal"] : null), "description", array())) {
            // line 38
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["drupal"]) ? $context["drupal"] : null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 40
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Last Cron Run")));
        echo "</h3>
  ";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "value", array()), "html", null, true));
        echo "
  ";
        // line 44
        if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "run_cron", array())) {
            // line 45
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "run_cron", array()), "html", null, true));
            echo "
  ";
        }
        // line 47
        echo "  ";
        if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "description", array())) {
            // line 48
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 50
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Web Server")));
        echo "</h3>
  ";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["webserver"]) ? $context["webserver"] : null), "value", array()), "html", null, true));
        echo "
  ";
        // line 54
        if ($this->getAttribute((isset($context["webserver"]) ? $context["webserver"] : null), "description", array())) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["webserver"]) ? $context["webserver"] : null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 57
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("PHP")));
        echo "</h3>
  <h4>";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Version")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php"]) ? $context["php"] : null), "value", array()), "html", null, true));
        echo "
  ";
        // line 61
        if ($this->getAttribute((isset($context["php"]) ? $context["php"] : null), "description", array())) {
            // line 62
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php"]) ? $context["php"] : null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 64
        echo "
  <h4>";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Memory limit")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php_memory_limit"]) ? $context["php_memory_limit"] : null), "value", array()), "html", null, true));
        echo "
  ";
        // line 66
        if ($this->getAttribute((isset($context["php_memory_limit"]) ? $context["php_memory_limit"] : null), "description", array())) {
            // line 67
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php_memory_limit"]) ? $context["php_memory_limit"] : null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 69
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Database")));
        echo "</h3>
  <h4>";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Version")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system_version"]) ? $context["database_system_version"] : null), "value", array()), "html", null, true));
        echo "
  ";
        // line 73
        if ($this->getAttribute((isset($context["database_system_version"]) ? $context["database_system_version"] : null), "description", array())) {
            // line 74
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system_version"]) ? $context["database_system_version"] : null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 76
        echo "
  <h4>";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("System")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system"]) ? $context["database_system"] : null), "value", array()), "html", null, true));
        echo "
  ";
        // line 78
        if ($this->getAttribute((isset($context["database_system"]) ? $context["database_system"] : null), "description", array())) {
            // line 79
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system"]) ? $context["database_system"] : null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 81
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/status-report-general-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 81,  188 => 79,  186 => 78,  180 => 77,  177 => 76,  171 => 74,  169 => 73,  163 => 72,  159 => 71,  155 => 69,  149 => 67,  147 => 66,  141 => 65,  138 => 64,  132 => 62,  130 => 61,  124 => 60,  120 => 59,  116 => 57,  110 => 55,  108 => 54,  104 => 53,  100 => 52,  96 => 50,  90 => 48,  87 => 47,  81 => 45,  79 => 44,  75 => 43,  71 => 42,  67 => 40,  61 => 38,  59 => 37,  55 => 36,  51 => 35,  46 => 33,  43 => 32,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for the status report general info.
 *
 * Available variables:
 * - drupal: The status of Drupal installation:
 *   - value: The current status of Drupal installation.
 *   - description: The description for current status of Drupal installation.
 * - cron: The status of cron:
 *   - value: The current status of cron.
 *   - description: The description for current status of cron.
 *   - cron.run_cron: An array to render a button for running cron.
 * - database_system: The status of database system:
 *   - value: The current status of database sytem.
 *   - description: The description for current status of cron.
 * - database_system_version: The info about current database version:
 *   - value: The current version of database.
 *   - description: The description for current version of database.
 * - php: The current version of PHP:
 *   - value: The status of currently installed PHP version.
 *   - description: The description for current installed PHP version.
 * - php_memory_limit: The info about current PHP memory limit:
 *   - value: The status of currently set PHP memory limit.
 *   - description: The description for currently set PHP memory limit.
 * - webserver: The info about currently installed web server:
 *   - value: The status of currently installed web server.
 *   - description: The description for the status of currently installed web
 *     server.
 */
#}

<h2>{{ 'General System Information'|t }}</h2>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">{{ 'Drupal Version'|t }}</h3>
  {{ drupal.value }}
  {% if drupal.description %}
    {{ drupal.description }}
  {% endif %}
</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">{{ 'Last Cron Run'|t }}</h3>
  {{ cron.value }}
  {% if cron.run_cron %}
    {{ cron.run_cron }}
  {% endif %}
  {% if cron.description %}
    {{ cron.description }}
  {% endif %}
</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">{{ 'Web Server'|t }}</h3>
  {{ webserver.value }}
  {% if webserver.description %}
    {{ webserver.description }}
  {% endif %}
</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">{{ 'PHP'|t }}</h3>
  <h4>{{ 'Version'|t }}</h4>{{ php.value }}
  {% if php.description %}
    {{ php.description }}
  {% endif %}

  <h4>{{ 'Memory limit'|t }}</h4>{{ php_memory_limit.value }}
  {% if php_memory_limit.description %}
    {{ php_memory_limit.description }}
  {% endif %}
</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">{{ 'Database'|t }}</h3>
  <h4>{{ 'Version'|t }}</h4>{{ database_system_version.value }}
  {% if database_system_version.description %}
    {{ database_system_version.description }}
  {% endif %}

  <h4>{{ 'System'|t }}</h4>{{ database_system.value }}
  {% if database_system.description %}
    {{ database_system.description }}
  {% endif %}
</div>
";
    }
}
