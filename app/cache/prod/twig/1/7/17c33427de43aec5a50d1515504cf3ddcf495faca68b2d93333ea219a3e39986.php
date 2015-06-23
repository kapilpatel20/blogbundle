<?php

/* BlogBundle:Blog:index.html.twig */
class __TwigTemplate_17c33427de43aec5a50d1515504cf3ddcf495faca68b2d93333ea219a3e39986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Blog:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 53
        echo "
";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("BlogBundle::flashMessage.html.twig", "BlogBundle:Blog:index.html.twig", 4)->display($context);
        // line 5
        echo "


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 h3\">
            Blog Listing 
        </div>
        <div class=\"col-md-4\" style='margin-top: 20px'><a class=\"pull-right\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-10\">
        <a class=\"btn btn-primary pull-right\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("blog_new");
        echo "\">Add New Blog</a>
        </div>
    </div>
    <div class=\"row\">
        
        <div class=\"col-md-10\">
          <table class=\"table\">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objBlog"]) ? $context["objBlog"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 35
            echo "                    <tr>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "Description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo (($this->getAttribute($context["blog"], "status", array())) ? ("Active") : ("Inactive"));
            echo "</td>
                        <td>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                            |
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_delete", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
          </table>
        </div>
      </div>
</div>
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 57,  130 => 56,  121 => 47,  111 => 43,  106 => 41,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  86 => 35,  82 => 34,  62 => 17,  55 => 13,  45 => 5,  43 => 4,  40 => 3,  35 => 53,  33 => 3,  30 => 2,  11 => 1,);
    }
}
