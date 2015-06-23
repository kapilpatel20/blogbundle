<?php

/* BlogBundle:Advertisement:new.html.twig */
class __TwigTemplate_ef654aab99866b8eccd3fd422165b7f593719528ce0ef4f50403865f92d654b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BviAdminBundle::layout.html.twig", "BlogBundle:Advertisement:new.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BviAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bviadmin/js/bootstrap-fileupload/bootstrap-fileupload.min.css"), "html", null, true);
        echo "\" >
    
";
    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 9
        echo "        
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<!-- PAGE HEADER-->
<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"page-header\">
            <!-- BREADCRUMBS -->
            <ul class=\"breadcrumb\">
                <li>
                    <i class=\"fa fa-home\"></i>
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">Dashboard</a>
                </li>
                <li>
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_advertisement_list");
        echo "\">List Advertisement</a>
                </li>
                
                <li>
                    Add Advertisement
                </li>
            </ul>
            <!-- /BREADCRUMBS -->
            <div class=\"clearfix\">
                <h3 class=\"content-title pull-left\">Add Advertisement</h3>
            </div>
            <div class=\"description\"></div>
        </div>
    </div>

    <div class=\"col-md-12\">
           ";
        // line 39
        $this->loadTemplate("BviAdminBundle::flashMessage.html.twig", "BlogBundle:Advertisement:new.html.twig", 39)->display($context);
        // line 40
        echo "        <!-- BOX -->
        <div class=\"box border primary\" id=\"formWizard\">
            <div class=\"box-title\">
                <h4><i class=\"fa fa-bars\"></i>Add Advertisement</h4>
            </div>
            <div class=\"box-body form\">
                <form action=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("admin_advertisement_add");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\" id=\"advertisement\" novalidate>

                    <div class=\"wizard-form\">
                        <div class=\"wizard-content\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"account\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-2\">Name<span class=\"\">*</span></label>
                                        <div class=\"col-md-4\">
                                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Advertisement name")));
        echo "
                                            <span class=\"error-span\">";
        // line 56
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        }
        echo "</span>
                                        </div>
                                    </div>


                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-2\">Type<span class=\"\">*</span></label>
                                        <div class=\"col-md-4\">
                                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "")));
        echo "
                                            <span class=\"error-span\">";
        // line 65
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        }
        echo "</span>
                                        </div>
                                    </div>


                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-2\">Delay Between Advertise:<span class=\"required\">*</span></label>
                                        <div class=\"col-md-4\">
                                                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Frequency")));
        echo "
                                            <span class=\"error-span\">";
        // line 74
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency", array()), 'errors');
        }
        echo "</span>
                                        </div>
                                    </div>



                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-2\">Url<span class=\"required\">*</span></label>
                                        <div class=\"col-md-4\">
                                                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Url")));
        echo "
                                            <span class=\"error-span\">";
        // line 84
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        }
        echo "</span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-2\">Image<span class=\"required\">*</span></label>
                                        <div class=\"col-md-4\">
                                                ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageName", array()), 'widget', array("attr" => array("class" => "form-control file-input", "placeholder" => "")));
        echo "
                                            <span class=\"error-span\">";
        // line 92
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageName", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageName", array()), 'errors');
        }
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-2\">Button Position - X Coordinate:<span class=\"required\">*</span></label>
                                        <div class=\"col-md-4\">
                                                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "positionX", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Position - X")));
        echo "
                                            <span class=\"error-span\">";
        // line 100
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "positionX", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "positionX", array()), 'errors');
        }
        echo "</span>
                                        </div>
                                    </div>


                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-2\">Button Position - Y Coordinate:<span class=\"required\">*</span></label>
                                        <div class=\"col-md-4\">
                                                ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "positionY", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Position - Y")));
        echo "
                                            <span class=\"error-span\">";
        // line 109
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "positionY", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "positionY", array()), 'errors');
        }
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-2\">Priority:<span class=\"required\">*</span></label>
                                        <div class=\"col-md-4\">
                                                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priority", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Priority")));
        echo "
                                            <span class=\"error-span\">";
        // line 117
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priority", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priority", array()), 'errors');
        }
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-2\">Status:<span class=\"required\">*</span></label>
                                        <div class=\"col-md-4\">
                                                ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "")));
        echo "
                                            <span class=\"error-span\">";
        // line 125
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'errors')) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'errors');
        }
        echo "</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class=\"wizard-buttons\">
                                ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-offset-2 col-md-8\">
                                        <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary nextBtn\">

                                        <a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("admin_advertisement_list");
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
        <!-- /BOX -->

    </div>

