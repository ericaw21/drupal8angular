<?php

/* core/themes/stable/templates/misc/feed-icon.html.twig */
class __TwigTemplate_fc8c92ea847499e671728d27598719d83503808f59073eb84a8a2d216bb85caa extends Twig_Template
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
        $__internal_0cbd6a92aea5e073986435db9dbedc72417f0336c6191bbbb6ac83a9785ad218 = $this->env->getExtension("native_profiler");
        $__internal_0cbd6a92aea5e073986435db9dbedc72417f0336c6191bbbb6ac83a9785ad218->enter($__internal_0cbd6a92aea5e073986435db9dbedc72417f0336c6191bbbb6ac83a9785ad218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/misc/feed-icon.html.twig"));

        $tags = array();
        $filters = array("t" => 14);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 13
        echo "<a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "feed-icon"), "method"), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Subscribe to @title", array("@title" => (isset($context["title"]) ? $context["title"] : null)))));
        echo "
</a>
";
        
        $__internal_0cbd6a92aea5e073986435db9dbedc72417f0336c6191bbbb6ac83a9785ad218->leave($__internal_0cbd6a92aea5e073986435db9dbedc72417f0336c6191bbbb6ac83a9785ad218_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/misc/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  46 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a feed icon.
 *
 * Available variables:
 * - url: An internal system path or a fully qualified external URL of the feed.
 * - attributes: Remaining HTML attributes for the feed link.
 *   - title: A descriptive title of the feed link.
 *   - class: HTML classes to be applied to the feed link.
 */
#}
<a href=\"{{ url }}\"{{ attributes.addClass('feed-icon') }}>
  {{ 'Subscribe to @title'|t({'@title': title}) }}
</a>
";
    }
}