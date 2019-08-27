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

/* themes/custom/wdark/templates/page/page.html.twig */
class __TwigTemplate_5e535906cbb2bbfa0c8e95abe46ab774f0934fd7006c529830a91de81ed6861f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["embed" => 9, "if" => 38];
        $filters = ["escape" => 41];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['embed', 'if'],
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
        // line 7
        echo "<!-- <div class=\"transition anim-trans\"></div> -->
<div id=\"particles-js\" class=\"page \">
  ";
        // line 9
        $this->loadTemplate("themes/custom/wdark/templates/page/page.html.twig", "themes/custom/wdark/templates/page/page.html.twig", 9, "1604898301")->display(twig_array_merge($context, ["placement" => "sticky-top", "container" => "fluid", "color" => "light", "utility_classes" => [0 => "bg-light"]]));
        // line 36
        echo "
  <main class=\"pb-5\">
    ";
        // line 38
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 39
            echo "      <header class=\"page__header mb-3\">
        <div class=\"fluid\">
          ";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        </div>
      </header>
    ";
        }
        // line 45
        echo "    <a class=\"lang-switcher\" href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["switch_path"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["switch_lang"] ?? null)), "html", null, true);
        echo "</a>
    ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 47
            echo "      <div class=\"page__content\">
        <div class=\"fluid\">
          ";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 53
        echo "  </main>

  ";
        // line 55
        if ((((($this->getAttribute(($context["page"] ?? null), "footer", []) || $this->getAttribute(($context["page"] ?? null), "footer_left", [])) || $this->getAttribute(($context["page"] ?? null), "footer_center", [])) || $this->getAttribute(($context["page"] ?? null), "footer_right", [])) || $this->getAttribute(($context["page"] ?? null), "footer_bottom", []))) {
            // line 56
            echo "    <footer class=\"page__footer\">
      ";
            // line 57
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 58
                echo "      <div class=\"fluid\">
        <div class=\"d-flex justify-content-md-between align-items-md-center footer-top\">
          ";
                // line 60
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
        </div>
      </div>
      ";
            }
            // line 64
            echo "      <div class=\"row\">
      ";
            // line 65
            if ($this->getAttribute(($context["page"] ?? null), "footer_left", [])) {
                // line 66
                echo "          <div class=\"d-flex justify-content-md-center align-items-md-center col-sm footer-left\">
            ";
                // line 67
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_left", [])), "html", null, true);
                echo "
          </div>
      ";
            }
            // line 70
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_center", [])) {
                echo "    
          <div class=\"d-flex justify-content-md-between align-items-md-center col-sm footer-center\">
            ";
                // line 72
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_center", [])), "html", null, true);
                echo "
          </div>
      ";
            }
            // line 75
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_right", [])) {
                echo "    
          <div class=\"d-flex justify-content-md-between align-items-md-center col-sm footer-right\">
            ";
                // line 77
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_right", [])), "html", null, true);
                echo "
          </div>        
      ";
            }
            // line 79
            echo "       
      </div>       
      ";
            // line 81
            if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
                // line 82
                echo "      <div class=\"d-flex fluid footer-bottom justify-content-md-center\">
        <div class=\" justify-content-md-between align-items-md-center\">
          ";
                // line 84
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
                echo "
        </div>
      </div>
      ";
            }
            // line 87
            echo "          
    </footer>
  ";
        }
        // line 90
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/wdark/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 90,  175 => 87,  168 => 84,  164 => 82,  162 => 81,  158 => 79,  152 => 77,  146 => 75,  140 => 72,  134 => 70,  128 => 67,  125 => 66,  123 => 65,  120 => 64,  113 => 60,  109 => 58,  107 => 57,  104 => 56,  102 => 55,  98 => 53,  91 => 49,  87 => 47,  85 => 46,  78 => 45,  71 => 41,  67 => 39,  65 => 38,  61 => 36,  59 => 9,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/wdark/templates/page/page.html.twig", "/Library/WebServer/Documents/test/wdark/themes/custom/wdark/templates/page/page.html.twig");
    }
}


/* themes/custom/wdark/templates/page/page.html.twig */
class __TwigTemplate_5e535906cbb2bbfa0c8e95abe46ab774f0934fd7006c529830a91de81ed6861f___1604898301 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("@radix/navbar/navbar.twig", "themes/custom/wdark/templates/page/page.html.twig", 9);
        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 17];
        $filters = ["escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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

    protected function doGetParent(array $context)
    {
        return "@radix/navbar/navbar.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_branding($context, array $blocks = [])
    {
        // line 17
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_branding", [])) {
            // line 18
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_branding", [])), "html", null, true);
            echo "
      ";
        }
        // line 20
        echo "    ";
    }

    // line 22
    public function block_left($context, array $blocks = [])
    {
        // line 23
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_left", [])) {
            // line 24
            echo "        <div class=\"mr-auto\">
          ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_left", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 28
        echo "    ";
    }

    // line 30
    public function block_right($context, array $blocks = [])
    {
        // line 31
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navbar_right", [])) {
            // line 32
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_right", [])), "html", null, true);
            echo "
      ";
        }
        // line 34
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/wdark/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 34,  307 => 32,  304 => 31,  301 => 30,  297 => 28,  291 => 25,  288 => 24,  285 => 23,  282 => 22,  278 => 20,  272 => 18,  269 => 17,  266 => 16,  222 => 9,  180 => 90,  175 => 87,  168 => 84,  164 => 82,  162 => 81,  158 => 79,  152 => 77,  146 => 75,  140 => 72,  134 => 70,  128 => 67,  125 => 66,  123 => 65,  120 => 64,  113 => 60,  109 => 58,  107 => 57,  104 => 56,  102 => 55,  98 => 53,  91 => 49,  87 => 47,  85 => 46,  78 => 45,  71 => 41,  67 => 39,  65 => 38,  61 => 36,  59 => 9,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/wdark/templates/page/page.html.twig", "/Library/WebServer/Documents/test/wdark/themes/custom/wdark/templates/page/page.html.twig");
    }
}
