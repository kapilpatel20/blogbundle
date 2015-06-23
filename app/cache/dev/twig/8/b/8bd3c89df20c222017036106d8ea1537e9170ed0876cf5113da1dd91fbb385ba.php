<?php

/* BlogBundle:Common:header.html.twig */
class __TwigTemplate_8bd3c89df20c222017036106d8ea1537e9170ed0876cf5113da1dd91fbb385ba extends Twig_Template
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
        echo "<header id=\"header\" class=\"header-color-white\">
    <div class=\"container\">
        <div class=\"header-inner\">
            <div class=\"branding\">
                <h1 class=\"logo\">
                    <a href=\"index.html\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bviuser/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" width=\"139\" height=\"50\"></a>
                </h1>
            </div>
            <nav id=\"nav\">
                <ul class=\"header-top-nav\">
                    
                    ";
        // line 12
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 13
            echo "                                <li class=\"menu-item-has-children\"><a href=\"";
            echo $this->env->getExtension('routing')->getUrl("user_logout");
            echo "\">Logout</a></li>
                    ";
        } else {
            // line 15
            echo "                    <li class=\"menu-item-has-children\"><a href=\"\">Login</a></li>
                    ";
            // line 17
            echo "                    ";
        }
        // line 18
        echo "                   
                    <li class=\"visible-mobile\">
                        <a href=\"#mobile-nav-wrapper\" data-toggle=\"collapse\"><i class=\"fa fa-bars has-circle\"></i></a>
                    </li>
                </ul>
                <ul id=\"main-nav\" class=\"hidden-mobile\">
                    <li class=\"menu-item-has-children\"><a href=\"\">Home</a></li>
                    
                </ul>
            </nav>
        </div>
    </div>
    <div class=\"mobile-nav-wrapper collapse visible-mobile\" id=\"mobile-nav-wrapper\">
        <ul class=\"mobile-nav\">
            <li class=\"menu-item-has-children\">
                <span class=\"open-subnav\"></span>
                <a href=\"index.html\">Home</a>
                <ul class=\"sub-nav\">
                    <li><a href=\"index.html\">Homepage 1</a></li>
                </ul>
            </li>
            <li class=\"menu-item-has-children\">
                <span class=\"open-subnav\"></span>
                <a href=\"#\">Pages</a>
                <ul class=\"sub-nav\">
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">About US</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"pages-about1.html\">About Us 1</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Services</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"pages-services2.html\">Services 2</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Page Layouts</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"pages-layouts-left-sidebar.html\">Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href=\"pages-faqs.html\">FAQS</a></li>
                </ul>
            </li>
            <li class=\"menu-item-has-children\">
                <span class=\"open-subnav\"></span>
                <a href=\"#\">Shortcodes</a>
                <ul class=\"sub-nav\">
                    <li><a href=\"shortcode-accordion-toggles.html\"><i class=\"fa fa-caret-square-o-right\"></i><span>Accordion & Toggles</span></a></li>
                </ul>
            </li>
            <li class=\"menu-item-has-children\">
                <span class=\"open-subnav\"></span>
                <a href=\"#\">Portfolio</a>
                <ul class=\"sub-nav\">
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Fancy Grid</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"portfolio-fancy-grid-2columns.html\">2 Columns</a></li>
                            <li><a href=\"portfolio-fancy-grid-3columns.html\">3 Columns</a></li>
                            <li><a href=\"portfolio-fancy-grid-4columns.html\">4 Columns</a></li>
                            <li><a href=\"portfolio-fancy-grid-5columns.html\">5 Columns</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Fancy Wide</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"portfolio-fancy-wide-3columns.html\">3 Columns</a></li>
                            <li><a href=\"portfolio-fancy-wide-4columns.html\">4 Columns</a></li>
                            <li><a href=\"portfolio-fancy-wide-5columns.html\">5 Columns</a></li>
                            <li><a href=\"portfolio-fancy-wide-6columns.html\">6 Columns</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Grid</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"portfolio-grid-2columns.html\">2 Columns</a></li>
                            <li><a href=\"portfolio-grid-3columns.html\">3 Columns</a></li>
                            <li><a href=\"portfolio-grid-4columns.html\">4 Columns</a></li>
                            <li><a href=\"portfolio-grid-5columns.html\">5 Columns</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Masonry</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"portfolio-masonry1.html\">Masonry 1</a></li>
                            <li><a href=\"portfolio-masonry2.html\">Masonry 2</a></li>
                            <li><a href=\"portfolio-masonry3.html\">Masonry Text</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Single</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"portfolio-single1.html\">Big Slider</a></li>
                            <li><a href=\"portfolio-single2.html\">Fullwidth Gallery</a></li>
                            <li><a href=\"portfolio-single3.html\">Fullwidth Project</a></li>
                            <li><a href=\"portfolio-single4.html\">Small Gallery</a></li>
                            <li><a href=\"portfolio-single5.html\">Small Slider Project</a></li>
                            <li><a href=\"portfolio-single6.html\">Vertical Gallery</a></li>
                            <li><a href=\"portfolio-single7.html\">Vertical Project</a></li>
                            <li><a href=\"portfolio-single8.html\">Video Project</a></li>
                            <li><a href=\"portfolio-single9.html\">Wide Image Project</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=\"menu-item-has-children\">
                <span class=\"open-subnav\"></span>
                <a href=\"#\">Blog</a>
                <ul class=\"sub-nav\">
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Masonry</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"blog-masonry-2columns.html\">2 Column</a></li>
                            <li><a href=\"blog-masonry-3columns.html\">3 Column</a></li>
                            <li><a href=\"blog-masonry-leftsidebar.html\">Left Sidebar</a></li>
                            <li><a href=\"blog-masonry-rightsidebar.html\">Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Grid</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"blog-grid-2columns.html\">2 Column</a></li>
                            <li><a href=\"blog-grid-3columns.html\">3 Column</a></li>
                            <li><a href=\"blog-grid-4columns.html\">4 Columns</a></li>
                            <li><a href=\"blog-grid-fullwidth.html\">Fullwidth</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Mini</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"blog-mini-fullwidth.html\">Fullwidth</a></li>
                            <li><a href=\"blog-mini-leftsidebar.html\">Left Sidebar</a></li>
                            <li><a href=\"blog-mini-rightsidebar.html\">Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Classic</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"blog-classic-fullwidth.html\">Fullwidth</a></li>
                            <li><a href=\"blog-classic-leftsidebar.html\">Left Sidebar</a></li>
                            <li><a href=\"blog-classic-rightsidebar.html\">Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Timeline</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"blog-timeline-fullwidth.html\">Fullwidth</a></li>
                            <li><a href=\"blog-timeline-leftsidebar.html\">Left Sidebar</a></li>
                            <li><a href=\"blog-timeline-rightsidebar.html\">Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Single Posts</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"blog-singlepost-standard.html\">Standard</a></li>
                            <li><a href=\"blog-singlepost-rightsidebar.html\">Right Sidebar</a></li>
                            <li><a href=\"blog-singlepost-leftsidebar.html\">Left Sidebar</a></li>
                            <li><a href=\"blog-singlepost-audio.html\">Audio</a></li>
                            <li><a href=\"blog-singlepost-blockquote.html\">Blockquote</a></li>
                            <li><a href=\"blog-singlepost-gallery.html\">Gallery</a></li>
                            <li><a href=\"blog-singlepost-video.html\">Video</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=\"menu-item-has-children\">
                <span class=\"open-subnav\"></span>
                <a href=\"#\">Contact</a>
                <ul class=\"sub-nav\">
                    <li><a href=\"pages-contact1.html\">Contact 1</a></li>
                    <li><a href=\"pages-contact2.html\">Contact 2</a></li>
                </ul>
            </li>
            <li class=\"menu-item-has-children\">
                <span class=\"open-subnav\"></span>
                <a href=\"#\">Shop</a>
                <ul class=\"sub-nav\">
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Home Pages</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"woocommerce-homepage1.html\">Homepage 1</a></li>
                            <li><a href=\"woocommerce-homepage2.html\">Homepage 2</a></li>
                            <li><a href=\"woocommerce-homepage3.html\">Homepage 3</a></li>
                            <li><a href=\"woocommerce-homepage4.html\">Homepage 4</a></li>
                            <li><a href=\"woocommerce-homepage5.html\">Homepage 5</a></li>
                            <li><a href=\"woocommerce-homepage6.html\">Homepage 6</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Category Pages</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"woocommerce-category-grid.html\">Grid Style</a></li>
                            <li><a href=\"woocommerce-category-list.html\">List Style</a></li>
                            <li><a href=\"woocommerce-category-banner.html\">With Banner</a></li>
                            <li><a href=\"woocommerce-category-big-header.html\">Big Header</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Product Pages</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"woocommerce-product-detailed.html\">Product Detailed</a></li>
                            <li><a href=\"woocommerce-product-sidebar.html\">Product Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href=\"woocommerce-product-quickview.html\">Quick View Popup</a></li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Cart Pages</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"woocommerce-shopping-cart.html\">Shopping Cart</a></li>
                            <li><a href=\"woocommerce-checkout.html\">Checkout</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <span class=\"open-subnav\"></span>
                        <a href=\"#\">Page Layouts</a>
                        <ul class=\"sub-nav\">
                            <li><a href=\"woocommerce-layout-fullwidth.html\">Fullwidth</a></li>
                            <li><a href=\"woocommerce-layout-sidebar.html\">Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href=\"woocommerce-dashboard.html\">Dashboard</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Common:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  46 => 17,  43 => 15,  37 => 13,  35 => 12,  26 => 6,  19 => 1,);
    }
}
