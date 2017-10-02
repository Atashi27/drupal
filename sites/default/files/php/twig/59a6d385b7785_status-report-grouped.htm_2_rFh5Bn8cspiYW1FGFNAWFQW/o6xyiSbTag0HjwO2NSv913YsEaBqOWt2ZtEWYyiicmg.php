<?php

/* core/themes/stable/templates/admin/status-report-grouped.html.twig */
class __TwigTemplate_a603ef8cad9f9d3b65b9480f476505522b4435706cb0b722e0b08afa6d79af9a extends Twig_Template
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
        $tags = array("for" => 22, "set" => 28, "if" => 34);
        $filters = array();
        $functions = array("attach_library" => 19, "create_attribute" => 33);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array(),
                array('attach_library', 'create_attribute')
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

        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("core/drupal.collapse"), "html", null, true));
        echo "

<div>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grouped_requirements"]) ? $context["grouped_requirements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 23
            echo "    <div>
      <h3 id=\"";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["group"], "type", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true));
            echo "</h3>
      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                // line 26
                echo "        <details class=\"system-status-report__entry\">
          ";
                // line 28
                $context["summary_classes"] = array(0 => "system-status-report__status-title", 1 => ((twig_in_filter($this->getAttribute(                // line 30
$context["group"], "type", array()), array(0 => "warning", 1 => "error"))) ? (("system-status-report__status-icon system-status-report__status-icon--" . $this->getAttribute($context["group"], "type", array()))) : ("")));
                // line 33
                echo "          <summary";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->createAttribute(array("class" => (isset($context["summary_classes"]) ? $context["summary_classes"] : null))), "html", null, true));
                echo " role=\"button\">
            ";
                // line 34
                if ($this->getAttribute($context["requirement"], "severity_title", array())) {
                    // line 35
                    echo "              <span class=\"visually-hidden\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "severity_title", array()), "html", null, true));
                    echo "</span>
            ";
                }
                // line 37
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "title", array()), "html", null, true));
                echo "
          </summary>
          <div class=\"system-status-report__entry__value\">
            ";
                // line 40
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "value", array()), "html", null, true));
                echo "
            ";
                // line 41
                if ($this->getAttribute($context["requirement"], "description", array())) {
                    // line 42
                    echo "              <div class=\"description\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "description", array()), "html", null, true));
                    echo "</div>
            ";
                }
                // line 44
                echo "          </div>
        </details>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/status-report-grouped.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  112 => 47,  104 => 44,  98 => 42,  96 => 41,  92 => 40,  85 => 37,  79 => 35,  77 => 34,  72 => 33,  70 => 30,  69 => 28,  66 => 26,  62 => 25,  56 => 24,  53 => 23,  49 => 22,  43 => 19,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override of grouped status report requirements.
 *
 * - grouped_requirements: Contains grouped requirements.
 *   Each group contains:
 *   - title: The title of the group.
 *   - type: The severity of the group.
 *   - items: The requirement instances.
 *     Each requirement item contains:
 *     - title: The title of the requirement.
 *     - value: (optional) The requirement's status.
 *     - description: (optional) The requirement's description.
 *     - severity_title: The title of the severity.
 *     - severity_status: Indicates the severity status.
 */
#}
{{ attach_library('core/drupal.collapse') }}

<div>
  {% for group in grouped_requirements %}
    <div>
      <h3 id=\"{{ group.type }}\">{{ group.title }}</h3>
      {% for requirement in group.items %}
        <details class=\"system-status-report__entry\">
          {%
            set summary_classes = [
              'system-status-report__status-title',
              group.type in ['warning', 'error'] ? 'system-status-report__status-icon system-status-report__status-icon--' ~ group.type
            ]
          %}
          <summary{{ create_attribute({'class': summary_classes}) }} role=\"button\">
            {% if requirement.severity_title  %}
              <span class=\"visually-hidden\">{{ requirement.severity_title }}</span>
            {% endif %}
            {{ requirement.title }}
          </summary>
          <div class=\"system-status-report__entry__value\">
            {{ requirement.value }}
            {% if requirement.description %}
              <div class=\"description\">{{ requirement.description }}</div>
            {% endif %}
          </div>
        </details>
      {% endfor %}
    </div>
  {% endfor %}
</div>
";
    }
}