</div>

<!-- /PAGE HEADER -->
";
    }

    // line 160
    public function block_javascripts($context, array $blocks = array())
    {
        // line 161
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<!-- BOOTSTRAP WYSIWYG -->
<script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bviadmin/js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bviadmin/js/jquery-validate/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bviadmin/js/jquery-validate/additional-methods.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('#advertisement').validate({
            ignore: [],
            rules: {
                \"bvi_admin_advertisement[name]\": {
                    \"required\": true
                },
                \"bvi_admin_advertisement[type]\": {
                    \"required\": true
                },
                \"bvi_admin_advertisement[frequency]\": {
                    \"required\": true,
                    \"number\": true,
                    \"min\": 1,
                    \"max\": 24
                },
                \"bvi_admin_advertisement[imageName]\": {
                    \"required\": true,
                     accept: \"image/jpg,image/jpeg,image/png,image/gif\"
                },
                \"bvi_admin_advertisement[url]\": {
                    \"required\": true,
                    \"url\" : true
                },
                \"bvi_admin_advertisement[positionX]\": {
                    \"required\": true,
                    \"number\": true
                },
                \"bvi_admin_advertisement[positionY]\": {
                    \"required\": true,
                    \"number\": true
                },
                \"bvi_admin_advertisement[priority]\": {
                    \"required\": true,
                    \"number\": true
                },
                \"bvi_admin_advertisement[status]\": {
                    \"required\": true
                }

            },
            messages: {
                \"bvi_admin_advertisement[name]\": {
                    \"required\": \"Please enter name\"
                },
                \"bvi_admin_advertisement[type]\": {
                    \"required\": \"Please select type\"
                },
                \"bvi_admin_advertisement[frequency]\": {
                    \"required\": \"Please enter frequency\",
                    \"number\": \"Please enter valid number\",
                    \"min\" : \"Please enter a value less than or equal to 1\",
                    \"max\" : \"Please enter a value less than or equal to 24\"
                },
                \"bvi_admin_advertisement[imageName]\": {
                    \"required\": \"Please select images\",
                    \"accept\": \"Allow only image file\"
                },
                \"bvi_admin_advertisement[url]\": {
                    \"required\": \"Please enter url\"
                },
                \"bvi_admin_advertisement[positionX]\": {
                    \"required\": \"Please enter x position\",
                    \"number\": \"Please enter valid number\"
                    
                },
                \"bvi_admin_advertisement[positionY]\": {
                    \"required\": \"Please enter y position\",
                    \"number\": \"Please enter valid number\"
                    
                },
                \"bvi_admin_advertisement[priority]\": {
                    \"required\": \"Please enter priority\",
                    \"number\": \"Please enter valid number\"
                    
                },
                \"bvi_admin_advertisement[status]\": {
                    \"required\": \"Please select status\"
                }
            }
        });
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Advertisement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 166,  314 => 165,  310 => 164,  303 => 161,  300 => 160,  276 => 140,  267 => 134,  253 => 125,  249 => 124,  237 => 117,  233 => 116,  221 => 109,  217 => 108,  204 => 100,  200 => 99,  188 => 92,  184 => 91,  172 => 84,  168 => 83,  154 => 74,  150 => 73,  137 => 65,  133 => 64,  120 => 56,  116 => 55,  102 => 46,  94 => 40,  92 => 39,  73 => 23,  67 => 20,  57 => 12,  54 => 11,  49 => 9,  46 => 8,  39 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }
}
