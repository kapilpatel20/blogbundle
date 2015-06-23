<?php

/* BlogBundle:Advertisement:edit.html.twig */
class __TwigTemplate_5310870a8abd7a0d3b9847f9b685b9dd1f8ba8e0c3a13c1fbb9da485dbceba8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BviAdminBundle::layout.html.twig", "BlogBundle:Advertisement:edit.html.twig", 1);
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
";
    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 7
        echo "        
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<!-- PAGE HEADER-->
<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"page-header\">
            <!-- BREADCRUMBS -->
            <ul class=\"breadcrumb\">
                <li>
                    <i class=\"fa fa-home\"></i>
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">Dashboard</a>
                </li>
                
                <li>
                    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_advertisement_list");
        echo "\">List Advertisement</a>
                </li>
                
                <li>
                    Edit Advertisement
                </li>
            </ul>
            <!-- /BREADCRUMBS -->
            <div class=\"clearfix\">
                <h3 class=\"content-title pull-left\">Edit Advertisement</h3>
            </div>
            <div class=\"description\"></div>
        </div>
    </div>

    <div class=\"col-md-12\">
           ";
        // line 38
        $this->loadTemplate("BviAdminBundle::flashMessage.html.twig", "BlogBundle:Advertisement:edit.html.twig", 38)->display($context);
        // line 39
        echo "        <!-- BOX -->
        <div class=\"box border primary\" id=\"formWizard\">
            <div class=\"box-title\">
                <h4><i class=\"fa fa-bars\"></i>Edit Advertisement</h4>
            </div>
            <div class=\"box-body form\">
                <form action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_advertisement_edit", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
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
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Advertisement name")));
        echo "
                                            <span class=\"error-span\">";
        // line 55
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
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "")));
        echo "
                                            <span class=\"error-span\">";
        // line 64
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
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Frequency")));
        echo "
                                            <span class=\"error-span\">";
        // line 73
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
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Url")));
        echo "
                                            <span class=\"error-span\">";
        // line 83
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
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageName", array()), 'widget', array("attr" => array("class" => "form-control file-input", "placeholder" => "")));
        echo "
                                            <span class=\"error-span\">";
        // line 91
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
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "positionX", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Position - X")));
        echo "
                                            <span class=\"error-span\">";
        // line 99
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
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "positionY", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Position - Y")));
        echo "
                                            <span class=\"error-span\">";
        // line 108
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
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priority", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Priority")));
        echo "
                                            <span class=\"error-span\">";
        // line 116
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
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "")));
        echo "
                                            <span class=\"error-span\">";
        // line 124
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
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-offset-2 col-md-8\">
                                        <input type=\"submit\" value=\"Update\" class=\"btn btn-primary nextBtn\">

                                        <a href=\"";
        // line 139
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

    // line 159
    public function block_javascripts($context, array $blocks = array())
    {
        // line 160
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bviadmin/js/jquery-validate/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 163
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
                \"bvi_admin_advertisement[image_name]\": {
                    \"required\": true,
                     accept: \"image/jpg,image/jpeg,image/png,image/gif\"
                },
                \"bvi_admin_advertisement[url]\": {
                    \"required\": true,
                    \"url\" : true
                },
                \"bvi_admin_advertisement[position_x]\": {
                    \"required\": true,
                    \"number\": true
                },
                \"bvi_admin_advertisement[position_y]\": {
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
        return "BlogBundle:Advertisement:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 163,  305 => 162,  299 => 160,  296 => 159,  272 => 139,  263 => 133,  249 => 124,  245 => 123,  233 => 116,  229 => 115,  217 => 108,  213 => 107,  200 => 99,  196 => 98,  184 => 91,  180 => 90,  168 => 83,  164 => 82,  150 => 73,  146 => 72,  133 => 64,  129 => 63,  116 => 55,  112 => 54,  98 => 45,  90 => 39,  88 => 38,  69 => 22,  62 => 18,  52 => 10,  49 => 9,  44 => 7,  41 => 6,  34 => 3,  31 => 2,  11 => 1,);
    }
}
