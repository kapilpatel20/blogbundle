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
    public function block_body($context, array $blocks = array())
    {
        // line 4
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
        // line 15
        echo $this->env->getExtension('routing')->getPath("blog_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\" id=\"blog_add\" novalidate>
                <div class=\"tab-pane active\" id=\"account\">
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-2\">Title<span class=\"\">*</span></label>
                        <div class=\"col-md-6\">
                                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Blog Title")));
        echo "
                            <span class=\"error-span\">";
        // line 21
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'errors');
        }
        echo "</span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-2\">Description<span class=\"\">*</span></label>
                        <div class=\"col-md-6\">
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget', array("attr" => array("placeholder" => "Description")));
        echo "
                            <span class=\"error-span\">";
        // line 28
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'errors');
        }
        echo "</span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-2\">Status<span class=\"\">*</span></label>
                        <div class=\"col-md-6\">
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "status", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Status")));
        echo "
                            <span class=\"error-span\">";
        // line 35
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "status", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "status", array()), 'errors');
        }
        echo "</span>
                        </div>
                    </div>

                    <div class=\"wizard-buttons\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"col-md-offset-2 col-md-8\">
                                    <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary nextBtn\">

                                    <a href=\"";
        // line 46
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
        // line 62
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
<!-- /PAGE HEADER -->
";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
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
        return array (  137 => 66,  134 => 65,  127 => 62,  108 => 46,  99 => 40,  89 => 35,  85 => 34,  74 => 28,  70 => 27,  59 => 21,  55 => 20,  45 => 15,  32 => 4,  29 => 3,  11 => 1,);
    }
}
