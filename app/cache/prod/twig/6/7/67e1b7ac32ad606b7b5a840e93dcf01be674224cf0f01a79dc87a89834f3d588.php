<?php

/* BlogBundle:Advertisement:index.html.twig */
class __TwigTemplate_67e1b7ac32ad606b7b5a840e93dcf01be674224cf0f01a79dc87a89834f3d588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BviAdminBundle::layout.html.twig", "BlogBundle:Advertisement:index.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<!-- EXPORT TABLES -->
<div class=\"row\">
    
    <div class=\"col-sm-12\">
        <div class=\"page-header\">
            <!-- BREADCRUMBS -->
            <ul class=\"breadcrumb\">
                <li>
                    <i class=\"fa fa-home\"></i>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">Dashboard</a>
                </li>
                <li>
                    List Advertisement
                </li>
            </ul>
            <!-- /BREADCRUMBS -->
            <div class=\"clearfix\">
                <h3 class=\"content-title pull-left\">List Advertisement</h3>
            </div>
            <div class=\"description\"></div>
        </div>
    </div>
    
    
    <div class=\"col-md-12\">
        <div class=\"\" id=\"flashMsg\"></div>
        ";
        // line 30
        $this->loadTemplate("BviAdminBundle::flashMessage.html.twig", "BlogBundle:Advertisement:index.html.twig", 30)->display($context);
        // line 31
        echo "        <span class=\"pull-right\" style=\"margin-bottom: 10px;\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_advertisement_add");
        echo "\" class=\"btn btn-primary\">Add Advertisement</a></span>
    </div>
    
    <div class=\"clearfix\"></div>
    <div class=\"col-md-12\">
        <!-- BOX -->
        <div class=\"box border grey\">
            <div class=\"box-title\">
                <h4><i class=\"fa fa-table\"></i>Advertisement List</h4>
            </div>
            
            <div class=\"box-body\">
                <table id=\"advertisementTable\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"datatable table table-striped table-bordered table-hover\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Delay Between Advertise</th>
                            <th>Priority</th>
                            <th>Url</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                </table>
            </div>
        </div>
        <!-- /BOX -->
    </div>
</div>
<!-- /EXPORT TABLES -->

";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script type=\"text/javascript\">
    
    \$(document).ready(function() {
        
        deleteAjaxSource = '";
        // line 76
        echo $this->env->getExtension('routing')->getPath("admin_advertisement_delete");
        echo "';
        
        dTable = \$('#advertisementTable').dataTable({
            \"oLanguage\": {
                \"sLengthMenu\": \"Display _MENU_ Records\",
                \"sZeroRecords\": \"<center>No Record Found!</center>\",
                \"sInfo\": \"Showing _START_ to _END_ of _TOTAL_ Records\",
                \"sInfoEmpty\": \"Showing 0 to 0 of 0 records\",
                \"sInfoFiltered\": \"(filtered from _MAX_ total records)\"
            },
            responsive: true,
            bJQueryUI: false,
            bProcessing: true,
            bServerSide: true,
            bFilter: true,
            //multipleSelection: true,
            iDisplayLength: 10,
            sAjaxSource: '";
        // line 93
        echo $this->env->getExtension('routing')->getPath("admin_advertisement_grid_list");
        echo "',
            aoColumns: [
                {\"sName\": \"Id\", \"bSearchable\": false, \"bSortable\": true},
                {\"sName\": \"Name\", \"bSearchable\": true, \"bSortable\": true},
                {\"sName\": \"Type\", \"bSearchable\": true, \"bSortable\": true},
                {\"sName\": \"Frequency\", \"bSearchable\": false, \"bSortable\": true},
                {\"sName\": \"Priority\", \"bSearchable\": false, \"bSortable\": true},
                {\"sName\": \"Url\", \"bSortable\" : false},
                {\"sName\": \"Created At\", \"bSearchable\": false, \"bSortable\": true},
                {\"sName\": \"Status\", \"bSearchable\": true, \"bSortable\": true},
                {\"sName\": \"Image\", \"bSortable\": false},
                {\"sName\": \"Id\", \"bSearchable\": false, \"bSortable\": false}
            ],
            aoColumnDefs: [
                {
                    \"mRender\": function(data, type, row) {

                        var headTitle = \"Admin Delete\";
                        var msg = 'Are you sure you want to delete this advertise?';
                        
                        var returnData = '<table><tr>';
                           
                            var editUrl = '";
        // line 115
        echo $this->env->getExtension('routing')->getPath("admin_advertisement_edit", array("id" => "advertisement_id"));
        echo "';
                            var editPath = editUrl.replace(\"advertisement_id\", row[0]);
                            
                            var deleteUrl = '";
        // line 118
        echo $this->env->getExtension('routing')->getPath("admin_advertisement_delete", array("id" => "advertisement_id"));
        echo "';
                            var finalPath = deleteUrl.replace(\"advertisement_id\", row[0]);
                            
                             returnData +='<td><a href=\"'+editPath+'\" class=\"btn btn-xs btn-info\"\" title=\"Edit\"><span class=\"fa fa-edit\"></span> Edit</a></td>';
                             returnData +='<td><a href=\"javascript:void(0)\" class=\"btn btn-xs btn-danger\" title=\"Delete\" onclick=\"return deleterecord(' + row[9] + ',' + \"'\" + headTitle + \"'\" + ',' + \"'\" + msg + \"'\" +')\"><span class=\"fa fa-times\"></span> Delete</a></td>';
                         
                        returnData += \"</tr></table>\";
                        return returnData;
                     
                    },
                    \"aTargets\": [9]
                }
            ],
            aaSorting: [[0, 'desc']],
            
        });
        
        \$(\"input\").addClass(\"form-control\");
        \$(\"select\").addClass(\"form-control\");
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Advertisement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 118,  165 => 115,  140 => 93,  120 => 76,  110 => 70,  107 => 69,  65 => 31,  63 => 30,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }
}
