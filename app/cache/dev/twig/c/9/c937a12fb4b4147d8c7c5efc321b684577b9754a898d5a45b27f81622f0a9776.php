<?php

/* BlogBundle:Blog:new.html.twig */
class __TwigTemplate_c937a12fb4b4147d8c7c5efc321b684577b9754a898d5a45b27f81622f0a9776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Blog:new.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        echo "    
";
        // line 4
        $this->displayParentBlock("css", $context, $blocks);
        echo "
<style type='text/css'>
    .error-span ul li{list-style: none;}
    .error-span ul{padding-left:0;}
</style>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-6 h3\">
    Blog Add
</div>
</div>

    <div class=\"row\">
        <div class=\"col-md-10\">
                
            <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("blog_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\" id=\"blog_add\" novalidate>
                <div class=\"tab-pane active\" id=\"account\">
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-2\">Title<span class=\"\">*</span></label>
                        <div class=\"col-md-6\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Blog Title")));
        echo "
                            <span class=\"error-span text-danger\">";
        // line 29
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        }
        echo "</span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-2\">Description<span class=\"\">*</span></label>
                        <div class=\"col-md-6\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("placeholder" => "Description")));
        echo "
                            <span class=\"error-span text-danger\">";
        // line 36
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        }
        echo "</span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-2\">Status<span class=\"\">*</span></label>
                        <div class=\"col-md-6\">
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Status")));
        echo "
                            <span class=\"error-span text-danger\">";
        // line 43
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'errors');
        }
        echo "</span>
                        </div>
                    </div>

                    <div class=\"wizard-buttons\">
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"col-md-offset-2 col-md-8\">
                                    <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary nextBtn\">

                                    <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("blog_list");
        echo "\" class=\"btn btn-default prevBtn\">
                                        <i class=\"fa fa-arrow-circle-left\"></i> Back 
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </form>

        </div>
    </div>

</div>
 ";
        // line 70
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
<!-- /PAGE HEADER -->
";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 74,  150 => 73,  143 => 70,  124 => 54,  115 => 48,  105 => 43,  101 => 42,  90 => 36,  86 => 35,  75 => 29,  71 => 28,  61 => 23,  48 => 12,  45 => 11,  35 => 4,  30 => 3,  11 => 1,);
    }
}
