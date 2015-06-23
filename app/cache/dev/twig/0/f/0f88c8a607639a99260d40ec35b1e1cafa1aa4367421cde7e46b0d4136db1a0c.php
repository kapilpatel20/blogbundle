<?php

/* BlogBundle:Blog:edit.html.twig */
class __TwigTemplate_0f88c8a607639a99260d40ec35b1e1cafa1aa4367421cde7e46b0d4136db1a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Blog:edit.html.twig", 1);
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
            Blog Edit
        </div>
        </div>

    <div class=\"row\">
            <div class=\"col-md-10\">
                <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\" id=\"blog_add\" novalidate>
                    <div class=\"tab-pane active\" id=\"account\">
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-2\">Title<span class=\"\">*</span></label>
                            <div class=\"col-md-6\">
                                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Blog Title")));
        echo "
                                <span class=\"error-span\">";
        // line 22
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
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("placeholder" => "Description")));
        echo "
                                <span class=\"error-span\">";
        // line 29
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
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Status")));
        echo "
                                <span class=\"error-span\">";
        // line 36
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'errors');
        }
        echo "</span>
                            </div>
                        </div>

                        <div class=\"wizard-buttons\">
                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-offset-2 col-md-8\">
                                        <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary nextBtn\">

                                        <a href=\"";
        // line 47
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
        // line 61
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
<!-- /PAGE HEADER -->
";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 65,  133 => 64,  126 => 61,  109 => 47,  100 => 41,  90 => 36,  86 => 35,  75 => 29,  71 => 28,  60 => 22,  56 => 21,  46 => 16,  32 => 4,  29 => 3,  11 => 1,);
    }
}
