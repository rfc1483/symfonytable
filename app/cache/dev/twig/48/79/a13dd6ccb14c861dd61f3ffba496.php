<?php

/* AcmeTableBundle::layout.html.twig */
class __TwigTemplate_4879a13dd6ccb14c861dd61f3ffba496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetable/css/demo.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
        <script type=\"text/javascript\" src=\" ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetable/js/jquery-1.6.1.js"), "html");
        echo "\"></script> 
        <script type=\"text/javascript\" src=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetable/js/jquery.tablesorter.js"), "html");
        echo "\"></script> 
        <script type=\"text/javascript\">
            \$(document).ready(function() 
            { 
                \$(\"#tablesorter-demo\").tablesorter({sortList:[[0,0]], widgets: ['zebra']});
                \$(\"#options\").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
            } 
            
            
        ); 
        </script>
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetable/css/style.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
            </div>

            ";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false)) {
            // line 29
            echo "            <div class=\"flash-message\">
                <em>Notice</em>: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "
            </div>
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        $this->displayBlock('content_header', $context, $blocks);
        // line 43
        echo "
            <div class=\"symfony-content\">
                ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "            </div>

            ";
        // line 49
        if (twig_test_defined("code", $context)) {
            // line 50
            echo "            <h2>Code behind this page</h2>
            <div class=\"symfony-content\">";
            // line 51
            echo $this->getContext($context, 'code');
            echo "</div>
            ";
        }
        // line 53
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 36
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 37
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html");
        echo "\">Home</a></li>
                    ";
    }

    // line 34
    public function block_content_header($context, array $blocks = array())
    {
        // line 35
        echo "            <ul id=\"menu\">
                    ";
        // line 36
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 39
        echo "            </ul>

            <div style=\"clear: both\"></div>
            ";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AcmeTableBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
