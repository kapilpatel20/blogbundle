<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_6423a370810c09705d151f91ac36f5b03180889c4c96f93afb3ba307866e6e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'header' => array($this, 'block_header'),
            'slideshow' => array($this, 'block_slideshow'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'subfooter' => array($this, 'block_subfooter'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>          <html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]>          <html class=\"ie ie9\"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    ";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 26
        echo "    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
      <script type='text/javascript' src=\"http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js\"></script>
    <![endif]-->
</head>
    <body>
    <div id=\"page-wrapper\">
        
        ";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "        
        ";
        // line 40
        $this->displayBlock('slideshow', $context, $blocks);
        // line 41
        echo "        
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        
        ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 55
        echo "    </div>

    ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "</body>
</html>";
    }

    // line 13
    public function block_css($context, array $blocks = array())
    {
        // line 14
        echo "    
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blog/css/bootstrap.min.css"), "html", null, true);
        echo "\" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    
    ";
    }

    // line 36
    public function block_header($context, array $blocks = array())
    {
        // line 37
        echo "                ";
        // line 38
        echo "        ";
    }

    // line 40
    public function block_slideshow($context, array $blocks = array())
    {
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "        <footer id=\"footer\" class=\"style4\"> 
            ";
        // line 46
        $this->displayBlock('subfooter', $context, $blocks);
        // line 52
        echo "            
        </footer>
        ";
    }

    // line 46
    public function block_subfooter($context, array $blocks = array())
    {
        // line 47
        echo "                ";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "user_login") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "user_register"))) {
            // line 48
            echo "                
                
            ";
        }
        // line 51
        echo "            ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blog/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  159 => 61,  154 => 58,  151 => 57,  147 => 51,  142 => 48,  139 => 47,  136 => 46,  130 => 52,  128 => 46,  125 => 45,  122 => 44,  117 => 42,  112 => 40,  108 => 38,  106 => 37,  103 => 36,  89 => 16,  85 => 14,  82 => 13,  77 => 63,  75 => 57,  71 => 55,  69 => 44,  66 => 43,  64 => 42,  61 => 41,  59 => 40,  56 => 39,  54 => 36,  42 => 26,  40 => 13,  26 => 1,);
    }
}
