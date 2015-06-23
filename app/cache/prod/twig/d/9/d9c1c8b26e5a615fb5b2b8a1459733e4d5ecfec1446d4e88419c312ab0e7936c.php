<?php

/* BlogBundle::flashMessage.html.twig */
class __TwigTemplate_d9c1c8b26e5a615fb5b2b8a1459733e4d5ecfec1446d4e88419c312ab0e7936c extends Twig_Template
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
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 2
            echo "
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                echo "
        ";
                // line 5
                if (($context["type"] == "general")) {
                    // line 6
                    echo "            <div class=\"alert alert-general\">
                <p>";
                    // line 7
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</p>
                <span class=\"close\"></span>
            </div>

        ";
                } elseif ((                // line 11
$context["type"] == "notice")) {
                    // line 12
                    echo "            <div class=\"alert alert-notice\">
                <p>";
                    // line 13
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</p>
                <span class=\"close\"></span>
            </div>

        ";
                } elseif ((                // line 17
$context["type"] == "success")) {
                    // line 18
                    echo "            <div class=\"alert alert-success\">
                <p>";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</p>
                <span class=\"close\"></span>
            </div>

        ";
                } elseif ((                // line 23
$context["type"] == "error")) {
                    // line 24
                    echo "            <div class=\"alert alert-error\">
                <p>";
                    // line 25
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</p>
                <span class=\"close\"></span>
            </div>

        ";
                } elseif ((                // line 29
$context["type"] == "failure")) {
                    // line 30
                    echo "            <div class=\"alert alert-error\">
                <p>";
                    // line 31
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</p>
                <span class=\"close\"></span>
            </div>

        ";
                } elseif ((                // line 35
$context["type"] == "help")) {
                    // line 36
                    echo "            <div class=\"alert alert-help\">
                <p>";
                    // line 37
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</p>
                <span class=\"close\"></span>
            </div>
       ";
                }
                // line 40
                echo "  

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BlogBundle::flashMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  98 => 37,  95 => 36,  93 => 35,  86 => 31,  83 => 30,  81 => 29,  74 => 25,  71 => 24,  69 => 23,  62 => 19,  59 => 18,  57 => 17,  50 => 13,  47 => 12,  45 => 11,  38 => 7,  35 => 6,  33 => 5,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
