<?php

/* themes/blog_themes/templates/page.html.twig */
class __TwigTemplate_34bfad89e5cf21bba22ad626f22141afa99da22c0d45fe7b3830821029c56084 extends Twig_Template
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
        $tags = array("if" => 3);
        $filters = array("raw" => 1, "t" => 11);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('raw', 't'),
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

        // line 1
        echo "<div id=\"page\" class=\"page\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["page_css"]) ? $context["page_css"] : null)));
        echo ">

  ";
        // line 3
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "show_skins_menu", array())) {
            // line 4
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "show_skins_menu", array())));
            echo "
  ";
        }
        // line 6
        echo "  
  <a id=\"Top\"></a>
  <header id=\"header\">
    <div class=\"container\">
      ";
        // line 10
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 11
            echo "        <a id=\"logo\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
          <img src=\"";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"/>
        </a>
      ";
        }
        // line 15
        echo "
      ";
        // line 16
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 17
            echo "        <div class=\"name-and-slogan\">

          ";
            // line 20
            echo "          ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 21
                echo "            <strong class=\"site-name\">
              <a href=\"";
                // line 22
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
            </strong>
          ";
            } else {
                // line 25
                echo "            <h1 class=\"site-name\">
              <a href=\"";
                // line 26
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
            </h1>
          ";
            }
            // line 29
            echo "
          ";
            // line 30
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 31
                echo "            <div class=\"site-slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
          ";
            }
            // line 33
            echo "        </div>
      ";
        }
        // line 35
        echo "      <a id=\"menu-toggle\" class=\"navbar-toggle collapsed\" href=\"#menu-toggle\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
      </a>
      ";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "

      ";
        // line 42
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 43
            echo "        <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">
          <div class=\"container\">
            ";
            // line 45
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
          </div>
        </nav>
      ";
        }
        // line 49
        echo "

    </div>
  </header>

  ";
        // line 54
        if (((isset($context["main_menu"]) ? $context["main_menu"] : null) || (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null))) {
            // line 55
            echo "    <nav id=\"navigation\" role=\"navigation\">
      <div class=\"container\">
        ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_menu"]) ? $context["main_menu"] : null), "html", null, true));
            echo "
        ";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null), "html", null, true));
            echo "
      </div>
    </nav>
  ";
        }
        // line 62
        echo "


  ";
        // line 65
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 66
            echo "    <section id=\"slideshow\">
      <div class=\"container\">
        ";
            // line 68
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 74
            echo "    <section id=\"featured\">
      <div class=\"container\">
        ";
            // line 76
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 80
        echo "
  ";
        // line 81
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first", array())) {
            // line 82
            echo "    <section id=\"panel_first\">
      <div class=\"container\">
        ";
            // line 84
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 88
        echo "
  ";
        // line 89
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 90
            echo "    <section id=\"messages\">
      <div class=\"container\">
        ";
            // line 92
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 96
        echo "
  ";
        // line 97
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 98
            echo "    <section id=\"help\">
      <div class=\"container\">
        ";
            // line 100
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 104
        echo "
  ";
        // line 105
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 106
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
    <section id=\"title\">
      <div class=\"container\">
        <h1>";
            // line 109
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
      </div>
    </section>
    ";
            // line 112
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
  ";
        }
        // line 114
        echo "
  <section id=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">

        <div id=\"main-content\" class=\"content col-lg-";
        // line 120
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
        echo " col-md-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
        echo " col-sm-12 col-xs-12\">
          ";
        // line 121
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

          ";
        // line 123
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
        echo "

          ";
        // line 125
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 126
            echo "            <nav class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</nav>
          ";
        }
        // line 128
        echo "
          ";
        // line 129
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

          <!--";
        // line 131
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
        echo "-->
        </div>

        ";
        // line 134
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 135
            echo "          <aside class=\"sidebar-first sidebar col-lg-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first_width", array()), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first_width", array()), "html", null, true));
            echo " col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 136
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 139
        echo "
        ";
        // line 140
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 141
            echo "          <aside class=\"sidebar-second sidebar col-lg-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second_width", array()), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second_width", array()), "html", null, true));
            echo " col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 142
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 145
        echo "      </div>
    </div>
  </section>

  ";
        // line 149
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array()))) {
            // line 150
            echo "    <section id=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
            ";
            // line 154
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
            ";
            // line 157
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
            ";
            // line 160
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 166
        echo "
  ";
        // line 167
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 168
            echo "    <section id=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 170
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 174
        echo "  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: blocks;\"></a>

  ";
        // line 176
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 177
            echo "    <footer id=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 179
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 183
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/blog_themes/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 183,  427 => 179,  423 => 177,  421 => 176,  417 => 174,  410 => 170,  406 => 168,  404 => 167,  401 => 166,  392 => 160,  386 => 157,  380 => 154,  374 => 150,  372 => 149,  366 => 145,  360 => 142,  353 => 141,  351 => 140,  348 => 139,  342 => 136,  335 => 135,  333 => 134,  327 => 131,  322 => 129,  319 => 128,  313 => 126,  311 => 125,  306 => 123,  301 => 121,  295 => 120,  287 => 114,  282 => 112,  276 => 109,  269 => 106,  267 => 105,  264 => 104,  257 => 100,  253 => 98,  251 => 97,  248 => 96,  241 => 92,  237 => 90,  235 => 89,  232 => 88,  225 => 84,  221 => 82,  219 => 81,  216 => 80,  209 => 76,  205 => 74,  203 => 73,  200 => 72,  193 => 68,  189 => 66,  187 => 65,  182 => 62,  175 => 58,  171 => 57,  167 => 55,  165 => 54,  158 => 49,  151 => 45,  147 => 43,  145 => 42,  140 => 40,  133 => 35,  129 => 33,  123 => 31,  121 => 30,  118 => 29,  108 => 26,  105 => 25,  95 => 22,  92 => 21,  89 => 20,  85 => 17,  83 => 16,  80 => 15,  72 => 12,  65 => 11,  63 => 10,  57 => 6,  51 => 4,  49 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"page\" class=\"page\" {{ page_css |raw }}>

  {% if page.show_skins_menu %}
    {{ page.show_skins_menu |raw }}
  {% endif %}
  
  <a id=\"Top\"></a>
  <header id=\"header\">
    <div class=\"container\">
      {% if logo %}
        <a id=\"logo\" href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
          <img src=\"{{ logo }}\" alt=\"{{ 'Home'|t }}\"/>
        </a>
      {% endif %}

      {% if site_name or site_slogan %}
        <div class=\"name-and-slogan\">

          {# Use h1 when the content title is empty #}
          {% if title %}
            <strong class=\"site-name\">
              <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
            </strong>
          {% else %}
            <h1 class=\"site-name\">
              <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
            </h1>
          {% endif %}

          {% if site_slogan %}
            <div class=\"site-slogan\">{{ site_slogan }}</div>
          {% endif %}
        </div>
      {% endif %}
      <a id=\"menu-toggle\" class=\"navbar-toggle collapsed\" href=\"#menu-toggle\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
      </a>
      {{ page.header }}

      {% if page.main_menu %}
        <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">
          <div class=\"container\">
            {{ page.main_menu }}
          </div>
        </nav>
      {% endif %}


    </div>
  </header>

  {% if main_menu or secondary_menu %}
    <nav id=\"navigation\" role=\"navigation\">
      <div class=\"container\">
        {{ main_menu }}
        {{ secondary_menu }}
      </div>
    </nav>
  {% endif %}



  {% if page.slideshow %}
    <section id=\"slideshow\">
      <div class=\"container\">
        {{ page.slideshow }}
      </div>
    </section>
  {% endif %}

  {% if page.featured %}
    <section id=\"featured\">
      <div class=\"container\">
        {{ page.featured }}
      </div>
    </section>
  {% endif %}

  {% if page.panel_first %}
    <section id=\"panel_first\">
      <div class=\"container\">
        {{ page.panel_first }}
      </div>
    </section>
  {% endif %}

  {% if messages %}
    <section id=\"messages\">
      <div class=\"container\">
        {{ messages }}
      </div>
    </section>
  {% endif %}

  {% if page.help %}
    <section id=\"help\">
      <div class=\"container\">
        {{ page.help }}
      </div>
    </section>
  {% endif %}

  {% if title %}
    {{ title_prefix }}
    <section id=\"title\">
      <div class=\"container\">
        <h1>{{ title }}</h1>
      </div>
    </section>
    {{ title_suffix }}
  {% endif %}

  <section id=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">

        <div id=\"main-content\" class=\"content col-lg-{{ page.main_content_width }} col-md-{{ page.main_content_width }} col-sm-12 col-xs-12\">
          {{ page.highlighted }}

          {{ tabs }}

          {% if action_links %}
            <nav class=\"action-links\">{{ action_links }}</nav>
          {% endif %}

          {{ page.content }}

          <!--{{ feed_icons }}-->
        </div>

        {% if page.sidebar_first %}
          <aside class=\"sidebar-first sidebar col-lg-{{ page.sidebar_first_width }} col-md-{{ page.sidebar_first_width }} col-sm-12 col-xs-12\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endif %}

        {% if page.sidebar_second %}
          <aside class=\"sidebar-second sidebar col-lg-{{ page.sidebar_second_width }} col-md-{{ page.sidebar_second_width }} col-sm-12 col-xs-12\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endif %}
      </div>
    </div>
  </section>

  {% if page.panel_second_1 or page.panel_second_2 or page.panel_second_3 %}
    <section id=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
            {{ page.panel_second_1 }}
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
            {{ page.panel_second_2 }}
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
            {{ page.panel_second_3 }}
          </div>
        </div>
      </div>
    </section>
  {% endif %}

  {% if breadcrumb %}
    <section id=\"breadcrumb\">
      <div class=\"container\">
        {{ breadcrumb }}
      </div>
    </section>
  {% endif %}
  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: blocks;\"></a>

  {% if page.footer %}
    <footer id=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        {{ page.footer }}
      </div>
    </footer>
  {% endif %}

</div>
";
    }
}
